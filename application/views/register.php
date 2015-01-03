<!DOCTYPE html>
<html>
<head>
  <title>FlyWithUs</title>
  <link data-turbolinks-track="true" href="<?php echo base_url();?>assets/stylesheets/login.css?body=1" media="all" rel="stylesheet" />
<link data-turbolinks-track="true" href="<?php echo base_url();?>assets/stylesheets/register.css?body=1" media="all" rel="stylesheet" />
<link data-turbolinks-track="true" href="<?php echo base_url();?>assets/stylesheets/reserve.css?body=1" media="all" rel="stylesheet" />
<link data-turbolinks-track="true" href="<?php echo base_url();?>assets/stylesheets/application.css?body=1" media="all" rel="stylesheet" />

  <meta content="authenticity_token" name="csrf-param" />
<meta content="nmWA7pBkK0oCM5Y5h8NQMa1sowVRU64KM+k4/VPY5A0=" name="csrf-token" />
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
		<form class="form-horizontal" method="post">
        <form accept-charset="UTF-8" action="<?php echo base_url();?>index.php/register/create" class="form-horizontal" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="nmWA7pBkK0oCM5Y5h8NQMa1sowVRU64KM+k4/VPY5A0=" /></div>
		<!--<form class="form-horizontal">-->
			<fieldset>
			<!-- Text input-->
			<div class="control-group">
                <label class="control-label" for="register_nama_lengkap">Nama lengkap</label>
			  <!--<label class="control-label" for="nama">Nama Lengkap</label>-->
			  <div class="controls">
			  	  <input class="input-xlarge" id="register_nama_lengkap" name="nama" placeholder="Nabila" type="text" />
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
                <label class="control-label" for="register_alamat">Alamat</label>
			  <div class="controls">
			  	  <input class="input-xlarge" id="register_alamat" name="alamat" type="text" />
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
                <label class="control-label" for="register_email">Email</label>
			  <div class="controls">
			  	  <input class="input-xlarge" id="register_email" name="email" type="text" />
			  </div>
			</div>

			<!-- Password input-->
			<div class="control-group">
                <label class="control-label" for="register_password">Password</label>
			  <div class="controls">
			  	  <input class="input-xlarge" id="register_password" name="password" type="password" />
			    <p class="help-block">Minimal 8 karakter alfanumerik</p>
			  </div>
			</div>

			<!-- Password input-->
			<div class="control-group">
                <label class="control-label" for="register_konfirmasi_password">Konfirmasi password</label>
			  <!--<label class="control-label" for="konfirmasi_password">Konfirmasi Password</label>-->
			  <div class="controls">
			      <input class="input-xlarge" id="register_konfirmasi_password" name="konfirmasi_password" type="password" />
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
                <label class="control-label" for="register_nomor_identitas">Nomor identitas</label>
			  <div class="controls">
			  	  <input class="input-xlarge" id="register_nomor_identitas" name="nomor_identitas" type="text" />
			    <p class="help-block">KTP / Kartu Pelajar / Kartu SIM / Paspor</p>
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
                <label class="control-label" for="register_nomor_telepon">Nomor telepon</label>
			  <div class="controls">
			  	  <input class="input-xlarge" id="register_nomor_telepon" name="nomor_telepon" type="text" />
			  </div>
			</div>

			<!-- Button -->
			<div class="control-group">
                <label class="control-label" for="register_submit">Submit</label>
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
