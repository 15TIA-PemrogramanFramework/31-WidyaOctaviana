<?php $this->load->view('Header') ?>




<?php 
	$member=$this->session->userdata('member');

	$status=$this->session->userdata('status');

	 ?>

	
<section id="fh5co-work1" data-section="product">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate" style="margin-top: 100px">Kangen Water's Product</h2>
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
											if((!empty($status))&&($barang->stok_barang>0)){
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
