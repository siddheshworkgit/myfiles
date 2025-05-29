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

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Image Gallery</title>
<style>
  body {
    font-family: Arial, sans-serif;
  }

  .folder {
    margin: 20px;
    display: inline-block;
    cursor: pointer;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    text-align: center;
  }

  .folder img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 5px;
  }

  .folder-name {
    margin-top: 10px;
    font-weight: bold;
  }

  .delete-btn {
    display: block;
    margin-top: 10px;
    padding: 5px 10px;
    background-color: red;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .delete-btn:hover {
    background-color: darkred;
  }

  .modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.9);
  }

  .modal-content {
    margin: auto;
    display: block;
    max-width: 80%;
    max-height: 80%;
  }

  .close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
    cursor: pointer;
  }

  .close:hover,
  .close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
  }

  .arrow {
    position: absolute;
    top: 50%;
    font-size: 40px;
    color: #f1f1f1;
    cursor: pointer;
    user-select: none;
  }

  .arrow-left {
    left: 0;
    margin-left: 10px;
  }

  .arrow-right {
    right: 0;
    margin-right: 10px;
  }

  .arrow:hover {
    color: #bbb;
  }
</style>
</head>
<body>

<h1>Upload Images</h1>
<form id="uploadForm" enctype="multipart/form-data" method="POST">
  <label for="batchName">Batch Name:</label>
  <input type="text" id="batchName" name="batch_name" required><br><br>
  <label for="files">Choose images:</label>
  <input type="file" id="files" name="files[]" multiple required><br><br>
  <button type="submit">Upload</button>
</form>

<?php if (isset($message)): ?>
<p><?php echo htmlspecialchars($message); ?></p>
<?php endif; ?>

<h1>Gallery</h1>
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

</body>
</html>
