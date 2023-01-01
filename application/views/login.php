<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/login.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        <main class="container">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-6 col-lg-5 d-none d-md-block text-center">
                                    <img src="<?php echo base_url();?>/image/Consent-amico.png" alt="login form" class="img-fluid w-75">
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                    <div class="card-body p-4 p-lg-5 text-black">
                                    <form action="" method="POST" class="login-email">
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            
                                            <img src="<?php echo base_url();?>/image/back.png" alt="Back" width="20" onclick="history.back()">
                                            
                                            <!--Masukin buat headnya, Logo dll-->
                                            <a class="logoLogin" href="/index.html">
                                                <!-- img -->
                                                LOGO
                                                <span class="label fw-bold fs-3 logoLabel"> OneNightCV </span>
                                            </a>
                                                
                                            </div>
                                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Masuk ke Akun Anda</h5>
                                            <div class="faorm-outline mb-4">
                                                <label class="form-label" for="form2Example17">Username</label>
                                                <input type="text" id="form2Example17" class="form-control form-control-lg"  name="username" value="" required />
                                                
                                            </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example27">Password</label>
                                        
                                            <input type="password" id="form2Example27" class="form-control form-control-lg" name="password" value="" required>
                                        </div>
                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" name="submit">Login</button>
                                            <!-- <button class="btn btn-dark btn-lg btn-block" type="button">Masuk</button> -->
                                        </div>
                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Tidak punya akun? <a href="<?= site_url()?>/Autentikasi/register" style="color: #393f81;">Register disini</a></p>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html> 
