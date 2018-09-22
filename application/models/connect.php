<?php 
 
class Connect extends CI_Model{
	function word(){
		$data = $this->db->query("SELECT * from word");
		return $data->result();
	}
	function cek_sumber(){
		$url = source($_GET['url']);
		$this->db->select('*');
		$this->db->from('media');
		$this->db->where('Website', $url);
		$this->db->or_where('Nama_Media', $url);
		$data = $this->db->get();
        return $data->result();
	}
	function cek_report(){
		$url = $_GET['url'];
		$status = "oke";
		$this->db->select('*');
		$this->db->from('report');
		$this->db->where('URL', $url);
		$this->db->where('Status', $status );
		$data = $this->db->get();
        return $data->result();
	}
	function insert_report(){
		$nama = $_GET['nama'];
		$email = $_GET['email'];
		$url = $_GET['url'];	
		$comment = $_GET['comment'];
		$data = array(
        'URL' => $url,
        'UserName' => $nama,
        'UserEmail' => $email,
        'Status' => 'null',
        'Comment' => $comment
		);
		$this->db->insert('report', $data);
	}
	function daftar_hoax(){
		$status = "oke";
		$this->db->select('*');
		$this->db->from('report');
		$this->db->where('Status', $status );
		$data = $this->db->get();
        return $data->result();
	}

}





