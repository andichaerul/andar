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
		$this->db->like('Website', $url);
		$this->db->or_like('Nama_Media', $url);
		$data = $this->db->get();
        return $data->result();
	}
}
