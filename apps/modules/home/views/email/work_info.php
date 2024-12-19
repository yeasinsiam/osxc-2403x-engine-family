<?php $Active=$this->session->userdata('Logged_Users');?>
  
<div id="content-block">
	<style type="text/css">
	
   div#st-3 {
    display: none;
}
@media only screen and (max-width:768px) {
 .be-ava-left {
    position: absolute;
    top: 70px;
    left: 6px;
    width: 100px;
    text-align: center;
}
.be-ava-right {
    position: absolute;
    top: 70px;
    right: 6px;
    width: 100px;
    text-align: center;
}
}
@media only screen and (min-width:770px) {
a.be-ava-left.btn.color-1.size-2.hover-1{
	width: 59px;left: 6px;padding:11px 19px 10px 6px;
}
.be-ava-right {
width: 65px;right: 3px;padding: 11px 19px 10px 6px !important;
}
}
	</style>
		<div class="container custom-container be-detail-container">
			<div class="row">

				<div class="col-md-9 col-md-push-3">					
					<div class="be-large-post">
						<div class="info-block" >

							<div class="be-large-post-align">
								<span><i class="fa fa-thumbs-o-up"></i> <span id="countLikeDislike"></span></span>
								
								
								<?php $ipaddress = $_SERVER['REMOTE_ADDR'];
									if(isset($ipaddress)){?>
									<span><i class="fa fa-eye"></i> <?php getWorkViews($post_info->blog_id,$ipaddress);?></span>
								<?php } ?>
								<span><i class="fa fa-comment-o"></i> <span id="countProjectCommentOne"></span></span>
								<?php if(@$this->loginuser->cust_id==$post_info->blog_posted_by){?>
								<span>
									<a href="<?php echo site_url('account/edit_work/'.base64url_encode($post_info->blog_id));?>"><i class="fa fa-edit" style="color: #b4b7c1;vertical-align: bottom;"></i><a></span>
									<?php }?>
							</div>
						</div>
					
						<div class="blog-content popup-gallery be-large-post-align" style="margin-bottom: 5px">
							
							<h5 class="be-post-title to">
								<?php echo $post_info->blog_title;?>
							</h5>
							
								<?php
								 $tools = explode(",",$post_info->blog_tools);
								 foreach($tools as $tls){
								 if(!empty($tls)){
								 $get_tools[]='<a href="'.base_url('home/tools/').$tls.'" class="be-post-tag">'.$tls.'</a>';
								 }else{$get_tools[]='';}

								 }
								$skills = explode(",",$post_info->blog_skills);	
								foreach($skills as $sls){
								if(!empty($sls)){
									$get_skills[]='<a href="'.base_url('home/skills/').skills($sls).'" class="be-post-tag">'.skills($sls).'</a>';
								}else{$get_skills[]='';}
								}

								$postTag='';
									
								 foreach(array_merge($get_tools,$get_skills) as $skl_tls){
								 	if(!empty($skl_tls)){
                            	  $postTag.=$skl_tls.", ";
                            	}else{$postTag.="";}
                            	 }
                            	
                            
							?>
							<span style="color:#a1a5b1">
							<?php  echo rtrim($postTag,' ,'); ?>
											    	
											
							</span>
										

                          

							<div class="clear"></div>
					 <?php if($post_img_info==true && $post_img_info[0]->pg_img_type=='1'){?>
						     		<div class="be-large-post-slider type-wide">
									<div class="swiper-container thumbnails-preview" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
						                <div class="swiper-wrapper">
						     	<?php foreach ($post_img_info as $key => $img_info) {
                               if(!empty($img_info->pg_img)){ ?>
					                    	<div class="swiper-slide <?php if($key=='0')echo'active';?>" data-val="<?=$key;?>">

					                    		 <img class="img-responsive img-full" src="<?php echo site_url('uploads/works/'.$img_info->pg_img);?>" alt="<?php echo $img_info->pg_img;?>">
					                     	 <div class="slider-text"><?php echo $img_info->pg_desc;?></div>
					                    	</div>
					                    <?php }}?>
					                    
					                    
					                    	
					                    	
					                    </div>
						                <div class="pagination hidden"></div>
						                <div class="swiper-arrow-left type-2"></div>
						                <div class="swiper-arrow-right type-2"></div>
						            </div>
						            <div class="swiper-container thumbnails" data-autoplay="0" 
						            data-loop="0" data-speed="500" data-center="0" 
						            data-slides-per-view="responsive" data-xs-slides="3" 
						            data-sm-slides="5" data-md-slides="5" data-lg-slides="5" 
						            data-add-slides="5">
						                <div class="swiper-wrapper">
						     <?php foreach ($post_img_info as $key => $img_info) {
                               if(!empty($img_info->pg_img)){ ?>
											<div class="swiper-slide  <?php if($key=='0')echo'current active';?>" data-val="<?=$key;?>">
												
												<img src="<?php echo site_url('uploads/works/thumbnail/'.$img_info->pg_img);?>" alt="<?php echo $img_info->pg_img;?>">
											</div>
										<?php }}?>
											
										</div>
										<div class="pagination hidden"></div>
									</div>
								</div>
								<br/>
								<div class="post-text">
								<p><?php echo $post_info->blog_description;?></p>
   
							</div>
							<?php } else if($post_img_info==true && $post_img_info[0]->pg_img_type=='0'){
							?>
								<br/>
							<div class="post-text">
								<p><?php echo $post_info->blog_description;?></p>
   
							</div>
						<div class="post-text">	
						<?php foreach ($post_img_info as $key => $img_info) {
                               if(!empty($img_info->pg_img)){ ?>						
								    <a class="popup-a" href="<?php echo site_url('uploads/works/'.$img_info->pg_img);?>">
									<img src="<?php echo site_url('uploads/works/'.$img_info->pg_img);?>" alt="">
									</a>						
<p></p>
								<p><?=$img_info->pg_desc;?></p>
							<?php }}?>
							
							</div>
						<?php }else{?>
							<br/>
								<div class="post-text">
								<p><?php echo $post_info->blog_description;?></p>
   
							</div>
							<?php }?>
					<?php if($post_info->blog_video_type=='1'){
					$url=str_replace("https://vimeo.com/","https://player.vimeo.com/video/",$post_info->blog_video_url);?>
							<br/>
						<div class="be-largepost-iframe 
							embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="<?=$url;?>"></iframe>
							</div><?php }else if($post_info->blog_video_type=='0'){
								$url=str_replace("https://www.youtube.com/watch?v=","https://www.youtube.com/embed/",$post_info->blog_video_url);
								?>	<br/>
								<div class="be-largepost-iframe 
							embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="<?=$url;?>"></iframe>
						</div>
					<?php }?>
							
							<!--<div class="post-text">-->
							<!--	<p><?php echo $post_info->blog_description;?></p>-->

                             

							<!--</div>-->
						</div>


						<div class="row">
									<div class="col-xs-12 col-sm-6">
										<div class="be-bottom">
						<div class="be-large-post-align">
							<h3 class="letf-menu-article">
								Tags
							</h3>
							<div class="tags_block clearfix">
                            <?php $tags = explode(",",$post_info->blog_tags);?>
								<ul>
                                <?php foreach($tags as $tgs){ ?>
									<li><a href="<?=base_url('home/tags/').$tgs;?>"><?php echo $tgs;?></a></li>
                                <?php } ?>
								</ul>
							</div>
						</div>	
