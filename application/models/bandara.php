<?php

class Bandara extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    function get_all_kota(){
        $query = $this->db->query('SELECT id_bandara, kota_asal FROM bandara ORDER BY kota_asal ASC');
        $kota = null;
        $i = 0;
        foreach ($query->result() as $row)
        {
            $kota[$i]["kota_asal"] = $row->kota_asal;
            $kota[$i]["id_bandara"] = $row->id_bandara;
            $i = $i + 1;
        }

        return $kota;
    }

    function compare_bandara($bandara1, $bandara2){
        $sql = 'SELECT comparebandara(\''.$bandara1.'\''.','.'\''.$bandara2.'\''.')';
        $query = $this->db->query($sql);
        $row = $query->row();
        $retval = $row->comparebandara;

        if ($retval == "t"){
            return true;
        }
        else if ($retval == "f"){
            return false;
        }
    }
}