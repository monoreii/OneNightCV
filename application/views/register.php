<?php 
	include '../config.php';
	
	error_reporting(0);
	
	session_start();
	
	// if (isset($_SESSION['username'])) {
	//     header("Location: index.php");
	// }
	
	if (isset($_POST['submit'])) {
		echo "<script>alert('Masuk.')</script>";
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
	
		if ($password == $cpassword) {
			$sql = "SELECT * FROM users WHERE email='$email'";
			$result = mysqli_query($conn, $sql);
			if (!$result->num_rows > 0) {
				$sql = "INSERT INTO users (username, email, password)
						VALUES ('$username', '$email', '$password')";
				$result = mysqli_query($conn, $sql);
				if ($result) {
					echo "<script>alert('Selamat, registrasi berhasil!')</script>";
					$username = "";
					$email = "";
					$_POST['password'] = "";
					$_POST['cpassword'] = "";
				} else {
					echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
				}
			} else {
				echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
			}
			
		} else {
			echo "<script>alert('Password Tidak Sesuai')</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/register.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        <main class="container">
            <section class="vh-100" style="background-color: #eee;">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-12 col-xl-11">
                            <div class="card text-black" style="border-radius: 25px;">
                                <div class="card-body p-md-5">
                                    <div class="row justify-content-center">
                                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                            <form>
                                                <img src="<?php echo base_url();?>/image/back.png" alt="Back" width="20" onclick="history.back()">
                                            </form>
                                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Registrasi</p>
                                            <form action="<?= base_url('Auth/register')?>" method="POST" class="mx-1 mx-md-4">
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <label class="form-label" for="form3Example1c">Nama Anda</label>
                                                        <input type="text" id="form3Example1c" class="form-control" placeholder="Nama Anda" name="username" value="" required>
                                                        <!-- <input type="text" id="form3Example1c" class="form-control" /> -->
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <label class="form-label" for="form3Example3c">Email Anda</label>
                                                        <input type="email" id="form3Example3c" class="form-control" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                                                        <!-- <input type="email" id="form3Example3c" class="form-control" /> -->
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <label class="form-label" for="form3Example4c">Password</label>
                                                        <input type="password" id="form3Example4c" class="form-control" placeholder="Password" name="password" value="" required>
                                                        <!-- <input type="password" id="form3Example4c" class="form-control" /> -->
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <label class="form-label" for="form3Example4cd">Ulangi Password Anda</label>
                                                        <input type="password" id="form3Example4cd" class="form-control" placeholder="Confirm Password" name="con_password" value="" required>
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-check d-flex justify-content-center mb-5">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                                                    <label class="form-check-label" for="form2Example3">
                                                        Saya setuju dengan <a href="#!">Syarat Layanan</a>
                                                    </label>
                                                </div>
                                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                    <button class="btn btn-lg btn-primary" name="submit">Registrasi</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                            <img src="<?php echo base_url();?>/image/Consent-amico.png"
                                        class="img-fluid" alt="Sample image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html> 
