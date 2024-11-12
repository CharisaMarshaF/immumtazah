<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Immumtazzah Akupuntur</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">
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
			<h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Layanan Immumtazah</h1>
				<ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
					<li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
					<li class="breadcrumb-item"><a
							href="<?= base_url('home/pelayanan/') ?>"><?= $konfig->judul_website; ?></a></li>
					<li class="breadcrumb-item active text-success">Pelayanan</li>
				</ol>
		</div>
	</div>
	<!-- Header End -->


	<!-- Blog Start -->
	<div class="container-fluid service py-5">
		<div class="container py-5">
			<div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
				<div class="sub-style">
					<h4 class="sub-title px-3 mb-0">Pelayanan kami</h4>
				</div>
				<h1 class="display-3 mb-4">Pelayanan Terapi oleh Terapis Profesional</h1>
				<p class="mb-0">Kami menawarkan berbagai layanan terapi seperti akupuntur, bekam, dan spa. Terapis
					profesional kami menggunakan teknik yang aman dan efektif untuk membantu Anda mengatasi berbagai
					masalah kesehatan, mengurangi stres.</p>
			</div>
			<div class="row g-4 justify-content-center">
				<?php foreach ($konten as $uu) { ?>
				<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
					<div class="service-item rounded">
						<div class="service-img rounded-top">
							<img src="<?= base_url('assets/upload/konten/'.$uu['foto']) ?>"
								class="img-fluid rounded-top w-100" alt="">
						</div>
						<div class="service-content rounded-bottom bg-light p-4">
							<div class="service-content-inner">
								<h5 class="mb-4"><?= $uu['judul'] ?></h5>
								<p class="mb-4"><?= $uu['keterangan'] ?></p>
								<a href=""
									class="btn btn-success rounded-pill text-white py-2 px-4 mb-2"><?= $uu['nama_kategori'] ?></a>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>


	<!-- Blog End -->


	<?php require_once('_footer.php')?>


	<!-- Copyright Start -->
	<div class="container-fluid copyright py-4">
		<div class="container">
			<div class="row g-4 align-items-center">
				<div class="col-md-6 text-center text-md-start mb-md-0">
					<span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Immumtazah</a>,
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