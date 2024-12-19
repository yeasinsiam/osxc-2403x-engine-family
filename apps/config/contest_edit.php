        
        <style type="text/css">
           .register_section.half_bg_white:before {
    top: 0px;
    right: 0px;
    bottom: 0px;
    content: "";
    width: 100%;
    position: absolute;
    background-color: #ffffff;
}
    .sidebar_category2 li a span,i{
       color: #fff;
    font-size: 14px;  

    }
.sidebar_category2 li a{
    padding: 13px 0;
    color: #fff;
    font-size: 14px;   
    width: 100%;
    border-bottom: 1px solid #fff;
} </style>        <!-- breadcrumb_section - start
                ================================================== -->
                <section id="breadcrumb_section" class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
                    <div class="container">
                        <div class="breadcrumb_content text-center" data-aos="fade-up" data-aos-delay="100">
                            <h1 class="page_title">Edit Photo Contest</h1>
                           <!--  <p class="mb-0">
                                Faff about only a quid blower I don't want no agro bleeding chim pot burke tosser cras nice one boot fanny.
                            </p> -->
                        </div>
                    </div>

                    <div class="deco_image spahe_1" data-aos="fade-down" data-aos-delay="300">
                        <img src="<?=base_url('assets/');?>assets/images/shapes/shape_1.png" alt="spahe_not_found">
                    </div>
                    <div class="deco_image spahe_2" data-aos="fade-up" data-aos-delay="500">
                        <img src="<?=base_url('assets/');?>assets/images/shapes/shape_2.png" alt="spahe_not_found">
                    </div>
                </section>
                <!-- breadcrumb_section - end
                ================================================== -->


                <!-- register_section - start
                ================================================== -->
                <section id="register_section" class="register_section sec_ptb_120 bg_gray half_bg_white clearfix" style="padding: 40px 0;">
                    <div class="container">
                        <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

                 
<?php $this->load->view('account/sidebar');?>
                            <div class="col-md-8 col-sm-8" style="height: 751px;padding: 0 45px;">
                                <div class="section_title increase_size mb-80" data-aos="fade-up" data-aos-delay="400">
                                    <h2 class="title_text mb-30">Edit Photo Contest</h2>
                                   
                                </div>
                                  <?php $msg=$this->session->flashdata('msg'); if($msg){  ?>
                    <div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible admin-msg" data-dismiss="alert" aria-hidden="true">
                        <strong><?php echo $msg['type'] ?></strong> <?php echo $msg['message']; ?>
                    </div>  
                <?php } ?>

                                <div class="signup_form" data-aos="fade-up" data-aos-delay="500">
                                    <form id="myprofile" action="" method="post" enctype="multipart/form-data">
                                        

 <div class="form_item">
                                            <h4 class="input_title">Category</h4>
                                            <select name="category" style="height: 60px;padding: 0px 30px;   border-radius: 45px;  width: 100%;"  required>
                                            	<option value="">Select Category</option>
                                            	<?php if($category==true){
                                            		foreach ($category as $value) {?>
                                            			<option value="<?php $idd=$value->id;?>"<?php if($ctn_info->category==$idd)echo'selected';?>><?=$value->name;?></option>
                                            		<?php }}?>
                                            </select>
                                        </div>
                                        <div class="form_item">
                                            <h4 class="input_title">Title</h4>
                                            <input type="text" name="title" value="<?=$ctn_info->title;?>" placeholder="Enter Title" required>
                                        </div>
                                         <div class="form_item">
                                            <h4 class="input_title">Image Upload</h4>
                                            <input type="file" name="img"  required>
                                        </div>
                                         <div class="form_item">
                                            <h4 class="input_title">Description</h4>
                                            <textarea name="desc"><?=$ctn_info->desc;?></textarea>
                                        </div>
                                       
                                        

                                        <button type="submit" class="btn bg_default_blue mb-30">Change Photo Contest</button>

                                       

                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- register_section - end
                ================================================== -->


            </main>
            <!-- main body - end
            ================================================== -->

