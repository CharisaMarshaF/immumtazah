<?= $this->uri->segment(7); ?>

<div class="form-example-wrap">
	<div class="cmp-tb-hd">
		<h2>Konfigurasi Web</h2>
		<p>Masukkan data data untuk konfigurasi web</p>
	</div>
	<form action="<?= base_url('admin/konfigurasi/update') ?>" method="post" enctype='multipart/form-data'>
		<div class="form-example-int">
			<div class="form-group">
				<label>Judul Website</label>
				<div class="nk-int-st">
					<input type="text" class="form-control input-sm" placeholder="Judul Website" id="judul_website"
						name="judul_website" value="<?= $konfig->judul_website; ?>">
				</div>
			</div>
		</div>
		<div class="form-example-int">
			<div class="form-group">
				<label>Profile Website</label>
				<div class="nk-int-st">
					<input type="text" class="form-control input-sm" placeholder="Profile Website" id="profil_website"
						name="profil_website" value="<?= $konfig->profil_website; ?>">
				</div>
			</div>
		</div>
		<div class="form-example-int">
			<div class="form-group">
				<label>Instagram</label>
				<div class="nk-int-st">
					<input type="text" class="form-control input-sm" placeholder="Instagram" id="instagram"
						name="instagram" value="<?= $konfig->instagram; ?>">
				</div>
			</div>
		</div>
		<div class="form-example-int">
			<div class="form-group">
				<label>Facebook</label>
				<div class="nk-int-st">
					<input type="text" class="form-control input-sm" placeholder="facebook" id="facebook"
						name="facebook" value="<?= $konfig->facebook; ?>">
				</div>
			</div>
		</div>
	
		<div class="form-example-int">
			<div class="form-group">
				<label>telepon</label>
				<div class="nk-int-st">
					<input type="text" class="form-control input-sm" placeholder="telepon" id="telepon" name="telepon"
						value="<?= $konfig->telepon; ?>">
				</div>
			</div>
		</div>
		<div class="form-example-int">
			<div class="form-group">
				<label>Alamat</label>
				<div class="nk-int-st">
					<input type="text" class="form-control input-sm" placeholder="alamat" id="alamat" name="alamat"
						value="<?= $konfig->alamat; ?>">
				</div>
			</div>
		</div>
		
		<div class="form-example-int mg-t-15">
			<button class="btn btn-success notika-btn-success waves-effect">Simpan</button>
		</div>
    </form>
</div>