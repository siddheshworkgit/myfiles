<?php  include 'partials/_dbconnect.php';

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>Training & Placement</title>
  <!--Google Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@0;1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

  <link rel="icon" type="image/png" sizes="32x32" href="images/fv/favicon-32x32.png" />

  <!--Font Owsome-->
  <script src="https://kit.fontawesome.com/4575ad6c94.js" crossorigin="anonymous"></script>

  <link rel="icon" type="image/png" sizes="32x32" href="images/fv/favicon-32x32.png" />


  <!--Bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!--Internal CSS-->
  <link id="MyStyleSheet" href="Contents/Layout.css" rel="stylesheet" type="text/css" />
  <link href="Contents/LayoutEN.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/styles.css">

  <!--JS-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <!--Internal JS-->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>


</head>

<body>

  <header>

    <div class="container-fluid px-xl-5 py-3 d-md-flex align-items-center justify-content-between">

      <div class="headerLeft d-flex p-1 align-items-center">
        <img src="images/logo_MH.png" alt="Government Polytechnic Malvan" />
        <div class="logo px-2">
          <a href="/home/index">
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
                  <a class="nav-link nv-lk " href="index.php">Home <span class="sr-only">(current)</span></a>
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
                    <a class="dropdown-item" href="etc.html">Electronics & Communication Engineering</a>
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

  <section style="margin-top: 5%;" id="title">

    <!--Heading-->
    <div class="container landing-screen-int">
      <h1 style=" font-weight: 900; font-family: 'Montserrat', sans-serif; font-size:3rem;" class="heading">Government Polytechnic</h1>
      <h1 style=" font-weight: 900; font-family: 'Montserrat', sans-serif; font-size:3rem;" class="heading">Malvan</h1>
      <h3 style="margin-top: 3%;font-family: 'Ubuntu', sans-serif; font-size:1.3rem;" class="sub-heading">Government Institute for diploma engineering programs</h3>

      <h2 style=" text-decoration: underline;margin-top: 5%;font-family: 'Fredoka One', cursive; font-size:2.8rem;" class="page-sub-hd">Training & Placement</h2>

    </div>
    <div style="text-align:center; background-image: linear-gradient( 109.6deg,  rgba(255,219,47,1) 11.2%, rgba(244,253,0,1) 100.2% );" class="container-fluid">
      <img style="width:40%;" src="images/tp.png" alt="">
    </div>

    <div style="margin-left:8%; margin-bottom:2%;margin-top:3%; font-family: 'Montserrat', sans-serif;" class="trplcptxt">
      <h2>Overview</h2>
    </div>
    <div style="text-align:justify;" class="container">
      <p>Government Polytechnic, Malvan Dist. Sindhudurg, is one of the premier institutes in Kokan Region
        working under Directorate of Technical Education (DTE), Maharashtra and is recognized by All India
        Council for Technical Education (AICTE), New Delhi which offers Diploma courses in Mechanical
        Engineering, Civil Engineering, Electrical Engineering, Electronic Engineering, Computer Engineering
        and Food Technology. </p>
      <p>Student passed out from GP Malvan have contributed to the incredible pace of India's growth over the
        last couple of decades. The access to best in class academics and facilities at GP Malvan provides our
        students the tools to excel in this highly competitive and fast advancing world. Training and Placement
        Cell has been striving continuously to match the students with their dream jobs, resulting in a win-win
        situtation for the student and the hiring organization. </p>
      <p>The Training and Placement Cell act as the nodal point of contact for companies seeking to establish a
        fruitful relationship with the institute and conducting the campus recruitment drives at the Institute.
      </p>
    </div>
    <div style="margin-left:8%; margin-bottom:2%;margin-top:3%; font-family: 'Montserrat', sans-serif;" class="trplcptxt">
      <h2>Vision </h2>
    </div>
    <div style="text-align:justify;" class="container">
      <p>To provide technically qualified, skilled & competent human resource to industries with core
        values of – ‘Sincerity’, ‘Hard Work’ and ‘Ethics’. </p>
    </div>
    <div style="margin-left:8%; margin-bottom:2%;margin-top:3%; font-family: 'Montserrat', sans-serif;" class="trplcptxt">
      <h2>Mission</h2>
    </div>
    <div class="container">
      <ul style="color:black;">
        <li>To assist students in obtaining placement in reputed companies. </li>
        <li>To act as a link between students, alumni, and the employment community. </li>
        <li>To Maintain and regularly updating the database of students, companies and establishing
          strategic links for campus recruitments. </li>
        <li>To gather information about job fairs and all relevant recruitment advertisements. </li>
        <li>Identifying the needs and expectations of the companies to assist them in recruiting most
          suitable candidates. </li>
      </ul>
    </div>

    <div style="margin-left:8%; margin-bottom:2%;margin-top:3%; font-family: 'Montserrat', sans-serif;" class="trplcptxt">
      <h2>Objective</h2>
    </div>
    <div class="container">
      <p>Training and Placement Cell is to guide students to choose right career and to give knowledge,
        skill, and aptitude and meet the manpower requirements of the Industry.</p>
    </div>
    <!--Previous Year Data-->

    <div style="margin-left:8%; margin-bottom:2%;margin-top:3%; font-family: 'Montserrat', sans-serif;" class="trplcptxt">
      <h2>Previous Year Placement Records</h2>
    </div>
    <div class="container">
      <a href="" target="_blank" style="color: white;" class="btn btn-warning">Click here to view records</a>
    </div>


    <div style="margin-bottom:2%;margin-left:8%; margin-top:3%;font-family: 'Montserrat', sans-serif;" class="trplcptxt">
      <h2>Training & Placement Officer</h2>
    </div>
    <div style="text-align:center; padding-left: 15%;padding-right:15%;" class="container">
                                      <?php
                                        // Get students rows
                                        $strSQL = "SELECT * FROM tpo WHERE sno = '1' ";

                                        $rs = mysqli_query($conn, $strSQL);

                                        while ($row = mysqli_fetch_array($rs)) {
                                            //Display Logged user info
                                            $result = $conn->query("SELECT * FROM tpo WHERE sno = '1' ");
                                        }
                                        while ($row = $result->fetch_assoc()) {

                                        ?>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Name :</th>
            <th><?php echo $row['name']; ?></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Designation</td>
            <td>Training & Placement Officer</td>
          </tr>
          <tr>
            <td>Office No.</td>
            <td><?php echo $row['contact']; ?></td>
          </tr>
          <tr>
            <td>E-mail</td>
            <td><?php echo $row['email']; ?></td>
          </tr>
        </tbody>
      </table>
      <?php
                                        }

                                        ?>
    </div>


    <!--Our Recuters-->

      <div style="margin-bottom:2%;margin-left:8%; margin-top:3%;font-family: 'Montserrat', sans-serif;" class="trplcptxt">
        <h2>Our Recruiting Partners</h2>
      </div>

    <section id="wave-sec">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1366 200" style="enable-background:new 0 0 1366 200;" xml:space="preserve">
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
        <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="-0.2406" y1="30.5504" x2="1365.7594" y2="30.5504" gradientTransform="matrix(1 0 0 -1 -9.401608e-03 148.0043)">
          <stop offset="0" style="stop-color:#08AEEA" />
          <stop offset="1" style="stop-color:#2AF598" />
        </linearGradient>
        <path class="st0" d="M-0.25,107.42c99.53-49.82,242.38-99.53,397-66c109.03,23.64,116.64,65.4,223,83
