<?php

class Cart extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('reservasi');
    }

    function index(){
        $id_reservasi = $this->session->userdata('id_reservasi');
        if ($id_reservasi == null){
            $this->session->set_flashdata('pesan','Anda belum melakukan booking. Silakan melakukan pencarian');
            redirect('search');
        }
        else {
            $result = $this->reservasi->get_detil_reservasi($id_reservasi);
            if ($result == null){
                $this->session->set_flashdata('pesan','Anda belum melakukan booking. Silakan melakukan pencarian');
                redirect('search');
            }
            else {
                $data["detil"] = $result;
                $this->load->view('cart', $data);
            }
        }
    }

    function delete(){
        $id = $this->input->get('id');

        $this->reservasi->delete_detil($id);
        redirect('cart');
    }

}