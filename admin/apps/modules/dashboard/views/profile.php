
    <!-- [ Main Content ] start --> 
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Profile</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li> 
                                <li class="breadcrumb-item"><a href="#!">Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start --> 
            <div class="row"> 
                <div class="col-md-12">
                    <form class="form-horizontal custom-form"  action="<?php echo site_url('dashboard/edit_profile');?>" method="post" id="editprofile" enctype="multipart/form-data">
                        <div class="card">   
                            <div class="card-header">
                                <h5>Profile Details</h5>  
                            </div>

                            <div class="card-body"> 
                               <?php $msg=$this->session->flashdata('msg'); if($msg){  ?>
        <div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible admin-msg" data-dismiss="alert" aria-hidden="true">
            <strong><?php echo $msg['type'] ?></strong> <?php echo $msg['message']; ?>
        </div>  
    <?php } ?>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="text-center card-box">
                                            <div class="member-card">
                                                <div class="thumb-xl member-thumb m-b-10 center-block text-center">
                                                  <?php if(empty($this->loginuser->mst_picture)){?>
                                                    <img src="<?=base_url();?>assets/images/default-avatar.png" class="img-circle img-thumbnail" alt="profile-image">
                                                  <?php }else{?>
                                                    <img src="<?=base_url('uploads/members/').$this->loginuser->mst_picture;?>" class="img-circle img-thumbnail" alt="profile-image">
                                                  <?php }?>
                                                    <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9"> 
                                        <div class="row">
                                         
                                            <div class="col-sm-12">
                                                <div class="form-group"> 
                                                    <label class="col-form-label">First Name<span>*</span></label>
                                                    <input type="text" class="form-control" name="mst_fname" value="<?php echo $this->loginuser->mst_fname;?>" required="required" />
                                                </div>
                                            </div>  
                                             <div class="col-sm-12">
                                                <div class="form-group"> 
                                                    <label class="col-form-label">Last Name<span>*</span></label>
                                                    <input type="text" class="form-control" name="mst_lname" value="<?php echo $this->loginuser->mst_lname;?>" required="required" />
                                                </div>
                                            </div>  
                                            <div class="col-sm-12">
                                                <div class="form-group"> 
                                                    <label class="col-form-label">Email Id<span>*</span></label>
                                                    <input type="text" class="form-control" name="mst_email" value="<?php echo $this->loginuser->mst_email;?>"  readonly />
                                                </div>
                                            </div> 
                                            <div class="col-sm-12">
                                                <div class="form-group"> 
                                                    <label class="col-form-label">Contact No.<span>*</span></label>
                                                    <input type="number" class="form-control" name="mst_phone_no" value="<?php echo $this->loginuser->mst_phone_no;?>" required="required" />
                                                </div>
                                            </div>  
                                            <div class="col-sm-12">
                                                <div class="form-group"> 
                                                    <label class="col-form-label">Profile Image</label> 
                                                    <input type="file"  name="img" class="form-control form-control-sm" />
                                                     <input type="hidden" class="form-control" name="prev_image" value="<?php echo $this->loginuser->mst_picture;?>" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>                             
                            </div>
                            <div class="card-footer"> 
                                <div class="row"> 
                                    <div class="col-sm-12 text-right"> 
                                        <button class="btn btn-success" type="submit">Submit</button>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


                    <form class="form-horizontal custom-form" action="<?php echo site_url('dashboard/change_password');?>" method="post" role="form">
                        <div class="card">  
                        <div class="card-header">
                            <h5>Change Password</h5>  
                        </div>
                            <div class="card-body">  
                               <?php $ch_msg=$this->session->flashdata('ch_msg'); if($ch_msg){  ?>
        <div class="alert alert-<?php echo $ch_msg['class'] ?> alert-dismissible admin-msg" data-dismiss="alert" aria-hidden="true">
            <strong><?php echo $ch_msg['type'] ?></strong> <?php echo $ch_msg['message']; ?>
        </div>  
    <?php } ?>
                                <div class="row">  
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="col-form-label">Current password</label>
                                            <input type="password" class="form-control form-control-sm" name="old_password" required="">
                                        </div>
                                    </div> 
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">New password</label>
                                            <input type="password" class="form-control form-control-sm" name="password" required="">
                                        </div>
                                    </div> 
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Confirm new password</label>
                                            <input type="password" class="form-control form-control-sm" name="confirm_password" required="">
                                        </div>
                                    </div> 
                                </div>                            
                            </div>
                            <div class="card-footer"> 
                                <div class="row"> 
                                    <div class="col-sm-12 text-right"> 
                                        <button class="btn btn-success" type="submit">Change Password</button> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div> 
            <!-- [ Main Content ] end -->
        </div>
    </div> 
    <!-- [ Main Content ] end --> 
