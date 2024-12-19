<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pcategory extends MY_Controller {
	 
	public function __construct() {
		parent::__construct(); 
		$this->login = $this->session->userdata('Logged_Admin');
		if(empty($this->login)){
			redirect('../','refresh');
		}
		/* === FOR BLOG ===*/ 
		$this->load->model("Pcategory_model","Category"); 
		$this->load->helper("common");
		/*==== FOR EVENTS ====*/ 
		$this->fld_id="id";
		$this->fld_name="name";
		$this->category="tbl_part_category";
		
    }
  
    public function index() {    	
		$content['category_list']=$this->Category->get_category_list($this->category); 
		$content['subview']="pcategory/category_list";
		$this->load->view('layout', $content);		  
	}

 public function edit() {
 	$content['category']=$this->Category->get_category_list($this->category); 
    	$id=$this->uri->segment(3);
    	$content['cate_info']=$this->Category->get_single($id,$this->category);
		$content['category_list']=$this->Category->get_category_list($this->category); 
		$REQUESTMETHOD=$this->input->server('REQUEST_METHOD'); 
			if($REQUESTMETHOD== "POST"){  
				$check = $this->Category->check_edit('id',$id,'name_slug',$this->input->post('name_slug'),$this->category);
			if(empty($check)){
					
				if($_FILES['img']['error']>0) {
					$image=$this->input->post('prev_img');
				} else{ 
					$img_file=FCPATH . 'uploads/category/'.$content['cate_info']->img;
					if (!unlink($img_file)) {} else { }
					$image=$this->Category->images_upload();
				} 


             $short_desc=html_escape($this->input->post('short_desc',FALSE));
			$desc=html_escape($this->input->post('desc',FALSE));
				$data = array(
					'type' => $this->input->post('type'),
				'name' => $this->input->post('name'), 
				'name_slug' =>$this->input->post('name_slug'),
				'title' => $this->input->post('title'), 
				//'banner_desc' => $this->input->post('banner_desc',true),
				'short_desc' => $this->input->post('short_desc'),
				'desc' => $this->input->post('desc'),
				'img' => $image,
				'img_tag' => $this->input->post('img_tag'),
				'meta_title' => $this->input->post('meta_title'),
				'meta_desc' => $this->input->post('meta_desc'),
				'meta_keyword' => $this->input->post('meta_keyword'),		
				
				); 
				
				$result = $this->Category->update($id,$data,$this->category);
				if($result){
					$this->session->set_flashdata('msg',array('message' => 'Part Category has been successfully Update.','class' => 'success','type'=>'Ok!'));
					redirect('pcategory/edit/'.$id);
				}else{
					$this->session->set_flashdata('msg',array('message' => 'Unable to Added.Some error occurred.','class' => 'danger','type'=>'Oops!'));
					redirect('pcategory/edit/'.$id);
				}
				}else{
			$this->session->set_flashdata('msg',array('message' => 'Url Name already used !.','class' => 'danger','type'=>'Oops!'));
				redirect('pcategory/edit/'.$id);
		}
				
			}
		$content['subview']="pcategory/edit_category";
		$this->load->view('layout', $content);		  
	}
	
	
 
 
	public function add(){

$content['category']=$this->Category->get_category_list($this->category); 
		$REQUESTMETHOD=$this->input->server('REQUEST_METHOD'); 
		if($REQUESTMETHOD=="POST"){
		$check = $this->Category->check('name_slug',$this->input->post('name_slug'),$this->category);
			if(empty($check)){			
			$image=$this->Category->images_upload(); 
			$short_desc=html_escape($this->input->post('short_desc',FALSE));
			$desc=html_escape($this->input->post('desc',FALSE));			
			$data = array(
                 'type' => $this->input->post('type'),
				'name' => $this->input->post('name'), 
				'name_slug' =>$this->input->post('name_slug'),
				'title' => $this->input->post('title'),
				//'banner_desc' => $this->input->post('banner_desc',true),
				'short_desc' => $this->input->post('short_desc'),
				'desc' => $this->input->post('desc'),
				'img' => $image,
				'img_tag' => $this->input->post('img_tag'),
				'meta_title' => $this->input->post('meta_title'),
				'meta_desc' => $this->input->post('meta_desc'),
				'meta_keyword' => $this->input->post('meta_keyword'),				
				'created' => date('Y-m-d H:i:s')
			);
			$result = $this->Category->save_skill($data,$this->category);
			if($result){
				$this->session->set_flashdata('msg',array('message' => 'Part category has been successfully added.','class' => 'success','type'=>'Ok!'));
				redirect('pcategory/add');
			}else{
				$this->session->set_flashdata('msg',array('message' => 'Unable to Added.Some error occurred.','class' => 'danger','type'=>'Oops!'));
				redirect('pcategory/add');
			} 
		}else{
			$this->session->set_flashdata('msg',array('message' => 'Url Name already used !.','class' => 'danger','type'=>'Oops!'));
				redirect('pcategory/add');
		}
		}  
		$content['subview']="pcategory/add_category";
		$this->load->view('layout', $content);
			 
	}

	
	
	public function delete($id=null){ 
        if($id!==NULL) {			
		    $result= $this->Category->delete_single_package($id,$this->category);
			if($result){
				$this->session->set_flashdata('msg2',array('message' => 'Part Category has been successfully Delete','class' => 'success','type'=>'Ok!'));
				redirect('pcategory');
			}else{
				$this->session->set_flashdata('msg2',array('message' => 'Unable to Delete.Some error occurred.','class' => 'danger','type'=>'Oops!'));
				redirect('pcategory');
				}
		} else {
		   $this->session->set_flashdata('msg2',array('message' => 'Row cannot delete!','class' => 'danger','type'=>'Oops!'));
		   redirect('pcategory');
	    }	    
	}
	public function img()
	{
		if ($_FILES['file']['name']) {
            if (!$_FILES['file']['error']) {
                $name = md5(rand(100, 200));
                $ext = explode('.', $_FILES['file']['name']);
                $filename = $name . '.' . $ext[1];
                $destination = APPPATH.'../uploads/img/' . $filename; //change this directory
                $location = $_FILES["file"]["tmp_name"];
                move_uploaded_file($location, $destination);
                echo base_url('uploads/img/'). $filename;//change this URL
            }
            else
            {
              echo  $message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['file']['error'];
            }
        }
	}

	 
}
