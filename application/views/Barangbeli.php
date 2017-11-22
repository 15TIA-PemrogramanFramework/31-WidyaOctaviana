<?php $this->load->view('Header') ?>




<section id="fh5co-testimonials">
<div class="container">
		<?php 
		$jumlahbeli=count($barangbeli);
		$bisatesti=false;
		$halaman='Dashboard';

		if ($jumlahbeli>0) {?>
		<div class="row" >
			<div class="col-xs-12">
				<div class="row">
					<div class="col-xs-12">
						<table id="simple-table" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Username</th>
									<th><i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>Tanggal Transaksi</th>
									<th>Nama barang</th>
									
									<th>Testimoni</th>
								</tr>
							</thead>

							<tbody>
								<?php for($i=0;$i<$jumlahbeli;$i++){ 
									$barang=$barangbeli[$i];
									?>
									<tr>
										<td><?php echo $barang->username ?></td>

										<td><?php echo $barang->tanggal_transaksi ?></td>
										

										<td>
											<a href="#"><?php echo $barang->nama_barang; ?></a>
										</td>
										<td> <a href="<?php echo site_url('Testimonials/beritestimoni/'.$barang->id_barang.'/'.$barang->username) ?>">Detail</a></td>
									</tr>

									

									<?php } ?>
								</tbody>
							</table>
						</div><!-- /.span -->
					</div><!-- /.row -->
					
					<!-- PAGE CONTENT ENDS -->
				</div><!-- /.col -->
			</div>

<?php if ($bisatesti): ?>
	<div class="col-md-9 to-animate">
					<h3>Berikan Testimoni Anda</h3>
					<form method="POST" action="<?php echo site_url('Testimonials/tambah_aksi') ?>">
					<div class="form-group ">
						<label for="message" class="sr-only">Message</label>
						<textarea name="isi_testimoni" id="message" cols="30" rows="5" class="form-control" placeholder="Isi Testimoni"></textarea>
						<input type="hidden" name="username" value="<?php echo $this->session->userdata('member')->username ?>">
					</div>
					<div class="form-group ">
						<input class="btn btn-primary btn-lg" value="kirim Testimoni" type="submit">
					</div></form>
					<?php echo $this->session->flashdata('gagal'); ?>

					</div>
<?php endif ?>
			


<?php }else{?>

<center><h2>anda blum pernah melakukan pembelian</h2></center>
<?php } ?>


</div>
				</section>


</div>


	
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
