<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>Gallary</title>
  <!--Google Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@0;1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

  <link rel="icon" type="image/png" sizes="32x32" href="images/fv/favicon-32x32.png" />


  <!--Font Owsome-->
  <script src="https://kit.fontawesome.com/4575ad6c94.js" crossorigin="anonymous"></script>

  <!--Bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!--Internal CSS-->
  <link id="MyStyleSheet" href="Contents/Layout.css" rel="stylesheet" type="text/css" />
  <link href="Contents/LayoutEN.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/styles.css">

  <!--JS-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
  <!--Internal JS-->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>


</head>

<body>

  <header>

    <div class="container-fluid px-xl-5 py-3 d-md-flex align-items-center justify-content-between">

      <div class="headerLeft d-flex p-1 align-items-center">
        <img src="images/logo_MH.png" alt="Government Polytechnic Malvan" />
        <div class="logo px-2">
          <a href="index.php">
            Government Polytechnic Malvan<br />
            <span>DTE Code : 3010 | MSBTE Code : 0117</span>
          </a>
        </div>
      </div>
      <!--NavBar-->
      <nav class="navbar navbar-expand-xl">
        <div class="container-fluid">
          <button class="navbar-toggler bg-theme" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            Menu <i class="bi bi-caret-down-fill"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div id="HeaderMain1_menu_smoothmenu1">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item nv-it">
                  <a class="nav-link nv-lk " href="index.php">Home </a>
                </li>
                <li class="nav-item nv-it">
                  <a class="nav-link nv-lk " href="institute.php">Institute</a>
                </li>
                <li class="nav-item nv-it">
                  <a class="nav-link nv-lk" href="students.php">Student</a>
                </li>
                <li class="nav-item dropdown nv-it">
                  <a class="nav-link nv-lk dropdown-toggle " href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Department
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="cs.php">Computer Engineering</a>
                    <a class="dropdown-item" href="ece.php">Electronics & Communication Engineering</a>
                    <a class="dropdown-item" href="elc.php">Electrical Engineering</a>
                    <a class="dropdown-item" href="mech.php">Mechanical Engineering</a>
                    <a class="dropdown-item" href="civil.php">Civil Engineering</a>
                    <a class="dropdown-item" href="ftech.php">Food Technology</a>
                    <a class="dropdown-item" href="scht.php">Sciences & Humanities</a>
                    <a class="dropdown-item" href="apmech.php">Applied Mechanics</a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Allied Depatments</a>
                    <a class="dropdown-item" href="department_administration.php">Department Login</a>

                  </div>
                </li>
                <li class="nav-item nv-it">
                  <a class="nav-link  nv-lk" href="aboutus.php">About Us</a>
                </li>
              <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a class="link-all"
                  href="gallary.php">Gallary</a></li>
                <li class="nav-item nv-it">
                  <a class="nav-link  nv-lk" href="admission.php">Admission</a>
                </li>
                <li class="nav-item nv-it">
                  <a class="nav-link  nv-lk" href="contact.php">Contact</a>
                </li>
              </ul>

            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!---Navbar End--->

  <div style="text-align:center; margin-top: 3%;" class="container">


      <h2 style=" text-decoration: underline;margin-top: 5%;font-family: 'Fredoka One', cursive; font-size:2.8rem;"
        class="page-sub-hd">Gallary & Events</h2>

    </div>

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

    <!--Wave section-->

    <section id="wave-sec">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        x="0px" y="0px" viewBox="0 0 1366 200" style="enable-background:new 0 0 1366 200;" xml:space="preserve">
        <style type="text/css">
          .st0 {
            opacity: 0.57;
            fill: url(#SVGID_1_);
            enable-background: new;
          }

          .st1 {
            opacity: 0.38;
            fill: url(#SVGID_2_);
            enable-background: new;
          }

          .st2 {
            opacity: 0.46;
            fill: url(#SVGID_3_);
            enable-background: new;
          }

          .st3 {
            fill: url(#SVGID_4_);
          }
        </style>
        <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="-0.2406" y1="30.5504" x2="1365.7594"
          y2="30.5504" gradientTransform="matrix(1 0 0 -1 -9.401608e-03 148.0043)">
          <stop offset="0" style="stop-color:#08AEEA" />
          <stop offset="1" style="stop-color:#2AF598" />
        </linearGradient>
        <path class="st0" d="M-0.25,107.42c99.53-49.82,242.38-99.53,397-66c109.03,23.64,116.64,65.4,223,83
	c179.31,29.67,252.1-73.39,448-77c71.09-1.31,173.15,10.21,298,72c0,28.33,0,56.67,0,85c-455.33,0-910.67,0-1366,0
	C-0.25,172.08-0.25,139.75-0.25,107.42z" />
        <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="0.2594" y1="-13.533" x2="1366.2594"
          y2="-13.533" gradientTransform="matrix(1 0 0 -1 -9.401608e-03 148.0043)">
          <stop offset="0" style="stop-color:#08AEEA" />
          <stop offset="1" style="stop-color:#2AF598" />
        </linearGradient>
        <path class="st1" d="M0.25,197.54L0.25,197.54L0.25,197.54L0.25,197.54c2.06-0.78,2.14-0.81,2.29-0.87
	c186.11-69.94,387.71-77.86,387.71-77.86c285.33-11.21,394.65,91.36,681,70.11c126.48-9.39,228.82-38.57,295-61.5
	c0,25.83,0,51.66,0,77.49c-218,0-436,0-654,0c-72,0-144,0-216,0c-36,0-72,0-108,0c-55.67,0-111.33-0.13-167,0
	c-66.13,0.15-69.07,0.38-88,0C76.25,203.78,30.11,200.28,0.25,197.54z" />
        <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="0.2594" y1="25.0811" x2="1366.2594"
          y2="25.0811" gradientTransform="matrix(1 0 0 -1 -9.401608e-03 148.0043)">
          <stop offset="0" style="stop-color:#08AEEA" />
          <stop offset="1" style="stop-color:#2AF598" />
        </linearGradient>
        <path class="st2" d="M0.25,40.92c80.77,44.31,207.3,99.66,366,108c191.8,10.08,286.85-56.06,474-75c120.65-12.21,298.63-6.73,526,86
	c0,15,0,30,0,45c-455.33,0-910.67,0-1366,0C0.25,150.25,0.25,95.58,0.25,40.92z" />
        <linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="0.2594" y1="12.5746" x2="1366.2594"
          y2="12.5746" gradientTransform="matrix(1 0 0 -1 -9.401608e-03 148.0043)">
          <stop offset="0" style="stop-color:#08AEEA" />
          <stop offset="0.6517" style="stop-color:#1FDFB1" />
          <stop offset="1" style="stop-color:#2AF598" />
        </linearGradient>
        <path class="st3" d="M0.25,203.92c223.22-101.36,396.34-107.05,514-93c179.19,21.4,257.4,91.9,430,93
	c179.76,1.15,326.48-73.84,422-137c0,45.67,0,91.33,0,137C910.91,203.92,455.58,203.92,0.25,203.92z" />
      </svg>

    </section>

    <!--Footer Starts-->
    <section id="footer">

      <div style=" margin-top: 3%;" class="agile-footer">

        <div class="container">
          <div class="row">

            <div class="col-md-4 abt-us-ftr">
              <h3>About Us</h3>
              <p style="text-align:justify;">Government Polytechnic, Malvan was established in 1985. This Institute
                imparts technical education at Diploma and is known for its excellence at State level and National
                level. At present, the Institute offers Diploma programmes in
                Civil, Mechanical, Electrical, Electronics & communication, Computer and Food Technology as unique
                course in Maharashtra.</p>
            </div>

            <div class="col-md-4 cont-info-ftr">
              <h3 style="text-align:center" class="ctifo">Contact Info</h3>
              <ul>
                <li><i class="fas fa-map-marked-alt"></i> A/P Kumbharmath,Malvan <span>Sindhudurg.</span></li>
                <li><i class="fas fa-envelope"></i> <a class="link-all"
                    href="mailto:gpmalvan3010@gmail.com">gpmalvan3010@gmail.com</a></li>
                <li><i class="fas fa-phone"></i> 02365 252223</li>
                <li style="margin-top:8%; font-size:1.2em;">Quick Link</li>
              </ul>
              <div style="text-align:center; margin-bottom:10%;" class="container alm-cont">
                <a href="alumni.html" target="_blank">
                  <img style="width:60%" src="images/alumni.png" alt="link to alumni portal">
                </a>
              </div>

            </div>

            <div class="col-md-4 navigation-ftr">
              <h3 style="text-align:center">Navigation</h3>
              <ul class="ftr-ul">
                <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a class="link-all"
                    href="">Home</a></li>
                <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a class="link-all"
                    href="">Institute</a></li>
                <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a class="link-all"
                    href="">Sudent</a></li>
                <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a class="link-all"
                    href="">Departments</a></li>
                <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a class="link-all"
                    href="">Acadamics</a></li>
                <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a class="link-all"
                    href="">Gallary</a></li>
                <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a class="link-all"
                    href="">Admission</a></li>
                <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a class="link-all"
                    href="">Contact Us</a></li>
              </ul>
            </div>

          </div>

        </div>

        <div style="margin-top: 3%;" class="container copyright-social">
          <div class="row">


            <div class="col-md-6">
              <div class="copright-devloper">
                <p>&copy; <script>
                    document.write(new Date().getFullYear())
                  </script> GPM All rights reserved | Design by Department Of Computer Engineering </p>
              </div>
            </div>


            <div class="col-md-6 bot-soc-ico">
              <div class="template-demo"> <button type="button" class="btn btn-social-icon btn-facebook btn-rounded"><i
                    class="fa fa-facebook"></i></button>
                <button type="button" class="btn btn-social-icon btn-youtube btn-rounded"><i
                    class="fa fa-youtube"></i></button>
                <button type="button" class="btn btn-social-icon btn-twitter btn-rounded"><i
                    class="fa fa-twitter"></i></button>
                <button type="button" class="btn btn-social-icon btn-linkedin btn-rounded"><i
                    class="fa fa-linkedin"></i></button>
                <button type="button" class="btn btn-social-icon btn-instagram btn-rounded"><i
                    class="fa fa-instagram"></i></button>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section>
</body>

</html>