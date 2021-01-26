<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent:: __construct();
		//cek login
		if($this->session->userdata('status') != "login"){
			$alert=$this->session->set_flashdata
			('alert', 'Anda belum Login');
			redirect(base_url());
		}
	}

	public function index(){
		$data['kamar'] = $this->db->query
		("select * from kamar order by id_kamar desc
		limit 10")->result();
	 	$this->load->view('page_admin/header');
	 	$this->load->view('page_admin/navigator');
	 	$this->load->view('v_admin');
	 	$this->load->view('page_admin/footer');
		}


	public function kamar(){
		$data['lihatkamar']=$this->db->query("SELECT * FROM kamar K, Kamar_tipe KT WHERE K.id_kamar_tipe=KT.id_kamar_tipe")->result();
		$this->load->view('page_admin/header');
		$this->load->view('page_admin/navigator');
		$this->load->view('kamar/v_lihatkamar',$data);
		$this->load->view('page_admin/footer');
	}

	public function tambahkamar(){
		//memuat data tipe kamar untuk ditampilkan di select form
		$data['tipe_kamar'] =$this->m_admin->get_data('kamar_tipe')->result();
		$this->load->view('page_admin/header');
		$this->load->view('page_admin/navigator');
		$this->load->view('kamar/v_tambahkamar',$data);
		$this->load->view('page_admin/footer');
 	}

 	public function tambahkamar_nav(){
		//memuat data tipe kamar untuk ditampilkan di select form
		$data['tipe_kamar'] =$this->m_admin->get_data('kamar_tipe')->result();
		$this->load->view('page_admin/header');
		$this->load->view('page_admin/navigator');
		$this->load->view('kamar/v_tambahkamar_navbar',$data);
		$this->load->view('page_admin/footer');
 	}

 	public function tambahkamaract(){
 		$nomor_kamar = $this->input->post('nomor_kamar');
 		$id_kamar_tipe = $this->input->post('id_kamar_tipe');
 		$max_dewasa = $this->input->post('max_dewasa');
 		$max_anak = $this ->input->post('max_anak');
 		if($id_kamar_tipe=="STANDART"){
 			$id_kamar_tipe="2";
 		}elseif ($id_kamar_tipe=="SUPERIOR") {
 			$id_kamar_tipe="3";
 		}else{
 			$id_kamar_tipe="4";
 		}


 		$this->form_validation->set_rules('nomor_kamar','Nomor Kamar','required');
		$this->form_validation->set_rules('id_kamar_tipe','Type Kamar','required');
		$this->form_validation->set_rules('max_dewasa','Jumlah Maksimal orang dewasa','required');
		$this->form_validation->set_rules('max_anak','Jumlah Maksimal anak','required');

		if($this->form_validation->run() != false){
	
		 $data = array(
		 	'nomor_kamar' => $nomor_kamar ,
		 	'id_kamar_tipe' => $id_kamar_tipe,
		 	'max_dewasa' => $max_dewasa,
		 	'max_anak' => $max_anak
		 	 );

		 $this->m_admin->insert_data($data,'kamar');
		 redirect(base_url().'admin/kamar');

		}else{
			$this->load->view('page_admin/header');
			$this->load->view('page_admin/navigator');
			$this->load->view('kamar/v_tambahkamar');
			$this->load->view('page_admin/footer');
		}
 	}

 	public function edit_kamar($id){
 		$where = array('id_kamar'=> $id);
 		$data['editkamar']=$this->db->query("SELECT * FROM kamar K, Kamar_tipe KT WHERE K.id_kamar_tipe=KT.id_kamar_tipe
 		 and k.id_kamar='$id' ")->result();
 		$data['tipekamar']=$this->m_admin->get_data('kamar_tipe')->result();
 		$this->load->view('page_admin/header');
		$this->load->view('page_admin/navigator');
		$this->load->view('kamar/v_updatekamar',$data);
		$this->load->view('page_admin/footer');
 	}

 	public function updatekamar(){
 		$id = $this->input->post('id_kamar');
 		$id_kamar_tipe = $this->input->post('id_kamar_tipe');
 		$max_dewasa = $this->input->post('max_dewasa');
 		$max_anak = $this->input->post('max_anak');
 		$status_kamar = $this->input->post('status_kamar');
 		$this->form_validation->set_rules('id_kamar_tipe','ID Type Kamar','required');
 		$this->form_validation->set_rules('max_dewasa','Maximal Dewasa','required');
 		$this->form_validation->set_rules('max_anak','Maximal Anak','required');
 		$this->form_validation->set_rules('status_kamar','Status Kamar','required');
 		if($this->form_validation->run() != false){
 			$where = array('id_kamar'=> $id);
 			$data = array(
 				'id_kamar_tipe'=>$id_kamar_tipe,
 				'max_dewasa'=> $max_dewasa,
 				'max_anak'=> $max_anak,
 				'status_kamar'=>$status_kamar
			);

		$this->m_admin->update_data($where,$data,'kamar');
		redirect(base_url().'admin/kamar');

 		}else{
 		$this->load->view('page_admin/header');
		$this->load->view('page_admin/navigator');
		$this->load->view('kamar/v_updatekamar');
		$this->load->view('page_admin/footer');	
 		}
 	}

 	function hapuskamar($id){
 		$where = array('id_kamar'=> $id);
 		$this->m_admin->delete_data($where,'kamar');
 		redirect(base_url().'admin/kamar');
 	}

 	 public function tipekamar(){
 	 	$data['tipekamar'] = $this->m_admin->get_data('kamar_tipe')->result();
 	 	$this->load->view('page_admin/header');
		$this->load->view('page_admin/navigator');
		$this->load->view('kamar/v_tipekamar',$data);
		$this->load->view('page_admin/footer');
 	 }

 	  public function tambahtipekamar(){
 	 	$data['tipekamar'] = $this->m_admin->get_data('kamar_tipe')->result();
 	 	$this->load->view('page_admin/header');
		$this->load->view('page_admin/navigator');
		$this->load->view('kamar/v_tambahtipekamar',$data);
		$this->load->view('page_admin/footer');
 	 }

 	 public function tambahtipekamaract(){
 	 	$nama_kamar_tipe = $this->input->post('nama_kamar_tipe');
 	 	$harga_malam = $this->input->post('harga_malam');
 	 	$harga_orang = $this->input->post('harga_orang');
 	 	$keterangan = $this->input->post('keterangan');
 	 	$this->form_validation->set_rules('nama_kamar_tipe','Nama Kamar Tipe','required');
 	 	$this->form_validation->set_rules('harga_malam','Harga Kamar','required');
 	 	$this->form_validation->set_rules('harga_orang','Harga Orang','required');
 	 	if($this->form_validation->run() != false){
 	 	  $data = array(
 	 	  	'nama_kamar_tipe'=> $nama_kamar_tipe,
 	 	  	'harga_malam' => $harga_malam,
 	 	  	'harga_orang' => $harga_orang,
 	 	  	'keterangan' => $keterangan
		 );

 	 	 $this->m_admin->insert_data($data,'kamar_tipe');
 	 	 redirect(base_url().'admin/tipekamar');
		}else{
			$this->load->view('page_admin/header');
			$this->load->view('page_admin/navigator');
			$this->load->view('kamar/v_tambahtipe');
			$this->load->view('page_admin/footer');
		}
 	 }

 	 public function edit_tipekamar($id_type){
 		$where = array('id_kamar_tipe'=> $id_type);
 		$data['kamar_tipe'] = $this->m_admin->edit_data($where,'kamar_tipe')->result();
 		$this->load->view('page_admin/header');
		$this->load->view('page_admin/navigator');
		$this->load->view('kamar/v_updatetipekamar',$data);
		$this->load->view('page_admin/footer');
 	}

 	public function update_tipekamar(){
 		$id_type = $this->input->post('id_kamar_tipe');
 		$nama_kamar_tipe = $this->input->post('nama_kamar_tipe');
 		$harga_malam = $this->input->post('harga_malam');
 		$harga_orang = $this->input->post('harga_orang');
 		$keterangan = $this->input->post('keterangan');
 		$this->form_validation->set_rules('nama_kamar_tipe','Nama Type Kamar','required');
 		$this->form_validation->set_rules('harga_malam','Harga Malam','required');
 		$this->form_validation->set_rules('harga_orang','Harga Orang','required');
 		$this->form_validation->set_rules('keterangan','Keterangan','required');
 		if($this->form_validation->run() != false){
 			$where = array('id_kamar_tipe'=> $id_type);
 			$data = array(
 				'nama_kamar_tipe'=>$nama_kamar_tipe,
 				'harga_malam'=> $harga_malam,
 				'harga_orang'=> $harga_orang,
 				'keterangan'=>$keterangan
			);

		$this->m_admin->update_data($where,$data,'kamar_tipe');
		redirect(base_url().'admin/tipekamar');

 		}else{
 		$where = array('id_kamar_tipe' => $id_type);
		$data['kamar_tipe'] = $this->m_admin->edit_data($where,'kamar_tipe')->result();
 		$this->load->view('page_admin/header');
		$this->load->view('page_admin/navigator');
		$this->load->view('kamar/v_updatetipekamar',$data);
		$this->load->view('page_admin/footer');	
 		}
 	}

 	public function hapus_tipekamar($id_type){
 		$where = array ('id_kamar_tipe' => $id_type);
 		$this->m_admin->delete_data($where,'kamar_tipe');
 		redirect(base_url().'admin/tipekamar');

 	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */

		
