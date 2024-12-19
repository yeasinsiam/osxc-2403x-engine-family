 <!-- [ Main Content ] start --> 
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-8 col-sm-6">
                            <div class="page-header-title">
                                <h5 class="mb-2">Edit Page</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li> 
                                <li class="breadcrumb-item"><a href="#!">Edit Page</a></li>
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
                                    <div class="col-sm-8">
                                        <div class="form-group"> 
                                            <label class="col-form-label">Page Title<span>*</span></label>
                                            <input type="text" class="form-control form-control-sm" placeholder="" value="<?=$page_info->pg_title;?>" name="pg_title" onkeyup="slug_url(this.value,'pg_slug')" required/>
                                             <input type="hidden" name="pg_slug" id="pg_slug" class="form-control form-control-sm" value="<?=$page_info->pg_slug;?>"placeholder="" style="margin-top: 5px;" />
                                        </div> 
                                        
                                    </div> 
                                   


                                    <div class="col-sm-12"> 
                                        <div class="form-group"> 
                                            <label class="col-form-label">Description</label> 
                                            <textarea id="page" name="content1" style="height: 200px"><?=$page_info->content1;?></textarea>
                                        </div>
                                    </div> 

                                     <div class="col-sm-12">
                                        <div class="form-group"> 
                                            <label class="col-form-label">Meta Title</label>
                                            <input type="text" class="form-control form-control-sm" placeholder="Enter meta title..."  name="meta_title" value="<?=$page_info->meta_title;?>" />
                                        </div>  
                                    </div> 
                                    <div class="col-sm-12">
                                        <div class="form-group"> 
                                            <label class="col-form-label">Meta Description</label>
                                            <textarea class="form-control form-control-sm" placeholder="Enter meta description..." name="meta_desc" style="height: 100px"><?=$page_info->meta_desc;?></textarea>
                                        </div>  
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group"> 
                                            <label class="col-form-label">Meta Keyword</label>
                                            <textarea class="form-control form-control-sm" placeholder="Enter meta keyword..." name="meta_keyword"><?=$page_info->meta_keyword;?></textarea>
                                        </div>  
                                    </div>  
                                   
                                    

                                </div>                               
                            </div>
                            <div class="card-footer"> 
                                <div class="row"> 
                                    <div class="col-sm-12 text-right">
                                        <button class="btn btn-warning" type="clear">Clear</button>  
                                        <button class="btn btn-success" type="submit">Update</button>
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
