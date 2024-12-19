<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/*! Common Helper
	* ================
	* Common Helper application file for All Common function .
	* This fileshould be included in all pages.
	* @Author  :  Rinku Vishwakarma
	* @Created :  27 Feb 2019
	*/

	function base64url_encode($data) {
		return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
	}

	function base64url_decode($data) {
		return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
	}
	function slug($string){
      $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
     return strtolower($slug);
     }

	function date_formate($date){
		return date_format(date_create($date),'d-M-Y ,h:i:s A');
	}


	function getcount($id){
		$ci=get_instance();
		$ci->db->select('id');
		$ci->db->where('type', $id);
        $query = $ci->db->get('tbl_category');
		if($query->num_rows() ==''){
			return '0';
		}else{
			return $query->num_rows();
		}
	}

	function category($id){
		$ci=get_instance();
		$ci->db->select('name');
		$ci->db->where('id', $id);
        $query = $ci->db->get('tbl_category');
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row()->name;
		}
	}
    function pcategory($id){
        $ci=get_instance();
        $ci->db->select('name');
        $ci->db->where('id', $id);
        $query = $ci->db->get('tbl_part_category');
        if($query->num_rows() ==''){
            return false;
        }else{
            return $query->row()->name;
        }
    }

	function country_id($id){
		$ci=get_instance();
		$ci->db->select('country_id');
		$ci->db->where('id', $id);
        $query = $ci->db->get('tbl_states');
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row()->country_id;
		}
	}

	/*--- For Email Send Start ---*/
	function email_send($to,$subject,$msg){
		$ci = get_instance();
		$ci->db->limit(1);
		$query=$ci->db->get('tbl_website_info');
		if($query->num_rows()== 1){
			$website= $query->row();
		}
		$email_protocal=$website->web_email_protocal;
		if($email_protocal=='SMTP Email'){
			$config['protocol'] = "smtp";
			$config['smtp_host'] = $website->web_smtp_host_name;
			$config['smtp_port'] = $website->web_smtp_port;
			$config['smtp_user'] = $website->web_email_id;
			$config['smtp_pass'] = $website->web_email_password;
			$config['charset'] = "utf-8";
			$config['mailtype'] = "html";
			$config['newline'] = "\r\n";
			$ci->load->library('email');
			$ci->email->initialize($config);
			$ci->email->from($website->web_from_email_id, $website->web_company_name);
			$ci->email->to($to);
			//$ci->email->bcc($ci->website['data']->bcc_email_id);
			$ci->email->subject($subject);
			$ci->email->message($msg);
			if ($ci->email->send()){
				return true;
			} else {
				return false;
			}
		}else{
			$config = array();
			$config['useragent'] = "CodeIgniter";
			$config['mailpath'] = "/usr/sbin/sendmail";
			$config['protocol'] = "smtp";
			$config['smtp_host'] = "localhost";
			$config['smtp_port'] = "25";
			$config['mailtype'] = 'html';
			$config['charset']  = 'utf-8';
			$config['newline']  = "\r\n";
			$config['wordwrap'] = TRUE;
			$ci->load->library('email');
			$ci->email->initialize($config);
			$ci->email->from($website->web_from_email_id, $website->web_company_name);
			$ci->email->to($to);
			//$ci->email->bcc($ci->website['data']->bcc_email_id);
			$ci->email->subject($subject);
			$ci->email->message($msg);

			if ($ci->email->send()){
				return true;
			}else {
				return false;
			}
		}
	}
	/*--- End Email Send Start ---*/

	/*--- GET TOTAL BANNERS ---*/

	function getBlog(){
		$ci=get_instance();
		$ci->db->select('COUNT(blog_id) AS bogs');
		//$ci->db->where('bnrs_status', 'active');
		$query = $ci->db->get('tbl_blog');
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row()->bogs;
		}
	}

	function getEnquiry(){
		$ci=get_instance();
		$ci->db->select('COUNT(id) AS enquiry');
		//$ci->db->where('blog_status', '0');
		$query = $ci->db->get('tbl_enquiry');
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row()->enquiry;
		}
	}

	function getSubscribe(){
		$ci=get_instance();
		$ci->db->select('COUNT(sub_id) AS Subscribe');
		// $ci->db->where('cust_status', '0');
		// $ci->db->where('cust_package_status', '0');
		$query = $ci->db->get('tbl_subscribe');
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row()->Subscribe;
		}
	}

	function gethelp(){
		$ci=get_instance();
		$ci->db->select('COUNT(id) AS Help');
		$query = $ci->db->get('tbl_help');
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row()->Help;
		}
	}

	function getPendingAccountMembers(){
		$ci=get_instance();
		$ci->db->select('cust_id,cust_fname,cust_lname,cust_email,cust_email_verified_status');
		$ci->db->where('cust_status', '1');
		$ci->db->where('cust_email_verified_status', 'unverified');
		$ci->db->order_by('cust_id','DESC');
		$query = $ci->db->get('tbl_members');
		//echo $ci->db->last_query();
		if($query->num_rows() ==''){
			echo "<tbody><tr><td colspan='4'>No Pending Account</td></tr></tbody>";
		}else{
			$recordMembers = $query->result();
			$outputMembers = '';
			if(!empty($recordMembers)){
				$outputMembers .= '';
				$outputMembers .='
								<tbody>
									<tr class="text-uppercase font-size-11 text-muted">
										<th>Name</th>
										<th>Email</th>
										<th class="text-right">Status</th>
										<th>Action</th>
									</tr>';
				foreach($recordMembers as $mbrs){

					$membersName = strlen($mbrs->cust_fname.' '.$mbrs->cust_lname);
					if($membersName>50){
						$members=$mbrs->cust_fname.' '.$mbrs->cust_lname.'..';
					}else{
						$members=$mbrs->cust_fname.' '.$mbrs->cust_lname;
					}

					$memberEmail = $mbrs->cust_email;

					if($mbrs->cust_email_verified_status=='unverified'){
						$status = "<span class='badge badge-danger' style='color:#fff'>unverified</span>";
					}

					$outputMembers .= '
									<tr>
										<td>'.$members.'</td>
										<td>'.$memberEmail.'</td>
										<td class="text-right">'.$status.'</td>
										<td>
											<a href='.site_url('members/delete/'.$mbrs->cust_id).' class="btn btn-outline-danger btn-sm waves-effect waves-button waves-light"><i class="fa fa-trash-o"></i></a>
										</td>
									</tr>
								</tbody>';
				}
			}
			echo $outputMembers;
		}
	}

	function getMembersNotifications(){
		$ci=get_instance();
		$ci->db->select('rcr.cust_email, rcr.cust_fname, rcr.cust_lname,sndr.cust_fname AS SndrFname, sndr.cust_lname AS SndrLname, nty.*');
		$ci->db->join('tbl_members rcr','nty.notification_receiver_id=rcr.cust_id','LEFT');
		$ci->db->join('tbl_members sndr','nty.notification_sender_id=sndr.cust_id','LEFT');
		$ci->db->order_by('nty.notification_id','DESC');
		$ci->db->limit(10,0);
		$query = $ci->db->get('tbl_notification nty');
		//echo $ci->db->last_query();
		if($query->num_rows() ==''){
			echo "<tbody><tr><td colspan='2'>No Notification Found!</td></tr></tbody>";
		}else{
			$recordNotification = $query->result();
			$outputNotification = '';
			if(!empty($recordNotification)){
				$outputNotification .='
								<tbody>
									<tr class="text-uppercase font-size-11 text-muted">
										<th>Message</th>
									</tr>';
				foreach($recordNotification as $notify){

					$notification = $notify->notification_text;
					$sndrName = $notify->SndrFname.' '.$notify->SndrLname;
					$newString = str_replace("you.", "", $notification);
					preg_match('/<b>(.*?)<\/b>/s', $newString, $match); /*--- Match <b> Tag String ---*/
					$newReplaceString = $match[0];
					$getNewText = str_replace($newReplaceString,"", $newString); /*--- Find and remove text ---*/
					$finalString = '<b>'.$sndrName.'</b> '.$getNewText; /*--- Final String ---*/

					$outputNotification .= '
									<tr>
										<td>'.$finalString.' <b>'.$notify->cust_fname.' '.$notify->cust_lname.'</b></td>
									</tr>
								</tbody>';
				}
			}
			echo $outputNotification;
		}
	}

?>
