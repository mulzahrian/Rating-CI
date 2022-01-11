<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    private $filename = "import_data"; // Kita tentukan nama filenya
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

    /**     * ADMIN HOME** */
    public function index() {
        $pageData['iya'] = $this->Md_bisa->Tampilbisa();
        $this->load->view('admin/coba');
    }

    public function bisa() {
        $pageData['isi'] = $this->Md_bisa->Tampilbisa();
        $pageData['page_name'] = 'index';
        $this->load->view('admin/index', $pageData);
    }

    
    //event

   public function event(){ 
        // $pageData['event'] = $this->Md_acara->tampilan();
        $pageData['data_pengguna'] = $this->Md_pengguna->getPenggunaAll();
        $pageData['page_name'] = 'event';
        $this->load->view('admin/index', $pageData);
    }

    public function kritik(){ 
        // $pageData['kritik'] = $this->Md_acara->tampilan();
        $pageData['data_pengguna'] = $this->Md_pengguna->getPenggunaAll();
        $pageData['page_name'] = 'kelola_pengguna';
        $this->load->view('admin/index', $pageData);
    }

    function add_event(){
        if (!empty($_POST)){
            $this->form_validation->set_rules('lokasi','lokasi', 'required');
            $this->form_validation->set_rules('pic', 'pic', 'required');
            $this->form_validation->set_rules('kontak','kontak', 'required');
            $this->form_validation->set_rules('ruangan','ruangan', 'required');
            $this->form_validation->set_rules('kegiatan','kegiatan', 'required');
            $this->form_validation->set_rules('tanggal','tanggal', 'required');
            $this->form_validation->set_rules('jam_mul','jam_mul', 'required');
            $this->form_validation->set_rules('jam_sel','jam_sel', 'required');

            if ($this->form_validation->run() != FALSE){

                $lokasi  =  $this->input->post('lokasi');
                $pic     =  $this->input->post('pic');
                $kontak = $this->input->post('kontak');
                $ruangan =  $this->input->post('ruangan');
                $kegiatan =  $this->input->post('kegiatan');
                $tanggal =  $this->input->post('tanggal');
                $jam_mul =  $this->input->post('jam_mul');
                $jam_sel =  $this->input->post('jam_sel');

                $dataInsert = array(
                    'lokasi'  => $lokasi,
                    'pic' => $pic,
                    'kontak' => $kontak,
                    'ruangan' => $ruangan,
                    'kegiatan' => $kegiatan,
                    'tanggal' => $tanggal,
                    'jam_mul' => $jam_mul,
                    'jam_sel' => $jam_sel,
                    'status' => 1
                );

                $this->Md_acara->addEvent($dataInsert);
                $this->session->set_flashdata('pesan', 'Data <strong>berhasil</strong> disimpan (<i>Data <strong>saved</strong> successfully</i>)');
            }
            $this->session->set_flashdata('warning', '<strong>Gagal .. !</strong> Data  gagal ditambahkan, semua fill harus diisi</strong>');
        }else{

            $this->session->set_flashdata('warning', '<strong>Gagal .. !</strong> Data  gagal ditambahkan, semua fill harus diisi</strong>');
        }
        redirect(base_url() . 'admin/event', 'refresh');
    }


    function add_kritik(){
        if (!empty($_POST)){
            $this->form_validation->set_rules('nama','nama', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('subject','subject', 'required');
            $this->form_validation->set_rules('masukkan','masukkan', 'required');
            // $this->form_validation->set_rules('bintang','bintang', 'required');

            if ($this->form_validation->run() != FALSE){

                $nama  =  $this->input->post('nama');
                $email     =  $this->input->post('email');
                $subject = $this->input->post('subject');
                $masukkan =  $this->input->post('masukkan');
                // $bintang =  $this->input->post('bintang');

                $dataInsert = array(
                    'nama'  => $nama,
                    'email' => $email,
                    'subject' => $subject,
                    'masukkan' => $masukkan,
                    'bintang' => 1,
                );

                $this->Md_acara->addEvent($dataInsert);
                $this->session->set_flashdata('pesan', 'Data <strong>berhasil</strong> disimpan (<i>Data <strong>saved</strong> successfully</i>)');
            }
            $this->session->set_flashdata('warning', '<strong>Gagal .. !</strong> Data  gagal ditambahkan, semua fill harus diisi</strong>');
        }else{

            $this->session->set_flashdata('warning', '<strong>Gagal .. !</strong> Data  gagal ditambahkan, semua fill harus diisi</strong>');
        }
        redirect(base_url() . 'admin/kritik', 'refresh');
    }


    //test

   

    //



    function edit_event(){
        if (!empty($_POST)){
            $this->form_validation->set_rules('lokasi','lokasi', 'required');
            $this->form_validation->set_rules('pic', 'pic', 'required');
            $this->form_validation->set_rules('kontak','kontak', 'required');
            $this->form_validation->set_rules('ruangan','ruangan', 'required');
            $this->form_validation->set_rules('kegiatan','kegiatan', 'required');
            $this->form_validation->set_rules('tanggal','tanggal', 'required');
            $this->form_validation->set_rules('jam_mul','jam_mul', 'required');
            $this->form_validation->set_rules('jam_sel','jam_sel', 'required');
            $this->form_validation->set_rules('status','status', 'required');

            if ($this->form_validation->run() != FALSE){
                $id = $this->input->post('id'); 
                $lokasi  =  $this->input->post('lokasi');
                $pic     =  $this->input->post('pic');
                $kontak = $this->input->post('kontak');
                $ruangan =  $this->input->post('ruangan');
                $kegiatan =  $this->input->post('kegiatan');
                $tanggal =  $this->input->post('tanggal');
                $jam_mul =  $this->input->post('jam_mul');
                $jam_sel =  $this->input->post('jam_sel');
                $status =  $this->input->post('status');

                $dataInsert = array(
                    'lokasi'  => $lokasi,
                    'pic' => $pic,
                    'kontak' => $kontak,
                    'ruangan' => $ruangan,
                    'kegiatan' => $kegiatan,
                    'tanggal' => $tanggal,
                    'jam_mul' => $jam_mul,
                    'jam_sel' => $jam_sel,
                    'status' => $status,
                );

                $this->Md_acara->updateEvent($id,$dataInsert);
                $this->session->set_flashdata('pesan', 'Data <strong>berhasil</strong> disimpan (<i>Data <strong>saved</strong> successfully</i>)');
            }
            $this->session->set_flashdata('warning', '<strong>Gagal .. !</strong> Data  gagal ditambahkan, semua fill harus diisi</strong>');
        }else{

            $this->session->set_flashdata('warning', '<strong>Gagal .. !</strong> Data  gagal ditambahkan, semua fill harus diisi</strong>');
        }
        redirect(base_url() . 'admin/event', 'refresh');
    }

     function delete_event(){
        $id = $this->input->post('id');      
        $dataInsert = array(
            'status' => 2
        );
        $this->Md_acara->updateEvent($id,$dataInsert);
        $this->session->set_flashdata('pesan', 'Data <strong>berhasil</strong> dihapus (<i>Data <strong>saved</strong> successfully</i>)');
        redirect(base_url() . 'admin/event', 'refresh');
    }

    function delete_kritik(){
        $id = $this->input->post('id');      
        $dataInsert = array(
            'status' => 2
        );
        $this->Md_acara->updateEvent($id,$dataInsert);
        $this->session->set_flashdata('pesan', 'Data <strong>berhasil</strong> dihapus (<i>Data <strong>saved</strong> successfully</i>)');
        redirect(base_url() . 'test', 'refresh');
    }



    //end event


   

    public function pengguna(){ 
        $pageData['data_pengguna'] = $this->Md_pengguna->getPenggunaAll();
        $pageData['page_name'] = 'kelola_pengguna';
        $this->load->view('admin/index', $pageData);
    }

    function add_pengguna(){
        if (!empty($_POST)){
            $this->form_validation->set_rules('nama','nama', 'required');
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('password','password', 'required');
            $this->form_validation->set_rules('hak_akses','hak_akses', 'required');

            if ($this->form_validation->run() != FALSE){

                $nama  =  $this->input->post('nama');
                $username     =  $this->input->post('username');
                $password = $this->input->post('password');
                $password = password_hash($password, PASSWORD_DEFAULT);
                $hak_akses =  $this->input->post('hak_akses');

                $dataInsert = array(
                    'nama'  => $nama,
                    'username' => $username,
                    'password' => $password,
                    'hak_akses' => $hak_akses,
                    'status' => 1
                );

                $this->Md_pengguna->addPengguna($dataInsert);
                $this->session->set_flashdata('pesan', 'Data <strong>berhasil</strong> disimpan (<i>Data <strong>saved</strong> successfully</i>)');
            }
            $this->session->set_flashdata('warning', '<strong>Gagal .. !</strong> Data  gagal ditambahkan, semua fill harus diisi</strong>');
        }else{

            $this->session->set_flashdata('warning', '<strong>Gagal .. !</strong> Data  gagal ditambahkan, semua fill harus diisi</strong>');
        }
        redirect(base_url() . 'admin/pengguna', 'refresh');
    }

    function edit_pengguna(){
        if (!empty($_POST)){
            $this->form_validation->set_rules('nama','nama', 'required');
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('password','password', 'required');
            $this->form_validation->set_rules('hak_akses','hak_akses', 'required');

            if ($this->form_validation->run() != FALSE){
                $pengguna_id = $this->input->post('pengguna_id'); 
                $nama  =  $this->input->post('nama');
                $username     =  $this->input->post('username');
                $password = $this->input->post('password');
                $password = password_hash($password, PASSWORD_DEFAULT);
                $hak_akses =  $this->input->post('hak_akses');

                $dataInsert = array(
                    'nama'  => $nama,
                    'username' => $username,
                    'password' => $password,
                    'hak_akses' => $hak_akses,
                    'status' => 1
                );

                $this->Md_pengguna->updatePengguna($pengguna_id,$dataInsert);
                $this->session->set_flashdata('pesan', 'Data <strong>berhasil</strong> disimpan (<i>Data <strong>saved</strong> successfully</i>)');
            }
            $this->session->set_flashdata('warning', '<strong>Gagal .. !</strong> Data  gagal ditambahkan, semua fill harus diisi</strong>');
        }else{

            $this->session->set_flashdata('warning', '<strong>Gagal .. !</strong> Data  gagal ditambahkan, semua fill harus diisi</strong>');
        }
        redirect(base_url() . 'admin/pengguna', 'refresh');
    }

    function delete_pengguna(){
        $pengguna_id = $this->input->post('pengguna_id');      
        $dataInsert = array(
            'status' => 2
        );
        $this->Md_pengguna->updatePengguna($pengguna_id,$dataInsert);
        $this->session->set_flashdata('pesan', 'Data <strong>berhasil</strong> dihapus (<i>Data <strong>saved</strong> successfully</i>)');
        redirect(base_url() . 'admin/pengguna', 'refresh');
    }


   
}