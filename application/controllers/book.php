<?php

class Book extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('reservasi');
    }

    function index(){
        $id_jadwal = $this->input->get('id');

        if ($this->session->userdata('id_reservasi') == null){
            $query = $this->reservasi->try_random_id();
            if ($query == false){
                if($this->session->userdata('page_url'))
                    redirect($this->session->userdata('page_url'));
                else
                    $this->session->set_flashdata('pesan','Maaf, booking gagal.');
                    redirect('search');
            }
            else {
                $new_data = array(
                    'id_reservasi' => $query,
                );
                $this->session->set_userdata($new_data);
            }
        }
        else {
            $id_reservasi = $this->session->userdata('id_reservasi');
            
        }
    }

}