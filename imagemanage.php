<?php
include 'partials/_dbconnect.php';
session_start();
if (!isset($_SESSION['loggedinwbm']) || $_SESSION['loggedinwbm'] != true) {
    header("location: wbmlogin.php");
    exit;
}
?>

<?php


$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./people/" . $filename;

    $sql = "INSERT INTO person ( filename ) VALUES ('$filename')";
    $result = mysqli_query($conn, $sql);
    if (move_uploaded_file($tempname, $folder)) {
        $showAlert = true;
    } else {
        $showError = "There Was a problem to upload !";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Deapartment Administration</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="images/fv/favicon-32x32.png" />

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>

<body>

    <?php
    if ($showAlert) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Image Data Inserted succsessfully.... 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if ($showError) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>

    <div id="main-wrapper">

        <div class="nav-header">
            <div  class="brand-logo">
                <a style="padding:0%;">
                    <b class="logo-abbr"><img  src="images/logo_MH.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <h4 style="color:white; margin-top:3%; margin-left:10%; font-size:1.2rem; font-weight: 700;line-height: normal; font-family: 'Ubuntu', sans-serif;"> <img style=" height: 65px; margin-right:2%;" src="images/logo_MH.png" alt="">  GPMalvan</h4>
                    </span>
                </a>
            </div>
        </div>


        <!--Header start-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="fas fa-bars"></i></span>
                    </div>
                </div>
                <div style="margin-left: 6%;" class="row">
                    <div class="col-11 header-center">
                        <h1
                            style="padding-top:2%;font-weight: 700;line-height: normal; font-family: 'Ubuntu', sans-serif; text-align:center;">
                            Government Polytechnic Malvan
                            <small style="font-size: 1rem ;">Institute Code: 3010</small> </h1>
                    </div>
                    <div style="padding-top: 2%;" class="col-1 header-right">
                        <ul class="clearfix">

                            <li class="icons dropdown">
                                <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                    <span class="activity active"></span>
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="app-profile.html"><i class="far fa-user"></i>
                                                    <span>Profile</span></a>
                                            </li>


                                            <hr class="my-2">

                                            <li><a href="/loginsystem/wbm_logout.php"><i
                                                        class="fas fa-sign-out-alt"></i>
                                                    <span>Logout</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--
            Header end ti-comment-alt
        -->

        <!--Sidebar start -->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>

                                        <li>
                        <a href="webmaster.php" aria-expanded="false">
                            <i class="fas fa-tachometer-alt"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>

                   <li>
                        <a href="mng_gallary.php" aria-expanded="false" target="_blank">
                            <i class="fas fa-image"></i><span class="nav-text">Gallary</span>
                        </a>
                    </li>

                    <li class="nav-label">Notification Management</li>


                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-users-cog"></i><span class="nav-text">Manage Notification</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="home_pg-notf.php">Update/Manage Home page notifications</a></li>
                            <li><a href="scholership_pg-notf.php">Update/Manage Scholarship page notifications</a></li>
                            <li><a href="admission_pg-notf.php">Update/Manage Admission page notifications</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="imagemanage.php" aria-expanded="false">
                            <i class="fas  fa-camera"></i><span class="nav-text">Upload/Replace Image</span>
                        </a>
                    </li>

                    <li>
                        <a href="update_testamonial.php" aria-expanded="false">
                            <i class="fas fa-file-signature"></i><span class="nav-text">Manage Testamonial Name</span>
                        </a>
                    </li>

                    <li>
                        <a href="update_pdesk.php" aria-expanded="false">
                            <i class="fas fa-user-tie"></i><span class="nav-text">Principal's Desk</span>
                        </a>
                    </li>

                    <li>
                        <a href="faculty.php" aria-expanded="false">
                            <i class="fas fa-user-tie"></i><span class="nav-text">Manage Faculty</span>
                        </a>
                    </li>

                    <li>
                        <a href="m_tpo.php" aria-expanded="false">
                            <i class="fas fa-user-tie"></i><span class="nav-text">Manage TPO</span>
                        </a>
                    </li>

                    <li class="nav-label">Committee Details</li>


                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-poll-h"></i><span class="nav-text">Manage Committee</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="grc.php">Grievance Redressal Committee</a></li>
                            <li><a href="wgrc.php">Women Grievance Redressal Committee</a></li>
                            <li><a href="arc.php">Anti Ragging Committee</a></li>
                            <li><a href="ars.php">Anti Ragging Squad</a></li>
                            <li><a href="rtic.php">RTI Committee</a></li>
                            <li><a href="scstc.php">SC/ST Committee</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="update_hostel.php" aria-expanded="false">
                            <i class="fas fa-hotel"></i><span class="nav-text">Manage Hostel</span>
                        </a>
                    </li>

                    <li>
                        <a href="update_adminpss.php" aria-expanded="false">
                            <i class="fas fa-user-cog"></i><span class="nav-text">Manage Administrator Profile</span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>


        <div class="content-body">


            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <h4 style=" margin-left: 3%; margin-top: 3%;" class="">Upload Image</h4>

                            <div class=" card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="/loginsystem/imagemanage.php" method="post"
                                        enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="notification">Select Image <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="notification"
                                                    name="uploadfile" value="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" name="upload"
                                                    class="btn btn-primary">Upload</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="container-fluid">
                <?php
    include "partials/_dbconnect.php";
    $strSQL = "SELECT * FROM personname WHERE nmeid = 'gpmsid'";

    $rs = mysqli_query($conn, $strSQL);

    while ($row = mysqli_fetch_array($rs)) {
        //Display Logged user info
        $result = $conn->query("SELECT * FROM personname WHERE nmeid = 'gpmsid'");
    }
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <h4 style=" margin-left: 3%; margin-top: 3%;" class="">Testamonial Details</h4>

                            <div class=" card-body">

                                <div class="table-responsive">
                                    <div class="container">
                                        <table class="table">
                                            <tr>
                                                <th>Serial</th>
                                                <th>image</th>
                                                <th>Name</th>
                                                <th>Designation</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td><img style="height: 70px;" src="people/minister.jpg" alt="">
                                                    </td>
                                                    <td><?php echo $row['minister'] ?></td>
                                                    <td>Minister Higher & Secondary Education</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td><img style="height: 70px;" src="people/secretory.jpg" alt="">
                                                    </td>
                                                    <td><?php echo $row['secretory'] ?></td>
                                                    <td>Secretory Higher & Secondary Education</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td><img style="height: 70px;" src="people/directordte.jpg" alt="">
                                                    </td>
                                                    <td><?php echo $row['directordte'] ?></td>
                                                    <td>Director DTE</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td><img style="height: 70px;" src="people/jointdirector.jpg"
                                                            alt=""></td>
                                                    <td><?php echo $row['jointdirectordte'] ?></td>
                                                    <td>Director MSBTE RO</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td><img style="height: 70px;" src="people/principal.jpg" alt="">
                                                    </td>
                                                    <td><?php echo $row['principle'] ?></td>
                                                    <td>Principal</td>
                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <?php }
    } else { ?>
            <p style="font-family: 'Ubuntu', sans-serif; color: red; font-size:1.5rem; ">No Details Found...</p>
            <?php } ?>
        </div>
        <!--Footer start-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> Designed & Developed by Department Of Computer Science</p>
            </div>
        </div>
        <!--Footer end -->

        <!-- JvaScripts-->
        <script src="plugins/common/common.min.js"></script>
        <script src="js/custom.min.js"></script>
        <script src="js/settings.js"></script>
        <script src="js/gleek.js"></script>
        <script src="js/styleSwitcher.js"></script>

        <script src="./plugins/validation/jquery.validate.min.js"></script>
        <script src="./plugins/validation/jquery.validate-init.js"></script>

</body>



</html>