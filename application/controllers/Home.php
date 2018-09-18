<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('connect');
		$this->load->library('cart');
		$this->load->helper('fungsi');
	}

	public function index()
	{

		$this->load->view('index');
	}
	public function proses()
	{
		$data['sumber'] = $this->connect->cek_sumber();
		$this->load->view('proses',$data);
	}
	public function word()
	{
		$this->load->view('word');
	}

}