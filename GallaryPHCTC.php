<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Image Gallery</title>
<!-- Include Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
  .folder {
    margin: 10px;
    text-align: center;
  }

  .folder img {
    width: 150px; /* Increased thumbnail size */
    height: 150px; /* Increased thumbnail size */
    object-fit: cover;
    border-radius: 5px;
  }

  .folder-name {
    margin-top: 10px;
    font-weight: bold;
    font-size: 1.25rem; /* Increased font size */
    line-height: 1.2;
    color: #333; /* Slightly darker color for better readability */
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
    display: block;
    max-width: 90vw; /* Limit width to 90% of viewport width */
    max-height: 80vh; /* Limit height to 80% of viewport height */
    margin: auto;
    object-fit: contain; /* Maintain aspect ratio */
    border-radius: 5px;
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

<div class="container mt-4">
  <div class="row folders">
    <!-- Folders will be dynamically added here -->
  </div>
</div>

<div id="imageModal" class="modal">
  <span class="close">&times;</span>
  <span class="arrow arrow-left">&#10094;</span>
  <span class="arrow arrow-right">&#10095;</span>
  <img class="modal-content" id="modalImg">
</div>

<!-- Include Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  fetch('get_batches.php')
    .then(response => response.json())
    .then(data => {
      const foldersContainer = document.querySelector('.folders');
      
      // Reverse the data array to show the last uploaded folder first
      const reversedData = Object.keys(data).reverse();

      for (const batchId of reversedData) {
        const batch = data[batchId];

        const colDiv = document.createElement('div');
        colDiv.classList.add('col-md-4'); // Changed to 4 to fit 3 items per row

        const folderDiv = document.createElement('div');
        folderDiv.classList.add('folder');

        const folderImg = document.createElement('img');
        folderImg.src = 'uploads/' + batch.thumbnail; // Use the random image as thumbnail

        const folderLabel = document.createElement('div');
        folderLabel.classList.add('folder-name');
        folderLabel.textContent = batch.batch_name;

        folderDiv.appendChild(folderImg);
        folderDiv.appendChild(folderLabel);
        folderDiv.addEventListener('click', function() {
          openFolder(batch.images);
        });

        colDiv.appendChild(folderDiv);
        foldersContainer.appendChild(colDiv);
      }
    })
    .catch(error => console.error('Error fetching batches:', error));

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

    // Add event listener to close modal when clicking outside the image
    modal.addEventListener('click', function(event) {
      if (event.target === modal) {
        modal.style.display = 'none';
      }
    });

    showImage(currentIndex);
  }
});
</script>

</body>
</html>
