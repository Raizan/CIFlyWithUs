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
	<link href="<?php echo base_url();?>assets/stylesheets/nova.css?body=1" media="screen" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/stylesheets/style1.css?body=1" media="screen" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/stylesheets/font-awesome.min.css?body=1" media="screen" rel="stylesheet" />
</head>
<body id="page">
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
			<ul class="login-nav">
				<li><a href="<?php echo base_url();?>index.php/register">Sign Up</a></li>
				<li><a data-remote="true" data-target="#login-box" data-toggle="modal" href="<?php echo base_url();?>index.php/login">Sign In</a></li>
			</ul>
		</nav>
	</header>
	<section class="page" id="home">
			<div id="home-container">
			<p class="text-center"><i> start your journey and</i><br><b>Fly With Us</b></p>
			<div id="home-button">
				<a class="register-window button text-center" href="<?php echo base_url();?>index.php/register">Sign Up</a>
				<a class="button text-center" data-remote="true" data-target="#login-box" data-toggle="modal" href="<?php echo base_url();?>index.php/login">Sign In</a>
			</div>
			</div>
			<ul class="cb-slideshow">
	            <li><span>Image 01</span></li>
	            <li><span>Image 02</span></li>
	            <li><span>Image 03</span></li>
	            <li><span>Image 04</span></li>
	     	</ul>
	</section>
	<section class="page" id="about">
	</section>
	<section class="page" id="contact">
	</section>
<!--  Login form -->
	<div id="login-box" class="modal hide fade in" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4 id="myModalLabel">Sign In Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body popup-login">
    	<form accept-charset="UTF-8" action="<?php echo base_url();?>index.php/login/exec" class="form-inline" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="nmWA7pBkK0oCM5Y5h8NQMa1sowVRU64KM+k4/VPY5A0=" /></div>
            <input class="input-small" id="login_username" name="email" placeholder="email" type="text" />
			<br>
			<input class="input-small" id="login_password" name="password" placeholder="password" type="password" />
      		<input class="button" name="commit" type="submit" value="submit" />
</form>    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->
</body>
</html>

</body>
</html>
