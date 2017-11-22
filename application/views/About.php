<?php $this->load->view('Header') ?>

	<section id="fh5co-contact" data-section="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Get In Touch</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>Masukan anda sangat berguna untuk kami</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-md-6 to-animate">
					<h3>Contact Info</h3>
					<ul class="fh5co-contact-info">
						<li class="fh5co-contact-address ">
							<i class="icon-home"></i>
							Jalan Kuantan Raya, <br>Pekanbaru Indonesia
						</li>
						<li><i class="icon-phone"></i> 0888 1218 0897 </li>
						<li><i class="icon-envelope"></i>Jw@gmail.com/li>
						<li><i class="icon-globe"></i> <a href="#" target="_blank">Kangen.co</a></li>
					</ul>
				</div>

				<div class="col-md-6 to-animate">
					<h3>Hubungi Kami</h3>
					<form method="POST" action="<?php echo site_url('About/tambah_aksi') ?>">
					<div class="form-group ">
						<label for="message" class="sr-only">Message</label>
						<textarea name="isi_komentar" id="message" cols="30" rows="5" class="form-control" placeholder="Isi Komentar"></textarea>
					</div>
					<div class="form-group ">
						<input class="btn btn-primary btn-lg" value="Send Message" type="submit">
					</div></form>
					<?php echo $this->session->flashdata('gagal'); ?>

					</div>
				
				</div>
				<div class="col-md-12 to-animate">
					<img src="<?php echo base_url().'assets/';?>images/kangen.jpg"?> 
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

