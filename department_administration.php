<?php
session_start();
include 'partials/_dbconnect.php';
$login = false;
$showError = false;
// Handle login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare('SELECT * FROM deptusers WHERE username = ?');
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['deptname'] = $user['deptname'];
        $login = true;
        header('Location: depart_index.php');
        exit();
    } else {
        $showError = 'Invalid credentials';
    }
}
?>
<!--PHP SCRIPT ENDED-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Department Administration</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/stu_login.css">

  <link rel="icon" type="image/png" sizes="32x32" href="images/fv/favicon-32x32.png" />

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
        <div class="col-sm-6 col-md-7 intro-section">
            <div class="nav-box"><img class="nav-brand-up" src="images/brand.png" alt="" loading="lazy"></div>
          <div class="intro-content-wrapper">
            <h1 class="intro-title">Department Administration Portal !</h1>
            <p class="intro-text">If you don't have login credentials Please contact Administration.</p>

          <a href="index.php" class="btn btn-read-more">Back To Home Page</a>


          </div>
          
         </div>

         <div class="col-sm-6 col-md-5 form-section">
          <div class="login-wrapper">
            <h2 class="login-title">Sign in</h2>
            <form method="POST">
              <div class="form-group">
                <label for="username" class="sr-only">Username</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Username">
              </div>
              <div class="form-group mb-3">
                <label for="password" class="sr-only">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
              </div>
              <div class="d-flex justify-content-between align-items-center mb-5">
              <button type="submit" name="login" class="btn login-btn">Login</button>
                <a href="Reset_DepPass.php" class="forgot-password-link">Forgot Password?</a>
              </div>
            </form>
            <p class="copright-devloper">&copy; <script>document.write(new Date().getFullYear())</script> GPM All rights reserved | Design by Department Of Computer Engineering </p>

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