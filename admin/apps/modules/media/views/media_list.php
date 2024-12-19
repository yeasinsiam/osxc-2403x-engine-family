 <!-- [ Main Content ] start --> 
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="page-header-title">
                                <h5 class="mb-2">All Media</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li> 
                                <li class="breadcrumb-item"><a href="#!">All Media</a></li>
                            </ul>                      
                        </div> 
                        <div class="col-6 ">
                            <div class="page-header-title " style="float: right">
                              <a href="<?=base_url('media/add');?>">  <h5 class="mb-2">Add Media</h5></a>
                            </div>
                                              
                        </div> 
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start --> 
            <div class="row"> 
                <div class="col-md-12">
                    <div class="card"> 
                        <div class="card-header">
                        <h5>All Media</h5>
                    </div>
                        <div class="card-body"> 
                           <?php $msg=$this->session->flashdata('msg');  
  if($msg){  ?>
  <div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible" data-dismiss="alert" aria-hidden="true">
      <strong><?php echo $msg['type'] ?></strong> <?php echo $msg['message']; ?>
    </div>  
  <?php } ?>
                            <div class="row">
                                 <?php $i=1; if($media==true){
                                        foreach ($media as $value) {?>
                                <div class="col-lg-4 col-sm-6">
                                <div class="thumbnail mb-4">
                                    <div class="thumb">
                                        <a href="<?=base_url('uploads/media/').$value->img;?>" data-lightbox="1" data-title="My caption 1">
                                            <img src="<?=base_url('uploads/media/').$value->img;?>" alt="" class="img-fluid img-thumbnail">
                                        </a>
                                    </div>
                                    <input type="text" value="<?=base_url('uploads/media/').$value->img;?>" class="form-control" style="
    width: 80%; display: inline-block;padding: 0px;">
                                    <a href="<?=base_url('media/delete/').$value->id;?>" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure you want to delete this category?');" style="
    margin-left: 7%;">
                                                <i class="feather icon-trash-2"></i></a>
                                </div>
                            </div>
                        <?php }}?>
                        </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- [ Main Content ] end -->
        </div>
    </div>

   