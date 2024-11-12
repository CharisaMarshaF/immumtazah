<!-- Tambah User Modal -->
<div id="ilang">
    <?= $this->session->flashdata('alert') ?>
</div>
<?= $this->uri->segment(6); ?>

<div class="modal fade" id="myModaltwotambah" tabindex="-1" role="dialog" aria-labelledby="tambahUserModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="tambahUserModalLabel">Tambah Pengguna</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('admin/user/simpan') ?>" method="post">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" id="nama" name="nama" required>
					</div>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" name="username" required>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" required>
					</div>
					<div class="form-group">
						<label for="level">Level</label>
						<select class="form-control" id="level" name="level" required>
							<option value="Admin">Admin</option>
							<option value="Kontributor">Kontributor</option>
						</select>
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
					<th>Username</th>
					<th>Nama</th>
					<th>Level</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($user as $aa) { ?>
				<tr>
					<td><?= $aa['username'] ?></td>
					<td><?= $aa['nama'] ?></td>
					<td><?= $aa['level'] ?></td>
					<td>
						<!-- Trigger Button for Delete Modal -->
						<button type="button" class="btn btn-danger waves-effect" data-toggle="modal"
							data-target="#myModaltwo<?= $aa['id_user'] ?>">
							Hapus
						</button>

						<!-- Delete Confirmation Modal -->
						<div class="modal fade" id="myModaltwo<?= $aa['id_user'] ?>" role="dialog">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Hapus Pengguna</h5>
										<button type="button" class="close" data-dismiss="modal"
											aria-label="Close">&times;</button>
									</div>
									<div class="modal-body">
										<p>Apakah Anda yakin ingin menghapus pengguna ini?</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary"
											data-dismiss="modal">Batal</button>
										<a href="<?php echo site_url('admin/user/delete_data/'.$aa['id_user']); ?>"
											class="btn btn-danger">Hapus</a>
									</div>
								</div>
							</div>
						</div>
						<button type="button" class="btn btn-success waves-effect" data-toggle="modal"
							data-target="#myModaltwoedit<?= $aa['id_user'] ?>">
							Edit
						</button>

						<!-- Delete Confirmation Modal -->
						<!-- Edit User Modal -->
						<div class="modal fade" id="myModaltwoedit<?= $aa['id_user'] ?>" tabindex="-1" role="dialog"
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
										<form action="<?php echo site_url('admin/user/update/'.$aa['id_user']); ?>"
											method="post">
											<input type="hidden" name="id_user"
															value="<?= $aa['id_user'] ?>">
											<div class="form-group">
												<label for="nama">Nama</label>
												<input type="text" class="form-control" id="nama" name="nama"
													value="<?= $aa['nama'] ?>" required>
											</div>
											<div class="form-group">
												<label for="username">Username</label>
												<input type="text" class="form-control" id="username" name="username"
													value="<?= $aa['username'] ?>" readonly>
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