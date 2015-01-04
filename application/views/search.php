<!DOCTYPE html>
<html>
<head>
	<title>Fly With Us | Online Airplane Ticket Reservation</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/stylesheets/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/stylesheets/style1.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/stylesheets/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/stylesheets/chosen.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/stylesheets/jquery-ui.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/stylesheets/jquery-ui.structure.css" />
	<script>
		<?php
		$temp = $this->session->flashdata('pesan');
		if ($temp != null){
			$alert = 'alert('.'\''.$temp.'\''.');';
			echo $alert;
		}
		?>
	</script>
</head>
<body id="page" class="white x-hidden">
	<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/jquery-1.11.2.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/main.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/chosen.jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/jquery-ui.js"></script>
		<header>
		<nav id="navbar">
			<ul class="site-nav">
				<!--<li id="main-logo"><img src="../images"  </li>-->
				<li><a href"#">Home</a></li>
				<li>About</li>
				<li><a href="<?php echo base_url();?>index.php/cart">Cart</a></li>
			</ul>
			<ul class="login-nav">
				<li>Welcome, <?php echo $this->session->userdata('nama'); ?></li>
				<li><a href="<?php echo base_url(); ?>index.php/logout">Sign Out</a></li>
			</ul>
		</nav>
	</header>
	<section class="navbar-down">
		<div class="center">
			<h3 class="font title-font"><b class="font-yellow">Reserve</b> Airplane Ticket</h3>
			<!-- Form untuk apa ini? -->
			<form method="get" action="<?php echo base_url();?>index.php/search/exec">
				<ul id="search-table">
				<li class="search-col">
					<ul class="col-header">
						<li class="search-number font-blue"> 1 </li>
						<li class="search-title">Choose Destination</li>
					</ul>
					<br>
					<div class="search-main" id="airport">
						<div class="main-label">
			  				<label>From: </label>
			  				<br>
			  				<div class="chosen-container">
			  					<select name="bandara_from" data-placeholder="Choose an Airport..." class="chosen-select" style="width:250px;">
									<?php
										for($i = 0; $i < sizeof($data); $i = $i + 1){
											$html = '<option value="'.$data[$i]["id_bandara"].'">'.$data[$i]["kota_asal"].'</option>';
											echo $html;
										}
									?>
          						</select>
        					</div>
     					 </div>

     					 <div class="main-label">
			  				<label>To: </label>
			  				<br>
			  				<div class="chosen-container">
			    				<select name="bandara_to" data-placeholder="Choose an Airport..." class="chosen-select" style="width:250px;">
									<?php
									for($i = 0; $i < sizeof($data); $i = $i + 1){
										$html = '<option value="'.$data[$i]["id_bandara"].'">'.$data[$i]["kota_asal"].'</option>';
										echo $html;
									}
									?>
          						</select>
        					</div>
     					 </div>
			  		</div>
				</li>
				<li class="search-col">
					<ul class="col-header">
						<li class="search-number font-blue"> 2 </li>
						<li class="search-title">Departure Time</li>
					</ul>
					<br>
					<div class="search-main">
						<div class="main-label"> 
							<label>Date :</label>
						</div>
						<div class="form-rule">
							<input type="date" name="date_go" placeholder="27/12/2014">
						</div>
						<br>
						<div class="main-label">
							<label>Date (If Round Trip checked):</label>
						</div>
						<div class="form-rule">
							<input type="date" name="date_back" placeholder="27/12/2014">
						</div>
						<br>
						<div class="form-rule">
							<input type="radio" name="trip_type" value="one" checked="checked"><label>One Way</label>
							<input type="radio" name="trip_type" value="round"><label>Round Trip</label>
						</div>
					</div>
				</li>
				<li class="search-col">
					<ul class="col-header">
						<li class="search-number font-blue">3</li>
						<li class="search-title">Find your Ticket</li>
					</ul>
					<div class="search-main">
						<div class="main-label">Passenger</div>
					</div>
					<br>
					<div class="form-rule">
						<ul class="pass-table">
							<li class="pass-column">
								<div>Adult</div>
								<div class="pass-input"><input type="number" min="0" name="adult"></div>
							</li>
							<li class="pass-column">
								<div>Children</div>
								<div class="pass-input"><input type="number" min="0" name="children"></div>
							</li>
							<li class="pass-column">
								<div>Baby</div>
								<div class="pass-input"><input type="number" min="0" name="baby"></div>
							</li>
						</ul>
						<br>
					</div>
					<br>
					<button class="button"> Search! </button>
				</li>
			</ul>
			</form>
		</div>
	</section>
	<script type="text/javascript">
		$(function(){
    		$(".chosen-select").chosen();
		});
		 $(function() {
			$( "#datepicker" ).datepicker();
		});
	</script>
</body>
</html>