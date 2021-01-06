<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_2">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="bradcam_text text-center">
					<h3>Destinations</h3>
					<p>Pixel perfect design with awesome contents</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/ bradcam_area  -->

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
		<div class="row">
			<div class="col-lg-4">
				<div class="filter_result_wrap">
					<h3>Filter Result</h3>
					<div class="filter_bordered">
						<div class="filter_inner">
							<div class="row">
								<div class="col-lg-12">
									<div class="single_select">
										<select>
											<option data-display="Village">Village</option>
											<option value="1">Africa</option>
											<option value="2">canada</option>
											<option value="4">USA</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="single_select">
										<select>
											<option data-display="Travel type">Travel type</option>
											<option value="1">advance</option>
											<option value="2">advance</option>
											<option value="4">premium</option>
										</select>
									</div>
								</div>

							</div>
						</div>
						<div class="reset_btn">
							<button class="boxed-btn4" type="submit">Reset</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="row">
					<?php foreach ($dataWisata as $wst) : ?>
						<div class="col-lg-6 col-md-6">
							<div class="single_place">
								<div class="thumb">
									<img src="<?php echo base_url() . '/upload/wisata/' . $wst['foto1'] ?>" style="width:500px;height:250px" alt="pariwisata images">
									<a href="<?= ('detail_wisata/' . $wst['id_wisata']) ?>" class="prise">Rp. <?php echo number_format($wst['harga'], 0, ',', '.')  ?></a>
								</div>
								<div class="place_info">
									<a href="<?= ('detail_wisata/' . $wst['id_wisata']) ?>">
										<h3><?php echo $wst['nama_wisata'] ?></h3>
									</a>
									<p><?php echo $wst['nama_desa'] ?></p>
									<div class="rating_days d-flex justify-content-between">
										<span class="d-flex justify-content-center align-items-center">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<a href="<?= ('detail_wisata/' . $wst['id_wisata']) ?>">(20 Review)</a>
										</span>
										<div class="days">
											<i class="fa fa-clock-o"></i>
											<a href="<?= ('detail_wisata/' . $wst['id_wisata']) ?>"><?php echo $wst['durasi'] ?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<?= $this->pagination->create_links(); ?>
			</div>
		</div>
	</div>
</div>
</div>

<!-- newletter_area_end  -->
<div class="recent_trip_area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section_title text-center mb_70">
					<h3>Recent Trips</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single_trip">
					<div class="thumb">
						<img src="img/trip/1.png" alt="">
					</div>
					<div class="info">
						<div class="date">
							<span>Oct 12, 2019</span>
						</div>
						<a href="#">
							<h3>Journeys Are Best Measured In
								New Friends</h3>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single_trip">
					<div class="thumb">
						<img src="img/trip/2.png" alt="">
					</div>
					<div class="info">
						<div class="date">
							<span>Oct 12, 2019</span>
						</div>
						<a href="#">
							<h3>Journeys Are Best Measured In
								New Friends</h3>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single_trip">
					<div class="thumb">
						<img src="img/trip/3.png" alt="">
					</div>
					<div class="info">
						<div class="date">
							<span>Oct 12, 2019</span>
						</div>
						<a href="#">
							<h3>Journeys Are Best Measured In
								New Friends</h3>
						</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
