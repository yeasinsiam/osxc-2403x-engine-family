<?php 
class Home_model extends MY_Model{

	function get_banners_list($table){
		$this->db->where('bnrs_status','active');
		$this->db->order_by('bnrs_id',"DESC");
		$query=$this->db->get($table);
		if($query->num_rows() != 0) return $query->row();
		else return false;
	}

	  public function hot_product_list(){
		$this->db->select('id,name,name_slug,short_desc,img');
		$this->db->order_by('id',"DESC");
		$this->db->where('homepage',"1");
		$query=$this->db->get('tbl_product');
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}
	 public function featered_product_list(){
		$this->db->select('id,name,name_slug,img');
		$this->db->order_by('id',"DESC");
		$this->db->where('hot',"1");
		$query=$this->db->get('tbl_product');
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}

	public function slider_list(){
		$this->db->select('*');
		//$this->db->order_by('id',"DESC");
		$this->db->where('status',"0");
		$query=$this->db->get('tbl_slider');
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}

	public function testimonials_list(){
		$this->db->select('*');
		//$this->db->order_by('id',"DESC");
		$this->db->where('status',"0");
		$query=$this->db->get('tbl_testimonials');
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}
	
	
	public function get_blog_img_info($fld_bid,$blogid,$table){
		$this->db->where($fld_bid,$blogid);
		$query=$this->db->get($table);
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}

	public function get_work_info($fld_bslug,$urlSlug,$table){
		$this->db->select('mbr.cust_id,mbr.cust_fname,mbr.cust_lname,mbr.cust_profile,mbr.cust_role,cntry.name AS Country_Name,blg.*');
		$this->db->join('tbl_members mbr','blg.blog_posted_by=mbr.cust_id','LEFT');
		$this->db->join('tbl_countries cntry','mbr.cust_country=cntry.id','LEFT');
		$this->db->where('blg.'.$fld_bslug,$urlSlug);
		$query=$this->db->get($table.' blg');
		//echo $this->db->last_query();
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row();
		}
	}

	public function get_skill_tools($fld_bslug,$urlSlug,$table){
		$this->db->select('skls.skl_name,blg.blog_skills,blg.blog_tools');		
		$this->db->join('tbl_skills skls','skls.skl_id=blg.blog_skills','LEFT');
		$this->db->where('blg.'.$fld_bslug,$urlSlug);
		$query=$this->db->get($table.' blg');
		//echo $this->db->last_query();
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row();
		}
	}

	public function get_my_following_member($activeMember,$postedBy,$table){
		$this->db->select('follow_flng_id');
		$this->db->where('follow_flr_id',$activeMember);
		$this->db->where('follow_flng_id',$postedBy);
		$this->db->from($table);
		$query=$this->db->get();
		//pr($this->db->last_query()); die;
		if($query->num_rows() != 0) return $query->row();
		else return false;
	}

	public function get_projects_like_by_users($postId,$table){
		$this->db->select('like_project');
		$this->db->where('like_project',$postId);
		$this->db->from($table);
		$query=$this->db->get();
		if($query->num_rows() != 0) return $query->row();
		else return false;
	}

public function get_recent_works($fld_bmembers,$postedBy,$table){
		$this->db->select('mbr.cust_fname,mbr.cust_lname,mbr.cust_profile,mbr.cust_role,blg.*');
		$this->db->order_by("blg.blog_id","desc");
		$this->db->join('tbl_members mbr','blg.blog_posted_by=mbr.cust_id','LEFT');
		$this->db->from($table.' blg');
		//$this->db->where('blg.'.$fld_bmembers,$postedBy);
		$this->db->limit('3','0');
		$query=$this->db->get();
		//echo $this->db->last_query(); die;
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}

	public function get_relatate_works($fld_bmembers,$postedBy,$table){
		$this->db->select('mbr.cust_fname,mbr.cust_lname,mbr.cust_profile,mbr.cust_role,blg.*');
		$this->db->order_by("blg.blog_id","desc");
		$this->db->join('tbl_members mbr','blg.blog_posted_by=mbr.cust_id','LEFT');
		$this->db->from($table.' blg');
		$this->db->where('blg.'.$fld_bmembers,$postedBy);
		$this->db->limit('3','0');
		$query=$this->db->get();
		//echo $this->db->last_query(); die;
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}


	public function update_post_view($fld_bid,$wordId,$postView,$table){
		$this->db->where($fld_bid, $wordId);
        $query=$this->db->update($table, $postView);
        if($query){
			return true;
		}else{
			return false;
		}
	}

	/*--- FOR FOLLOW UNFOLLOW ---*/
	public function follow_members($FollowArray,$table){
		$this->db->insert($table , $FollowArray);
        return $this->db->insert_id();
	}

	public function get_member_followers($fld_memberid,$sender,$table){
		$this->db->select('cust_followers');
		$this->db->where($fld_memberid,$sender);
		$query=$this->db->get($table);
		//echo $this->db->last_query();
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row();
		}
	}
