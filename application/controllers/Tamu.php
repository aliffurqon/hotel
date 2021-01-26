<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu extends CI_Controller {

	public function __construct(){
			parent::__construct();
			//Do your magic here
		}
	
	public function index(){
		$data['tamu']=$this->m_admin->get_data('tamu')->result();
		$this->load->view('page_admin/header');
		$this->load->view('page_admin/navigator');
		$this->load->view('tamu/v_tamu',$data);
		$this->load->view('page_admin/footer');
		
	}

		public function tambah_tamu(){
		$data['tamu'] =$this->m_admin->get_data('tamu')->result();
		$this->load->view('page_admin/header');
		$this->load->view('page_admin/navigator');
		$this->load->view('tamu/v_tambahtamu',$data);
		$this->load->view('page_admin/footer');
	}

	public function tambah_tamunav(){
		$data['tamu'] =$this->m_admin->get_data('tamu')->result();
		$this->load->view('page_admin/header');
		$this->load->view('page_admin/navigator');
		$this->load->view('tamu/v_tambahtamu_navbar',$data);
		$this->load->view('page_admin/footer');
	}

	public function tambah_tamuact(){
		$prefix = $this->input->post('prefix');
		$nama_depan = $this->input->post('nama_depan');
 		$nama_belakang = $this->input->post('nama_belakang');
 		$tipe_identitas = $this->input->post('tipe_identitas');
 		$nomor_identitas = $this->input->post('nomor_identitas');
 		$warga_negara = $this->input->post('warga_negara');
 		$alamat_jalan = $this->input->post('alamat_jalan');
 		$alamat_kabupaten = $this->input->post('alamat_kabupaten');
 		$alamat_provinsi = $this->input->post('alamat_provinsi');
 		$nomor_telp = $this->input->post('nomor_telp');
 		$email = $this->input->post('email');
 		$this->form_validation->set_rules('prefix','Prefix','required');
 		$this->form_validation->set_rules('nama_depan','Nama Depan','required');
 		$this->form_validation->set_rules('nama_belakang','Nama Belakang','required');
 		$this->form_validation->set_rules('tipe_identitas','Tipe Identitas','required');
 		$this->form_validation->set_rules('nomor_identitas','Nomor Identitas','required');
 		$this->form_validation->set_rules('warga_negara','Warga Negara','required');
 		$this->form_validation->set_rules('alamat_jalan','Alamat Jalan','required');
 		$this->form_validation->set_rules('alamat_kabupaten','Alamat Kabupaten','required');
 		$this->form_validation->set_rules('alamat_provinsi','Alamat Provinsi','required');
 		$this->form_validation->set_rules('nomor_telp','Nomor Telepon','required');
 		$this->form_validation->set_rules('email','email','required');
 		if($this->form_validation->run() != false){
 			$data = array(
 				'prefix' => $prefix ,
 				'nama_depan' => $nama_depan,
 				'nama_belakang' => $nama_belakang,
 				'tipe_identitas' => $tipe_identitas,
 				'nomor_identitas' => $nomor_identitas,
 				'warga_negara' => $warga_negara,
 				'alamat_jalan' => $alamat_jalan,
 				'alamat_kabupaten' => $alamat_kabupaten,
 				'alamat_provinsi' => $alamat_provinsi,
 				'nomor_telp' => $nomor_telp,
 				'email' => $email
 			);

 			$this->m_admin->insert_data($data,'tamu');
 			redirect(base_url().'tamu');
 		}else{
 			$this->load->view('page_admin/header');
			$this->load->view('page_admin/navigator');
			$this->load->view('tamu/v_tambahtamu');
			$this->load->view('page_admin/footer');
 		}
	}

	public function edit_tamu($id){
		$where = array('id_tamu'=> $id);
	 	$data['edit_tamu'] = $this->m_admin->edit_data($where,'tamu')->result();
	 	$this->load->view('page_admin/header');
		$this->load->view('page_admin/navigator');
		$this->load->view('tamu/v_updatedatatamu',$data);
		$this->load->view('page_admin/footer');
	}

	public function edit_tamuact(){
		$id = $this->input->post('id_tamu');
		$prefix = $this->input->post('prefix');
		$nama_depan = $this->input->post('nama_depan');
 		$nama_belakang = $this->input->post('nama_belakang');
 		$tipe_identitas = $this->input->post('tipe_identitas');
 		$nomor_identitas = $this->input->post('nomor_identitas');
 		$warga_negara = $this->input->post('warga_negara');
 		$alamat_jalan = $this->input->post('alamat_jalan');
 		$alamat_kabupaten = $this->input->post('alamat_kabupaten');
 		$alamat_provinsi = $this->input->post('alamat_provinsi');
 		$nomor_telp = $this->input->post('nomor_telp');
 		$email = $this->input->post('email');
 		$this->form_validation->set_rules('prefix','Prefix','required');
 		$this->form_validation->set_rules('nama_depan','Nama Depan','required');
 		$this->form_validation->set_rules('nama_belakang','Nama Belakang','required');
 		$this->form_validation->set_rules('tipe_identitas','Tipe Identitas','required');
 		$this->form_validation->set_rules('nomor_identitas','Nomor Identitas','required');
 		$this->form_validation->set_rules('warga_negara','Warga Negara','required');
 		$this->form_validation->set_rules('alamat_jalan','Alamat Jalan','required');
 		$this->form_validation->set_rules('alamat_kabupaten','Alamat Kabupaten','required');
 		$this->form_validation->set_rules('alamat_provinsi','Alamat Provinsi','required');
 		$this->form_validation->set_rules('nomor_telp','Nomor Telepon','required');
 		$this->form_validation->set_rules('email','email','required');
 		if($this->form_validation->run() != false){
 			$where = array ('id_tamu'=>$id);
 			$data = array(
 				'prefix' => $prefix ,
 				'nama_depan' => $nama_depan,
 				'nama_belakang' => $nama_belakang,
 				'tipe_identitas' => $tipe_identitas,
 				'nomor_identitas' => $nomor_identitas,
 				'warga_negara' => $warga_negara,
 				'alamat_jalan' => $alamat_jalan,
 				'alamat_kabupaten' => $alamat_kabupaten,
 				'alamat_provinsi' => $alamat_provinsi,
 				'nomor_telp' => $nomor_telp,
 				'email' => $email
 			);
 		$this->m_admin->update_data($where,$data,'tamu');
 		redirect(base_url().'tamu');

		}else{
			$where = array('id_tamu'=> $id);
		 	$data['edit_tamu'] = $this->m_admin->edit_data($where,'tamu')->result();
		 	$this->load->view('page_admin/header');
			$this->load->view('page_admin/navigator');
			$this->load->view('tamu/v_updatedatatamu',$data);
			$this->load->view('page_admin/footer');
		}
	}

	public function hapustamu($id){
		$where = array('id_tamu'=> $id);
 		$this->m_admin->delete_data($where,'tamu');
 		redirect(base_url().'tamu');
	}



}

/* End of file Tamu.php */
/* Location: ./application/controllers/Tamu.php */