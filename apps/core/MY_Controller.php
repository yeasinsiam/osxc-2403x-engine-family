<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

/* load the MX_Router class */
require APPPATH . "third_party/MX/Controller.php";

class MY_Controller extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->add_security_headers();
		$this->_hmvc_fixes();
		date_default_timezone_set("Asia/Calcutta");
		$this->load->model("MY_Model");
		/* ========FOR MEMBERS =========== */
		$this->fld_mid = "cust_id";
		$this->fld_email = "cust_email";
		$this->tbl_members = "tbl_members";
		/* ========FOR WEBSITE =========== */
		$this->fld_wid = "id";
		$this->table_website = "tbl_setting";
		/* ========FOR PRODUCT=========== */
		$this->fld_id = "act_id";
		$this->table_package_activate = "tbl_package_activate";
		/*==== FOR BLOG ACTIVITIES ====*/


		$loginDetail = $this->session->userdata('Logged_Users');
		if (!empty($loginDetail)) {

			$data->adminDetails['loginuser'] = $this->MY_Model->profiledata($this->fld_email, $loginDetail->cust_email, $this->tbl_members);
			$this->loginuser = $data->adminDetails['loginuser'];
			$activeMember = $this->loginuser->cust_id;

			//$content['pending_blogs']=$this->MY_Model->get_blog_pending_list($this->fld_bid,$this->fld_bstatus,$this->table_blog);
			//$content['online_offline'] = $this->MY_Model->get_online_offline_members_list($this->fld_mid,$activeMember,$this->tbl_members);
			// $content['log_activities'] = $this->MY_Model->get_log_activities($this->tbl_activities);
			//$content['crnt_competition'] = $this->MY_Model->get_current_competition($this->cmp_id,$this->cmp_start,$currentStartDate,$this->cmp_end,$currentEndDate,$this->tbl_competitions); // FOR CURRENT COMPETITION

			//   $count=array(
			// 	'pending'=>$content['pending_blogs'],
			// 	//'online_offline'=>$content['online_offline'],
			// 	'logs' =>$content['log_activities'],
			// 	'competition' => $content['crnt_competition']
			//   );
			//   $this->AllActivity=$count;
			// $package_expired=$this->MY_Model->get_package_expired($this->fld_id,$this->table_package_activate);
			$package_activate = $this->MY_Model->get_package_activate($this->fld_id, $this->table_package_activate);


			$Websitedata = $this->MY_Model->get_list($this->fld_wid, $this->table_website);
			$this->website = $Websitedata[0];
		} else {
			$Websitedata = $this->MY_Model->get_list($this->fld_wid, $this->table_website);
			$this->website = $Websitedata[0];
		}
	}

	function _hmvc_fixes()
	{
		//fix callback form_validation		
		//https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc
		$this->load->library('form_validation');
		$this->form_validation->CI = &$this;
	}

	function add_security_headers()
	{
		header('X-Frame-Options: DENY');

		header("Content-Security-Policy: 
				default-src 'self'; 
				script-src 'self' 'unsafe-inline' https://static.licdn.com https://www.linkedin.com; 
				style-src 'self' 'unsafe-inline' https://static.licdn.com; 
				img-src 'self' https://static.licdn.com https://media.licdn.com data:; 
				font-src 'self' https://static.licdn.com; 
				connect-src 'self' https://www.linkedin.com; 
				frame-ancestors 'none'; 
				object-src 'none'; 
				base-uri 'self'; 
				frame-src 'none';");
		// header("Content-Security-Policy: frame-ancestors 'none'; default-src 'self'; script-src 'self'; object-src 'none'; base-uri 'self'; frame-src 'none';");
		header('X-Content-Type-Options: nosniff');
		header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */