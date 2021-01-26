<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['data_kamar']=$this->db->query("SELECT * FROM transaksi_kamar T, kamar_tipe KT, kamar K WHERE T.id_kamar=K.id_kamar AND K.id_kamar_tipe=KT.id_kamar_tipe AND K.status_kamar='TIDAK TERSEDIA' ")->result();
		$this->load->view('page_admin/header');
		$this->load->view('page_admin/navigator');
		$this->load->view('main_navigation/v_checkout',$data);
		$this->load->view('page_admin/footer');
		}

	public function checkout($id){
		$w=array('status_kamar'=>'TIDAK TERSEDIA');

		$data['kamar_tidaktersedia']= $this->db->query("SELECT * FROM transaksi_kamar T, kamar K, kamar_tipe KT, tamu TA WHERE T.id_kamar=K.id_kamar AND K.id_kamar_tipe=KT.id_kamar_tipe AND T.id_tamu=TA.id_tamu AND T.id_kamar='$id'  ")->result();
		$data['kamar']=$this->m_admin->edit_data($w,'kamar')->result();
		$data['tamu']=$this->m_admin->get_data('tamu')->result();
		$this->load->view('page_admin/header');
		$this->load->view('page_admin/navigator');
		$this->load->view('main_navigation/v_checkout_act',$data);
		$this->load->view('page_admin/footer');
	}

	public function checkout_act(){
		$nomor_invoice = $this->input->post('nomor_invoice');
		$tanggal_checkout = $this->input->post('tanggal_checkout');
		$id_kamar =  $this->input->post('id_kamar');
		$this->form_validation->set_rules('nomor_invoice','tanggal checkout','required');
		$this->form_validation->set_rules('tanggal_checkout','tanggal checkout','required');
		if($this->form_validation->run() != false){
			$data = array(
				'nomor_invoice' => $nomor_invoice,
				'tanggal_pembayaran' => $tanggal_checkout
			);
       
		$this->m_admin->insert_data($data,'finance_income');
		//update kamar
		$d=array('status_kamar'=>'KOTOR');
		$w=array('id_kamar'=>$id_kamar);
		$this->m_admin->update_data($w,$d,'kamar');
        //hapus database transaksi
		$w = array('id_kamar'=>$id_kamar);
		$this->m_admin->delete_data($w,'transaksi_kamar');
		redirect(base_url().'checkout');

		}else{
		$w=array('status_kamar'=>'TIDAK TERSEDIA');

		$data['kamar_tidaktersedia']= $this->db->query("SELECT * FROM transaksi_kamar T, kamar K, kamar_tipe KT WHERE T.id_kamar=K.id_kamar AND K.id_kamar_tipe=KT.id_kamar_tipe AND T.id_kamar='$id' ")->result();
		$data['kamar']=$this->m_admin->edit_data($w,'kamar')->result();
		$data['tamu']=$this->m_admin->get_data('tamu')->result();
		$this->load->view('page_admin/header');
		$this->load->view('page_admin/navigator');
		$this->load->view('main_navigation/v_checkout_act',$data);
		$this->load->view('page_admin/footer');	
		}
	}

	public function printinvoice(){
		$data['kamar_tidaktersedia']= $this->db->query("SELECT * FROM transaksi_kamar T, kamar K, kamar_tipe KT WHERE T.id_kamar=K.id_kamar AND K.id_kamar_tipe=KT.id_kamar_tipe  ")->result();
		$data['tamu']=$this->m_admin->get_data('tamu')->result();
		$this->load->view('page_admin/header');
		$this->load->view('main_navigation/cetakinvoice',$data);
	}
}

/* End of fikle Checkout.php */
/* Location: ./application/controllers/Checkout.php */