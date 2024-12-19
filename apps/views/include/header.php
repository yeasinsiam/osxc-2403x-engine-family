<link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

<!-- <link rel='stylesheet' id='google-language-translator-css'  href='<?php echo base_url(); ?>assets/css/style-translator.css?ver=6.0.6' type='text/css' media='' /> -->
</head>

<body>

    <!-- Preloader start -->
    <div class="loader-out flex-center">
        <div class="loader"></div>
    </div>
    <!-- Preloader end -->

    <!-- header start -->
    <header class="main-header">
        <div class="topheader tm-header-top">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 d-none d-md-block wow fadeInLeft">
                        <div class="left-head tm-text-white">
                            <ul class="social-icons ">
                                <li> <a href="<?= $this->website->facebook; ?>"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li> <a href="<?= $this->website->twitter; ?>"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li> <a href="<?= $this->website->linkedin; ?>"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 text-right wow fadeInRight">
                        <div class="d-inline tm-text-white tm-header-icons tm-right">
                            <a href="mailto:<?= $this->website->comp_email; ?>" class="email mr-20 fs-15 f-500">
                                <i class="fas fa-envelope blue mr-10"></i><?= $this->website->comp_email; ?>
                            </a>
                        </div>
                        <div class="d-inline tm-text-white tm-header-icons tm-right">
                            <a href="tel:<?= $this->website->phone; ?>" class="fs-15 f-500"><i
                                    class="fas fa-phone blue mr-10"></i><?= $this->website->phone; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="topheader middle-header">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-3 logo text-xs-center text-sm-center text-md-center text-lg-left wow fadeInLeft">
                        <a href="<?= base_url(); ?>">
                            <img src="<?= base_url(); ?>assets/images/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6 text-left text-left search-form">
                        <form action="<?= base_url('search'); ?>" method="get">
                            <div class="form-group relative">
                                <input type="text" name="product" class="form-control input-search" id="search"
                                    placeholder="Pls enter part no. or product name, if you can't find product you need , pls send email."
                                    value="<?= @$this->input->get('product'); ?>" required=""
                                    style="width: 85%; display: initial;">
                                <button type="submit" class="blue transform-v-center" style="vertical-align: -webkit-baseline-middle; padding-top: 0; border: none;
    background: #435766; width: 43px; height: 38px; margin-top: 0; margin-left: 0%; position: absolute;"><i
                                        class="fas fa-search " style="color:#fff"></i></button>

                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 wow fadeInRight">
                        <div class="right-head">
                            <ul class="text-xs-center text-sm-center text-md-center text-lg-right">
                                <li><a href="<?= base_url('stock'); ?>" class="btn btn-primary">Stock</a></li>

                                <li>
                                    <div id="google_translate_element"></div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="headnav" class="bottom-head bg-black">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2 logo">
                        <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets/images/logo-light.png" /></a>
                    </div>
                    <div class="col-lg-10">
                        <div class="header-1">
                            <nav class="main-menu-1 menu-4" style="display: block;">
                                <div class="d-flex align-items-center">
                                    <ul>
                                        <li> <a href="<?= base_url(); ?>" class="active">Home</a></li>
                                        <li class="mega-menu-dropdown"> <a href="<?= base_url('product'); ?>"
                                                class="">Product <span><i class="fas fa-caret-down"></i></span></a>
                                            <ul class="submenu mega-menu">
                                                <div class="container">
                                                    <div class="row">
                                                        <?php if (categories() == TRUE) {
                                                            foreach (array_chunk(categories(), 3) as $cate) {
                                                        ?>
                                                        <div class="col-md-4">
                                                            <li><a
                                                                    href="<?= base_url('category/') . $cate[0]->name_slug; ?>"><span></span><?= $cate[0]->name; ?></a>
                                                            </li>

                                                        </div>
                                                        <?php if (!empty($cate[1]->name)) { ?>
                                                        <div class="col-md-4">
                                                            <li><a
                                                                    href="<?= base_url('category/') . $cate[1]->name_slug; ?>"><span></span><?= $cate[1]->name; ?></a>
                                                            </li>

                                                        </div>
                                                        <?php }
                                                                if (!empty($cate[2]->name)) { ?>
                                                        <div class="col-md-4">
                                                            <li><a
                                                                    href="<?= base_url('category/') . $cate[2]->name_slug; ?>"><span></span><?= $cate[2]->name; ?></a>
                                                            </li>

                                                        </div>
                                                        <?php }
                                                            }
                                                        } ?>
                                                    </div>
                                                </div>
                                            </ul>
                                        </li>
                                        <li> <a href="javascript:void(0);" class="">Parts<span><i
                                                        class="fas fa-caret-down"></i></span></a>
                                            <ul class="submenu">
                                                <?php if (part_categories() == TRUE) {
                                                    foreach (part_categories() as $pcate) {
                                                ?>
                                                <li><a
                                                        href="<?= base_url('part/') . $pcate->name_slug; ?>"><span></span><?= $pcate->name; ?></a>
                                                </li>
                                                <?php }
                                                } ?>

                                            </ul>
                                        </li>
                                        <li> <a href="#" class="">News<span><i class="fas fa-caret-down"></i></span></a>
                                            <ul class="submenu">
                                                <li><a href="<?= base_url('industry-news'); ?>"><span></span>Industry
                                                        news</a></li>
                                                <li><a href="<?= base_url('company-news'); ?>"><span></span>Company
                                                        news</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="#" class="">Service & Support<span><i
                                                        class="fas fa-caret-down"></i></span></a>
                                            <ul class="submenu">
                                                <li><a href="<?= base_url('industrial-engines'); ?>"><span></span>Industrial
                                                        engine service</a></li>
                                                <li><a href="<?= base_url('marine'); ?>"><span></span>Marine service</a>
                                                </li>
                                                <li><a href="<?= base_url('on-highway'); ?>"><span></span>On-Highway
                                                        service</a></li>
                                                <li><a href="<?= base_url('power-generation'); ?>"><span></span>Power
                                                        generation service</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?= base_url('genuine-oem-parts'); ?>"><span></span>Genuine OEM
                                                Parts</a></li>
                                        <li> <a href="<?= base_url('about'); ?>" class="">About<span><i
                                                        class="fas fa-caret-down"></i></span></a>
                                            <ul class="submenu">
                                                <!--  <li><a href="<?= base_url('about'); ?>"><span></span>About Company</a></li>  -->
                                                <li><a href="<?= base_url('global'); ?>"><span></span>Global</a></li>
                                                <li><a href="<?= base_url('quality-policy'); ?>"><span></span>Quality
                                                        Policy</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="<?= base_url('contact'); ?>">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->


    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <!-- Google Translate Element begin -->
    <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,es',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }
    </script>

    <script>
    $('document').ready(function() {
        $('#google_translate_element').on("click", function() {

            // Change font family and color
            $("iframe").contents().find(
                    ".goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div"
                ) //, .goog-te-menu2 *
                .css({
                    'color': '#544F4B',
                    'background-color': '#e3e3ff',
                    'font-family': '"Open Sans",Helvetica,Arial,sans-serif'
                });

            // Change hover effects  #e3e3ff = white
            $("iframe").contents().find(".goog-te-menu2-item div").hover(function() {
                $(this).css('background-color', '#17548d').find('span.text').css('color',
                    '#e3e3ff');
            }, function() {
                $(this).css('background-color', '#e3e3ff').find('span.text').css('color',
                    '#544F4B');
            });

            // Change Google's default blue border
            $("iframe").contents().find('.goog-te-menu2').css('border', '1px solid #17548d');

            $("iframe").contents().find('.goog-te-menu2').css('background-color', '#e3e3ff');

            // Change the iframe's box shadow
            $(".goog-te-menu-frame").css({
                '-moz-box-shadow': '0 3px 8px 2px #666666',
                '-webkit-box-shadow': '0 3px 8px 2px #666',
                'box-shadow': '0 3px 8px 2px #666'
            });
        });
    });
    </script>

    <style type="text/css">
    /* OVERRIDE GOOGLE TRANSLATE WIDGET CSS BEGIN */
    div#google_translate_element div.goog-te-gadget-simple {
        border: none;
        background-color: transparent;
        /*background-color: #17548d;*/
        /*#e3e3ff*/
    }

    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value:hover {
        text-decoration: none;
        background-color: #243b4ddb;
        border-color: #243b4ddb;
        color: #fff !important;
        box-shadow: 0px 11px 20px -4px #243b4ddb;
        -webkit-transform: scale(1.04);
        transform: scale(1.04);
    }

    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value:hover span {
        color: #fff;
    }

    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span {
        color: #243b4ddb;
    }

    .goog-te-gadget-icon {
        display: none !important;
        /*background: url("url for the icon") 0 0 no-repeat !important;*/
    }

    /* Remove the down arrow */
    /* when dropdown open */
    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="color: rgb(213, 213, 213);"] {
        display: none;
    }

    /* after clicked/touched */
    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="color: rgb(118, 118, 118);"] {
        display: none;
    }

    /* on page load (not yet touched or clicked) */
    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="color: rgb(155, 155, 155);"] {
        display: none;
    }

    /* Remove span with left border line | (next to the arrow) in Chrome & Firefox */
    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="border-left: 1px solid rgb(187, 187, 187);"] {
        display: none;
    }

    /* Remove span with left border line | (next to the arrow) in Edge & IE11 */
    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="border-left-color: rgb(187, 187, 187); border-left-width: 1px; border-left-style: solid;"] {
        display: none;
    }

    /* HIDE the google translate toolbar */
    .goog-te-banner-frame.skiptranslate {
        display: none !important;
    }

    body {
        top: 0px !important;
    }

    /* OVERRIDE GOOGLE TRANSLATE WIDGET CSS END */


    .goog-te-gadget-simple .goog-te-menu-value {
        background-color: transparent;
        background-image: none;
        border-color: #243b4ddb;
        color: #243b4ddb !important;
        border: 2px solid #243b4ddb;
        padding: 10px 15px;
        font-size: 1rem;
    }
    </style>
    <!-- Google Translate Element end -->