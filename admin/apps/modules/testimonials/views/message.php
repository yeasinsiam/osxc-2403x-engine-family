 <!-- [ Main Content ] start --> 
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="page-header-title">
                                <h5 class="mb-2">All Enguiry</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=base_url();?>"><i class="feather icon-home"></i></a></li> 
                                <li class="breadcrumb-item"><a href="#!">Message</a></li>
                            </ul>                      
                        </div> 
                        
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start --> 
            <div class="row"> 
                <div class="col-md-12">
                    <div class="card"> 
                        <div class="card-body"> 
                           <?php $msg=$this->session->flashdata('msg');  
  if($msg){  ?>
  <div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible" data-dismiss="alert" aria-hidden="true">
       <?php echo $msg['message']; ?>
    </div>  
  <?php } ?>
                            <div class="table-responsive">
                                <table id="report-table" class="table table-sm table-bordered table-striped mb-0 dataTable no-footer">
                                    <thead>
                                        <tr>
                                            <th>#</th>  
                                              <th>Page</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                             <th>Subjext</th>
                                            <th>Sent Time</th>  
                                            <th style="width: 100px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php $i=1; if($message==true){
                                        foreach ($message as $key=>$value) {?>
                                       
                                        <tr>
                                            <td><?=$i;$i++;?></td>
                                         

                                            <td><?=$value->page;?></td>
                                            <td><?=$value->name;?></td> 
                                            <td><?=$value->email;?></td>  
                                            <td><?=$value->phone;?></td> 
                                            <td><?=$value->subject;?></td>
                                             <td><?=date('d M, Y h:i:s',strtotime($value->created));?></td>  
                                            <td>  
                                            	<!-- <a href="#" class="btn btn-outline-primary has-ripple" title="View" data-toggle="modal" data-target="#modal-message-view<?=$key;?>"><i class="feather icon-eye"></i><span class="ripple ripple-animate" style="height: 36px; width: 36px; animation-duration: 0.705882s; animation-timing-function: linear; background: rgb(255, 255, 255); opacity: 0.4; top: -10px; left: -10px;"></span></a> -->
                                              <a href="#" class="btn btn-success has-ripple" title="Reply" data-toggle="modal" data-target="#reply<?=$key;?>"><i class="feather icon-corner-down-right" ></i> Reply<span class="ripple ripple-animate" style="height: 75.3281px; width: 75.3281px; animation-duration: 0.7s; animation-timing-function: linear; background: rgb(255, 255, 255); opacity: 0.4; top: -25.6563px; left: -29.2969px;"></span></a>                                             
                                                <a href="<?=base_url('testimonials/msg_delete/').$value->id;?>" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure you want to delete this message ?');">
                                                <i class="feather icon-trash-2"></i></a>
                                            </td>
                                            <!--  <div class="modal fade" id="modal-message-view<?=$key;?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form class="form-horizontal custom-form" role="form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><b>Name:</b> <?=$value->name;?> </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group"> 
                                    <label class="col-form-label">Email Id</label>
                                    <input type="text" Value="<?=$value->email;?>" class="form-control form-control-sm" disabled/>
                                </div>
                            </div> 
                            <div class="col-sm-6">
                                <div class="form-group"> 
                                    <label class="col-form-label">Contact No.</label>
                                    <input type="text" Value="<?=$value->phone;?>" class="form-control form-control-sm" disabled/>
                                </div>
                            </div> 
                            <div class="col-sm-12">
                                <div class="form-group"> 
                                    <label class="col-form-label">Subject</label>
                                    <input type="text" Value="<?=$value->subject;?>" class="form-control form-control-sm" disabled/>
                                </div>
                            </div> 
                            <div class="col-sm-12">
                                <div class="form-group"> 
                                    <label class="col-form-label">Description</label>
                                    <textarea class="form-control form-control-sm" rows="3" disabled><?=$value->description;?></textarea> 
                                </div>
                            </div>  
                        </div>
                    </div> -->

                    <div class="modal fade" id="reply<?=$key;?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form class="form-horizontal custom-form" action="<?=base_url('testimonials/send');?>" method="post" role="form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><b>Name:</b> <?=$value->name;?> </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group"> 
                                    <label class="col-form-label">Email Id</label>
                                    <input type="text" Value="<?=$value->email;?>" name="email" class="form-control form-control-sm" />
                                    <input type="hidden" Value="<?=$value->email;?>" name="name" class="form-control form-control-sm" />
                                </div>
                            </div> 
                            <div class="col-sm-6">
                                <div class="form-group"> 
                                    <label class="col-form-label">Contact No.</label>
                                    <input type="text" Value="<?=$value->phone;?>" name="phone" class="form-control form-control-sm" />
                                </div>
                            </div> 
                            <div class="col-sm-12">
                                <div class="form-group"> 
                                    <label class="col-form-label">Subject</label>
                                    <input type="text" Value="<?=$value->subject;?>" name="subject" class="form-control form-control-sm" />
                                </div>
                            </div> 
                            <div class="col-sm-12">
                                <div class="form-group"> 
                                    <label class="col-form-label">Description</label>
                                    <textarea class="form-control form-control-sm" name="description" rows="3" disabled><?=$value->description;?></textarea> 
                                </div>
                            </div>  
                            <div class="col-sm-12">
                                <div class="form-group"> 
                                    <label class="col-form-label">Reply Message</label>
                                    <textarea class="form-control form-control-sm" name="reply_msg" rows="3" ></textarea> 
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" title="Reply"><i class="feather icon-corner-down-right"></i> Reply</button> 
                    </div>
                </div>
            </form>
        </div>
    </div>
                                        </tr> 
                                      <?php }}?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- [ Main Content ] end -->
        </div>
    </div>

   