<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Immumtazzah Akupuntur</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<link rel="icon" href="<?= base_url('assets/upload/immumtazah/pp.jpg') ?>" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">


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




	<?php require_once('_navbar.php')?>



	<!-- Carousel Start -->
	<div class="header-carousel owl-carousel">
		<?php foreach ($caraousel as $aa) { ?>
		<div class="header-carousel-item">
			<img src="<?= base_url('assets/upload/caraousel/'.$aa['foto']) ?>" class="img-fluid w-100" alt="Image">
			<div class="carousel-caption">
				<div class="carousel-caption-content p-3">
					<h1 class="display-3 text-uppercase fw-bold text-white mb-4"
						style="letter-spacing: 3px; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5); margin-bottom: 20px; ">
						<?= $aa['judul'] ?></h1>
					<p class="mb-5 fs-6"
						style="text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5); margin-bottom: 30px; font-family: 'Source Sans Pro', sans-serif;">
						<?= $aa['deskripsi'] ?></p>
					<a class="btn btn-success rounded-pill text-white py-3 px-5"
						href="<?= base_url('home/reservasi/') ?>">Reservasi</a>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
	<!-- Carousel End -->
	</div>
	<!-- Navbar & Hero End -->


	<!-- Services Start -->
	<div class="container-fluid service py-5">
		<div class="container py-5">
			<div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
				<div class="sub-style">
					<h4 class="sub-title px-3 mb-0">Pelayanan kami</h4>
				</div>
				<h1 class="display-3 mb-4">Akupuntur Bekam dan Spa</h1>
				<p class="mb-0">Manfaat dapat mengurangi stres, mengatasi gangguan kesehataan, dan meningkatkan daya
					tahan tubuh</p>
			</div>
			<div class="row g-4 justify-content-center">
				<?php foreach ($recentpost as $recentpost) { ?>
				<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
					<div class="service-item rounded">
						<div class="service-img rounded-top">
							<img src="<?= base_url('assets/upload/konten/'.$recentpost->foto) ?>"
								class="img-fluid rounded-top w-100" alt="">
						</div>
						<div class="service-content rounded-bottom bg-light p-4">
							<div class="service-content-inner">
								<div class="d-flex justify-content-between mb-4">
									<div class="d-flex justify-content-between mb-1">
										<p class="mb-0 text-list"><i class="fa fa-heartbeat text-success"></i>
											<?= $recentpost->nama_kategori; ?></p>
									</div>
								</div>
								<h5 class="mb-4"><?= $recentpost->judul; ?></h5>
								<p class="mb-4"><?= nl2br($recentpost->keterangan) ?></p>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				<div class="col-12 text-center wow fadeInUp mt-5" data-wow-delay="0.2s">
					<a class="btn btn-success rounded-pill text-white py-3 px-5"
						href="<?= base_url('home/pelayanan/') ?>">Layanan Unggulan</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Services End -->

	<!-- Feature Start -->
	<div class="container-fluid feature py-5">
		<div class="container py-5">
			<div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
				<div class="sub-style">
					<h4 class="sub-title px-3 mb-0">Keunggulan Kami</h4>
				</div>
				<h1 class="display-3 mb-4">Fasilitas Lengkap, Layanan Terpercaya</h1>
				<p class="mb-0">"Kami menyediakan fasilitas lengkap dan pelayanan berkualitas, didukung oleh tenaga ahli
					berpengalaman. Komitmen kami adalah menjadi mitra kesehatan terpercaya, memberikan solusi kesehatan
					untuk Anda."</p>

			</div>
			<div class="row g-4 justify-content-center">
				<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
					<div class="row-cols-1 feature-item p-4 text-center shadow-lg">
						<div class="col-12">
							<div class="feature-icon mb-4">
								<div class=" d-inline-flex bg-white rounded justify-content-center align-items-center"
									style="width: 200px; height: 200px;">
									<img src="<?= base_url('assets/upload/immumtazah/terapis.jpg') ?>"
										alt="Feature Icon" class="img-fluid"
										style="object-fit: cover; width: 100%; height: 100%;">
								</div>
							</div>
							<div class="feature-content d-flex flex-column">
								<h5 class="mb-4">Tenaga Ahli</h5>
								<p class="mb-0">Tenaga Kesehatan Minimal D3</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
					<div class="row-cols-1 feature-item p-4 text-center shadow-lg">
						<div class="col-12">
							<div class="feature-icon mb-4">
								<div class=" d-inline-flex bg-white rounded justify-content-center align-items-center"
									style="width: 200px; height: 200px;">
									<img src="<?= base_url('assets/upload/immumtazah/fasilitas.jpg') ?>"
										alt="Feature Icon" class="rounded img-fluid"
										style="object-fit: cover; width: 100%; height: 100%;">
								</div>
							</div>
							<div class="feature-content d-flex flex-column">
								<h5 class="mb-4">Fasilitas</h5>
								<p class="mb-0">Fasilitas Kesehatan yang Lengkap</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
					<div class="row-cols-1 feature-item p-4 text-center shadow-lg">
						<div class="col-12">
							<div class="feature-icon mb-4">
								<div class=" d-inline-flex bg-white rounded justify-content-center align-items-center"
									style="width: 200px; height: 200px;">
									<img src="<?= base_url('assets/upload/immumtazah/prima.jpg') ?>" alt="Feature Icon"
										class="rounded img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
								</div>
							</div>
							<div class="feature-content d-flex flex-column">
								<h5 class="mb-4">Pelayanan Prima</h5>
								<p class="mb-0">Berkomitmen Memberikan Pelayanan Terbaik</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
					<div class="row-cols-1 feature-item p-4 text-center shadow-lg">
						<div class="col-12">
							<div class="feature-icon mb-4">
								<div class=" d-inline-flex bg-white rounded justify-content-center align-items-center"
									style="width: 200px; height: 200px;">
									<img src="<?= base_url('assets/upload/immumtazah/sertifikasi.jpg') ?>"
										alt="Feature Icon" class="rounded img-fluid"
										style="object-fit: cover; width: 100%; height: 100%;">
								</div>
							</div>
							<div class="feature-content d-flex flex-column">
								<h5 class="mb-4">Bersertifikasi</h5>
								<p class="mb-0">Tampat kami Sudah Sertifikasi</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Feature End -->


	<!-- Book Appointment Start -->
	<div class="container-fluid appointment py-5">
		<div class="container py-5">
			<div class="row g-5 align-items-center">
				<!-- Text content on the left -->
				<div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2">
					<div class="section-title text-start">
						<h4 class="sub-title pe-3 mb-0">Solusi Kesehatan Anda</h4>
						<h1 class="display-4 mb-4">Pelayanan Terbaik dan Terjamin</h1>
						<div class="row g-4">
							<div class="col-sm-6">
								<div class="column">
									<div class="mb-4">
										<h5 class="mb-3"><i class="fa fa-check text-success me-2"></i> Akupunktur Terapi
										</h5>
										<p class="mb-0">Memperlancar aliran darah dan mempercepat penyembuhan 
											tubuh.</p>
									</div>
									<div class="mb-4">
										<h5 class="mb-3"><i class="fa fa-check text-success me-2"></i> Relaksasi Tubuh
										</h5>
										<p class="mb-0">Mengurangi ketegangan otot dan stres, meningkatkan kualitas
											tidur.</p>
									</div>
									<div class="mb-4">
										<h5 class="mb-3"><i class="fa fa-check text-success me-2"></i> Bekam</h5>
										<p class="mb-0">Meningkatkan sirkulasi darah dan membantu detoksifikasi tubuh.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4" data-wow-delay="0.2">
					<div class="video-container position-relative" >

						<button type="button" class="btn btn-play position-absolute top-50 start-50 translate-middle"
							onclick="playVideo()">
							<span class="fa fa-play"></span>
						</button>
						<video id="video" class="rounded w-100 h-auto" controls>
							<source src="<?= base_url('assets/upload/immumtazah/video.mp4') ?>" type="video/mp4">
							Your browser does not support the video tag.
						</video>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Modal Video -->

	<!-- Book Appointment End -->

	<div class="container-fluid appointmentt py-5 mb-5">
		<div class="container py-5">
			<div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
				<div class="sub-style mb-4">
					<h4 class="sub-title text-success px-3 mb-0">Hubungi Kami</h4>
				</div>
				<p class="mb-0 text-black-60 fw-">Tunggu Apalagi Buruan Reservasi Sekarang !!!</p>
			</div>
			<div class="row">
				<div class="col-lg-6 wow fadeInRight mb-5" data-wow-delay="0.4s">
					<div class="appointmentt-form rounded p-5">
						<h1 class="display-5 mb-5">Reservasi</h1>
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
				<div class="col-lg-6 col-xl-6 wow fadeInRight" data-wow-delay="0.3s">
					<div class="rounded h-100">
						<iframe class="rounded w-100" style="height: 550px;"
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.7661578548264!2d110.94197997409425!3d-7.600408692414467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a195d294863f1%3A0xf6989a54de39259e!2sRumah%20Sehat%20IMMUMTAZAH!5e0!3m2!1sid!2sid!4v1731251938794!5m2!1sid!2sid"
							width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
							referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>




	<!-- Testimonial Start -->
	<div class="container-fluid testimonial py-5 wow zoomInDown" data-wow-delay="0.1s">
		<div class="container py-5">
			<div class="section-title mb-5">
				<div class="sub-style">
					<h4 class="sub-title text-success px-3 mb-0">Testimonial</h4>
				</div>
				<h1 class="display-3 mb-4">Apa kata pasien kami ?</h1>
			</div>
			<div class="testimonial-carousel owl-carousel">
				<?php foreach ($testimonial as $gg) { ?>

				<div class="testimonial-item">
					<div class="testimonial-inner p-5">
						<!-- Ubah bagian ini untuk menampilkan gambar dengan rasio 9:12 -->
						<div class="about-img pb-4 ps-4"
							style="position: relative; overflow: hidden; max-width: 400px; height: 567px; margin: 0 auto;">
							<img src="<?= base_url('assets/upload/testimonial/'.$gg['foto']) ?>"
								class="img-fluid rounded" alt="Testimonial Image"
								style="width: 100%; height: 100%; object-fit: cover; aspect-ratio: 9 / 12;">
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>


	<!-- Testimonial End -->


	<?php require_once('_footer.php')?>


	

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

	<!-- Back to Top -->


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
	<script>
		function playVideo() {
			var video = document.getElementById('video');
			var playButton = document.querySelector('.btn-play');

			// Show video and play it when the play button is clicked
			video.style.display = 'block'; // Show the video
			playButton.style.display = 'none'; // Hide the play button
			video.play(); // Play the video
		}
	</script>
</body>

</html>