<section id="main-content">
	<section class="wrapper">
		<h3><i class="fa fa-angle-right"></i> <?= $title; ?></h3>

		<div class="row mt">
			<div class="col-lg-12">
				<div class="content-panel">
					<div class="chat-room-head">
						<a href="<?= base_url('admin/create_wisata') ?>">
							<button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Create Data Wisata</button>
						</a>

						<div class="pull-right position">
							<?= form_open('admin/search_aset') ?>
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
									<th>Nama Pengelola</th>
									<th>Nama Pramuwisata</th>
									<th>Kontak Pramuwisata</th>
									<th>Alamat</th>
									<th>Foto Pengelola</th>
									<th>Avtion</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($pramuwisaata as $val) : ?>
									<tr>
										<td><?= ++$start ?></td>
										<td><?= $val['nama_pengelola']; ?></td>
										<td><?= $val['nama_pramuwisata']; ?></td>
										<td><?= $val['kontak_pramuwisata']; ?> </td>
										<td><?= $val['alamat']; ?></td>
										<td><?= $val['foto_pramuwisata']; ?></td>
										<td>
											<div class="hidden-phone">
												<a href="<?php echo base_url() . 'admin/perView_pramuwisata/' . $val['id_pramuwisata']; ?>">
													<button class="btn btn-success btn-xs"><i class="fa fa-eye"></i></button>
												</a>
												<a href="<?php echo base_url() . 'admin/edit_pramuwisata/' . $val['id_pramuwisata']; ?>">
													<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
												</a>
												<a href="<?php echo base_url() . 'admin/delete_pramuwisata/' . $val['id_pramuwisata']; ?>">
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
