<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {
	 
	public function __construct() {
		parent::__construct(); 
		$this->login = $this->session->userdata('Logged_Admin');
		if(empty($this->login)){
			redirect('../','refresh');
		}
		/* === FOR BLOG ===*/ 
		$this->load->model("Page_model","Page"); 
		$this->load->helper("common");
		/*==== FOR product ====*/ 
		$this->fld_bid="pg_id";
		$this->fld_bstatus="pg_status";
		$this->table="tbl_page";
		/*==== FOR Category ====*/ 		
		$this->table_category="tbl_category";
		
    }
  
    public function index() {
		$content['page']=$this->Page->page_list($this->table); 
		$content['subview']="page/page_list";
		$this->load->view('layout', $content);		  
	}

	
	
	public function edit($id=null){
		
		 
		$content['page_info']=$this->Page->get_single_page($id,$this->table);
		if(!empty($content['page_info'])){
			$REQUESTMETHOD=$this->input->server('REQUEST_METHOD'); 
			if($REQUESTMETHOD== "POST"){ 
				
				$data = array(
				'pg_title' => $this->input->post('pg_title'),
				'pg_slug' => $this->input->post('pg_slug'),
				'content1' => $this->input->post('content1'),
				'meta_title' => $this->input->post('meta_title'),
				'meta_desc' => $this->input->post('meta_desc'),
				'meta_keyword' => $this->input->post('meta_keyword'), 							
				'pg_updated' => date('Y-m-d H:i:s')			
			);
				
				$result = $this->Page->update_page($id,$data,$this->table);
				if($result){
					$this->session->set_flashdata('msg',array('message' => 'Page has been successfully Update.','class' => 'success','type'=>'Ok!'));
					redirect('page/edit/'.$id);
				}else{
					$this->session->set_flashdata('msg',array('message' => 'Unable to Added.Some error occurred.','class' => 'danger','type'=>'Oops!'));
					redirect('page/edit/'.$id);
				}
				
				
			}  

			$content['subview']="page/edit_page"; 
			$this->load->view('layout', $content);
		}else{
			$content['subview']="page/badrequest";
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
