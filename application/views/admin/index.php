<!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-9 main-chart">
				<div class="row">
					<!-- TWITTER PANEL -->
					<div class="col-md-4 mb">
						<div class="twitter-panel pn">
							<i class="fa fa-twitter fa-4x"></i>
							<p>Dashio is here! Take a look and enjoy this new Bootstrap Dashboard theme.</p>
							<p class="user">@Alvrz_is</p>
						</div>
					</div>
					<!-- /col-md-4 -->
					<div class="col-md-4 mb">
						<!-- WHITE PANEL - TOP USER -->
						<div class="white-panel pn">
							<div class="white-header">
								<h5>TOP USER</h5>
							</div>
							<p><img src="img/ui-zac.jpg" class="img-circle" width="50"></p>
							<p><b>Zac Snider</b></p>
							<div class="row">
								<div class="col-md-6">
									<p class="small mt">MEMBER SINCE</p>
									<p>2012</p>
								</div>
								<div class="col-md-6">
									<p class="small mt">TOTAL SPEND</p>
									<p>$ 47,60</p>
								</div>
							</div>
						</div>
					</div>
					<!-- /col-md-4 -->
					<div class="col-md-4 mb">
						<!-- INSTAGRAM PANEL -->
						<div class="instagram-panel pn">
							<i class="fa fa-instagram fa-4x"></i>
							<p>@THISISYOU<br /> 5 min. ago
							</p>
							<p><i class="fa fa-comment"></i> 18 | <i class="fa fa-heart"></i> 49</p>
						</div>
					</div>
					<!-- /col-md-4 -->
				</div>
				<!-- /row -->
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 mb">
						<div class="product-panel-2 pn">
							<div class="badge badge-hot">HOT</div>
							<img src="img/product.jpg" width="200" alt="">
							<h5 class="mt">Flat Pack Heritage</h5>
							<h6>TOTAL SALES: 1388</h6>
							<button class="btn btn-small btn-theme04">FULL REPORT</button>
						</div>
					</div>
					<!-- /col-md-4 -->
					<!--  PROFILE 02 PANEL -->
					<div class="col-lg-4 col-md-4 col-sm-4 mb">
						<div class="content-panel pn">
							<div id="profile-02">
								<div class="user">
									<img src="img/friends/fr-06.jpg" class="img-circle" width="80">
									<h4>DJ SHERMAN</h4>
								</div>
							</div>
							<div class="pr2-social centered">
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
						<!-- /panel -->
					</div>
					<!--/ col-md-4 -->
					<div class="col-md-4 col-sm-4 mb">
						<div class="green-panel pn">
							<div class="green-header">
								<h5>DISK SPACE</h5>
							</div>
							<canvas id="serverstatus03" height="120" width="120"></canvas>
							<script>
								var doughnutData = [{
										value: 60,
										color: "#2b2b2b"
									},
									{
										value: 40,
										color: "#fffffd"
									}
								];
								var myDoughnut = new Chart(document.getElementById("serverstatus03").getContext("2d")).Doughnut(doughnutData);
							</script>
							<h3>60% USED</h3>
						</div>
					</div>
					<!-- /col-md-4 -->
				</div>
				<!-- /row -->
			</div>
			<!-- /col-lg-9 END SECTION MIDDLE -->
			<!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
			<div class="col-lg-3 ds">
				<!--COMPLETED ACTIONS DONUTS CHART-->
				<div class="donut-main">
					<h4>COMPLETED ACTIONS & PROGRESS</h4>
					<canvas id="newchart" height="130" width="130"></canvas>
					<script>
						var doughnutData = [{
								value: 70,
								color: "#4ECDC4"
							},
							{
								value: 30,
								color: "#fdfdfd"
							}
						];
						var myDoughnut = new Chart(document.getElementById("newchart").getContext("2d")).Doughnut(doughnutData);
					</script>
				</div>
				<!--NEW EARNING STATS -->
				<div class="panel terques-chart">
					<div class="panel-body">
						<div class="chart">
							<div class="centered">
								<span>TODAY EARNINGS</span>
								<strong>$ 890,00 | 15%</strong>
							</div>
							<br>
							<div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
						</div>
					</div>
				</div>
				<!--new earning end-->
				<!-- RECENT ACTIVITIES SECTION -->
				<h4 class="centered mt">RECENT ACTIVITY</h4>
				<!-- First Activity -->
				<div class="desc">
					<div class="thumb">
						<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
					</div>
					<div class="details">
						<p>
							<muted>Just Now</muted>
							<br />
							<a href="#">Paul Rudd</a> purchased an item.<br />
						</p>
					</div>
				</div>
				<!-- Second Activity -->
				<div class="desc">
					<div class="thumb">
						<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
					</div>
					<div class="details">
						<p>
							<muted>2 Minutes Ago</muted>
							<br />
							<a href="#">James Brown</a> subscribed to your newsletter.<br />
						</p>
					</div>
				</div>
				<!-- Third Activity -->
				<div class="desc">
					<div class="thumb">
						<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
					</div>
					<div class="details">
						<p>
							<muted>3 Hours Ago</muted>
							<br />
							<a href="#">Diana Kennedy</a> purchased a year subscription.<br />
						</p>
					</div>
				</div>
				<!-- Fourth Activity -->
				<div class="desc">
					<div class="thumb">
						<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
					</div>
					<div class="details">
						<p>
							<muted>7 Hours Ago</muted>
							<br />
							<a href="#">Brando Page</a> purchased a year subscription.<br />
						</p>
					</div>
				</div>
				<!-- USERS ONLINE SECTION -->
				<h4 class="centered mt">TEAM MEMBERS ONLINE</h4>
				<!-- First Member -->
				<div class="desc">
					<div class="thumb">
						<img class="img-circle" src="img/ui-divya.jpg" width="35px" height="35px" align="">
					</div>
					<div class="details">
						<p>
							<a href="#">DIVYA MANIAN</a><br />
							<muted>Available</muted>
						</p>
					</div>
				</div>
				<!-- Second Member -->
				<div class="desc">
					<div class="thumb">
						<img class="img-circle" src="img/ui-sherman.jpg" width="35px" height="35px" align="">
					</div>
					<div class="details">
						<p>
							<a href="#">DJ SHERMAN</a><br />
							<muted>I am Busy</muted>
						</p>
					</div>
				</div>
				<!-- Third Member -->
				<div class="desc">
					<div class="thumb">
						<img class="img-circle" src="img/ui-danro.jpg" width="35px" height="35px" align="">
					</div>
					<div class="details">
						<p>
							<a href="#">DAN ROGERS</a><br />
							<muted>Available</muted>
						</p>
					</div>
				</div>
				<!-- Fourth Member -->
				<div class="desc">
					<div class="thumb">
						<img class="img-circle" src="img/ui-zac.jpg" width="35px" height="35px" align="">
					</div>
					<div class="details">
						<p>
							<a href="#">Zac Sniders</a><br />
							<muted>Available</muted>
						</p>
					</div>
				</div>

			</div>
			<!-- /col-lg-3 -->
		</div>
		<!-- /row -->
	</section>
</section>
<!--main content end-->
