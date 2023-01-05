<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/register.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <main class="container">
            <section class="mt-5 mb-5">
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
                                            <form action="<?= site_url('Autentikasi/register')?>" method="POST" class="mx-1 mx-md-4">
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <label class="form-label" for="form3Example1c">Username Anda</label>
                                                        <input type="text" id="form3Example1c" class="form-control" placeholder="Username" name="username" value="" required>
                                                        <!-- <input type="text" id="form3Example1c" class="form-control" /> -->
                                                    </div>
                                                </div>
												<div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <label class="form-label" for="form3Example1c">Nama Anda</label>
                                                        <input type="text" id="form3Example1c" class="form-control" placeholder="Nama Anda" name="nama_lengkap" value="" required>
                                                        <!-- <input type="text" id="form3Example1c" class="form-control" /> -->
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <label class="form-label" for="form3Example3c">Email Anda</label>
                                                        <input type="email" id="form3Example3c" class="form-control" placeholder="Email" name="email" value="" required>
                                                        <!-- <input type="email" id="form3Example3c" class="form-control" /> -->
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <label class="form-label" for="form3Example4c">Password Anda</label>
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
												<div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <label class="form-label" for="form3Example1c">Nomor Handphone Anda</label>
                                                        <input type="text" id="form3Example1c" class="form-control" placeholder="Nomor Handphone" name="no_hp" value="" required>
                                                        <!-- <input type="text" id="form3Example1c" class="form-control" /> -->
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4 mt-5">
                                                    <button class="btn btn-lg btn-primary" name="submit" type="submit">Registrasi</button>
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
