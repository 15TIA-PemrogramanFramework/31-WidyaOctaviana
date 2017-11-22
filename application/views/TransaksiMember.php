<?php $this->load->view('Header') ?>




<section id="fh5co-testimonials">
<div class="container">
		<?php 
		$banyaktransaksi=count($semuatransaksi);
		$bisatesti=false;
		$halaman='Dashboard';

		if ($banyaktransaksi>0) {?>
		<div class="row" >
			<div class="col-xs-12">
				<div class="row">
					<div class="col-xs-12">
						<table id="simple-table" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Username</th>
									<th><i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>Tanggal Transaksi</th>
									<th>Total Transaksi</th>
									<th class="hidden-480">Alamat Tujuan</th>

									<th>

										Nomor Handphone
									</th>
									<th class="hidden-480">Kode Pembayaran</th>

									<th>Status Bukti</th>
									<th>Detail</th>
								</tr>
							</thead>

							<tbody>
								<?php for($i=0;$i<$banyaktransaksi;$i++){ 
									$transaksi=$semuatransaksi[$i];
									if($transaksi->validasi_bukti=="valid"){
										$bisatesti=true;
									}
									?>

									<tr>

										<td><?php echo $transaksi->username ?></td>
										

										<td>
											<a href="#"><?php echo $transaksi->tanggal_transaksi; ?></a>
										</td>
										<td><?php echo $transaksi->total_transaksi ?></td>
										<td class="hidden-480"><?php echo $transaksi->alamat_tujuan ?></td>
										<td><?php echo $transaksi->nohp ?></td>

										<td class="hidden-480">
											<?php echo $transaksi->kode_pembayaran ?>
										</td>
										<?php 
										$status=$transaksi->validasi_bukti;
										$class="";
										if($status=='valid'){
											$class="label label-sm label-success";
										}else if ($status=='tidak valid') {
											$class="label label-sm label-danger";
										}else{
											$class="label label-sm label-warning";
										}
										?>
										<td>
											<span class="<?php echo($class)?>">
												<?php echo $transaksi->validasi_bukti; ?>
											</span>

										</td>
<td> <a href="<?php echo site_url('Transaksi/DetailTransaksi/'.$transaksi->id_transaksi) ?>">Detail</a></td>
									</tr>

									

									<?php } ?>
								</tbody>
							</table>
						</div><!-- /.span -->
					</div><!-- /.row -->
					
					<!-- PAGE CONTENT ENDS -->
				</div><!-- /.col -->
			</div>


			


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
