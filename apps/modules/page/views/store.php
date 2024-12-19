<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$product->meta_title;?> store| Engine Family</title>
    <meta name="description" content="<?=$product->meta_desc;?>">
    <meta name="keywords" content="<?=$product->meta_keyword;?>">

    <?php $this->load->view('include/header'); ?>
    <link rel="stylesheet" href="assets/style.css" type="text/css">
    <link rel="stylesheet" href="https://www.pacificpowergroup.com/wp-content/plugins/woocommerce/assets/css/woocommerce.css" type="text/css">

    <link rel="stylesheet" href="https://www.pacificpowergroup.com/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css" type="text/css">
    <style id="sccss">
        .page-id-107379 .form-group{
            margin-top:15px;
        }

        .page-id-107379 .btn-default{
            background-color: #a90000;
            color:#ffffff;
            font-weight:bold;
            float:right;
        }

        .page-id-107379 fieldset{
            border:none;

        }

        .form-control-feedback {
            width:300px;
            padding-top:20px;
        }

        .crm-lookup-searchfield{
            border-right: 1px solid #c6c6c6;
        }

        .crm-lookup-searchfield-button{
            border-left: 1px solid #c6c6c6;
        }

        .crm-lookup-popup{
            height:auto;
        }

        .page-id-116163 .btn-default{
            background-color: #a90000;
            color: #fff;
            border:0px;
            padding:6px 25px;
            cursor: pointer;
            margin-top: 22px;
        }

        .page-id-116163 .control-label{

            font-size:14px;
            padding:4px;
            border:0px;
            position:relative;
        }

        .page-id-116163 .form-control{
            padding:4px;
            border:0px;
            font-size:14px;
            background-color:#efefef;
            max-width:80%;
            min-width:250px;
        }

        .page-id-116163 .crm-textarea {
            border:0px;
            font-size:14px;
            width:50%;
            height:100px;
        }

        .page-id-116163 fieldset{
            border:none;
        }

        .page-id-116163 .alert {
            width: 850px;
            font-size: 16px;
            color:#a90000;
        }

        .page-id-116163 .help-block {
            font-size: 14px;
            text-align: left;
            color:#a90000;
            padding-left: 10px;

        }

        .page-id-116611 .btn-default{
            background-color: #a90000;
            color: #fff;
            border:0px;
            padding:6px 25px;
            cursor: pointer;
            margin-top: 22px;
        }

        .page-id-116611 .control-label{

            font-size:14px;
            padding:4px;
            border:0px;
            position:relative;
        }

        .page-id-116611 .form-control{
            padding:4px;
            border:0px;
            font-size:14px;
            background-color:#efefef;
            max-width:80%;
            min-width:250px;
        }

        .page-id-116611 .crm-textarea {
            border:0px;
            font-size:14px;
            width:50%;
            height:100px;
        }

        .page-id-116611 fieldset{
            border:none;
        }

        .page-id-116611 .alert {
            width: 850px;
            font-size: 16px;
            color:#a90000;
        }

        .page-id-116611 .help-block {
            font-size: 14px;
            text-align: left;
            color:#a90000;
            padding-left: 10px;

        }

        .page-id-118100 .btn-default{
            background-color: #a90000;
            color: #fff;
            border:0px;
            padding:6px 25px;
            cursor: pointer;
            margin-top: 22px;
        }

        .page-id-118100 .control-label{

            font-size:14px;
            padding:4px;
            border:0px;
            position:relative;
        }

        .page-id-118100 .form-control{
            padding:4px;
            border:0px;
            font-size:14px;
            background-color:#efefef;
            max-width:80%;
            min-width:250px;
        }

        .page-id-118100 .crm-textarea {
            border:0px;
            font-size:14px;
            width:50%;
            height:100px;
        }

        .page-id-118100 fieldset{
            border:none;
        }

        .page-id-116611 .alert {
            width: 850px;
            font-size: 16px;
            color:#a90000;
        }

        .page-id-118100 .help-block {
            font-size: 14px;
            text-align: left;
            color:#a90000;
            padding-left: 10px;

        }
    </style>
    <style type="text/css" id="wp-custom-css">
        .col-add-to-cart{
            width: 125px;
        }

        .red-button-table{
            font-weight:bold;
        }
        .customer-stories-body {
            background: #bbbbbb;
        }		</style>
    <style type="text/css">.fancybox-margin{margin-right:20px;}</style>
    <style type="text/css">.crjs .phoneswap { visibility: hidden; }</style>
    <!-- Start: Inner Banner Section -->
    <section class="section inner-banner-2" data-overlay="7" style="background-image: url('<?=base_url();?>assets/images/bg/Ersatzteile.jpg');">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-left">
                    <h1><?=$product->name;?></h1>
                    <ul class="inner-bnr-nav">
                        <li><a href="<?=base_url();?>">Home</a></li>
                        <li><?=$product->name;?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Inner Banner Section -->

    <!-- Start: Product Listing Section -->
    <section class="section shop archive post-type-archive post-type-archive-product theme-ppg woocommerce-shop woocommerce woocommerce-page woocommerce-js not-logged-in"
    style="background: #f5f5f5">
        <div class="container-fluid">
            <div class="main" >

                <div class="container">

                    <div class="row gutters">

                        <div class="row">
                            <div class="col_12">
                                <div class="ecomm-menu">
                                    <ul>
                                        <li class="ecomm-menu-item mi-margin-top"><a class="cart-contents" href="https://www.pacificpowergroup.com/cart" title="View your shopping cart"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart <span class="mobile-hidden">( <span class="laptop-hidden">3 items - </span><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>1,791.90</bdi></span> ) </span></a>
                                        </li>

                                        <li class="ecomm-menu-item mi-margin-top"><a href="https://www.pacificpowergroup.com/store"><i class="fa fa-tags" aria-hidden="true"></i>Categories</a></li>

                                        <li class="ecomm-menu-item mi-margin-top"><a href="https://www.pacificpowergroup.com/my-account" title="My Account"><i class="fa fa-user" aria-hidden="true"></i>Account</a></li>
                                    </ul>

                                    <div class="ecomm-menu-item ecomm-search">
                                        <form role="search" method="get" id="searchform" class="woocommerce-product-search" action="https://www.pacificpowergroup.com/">
                                            <input type="search" id="s" class="search-field" placeholder="Search Part Number…" value="" name="s">
                                            <button id="search-button" class="btn" type="submit" value="Search"><i class="fa fa-search" aria-hidden="true"></i><span class="mobile-hidden">Search</span></button>
                                            <input type="hidden" name="post_type" value="product">
                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="help-message">
                                <p><a class="contact-us-link" href="https://www.pacificpowergroup.com/contact-us-for-parts/">Need Help?</a>  Have a question about a surplus part or need help finding something not listed, call our Parts Specialist at <a href="tel:+1-253-285-1239">253.285.1239</a><a class="contact-us-btn" href="https://www.pacificpowergroup.com/contact-us-for-parts/"><i class="fa fa-comment" aria-hidden="true"></i>Send a Message</a></p>
                            </div>

                            <div class="free-shipping-notice" style="background: #a90000;  padding: 15px 10px; text-align: center;  color: white;font-size: 16px; margin: 0; width: 100%;">
                                <p>Free ground shipping on qualifying orders over $250 (to lower 48 states) *<a style="color: white; font-size: 75%; position: relative; bottom: 3px;" href="#!" id="modal-link">DETAILS</a></p>
                            </div><!--store--notice-->


                            <article class="content">




                                <div class="woocommerce-notices-wrapper"></div>
                                <ul class="products columns-4">
                                    <li class="product-category product first">
                                        <a href="https://www.pacificpowergroup.com/product-category/allison"><img src="https://www.pacificpowergroup.com/wp-content/uploads/2018/12/PPG_shop_default_2.jpg" alt="ALLISON" width="300" height="300">		<h2 class="woocommerce-loop-category__title">
                                                ALLISON <mark class="count">(6)</mark>		</h2>
                                        </a></li>
                                    <li class="product-category product">
                                        <a href="https://www.pacificpowergroup.com/product-category/allison-transmission"><img src="https://www.pacificpowergroup.com/wp-content/uploads/2023/04/Allison-Transmission-300x300.png" alt="ALLISON TRANSMISSION" width="300" height="300">		<h2 class="woocommerce-loop-category__title">
                                                ALLISON TRANSMISSION <mark class="count">(2669)</mark>		</h2>
                                        </a></li>
                                    <li class="product-category product">
                                        <a href="https://www.pacificpowergroup.com/product-category/ats-products"><img src="https://www.pacificpowergroup.com/wp-content/uploads/2023/04/ATS-Products-1-300x300.png" alt="ATS PRODUCTS" width="300" height="300">		<h2 class="woocommerce-loop-category__title">
                                                ATS PRODUCTS <mark class="count">(1)</mark>		</h2>
                                        </a></li>
                                    <li class="product-category product last">
                                        <a href="https://www.pacificpowergroup.com/product-category/detroit-diesel"><img src="https://www.pacificpowergroup.com/wp-content/uploads/2023/04/Detroit-Diesel2-1-300x300.png" alt="DETROIT DIESEL" width="300" height="300">		<h2 class="woocommerce-loop-category__title">
                                                DETROIT DIESEL <mark class="count">(793)</mark>		</h2>
                                        </a></li>
                                    <li class="product-category product first">
                                        <a href="https://www.pacificpowergroup.com/product-category/dirty-core-components"><img src="https://www.pacificpowergroup.com/wp-content/uploads/2023/04/Dirty-Core-Components-300x300.png" alt="DIRTY CORE COMPONENTS" width="300" height="300">		<h2 class="woocommerce-loop-category__title">
                                                DIRTY CORE COMPONENTS <mark class="count">(2)</mark>		</h2>
                                        </a></li>
                                    <li class="product-category product">
                                        <a href="https://www.pacificpowergroup.com/product-category/exchange-transmissions"><img src="https://www.pacificpowergroup.com/wp-content/uploads/2023/04/Exchange-Transmissions-1-300x300.png" alt="EXCHANGE TRANSMISSIONS" width="300" height="300">		<h2 class="woocommerce-loop-category__title">
                                                EXCHANGE TRANSMISSIONS <mark class="count">(3)</mark>		</h2>
                                        </a></li>
                                    <li class="product-category product">
                                        <a href="https://www.pacificpowergroup.com/product-category/freightliner-parts"><img src="https://www.pacificpowergroup.com/wp-content/uploads/2018/12/PPG_shop_default_2.jpg" alt="FREIGHTLINER PARTS" width="300" height="300">		<h2 class="woocommerce-loop-category__title">
                                                FREIGHTLINER PARTS <mark class="count">(1)</mark>		</h2>
                                        </a></li>
                                    <li class="product-category product last">
                                        <a href="https://www.pacificpowergroup.com/product-category/generator-parts"><img src="https://www.pacificpowergroup.com/wp-content/uploads/2023/04/Generator-Parts-1-300x300.png" alt="GENERATOR PARTS" width="300" height="300">		<h2 class="woocommerce-loop-category__title">
                                                GENERATOR PARTS <mark class="count">(1262)</mark>		</h2>
                                        </a></li>
                                    <li class="product-category product first">
                                        <a href="https://www.pacificpowergroup.com/product-category/isuzu-parts"><img src="https://www.pacificpowergroup.com/wp-content/uploads/2023/04/Isuzu-300x300.png" alt="ISUZU PARTS" width="300" height="300">		<h2 class="woocommerce-loop-category__title">
                                                ISUZU PARTS <mark class="count">(1)</mark>		</h2>
                                        </a></li>
                                    <li class="product-category product">
                                        <a href="https://www.pacificpowergroup.com/product-category/john-deere-parts"><img src="https://www.pacificpowergroup.com/wp-content/uploads/2018/12/PPG_shop_default_2.jpg" alt="JOHN DEERE PARTS" width="300" height="300">		<h2 class="woocommerce-loop-category__title">
                                                JOHN DEERE PARTS <mark class="count">(6)</mark>		</h2>
                                        </a></li>
                                    <li class="product-category product">
                                        <a href="https://www.pacificpowergroup.com/product-category/mtu"><img src="https://www.pacificpowergroup.com/wp-content/uploads/2023/04/Production-Machines-Components-1-300x300.png" alt="MTU" width="300" height="300">		<h2 class="woocommerce-loop-category__title">
                                                MTU <mark class="count">(73)</mark>		</h2>
                                        </a></li>
                                    <li class="product-category product last">
                                        <a href="https://www.pacificpowergroup.com/product-category/mtu-solutions"><img src="https://www.pacificpowergroup.com/wp-content/uploads/2023/04/MTU-300x300.png" alt="MTU SOLUTIONS" width="300" height="300">		<h2 class="woocommerce-loop-category__title">
                                                MTU SOLUTIONS <mark class="count">(8609)</mark>		</h2>
                                        </a></li>
                                    <li class="product-category product first">
                                        <a href="https://www.pacificpowergroup.com/product-category/other-parts"><img src="https://www.pacificpowergroup.com/wp-content/uploads/2023/04/Other-Parts-2-300x300.png" alt="OTHER PARTS" width="300" height="300">		<h2 class="woocommerce-loop-category__title">
                                                OTHER PARTS <mark class="count">(6095)</mark>		</h2>
                                        </a></li>
                                    <li class="product-category product">
                                        <a href="https://www.pacificpowergroup.com/product-category/production-machines-components"><img src="https://www.pacificpowergroup.com/wp-content/uploads/2023/04/Production-Machines-Components-1-300x300.png" alt="PRODUCTION MACHINES COMPONENTS" width="300" height="300">		<h2 class="woocommerce-loop-category__title">
                                                PRODUCTION MACHINES COMPONENTS <mark class="count">(108)</mark>		</h2>
                                        </a></li>
                                    <li class="product-category product">
                                        <a href="https://www.pacificpowergroup.com/product-category/reliabilt-assemblies"><img src="https://www.pacificpowergroup.com/wp-content/uploads/2023/04/Reliabilt-Assemblies-1-300x300.png" alt="RELIABILT ASSEMBLIES" width="300" height="300">		<h2 class="woocommerce-loop-category__title">
                                                RELIABILT ASSEMBLIES <mark class="count">(95)</mark>		</h2>
                                        </a></li>
                                    <li class="product-category product last">
                                        <a href="https://www.pacificpowergroup.com/product-category/volvo-new-engines"><img src="https://www.pacificpowergroup.com/wp-content/uploads/2023/04/Volvo-Penta-New-Engines-300x300.png" alt="VOLVO NEW ENGINES" width="300" height="300">		<h2 class="woocommerce-loop-category__title">
                                                VOLVO NEW ENGINES <mark class="count">(2)</mark>		</h2>
                                        </a></li>
                                    <li class="product-category product first">
                                        <a href="https://www.pacificpowergroup.com/product-category/volvo-penta-parts"><img src="https://www.pacificpowergroup.com/wp-content/uploads/2023/04/Volvo-Penta-300x300.png" alt="VOLVO PENTA PARTS" width="300" height="300">		<h2 class="woocommerce-loop-category__title">
                                                VOLVO PENTA PARTS <mark class="count">(38686)</mark>		</h2>
                                        </a></li>
                                    <li class="product-category product">
                                        <a href="https://www.pacificpowergroup.com/product-category/racor"><img src="https://www.pacificpowergroup.com/wp-content/uploads/2023/04/Racor-300x300.png" alt="RACOR" width="300" height="300">		<h2 class="woocommerce-loop-category__title">
                                                RACOR <mark class="count">(1374)</mark>		</h2>
                                        </a></li>


                                </ul>


                            </article><!--content-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Product Listing Section -->

<?php $this->load->view('include/footer'); ?>
