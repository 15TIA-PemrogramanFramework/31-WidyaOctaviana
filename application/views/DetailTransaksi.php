$<?php $this->load->view('header') ?>

<section>
<div class="container">

	<div class="page-header">
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<div class="clearfix">



			</div>



			<div>
				<div id="user-profile-1" class="user-profile row">
					
						<div class="hr hr12 dotted"></div>


					</div>

					
				</div>
			</div>


			<div class="space"></div>

			<div>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th class="center">#</th>

							<th class="hidden-xs">Nama Barang</th>
							<th class="hidden-480">Harga</th>
							<th class="hidden-480">Jumlah</th>
							<th>Total</th>
						</tr>
					</thead>

					<tbody>
						<?php foreach ($order as $key => $value) { ?>
						<tr>
							<td class="center"><?php echo $key+1 ?></td>
							
							<td class="hidden-xs">
								<?php echo $value->nama_barang; ?>
							</td>
							<td class="hidden-480"> <?php echo $value->harga_barang ?>  </td>
							<td><?php echo $value->jumlah ?> </td>
							<td><?php echo ($value->harga_barang * $value->jumlah )?> </td>
						</tr>
						<?php } ?>

					
					</tbody>
				</table>
			</div>

			<div class="hr hr8 hr-double hr-dotted"></div>

			<div class="row">
				<div class="col-sm-5 pull-right">
					<h4 class="pull-right">
						Total Transaksi :
						<span class="red"><?php echo $transaksi->total_transaksi ?></span>
					</h4>
				</div>
			</div>















<div class="col-xs-12 col-sm-12 center">
						<?php if ($transaksi->bukti_transaksi!="belum"): ?>
							<center>
		<h3>Bukti Transaksi</h3>

						<div>
							<span class="profile-picture">
								<img width="300px" height="300px" alt="Bukti Transaksi" src="<?php echo base_url().'assets/image/'.$transaksi->bukti_transaksi;?>" />
							</span>

						</div>
						</center>
						<?php endif ?>

						

						<div class="space-6"></div>
<?php 
if($transaksi->validasi_bukti!='valid'){
	$tulisan="Upload Ulang Bukti";
	if ($transaksi->bukti_transaksi=="belum") {
	$tulisan="Upload Bukti Transaksi";
		# code...
	}
?>

<?php
	echo form_open_multipart("Transaksi/UploadBuktiTransaksi_aksi");
	?>
<center>

						<div>
							<span class="profile-picture">

		<img id="output"  />
		<input type="file" name="gambar" id="gambarvalue" onchange="loadFile(event)" />
		<input type="hidden" name="validasi_bukti" value="proses">
		<input type="hidden" name="id_transaksi" value="<?php echo $transaksi->id_transaksi ?>">
							</span>

						</div>
						</center>







<center>
							<button type="submit" style="width: 400px;height: 70px" class="btn btn-app btn-primary btn-sm">
								<font size="4px"><?php echo $tulisan ?></font>
							</button>
		</center>					
						
						<?php echo form_close(); ?>
<?php } ?>
		</div><!-- /.user-profile -->
	</div>
</div>
	<!-- PAGE CONTENT ENDS -->
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
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');

    output.src = URL.createObjectURL(event.target.files[0]);
     output.style.width="500px";
    output.tyle.height="500px";

  };
</script>