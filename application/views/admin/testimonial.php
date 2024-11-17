<div id="ilang">
    <?= $this->session->flashdata('alert') ?>
</div>
<div class="form-element-list mg-t-30">
    <div class="cmp-tb-hd">
        <h2>Caraousel</h2>
        <p>Upload foto dengan deskripsi dan isi untuk carousel</p>
    </div>
    <form action="<?= base_url('admin/testimonial/simpan') ?>" method="post" enctype='multipart/form-data'>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb-4">
                <div class="form-group ic-cmp-int float-lb floating-lb">
                    <div class="form-ic-cmp">
                        <i class="notika-icon notika-form"></i>
                    </div>
                    <div class="nk-int-st">
                        <input name="judul" type="text" class="form-control" >
                        <label class="nk-label">Judul</label>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb-4">
                <div class="form-group ic-cmp-int float-lb floating-lb">
                    <div class="form-ic-cmp">
                        <i class="notika-icon notika-pict"></i>
                    </div>
                    <div class="nk-int-st">
                        <label for="foto" class="form-label">Pilih Foto dengan ukuran (1 : 3)</label>
                        <input type="file" class="form-control" id="foto" name="foto" required accept="image/png, image/gif, image/jpeg">
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-3">
                <button class="btn btn-success notika-btn-success waves-effect">Simpan</button>
            </div>
        </div>
    </form>
</div>

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
					<th>Foto</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($testimonial as $gg) { ?>
				<tr>
					<td><?= $gg['judul'] ?></td>

					<td><a href="<?= base_url('assets/upload/testimonial/'.$gg['foto']) ?>" target="_blank">
							<span>Lihat Foto</span>
						</a></td>

					<td>
						<button type="button" class="btn btn-danger waves-effect mt-3" data-toggle="modal"
							data-target="#deleteModal<?= $gg['id_testimonial'] ?>">
							Hapus
						</button>

						<div class="modal fade" id="deleteModal<?= $gg['id_testimonial'] ?>" tabindex="-1" role="dialog"
							aria-labelledby="deleteModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-sm" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="deleteModalLabel">Hapus Galeri </h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p>Apakah Anda yakin ingin menghapus Testi berjudul
											"<strong><?= $gg['judul'] ?></strong>"?</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary"
											data-dismiss="modal">Batal</button>
										<a href="<?= site_url('admin/testimonial/delete_data/' . $gg['foto']); ?>"
											class="btn btn-danger">Hapus</a>
									</div>
								</div>
							</div>
						</div>
					</td>
                </tr>
                <?php } ?>

            </tbody>
        </table>				<!-- Delete Confirmation Modal -->
	</div>
</div>
