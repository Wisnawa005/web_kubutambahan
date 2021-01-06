<section id="main-content">
	<section class="wrapper">
		<div class="row mt">
			<div class="col-lg-12">
				<h4><i class="fa fa-angle-right"></i> Form Validations</h4>
				<div class="form-panel">
					<div class=" form">

						<?= form_open_multipart('admin/add_data_news'); ?>
						<div class="cmxform form-horizontal style-form">
							<div class="form-group ">
								<label for="cemail" class="control-label col-lg-2">Judul Berita</label>
								<div class="col-lg-10">
									<input name="judul_berita" id="judul_berita" required="required" class="form-control" placeholder="Masukkan Judul Berita" />
								</div>
							</div>

							<div class="form-group ">
								<label for="cname" class="control-label col-lg-2">Pengelola</label>
								<div class="col-lg-10">
									<select class="form-control" name="id_pengelola">
										<?php foreach ($create_pengelola as $val) { ?>
											<option value="<?= $val['id_pengelola']; ?>"> <?= $val['nama_pengelola']; ?>
											</option>
										<?php } ?>
									</select>
								</div>
							</div>

							<div class="form-group ">
								<label for="ccomment" class="control-label col-lg-2">Deskripsi Berita</label>
								<div class="col-lg-10">
									<textarea name="deskripsi_berita" id="deskripsi_berita" required="required" class="form-control" placeholder="Masukkan Deskripsi Berita"></textarea>
								</div>
							</div>

							<!-- <div class="form-group">
								<label class="control-label col-md-3"> Component Datetimepicker</label>
								<div class="col-md-4">
									<div class="input-group date form_datetime-component">
										<input type="text" class="form-control" readonly="" size="16">
										<span class="input-group-btn">
											<button type="button" class="btn btn-theme date-set"><i class="fa fa-calendar"></i></button>
										</span>
									</div>
								</div>
							</div> -->

							<div class="form-group last">
								<label class="control-label col-md-3">Image Upload</label>
								<div class="col-md-9">
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<div>
											<span class="btn btn-theme02 btn-file">
												<input name="foto" id="foto" type="file" class="fileupload-new"><i class="fa fa-paperclip"></i> Select
												image</span>
											</span>
										</div>
									</div>
									<span class="label label-info">NOTE!</span>
									<span>
										Gambar yang digunakan dengan resolusi minimal 1020px dengan format JPG/JPENG atau PNG
									</span>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-theme" type="submit">Save</button>
									<a href="<?php echo base_url('admin/add_data_blog'); ?>">
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
