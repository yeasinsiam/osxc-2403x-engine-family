<!-- [ Main Content ] start --> 
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="page-header-title">
                            <h5 class="mb-2">Manage Category</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Category</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        
        <!-- [ Main Content ] start --> 
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mt-2">View All Category </h5>
                    </div>
                    <div class="card-body">
                        <?php $msg2=$this->session->flashdata('msg2');  
                            if($msg2){  ?>
                        <div class="alert alert-<?php echo $msg2['class'] ?> alert-dismissible" data-dismiss="alert" aria-hidden="true">
                            <strong><?php echo $msg2['type'] ?></strong> <?php echo $msg2['message']; ?>
                        </div>
                        <?php } ?> 
                        <div class="table-responsive">
                            <table id="report-table" class="table table-sm table-bordered table-striped mb-0 dataTable no-footer">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Img</th>
                                        <th>Category Name</th>
                                        <th>Category</th>
                                        <!--  <th>Short Description</th>     -->
                                        <th style="width:130px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1;if($category_list==true){
                                        foreach ($category_list as  $value) {?>
                                    <tr>
                                        <td><?=$i;$i++;?></td>
                                        <td> <?php if(!empty($value->img)){?>
                                            <img src="<?=base_url('uploads/category/').$value->img;?>" style="width: 80px; height: 60px;object-fit: cover;" />
                                            <?php }else{?>
                                            <img src="<?=base_url('uploads/category/default-image.jpg');?>" style="width: 80px; height: 60px;object-fit: cover;" />
                                            <?php }?>
                                        </td>
                                        <td><?=$value->name;?>  
                                        </td>
                                        <td><?php if($value->type=='0'){
                                            echo'-';}else{ echo category($value->type);}?></td>
                                        <!-- <td class="text-wrap"><?=$value->desc;?></td>   -->
                                        <td>
                                              <a href="<?=base_url('../categories/').$value->name_slug;?>" class="btn btn-success" title="View"><i class="feather icon-eye"></i></a> 
                                            <a href="<?=base_url('category/edit/').$value->id;?>" class="btn btn-info" title="Edit"><i class="feather icon-edit"></i></a>  
                                            <a href="<?=base_url('category/delete/').$value->id;?>" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure you want to delete this category?');">
                                            <i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <?php }} else{echo'No category found.';}?>
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
<!-- [ Main Content ] end -->