	<?php

	$data['alamat']="<li class='active'><a href='".site_url('Dashboard/Transaksi')."'>Transaksi</a></li>";
$data['alamatactive']="transaksi";


	$this->load->view('Admin/Header',$data); ?>

	<div class="page-header">
		<h1>
			Detail Transaksi

		</h1>
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<div class="clearfix">



			</div>



			<div>
				<div id="user-profile-1" class="user-profile row">
					<div class="col-xs-12 col-sm-6 center">
						<div>
							<span class="profile-picture">
								<img width="300px" height="300px" alt="Bukti Transaksi" src="<?php echo base_url().'assets/image/'.$transaksi->bukti_transaksi;?>" />
							</span>

						</div>

						<div class="space-6"></div>
<?php 
if($transaksi->validasi_bukti!='valid'){
?>
						<div class="profile-contact-info">
							<form action="<?php echo site_url('Transaksi/updateStatus') ?>" method="post">
<input type="hidden" name="halaman"  value="Dashboard">
<input type="hidden" name="id_transaksi" value="<?php echo $transaksi->id_transaksi; ?>">
<input type="hidden" name="validasi_bukti" value="valid">

							<button type="submit" style="width: 100px;height: 70px" class="btn btn-app btn-success btn-sm">
								<i class="ace-icon glyphicon glyphicon-ok bigger-200"></i>
								Valid
							</button>
						</form>
						<form action="<?php echo site_url('Transaksi/updateStatus') ?>" method="post">
							<input type="hidden" name="halaman"  value="Dashboard">
<input type="hidden" name="id_transaksi" value="<?php echo $transaksi->id_transaksi; ?>">
<input type="hidden" name="validasi_bukti" value="tidak valid">
							<button type="submit" style="width: 100px;height: 70px" class="btn btn-app btn-danger btn-sm">
								<i class="ace-icon glyphicon glyphicon-remove bigger-200"></i>
								Tidak Valid
							</button>
						</form>
						</div>
<?php } ?>
						<div class="hr hr12 dotted"></div>


					</div>

					<div class="col-xs-12 col-sm-6">


						<div class="space-12"></div>

						<div class="profile-user-info profile-user-info-striped">
							<div class="profile-info-row">
								<div class="profile-info-name"> Username </div>

								<div class="profile-info-value">
									<span class="editable" id="username"><?php echo $transaksi->username ?></span>
								</div>
							</div>

							<div class="profile-info-row">
								<div class="profile-info-name"> Nomor Handphone </div>

								<div class="profile-info-value">
									<i class="fa fa-map-marker light-orange bigger-110"></i>
									<span class="editable" id="country"><?php echo $transaksi->nohp ?></span>

								</div>
							</div>

							<div class="profile-info-row">
								<div class="profile-info-name"> Alamat Tujuan </div>

								<div class="profile-info-value">
									<i class="fa fa-map-marker light-orange bigger-110"></i>
									<span class="editable" id="age"><?php echo $transaksi->alamat_tujuan ?></span>
								</div>
							</div>

							<div class="profile-info-row">
								<div class="profile-info-name">Kode Pembayaran </div>

								<div class="profile-info-value">
									<span class="editable" id="signup"><?php echo $transaksi->kode_pembayaran ?></span>
								</div>
							</div>

							<div class="profile-info-row">
								<div class="profile-info-name"> Validasi Bukti  </div>

								<div class="profile-info-value">
								<span class="editable" id="about"> <?php echo $transaksi->validasi_bukti ?></span>
							</div>

							</div>

							<div class="profile-info-row">
								<div class="profile-info-name">Total Transaksi </div>

								<div class="profile-info-value">
									<span class="editable" id="about"> <?php echo $transaksi->total_transaksi ?></span>
								</div>
							</div>

							<div class="profile-info-row">
								<div class="profile-info-name"> Tanggal transaksi</div>

								<div class="profile-info-value">
									<span class="editable" id="about"><?php echo $transaksi->tanggal_transaksi ?></span>
								</div>
							</div>
						</div>

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



		</div><!-- /.user-profile -->
	</div>

	<!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->

<?php $this->load->view('Admin/Footer') ?>