<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Md_kritik extends CI_Model {

	
    var $table = 'db_kritik';

    public function tampilan()
    {
        return $this->db->get_where($this->table, array('status' => 1))->result();
    }

    public function addEvent($data) {
        $this->db->insert($this->table, $data);
    }
    
}
