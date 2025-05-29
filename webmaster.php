<?php
session_start();
if (!isset($_SESSION['loggedinwbm']) || $_SESSION['loggedinwbm'] != true) {
    header("location: wbmlogin.php");
    exit;
}

?>

<?php
include "partials/_dbconnect.php"; // Include database connection

// Fetch the display status from the database
$statusQuery = "SELECT setting_value FROM settings WHERE setting_key = 'displayEnabled'";
$statusResult = mysqli_query($conn, $statusQuery);
$statusRow = mysqli_fetch_assoc($statusResult);
$displayEnabled = $statusRow['setting_value'] === 'true'; // Convert to boolean

// Handle the form submission to update the display status
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newStatus = $_POST['displayEnabled'] === 'true' ? 'true' : 'false';
    $updateQuery = "UPDATE settings SET setting_value = '$newStatus' WHERE setting_key = 'displayEnabled'";
    mysqli_query($conn, $updateQuery);
    // Reload the page to fetch the new status
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
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
        <div class="container-fluid">
            <div class="content-body">

                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class=" card-body">
                                    <div class="container-fluid">

                                    <a class="weatherwidget-io" href="https://forecast7.com/en/16d0673d47/malvan/" data-label_1="MALVAN" data-label_2="WEATHER" data-theme="pure">MALVAN WEATHER</a>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--Update Record-->

                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card">
                                    <h4 style=" margin-left: 3%; margin-top: 3%;" class="">Election Mode</h4>
                                    <small style="color: red; margin:0 5% 0 5%">Election Mode hides the politician photos & information From Website when Model Code of Conduct is going on. (Status : Enable => photos & information is live )</small>
                                    <div class=" card-body">
                                    <h4>Current Display Status: <?php echo $displayEnabled ? 'Enabled' : 'Disabled'; ?></h4>

<form method="post" action="">
    <input type="hidden" name="displayEnabled" value="<?php echo $displayEnabled ? 'false' : 'true'; ?>">
    <button class="btn btn-danger" type="submit"><?php echo $displayEnabled ? 'Disable' : 'Enable'; ?></button>
</form>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card">
                                    <h4 style=" margin-left: 3%; margin-top: 3%;" class="">Admission Popup</h4>
                                    <small style="color: red; margin:0 5% 0 5%">Turning on this admission popup will dispaly a brochure when user visit the Website</small>
                                    <div class=" card-body">

                                    <?php
                                    // Fetch current setting value
        $statusQuery = "SELECT setting_value FROM settings WHERE setting_key = 'show_brochure'";
        $statusResult = mysqli_query($conn, $statusQuery);
        if ($statusResult) {
            $statusRow = mysqli_fetch_assoc($statusResult);
            $currentValue = $statusRow['setting_value'];
                        // Display current status
                        $statusText = $currentValue === 'true' ? 'Enabled' : 'Disabled';
                        echo "<h4>Popup Brochure is currently: <strong>$statusText</strong></h4>";
                    } else {
                        echo "Failed to fetch setting";
                    }
            
                                     ?>
                                    
                                    <form id="toggleForm" action="toggle_setting.php" method="post">
            <button type="submit" class="btn btn-primary" name="toggleSetting">Toggle Brochure Setting</button>
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

    <!--Wether Widget Sript-->
    <script>
        ! function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://weatherwidget.io/js/widget.min.js';
                fjs.parentNode.insertBefore(js, fjs);
            }
        }(document, 'script', 'weatherwidget-io-js');
    </script>

    <!--Wether Widget Sript-->


    <!-- JvaScripts-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>

</html>