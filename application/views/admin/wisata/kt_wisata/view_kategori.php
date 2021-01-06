<section id="main-content">
	<section class="wrapper">
		<h3><i class="fa fa-angle-right"></i> <?= $title; ?></h3>

		<div class="row mt">
			<div class="col-lg-12">
				<div class="content-panel">
					<div class="chat-room-head">
						<!-- Button trigger modal -->
						<a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#exampleModal">
							<span class="icon text-white-50">
								<i class="fa fa-plus"></i>
							</span>
							<span class="text"> Tambah Data</span>
						</a>

						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<font style="color: black;">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Input Kategori Wisata</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">

											<input type="hidden" value="<?= (isset($prodi['id_prodi'])) ? md5($prodi['id_lokasi']) : ''; ?>" name="id_lokasi"></input>
											<form action="<?= site_url('admin/add_data_kategori') ?>" method="post">

												<div class="form-group row ">
													<label class="control-label col-md-3 col-sm-3 ">Nama Kategori Wisata<span class="required"> *</span></label>
													<div class="col-md-9 col-sm-9 ">
														<input type="text" name="nama_kategori" id="nama_kategori" required="required" class="form-control" placeholder="Masukkan Kategori Wisata">
													</div>
												</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button class="btn btn-warning" type="reset">Reset</button>
											<button type="submit" class="btn btn-primary">Save changes</button>
										</div>
										</form>
									</font>
								</div>
							</div>
						</div>
						<div class="pull-right position">
							<?= form_open('admin/search_lokasi') ?>
							<input type="text" name="keyword" placeholder="Search" class="form-control search-btn ">
							<?= form_close() ?>
						</div>
					</div>

					<br>
					<section id="unseen">
						<table class="table table-bordered table-striped table-condensed">
							<thead>
								<tr>
									<th>No</th>
									<th>Kategori Wisata</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($kategori as $val) : ?>
									<tr>
										<td><?= ++$start ?></td>
										<td><?= $val['nama_kategori']; ?></td>

										<td>
											<div class="hidden-phone">

												<a href="<?php echo base_url() . 'admin/edit_kt/' . $val['id_kategori']; ?>">
													<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
												</a>
												<a href="<?php echo base_url() . 'admin/delete_ktWisata/' . $val['id_kategori']; ?>">
													<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
												</a>
											</div>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</section>

				</div>
			</div>
		</div>

		<div class="div col-xs-12 col-sm-6 col-md-10">
			<?= $this->pagination->create_links(); ?>
		</div><br>
		<div class="col-xs-12 col-md-2">
			<a class="btn btn-success" href="<?php echo base_url('admin'); ?>"><i class="fa fa-backward"></i> Kembali</a>
		</div>
	</section>
	<!-- /wrapper -->
</section>
