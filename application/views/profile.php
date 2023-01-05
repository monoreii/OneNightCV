<?php
	if(!isset($_SESSION['login'])){
		redirect('Autentikasi/login');
	}
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>User Profile</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/1d92ed9294.js" crossorigin="anonymous"></script>
		<style>
			*{
				font-family: montserrat;
				margin: 0;
				padding: 0;
			}
		</style>
	</head>
	<body class="bg-light">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-4">
			<div class="container">
				<a class="navbar-brand" href="<?php echo site_url()?>/home">
					<img src="<?= base_url('image/OneNightCV.png')?>" class="img-fluid">
				</a>
				<button class="navbar-toggler" type="button" data-target="#navbar-in-collapse" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fas fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav ms-auto">
						<a class="nav-link active p-2" aria-current="page" href="<?php echo site_url()?>/home">Home</a>
						<a class="nav-link p-2" href="<?php echo site_url()?>/ats">ATS Maker</a>
						<a class="nav-link p-2" href="<?php echo site_url()?>/helpdesk">Helpdesk</a>
					</div>
				</div>
			</div>
		</nav>
		<main class="bg-light mt-5 mb-5">
			<div class="container">
				<h5 class="fs-3 fw-semibold">User Profile</h5>
				<div class="row mt-3">
					<div class="col-md-4">
						<div class="card mb-4 shadow-sm">
							<div class="card-body text-center">
								<!-- difference image admin and user  -->
								<img src="<?php
									if($_SESSION['username'] == "admin"){
										echo base_url('image/admin.png');
									} else{
										echo base_url('image/avatar.png');
									}
								?>" alt="Avatar User"
									class="rounded-circle img-fluid mt-3" style="width: 150px;">
								<h5 class="my-3 mt-4">Halo! <?= $profile->username?></h5>
								<p class="text-muted mb-4">Apa kabar hari ini? :-)</p>
								<div class="d-flex justify-content-center mb-2">
									<a class="btn btn-danger ms-1 shadow" href="<?= site_url()?>/Autentikasi/logout">Log Out</a>
								</div>
							</div>
						</div>
						<div class="card mb-4 shadow-sm container">
							<div class="card-body mt-3">
								<!-- difference image admin and user  -->
								<h5 class="fs-6 mb-3"><i class="fas fa-gem me-2 text-secondary"></i>OneNightCV</h5>
								<p class="fs-6 text-secondary fw-bold">
									Kenapa sih OneNightCV?
								</p>
								<p class="text-secondary lh-lg" style="text-align: justify;">
									Karena banyak Mahasiswa "Fresh Graduate" ataupun Pekerja yang ingin melamar pekerjaan, namun kesuliatan saat membuat CV ATS! oleh karena itu kini hadir CV ATS Maker dari <b>OneNightCV!</b>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="card mb-4 shadow-sm">
							<div class="card-body">
								<h5 class="mx-2 fs-5 fw-light mt-1 mb-3">Profile Settings</h5>
								<form action="<?= base_url('index.php/Autentikasi/editProfile')?>" method="POST">
									<div class="form-floating mb-3">
										<input type="text" class="form-control fs-7 shadow-sm" id="floatingInputUser" value="<?= $profile->username?>" name="username">
										<label for="floatingInputUser">Username</label>
									</div>
									<div class="form-floating mb-3">
										<input type="text" class="form-control fs-7 shadow-sm" id="floatingInputValue" value="<?= $profile->nama_lengkap?>" name="nama_lengkap">
										<label for="floatingInputValue">Nama Lengkap</label>
									</div>
									<div class="form-floating mb-3"s>
										<input type="email" class="form-control fs-7 shadow-sm" id="floatingInputEmail" value="<?= $profile->email?>" name="email">
										<label for="floatingInputEmail">Email</label>
									</div>
									<div class="form-floating mb-3">
										<input type="text" class="form-control fs-7 shadow-sm" id="floatingInputMobile" value="<?= $profile->no_hp?>" name="no_hp">
										<label for="floatingInputMobile">Nomor Handphone</label>
									</div>
									<div class="form-floating mb-3">
										<input type="password" class="form-control fs-7 shadow-sm" id="floatingInputPassword" value="<?= $profile->password?>" name="password">
										<label for="floatingInputPassword">Password</label>
									</div>
									<div class="form-floating mb-3">
										<input type="password" class="form-control fs-7 shadow-sm" id="floatingInputPassword" value="<?= $profile->con_password?>" name="con_password">
										<label for="floatingInputPassword">Confirm Password</label>
									</div>
									<button type="submit" class="btn shadow" style="color: white; background: blueviolet;">Edit Profile</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

		<footer class="text-center text-lg-start bg-white text-muted p-1">
            <section class="secFooter">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                    <!-- Grid column -->
						<div class="col-lg-4 mx-auto mb-4">
							<!-- Content -->
							<h6 class="text-uppercase fw-bold mb-4">
								<i class="fas fa-gem me-3 text-secondary"></i>OneNightCV
							</h6>
							<p>
							Here you can use rows and columns to organize your footer content. Lorem ipsum
							dolor sit amet, consectetur adipisicing elit.
							</p>
						</div>
						<!-- Grid column -->
				
						<!-- Grid column -->
						<div class="col-lg-4 mx-auto mb-4">
							<!-- Links -->
							<h6 class="text-uppercase fw-bold mb-4">
							Products
							</h6>
							<p>
							<a href="#!" class="text-reset">HTML</a>
							</p>
							<p>
							<a href="#!" class="text-reset">CSS</a>
							</p>
							<p>
							<a href="#!" class="text-reset">Javascript</a>
							</p>
							<p>
							<a href="#!" class="text-reset">PHP</a>
							</p>
						</div>
						<!-- Grid column -->
				
						<!-- Grid column -->
						<div class="col-lg-4 mx-auto mb-md-0 mb-4">
							<!-- Links -->
							<h6 class="text-uppercase fw-bold mb-4">Contact</h6>
							<p><i class="fas fa-home me-3 text-secondary"></i>Bandung, Indonesia</p>
							<p>
							<i class="fas fa-envelope me-3 text-secondary"></i>
							cvats@kelompok7.com
							</p>
							<p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>

							<br>
							<h6 class="text-uppercase fw-bold mb-2">Email Newsletter</h6>
							<div class="input-group mb-4">
								<?php
                                    echo $this->session->flashdata('email_sent');
                                    echo form_open('/Home/send_mail');
                                ?> 
								<input type="text" class="form-control" placeholder="Email">
								<button class="btn mt-3" style="background-color:blueviolet; color: white;">Send</button>
								<?php
                                    echo form_close();
                                ?> 
							</div>
						</div>
                    </div>
                </div>
            </section>        
            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
            © 2022 Copyright: OneNightCV - Kelompok 7</a>
            </div>
        </footer>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	</body>
</html>
