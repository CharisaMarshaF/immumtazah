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
						<a href="<?= base_url('home/pelayanan/') ?>" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pelayanan</a>
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


		<!-- Carousel Start -->
		<div class="header-carousel owl-carousel">
			<?php foreach ($caraousel as $aa) { ?>
			<div class="header-carousel-item">
				<img src="<?= base_url('assets/upload/caraousel/'.$aa['foto']) ?>" class="img-fluid w-100" alt="Image">
				<div class="carousel-caption">
					<div class="carousel-caption-content p-3">
						<h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Akupuntur, Bekam
							& Spa
							Karanganyar</h5>
						<h1 class="display-1 text-capitalize text-white mb-4"><?= $aa['judul'] ?></h1>
						<p class="mb-5 fs-5"><?= $aa['deskripsi'] ?>
						</p>
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
				<h1 class="display-3 mb-4">Pelayanan Terapi oleh Terapis Profesional</h1>
				<p class="mb-0">Kami menyediakan berbagai layanan terapi, termasuk akupuntur, bekam, dan spa. Setiap
					terapi dapat mengurangi stres, mengatasi gangguan fisik, dan meningkatkan kesehatan secara
					keseluruhan. Kami berkomitmen untuk memberikan pelayanan yang berkualitas.</p>
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

									<a href="#" class="text-muted"><span class="fa fa-users text-success"></span>
										<?= $recentpost->username; ?></a>
								</div>
								<h5 class="mb-4"><?= $recentpost->judul; ?></h5>
								<p class="mb-4"><?= nl2br($recentpost->keterangan) ?></p>
								<h1 class="btn btn-success rounded-pill text-white py-2 px-4 mb-2">
									<?= $recentpost->nama_kategori; ?></h1>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				<div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
					<a class="btn btn-success rounded-pill text-white py-3 px-5"
						href="<?= base_url('home/pelayanan/') ?>">Pelayanan</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Services End -->


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


	<!-- Book Appointment Start -->
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
	<!-- Modal Video -->
	<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content rounded-0">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<!-- 16:9 aspect ratio -->
					<div class="ratio ratio-16x9">
						<iframe class="embed-responsive-item" src="" id="video" allowfullscreen
							allowscriptaccess="always" allow="autoplay"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Book Appointment End -->


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


	<!-- Testimonial Start -->
	<div class="container-fluid testimonial py-5 wow zoomInDown" data-wow-delay="0.1s">
		<div class="container py-5">
			<div class="section-title mb-5">
				<div class="sub-style">
					<h4 class="sub-title text-white px-3 mb-0">Testimonial</h4>
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

	</div>
	</div>
	<!-- Testimonial End -->


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
					<span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i></a>Immumtazah Teraphy Center
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
			// Show the video container when the play button is clicked
			document.getElementById("videoContainer").classList.remove("d-none");
			// Hide the image once the video is shown
			document.querySelector(".video img").style.display = "none";
		}
	</script>
</body>

</html>