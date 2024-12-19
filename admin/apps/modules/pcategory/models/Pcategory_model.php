<?php 
class Pcategory_model extends MY_Model{

	public function get_category_list($table){	
		$this->db->select('*');
		$this->db->order_by("name","ASC");
		$query=$this->db->get($table);
		//echo $this->db->last_query();
		if($query->num_rows() ==''){
			return '';
		}else{
			return $query->result();
		}
	}

	public function check($fld_name,$name,$tabel){
	  
        $this->db->where($fld_name,$name);		
		$this->db->limit(1);		
		$query=$this->db->get($tabel);	 
		if($query->num_rows()== 1)
	    {
		 return $query->row();
	    }
	    else
	    {
		 return false;
	    }	  
		
	}

	public function check_edit($fld_id,$id,$fld_name,$name,$tabel){
	  
        $this->db->where($fld_name,$name);
        $this->db->where($fld_id.' !=',$id);		
		$this->db->limit(1);		
		$query=$this->db->get($tabel);
		// echo $this->db->last_query($query);
		// die;	 
		if($query->num_rows()== 1)
	    {
		 return $query->row();
	    }
	    else
	    {
		 return false;
	    }	  
		
	}

	public function save_skill($data,$table){
        $this->db->insert($table , $data);
        return $this->db->insert_id();
	}
    
    
    public function update($id,$data,$table){
        $this->db->where('id', $id);
        $query=$this->db->update($table, $data);
        if($query){
			return true;
		}else{
			return false;
		}
	}	
	// GET SINGLE PACKAGE DELETE //
	public function get_single($id,$table){
		$this->db->where("id",$id);
		$query=$this->db->get($table);
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row();
		}
	}
	
	public function delete_single_package($id,$table){
	    $this->db->where('id',$id);
	    $query=$this->db->delete($table);
		if($query){
			return true;
		}else{
			return false;
		}
	}

	public function get_subscribe($table){	
		$this->db->select('*');
		$this->db->order_by("sub_id","DESC");
		$query=$this->db->get($table);
		//echo $this->db->last_query();
		if($query->num_rows() ==''){
			return '';
		}else{
			return $query->result();
		}
	}
    
    public function get_enquiry($table){	
		$this->db->select('*');
		$this->db->order_by("id","DESC");
		$query=$this->db->get($table);
		//echo $this->db->last_query();
		if($query->num_rows() ==''){
			return '';
		}else{
			return $query->result();
		}
	}

	public function images_upload() {
		
		if(!empty($_FILES['img']['name'])){
			$this->load->library('upload');
			$config['upload_path'] = APPPATH.'../uploads/category/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['file_name'] = date('YmdHms').'_'.rand(1,999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('img'))
			{
				$uploaded = $this->upload->data();
				$arr['img'] = $uploaded['file_name'];
				
			}
			$createdDate = strtotime(date('Y-m-d H:i:s'));	 
			return $names=$arr['img']; 
		}else{
			return $names='';
		}
	}


	
}