<section id="main-content">
	<section class="wrapper">
		<div class="row mt">
			<div class="col-lg-12">
				<h4><i class="fa fa-angle-right"></i> Form Validations</h4>
				<div class="form-panel">
					<div class=" form">

						<?= form_open_multipart('admin/add_data_blog'); ?>
						<div class="cmxform form-horizontal style-form">
							<div class="form-group ">
								<label for="cemail" class="control-label col-lg-2">Judul Blog</label>
								<div class="col-lg-10">
									<input name="judul_blog" id="judul_blog" required="required" class="form-control" placeholder="Masukkan Judul Blog" />
								</div>
							</div>

							<div class="form-group ">
								<label for="curl" class="control-label col-lg-2">Outhor</label>
								<div class="col-lg-10">
									<input name="author" id="author" required="required" class="form-control" placeholder="Masukkan Penulis / Author" />
								</div>
							</div>

							<div class="form-group ">
								<label for="ccomment" class="control-label col-lg-2">Isi Blog</label>
								<div class="col-lg-10">
									<textarea name="isi_blog" id="isi_blog" required="required" class="form-control" placeholder="Masukkan Isi Blog"></textarea>
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
												<input type="file" class="fileupload-new"><i class="fa fa-paperclip"></i> Select
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
