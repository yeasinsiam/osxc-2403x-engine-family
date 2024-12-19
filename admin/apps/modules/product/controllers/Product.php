<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->login = $this->session->userdata('Logged_Admin');
		if(empty($this->login)){
			redirect('../','refresh');
		}
		/* === FOR BLOG ===*/
		$this->load->model("Product_model","Product");
		$this->load->helper("common");
		/*==== FOR product ====*/
		$this->fld_bid="id";
		$this->fld_bstatus="status";
		$this->table="tbl_product";
		/*==== FOR Category ====*/
		$this->table_category="tbl_category";

    }

    public function index() {
		$content['product']=$this->Product->product_list($this->table);
		$content['subview']="product/product_list";
		$this->load->view('layout', $content);
	}

	public function info($id=null){
		$content['blog_info'] = $this->Blog_Model->get_member_blog_info($this->fld_bid,$id,$this->table);
		if(!empty($content['blog_info'])){
			$content['blog_info'] = $this->Blog_Model->get_member_blog_info($this->fld_bid,$id,$this->table);

			/*-- COUNT BLOG VIEWS --*/
			$blogview = $content['blog_info']->blog_views+1;
			$blogViewArray = array(
				'blog_views' => $blogview
			);
			$content['blogview'] = $this->Blog_Model->update_page_view($this->fld_bid,$id,$blogViewArray,$this->table);
			/*-- END OF THE COUNT BLOG VIEWS --*/

			$content['subview_page']="blog/member_blog_details";
			$this->load->view('layout_pages', $content);
		}else{
			$content['subview_page']="blog/badrequest";
			$this->load->view('layout_pages', $content);
		}
	}

	public function add(){

		$REQUESTMETHOD=$this->input->server('REQUEST_METHOD');
		if($REQUESTMETHOD== "POST"){
			$check = $this->Product->check('name_slug',$this->input->post('name_slug'),$this->table);
			if(empty($check)){
			// echo "<pre>";
			// print_r($this->input->post());die;
			$image=$this->Product->images_upload();
			$createdDate = date('Y-m-d H:i:s');
			$short_desc=html_escape($this->input->post('short_desc',FALSE));
			$desc=html_escape($this->input->post('description',FALSE));
			$data = array(
				'name' => $this->input->post('name'),
				'name_slug' => $this->input->post('name_slug'),
				'category' => $this->input->post('category'),
				'img' => $image,
				'products' => $this->input->post('products'),
				'img_tag' => $this->input->post('img_tag'),
				'short_desc' =>$this->input->post('short_desc'),
				'description' => $this->input->post('description'),
				'homepage' => $this->input->post('homepage'),
				'hot' => $this->input->post('hot'),
				'meta_title' => $this->input->post('meta_title'),
				'meta_desc' => $this->input->post('meta_desc'),
				'meta_keyword' => $this->input->post('meta_keyword'),
				'updated' => date('Y-m-d H:i:s'),
				'created' => date('Y-m-d H:i:s')
			);
			$result = $this->Product->save_blog($data,$this->table);
			if($result){
				$this->session->set_flashdata('msg',array('message' => 'Product has been successfully added.','class' => 'success','type'=>'Ok!'));
				redirect('product/add');
			}else{
				$this->session->set_flashdata('msg',array('message' => 'Unable to Added.Some error occurred.','class' => 'danger','type'=>'Oops!'));
				redirect('product/add');
			}
			}else{
			$this->session->set_flashdata('msg',array('message' => 'Url Name already used !.','class' => 'danger','type'=>'Oops!'));
				redirect('product/add');
		}
		}
		$content['category']=$this->Product->category_list($this->table_category);
       $content['media']=$this->Product->media_list();

		$content['subview']="product/add_product";
		$this->load->view('layout', $content);
	}

	public function edit($id=null){

		 $content['category']=$this->Product->category_list($this->table_category);
		$content['product_info']=$this->Product->get_single_blog($id,$this->table);
		if(!empty($content['product_info'])){
			$REQUESTMETHOD=$this->input->server('REQUEST_METHOD');
			if($REQUESTMETHOD== "POST"){
			$check = $this->Product->check_edit('id',$id,'name_slug',$this->input->post('name_slug'),$this->table);
			if(empty($check)){

				if($_FILES['img']['error']>0) {
					$blog_image=$this->input->post('prev_image');
				} else{
					$img_file=FCPATH . 'uploads/product/'.$content['product_info']->img;
					if (!unlink($img_file)) {} else { }

					$blog_image=$this->Product->images_upload();
				}

			$short_desc=html_escape($this->input->post('short_desc',FALSE));
			$desc=html_escape($this->input->post('description',FALSE));
				$data = array(

                    'products' => $this->input->post('products'),
                    'name' => $this->input->post('name'),
				'name_slug' => $this->input->post('name_slug'),
				'category' => $this->input->post('category'),
				'img' => $blog_image,
				'img_tag' => $this->input->post('img_tag'),
				'short_desc' =>$this->input->post('short_desc'),
				'description' => $this->input->post('description'),
				'homepage' => $this->input->post('homepage'),
				'hot' => $this->input->post('hot'),
				'meta_title' => $this->input->post('meta_title'),
				'meta_desc' => $this->input->post('meta_desc'),
				'meta_keyword' => $this->input->post('meta_keyword'),
				'updated' => date('Y-m-d H:i:s'),
				'created' => date('Y-m-d H:i:s')
			);

				$result = $this->Product->update_blog($id,$data,$this->table);
				if($result){
					$this->session->set_flashdata('msg',array('message' => 'Product has been successfully Update.','class' => 'success','type'=>'Ok!'));
					redirect('product/edit/'.$id);
				}else{
					$this->session->set_flashdata('msg',array('message' => 'Unable to Added.Some error occurred.','class' => 'danger','type'=>'Oops!'));
					redirect('product/edit/'.$id);
				}
				}else{
			$this->session->set_flashdata('msg',array('message' => 'Url Name already used !.','class' => 'danger','type'=>'Oops!'));
				redirect('product/edit/'.$id);
		}

			}

			$content['subview']="product/edit_product";
			$this->load->view('layout', $content);
		}else{
			$content['subview']="product/badrequest";
			$this->load->view('layout', $content);
		}

	}

	public function delete($id=null){
        if($id!==NULL) {

		    $result= $this->Product->delete_single_blog($id,$this->table);
			if($result){
				$this->session->set_flashdata('msg',array('message' => 'Product has been successfully Delete','class' => 'success','type'=>'Ok!'));
				redirect('product');
			}else{
				$this->session->set_flashdata('msg',array('message' => 'Unable to Delete.Some error occurred.','class' => 'danger','type'=>'Oops!'));
				redirect('product');
				}
		} else {
		   $this->session->set_flashdata('msg',array('message' => 'Row cannot delete!','class' => 'danger','type'=>'Oops!'));
		   redirect('product');
	    }
	}

}
