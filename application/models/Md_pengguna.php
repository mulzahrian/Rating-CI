<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Md_pengguna extends CI_Model {

	var $table = 'pengguna';

	/*     * * BEGIN COMPONENT DATA TABLE ** */

	function getPenggunaAll() {
		return $this->db->get_where($this->table, array('status' => 1 ))->result();
	}

	function getPenggunaByUsername($username) {
        return $this->db->get_where($this->table, array('username' => $username, 'status' => 1))->row();
    }

    function getPenggunaById($pengguna_id) {
        return $this->db->get_where($this->table, array('pengguna_id' => $pengguna_id, 'status' => 1))->row();
    }

    public function addPengguna($data) {
        $this->db->insert($this->table, $data);
    }

    public function updatePengguna($pengguna_id, $data) {
        $this->db->where('pengguna_id', $pengguna_id)
                ->update($this->table, $data);
    }

    public function deletePengguna($pengguna_id)
    {
         $hasil = $this->db->query("DELETE FROM pengguna WHERE pengguna_id='$pengguna_id'");
        return $hasil;
    }
}