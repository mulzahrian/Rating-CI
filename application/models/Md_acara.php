<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Md_acara extends CI_Model {

	
    var $table = 'db_kritik';

    public function addEvent($data) {
        $this->db->insert($this->table, $data);
    }

    public function updateEvent($id, $data) {
        $this->db->where('id', $id)
                ->update($this->table, $data);
    }


    function Acara() {
        return $this->db->get_where($this->table)->result();
    }

    public function deleteEvent($id)
    {
        $hasil = $this->db->query("DELETE FROM kritik WHERE id='$id'");
        return $hasil;
    }
    
}
