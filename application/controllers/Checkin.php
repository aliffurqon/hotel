<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkin extends CI_Controller {

	public function __construct(){
		parent:: __construct();
	}

		public function index(){
			$data['kamar_tersediaST'] = $this->db->query(" SELECT * FROM kamar K , kamar_tipe KT WHERE K.id_kamar_tipe=KT.id_kamar_tipe AND K.id_kamar_tipe='2'AND K.status_kamar='TERSEDIA' ")->result();
			$data['kamar_tersediaSP'] = $this->db->query(" SELECT * FROM kamar K, kamar_tipe KT WHERE K.id_kamar_tipe=KT.id_kamar_tipe AND K.id_kamar_tipe='3' AND K.status_kamar='TERSEDIA' ")->result();
			$this->load->view('page_admin/header');
			$this->load->view('page_admin/navigator');
			$this->load->view('main_navigation/v_check_in',$data);
			$this->load->view('page_admin/footer');
			 }

		public function checkin_st($id_kamar){
			$w = array('status_kamar'=>'TERSEDIA','id_kamar'=> $id_kamar);
			$data['kamar_tersediaST'] = $this->db->query(" SELECT * FROM kamar K , kamar_tipe KT WHERE K.id_kamar_tipe=KT.id_kamar_tipe AND K.id_kamar_tipe='2'AND K.status_kamar='TERSEDIA' ")->result();
			$data['kamar'] = $this->m_admin->edit_data($w,'kamar')->result();
			$data['tamu'] = $this->m_admin->get_data('tamu')->result();
			$this->load->view('page_admin/header');
			$this->load->view('page_admin/navigator');
			$this->load->view('main_navigation/v_checkin_stdaftar',$data);
			$this->load->view('page_admin/footer');

		}

		public function checkin_stact(){
			$id_user = $this->input->post('id_user');
			$nomor_invoice = $this->input->post('nomor_invoice');
	 		$id_tamu = $this->input->post('id_tamu');
	 		$id_kamar = $this->input->post('id_kamar');
	 		$jumlah_dewasa = $this->input->post('jumlah_dewasa');
	 		$jumlah_anak = $this->input->post('jumlah_anak');
	 		$tanggal_checkin = $this->input->post('tanggal_checkin');
	 		$waktu_checkin = $this->input->post('waktu_checkin');
	 		$tanggal_checkout = $this->input->post('tanggal_checkout');
	 		$waktu_checkout = $this->input->post('waktu_checkout');
	 		$deposit = $this->input->post('deposit');
	 		if($jumlah_anak=="1"){
	 			$biaya_anak=32500;
	 		}elseif($jumlah_anak=="2"){
	 			$biaya_anak=70000;
	 		}else{
	 			$biaya_anak=0;
	 		}
	 		if($jumlah_dewasa=="1"){
	 			$biaya_dewasa=70000;
	 		}elseif($jumlah_dewasa=="2"){
	 			$biaya_dewasa=150000;
	 		}else{
	 			$biaya_dewasa=0;
	 		}
			$biaya_kamar=100000+$biaya_anak+$biaya_dewasa;
			$tanggal_datang = strtotime($tanggal_checkin);
			$tanggal_pulang = strtotime($tanggal_checkout);
			$selisih = abs(($tanggal_pulang-$tanggal_datang)/(60*60*24));
			$total_biaya_kamar=$biaya_kamar*$selisih;
	 		$this->form_validation->set_rules('id_user','ID user','required');
	 		$this->form_validation->set_rules('nomor_invoice','NO.invoice','required');
	 		$this->form_validation->set_rules('tanggal_checkout','tanggal checkout','required');
	 		$this->form_validation->set_rules('waktu_checkout','waktu checkout','required');
	 		$this->form_validation->set_rules('deposit','deposit','required');
	 		if($this->form_validation->run() != false){
	 			$data = array(
				'id_user' => $id_user,
				'nomor_invoice' => $nomor_invoice,
				'tanggal' => $tanggal,
				'id_tamu' => $id_tamu,
				'id_kamar' => $id_kamar,
				'jumlah_dewasa' => $jumlah_dewasa,
				'jumlah_anak' => $jumlah_anak,
				'tanggal_checkin' => $tanggal_checkin,
				'waktu_checkin'=>$waktu_checkin,
				'tanggal_checkout' =>$tanggal_checkout,
				'waktu_checkout' => $waktu_checkout,
				'total_biaya_kamar' => $total_biaya_kamar,
				'deposit' => $deposit,
				'tanggal' => date("Y-m-d")
				);

	 		$this->m_admin->insert_data($data,'transaksi_kamar');
	 		// update status kamar
	 		$d = array('status_kamar' => 'TIDAK TERSEDIA');
	 		$w = array('id_kamar'=>$id_kamar);
	 		$this->m_admin->update_data($w,$d,'kamar');

			redirect(base_url().'checkin');
			
		}else{
			$w = array('status_kamar'=>'TERSEDIA','id_kamar'=> $id_kamar);
			$data['kamar_tersediaST'] = $this->db->query(" SELECT * FROM kamar K , kamar_tipe KT WHERE K.id_kamar_tipe=KT.id_kamar_tipe AND K.id_kamar_tipe='2'AND K.status_kamar='TERSEDIA' ")->result();
			$data['kamar'] = $this->m_admin->edit_data($w,'kamar')->result();
			$data['tamu'] = $this->m_admin->get_data('tamu')->result();
			$this->load->view('page_admin/header');
			$this->load->view('page_admin/navigator');
			$this->load->view('main_navigation/v_checkin_stdaftar',$data);
			$this->load->view('page_admin/footer');
		}
		}

		public function checkin_sp($id_kamar){
			$w = array('status_kamar'=>'TERSEDIA','id_kamar'=> $id_kamar);
			$data['kamar'] = $this->m_admin->edit_data($w,'kamar')->result();
			$data['tamu'] = $this->m_admin->get_data('tamu')->result();
			$data['kamar_tersediaSP'] = $this->db->query(" SELECT * FROM kamar K, kamar_tipe KT WHERE K.id_kamar_tipe=KT.id_kamar_tipe AND K.id_kamar_tipe='3' AND K.status_kamar='TERSEDIA' ")->result();
			$this->load->view('page_admin/header');
			$this->load->view('page_admin/navigator');
			$this->load->view('main_navigation/v_checkin_spdaftar',$data);
			$this->load->view('page_admin/footer');

		}

		public function checkin_spact(){
			$id_user = $this->input->post('id_user');
			$nomor_invoice = $this->input->post('nomor_invoice');
	 		$id_tamu = $this->input->post('id_tamu');
	 		$id_kamar = $this->input->post('id_kamar');
	 		$jumlah_dewasa = $this->input->post('jumlah_dewasa');
	 		$jumlah_anak = $this->input->post('jumlah_anak');
	 		$tanggal_checkin = $this->input->post('tanggal_checkin');
	 		$waktu_checkin = $this->input->post('waktu_checkin');
	 		$tanggal_checkout = $this->input->post('tanggal_checkout');
	 		$waktu_checkout = $this->input->post('waktu_checkout');
	 		$deposit = $this->input->post('deposit');
	 		$tanggal= date("d-m-y");
	 		if($jumlah_anak=="1"){
	 			$biaya_anak=70000;
	 		}elseif($jumlah_anak=="2"){
	 			$biaya_anak=125000;
	 		}elseif($jumlah_anak=="3"){
	 			$biaya_anak=180000;
	 		}else{
	 			$biaya_anak=0;
	 		}
	 		if($jumlah_dewasa=="1"){
	 			$biaya_dewasa=120000;
	 		}elseif($jumlah_dewasa=="2"){
	 			$biaya_dewasa=200000;
	 		}elseif($jumlah_dewasa=="3"){
	 			$biaya_dewasa=28000;
	 		}else{
	 			$biaya_dewasa=0;
	 		}
			$biaya_kamar=400000+$biaya_anak+$biaya_dewasa;
			$tanggal_datang = strtotime($tanggal_checkin);
			$tanggal_pulang = strtotime($tanggal_checkout);
			$selisih = abs(($tanggal_pulang-$tanggal_datang)/(60*60*24));
			$total_biaya_kamar=$biaya_kamar*$selisih;
	 		$this->form_validation->set_rules('id_user','ID_user','required');
	 		$this->form_validation->set_rules('id_tamu','ID tamu','required');
	 		$this->form_validation->set_rules('nomor_invoice','NO.invoice','required');
	 		$this->form_validation->set_rules('tanggal_checkout','tanggal_checkout','required');
	 		$this->form_validation->set_rules('waktu_checkout','waktu_checkout','required');
	 		$this->form_validation->set_rules('deposit','deposit','required');
	 		if($this->form_validation->run() != false){
	 			$data = array(
				'id_user' => $id_user,
				'nomor_invoice' => $nomor_invoice,
				'tanggal' => $tanggal,
				'id_tamu' => $id_tamu,
				'id_kamar' => $id_kamar,
				'jumlah_dewasa' => $jumlah_dewasa,
				'jumlah_anak' => $jumlah_anak,
				'tanggal_checkin' => $tanggal_checkin,
				'waktu_checkin'=>$waktu_checkin,
				'tanggal_checkout' =>$tanggal_checkout,
				'waktu_checkout' => $waktu_checkout,
				'total_biaya_kamar' => $total_biaya_kamar,
				'deposit' => $deposit,
				'tanggal' => $tanggal,
				);

	 		$this->m_admin->insert_data($data,'transaksi_kamar');
	 		// update status kamar
	 		$d = array('status_kamar' => 'TIDAK TERSEDIA');
	 		$w = array('id_kamar'=>$id_kamar);
	 		$this->m_admin->update_data($w,$d,'kamar');

			redirect(base_url().'checkin');
			
		}else{
			$w = array('status_kamar'=>'TERSEDIA','id_kamar'=> $id_kamar);
			$data['kamar_tersediaSP'] = $this->db->query(" SELECT * FROM kamar K, kamar_tipe KT WHERE K.id_kamar_tipe=KT.id_kamar_tipe AND K.id_kamar_tipe='3' AND K.status_kamar='TERSEDIA' ")->result();
			$data['kamar'] = $this->m_admin->edit_data($w,'kamar')->result();
			$data['tamu'] = $this->m_admin->get_data('tamu')->result();
			$this->load->view('page_admin/header');
			$this->load->view('page_admin/navigator');
			$this->load->view('main_navigation/v_checkin_stdaftar',$data);
			$this->load->view('page_admin/footer');
		}
		}
		//tamuinhause
		public function tamu_menginap(){
			$data['tamu_menginap']=$this->db->query("SELECT * FROM transaksi_kamar T, tamu TM, kamar K WHERE T.id_kamar=K.id_kamar and T.id_tamu=TM.id_tamu")->result();
			$this->load->view('page_admin/header');
			$this->load->view('page_admin/navigator');
			$this->load->view('main_navigation/v_tamumenginap',$data);
			$this->load->view('page_admin/footer');
		}
}

/* End of file Checkin.php */
/* Location: ./application/controllers/Checkin.php */