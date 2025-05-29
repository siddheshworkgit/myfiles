<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>Students</title>
  <!--Google Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@0;1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

  <link rel="icon" type="image/png" sizes="32x32" href="Images/fv/favicon-32x32.png" />

  <link rel="icon" type="image/png" sizes="32x32" href="Images/fv/favicon-32x32.png" />



  <!--Font Owsome-->
  <script src="https://kit.fontawesome.com/4575ad6c94.js" crossorigin="anonymous"></script>

  <!--Bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!--Internal CSS-->
  <link rel="stylesheet" href="css/styles.css">
  <link id="MyStyleSheet" href="Contents/Layout.css" rel="stylesheet" type="text/css" />
  <link href="Contents/LayoutEN.css" rel="stylesheet" type="text/css" />

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
        <img src="Images/logo_MH.png" alt="Government Polytechnic Malvan" />
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
                  <a class="nav-link nv-lk " href="institute.html">Institute</a>
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
                  <a class="nav-link  nv-lk" href="contact.html">Contact</a>
                </li>
              </ul>

            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!---Navbar End--->

  <section style="margin-top: 5%;" id="title">
    <!--Heading-->
    <div class="container landing-screen-int">
      <h1 style=" font-weight: 900; font-family: 'Montserrat', sans-serif; font-size:3rem;" class="heading">Government Polytechnic</h1>
      <h1 style=" font-weight: 900; font-family: 'Montserrat', sans-serif; font-size:3rem;" class="heading">Malvan</h1>
      <h3 style="margin-top: 3%;font-family: 'Ubuntu', sans-serif; font-size:1.3rem;" class="sub-heading">Government Institute for diploma engineering programs</h3>

      <h2 style=" text-decoration: underline;margin-top: 5%;font-family: 'Fredoka One', cursive; font-size:2.8rem;" class="page-sub-hd">Students</h2>

    </div>

    <section id="institute Console">
      <div class="container int-sec">

        <div class="row int-console">

          <div class="col-md-4 int-console">
            <!--Insidee Here-->
            <div class="card card-navi">
              <div class="card-body card-body-navi">
                <h5 class="card-title-navi">I-Card Registration</h5>
                <p class="card-text-navi">Click on the below card button to redirect the I-Card Registration portal to view the content of page.</p>
                <a href="Default_UC.html" class="btn btn-primary navi-btn">Go To Page</a>
              </div>
              <div class="top-image-card-navi">
                <img src="images/icon/id.png" alt="int-console-img" class="img-responsive">
              </div>
            </div>

          </div>

          <div class="col-md-4 int-console">
            <!--Insidee Here-->
            <div class="card card-navi">
              <div class="card-body card-body-navi">
                <h5 class="card-title-navi">Scholership</h5>
                <p class="card-text-navi">Click on the below card button to redirect the Scholership portal to view the content of page.</p>
                <a href="scholership.php" class="btn btn-primary navi-btn">Go To Page</a>
              </div>
              <div class="top-image-card-navi">
                <img src="images/icon/Scholership.png" alt="int-console-img" class="img-responsive">
              </div>
            </div>

          </div>


          <div class="col-md-4 int-console">
            <!--Insidee Here-->
            <div class="card card-navi">
              <div class="card-body card-body-navi">
                <h5 class="card-title-navi">Training & Placement</h5>
                <p class="card-text-navi">Click on the below card button to redirect the Training & Placement portal to view the content of page.</p>
                <a href="trnplc.php" class="btn btn-primary navi-btn">Go To Page</a>
              </div>
              <div class="top-image-card-navi">
                <img src="images/icon/placement.png" alt="int-console-img" class="img-responsive">
              </div>
            </div>

          </div>

        </div>

        <!--Second Row-->

        <div class="row int-console">

          <div class="col-md-4 int-console">
            <!--Insidee Here-->
            <div class="card card-navi">
              <div class="card-body card-body-navi">
                <h5 class="card-title-navi">Curriculam</h5>
                <p class="card-text-navi">Click on the below card button to redirect the Curriculam portal to view the content of page.</p>
                <a href="Default_UC.html" class="btn btn-primary navi-btn">Go To Page</a>
              </div>
              <div class="top-image-card-navi">
                <img src="images/icon/Acadamic-Calender.png" alt="int-console-img" class="img-responsive">
              </div>
            </div>

          </div>

          <div class="col-md-4 int-console">
            <!--Insidee Here-->
            <div class="card card-navi">
              <div class="card-body card-body-navi">
                <h5 class="card-title-navi">Class Timetable</h5>
                <p class="card-text-navi">Click on the below card button to redirect the Class Timetable portal to view the content of page.</p>
                <a href="clsstmtble.html" class="btn btn-primary navi-btn">Go To Page</a>
              </div>
              <div class="top-image-card-navi">
                <img src="images/icon/curriculam.png" alt="int-console-img" class="img-responsive">
              </div>
            </div>

          </div>


          <div class="col-md-4 int-console">
            <!--Insidee Here-->
            <div class="card card-navi">
              <div class="card-body card-body-navi">
                <h5 class="card-title-navi">Online Resourse</h5>
                <p class="card-text-navi">Click on the below card button to redirect the Online Resourse portal to view the content of page.</p>
                <a href="onlineresource.html" class="btn btn-primary navi-btn">Go To Page</a>
              </div>
              <div class="top-image-card-navi">
                <img src="images/icon/resources.png" alt="int-console-img" class="img-responsive">
              </div>
            </div>

          </div>

        </div>

        <!--third row-->
        <div class="row int-console">

          <div class="col-md-4 int-console">
            <!--Insidee Here-->
            <div class="card card-navi">
              <div class="card-body card-body-navi">
                <h5 class="card-title-navi">National Service Scheme</h5>
                <p class="card-text-navi">Click on the below card button to redirect the  portal to view the content of page.</p>
                <a href=" " class="btn btn-primary navi-btn">Go To Page</a>
              </div>
              <div class="top-image-card-navi">
                <img src="images/icon/result.png" alt="int-console-img" class="img-responsive">
              </div>
            </div>

          </div>

          <div class="col-md-4 int-console">
            <!--Insidee Here-->
            <div class="card card-navi">
              <div class="card-body card-body-navi">
                <h5 class="card-title-navi">Academic Calender</h5>
                <p class="card-text-navi">Click on the below card button to redirect the Acadamic Calender portal to view the content of page.</p>
                <a href="  " target="_blank" class="btn btn-primary navi-btn">Go To Page</a>
              </div>
              <div class="top-image-card-navi">
                <img src="images/icon/clstb.png" alt="int-console-img" class="img-responsive">
              </div>
            </div>

          </div>


          <div class="col-md-4 int-console">
            <!--Insidee Here-->
            <div class="card card-navi">
              <div class="card-body card-body-navi">
                <h5 class="card-title-navi">Grivarance & RTI</h5>
                <p class="card-text-navi">Click on the below card button to redirect the Grivarance & RTI portal to view the content of page.</p>
                <a href="grivrance.php" class="btn btn-primary navi-btn">Go To Page</a>
              </div>
              <div class="top-image-card-navi">
                <img src="images/icon/grv.png" alt="int-console-img" class="img-responsive">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Footer Starts-->
    <section id="footer">

      <div style=" margin-top: 3%;" class="agile-footer">

        <div class="container">
          <div class="row">

            <div class="col-md-4 abt-us-ftr">
              <h3>About Us</h3>
              <p style="text-align:justify;">Government Polytechnic, Malvan was established in 1985. This Institute imparts technical education at Diploma and is known for its excellence at State level and National level. At present, the Institute offers Diploma programmes in
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


    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
      $('.counter').countUp();
    </script>

</body>

</html>
