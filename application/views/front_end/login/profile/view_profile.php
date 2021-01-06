<div class="destination_details_info">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10 col-md-9">
				<div class="section-top-border">
					<h3 class="mb-30">User Profile</h3>
					<div class="row">
						<div class="col-lg-12">
							<blockquote class="generic-blockquote">
								<div class="row">
									<div class="col-md-3">
										<img src="<?= base_url('/upload/user_data/') . $account['image'] ?>" alt="" class="img-fluid">
									</div>

									<div class="col-md-9 mt-sm-20">
										<p>
											<ul class="unordered-list">
												<h4><?= $account['name'] ?></h4>
												<h4><?= $account['email'] ?></h4>
												<h4><?= $account['alamat'] ?></h4>
												<h4><?= $account['no_hp'] ?></h4>
											</ul>
										</p>
									</div>
								</div>
							</blockquote>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
