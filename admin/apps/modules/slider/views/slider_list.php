 <!-- [ Main Content ] start --> 
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="page-header-title">
                                <h5 class="mb-2">All Slider</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li> 
                                <li class="breadcrumb-item"><a href="#!">All Slider</a></li>
                            </ul>                      
                        </div> 
                        <div class="col-6 ">
                            <div class="page-header-title " style="float: right">
                              <a href="<?=base_url('slider/add');?>">  <h5 class="mb-2">Add Slider</h5></a>
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
                        <div class="card-body"> 
                           <?php $msg=$this->session->flashdata('msg');  
  if($msg){  ?>
  <div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible" data-dismiss="alert" aria-hidden="true">
      <strong><?php echo $msg['type'] ?></strong> <?php echo $msg['message']; ?>
    </div>  
  <?php } ?>
                            <div class="table-responsive">
                                <table id="report-table" class="table table-sm table-bordered table-striped mb-0 dataTable no-footer">
                                    <thead>
                                        <tr>
                                            <th>#</th>  
                                              <th>Img</th>
                                            <th>Content1</th>
                                            <th>Content2</th> 
                                            <!--  <th>Status</th>  --> 
                                            <th style="width: 100px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php $i=1; if($slider==true){
                                        foreach ($slider as $value) {?>
                                       
                                        <tr>
                                            <td><?=$i;$i++;?></td>
                                            <td><img src="<?=base_url('uploads/slider/').$value->img;?>" style="width:80px; height:60px;"></td>

                                            
                                            <td><?=$value->content1;?></td>
                                            <td><?=$value->content2;?></td>  
                                            <td>  
                                               <!--  <a href="#" class="btn btn-success" title="View"><i class="feather icon-eye"></i></a> -->
                                                <a href="<?=base_url('slider/edit/').$value->id;?>" class="btn btn-info" title="Edit"><i class="feather icon-edit"></i></a>  
                                                <a href="<?=base_url('slider/delete/').$value->id;?>" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure you want to delete this product ?');">
                                                <i class="feather icon-trash-2"></i></a>
                                            </td>
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

   