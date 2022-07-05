<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('modelcoin');
	}

	public function index() {
		if($this->session->userdata('status')=="login"){

			$dataCoin = $this->modelcoin->getData("wallet");
			$dataCoinku = $this->modelcoin->getData("wallet");
			$dataBoost = $this->modelcoin->getData("paket_boost");
			$userBoost = $this->modelcoin->getData("boost_user");
			$data = array(
				"dataCoinku" => $dataCoinku,
				"dataCoin" => $dataCoin,
				"dataBoost" => $dataBoost,
				"userBoost" => $userBoost
			);
		}else{
			$this->load->view('firstPage', $data);
		}
		$this->load->view('shop', $data);
	}

	public function tambahData() {
		$dataBoost = array (
			"nama" => $this->input->post('namaBoost'),
			"kecepatan" => $this->input->post('kecepatanBoost'),
			"masa_aktif" => $this->input->post('aktifBoost')
		);
		$this->modelcoin->insertData('boost_user', $dataBoost);
		redirect(base_url()."index.php/welcome", 'refresh');
	}

	public function hapusData($id) {
		$dataId = array(
			'id' => $id
		);
		$this->modelcoin->deleteData('boost_user', $dataId);
		redirect(base_url()."index.php/welcome", 'refresh');
	}

	//update data
	public function updateData() {
		$dataPenunjuk = array(
			'nama_coin' => $this->input->post('namaCoin'),
		);
		$dataWallet = array (
			'harga_coin' => $this->input->post('jumlahCrypto'),
			'harga_rupiah' => $this->input->post('jumlahRupiah'),
		);
		$this->modelcoin->updateData('wallet', $dataWallet, $dataPenunjuk);
		redirect(base_url()."index.php/welcome", 'refresh');
	}

	public function logOut()
    {
        $this->session->sess_destroy();
        redirect('First');
    }
}
