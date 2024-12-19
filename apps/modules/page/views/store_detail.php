<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $product->meta_title; ?> store| Engine Family</title>
    <meta name="description" content="<?= $product->meta_desc; ?>">
    <meta name="keywords" content="<?= $product->meta_keyword; ?>">

    <?php $this->load->view('include/header'); ?>
<!--    <link rel="stylesheet" href="https://www.pacificpowergroup.com/wp-content/themes/ppg/style.css" type="text/css">-->
    <link rel="stylesheet"
          href="https://www.pacificpowergroup.com/wp-content/plugins/woocommerce/assets/css/woocommerce.css"
          type="text/css">
    <link rel="stylesheet"
          href="https://www.pacificpowergroup.com/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css"
          type="text/css">

    <link rel="stylesheet" id="style-css" href="assets/store_style.css" type="text/css" media="">
    <style>

        .container {
            width: 1200px;
            margin: 0 auto;
            padding: 0px;
            overflow-x: hidden;
            overflow-y: hidden
        }

        .row {
            margin: 0px;
            padding: 0px;
            width: 100%
        }

        .col_12,.col_11,.col_10,.col_9,.col_8,.col_7,.col_6,.col_5,.col_4,.col_3,.col_2,.col_1 {
            float: left;
            margin: 0px;
            padding: 0px
        }

        .col_12 {
            width: 100%
        }

        .col_11 {
            width: 91.6666666666666666%
        }

        .col_10 {
            width: 83.3333333333333333%
        }

        .col_9 {
            width: 75%
        }

        .col_8 {
            width: 66.6666666666666666%
        }

        .col_7 {
            width: 58.3333333333333333%
        }

        .col_6 {
            width: 50%
        }

        .col_5 {
            width: 41.6666666666666666%
        }

        .col_4 {
            width: 33.3333333333333333%
        }

        .col_3 {
            width: 25%
        }

        .col_2 {
            width: 16.6666666666666666%
        }

        .col_1 {
            width: 08.3333333333333333%
        }

        .gutters .col_11>div,.gutters .col_10>div,.gutters .col_9>div,.gutters .col_8>div,.gutters .col_7>div,.gutters .col_6>div,.gutters .col_5>div,.gutters .col_4>div,.gutters .col_3>div,.gutters .col_2>div,.gutters .col_1>div,.gutters .col_11>section,.gutters .col_10>section,.gutters .col_9>section,.gutters .col_8>section,.gutters .col_7>section,.gutters .col_6>section,.gutters .col_5>section,.gutters .col_4>section,.gutters .col_3>section,.gutters .col_2>section,.gutters .col_1>section,.gutters .col_11>aside,.gutters .col_10>aside,.gutters .col_9>aside,.gutters .col_8>aside,.gutters .col_7>aside,.gutters .col_6>aside,.gutters .col_5>aside,.gutters .col_4>aside,.gutters .col_3>aside,.gutters .col_2>aside,.gutters .col_1>aside,.gutters .col_11>p,.gutters .col_10>p,.gutters .col_9>p,.gutters .col_8>p,.gutters .col_7>p,.gutters .col_6>p,.gutters .col_5>p,.gutters .col_4>p,.gutters .col_3>p,.gutters .col_2>p,.gutters .col_1>p,.gutters .col_11>article,.gutters .col_10>article,.gutters .col_9>article,.gutters .col_8>article,.gutters .col_7>article,.gutters .col_6>article,.gutters .col_5>article,.gutters .col_4>article,.gutters .col_3>article,.gutters .col_2>article,.gutters .col_1>article {
            margin-left: 10px;
            margin-right: 10px
        }

        .gutters .col_12>div,.gutters .col_12>section,.gutters .col_12>aside,.gutters .col_12>p,.gutters .col_12>article {
            padding-left: 10px;
            padding-right: 10px
        }

        .gutters .first>div,.gutters .first>section,.gutters .first>aside,.gutters .first>p,.gutters .first>article {
            margin-left: 0;
            padding-left: 10px
        }

        .gutters .last>div,.gutters .last>section,.gutters .last>aside,.gutters .last>p,.gutters .last>article {
            margin-right: 0;
            padding-right: 10px
        }

        .container:after,.row:after,.col_12:after,.col_11:after,.col_10:after,.col_9:after,.col_8:after,.col_7:after,.col_6:after,.col_5:after,.col_4:after,.col_3:after,.col_2:after,.col_1:after,section:after,div:after,aside:after,article:after {
            content: '.';
            display: block;
            height: 0px;
            clear: both;
            visibility: hidden;
            overflow: hidden
        }

        @media (min-width: 960px) and (max-width: 1220px) {
            .container {
                width:960px
            }
        }

        @media (min-width: 768px) and (max-width: 979px) {
            .container {
                width:768px
            }
        }

        @media (min-width: 480px) and (max-width: 767px) {
            .container {
                width:100%
            }

            .col_12,.col_11,.col_10,.col_9,.col_8,.col_7,.col_6,.col_5,.col_4,.col_3,.col_2,.col_1 {
                float: none;
                width: 100%
            }

            .col_11.hor {
                float: left;
                width: 91.6666666666666666%
            }

            .col_10.hor {
                float: left;
                width: 83.3333333333333333%
            }

            .col_9.hor {
                float: left;
                width: 75%
            }

            .col_8.hor {
                float: left;
                width: 66.6666666666666666%
            }

            .col_7.hor {
                float: left;
                width: 58.3333333333333333%
            }

            .col_6.hor {
                float: left;
                width: 50%
            }

            .col_5.hor {
                float: left;
                width: 41.6666666666666666%
            }

            .col_4.hor {
                float: left;
                width: 33.3333333333333333%
            }

            .col_3.hor {
                float: left;
                width: 25%
            }

            .col_2.hor {
                float: left;
                width: 16.6666666666666666%
            }

            .col_1.hor {
                float: left;
                width: 08.3333333333333333%
            }

            .gutters .col_12>div,.gutters .col_12>section,.gutters .col_12>aside,.gutters .col_12>p,.gutters .col_12>article {
                padding-left: 0;
                padding-right: 0;
                margin-left: 10px;
                margin-right: 10px
            }

            .gutters .first>div,.gutters .first>section,.gutters .first>aside,.gutters .first>p,.gutters .first>article {
                margin-left: 10px;
                padding-left: 0
            }

            .gutters .last>div,.gutters .last>section,.gutters .last>aside,.gutters .last>p,.gutters .last>article {
                margin-right: 10px;
                padding-right: 0
            }
        }

        @media (min-width: 0px) and (max-width: 479px) {
            .container {
                width:100%
            }

            .col_12,.col_11,.col_10,.col_9,.col_8,.col_7,.col_6,.col_5,.col_4,.col_3,.col_2,.col_1 {
                float: none;
                width: 100%
            }

            .col_11.hor {
                float: left;
                width: 91.6666666666666666%
            }

            .col_10.hor {
                float: left;
                width: 83.3333333333333333%
            }

            .col_9.hor {
                float: left;
                width: 75%
            }

            .col_8.hor {
                float: left;
                width: 66.6666666666666666%
            }

            .col_7.hor {
                float: left;
                width: 58.3333333333333333%
            }

            .col_6.hor {
                float: left;
                width: 50%
            }

            .col_5.hor {
                float: left;
                width: 41.6666666666666666%
            }

            .col_4.hor {
                float: left;
                width: 33.3333333333333333%
            }

            .col_3.hor {
                float: left;
                width: 25%
            }

            .col_2.hor {
                float: left;
                width: 16.6666666666666666%
            }

            .col_1.hor {
                float: left;
                width: 08.3333333333333333%
            }

            .gutters .col_12>div,.gutters .col_12>section,.gutters .col_12>aside,.gutters .col_12>p,.gutters .col_12>article {
                padding-left: 0;
                padding-right: 0;
                margin-left: 10px;
                margin-right: 10px
            }

            .gutters .first>div,.gutters .first>section,.gutters .first>aside,.gutters .first>p,.gutters .first>article {
                margin-left: 10px;
                padding-left: 0
            }

            .gutters .last>div,.gutters .last>section,.gutters .last>aside,.gutters .last>p,.gutters .last>article {
                margin-right: 10px;
                padding-right: 0
            }
        }

        /*! fancyBox v2.1.5 fancyapps.com | fancyapps.com/fancybox/#license */
        .fancybox-wrap,.fancybox-skin,.fancybox-outer,.fancybox-inner,.fancybox-image,.fancybox-wrap iframe,.fancybox-wrap object,.fancybox-nav,.fancybox-nav span,.fancybox-tmp {
            padding: 0;
            margin: 0;
            border: 0;
            outline: none;
            vertical-align: top
        }

        .fancybox-wrap {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 8020
        }

        .fancybox-skin {
            position: relative;
            background: #f9f9f9;
            color: #444;
            text-shadow: none;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px
        }

        .fancybox-opened {
            z-index: 8030
        }


        .page-template-woocommerce .ecomm-menu,.woocommerce-page .ecomm-menu {
            background: #4e4e4e;
            height: 50px;
            border-top: 3px solid #a90000;
            color: white;
            margin-bottom: 20px;
            padding: 0px 0 10px 20px
        }
        .wc-product-table thead {
            background-color: #4e4e4e;
            color: white;
        }

        table.wc-product-table {
            display: table;
            table-layout: auto;
            visibility: hidden
        }

        table.wc-product-table thead th {
            padding-left: 10px
        }

        table.wc-product-table tbody tr {
            background-color: transparent
        }

        table.wc-product-table.dtr-inline.collapsed>tbody>tr>td.dtr-control,table.wc-product-table.dtr-inline.collapsed>tbody>tr>th.dtr-control {
            padding-left: 32px
        }

        table.wc-product-table.dtr-column>tbody>tr>td.control:before,table.wc-product-table.dtr-column>tbody>tr>th.control:before,table.wc-product-table.dtr-inline.collapsed>tbody>tr>td.dtr-control:before,table.wc-product-table.dtr-inline.collapsed>tbody>tr>th.dtr-control:before {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            background: none;
            border: none;
            border-radius: 0;
            box-shadow: none;
            color: #377837;
            content: "";
            font-family: icomoon;
            font-size: .75em;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            line-height: 1;
            margin: 0;
            text-transform: none;
            top: 1.3em;
            vertical-align: baseline
        }

        table.wc-product-table.dtr-column>tbody>tr.parent>td.control:before,table.wc-product-table.dtr-column>tbody>tr.parent>th.control:before,table.wc-product-table.dtr-inline.collapsed>tbody>tr.parent>td.dtr-control:before,table.wc-product-table.dtr-inline.collapsed>tbody>tr.parent>th.dtr-control:before {
            background: none;
            color: #bd3737;
            content: ""
        }
        @media screen and (max-width: 520px) {
            .page-template-woocommerce .ecomm-menu,.woocommerce-page .ecomm-menu {
                height:100px
            }
        }

        @media screen and (max-width: 365px) {
            .page-template-woocommerce .ecomm-menu,.woocommerce-page .ecomm-menu {
                padding:10px 0 10px 10px
            }
        }

        .page-template-woocommerce li.ecomm-menu-item,.woocommerce-page li.ecomm-menu-item {
            padding: 10px;
            font-size: 14pt;
            float: left
        }

        .page-template-woocommerce li.ecomm-menu-item a,.woocommerce-page li.ecomm-menu-item a {
            color: white
        }

        .page-template-woocommerce li.ecomm-menu-item a:hover,.woocommerce-page li.ecomm-menu-item a:hover {
            color: lightgrey
        }

        .page-template-woocommerce .glow,.woocommerce-page .glow {
            height: 20px
        }

        .page-template-woocommerce .ecomm-search,.woocommerce-page .ecomm-search {
            float: right;
            display: block;
            padding: 10px
        }

        .page-template-woocommerce .search-field,.woocommerce-page .search-field {
            height: 30px;
            padding: 0 20px;
            margin-bottom: 10px;
            border-radius: 0;
            background: #ffffff;
            color: #999999;
            font-size: 12pt
        }

        @media screen and (max-width: 600px) {
            .page-template-woocommerce .search-field,.woocommerce-page .search-field {
                max-width:140px
            }
        }

        @media screen and (max-width: 520px) {
            .page-template-woocommerce .ecomm-search,.woocommerce-page .ecomm-search {
                float:left;
                clear: left;
                padding-top: 20px
            }
        }

        .page-template-woocommerce .btn,.woocommerce-page .btn {
            display: block;
            height: 35px;
            padding: 0;
            text-align: center;
            line-height: 30px;
            background: #a90000;
            color: #ffffff;
            transition: opacity .15s linear;
            cursor: pointer;
            float: right;
            font-weight: bold;
            border: none;
            padding-left: 10px;
            padding-right: 10px
        }

        .page-template-woocommerce .btn:hover,.woocommerce-page .btn:hover {
            background-color: black;
            color: white
        }

        .page-template-woocommerce .mi-margin-top,.woocommerce-page .mi-margin-top {
            margin-top: 5px
        }

        .page-template-woocommerce .fa,.woocommerce-page .fa {
            padding-right: 5px
        }

        .page-template-woocommerce .help-message,.woocommerce-page .help-message {
            padding: 10px 20px
        }

        .page-template-woocommerce .content h1,.woocommerce-page .content h1 {
            color: #a90000;
            font-size: 2em;
            font-weight: 600;
            margin-bottom: 30px;
            border-bottom: 3px solid #4e4e4e;
            padding-bottom: 5px
        }

        @media screen and (max-width: 768px) {
            .page-template-woocommerce li.ecomm-menu-item,.woocommerce-page li.ecomm-menu-item {
                padding:10px;
                font-size: 12pt
            }
        }

        @media screen and (max-width: 1000px) {
            .page-template-woocommerce .mobile-hidden,.woocommerce-page .mobile-hidden {
                display:none
            }
        }

        @media screen and (max-width: 1240px) {
            .page-template-woocommerce .laptop-hidden,.woocommerce-page .laptop-hidden {
                display:none
            }
        }

        .page-template-woocommerce .woocommerce ul.products li.product a img,.woocommerce-page .woocommerce ul.products li.product a img {
            width: 100%;
            height: auto;
            display: block;
            margin: 0 0 1em;
            box-shadow: none;
            border: 3px solid #4e4e4e
        }
    </style>
    <style id="sccss">
        .page-id-107379 .form-group {
            margin-top: 15px;
        }

        .page-id-107379 .btn-default {
            background-color: #a90000;
            color: #ffffff;
            font-weight: bold;
            float: right;
        }

        .page-id-107379 fieldset {
            border: none;

        }

        .form-control-feedback {
            width: 300px;
            padding-top: 20px;
        }

        .crm-lookup-searchfield {
            border-right: 1px solid #c6c6c6;
        }

        .crm-lookup-searchfield-button {
            border-left: 1px solid #c6c6c6;
        }

        .crm-lookup-popup {
            height: auto;
        }

        .page-id-116163 .btn-default {
            background-color: #a90000;
            color: #fff;
            border: 0px;
            padding: 6px 25px;
            cursor: pointer;
            margin-top: 22px;
        }

        .page-id-116163 .control-label {

            font-size: 14px;
            padding: 4px;
            border: 0px;
            position: relative;
        }

        .page-id-116163 .form-control {
            padding: 4px;
            border: 0px;
            font-size: 14px;
            background-color: #efefef;
            max-width: 80%;
            min-width: 250px;
        }

        .page-id-116163 .crm-textarea {
            border: 0px;
            font-size: 14px;
            width: 50%;
            height: 100px;
        }

        .page-id-116163 fieldset {
            border: none;
        }

        .page-id-116163 .alert {
            width: 850px;
            font-size: 16px;
            color: #a90000;
        }

        .page-id-116163 .help-block {
            font-size: 14px;
            text-align: left;
            color: #a90000;
            padding-left: 10px;

        }

        .page-id-116611 .btn-default {
            background-color: #a90000;
            color: #fff;
            border: 0px;
            padding: 6px 25px;
            cursor: pointer;
            margin-top: 22px;
        }

        .page-id-116611 .control-label {

            font-size: 14px;
            padding: 4px;
            border: 0px;
            position: relative;
        }

        .page-id-116611 .form-control {
            padding: 4px;
            border: 0px;
            font-size: 14px;
            background-color: #efefef;
            max-width: 80%;
            min-width: 250px;
        }

        .page-id-116611 .crm-textarea {
            border: 0px;
            font-size: 14px;
            width: 50%;
            height: 100px;
        }

        .page-id-116611 fieldset {
            border: none;
        }

        .page-id-116611 .alert {
            width: 850px;
            font-size: 16px;
            color: #a90000;
        }

        .page-id-116611 .help-block {
            font-size: 14px;
            text-align: left;
            color: #a90000;
            padding-left: 10px;

        }

        .page-id-118100 .btn-default {
            background-color: #a90000;
            color: #fff;
            border: 0px;
            padding: 6px 25px;
            cursor: pointer;
            margin-top: 22px;
        }

        .page-id-118100 .control-label {

            font-size: 14px;
            padding: 4px;
            border: 0px;
            position: relative;
        }

        .page-id-118100 .form-control {
            padding: 4px;
            border: 0px;
            font-size: 14px;
            background-color: #efefef;
            max-width: 80%;
            min-width: 250px;
        }

        .page-id-118100 .crm-textarea {
            border: 0px;
            font-size: 14px;
            width: 50%;
            height: 100px;
        }

        .page-id-118100 fieldset {
            border: none;
        }

        .page-id-116611 .alert {
            width: 850px;
            font-size: 16px;
            color: #a90000;
        }

        .page-id-118100 .help-block {
            font-size: 14px;
            text-align: left;
            color: #a90000;
            padding-left: 10px;

        }
    </style>
    <style type="text/css" id="wp-custom-css">
        .col-add-to-cart {
            width: 125px;
        }

        .red-button-table {
            font-weight: bold;
        }

        .customer-stories-body {
            background: #bbbbbb;
        }        </style>
    <style type="text/css">.fancybox-margin {  margin-right: 20px; }</style>
    <style type="text/css">.crjs .phoneswap { visibility: hidden; }</style>
    <!-- Start: Inner Banner Section -->
    <section class="section inner-banner-2" data-overlay="7" style="background-image: url('<?= base_url(); ?>assets/images/bg/Ersatzteile.jpg');">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-left">
                    <h1><?= $product->name; ?></h1>
                    <ul class="inner-bnr-nav">
                        <li><a href="<?= base_url(); ?>">Home</a></li>
                        <li><?= $product->name; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Inner Banner Section -->

    <!-- Start: Product Listing Section -->
    <section class="archive tax-product_cat term-john-deere-parts term-484 theme-ppg woocommerce woocommerce-page woocommerce-js not-logged-in"
            style="background: #f5f5f5"> <div class="main">

            <div class="container">

                <div class="row gutters">

                    <div class="row">
                        <div class="col_12">
                            <div class="ecomm-menu">
                                <ul>
                                    <li class="ecomm-menu-item mi-margin-top"><a class="cart-contents"
                                                                                 href="https://www.pacificpowergroup.com/cart"
                                                                                 title="View your shopping cart"> <i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>Cart <span
                                                    class="mobile-hidden">( <span
                                                        class="laptop-hidden">3 items - </span><span
                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">$</span>1,791.90</bdi></span> ) </span></a>
                                    </li>

                                    <li class="ecomm-menu-item mi-margin-top"><a
                                                href="https://www.pacificpowergroup.com/store"><i class="fa fa-tags"
                                                                                                  aria-hidden="true"></i>Categories</a>
                                    </li>

                                    <li class="ecomm-menu-item mi-margin-top"><a
                                                href="https://www.pacificpowergroup.com/my-account"
                                                title="My Account"><i class="fa fa-user" aria-hidden="true"></i>Account</a>
                                    </li>
                                </ul>

                                <div class="ecomm-menu-item ecomm-search">
                                    <form role="search" method="get" id="searchform"
                                          class="woocommerce-product-search"
                                          action="https://www.pacificpowergroup.com/">
                                        <input type="search" id="s" class="search-field"
                                               placeholder="Search Part Number…" value="" name="s">
                                        <button id="search-button" class="btn" type="submit" value="Search"><i
                                                    class="fa fa-search" aria-hidden="true"></i><span
                                                    class="mobile-hidden">Search</span></button>
                                        <input type="hidden" name="post_type" value="product">
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="row" style="display: block;">
                        <div class="help-message">
                            <p><a class="contact-us-link"
                                  href="https://www.pacificpowergroup.com/contact-us-for-parts/">Need Help?</a> Have
                                a question about a surplus part or need help finding something not listed, call our
                                Parts Specialist at <a href="tel:+1-253-285-1239">253.285.1239</a><a
                                        class="contact-us-btn"
                                        href="https://www.pacificpowergroup.com/contact-us-for-parts/"><i
                                            class="fa fa-comment" aria-hidden="true"></i>Send a Message</a></p>
                        </div>

                        <div class="free-shipping-notice"
                             style="background: #a90000; padding: 15px 10px; text-align: center; color: white; font-size: 16px;">
                            <p>Free ground shipping on qualifying orders over $250 (to lower 48 states) *<a
                                        style="color: white; font-size: 75%; position: relative; bottom: 3px;"
                                        href="#!" id="modal-link">DETAILS</a></p>
                        </div><!--store--notice-->


                        <article class="content">
                            <h3 class="red-heading">JOHN DEERE PARTS
                                <a  href="https://www.pacificpowergroup.com/store/"  style="font-size: 10pt;text-decoration: underline; letter-spacing: normal;">Change
                                    Category</a>
                            </h3>
                            <div class="woocommerce"></div>
                            <div id="wcpt_b663358b6e16d46d_1_wrapper" class="dataTables_wrapper no-footer">
                                <div class="wc-product-table-wrapper ppg">
                                    <div class="wc-product-table-controls wc-product-table-above">
                                        <div class="dataTables_length" id="wcpt_b663358b6e16d46d_1_length">
                                            <label>Show <select name="wcpt_b663358b6e16d46d_1_length"
                                                                aria-controls="wcpt_b663358b6e16d46d_1"
                                                                class="select2-hidden-accessible" tabindex="-1"
                                                                aria-hidden="true">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="75">75</option>
                                                    <option value="100">100</option>
                                                    <option value="-1">All</option>
                                                </select>
                                                <span class="select2 select2-container select2-container--default"
                                                      dir="ltr" style="width: 58.6667px;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single"
                                                                aria-haspopup="true" aria-expanded="false"
                                                                tabindex="0"
                                                                aria-labelledby="select2-wcpt_b663358b6e16d46d_1_length-ol-container"
                                                                role="combobox"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-wcpt_b663358b6e16d46d_1_length-ol-container"
                                                                    role="textbox" aria-readonly="true" title="75">75</span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper"
                                                            aria-hidden="true"></span></span> per page</label></div>
                                    </div>
                                    <table id="wcpt_b663358b6e16d46d_1"
                                           class="wc-product-table woocommerce dataTable no-footer dtr-inline"
                                           width="100%"
                                           data-config="{&quot;pageLength&quot;:75,&quot;pagingType&quot;:&quot;simple_numbers&quot;,&quot;serverSide&quot;:true,&quot;autoWidth&quot;:true,&quot;clickFilter&quot;:false,&quot;scrollOffset&quot;:15,&quot;resetButton&quot;:false,&quot;multiAddToCart&quot;:false,&quot;multiCartLocation&quot;:&quot;top&quot;,&quot;variations&quot;:false,&quot;ajaxCart&quot;:true,&quot;lengthMenu&quot;:[[10,25,50,75,100,-1],[10,25,50,75,100,&quot;All&quot;]],&quot;columnDefs&quot;:[{&quot;className&quot;:&quot;col-sku&quot;,&quot;targets&quot;:0,&quot;type&quot;:&quot;html&quot;},{&quot;className&quot;:&quot;col-summary col-short-description&quot;,&quot;targets&quot;:1},{&quot;className&quot;:&quot;col-categories&quot;,&quot;targets&quot;:2},{&quot;className&quot;:&quot;col-stock&quot;,&quot;targets&quot;:3},{&quot;className&quot;:&quot;col-price&quot;,&quot;targets&quot;:4},{&quot;className&quot;:&quot;col-buy col-add-to-cart&quot;,&quot;targets&quot;:5}],&quot;responsive&quot;:{&quot;details&quot;:{&quot;display&quot;:&quot;child_row&quot;}},&quot;language&quot;:{&quot;emptyTable&quot;:&quot;No products found.&quot;},&quot;search&quot;:{&quot;search&quot;:&quot;&quot;},&quot;dom&quot;:&quot;<\&quot;wc-product-table-wrapper ppg\&quot;<\&quot;wc-product-table-controls wc-product-table-above\&quot;l>t<\&quot;wc-product-table-controls wc-product-table-below\&quot;ip>>&quot;}"
                                           data-filters="false" data-order="[]"
                                           style="visibility: visible; position: static; zoom: 1; width: 100%;"
                                           aria-describedby="wcpt_b663358b6e16d46d_1_info">
                                        <thead>
                                        <tr>
                                            <th class="all col-sku sorting" data-name="sku" data-orderable="true"
                                                data-searchable="true" data-priority="6" data-data="sku"
                                                tabindex="0" aria-controls="wcpt_b663358b6e16d46d_1" rowspan="1"
                                                colspan="1" style="width: 109px;"
                                                aria-label="Part Number: activate to sort column ascending">Part
                                                Number
                                            </th>
                                            <th data-name="summary" data-orderable="false" data-searchable="true"
                                                data-priority="11" data-data="summary"
                                                class="col-summary col-short-description sorting_disabled"
                                                rowspan="1" colspan="1" style="width: 345px;"
                                                aria-label=" Description"> Description
                                            </th>
                                            <th data-name="categories" data-orderable="false" data-searchable="true"
                                                data-priority="9" data-data="categories"
                                                class="col-categories sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 202px;" aria-label="Category">Category
                                            </th>
                                            <th data-name="stock" data-orderable="false" data-searchable="true"
                                                data-priority="7" data-data="stock"
                                                class="col-stock sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 115px;" aria-label="Availability">Availability
                                            </th>
                                            <th data-name="price" data-orderable="true" data-searchable="true"
                                                data-priority="3" data-data="price" class="col-price sorting"
                                                tabindex="0" aria-controls="wcpt_b663358b6e16d46d_1" rowspan="1"
                                                colspan="1" style="width: 151px;"
                                                aria-label="Price: activate to sort column ascending">Price
                                            </th>
                                            <th data-name="buy" data-orderable="false" data-searchable="true"
                                                data-priority="2" data-data="buy"
                                                class="col-buy col-add-to-cart sorting_disabled" rowspan="1"
                                                colspan="1" style="width: 101px;" aria-label=""></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="odd product product-row product-129476 instock product-type-simple purchasable"
                                            id="product-row-129476">
                                            <td class="col-sku dtr-control"><a
                                                        href="https://www.pacificpowergroup.com/product/dz101670-cam-follower"
                                                        class="single-product-link" data-product_id="129476">DZ101670</a>
                                            </td>
                                            <td class="  col-summary col-short-description"><a
                                                        href="https://www.pacificpowergroup.com/product/dz101670-cam-follower">
                                                    <p>CAM FOLLOWER</p>
                                                </a></td>
                                            <td class="  col-categories"><a
                                                        href="https://www.pacificpowergroup.com/product-category/john-deere-parts"
                                                        data-column="categories" rel="tag"><span
                                                            data-slug="john-deere-parts">JOHN DEERE PARTS</span></a>
                                            </td>
                                            <td class="  col-stock"><p class="stock in-stock">In stock</p></td>
                                            <td class="  col-price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">$</span>8.61</bdi></span>
                                            </td>
                                            <td class="  col-buy col-add-to-cart">
                                                <div class="add-to-cart-wrapper with-cart-button no-quantity">
                                                    <form class="cart" action="" method="post"
                                                          enctype="multipart/form-data">
                                                        <div class="add-to-cart-button">
                                                            <div class="quantity"><label class="screen-reader-text"
                                                                                         for="quantity_648ae375c2620">DZ101670
                                                                    - CAM FOLLOWER quantity</label> <input
                                                                        type="number" id="quantity_648ae375c2620"
                                                                        class="input-text qty text" name="quantity"
                                                                        value="1" title="Qty" size="4" min="1"
                                                                        max="12" step="1" placeholder=""
                                                                        inputmode="numeric" autocomplete="off">
                                                            </div>
                                                            <button type="submit" name="add-to-cart" value="129476"
                                                                    class="single_add_to_cart_button button alt wp-element-button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even product product-row product-129368 instock product-type-simple purchasable"
                                            id="product-row-129368">
                                            <td class="col-sku dtr-control"><a
                                                        href="https://www.pacificpowergroup.com/product/re51551-v-belt"
                                                        class="single-product-link"
                                                        data-product_id="129368">RE51551</a></td>
                                            <td class="  col-summary col-short-description"><a
                                                        href="https://www.pacificpowergroup.com/product/re51551-v-belt">
                                                    <p>V-BELT</p>
                                                </a></td>
                                            <td class="  col-categories"><a
                                                        href="https://www.pacificpowergroup.com/product-category/john-deere-parts"
                                                        data-column="categories" rel="tag"><span
                                                            data-slug="john-deere-parts">JOHN DEERE PARTS</span></a>
                                            </td>
                                            <td class="  col-stock"><p class="stock in-stock">In stock</p></td>
                                            <td class="  col-price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">$</span>82.53</bdi></span>
                                            </td>
                                            <td class="  col-buy col-add-to-cart">
                                                <div class="add-to-cart-wrapper with-cart-button no-quantity">
                                                    <form class="cart" action="" method="post"
                                                          enctype="multipart/form-data">
                                                        <div class="add-to-cart-button">
                                                            <div class="quantity"><label class="screen-reader-text"
                                                                                         for="quantity_648ae375c2e46">RE51551
                                                                    - V-BELT quantity</label> <input type="hidden"
                                                                                                     id="quantity_648ae375c2e46"
                                                                                                     class="input-text qty text"
                                                                                                     name="quantity"
                                                                                                     value="1"
                                                                                                     title="Qty"
                                                                                                     size="4"
                                                                                                     min="1" max="1"
                                                                                                     step="1"
                                                                                                     placeholder=""
                                                                                                     inputmode="numeric"
                                                                                                     autocomplete="off">
                                                            </div>
                                                            <button type="submit" name="add-to-cart" value="129368"
                                                                    class="single_add_to_cart_button button alt wp-element-button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd product product-row product-129577 instock product-type-simple purchasable"
                                            id="product-row-129577">
                                            <td class="col-sku dtr-control"><a
                                                        href="https://www.pacificpowergroup.com/product/re541746-filter-kit"
                                                        class="single-product-link" data-product_id="129577">RE541746</a>
                                            </td>
                                            <td class="  col-summary col-short-description"><a
                                                        href="https://www.pacificpowergroup.com/product/re541746-filter-kit">
                                                    <p>FILTER KIT</p>
                                                </a></td>
                                            <td class="  col-categories"><a
                                                        href="https://www.pacificpowergroup.com/product-category/john-deere-parts"
                                                        data-column="categories" rel="tag"><span
                                                            data-slug="john-deere-parts">JOHN DEERE PARTS</span></a>
                                            </td>
                                            <td class="  col-stock"><p class="stock in-stock">In stock</p></td>
                                            <td class="  col-price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">$</span>138.89</bdi></span>
                                            </td>
                                            <td class="  col-buy col-add-to-cart">
                                                <div class="add-to-cart-wrapper with-cart-button no-quantity">
                                                    <form class="cart" action="" method="post"
                                                          enctype="multipart/form-data">
                                                        <div class="add-to-cart-button">
                                                            <div class="quantity"><label class="screen-reader-text"
                                                                                         for="quantity_648ae375c34db">RE541746
                                                                    - FILTER KIT quantity</label> <input
                                                                        type="number" id="quantity_648ae375c34db"
                                                                        class="input-text qty text" name="quantity"
                                                                        value="1" title="Qty" size="4" min="1"
                                                                        max="2" step="1" placeholder=""
                                                                        inputmode="numeric" autocomplete="off">
                                                            </div>
                                                            <button type="submit" name="add-to-cart" value="129577"
                                                                    class="single_add_to_cart_button button alt wp-element-button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even product product-row product-129578 instock sale product-type-simple purchasable"
                                            id="product-row-129578">
                                            <td class="col-sku dtr-control"><a
                                                        href="https://www.pacificpowergroup.com/product/re556406-filter-kit"
                                                        class="single-product-link" data-product_id="129578">RE556406</a>
                                            </td>
                                            <td class="  col-summary col-short-description"><a
                                                        href="https://www.pacificpowergroup.com/product/re556406-filter-kit">
                                                    <p>FILTER KIT</p>
                                                </a></td>
                                            <td class="  col-categories"><a
                                                        href="https://www.pacificpowergroup.com/product-category/john-deere-parts"
                                                        data-column="categories" rel="tag"><span
                                                            data-slug="john-deere-parts">JOHN DEERE PARTS</span></a>
                                            </td>
                                            <td class="  col-stock"><p class="stock in-stock">In stock</p></td>
                                            <td class="  col-price">
                                                <del aria-hidden="true"><span
                                                            class="woocommerce-Price-amount amount"><bdi><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>151.27</bdi></span>
                                                </del>
                                                <ins><span class="woocommerce-Price-amount amount"><bdi><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>122.79</bdi></span>
                                                </ins>
                                            </td>
                                            <td class="  col-buy col-add-to-cart">
                                                <div class="add-to-cart-wrapper with-cart-button no-quantity">
                                                    <form class="cart" action="" method="post"
                                                          enctype="multipart/form-data">
                                                        <div class="add-to-cart-button">
                                                            <div class="quantity"><label class="screen-reader-text"
                                                                                         for="quantity_648ae375c3b83">RE556406
                                                                    - FILTER KIT quantity</label> <input
                                                                        type="number" id="quantity_648ae375c3b83"
                                                                        class="input-text qty text" name="quantity"
                                                                        value="1" title="Qty" size="4" min="1"
                                                                        max="6" step="1" placeholder=""
                                                                        inputmode="numeric" autocomplete="off">
                                                            </div>
                                                            <button type="submit" name="add-to-cart" value="129578"
                                                                    class="single_add_to_cart_button button alt wp-element-button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd product product-row product-129447 instock product-type-simple purchasable"
                                            id="product-row-129447">
                                            <td class="col-sku dtr-control"><a
                                                        href="https://www.pacificpowergroup.com/product/re64077-water-pump"
                                                        class="single-product-link"
                                                        data-product_id="129447">RE64077</a></td>
                                            <td class="  col-summary col-short-description"><a
                                                        href="https://www.pacificpowergroup.com/product/re64077-water-pump">
                                                    <p>WATER PUMP</p>
                                                </a></td>
                                            <td class="  col-categories"><a
                                                        href="https://www.pacificpowergroup.com/product-category/john-deere-parts"
                                                        data-column="categories" rel="tag"><span
                                                            data-slug="john-deere-parts">JOHN DEERE PARTS</span></a>
                                            </td>
                                            <td class="  col-stock"><p class="stock in-stock">In stock</p></td>
                                            <td class="  col-price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">$</span>1,045.52</bdi></span>
                                            </td>
                                            <td class="  col-buy col-add-to-cart">
                                                <div class="add-to-cart-wrapper with-cart-button no-quantity">
                                                    <form class="cart" action="" method="post"
                                                          enctype="multipart/form-data">
                                                        <div class="add-to-cart-button">
                                                            <div class="quantity"><label class="screen-reader-text"
                                                                                         for="quantity_648ae375c41e5">RE64077
                                                                    - WATER PUMP quantity</label> <input
                                                                        type="hidden" id="quantity_648ae375c41e5"
                                                                        class="input-text qty text" name="quantity"
                                                                        value="1" title="Qty" size="4" min="1"
                                                                        max="1" step="1" placeholder=""
                                                                        inputmode="numeric" autocomplete="off">
                                                            </div>
                                                            <button type="submit" name="add-to-cart" value="129447"
                                                                    class="single_add_to_cart_button button alt wp-element-button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even product product-row product-129477 instock product-type-simple purchasable"
                                            id="product-row-129477">
                                            <td class="col-sku dtr-control"><a
                                                        href="https://www.pacificpowergroup.com/product/se501234-fuel-injection-pump-reman"
                                                        class="single-product-link" data-product_id="129477">SE501234</a>
                                            </td>
                                            <td class="  col-summary col-short-description"><a
                                                        href="https://www.pacificpowergroup.com/product/se501234-fuel-injection-pump-reman">
                                                    <p>FUEL INJECTION PUMP REMAN</p>
                                                </a></td>
                                            <td class="  col-categories"><a
                                                        href="https://www.pacificpowergroup.com/product-category/john-deere-parts"
                                                        data-column="categories" rel="tag"><span
                                                            data-slug="john-deere-parts">JOHN DEERE PARTS</span></a>
                                            </td>
                                            <td class="  col-stock"><p class="stock in-stock">In stock</p></td>
                                            <td class="  col-price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">$</span>1,843.39</bdi></span>
                                            </td>
                                            <td class="  col-buy col-add-to-cart">
                                                <div class="add-to-cart-wrapper with-cart-button no-quantity">
                                                    <form class="cart" action="" method="post"
                                                          enctype="multipart/form-data">
                                                        <div class="add-to-cart-button">
                                                            <div class="quantity"><label class="screen-reader-text"
                                                                                         for="quantity_648ae375c4852">SE501234
                                                                    - FUEL INJECTION PUMP REMAN quantity</label>
                                                                <input type="hidden" id="quantity_648ae375c4852"
                                                                       class="input-text qty text" name="quantity"
                                                                       value="1" title="Qty" size="4" min="1"
                                                                       max="1" step="1" placeholder=""
                                                                       inputmode="numeric" autocomplete="off"></div>
                                                            <button type="submit" name="add-to-cart" value="129477"
                                                                    class="single_add_to_cart_button button alt wp-element-button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="wc-product-table-controls wc-product-table-below">
                                        <div class="dataTables_info" id="wcpt_b663358b6e16d46d_1_info" role="status"
                                             aria-live="polite">Showing 6 products
                                        </div>
                                        <div class="dataTables_paginate paging_simple_numbers"
                                             id="wcpt_b663358b6e16d46d_1_paginate" style="display: none;"><a
                                                    class="paginate_button previous disabled"
                                                    aria-controls="wcpt_b663358b6e16d46d_1" aria-disabled="true"
                                                    aria-role="link" data-dt-idx="previous" tabindex="-1"
                                                    id="wcpt_b663358b6e16d46d_1_previous">Previous</a><span><a
                                                        class="paginate_button current"
                                                        aria-controls="wcpt_b663358b6e16d46d_1" aria-role="link"
                                                        aria-current="page" data-dt-idx="0"
                                                        tabindex="0">1</a></span><a
                                                    class="paginate_button next disabled"
                                                    aria-controls="wcpt_b663358b6e16d46d_1" aria-disabled="true"
                                                    aria-role="link" data-dt-idx="next" tabindex="-1"
                                                    id="wcpt_b663358b6e16d46d_1_next">Next</a></div>
                                    </div>
                                </div>
                            </div>
                        </article><!--content-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Product Listing Section -->

    <?php $this->load->view('include/footer'); ?>
