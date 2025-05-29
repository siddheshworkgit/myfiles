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

    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $strSQL = "SELECT * FROM adminconsole";

    $rs = mysqli_query($conn, $strSQL);

    while ($row = mysqli_fetch_array($rs)) {

        if (($password == $cpassword)) {

            $hash = password_hash($password, PASSWORD_DEFAULT);

            $result = $conn->query("UPDATE adminconsole SET password ='$hash'");
        } else {
            $showError = "Passwords do not match";
        }
    }


    if (count($_POST) > 0) {
        $showAlert = true;
    } else {
        $showError = "Something Went Wrong...";
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

    <!--Showing Message To User-->

    <?php
    if ($showAlert) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Password chnaged succsessfully. 
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
    <!--Showing Message To User-->

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

        <!--
            Sidebar start
        -->
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

                    <li class="nav-label">ADMISTRATIVE TOOLS</li>

                    <li>
                        <a href="home_pg-notf.php" aria-expanded="false">
                            <i class="fas fa-users-cog"></i><span class="nav-text">Update/Manage Home page notifications</span>
                        </a>
                    </li>

                    <li>
                        <a href="scholership_pg-notf.php" aria-expanded="false">
                            <i class="fas fa-users-cog"></i><span class="nav-text">Update/Manage Scholarship page notifications</span>
                        </a>
                    </li>

                    <li>
                        <a href="admission_pg-notf.php" aria-expanded="false">
                            <i class="fas fa-users-cog"></i><span class="nav-text">Update/Manage Admission page notifications</span>
                        </a>
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
        <div class="container-fluid">
            <div class="content-body">

                <div class="container-fluid">



                    <!--Update Record-->

                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card">
                                    <h4 style=" margin-left: 3%; margin-top: 3%;" class="">Update The Password</h4>

                                    <div class=" card-body">
                                        <div class="form-validation">
                                            <form class="form-valide" action="/loginsystem/update_adminpss.php" method="post">

                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="password">New Password <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="cpassword">Confirm Password <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm password">
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <div class="col-lg-8 ml-auto">
                                                        <button type="submit" class="btn btn-primary">Update Password</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

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
        </div>

        <!-- JvaScripts-->
        <script src="plugins/common/common.min.js"></script>
        <script src="js/custom.min.js"></script>
        <script src="js/settings.js"></script>
        <script src="js/gleek.js"></script>
        <script src="js/styleSwitcher.js"></script>
</body>



</html>