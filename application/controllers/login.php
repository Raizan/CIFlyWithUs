<?php

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('customer');
    }

    function index(){
        $this->load->view('login.php');
    }

    function authorize(){
        $email = $this->input->post('email');
		$password = $this->input->post('password');

		$auth = $this->customer->authorize($email, $password);
        if ($auth == true){
            $data = array(
                'email' => $email,
                'login' => TRUE
            );

            $this->session->set_userdata($data);
        }
        else {

        }
    }

}