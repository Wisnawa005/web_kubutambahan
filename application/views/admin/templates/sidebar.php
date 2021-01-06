<!--sidebar start-->
<aside>
	<div id="sidebar" class="nav-collapse ">
		<!-- sidebar menu start-->
		<ul class="sidebar-menu" id="nav-accordion">
			<p class="centered"><a href="<?= site_url('admin/profile'); ?>"><img src="<?php echo base_url() . '/upload/user_data/' . $account['image'] ?>" class="img-circle" width="80"></a></p>
			<h5 class="centered"><?= $account['name']; ?></h5>
			<li class="mt">
				<a href="<?= site_url('admin'); ?>">
					<i class="fa 
					fa-dashboard"></i>
					<span>Dashboard</span>
				</a>
			</li>

			<li class="sub-menu">
				<a href="javascript:;">
					<i class="fa fa-th"></i>
					<span>Data Tables Vication</span>
				</a>
				<ul class="sub">
					<li><a href="<?= site_url('admin/wstAlam'); ?>">Wisata Alam</a></li>
					<li><a href="<?= site_url('admin/ktWisata'); ?>">Kategori Wisata</a></li>
				</ul>
			</li>
			<li class="sub-menu">
				<a href="javascript:;">
					<i class="fa fa-th"></i>
					<span>Data Tables Users</span>
				</a>
				<ul class="sub">
					<li><a href="<?= site_url('admin/users'); ?>">User</a></li>
					<li><a href="<?= site_url('admin/pramuwisata'); ?>">Pramuwisata</a></li>
					<li><a href="<?= site_url('admin/pengelola'); ?>">Pengelola</a></li>
				</ul>
			</li>
			<li class="sub-menu">
				<a href="javascript:;">
					<i class="fa fa-th"></i>
					<span>Data All In</span>
				</a>
				<ul class="sub">
					<li><a href="<?= site_url('admin/berita'); ?>">Berita</a></li>
					<li><a href="<?= site_url('admin/blog'); ?>">Blog</a></li>
				</ul>
			</li>
			<li>
				<a href="inbox.html">
					<i class="fa fa-envelope"></i>
					<span>Order Vication </span>
					<span class="label label-theme pull-right mail-info">2</span>
				</a>
			</li>
			<li>
				<a href="inbox.html">
					<i class="fa fa-envelope"></i>
					<span>Mail </span>
					<span class="label label-theme pull-right mail-info">2</span>
				</a>
			</li>

		</ul>
		<!-- sidebar menu end-->
	</div>
</aside>
<!--sidebar end-->
