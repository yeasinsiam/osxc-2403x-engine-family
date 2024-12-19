<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
	 
	public function __construct() {
			parent::__construct(); 
			$this->login = $this->session->userdata('Logged_Admin');
			if(empty($this->login)){
				//redirect('login','refresh');
			}
			$this->load->library("security");			
			$this->load->helper("common");		
			$this->load->library('phpmailer_lib');			
					
            $this->load->model("Login_model", "Login_Model");	
			/* ========FOR MASTER TABEL=========== */
			$this->fld_mid="mst_id"; 			
            $this->fld_email="mst_email";	
            $this->fld_password="mst_password";	
            $this->table_master="tbl_master"; 
			
    }
  
    public function index() {	

	    if(($this->session->userdata('Logged_Admin')!==NULL)){
			redirect('dashboard');
		}else{
			$this->load->view('viewLogin');	
		}

	}

	public function verify(){

		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		/* Checking Credentials */
		$data = $this->Login_Model->login($this->fld_email,$email,$this->fld_password,$password,$this->table_master);
		/* Checking Credentials End */
		if(!empty($data)){
			if($data->mst_status==0){
				if($data->mst_role==0){
					$loginid=$data->mst_id;
					/* ==================MANAGE LAST LOGIN DATE TIME =================== */ 
					$activity=array(
						'mst_last_login_time'=>date('Y-m-d H:i:s'),
						'mst_login_ip' => $_SERVER['REMOTE_ADDR']
					);  
					$this->Login_Model->update_last_login($this->fld_mid,$loginid,$activity,$this->table_master);   
				   /* ================END OF THE LAST LOGIN DATE TIME=================== */ 
	
					$this->session->set_userdata('Logged_Admin',$data);
					$this->session->set_flashdata('msg', array('message' => 'You have successfully logged in.','class' => 'success','type'=>'Congratulation !'));
					redirect('dashboard');
				}else{
					$this->session->set_flashdata('msg', array('message' => 'Invalid Email Id and Password.','class' => 'danger','type'=>'Oops!')); 
					redirect('login');
				}
			}
		}else {
			$this->session->set_flashdata('msg', array('message' => 'Please Enter Valid Email and Password.','class' => 'danger','type'=>'Oops!')); 
			redirect('login');
		}
		
		
	}

	public function forgot_password(){
		$RequestMethod=$this->input->server("REQUEST_METHOD");
		if($RequestMethod == "POST"){
			$user_email=$this->Login_Model->check_exist('mst_email',$this->input->post('email') ,$this->table_master);
			if($user_email){
				// PHPMailer object
				$mail = $this->phpmailer_lib->load();
				// SMTP Configuration
				$mail->isSMTP();
				$mail->CharSet = 'UTF-8';
				//$mail->SMTPDebug = 3; /* Debug Mode */
				$mail->Host     	= $this->website->web_smtp_host_name; /* smtp.zoho.in OR smtp.gmail.com*/
				$mail->SMTPAuth 	= true;
				$mail->Username 	= $this->website->web_email_id;
				$mail->Password 	= $this->website->web_email_password;
				if($web_email_connection_type=='ssl' || $web_email_connection_type=='tsl'){
					$mail->SMTPSecure 	= $this->website->web_email_connection_type; /* SSL OR TLS */
				}
				$mail->Port     	= $this->website->web_smtp_port; /* SMTP POST SSL-465 OR TLS-587 */
				$mail->setFrom($this->website->web_from_email_id, $this->website->web_company_name);
				$mail->addReplyTo($this->website->web_from_email_id, $this->website->web_company_name);

				/*===============Start email send===========*/
				$mail->Subject ="Password Recovery Mail ::".$this->website->web_company_name;
				$datasend['details']=$user_email; 
				$user_email->mst_password=rand(10,1000000);
				// Set email format to HTML
				$mail->isHTML(true);
				$mail->addAddress($user_email->mst_email);
				$toemail = $user_email->mst_email;
				$mailContent = $this->load->view('login/email/forgot_password',$datasend,true);
				$mail->Body = $mailContent;  
				/*================End Email send ===========*/

				$data=array( 
					"mst_password"=> md5($user_email->mst_password),
					"mst_updated" => date('Y-m-d H:i:s')
				);
				
				$data=$this->Login_Model->update_account('mst_email',$toemail,$data,$this->table_master); 
				if(!$mail->send()){
					$this->session->set_flashdata('msg', array('message' => 'Something went wrong','class' => 'danger','type'=>'Oops !'));
					redirect('login/forgot_password');
				}else{
					$this->session->set_flashdata('msg', array('message' => 'Password send on your email address.','class' => 'success','type'=>'Ok!'));
					redirect('login/forgot_password');
				}	
			}else{
				$this->session->set_flashdata('msg', array('message' => 'email address not found!.','class' => 'danger','type'=>'Ok!'));
				redirect('login/forgot_password');
			} 
		}
		$this->load->view('forgotPassword');
	}
	
	public function logout()
	{  
        $activity=array('mst_last_logout_time'=>date('Y-m-d H:i:s')); 
		$this->session->unset_userdata('Logged_Admin');
		$result = $this->Login_Model->update_last_login($this->fld_mid,$this->login->mst_email,$activity,$this->table_master); 
		 if($result){ 
			 $this->session->set_flashdata('msg', array('message' => 'You have successfully logout.','class' => 'success','type'=>'Ok !'));
		     redirect('login');
		 }else{
			 $this->session->set_flashdata('msg',array('message' => 'Unable to sign out some error occurred ','class' => 'danger','type'=>'Oops!'));
			redirect('login');
		 } 
	}
	 
}
