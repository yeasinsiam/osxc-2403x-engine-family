<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
	 
	public function __construct() {
		parent::__construct();
		$this->login = $this->session->userdata('Logged_Admin');
		if(empty($this->login)){
			redirect('/login');
		}
		$this->load->helper("common");
		$this->load->model('Dashboard_model','Dashboard_Model');
		/* ========FOR ADMIN=========== */
		$this->fld_mid="mst_id"; 			
		$this->fld_email="mst_email";	
		$this->fld_password="mst_password";	
		$this->table_master="tbl_master"; 
	}
  
	public function index(){
		$content['subview']='dashboard';
		$this->load->view('layout', $content);
	}

	public function profile(){
		
		$activeMember = $this->loginuser->mst_id;
		if(!empty($activeMember)){
			$content['active_member'] = $this->Dashboard_Model->get_active_member_profile($this->fld_mid,$activeMember,$this->table_master);
			$content['subview']="profile";
			$this->load->view('layout', $content);
		}else{
			$content['subview']="dashboard/badrequest"; 
			$this->load->view('layout', $content);
		}
	}

	public function change_profile_photo(){
		$RequestMethod = $this->input->server('REQUEST_METHOD');
	    if($RequestMethod == "POST") {

			$data = $_POST["image"];
			$image_array_1 = explode(";", $data);
			$image_array_2 = explode(",", $image_array_1[1]);
			$data = base64_decode($image_array_2[1]);
			$imageName = time() . '.png';

			$activeMbr = $this->loginuser;
			$mid = $activeMbr->cust_id; 

		    if($imageName=='') {
				$image_data=$this->input->post('prev_image');
			}else{
				$path=FCPATH . 'uploads/members/';
				if($activeMbr->cust_profile!=''){
					$img_files= $path.$activeMbr->cust_profile;
					if (!unlink($img_files)) {} else { }
				}
				$image_data=$imageName;
				file_put_contents($path.$image_data, $data);
			}

			$data=array(
				'cust_profile'=>$image_data,
				'cust_updated'=>date('Y-m-d H:i:s') 
			);  
			  
			$result = $this->Dashboard_Model->update($this->fld_mid,$mid,$data,$this->table_members);
			if($result){
				$this->session->set_flashdata('msg',array('message' => 'Profile has been changed.','class' => 'success','type'=>'Ok!'));
				echo "changed"; 
			}else{
				$this->session->set_flashdata('msg',array('message' => "Unable to change profile picture.Some error occurred.",'class' => 'danger','type'=>'Oops!'));
				echo "failed";  
			}
		}
	}

	public function edit_profile(){ 
		$RequestMethod = $this->input->server('REQUEST_METHOD');
	    if($RequestMethod == "POST") {  	
		   $mid = $this->loginuser->mst_id;
		   if($_FILES['img']['error']>0) {
					$profile_image=$this->input->post('prev_image');
				} else{ 
					$img_file=FCPATH . 'uploads/members/'.$this->loginuser->mst_picture;
					if (!unlink($img_file)) {} else { }
					$profile_image=$this->Dashboard_Model->images_upload();
				} 
		   	$data=array(
				'mst_fname'=>$this->input->post('mst_fname'),
			   	'mst_lname'=>$this->input->post('mst_lname'),
			   	'mst_phone_no'=>$this->input->post('mst_phone_no'),
			   	'mst_picture'=>$profile_image,			   	
			   	'mst_updated'=>date('Y-m-d H:i:s') 
		   	);  
		     
		   	$result = $this->Dashboard_Model->update($this->fld_mid,$mid,$data,$this->table_master);
		   	if($result){
			   $this->session->set_flashdata('msg',array('message' => 'Profile has been successfully Update.','class' => 'success','type'=>'Ok!'));
			   redirect('dashboard/profile'); 
		   	}else{
			   $this->session->set_flashdata('msg',array('message' => "Unable to Change Password.Some error occurred.",'class' => 'danger','type'=>'Oops!'));
			   redirect('dashboard/profile');  
		   	}
		    
		}				
	}
	
	public function badrequest() { 
	
		$content['subview']="dashboard/badrequest";
		$this->load->view('layout', $content);

	}

	public function change_password() {
		
		$RequestMethod = $this->input->server('REQUEST_METHOD');
		if($RequestMethod == "POST") {
			   
			//$profileData=$this->profileData;

			$mid=$this->loginuser->mst_id;

			$oldPassword=md5($this->input->post('old_password')); 
			$newPassword=$this->input->post('password'); 
			$cPassword=$this->input->post('confirm_password'); 

			if($newPassword==$cPassword){
				$user_password=$this->Dashboard_Model->check_password($this->fld_mid,$mid,$oldPassword,$this->table_master);
			if($user_password){
				
				$data=array('mst_password'=>md5($newPassword)); 
				$result = $this->Dashboard_Model->update_account($this->fld_mid,$mid,$data,$this->table_master);
				if($result){
					$this->session->unset_userdata('Logged_Admin');
					$this->session->set_flashdata('msg',array('message' => 'Password reset Login now.','class' => 'success','type'=>'Ok!'));
					redirect('login');
				}else{
					$this->session->set_flashdata('ch_msg',array('message' => "Unable to Change Password.Some error occurred.",'class' => 'danger','type'=>'Oops!'));
					redirect('dashboard/profile');  
				}
			 }else{
				$this->session->set_flashdata('ch_msg',array('message' => "Old Password doesn't match ",'class' => 'danger','type'=>'Oops!'));
				 redirect('dashboard/profile');  
			 } 
			}else{
				$this->session->set_flashdata('ch_msg',array('message' => "confirm password or new password doesn't match ",'class' => 'danger','type'=>'Oops!'));
				 redirect('dashboard/profile'); 
			}	
		 }
		 // $content['subview']="account/viewChangePassword"; 
		 // $this->load->view('layout', $content);		
		   
	}
	
	public function logout($loginid=null){  
		if($loginid!=''){
			$data=array(
				'mst_last_logout_time'=>date('Y-m-d H:i:s')
			); 
			$result = $this->session->unset_userdata('Logged_Admin');
			$result = $this->Dashboard_Model->update_last_login($this->fld_mid,$loginid,$data,$this->table_master); 
			if($result){ 
				$this->session->set_flashdata('msg', array('message' => 'You have successfully logout.','class' => 'success','type'=>'Ok !'));
				redirect('login');
			}else{
				$this->session->set_flashdata('msg',array('message' => 'Unable to sign out some error occurred ','class' => 'danger','type'=>'Oops!'));
				redirect('login');
			}
		}else{
			$this->session->unset_userdata('Logged_Admin');
			redirect('login');
		} 
		
	}

}
