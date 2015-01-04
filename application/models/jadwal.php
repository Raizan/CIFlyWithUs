<?php

class Jadwal extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    function get_harga($id_jadwal){
        $query = $this->db->get_where('jadwal',
            array(
                'id_jadwal' => $id_jadwal
            ));

        if ($query->num_rows() > 0){
            $row = $query->row();
            return $row->harga_satuan;
        }
        else {
            return null;
        }
    }

    function get_jadwal($bandara_from, $bandara_to, $date_go){
        $date_go_1 = $date_go.' 00:00:00';
        $date_go_2 = $date_go.' 23:59:59';
        $sql = 'SELECT j.*, m.nama_maskapai FROM jadwal j, pesawat p, maskapai m WHERE j.id_pesawat = p.id_pesawat and p.id_maskapai = m.id_maskapai and j.bandara_asal =\''.$bandara_from.'\''.' and j.bandara_tujuan=\''.$bandara_to.'\''.' and (j.tanggal_berangkat >=\''.$date_go_1.'\''.' and j.tanggal_berangkat <= \''.$date_go_2.'\')';
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
                $jadwal[$i]["nama_maskapai"] = $row->nama_maskapai;
                $i = $i + 1;
            }
            return $jadwal;
        }
        else {
            return null;
        }
    }

}