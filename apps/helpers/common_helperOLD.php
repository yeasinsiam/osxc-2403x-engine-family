<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	/*! Common Helper
	* ================
	* Common Helper application file for All Common function . 
	* This fileshould be included in all pages.  
	* @Author  :  Rinku Vishwakarma
	* @Created :  20 Sep 2019
	*/
	
	
	function date_formate($date){
		 return date_format(date_create($date),'d-M-Y ,G:ia');
	}

	function base64url_encode($data) { 
		return rtrim(strtr(base64_encode($data), '+/', '-_'), '='); 
	} 
		
	function base64url_decode($data) { 
		return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT)); 
	} 

	function getPackageActivePackId($pkgid,$custid){ 
		$ci=get_instance();
		$ci->db->select('pkg_id');
		$ci->db->where('pkg_id', $pkgid);
		$ci->db->where('cust_id', $custid);
		$ci->db->where('act_status', '0');
		$query = $ci->db->get('tbl_package_activate');
		//echo $ci->db->last_query();
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row()->pkg_id;
		}
	}
	
	 function facebook($url) {
        $api = file_get_contents( 'http://graph.facebook.com/?id=' . $url );
        $count = json_decode( $api );
        return $count->shares;
        };

	
	function skills($skills_id){ 
		$ci=get_instance();
		$ci->db->select('skl_name');
		$ci->db->where('skl_id', $skills_id);		
		$query = $ci->db->get('tbl_skills');
		//echo $ci->db->last_query();
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row()->skl_name;
		}
	}

	function getWorkViews($id,$ipaddress){
		$ci=get_instance();
		$ci->db->select('pro_post_id,pro_ip_address');
		$ci->db->where('pro_post_id', $id);
		$ci->db->where('pro_ip_address', $ipaddress);
		$query = $ci->db->get('tbl_projects_view');
// 		echo $ci->db->last_query($query);
// 		die();
		if($query->num_rows() ==''){

			$projectViewArray = array(
				'pro_post_id' => $id,
				'pro_ip_address' => $ipaddress,
				'pro_view_created' => date('Y-m-d H:i:s')
			);
			$ci->db->insert('tbl_projects_view' , $projectViewArray);
			$queryOne = $ci->db->insert_id();

			if($queryOne){

				$ci->db->select('blog_id,blog_views');
				$ci->db->where('blog_id', $id);
				$queryTwo = $ci->db->get('tbl_posts');

				if($queryTwo){
					$views = $queryTwo->row()->blog_views+1;
					$viewArray = array(
						'blog_views'=>$views
					);
					$ci->db->where('blog_id', $id);
					$ci->db->update('tbl_posts',$viewArray);
					echo $views;
					
				}else{
					return false;
				}
			}else{
				return false;
			}
			
		}else{ 
		    	$ci->db->select('blog_id,blog_views');
				$ci->db->where('blog_id', $id);
				$getquery = $ci->db->get('tbl_posts');
            echo $getquery->row()->blog_views;
		}
	}

	/*--- GET BELL NOTIFICATION ---*/
	function getBellNotification($activeUser){
		$ci=get_instance();
		$ci->db->select('COUNT(notification_receiver_id) AS BellNotify');
		$ci->db->where('notification_receiver_id', $activeUser);
		$ci->db->where('read_notification!=', 'yes');
		$query = $ci->db->get('tbl_notification');
		//echo $ci->db->last_query();
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row()->BellNotify;
		}
	}

	function loadBellNotification($activeUser){

		$ci=get_instance();
		$ci->db->select('mbr.cust_fname,mbr.cust_lname,mbr.cust_profile,ntf.*');
		$ci->db->join('tbl_members mbr','ntf.notification_sender_id=mbr.cust_id','LEFT');	
		$ci->db->where('ntf.notification_receiver_id', $activeUser);
		$ci->db->where('ntf.read_notification!=', 'yes');
		$ci->db->order_by('ntf.notification_receiver_id','DESC');
		$query = $ci->db->get('tbl_notification ntf');
		//echo $ci->db->last_query();
		if($query->num_rows() ==''){
			echo "<div class='noto-content clearfix'><div class='noto-label' style='background: #fff;'><center><img src=".site_url('assets/nomessage.png')." style='width: 80px;'></center></div></div>";
		}else{
			$record = $query->result();
			$output = '';
			if(!empty($record)){
				foreach($record as $list){
					$notifyTextLoad = $list->notification_text;

					$sndrName = $list->cust_fname.' '.$list->cust_lname;
					$newString = str_replace("you.", "", $notifyTextLoad);
					preg_match('/<b>(.*?)<\/b>/s', $newString, $match); /*--- Match <b> Tag String ---*/
					$newReplaceString = $match[0];
					$getNewText = str_replace($newReplaceString,"", $newString); /*--- Find and remove text ---*/
					$notifyText =  '<b>'.$sndrName.'</b> '.$getNewText.' you'; /*--- Final String ---*/
					
					// if($notifyText>50){
					// 	$notiFy=$list->notification_text.'..';
					// }else{
					// 	$notiFy=$list->notification_text;
					// }
					$output .= '
					<div class="noto-content clearfix" style="padding: 0px 0px;">
						<div class="noto-text" style="margin-left: 0px;">
							<div class="noto-text-top" style="margin-bottom: 0px;">
								<span class="noto-date"><i class="fa fa-clock-o"></i> '.date('F d, Y',strtotime($list->notification_created)).'</span>
							</div>
							<div class="noto-message" style="background: #fff;border:0px;padding: 10px 0px;">
								<a href='.site_url("peoples/profile/".base64url_encode($list->notification_sender_id)).' style="color:#7a8192">
									'.$notifyText.'
								</a>
							</div>
						</div>
					</div>
					';
				}
			}else{
				$output .='No notification Fount';
			}
			return $output;
		}
	}
	/*--- END OF THE BELL NOTIFICATION ---*/

	/*--- GET MESSAGE ---*/
	function getMessage($activeUser){
		$ci=get_instance();
		$ci->db->select('COUNT(msg_receiver) AS message');
		$ci->db->where('msg_receiver', $activeUser);
		$ci->db->where('msg_read', 'no');
		$query = $ci->db->get('tbl_messages');
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row()->message;
		}
	}

	function loadMessage($activeUser){ 
		$ci=get_instance();
		$ci->db->select('mbr.cust_fname,mbr.cust_lname,mbr.cust_profile,msg.*');
		$ci->db->join('tbl_members mbr','msg.msg_sender=mbr.cust_id','LEFT');
		$ci->db->where('msg.msg_receiver', $activeUser);
		//$ci->db->where('msg.msg_read', 'no');
		$ci->db->order_by('msg.msg_id','DESC');
		$query = $ci->db->get('tbl_messages msg');
		//echo $ci->db->last_query();
		if($query->num_rows() ==''){
			echo "<div class='noto-content clearfix'><div class='noto-label' style='background: #fff;'><center><img src=".site_url('assets/nomessage.png')." style='width: 80px;'></center></div></div>";
		}else{
			$recordMessage = $query->result();
			$outputMessage = '';
			if(!empty($recordMessage)){
				$outputMessage .= '';
				foreach($recordMessage as $msg){
					$notifyTextMessage = strlen($msg->msg_message);
					if($notifyTextMessage>50){
						$notiFyMessage=$msg->msg_message.'..';
					}else{
						$notiFyMessage=$msg->msg_message;
					}
					if(!empty($msg->cust_profile)){
						$profile = $msg->cust_profile;
					}else{
						$profile = 'no_profile.jpg';
					}
				if($msg->msg_read=='no'){
						$msg_read='<span style="color:#5e46a2"><u>New</u></span>';
						$bg='#0d58c821';
					}else{
						$msg_read='<span style="color:#111"><u>View</u></span>';
						$bg='#fff';
					}
					$senderName = $msg->cust_fname.' '.$msg->cust_lname;

					$outputMessage .= '
									<div class="noto-content clearfix" style="background:'.$bg.'">
									
										<div class="noto-img">	
											<a href="javascript:void(0)">
												<img src='.site_url("uploads/members/").$profile.' alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="javascript:void(0)">'.$senderName.'</a></span><a href='.site_url("account/message_info/".base64url_encode($msg->msg_id)).' style="color:#7a8192">
												<span class="tag pull-right" >'.$msg_read.'</span></a>
												<span class="noto-date"><i class="fa fa-clock-o"></i> '.date('F d, Y',strtotime($msg->msg_created)).'</span>
											</div>
											<div class="noto-message">
												<a href='.site_url("account/message_info/".base64url_encode($msg->msg_id)).' style="color:#7a8192">
													'.$notiFyMessage.'
												</a>
											</div>
										</div>

									</div>';
				}
			}
			echo $outputMessage;
			
		}
	}
	/*--- END OF THE MESSAGE ---*/ 
	
	/*--- Active Following Member List ---*/
	function getMyFollowingMembersList($followerid,$followingid){
		$ci=get_instance();
		$ci->db->select('*');
		$ci->db->where('follow_flr_id',$followerid);
		$ci->db->where('follow_flng_id',$followingid);
		$query = $ci->db->get('tbl_follow_following');
		
		$outputFollowingList = '';
		if($query->num_rows() ==''){
			$outputFollowingList .='<a class="btn color-1 size-2 hover-1 btnPeopleFollow" id="btnPeopleFollow'.$followingid.'" followingid='.$followingid.' followerid='.$followerid.' action="FOLLOW">FOLLOW</a>';
		}else{
			$recordFollowingList = $query->result();
			if(!empty($recordFollowingList)){
				foreach($recordFollowingList as $followingList){
					if($followingList->follow_flr_id==$followerid){
						$outputFollowingList .='<a class="btn color-1 size-2 hover-1 btnPeopleFollow" id="btnPeopleFollow'.$followingid.'" followingid='.$followingList->follow_flng_id.' followerid='.$followingList->follow_flr_id.' action="FOLLOWING">FOLLOWING</a>';
					}
				}
			}
		}
		return $outputFollowingList;
	}

	function getPeopleProfileViews($ipaddress,$visitedId){
		$ci=get_instance();
		$ci->db->select('mbr.cust_views,vst.*');
		$ci->db->join('tbl_members mbr','vst.visit_people_id=mbr.cust_id','LEFT');
		$ci->db->where('vst.visit_ipaddress', $ipaddress);
		$ci->db->where('vst.visit_people_id', $visitedId);
		$query = $ci->db->get('tbl_profile_visitors vst');
		//echo $ci->db->last_query();
		if($query->num_rows() ==''){

			$peopleViewArray = array(
				'visit_ipaddress' => $ipaddress,
				'visit_people_id' => $visitedId,
				'visit_date' => date('Y-m-d H:i:s')
			);
			$ci->db->insert('tbl_profile_visitors' , $peopleViewArray);
			$queryOne = $ci->db->insert_id();

			if($queryOne){

				$ci->db->select('cust_id,cust_views');
				$ci->db->where('cust_id', $visitedId);
				$queryTwo = $ci->db->get('tbl_members');

				if($queryTwo){
					$views = $queryTwo->row()->cust_views+1;
					$viewArray = array(
						'cust_views'=>$views
					);
					$ci->db->where('cust_id', $visitedId);
					$ci->db->update('tbl_members',$viewArray);
					echo $views;
				}else{
					return false;
				}
			}else{
				return false;
			}
			
		}else{
			return $query->row()->cust_views;
		}
	}

	function getMyPeopleLikes($ipaddress, $PeopleId){
		$ci=get_instance();
		$ci->db->select('*');
		$ci->db->where('plike_ipaddress',$ipaddress);
		$ci->db->where('plike_people_id',$PeopleId);
		$query = $ci->db->get('tbl_profile_like_unlike');
		$outputPeopleLikeList = '';
		if($query->num_rows() ==''){
			$outputPeopleLikeList .='<a class="be-ava-left btn color-1 size-2 hover-1 btnPeopleLike" href="javascript:void(0)" ipaddress='.$ipaddress.'>LIKE</a>';
		}else{
			$recordPeopleLikeList = $query->result();
			if(!empty($recordPeopleLikeList)){
				foreach($recordPeopleLikeList as $peopleLikeList){
					if($peopleLikeList->plike_ipaddress==$ipaddress){
						$outputPeopleLikeList .='<a class="be-ava-left btn color-1 size-2 hover-1 btnPeopleLike" href="javascript:void(0)" ipaddress='.$ipaddress.'>LIKED</a>';
					}
				}
			}
		}
		return $outputPeopleLikeList;
	}

	function getMyGalleryLikeUnlike($myFolder, $ipaddress){
		$ci=get_instance();
		$ci->db->select('*');
		$ci->db->where('glike_ipaddress',$ipaddress);
		$ci->db->where('glike_glry_id',$myFolder);
		$query = $ci->db->get('tbl_gallery_like_unlike');
		$outputGalleryLikeList = '';
		if($query->num_rows() ==''){
			$outputGalleryLikeList .='<a class="btn color-1 size-2 hover-2 btnLikeGallery" id="btnLikeGallery'.$myFolder.'" galleryId='.$myFolder.' ipaddress='.$ipaddress.'>LIKE</a>';
		}else{
			$recordGalleryLikeList = $query->result();
			if(!empty($recordGalleryLikeList)){
				foreach($recordGalleryLikeList as $galleryLikeList){
					if($galleryLikeList->glike_ipaddress==$ipaddress){
						$outputGalleryLikeList .='<a class="btn color-1 size-2 hover-2 btnLikeGallery" id="btnLikeGallery'.$myFolder.'" galleryId='.$myFolder.' ipaddress='.$ipaddress.' action="LIKED">LIKED</a>';
					}
				}
			}
		}
		echo $outputGalleryLikeList;
	}
	
	function getMyGalleryViews($glryid, $ipaddress){
		$ci=get_instance();
		$ci->db->select('glry.glry_views,gview.*');
		$ci->db->join('tbl_gallery glry','gview.gview_glry_id=glry.glry_id','LEFT');
		$ci->db->where('gview.gview_ipaddress', $ipaddress);
		$ci->db->where('gview.gview_glry_id', $glryid);
		$query = $ci->db->get('tbl_gallery_views gview');
		//echo $ci->db->last_query();
		if($query->num_rows() ==''){
			$galleryViewArray = array(
				'gview_glry_id' => $glryid,
				'gview_ipaddress' => $ipaddress
			);
			$ci->db->insert('tbl_gallery_views' , $galleryViewArray);
			$queryOne = $ci->db->insert_id();

			if($queryOne){

				$ci->db->select('glry_id,glry_views');
				$ci->db->where('glry_id', $glryid);
				$queryTwo = $ci->db->get('tbl_gallery');

				if($queryTwo){
					$views = $queryTwo->row()->glry_views+1;
					$viewArray = array(
						'glry_views'=>$views
					);
					$ci->db->where('glry_id', $glryid);
					$ci->db->update('tbl_gallery',$viewArray);
					return $views;
				}else{
					return false;
				}
			}else{
				return false;
			}
			
		}else{
			return $query->row()->glry_views;
		}
	}
	
	

	function message_empty($receiver,$sender){
		$ci=get_instance();	
		$ci->db->order_by('msg_id','DESC');	
		$ci->db->where('msg_sender', $receiver);
		$ci->db->where('msg_receiver', $sender);
		$query = $ci->db->get('tbl_messages');
		//echo $ci->db->last_query($query);
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->num_rows();
		}
	}

	function txn_id($id,$buyer_email){			
		$ci=get_instance();	
		$ci->db->select('txn_id');	
		$ci->db->where('product_id', $id);	
		$ci->db->where('buyer_email', $buyer_email);	
		$query = $ci->db->get('tbl_orders');
		//echo $ci->db->last_query($query);
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row()->txn_id;
		}
	}
	  
	function member_name($id){
		$ci=get_instance();	
		$ci->db->select('cust_fname,cust_lname');	
		$ci->db->where('cust_id', $id);
		$query = $ci->db->get('tbl_members');
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row()->cust_fname." ".$query->row()->cust_lname;
		}
	}
	
	function member_profile($id){
		$ci=get_instance();	
		$ci->db->select('cust_profile');	
		$ci->db->where('cust_id', $id);
		$query = $ci->db->get('tbl_members');
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row()->cust_profile;
		}
	}

	function country($id){
		$ci=get_instance();	
		$ci->db->select('name');	
		$ci->db->where('id', $id);
		$query = $ci->db->get('tbl_countries');
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row()->name;
		}
	}
	  
	/*--- GET MY GALLERY COLLECTION ---*/ 
	function getMyGalleryCollections($myFolder){
		$ci=get_instance();
		$ci->db->select('gim_id,gim_glry_id,gim_pictures');
		$ci->db->where('gim_glry_id',$myFolder);
		$ci->db->where('gim_status','0');
		$ci->db->limit(5);
		$query = $ci->db->get('tbl_gallery_images');

		$outputCollectionList = '';
		if($query->num_rows() ==''){
			$outputCollectionList .='<center style="padding: 40px;font-size:15px">Record not found</center>';
		}else{
			$recordCollectionList = $query->result();
			if(!empty($recordCollectionList)){
				foreach($recordCollectionList as $collectionList){
					if($collectionList->gim_glry_id==$myFolder){
	           if(!empty($collectionList->gim_pictures)){
						$outputCollectionList .='<img src='.site_url('uploads/gallery/'.$collectionList->gim_pictures).' style="height:108px"><div class="color_bg"><span>view gallery</span><span class="child"></span></div>';

					}else{
					$outputCollectionList .='<img src='.site_url('assets/img/p1.png').' style="height:108px"><div class="color_bg"><span>view gallery</span><span class="child"></span></div>';	
					}
				}
				}
			}
		}
		echo $outputCollectionList;
	}

	function getPublicGalleryList($myFolder){
		$ci=get_instance();
		$ci->db->select('gim_id,gim_glry_id,gim_pictures');
		$ci->db->where('gim_glry_id',$myFolder);
		$ci->db->where('gim_status','0');
		$ci->db->group_by('gim_glry_id');
		$ci->db->order_by('gim_id','DESC');
		$query = $ci->db->get('tbl_gallery_images');

		$outputPublicCollectionList = '';
		if($query->num_rows() ==''){
			$outputPublicCollectionList .='<center style="padding: 40px;font-size:15px">Record not found</center>';
		}else{
			$recordPublicCollectionList = $query->result();
			if(!empty($recordPublicCollectionList)){
				foreach($recordPublicCollectionList as $publicCollectionList){
					if($publicCollectionList->gim_glry_id==$myFolder){
						$outputPublicCollectionList .='<a class="gallery-a" href="'.base_url('galleries/album/').base64url_encode($myFolder).'"><img src='.site_url('uploads/gallery/'.$publicCollectionList->gim_pictures).' style="height:133px;object-fit:cover"></a>';
					}
				}
			}
		}
		echo $outputPublicCollectionList;
	}

	/*--- PROJECT VIEWS ---*/
	function getMyProjectViews($activeUser){
		$ci=get_instance();
		$ci->db->select('SUM(blog_views) AS views');
		$ci->db->where('blog_posted_by', $activeUser);
		$query = $ci->db->get('tbl_posts');
		//echo $ci->db->last_query();
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row()->views;
		}
	} 

	function getMyProjectAppreciations($activeUser){
		$ci=get_instance();
		$ci->db->select('SUM(blog_likes) AS appreciations');
		$ci->db->where('blog_posted_by', $activeUser);
		$query = $ci->db->get('tbl_posts');
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row()->appreciations;
		}
	} 

	function getMyFollowing($activeUser){
		$ci=get_instance();
		$ci->db->select('COUNT(follow_id) AS following');
		$ci->db->where('follow_flng_id', $activeUser);
		$query = $ci->db->get('tbl_follow_following');
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row()->following;
		}
	}


	function nicetime($date){
		if(empty($date)) {
			return "No date provided";
		}
		
		$periods         = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
		$lengths         = array("60","60","24","7","4.35","12","10");
		
		$now             = time();
		$unix_date         = strtotime($date);
		
			// check validity of date
		if(empty($unix_date)) {    
			return "Bad date";
		}

		// is it future date or past date
		if($now > $unix_date) {    
			$difference     = $now - $unix_date;
			$tense         = "ago";
			
		} else {
			$difference     = $unix_date - $now;
			$tense         = "Just Now";
		}
		
		for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
			$difference /= $lengths[$j];
		}
		
		$difference = round($difference);
		
		if($difference != 1) {
			$periods[$j].= "s";
		}
		
		return "$difference $periods[$j] {$tense}";
	}


	/*------------ For Email Send Start -------------------------*/
	function email_send($to,$subject,$msg) { 
	     $ci = get_instance(); 
		// Load PHPMailer library
		$ci->load->library('phpmailer_lib');
		// PHPMailer object
		$mail = $ci->phpmailer_lib->load();
		$ci->db->limit(1);
        $query=$ci->db->get('tbl_website_info');
		if($query->num_rows()== 1){
		$website= $query->row();
		} 		
		
		$email_protocal=$website->web_email_protocal;
		if($email_protocal=='SMTP Email'){
			// SMTP configuration
			$mail->isSMTP();
			//Ask for HTML-friendly debug output
           // $mail->Debugoutput = 'html';
			$mail->CharSet = 'UTF-8';
			//$mail->SMTPDebug =0; /* Debug Mode */
			$mail->Host     	= $website->web_smtp_host_name; /* smtp.zoho.in OR smtp.gmail.com*/
			$mail->SMTPAuth 	= true;
			$mail->Username 	= $website->web_email_id;
			$mail->Password 	= $website->web_email_password;
			$mail->SMTPSecure 	= $website->web_email_connection_type; /* SSL OR TLS */
			$mail->Port     	= $website->web_smtp_port; /* SMTP POST SSL-465 OR TLS-587 */
			
			$mail->setFrom($website->web_from_email_id, $website->web_company_name);
			$mail->addReplyTo($website->web_from_email_id, $website->web_company_name);			
			// Add a recipient           
            $mail->addAddress($to); 			
			// Email subject
			$mail->Subject = $subject;			
			// Set email format to HTML
			$mail->isHTML(true);			
			// Email body content
			$mailContent = $msg;
			$mail->Body = $mailContent;			
			// Send email
			if(!$mail->send()){				
				//return false;
			}else{				
				//return true;
			}
		 
		}
	}
	
?>