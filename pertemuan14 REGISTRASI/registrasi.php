<?php 
require 'functions.php';


if( isset($_POST["register"]) ) {
	if( Registrasi($_POST) > 0 ) {
		echo "<script>
				alert('user baru berhasil ditambahkan, silahkan login!');
				document.location.href = '';
			  </script>";
	} else {
		echo "<script>
				alert('gagal menambahkan user baru!');
				document.location.href = '';
			  </script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrasi User</title>
	<style>
		h1 {
			text-align: center;
		}
		li, label {
			display: block;
			margin: 20px 0 10px 0;
			
		}
		form {
			text-align: center;
			margin-right: 38px;
		}
	</style>
</head>
<body>
	<h1>Registrasi User</h1>
	<form action="" method="POST">
		<ul type="none">
			<li >
				<label for="username">Username</label>
				<input type="text" name="username" id="username" required autocomplete="off">
			</li>
			<li>
				<label for="email">Email</label>
				<input type="email" name="email" id="email" required>
			</li>
			<li>
				<label for="password">Password</label>
				<input type="password" name="password" id="password" required>
			</li>
			<li>
				<label for="passwordValid">Konfirmasi password</label>
				<input type="password" name="passwordValid" id="passwordValid" required>
			</li>
			<li>
				<button type="submit" name="register">Register</button>
			</li>
		</ul>
	</form>


</body>
</html>