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
			<h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Reservasi</h1>
				<ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
					<li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
					<li class="breadcrumb-item"><a
							href="<?= base_url('home/reservasi/') ?>"><?= $konfig->judul_website; ?></a></li>
					<li class="breadcrumb-item active text-success">Reservasi</li>
				</ol>
		</div>
	</div>
	<!-- Header End -->


	<!-- Contact Start -->
	<div class="container-fluid appointment py-5">
		<div class="container py-5">
			<div class="row g-5 align-items-center">
				<div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2">
					<div class="section-title text-start">
						<h4 class="sub-title pe-3 mb-0">Solusi Kesehatan Anda</h4>
						<h1 class="display-4 mb-4">Pelayanan Terbaik dan Terjamin</h1>
						<p class="mb-4">Kami menyediakan solusi yang efektif untuk mengatasi masalah kesehatan dengan
							layanan kami, termasuk Akupunktur dan Spa. Akupunktur membantu meredakan nyeri dengan
							merangsang titik-titik tertentu pada tubuh, sementara perawatan spa untuk relaksasi dan
							pemulihan tubuh.</p>
						<div class="row g-4">
							<div class="col-sm-6">
								<div class="d-flex flex-column h-100">
									<div class="mb-4">
										<h5 class="mb-3"><i class="fa fa-check text-success me-2"></i> Akupunktur Terapi
										</h5>
										<p class="mb-0">Akupunktur membantu merangsang titik syaraf tertentu di tubuh
											untuk meningkatkan aliran energi dan mempromosikan penyembuhan alami.</p>
									</div>
									<div class="mb-4">
										<h5 class="mb-3"><i class="fa fa-check text-success me-2"></i> Relaksasi Tubuh
										</h5>
										<p class="mb-0">Menenangkan Tubuh dan Pikiran Anda
											Nikmati perawatan relaksasi yang membantu mengurangi ketegangan otot dan
											meningkatkan sirkulasi darah, menghilangkan stres, dan meningkatkan kualitas
											tidur.</p>
									</div>

								</div>
							</div>
							<div class="col-sm-6">
								<div class="video h-100">
									<img src="<?= base_url('assets/upload/immumtazah/welcome.jpg') ?>"
										class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
									<button type="button" class="btn btn-play" data-bs-toggle="modal"
										data-bs-target="#videoModal">
										<span></span>
									</button>
								</div>
							</div>

							<!-- Modal for video -->
							<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel"
								aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<!-- Close button (X) at the top-right corner -->
											<button type="button" class="btn-close" data-bs-dismiss="modal"
												aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<!-- Video -->
											<video controls class="w-100 h-100">
												<source src="<?= base_url('assets/upload/immumtazah/video.mp4') ?>"
													type="video/mp4">
												Your browser does not support the video tag.
											</video>
										</div>
									</div>
								</div>
							</div>


						</div>
					</div>
				</div>
				<div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
					<div class="appointment-form rounded p-5">
						<p class="fs-4 text-uppercase text-success">Hubungi</p>
						<h1 class="display-5 mb-4">Reservasi</h1>
						<form>
							<div class="row gy-3 gx-4">
								<div class="col-xl-6">
									<input type="text"
										class="form-control py-3 border-success bg-transparent text-white name"
										placeholder="Nama">
								</div>
								<div class="col-xl-6">
									<input type="text"
										class="form-control py-3 border-success bg-transparent text-white alamat"
										placeholder="Alamat">
								</div>

								<div class="col-xl-6">
									<select class="form-select py-3 border-success bg-transparent pelayanan"
										aria-label="Default select example">
										<option selected>Pelayanan</option>
										<option value="ditempat">Ditempat Praktik</option>
										<option value="homecare">Homecare (H-1)</option>
									</select>
								</div>
								<div class="col-xl-6">
									<input type="date" class="form-control py-3 border-success bg-transparent tanggal">
								</div>

								<div class="col-12">
									<textarea class="form-control border-success bg-transparent text-white keluhan"
										name="text" id="area-text" cols="30" rows="5" placeholder="Keluhan"></textarea>
								</div>

								<div class="col-12">
									<button type="button" class="btn btn-success text-white w-100 py-3 px-5"
										onclick="sendwhatsapp();">Send Via WhatsApp</button>
								</div>
							</div>
						</form>

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
	<script>
		function sendwhatsapp() {
			var phonenumber = "+6281225210252";

			var name = document.querySelector(".name").value;
			var pelayanan = document.querySelector(".pelayanan").value;
			var alamat = document.querySelector(".alamat").value;
			var tanggal = document.querySelector(".tanggal").value.replace("T", "//");
			var keluhan = document.querySelector(".keluhan").value;


			var url = "https://wa.me/" + phonenumber + "?text=" +
				"Hallo Immumtazah Saya Ingin Melakukan Reservasi !%0a" +
				"Nama Saya : " + name + "%0a" +
				"Pelayanan : " + pelayanan + "%0a" +
				"Alamat Saya : " + alamat + "%0a" +
				"Tanggal : " + tanggal + "%0a" +
				"Keluhan: " + keluhan +
				"%0a%0a" +
				"Terima kasih !!!";

			window.open(url, '_blank').focus();
		}
	</script>
</body>

</html>