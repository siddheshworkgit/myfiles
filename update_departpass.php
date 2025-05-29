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


$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare('SELECT d_name FROM deptusers WHERE id = ?');
$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$d_name = $user['d_name'];

?>

<?php
$update_message = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Fetch the current logged-in user's department name
    $deptname = $_SESSION['deptname']; // Assuming department name is stored in session

    // Get the password and confirmation password from the form
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Check if passwords match
    if ($password === $cpassword) {
        // Hash the new password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare the SQL query to update the password
        $sql = "UPDATE deptusers SET password = ? WHERE deptname = ?";

        // Initialize the prepared statement
        if ($stmt = $conn->prepare($sql)) {
            // Bind the parameters
            $stmt->bind_param('ss', $hashedPassword, $deptname);

            // Execute the query
            if ($stmt->execute()) {
                $update_message = true;
            } else {
                echo "Error updating password: " . $conn->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Error preparing the statement: " . $conn->error;
        }
    } else {
        echo "Passwords do not match.";
    }

    // Close the database connection
    $conn->close();
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
    if ($update_message) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Password updated successfully . 
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
                                            <form class="form-valide" action="/loginsystem/update_departpass.php" method="post">

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