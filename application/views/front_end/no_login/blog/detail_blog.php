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
				<?php foreach ($detail_blog as $d_blg) : ?>
					<div class="single-post">
						<div class="feature-img">
							<img class="img-fluid" src="<?php echo base_url() . '/upload/blog/' . $d_blg->foto ?>" alt="">
						</div>
						<div class="blog_details">
							<h2><?= $d_blg->judul_blog ?></h2>
							<ul class="blog-info-link mt-3 mb-4">
								<li><i class="fa fa-user"></i><?= $d_blg->author ?></a></li>
								<li><i class="fa fa-calendar"></i> <?= date('d M Y', strtotime($d_blg->tanggal)); ?></a></li>
							</ul>
							<p class="excert">
								<?= $d_blg->isi_blog ?>
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
						<h3 class="widget_title">Recent Post Blog</h3>
						<?php foreach ($random_blog as $rand) : ?>
							<div class="media post_item">
								<img src="<?php echo base_url() . '/upload/blog/' . $rand->foto ?>" style="height: 60px; position: static; width: initial;" alt="post">
								<div class="media-body">
									<a href="<?= ('' . $rand->id_blog) ?>">
										<h3>
											<?php $string = $rand->judul_blog ?>
											<?= $string = word_limiter($string, 8) ?>
										</h3>
									</a>
									<p><?= date('d M Y', strtotime($rand->tanggal)); ?></p>
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
