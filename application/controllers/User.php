<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    private $filename = "import_data"; // Kita tentukan nama filenya
    public function __construct() {
        parent::__construct();

        $this->load->model('Md_pengguna');
        $this->load->model('Md_acara');
        
        $this->load->helper('date');
        $this->load->library('encryption');
        $this->load->helper('encryption_id');
        $this->load->library('form_validation');

        // if ($this->session->userdata('login_type') != "user")
        //      redirect(base_url() . 'masukan', 'refresh');
        
    }

    /**     * security HOME** */
    public function index() {
       
        $pageData['acara'] = $this->Md_acara->getRuanganaja();
        $pageData['page_name'] = 'home';
        $this->load->view('user/index', $pageData);
    }
    

   
   


   

    

    
   
    

    
    

    // ---------------------------------ARDUNI-----------------------------------------------

}