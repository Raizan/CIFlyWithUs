<?php

class Register extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('customer');
    }

    function index(){
        error_reporting(E_ALL);
        $this->load->view('register');
    }
    // is_unique ganti dengan checkuser function pg
    function create(){
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', '%s is required');
        $this->form_validation->set_message('valid_email', 'Wrong email format');
        $this->form_validation->set_message('matches', 'Confirmation does not match with password');
        $this->form_validation->set_message('min_length', '%s: Minimum %s characters');
        $this->form_validation->set_message('max_length', '%s: Maximum %s characters');
        //$this->form_validation->set_message('is_unique', 'Email already in use');
        $this->form_validation->set_message('password_check', 'Must contain characters and numbers');
        $this->form_validation->set_message('email_check', 'Email already in use');
        $this->form_validation->set_message('numeric', 'Must contain only numbers');

        $this->form_validation->set_error_delimiters('<p class="help-block" style="color:red">','</p>');

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('alamat','Alamat','required|max_length[50]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]|callback_email_check');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[konfirmasi_password]|min_length[8]|max_length[15]|callback_password_check');
        $this->form_validation->set_rules('konfirmasi_password','Konfirmasi Password','required|min_length[8]|max_length[15]');
        $this->form_validation->set_rules('nomor_identitas','Nomor Identitas','required|numeric');
        $this->form_validation->set_rules('nomor_telepon','Nomor Telepon','required|numeric|min_length[6]|max_length[12]');

        // nama, alamat, email, password, konfirmasi_password, nomor_identitas, nomor_telepon
        // cek apakah form telah diisi (rule telah terpenuhi?)
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register');
        }
        else {
            $data = null;
            $data["nama_customer"] = $this->input->post('nama');
            $data["alamat_customer"] = $this->input->post('alamat');
            $data["email"] = $this->input->post('email');
            $data["password"] = $this->input->post('password');
            $data["nomor_identitas"] = $this->input->post('nomor_identitas');
            $data["hp"] = $this->input->post('nomor_telepon');

            $query = $this->customer->create($data);
            $temp = null;
            if ($query == 1){
                // halaman register success, lima detik langsung redirect ke halaman home a.k.a login
                $temp["flag"] = "success";
                $this->load->view('redirect_register', $temp);
            }
            else {
                $temp["flag"] = "failed";
                $this->load->view('redirect_register', $temp);
            }
        }
    }

    function password_check($str){
        if (preg_match('#[0-9]#', $str) && preg_match('#[a-zA-Z]#', $str)) {
            return TRUE;
        }
        return FALSE;
    }

    function email_check($str){
        $query = $this->customer->email_check($str);
        return $query;
    }
}