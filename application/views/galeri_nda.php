<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once('_meta.php')?>
</head>

<body>

	


	<!-- Topbar Start -->
	<?php require_once('_navbar.php')?>

	<!-- Navbar End -->


	<!-- Header Start -->
	<div class="container-fluid bg-breadcrumb">
		<div class="container text-center py-5" style="max-width: 900px;">
			<h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Galeri Immumtazah</h1>
				<ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
					<li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
					<li class="breadcrumb-item"><a
							href="<?= base_url('home/galeri/') ?>"><?= $konfig->judul_website; ?></a></li>
					<li class="breadcrumb-item active text-success">Galeri</li>
				</ol>
		</div>
	</div>
	<!-- Header End -->


	<!-- Blog Start -->
	<div class="container-fluid blog py-5">
		<div class="container py-5">
			<div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
				<div class="sub-style">
					<h4 class="sub-title px-3 mb-0">Galeri Kami</h4>
				</div>
				<h1 class="display-3 mb-4"></h1>
				<p class="mb-0">Galeri pelayanan kami dengan pasien dan fasilitas yang ada di immumtazah </p>
			</div>
			<div class="row g-4 justify-content-center">
				<?php foreach ($galeri as $gg) { ?>
				<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
					<div class="blog-item rounded">
						<div class="blog-img border rounded">
							<img src="<?= base_url('assets/upload/galeri/'.$gg['foto']) ?>"
								class="img-fluid w-100 h-100" alt="Image">
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>


	<!-- Blog End -->




	<!-- Copyright Start -->
	<div class="container-fluid copyright py-4">
		<div class="container">
			<div class="row g-4 align-items-center">
				<div class="col-md-6 text-center text-md-start mb-md-0">
					<span class="text-dark"><a href="#"><i class="fas fa-copyright text-dark me-2"></i></a>Immumtazah
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