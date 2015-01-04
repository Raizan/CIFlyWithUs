<html>
<head>
    <title>Fly With Us | Online Airplane Ticket Reservation</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/stylesheets/main.css" />
</head>
<body class="long">
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
            $i = 0;
            for($i = 0; $i < sizeof($detil); $i = $i + 1){
                echo '<tr>';
                echo '<td>'.$detil[$i]["id_jadwal"].'</td>';
                echo '<td>'.$detil[$i]["bandara_asal"].'</td>';
                echo '<td>'.$detil[$i]["bandara_tujuan"].'</td>';
                echo '<td>'.$detil[$i]["harga"].'</td>';
                echo '<td>'.$detil[$i]["nama_penumpang"].'</td>';
                echo '<td>'.$detil[$i]["nomor_identitas"].'</td>';

                echo '<td><a class="button" href="'.base_url().'index.php/cart/delete?idj='.$detil[$i]["id_jadwal"].'&idr='.$detil[$i]["id_reservasi"].'">BOOK NOW!</td>';
                echo '</tr>';
            }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>