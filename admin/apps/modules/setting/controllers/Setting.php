<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends MY_Controller {
	 
	public function __construct() {
		parent::__construct(); 
		$this->login = $this->session->userdata('Logged_Admin');
		if(empty($this->login)){
			redirect('/','refresh');
		} 
		$this->load->model("Setting_Model"); 
		$this->load->helper("common");
		/* ========FOR PINCODE=========== */
		$this->fld_piid="pin_id";	
		$this->fld_picode="pin_pincode";				
		$this->table_picode="tbl_pincode";	
		/* ========FOR WEBSITE SETTING=========== */
		$this->fld_wid="web_id";	 			
		$this->table_website="tbl_website_info";			
		$this->table_setting="tbl_setting";
	}

	public function index(){
		
		 $content['info']=$this->Setting_Model->setting_list($this->table_setting); 
		
		// echo"<pre>";
		// print_r($content['info']);
		// die;
			$REQUESTMETHOD=$this->input->server('REQUEST_METHOD'); 
			if($REQUESTMETHOD== "POST"){  
					
				
					
				$data =$_POST;
				
				$result = $this->Setting_Model->setting_update($data,$this->table_setting);
				if($result){
					$this->session->set_flashdata('msg',array('message' => 'Setting has been successfully Update.','class' => 'success','type'=>'Ok!'));
					redirect('setting');
				}else{
					$this->session->set_flashdata('msg',array('message' => 'Unable to Added.Some error occurred.','class' => 'danger','type'=>'Oops!'));
					redirect('setting');
				}
				
			}  
			$content['subview']="setting/setting"; 
			$this->load->view('layout', $content);
		
			 
	}
	
	
	/*===========================START WEBSITE SETTING  ======================================= */
	
	function website(){
		$RequestMethod = $this->input->server('REQUEST_METHOD');
	    if($RequestMethod == "POST") {  
			if(isset($_POST['web_company_logo'])&& isset($_POST['web_favicon_icon'])){
				/* =======For Logo Uplode========= */

				if($_FILES['web_company_logo']['error']>0) {
					$image_name=$this->input->post('web_company_logo');
				} else{ 
					$path=FCPATH . 'uploads/website/logo';
					$image_name='web_company_logo';
					$img_files= $path.'/'.$this->website->web_company_logo;  
					if (!unlink($img_files)) {} else { }
					$logo=$this->Setting_Model->images_upload($image_name,$path);
					$_POST['web_company_logo']= $logo;
				}
				/* =======For Favicon Uplode========= */

				if($_FILES['web_favicon_icon']['error']>0) {
					$image_name=$this->input->post('web_favicon_icon');
				} else{ 
					$path=FCPATH . 'uploads/website/favicon';
					$image_name='web_favicon_icon';
					 $img_files= $path.'/'.$this->website->web_favicon_icon;  
					if (!unlink($img_files)) {} else { }
					$favicon=$this->Setting_Model->images_upload($image_name,$path);
					$_POST['web_favicon_icon']= $favicon;
				}
			}
			
			$data=$_POST;  
			$result = $this->Setting_Model->update('web_id',$this->website->web_id,$data,$this->table_website); 
			if($result){
				$this->session->set_flashdata('msg',array('message' => 'Website Data has been successfully Update.','class' => 'success','type'=>'Ok!'));
				redirect('setting/website'); 
			}else{
				$this->session->set_flashdata('msg',array('message' => "Unable to Change website setting .Some error occurred.",'class' => 'danger','type'=>'Oops!'));
				redirect('setting/website');  
			}
		    
		} 
		$content['subview']="setting/website-setting/website_setting";
		$this->load->view('layout', $content);
	}
	
}
