<div class="destination_banner_wrap overlay">
	<div class="destination_text text-center">
		<?php foreach ($wisata as $wisa) : ?>
			<h3><?= $wisa->nama_wisata ?></h3>
			<p>~ <?php echo $wisa->nama_desa ?> ~</p><br>
			<a href="<?= site_url('user/checkout'); ?>" class="genric-btn primary e-large">Extra Large</a>
		<?php endforeach; ?>
	</div>
</div>

<div class="destination_details_info">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10 col-md-9">
				<?php foreach ($wisata as $wisa) : ?>
					<div class="destination_info">
						<div class="alert alert-primary" role="alert">
							Alamat Pariwisata : <?php echo $wisa->alamat_wisata ?>
						</div>
						<h3>Description</h3>
						<p><?php echo $wisa->deskripsi_wisata ?></p>


						<div id="accordion">
							<div class="card">
								<div class="card-header" id="headingOne">
									<h5 class="mb-0">
										<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Harga & Durasi
										</button>
									</h5>
								</div>

								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
									<div class="card-body">
										<ul class="unordered-list">
											<li>Rp. <?php echo number_format($wisa->harga, 0, ',', '.')  ?></li>
											<li>Harga temasuk dalam Pramuwisata dan Biaya Perawatan Fasilitas Wisata</li>
											<li>Harga temasuk lama berwisata (<b><?= $wisa->durasi ?></b>)</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingTwo">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											Fasilitas Wisata
										</button>
									</h5>
								</div>
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
									<div class="card-body">
										<ul class="unordered-list">
											<li><?= $wisa->fasilitas_wisata ?></li>
										</ul>

									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingThree">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											Peta Wisata
										</button>
									</h5>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
									<div class="card-body">

									</div>
								</div>
							</div>
						</div>


					</div>

					<div class="section-top-border">
						<h3 class="mb-30">Pramuwisata Profile</h3>
						<div class="row">
							<div class="col-lg-12">
								<blockquote class="generic-blockquote">
									<div class="row">
										<div class="col-md-3">
											<img src="<?php echo base_url() . '/upload/pramuwisata/' . $wisa->foto_pramuwisata ?>" alt="" class="img-fluid">
										</div>
										<div class="col-md-9 mt-sm-20">
											<p>
												<ul class="unordered-list">
													<li>Nama Pramuwisata : <?= $wisa->nama_pramuwisata; ?></li><br>
													<li>Kontak Person : <?= $wisa->kontak_pramuwisata; ?></li><br>
													<li>Alamat Pramuwisata : <?= $wisa->alamat; ?></li><br>
												</ul>
											</p>
										</div>
									</div>
								</blockquote>
							</div>
						</div>
					</div>

					<div class="section-top-border">
						<h3>Image Gallery</h3>
						<div class="row gallery-item">
							<div class="col-md-4">
								<a href="<?php echo base_url() . '/upload/wisata/' . $wisa->foto1 ?>" class="img-pop-up">
									<div class="single-gallery-image" style="background: url(<?php echo base_url() . '/upload/wisata/' . $wisa->foto1 ?>);"></div>
								</a>
							</div>
							<div class="col-md-4">
								<a href="<?php echo base_url() . '/upload/wisata/' . $wisa->foto2 ?>" class="img-pop-up">
									<div class="single-gallery-image" style="background: url(<?php echo base_url() . '/upload/wisata/' . $wisa->foto2 ?>);"></div>
								</a>
							</div>
							<div class="col-md-4">
								<a href="<?php echo base_url() . '/upload/wisata/' . $wisa->foto3 ?>" class="img-pop-up">
									<div class="single-gallery-image" style="background: url(<?php echo base_url() . '/upload/wisata/' . $wisa->foto3 ?>);"></div>
								</a>
							</div>
							<div class="col-md-6">
								<a href="<?php echo base_url() . '/upload/wisata/' . $wisa->foto4 ?>" class="img-pop-up">
									<div class="single-gallery-image" style="background: url(<?php echo base_url() . '/upload/wisata/' . $wisa->foto4 ?>);"></div>
								</a>
							</div>
							<div class="col-md-6">
								<a href="<?php echo base_url() . '/upload/wisata/' . $wisa->foto5 ?>" class="img-pop-up">
									<div class="single-gallery-image" style="background: url(<?php echo base_url() . '/upload/wisata/' . $wisa->foto5 ?>);"></div>
								</a>
							</div>
							<div class="col-md-4">
								<a href="<?php echo base_url() . '/upload/wisata/' . $wisa->foto6 ?>" class="img-pop-up">
									<div class="single-gallery-image" style="background: url(<?php echo base_url() . '/upload/wisata/' . $wisa->foto6 ?>);"></div>
								</a>
							</div>
							<div class="col-md-4">
								<a href="<?php echo base_url() . '/upload/wisata/' . $wisa->foto6 ?>" class="img-pop-up">
									<div class="single-gallery-image" style="background: url(<?php echo base_url() . '/upload/wisata/' . $wisa->foto7 ?>);"></div>
								</a>
							</div>
							<div class="col-md-4">
								<a href="<?php echo base_url() . '/upload/wisata/' . $wisa->video ?>" class="img-pop-up">
									<div class="single-gallery-image" style="background: url(<?php echo base_url() . '/upload/wisata/' . $wisa->video ?>);"></div>
								</a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
