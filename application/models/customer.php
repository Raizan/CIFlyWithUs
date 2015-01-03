<?php

class Customer extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    function create($data){
        $query = $this->db->query('SELECT random_id()');
        $row = $query->row();
        $data["id_customer"] = 'cs001';

        $this->db->insert('customer', $data);
        return $this->db->affected_rows() > 0;
    }

    // use function
    function check_email($email){
        $check_result = $this->db->get_where('customer',
            array(
                'email' => $email,
            ));

        if ($check_result->num_rows() > 0)
        {
            return true;
        }
        else
            return false;
    }
}
