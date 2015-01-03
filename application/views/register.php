<!DOCTYPE html>
<html>
<head>
	<title>Fly With Us | Online Airplane Ticket Reservation</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/stylesheets/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/stylesheets/style1.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/stylesheets/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/stylesheets/bootstrap.min.css" />
</head>
<body class="long">
	<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/main.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<header>
		<nav id="navbar">
			<ul class="site-nav">
				<!--<li id="main-logo"><img src="../images"  </li>-->
				<li><a href"#">Home</a></li>
				<li>About</li>
				<li>Contact</li>
			</ul>
		</nav>
		</header>
	<section class="navbar-down ">
		<h1 class="font">Create <b class="font-yellow">an</b> Account</h1>
		<form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/register/create">
			<fieldset>
			<!-- Text input-->
			<div class="control-group">
			  <label class="control-label" for="nama">Nama Lengkap</label>
			  <div class="controls">
			    <input value="<?php echo set_value('nama'); ?>" id="nama" name="nama" type="text" placeholder="Batman bin Suparman" class="input-xlarge" required="">
				<?php echo form_error('nama'); ?>
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  <label class="control-label" for="alamat">Alamat</label>
			  <div class="controls">
			    <input value="<?php echo set_value('alamat'); ?>" id="alamat" name="alamat" type="text" placeholder="Jl. Example" class="input-xlarge" required="">
				<?php echo form_error('alamat'); ?>
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  <label class="control-label" for="email">E-mail</label>
			  <div class="controls">
			    <input value="<?php echo set_value('email'); ?>" id="email" name="email" type="text" placeholder="example@123.com" class="input-xlarge" required="">
				<?php echo form_error('email'); ?>
			  </div>
			</div>

			<!-- Password input-->
			<div class="control-group">
			  <label class="control-label" for="password">Password</label>
			  <div class="controls">
			    <input id="password" name="password" type="password" placeholder="" class="input-xlarge" required="">
				<?php echo form_error('password'); ?>
			  </div>
			</div>

			<!-- Password input-->
			<div class="control-group">
			  <label class="control-label" for="konfirmasi_password">Konfirmasi Password</label>
			  <div class="controls">
			    <input id="konfirmasi_password" name="konfirmasi_password" type="password" placeholder="" class="input-xlarge" required="">
				<?php echo form_error('konfirmasi_password'); ?>
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  <label class="control-label" for="nomor_identitas">Nomor Identitas</label>
			  <div class="controls">
			    <input value="<?php echo set_value('nomor_identitas'); ?>" id="nomor_identitas" name="nomor_identitas" type="text" placeholder="" class="input-xlarge" required="">
			    <p class="help-block">Petunjuk: Gunakan KTP / Kartu Pelajar / Kartu SIM / Paspor</p>
				<?php echo form_error('nomor_identitas'); ?>
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  <label class="control-label" for="nomor_telepon">Nomor Telepon</label>
			  <div class="controls">
			    <input value="<?php echo set_value('nomor_telepon'); ?>" id="nomor_telepon" name="nomor_telepon" type="text" placeholder="" class="input-xlarge" required="">
				<?php echo form_error('nomor_telepon'); ?>
			  </div>
			</div>

			<!-- Button -->
			<div class="control-group">
			  <label class="control-label" for="submit"></label>
			  <div class="controls">
			    <button id="submit" name="submit" class="button">Submit</button>
			  </div>
			</div>
		</fieldset>
		</form>

	</section>
