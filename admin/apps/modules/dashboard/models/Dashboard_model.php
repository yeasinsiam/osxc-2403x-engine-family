<?php 
class Dashboard_model extends MY_Model{

	/* ============For Update Data============ */
	public function update_last_login($fld_mid,$loginid,$data,$table) {
	        $this->db->where($fld_mid, $loginid);
	        $query=$this->db->update($table, $data);
	        if($query){
			return true;
		}else{
			return false;
		}
	}

	function get_count_photo_list($fld_pstatus,$table){
		$this->db->select('*');
	        $this->db->from($table);
	         $this->db->where($fld_pstatus, '0');
	        $query = $this->db->get();
	        return $query->num_rows();
	}

	function get_photo_list($fld_phoid,$fld_pstatus,$total,$limit,$table){

		$limit = $limit-1;
		if ($limit<0) { 
			$limit = 0;
		}
		$from = $limit*$total;

		$this->db->select('`mbr`.`cust_fname`, `mbr`.`cust_lname`, `pht`.`pho_id`,`pht`.`pho_title`,`pht`.`pho_picture`,`pht`.`pho_posted_by`,`pht`.`pho_status`,`pht`.`pho_views`');
		$this->db->join('tbl_members mbr','pht.pho_posted_by=mbr.cust_id','LEFT');
		$this->db->where('pht.'.$fld_pstatus,'0');
		$this->db->order_by('pht.'.$fld_phoid,"DESC");
		$this->db->limit($total, $from);
		$query=$this->db->get($table.' pht');
		if($query->num_rows() ==''){
			return '';
		}else{
			return $query->result();
		}
	}

	/*===== GET ACTIVE MEMBER PROFILE  =====*/
	
	public function get_active_member_profile($fld_mid,$activeMember,$table){
		$this->db->where($fld_mid,$activeMember);
		$query=$this->db->get($table);
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row();
		}
	}

	/*------------ UPLOAD MEMBER PROFILE PHOTO------------*/
	
	public function update($fld_mid,$mid,$data,$table) {
	        $this->db->where($fld_mid, $mid);
	        $query=$this->db->update($table, $data);
	        if($query){
			return true;
		}else{
			return false;
		}
	} 

	/* ---- END OF CHANGE UPLOAD PHOTOS ---- */ 

	public function check_password($fld_mid,$mid,$oldPassword,$table){
        	$this->db->where($fld_mid,$mid);		
		$this->db->where('mst_password',$oldPassword);
        	$this->db->limit(1);		
		$query=$this->db->get($table);
		//echo $this->db->last_query();	 
		if($query->num_rows()== 1){
		 	return $query->row();
		    }else{
			 	return false;
		    }	  
	}

	public function update_account($fld_mid,$mid,$data,$table){	 
		$this->db->where($fld_mid,$mid); 
		$query=$this->db->update($table,$data);
		if($query){
			return true;
		}else{
		   return false; 
		} 
 	}
	
	public function getCountry($table){
		$query=$this->db->get($table);
		if($query->num_rows() ==''){
			return '';
		}else{
			return $query->result();
		}   
   	}

   	public function getState($fld_cntid,$id,$table){    
		$this->db->where($fld_cntid,$id);
		$query=$this->db->get($table);
		if($query->num_rows() ==''){
			return '';
		}else{
			return $query->result();
		}
	}

	public function getCity($fld_sid,$id,$table){
		$this->db->where($fld_sid,$id);
		$query=$this->db->get($table);
		if($query->num_rows() ==''){
			return '';
		}else{
			return $query->result();
		}
	}

	/* --- GET MEMBER ALL ACTIVITIES --- */ 
	public function get_all_my_activity($acti_amid,$id,$table){
		$this->db->select('mbr.cust_id,mbr.cust_fname,mbr.cust_lname,blg.blog_title,pho.pho_title,act.*');
		$this->db->join('tbl_members mbr','act.act_member_id=mbr.cust_id','LEFT');
		$this->db->join('tbl_blog blg','act.act_blog_id=blg.blog_id','LEFT');
		$this->db->join('tbl_photos pho','act.act_pho_id=pho.pho_id','LEFT');
		$this->db->where('act.'.$acti_amid,$id);
		$this->db->order_by('act.act_id',"DESC");
		$query=$this->db->get($table. ' act');
		//echo $this->db->last_query();
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->result();
		}
	}
	public function images_upload() {
		
		if(!empty($_FILES['img']['name'])){
			$this->load->library('upload');
			$config['upload_path'] = APPPATH.'../uploads/members/';
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