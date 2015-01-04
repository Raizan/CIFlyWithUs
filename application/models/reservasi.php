<?php

class Reservasi extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    function try_random_id(){
        $query = $this->db->query('SELECT random_id()');
        $row = $query->row();
        $data["id_reservasi"] = $row->random_id;

        $this->db->insert('reservasi', $data);
        if ($this->db->affected_rows() > 0){
            return $row->random_id;
        }
        else {
            return false;
        }
    }
}