<?php
class News_model extends MY_Model{


	public function media_list(){
		$this->db->select('*');
		$this->db->order_by("id","desc");
		$query=$this->db->get('tbl_media');
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
	public function news_list($table){
		$this->db->select('*');
		$this->db->order_by("id","desc");
		$query=$this->db->get($table);
		//echo $this->db->last_query();
		if($query->num_rows() ==''){
			return '';
		}else{
			return $query->result();
		}
	}

	public function category_list($table){
		$this->db->select('*');
		$this->db->order_by("name","ASC");
		//$this->db->where("type !=","0");
		$query=$this->db->get($table);
		//echo $this->db->last_query();
		if($query->num_rows() ==''){
			return '';
		}else{
			return $query->result();
		}
	}


	// GET MEMBER BLOG INFORMATION BY ID //
	public function get_member_blog_info($fld_bid,$id,$table){
		$this->db->select('mbr.cust_fname,mbr.cust_lname,mbr.cust_profile,mbr.cust_gender,mbr.cust_role,blg.*');
		$this->db->join('tbl_members mbr','blg.blog_posted_by=mbr.cust_id','LEFT');
		$this->db->where('blg.'.$fld_bid,$id);
		$query=$this->db->get($table.' blg');
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row();
		}
	}

	public function images_upload() {

		if(!empty($_FILES['img']['name'])){
			$this->load->library('upload');
			$config['upload_path'] = APPPATH.'../uploads/news/';
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

	public function resize_image($source,$width){
		$this->load->library('image_lib');
		list($width, $height, $type, $attr) = getimagesize($source);

		$w = $width; // original image's width
		$h = $height;  // original images's height

		$n_w = 273; // destination image's width
		$n_h = 246; // destination image's height

		$source_ratio = $w / $h;
		$new_ratio = $n_w / $n_h;

		if($source_ratio != $new_ratio){

			$config['image_library'] = 'gd2';
			$config['source_image'] = $source;
			$config['maintain_ratio'] = FALSE;
			if($new_ratio > $source_ratio || (($new_ratio == 1) && ($source_ratio < 1))){
				$config['width'] = $w;
				$config['height'] = round($w/$new_ratio);
				$config['y_axis'] = round(($h - $config['height'])/2);
				$config['x_axis'] = 0;

			} else {

				$config['width'] = round($h * $new_ratio);
				$config['height'] = $h;
				$size_config['x_axis'] = round(($w - $config['width'])/2);
				$size_config['y_axis'] = 0;

			}

			$this->image_lib->initialize($config);
			$this->image_lib->crop();
			$this->image_lib->clear();
		}

		$config['image_library'] = 'gd2';
    		$config['source_image'] = $source;
    		//$config['new_image'] = './uploads/new/resized_image.jpg';
    		$config['maintain_ratio'] = TRUE;
    		$config['width'] = $n_w;
    		$config['height'] = $n_h;

		// $config['image_library'] = 'gd2';
		// $config['source_image'] = $source;
		// $config['maintain_ratio'] = TRUE;
		// $config['width'] = $width;
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
		$this->image_lib->clear();
	}
	public function createThumbnail($source,$destination,$width,$height){

		$this->load->library('image_lib');
		$config['image_library'] = 'gd2';
		$config['source_image'] = $source;
		$config['new_image'] = $destination;
		$config['maintain_ratio'] = FALSE;
		$config['width'] = $width;
		$config['height'] = $height;

		$this->image_lib->initialize($config);
		$this->image_lib->resize();
		$this->image_lib->clear();
	}

	// END OF THE UPLOADING RESIZE COMMENT ATTACHMENT //

    public function save_blog($data,$table){
        $this->db->insert($table , $data);
        return $this->db->insert_id();
	}

    public function update_blog($id,$data,$table){
        $this->db->where('id', $id);
        $query=$this->db->update($table, $data);
        if($query){
			return true;
		}else{
			return false;
		}
	}
	// GET SINGLE BLOG DELETE //
	public function get_single_blog($id,$table){
		$this->db->where("id",$id);
		$query=$this->db->get($table);
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row();
		}
	}

	public function delete_single_blog($id,$table){
	    $this->db->where('id',$id);
	    $query=$this->db->delete($table);
		if($query){
			return true;
		}else{
			return false;
		}
	}

}
