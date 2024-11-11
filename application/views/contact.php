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
			<h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Kontak Kami</h1>
				<ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
					<li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
					<li class="breadcrumb-item"><a
							href="<?= base_url('home/contact/') ?>"><?= $konfig->judul_website; ?></a></li>
					<li class="breadcrumb-item active text-success">Kontak</li>
				</ol>
		</div>
	</div>
	<!-- Header End -->


	<!-- Contact Start -->
	<div class="container-fluid contact py-5">
		<div class="container py-5">
			<div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
				<div class="sub-style mb-4">
					<h4 class="sub-title text-success px-3 mb-0">Kontak Kami</h4>
				</div>
				<p class="mb-0 text-black-60 fw-bold">Kami senang mendengar dari Anda! Jika Anda memiliki pertanyaan, saran,
					atau ingin berbicara lebih lanjut mengenai layanan kami, jangan ragu untuk menghubungi kami. !</p>
			</div>
			<div class="row g-4 align-items-center">
				<div class="col-lg-5 col-xl-5 contact-form wow fadeInLeft" data-wow-delay="0.1s">
					<h2 class="display-5 text-black mb-2">Hubungi Kami</h2>
					<p class="mb-4 text-black fw-bold">Kami siap membantu Anda. Kirim pesan atau pertanyaan Anda melalui
						formulir kontak di bawah ini, dan tim kami akan segera merespons. Kami berkomitmen untuk
						memberikan pelayanan terbaik untuk Anda!</p>
					<form action="<?= base_url('home/saran') ?>" method="POST">
						<div class="row g-3">
							<div class="col-12">
								<div class="form-floating">
									<input type="text" class="form-control bg-transparent border border-white"
										name="nama" id="nama" placeholder="nama">
									<label for="nama">Nama</label>
								</div>
							</div>
							<div class="col-12">
								<div class="form-floating">
									<input type="text" class="form-control bg-transparent border border-white"
										name="email" id="email" placeholder="email">
									<label for="email">email</label>
								</div>
							</div>
							<div class="col-12">
								<div class="form-floating">
									<textarea class="form-control bg-transparent border border-white"
										placeholder="saran" name="isi_saran" id="isi_saran"
										style="height: 160px"></textarea>
									<label for="isi_saran">Pesan</label>
								</div>
							</div>
							<div class="col-12">
								<button type="submit" class="btn btn-light text-success w-100 py-3">Kirim Pesan</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-lg-2 col-xl-2 wow fadeInUp" data-wow-delay="0.5s">
					<div class="bg-transparent rounded">
						<div class="d-flex flex-column align-items-center text-center mb-4">
							<div class="bg-white d-flex align-items-center justify-content-center mb-3"
								style="width: 90px; height: 90px; border-radius: 50px;"><i
									class="fa fa-map-marker-alt fa-2x text-success"></i></div>
							<h4 class="text-dark">Alamat</h4>
							<p class="mb-0 text-white">Mendungan, Jungke, Karanganyar</p>
						</div>
						<div class="d-flex flex-column align-items-center text-center mb-4">
							<div class="bg-white d-flex align-items-center justify-content-center mb-3"
								style="width: 90px; height: 90px; border-radius: 50px;"><i
									class="fa fa-phone-alt fa-2x text-success"></i></div>
							<h4 class="text-dark">Telepon</h4>
							<p class="mb-0 text-white">+6281225210252</p>
						</div>


					</div>
				</div>
				<div class="col-lg-5 col-xl-5 wow fadeInRight" data-wow-delay="0.3s">
					<div class="d-flex justify-content-center mb-4">
						<a class="btn btn-lg-square btn-light rounded-circle mx-2" href="<?= $konfig->facebook; ?>"><i
								class="fab fa-facebook-f"></i></a>
						<a class="btn btn-lg-square btn-light rounded-circle mx-2" href="<?= $konfig->telepon; ?>"><i
								class="fab fa-whatsapp"></i></a>
						<a class="btn btn-lg-square btn-light rounded-circle mx-2" href="<?= $konfig->instagram; ?>"><i
								class="fab fa-instagram"></i></a>
					</div>
					<div class="rounded h-100">
						<iframe class="rounded w-100" style="height: 500px;"
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.7661578548264!2d110.94197997409425!3d-7.600408692414467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a195d294863f1%3A0xf6989a54de39259e!2sRumah%20Sehat%20IMMUMTAZAH!5e0!3m2!1sid!2sid!4v1731251938794!5m2!1sid!2sid"
							width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
							referrerpolicy="no-referrer-when-downgrade" loading="lazy"
							referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact End -->


	<!-- Blog End -->


	<!-- Footer Start -->
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