<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('admin/head')?>
    </head>

<body class="animsition">
    <div class="page-wrapper">
        <header class="header-mobile d-block d-lg-none">
			<?php $this->load->view('admin/header_mobile')?>
        </header>
        <aside class="menu-sidebar d-none d-lg-block">
                 <?php $this->load->view('admin/left')?>
        </aside>

	  <div class="page-container">
		  <header class="header-desktop">
			<?php $this->load->view('admin/header')?>
		  </header>

		 <!-- Content -->
		 <?php  $this -> load->view($temp,$this->data) ;?>
		 <!-- End content -->

	  </div>
	  <div class="row">
		<div class="col-md-12">
			<div class="copyright">
				<p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
			</div>
		</div>
	</div>
     <?php $this->load->view('admin/footer')?>
</body>
</html>
