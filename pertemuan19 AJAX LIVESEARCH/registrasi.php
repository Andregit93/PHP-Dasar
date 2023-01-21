<?php 
require 'functions.php';


if( isset($_POST["register"]) ) {
	if( Registrasi($_POST) > 0 ) {
		echo "<script>
				alert('user baru berhasil ditambahkan, silahkan login!');
				document.location.href = 'login.php';
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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/regis.css">
  <title>Registrasi User</title>
</head>

<body>

  <div class="vh-100 d-flex justify-content-center align-items-center mt-5 mb-5">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
          <div class="card bg-white text-center">
            <div class="card-body p-5">
              <form class="mb-3 mt-2 md-4" action="" method="POST">
                <h2 class="fw-bold mb-5">Sign Up</h2>
                <div class="mb-3">
                  <label for="username" class="form-label h6 d-flex align-items-start">Username</label>
                  <input type="text" class="form-control input-sm" id="username" name="username" required placeholder="Username">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label h6 d-flex align-items-start">email</label>
                  <input type="email" class="form-control" id="email" name="email" required placeholder="Email">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label h6 d-flex align-items-start">Password</label>
                  <input type="password" class="form-control" id="password" name="password" required
                    placeholder="*******">
                </div>
                <div class="mb-3">
                  <label for="passwordValid" class="form-label h6 d-flex align-items-start">Confirm Password</label>
                  <input type="password" class="form-control" id="passwordValid" name="passwordValid" required
                    placeholder="*******">
                </div>
                <div class="d-grid pt-5 d-md-flex justify-content-md-center">
                  <button class="btn btn-outline-primary" style="width: 200px;" type="submit" name="register">Sign Up</button>
                </div>
              </form>
              <div class="mb-2">
                <p class="mb-0  text-center">Already have an account ? <a href="login.php"
                    class="text-primary fw-bold">Sign In</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>