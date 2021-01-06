 <!--main content start-->
 <section id="main-content">
 	<section class="wrapper site-min-height">
 		<div class="row mt">
 			<div class="col-lg-6">
 				<div class="row content-panel">

 					<div class="col-md-4 centered">
 						<div class="profile-pic">
 							<p><img src="<?php echo base_url() . '/upload/user_data/' . $account['image'] ?>" class="img-circle"></p>
 						</div>

 					</div>
 					<!-- /col-md-4 -->
 					<div class="col-md-6 profile-text">
 						<br><br>
 						<h3>
 							<center><?= $account['name'] ?>
 								<div class="alert alert-success"><b><?= $account['role_id'] ?></b></div>
 						</h3>

 					</div>
 					<!-- /col-md-4 -->
 				</div>
 				<!-- /row -->
 			</div>
 			<!-- /col-lg-12 -->
 			<div class="col-lg-12 mt">
 				<did_beritaiv class="row content-panel">
 					<div class="panel-heading">
 						<ul class="nav nav-tabs nav-justified">
 							<li class="active">
 								<a data-toggle="tab" href="#overview">Information</a>
 							</li>

 							<li>
 								<a data-toggle="tab" href="#edit">Edit Profile</a>
 							</li>
 						</ul>
 					</div>
 					<!-- /panel-heading -->
 					<div class="panel-body">
 						<div class="tab-content">
 							<div id="overview" class="tab-pane active">
 								<div class="row">
 									<div class="col-md-12">
 										<div class="detailed mt">
 											<h4>More Information</h4>
 											<div class="recent-activity">
 												<div class="activity-icon bg-theme"><i class="fa fa-check"></i></div>
 												<div class="activity-panel">
 													<h5>User Date Create</h5>
 													<p><?= date('d F Y', $account['date_created']); ?></p>
 												</div>
 												<div class="activity-icon bg-theme02"><i class="fa fa-trophy"></i></div>
 												<div class="activity-panel">
 													<h5>Jenis Kelamin</h5>
 													<p><?= $account['j_kelamin'] ?></p>
 												</div>
 												<div class="activity-icon bg-theme04"><i class="fa fa-rocket"></i></div>
 												<div class="activity-panel">
 													<h5>Alamat</h5>
 													<p><?= $account['alamat'] ?></p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 							</div>
 							<!-- /tab-pane -->

 							<!-- /tab-pane -->
 							<div id="edit" class="tab-pane">
 								<div class="row">
 									<div class="col-lg-8 col-lg-offset-2 detailed">
 										<h4 class="mb">Personal Information</h4>
 										<form role="form" class="form-horizontal">
 											<div class="form-group">
 												<label class="col-lg-2 control-label"> Avatar</label>
 												<div class="col-lg-6">
 													<input type="file" id="exampleInputFile" class="file-pos">
 												</div>
 											</div>
 											<div class="form-group">
 												<label class="col-lg-2 control-label">Company</label>
 												<div class="col-lg-6">
 													<input type="text" placeholder=" " id="c-name" class="form-control">
 												</div>
 											</div>
 											<div class="form-group">
 												<label class="col-lg-2 control-label">Lives In</label>
 												<div class="col-lg-6">
 													<input type="text" placeholder=" " id="lives-in" class="form-control">
 												</div>
 											</div>
 											<div class="form-group">
 												<label class="col-lg-2 control-label">Country</label>
 												<div class="col-lg-6">
 													<input type="text" placeholder=" " id="country" class="form-control">
 												</div>
 											</div>
 											<div class="form-group">
 												<label class="col-lg-2 control-label">Description</label>
 												<div class="col-lg-10">
 													<textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
 												</div>
 											</div>
 											<div class="form-group">
 												<div class="col-lg-offset-2 col-lg-10">
 													<button class="btn btn-theme" type="submit">Save</button>
 													<button class="btn btn-theme04" type="button">Cancel</button>
 												</div>
 											</div>
 										</form>
 									</div>

 									<!-- /col-lg-8 -->
 								</div>
 								<!-- /row -->
 							</div>
 							<!-- /tab-pane -->
 						</div>
 						<!-- /tab-content -->
 					</div>
 					<!-- /panel-body -->

 			</div>
 			<!-- /row -->
 		</div>
 		<!-- /container -->
 	</section>
 	<!-- /wrapper -->
 </section>
 <!-- /MAIN CONTENT -->
