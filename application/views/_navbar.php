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
		<a href="<?= base_url() ?>" class="navbar-brand p-0 d-flex align-items-center">
			<img src="<?= base_url('assets/upload/immumtazah/pp.jpg') ?>" alt="Logo" class="me-2"
				style="width: 40px; height: 40px;">
			<div>
				<h2 class="text-success m-0"><?= $konfig->judul_website; ?></h2>
				<p class="m-0 " style="font-size: 14px; color: #41DC94;">AkupunturBekamSpaKaranganyar</p>
			</div>
		</a>


		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
			<span class="fa fa-bars"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="navbar-nav ms-auto py-0">
				<a href="<?= base_url() ?>" class="nav-item nav-link">Home</a>
				<a href="<?= base_url('home/about/') ?>" class="nav-item nav-link">Tentang</a>
				<a href="<?= base_url('home/galeri/') ?>" class="nav-item nav-link">Galeri</a>

				<a href="<?= base_url('home/pelayanan/') ?>" class="nav-item nav-link">Layanan</a>

				<?php if (!empty($kategori)) { ?>
					<?php foreach ($kategori as $kate) { ?>
						<a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>" class="nav-item nav-link">
							<?= $kate['nama_kategori'] ?>
						</a>
					<?php } ?>
					<?php } else { ?>
					<p>Belum ada kategori yang tersedia.</p> <!-- Tampilkan pesan jika tidak ada kategori -->
				<?php } ?>


			</div>
		</div>

	</nav>
</div>
<!-- Navbar End -->