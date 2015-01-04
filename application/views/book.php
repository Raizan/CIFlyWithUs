<!DOCTYPE html>
<html>
<head>
	<title>Fly With Us | Online Airplane Ticket Reservation</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/main.css");?>"/>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/nova.css");?>"/>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/style1.css");?>"/>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.css");?>"/>
	<script src="<?php echo base_url("assets/js/jquery-1.11.2.js"); ?>"></script>
	<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
	<script src="<?php echo base_url("assets/js/main.js"); ?>"></script>
	<script src="<?php echo base_url("assets/js/modernizr-2.6.2-respond-1.1.0.min.js"); ?>"></script>
</head>
<body id="page">
				<header>
		<nav id="navbar">
			<ul class="site-nav">
				<!--<li id="main-logo"><img src="../images"  </li>-->
				<li><a href"#">Home</a></li>
				<li>About</li>
				<li>Contact</li>
			</ul>
			<ul class="login-nav">
				<li><a href="<register>">Sign Out</a></li>
			</ul>
		</nav>
	</header>
	<section class="page navbar-down">
		<div class="center">
			<div id="ticket-details">
				<table>
					<thead>Depart : </thead>
					<tbody>
						<tr>
							<td>Airplave</td>
							<td>Departure</td>
							<td>Arrival</td>
							<td>Dept Time</td>
							<td>Arrive Time</td>
							<td>Facil</td>
							<td>Price</td>
						</tr>
						<tr>
							<td>Total</td>
							<td>Total Price</td>
						</tr>
					</tbody>
				</table>
			</div>
			<h3 class="font title-font">Fill<b class="font-yellow">Result</b></h3>
			<div id="passenger-details">
			<form>
			<?php
				$jumlahpenumpang = 3;
				for ($i=1; $i<=$jumlahpenumpang; $i++)
				{
					echo '<div class="control-group book-wrapper">';
			  		echo '<label class="control-label" for="nama">Identity Number</label>';
			  		echo '<div class="controls">';
			    		echo'<input id="id" name="id" type="text" class="input-xlarge" required="">';
			  		echo '</div>';
					echo '</div>';
					echo '<div class="control-group book-wrapper">';
			  		echo '<label class="control-label" for="nama">Full Name</label>';
			  		echo '<div class="controls">';
			    		echo'<input id="nama" name="nama" type="text" placeholder="Batman bin Suparman" class="input-xlarge" required="">';
			  		echo '</div>';
					echo '</div>';
					echo '<div class="control-group book-wrapper">';
			  		echo '<label class="control-label" for="nama">Phone Number</label>';
			  		echo '<div class="controls">';
			    		echo'<input id="telp" name="telp" type="text" placeholder="Batman bin Suparman" class="input-xlarge" required="">';
			  		echo '</div>';
					echo '</div>';
				}
			?>
			<button class="button">Book Now</button>
			</form>
		</div>
	</section>
</body>
</html>