<?php

class Search extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('bandara');
    }

    function index(){
        $data["data"] = $this->bandara->get_all_kota();
        $this->load->view('search', $data);
    }

    function exec(){
        $bandara_from = $this->input->get('bandara_from');
        $bandara_to = $this->input->get('bandara_to');
        // Compare bandara
        $compare = $this->bandara->compare_bandara($bandara_from, $bandara_to);
        // Jika bandara asal dan tujuan sama
        if ($compare == 1){
            $this->session->set_flashdata('pesan','Bandara tujuan tidak boleh sama dengan bandara asal');
            redirect('search');
        }
        // Jika bandara asal dan tujuan berbeda
        else if ($compare == 0){

        }
    }
}