<?php 
 
class Connect extends CI_Model{
	function found_point(){
		$data = $this->db->query("SELECT * from point");
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
