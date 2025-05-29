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
    $notification = $_POST["notification"];
    $date = $_POST["date"];
    $link = $_POST["link"];

    $sql = "INSERT INTO `noticebrd` ( `notification`, `date`, `link`, `type`) VALUES ('$notification', '$date', '$link', 'admissionpage')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $showAlert = true;
    } else {
        $showError = "There Was a problem to insert data !";
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

    <?php
    if ($showAlert) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Notification Data Inserted succsessfully.... 
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
                            <h4 style=" margin-left: 3%; margin-top: 3%;" class="">Create New Admission Page Notification</h4>

                            <div class=" card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="/loginsystem/admission_pg-notf.php" method="post">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="notification">Notification <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="notification" name="notification" placeholder="Enter notification to display">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="date">Date <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="date" name="date" placeholder="Enter date (Eg. XX/XX/XXXX)">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="link">Link <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="link" name="link" placeholder="Enter valid link to document">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Add New Notification</button>
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
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <h4 style=" margin-left: 3%; margin-top: 3%;" class="">Manage Admission Page Notification</h4>

                            <div class=" card-body">

                                <div class="table-responsive">
                                    <div class="container">
                                        <table class="table">
                                            <tr>
                                                <th>Serial</th>
                                                <th>Notification</th>
                                                <th>Date</th>
                                                <th>Link</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include "partials/_dbconnect.php";
                                                include_once "Common_admission.php";
                                                $common = new Common();
                                                $records = $common->getAllRecords($conn);
                                                if ($records->num_rows > 0) {
                                                    $sr = 1;
                                                    while ($record = $records->fetch_object()) {
                                                        $recordId = $record->id;
                                                        $notification = $record->notification;
                                                        $date = $record->date;
                                                        $link = $record->link;
                                                ?>
                                                        <tr>
                                                            <th><?php echo $sr; ?></th>
                                                            <th><?php echo $notification; ?></th>
                                                            <th><?php echo $date; ?></th>
                                                            <th><?php echo $link; ?></th>
                                                            <td><a href="delete-script_admission.php?recordId=<?php echo $recordId ?>" class="btn btn-danger btn-sm">Delete</a> </td>
                                                        </tr>
                                                <?php
                                                        $sr++;
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>

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