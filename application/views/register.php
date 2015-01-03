<!DOCTYPE html>
<html>
<head>
  <title>FlyWithUs</title>
  <link data-turbolinks-track="true" href="<?php echo base_url();?>assets/stylesheets/login.css?body=1" media="all" rel="stylesheet" />
<link data-turbolinks-track="true" href="<?php echo base_url();?>assets/stylesheets/register.css?body=1" media="all" rel="stylesheet" />
<link data-turbolinks-track="true" href="<?php echo base_url();?>assets/stylesheets/reserve.css?body=1" media="all" rel="stylesheet" />
<link data-turbolinks-track="true" href="<?php echo base_url();?>assets/stylesheets/application.css?body=1" media="all" rel="stylesheet" />

</head>
<body>

<!DOCTYPE html>
<html>
<head>
	<title>Fly With Us | Online Airplane Ticket Reservation</title>
	<link href="<?php echo base_url();?>assets/stylesheets/main.css?body=1" media="screen" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/stylesheets/style1.css?body=1" media="screen" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/stylesheets/font-awesome.min.css?body=1" media="screen" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/stylesheets/bootstrap.min.css?body=1" media="screen" rel="stylesheet" />
</head>
<body class="long">
	<script src="<?php echo base_url();?>assets/javascripts/jquery-1.11.2.js?body=1"></script>
	<script src="<?php echo base_url();?>assets/javascripts/bootstrap.min.js?body=1"></script>
	<script src="<?php echo base_url();?>assets/javascripts/main.js?body=1"></script>
	<script src="<?php echo base_url();?>assets/javascripts/modernizr-2.6.2-respond-1.1.0.min.js?body=1"></script>
		<header>
		<nav id="navbar">
			<ul class="site-nav">
				<!--<li id="main-logo"><img src="../images"  </li>-->
				<li><a href="<?php echo base_url();?>index.php/login">Home</a></li>
				<li>About</li>
				<li>Contact</li>
			</ul>
		</nav>
		</header>

	<section class="navbar-down ">
		<h1 class="font">Create <b class="font-yellow">an</b> Account</h1>
        <form accept-charset="UTF-8" action="<?php echo base_url();?>index.php/register/create" class="form-horizontal" method="post">
			<fieldset>
			<!-- Text input-->
			<div class="control-group">
                <label value="<?php echo set_value('nama'); ?>" class="control-label" for="nama_lengkap">Nama lengkap</label>
			  <!--<label class="control-label" for="nama">Nama Lengkap</label>-->
			  <div class="controls">
			  	  <input class="input-xlarge" id="nama_lengkap" name="nama" placeholder="Nabila" type="text" required=""/>
				  <?php echo form_error('nama'); ?>
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
                <label class="control-label" for="alamat">Alamat</label>
			  <div class="controls">
			  	  <input value="<?php echo set_value('alamat'); ?>" class="input-xlarge" id="alamat" name="alamat" type="text" required=""/>
				  <?php echo form_error('alamat'); ?>
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
                <label class="control-label" for="email">Email</label>
			  <div class="controls">
			  	  <input value="<?php echo set_value('email'); ?>" class="input-xlarge" id="email" name="email" type="text" required=""/>
				  <?php echo form_error('email'); ?>
			  </div>
			</div>

			<!-- Password input-->
			<div class="control-group">
                <label class="control-label" for="password">Password</label>
			  <div class="controls">
			  	  <input class="input-xlarge" id="password" name="password" type="password" required=""/>
			    <p class="help-block">Minimal 8 karakter alfanumerik</p>
				<?php echo form_error('password'); ?>
			  </div>
			</div>

			<!-- Password input-->
			<div class="control-group">
                <label class="control-label" for="konfirmasi_password">Konfirmasi password</label>
			  <!--<label class="control-label" for="konfirmasi_password">Konfirmasi Password</label>-->
			  <div class="controls">
			      <input class="input-xlarge" id="konfirmasi_password" name="konfirmasi_password" type="password" required=""/>
				  <?php echo form_error('konfirmasi_password'); ?>
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
                <label class="control-label" for="nomor_identitas">Nomor identitas</label>
			  <div class="controls">
			  	  <input value="<?php echo set_value('nomor_identitas'); ?>" class="input-xlarge" id="nomor_identitas" name="nomor_identitas" type="text" required=""/>
			    <p class="help-block">KTP / Kartu Pelajar / Kartu SIM / Paspor</p>
				  <?php echo form_error('nomor_identitas'); ?>
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
                <label class="control-label" for="nomor_telepon">Nomor telepon</label>
			  <div class="controls">
			  	  <input value="<?php echo set_value('nomor_telepon'); ?>" class="input-xlarge" id="nomor_telepon" name="nomor_telepon" type="text" required=""/>
				  <?php echo form_error('nomor_telepon'); ?>
			  </div>
			</div>

			<!-- Button -->
			<div class="control-group">
                <label class="control-label" for="submit">Submit</label>
			  <div class="controls">
			  	  <input class="button" name="commit" type="submit" value="submit" />
			  </div>
			</div>
		</fieldset>
		<!--</form>-->
</form>
	</section>
</body>
</html>

</body>
</html>