c179.31,29.67,252.1-73.39,448-77c71.09-1.31,173.15,10.21,298,72c0,28.33,0,56.67,0,85c-455.33,0-910.67,0-1366,0
C-0.25,172.08-0.25,139.75-0.25,107.42z" />
        <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="0.2594" y1="-13.533" x2="1366.2594" y2="-13.533" gradientTransform="matrix(1 0 0 -1 -9.401608e-03 148.0043)">
          <stop offset="0" style="stop-color:#08AEEA" />
          <stop offset="1" style="stop-color:#2AF598" />
        </linearGradient>
        <path class="st1" d="M0.25,197.54L0.25,197.54L0.25,197.54L0.25,197.54c2.06-0.78,2.14-0.81,2.29-0.87
c186.11-69.94,387.71-77.86,387.71-77.86c285.33-11.21,394.65,91.36,681,70.11c126.48-9.39,228.82-38.57,295-61.5
c0,25.83,0,51.66,0,77.49c-218,0-436,0-654,0c-72,0-144,0-216,0c-36,0-72,0-108,0c-55.67,0-111.33-0.13-167,0
c-66.13,0.15-69.07,0.38-88,0C76.25,203.78,30.11,200.28,0.25,197.54z" />
        <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="0.2594" y1="25.0811" x2="1366.2594" y2="25.0811" gradientTransform="matrix(1 0 0 -1 -9.401608e-03 148.0043)">
          <stop offset="0" style="stop-color:#08AEEA" />
          <stop offset="1" style="stop-color:#2AF598" />
        </linearGradient>
        <path class="st2" d="M0.25,40.92c80.77,44.31,207.3,99.66,366,108c191.8,10.08,286.85-56.06,474-75c120.65-12.21,298.63-6.73,526,86
