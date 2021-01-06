<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">Home</a></li>
		<li class="breadcrumb-item"><a href="#">Library</a></li>
		<li class="breadcrumb-item active" aria-current="page">Data</li>
	</ol>
</nav>
<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 posts-list">
				<?php foreach ($detail_berita as $detail_brt) : ?>
					<div class="single-post">
						<h2><?= $detail_brt->judul_berita ?></h2>
						<ul class="blog-info-link mt-3 mb-4">
							<li><i class="fa fa-user"></i><?= $detail_brt->nama_pengelola ?></a></li>
							<li><i class="fa fa-calendar"></i> <?= date('d M Y', strtotime($detail_brt->date_berita)); ?></a></li>
						</ul>
						<div class="feature-img">
							<img class="img-fluid" src="<?php echo base_url() . '/upload/berita/' . $detail_brt->foto ?>" alt="">
						</div>
						<div class="blog_details">
							<p class="excert">
								<?= $detail_brt->deskripsi_berita ?>
							</p>

						</div>
					</div>
				<?php endforeach ?>
			</div>

			<div class="col-lg-4">
				<div class="blog_right_sidebar">
					<aside class="single_sidebar_widget search_widget">
						<form action="#">
							<div class="form-group">
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder='Search Keyword' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
									<div class="input-group-append">
										<button class="btn" type="button"><i class="ti-search"></i></button>
									</div>
								</div>
							</div>
							<button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Search</button>
						</form>
					</aside>

					<aside class="single_sidebar_widget popular_post_widget">
						<h3 class="widget_title">Recent Post</h3>
						<?php foreach ($random_berita as $rand) : ?>
							<div class="media post_item">
								<img src="<?php echo base_url() . '/upload/berita/' . $rand['foto'] ?>" style="height: 60px; position: static; width: initial;" alt="post">
								<div class="media-body">
									<a href="<?= ('' . $rand['id_berita']) ?>">
										<h3>
											<?php $string = $rand['judul_berita'] ?>
											<?= $string = word_limiter($string, 8) ?>
										</h3>
									</a>
									<p><?= date('d M Y', strtotime($rand['date_berita'])); ?></p>
								</div>
							</div>
						<?php endforeach; ?>
					</aside>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================ Blog Area end =================-->
