<?php 
// cek apakah tombol submit sudah di tekan apa belum
if ( isset($_POST["submit"]) ) {
    // cek username dan password
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        // jika benar redirect ke admin.php
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h1>Login Admin</h1>
    <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic;">username / password salah</p>
    <?php endif; ?>
    <ul>
        <form action="" method="POST">
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="usernamex">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <button type="submit" name="submit">SEND</button>
        </form>
    </ul>
    
</body>
</html>