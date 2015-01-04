<?php

class Jadwal extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    function get_jadwal($bandara_from, $bandara_to, $date_go){
        $query = $this->db->get_where('jadwal',
            array(
                'bandara_asal' => $bandara_from,
                'bandara_tujuan' => $bandara_to,
                'tanggal_berangkat' => $date_go
            ));

    }

}