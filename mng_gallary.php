<?php
session_start();
if (!isset($_SESSION['loggedinwbm']) || $_SESSION['loggedinwbm'] != true) {
    header("location: wbmlogin.php");
    exit;
}

?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'partials/_dbconnect.php';


// Handle file upload
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['batch_name']) && isset($_FILES['files'])) {
    $batch_name = $conn->real_escape_string($_POST['batch_name']);
    $upload_dir = 'uploads/';

    // Check if the batch name already exists
    $sql = "SELECT id FROM batches WHERE batch_name = '$batch_name'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $message = "Batch name already exists.";
    } else {
        // Create a new batch entry
        $sql = "INSERT INTO batches (batch_name) VALUES ('$batch_name')";
        if ($conn->query($sql) === TRUE) {
            $batch_id = $conn->insert_id;
            $files = $_FILES['files'];
            $file_count = count($files['name']);
            $upload_success = true;

            for ($i = 0; $i < $file_count; $i++) {
                $tmp_name = $files['tmp_name'][$i];
                $filename = basename($files['name'][$i]);
                $destination = $upload_dir . $filename;

                if (move_uploaded_file($tmp_name, $destination)) {
                    $sql = "INSERT INTO images (batch_id, filename) VALUES ('$batch_id', '$filename')";
                    if (!$conn->query($sql)) {
                        $upload_success = false;
                        break;
                    }
                } else {
                    $upload_success = false;
                    break;
                }
            }

            $message = $upload_success ? "Files uploaded successfully." : "Failed to upload some files.";
        } else {
            $message = "Failed to create batch.";
        }
    }
}

// Handle delete request
if (isset($_GET['delete'])) {
    $batch_id = intval($_GET['delete']);
    
    // Delete images associated with the batch
    $sql = "SELECT filename FROM images WHERE batch_id = $batch_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $file_path = 'uploads/' . $row['filename'];
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }
    }

    // Delete batch entry
    $sql = "DELETE FROM batches WHERE id = $batch_id";
    if ($conn->query($sql) === TRUE) {
        $sql = "DELETE FROM images WHERE batch_id = $batch_id";
        $conn->query($sql); // Delete associated images
        $message = "Batch deleted successfully.";
    } else {
        $message = "Failed to delete batch.";
    }
}

$conn->close();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Image Gallery</title>
    <link rel="icon" type="image/png" sizes="32x32" href="images/fv/favicon-32x32.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/gallery.css">
    <nav class="navbar navbar-dark bg-dark">
  <a style="color: white;" class="navbar-brand">Government Polytechnic Malvan</a>
  <form class="form-inline">
    <a class="btn btn-danger my-2 my-sm-0" href="wbm_logout.php">Logout</a>
  </form>
</nav>

</head>
<body>

<div class="container-fluid">
  <div class="px-lg-5">

    <!-- For demo purpose -->
    <div class="row py-5">
      <div class="col-lg-12 mx-auto">
        <div class="text-white p-5 shadow-sm rounded banner">
          <h1 class="display-4">Manage Image Gallery</h1>
          <p class="lead">Upload Images</p>
          <form id="uploadForm" enctype="multipart/form-data" method="POST">
  <label for="batchName">Title Lines:</label>
  <input class="form-control" type="text" id="batchName" name="batch_name" required><br><br>
  <label for="files">Choose images: (You may upload multiple images by selecting all at same time.)</label>
  <input class="form-control" type="file" id="files" name="files[]" multiple required><br><br>
  <button class="btn btn-success" type="submit">Upload</button>
</form>
        </div>
      </div>
    </div>
    <!-- End -->

    <div class="row">
    <?php if (isset($message)): ?>
<p><?php echo htmlspecialchars($message); ?></p>
<?php endif; ?>

<div id="gallery" class="folders">
  <!-- Folders will be dynamically added here by JavaScript -->
</div>

<div id="imageModal" class="modal">
  <span class="close">&times;</span>
  <span class="arrow arrow-left">&#10094;</span>
  <span class="arrow arrow-right">&#10095;</span>
  <img class="modal-content" id="modalImg">
</div>

<script>
function fetchImages() {
  fetch('path_to_your_image_fetching_script.php')
    .then(response => response.json())
    .then(images => {
      const gallery = document.getElementById('gallery');
      gallery.innerHTML = ''; // Clear existing content

      let batches = {};
      
      images.forEach(image => {
        if (!batches[image.batch_id]) {
          batches[image.batch_id] = {
            batch_name: image.batch_name,
            images: []
          };
        }
        batches[image.batch_id].images.push(image.filename);
      });

      for (const [batchId, batch] of Object.entries(batches)) {
        const folderDiv = document.createElement('div');
        folderDiv.className = 'folder';
        folderDiv.onclick = () => openFolder(batch.images);

        const img = document.createElement('img');
        img.src = 'uploads/' + batch.images[0];
        img.alt = batch.batch_name;

        const folderName = document.createElement('div');
        folderName.className = 'folder-name';
        folderName.textContent = batch.batch_name;

        const deleteBtn = document.createElement('a');
        deleteBtn.href = `?delete=${batchId}`;
        deleteBtn.className = 'delete-btn';
        deleteBtn.textContent = 'Delete';
        deleteBtn.onclick = () => confirm('Are you sure you want to delete this batch?');

        folderDiv.appendChild(img);
        folderDiv.appendChild(folderName);
        folderDiv.appendChild(deleteBtn);

        gallery.appendChild(folderDiv);
      }
    })
    .catch(error => console.error('Error fetching images:', error));
}

function openFolder(images) {
  let currentIndex = 0;
  const modal = document.getElementById('imageModal');
  const modalImg = document.getElementById('modalImg');

  function showImage(index) {
    modalImg.src = 'uploads/' + images[index];
    currentIndex = index;
    modal.style.display = 'block';
  }

  document.querySelector('.arrow-left').addEventListener('click', function() {
    if (currentIndex > 0) {
      showImage(currentIndex - 1);
    }
  });

  document.querySelector('.arrow-right').addEventListener('click', function() {
    if (currentIndex < images.length - 1) {
      showImage(currentIndex + 1);
    }
  });

  document.querySelector('.close').addEventListener('click', function() {
    modal.style.display = 'none';
  });

  showImage(currentIndex);
}

// Fetch images when the page loads
window.onload = fetchImages;
</script>
    </div>
  </div>
</div>
<footer class="bg-body-tertiary text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
  
    <p>&copy; <script>document.write(new Date().getFullYear())</script> GPM All rights reserved | Design by Department Of Computer Engineering</p>
  </div>
  <!-- Copyright -->
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>