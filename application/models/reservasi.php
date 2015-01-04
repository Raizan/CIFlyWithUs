<?php

class Reservasi extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    function try_random_id(){
        $id_customer = $this->session->userdata('id_customer');
        $sql = 'SELECT create_reservasi(\''.$id_customer.'\')';
        $query = $this->db->query($sql);
        $row = $query->row();

        if ($this->db->affected_rows() > 0){
            return $row->create_reservasi;
        }
        else {
            return false;
        }
    }

    function create($id_jadwal, $nama_penumpang=null, $nomor_identitas=null, $age=null){
        if ($nama_penumpang == null and $nomor_identitas == null and $age == null){
            $id_reservasi = $this->session->userdata('id_reservasi');
            $nomor_identitas = $this->session->userdata('nomor_identitas');
            $nama_penumpang = $this->session->userdata('nama');

            // Asumsi penumpang dewasa, prad lagi buat fungsi perhitungannya
            $this->load->model('jadwal');
            $harga = $this->jadwal->get_harga($id_jadwal);
            if ($harga != null){
                $data = array(
                    'id_reservasi' => $id_reservasi ,
                    'id_jadwal' => $id_jadwal ,
                    'harga' => $harga,
                    'nama_penumpang' => $nama_penumpang,
                    'nomor_identitas' => $nomor_identitas
                );
                $this->db->insert('detil_reservasi', $data);
            }
            return "success";
        }
        else {
            // Untuk orang lain

        }
    }

}