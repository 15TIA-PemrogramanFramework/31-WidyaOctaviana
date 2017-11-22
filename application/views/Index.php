
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Kangen Water</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->
<?php 
	$username=$this->session->userdata('username');
	$status=$this->session->userdata('status');
	 ?>


	 	<?php 
	$member=$this->session->userdata('member');
	
	$status=$this->session->userdata('status');

	 ?>
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
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

	<!-- 
	Default Theme Style 
	You can change the style.css (default color purple) to one of these styles
	
	1. pink.css
	2. blue.css
	3. turquoise.css
	4. orange.css
	5. lightblue.css
	6. brown.css
	7. green.css

	-->
	<link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/style.css">

	<!-- Styleswitcher ( This style is for demo purposes only, you may delete this anytime. ) -->
	<link rel="stylesheet" id="theme-switch" href="<?php echo base_url().'assets/'; ?>css/style.css">
	<!-- End demo purposes only -->



	<!-- Modernizr JS -->
	<script src="<?php echo base_url().'assets/'; ?>js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<header role="banner" id="fh5co-header">
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
		            <li class="active"><a href="<?php echo site_url('Home');?>" data-nav-section="home"><span>Home</span></a></li>
		            <li><a href="<?php echo site_url('Product');?>"><span>Product</span></a></li>
		            <li><a href="<?php echo site_url('Testimonials');?>" data-nav-section="testimoni"><span>Testimonials</span></a></li>
		           
		            <li><a href="<?php echo site_url('About')?>" data-nav-section="#"><span>About</span></a></li>
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

	<section id="fh5co-home" data-section="home" style="background-image: url(
	<?php echo base_url().'assets/';?>images/kangen.jpg);" data-stellar-background-ratio="0.5">
		<div class="gradient"></div>
		<div class="container">
			<div class="text-wrap">
				<div class="text-inner">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<!--<h1 class="to-animate">Do something you love.</h1>-->
							<h2 class="to-animate">The Best Facial spray for US  <a href="#" target="_blank" title="Free HTML5 Bootstrap Templates"></a>  <a href="http://creativecommons.org/licenses/by/3.0/" target="_blank"></a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slant"></div>
	</section>

	

	

	<section id="fh5co-testimonials" data-section="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Testimonials</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
						<h3>"Solusi wajah cerah bebas jerawat hanya dengan KangeWater"
								&nbsp
								&nbsp
							Wajah Cerah, harga besahabat Yuk Order!!</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
		<?php 
		$banyaktesti=count($semuatesti);
		

		if ($banyaktesti>3) {
			$banyaktesti=3;
		}

		?>

			<?php for($i=0;$i<$banyaktesti;$i++){ 
									$testi=$semuatesti[$i];
									?>



				<div class="col-md-4">
					<div class="box-testimony">
						<blockquote class="to-animate-2">
							<p>&ldquo;<?php echo $testi->isi_testimoni ?>&rdquo;</p>
						</blockquote>
						<div class="author to-animate">
							<figure><img src="<?php echo base_url().'assets/image/'.$testi->foto; ?>" alt="Person"></figure>
							<p>
							<?php echo $testi->username ?><span class="subtext"><?php echo $testi->nama_barang ?></span>
							</p>
						</div>
					</div>
				</div>


				<?php } ?>
				
				
				
			</div>
		</div>
	</section>


s



<section id="fh5co-work" data-section="work">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Kangen Water's Product</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>"Solusi wajah cerah bebas jerawat hanya dengan KangeWater"
								&nbsp
								&nbsp
							Wajah Cerah, harga besahabat Yuk Order!!</h3>
						</div>
					</div>
				</div>
			</div>

			
			<div class="row row-bottom-padded-sm">
				<?php 
	$banyak=count($semuabarang);

	if ($banyak>3) {
		$banyak=3;
	}
