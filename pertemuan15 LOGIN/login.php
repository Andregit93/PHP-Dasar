<?php
require 'functions.php';

if( isset($_POST["login"]) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if ( mysqli_num_rows($result) === 1 ) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
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
                <button name="login">Login</button>
            </li>
        </ul>
    </form>
    
</body>
</html>