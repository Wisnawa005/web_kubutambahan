 <!-- bradcam_area  -->
 <div class="bradcam_area bradcam_bg_4">
 	<div class="container">
 		<div class="row">
 			<div class="col-xl-12">
 				<div class="bradcam_text text-center">
 					<h3>blog</h3>
 					<p>Pixel perfect design with awesome contents</p>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 <!--/ bradcam_area  -->


 <!--================Blog Area =================-->
 <section class="blog_area section-padding">
 	<div class="container">
 		<div class="row">
 			<div class="col-lg-8 mb-5 mb-lg-0">
 				<div class="blog_left_sidebar">
 					<?php foreach ($blog as $blg) : ?>
 						<article class="blog_item">
 							<div class="blog_item_img">
 								<img class="card-img rounded-0" src="<?php echo base_url() . '/upload/blog/' . $blg['foto'] ?>" alt="">
 								<a href="<?= ('detail_blog/' . $blg['id_blog']) ?>" class="blog_item_date">
 									<h3>
 										<?= date('d', strtotime($blg['tanggal'])); ?>
 									</h3>
 									<p><?= date('M', strtotime($blg['tanggal'])); ?></p>
 								</a>
 							</div>

 							<div class="blog_details">
 								<a class="d-inline-block" href="<?= ('detail_blog/' . $blg['tanggal']) ?>">
 									<h2><?= $blg['judul_blog'] ?></h2>
 								</a>
 								<p>
 									<?php $string = $blg['isi_blog'] ?>
 									<?= $string = word_limiter($string, 25) ?>
 								</p>
 								<ul class="blog-info-link">
 									<li><i class="fa fa-user"></i> <?= $blg['author'] ?></a></li>
 									<li><i class="fa fa-comments"></i> 03 Comments</a></li>
 								</ul>
 							</div>
 						</article>
 					<?php endforeach; ?>
 					<?= $this->pagination->create_links(); ?>

 				</div>
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
 						<div class="media post_item">
 							<img src="img/post/post_1.png" alt="post">
 							<div class="media-body">
 								<a href="single-blog.html">
 									<h3>From life was you fish...</h3>
 								</a>
 								<p>January 12, 2019</p>
 							</div>
 						</div>
 						<div class="media post_item">
 							<img src="img/post/post_2.png" alt="post">
 							<div class="media-body">
 								<a href="single-blog.html">
 									<h3>The Amazing Hubble</h3>
 								</a>
 								<p>02 Hours ago</p>
 							</div>
 						</div>
 						<div class="media post_item">
 							<img src="img/post/post_3.png" alt="post">
 							<div class="media-body">
 								<a href="single-blog.html">
 									<h3>Astronomy Or Astrology</h3>
 								</a>
 								<p>03 Hours ago</p>
 							</div>
 						</div>
 						<div class="media post_item">
 							<img src="img/post/post_4.png" alt="post">
 							<div class="media-body">
 								<a href="single-blog.html">
 									<h3>Asteroids telescope</h3>
 								</a>
 								<p>01 Hours ago</p>
 							</div>
 						</div>
 					</aside>

 				</div>
 			</div>
 		</div>
 	</div>
 </section>
 <!--================Blog Area =================-->
