<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Data Table | Notika - Notika Admin Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicon
		============================================ -->
	<link rel="icon" href="<?= base_url('assets/upload/immumtazah/pp.jpg') ?>" type="image/x-icon">
	<!-- CSS Bootstrap -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

	<!-- jQuery (jika menggunakan versi Bootstrap lama atau membutuhkan JS untuk Bootstrap 4) -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<!-- JS Bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Google Fonts
		============================================ -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
	<!-- Bootstrap CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/bootstrap.min.css">
	<!-- font awesome CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/font-awesome.min.css">
	<!-- owl.carousel CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/owl.carousel.css">
	<link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/owl.theme.css">
	<link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/owl.transitions.css">
	<!-- meanmenu CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/meanmenu/meanmenu.min.css">
	<!-- animate CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/animate.css">
	<!-- normalize CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/normalize.css">
	<!-- wave CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/wave/waves.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/wave/button.css">
	<!-- mCustomScrollbar CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/scrollbar/jquery.mCustomScrollbar.min.css">
	<!-- Notika icon CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/notika-custom-icon.css">
	<!-- Data Table JS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/jquery.dataTables.min.css">
	<!-- main CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/main.css">
	<!-- style CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/style.css">
	<!-- responsive CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/responsive.css">
	<!-- modernizr JS
		============================================ -->
	<script src="<?= base_url('assets/notika/green') ?>/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
	<!-- Start Header Top Area -->
	<div class="header-top-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="logo-area">
						<a href="#"><img src="<?= base_url('assets/upload/immumtazah/bio.png') ?>" alt=""
								style="width: 100px; height: auto;" /></a>
					</div>
				</div>

				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="header-top-menu">
						<ul class="nav navbar-nav notika-top-nav">
							<li class="nav-item dropdown">
								<a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
									class="nav-link dropdown-toggle"><span><i
											class="notika-icon notika-search"></i></span></a>
								<div role="menu" class="dropdown-menu search-dd animated flipInX">
									<div class="search-input">
										<i class="notika-icon notika-left-arrow"></i>
										<input type="text" />
									</div>
								</div>
							</li>
							<li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
									class="nav-link dropdown-toggle"><span><i
											class="notika-icon notika-support"></i></span></a>
								<div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
									<div class="hd-mg-tt">
										<h2>User</h2>
									</div>

									<div class="hd-message-info">
										<a href="#">
											<div class="hd-message-sn">
												<div class="hd-message-img chat-img">
													<img src="<?= base_url('assets/notika/green') ?>/img/post/1.jpg"
														alt="" />
													<div class="chat-avaible"><i class="notika-icon notika-dot"></i>
													</div>
												</div>
												<div class="hd-mg-ctn">
													<h3><?= $this->session->userdata('nama') ?></h3>
													<p><?= $this->session->userdata('level') ?></p>
												</div>
											</div>
										</a>
									</div>
									<div class="hd-mg-va">
										<a href="<?= base_url('auth/logout') ?>">Logout</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Header Top Area -->
	<!-- Mobile Menu start -->
	<div class="mobile-menu-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="mobile-menu">
						<nav id="dropdown">
							<ul class="mobile-menu-nav">
								<li><a href="<?= site_url('admin/home') ?>"><i class="notika-icon notika-menus"></i>
										Team</a></li>
								<li><a href="<?= site_url('admin/caraousel') ?>"><i class="notika-icon notika-mail"></i>
										Caraousel</a></li>
								<li><a href="<?= site_url('admin/kategori') ?>"><i class="notika-icon notika-edit"></i>
										Kategori</a></li>
								<li><a href="<?= site_url('admin/konten') ?>"><i
											class="notika-icon notika-bar-chart"></i> Konten</a></li>
								<li><a href="<?= site_url('admin/galeri') ?>"><i class="notika-icon notika-windows"></i>
										Galeri</a></li>
								<li><a href="<?= site_url('admin/saran') ?>"><i class="notika-icon notika-form"></i>
										Saran</a></li>
								<li><a href="<?= site_url('admin/user') ?>"><i class="notika-icon notika-support"></i>
										User</a></li>
								<li><a href="<?= site_url('admin/konfigurasi') ?>"><i
											class="notika-icon notika-alarm"></i> Konfigurasi</a></li>
								<li><a href="<?= site_url('admin/testimonial') ?>"><i
											class="notika-icon notika-chat"></i> Testi</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Mobile Menu end -->

	<!-- Main Menu area start-->
	<div class="main-menu-area mg-tb-40">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro" id="mainMenu">
						<li class="col-1"><a href="<?= site_url('admin/home') ?>"><i
									class="notika-icon notika-menus"></i> Team</a></li>
						<li class="col-1"><a href="<?= site_url('admin/caraousel') ?>"><i
									class="notika-icon notika-mail"></i>Caraousel</a></li>
						<li class="col-1"><a href="<?= site_url('admin/kategori') ?>"><i
									class="notika-icon notika-edit"></i>Kategori</a></li>
						<li class="col-1"><a href="<?= site_url('admin/konten') ?>"><i
									class="notika-icon notika-bar-chart"></i>Konten</a></li>
						<li class="col-1"><a href="<?= site_url('admin/galeri') ?>"><i
									class="notika-icon notika-windows"></i> Galeri</a></li>
						<li class="col-1"><a href="<?= site_url('admin/saran') ?>"><i
									class="notika-icon notika-form"></i> Saran</a></li>
						<li class="col-1"><a href="<?= site_url('admin/user') ?>"><i
									class="notika-icon notika-support"></i> User</a></li>
						<li class="col-1"><a href="<?= site_url('admin/konfigurasi') ?>"><i
									class="notika-icon notika-alarm"></i> Konfigurasi</a></li>
						<li class="col-1"><a href="<?= site_url('admin/testimonial') ?>"><i
									class="notika-icon notika-chat"></i> Testi</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Main Menu area End-->

	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-windows"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2><?= $judul_halaman ?></h2>
										<p>Welcome Immumtazah<span class="bread-ntd"></span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
	<!-- Data Table area Start-->
	<div class="tooltips-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="tooltips-inner">
						<div class="tooltips-hd tooltips-hdn">
							<?= $contents; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Data Table area End-->
	<!-- Start Footer area-->
	<footer>
		<div class="footer-copyright-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="footer-copy-right">
							<p>Copyright © 2018
								. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- End Footer area-->
	<!-- jquery
		============================================ -->
	<script src="<?= base_url('assets/notika/green') ?>/js/vendor/jquery-1.12.4.min.js"></script>
	<!-- bootstrap JS
		============================================ -->
	<script src="<?= base_url('assets/notika/green') ?>/js/bootstrap.min.js"></script>
	<!-- wow JS
		============================================ -->
	<script src="<?= base_url('assets/notika/green') ?>/js/wow.min.js"></script>
	<!-- price-slider JS
		============================================ -->
	<script src="<?= base_url('assets/notika/green') ?>/js/jquery-price-slider.js"></script>
	<!-- owl.carousel JS
		============================================ -->
	<script src="<?= base_url('assets/notika/green') ?>/js/owl.carousel.min.js"></script>
	<!-- scrollUp JS
		============================================ -->
	<script src="<?= base_url('assets/notika/green') ?>/js/jquery.scrollUp.min.js"></script>
	<!-- meanmenu JS
		============================================ -->
	<script src="<?= base_url('assets/notika/green') ?>/js/meanmenu/jquery.meanmenu.js"></script>
	<!-- counterup JS
		============================================ -->
	<script src="<?= base_url('assets/notika/green') ?>/js/counterup/jquery.counterup.min.js"></script>
	<script src="<?= base_url('assets/notika/green') ?>/js/counterup/waypoints.min.js"></script>
	<script src="<?= base_url('assets/notika/green') ?>/js/counterup/counterup-active.js"></script>
	<!-- mCustomScrollbar JS
		============================================ -->
	<script src="<?= base_url('assets/notika/green') ?>/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- sparkline JS
		============================================ -->
	<script src="<?= base_url('assets/notika/green') ?>/js/sparkline/jquery.sparkline.min.js"></script>
	<script src="<?= base_url('assets/notika/green') ?>/js/sparkline/sparkline-active.js"></script>
	<!-- flot JS
		============================================ -->
	<script src="<?= base_url('assets/notika/green') ?>/js/flot/jquery.flot.js"></script>
	<script src="<?= base_url('assets/notika/green') ?>/js/flot/jquery.flot.resize.js"></script>
	<script src="<?= base_url('assets/notika/green') ?>/js/flot/flot-active.js"></script>
	<!-- knob JS
		============================================ -->
	<script src="<?= base_url('assets/notika/green') ?>/js/knob/jquery.knob.js"></script>
	<script src="<?= base_url('assets/notika/green') ?>/js/knob/jquery.appear.js"></script>
	<script src="<?= base_url('assets/notika/green') ?>/js/knob/knob-active.js"></script>
	<!--  Chat JS
		============================================ -->
	<script src="<?= base_url('assets/notika/green') ?>/js/chat/jquery.chat.js"></script>
	<!--  todo JS
		============================================ -->
	<script src="<?= base_url('assets/notika/green') ?>/js/todo/jquery.todo.js"></script>
	<!--  wave JS
		============================================ -->
	<script src="<?= base_url('assets/notika/green') ?>/js/wave/waves.min.js"></script>
	<script src="<?= base_url('assets/notika/green') ?>/js/wave/wave-active.js"></script>
	<!-- plugins JS
		============================================ -->
	<script src="<?= base_url('assets/notika/green') ?>/js/plugins.js"></script>
	<!-- Data Table JS
		============================================ -->
	<script src="<?= base_url('assets/notika/green') ?>/js/data-table/jquery.dataTables.min.js"></script>
	<script src="<?= base_url('assets/notika/green') ?>/js/data-table/data-table-act.js"></script>
	<!-- main JS
		============================================ -->
	<script src="<?= base_url('assets/notika/green') ?>/js/main.js"></script>
	<script>
		// Wait for the page to load completely
		window.addEventListener('load', function () {
			// Set a timeout to remove the alert after 4 seconds (4000 milliseconds)
			setTimeout(function () {
				var alertElement = document.getElementById('ilang');
				if (alertElement) {
					alertElement.style.transition = "opacity 0.5s ease"; // Optional: add a fade-out effect
					alertElement.style.opacity = "0"; // Start fade-out effect

					// Remove the element from the DOM after fade-out
					setTimeout(function () {
						alertElement.remove();
					}, 500); // Time to match the fade-out effect duration
				}
			}, 4000);
		});
	</script>
	<script>
		$(document).ready(function () {
			// Add click event to menu items (for both mobile and main menus)
			$('ul.mobile-menu-nav li a, #mainMenu li a').click(function () {
				// Remove active class from all menu items
				$(this).closest('ul').find('li').removeClass('active');
				// Add active class to the clicked item
				$(this).parent().addClass('active');
			});
		});
	</script>
	<!-- tawk chat JS
		============================================ -->

</body>

</html>