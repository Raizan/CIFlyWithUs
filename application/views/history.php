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
            <th>ID Reservasi</th>
            <th>Tanggal Book</th>
            <th>Total Pembayaran</th>
            <th>Status</th>
            </thead>
            <tbody class="font2">
            <?php
            $total = 0;
            for($i = 0; $i < sizeof($data); $i = $i + 1){
                echo '<tr>';
                echo '<td>'.$data[$i]["id_reservasi"].'</td>';
                echo '<td>'.$data[$i]["tanggal_book"].'</td>';
                echo '<td>'.$data[$i]["total_pembayaran"].'</td>';
                echo '<td>'.$data[$i]["status"].'</td>';
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
</section>
</body>
</html>