<!-- Tambah User Modal -->
<div id="ilang">
    <?= $this->session->flashdata('alert') ?>
</div>
<div class="modal fade" id="myModaltwotambah" tabindex="-1" role="dialog" aria-labelledby="tambahUserModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="tambahUserModalLabel">Tambah Kategori</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
					<div class="form-group">
						<label for="nama">Nama Kategori</label>
						<input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required>
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
                    <th>No</th>
					<th>Nama Kategori</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach($kategori as $aa) { ?>
				<tr>
                    <td><?= $no; ?></td>
					<td><?= $aa['nama_kategori'] ?></td>
					
					<td>
						<!-- Trigger Button for Delete Modal -->
						<button type="button" class="btn btn-danger waves-effect" data-toggle="modal"
							data-target="#myModaltwo<?= $aa['id_kategori'] ?>">
							Hapus
						</button>

						<!-- Delete Confirmation Modal -->
						<div class="modal fade" id="myModaltwo<?= $aa['id_kategori'] ?>" role="dialog">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Hapus Kategori</h5>
										<button type="button" class="close" data-dismiss="modal"
											aria-label="Close">&times;</button>
									</div>
									<div class="modal-body">
										<p>Apakah Anda yakin ingin menghapus Kategori ini?</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary"
											data-dismiss="modal">Batal</button>
										<a href="<?php echo site_url('admin/kategori/delete_data/'.$aa['id_kategori']); ?>"
											class="btn btn-danger">Hapus</a>
									</div>
								</div>
							</div>
						</div>
						<button type="button" class="btn btn-success waves-effect" data-toggle="modal"
							data-target="#myModaltwoedit<?= $aa['id_kategori'] ?>">
							Edit
						</button>

						<!-- Delete Confirmation Modal -->
						<!-- Edit User Modal -->
						<div class="modal fade" id="myModaltwoedit<?= $aa['id_kategori'] ?>" tabindex="-1" role="dialog"
							aria-labelledby="editUserModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="editUserModalLabel">Edit Pengguna</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<form action="<?php echo site_url('admin/kategori/update/'.$aa['id_kategori']); ?>"
											method="post">
											<input type="hidden" name="id_kategori"
															value="<?= $aa['id_kategori'] ?>">
											<div class="form-group">
												<label for="nama_kategori">Nama</label>
												<input type="text" class="form-control" id="nama_kategori" name="nama_kategori"
													value="<?= $aa['nama_kategori'] ?>" required>
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
                <?php $no++; } ?>
                </tbody>
		</table>
	</div>
</div>