public function get_member($fld_memberid,$reciverid,$table){		
		$this->db->where($fld_memberid,$reciverid);
		$query=$this->db->get($table);
		//echo $this->db->last_query();
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row();
		}
	}
	public function update_member_follower($fld_memberid,$sender,$FollowerArray,$table){
		$this->db->where($fld_memberid, $sender);
        $query=$this->db->update($table, $FollowerArray);
        if($query){
			return true;
		}else{
			return false;
		}
	}

	public function unfollow_members($fld_senderid,$sender,$fld_receiverid,$receiver,$table){
		$this->db->select('*');
		$this->db->where($fld_senderid,$sender);
		$this->db->where($fld_receiverid,$receiver);
		$query=$this->db->get($table);
		//echo $this->db->last_query();
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row();
		}
	}

	public function reset_follow_member($followid, $table){
		$this->db->where('follow_id',$followid);
	    $query=$this->db->delete($table);
		if($query){
			return true;
		}else{
			return false;
		}
	}

	public function send_notification($notifyArray, $table){
		$this->db->insert($table , $notifyArray);
        return $this->db->insert_id();
	}

	/*--- END OF THE FOLLOW UNFOLLOW ---*/

	/*---- FOR LIKE AND UNLIKE ----*/ 

	public function like_projects($likeArray,$table){
		$this->db->insert($table , $likeArray);
        return $this->db->insert_id();
	}

	public function get_projects_like($fld_bid,$projectid,$table){
		$this->db->select('blog_likes,blog_posted_by');
		$this->db->where($fld_bid,$projectid);
		$query=$this->db->get($table);
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row();
		}
	}

	public function count_single_project_likeDislike($fld_projectid,$projectid,$table){
		$this->db->select($fld_projectid);
        $this->db->from($table);
        $this->db->where($fld_projectid,$projectid);
        $query = $this->db->get();
		if($query->num_rows() != 0){
			return $query->num_rows();
		}else{
			return false;
		}
	}

	public function update_projects_like($fld_bid,$projectid,$ProjectLikeArray,$table){
		$this->db->where($fld_bid, $projectid);
        $query=$this->db->update($table, $ProjectLikeArray);
        if($query){
			return true;
		}else{
			return false;
		}
	}

	public function unlike_projects($fld_bid,$projectid,$fld_userid,$currentUser,$table){
		$this->db->select('*');
		$this->db->where($fld_bid,$projectid);
		$this->db->where($fld_userid,$currentUser);
		$query=$this->db->get($table);
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row();
		}
	}

	public function reset_project_like($likedid, $table){
		$this->db->where('like_id',$likedid);
	    $query=$this->db->delete($table);
		if($query){
			return true;
		}else{
			return false;
		}
	}

	/*---- END OF LIKE AND UNLIKE ----*/ 

	/*---- FOR COMMENT ----*/

	public function make_project_comments($commentProjectArray,$table){
		$this->db->insert($table , $commentProjectArray);
        return $this->db->insert_id();
	}

	public function send_message_data($sendMessageArray,$table){
		$this->db->insert($table , $sendMessageArray);
        return $this->db->insert_id();
	}

	public function getAllProjectComments($fld_bid,$projectid,$table){
		$this->db->select('blog_id,blog_comments,blog_posted_by');
		$this->db->where($fld_bid,$projectid);
		$query=$this->db->get($table);
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->row();
		}
	}

	public function updateProjectCommentCounter($fld_bid,$projectid,$cmntProArray,$table){
		$this->db->where($fld_bid, $projectid);
		$query=$this->db->update($table, $cmntProArray);
		if($query){
			return true;
		}else{
			return false;
		}
	}

	public function get_single_project_comments($fld_cmntid,$projectid,$table){
		$this->db->select('mbr.cust_fname,mbr.cust_lname,mbr.cust_profile,mbr.cust_gender,promt.*');
		$this->db->join('tbl_members mbr','promt.cmnt_user_id=mbr.cust_id','LEFT');
    	$this->db->where('promt.'.$fld_cmntid,$projectid);
    	$this->db->order_by('promt.'.$fld_cmntid,'DESC');
		$query=$this->db->get($table.' promt');
		//echo $this->db->last_query();
		if($query->num_rows() ==''){
			return false;
		}else{
			return $query->result();
		}
	}

	public function count_single_project_comment($fld_cmntid,$projectid,$table){
		$this->db->select($fld_cmntid);
        $this->db->from($table);
        $this->db->where($fld_cmntid,$projectid);
        $query = $this->db->get();
		if($query->num_rows() != 0){
			return $query->num_rows();
		}else{
			return false;
		}
	}

	/*---- END OF THE COMMENT ----*/
	
	/*--- GET SKILLS ---*/
	public function get_skills($fld_bskills,$table){
		// $this->db->select('DISTINCT(skl.skl_name) AS SKILL_NAME,blg.blog_skills AS SKILL_ID');
		// $this->db->join('tbl_skills skl','blg.blog_skills=skl.skl_id','LEFT');
		// $this->db->order_by('blg.'.$fld_bskills,'ASC');
		// $this->db->from($table.' blg');	

		$this->db->select('GROUP_CONCAT(blog_skills) AS SKILLS_NAME');
		$this->db->order_by($fld_bskills,'ASC');
		$this->db->from($table);			
		$query=$this->db->get();
		// echo $this->db->last_query();		
		if($query->num_rows()!= 0) {
			return $query->row();
		}else{
			return false;
		} 
	}
	public function get_list($fld_bskills,$status,$table){	
		$this->db->order_by($fld_bskills,'ASC');
		$this->db->where($status,'0');
		$this->db->from($table);			
		$query=$this->db->get();
		// echo $this->db->last_query();		
		if($query->num_rows()!= 0) {
			return $query->result();
		}else{
			return false;
		} 
	}


	public function get_tags($fld_btags,$table){
		$this->db->select('GROUP_CONCAT(blog_tags) AS TAG_NAME');
		$this->db->order_by($fld_btags,'ASC');
		$this->db->from($table);		
		$query=$this->db->get();
		//echo $this->db->last_query();
		if($query->num_rows()!= 0) {
			return $query->row();
		}else{
			return false;
		} 
	}
	
	public function get_tools($fld_btools,$table){
		$this->db->select('GROUP_CONCAT(blog_tools) AS TOOL_NAME');
		$this->db->order_by($fld_btools,'ASC');
		$this->db->from($table);		
		$query=$this->db->get();
		//echo $this->db->last_query();
		if($query->num_rows()!= 0) {
			return $query->row();
		}else{
			return false;
		} 
	}

	public function get_locations($fld_loc,$table){
		$this->db->select('GROUP_CONCAT(blog_locations) AS COUNTRY_NAME');
		$this->db->order_by($fld_loc,'ASC');
		$this->db->from($table);		
		$query=$this->db->get();
		//echo $this->db->last_query();
		if($query->num_rows()!= 0) {
			return $query->row();
		}else{
			return false;
		} 
	}

	function postPostFilterQuery($page,$skills,$tags,$tools,$workstatus,$features,$locations,$blog_title,$blog_tags,$blog_tools,$skl_name){
          $date=date('Y-m-d h:i:s');
		$generatedQuery = "SELECT mbr.cust_id,mbr.cust_fname,mbr.cust_lname,mbr.cust_profile,mbr.cust_role,skl.skl_id,skl.skl_name, blg.* FROM `tbl_posts` `blg` LEFT JOIN `tbl_skills` `skl` ON `blg`.`blog_skills`= `skl`.`skl_id` LEFT JOIN `tbl_members` `mbr` ON `blg`.`blog_posted_by`=`mbr`.`cust_id` WHERE `blg`.`blog_expired` >= '".$date."' AND `blg`.`blog_status`='0' ";
	
		// if(isset($skills)){
		// 	$skills_filter = implode("','", $skills);
		// 	$generatedQuery .= "AND `blg`.`blog_skills` IN('".$skills_filter."') ";
		// }

		if(isset($skills)){			
			foreach ($skills as $key => $value) {
				if($key=='0'){
					@$get_skill1.="`skl`.`skl_name` LIKE '%".$value."%' ";
				}else{
					@$get_skill1.=" OR `skl`.`skl_name` LIKE '%".$value."%' ";
				}
					}	
				
			$generatedQuery .= "AND (".@$get_skill1.")";
		}

		if(!empty($blog_title)){				
			$generatedQuery .= "AND `blg`.`blog_title` LIKE '%".$blog_title."%' ";
		}
		if(!empty($blog_tags)){				
			$generatedQuery .= "AND `blg`.`blog_tags` LIKE '%".$blog_tags."%' ";
		}
			if(!empty($blog_tools)){				
			$generatedQuery .= "AND `blg`.`blog_tools` LIKE '%".$blog_tools."%' ";
		}
		if(!empty($skl_name)){				
			$generatedQuery .= "AND `skl`.`skl_name` LIKE '%".$skl_name."%' ";
		}
		
/*
		

		if(isset($tags)){
			$tags_filter = implode(",", $tags);			
			$generatedQuery .= "AND `blg`.`blog_tags` LIKE '%".$tags_filter."%' ";
		}*/

		if(isset($tags)){
			$tags_filter = implode(",", $tags);	
			foreach ($tags as $key => $value) {
				if($key=='0'){
					@$get_tags1.="`blg`.`blog_tags` LIKE '%".$value."%' ";
				}else{
					@$get_tags1.=" OR `blg`.`blog_tags` LIKE '%".$value."%' ";
				}
					}	
				
			$generatedQuery .= "AND (".@$get_tags1.")";
		}
		
		if(isset($tools)){			
			foreach ($tools as $key => $value) {
				if($key=='0'){
					@$get_tool1.="`blg`.`blog_tools` LIKE '%".$value."%' ";
				}else{
					@$get_tool1.=" OR `blg`.`blog_tools` LIKE '%".$value."%' ";
				}
					}	
				
			$generatedQuery .= "AND (".@$get_tool1.")";
		}

       if(isset($workstatus)){
			$work_filter = implode("','", $workstatus);
			if($work_filter!='All'){
			$generatedQuery .= "AND `blg`.`blog_working_status` IN('".$work_filter."') ";
		      }
		}

		if(isset($locations)){
			$location_filter = implode("','", $locations);
			if($location_filter!='Worldwide'){
			$generatedQuery .= "AND `blg`.`blog_locations` IN('".$location_filter."') ";
	                  }
		}

		if(isset($features)){
			$feature_filter = implode("','", $features);

			if($feature_filter=="like"){
				$generatedQuery .= "ORDER BY `blg`.`blog_likes` DESC ";
			}else if($feature_filter=="view"){	
				$generatedQuery .= "ORDER BY `blg`.`blog_views` DESC ";
			}else if($feature_filter=="comment"){
				$generatedQuery .= "ORDER BY `blg`.`blog_comments` DESC ";
			}else if($feature_filter=="recent"){	
				$generatedQuery .= "ORDER BY `blg`.`blog_created` DESC ";
			}
		}else{ $generatedQuery .= "ORDER BY `blg`.`blog_created` DESC ";}

		if(!empty($page)){  
  			$postLimit=8;
  			$postStart = ceil($page *  $postLimit);
			//$generatedQuery .= "ORDER BY `blg`.`blog_id` = 'RANDOM' LIMIT ".$postStart.", ".$postLimit; 
			$generatedQuery .= "LIMIT ".$postStart.", ".$postLimit; 
  		}else{
			$postLimit=8; 
			//$generatedQuery .= "ORDER BY `blg`.`blog_id` = 'RANDOM' LIMIT 0, ".$postLimit; 
			$generatedQuery .= " LIMIT 0, ".$postLimit; 
		}

		return $generatedQuery;
	}

	/*--- Load Home Page Content ---*/
	public function product_data($page,$skills,$tags,$tools,$workstatus,$features,$locations,$blog_title,$blog_tags,$blog_tools,$skl_name){
		$runQuery = $this->postPostFilterQuery($page,$skills,$tags,$tools,$workstatus,$features,$locations,$blog_title,$blog_tags,$blog_tools,$skl_name);
		$query=$this->db->query($runQuery);
		$count = $query->num_rows();
		//echo $this->db->last_query($query);  
		$output = '';
		if($query->num_rows()>0){
			foreach($query->result() as $row){
				/*--- Blog Picture ---*/
			if(!empty($row->blog_cover_picture)){
					$profile='uploads/works/cover/'.$row->blog_cover_picture;
				}else{
					$profile='assets/img/p1.png';
				}
				/*--- Blog Title ---*/
				$textlength = strlen($row->blog_title);
				if($textlength>=29){
					$blogTitle=substr($row->blog_title,0,29).'..';
				}else{
					$blogTitle=substr($row->blog_title,0,29);
				}
				/*--- Blog Tags ---*/
				$tags = explode(",",$row->blog_tags);
				$postTag='';
				foreach($tags as $tgs){
					$postTag.='<a href="'.base_url('home/tags/').$tgs.'" class="be-post-tag">'.$tgs.'</a>, ';
				}
				//echo $row->blog_tags;die;
				/*--- Blog Posted Member Picture ---*/
				if(!empty($row->cust_profile)){
					$postedProfile='uploads/members/'.$row->cust_profile;
				}else{
					$postedProfile='assets/img/a1.png';									
				}
				/*--- Blog Posted Member Name ---*/
				$memberId = strlen($row->cust_fname.' '.$row->cust_lname);
				if($memberId>=16){ 
					$postedBy=substr($row->cust_fname.' '.$row->cust_lname,0,16).'..';
				}else{
					$postedBy=substr($row->cust_fname.' '.$row->cust_lname,0,16);
				}
				if($row->blog_likes!=0){$likes=$row->blog_likes;}else{$likes="0";}
				if($row->blog_views!=NULL){$views=$row->blog_views;}else{$views="0";}
				if($row->blog_comments!=NULL){$comments=$row->blog_comments;}else{$comments="0";}

				$output .= '
					<div class="category-1 mix custom-column-5">
						<div class="be-post">

							<a href='.site_url('projects/'.base64url_encode($row->blog_id).'/'.$row->blog_title_slug).' class="be-img-block">
								<img src='.site_url($profile).' alt='.$blogTitle.' class="hover-img">
							</a>
							<a href='.site_url('projects/'.base64url_encode($row->blog_id).'/'.$row->blog_title_slug).' class="be-post-title">'.$blogTitle.'</a>
							
							<span style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;color:#a1a5b1;">'.rtrim($postTag,' ,').'</span>

							<div class="author-post">
								<img src='.site_url($postedProfile).' class="ava-author">
								<span>by <a href="'.site_url('peoples/profile/'.base64url_encode($row->cust_id)).'">'.$postedBy.'</a></span>
							</div>

							<div class="info-block">
								<span><i class="fa fa-thumbs-o-up"></i> '.$likes.'</span>
								<span><i class="fa fa-eye"></i> '.$views.'</span>
								<span><i class="fa fa-comment-o"></i> '.$comments.'</span>
							</div>
						</div>
					</div>';	
			}
		}else{
			$output = '';
		}
		return $output;
	} 

	/*--- Blog Title Keyword Search ---*/
	public function postTitleSearch($blog_title,$keywords,$table){
		$this->db->like($blog_title, $keywords);
		$this->db->where('blog_status','0');			
		$this->db->from($table);
		$query=$this->db->get();		
		if($query->num_rows()!= 0){
			return $query->result();
		}else{
			return false;
		} 
	}

	/*--- Blog Tags Keyword Search ---*/ 
	public function postTagSearch($blog_tags,$keywords,$table){
		$this->db->like($blog_tags, $keywords);
		$this->db->where('blog_status','0');			
		$this->db->from($table);
		$query=$this->db->get();		
		if($query->num_rows()!= 0){
			return $query->result();
		}else{
			return false;
		}
	}

	/*--- Blog Skills Keyword Search ---*/ 
	public function postSkillSearch($blog_skills,$keywords){
		$this->db->select('blg.*,skl.skl_id,skl.skl_name');
		$this->db->join('tbl_posts blg','skl.skl_id=blg.blog_skills','LEFT');
		$this->db->like('skl.'.$blog_skills, $keywords);	
		$this->db->from('tbl_skills skl');
		$query=$this->db->get();		
		if($query->num_rows()!= 0){
			return $query->result();
		}else{
			return false;
		}
	}


	function check_email($email,$table){
		$this->db->where('sub_email',$email);	
		$query=$this->db->get($table);
		if($query->num_rows() != 0) return $query->num_rows();
		else return false;
	}

	
}