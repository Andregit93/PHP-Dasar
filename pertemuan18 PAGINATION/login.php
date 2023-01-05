<?php
session_start();
require 'functions.php';

if( isset($_COOKIE["id"]) && isset($_COOKIE["key"]) ) {
    $id = $_COOKIE["id"];
    $key = $_COOKIE["key"];

    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id ");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if( $key === hash("sha256", $row["username"]) ) {
        $_SESSION["login"] = true;
    }

}

if( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}


if( isset($_POST["login"]) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if ( mysqli_num_rows($result) === 1 ) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            // set session
            $_SESSION["login"] = true;
            // cek remember me
            if( isset($_POST["remember"]) ) {
                // set cookie
                setcookie("id", $row["id"], time()+60);
                setcookie("key", hash('sha256', $row["username"]), time()+60 );

            }

            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/login.css">
  <title>Login</title>
</head>

<body>

  <div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
          <div class="card bg-white text-center">
            <div class="card-body p-5">
              <form class="mb-3 mt-2 md-4" action="" method="POST">
                <h2 class="fw-bold mb-1">Sign In</h2>
                <p class=" mb-5">Please enter your username and password!</p>
                <?php if( isset($error) ) : ?>
                <div class="alert alert-danger text-center" role="alert">
                  <div>
                    Username or Password Wrong
                  </div>
                </div>
                <?php endif; ?>
                <div class="mb-3">
                  <label for="username" class="form-label h6 d-flex align-items-start">Username</label>
                  <input type="text" class="form-control" id="username" name="username" required placeholder="Username">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label h6 d-flex align-items-start">Password</label>
                  <input type="password" class="form-control" id="password" name="password" required placeholder="*******">
                </div>
                <input class="remember" type="checkbox" name="remember" id="remember">
                <label class="remember" for="remember">Remember Me</label>
                <div class="d-grid pt-5 d-md-flex justify-content-md-center">
                  <button class="btn btn-outline-primary" style="width: 200px;" type="submit" name="login">Sign In</button>
                </div>
              </form>
              <div class="mb-2">
                <p class="mb-0  text-center">Don't have an account? <a href="registrasi.php"
                    class="text-primary fw-bold">Sign
                    Up</a></p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>