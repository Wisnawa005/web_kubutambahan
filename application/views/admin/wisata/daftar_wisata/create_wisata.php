<section id="main-content">
	<section class="wrapper">
		<div class="row mt">
			<div class="col-lg-12">
				<h4><i class="fa fa-angle-right"></i> Form Validations</h4>
				<div class="form-panel">
					<div class=" form">

						<?= form_open_multipart('Admin/add_data_wisata'); ?>
						<div class="cmxform form-horizontal style-form">
							<div class="form-group ">
								<label for="cemail" class="control-label col-lg-2">Nama Wisata</label>
								<div class="col-lg-10">
									<input name="nama_wisata" id="nama_wisata" required="required" class="form-control" placeholder="Masukkan Nama Wisata" />
								</div>
							</div>

							<div class="form-group ">
								<label for="cname" class="control-label col-lg-2">Kategori Wisata</label>
								<div class="col-lg-10">
									<select class="form-control" name="id_kategori">
										<?php foreach ($create_kt as $val) { ?>
											<option value="<?= $val['id_kategori']; ?>"> <?= $val['nama_kategori']; ?>
											</option>
										<?php } ?>
									</select>
								</div>
							</div>

							<div class="form-group ">
								<label for="cname" class="control-label col-lg-2">Nama Pramuwisata</label>
								<div class="col-lg-10">
									<select class="form-control" name="id_pramuwisata">
										<?php foreach ($create_pramuwisata as $val) { ?>
											<option value="<?= $val['id_pramuwisata']; ?>"> <?= $val['nama_pramuwisata']; ?>
											</option>
										<?php } ?>
									</select>
								</div>
							</div>

							<div class="form-group ">
								<label for="cname" class="control-label col-lg-2">Kategori Wisata</label>
								<div class="col-lg-10">
									<select class="form-control" name="id_desa">
										<?php foreach ($create_desa as $val) { ?>
											<option value="<?= $val['id_desa']; ?>"> <?= $val['nama_desa']; ?>
											</option>
										<?php } ?>
									</select>
								</div>
							</div>


							<div class="form-group ">
								<label for="curl" class="control-label col-lg-2">Harga</label>
								<div class="col-lg-10">
									<input name="harga" id="harga" required="required" class="form-control" placeholder="Masukkan Spesifikasi Harga" />
								</div>
							</div>

							<div class="form-group ">
								<label for="curl" class="control-label col-lg-2">Durasi</label>
								<div class="col-lg-10">
									<input name="durasi" id="durasi" required="required" class="form-control" placeholder="Masukkan Keterangan Durasi"></input>
								</div>
							</div>
							<div class="form-group ">
								<label for="ccomment" class="control-label col-lg-2">Deskripsi Wisata</label>
								<div class="col-lg-10">
									<textarea name="deskripsi_wisata" id="deskripsi_wisata" required="required" class="form-control" placeholder="Masukkan Deskripsi Wisata"></textarea>
								</div>
							</div>
							<div class="form-group ">
								<label for="ccomment" class="control-label col-lg-2">Alamat</label>
								<div class="col-lg-10">
									<textarea name="alamat_wisata" id="alamat_wisata" required="required" class="form-control" placeholder="Masukkan Alamat Lengkap Wisata"></textarea>
								</div>
							</div>
							<div class="form-group ">
								<label for="ccomment" class="control-label col-lg-2">Fasilitas Wisata</label>
								<div class="col-lg-10">
									<textarea name="fasilitas_wisata" id="fasilitas_wisata" required="required" class="form-control" placeholder="Masukkan Keterangan Fasilitas Wisata yang didapat"></textarea>
								</div>
							</div>
							<div class="form-group ">
								<label for="curl" class="control-label col-lg-2">Latitude Wisata</label>
								<div class="col-lg-10">
									<input name="latitude_wisata" id="latitude_wisata" required="required" class="form-control" placeholder="Masukkan Keterangan Latitude yang terdapat di Google Maps"></input>
								</div>
							</div>
							<div class="form-group ">
								<label for="curl" class="control-label col-lg-2">Longitude Wisata</label>
								<div class="col-lg-10">
									<input name="longitude_wisata" id="longitude_wisata" required="required" class="form-control" placeholder="Masukkan Keterangan Latitude yang terdapat di Google Maps"></input>
								</div>
							</div>

							<div class="form-group ">
								<label for="cname" class="control-label col-lg-2">Pilihan Foto</label>
								<div class="col-lg-10">
									<select class="form-control" name="id_image">
										<?php foreach ($create_foto as $val) { ?>
											<option value="<?= $val['id_image']; ?>"> <?= $val['foto1']; ?>
											</option>
										<?php } ?>
									</select>
								</div>
							</div>

							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-theme" type="submit">Save</button>
									<a href="<?php echo base_url('admin/wstAlam'); ?>">
										<button class="btn btn-theme04" type="button">Cancel</button>
									</a>
								</div>
							</div>
							<?= form_close(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>
