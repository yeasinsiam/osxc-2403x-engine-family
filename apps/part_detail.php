<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$product->meta_title;?> | Engine Family</title>
    <meta name="description" content="<?=$product->meta_desc;?>">
    <meta name="keywords" content="<?=$product->meta_keyword;?>">

    <?php if(!$is_mobile){?>

        <style>

        </style>
        <?php } ?>
    <?php $this->load->view('include/header'); ?>

    <!-- Start: Inner Banner Section -->
    <!-- <section class="inner-banner flex-center bg-light-white pt-50 pb-35">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <h1 class="blue">Product Details</h1>
                    <ul class="inner-bnr-nav">
                        <li><a href="index.php">Home</a></li>
                        <li>Product Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End: Inner Banner Section -->

    <!-- Start: Product Details Section -->
    <section class="section prdt-detail">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="prdt-image bg-light-white p-4" style="margin: 0 auto;">
                        <a href="#">
                            <?php if(!empty($product->img)){?>
                                <img src="<?=base_url('admin/uploads/product/').$product->img;?>" alt="<?=$product->img_tag;?>" style="margin: 0 auto;" />
                            <?php }else{?>
                                <img src="<?=base_url('admin/uploads/category/default-image.jpg');?>" alt="<?=$product->img_tag;?>" style="margin: 0 auto;" />
                            <?php }?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <?php $msg=$this->session->flashdata('msg'); if($msg){  ?>
                        <div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible" data-dismiss="alert" aria-hidden="true">

                            <?php echo $msg['message']; ?>
                        </div>
                    <?php } ?>
                    <div class="prdt-info-right pl-0 pl-md-00 mt-md-25">
                        <div class="prdt-detail-head mt-10 clearfix">
                            <!--<span class="bg-light-white m-0 px-2 py-1 rounded"><?=category($product->category);?></span> -->
                            <h1 class="mt-0 mb-0 fs-26 lh-13 blue" style="display: inline-block;"><?=$product->name;?></h1>
                            <?php if($product_list==true){
                                if($product_list[0]){?>
                                    <div class="custom-select-wrapper">
                                        <div class="custom-select">
                                            <div class="custom-select__trigger"><span>Other</span>
                                                <div class="arrow"></div>
                                            </div>
                                            <div class="custom-options">
                                                <span class="custom-option selected" data-value="Other">Other</span>
                                                <?php foreach($product_list as $val){?>
                                                    <a class="custom-option" href="<?=base_url('product/').$val->name_slug;?>" ><?=$val->name;?></a>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                <?php }}?>
                        </div>
                        <div class="hr-1 bg-black opacity-1 mb-20 mt-20 clearfix"></div>
                        <div class="profuct-descr clearfix">
                            <?=$product->short_desc;?>
                        </div>
                        <div class="hr-1 bg-black opacity-1 mt-20 mb-20"></div>
                        <div class="prdt-form">

                            <button type="button" class="btn btn-blue" data-toggle="modal" data-target="#enquiry-now"><i class="fas fa-comments"></i> Enquiry Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Product Details Section -->

    <!-- Start: Product Description Section -->
    <section class="section product-description bg-light-white">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="product-description-inner">
                        <?=$product->description;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Product Description Section -->

    <!-- Start: Enquiry Model Section -->
    <div class="modal fade" id="enquiry-now" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form class="form-horizontal custom-form" action="<?=base_url('page/sent');?>" method="post"  role="form">
                <input type="hidden" name="product" value="<?=$product->name;?>">
                <input type="hidden" id="current_url" name="product_url" value="<?php  echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Enquiry Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label">Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" placeholder="Enter your name..." class="form-control" required/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Email Id <span class="text-danger">*</span></label>
                                    <input type="email" name="email" placeholder="Enter your email id..." class="form-control" required/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Contact No. <span class="text-danger">*</span></label>
                                    <input type="number" name="phone" placeholder="Enter your contact no..." class="form-control" required/>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label">Subject <span class="text-danger">*</span></label>
                                    <input type="text" name="subject" placeholder="Enter your subject..." class="form-control" required/>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label">Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control" name="description" rows="3" placeholder="Enter your description..." required></textarea>
                                    <!-- <small>http://diesel-family.com/mtu-engine-spare-parts-lists/</small> -->
                                    <small><?php  echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success"><i class="fas fa-comments"></i> Enquiry Now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End: Enquiry Model Section -->


    <?php $this->load->view('include/footer'); ?>


    <script>
        document.querySelector('.custom-select-wrapper').addEventListener('click', function() {
            this.querySelector('.custom-select').classList.toggle('open');
        })
    </script>

    <style>
        .prdt-detail .prdt-detail-head .custom-select-wrapper {
            position: relative;
            user-select: none;
            width: 200px;
            float: right;
        }
        .prdt-detail .prdt-detail-head .custom-select {
            position: relative;
            display: flex;
            flex-direction: column;
            border-width: 0 2px 0 2px;
            border-style: solid;
            border-color: #394a6d;
            height: auto;
            padding: 0;
        }
        .prdt-detail .prdt-detail-head .custom-select__trigger {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 10px;
            font-size: 16px;
            font-weight: 300;
            color: #3b3b3b;
            height: 45px;
            line-height: 50px;
            background: #ffffff;
            cursor: pointer;
            border-width: 2px 0 2px 0;
            border-style: solid;
            border-color: #394a6d;
        }
        .prdt-detail .prdt-detail-head .custom-options {
            position: absolute;
            display: block;
            top: 100%;
            left: 0;
            right: 0;
            border: 2px solid #394a6d;
            border-top: 0;
            background: #fff;
            transition: all 0.5s;
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            z-index: 2;
        }
        .prdt-detail .prdt-detail-head .custom-select.open .custom-options {
            opacity: 1;
            visibility: visible;
            pointer-events: all;
        }
        .prdt-detail .prdt-detail-head .custom-option {
            position: relative;
            display: block;
            padding: 0 22px 0 22px;
            font-size: 16px;
            font-weight: 300;
            color: #3b3b3b;
            line-height: 40px;
            cursor: pointer;
            transition: all 0.5s;
        }
        .prdt-detail .prdt-detail-head .custom-option:hover {
            cursor: pointer;
            background-color: #b2b2b2;
        }
        .prdt-detail .prdt-detail-head .custom-option.selected {
            color: #ffffff;
            background-color: #305c91;
        }

        .prdt-detail .prdt-detail-head .arrow {
            position: relative;
            height: 15px;
            width: 15px;
        }
        .prdt-detail .prdt-detail-head .arrow::before, .arrow::after {
            content: "";
            position: absolute;
            bottom: 0px;
            width: 0.15rem;
            height: 100%;
            transition: all 0.5s;
        }
        .prdt-detail .prdt-detail-head .arrow::before {
            left: -5px;
            transform: rotate(45deg);
            background-color: #394a6d;
        }
        .prdt-detail .prdt-detail-head .arrow::after {
            left: 5px;
            transform: rotate(-45deg);
            background-color: #394a6d;
        }
        .prdt-detail .prdt-detail-head .open .arrow::before {
            left: -5px;
            transform: rotate(-45deg);
        }
        .prdt-detail .prdt-detail-head .open .arrow::after {
            left: 5px;
            transform: rotate(45deg);
        }

        @media (max-width: 600px){
            .prdt-detail .prdt-detail-head .custom-select-wrapper {
                padding-top: 20px;
            }
        }
    </style>
