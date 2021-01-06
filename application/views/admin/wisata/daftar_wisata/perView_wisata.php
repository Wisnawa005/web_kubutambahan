<section id="main-content">
	<section class="wrapper site-min-height">
		<?php foreach ($wisata as $wisa) : ?>
			<div class="row mt mb">
				<div class="col-lg-12">
					<h3><i class="fa fa-angle-right"></i> Detail Wisata</h3>
					<br>

				</div>
				<!--  /col-lg-12 -->
			</div>
			<!-- /row -->
			<div class="row content-panel">
				<h2 class="centered">Information</h2>
				<div class="col-md-10 col-md-offset-1 mt mb">
					<div class="accordion" id="accordion2">
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseOne">
									<em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Nama Wisata
								</a>
							</div>
							<div id="collapseOne" class="accordion-body collapse in">
								<div class="accordion-inner">
									<p><?= $wisa->nama_wisata ?></p>
									<p>Rp. <?php echo number_format($wisa->harga, 0, ',', '.')  ?> (<b><?= $wisa->durasi ?></b>)</p>
								</div>
							</div>
						</div>
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseTwo">
									<em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Alamat Pariwisata
								</a>
							</div>
							<div id="collapseTwo" class="accordion-body collapse">
								<div class="accordion-inner">
									<p><?php echo $wisa->alamat_wisata ?> (<?php echo $wisa->nama_desa ?>)</p>
								</div>
							</div>
						</div>
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseThree">
									<em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Description
								</a>
							</div>
							<div id="collapseThree" class="accordion-body collapse">
								<div class="accordion-inner">
									<p><?php echo $wisa->deskripsi_wisata ?></p>
								</div>
							</div>
						</div>
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseFour">
									<em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>View Image
								</a>
							</div>
							<div id="collapseFour" class="accordion-body collapse">
								<div class="accordion-inner">
									<p>
										<img src="<?php echo base_url() . '/upload/wisata/' . $wisa->foto1 ?>" style="width:200px;height:200px" alt="Card image cap">
										<img src="<?php echo base_url() . '/upload/wisata/' . $wisa->foto2 ?>" style="width:200px;height:200px" alt="Card image cap">
										<img src="<?php echo base_url() . '/upload/wisata/' . $wisa->foto3 ?>" style="width:200px;height:200px" alt="Card image cap">
										<img src="<?php echo base_url() . '/upload/wisata/' . $wisa->foto4 ?>" style="width:200px;height:200px" alt="Card image cap">
										<img src="<?php echo base_url() . '/upload/wisata/' . $wisa->foto5 ?>" style="width:200px;height:200px" alt="Card image cap">
										<img src="<?php echo base_url() . '/upload/wisata/' . $wisa->foto6 ?>" style="width:200px;height:200px" alt="Card image cap">
										<img src="<?php echo base_url() . '/upload/wisata/' . $wisa->foto7 ?>" style="width:200px;height:200px" alt="Card image cap">
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseFive">
									<em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Pramuwisata Profile
								</a>
							</div>
							<div id="collapseFive" class="accordion-body collapse">

								<div class="card" style="width: 35rem;">
									<center>
										<img class="card-img-top" src="<?php echo base_url() . '/upload/pramuwisata/' . $wisa->foto_pramuwisata ?>" style="width:200px;height:200px" alt="Card image cap">
									</center><br>
									<div class="card-body">
										<p class="card-text">
											Nama Pramuwisata : <?= $wisa->nama_pramuwisata; ?><br>
											Kontak Person : <?= $wisa->kontak_pramuwisata; ?><br>
											Alamat Pramuwisata : <?= $wisa->alamat; ?>
										</p>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- end accordion -->
				</div>
				<!-- col-md-10 -->
				<div class="col-xs-12 col-md-10">
					<a class="btn btn-success" href="<?php echo base_url('admin/wstAlam'); ?>"><i class="fa fa-backward"></i> Kembali</a>
				</div><br>
			</div>
		<?php endforeach; ?>
		<!--  /row -->
	</section>
	<!-- /wrapper -->
</section>
