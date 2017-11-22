<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="utf-8" />
<title>Kangen Water</title>

<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

<!-- bootstrap & fontawesome -->
<link rel="stylesheet" href="<?php echo base_url().'assetsadmin/'; ?>css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url().'assetsadmin/'; ?>font-awesome/4.5.0/css/font-awesome.min.css" />

<!-- page specific plugin styles -->

<!-- text fonts -->
<link rel="stylesheet" href="<?php echo base_url().'assetsadmin/'; ?>css/fonts.googleapis.com.css" />

<!-- ace styles -->
<link rel="stylesheet" href="<?php echo base_url().'assetsadmin/'; ?>css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

	<!--[if lte IE 9]>
		<link rel="stylesheet" href="<?php echo base_url().'assetsadmin/'; ?>css/ace-part2.min.css" class="ace-main-stylesheet" />
	<![endif]-->
	<link rel="stylesheet" href="<?php echo base_url().'assetsadmin/'; ?>css/ace-skins.min.css" />
	<link rel="stylesheet" href="<?php echo base_url().'assetsadmin/'; ?>css/ace-rtl.min.css" />

	<!--[if lte IE 9]>
	  <link rel="stylesheet" href="<?php echo base_url().'assetsadmin/'; ?>css/ace-ie.min.css" />
	<![endif]-->

	<!-- inline styles related to this page -->

	<!-- ace settings handler -->
	<script src="<?php echo base_url().'assetsadmin/'; ?>js/ace-extra.min.js"></script>

	<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

	<!--[if lte IE 8]>
	<script src="<?php echo base_url().'assetsadmin/'; ?>js/html5shiv.min.js"></script>
	<script src="<?php echo base_url().'assetsadmin/'; ?>js/respond.min.js"></script>
<![endif]-->
</head>


<?php 
$admin=$this->session->userdata('admin'); ?>
<body class="no-skin">
<div id="navbar" class="navbar navbar-default          ace-save-state">
	<div class="navbar-container ace-save-state" id="navbar-container">
		<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
			<span class="sr-only">Toggle sidebar</span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>
		</button>

		<div class="navbar-header pull-left">
			<a href="index.html" class="navbar-brand">
				<small>
					<i class="fa fa-leaf"></i>
					Kangen Water Admin
				</small>
			</a>
		</div>

		<div class="navbar-buttons navbar-header pull-right" role="navigation">
			<ul class="nav ace-nav">
				

				<li class="light-blue dropdown-modal">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
						<img class="nav-user-photo" src="<?php echo base_url().'assets/image/'.$admin->foto; ?>" alt="Jason's Photo" />
						<span class="user-info">
							<small>Welcome,</small>
							<?php echo $admin->username ?>
						</span>

						<i class="ace-icon fa fa-caret-down"></i>
					</a>

					<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
						<li>
							<a href="<?php echo site_url('Dashboard/EditProfilAdmin/'.$admin->username) ?>">
								<i class="ace-icon fa fa-cog"></i>
								Settings
							</a>
						</li>

						<li>
							<a href="<?php echo site_url('Dashboard/ProfilAdmin/'.$admin->username) ?>">
								<i class="ace-icon fa fa-user"></i>
								Profile
							</a>
						</li>

						<li class="divider"></li>

						<li>
							<a href="<?php echo site_url('Login/Logout') ?>">
								<i class="ace-icon fa fa-power-off"></i>
								Logout
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div><!-- /.navbar-container -->
</div>



<div class="main-container ace-save-state" id="main-container">
	<script type="text/javascript">
		try{ace.settings.loadState('main-container')}catch(e){}
	</script>

	<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
		<script type="text/javascript">
			try{ace.settings.loadState('sidebar')}catch(e){}
		</script>

		<?php 
		
		$das="";
		$ang="";
		$kom="";
		$tes="";
		$bar="";
		$tran="";
		switch ($alamatactive) {
		 	case 'dashboard':
		 		$das="active";
		 		break;
		 	

		 	case 'anggota':
		 		$ang="active";
		 		break;

		 		case 'transaksi':
		 		$tran="active";
		 		break;

		 		case 'barang':
		 		$bar="active";
		 		break;


				case 'komentar':
		 		$kom="active";
		 		break;

		 		case 'testimoni':
		 		$tes="active";
		 		break;

		 	default:
		 		# code...
		 		break;
		 } ?>
		<ul class="nav nav-list">
			<li class="<?php echo $das ?>">
				<a href="<?php echo site_url('Dashboard') ?>">
					<i class="menu-icon fa fa-tachometer"></i>
					<span class="menu-text"> Dashboard </span>
				</a>

				<b class="arrow"></b>
			</li>

			<li class="<?php echo $ang ?>">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-user"></i>
					<span class="menu-text">
						Anggota
					</span>

					<b class="arrow fa fa-angle-down"></b>
				</a>

				<b class="arrow"></b>

				<ul class="submenu">




					<li class="">
						<a href="<?php echo site_url('Dashboard/Member') ?>">
							<i class="menu-icon fa fa-caret-right"></i>
							Member
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="<?php echo site_url('Dashboard/Admin') ?>">
							<i class="menu-icon fa fa-caret-right"></i>
							Pekerja
						</a>

						<b class="arrow"></b>
					</li>
					


				</ul>
			</li>

			<li class="<?php echo 	$tran ?>">
				<a href="<?php echo site_url('Dashboard/Transaksi') ?>">
					<i class="menu-icon fa fa-list"></i>
					<span class="menu-text"> Transaksi </span>
				</a>

			</li>
			<li class="<?php echo 	$bar ?>">
				<a href="<?php echo site_url('Dashboard/Barang') ?>">
					<i class="menu-icon fa fa-list"></i>
					<span class="menu-text"> Barang </span>
				</a>

			</li>
			<li class="<?php echo 	$kom ?>	">
				<a href="<?php echo site_url('Dashboard/Komentar') ?>">
					<i class="menu-icon fa fa-comment"></i>
					<span class="menu-text"> Komentar </span>
				</a>
			</li>



			<li class="<?php echo 	$tes ?>">
				<a href="<?php echo site_url('Dashboard/Testimoni') ?>">
					<i class="menu-icon fa fa-star"></i>
					<span class="menu-text"> Testimoni </span>
				</a>

				<b class="arrow"></b>
			</li>



		</ul><!-- /.nav-list -->

		<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
			<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
		</div>
	</div>

	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb">
					<li>
						<i class="ace-icon fa fa-home home-icon"></i>
						<a href="#">Home</a>
					</li>
<?php echo $alamat ?>
				</ul><!-- /.breadcrumb -->

				<div class="nav-search" id="nav-search">
					<form class="form-search">
						<span class="input-icon">
							<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
							<i class="ace-icon fa fa-search nav-search-icon"></i>
						</span>
					</form>
				</div><!-- /.nav-search -->
			</div>

			
						<!-- PAGE CONTENT BEGINS -->
