<?php
class Page_model extends MY_Model{


	 public function save($data,$table){
        $this->db->insert($table , $data);
        return $this->db->insert_id();
    }
    public function page_list($id){
		$this->db->select('*');
		$this->db->where('pg_id',$id);
		$query=$this->db->get('tbl_page');
		if($query->num_rows() != 0) return $query->row();
		else return false;
	}
    public function get_newscate($id){
        $this->db->select('*');
        $this->db->where('name_slug',$id);
        $query=$this->db->get('tbl_newscate');
        if($query->num_rows() != 0) return $query->row();
        else return false;
    }

    public function product_list(){
		$this->db->select('id,name,name_slug,img');
		$this->db->order_by('id',"DESC");
		$query=$this->db->get('tbl_product');
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}


    public function products_list(){
        $this->db->select('id,name,name_slug,img,short_desc');
        $this->db->order_by('id',"DESC");
        $this->db->limit(5);
        $this->db->where('products',1);
        $this->db->order_by('id',"DESC");
        $query=$this->db->get('tbl_product');
        if($query->num_rows() != 0) return $query->result();
        else return false;
    }
    public function news_list($parent=null){
        $this->db->select('id,name,name_slug,img,short_desc');
        if($parent){
        $this->db->where('category',$parent);}
        $this->db->limit(20);
        $this->db->order_by('id',"DESC");
        $query=$this->db->get('tbl_news');
        if($query->num_rows() != 0) return $query->result();
        else return false;
    }
    public function news_total($parent=null){
        $this->db->select('id,name,name_slug,img,short_desc');
        if($parent){
            $this->db->where('category',$parent);
        }
        $this->db->limit(20);
        $this->db->order_by('id',"DESC");
        $query=$this->db->get('tbl_news');
        return $query->num_rows();
    }
    public function news_detail($id){
        //$this->db->select('id,name,img');
        $this->db->order_by('id',"DESC");
        $this->db->where('name_slug',$id);
        $query=$this->db->get('tbl_news');
        if($query->num_rows() != 0) return $query->row();
        else return false;
    }
	public function part_detail($id){
		//$this->db->select('id,name,img');
		$this->db->order_by('id',"DESC");
		$this->db->where('name_slug',$id);
		$query=$this->db->get('tbl_part');
		if($query->num_rows() != 0) return $query->row();
		else return false;
	}
	public function product_detail($id){
		//$this->db->select('id,name,img');
		$this->db->order_by('id',"DESC");
		$this->db->where('name_slug',$id);
		$query=$this->db->get('tbl_product');
		if($query->num_rows() != 0) return $query->row();
		else return false;
	}
	public function search_detail($id){
		//$this->db->select('id,name,img');
		$this->db->order_by('id',"DESC");
		$this->db->like('name',$id);
		$query=$this->db->get('tbl_category');
		if($query->num_rows() != 0) return $query->row();
		else return false;
	}

	public function get_category($id){
		//$this->db->select('id,name,img');
		$this->db->order_by('id',"DESC");
		$this->db->where('name_slug',$id);
		$query=$this->db->get('tbl_category');
		if($query->num_rows() != 0) return $query->row();
		else return false;
	}

	public function get_part_category($id){
		//$this->db->select('id,name,img');
		$this->db->order_by('id',"DESC");
		$this->db->where('name_slug',$id);
		$query=$this->db->get('tbl_part_category');
		if($query->num_rows() != 0) return $query->row();
		else return false;
	}


	public function product_category($id){
		$this->db->select('tp.*');
		$this->db->order_by('id',"DESC");
		$this->db->join('tbl_category ct','ct.id=tp.category','LEFT');
		$this->db->where('ct.name_slug',$id);
		$query=$this->db->get('tbl_product tp');
		// echo $this->db->last_query($query);
		// die;
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}

	public function part_category($id){
		$this->db->select('tp.*');
		$this->db->order_by('id',"DESC");
		$this->db->join('tbl_part_category ct','ct.id=tp.category','LEFT');
		$this->db->where('ct.name_slug',$id);
		$query=$this->db->get('tbl_part tp');
		// echo $this->db->last_query($query);
		// die;
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}
    public function part_category_page($id,$page=1){
        $page=$page-1;
        $this->db->select('tp.*');
        $this->db->order_by('tp.id',"DESC");
        $this->db->join('tbl_part_category ct','ct.id=tp.category','LEFT');
        $this->db->where('ct.name_slug',$id);
        $this->db->limit('16',$page*16);
        $query=$this->db->get('tbl_part tp');
        // echo $this->db->last_query($query);
        // die;
        if($query->num_rows() != 0) return $query->result();
        else return false;
    }

    public function part_category_page_nums($id){
        $this->db->select('tp.*');
        $this->db->order_by('tp.id',"DESC");
        $this->db->join('tbl_part_category ct','ct.id=tp.category','LEFT');
        $this->db->where('ct.name_slug',$id);
        $query=$this->db->get('tbl_part tp');
        return $query->num_rows();
    }
   public function get_product_category($category){
		$this->db->select('name,name_slug');
		$this->db->order_by('id',"DESC");
		$this->db->where('category',$category);
		$query=$this->db->get('tbl_product');
		// echo $this->db->last_query($query);
		// die;
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}

	public function get_part_product_category($category){
		$this->db->select('name,name_slug');
		$this->db->order_by('id',"DESC");
		$this->db->where('category',$category);
		$query=$this->db->get('tbl_part');
		// echo $this->db->last_query($query);
		// die;
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}
	public function search_product_category($id){
		$this->db->select('tp.*');
		$this->db->order_by('id',"DESC");
		$this->db->join('tbl_category ct','ct.id=tp.category','LEFT');
		$this->db->like('ct.name',$id);
		$query=$this->db->get('tbl_product tp');
		// echo $this->db->last_query($query);
		// die;
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}
	public function category_list($id){
		$this->db->select('id,name,name_slug,type,img,img_tag');
		$this->db->order_by('name',"ASC");
		$this->db->where('type',$id);
		//$this->db->where('type !=','0');
		$query=$this->db->get('tbl_category');
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}

	public function part_category_list($id){
		$this->db->select('id,name,name_slug,type,img,img_tag');
		$this->db->order_by('name',"ASC");
		$this->db->where('type',$id);
		//$this->db->where('type !=','0');
		$query=$this->db->get('tbl_part_category');
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}
	 public function blog_detail($id,$table){
		$this->db->where('blog_id',$id);
		$this->db->order_by('blog_id',"DESC");
		$query=$this->db->get($table);
		if($query->num_rows() != 0) return $query->row();
		else return false;
	}

	 public function comment_list($id,$table){
		 $this->db->where('blog_id',$id);
		$this->db->order_by('id',"DESC");
		$query=$this->db->get($table);
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}

}
