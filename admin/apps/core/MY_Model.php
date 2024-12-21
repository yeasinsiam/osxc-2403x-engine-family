<?php
class MY_Model extends CI_Model
{

	function profiledata($fld_email, $email, $tabel)
	{

		$this->db->where($fld_email, $email);
		$this->db->limit(1);
		$query = $this->db->get($tabel);
		// echo $this->db->last_query($query);
		// die;
		if ($query->num_rows() == 1) {
			return $query->row();
		} else {
			return false;
		}
	}

	function get_list($fld_id, $table)
	{
		$this->db->order_by($fld_id, "DESC");
		$query = $this->db->get($table);
		if ($query->num_rows() == '') {
			return false;
		} else {
			return $query->result();
		}
	}

	// public function get_total_blogs($table){
	// 	$query=$this->db->get($table);
	// 	if($query->num_rows() ==''){
	// 		return false;
	// 	}else{
	// 		return $query->result();
	// 	}
	// }

	// public function get_active_blogs($fld_bstatus,$table){
	// 	$this->db->where($fld_bstatus,"0");
	// 	$query=$this->db->get($table);
	// 	if($query->num_rows() ==''){
	// 		return false;
	// 	}else{
	// 		return $query->result();
	// 	}
	// }

	// public function get_inactive_blogs($fld_bstatus,$table){
	// 	$this->db->where($fld_bstatus,"1");
	// 	$query=$this->db->get($table);
	// 	if($query->num_rows() ==''){
	// 		return false;
	// 	}else{
	// 		return $query->result();
	// 	}
	// }

}