?>
<?php for($i=0;$i<$banyak;$i++){ 
	$barang=$semuabarang[$i];
	?>
				<div class="col-md-4 col-sm-6 col-xxs-12">
					<div class="fh5co-project-item" data-toggle="modal" data-target="#myModal<?php echo $i ?>">
						<img src="<?php echo base_url()."assets/"; ?>image/<?php echo $barang->gambar_barang ?>" alt="Image" class="img-responsive">
						<div class="fh5co-text">
						<h2><?php echo $barang->nama_barang; ?></h2>
						<span><?php echo $barang->harga_barang; ?></span> <br>
						
						

						</div>
</div>
					

				</div>


	<div class="modal fade" id="myModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModal<?php echo $i; ?>" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-body modal-body-sub"> 
										<center>	
											<h3>Detail Barang</h3> <br>
											
											<br>
											<p><h2><?php echo $barang->nama_barang; ?></h2></p>
											<p><h4><?php echo $barang->harga_barang; ?></h4></p>
											<br>
											<p><h4>Keterangan</h4></p>
											<p style="color: black"><?php echo $barang->detail_barang; ?></p>
											<br>
											<?php
											if(!empty($status)){
												?>
												<p>
													<a href="<?php echo site_url("Cart/addCart/".$barang->id_barang."/1") ?>" class="btn btn-warning">
														<b>Beli</b>
													</a>
												</p>
												<?php
											}
											else
											{

											}
											?>
										</center>
									</div>
								</div>
							</div>
						</div>


				<?php }  ?>



			</div>
		</div>
	</section>







	
	
	<section id="fh5co-counters" style="background-image: url(images/full_image_1.jpg);" data-stellar-background-ratio="0.5">
		<div class="fh5co-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center to-animate">
					<h2>Fun Facts</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate">
						<i class="fh5co-counter-icon icon-briefcase to-animate-2"></i>
						<span class="fh5co-counter-number js-counter" data-from="0" data-to="50" data-speed="5000" data-refresh-interval="50">50</span>
						<span class="fh5co-counter-label">Best Product</span>
					</div>
				</div>
			
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate">
						<i class="fh5co-counter-icon icon-people to-animate-2"></i>
						<span class="fh5co-counter-number js-counter" data-from="0" data-to="999" data-speed="5000" data-refresh-interval="50">999</span>
						<span class="fh5co-counter-label">Happy clients</span>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate">
						<i class="fh5co-counter-icon icon-people to-animate-2"></i>
						<span class="fh5co-counter-number js-counter" data-from="0" data-to="40" data-speed="5000" data-refresh-interval="50">40</span>
						<span class="fh5co-counter-label">Best Customer Service</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<footer id="footer" role="contentinfo">
		<a href="#" class="gotop js-gotop"><i class="icon-arrow-up2"></i></a>
		<div class="container">
			<div class="">
				<div class="col-md-12 text-center">
					<p>&copy; Elate Free HTML5. All Rights Reserved. <br>Created by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Images: <a href="http://pexels.com/" target="_blank">Pexels</a>, <a href="http://plmd.me/" target="_blank">plmd.me</a></p>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="social social-circle">
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-youtube"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	
	
	<!-- For demo purposes Only ( You may delete this anytime :-) 
	<div id="colour-variations">
		<a class="option-toggle"><i class="icon-gear"></i></a>
		<h3>Preset Colors</h3>
		<ul>
			<li>
				<a href="javascript: void(0);" data-theme="style">
					<span style="background: #3f95ea;"></span>
					<span style="background: #52d3aa;"></span>
					<span style="background: #f2f2f2;"></span>
				</a>
			</li>
			<li>
				<a href="javascript: void(0);" data-theme="style2">
					<span style="background: #329998;"></span>
					<span style="background: #6cc99c;"></span>
					<span style="background: #f2f2f2;"></span>
				</a>
			</li>
			<li>
				<a href="javascript: void(0);" data-theme="style3">
					<span style="background: #9f466e;"></span>
					<span style="background: #c24d67;"></span>
					<span style="background: #f2f2f2;"></span>
				</a>
			</li>
			<li>
				<a href="javascript: void(0);" data-theme="style4">
					<span style="background: #21825C;"></span>
					<span style="background: #A4D792;"></span>
					<span style="background: #f2f2f2;"></span>
				</a>
			</li>
			
		</ul>
	</div>
	<!-- End demo purposes only -->

	
	<!-- jQuery -->
	<script src="<?php echo base_url().'assets/'; ?>js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url().'assets/'; ?>js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url().'assets/'; ?>js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url().'assets/'; ?>js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="<?php echo base_url().'assets/'; ?>js/jquery.stellar.min.js"></script>
	<!-- Counter -->
	<script src="<?php echo base_url().'assets/'; ?>js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url().'assets/'; ?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url().'assets/'; ?>js/magnific-popup-options.js"></script>
	<!-- Google Map -->
	<script src="<?php echo base_url().'assets/'; ?>https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="<?php echo base_url().'assets/'; ?>js/google_map.js"></script>

	<!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
	<script src="<?php echo base_url().'assets/'; ?>js/jquery.style.switcher.js"></script>
	<script>
		$(function(){
			$('#colour-variations ul').styleSwitcher({
				defaultThemeId: 'theme-switch',
				hasPreview: false,
				cookie: {
		          	expires: 30,
		          	isManagingLoad: true
		      	}
			});	
			$('.option-toggle').click(function() {
				$('#colour-variations').toggleClass('sleep');
			});
		});
	</script>
	<!-- End demo purposes only -->

	<!-- Main JS (Do not remove) -->
	<script src="<?php echo base_url().'assets/'; ?>js/main.js"></script>

	</body>
</html>

