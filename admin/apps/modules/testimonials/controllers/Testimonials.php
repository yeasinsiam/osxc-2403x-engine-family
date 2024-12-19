<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonials extends MY_Controller {
	 
	public function __construct() {
		parent::__construct(); 
		$this->login = $this->session->userdata('Logged_Admin');
		if(empty($this->login)){
			redirect('../','refresh');
		}
		/* === FOR BLOG ===*/ 
		$this->load->model("Testimonials_model","Testimonials"); 
		$this->load->helper("common");
		/*==== FOR product ====*/ 
		$this->fld_bid="id";
		$this->fld_bstatus="status";
		$this->table="tbl_testimonials";		
		
    }
  
    public function index() {
		$content['testimonials']=$this->Testimonials->testimonials_list($this->table); 
		$content['subview']="testimonials/testimonials_list";
		$this->load->view('layout', $content);		  
	}

	public function message() {
		$content['message']=$this->Testimonials->testimonials_list('tbl_enquiry'); 
		$content['subview']="testimonials/message";
		$this->load->view('layout', $content);		  
	}

	 
	public function add(){

		$REQUESTMETHOD=$this->input->server('REQUEST_METHOD'); 
		if($REQUESTMETHOD== "POST"){ 
			// echo "<pre>";
			// print_r($this->input->post());die;
			$image=$this->Testimonials->images_upload(); 
			$createdDate = date('Y-m-d H:i:s');
			
			$data = array(
				'name' => $this->input->post('name'),
				'title' => $this->input->post('title'),
				'profile' => $this->input->post('profile'), 
				'img' => $image,				
				'location' => $this->input->post('location',true),				
				'desc' => $this->input->post('desc',true),
				'status' => '0',				
				'created' => date('Y-m-d H:i:s')
			);
			$result = $this->Testimonials->save_blog($data,$this->table);
			if($result){
				$this->session->set_flashdata('msg',array('message' => 'Testimonials has been successfully added.','class' => 'success','type'=>'Ok!'));
				redirect('testimonials/add');
			}else{
				$this->session->set_flashdata('msg',array('message' => 'Unable to Added.Some error occurred.','class' => 'danger','type'=>'Oops!'));
				redirect('testimonials/add');
			} 
		}  
		
		$content['subview']="testimonials/add_testimonials"; 
		$this->load->view('layout', $content);	 
	}
	
	public function edit($id=null){
		
		
		$content['test_info']=$this->Testimonials->get_single_blog($id,$this->table);
		if(!empty($content['test_info'])){
			$REQUESTMETHOD=$this->input->server('REQUEST_METHOD'); 
			if($REQUESTMETHOD== "POST"){  
					
				if($_FILES['img']['error']>0) {
					$blog_image=$this->input->post('prev_image');
				} else{ 
					$img_file=FCPATH . 'uploads/testimonials/'.$content['test_info']->img;
					if (!unlink($img_file)) {} else { }		

					$blog_image=$this->Testimonials->images_upload();
				} 
					
				$data = array(
				'name' => $this->input->post('name'),
				'title' => $this->input->post('title'),
				'profile' => $this->input->post('profile'), 
				'img' => $blog_image,				
				'location' => $this->input->post('location',true),				
				'desc' => $this->input->post('desc',true)		
				
			);
				
				$result = $this->Testimonials->update_blog($id,$data,$this->table);
				if($result){
					$this->session->set_flashdata('msg',array('message' => 'Testimonials has been successfully Update.','class' => 'success','type'=>'Ok!'));
					redirect('testimonials/edit/'.$id);
				}else{
					$this->session->set_flashdata('msg',array('message' => 'Unable to Added.Some error occurred.','class' => 'danger','type'=>'Oops!'));
					redirect('testimonials/edit/'.$id);
				}
				
			}  
			$content['subview']="testimonials/edit_testimonials"; 
			$this->load->view('layout', $content);
		}else{
			$content['subview']="testimonials/badrequest";
			$this->load->view('layout', $content);
		} 
			 
	}
	
	public function delete($id=null){ 
        if($id!==NULL) {
						
		    $result= $this->Testimonials->delete_single_blog($id,$this->table);
			if($result){
				$this->session->set_flashdata('msg',array('message' => 'Testimonials has been successfully Delete','class' => 'success','type'=>'Ok!'));
				redirect('testimonials');
			}else{
				$this->session->set_flashdata('msg',array('message' => 'Unable to Delete.Some error occurred.','class' => 'danger','type'=>'Oops!'));
				redirect('testimonials');
				}
		} else {
		   $this->session->set_flashdata('msg',array('message' => 'Row cannot delete!','class' => 'danger','type'=>'Oops!'));
		   redirect('testimonials');
	    }	    
	}

	public function send(){ 		
		$email = $this->input->post('email');					
		if(!empty($email)){		
		 $subject = "Reply msg ".$this->input->post('name');
		 $message = "<h4>Reply msg ".$this->input->post('name')."</h4>";		 
		 $message.= "<b>Reply Message :</b> ".$this->input->post('reply_msg',true)."<br>";
		 $to=$email;
		 $email   ='info@engine-family.com';		  
		 $headers  = 'MIME-Version: 1.0' . "\r\n";
		 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		 $headers .= 'To: ' .$to. "\r\n";
		 $headers .= 'From: Engine Family ' .$email. "\r\n";
		 $retval = @mail($to, $subject, $message, $headers);
		 if($retval==true){
	     $this->session->set_flashdata('msg',array('message' => 'Your reply has been sent successfull ! ','class' => 'success')); 
	     redirect('testimonials/message');	    
        }else{
        	$this->session->set_flashdata('msg',array('message' => 'Your reply has been not sent','class' => 'danger'));
        	redirect('testimonials/message');
        }
       }else{
       	$this->session->set_flashdata('msg',array('message' => 'Email Address Inavlid !','class' => 'danger'));
     redirect('testimonials/message');
       }
		
	}
	public function msg_delete($id=null){ 
        if($id!==NULL) {
						
		    $result= $this->Testimonials->delete_single_blog($id,'tbl_enquiry');
			if($result){
				$this->session->set_flashdata('msg',array('message' => 'Message has been successfully Delete','class' => 'success','type'=>'Ok!'));
				redirect('testimonials/message');
			}else{
				$this->session->set_flashdata('msg',array('message' => 'Unable to Delete.Some error occurred.','class' => 'danger','type'=>'Oops!'));
				redirect('testimonials/message');
				}
		} else {
		   $this->session->set_flashdata('msg',array('message' => 'Row cannot delete!','class' => 'danger','type'=>'Oops!'));
		   redirect('testimonials/message');
	    }	    
	}
	 
}
