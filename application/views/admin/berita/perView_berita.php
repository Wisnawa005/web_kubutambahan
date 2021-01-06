<section id="main-content">
	<section class="wrapper">
		<div class="col-lg-12 mt">
			<div class="row content-panel">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="invoice-body">
						<?php foreach ($berita as $val) : ?>
							<div class="single-post">
								<center>
									<h2><?= $val->judul_berita ?></h2>
								</center>
								<div class="feature-img">
									<center><img class="img-fluid" src="<?= base_url() . '/upload/berita/' . $val->foto ?>" style="width:750px;height:400px" alt="">
								</div>
								<div class="blog_details">


									<ul class="blog-info-link mt-3 mb-4">
										<div class="alert alert-success"><b><i class="fa fa-user"></i> <?= $val->nama_pengelola ?></b> <i class="fa fa-calendar"></i> <?= date('d M Y', strtotime($val->date_berita)); ?></div>

									</ul>
									<p class="excert">
										<?= $val->deskripsi_berita ?>
									</p>

								</div>
							</div>
						<?php endforeach ?>

						<br>
						<br>
						<a class="btn btn-success" href="<?= site_url('admin/berita'); ?>"><i class="fa fa-backward"></i> Kembali</a>
					</div>
				</div>
			</div>
		</div>
		<!--/col-lg-12 mt -->
	</section>
</section>
