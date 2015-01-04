<html>
<head>
    <title>Fly With Us | Online Airplane Ticket Reservation</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/stylesheets/main.css" />
</head>
<body class="long">
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
	<section class="page navbar-down">
	<div class="center">
		<h3 class="font title-font">&nbsp;<b class="font-yellow">Cart</b></h3>
    <table>
    	<thead class="search-title stable-head bold">
        <th>ID Jadwal</th>
        <th>Asal</th>
        <th>Tujuan</th>
        <th>Harga</th>
        <th>Nama Penumpang</th>
        <th>Nomor Identitas</th>
        <th>Action</th>
        </thead>
        <tbody class="font2">
        <?php
            $total = 0;
            for($i = 0; $i < sizeof($detil); $i = $i + 1){
                echo '<tr>';
                echo '<td>'.$detil[$i]["id_jadwal"].'</td>';
                echo '<td>'.$detil[$i]["bandara_asal"].'</td>';
                echo '<td>'.$detil[$i]["bandara_tujuan"].'</td>';
                echo '<td>'.$detil[$i]["harga"].'</td>';
                echo '<td>'.$detil[$i]["nama_penumpang"].'</td>';
                echo '<td>'.$detil[$i]["nomor_identitas"].'</td>';
                $total = $total + $detil[$i]["harga"];
                echo '<td><a class="button" href="'.base_url().'index.php/cart/delete?id='.$detil[$i]["id"].'">CANCEL</td>';
                echo '</tr>';
            }
        ?>
        <br>
        Total Harga: <?php echo $total; ?>
        <form method="post" action="<?php echo base_url(); ?>index.php/cart/pay">
            <input type="hidden" value="bayar" name="bayar_flag">
            <input type="submit" value="BAYAR">
        </form>
        </tbody>
    </table>
</div>
</section>
</body>
</html>