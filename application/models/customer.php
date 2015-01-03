<?php

class Customer extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    function create($data){
        $query = $this->db->query('SELECT random_id()');
        $row = $query->row();
        $data["id_customer"] = $row->random_id;

        $this->db->insert('customer', $data);
        return $this->db->affected_rows() > 0;
    }

    function authorize($email, $password){
        $auth = $this->db->get_where('customer',
            array(
                'email' => $email,
                'password' => $password
            ));

        if ($auth->num_rows() > 0)
        {
            $row = $auth->row();
            $data["nama_customer"] = $row->nama_customer;
            $data["auth"] = true;
            return $data;
        }
        else {
            $data["auth"] = false;
            return $data;
        }
    }

    function email_check($email){
        $sql = 'SELECT'.' '.'checkuser('.'\''.$email.'\''.')';
        $query = $this->db->query($sql);
        $row = $query->row();
        $retval = $row->checkuser;

        if ($retval == "t"){
            return true;
        }
        else if ($retval == "f"){
            return false;
        }
    }
}
