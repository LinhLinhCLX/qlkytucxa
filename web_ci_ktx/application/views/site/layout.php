<div class="header">


    </div>
    <div id="content">

    <!--Cards-->
    <div class="container margin">

    </div>
        <!-- Footer -->
    <footer class="page-footer">

    </footer>
<html>
    <head>
        <?php $this->load->view('site/head');?>
    </head>
    <body>
		   <div class="header">
				 <?php $this->load->view('site/header')?>
		   </div>
		    <div id="content">
				  <div class="container margin">
					  <?php if(isset($message)):?>
					  <h3 style="color:red"><?php echo $message?></h3>
					  <?php endif;?>
					  <?php $this->load->view($temp , $this->data);?>
				  </div>
		   </div>
		   <center>
			<img src="<?php echo public_url()?>/site/images/bank.png">
		   </center>

		    <footer class="page-footer">
				 <?php $this->load->view('site/footer');?>
		   </footer>
 		<?php $this->load->view('site/footerscript');?>

    </body>
</html>
