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
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		
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
                        <a class="nav-link p-2" aria-current="page" href="<?php echo site_url()?>/home">Home</a>
                        <a class="nav-link p-2" href="<?php echo site_url()?>/ats">ATS Maker</a>
						<a class="nav-link p-2 active" href="<?php echo site_url()?>/helpdesk">Helpdesk</a>
                        <button class="btn btn-outline-light my-2 my-sm-0 buttonNavbar" onclick="location.href='<?php echo site_url()?>/login'">Login</button>
                        <button class="btn btn-outline-light my-2 my-sm-0 buttonNavbar buttonNavbar-right"onclick="location.href='<?php echo site_url()?>/register'">Daftar</button>
                    </div>
                </div>
            </div>
        </nav>

		<header>
			<!-- add message -->
			<div class="container">
				<div class="row mt-5 align-items-center">
                    <div class="col-5">
                        <h1 class="fs-1">Helpdesk</h1>
                        <h5 class="fs-5">Sampaikan Permasalahanmu</h5>
                    </div>
                    <div class="col-7 ">
                        <form action="<?= base_url('index.php/Helpdesk/add_message') ?>" Method="POST">
                            <input type="text" class="form-control" placeholder="Subject" name="subject">
                            <textarea class="form-control mt-3" placeholder="Message" id="floatingTextarea2" name="message" style="height: 200px"></textarea>
                            <button class="btn form-control mt-4" style="background-color:blueviolet; color: white;" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
			</div>
		</header>

        <main>
			<div class="container mt-4">
				<table class="table table-striped" id="table" style="width:100%"> 
					<thead class="table-dark">
						<tr>
							<th>No</th>
							<th>Subject</th>
							<th>Pesan</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach ($message as $m ) {?>
						<tr>
							<form action="">
								<td><?php echo $no++ ?></td>
								<td><?php echo $m->Subject ?></td>
								<td><?php echo $m->Message ?></td>
								<td>
									<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModaledit" data-toggle="modal">Edit <i class="fas fa-user-edit"></i></button>
									<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" >Delete <i class="fas fa-user-times"></i></button> <!--delete-->
								</td>
							</form>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>

			<!-- modal delete_message -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Hapus Pesan</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<p>Anda ingin menghapus Pesan ini?</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
							<a type="button" class="btn btn-danger"href=" <?= base_url('index.php/Helpdesk/delete_message/').$m->id ?>" >Hapus</a>
						</div>
					</div>
				</div>
			</div>
			<!-- modal edit_message -->
			<div class="modal fade" id="exampleModaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Pesan</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<?php foreach($message as $m){ ?>
							<form action="<?= base_url('index.php/Helpdesk/edit_message/').$m->id ?>" Method="POST">
								<div class="mb-3">
									<label for="recipient-name" class="col-form-label">Subject:</label>
									<input type="text" class="form-control" id="subject" name="subject" value="<?php echo $m->Subject?>">
								</div>
								<div class="mb-3">
									<label for="message-text" class="col-form-label">Message:</label>
									<textarea class="form-control" id="message" name="message"></textarea>
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn" style="background-color:blueviolet; color: white;width:100%">Ubah</button>
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="width:100%">Batal</button>
								</div>
							</form>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
        </main>
        <footer class="text-center text-lg-start bg-white text-muted">
            <section class="secFooter">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                    <!-- Grid column -->
						<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
							<!-- Content -->
							<h6 class="text-uppercase fw-bold mb-4">
							<i class="fas fa-gem me-3 text-secondary"></i>Company name
							</h6>
							<p>
							Here you can use rows and columns to organize your footer content. Lorem ipsum
							dolor sit amet, consectetur adipisicing elit.
							</p>

							<br>
							<div class="container" align="center">
								<div class="card" style="width: 18rem;">
									<div class="card-body">
										<?php echo $kalender; ?>
									</div>
								</div>
							</div>	
						</div>
						<!-- Grid column -->
				
						<!-- Grid column -->
						<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
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
						<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
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
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
		<script type="text/javascript">
			$(document).ready( function () {
				$('#table').DataTable();
			} );
		</script>
	</body>
</html>
