 <!-- [ Main Content ] start --> 
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-8 col-sm-6">
                            <div class="page-header-title">
                                <h5 class="mb-2">Add Slider</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=base_url();?>"><i class="feather icon-home"></i></a></li> 
                                <li class="breadcrumb-item"><a href="#!">Add Slider</a></li>
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
                                            <label class="col-form-label">Slider Image<span>*</span></label>
                                            <input type="file" name="img" class="form-control form-control-sm" />
                                             <input type="hidden" name="prev_image" value="<?=$slider_info->img;?>" class="form-control form-control-sm" />

                                        </div>
                                     
                                    </div> 
                                     <div class="col-sm-3">
                                     <?php if(!empty($slider_info->img)){?> <img src="<?=base_url('uploads/slider/').$slider_info->img;?>" width="60px" height="60px" style="border: 1px solid #a1a1a1;"> 
                                  <?php }?>
                              </div>
                                </div>
                                 <div class="row">

                                    <div class="col-sm-6"> 
                                        <div class="form-group"> 
                                            <label class="col-form-label">Content1<span>*</span></label> 
                                            <textarea  name="content1" class="form-control form-control-sm"  ><?=$slider_info->content1;?></textarea>
                                        </div>
                                    </div> 
                                </div>
                                 <div class="row">

                                    <div class="col-sm-6"> 
                                        <div class="form-group"> 
                                            <label class="col-form-label">Content2</label> 
                                            <textarea  name="content2" class="form-control form-control-sm" ><?=$slider_info->content2;?></textarea>
                                        </div>
                                    </div> 
                                    
                                    

                                </div>                
                                                
                            </div>
                            <div class="card-footer"> 
                                <div class="row"> 
                                    <div class="col-sm-12 ">
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
