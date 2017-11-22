<?php $this->load->view('Header') ?>




<?php 
	$member=$this->session->userdata('member');

	$status=$this->session->userdata('status');

	 ?>

	
<section id="fh5co-testimonials" data-section="testimoni">
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



	 
	
	<script src="<?php echo base_url().'assets/'; ?>js/main.js"></script>
	
		
		
		<!-- //footer -->   
		
		
		
		
		
		<script src="<?php echo base_url()."assets/"; ?>js/bootstrap.js"></script>



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

	</body>
	</html>

	
	<!-- End demo purposes only -->

	<!-- Main JS (Do not remove) -->
	<script src="<?php echo base_url().'assets/'; ?>js/main.js"></script>
