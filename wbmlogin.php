<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];



    $sql = "Select * from adminconsole where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                $login = true;
                session_start();
                $_SESSION['loggedinwbm'] = true;
                $_SESSION['username'] = $username;
                header("location: webmaster.php");
            } else {
                $showError = "Invalid Credentials";
            }
        }
    } else {
        $showError = "Invalid Credentials";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Department Of Computer Science</title>
    <link rel="icon" type="image/png" sizes="32x32" href="images/fv/favicon-32x32.png" />

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/webmster_login.css">
</head>

<body>

    <?php
    if ($login) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
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

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-md-7 intro-section1">
                    <div class="nav-box"><img class="nav-brand-up" src="images/brand.png" alt=""></div>
                    <div class="intro-content-wrapper">
                        <h1 class="intro-title">Welcome to webmaster portal !</h1>
                        <p class="intro-text">Kindly login with your credentials</p>

                        <a href="index.php" class="btn btn-read-more">Back To Home Page</a>


                    </div>

                </div>

                <div class="col-sm-6 col-md-5 form-section">
                    <div class="login-wrapper">
                        <h2 class="login-title">Sign in</h2>
                        <form action="/loginsystem/wbmlogin.php" method="post">
                            <div class="form-group">
                                <label for="email" class="sr-only">Username</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <button type="submit" class="btn login-btn">Login</button>
                                <a href="reset_admin.php" target="_blank" class="forgot-password-link">Forgot Password?</a>
                            </div>
                        </form>
                        <p class="copright-devloper">&copy; <script>
                                document.write(new Date().getFullYear())
                            </script> GPM All rights reserved | Design by Department Of Computer Engineering </p>

                    </div>

                </div>

            </div>

        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>

</html>