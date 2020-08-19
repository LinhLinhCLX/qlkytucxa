<div class="header-mobile__bar">
	<div class="container-fluid">
		<div class="header-mobile-inner">
			<a class="logo" href="index.html">
				<img src="images/icon/logo.png" alt="CoolAdmin" />
			</a>
			<button class="hamburger hamburger--slider" type="button">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
		</div>
	</div>
</div>
<nav class="navbar-mobile">
	<div class="container-fluid">
		<ul class="navbar-mobile__list list-unstyled">

			<li>
				<a href="#">
					<i class="fas fa-tachometer-alt"></i>Dashboard</a>
			</li>
			<li class="has-sub">
				<a class="js-arrow" href="#">
					<i class="fas fa-tachometer-alt"></i>Sinh viên</a>
				<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
					<li>
						<a href="<?php echo admin_url('students/add'); ?>">Thêm sinh viên</a>
					</li>
					<li>
						<a href="<?php echo admin_url('students'); ?>">Danh sách sinh viên</a>
					</li>
					<li>
                    	<a href="<?php echo admin_url('students/list_index'); ?>">Danh sách chờ duyệt</a>
       				</li>
				</ul>
			</li>
			<li class="has-sub">
				<a class="js-arrow" href="#">
					<i class="fas fa-tachometer-alt"></i>Cán bộ / Cộng tác viên</a>
				<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
					<li>
						<a href="<?php echo admin_url('officers/add'); ?>">Thêm Cán bộ</a>
					</li>
					<li>
						<a href="<?php echo admin_url('officers'); ?>">Danh sách cán bộ</a>
					</li>
				</ul>
			</li>
			<li class="has-sub">
				<a class="js-arrow" href="#">
					<i class="fa fa-money"></i>Hóa đơn</a>
				<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
					<li>
						<a href="#">Thêm Hóa đơn</a>
					</li>
					<li>
						<a href="#">Danh sách Hóa đơn</a>
					</li>
				</ul>
			</li>
			<li class="has-sub">
				<a class="js-arrow" href="#">
					<i class="fa fa-gears"></i>Thiết bị</a>
				<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
					<li>
						<a href="<?php echo admin_url('product/add'); ?>">Thêm Thiết bị</a>
					</li>
					<li>
						<a href="<?php echo admin_url('product'); ?>">Danh sách Thiết bị</a>
					</li>
				</ul>
			</li>
			<li class="has-sub">
				<a class="js-arrow" href="#">
					<i class="fa fa-home"></i>Phòng</a>
				<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
					<li>
						<a href="<?php echo admin_url('catalog/add'); ?>">Thêm phòng</a>
					</li>
					<li>
						<a href="<?php echo admin_url('catalog'); ?>">Danh sách phòng</a>
					</li>
				</ul>
			</li>
			<li class="has-sub">
				<a class="js-arrow" href="#">
					<i class="fas fa-table"></i>Bài viết</a>
				<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
					<li>
						<a href="<?php echo admin_url('news/add'); ?>">Thêm Bài viết</a>
					</li>
					<li>
						<a href="<?php echo admin_url('news'); ?>">Danh sách Bài viết</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>
