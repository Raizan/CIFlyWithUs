<?php

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('customer');
    }

    function index(){
        $this->load->view('login');
    }

    function authorize(){
        $email = $this->input->post('email');
		$password = $this->input->post('password');

		$auth = $this->customer->authorize($email, $password);
        if ($auth["auth"] == true){
            $data = array(
                'email' => $email,
                'nama' => $auth["nama_customer"],
                'nomor_identitas' => $auth["nomor_identitas"],
                'id_customer' => $auth["id_customer"],
                'login' => TRUE
            );

            $this->session->set_userdata($data);
            $this->load->view('login');
            redirect('search');
        }
        else {
            //gagal login
            $this->session->set_flashdata('pesan', 'Username atau password Anda salah!');
            redirect('login');
        }
    }

}