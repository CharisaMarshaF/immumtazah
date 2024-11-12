<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
		<div class="container py-5">
			<div class="row g-5">
				<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="footer-item d-flex flex-column">
						<h4 class="text-white mb-4"><i
								class="fas fa-heartbeat me-3"></i><?= $konfig->judul_website; ?></h4>
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
						<a href="<?= base_url('home/galeri/') ?>"><i class="fas fa-angle-right me-2"></i> Galeri</a>
						<a href="<?= base_url('home/pelayanan/') ?>"><i
								class="fas fa-angle-right me-2"></i> Pelayanan</a>
						
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="footer-item d-flex flex-column">
						<h4 class="mb-4 text-white">Pelayanan</h4>
						<a href="<?= base_url('home/pelayanan/') ?>"><i class="fas fa-angle-right me-2"></i>Semua
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