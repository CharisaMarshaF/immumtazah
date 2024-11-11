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
	<div class="container-fluid bg-dark px-5 d-none d-lg-block">
		<div class="row gx-0 align-items-center" style="height: 45px;">
			<div class="col-lg-8 text-center text-lg-start mb-lg-0">
				<div class="d-flex flex-wrap">
					<a href="<?= $konfig->alamat; ?>" class="text-light me-4"><i
							class="fas fa-map-marker-alt text-success me-2"></i>Lokasi Immumtazah</a>
					
				</div>
			</div>
			<div class="col-lg-4 text-center text-lg-end">
				<div class="d-flex align-items-center justify-content-end">
					<a href="<?= $konfig->facebook ?? '#' ?>" target="_blank"
						class="btn btn-light btn-square border rounded-circle nav-fill me-3">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a href="<?= $konfig->instagram ?? '#' ?>" target="_blank"
						class="btn btn-light btn-square border rounded-circle nav-fill me-3">
						<i class="fab fa-instagram"></i>
					</a>
					<a href="<?= isset($konfig->telepon) ? 'https://wa.me/' . $konfig->telepon : '#' ?>" target="_blank"
						class="btn btn-light btn-square border rounded-circle nav-fill me-0">
						<i class="fab fa-whatsapp"></i>
					</a>
				</div>
			</div>

		</div>
	</div>
	<!-- Topbar End -->


	<!-- Navbar & Hero Start -->
	<div class="container-fluid position-relative p-0">
		<nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
			<a href="<?= base_url() ?>" class="navbar-brand p-0">
				<h1 class="text-success m-0"><img src="<?= base_url('assets/upload/immumtazah/logo.png') ?>" alt="Logo">
				 <?= $konfig->judul_website; ?></h1>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
				<span class="fa fa-bars"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<div class="navbar-nav ms-auto py-0">
					<a href="<?= base_url() ?>" class="nav-item nav-link">Home</a>
					<a href="<?= base_url('home/about/') ?>" class="nav-item nav-link">Tentang</a>
					<a href="<?= base_url('home/galeri/') ?>" class="nav-item nav-link">Galeri</a>
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pelayanan</a>
						<div class="dropdown-menu m-0">
							<a href="<?= base_url('home/pelayanan/') ?>" class="dropdown-item">Semua</a>

							<!-- Loop PHP untuk menampilkan kategori sebagai item dropdown -->
							<?php foreach ($kategori as $kate) { ?>
							<a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>" class="dropdown-item">
								<?= $kate['nama_kategori'] ?>
							</a>
							<?php } ?>
						</div>
					</div>
					<a href="<?= base_url('home/contact/') ?>" class="nav-item nav-link">Kontak</a>
				</div>
				<a href="<?= base_url('home/reservasi/') ?>"
					class="btn btn-success rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Reservasi</a>
			</div>
		</nav>
	</div>
	<!-- Navbar End -->


	<!-- Header Start -->
	<div class="container-fluid bg-breadcrumb">
		<div class="container text-center py-5" style="max-width: 900px;">
			<h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Pelayanan Kami</h1>
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
                                <p class="mb-4"><?= nl2br($uu['keterangan']) ?></p>
								<h1
									class="btn btn-success rounded-pill text-white py-2 px-4 mb-2"><?= $uu['nama_kategori'] ?></h1>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>


	<!-- Blog End -->


	<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
		<div class="container py-5">
			<div class="row g-5">
				<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="footer-item d-flex flex-column">
						<h4 class="text-white mb-4"><i
								class="fas fa-star-of-life me-3"></i><?= $konfig->judul_website; ?></h4>
						<p><?= $konfig->profil_website; ?>
						</p>
						<div class="d-flex align-items-center">
							<i class="fas fa-share fa-2x text-white me-2"></i>
							<a class="btn-square btn btn-success text-white rounded-circle mx-1"
								href="<?= $konfig->facebook; ?>"><i class="fab fa-facebook-f"></i></a>
							<a class="btn-square btn btn-success text-white rounded-circle mx-1"
								href="<?= $konfig->telepon; ?>"><i class="fab fa-whatsapp"></i></a>
							<a class="btn-square btn btn-success text-white rounded-circle mx-1"
								href="<?= $konfig->instagram; ?>"><i class="fab fa-instagram"></i></a>

						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="footer-item d-flex flex-column">
						<h4 class="mb-4 text-white">Quick Links</h4>
						<a href="<?= base_url('home/about/') ?>"><i class="fas fa-angle-right me-2"></i> Tentang</a>
						<a href="<?= base_url('home/contact/') ?>"><i class="fas fa-angle-right me-2"></i> Kontak</a>
						<a href="<?= base_url('home/galeri/') ?>"><i class="fas fa-angle-right me-2"></i> Galeri</a>
						<a href="<?= base_url('home/pelayanan/') ?>"><i
								class="fas fa-angle-right me-2"></i>Pelayanan</a>
						<a href="<?= base_url('home/reservasi/') ?>"><i class="fas fa-angle-right me-2"></i>
							Reservasi</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="footer-item d-flex flex-column">
						<h4 class="mb-4 text-white">Pelayanan</h4>
						<a href="<?= base_url('home/pelayanan/') ?>"><i class="fas fa-angle-right me-2"></i> Semua
							Pelayanan</a>

						<?php foreach ($kategori as $kate) { ?>
						<a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>"><i
								class="fas fa-angle-right me-2"></i><?= $kate['nama_kategori'] ?></a>

						<?php } ?>

					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="footer-item d-flex flex-column">
						<h4 class="mb-4 text-white">Info Kontak</h4>
						<a href="<?= $konfig->alamat; ?>"><i class="fa fa-map-marker-alt me-2"></i>
							Mendungan, Jungke, Karanganyar</a>
						<a href="<?= $konfig->instagram; ?>" class="mb-3"><i
							class="fab fa-instagram me-2"></i>Immumtazah</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer End -->

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