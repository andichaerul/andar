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
		$data['word'] = $this->connect->word();
		$data['report'] = $this->connect->cek_report();
		$this->load->view('proses',$data);
	}
	public function report(){
	$nama = $_GET['nama'];
	$email = $_GET['email'];
	$url = $_GET['url'];	
	$comment = $_GET['comment'];
	$config = Array(  
    'protocol' => 'smtp',  
    'smtp_host' => 'ssl://smtp.googlemail.com',  
    'smtp_port' => 465,  
    'smtp_user' => 'fiteringberitahoax@gmail.com',   
    'smtp_pass' => "BVx*p*@j5Y.xtT&'",   
    'mailtype' => 'html',   
    'charset' => 'iso-8859-1'  
   );  
   $this->load->library('email', $config);  
   $this->email->set_newline("\r\n");  
   $this->email->from('fiteringberitahoax@gmail.com', 'Admin Cek berita Hoax');   
   $this->email->to($email);
   $this->email->subject('Konfirmasi Permintaan Laporan Berita Hoax Anda');
   $this->email->message('Terima kasih anda telah berpartisipasi dalam memberantas berita hoax<br>klik tautan di bawah untuk konfirmasi<br><a href="'.base_url().'home/insert_report?nama='.$nama.'&email='.$email.'&url='.$url.'&comment='.$comment.'">Konfirmasi</a>' );  
   if (!$this->email->send()) {  
    show_error($this->email->print_debugger());   
   }else{  
    echo "<div class='card card-outline'>
        <div class='card-header' style='font-weight: bold'>Report</div>
        <div class='card-content card-content-padding'>
          <div class='row no-gap'>
          <!-- Each 'cell' has col-[width in percents] class -->
              <div class='col-100'>Berhasil mengirim laporan anda</div>
          </div>
	</div>
      </div>   ";   
   }  
   }
   public function insert_report(){
   	$this->connect->insert_report();
   }
   public function daftar_hoax(){
   		$data['daftar_hoax'] = $this->connect->daftar_hoax();
		$this->load->view('daftar_hoax',$data);
   }


}