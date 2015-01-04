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
				<li><a href="<?php  ?>">Sign Out</a></li>
			</ul>
		</nav>
	</header>
	<section class="page navbar-down">
		<div class="center">
		<h3 class="font title-font">Search<b class="font-yellow">Result</b></h3>
		<table id="tablesorter-demo" class="tablesorter">
			<thead>
				<tr>
					<th>Air plane</th>
					<th>Departure</th>
					<th>Arrival</th>
					<th>Transit</th>
					<th>Facility</th>
					<th>Prive</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<% posts.each do |post| %>
				<tr>
					<td><%= post.airplane %></td>
					<td><%= post.departure %></td>
					<td><%= post.arrival %></td>
					<td><%= post.transit %></td>
					<td><%= post.facility %></td>
					<td><%= post.price %></td>
					<td><%= link_to 'Book Now!' %></td>
				</tr>
			</tbody>
		</table>
	</div>
	</section>
</body>
</html>