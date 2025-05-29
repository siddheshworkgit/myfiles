<?php
include 'partials/_dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>Government Polytechnic Malvan</title>
  <!--Google Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

  <!--Font Owsome-->
  <script src="https://kit.fontawesome.com/4575ad6c94.js" crossorigin="anonymous"></script>

  <!--Bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!--Internal CSS-->
  <link id="MyStyleSheet" href="Contents/Layout.css" rel="stylesheet" type="text/css" />
  <link href="Contents/LayoutEN.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/styles.css">

  <link rel="icon" type="image/png" sizes="32x32" href="images/fv/favicon-32x32.png" />


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
  <!--Font Qwsome-->


</head>
<body>
<!-- Modal Structure -->
<div class="modal fade" id="brochureModal" tabindex="-1" role="dialog" aria-labelledby="brochureModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="custom-modal-content">
                
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                
                <div class="custom-modal-body">
                    <img class="brochure-image" src="images/brochure.jpg" alt="Brochure Image">
                </div>
            </div>
        </div>
    </div>
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
  <div class="welcome Header">
    <h1 class="pan_small" style="line-height: normal; font-family: 'Ubuntu', sans-serif;">Welcome to Government
      Polytechnic <br> Malvan</h1>

    <div class="container text-center my-3 demo rounded">
    <?php
    include "partials/_dbconnect.php";
    $statusQuery = "SELECT setting_value FROM settings WHERE setting_key = 'displayEnabled'";
    $statusResult = mysqli_query($conn, $statusQuery);
    $statusRow = mysqli_fetch_assoc($statusResult);
    $displayEnabled = $statusRow['setting_value'] === 'true'; // Convert to boolean

    // Fetch personname data from database
    $strSQL = "SELECT * FROM personname WHERE nmeid = 'gpmsid'";
    $result = mysqli_query($conn, $strSQL);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
      <div class="row mx-auto my-auto">
        <div id="mbrCarousel" class="carousel mbr-cas-act slide w-100" data-ride="carousel mbr-cas-act">
          <div class="carousel-inner w-100" role="listbox">

            <div class="carousel-item active mbr-cas-js">
              <div class="col-md-4 person-outer">
                <div class="row">
                  <div class="column" style="width: 80px;">
                  <img class="person rounded" src="people/principal.jpg" alt="">
                  </div>
                  <div class="column text-wrap " style="width: 120px;text-align:center;">
                    <small><?php echo $row['principle'] ?></small> <br><small style="font-size: 11px;">Principal
                      GPMalvan</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item mbr-cas-js">
              <div class="col-md-4 person-outer">
                <div class="row">
                  <div class="column" style="width: 80px;">
                    <img class="person rounded" src="people/directordte.jpg" alt="">
                  </div>
                  <div class="column text-wrap " style="width: 120px;text-align:center;">
                    <small><?php echo $row['directordte'] ?></small> <br><small style="font-size: 11px;">Director
                      DTE</small>
                  </div>
                </div>
              </div>
            </div>

            <?php if ($displayEnabled) { ?>

            <div class="carousel-item mbr-cas-js">
              <div class="col-md-4 person-outer">
                <div class="row">
                  <div class="column" style="width: 80px;">
                    <img class="person rounded" src="people/secretory.jpg" alt="">
                  </div>
                  <div class="column text-wrap " style="width: 120px;text-align:center;">
                    <small><?php echo $row['secretory'] ?></small> <br><small style="font-size: 11px;">Principal Secr.
                      H&TE</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item mbr-cas-js">
              <div class="col-md-4 person-outer">
                <div class="row">
                  <div class="column" style="width: 80px;">
                    <img class="person rounded" src="people/jointdirector.jpg" alt="">
                  </div>
                  <div class="column text-wrap " style="width: 120px;text-align:center;">
                    <small><?php echo $row['jointdirectordte'] ?></small> <br><small style="font-size: 11px;">Director
                      MSBTE RO</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item mbr-cas-js">
              <div class="col-md-4 person-outer">
                <div class="row">
                  <div class="column" style="width: 80px;">
                  <img class="person rounded" src="people/minister.jpg" alt="">
                  </div>
                  <div class="column text-wrap " style="width: 120px;text-align:center;">
                    <small><?php echo $row['minister'] ?></small> <br><small style="font-size: 11px;">Hon. Minister
                      H&TE</small>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>

      </div>

    </div>
    <?php }
    } else { ?>
    <p style="font-family: 'Ubuntu', sans-serif; color: red; font-size:1.5rem; ">No Details Found...</p>
    <?php } ?>
  </div>
  <!--Welcome Header Ends-->
  <div>
    <div style="display: flex; justify-content: center; overflow: hidden;" class="">
      <img style="flex-shrink: 0; min-width: 70%; min-height: 70%;" class="" src="images/2.jpg" alt="">
    </div>
  </div>

  <section class="sliders">
    <!--Date And Time Carasole-->
    <div class="container-fluid p-0">
      <div class='carousel-captionDate carousel-caption d-flex'>
        <div id='date-div'></div> <span class="px-1">|</span>
        <div id="time-div"></div>
      </div>
    </div>
  </section>
  </div>

  <div style="text-align: center; background-color: #012348; padding-top:1%;">
    <div style="text-align: center; background-color:white;">

      <a style="background-color: #012348; color:white;" href="#app-down"
        class="btn btn-light btn-lg dawnload-button upper_btn" role="button" aria-pressed="true">Download
        App</a>

        <a style="background-color: #012348; color:white;" href="aboutus.php"
        class="btn btn-light btn-lg dawnload-button upper_btn" role="button" aria-pressed="true">Know about GPMalvan </a>

      <a style="background-color: #012348; color:white;" href="#Notifications-Panal"
        class="btn btn-light btn-lg dawnload-button upper_btn" role="button" aria-pressed="true">Notifications</a>

    </div>
  </div>


  <div class="container landing-screen">

  </div>
  <!-- <div style="margin-bottom: 40px;" class="container social-icon">

      <button type="button" class="btn btn-social-icon btn-facebook btn-rounded"><i class="fa fa-facebook"></i></button>
      <button type="button" class="btn btn-social-icon btn-twitter btn-rounded"><i class="fa fa-twitter"></i></button>
      <button type="button" class="btn btn-social-icon btn-instagram btn-rounded"><i
          class="fa fa-instagram"></i></button>
    </div> -->


  <!--Section Ends-->

  <!--New Section Starts-->
  <section id="about">
    <div class="container about-institute">
      <h2 class="hdin-abtint" style="text-align: center;font-family: 'Fredoka One', cursive; font-size:2.8rem;"
        class="abt-int"> <i class="fas fa-university"></i> About Institute <i class="fas fa-university"></i></h2>
      <p class="about-para">At the midst of 21st century, the technological evolution is at its peak. Today the role of
        technical education becomes vital in enhancing the human life in general and the life of under privileged in
        particular keeping
        harmony with nature. This global expectation definitely actuates the technical education to adopt skill oriented
        and innovative teaching-learning process with enough scope for real time industry exposure. I am very happy to
        acknowledge the
        continuous & untiring efforts of Director of Technical Education and Director of MSBTE to bring in
        state-of-the-art processes and outcome based curriculum designed at par with global standards which will
        definitely transform states technical
        education scenario. At Government polytechnic Malvan, in the back drop of historical Sindhudurg fort in Arabian
        Sea, a team of dedicated and enthusiastic teachers and staff is striving to develop the technocrats of developed
        India. It gives
        me immense pleasure to welcome you all in the institute and extend all kind of well wishes to dear student
        friends & stakeholders to get your dreams come true which in turn take this institute and technical education to
        new heights. </p>
      <div class="abt-pra-btn">
        <a href="aboutus.php" href="#" class="btn btn-outline-dark btn-lg knowm-button " role="button"
          aria-pressed="true">Know More</a>
      </div>

    </div>
  </section>
  <!--Notification Panal-->

  <section id="Notifications-Panal">
    <div class="notification-pane-out" id="">
      <div class="container" style="text-align:center; padding: 2%;  background: linear-gradient(100deg, rgba(8,174,234,0.7175245098039216) 0%, rgba(42,245,152,0.8547794117647058) 79%); margin-top:2%">

        <h2 style="font: size 2.5em; font-family: 'Ubuntu', sans-serif;"><u>Notifications</u></h2>
        
        <div class="notification-bar" id="notificationBar">
          <div class="notification-content" id="notificationContent">

            <ul class="ul-imp-dt" style="font-size:1.3rem; padding:0; margin-top:2%;color:red;">
              <!--PHP CODE FOR DISPLAYING NOTIFICATIONS-->
              <?php
    include "partials/_dbconnect.php";
    $strSQL = "SELECT * FROM noticebrd WHERE type = 'homepage'";

    $rs = mysqli_query($conn, $strSQL);

    while ($row = mysqli_fetch_array($rs)) {
        //Display Logged user info
        $result = $conn->query("SELECT * FROM noticebrd WHERE type = 'homepage'");
    }
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>
              <a style="font-family: 'Ubuntu', sans-serif; color: red; font-size:1.5rem; "
                href="<?php echo $row ['link']; ?>"> <?php echo $row['notification'] ?></th> </a><br>
              <?php }
    } else { ?>
              <p style="font-family: 'Ubuntu', sans-serif; color: red; font-size:1.5rem; ">Dates Will Announce Soon...
              </p>
              <?php } ?>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Notification Panal Ended Here-->


  <!--App Download Landing Page-->
  <section id="app-down">
    <div class="container app-window">
      <div class="row">
        <div class="col-md-6">
          <div class="container app-lines">
            <h1
              style="font-family: 'Fredoka One', cursive; font-size:3rem; margin-top: 20%; text-align:center;line-height:1.2em;"
              class="app-headline">Featured Mobile Ready</h1>

            <h5 style=" font-family: 'Ubuntu', sans-serif; font-size: 1.3rem;margin-top: 5%; text-align:center;"
              class="app-baseline">GPMalvan Application Information on one touch</h5>
            <div style="text-align:center; margin-top: 12%; margin-bottom: 6%; " class="app-csr-dp">
              <button type="button" class="btn btn-dark btn-lg app-dawnload-btn android-btn"><i
                  class="fab fa-google-play"></i> Download</button>
              <button type="button" class="btn btn-outline-dark btn-lg app-dawnload-btn"><i class="fab fa-apple"></i>
                Download</button>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="phone-image-div">
            <img class="phone-image" src="images/phone-app.png" alt="">
          </div>
        </div>
      </div>


    </div>

  </section>
  <!--App Download Landing Page ended-->
  <!--Associates Strats Here-->
  <section id="Assoceates">
    <div style="text-align:center;" class="container-fluid accreditation">
      <div style="margin-bottom:5%;" class="container">
        <h1 style="font-family: 'Fredoka One', cursive; font-size:2.8rem;" class="accr-heading">Main MSBTE Links &
          accreditation</h1>
      </div>
      <a class="accreditation-links-a" href="https://www.aicte-india.org/" target="_blank">
        <img class="aicte accreditation-links" src="images/aicte.png" alt="">
      </a>
      <a class="accreditation-links-a" href="http://www.dtemaharashtra.gov.in/index.php" target="_blank">
        <img class="dte accreditation-links" src="images/dte.png" alt="">
      </a>
      <a class="accreditation-links-a" href="https://msbte.org.in/" target="_blank">
        <img class="msbte accreditation-links" src="images/msbte.png" alt="">
      </a>
      <a class="accreditation-links-a" href="https://www.maharashtra.gov.in/" target="_blank">
        <img class="mhshasan accreditation-links" src="images/MhShasan.png" alt="">
      </a>
      <a class="accreditation-links-a" href="https://www.mhrd.gov.in/" target="_blank">
        <img class="mhrd accreditation-links" src="images/mhrd.png" alt="">
      </a>
    </div>
  </section>
  <!--Associates Ends Here-->


  <section id="Engineering-Departments">
    <div style="text-align:center;" class="eng-dep">
      <h2 style="font-family: 'Fredoka One', cursive; font-size:2.8rem;" class="eng-dep-heading">Engineering Deprtment
      </h2>
    </div>

    <div class="container text-center my-3">

      <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel edp-cas-act slide w-100" data-ride="carousel edp-cas-act">
          <div class="carousel-inner w-100" role="listbox">
            <div class="carousel-item active edp-cas-js">
              <div class="col-md-4 test">
                <!--Insidee Here-->
                <div class="card cas-edp">
                  <div class="card-body cbdy-cas">
                    <h5 class="card-title crd-ttl-cas">Computer Engineering</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="cs.php" class="btn btn-primary">Go To Department</a>
                  </div>
                  <div class="top-image-card-cas">
                    <img src="images/icon/comp.png" alt="test-img" class="img-responsive">
                  </div>
                </div>

              </div>
            </div>
            <div class="carousel-item edp-cas-js">
              <div class="col-md-4 test">
                <!--Insidee Here-->
                <div class="card cas-edp">
                  <div class="card-body cbdy-cas">
                    <h5 class="card-title crd-ttl-cas">E&TC Engineering</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="#" class="btn btn-primary">Go To Department</a>
                  </div>
                  <div class="top-image-card-cas">
                    <img src="images/icon/telecom.png" alt="test-img" class="img-responsive">
                  </div>
                </div>

              </div>
            </div>

            <div class="carousel-item edp-cas-js">
              <div class="col-md-4 test">
                <!--Insidee Here-->
                <div class="card cas-edp">
                  <div class="card-body cbdy-cas">
                    <h5 class="card-title crd-ttl-cas">Electrical Engineering</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="#" class="btn btn-primary">Go To Department</a>
                  </div>
                  <div class="top-image-card-cas">
                    <img src="images/icon/electr.png" alt="test-img" class="img-responsive">
                  </div>
                </div>

              </div>
            </div>
            <div class="carousel-item edp-cas-js">
              <div class="col-md-4 test">
                <!--Insidee Here-->
                <div class="card cas-edp">
                  <div class="card-body cbdy-cas">
                    <h5 class="card-title crd-ttl-cas">Machanical Engineering</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="#" class="btn btn-primary">Go To Department</a>
                  </div>
                  <div class="top-image-card-cas">
                    <img src="images/icon/mech.png" alt="test-img" class="img-responsive">
                  </div>
                </div>

              </div>
            </div>
            <div class="carousel-item edp-cas-js">
              <div class="col-md-4 test">
                <!--Insidee Here-->
                <div class="card cas-edp">
                  <div class="card-body cbdy-cas">
                    <h5 class="card-title crd-ttl-cas">Civil Engineering</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="#" class="btn btn-primary">Go To Department</a>
                  </div>
                  <div class="top-image-card-cas">
                    <img src="images/icon/cvil.png" alt="test-img" class="img-responsive">
                  </div>
                </div>

              </div>
            </div>
            <div class="carousel-item edp-cas-js">
              <div class="col-md-4 test">
                <!--Insidee Here-->
                <div class="card cas-edp">
                  <div class="card-body cbdy-cas">
                    <h5 class="card-title crd-ttl-cas">Food Technology</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="#" class="btn btn-primary">Go To Department</a>
                  </div>
                  <div class="top-image-card-cas">
                    <img src="images/icon/ft.png" alt="test-img" class="img-responsive">
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Footer Start Here-->
  <section id="footer">

    <div style=" margin-top: 3%;" class="agile-footer">

      <div class="container">
        <div class="row">

          <div class="col-md-4 abt-us-ftr">
            <h3>About Us</h3>
            <p style="text-align:justify;">Government Polytechnic, Malvan was established in 1985. This Institute
              imparts technical education at Diploma and is known for its excellence at State level and National level.
              At present, the Institute offers Diploma programmes in
              Civil, Mechanical, Electrical, Electronics & communication, Computer and Food Technology as unique course
              in Maharashtra.</p>
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
                  href="gallary.php">Gallary</a></li>
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


  <!--Footer ends Here-->
  <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch('fetch_setting.php')
                .then(response => response.json())
                .then(data => {
                    if (data.show_brochure) {
                        $('#brochureModal').modal('show');
                    }
                });

            $('#brochureModal .close').on('click', function() {
                $('#brochureModal').modal('hide');
            });
        });
    </script>
  <!--JavaScripts-->

  <script>
    let scrollSpeed = 1; // Speed of scrolling
    let isPaused = false;

    function startScrolling() {
      const content = document.getElementById('notificationContent');
      let contentHeight = content.offsetHeight;
      let containerHeight = document.getElementById('notificationBar').offsetHeight;

      if (contentHeight > containerHeight) {
        let top = content.offsetTop;
        if (!isPaused) {
          top -= scrollSpeed;
          if (Math.abs(top) >= contentHeight) {
            top = containerHeight;
          }
          content.style.top = top + 'px';
        }
      }
    }

    document.getElementById('notificationBar').addEventListener('mouseover', function () {
      isPaused = true;
    });

    document.getElementById('notificationBar').addEventListener('mouseout', function () {
      isPaused = false;
    });

    setInterval(startScrolling, 30); // Adjust this interval to change the scrolling smoothness
  </script>

  <!--JS For members section-->

  <script type="text/javascript">
    $(document).ready(function () {
      $('#mbrCarousel').carousel({
        interval: 2000
      })

      $('.mbr-cas-act .mbr-cas-js').each(function () {
        var minPerSlide = 3;
        var next = $(this).next();
        if (!next.length) {
          next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i = 0; i < minPerSlide; i++) {
          next = next.next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }

          next.children(':first-child').clone().appendTo($(this));
        }
      });
    });
  </script>

  <script type="text/javascript">
    const dateDiv = document.getElementById('date-div');
    const timeDiv = document.getElementById('time-div');

    var DateL = (new Date()).toString().split(' ').splice(1, 3).join(' ');
    var timeL = new Date().toLocaleTimeString();
    dateDiv.innerHTML = DateL;
    timeDiv.innerHTML = timeL;
  </script>

  <!--JS For Engineering Department Carosoul-->

  <script type="text/javascript">
    $(document).ready(function () {
      $('#recipeCarousel').carousel({
        interval: 1000
      })

      $('.edp-cas-act .edp-cas-js').each(function () {
        var minPerSlide = 3;
        var next = $(this).next();
        if (!next.length) {
          next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i = 0; i < minPerSlide; i++) {
          next = next.next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }

          next.children(':first-child').clone().appendTo($(this));
        }
      });
    });
  </script>

  <!--JS For Engineering Department Carosoul-->

</body>

</html>