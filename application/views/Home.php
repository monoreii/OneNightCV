<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!isset($_SESSION['login'])){
	$login = "Login";
} else{
	if($_SESSION['username'] == true){
		$login = $_SESSION['username'];
	} else{
		$login = "Login";
	}
}
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
                        <a class="btn btn-outline-light my-2 my-sm-0 buttonNavbar" href="<?php echo site_url()?>/Home/profile"> <?= $login;?></a>
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
			<section id="hero-banner">
				<div class="container d-flex align-items-center justify-content-center">
					<div class="col-11 mt-5">
						<h5 class="display-5 mx-2 mt-5 mb-5 text-white text-center">Review User</h5>
						<div class="container bg-light p-3 rounded-3">
							<table class="table mt-1">
								<thead>
									<tr>
										<th>Review</th>
										<th>Rating</th>
									</tr>
								</thead>
								<tbody id="idbody">
								</tbody>
							</table>
						</div>	

						<!-- add data table review -->
						<button class="btn btn-light mt-3 mb-3" id="hideBtn"> Tambah Review</button>
						<div class="container col-8 mt-5 bg-light p-5 rounded-3 mb-5 shadow" id="tambahReview">
							<h1 class="fs-2 fw-light mb-4 text-center">Tambah Review</h1>
							<form action="<?= site_url('Home/addReview')?>" method="POST">
								<div class="mb-3">
									<div class="row">
										<div class="col-10">
											<label for="exampleInputEmail1" class="form-label">Review</label>
											<input type="text" class="form-control" id="exampleInput" name="review">
										</div>
										<div class="col-2">
											<label for="exampleInput" class="form-label">Rating</label>
											<select class="form-select" aria-label="Default select example" name="rating">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
											</select>
										</div>
									</div>
								</div>
								<button type="submit" class="btn" style="color: white; background: blueviolet;">Tambah Review</button>
							</form>
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

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0alpha.6/js/bootstrap.min.js" ></script>
        <script>
            $(document).ready( function () {
				clear();
                
				$("#tambahReview").hide();
                $("#hideBtn").click(function(){
                    $("#tambahReview").slideToggle("slow");
					
                });
            } );
            
            function clear() {
                setTimeout(function() {
                    update();
                    clear();
                }, 1000); //Every 1500 milliseconds
            }
            
            function update() {
                $.ajax({
                    url: 'http://localhost:3000/getReview',
                    type: 'get',
                    dataType: 'json',
                    success: function(response){
                        response = response.data;
                        var len = 0;
                        $('#idbody').empty(); 
                        if(response != null){
                            len = response.length;
                        }
                        if(len > 0){
                            for(var i=0; i<len; i++){
                                //Attribute
                                var review = response[i].review;
                                var rate = response[i].rating;
                                var tr_str = 
                                    "<tr>" +
                                        "<td class='w-75'>" + review + "</td>" +
                                        "<td class='w-25'>" + "<i class='fa-solid fa-star text-warning'></i>" + " " +rate + "</td>" +
                                    "</tr>" ;
                                $("#idbody").append(tr_str);
								
                            }
                        }else{
                            var tr_str = 
                                "<h5>Empty Data</h5>";
                            $("#idbody").append(tr_str);
                        }
                    }
                });
            }
        </script>
    </body>
</html>
