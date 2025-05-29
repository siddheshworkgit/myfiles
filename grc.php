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

include 'partials/_dbconnect.php';

$committee_id = 1; // set to the ID of the committee you are updating

// positions and their corresponding designations
$positions = [
    "Chairman" => "Chairman",
    "Member 1" => "Member",
    "Member 2" => "Member",
    "Member 3" => "Member",
    "Member 4" => "Member",
    "Member 5" => "Member",
    "Member 6" => "Member",
    "Member 7" => "Member",
    "Member 8" => "Member",
    "Member-Secretary" => "Member-Secretary"
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $members = $_POST['members'];

    // Update each member
    $update_sql = "UPDATE committee_members SET name = ? WHERE id = ?";
    $update_stmt = $conn->prepare($update_sql);

    foreach ($members as $position => $member) {
        $update_stmt->bind_param("si", $member['name'], $member['id']);
        $update_stmt->execute();
    }

    $update_stmt->close();

    if (count($_POST) > 0) {
        $showAlert = true;
    } else {
        $showError = "Something Went Wrong...";
    }
}

// Fetch existing members
$members_sql = "SELECT * FROM committee_members WHERE committee_id = ? ORDER BY id ASC";
$members_stmt = $conn->prepare($members_sql);
$members_stmt->bind_param("i", $committee_id);
$members_stmt->execute();
$members_result = $members_stmt->get_result();

$members = [];
while ($row = $members_result->fetch_assoc()) {
    $members[$row['designation']] = $row; // Group members by designation for easy display
}
$members_stmt->close();

// Fetch committee name for display
$committee_sql = "SELECT name FROM committees WHERE id = ?";
$committee_stmt = $conn->prepare($committee_sql);
$committee_stmt->bind_param("i", $committee_id);
$committee_stmt->execute();
$committee_result = $committee_stmt->get_result();
$committee = $committee_result->fetch_assoc();
$committee_stmt->close();


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
        <strong>Success!</strong> Data Inserted succsessfully.... 
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

        <div class="container-fluid">
            <div class="content-body">

                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card">
                                <h4 style=" margin-left: 3%; margin-top: 3%;" class="">Grievance Redressal Committee
                                </h4>

                                <div class=" card-body">
                                    <div class="container-fluid">

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Designation</th>
                                                    <th>Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($positions as $position => $designation) { ?>
                                                <tr>
                                                    <td><?php echo $designation; ?></td>
                                                    <td><?php echo isset($members[$position]) ? htmlspecialchars($members[$position]['name']) : ''; ?>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>

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
                                    <h4 style=" margin-left: 3%; margin-top: 3%;" class="">Update The Record </h4>
                                    <small style=" margin-left: 3%; text-align:center; color:red" class="">(Do Not Keep
                                        Field Empty!)</small>
                                    <div class=" card-body">
                                        <div class="form-validation">
                                            <form method="post" action="">
                                                <?php foreach ($positions as $position => $designation) { 
                                                $member = isset($members[$position]) ? $members[$position] : ['id' => '', 'name' => ''];?>
                                                <div class="form-group row">
                                                    <label for="name_<?php echo $position; ?>"
                                                        class="col-sm-2 col-form-label"><?php echo $designation; ?>:</label>
                                                    <div class="col-sm-10">
                                                        <input type="hidden"
                                                            name="members[<?php echo $position; ?>][id]"
                                                            value="<?php echo htmlspecialchars($member['id']); ?>">
                                                        <input type="text" class="form-control"
                                                            id="name_<?php echo $position; ?>"
                                                            name="members[<?php echo $position; ?>][name]"
                                                            value="<?php echo htmlspecialchars($member['name']); ?>"
                                                            placeholder="Enter <?php echo $designation; ?>'s Name"
                                                            required>
                                                    </div>
                                                </div>
                                                <?php } ?>

                                                <div class="form-group row">
                                                    <div class="col-sm-10 offset-sm-2">
                                                        <button type="submit" class="btn btn-primary">Update
                                                            Members</button>
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