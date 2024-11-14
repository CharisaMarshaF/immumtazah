<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Immumtazzah Akupuntur</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="akupuntur bekam spa karanganyar" name="keywords">
	<meta content="melayani akupuntur bekam dan spa" name="description">
	<link rel="icon" href="<?= base_url('assets/upload/immumtazah/pp.jpg') ?>" type="image/x-icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap"
		rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="<?= base_url('assets/terapi') ?>/lib/animate/animate.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/terapi') ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?= base_url('assets/terapi') ?>/css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="<?= base_url('assets/terapi') ?>/css/style.css" rel="stylesheet">
</head>

<body>



	<!-- Topbar Start -->
	<?php require_once('_navbar.php')?>

	<!-- Navbar End -->


	<!-- Header Start -->
	<div class="container-fluid bg-breadcrumb">
		<div class="container text-center py-5" style="max-width: 900px;">
			<h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Tentang Kami</h1>
				<ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
					<li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
					<li class="breadcrumb-item"><a href="<?= base_url('home/about/') ?>">Pages</a></li>
					<li class="breadcrumb-item active text-success">About</li>
				</ol>
		</div>
	</div>
	<!-- Header End -->


	<!-- About Start -->
	<!-- About Start -->
	<div class="container-fluid about bg-light py-5">
		<div class="container py-5">
			<div class="row g-5 align-items-center">
				<div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
					<div class="about-img pb-5 ps-5">
						<img src="<?= base_url('assets/upload/immumtazah/pijat.jpg') ?>" class="img-fluid rounded w-100"
							style="object-fit: cover;" alt="Image">
						<div class="about-img-inner">
							<img src="<?= base_url('assets/upload/immumtazah/pp.jpg') ?>"
								class="img-fluid rounded-circle "
								style="width: 250px; height: 2 50px; object-fit: cover;" alt="Image">
						</div>
						<div class="about-experience">Berkomitmen</div>
					</div>
				</div>
				<div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
					<div class="section-title text-start mb-5">
						<h4 class="sub-title pe-3 mb-0">Tentang Kami</h4>
						<h1 class="display-3 mb-4">IMMUMTAZAH TERAPHY CENTER</h1>
						<p class="mb-4">Rumah Sehat IMMUMTAZAH melayani Akupunktur Kesehatan & Kecantikan, Akupresur (Pijat Titik Syaraf), Bekam, Totok Wajah, Facial, Body Spa, Perawatan Pranikah (lulur, facial, V-herbal treatment), Baby Spa, serta Jamu bersertifikasi (pemesanan).</p>
						<div class="mb-4">
							<p class="text-success-custom">
								<i class="fa fa-check text-success-icon me-2"></i> Sehat dan Segar, Bersama Kami
							</p>
							<p class="text-success-custom">
								<i class="fa fa-check text-success-icon me-2"></i> Pelayanan Ramah, Profesional
							</p>
							<p class="text-success-custom">
								<i class="fa fa-check text-success-icon me-2"></i> Sudah bersertifikasi
							</p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About End -->
	 <!-- Team Start -->
	<div class="container-fluid team py-5">
		<div class="container py-5">
			<div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
				<div class="sub-style">
					<h4 class="sub-title px-3 mb-0">Tim Terapis Kami</h4>
				</div>
				<h1 class="display-3 mb-4">Terapis Berpengalaman <br>dan Profesional</h1>
				<p class="mb-0">Kami bangga dengan tim Terapis kami yang luar biasa, masing-masing merupakan Terapis
					berpengalaman dan handal dan telah menangani banyak pasien dengan berbagai keluhan !</p>
			</div>
			<div class="row g-4 justify-content-center">
				<?php foreach ($team as $aa) { ?>
				<div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
					<div class="shadow team-item rounded">
						<div class="team-img rounded-top h-100">
							<img src="<?= base_url('assets/upload/team/'.$aa['foto']) ?>"
								class="img-fluid rounded-top w-100" alt="">
						</div>
						<div class="team-content text-center border shadow border-top-0 rounded-bottom p-4">
							<h5><?= $aa['nama'] ?></h5>
							<p class="mb-0"><?= $aa['info'] ?></p>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- Team End -->
	<!-- Pemilik Start -->
	<div class="container-fluid about bg-light py-5">
		<div class="container py-5">
			<div class="row g-5 align-items-center">
				<div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
					<div class="about-img pb-5 ps-5">
						<img src="<?= base_url('assets/upload/immumtazah/sampul.jpg') ?>"
							class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
						<div class="about-img-inner">
							<img src="<?= base_url('assets/upload/immumtazah/pemilik.jpg') ?>"
								class="img-fluid rounded-circle "
								style="width: 250px; height: 250px; object-fit: cover;" alt="Image">
						</div>
						<div class="about-experience">PEMILIK IMMUMTAZAH</div>
					</div>
				</div>
				<div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
					<div class="section-title text-start mb-5">
						<h4 class="sub-title pe-3 mb-0">Tentang Saya</h4>
						<h1 class="display-3 mb-4">Imrok Atus Sholihah,S.Tr.Akp., SKM., MKM</h1>
						<p class="mb-4">Seorang Dosen aktif di Poltekkes Kemenkes Surakarta dari tahun 2020-saat ini,
							seorang ibu IKKT Akademi TNI dan seorang ibu dari 1 anak. Saat ini aktif melakukan
							penelitian dan riset bidang ilmu kesehatan dan akupunktur. Dan rutin melaksanakan pengabdian
							masyarakat yang terprogram dari pemerintah maupun pribadi, serta berpengalaman menangani
							banyak pasien dengan berbagai keluhan sejak tahun 2017</p>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Blog End -->


	<!-- Copyright Start -->
	<div class="container-fluid copyright py-4">
		<div class="container">
			<div class="row g-4 align-items-center">
				<div class="col-md-6 text-center text-md-start mb-md-0">
					<span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i></a>Immumtazah
						Teraphy Center
						All right reserved.</span>
				</div>

			</div>
		</div>
	</div>
	<!-- Copyright End -->

	<!-- JavaScript Libraries -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/terapi') ?>/lib/wow/wow.min.js"></script>
	<script src="<?= base_url('assets/terapi') ?>/lib/easing/easing.min.js"></script>
	<script src="<?= base_url('assets/terapi') ?>/lib/waypoints/waypoints.min.js"></script>
	<script src="<?= base_url('assets/terapi') ?>/lib/owlcarousel/owl.carousel.min.js"></script>


	<!-- Template Javascript -->
	<script src="<?= base_url('assets/terapi') ?>/js/main.js"></script>

</body>

</html>