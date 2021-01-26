<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('v_login');
	}

	public function login_aksi(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');

		if($this->form_validation->run() != false){
			$cek_level = $this->m_admin->login($username, $password);
			$cek = $cek_level->num_rows();

			if($cek > 0){
				$data=$cek_level->row_array();
				$session = array( 'status' => 'login');
				$this->session->set_userdata($session);

					if($data['level']=='manajer'){ //Akses admin
						 $this->session->set_userdata('akses','manajer');
		                $this->session->set_userdata('ses_userid',$data['id_master']);
		                $this->session->set_userdata('ses_namauser',$data['nama_user']);
		                redirect(base_url().'admin');

			        }else if($data['level']=='admin'){//akses manajer
			        	$this->session->set_userdata('akses','admin');
			          $this->session->set_userdata('ses_userid',$data['id_master']);
			          $this->session->set_userdata('ses_namauser',$data['nama_user']);
			          redirect(base_url().'admin');
					}
			
			}else{
				$this->session->set_flashdata('alert', 'Login gagal! Username atau password salah.');
				redirect(base_url());
			}
			

		}else{
			$this->session->set_flashdata('alert','Anda Belum Mengisi Username atau Password');
			$this->load->view('login');
		}
	}
}