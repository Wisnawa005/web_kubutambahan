<!-- slider_area_start -->
<div class="slider_area">
	<div class="slider_active owl-carousel">
		<div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-12 col-md-12">
						<div class="slider_text text-center">
							<h3>Indonesia</h3>
							<p>Pixel perfect design with awesome contents</p>
							<a href="#" class="boxed-btn3">Explore Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-12 col-md-12">
						<div class="slider_text text-center">
							<h3>Australia</h3>
							<p>Pixel perfect design with awesome contents</p>
							<a href="#" class="boxed-btn3">Explore Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="single_slider  d-flex align-items-center slider_bg_3 overlay">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-12 col-md-12">
						<div class="slider_text text-center">
							<h3>Switzerland</h3>
							<p>Pixel perfect design with awesome contents</p>
							<a href="#" class="boxed-btn3">Explore Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- slider_area_end -->

<!-- where_togo_area_start  -->
<div class="where_togo_area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-3">
				<div class="form_area">
					<h3>Where you want to go?</h3>
				</div>
			</div>
			<div class="col-lg-9">
				<div class="search_wrap">
					<form class="search_form" action="#">
						<div class="input_field">
							<input type="text" placeholder="Where to go?">
						</div>
						<div class="input_field">
							<input id="datepicker" placeholder="Date">
						</div>
						<div class="input_field">
							<select>
								<option data-display="Travel type">Travel type</option>
								<option value="1">Some option</option>
								<option value="2">Another option</option>
							</select>
						</div>
						<div class="search_btn">
							<button class="boxed-btn4 " type="submit">Search</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- where_togo_area_end  -->

<div class="popular_places_area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section_title text-center mb_70">
					<h3>Popular Places</h3>
					<p>Nikmati saja hari liburmu, memikirkan hari esok yang belum terjadi secara berlebihan hanya akan membuatmu lupa mensyukuri hari liburmu</p>
				</div>
			</div>
		</div>
		<div class="row">
			<?php foreach ($wisata as $wis) : ?>
				<div class="col-lg-4 col-md-6">
					<div class="single_place">
						<div class="thumb">
							<img src="<?php echo base_url() . '/upload/wisata/' . $wis->foto1 ?>" style="width:500px;height:250px" alt="pariwisata images">

							<a href="<?= ('user/detail_wisata/' . $wis->id_wisata) ?>" class="prise">Rp. <?php echo number_format($wis->harga, 0, ',', '.')  ?></a>
						</div>
						<div class="place_info">
							<a href="<?= ('user/detail_wisata/' . $wis->id_wisata) ?>">
								<h3><?php echo $wis->nama_wisata ?></h3>
							</a>
							<p><?= $wis->nama_kategori ?></p>
							<div class="rating_days d-flex justify-content-between">
								<span class="d-flex justify-content-center align-items-center">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<a href="<?= ('user/detail_wisata/' . $wis->id_wisata) ?>">(20 Review)</a>
								</span>
								<div class="days">
									<i class="fa fa-clock-o"></i>
									<a href="<?= ('user/detail_wisata/' . $wis->id_wisata) ?>"><?php echo $wis->durasi ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>


		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="more_place_btn text-center">
					<a class="boxed-btn4" href="<?= ('user/destination') ?>">More Places</a>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="video_area video_bg overlay">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="video_wrap text-center">
					<h3>Enjoy Video</h3>
					<div class="video_icon">
						<a class="popup-video video_play_button" href="https://www.youtube.com/watch?v=bl8Wvs1A8Z4">
							<i class="fa fa-play"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- testimonial_area  -->
<div class="testimonial_area">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="testmonial_active owl-carousel">
					<?php foreach ($pengelola as $lola) : ?>
						<div class="single_carousel">
							<div class="row justify-content-center">
								<div class="col-lg-8">
									<div class="single_testmonial text-center">
										<div class="author_thumb">
											<img src="<?= base_url() . '/upload/pengelola/' . $lola->foto_pengelola ?>" style="width:106px;height:106px" alt="">
										</div>
										<p>"<?= $lola->motto ?>"</p>
										<div class="testmonial_author">
											<h3>- <?= $lola->nama_pengelola ?></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /testimonial_area  -->

<div class="travel_variation_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="single_travel text-center">
					<div class="icon">
						<img src="<?= base_url('assets/ui/img/Lambang_Kabupaten_Buleleng.png') ?>" style="width:200px;height:200px" alt="">
					</div>
					<h3>Pemkab Buleleng</h3>
					<p>The Regency of Buleleng is situated in the northern part of Bali and the largest area among eights regencies in Bali.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single_travel text-center">
					<div class="icon">
						<img src="<?= base_url('assets/ui/img/logo-dispar-buleleng-69.png') ?>" style="width:200px;height:200px" alt="">
					</div>
					<h3>Dispar Buleleng</h3>
					<p>"On the north, Buleleng is bordered by a stretch of coast line of around 144 kilometers in length." </p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single_travel text-center">
					<div class="icon">
						<img src="<?= base_url('assets/ui/img/informatika.png') ?>" style="width:200px;height:200px" alt="">
					</div>
					<h3>Manajemen Informatika</h3>
					<p>accommodating the spirit of coding by implementing a tourism website</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single_travel text-center">
					<div class="icon">
						<img src="<?= base_url('assets/ui/img/favicon.png') ?>" style="width:200px;height:200px" alt="">
					</div>
					<h3>Prabu Travel</h3>
					<p>A wonderful serenity has taken to the possession of my entire soul.</p>
				</div>
			</div>
		</div>
	</div>
</div>