</div></div>
<div class="col-xs-12 col-sm-6">
										<div class="be-bottom">
							<div class="be-large-post-align">
							<h3 class="letf-menu-article">
								Share
							</h3>
					<ul class="soc_buttons light">
						<li><a href="javascript:void(0);" data-network="facebook" class="st-custom-button"><i class="fa fa-facebook"></i></a></li>
						<li><a href="javascript:void(0);" data-network="linkedin" class="st-custom-button"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="javascript:void(0);" data-network="twitter" class="st-custom-button"><i class="fa fa-twitter"></i></a></li>
						
						<li><a href="javascript:void(0);" data-network="pinterest" class="st-custom-button"><i class="fa fa-pinterest-p"></i></a></li>
						<li><a href="javascript:void(0);" data-network="whatsapp" class="st-custom-button"><i class="fa fa-whatsapp"></i></a></li>
						
						</ul>
							
						</div>	
					</div></div></div>

						
				
					</div>
					
			  <?php if($relatate_work!=false){ ?>
					<div class="row">
						 <?php foreach ($relatate_work as $rlt_value) {?>
						 
						<div class="col-md-4">
							<div class="be-post">
								<a href="<?php echo site_url('projects/'.base64url_encode($rlt_value->blog_id).'/'.$rlt_value->blog_title_slug);?>" class="be-img-block">
								<?php if(!empty($rlt_value->blog_cover_picture)){ ?>
												<img src="<?php echo site_url('uploads/works/cover/'.$rlt_value->blog_cover_picture);?>" alt="<?php echo $rlt_value->blog_title;?>" class="hover-img">
											<?php }else{ ?>
												<img src="<?php echo site_url('assets/img/p1.png');?>" alt="<?php echo $rlt_value->blog_title;?>" class="hover-img">
											<?php } ?>
								
								</a>
								<a href="<?php echo site_url('projects/'.base64url_encode($rlt_value->blog_id).'/'.$rlt_value->blog_title_slug);?>" class="be-post-title"><?php $textlength = strlen($rlt_value->blog_title);
													if($textlength>=30){
														echo substr($rlt_value->blog_title,0,30).'..';
													}else{
														echo substr($rlt_value->blog_title,0,30);
													} 
												?></a>
								<?php $tags = explode(",",$rlt_value->blog_tags);
                						$postTag='';
                               foreach($tags as $tgs){
                               	if(!empty($tgs)){
                               $postTag.='<a href="'.base_url('home/tags/').$tgs.'" class="be-post-tag">'.$tgs.'</a>, ';
                           }else{$postTag.='';}
                                	}
                					?>
                			<span style="color:#a1a5b1">
                			<?php   echo rtrim($postTag,' ,'); ?>
                				</span>
											

							
								<div class="author-post">
								<?php if(!empty($rlt_value->cust_profile)){ ?>
													<img src="<?php echo site_url('uploads/members/'.$rlt_value->cust_profile);?>" class="ava-author">
												<?php }else{ ?>
													<img src="<?php echo site_url('assets/');?>img/ava.png" class="ava-author">
												<?php } ?>
								<?php $postedBy = strlen($rlt_value->cust_fname.' '.$rlt_value->cust_lname);
												if($postedBy>=16){ ?>
													<span>by <a href="<?=base_url('/peoples/profile/').base64url_encode($rlt_value->blog_posted_by);?>"><?php echo substr($rlt_value->cust_fname.' '.$rlt_value->cust_lname,0,16).'..';?></a></span>
												<?php }else{ ?>
													<span>by <a href="<?=base_url('/peoples/profile/').base64url_encode($rlt_value->blog_posted_by);?>"><?php echo substr($rlt_value->cust_fname.' '.$rlt_value->cust_lname,0,16);?></a></span>
												<?php } ?>
								</div>
								<div class="info-block">
								<span><i class="fa fa-thumbs-o-up"></i> <?php if($rlt_value->blog_likes!=0){echo $rlt_value->blog_likes;}else{echo "0";}?></span>
												<span><i class="fa fa-eye"></i> <?php if($rlt_value->blog_views!=''){echo $rlt_value->blog_views;}else{echo "0";}?></span>
												<span><i class="fa fa-comment-o"></i> <?php if($rlt_value->blog_comments!=NULL){echo $rlt_value->blog_comments;}else{echo "0";}?></span>
								</div>
							</div>
						</div>
					<?php }?>
						
						
					</div>
						<?php }?>
					
					<div class="be-comment-block"><input type="hidden" name="projectId" id="projectId" value="<?php echo $post_info->blog_id;?>">
						<h1 class="comments-title">Comments (<span id="countProjectComment"></span>)</h1>
						<?php if(isset($Active)){ ?>
						<?php }else{ ?>
							<p class="about-comment-block">
								You must <a href="javascript:void(0)" class="be-signup-link">SIGN UP</a>
								to join the conversation.
							</p>
						<?php } ?>
						

						<div id="display_comment_projects">
						</div>
						
						<?php if(isset($Active)){ ?>
							<br/>
						<div class="be-comment">
							<div class="be-comment-content">
								<div class="row" style="margin-left:0px;margin-right:0px">
									<div>
										<form method="post" id="commentOnProject" enctype="multipart/form-data">
											<div class="form-group">	
												<label class="control-label" for="textarea">Message</label>
												<input type="hidden" name="projectReply" id="projectReply" value="0">
                                    			<input type="hidden" name="projectId" id="projectId" value="<?php echo $post_info->blog_id;?>">
												<textarea rows="10" class="form-input" id="textarea" name="comments" style="height:100px"></textarea>
											</div>
											<div class="submit-btns">
												<button type="submit" class="btn color-1 size-2 hover-1 btn-right btnProjectOnComment">Post</button>
											</div>
										</form>
									</div>
									<span id="commentProjectMessage"></span>
								</div>
							</div>		
						</div>
						<?php }else{ ?>
						<?php } ?>

					</div>

				</div>

		<?php if(@$this->loginuser->cust_id!=$post_info->cust_id){ ?>
				<div class="col-md-3 col-md-pull-9 left-feild">
                    <?php //echo "<prE>";print_r($post_info);?>
					<div class="be-user-block">
						<div class="be-user-detail">
							<a class="be-ava-user" href="javascript:void(0)">
                            <?php if(!empty($post_info->cust_profile)){ ?>
                                <img src="<?php echo site_url('uploads/members/'.$post_info->cust_profile);?>" alt="<?php echo $post_info->cust_fname.' '.$post_info->cust_lname;?>" class="img-circle">
                            <?php }else{ ?>
								<img src="<?php echo site_url('assets/');?>img/ava.png" alt="<?php echo $post_info->cust_fname.' '.$post_info->cust_lname;?>"> 
                            <?php } ?>
							</a>
							<p class="be-use-name"><a href="<?=base_url('peoples/profile/').base64url_encode($post_info->cust_id);?>"><?php echo $post_info->cust_fname.' '.$post_info->cust_lname;?></a></p>
							<span class="be-user-info">
								<?php if(!empty($post_info->Country_Name)){?>
                                    <?php echo $post_info->Country_Name;?>
                                <?php }?>
							</span>
						</div>

						<div class="be-user-activity-block">
							<div class="row">

								<?php if(isset($Active)){ ?>
									<?php if($Active->cust_id==$post_info->blog_posted_by){?>
										<!-- <div class="col-lg-6 col-lg-offset-3">
											<a href="javascript:void(0)" class="col-lg-6 be-user-activity-button send-btn be-message-type"><i class="fa fa-envelope-o"></i>MESSAGE</a>
										</div> -->
										
									<?php }else{ ?>
										<div class="col-lg-6">
											<?php if($myfollowing!=false){?>
												<a href="javascript:void(0)" class="be-user-activity-button be-follow-type" followingid="<?php echo $post_info->blog_posted_by;?>" followerid="<?php echo $this->loginuser->cust_id;?>" style="padding:5px;text-align:center">FOLLOWING</a>
											<?php }else{ ?>
												<a href="javascript:void(0)" class="be-user-activity-button be-follow-type" followingid="<?php echo $post_info->blog_posted_by;?>" followerid="<?php echo $this->loginuser->cust_id;?>"><i class="fa fa-plus"></i>FOLLOW</a>
											<?php } ?>
										</div>
										<div class="col-lg-6">
											<a href="javascript:void(0)" class="col-lg-6 be-user-activity-button send-btn be-message-type"><i class="fa fa-envelope-o"></i>MESSAGE</a>
										</div>
									<?php } ?>
								<?php }else{ ?>
										<div class="col-lg-6 login_block">
											<a href="javascript:void(0)" class="be-user-activity-button btn-login btn color-1 size-1" style="padding: 13px 28px;"><i class="fa fa-plus"></i>FOLLOW</a>
										</div>
										<div class="col-lg-6 login_block">
											<a href="javascript:void(0)" class="col-lg-6 be-user-activity-button btn-login be-message-type" style="text-align: initial;"><i class="fa fa-envelope-o"></i>MESSAGE</a>
										</div>
								<?php } ?>
								
							</div>
						</div>
						
						<h5 class="be-title">About Project</h5>
						<p class="be-text-userblock">
							<?php if(!empty($post_info->blog_description)){ ?>
                                <?php $aboutProject = strlen($post_info->blog_description);
                                    if($aboutProject>=229){
                                        echo substr($post_info->blog_description,0,229).'..';
                                    }else{
                                        echo substr($post_info->blog_description,0,229);
                                    } 
                                ?>
                            <?php }?>
						</p>
					</div>
					
					<?php $Active=$this->session->userdata('Logged_Users');?>
					<?php if(isset($Active)){ ?>

						<?php if($this->loginuser->cust_id==$post_info->blog_posted_by){?>
						<?php }else{ ?>
							<?php if($projectslike!=false){ ?><!-- <i class="fa fa-thumbs-o-up"></i> -->
								<a href="javascript:void(0)" class="be-button-vidget like-btn blue-style" projectid="<?php echo $post_info->blog_id;?>" currentUser="<?php echo $this->loginuser->cust_id;?>" ipaddress="<?=$_SERVER['REMOTE_ADDR'];?>">YOU LIKED PROJECT</a>
							<?php }else{ ?>
								<a href="javascript:void(0)" class="be-button-vidget like-btn blue-style" projectid="<?php echo $post_info->blog_id;?>" currentUser="<?php echo $this->loginuser->cust_id;?>" ipaddress="<?=$_SERVER['REMOTE_ADDR'];?>">LIKE PROJECT</a>
							<?php } ?>
						<?php } ?>

					<?php }else{ ?>

						<div class="col-lg-12 login_block" style="padding:0px">
							<a href="javascript:void(0)" class="be-button-vidget btn-login blue-style"><i class="fa fa-thumbs-o-up"></i>LIKE PROJECT</a>
							<br>
						</div>
					
					<?php } ?>
					
                    <?php /*$relatate_work */
                    if($relatate_work!=false){ ?>
					<h3 class="letf-menu-article text-center">Recent Works</h3>
					<div  class="swiper-container" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
                        <div class="swiper-wrapper">
                            <?php foreach($relatate_work as $recents){ ?>
                            <div class="swiper-slide">
                                <div class="be-post">
                                    <a href="<?php echo site_url('projects/'.base64url_encode($recents->blog_id).'/'.$recents->blog_title_slug);?>" class="be-img-block">
                                    <?php if(!empty($recents->blog_cover_picture)){ ?>
                                        <img src="<?php echo site_url('uploads/works/cover/'.$recents->blog_cover_picture);?>" height="202" width="269" alt="omg" class="hover-img">
                                    <?php }else{ ?>
                                        <img src="<?php echo site_url('assets/');?>img/p1.png" height="202" width="269" alt="omg" class="hover-img">
                                    <?php } ?>
                                    </a>
                                    <a href="<?php echo site_url('projects/'.base64url_encode($recents->blog_id).'/'.$recents->blog_title_slug);?>" class="be-post-title">
                                    <?php $textlength = strlen($recents->blog_title);
                                        if($textlength>=29){
                                            echo substr($recents->blog_title,0,29).'..';
                                        }else{
                                            echo substr($recents->blog_title,0,29);
                                        } 
                                    ?>
                                    </a>
                                    	<?php $tags = explode(",",$recents->blog_tags);
                						$postTag='';
                                      foreach($tags as $tgs){
                                      	if(!empty($tgs)){
                                        $postTag.='<a href="'.base_url('home/tags/').$tgs.'" class="be-post-tag">'.$tgs.'</a>, ';
                                         }else{$postTag.='';}
                                         }
                						?>
                					<span style="color:#a1a5b1">
                					<?php  echo rtrim($postTag,' ,');?>
                											</span>
                                    
                                  

                                    <div class="author-post">
                                        <?php if(!empty($recents->cust_profile)){ ?>
                                            <img src="<?php echo site_url('uploads/members/'.$recents->cust_profile);?>" class="ava-author">
                                        <?php }else{ ?>
                                            <img src="<?php echo site_url('assets/');?>img/ava.png" class="ava-author">
                                        <?php } ?>

                                        <?php $postedBy = strlen($recents->cust_fname.' '.$recents->cust_lname);
                                        if($postedBy>=16){ ?>
                                            <span>by <a href="<?=base_url('/peoples/profile/').base64url_encode($recents->blog_posted_by);?>"><?php echo substr($recents->cust_fname.' '.$recents->cust_lname,0,16).'..';?></a></span>
                                        <?php }else{ ?>
                                            <span>by <a href="<?=base_url('/peoples/profile/').base64url_encode($recents->blog_posted_by);?>"><?php echo substr($recents->cust_fname.' '.$recents->cust_lname,0,16);?></a></span>
                                        <?php } ?>
                                    </div>
                                    <div class="info-block">
                                        <span><i class="fa fa-thumbs-o-up"></i> <?php if($recents->blog_likes!=0){echo $recents->blog_likes;}else{echo "0";}?></span>
                                        <span><i class="fa fa-eye"></i> <?php if($recents->blog_views!=''){echo $recents->blog_views;}else{echo "0";}?></span>
                                        <span><i class="fa fa-comment-o"></i> <?php if($recents->blog_comments!=NULL){echo $recents->blog_comments;}else{echo "0";}?></span>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                        <div class="pagination">
                        </div>
                    </div>
                    <?php } ?>
				</div>
  <?php } else{ ?>
				<div class="col-md-3 col-md-pull-9 left-feild">
                    <div class="be-user-block style-3">
                        <div class="be-user-detail">
                            <a class="be-ava-user style-2" href="<?php echo site_url();?>">
                                
                                <?php if(!empty($this->loginuser->cust_profile)){ ?>
                                    <img src="<?php echo site_url('uploads/members/'.$this->loginuser->cust_profile);?>" alt="<?php echo $this->loginuser->cust_fname;?>" style="border-radius: 50%;">
                                <?php }else{?>
                                    <img src="<?php echo site_url('assets/img/ava_10.jpg');?>" alt="<?php echo $this->loginuser->cust_fname;?>"> 
                                <?php } ?>
                                 
                            </a>
                            <!--<a class="be-ava-left btn color-1 size-2 hover-1" href="<?php echo site_url('account/profile');?>" ><i class="fa fa-pencil"></i>Edit</a>-->
                            
                            <!--<div class="be-ava-right btn btn-share color-4 size-2 hover-7" >-->
                            <!--    <i class="fa fa-share-alt"></i>share-->
                            <!--    <div class="share-buttons">-->
                            <!--        <a class="color-1" href="javascript:void(0)"><i class="fa fa-facebook"></i> 0</a>-->
                            <!--        <a class="color-2" href="javascript:void(0)"><i class="fa fa-twitter"></i> 0</a>-->
                            <!--        <a class="color-3" href="javascript:void(0)"><i class="fa fa-pinterest-p"></i> 0</a>-->
                            <!--        <a class="color-4" href="javascript:void(0)"><i class="fa fa-linkedin"></i> 0</a>-->
                            <!--    </div>-->
                            <!--</div>-->

                            <p class="be-use-name"><?php echo $this->loginuser->cust_fname.' '.$this->loginuser->cust_lname;?></p>
                            <div class="be-user-info">
                                <i class="fa fa-envelope-o"></i> <?php echo $this->loginuser->cust_email;?><br>
                                <i class="fa fa-mobile"></i> <?php echo $this->loginuser->cust_phone_no;?>
                            </div>
                            <div class="be-text-tags style-2">
                                <i class="fa fa-map-marker"></i> <?php if(!empty($this->loginuser->cust_address)){echo $this->loginuser->cust_address;}else{echo "NA";};?>
                            </div>

                            <?php if(!empty($get_socials)){ ?>
                                <div class="be-user-social">
                                    <?php if($get_socials->cust_socials_fb=='' && $get_socials->cust_socials_tw=='' && $get_socials->cust_socials_gle=='' && $get_socials->cust_socials_lkn=='' && $get_socials->cust_socials_insta=='' && $pinterest=$get_socials->cust_socials_pntr==''){ ?>
                                        No Social Profile.
                                    <?php }else{ ?>
                                        <?php $facebook=$get_socials->cust_socials_fb; if(!empty($facebook)){ ?>                            
                                            <a class="social-btn color-1" href="<?php echo $facebook;?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                        <?php } ?>
                                        <?php $twitter=$get_socials->cust_socials_tw; if(!empty($twitter)){ ?>
                                            <a class="social-btn color-2" href="<?php echo $twitter;?>" target="_blank"><i class="fa fa-twitter"></i></a>
                                        <?php } ?>
                                        <?php $google=$get_socials->cust_socials_gle; if(!empty($google)){ ?>
                                            <a class="social-btn color-3" href="<?php echo $google;?>" target="_blank"><i class="fa fa-youtube"></i></a>
                                        <?php } ?>
                                        <?php $linkedin=$get_socials->cust_socials_lkn; if(!empty($linkedin)){ ?>
                                            <a class="social-btn color-6" href="<?php echo $linkedin;?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                                        <?php } ?>
                                        <?php $instagram=$get_socials->cust_socials_insta; if(!empty($instagram)){ ?>
                                            <a class="social-btn color-5" href="<?php echo $instagram;?>" target="_blank"><i class="fa fa-instagram"></i></a>
                                        <?php } ?>
                                        <?php $pinterest=$get_socials->cust_socials_pntr; if(!empty($pinterest)){ ?>
                                            <a class="social-btn color-4" href="<?php echo $pinterest;?>" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                                        <?php } ?>
                                    <?php }?>
                                </div>
                                <?php if($get_socials->cust_experience=='' && $get_socials->cust_skills==''){ ?>
                                    <div class="be-user-info">No Experience</div>
                                <?php }else{ ?>
                                    <?php if(!empty($get_socials->cust_experience)){ ?>
                                    <div class="be-user-social">
                                        <div class="be-user-info"><i class="fa fa-star"></i> <?php echo $get_socials->cust_experience;?></div>
                                    </div>
                                    <?php } ?>
                                    <?php if(!empty($get_socials->cust_skills)){ ?>
                                    <div class="be-user-social">
                                        <div class="be-user-info"><i class="fa fa-tags"></i> <?php echo $get_socials->cust_skills;?></div>
                                    </div>
                                    <?php } ?>
                                <?php } ?>
                            <?php } if(!empty($this->loginuser->cust_web_url)){?>
                            <a class="be-user-site" href="http://<?=$this->loginuser->cust_web_url;?>" target="_blank"><i class="fa fa-link"></i> <?=$this->loginuser->cust_web_url;?></a>
                        <?php }?>
                        </div>
                        
                        <div class="be-user-statistic">
                            <div class="stat-row clearfix"><i class="stat-icon icon-views-b"></i> Projects views<span class="stat-counter"><?php echo getMyProjectViews($this->loginuser->cust_id);?></span></div>
                            <div class="stat-row clearfix"><i class="stat-icon icon-like-b"></i>Appreciations<span class="stat-counter"><?php echo getMyProjectAppreciations($this->loginuser->cust_id);?></span></div>
                            <div class="stat-row clearfix"><i class="stat-icon icon-followers-b"></i>Following<span class="stat-counter"><?php echo $this->loginuser->cust_followers;?></span></div>
                            <div class="stat-row clearfix"><i class="stat-icon icon-following-b"></i>Followers<span class="stat-counter"><?php echo getMyFollowing($this->loginuser->cust_id);?></span></div>
                            <div class="stat-row clearfix"><i class="stat-icon icon-like-b"></i>Profile Like<span class="stat-counter"><?php echo $this->loginuser->cust_likes;?></span></div>
                            <div class="stat-row clearfix"><i class="stat-icon icon-views-b"></i>Profile View<span class="stat-counter"><?php echo $this->loginuser->cust_views;?></span></div>
                        </div>
                    </div>
                        <div class="be-desc-block" style="margin-top:-24px">
                        <div class="list-group">
                            <a href="<?php echo site_url('account');?>" class="list-group-item list-group-item-action"><i class="fa fa-dashboard"></i> Dashboard</a>
                            <a href="<?php echo site_url('account/gallery');?>" class="list-group-item list-group-item-action"><i class="fa fa-file-image-o"></i> Gallery</a>
                            <a href="<?php echo site_url('account/works');?>" class="list-group-item list-group-item-action"><i class="fa fa-gavel"></i> My Works</a>
                            <a href="<?php echo site_url('account/package');?>" class="list-group-item list-group-item-action"><i class="fa fa-cube"></i> Package</a>
                             <a href="<?php echo site_url('account/order_history');?>" class="list-group-item list-group-item-action"><i class="fa fa-clock-o"></i> Order History</a>
                            <a href="<?php echo site_url('account/logout');?>" class="list-group-item list-group-item-action"><i class="fa fa-lock"></i> Logout</a>
                        </div>
                    </div>
                    <div class="be-desc-block">
                        <div class="be-desc-author">
                            <div class="be-desc-label">About Me</div>
                            <div class="clearfix"></div>
                            <div class="be-desc-text">
                                <?php if(!empty($pprofile->cust_about_me)){echo $pprofile->cust_about_me;}?>
                            </div>
                        </div>
                                            
                    </div>
                        <div class="be-desc-block">
                        <div class="be-desc-author">
                            <div class="be-desc-label" style="margin-bottom: 0px;">Work Experience</div>
                            <div class="clearfix"></div>
                            <div class="be-desc-text">
                                <div class="be-user-social">
                                
                                </div>
                                			<div class="be-user-social">
								<i class="fa fa-briefcase"></i>  Job Title <span class="pull-right"><?php if(!empty($get_socials->cust_designation)){echo $get_socials->cust_designation;}?></span>
								</div>
								<div class="be-user-social">
								<i class="fa fa-building-o"></i>  Company <span class="pull-right"> <?php if(!empty($get_socials->cust_company)){echo $get_socials->cust_company;}?></span>
								</div>
								<div class="be-user-social">
								<i class="fa fa-star"></i> Experience <span class="pull-right"> <?php if(!empty($get_socials->cust_experience)){echo $get_socials->cust_experience; }?></span>
								</div>
								<div class="be-user-social">
								<i class="fa fa-tags"></i> Skills <span class="pull-right"> <?php if(!empty($get_socials->cust_skills)){echo $get_socials->cust_skills; }?></span>
								</div>
								<div class="be-user-social">
								<i class="fa fa-graduation-cap"></i> Higher Education <span class="pull-right">  <?php if(!empty($get_socials->cust_education)){echo $get_socials->cust_education; }?></span>
								</div>
								<div class="be-user-social">
								<i class="fa fa-language"></i> Languages <span class="pull-right"> <?php if(!empty($get_socials->cust_languages)){ echo $get_socials->cust_languages; }?></span>
								</div>
								<div class="be-user-social" style="border-bottom:none">
								<i class="fa fa-building"></i> Client Work <span class="pull-right"> <?php if(!empty($get_socials->cust_client_work)){ echo $get_socials->cust_client_work; }?></span>
								</div>
                                            
                            </div>
                        </div>
                                            
                    </div>
                                                
                </div>
            <?php }?>
			</div>
		</div>
	</div>
	<?php if(isset($Active)){ ?>
	<div class="large-popup send-m">
		<div class="large-popup-fixed"></div>
		<div class="container large-popup-container">
			<div class="row">
				<div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2 large-popup-content">
					<div class="row">
						<div class="col-md-12">
							<i class="fa fa-times close-m close-button"></i>
							<h5 class="large-popup-title">Send message</h5>
						</div>
						<div class="col-md-12">
							<div id="responseSendMessage"></div>
						</div>
						<form class="popup-input-search" id="sendMessage" method="post">
							<div class="col-md-6">
								<input class="input-signtype" type="hidden" name="receiverid" value="<?php echo $post_info->cust_id;?>" readonly>
								<input class="input-signtype" type="hidden" placeholder="First Name" value="<?php echo $Active->cust_fname;?>" readonly>
							</div>
							<div class="col-md-6">
								<input class="input-signtype" type="hidden" placeholder="Last Name" value="<?php echo $Active->cust_lname;?>" readonly>
							</div>
							<div class="col-md-6">
								<input class="input-signtype" type="hidden" placeholder="Email" value="<?php echo $Active->cust_email;?>" readonly>
							</div>
							<div class="col-md-6">
								<input class="input-signtype" type="hidden" placeholder="Mobile" value="<?php echo $Active->cust_phone_no;?>" readonly>
							</div>
							<div class="col-md-12">
								<textarea class="message-area" name="message" id="message" placeholder="Message" required=""></textarea>
							</div>
							<div class="col-md-12 for-signin">
								<input type="submit" class="be-popup-sign-button btnSendMessage" value="SEND">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	
	<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5e00a58076b26a0014d0514a&product=inline-share-buttons' async='async'></script>
