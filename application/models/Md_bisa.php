<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Md_bisa extends CI_Model {

	var $table = 'db_kritik';

	/*     * * BEGIN COMPONENT DATA TABLE ** */

	

    function Tampilbisa() {
        return $this->db->get_where($this->table)->result();
    }
}