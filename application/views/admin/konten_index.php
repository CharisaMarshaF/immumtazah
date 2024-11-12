<!-- Tambah User Modal -->
<div id="ilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<?= $this->uri->segment(4); ?>

<div class="modal fade" id="myModaltwotambah" tabindex="-1" role="dialog" aria-labelledby="tambahUserModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="tambahUserModalLabel">Tambah Konten</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype='multipart/form-data'>
					<div class="form-group">
						<label for="judul">Judul</label>
						<input type="text" class="form-control" id="judul" name="judul" required>
					</div>
					<div class="form-group">
						<label for="keterangan">Keterangan</label>
						<textarea type="text" class="form-control" id="keterangan" name="keterangan"
							required></textarea>
					</div>
					<div class="form-group">
						<label for="id_kategori">Kategori</label>
						<select class="form-control" id="id_kategori" name="id_kategori" required>
							<?php foreach($kategori as $aa) { ?>
							<option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="mb-3 input-group input-group-outline mb-3">
						<label for="foto" class="form-label">Pilih Foto dengan ukuran (7 : 5)</label>
						<input type="file" class="form-control" id="foto" name="foto" required
							accept="image/png, image/gif, image/jpeg">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-success">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<button type="button" class="btn btn-success waves-effect" data-toggle="modal" data-target="#myModaltwotambah">
	Tambah
</button>


<div class="data-table-list">
	<div class="basic-tb-hd">
		<h2></h2>
		<p></p>
	</div>
	<div class="table-responsive">
		<table id="data-table-basic" class="table table-striped">
			<thead>
				<tr>
					<th>Judul</th>
					<th>Kategori</th>
					<th>Tanggal</th>
					<th>Kreator</th>
					<th>Foto</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($konten as $aa) { ?>
				<tr>
					<td><?= $aa['judul'] ?></td>
					<td><?= $aa['nama_kategori'] ?></td>
					<td><?= $aa['tanggal'] ?></td>
					<td><?= $aa['nama'] ?></td>
					<td>
						<a href="<?= base_url('assets/upload/konten/'.$aa['foto']) ?>" target="_blank">
							<span>Lihat Foto</span>
						</a>
					</td>

					<td>
						<!-- Trigger Button for Delete Modal -->
						<button type="button" class="btn btn-danger waves-effect" data-toggle="modal"
							data-target="#myModaltwo<?= $aa['id_konten'] ?>">
							Hapus
						</button>

						<!-- Delete Confirmation Modal -->
						<div class="modal fade" id="myModaltwo<?= $aa['id_konten'] ?>" role="dialog">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Hapus Pengguna</h5>
										<button type="button" class="close" data-dismiss="modal"
											aria-label="Close">&times;</button>
									</div>
									<div class="modal-body">
										<p>Apakah Anda yakin ingin menghapus Konten ini?</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary"
											data-dismiss="modal">Batal</button>
										<a href="<?php echo site_url('admin/konten/delete_data/'.$aa['foto']); ?>"
											class="btn btn-danger">Hapus</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Delete Confirmation Modal -->
						<button type="button" class="btn btn-success waves-effect" data-toggle="modal"
							data-target="#myModaltwoedit<?= $aa['id_konten'] ?>">
							Edit
						</button>

						<!-- Edit User Modal -->
						<div class="modal fade" id="myModaltwoedit<?= $aa['id_konten'] ?>" tabindex="-1" role="dialog"
							aria-labelledby="editUserModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="editUserModalLabel">Edit Konten</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<form action="<?= base_url('admin/konten/update/'.$aa['foto']); ?>"
											enctype="multipart/form-data" method="post">
											<input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">

											<div class="form-group">
												<label for="judul">Judul</label>
												<input type="text" class="form-control" id="judul" name="judul"
													value="<?= $aa['judul'] ?>" required>
											</div>
											<div class="form-group">
												<label for="keterangan" class="form-label">Keterangan</label>
												<textarea class="form-control" id="keterangan"
													name="keterangan"><?= $aa['keterangan'] ?></textarea>
											</div>
											<div class="form-group">
												<label for="id_kategori">Kategori</label>
												<select class="form-control" id="id_kategori" name="id_kategori"
													required>
													<?php foreach($kategori as $uu): ?>
													<option value="<?= $uu['id_kategori'] ?>"
														<?= $uu['id_kategori'] == $aa['id_kategori'] ? 'selected' : '' ?>>
														<?= $uu['nama_kategori'] ?>
													</option>
													<?php endforeach; ?>
												</select>
											</div>
											<div class="form-group">
												<label for="foto" class="form-label">Foto</label>
												<input type="file" class="form-control" id="foto" name="foto"
													accept="image/png, image/gif, image/jpeg">
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary"
													data-dismiss="modal">Batal</button>
												<button type="submit" class="btn btn-success">Edit</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>



					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
</div>