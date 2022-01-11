<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();

        $this->load->model('Md_pengguna');
        $this->load->model('Md_acara');
        $this->load->model('Md_kritik');
        $this->load->model('Md_bisa');
       

        $this->load->helper('date');
        $this->load->library('encryption');
        $this->load->helper('encryption_id');
        $this->load->library('form_validation');
        
         
    }

	public function index() {
        $pageData['isi'] = $this->Md_bisa->Tampilbisa();
        $this->load->view('welcome', $pageData);
    }
}


//ac.bimokomtrol.com/welcome/absensi