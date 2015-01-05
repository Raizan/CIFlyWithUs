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
        $data = $this->input->post();
//        $id_jadwal = $this->input->post('id_jadwal');
//        $nama_penumpang = $this->input->post('nama_penumpang');
//        $nomor_identitas = $this->input->post('nomor_identitas');
//        $age = $this->input->post('age');
        $flag = null;
        $temp = null;
        $i = 0;
        foreach ($data as $x){
            $temp[$i] = $x;
            $i = $i + 1;
        }

        $id_jadwal = $temp[0];
        for ($i = 0; $i < sizeof($temp) - 1; $i = $i + 4){
            $nama_penumpang = $temp[$i+1];
            $nomor_identitas = $temp[$i + 2];
            $age = $temp[$i + 3];

            $flag = $this->reservasi->create($id_jadwal, $nama_penumpang, $nomor_identitas, $age);

            if ($flag == false){
                $this->session->set_flashdata('pesan', 'Tiket habis.');
                redirect('search');
            }
        }

        $this->session->unset_userdata('adult');
        $this->session->unset_userdata('children');
        $this->session->unset_userdata('infant');

        $data["flag"] = $flag;
        $this->load->view('redirect_book', $data);
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