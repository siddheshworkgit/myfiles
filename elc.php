<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

<style>
    .table_lab {
      width: 61.7427%;
      text-align: center;
    }
  </style>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>Electrical Engineering</title>
  <!--Google Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500;600;900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@0;1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

  <!--Font Owsome-->
  <script src="https://kit.fontawesome.com/4575ad6c94.js" crossorigin="anonymous"></script>

  <link rel="icon" type="image/png" sizes="32x32" href="images/fv/favicon-32x32.png" />


  <!--Bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!--Internal CSS-->
  <link rel="stylesheet" href="css/styles.css">
  <link id="MyStyleSheet" href="Contents/Layout.css" rel="stylesheet" type="text/css" />
  <link href="Contents/LayoutEN.css" rel="stylesheet" type="text/css" />

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

  <section style="margin-top: 5%;" id="title">
    <!--Heading-->
    <section id="dep-clg">


      <div class="container dep-cont">
        <div class="landing-screen-int">
          <h2
            style=" text-decoration: underline;margin-bottom: 3%;font-family: 'Fredoka One', cursive; font-size:2.8rem;"
            class="dep-headliner">Department</h2>
          <h2 style="font-family: 'Ubuntu', sans-serif; font-size:2.5rem;" class="dep-page-header">Electrical Engineering</h2>
        </div>
      </div>
    </section>
    <!--Section is ended here-->

    <section style="font-family: 'Ubuntu', sans-serif;" id="inner-tab">
      <div class="fnt-setting p-5 bg-white rounded mb-5">
        <!-- Rounded tabs -->
        <ul id="myTab" role="tablist"
          class="nav nav-tabs nav-pills flex-column flex-sm-row text-center bg-light border-0 rounded-nav">
          <li class="nav-item flex-sm-fill">
            <a id="home-tab" data-toggle="tab" href="#About" role="tab" aria-controls="home" aria-selected="true"
              class="nav-link bgnav border-0 text-uppercase font-weight-bold active">About</a>
          </li>

          <li class="nav-item flex-sm-fill">
            <a id="profile-tab" data-toggle="tab" href="#Faculty" role="tab" aria-controls="profile"
              aria-selected="false" class="nav-link bgnav border-0 text-uppercase font-weight-bold">Faculty</a>
          </li>

          <li class="nav-item flex-sm-fill">
            <a id="profile-tab" data-toggle="tab" href="#Structure" role="tab" aria-controls="profile"
              aria-selected="false" class="nav-link bgnav border-0 text-uppercase font-weight-bold">Structure</a>
          </li>
          <li class="nav-item flex-sm-fill">
            <a id="contact-tab" data-toggle="tab" href="#Laborotary" role="tab" aria-controls="contact"
              aria-selected="false" class="nav-link bgnav border-0 text-uppercase font-weight-bold">Laborotary</a>
          </li>
          <li class="nav-item flex-sm-fill">
            <a id="contact-tab" data-toggle="tab" href="#newsletter" role="tab" aria-controls="contact"
              aria-selected="false" class="nav-link bgnav border-0 text-uppercase font-weight-bold">Newsletter</a>
          </li>
        </ul>
        <div id="myTabContent" class="tab-content">
          <div id="About" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade px-4 py-5 show active">

            <h3 style="font-weight: 600;font-family: 'Montserrat', sans-serif; font-size:1.5rem;" class="fnt-set-pro">
              Vision</h3>
            <hr class="devd-dep-inln">
            <p class="fnt-setting">To create self-motivated quality Engineers and technocrats to contribute effectively to value based society and in the field of Electrical Engineering and technology.</p>

            <h3 style="font-weight: 600;font-family: 'Montserrat', sans-serif; font-size:1.5rem;" class="fnt-set-pro">
              Mission Statements</h3>
            <hr class="devd-dep-inln">
            <p>
            To catalyze and inspire young minds for innovative thinking and creativity and to acquire knowledge and professional ethics essential for facing global challenges in rapidly changing technologies to serve the society and industry effectively.
            </p>

            <h3 style="font-weight: 600;font-family: 'Montserrat', sans-serif; font-size:1.5rem;" class="fnt-set-pro">
              Program Educational Objectives (PEOs)</h3>
            <hr class="devd-dep-inln">
            <ol>
              <li>To prepare students for academic competence, to be employed as Electrical Engineering professionals, for industry,
                higher studies, research, entrepreneurship and to significantly contribute to the society at large.</li>
              <li>To develop students’ fundamental knowledge related to mathematics, Electrical Engineering and to make them capable of providing solutions to challenging problems and
                multidisciplinary problems.</li>
              <li>To enrich students with soft skills, leadership skills, professional skills and work ethics to make
                them good Electrical Engineering professionals and role models for future generations.</li>
              <li>To prepare students capable of self-learning, to have the ability to adapt to changes and to possess
                the ability to understand the impact of engineering on society and humankind.</li>
            </ol>

          </div>

          <!--FACULTY TAB-->

          <div id="Faculty" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">

            <div style="margin-bottom: 3%;">
              <h3 style="font-weight: 600;font-family: 'Montserrat', sans-serif; font-size:1.5rem;" class="fnt-set-pro">
                Meet The Faculties</h3>
              <hr class="devd-dep-inln">
              <p class="fnt-setting">At Government Polytechnic Malvan, the Electrical Engineering department is privileged
                to possess a distinguished faculty, who possess both an impeccable record in teaching and an outstanding
                reputation in research. Our faculty members are highly qualified and possess a wealth of experience in
                their respective fields. They are constantly at the forefront of cutting-edge research, and have been
                widely published in the most reputable international journals. Furthermore, several members of our
                faculty have had the distinction of organizing international conferences and workshops on the current
                trends, as part of our esteemed faculty development program.</p>
            </div>

            <!--HOD SECTION-->
            <?php
    include "partials/_dbconnect.php";
    $strSQL = "SELECT * FROM hod_data WHERE deptname = 'ele'";

    $rs = mysqli_query($conn, $strSQL);

    while ($row = mysqli_fetch_array($rs)) {
        //Display Logged user info
        $result = $conn->query("SELECT * FROM hod_data WHERE deptname = 'ele'");
    }
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>
              <div>
              <div class="dept-container">
                <img src="people/ele_hod.jpg" alt="Head of Department Photo" class="dept-photo img-fluid rounded">
                <div class="dept-info">
                <p><strong>Head Of The Department</strong></p>
                  <h2><?php echo $row['name'] ?></h2>
                  <p><strong>Acadamic Qualification:</strong> <?php echo $row['edudtl'] ?></p>
                  <p><strong>Contact Email:</strong> <?php echo $row['email'] ?></p>
                  <p>
                    <i class="fas fa-quote-left quote-icon"></i>
                    "<?php echo $row['message'] ?>"
                  </p>
                </div>
              </div>
              </div>
              <?php }
    } else { ?>
    <p style="font-family: 'Ubuntu', sans-serif; color: red; font-size:1.5rem; ">No Details Found...</p>
    <?php } ?>

            <div style="margin-top: 5%; text-align:center;">
              <div class="row" id="faculty-cards">
                <?php
        
        // Database connection
        include "partials/_dbconnect.php";
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, photo, name, education, designation, experience, message FROM faculty WHERE department='ele'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $counter = 0;
            while ($row = $result->fetch_assoc()) {
              echo '<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
              <div class="card position-relative faculty-card">
                  <img src="' . $row["photo"] . '" alt="' . $row["name"] . '" class="faculty-photo">
                  <div class="card-body faculty-card-body">
                      <h5 class="card-title">' . $row["name"] . '</h5>
                      <p class="card-text">Education: ' . $row["education"] . '</p>
                      <p class="card-text">Designation: ' . $row["designation"] . '</p>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#facultyModal' . $row["id"] . '">
                          View More
                      </button>
                  </div>
              </div>
          </div>';

      echo '<div class="modal fade faculty-modal" id="facultyModal' . $row["id"] . '" tabindex="-1" aria-labelledby="facultyModalLabel' . $row["id"] . '" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="facultyModalLabel' . $row["id"] . '">' . $row["name"] . '</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body faculty-modal-body">
                          <img src="' . $row["photo"] . '" alt="' . $row["name"] . '" class="faculty-photo">
                          <p><strong>Name:</strong> ' . $row["name"] . '</p>
                          <p><strong>Experience:</strong> ' . $row["experience"] . ' years</p>
                          <p><strong>Education:</strong> ' . $row["education"] . '</p>
                          <p><strong>Message:</strong> ' . $row["message"] . '</p>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>';
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
              </div>
            </div>



          </div>
          <!--FACULTY TAB END-->
          <div id="Structure" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">
            <table style="width: 75.5781%;" border="2" class="sem-tble">
              <tbody>
                <tr style="height: 39.9403px;">
                  <td style="height: 39.9403px; width: 28%;">&nbsp; &nbsp; Department Name</td>
                  <td style="height: 39.9403px; width: 20%;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;F.Y.</td>
                  <td style="height: 39.9403px; width: 20%;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; S.Y.</td>
                  <td style="height: 39.9403px; width: 19.9065%;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;T.Y.</td>
                </tr>
                <tr style="height: 81px;">
                  <td style="height: 81px; width: 28%;">&nbsp;
                    <table>
                      <tbody>
                        <tr>
                          <td><strong>Electrical Engineering</strong></td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                  <td style="height: 81px; width: 20%;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                  <td style="height: 81px; width: 20%;">
                    <p>&nbsp; &nbsp; &nbsp; &nbsp;SEM III</p>
                    <p>&nbsp; &nbsp; &nbsp; &nbsp;SEM IV</p>
                  </td>
                  <td style="height: 81px; width: 19.9065%;">
                    <p>&nbsp; &nbsp; &nbsp; &nbsp; SEM V</p>
                    <p>&nbsp; &nbsp; &nbsp; &nbsp; SEM VI</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>


          <div id="Laborotary" role="tabpanel" aria-labelledby="contact-tab" class="tab-pane fade px-4 py-5">

            <h3 style="font-weight: 600;font-family: 'Montserrat', sans-serif; font-size:1.5rem;" class="fnt-set-pro">
              Laboratory Summary</h3>
            <hr style="font-weight: 600;font-family: 'Montserrat', sans-serif; font-size:1.5rem;" class="devd-dep-inln">
            <p>The Department has 4 well equipped and well maintained laboratories which possess more than 70 high end
              PCS. Each lab has licensed software’s necessary to conduct corresponding courses in that laboratory. The
              laboratories are
              maintained by third party for hardware maintenance. All the laboratories are well protected with
              centralized UPS or with individual UPS support in their laboratories.</p>
            <p>The internet facility available for students has 20 Mbps dedicated line where they can surf the internet
              to gather unlimited information and increase their knowledge. The final year students are provided with
              required resources having
              high end desktops for their final year project.</p>
            <p>Students may work on different configurations varying from Windows 7, Windows 10 etc. to fulfill their
              needs of the project. All these laboratories are well equipped with network printers.</p>

              <?php
include 'partials/_dbconnect.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch lab_name and incharge where deptname is 'computer science'
$sql = "SELECT lab_name, incharge FROM labs WHERE deptname = 'ele'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table class='table_lab' border='1';>";
    echo "<tr><th>Laboratory Name</th><th>Lab In-charge</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["lab_name"]. "</td><td>" . $row["incharge"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

            <div style="margin-top: 3%;" class="container-fluid"></div>


            <h3 style="font-weight: 600;font-family: 'Montserrat', sans-serif; font-size:1.5rem ; margin-bottom: 3%;"
              class="fnt-set-pro">Laboratory images</h3>

            <hr style="font-weight: 600;font-family: 'Montserrat', sans-serif; font-size:1.5rem;" class="devd-dep-inln">

            <div class="row">

              <div class="col-md-6">
                <img class="img-fluid" src="images/clab1.jpg" alt="">
              </div>
              <div class="col-md-6">
                <img class="img-fluid" src="images/clab2.jpg" alt="">
              </div>

            </div>
          </div>

          <!--Newsletter Dynamic Section-->
          <div id="newsletter" role="tabpanel" aria-labelledby="contact-tab" class="tab-pane fade px-4 py-5">
            <h3 style="font-weight: 600;font-family: 'Montserrat', sans-serif; font-size:1.5rem;" class="fnt-set-pro">
              Introduction</h3>

            <hr class="devd-dep-inln">


            <p>Our departmental newsletter “PLEASE ENTER THE NAME OF CHOICE” facilitates our students and faculty
              members to publish their achievements and efforts. It provides a motivation to the juniors and classmates
              to “see and follow” the steps on the success path taken by their seniors. This also gives a reason to be
              proud of their classmates, seniors and faculty members.</p>

            <ul class="newsletter-links ul-imp-dt">

              <!--PHP CODE FOR DISPLAYING NOTIFICATIONS-->

              <?php
    include "partials/_dbconnect.php";
    $strSQL = "SELECT * FROM newsletter WHERE deptname = 'ele'";

    $rs = mysqli_query($conn, $strSQL);

    while ($row = mysqli_fetch_array($rs)) {
        //Display Logged user info
        $result = $conn->query("SELECT * FROM newsletter WHERE deptname = 'ele'");
    }
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>
              <a class="newsletter-links" href="<?php echo $row ['link']; ?>"> <?php echo $row['notification'] ?></th>
              </a><br>
              <?php }
    } else { ?>
              <p style="font-family: 'Ubuntu', sans-serif; color: red; font-size:1.5rem; ">No Newsletter Found...
              </p>
              <?php } ?>
            </ul>
          </div>
        </div>
        <!-- End rounded tabs -->
      </div>
    </section>

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



    <!--JS For Teachers section-->

    <script type="text/javascript">
      $(document).ready(function () {
        $('#tcrCarousel').carousel({
          interval: 1000
        })

        $('.tcr-cas-act .tcr-cas-js').each(function () {
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



</body>

</html>