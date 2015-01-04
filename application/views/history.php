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