<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Preview - OneNightCV</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/1d92ed9294.js" crossorigin="anonymous"></script>
		<style>
			hr{
				border-top: 3px solid blueviolet;
			}
			.btn-print{
				color: white; 
				background:blueviolet; 
				width:150px;
			}
			.btn-print:hover{
				color: white;
				background: #521987;
				transition: 360ms ease;
			}

			/* @page {
				size: A4;
				margin: 0;
			} */
			@media print and (min-width: 1024px){
				body {
					display: none;
				}
				#content, #content *{
					display: block;
				}
			}
		</style>
	</head>
	<body>
		<header>
			<p class="display-5 text-center mt-5">Preview Hasil CV</p>
		</header>
		<div class="container mt-5 col-md-9 mb-5" id="content">
			<?php foreach ($getAts as $ats){?>
			<div class="row mt-5 mb-5 container">
				<div class="col-md-5 text-end">
					<img src="<?php echo base_url() ?>./image/<?php echo $ats->gambar?>" class="img-fluid rounded-circle" width="230">
				</div>
				<div class="col-md-7 mt-3">
					<p class="fs-3 fw-semibold mx-5"><?php echo $ats->nama?></p>
					<p class="fs-4 fw-light mx-5"> <?php echo $ats->pekerjaan?></p>
					<p class="fs-5 fw-light mx-5"><i class="fa-solid fa-phone"></i> <?php echo $ats->no_hp?></p>
					<p class="fs-5 fw-light mx-5"><i class="fa-solid fa-envelope"></i> <?php echo $ats->email?></p>
					<p class="fs-5 fw-light mx-5"><i class="fa-solid fa-location-dot"></i> <?php echo $ats->alamat?>, <?php echo $ats->kota?> </p>
				</div>
			</div>
			<div class="container mt-5">
				<h5 class="fs-4 mx-5">Ringkasan</h5>
				<hr class="mx-auto" style="width:133vh">
				<div class="summary">
					<p class="fs-5 fw-light mx-5"><?php echo $ats->ringkasan?></p>
				</div>
			</div>

			<div class="container mt-5">
				<h5 class="fs-4 mx-5">Pendidikan Terakhir</h5>
				<hr class="m-auto" style="width:133vh">
				<div class="education">
					<p class="fs-5 fw-light mx-5"><?php echo $ats->pendidikan?></p>
				</div>
			</div>

			<div class="container mt-5">
				<h5 class="fs-4 mx-5">Pengalaman</h5>
				<hr class="mx-auto" style="width:133vh">
				<div class="experience">
					<p class="fs-5 fw-light mx-5"><?php echo $ats->pengalaman?></p>
					<p class="fs-5 fw-light mx-5"><?php echo $ats->pengalaman1?></p>
					<p class="fs-5 fw-light mx-5"><?php echo $ats->pengalaman2?></p>
				</div>
			</div>

			<div class="container mt-5">
				<h5 class="fs-4 mx-5">Sertifikat</h5>
				<hr class="mx-auto" style="width:133vh">				
				<div class="experience">
					<div class="row">
						<div class="col-4">
							<p class="fs-6 fw-light mx-5"><?php echo $ats->tanggalMulai?> - <?php echo $ats->tanggalExpired?> </p>
						</div>
						<div class="col-8">
							<p class="fs-5 fw-light"><?php echo $ats->sertifikat?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-4">
							<p class="fs-6 fw-light mx-5"><?php echo $ats->tanggalMulai1?> <?php echo $ats->tanggalExpired1?> </p>
						</div>
						<div class="col-8">
							<p class="fs-5 fw-light"><?php echo $ats->sertifikat1?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-4">
							<p class="fs-6 fw-light mx-5"><?php echo $ats->tanggalMulai2?> <?php echo $ats->tanggalExpired2?> </p>
						</div>
						<div class="col-8">
							<p class="fs-5 fw-light"><?php echo $ats->sertifikat2?></p>
						</div>
					</div>
				</div>
			</div>

			<div class="container mt-3">
				<h5 class="fs-4 mx-5">Keterampilan</h5>
				<hr class="mx-auto" style="width:133vh">
				<div class="skills">
					<p class="fs-5 fw-light mx-5"><?php echo $ats->keahlian?></p>
					<p class="fs-5 fw-light mx-5"><?php echo $ats->keahlian1?></p>
					<p class="fs-5 fw-light mx-5"><?php echo $ats->keahlian2?></p>
				</div>
			</div>
			<div class="container mt-5 mb-5">
				<h5 class="fs-4 mx-5">Bahasa</h5>
				<hr class="mx-auto" style="width:133vh">
				<div class="language">
					<p class="fs-5 fw-light mx-5"><?php echo $ats->bahasa?></p>
					<p class="fs-5 fw-light mx-5"><?php echo $ats->bahasa1?></p>
					<p class="fs-5 fw-light mx-5"><?php echo $ats->bahasa2?></p>
				</div>
			</div>
		</div>
		<?php }?>
		<div class="container mb-5 text-center">
			<button class="btn btn-print" id="print">Print</button>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

		<script>
			const printBtn = document.getElementById('print')
			printBtn.addEventListener('click', function(){
				print();
			})
		</script>
	</body>
</html>
