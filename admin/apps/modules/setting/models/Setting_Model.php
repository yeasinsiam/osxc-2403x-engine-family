<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Setting_Model extends MY_Model{
	 
	 
	function get_list($fld_id,$table){	
	
		$this->db->order_by($fld_id,"desc");
		$query=$this->db->get($table);
		if($query->num_rows() ==''){
			return '';
		}else{
			return $query->result();
		}	
	}

	function setting_list($table){	
	
		$this->db->where('id',"1");
		$query=$this->db->get($table);
		if($query->num_rows() ==''){
			return '';
		}else{
			return $query->row();
		}	
	}
	
	function check_exist($fld_name,$name,$table){	 
		$this->db->where($fld_name,$name);
		$query=$this->db->get($table);
		if($query->num_rows() ==''){
			return true;
		}else{
			return false;
		}	
	} 
	 
    public function save($data,$table){
        $this->db->insert($table , $data);
        return $this->db->insert_id();
    }
	
	function get_selected_record($fld_id,$id,$table)
	{
		$this->db->where($fld_id,$id);
		$query=$this->db->get($table);
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row();
		}
	}
	
	function delete_single($fld_id,$id,$table){
	    $this->db->where($fld_id,$id);
	    $query=$this->db->delete($table);
		if($query){
			return true;
		}else{
			return false;
		}
	}
    
    public function update($fld_id,$id,$data,$table) {
        $this->db->where($fld_id, $id);
        $query=$this->db->update($table, $data);
        if($query){
			return true;
		}else{
			return false;
		}
	}
	public function setting_update($data,$table) {
        $this->db->where('id', '1');
        $query=$this->db->update($table, $data);
        if($query){
			return true;
		}else{
			return false;
		}
	}

	
	public function images_upload($image_name,$path) {
		if(!empty($image_name)){
			$this->load->library('upload');
			$config['upload_path'] = $path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png|svg';
			$config['file_name'] = date('YmdHms').'_'.rand(1,999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload($image_name))
			{
				$uploaded = $this->upload->data();
				$image_name = $uploaded['file_name'];
			}
			$createdDate = strtotime(date('Y-m-d H:i:s'));	 
			return $names=$image_name; 
		}else{
			return $names='';
		}
	}
	
}