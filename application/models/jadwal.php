<?php

class Jadwal extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    function get_jadwal($bandara_from, $bandara_to, $date_go){
        $date_go_1 = $date_go.' 00:00:00';
        $date_go_2 = $date_go.' 23:59:59';
        $sql = 'SELECT * FROM jadwal WHERE bandara_asal =\''.$bandara_from.'\''.' and bandara_tujuan=\''.$bandara_to.'\''.' and (tanggal_berangkat >=\''.$date_go_1.'\''.' and tanggal_berangkat <= \''.$date_go_2.'\')';
        $query = $this->db->query($sql);
        $jadwal = null;
        $i = 0;
        if ($query->num_rows() > 0){
            foreach ($query->result() as $row)
            {
                $jadwal[$i]["id_jadwal"] = $row->id_jadwal;
                $jadwal[$i]["bandara_asal"] = $row->bandara_asal;
                $jadwal[$i]["bandara_tujuan"] = $row->bandara_tujuan;
                $jadwal[$i]["tanggal_berangkat"] = $row->tanggal_berangkat;
                $jadwal[$i]["tanggal_sampai"] = $row->tanggal_sampai;
                $jadwal[$i]["harga_satuan"] = $row->harga_satuan;
                $jadwal[$i]["kursi_tersedia"] = $row->kursi_tersedia;
                $i = $i + 1;
            }
            return $jadwal;
        }
        else {
            return 0;
        }
    }

}