
<?php

class Category_model extends CI_Model
{

    function getAll()
    {

        $response = array();

        // Select record
        $this->db->select('*');
        $q = $this->db->get('user');
        $response = $q->result_array();
        return $response;
    }
}
