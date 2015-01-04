<?php

class Book extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('reservasi');
    }

    function index(){
        $this->set_reservasi_session();

        $id_jadwal = $this->input->get('id');
        $data["id_jadwal"] = $id_jadwal;
        $this->load->view('detail', $data);
    }

    function exec(){
        $id_jadwal = $this->input->post('id_jadwal');
        $for_myself = $this->input->post('for_myself');
        $nama_penumpang = $this->input->post('nama_penumpang');
        $nomor_identitas = $this->input->post('nomor_identitas');
        $age = $this->input->post('age');

        if ($for_myself == "Ya"){
            $flag = $this->reservasi->create($id_jadwal);
            $data["flag"] = $flag;
            $this->load->view('redirect_book', $data);
        }
        else {
            $flag = $this->reservasi->create($id_jadwal, $nama_penumpang, $nomor_identitas, $age);
            $data["flag"] = $flag;
            $this->load->view('redirect_book', $data);
        }
    }

    function set_reservasi_session(){
        if ($this->session->userdata('id_reservasi') == null) {
            $query = $this->reservasi->try_random_id();
            if ($query == false) {

            } else {
                $new_data = array(
                    'id_reservasi' => $query,
                );
                $this->session->set_userdata($new_data);
            }
        }
    }

}