<!-- [ Main Content ] start --> 

<div class="pcoded-main-container">

   <div class="pcoded-content">

      <!-- [ breadcrumb ] start -->

      <div class="page-header">

         <div class="page-block">

            <div class="row align-items-center">

               <div class="col-8 col-sm-6">

                  <div class="page-header-title">

                     <h5 class="mb-2">Add Category</h5>

                  </div>

                  <ul class="breadcrumb">

                     <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>

                     <li class="breadcrumb-item"><a href="#!">Add Category</a></li>

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

                              <label class="col-form-label">Category Name<span>*</span></label>

                              <input type="text" class="form-control form-control-sm" placeholder="Eg: part..." name="name" onkeyup="slug_url(this.value,'name_slug')" required/> 

                           </div>

                           <div class="form-group">  

                              <!--<label class="col-form-label">Category Page Url:</label>-->

                              <label class="col-form-label">https://engine-family.com/categorie/ <input type="text" name="name_slug" id="name_slug" class="form-control form-control-url form-control-sm" placeholder="Url" /></label>

                           </div>

                           <div class="form-group">

                              <label class="col-form-label">Category<span>*</span></label>

                              <select class="form-control form-control-sm select2"  name="type" >

                                 <option value="0">Parent</option>

                                 <?php if($category==true){

                                    foreach ($category as $cat_value) {?>

                                 <option value="<?=$cat_value->id;?>"><?=$cat_value->name;?></option>

                                 <?php }}?>

                              </select>

                           </div>

                        </div>

                        <div class="col-sm-6">

                           <div class="form-group"> 

                              <label class="col-form-label">Category Image<span></span></label>

                              <input type="file" name="img" class="form-control form-control-sm" /> 

                           </div> 

                           <div class="form-group">  

                              <label class="col-form-label">Image Tag:</label>

                              <input type="text" name="img_tag" class="form-control form-control-sm" placeholder="Img Tag" />

                           </div> 

                           <div class="form-group"> 

                              <label class="col-form-label">Product & Category Title</label>

                              <input type="text" class="form-control form-control-sm" placeholder="Category Title" name="title" /> 

                           </div> 

                        </div>

                        <div class="col-sm-6">

                        </div>

                        <div class="col-sm-6">

                        </div>

                     </div>



                     <div class="row mt-3"> 

                        <div class="col-sm-12">

                           <ul class="nav nav-pills mb-3 nav-pills-bg-grey" id="pills-tab" role="tablist">

                              <li class="nav-item">

                                 <a class="nav-link active" id="pills-desc-1-tab" data-toggle="pill" href="#pills-desc-1" role="tab" aria-controls="pills-desc-1" aria-selected="true">Short Description</a>

                              </li>

                              <li class="nav-item">

                                 <a class="nav-link" id="pills-desc-2-tab" data-toggle="pill" href="#pills-desc-2" role="tab" aria-controls="pills-desc-2" aria-selected="false">Main Description</a>

                              </li> 

                           </ul> 

                           <div class="tab-content" id="pills-tabContent">

                              <div class="tab-pane fade show active" id="pills-desc-1" role="tabpanel" aria-labelledby="pills-desc-1-tab"> 

                                 <div class="form-group"> 

                                    <!--<label class="col-form-label">Short Description<span></span></label> -->

                                    <textarea id="short-desc" name="short_desc" ></textarea>

                                 </div>

                              </div>

                              <div class="tab-pane fade" id="pills-desc-2" role="tabpanel" aria-labelledby="pills-desc-2-tab"> 

                                 <div class="form-group"> 

                                    <!--<label class="col-form-label">Description</label> -->

                                    <textarea id="product-desc" name="desc"></textarea>

                                 </div>

                              </div> 

                           </div>

                        </div>

                     </div>  



                     <div class="row">  

                        <div class="col-sm-12">

                           <div class="form-group"> 

                              <label class="col-form-label">Meta Title</label>

                              <input type="text" class="form-control form-control-sm" placeholder="Enter meta title..."  name="meta_title" />

                           </div>

                        </div>

                        <div class="col-sm-12">

                           <div class="form-group"> 

                              <label class="col-form-label">Meta Description</label>

                              <textarea class="form-control form-control-sm" placeholder="Enter meta description..." name="meta_desc" style="height: 100px"></textarea>

                           </div>

                        </div>

                        <div class="col-sm-12">

                           <div class="form-group"> 

                              <label class="col-form-label">Meta Keyword</label>

                              <textarea class="form-control form-control-sm" placeholder="Enter meta keyword..." name="meta_keyword"></textarea>

                           </div>

                        </div>

                     </div>

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