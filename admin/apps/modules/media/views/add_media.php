 <!-- [ Main Content ] start --> 
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-8 col-sm-6">
                            <div class="page-header-title">
                                <h5 class="mb-2">Add Media</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=base_url();?>"><i class="feather icon-home"></i></a></li> 
                                <li class="breadcrumb-item"><a href="#!">Add Media</a></li>
                            </ul>                      
                        </div> 
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start --> 
            <div class="row"> 
                <div class="col-md-12">
                    <form class="form-horizontal custom-form " action="" method="post" role="form" enctype="multipart/form-data">
                        <div class="card"> 
                        <div class="card-header">
                        <h5>Images Upload</h5>
                    </div>                             
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
                                    
                                    <div class="col-sm-12">
                                        <div class="fallback">
                                <input name="img" type="file" required="" accept="image/*" />
                            </div>
                                     
                                    </div> 
                                </div>
                                
                                                           
                            </div>
                            <div class="card-footer"> 
                                <div class="row"> 
                                    <div class="col-sm-12 ">
                                     
                                        <button class="btn btn-primary" type="submit">Upload Now</button>
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
