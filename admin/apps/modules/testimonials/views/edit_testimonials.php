 <!-- [ Main Content ] start --> 
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-8 col-sm-6">
                            <div class="page-header-title">
                                <h5 class="mb-2">Add Testimonials</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=base_url();?>"><i class="feather icon-home"></i></a></li> 
                                <li class="breadcrumb-item"><a href="#!">Add Testimonials</a></li>
                            </ul>                      
                        </div> 
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start --> 
            <div class="row"> 
                <div class="col-md-12">
                    <form class="form-horizontal custom-form" action="" method="post" role="form" enctype="multipart/form-data">
                        <div class="card">                              
                            <div class="card-header">
                                <!-- <h5>Add Teacher</h5> -->  
                            </div>
                            <div class="card-body"> 
                                  <?php $msg=$this->session->flashdata('msg');  
  if($msg){  ?>
  <div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible" data-dismiss="alert" aria-hidden="true">
      <strong><?php echo $msg['type'] ?></strong> <?php echo $msg['message']; ?>
    </div>  
  <?php } ?>
                                <div class="row">   
                                    <div class="col-sm-6">
                                        <div class="form-group"> 
                                            <label class="col-form-label">Name<span>*</span></label>
                                            <input type="text" class="form-control form-control-sm" placeholder="Enter Name"  value="<?=$test_info->name;?>" name="name" required/>
                                        </div> 
                                        
                                    </div> 
                                    <div class="col-sm-6">
                                        <div class="form-group"> 
                                            <label class="col-form-label">Designation<span>*</span></label>
                                            <input type="text" class="form-control form-control-sm" placeholder="Enter Designation" value="<?=$test_info->profile;?>" name="profile" required/>
                                        </div> 
                                        
                                    </div> 
                                     <div class="col-sm-6">
                                        <div class="form-group"> 
                                            <label class="col-form-label">Location<span>*</span></label>
                                            <input type="text" class="form-control form-control-sm" placeholder="Enter Location" value="<?=$test_info->location;?>" name="location" required/>
                                        </div> 
                                        
                                    </div> 
                                    <div class="col-sm-6">
                                        <div class="form-group"> 
                                            <label class="col-form-label">Profile Image<span>*</span></label>
                                            <input type="file" name="img" class="form-control form-control-sm" required/>
                                            <input type="hidden" name="prev_image" value="<?=$test_info->img;?>" class="form-control form-control-sm" />
                                       
                                      <?php if(!empty($test_info->img)){?> <img src="<?=base_url('uploads/testimonials/').$test_info->img;?>" width="60px" height="60px" style="border: 1px solid #a1a1a1;"> 
                                  <?php }?>
                                        </div>
                                      <!--   <img src="assets/images/complete.png" width="60px" height="60px" style="border: 1px solid #a1a1a1;"> -->
                                    </div> 
                                     <div class="col-sm-12">
                                        <div class="form-group"> 
                                            <label class="col-form-label">Title<span>*</span></label>
                                            <input type="text" class="form-control form-control-sm" placeholder="Enter Title"  value="<?=$test_info->title;?>"name="title" required/>
                                        </div> 
                                        
                                    </div> 

                                    <div class="col-sm-12"> 
                                        <div class="form-group"> 
                                            <label class="col-form-label">Description<span>*</span></label> 
                                            <textarea  name="desc" class="form-control form-control-sm"  required><?=$test_info->desc;?></textarea>
                                        </div>
                                    </div> 
                                   
                                   

                                </div>                               
                            </div>
                            <div class="card-footer"> 
                                <div class="row"> 
                                    <div class="col-sm-12 text-left">
                                        <button class="btn btn-warning" type="clear">Clear</button>  
                                        <button class="btn btn-success" type="submit">Submit</button>
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
