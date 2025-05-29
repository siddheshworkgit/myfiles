<?php
include 'partials/_dbconnect.php';
session_start();
if (!isset($_SESSION['loggedinwbm']) || $_SESSION['loggedinwbm'] != true) {
    header("location: wbmlogin.php");
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
    <style>
        .faculty-photo-preview {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-top: 15px;
        }
        .faculty-photo {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            object-fit: cover;
        }
        .faculty-modal-body img.faculty-photo {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin: 0 auto 15px;
            display: block;
        }
    </style>
</head>

<body>
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

        <?php
    // Handle faculty member insertion
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'partials/_dbconnect.php';

        $name = $conn->real_escape_string($_POST['name']);
        $education = $conn->real_escape_string($_POST['education']);
        $designation = $conn->real_escape_string($_POST['designation']);
        $experience = $conn->real_escape_string($_POST['experience']);
        $message = $conn->real_escape_string($_POST['message']);
        $department = $conn->real_escape_string($_POST['department']);

        // Handle file upload
        $target_dir = "people/";
        $target_file = $target_dir . basename($_FILES["photo"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is an actual image or fake image
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "<div class='alert alert-danger'>File is not an image.</div>";
            $uploadOk = 0;
        }

        // Check file size (limit to 5MB)
        if ($_FILES["photo"]["size"] > 5000000) {
            echo "<div class='alert alert-danger'>Sorry, your file is too large.</div>";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "<div class='alert alert-danger'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</div>";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "<div class='alert alert-danger'>Sorry, your file was not uploaded.</div>";
        } else {
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                // Insert data into database
                $photo = $conn->real_escape_string($target_file);
                $sql = "INSERT INTO faculty (name, education, designation, experience, message, department, photo)
                        VALUES ('$name', '$education', '$designation', '$experience', '$message', '$department', '$photo')";

                if ($conn->query($sql) === TRUE) {
                    echo "<div class='alert alert-success'>New faculty member added successfully.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>Sorry, there was an error uploading your file.</div>";
            }
        }

        $conn->close();
    }

    // Handle faculty member deletion
    if (isset($_GET['delete_id']) && is_numeric($_GET['delete_id'])) {
        include 'partials/_dbconnect.php';

        $faculty_id = $_GET['delete_id'];
        $sql = "DELETE FROM faculty WHERE id = $faculty_id";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='alert alert-success'>Faculty member deleted successfully.</div>";
        } else {
            echo "<div class='alert alert-danger'>Error deleting faculty member: " . $conn->error . "</div>";
        }

        $conn->close();
    }
    ?>

        <div class="container-fluid">
            <div class="content-body">

                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card">
                                <h4 style=" margin-left: 3%; margin-top: 3%;" class="">Add Faculty </h4>
                                <div class=" card-body">
                                <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" class="form-control-file" id="photo" name="photo" required>
            <img id="photoPreview" class="faculty-photo-preview" src="#" alt="Photo Preview" style="display: none;">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="education">Education</label>
            <input type="text" class="form-control" id="education" name="education" required>
        </div>
        <div class="form-group">
            <label for="designation">Designation</label>
            <input type="text" class="form-control" id="designation" name="designation" required>
        </div>
        <div class="form-group">
            <label for="experience">Experience (in years)</label>
            <input type="number" class="form-control" id="experience" name="experience" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="department">Department</label>
            <select class="form-control" id="department" name="department" required>
                <option value="computer">Computer Engineering</option>
                <option value="civil">Civil Engineering</option>
                <option value="extc">ELectronics & Telecommunication Engineering</option>
                <option value="elec">Electrical Engineering</option>
                <option value="fte">Food Technology Engineering</option>
                <option value="mech">Mechanical Engineering</option>
                <option value="scihm">Sciences & Humanities</option>
                <option value="apm">Applied Mechanics</option>
                <option value="fyd">First Year</option>
                <!-- Add other departments as needed -->
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Faculty</button>
    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Update Record-->

                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card">
                                    <h4 style=" margin-left: 3%; margin-top: 3%;" class="">View Faculty </h4>
                                    <div class=" card-body">
                                    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Education</th>
                    <th>Designation</th>
                    <th>Department</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'partials/_dbconnect.php';

                $sql = "SELECT id, photo, name, education, designation, experience, message, department FROM faculty";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $department = ucfirst($row["department"]) . " Engineering";
                        echo '<tr>
                                <td><img src="' . $row["photo"] . '" alt="' . $row["name"] . '" class="faculty-photo"></td>
                                <td>' . $row["name"] . '</td>
                                <td>' . $row["education"] . '</td>
                                <td>' . $row["designation"] . '</td>
                                <td>' . $department . '</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#facultyModal' . $row["id"] . '">
                                        View More
                                    </button>
                                    <a href="?delete_id=' . $row["id"] . '" class="btn btn-danger ml-2" onclick="return confirm(\'Are you sure you want to delete this faculty member?\')">Delete</a>
                                </td>
                              </tr>';

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
                                            <p><strong>Designation:</strong> ' . $row["designation"] . '</p>
                                            <p><strong>Message:</strong> ' . $row["message"] . '</p>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    }
                } else {
                    echo '<tr><td colspan="6">No faculty members found.</td></tr>';
                }

                $conn->close();
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