<!doctype html>
<html class="fixed">
<html class="fixed" lang="<?php echo e(app()->getLocale()); ?>">
	<head>

        <!-- Basic -->
        <meta charset="UTF-8">

        <title>MIRROR</title>

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
        <link href="<?php echo e(asset('http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light')); ?> " rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <?php echo Html::style('assets/vendor/bootstrap/css/bootstrap.css'); ?>

        <?php echo Html::style('assets/vendor/font-awesome/css/font-awesome.css'); ?>

        <?php echo Html::style('assets/vendor/magnific-popup/magnific-popup.css'); ?>

        <?php echo Html::style('assets/vendor/bootstrap-datepicker/css/datepicker3.css'); ?>

        <?php echo e(Html::favicon('favicon.ico')); ?>


        <!-- Specific Page Vendor CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/select2/select2.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/jquery-datatables-bs3/assets/css/datatables.css')); ?>" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/stylesheets/theme.css')); ?>" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/stylesheets/skins/default.css')); ?>" />

        <!-- Head Libs -->
        <?php echo e(Html::script('assets/vendor/modernizr/modernizr.js')); ?>

  
	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="#" class="logo pull-left">
					<h3>CERTIFICADOS HSEQ MUNDIAL</h3>
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Login</h2>
					</div>
					<div class="panel-body">
					
						<form method="POST" action="<?php echo e(route('login')); ?>">
                         <?php echo e(csrf_field()); ?>



							<div class="form-group mb-lg">
								<label>Username</label>
								<div class="input-group input-group-icon">
									<?php echo $errors->first('email',' <div class="text-left" ><span class="text-danger" >:message</span> </div>'); ?>

                                    <input type="email" class="form-control" value="<?php echo e(old('email')); ?>" name="email" placeholder="Correo electrónico "/>
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label>
									<a href="#" class="pull-right">Contraseña perdida?</a>
								</div>
								<div class="input-group input-group-icon">
									<?php echo $errors->first('Password',' <div class="text-left" ><span class="text-danger" >:message</span> </div>'); ?>

                                    <input type="password" class="form-control" value="<?php echo e(old('Password')); ?>" name="Password" placeholder="Password"/>
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Recuérdame</label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary hidden-xs">Login</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Login</button>
								</div>
							</div>

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2019. All rights reserved by <a>Nredondo26@gmail.com</a>.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		

		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

	</body>
</html>