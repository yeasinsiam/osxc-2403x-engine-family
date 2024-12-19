<?php 
class Login_model extends MY_Model{
	
	/* ============For Admin Login ============ */
	function login($fld_email,$mail,$fld_password,$password,$table){	 
		$this->db->where($fld_email,$mail);		
		$this->db->where($fld_password,$password);
        $this->db->limit(1);		
		$query=$this->db->get($table);
		//echo $this->db->last_query();
		if($query->num_rows()== 1){
			return $query->row();
	    }else{
		 	return false;
	    }
	}

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
	
	/* ============For Check Email Exist In Table============ */
	function check_exist($fld_email,$mail,$table){	 
	
		$this->db->where($fld_email,$mail);		 
		$this->db->limit(1);		
		$query=$this->db->get($table);	 
		if($query->num_rows()== 1) {
			return $query->row();
		} else {
			return false;
		}
	}

	/* ===UPDATE PASSWORD RECOVERY === */ 
	public function update_account($fld_name,$name,$data,$table) {
		$this->db->where($fld_name,$name); 
		$query=$this->db->update($table,$data);
		if($query){
			return true;
		}else{
		   return false; 
		} 
 	}
	
	
	 
	
}