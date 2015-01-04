<!DOCTYPE html>
<html>
<head>
	<title>Fly With Us | Online Airplane Ticket Reservation</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/main.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/nova.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/style1.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/font-awesome.css"/>
	<script src="<?php echo base_url(); ?>assets/javascripts/jquery-1.11.2.js"></script>
	<script src="<?php echo base_url(); ?>assets/javascripts/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/javascripts/main.js"></script>
	<script src="<?php echo base_url(); ?>assets/javascripts/modernizr-2.6.2-respond-1.1.0.min.js"></script>

</head>
<body id="page" class="long">
		<header>
		<nav id="navbar">
			<ul class="site-nav">
				<!--<li id="main-logo"><img src="../images"  </li>-->
				<li><a href"#">Home</a></li>
				<li>Contact</li>
				<li><a href="<?php echo base_url();?>index.php/search">Search</a></li>
			</ul>
			<div class="nav-collapse collapse">
			<ul class="login-nav nav">
				<li class="dropdown">
                    <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" aria-expanded="false"><?php echo $this->session->userdata('nama'); ?><b class=" icon-angle-down"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url();?>index.php/cart">Cart</a></li>
                        <li><a href="<?php echo base_url();?>index.php/cart/history">History</a></li>
                        <li><a href="<?php echo base_url();?>index.php/logout">Sign Out</a></li>
                    </ul>
				</li>	
			</ul>
			</div>
		</nav>
	</header>
	<section class="page navbar-down">
		<div class="center">
		<h3 class="font title-font">Search&nbsp;<b class="font-yellow">Result</b></h3>
		<table id="tablesorter-demo" class="tablesorter">
			<thead class="search-title stable-head" >
				<tr>
					<th>Maskapai</th>
					<th>Flight ID</th>
					<th>Departure</th>
					<th>Arrival</th>
					<th>Price</th>
					<th></th>
				</tr>
			</thead>
			<tbody class="font2 search-body">
				<?php
					$i = 0;
					for($i = 0; $i < sizeof($data); $i = $i + 1){
						echo '<tr>';
						echo '<td>'.$data[$i]["nama_maskapai"].'</td>';
						echo '<td>'.$data[$i]["id_jadwal"].'</td>';
						echo '<td>'.$data[$i]["tanggal_berangkat"].'</td>';
						echo '<td>'.$data[$i]["tanggal_sampai"].'</td>';
						echo '<td>'.$data[$i]["harga_satuan"].'</td>';
						echo '<td><a class="button" href="'.base_url().'index.php/book?id='.$data[$i]["id_jadwal"].'">BOOK NOW!</td>';
						echo '</tr>';
						$i = $i + 1;
					}
				?>
			</tbody>
		</table>
	</div>
	</section>
</body>
</html>