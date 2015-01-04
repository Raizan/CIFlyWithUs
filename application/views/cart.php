<html>
<head>
    <title>Fly With Us | Online Airplane Ticket Reservation</title>
</head>
<body>
    <table>
        <th>ID Jadwal</th>
        <th>Asal</th>
        <th>Tujuan</th>
        <th>Harga</th>
        <th>Nama Penumpang</th>
        <th>Nomor Identitas</th>
        <th>Asal</th>
        <th>Tujuan</th>
        <th>Action</th>
        <?php
            $i = 0;
            for($i = 0; $i < sizeof($detil); $i = $i + 1){
                echo '<tr>';
                echo '<td>'.$detil[$i]["id_reservasi"].'</td>';
                echo '<td>'.$detil[$i]["id_jadwal"].'</td>';
                echo '<td>'.$detil[$i]["harga"].'</td>';
                echo '<td>'.$detil[$i]["nama_penumpang"].'</td>';
                echo '<td>'.$detil[$i]["nomor_identitas"].'</td>';
                echo '<td>'.$detil[$i]["bandara_asal"].'</td>';
                echo '<td>'.$detil[$i]["bandara_tujuan"].'</td>';
                echo '<td><a href="'.base_url().'index.php/cart/delete?idj='.$detil[$i]["id_jadwal"].'&idr='.$detil[$i]["id_reservasi"].'">BOOK NOW!</td>';
                echo '</tr>';
                $i = $i + 1;
            }
        ?>
    </table>
</body>
</html>