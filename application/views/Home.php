<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OneNightCV</title>
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/1d92ed9294.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
        <!-- navbar css -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/nav.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-4">
            <div class="container">
                <a class="navbar-brand" href="<?php echo site_url()?>/home">Logo</a>
                <button class="navbar-toggler" type="button" data-target="#navbar-in-collapse" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active p-2" aria-current="page" href="<?php echo site_url()?>/home">Home</a>
                        <a class="nav-link p-2" href="<?php echo site_url()?>/ats">ATS Maker</a>
						<a class="nav-link p-2" href="<?php echo site_url()?>/helpdesk">Helpdesk</a>
                        <button class="btn btn-outline-light my-2 my-sm-0 buttonNavbar" onclick="location.href='<?php echo site_url()?>/Autentikasi/login'">Login</button>
                    </div>
                </div>
            </div>
        </nav>
        <header>
            <section class="pt-5 pb-4" id="hero-banner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col px-5">
                            <div class="wrapper-headline">
                                <h1 class="headline-h1">Buat CV ATS mu</h1>
                                <div class="headline-paragraf">Tanpa Ribet, Tanpa Pusing</div>
                                <button class="btn btn-light" onclick="location.href='<?php echo site_url()?>/Ats'">Buat</button>
                            </div>
                        </div>
                        <div class="col">
                            <img class="image-jumbotron" src="<?php echo base_url();?>image/cv.png">
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <main>
            <section class="pt-5 pb-4" id="hero-banner">
                <div class="container px-5">
                    <button class="btn btn-light mb-3" id="buttonReview">Review Pengguna</button>
                </div>
                <div class="container mt-5 mb-4" id="review">
                    <div class="row mt-5" id="table">
                        <div class="col-md-4 text-center">
                            <img src="<?php echo base_url();?>image/mark.jpg" alt="" width="250" style="border-radius: 150px ;">
                        </div>
                        <div class="col-md-8 text-start" style="color: white;">
                            <span class="fs-2 fw-bold">Muhammad Mark Jukeberk</span>
                            <p class="fs-5">Pengamat masa depan</p>
                            <p>Menurut saya, website ini sangatlah bagus! Website ini membantu saya untuk membuat Footbook, Saya merekomendasikan website ini untuk digunakan oleh masyarakat bumi ataupun alien, untuk mempermudah hidup dalam mencari pekerjaan!</p>
                            <div class="rating" style="color: rgb(255, 231, 95);">
                                <i class="fas fa-light fa-star"></i> <span class="fs-3">Rating : 10 / 10</span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row mt-5" id="table">
                        <div class="col-md-8 text-end" style="color: white;">
                            <span class="fs-2 fw-bold">Ahmad Putin</span>
                            <p class="fs-5">Penemu Rudal</p>
                            <p>Website ini membantu saya menjadi Presiden! saya juga dapat mengimpor minyak banyak sekali, dan dengan mudah menutup akses minyak ke beberapa daerah yang tidak sepandangan dengan saya! Terima Kasih OneNightCV</p>
                            <div class="rating" style="color: rgb(255, 231, 95);">
                                <i class="fas fa-light fa-star"></i> <span class="fs-3">Rating : 9 / 10</span>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="<?php echo base_url();?>image/Putin.jpg" alt="" width="250" style="border-radius: 150px ;">
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <footer class="text-center text-lg-start bg-white text-muted">
            <section class="secFooter">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                    <!-- Grid column -->
						<div class="col-lg-4 mx-auto mb-4">
							<!-- Content -->
							<h6 class="text-uppercase fw-bold mb-4">
							<i class="fas fa-gem me-3 text-secondary"></i>Company name
							</h6>
							<p>
							Here you can use rows and columns to organize your footer content. Lorem ipsum
							dolor sit amet, consectetur adipisicing elit.
							</p>

							<br>
							<?php echo $kalender; ?>
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
								<input type="text" class="form-control" placeholder="Email">
								<button class="btn" style="background-color:blueviolet; color: white;">Send</button>
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

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0alpha.6/js/bootstrap.min.js" ></script>
        <script>
            $(document).ready( function () {
                $("#review").hide();
                $("#buttonReview").click(function(){
                    $("#review").slideToggle("slow");
					
                });
            } );
        </script>
    </body>
</html>
