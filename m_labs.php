<?php
session_start();
include 'partials/_dbconnect.php';

// Redirect to login if not authenticated
if (!isset($_SESSION['user_id'])) {
    header('Location: department_administration.php');
    exit();
}
$update_message = false;

// Handle updating lab
if (isset($_POST['update_lab'])) {
    $id = $_POST['id'];
    $incharge = $_POST['incharge'];

    $stmt = $conn->prepare('UPDATE labs SET incharge = ? WHERE id = ? AND deptname = ?');
    $stmt->bind_param('sis', $incharge, $id, $_SESSION['deptname']);
    $stmt->execute();
    $update_message = true;
}

// Fetch labs for the logged-in department
$deptname = $_SESSION['deptname'];
$stmt = $conn->prepare('SELECT * FROM labs WHERE deptname = ?');
$stmt->bind_param('s', $deptname);
$stmt->execute();
$result = $stmt->get_result();

// Check if there are labs fetched
if ($result->num_rows > 0) {
    $labs = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $labs = []; // Initialize as an empty array if no labs found
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Manage Labs</title>
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
        <strong>Success!</strong> Lab data updated successfully . 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>

    <!--Showing Message To User-->

    <div id="main-wrapper">

        <div class="nav-header">
            <div class="brand-logo">
                <a style="padding:0%;">
                    <b class="logo-abbr"><img src="images/logo_MH.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <h4
                            style="color:white; margin-top:3%; margin-left:10%; font-size:1.2rem; font-weight: 700;line-height: normal; font-family: 'Ubuntu', sans-serif;">
                            <img style=" height: 65px; margin-right:2%;" src="images/logo_MH.png" alt=""> GPMalvan</h4>
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
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class=" card-body">
                                    <div class="container-fluid">
                                        <div class="table-responsive">
                                            <h3>Current Labs</h3>
                                            <?php if (!empty($labs)): ?>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Lab Name</th>
                                                    <th>Incharge</th>
                                                    <th>Action</th>
                                                </tr>
                                                <?php foreach ($labs as $lab): ?>
                                                <tr>
                                                    <td><?php echo htmlspecialchars($lab['id']); ?></td>
                                                    <td><?php echo htmlspecialchars($lab['lab_name']); ?></td>
                                                    <td>
                                                        <form class="form-valide" method="POST" style="display:inline;">
                                                            <input type="hidden" name="id"
                                                                value="<?php echo $lab['id']; ?>">
                                                            <input class="form-control" type="text" name="incharge"
                                                                value="<?php echo htmlspecialchars($lab['incharge']); ?>"
                                                                required>


                                                    </td>
                                                    <td>
                                                        <button class="btn btn-primary" type="submit" name="update_lab">Update</button>
                                                    </td>
                                                    </form>
                                                </tr>
                                                <?php endforeach; ?>
                                            </table>
                                            <?php else: ?>
                                            <p>No labs found.</p>
                                            <?php endif; ?>

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