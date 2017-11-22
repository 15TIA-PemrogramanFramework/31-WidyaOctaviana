<?php $this->load->view('header'); ?>


<section style="margin-top: 100px; margin-bottom: 100px">

<center>
	<div class="container">


<form action="<?php echo($action) ?>" method="post">
	<table>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td> <input type="text" name="alamat_tujuan" value="<?php echo($alamat_tujuan) ?>"> </td>
			<tr>
				<tr>
					<td>Nomor handphone</td>
					<td>:</td>
					<td><input type="text" name="nohp" value="<?php echo($nohp) ?>"></td>
				</tr>
				<tr>
					<td>total</td>
					<td>:</td>
					<td><?php echo $total_transaksi; ?></td>
				</tr>
				<tr>
					<td>kode pembayaran anda</td>
					<td>:</td>
					<td><?php 	echo $kode_pembayaran; ?></td>

				</tr>
				<tr>
				<td>
				Bank BRI 	
				</td>
				<td>:</td>
				<td>088 888 888</td>
			</tr>
			<td>
				Bank mandiri
			</td>
			<td>:</td>
			<td>777 777 777</td>
	</table>
	
	<input type="hidden" name="total_transaksi" value="<?php echo($total_transaksi) ?>">
	<input type="hidden" name="kode_pembayaran" value="<?php echo($kode_pembayaran) ?>">
	<input type="hidden" name="username" value="<?php echo($username) ?>">

		
<?php 

  ?>
          <br>		
         <a href="<?php echo site_url('Cart/showCart'); ?>"> <button class="btn btn-app btn-primary btn-sm">Kembali kecart</button>
         </a>	
 
 <button type="submit" class="btn btn-app btn-primary btn-sm" ><?php echo($button) ?></button>
</form>
	</div>
	</center>
</section >




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

