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
						<a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pelayanan</a>
						<div class="dropdown-menu m-0">
							<a href="<?= base_url('home/pelayanan/') ?>" class="dropdown-item">Semua</a>

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
	<div class="container-fluid about bg-light py-5">
		<div class="container py-5">
			<div class="row g-5 align-items-center">
				<div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
					<div class="about-img pb-5 ps-5">
						<img src="<?= base_url('assets/upload/immumtazah/pijat.jpg') ?>" class="img-fluid rounded w-100"
							style="object-fit: cover;" alt="Image">
						<div class="about-img-inner">
							<img src="<?= base_url('assets/upload/immumtazah/Akupun.jpg') ?>"
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
						<p class="mb-4">Bismillahirrahmanirrahim,Telah Hadir Rumah Sehat IMMUMTAZAH. No. SIP.
							443/234/RS/PAT/01/IV/2024 Melayani Terapi Akupunktur Untuk Kesehatan dan
							Kecantikan,Akupresur (Pijat di Titik Syaraf) , BEKAM, Totok Wajah, Facial,Body Spa
							,Perawatan Kecantikan,Perawatan seluruh tubuh menjelang Pernikahan(lulur, Facial
							,V-herbalTreatment) ,Baby Spa dan Jamu tersaintifikasi(melalui Pemesanan)
							"Bismillah,Mari Berusaha Sehat Bersama-Sama"</p>
						<div class="mb-4">
							<p class="text-secondary"><i class="fa fa-check text-success me-2"></i> Perawatan yang
								Menyegarkan Tubuh Anda.</p>
							<p class="text-secondary"><i class="fa fa-check text-success me-2"></i> Pelayanan Ramah dan
								Profesional. </p>
							<p class="text-secondary"><i class="fa fa-check text-success me-2"></i> Meningkatkan
								Kesehatan dan Kecantikan Alami</p>
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
				<h1 class="display-3 mb-4">Terapis Berpengalaman dan Profesional</h1>
				<p class="mb-0">Kami bangga dengan tim Terapis kami yang luar biasa, masing-masing merupakan Terapis
					berpengalaman dan handal dan telah menangani banyak pasien dengan berbagai keluhan !</p>
			</div>
			<div class="row g-4 justify-content-center">
				<?php foreach ($team as $aa) { ?>
				<div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
					<div class="team-item rounded">
						<div class="team-img rounded-top h-100">
							<img src="<?= base_url('assets/upload/team/'.$aa['foto']) ?>"
								class="img-fluid rounded-top w-100" alt="">
						</div>
						<div class="team-content text-center border border-success border-top-0 rounded-bottom p-4">
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


	<!-- Feature Start -->
	<div class="container-fluid feature py-5">
		<div class="container py-5">
			<div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
				<div class="sub-style">
					<h4 class="sub-title px-3 mb-0">Keunggulan Kami</h4>
				</div>
				<h1 class="display-3 mb-4">Fasilitas Lengkap, Layanan Terpercaya</h1>
				<p class="mb-0">"Dengan fasilitas terpadu yang lengkap, pelayanan yang berkualitas prima, dan tenaga
					ahli yang berpengalaman, kami memberikan pengalaman perawatan yang tak tertandingi. Kami berkomitmen
					untuk menjadi mitra kesehatan yang dapat diandalkan bagi setiap pasien, memberikan solusi yang
					efektif dan menyeluruh untuk setiap kebutuhan kesehatan mereka."</p>
			</div>
			<div class="row g-4 justify-content-center">
				<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
					<div class="row-cols-1 feature-item p-4">
						<div class="col-12">
							<div class="feature-icon mb-4">
								<div class="p-3 d-inline-flex bg-white rounded">
									<i class="fas fa-diagnoses fa-4x text-success"></i>
								</div>
							</div>
							<div class="feature-content d-flex flex-column">
								<h5 class="mb-4">Tenaga Ahli</h5>
								<p class="mb-0">Dilakukan oleh Tenaga Kesehatan Berpendidikan Minimal D3</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
					<div class="row-cols-1 feature-item p-4">
						<div class="col-12">
							<div class="feature-icon mb-4">
								<div class="p-3 d-inline-flex bg-white rounded">
									<i class="fas fa-briefcase-medical fa-4x text-success"></i>
								</div>
							</div>
							<div class="feature-content d-flex flex-column">
								<h5 class="mb-4">Fasilitas Lengkap</h5>
								<p class="mb-0">Menyediakan Fasilitas Kesehatan yang Lengkap dan Sesuai Kebutuhan</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
					<div class="row-cols-1 feature-item p-4">
						<div class="col-12">
							<div class="feature-icon mb-4">
								<div class="p-3 d-inline-flex bg-white rounded">
									<i class="fas fa-hospital-user fa-4x text-success"></i>
								</div>
							</div>
							<div class="feature-content d-flex flex-column">
								<h5 class="mb-4">Pelayanan Prima
								</h5>
								<p class="mb-0">Berkomitmen Memberikan Pelayanan Prima Bagi Pasien</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
					<div class="row-cols-1 feature-item p-4">
						<div class="col-12">
							<div class="feature-icon mb-4">
								<div class="p-3 d-inline-flex bg-white rounded">
									<i class="fas fa-user-md fa-4x text-success"></i>
								</div>
							</div>
							<div class="feature-content d-flex flex-column">
								<h5 class="mb-4">Terapis Bersertifikat</h5>
								<p class="mb-0">Ditangani oleh Terapis Berlisensi yang Memiliki Sertifikasi</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Feature End -->


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