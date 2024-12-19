<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends MY_Controller {
	 
	public function __construct() {
		parent::__construct(); 
		$this->login = $this->session->userdata('Logged_Admin');
		if(empty($this->login)){
			redirect('../','refresh');
		}
		/* === FOR BLOG ===*/ 
		$this->load->model("Media_model","Media"); 
		$this->load->helper("common");
		/*==== FOR product ====*/ 
		$this->fld_bid="id";
		$this->fld_bstatus="status";
		$this->table="tbl_media";		
		
    }
  
    public function index() {
		$content['media']=$this->Media->media_list($this->table); 
		$content['subview']="media/media_list";
		$this->load->view('layout', $content);		  
	}

	
	public function add(){

		$REQUESTMETHOD=$this->input->server('REQUEST_METHOD'); 
		if($REQUESTMETHOD== "POST"){ 
			// echo "<pre>";
			// print_r($this->input->post());die;
			$image=$this->Media->images_upload(); 
			$createdDate = date('Y-m-d H:i:s');
			
			$data = array(
				'img' => $image,
				'created' => $createdDate
			);
			$result = $this->Media->save_blog($data,$this->table);
			if($result){
				$this->session->set_flashdata('msg',array('message' => 'Media has been successfully added.','class' => 'success','type'=>'Ok!'));
				redirect('media');
			}else{
				$this->session->set_flashdata('msg',array('message' => 'Unable to Added.Some error occurred.','class' => 'danger','type'=>'Oops!'));
				redirect('media');
			} 
		}  
		
		$content['subview']="media/add_media"; 
		$this->load->view('layout', $content);	 
	}
	
	public function edit($id=null){	
		 
		$content['slider_info']=$this->Slider->get_single_blog($id,$this->table);
		if(!empty($content['slider_info'])){
			$REQUESTMETHOD=$this->input->server('REQUEST_METHOD'); 
			if($REQUESTMETHOD== "POST"){  
					
				if($_FILES['img']['error']>0) {
					$image=$this->input->post('prev_image');
				} else{ 
					$img_file=FCPATH . 'uploads/slider/'.$content['slider_info']->img;
					if (!unlink($img_file)) {} else { }	

					$image=$this->Slider->images_upload();
				} 
					
				$data = array(
				'content1' => $this->input->post('content1'),
				'content2' => $this->input->post('content2'), 
				'img' => $image
			);
				
				$result = $this->Slider->update_blog($id,$data,$this->table);
				if($result){
					$this->session->set_flashdata('msg',array('message' => 'Slider has been successfully Update.','class' => 'success','type'=>'Ok!'));
					redirect('slider/edit/'.$id);
				}else{
					$this->session->set_flashdata('msg',array('message' => 'Unable to Added.Some error occurred.','class' => 'danger','type'=>'Oops!'));
					redirect('slider/edit/'.$id);
				}
				
			}  
			$content['subview']="slider/edit_slider"; 
			$this->load->view('layout', $content);
		}else{
			$content['subview']="slider/badrequest";
			$this->load->view('layout', $content);
		} 
			 
	}
	
	public function delete($id=null){ 
        if($id!==NULL) {
						
		    $result= $this->Media->delete_single_blog($id,$this->table);
			if($result){
				$this->session->set_flashdata('msg',array('message' => 'Media has been successfully Delete','class' => 'success','type'=>'Ok!'));
				redirect('media');
			}else{
				$this->session->set_flashdata('msg',array('message' => 'Unable to Delete.Some error occurred.','class' => 'danger','type'=>'Oops!'));
				redirect('media');
				}
		} else {
		   $this->session->set_flashdata('msg',array('message' => 'Row cannot delete!','class' => 'danger','type'=>'Oops!'));
		   redirect('media');
	    }	    
	}
	 
}
