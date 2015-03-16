<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Login</title>

	<!--=== CSS ===-->

	<!-- Bootstrap -->
	<link href="<?php echo base_url();?>admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<!-- Theme -->
	<link href="<?php echo base_url();?>admin/assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>admin/assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>admin/assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>admin/assets/css/icons.css" rel="stylesheet" type="text/css" />

	<!-- Login -->
	<link href="<?php echo base_url();?>admin/assets/css/login.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="<?php echo base_url();?>admin/assets/css/fontawesome/font-awesome.min.css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="assets/css/fontawesome/font-awesome-ie7.min.css">
	<![endif]-->

	<!--[if IE 8]>
		<link href="assets/css/ie8.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

	<!--=== JavaScript ===-->

	<script type="text/javascript" src="<?php echo base_url();?>admin/assets/js/libs/jquery-1.10.2.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>admin/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>admin/assets/js/libs/lodash.compat.min.js"></script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="assets/js/libs/html5shiv.js"></script>
	<![endif]-->
</head>

<body class="login">
	<!-- Logo -->
	<div class="logo">
		Administrator
	</div>
	<!-- /Logo -->

	<!-- Login Box -->
	<div class="box">
		<div class="content">
			<!-- Login Formular -->
			<form class="form-vertical login-form" action="<?php echo base_url() ?>index.php/office/login" method="post">
				<!-- Title -->
				<h3 class="form-title">Sign In</h3>

				<!-- Error Message -->
				<?php if($this->session->flashdata('gagallogin')){ ?>
				<div class="alert fade in alert-danger">
					<i class="icon-remove close" data-dismiss="alert"></i>
					<?php echo $this->session->flashdata('gagallogin'); ?>
				</div>
				<?php } ?>
				<!-- Input Fields -->
				<div class="form-group">
					<!--<label for="username">Username:</label>-->
					<div class="input-icon">
						<i class="icon-user"></i>
						<input type="text" name="username" class="form-control" placeholder="Username" autofocus="autofocus"  />
					</div>
				</div>
				<div class="form-group">
					<!--<label for="password">Password:</label>-->
					<div class="input-icon">
						<i class="icon-lock"></i>
						<input type="password" name="password" class="form-control" placeholder="Password"  />
					</div>
				</div>
				<!-- /Input Fields -->

				<!-- Form Actions -->
				<div class="form-actions">
					<button type="submit" class="submit btn btn-primary">
						Sign In <i class="icon-angle-right"></i>
					</button>
				</div>
			</form>
			<!-- /Login Formular -->
		</div> <!-- /.content -->
	</div>
	<!-- /Login Box -->
</body>
</html>