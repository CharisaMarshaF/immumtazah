<?= $this->uri->segment(8); ?>
<div class="data-table-list">
	<div class="basic-tb-hd">
		<h2>Saran Pengunjung</h2>
		<p>Saran - saran dari para pengunjung</p>
	</div>
	<div class="table-responsive">
		<div id="data-table-basic_wrapper" class="dataTables_wrapper">
			
			<table id="data-table-basic" class="table table-striped dataTable" role="grid"
				aria-describedby="data-table-basic_info">
				<thead>
					<tr role="row">
						<th class="sorting_asc" tabindex="0" aria-controls="data-table-basic" rowspan="1" colspan="1"
							aria-sort="ascending" aria-label="Name: activate to sort column descending"
							style="width: 69px;">Saran</th>
						<th class="sorting" tabindex="0" aria-controls="data-table-basic" rowspan="1" colspan="1"
							aria-label="Position: activate to sort column ascending" style="width: 85px;">Tanggal</th>
						<th class="sorting" tabindex="0" aria-controls="data-table-basic" rowspan="1" colspan="1"
							aria-label="Office: activate to sort column ascending" style="width: 63px;">Nama</th>
						<th class="sorting" tabindex="0" aria-controls="data-table-basic" rowspan="1" colspan="1"
							aria-label="Age: activate to sort column ascending" style="width: 25px;">Email</th>
                            <th class="sorting" tabindex="0" aria-controls="data-table-basic" rowspan="1" colspan="1"
							aria-label="Age: activate to sort column ascending" style="width: 25px;">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($saran as $ss) { ?>
					<tr>
						<td><?= $ss['isi_saran'] ?></td>
						<td><?= $ss['tanggal'] ?></td>
						<td><?= $ss['nama'] ?></td>
                        <td><?= $ss['email'] ?></td>
                        <td><!-- Trigger Button for Delete Modal -->
						<button type="button" class="btn btn-danger waves-effect" data-toggle="modal"
							data-target="#myModaltwo<?= $ss['id_saran'] ?>">
							Hapus
						</button>

						<!-- Delete Confirmation Modal -->
						<div class="modal fade" id="myModaltwo<?= $ss['id_saran'] ?>" role="dialog">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Hapus Saran</h5>
										<button type="button" class="close" data-dismiss="modal"
											aria-label="Close">&times;</button>
									</div>
									<div class="modal-body">
										<p>Apakah Anda yakin ingin menghapus Saran ini?</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary"
											data-dismiss="modal">Batal</button>
										<a href="<?php echo site_url('admin/saran/delete_data/'.$ss['id_saran']); ?>"
											class="btn btn-danger">Hapus</a>
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