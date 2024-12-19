 <!-- [ Main Content ] start --> 
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="page-header-title">
                                <h5 class="mb-2">All Content Page</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li> 
                                <li class="breadcrumb-item"><a href="#!">All Content Page</a></li>
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
      <strong><?php echo $msg['type'] ?></strong> <?php echo $msg['message']; ?>
    </div>  
  <?php } ?>
                            <div class="table-responsive">
                                <table id="report-table" class="table table-sm table-bordered table-striped mb-0 dataTable no-footer">
                                    <thead>
                                        <tr>
                                            <th>#</th>  
                                            <!--   <th>Img</th> -->
                                            <th>Page Title</th>
                                            <th>Updated Date</th>  
                                            <th style="width: 100px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php $i=1; if($page==true){
                                        foreach ($page as $value) {?>
                                       
                                        <tr>
                                            <td><?=$i;$i++;?></td>
                                           

                                            <td><?=$value->pg_title;?></td>
                                            <td><?=date('d, M Y h:i:s',strtotime($value->pg_updated));?></td>
                                           
                                            <td>  
                                               
                                                <a href="<?=base_url('page/edit/').$value->pg_id;?>" class="btn btn-info" title="Edit"><i class="feather icon-edit"></i></a>  
                                               
                                            </td>
                                        </tr> 
                                      <?php }} else{echo'No Page found.';}?>
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

   