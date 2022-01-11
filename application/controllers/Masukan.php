<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masukan extends CI_Controller {

	public function __construct() {

		parent::__construct();

		$this->load->model('Md_pengguna');
		$this->load->model('Md_acara');

		$this->load->library('form_validation');
		$this->load->library('encryption');
		$this->load->helper('encryption_id');

	}

	public function index() {

		// if ($this->session->userdata('login_type') == 'admin') {
		// 	redirect(base_url() . 'admin', 'refresh');
		// }else if ($this->session->userdata('login_type') == 'user') {
		// 	redirect(base_url() . 'user', 'refresh');
		// }

		$this->load->view('login');
	}

	public function delete_kritik(){
        $id = $this->input->post('id');      
        $dataInsert = array(
            'status' => 2
        );
        $this->Md_acara->updateEvent($id,$dataInsert);
        $this->session->set_flashdata('pesan', 'Data <strong>berhasil</strong> dihapus (<i>Data <strong>saved</strong> successfully</i>)');
        redirect(base_url() . 'test', 'refresh');
    }

	public function isi() {

		$pageData['masukkan'] = $this->Md_acara->Acara();
        $pageData['page_name'] = 'test';
        $this->load->view('test', $pageData);
	}

	public function login() {

		$pageData['login'] = $this->Md_acara->Acara();
        $pageData['page_name'] = 'masukan';
        $this->load->view('masukan', $pageData);
	}

	 function add_kritik(){
        if (!empty($_POST)){
            $this->form_validation->set_rules('nama','nama', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('subject','subject', 'required');
            $this->form_validation->set_rules('masukkan','masukkan', 'required');
            $this->form_validation->set_rules('bintang','bintang');

            if ($this->form_validation->run() != FALSE){

                $nama  =  $this->input->post('nama');
                $email     =  $this->input->post('email');
                $subject = $this->input->post('subject');
                $masukkan =  $this->input->post('masukkan');
                $bintang =  $this->input->post('bintang');

                $dataInsert = array(
                    'nama'  => $nama,
                    'email' => $email,
                    'subject' => $subject,
                    'masukkan' => $masukkan,
                    'bintang' => $bintang,
                );

                $this->Md_acara->addEvent($dataInsert);
                $this->session->set_flashdata('pesan', 'Data <strong>berhasil</strong> disimpan (<i>Data <strong>saved</strong> successfully</i>)');
            }
            $this->session->set_flashdata('warning', '<strong>Gagal .. !</strong> Data  gagal ditambahkan, semua fill harus diisi</strong>');
        }else{

            $this->session->set_flashdata('warning', '<strong>Gagal .. !</strong> Data  gagal ditambahkan, semua fill harus diisi</strong>');
        }
        redirect(base_url() . 'masukan', 'refresh');
    }

	public function check() {

        //set validation
		$this->form_validation->set_rules('username', 'field username', 'required');
		$this->form_validation->set_rules('password', 'field password', 'required');

		if ($this->form_validation->run() != FALSE) {
			if (!empty($_POST)) {
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				$data = $this->Md_pengguna->getPenggunaByUsername($username);

				if (isset($data)) {
					if (password_verify($password, $data->password)) {
						if ($data->hak_akses == 'Admin' ) {
							$this->session->set_userdata('login_type', 'admin');
							$this->session->set_userdata('username', $data->username);
							$this->session->set_userdata('pengguna_id', encrypt($data->pengguna_id));
							redirect(base_url() . 'admin', 'refresh');
						}else if ($data->hak_akses == 'User' ) {
							$this->session->set_userdata('login_type', 'user');
							$this->session->set_userdata('username', $data->username);
							$this->session->set_userdata('pengguna_id', encrypt($data->pengguna_id));
							redirect(base_url() . 'user', 'refresh');
						}else {
							$this->session->set_flashdata('pesan', 'Akun anda belum aktif,  hubungi administrator');
							redirect(base_url() . 'login', 'refresh');
						}
					}else {
						$this->session->set_flashdata('pesan', 'Password Salah!');
						redirect(base_url() . 'login', 'refresh');
					}
				} else {
					$this->session->set_flashdata('pesan', 'Username Salah atau belum terdaftar!');
					redirect(base_url() . 'login', 'refresh');
				}
			}
		}else{
			$this->session->set_flashdata('warning', 'Username dan Password harus diisi..!');
			redirect(base_url() . 'login', 'refresh');
		} 

	}


	public function logout() {
		$this->session->unset_userdata('login_type');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('pengguna_id');
		$this->session->set_flashdata('pesan', 'logged out');
		redirect(base_url() . 'login', 'refresh');
	}



}

/* End of file Admin.php */

/* Location: ./application/controllers/Admin.php */