c0,15,0,30,0,45c-455.33,0-910.67,0-1366,0C0.25,150.25,0.25,95.58,0.25,40.92z" />
        <linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="0.2594" y1="12.5746" x2="1366.2594" y2="12.5746" gradientTransform="matrix(1 0 0 -1 -9.401608e-03 148.0043)">
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
              <p style="text-align:justify;">Government Polytechnic, Malvan was established in 1985. This Institute imparts technical education at Diploma and is known for its excellence at State level and National level. At present, the Institute
                offers Diploma programmes in
                Civil, Mechanical, Electrical, Electronics & communication, Computer and Food Technology as unique course in Maharashtra.</p>
            </div>

            <div class="col-md-4 cont-info-ftr">
              <h3 style="text-align:center" class="ctifo">Contact Info</h3>
              <ul>
                <li><i class="fas fa-map-marked-alt"></i> A/P Kumbharmath,Malvan <span>Sindhudurg.</span></li>
                <li><i class="fas fa-envelope"></i> <a class="link-all" href="mailto:gpmalvan3010@gmail.com">gpmalvan3010@gmail.com</a></li>
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
                <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a class="link-all" href="">Home</a></li>
                <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a class="link-all" href="">Institute</a></li>
                <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a class="link-all" href="">Sudent</a></li>
                <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a class="link-all" href="">Departments</a></li>
                <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a class="link-all" href="">Acadamics</a></li>
                <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a class="link-all" href="">Gallary</a></li>
                <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a class="link-all" href="">Admission</a></li>
                <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a class="link-all" href="">Contact Us</a></li>
              </ul>
            </div>

          </div>

        </div>

        <div style="margin-top: 3%;" class="container copyright-social">
          <div class="row">


            <div class="col-md-6">
              <div class="copright-devloper">
                <p>&copy; <script>document.write(new Date().getFullYear())</script> GPM All rights reserved | Design by Department Of Computer Engineering </p>
              </div>
            </div>


            <div class="col-md-6 bot-soc-ico">
              <div class="template-demo"> <button type="button" class="btn btn-social-icon btn-facebook btn-rounded"><i class="fa fa-facebook"></i></button>
                <button type="button" class="btn btn-social-icon btn-youtube btn-rounded"><i class="fa fa-youtube"></i></button>
                <button type="button" class="btn btn-social-icon btn-twitter btn-rounded"><i class="fa fa-twitter"></i></button>
                <button type="button" class="btn btn-social-icon btn-linkedin btn-rounded"><i class="fa fa-linkedin"></i></button>
                <button type="button" class="btn btn-social-icon btn-instagram btn-rounded"><i class="fa fa-instagram"></i></button>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section>

        <!--Slider Script-->

        <script>
        let currentIndex = 0;
        const items = document.querySelectorAll('.carousel-item');
        const totalItems = items.length / 2; // Original set length (not including duplicates)
        const visibleItems = 6; // Number of visible items at a time

        function updateCarousel() {
            const offsetX = -currentIndex * (100 / visibleItems);
            document.querySelector('.carousel-inner').style.transform = `translateX(${offsetX}%)`;

            // Reset to the beginning if at the duplicated items
            if (currentIndex >= totalItems) {
                setTimeout(() => {
                    document.querySelector('.carousel-inner').style.transition = 'none';
                    currentIndex = 0;
                    updateCarousel();
                    setTimeout(() => {
                        document.querySelector('.carousel-inner').style.transition = 'transform 0.5s ease';
                    }, 50); // Re-enable transition after reset
                }, 500); // Delay reset to allow for smooth transition
            }
        }

        function moveSlide(step) {
            currentIndex += step;
            updateCarousel();
        }

        // Auto-slide every 3 seconds
        setInterval(() => {
            moveSlide(1);
        }, 2000);
    </script>

</body>

</html>
