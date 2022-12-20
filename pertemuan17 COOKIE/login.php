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
    <title>Login</title>

    <style>
        h1, p {
            text-align: center;
        }
        form {
            text-align: center;
            margin-right: 38px;
        }
        .remember {
            display: inline;
        }
        li, label {
			display: block;
			margin: 30px 0 10px 0;
		}
        button {
			margin: 10px 0 0 10px;
            width: 80px;
            height: 30px;
		}
    </style>
</head>
<body>

    <h1>Login</h1>
    <?php if( isset($error) ) : ?>
        <p style="font-style: italic; color: red;">Username / Password Salah!</p>
    <?php endif; ?>
    
    <form action="" method="POST">
        <ul type="none">
            <li>
                <label for="username">USERNAME</label>
                <input type="text" name="username" id="username" required>
            </li>
            <li>
                <label for="password">PASSWORD</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <input class="remember" type="checkbox" name="remember" id="remember">
                <label class="remember" for="remember">Remember Me</label>
            </li>
            <li>
                <button name="login">Login</button>
            </li>
            <li>
                <label for="regis"><a href="registrasi.php">Registrasi</a>, jika belum memiliki akun</label>
            </li>
        </ul>
    </form>
    
</body>
</html>