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
<html>
    <head>
		<title>ATS Maker</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/ats.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/nav.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

		<!-- fontawesome -->
		<script src="https://kit.fontawesome.com/1d92ed9294.js" crossorigin="anonymous"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    </head>
    <body class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-4">
            <div class="container">
			<a class="navbar-brand" href="<?php echo site_url()?>/home">Logo</a>
                <button class="navbar-toggler" type="button" data-target="#navbar-in-collapse" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link p-2" aria-current="page" href="<?php echo site_url()?>/home">Home</a>
                        <a class="nav-link p-2 active" href="<?php echo site_url()?>/ats">ATS Maker</a>
						<a class="nav-link p-2" href="<?php echo site_url()?>/helpdesk">Helpdesk</a>
                        <button class="btn btn-outline-light my-2 my-sm-0 buttonNavbar" onclick="location.href='<?php echo site_url()?>/login'"><?= $login?></button>
                    </div>
                </div>
            </div>
        </nav>
        
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 mt-5 mb-5 bg-white p-5 rounded-5 form-all">
                        <div class="container">
							<p class="fs-3 text-center"> Data diri Pribadi </p>
							<hr class="mb-4">
                            <?php echo form_open_multipart('Ats/add_ats'); ?>
                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Masukkan Foto Profil Anda</label>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input class="form-control" name="gambar" type="file" id="gambar">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
									<div class="row">
                                        <div class="col-md-8">
											<label for="inputName" class="form-label">Nama</label>
											<input type="text" class="form-control" id="inputName" name="nama" placeholder="Ex: Asep Rahmatullah">
                                        </div>
                                        <div class="col-md-4">
											<label for="inputName" class="form-label">Pekerjaan</label>
											<input type="text" class="form-control" id="inputName" name="pekerjaan" placeholder="Ex: DevOps">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="" class="form-label">Nomor Telepon</label>
                                            <input type="text" class="form-control" name="no_hp" placeholder="Ex: 081234567890">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ex: aseprah@domain.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="linkedIn" class="form-label">LinkedIn / Website (Opsional)</label>
                                    <input type="text" name="link" class="form-control" id="inputWeb" placeholder="Ex: linkedin.com/aseprah">
                                </div>
								<div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-7">
											<label for="inputAddress" class="form-label">Alamat</label>
											<input type="text" class="form-control" name="alamat" id="inputAddress" placeholder="Ex: Jalan Ciganitri No.16">
                                        </div>
                                        <div class="col-md-5">
											<label for="inputCity" class="form-label">Kota </label>
											<input type="text" class="form-control" name="kota" id="inputCity" placeholder="Ex: Bandung">
                                        </div>
                                    </div>
                                </div>

                                <!-- Pendidikan -->
								<div class="education">
									<p class="fs-3 text-center mt-5">Jenjang Pendidikan Terakhir</p>
									<hr class="mb-4">
									<div class="mb-3">
										<label for="inputName" class="form-label">Pendidikan</label>
										<input type="text" class="form-control" id="inputName" name="pendidikan" placeholder="Ex: SMA Negeri 1 Bandung">
									</div>
								</div>
                                
								<!-- Keahlian -->
								<div class="skills">
									<p class="fs-3 text-center mt-5">Keahlian</p>
									<hr class="mb-4">
									<div class="mb-3">
										<label for="inputName" class="form-label">Keahlian</label>
										<input type="text" class="form-control" id="inputName" name="keahlian" placeholder="Ex: Web">
									</div>
									<div class="mb-3 keahlian1">
										<input type="text" class="form-control" id="inputName" name="keahlian1" placeholder="Ex: Web">
									</div>
									<div class="mb-3 keahlian2">
										<input type="text" class="form-control" id="inputName" name="keahlian2" placeholder="Ex: Web">
									</div>
									<button class="btn" id="addSkils" type="button">+ Tambah Keahlian </button>
								</div>
								
								<!-- Pengalaman -->

								<div class="experience">
									<p class="fs-3 text-center mt-5">Pengalaman</p>
									<hr class="mb-4">
									<div class="mb-3">
										<label for="inputName" class="form-label">Pengalaman</label>
										<input type="text" class="form-control" id="inputpengalaman" name="pengalaman" placeholder="Ex: Juara 1 Hackaton">
									</div>
									<div class="mb-3 pengalaman1">
										<input type="text" class="form-control" id="inputpengalaman1" name="pengalaman1" placeholder="Ex: Juara 1 Hackaton">
									</div>
									<div class="mb-3 pengalaman2">
										<input type="text" class="form-control" id="inputpengalaman2" name="pengalaman2" placeholder="Ex: Juara 1 Hackaton">
									</div>
									<button class="btn" id="add_exp" type="button">+ Tambah Pengalaman </button>
								</div>

								<!-- Bahasa -->
								<div class="language">
									<p class="fs-3 text-center mt-5">Bahasa</p>
									<hr class="mb-4">
									<div class="mb-3">
										<label for="inputBahasa" class="form-label">Bahasa</label>
										<input type="text" class="form-control" id="inputBahasa" name="bahasa" placeholder="Ex: Bahasa Inggris">
									</div>
									<div class="mb-3 bahasa1">
										<input type="text" class="form-control" id="inputBahasa" name="bahasa1" placeholder="Ex: Bahasa Inggris">
									</div>
									<div class="mb-3 bahasa2">
										<input type="text" class="form-control" id="inputBahasa" name="bahasa2" placeholder="Ex: Bahasa Inggris">
									</div>
									<button class="btn" id="addBahasa" type="button">+ Tambah Bahasa </button>
								</div>

								<!-- Sertifikat -->
								<div class="certificates">
									<p class="fs-3 text-center mt-5">Sertifikat</p>
									<hr class="mb-4">
									<div class="mb-3">
										<label for="inputCertif" class="form-label">Nama Sertifikat</label>
										<input type="text" class="form-control" id="inputName" name="sertifikat">
										<div class="row mt-3">
											<div class="col-6">
												<label for="inputDateStart" class="form-label">Tanggal Mulai</label>
												<input type="text" class="form-control" id="inputTanggal" name="tanggalMulai" placeholder="&#xf133 dd/mm/yyyy" style="font-family: montserrat, FontAwesome">
											</div>
											<div class="col-6">
												<label for="inputDateExpired" class="form-label">Tanggal Kadaluarsa</label>
												<input type="text" class="form-control" id="inputExpired" name="tanggalExpired" placeholder="&#xf133 dd/mm/yyyy" style="font-family: montserrat, FontAwesome">
											</div>
										</div>
									</div>

									<div class="mb-3 sertifikat1">
										<label for="inputCertif" class="form-label">Nama Sertifikat</label>
										<input type="text" class="form-control" id="inputName" name="sertifikat1">
										<div class="row mt-3">
											<div class="col-6">
												<label for="inputDateStart" class="form-label">Tanggal Mulai</label>
												<input type="text" class="form-control" id="inputTanggal" name="tanggalMulai1" placeholder="&#xf133 dd/mm/yyyy" style="font-family: montserrat, FontAwesome">
											</div>
											<div class="col-6">
												<label for="inputDateExpired" class="form-label">Tanggal Kadaluarsa</label>
												<input type="text" class="form-control" id="inputExpired" name="tanggalExpired1" placeholder="&#xf133 dd/mm/yyyy" style="font-family: montserrat, FontAwesome">
											</div>
										</div>
									</div>

									<div class="mb-3 sertifikat2">
										<label for="inputCertif" class="form-label">Nama Sertifikat</label>
										<input type="text" class="form-control" id="inputName" name="sertifikat2">
										<div class="row mt-3">
											<div class="col-6">
												<label for="inputDateStart" class="form-label">Tanggal Mulai</label>
												<input type="text" class="form-control" id="inputTanggal" name="tanggalMulai2" placeholder="&#xf133 dd/mm/yyyy" style="font-family: montserrat, FontAwesome">
											</div>
											<div class="col-6">
												<label for="inputDateExpired" class="form-label">Tanggal Kadaluarsa</label>
												<input type="text" class="form-control" id="inputExpired" name="tanggalExpired2" placeholder="&#xf133 dd/mm/yyyy" style="font-family: montserrat, FontAwesome">
											</div>
										</div>
									</div>
									<button class="btn" id="addCertificate" type="button">+ Tambah Sertifikat </button>
								</div>

								<!-- ringkasan -->
								<div class="summary">
									<p class="fs-3 text-center mt-5">Ringkasan</p>
									<hr class="mb-4">
									<div class="mb-3">
										<label for="inputSummary" class="form-label">Ringkasan</label>
										<textarea class="form-control" id="inputRingkasan" name="ringkasan" rows="3"></textarea>
									</div>
									<button class="btn text-primary" id="showRecommend" type="button">Butuh Rekomendasi Ringkasan? </button>

									<div class="btn-hidden text-center mt-3 mb-3">
										<button class="btn btn-warning mx-3" id="showWork" type="button">Rekomendasi Pekerjaan</button>
										<button class="btn btn-success" id="showOrganization" type="button">Rekomendasi Organisasi</button>
									</div>
									<div class="form-floating mb-3 work">
										<textarea class="form-control" id="ringkasanPekerjaan" style="height: 100px" placeholder="Rekomendasi Ringkasan Pekerjaan">Ini untuk pekerjaan</textarea>
										<label for="floatingInput">Rekomendasi Untuk Pekerjaan</label>
									</div>
									<div class="form-floating mb-3 organization">
										<textarea class="form-control" id="ringkasanOrganisasi" style="height: 100px" placeholder="Rekomendasi Ringkasan Organisasi">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, tenetur odit repudiandae expedita ad, quod explicabo doloribus porro ab, aliquam numquam quaerat sed hic soluta dolores facilis esse debitis suscipit.</textarea>
										<label for="floatingInput">Rekomendasi Untuk Organisasi</label>
									</div>
								</div>
								<button type="submit" class="btn mt-4" style="background : blueviolet; color: white;">Simpan & Lanjutkan</button>
								<button type="button" class="btn btn-secondary mt-4" onclick="location.href='<?php echo site_url()?>/preview'">Preview</button> 
							<?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
		<script>
            $(document).ready( function () {
				// keahlian
				$(".keahlian1").hide();
				$(".keahlian2").hide();
				var iter = 1;
				var btnSkills = document.getElementById("addSkils")
				btnSkills.onclick = function(){
					$(".keahlian"+iter).show();
					iter++;
				}

				// pengalaman
				$(".pengalaman1").hide();
				$(".pengalaman2").hide();
				var i = 1;
				var btnSkills = document.getElementById("add_exp")
				btnSkills.onclick = function(){
					$(".pengalaman"+i).show();
					i++;
				}

				// sertifikat
				$(".sertifikat1").hide();
				$(".sertifikat2").hide();
				var j = 1;
				var btnSkills = document.getElementById("addCertificate")
				btnSkills.onclick = function(){
					$(".sertifikat"+j).show();
					j++;
				}

				// bahasa
				$(".bahasa1").hide();
				$(".bahasa2").hide();
				var k = 1;
				var btnSkills = document.getElementById("addBahasa")
				btnSkills.onclick = function(){
					$(".bahasa"+k).show();
					k++;
				}

				$(".btn-hidden").hide();
				$(".work").hide();
				$(".organization").hide();
				var btnSum = document.getElementById("showRecommend")
				var btnWork = document.getElementById("showWork")
				var btnOrg = document.getElementById("showOrganization") 
				btnSum.onclick = function(){
					$(".btn-hidden").slideToggle();
					btnWork.onclick = function(){
						$(".work").slideToggle();
						$(".organization").hide();
					}
					btnOrg.onclick = function(){
						$(".work").hide();
						$(".organization").slideToggle();
						
					}
				}
            });
        </script>
    </body>
</html>
