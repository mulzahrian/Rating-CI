<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Md_gsg extends CI_Model {

	var $table = 'gsg';

	/*     * * BEGIN COMPONENT DATA TABLE ** */

	function getGsgAll() {
		return $this->db->get_where($this->table, array('status' => 1, ))->result();
	}

    function getGsgById($formulir_id) {
        return $this->db->get_where($this->table, array('formulir_id' => $formulir_id, 'status' => 1))->row();
    }

    public function addGsg($data) {
        $this->db->insert($this->table, $data);
    }

    public function updateGsg($formulir_id, $data) {
        $this->db->where('formulir_id', $formulir_id)
                ->update($this->table, $data);
    }

    public function deleteGsg($formulir_id)
    {
        $hasil = $this->db->query("DELETE FROM gsg WHERE formulir_id='$formulir_id'");
        return $hasil;
    }
   
    public function batalGsg($formulir_id, $data)
    {
      $this->db->where('formulir_id', $formulir_id)
                ->update($this->table, $data);
    }

    public function getGsgbyTgl()
    {
        $hasil = $this->db->query("SELECT * FROM `gsg` WHERE status='1' order by tgl_pemakaian DESC")->result();
        return $hasil;

    }
}