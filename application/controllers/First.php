<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	
    public function __construct() {
        parent::__construct();
        $this->load->model('modelcoin');
    }
    
    public function index() {
		// $this->load->view('welcome_message');
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

		$this->load->view('firstPage', $data);
	}

	public function daftar () {
		$this->load->view('form_daftar');
	}

	public function proses_daftar() {
		$dataBoost = array (
			"nama" => $this->input->post('nama'),
			"username" => $this->input->post('username'),
			"password" => $this->input->post('password')
		);
		$this->modelcoin->insertData('user', $dataBoost);
		redirect(base_url()."First/login", 'refresh');
	}

    public function login () {
		$this->load->view('form_login');
	}

    public function proses_login(){
        $user = $this->input->post("username");
        $pass = $this->input->post("password");

        $dataPenunjuk = array(
            'username' => $user, 
            'password' => $pass,
        );
        $cek = count($this->modelcoin->getData_khusus("user", $dataPenunjuk));
        if($cek > 0){
            $data_session = array(
                'username' => $user,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);

            redirect(base_url()."Welcome");
        }else{
            redirect(base_url());
        }
    }
}
