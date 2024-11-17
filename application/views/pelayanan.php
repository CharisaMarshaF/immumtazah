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
				<h1 class="display-3 mb-4">Layanan Terapi Kami</h1>
				<p class="mb-0">Yuk !! Coba rasakan pelayanan terapi di Immumtazah Teraphy Center, seperti Akupuntur, Bekam dan Spa.</p>
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
								<div class="d-flex text-center mb-3">
									<div class="d-flex text-center mb-1">
										<p class="mb-0 text-list"><i class="fa fa-heartbeat text-success"></i>
											<?= $uu['nama_kategori'] ?></p>
									</div>
								</div>
								<h5 class="mb-4"><?= $uu['judul'] ?></h5>
                                <p class="mb-4"><?= nl2br($uu['keterangan']) ?></p>
								
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>


	<!-- Blog End -->


	<!-- Footer End -->

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