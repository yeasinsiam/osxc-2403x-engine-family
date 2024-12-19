
    <!-- [ Main Content ] start --> 
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-8 col-sm-6">
                            <div class="page-header-title">
                                <h5 class="mb-2">General Settings</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=base_url();?>"><i class="feather icon-home"></i></a></li> 
                                <li class="breadcrumb-item"><a href="#!">Settings</a></li>
                            </ul>                      
                        </div> 
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start --> 
            <div class="row"> 
                <div class="col-md-12">
                    <form class="form-horizontal custom-form" action="" method="post" role="form">
                        <div class="card">                              
                            <div class="card-header">
                                <!-- <h5>General Settings</h5>  --> 
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
                                        <h5 class="mt-0">Enquiry Email</h5>
                                        <hr class="mt-0">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row form-group">
                                            <div class="col-sm-3">
                                                <label class="col-form-label">Email Id: </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="email" name="email" class="form-control form-control-sm" value="<?=$info->email;?>" placeholder="Enter enquiry email id..." />
                                            </div>
                                        </div> 
                                    </div>
                                </div>   
                                <div class="row">   
                                    <div class="col-sm-12">
                                        <h5 class="mt-4">Social Url</h5>
                                        <hr class="mt-0">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row form-group">
                                            <div class="col-sm-3">
                                                <label class="col-form-label">Facebook: </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" name="facebook" class="form-control form-control-sm" placeholder="Enter url..." value="<?=$info->facebook;?>" />
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-3">
                                                <label class="col-form-label">Twitter: </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" name="twitter" class="form-control form-control-sm" placeholder="Enter url..." value="<?=$info->twitter;?>" />
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-3">
                                                <label class="col-form-label">Linkedin: </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" name="linkedin" class="form-control form-control-sm" placeholder="Enter url..." value="<?=$info->linkedin;?>" />
                                            </div>
                                        </div> 
                                    </div>
                                </div>    
                                <div class="row">   
                                    <div class="col-sm-12">
                                        <h5 class="mt-4">Contact Details</h5>
                                        <hr class="mt-0">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row form-group">
                                            <div class="col-sm-3">
                                                <label class="col-form-label">Address: </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <textarea class="form-control form-control-sm" name="address"placeholder="Enter your address..." rows="5"><?=$info->address;?></textarea>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-3">
                                                <label class="col-form-label">Email Id: </label>
                                            </div> 
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control form-control-sm" placeholder="Eg: youremail@gmail.com..." value="<?=$info->comp_email;?>" name="comp_email" />
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-3">
                                                <label class="col-form-label">Contact No: </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control form-control-sm" placeholder="Eg: 999 999 9999..."  name="phone" value="<?=$info->phone;?>" />
                                            </div>
                                        </div> 
                                    </div>
                                </div>  
                                
                                <!-- <div class="row">   
                                    <div class="col-sm-12">
                                        <div class="accordion" id="accordionExample">
                                            <div class="card mb-0">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0"><a href="#!" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="collapsed">Facebook</a></h5>
                                                </div>
                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <input type="text" class="form-control form-control-sm" placeholder="Eg: Url..." />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-0">
                                                <div class="card-header" id="headingTwo">
                                                    <h5 class="mb-0"><a href="#!" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Collapsible Group Item #2</a></h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample" style="">
                                                    <div class="card-body">
                                                        <input type="text" class="form-control form-control-sm" placeholder="Eg: Url..." />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingThree">
                                                    <h5 class="mb-0"><a href="#!" class="" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Collapsible Group Item #3</a></h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <input type="text" class="form-control form-control-sm" placeholder="Eg: Url..." />
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>      
                                </div>  -->                              
                            </div>
                            <div class="card-footer"> 
                                <div class="row"> 
                                    <div class="col-sm-12 text-right">
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