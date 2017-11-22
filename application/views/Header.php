
<!DOCTYPE html>
<html lang="en">
<head>
	<title>KangenWater</title>
	<?php 
	$member=$this->session->userdata('member');

	$status=$this->session->userdata('status');

	 ?>
	
	<link href="<?php echo base_url()."assets/"; ?>css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo base_url()."assets/"; ?>css/style.css" type="text/css" rel="stylesheet" media="all">  
	
	<script src="<?php echo base_url()."assets/"; ?>js/jquery-2.2.3.min.js"></script> 
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/simple-line-icons.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/bootstrap.css">
<link rel="stylesheet" id="theme-switch" href="<?php echo base_url().'assets/'; ?>css/style.css">




 <script src="<?php echo base_url().'assets/'; ?>js/modernizr-2.6.2.min.js"></script>
	
</head>
<body> 


	<body>
	<header role="banner" id="fh5co-header1" class="navbar-fixed-top1" >
			<div class="container">
				<!-- <div class="row"> -->
			     <nav class="navbar navbar-default">
		        <div class="navbar-header">
		        	<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		         <a class="navbar-brand" href="<?php echo site_url('Home');?>">Kangen Water</a> 
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav navbar-right">
		            <li><a href="<?php echo site_url('Home');?>" data-nav-section="home"><span>Home</span></a></li>
		            <li ><a href="<?php echo site_url('Product');?>" data-nav-section="product"><span>Product</span></a></li>
		            <li><a href="<?php echo site_url('Testimonials');?>" data-nav-section="testimoni"><span>Testimonials</span></a></li>
		           
		            <li><a href="<?php echo site_url('About')?>" data-nav-section="about"><span>About</span></a></li>
		            
		            <?php
											if(!empty($status)){
												?>
												 <li><a href="<?php echo site_url('Cart/showCart')?>" data-nav-section="cart"><span>Cart</span></a></li>
		            <li>
						
						<div class="dropdown-toggle" data-toggle="dropdown"><img class="figure1" src="<?php echo base_url().'assets/image/'.$member->foto; ?>" alt="Image"  > <b class="caret"></b></div>

						<ul style="margin-top: 10px" class="dropdown-menu">
                        <li><a href="<?php echo site_url('Member/EditDataDiri/'.$member->username);?>">Edit Data Diri</a></li>
                        <li><a href="<?php echo site_url('Member/EditAkun/'.$member->username);?>">Edit Akun </a></li>
                        <li><a href="<?php echo site_url('Transaksi/TransaksiMember/'.$member->username) ?>">History</a></li>
                           <li><a href="<?php echo site_url('Order/barangbeli/'.$member->username) ?>">History barang</a></li>

                        <li><a href="<?php echo site_url('Login/logout'); ?>">Logout</a></li>

                      </ul>
                      <?php }else{ ?>
                      <li><a href="<?php echo site_url('Login')?>" data-nav-section="#"><span>Login</span></a></li>
                      <?php } ?>

		          </ul>
		        </div>
			    </nav>
			  <!-- </div> -->
		  </div>
	</header>
