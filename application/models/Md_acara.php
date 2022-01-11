<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Md_acara extends CI_Model {

	
    var $table = 'db_kritik';
	/*     * * BEGIN COMPONENT DATA TABLE ** */

	// function getRuanganAll() {
	// 	return $this->db->get_where($this->table, array('status' => 1, ))->result();
	// }

    //test

   

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

    // function getacaraAll() {
    //     return $this->db->get_where($this->table, array('tanggal' => $date, ))->result();
    // }

    // function test() {
    //     $tanggal = date('Y-m-d');
    //     $this->db->where('tanggal', $tanggal);
    //     return $this->db->get()->result();
    // }

    // function getRuanganaja() {
    //     $tanggal = date('Y-m-d');
    //     return $this->db->get_where($this->table, array('tanggal' => $tanggal, 'status' => 1))->result();
    // }

    // public function deleteEvent($id)
    // {
    //      $hasil = $this->db->query("DELETE FROM acara WHERE id='$id'");
    //     return $hasil;
    // }

    // //end test


    

   

   

    
}