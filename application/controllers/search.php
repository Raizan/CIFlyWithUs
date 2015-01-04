<?php

class Search extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('bandara');
        $this->load->model('jadwal');
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
            $bandara_from = $this->input->get('bandara_from');
            $bandara_to = $this->input->get('bandara_to');
            $date_go = $this->input->get('date_go');
            $date_back = $this->input->get('date_back');
            $trip_type = $this->input->get('trip_type');
            $adult = $this->input->get('adult');
            $children = $this->input->get('children');
            $infant = $this->input->get('infant');

            if ($adult == ""){
                $adult = 0;
            }

            if ($children == ""){
                $children = 0;
            }

            if ($infant == ""){
                $infant = 0;
            }

            // Give me the price formula for children and infant
            if ($trip_type == "one"){
                if ($adult > 0 or $children > 0 or $infant > 0){

                }
            }

            else if ($trip_type == "round"){
                // Do something here...
            }
        }
    }
}