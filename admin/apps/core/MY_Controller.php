<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* load the MX_Router class */
require APPPATH . "third_party/MX/Controller.php";

class MY_Controller extends MX_Controller
{

	function __construct()
	{

		parent::__construct();
		$this->_hmvc_fixes();
		date_default_timezone_set("Asia/Dubai");
		$this->load->model("MY_Model", 'MY_Model');
		/* ========FOR MEMBERS =========== */
		$this->fld_mid = "mst_id";
		$this->fld_email = "mst_email";
		$this->tbl_master = "tbl_master";
		/* ========FOR WEBSITE =========== */
		$this->fld_wid = "web_id";
		$this->table_website = "tbl_website_info";
		/*==== FOR BLOG ====*/
		$this->fld_bid = "blog_id";
		$this->fld_bstatus = "blog_status";
		$this->table = "tbl_blog";
		/*=== END OF THE BLOG ===*/

		$loginDetail = $this->session->userdata('Logged_Admin');


		if (!empty($loginDetail)) {

			$adminDetails['loginuser'] = $this->MY_Model->profiledata($this->fld_email, $loginDetail->mst_email, $this->tbl_master);
			// 	echo"<pre>";
			// print_r($loginDetail->mst_email);
			// die;
			$this->loginuser = $adminDetails['loginuser'];
			$activeMember = $this->loginuser->mst_id;

			// $content['total_blog']=$this->MY_Model->get_total_blogs($this->table);
			// $content['active_blog'] = $this->MY_Model->get_active_blogs($this->fld_bstatus,$this->table);
			// $content['inactive_blog'] = $this->MY_Model->get_inactive_blogs($this->fld_bstatus,$this->table);

			// $count=array(
			// 	'total'=>$content['total_blog'],
			// 	'active'=>$content['active_blog'],
			// 	'inactive' =>$content['inactive_blog']
			// );
			// $this->AllActivity=$count;

			$Websitedata = $this->MY_Model->get_list($this->fld_wid, $this->table_website);
			$this->website = $Websitedata[0];
		} else {
			$Websitedata = $this->MY_Model->get_list($this->fld_wid, $this->table_website);
			$Website = $Websitedata[0];
			//print_r($Website);
			$website_info = new stdClass();
			$website_info->web_company_name = $Website->web_company_name;
			$website_info->web_company_logo = $Website->web_company_logo;
			$website_info->web_favicon_icon = $Website->web_favicon_icon;
			$website_info->web_meta_title = $Website->web_meta_title;
			$website_info->web_meta_keyword = $Website->web_meta_keyword;
			$website_info->web_meta_description = $Website->web_meta_description;
			$website_info->web_email_protocal = $Website->web_email_protocal;
			$website_info->web_from_email_id = $Website->web_from_email_id;
			$website_info->web_email_connection_type = $Website->web_email_connection_type;
			$website_info->web_smtp_host_name = $Website->web_smtp_host_name;
			$website_info->web_smtp_port = $Website->web_smtp_port;
			$website_info->web_email_id = $Website->web_email_id;
			$website_info->web_email_password = $Website->web_email_password;
			$this->website = $website_info;
		}
	}

	function _hmvc_fixes()
	{
		//fix callback form_validation		
		//https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc
		$this->load->library('form_validation');
		$this->form_validation->CI = &$this;
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
