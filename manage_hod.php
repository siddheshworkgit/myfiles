<?php
session_start();
include 'partials/_dbconnect.php';

// Redirect to login if not authenticated
if (!isset($_SESSION['user_id'])) {
    header('Location: department_administration.php');
    exit();
}

// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: department_administration.php');
    exit();
}
$update_message = false;
// Handle update
if (isset($_POST['update'])) {
    $sno = $_POST['sno'];
    $name = $_POST['name'];
    $edudtl = $_POST['edudtl'];
    $email = $_POST['email'];
    $cnumber = $_POST['cnumber'];
    $message = $_POST['message'];
    $deptname = $_SESSION['deptname'];

    $stmt = $conn->prepare('UPDATE hod_data SET name = ?, edudtl = ?, email = ?, cnumber = ?, message = ? WHERE sno = ? AND deptname = ?');
    $stmt->bind_param('sssssis', $name, $edudtl, $email, $cnumber, $message, $sno, $deptname);
    $stmt->execute();
    $update_message = true;
}

// Fetch HOD data
$deptname = $_SESSION['deptname'];
$stmt = $conn->prepare('SELECT * FROM hod_data WHERE deptname = ?');
$stmt->bind_param('s', $deptname);
$stmt->execute();
$result = $stmt->get_result();
$hod_data = $result->fetch_all(MYSQLI_ASSOC);
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
    if ($update_message) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> HOD profile data updated successfully . 
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
                        <a href="depart_index.php" aria-expanded="false">
                            <i class="fas fa-tachometer-alt"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-label">ADMISTRATIVE TOOLS</li>

                    <li>
                        <a href="newsletter.php" aria-expanded="false">
                            <i class="fas fa-newspaper"></i><span class="nav-text">Newsletter</span>
                        </a>
                    </li>

                    <li>
                        <a href="manage_hod.php" aria-expanded="false">
                            <i class="fas fa-users-cog"></i><span class="nav-text">Manage HOD Profile</span>
                        </a>
                    </li>

                    <li>
                        <a href="m_labs.php" aria-expanded="false">
                            <i class="fa fa-flask"></i><span class="nav-text">Manage Labs</span>
                        </a>
                    </li>

                    <li>
                        <a href="update_departpass.php" aria-expanded="false">
                            <i class="fas fa-user-cog"></i><span class="nav-text">Upade Password</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <?php foreach ($hod_data as $data): ?>
        <div class="container-fluid">
            <div class="content-body">

                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card">
                                <h4 style=" margin-left: 3%; margin-top: 3%;" class="">Profile Details</h4>

                                <div class=" card-body">
                                    <div class="container-fluid">

                          
                                            <div class="row">
                                                <div class="col-6">
                                                    Name

                                                </div>
                                                <div class="col-6">
                                                <?php echo htmlspecialchars($data['name']); ?>

                                                </div>
                                            </div>

                                            <hr>



                                            <div class="row">
                                                <div class="col-6">
                                                    Educational details

                                                </div>
                                                <div class="col-6">
                                                <?php echo htmlspecialchars($data['edudtl']); ?>

                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row">
                                                <div class="col-6">
                                                    Email

                                                </div>
                                                <div class="col-6">
                                                <?php echo htmlspecialchars($data['email']); ?>

                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row">
                                                <div class="col-6">
                                                    Contact Number
                                                </div>
                                                <div class="col-6">
                                                <?php echo htmlspecialchars($data['cnumber']); ?>

                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row">
                                                <div class="col-6">
                                                    Message
                                                </div>
                                                <div class="col-6">
                                                <?php echo htmlspecialchars($data['message']); ?>

                                                </div>
                                            </div>

                                            <hr>

                                      



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>


                    <!--Update Record-->

                    <?php foreach ($hod_data as $data): ?>
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card">
                                    <h4 style=" margin-left: 3%; margin-top: 3%;" class="">Update The Record</h4>

                                    <div class=" card-body">
                                        <div class="form-validation">
                                            <form class="form-valide" method="POST">
                                            <input type="hidden" name="sno" value="<?php echo htmlspecialchars($data['sno']); ?>">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="name">name <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <input class="form-control" type="text" id="name" name="name" value="<?php echo htmlspecialchars($data['name']); ?>" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="edudtl">Educational Detail <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <input class="form-control" type="text" id="edudtl" name="edudtl" value="<?php echo htmlspecialchars($data['edudtl']); ?>" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="email">Email <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <input class="form-control" type="email" id="email" name="email" value="<?php echo htmlspecialchars($data['email']); ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="cnumber">Contact no. <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <input class="form-control" type="text" id="cnumber" name="cnumber" value="<?php echo htmlspecialchars($data['cnumber']); ?>" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="message">Message / Quote <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <textarea class="form-control" id="message" name="message" rows="4" cols="50" required><?php echo htmlspecialchars($data['message']); ?></textarea>
                                                    </div>
                                                </div>
                                                <?php endforeach; ?>

                                                <div class="form-group row">
                                                    <div class="col-lg-8 ml-auto">
                                                        <button type="submit" name="update" class="btn btn-primary">Update Records</button>
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