<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $product->meta_title; ?> | Engine Family</title>
    <meta name="description" content="<?= $product->meta_desc; ?>">
    <meta name="keywords" content="<?= $product->meta_keyword; ?>">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/swiper/swiper-bundle.min.css">
    <link type="text/css" media="all"
          href="/assets/4e61df48728506dec6e0b1429d79d137.css"
          rel="stylesheet">
    <link type="text/css" media="only screen and (max-width: 768px)"
          href="/assets/dcb2de333eec7ab4ae31385ed8d6a393.css"
          rel="stylesheet">

    <link rel="stylesheet" id="normalize-css"
          href="/assets/content/themes/Dieseldemo/css/normalize.css?ver=5.0.4" type="text/css"
          media="all">
    <link rel="stylesheet" id="theme-framework-css"
          href="/assets/content/themes/Dieseldemo/css/rt-css-framework.css?ver=5.0.4"
          type="text/css" media="all">

    <link rel="stylesheet" id="jackbox-css"
          href="/assets/content/themes/rttheme18/js/lightbox/css/jackbox.min.css?ver=5.0.4"
          type="text/css" media="all">
    <link rel="stylesheet" id="theme-style-all-css"
          href="/assets/content/themes/Dieseldemo/css/style.css?ver=5.0.4" type="text/css"
          media="all">
    <link rel="stylesheet" id="jquery-owl-carousel-css"
          href="/assets/content/themes/Dieseldemo/css/owl.carousel.css?ver=5.0.4" type="text/css"
          media="all">
    <link rel="stylesheet"  href="/assets/content/plugins/woocommerce/assets/css/woocommerce.css?ver=3.5.4">
    <script src="/assets/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js">
    </script>

    <script type="text/javascript">
        var rt_theme_params = {
            "ajax_url": "http:\/\/diesel-family.com\/wp-admin\/admin-ajax.php",
            "rttheme_template_dir": "http:\/\/diesel-family.com\/wp-content\/themes\/Dieseldemo",
            "sticky_logo": "on",
            "content_animations": "on",
            "page_loading": ""
        };
    </script>
    <?php $this->load->view('include/header'); ?>
    <style>
        .four {
            width: 24%;
        }

        .content_block{
            width: auto !important;
        }
        .content_area {
            margin:auto;
        }
    </style>
    <!-- Start: Inner Banner Section -->
    <section class="section inner-banner-2" data-overlay="7"
             style="background-image: url('<?= base_url(); ?>assets/images/bg/Ersatzteile.jpg');">
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
    <section class="section shop" id="container">
        <div class="container-fluid content_holder">
            <div class="content_second_background">
                <div class="content_area clearfix" style="    width: fit-content;">
                    <div id="row-673265-1" class="content_block_background template_builder "
                         style="background-attachment: scroll;">
                        <section class="content_block clearfix">
                            <section id="row-673265-1-content" class="content full  clearfix">
                                <div class="row clearfix">
                                    <section id="text-box-673265-4007" class="text_box fadeIn animated"
                                             data-rt-animate="animate" data-rt-animation-type="fadeIn"
                                             data-rt-animation-group="single" ><h2
                                                style="text-align: center;">MEET THE <span style="color: #f4bf1e;">NEWEST</span>
                                            RT-THEME</h2></section>
                                </div>
                                <div class="row clearfix">
                                    <hr class="style-six margin-t0 margin-b0  fadeInDown animated"
                                        data-rt-animate="animate" data-rt-animation-type="fadeInDown"
                                        data-rt-animation-group="single" style="animation-delay: 0s;">
                                </div>
                                <div id="space-673265-113587" class="clearfix" style="height:60px"></div>
                                <div class="clearfix">
                                    <div class="box four ">
                                        <article id="content-box-673265-98562" class="featured fadeIn animated"
                                                 data-rt-animate="animate" data-rt-animation-type="fadeIn"
                                                 data-rt-animation-group="single" style="animation-delay: 0s;">
                                            <div class="featured_image_holder rounded_image pin bw_filter img_loaded"><a
                                                        href="#" title="RESPONSIVE DESIGN" target="_self"><img
                                                            src="https://rttheme18.demo-rt.com/wp-content/uploads/2014/03/photodune-5839302-happy-kid-playing-with-toy-airplane-s-480x480.jpg"
                                                            class="aligncenter" alt=""></a></div>
                                            <div class="space margin-b20"></div>
                                            <div class="caption title_centered "><h3 class="featured_article_title "><a
                                                            href="#" title="RESPONSIVE DESIGN" target="_self">RESPONSIVE
                                                        DESIGN</a></h3></div>
                                            <div class="space margin-b20"></div>
                                            <p class="aligncenter">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Curabitur euismod enim a metus adipiscing aliquam. Vestibulum in
                                                vestibulum lorem.</p></article>
                                    </div>
                                    <div class="box four ">
                                        <article id="content-box-673265-32044" class="featured fadeIn animated"
                                                 data-rt-animate="animate" data-rt-animation-type="fadeIn"
                                                 data-rt-animation-group="single" style="animation-delay: 0s;">
                                            <div class="featured_image_holder rounded_image pin bw_filter img_loaded"><a
                                                        href="#" title="HIGHLY CUSTOMIZABLE" target="_self"><img
                                                            src="https://rttheme18.demo-rt.com/wp-content/uploads/2014/03/photodune-6670322-typewriter-m-480x480.jpg"
                                                            class="aligncenter" alt=""></a></div>
                                            <div class="space margin-b20"></div>
                                            <div class="caption title_centered "><h3 class="featured_article_title "><a
                                                            href="#" title="HIGHLY CUSTOMIZABLE" target="_self">HIGHLY
                                                        CUSTOMIZABLE</a></h3></div>
                                            <div class="space margin-b20"></div>
                                            <p class="aligncenter">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Curabitur euismod enim a metus adipiscing aliquam. Vestibulum in
                                                vestibulum lorem.</p></article>
                                    </div>
                                    <div class="box four ">
                                        <article id="content-box-673265-28684" class="featured fadeIn animated"
                                                 data-rt-animate="animate" data-rt-animation-type="fadeIn"
                                                 data-rt-animation-group="single" style="animation-delay: 0s;">
                                            <div class="featured_image_holder rounded_image pin bw_filter img_loaded"><a
                                                        href="#" title="SOLID FRAMEWORK" target="_self"><img
                                                            src="https://rttheme18.demo-rt.com/wp-content/uploads/2014/03/photodune-3309248-hotair-ballon-s2.jpg"
                                                            class="aligncenter" alt=""></a></div>
                                            <div class="space margin-b20"></div>
                                            <div class="caption title_centered "><h3 class="featured_article_title "><a
                                                            href="#" title="SOLID FRAMEWORK" target="_self">SOLID
                                                        FRAMEWORK</a></h3></div>
                                            <div class="space margin-b20"></div>
                                            <p class="aligncenter">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Curabitur euismod enim a metus adipiscing aliquam. Vestibulum in
                                                vestibulum lorem.</p></article>
                                    </div>
                                    <div class="box four ">
                                        <article id="content-box-673265-171320" class="featured fadeIn animated"
                                                 data-rt-animate="animate" data-rt-animation-type="fadeIn"
                                                 data-rt-animation-group="single" style="animation-delay: 0s;">
                                            <div class="featured_image_holder rounded_image pin bw_filter img_loaded"><a
                                                        href="#" title="EXTENDED DOCUMENTATION" target="_self"><img
                                                            src="https://rttheme18.demo-rt.com/wp-content/uploads/2014/03/photodune-6904574-chess-s.jpg"
                                                            class="aligncenter" alt=""></a></div>
                                            <div class="space margin-b20"></div>
                                            <div class="caption title_centered "><h3 class="featured_article_title "><a
                                                            href="#" title="EXTENDED DOCUMENTATION" target="_self">EXTENDED
                                                        DOCUMENTATION</a></h3></div>
                                            <div class="space margin-b20"></div>
                                            <p class="aligncenter">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Curabitur euismod enim a metus adipiscing aliquam. Vestibulum in
                                                vestibulum lorem.</p></article>
                                    </div>
                                </div>
                            </section>
                        </section>
                    </div>
                    <div id="row-673265-2" class="content_block_background template_builder row-style-2"
                         style="background-attachment: scroll;">
                        <section class="content_block clearfix">
                            <section id="row-673265-2-content" class="content full  clearfix">
                                <div class="row clearfix">
                                    <hr class="style-seven margin-t0 margin-b40  fadeInDown animated"
                                        data-rt-animate="animate" data-rt-animation-type="fadeInDown"
                                        data-rt-animation-group="single" style="animation-delay: 0s; display: none">
                                </div>
                                <div class="clearfix" style="    display: flex;
    flex-direction: row;
    align-content: flex-start;
    flex-wrap: wrap;
    justify-content: space-between;">
                                    <div class="box one ">
                                        <div id="space-673265-90096" class="clearfix" style="height:35px"></div>
                                        <section id="text-box-673265-148820" class="text_box fadeIn animated"
                                                 data-rt-animate="animate" data-rt-animation-type="fadeIn"
                                                 data-rt-animation-group="single" style="animation-delay: 0s;"><h3
                                                    style="text-align: center;">&nbsp;</h3>
                                            <h3 style="text-align: center;">AMAZING THEME FEATURES</h3>
                                            <p>&nbsp;</p></section>
                                        <ul class="with_icons light big_icons icon_borders "
                                            data-rt-animation-group="group">
                                            <li class="box two first fadeInDown animated" data-rt-animate="animate"
                                                data-rt-animation-type="fadeInDown" style="animation-delay: 0s;"><span
                                                        class="icon-paper-plane icon"></span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis gravida
                                                    varius ornare.</p></li>
                                            <li class="box two last fadeInDown animated" data-rt-animate="animate"
                                                data-rt-animation-type="fadeInDown" style="animation-delay: 0.1s;"><span
                                                        class="icon-cog-alt icon"></span>
                                                <p> Fusce quis rhoncus sapien, ac tincidunt velit. Aliquam erat
                                                    volutpat. </p></li>
                                            <li class="box two first fadeInDown animated" data-rt-animate="animate"
                                                data-rt-animation-type="fadeInDown" style="animation-delay: 0.2s;"><span
                                                        class="icon-desktop icon"></span>
                                                <p>Class aptent taciti sociosqu ad litora torquent per conubia
                                                    nostra.</p></li>
                                            <li class="box two last fadeInDown animated" data-rt-animate="animate"
                                                data-rt-animation-type="fadeInDown" style="animation-delay: 0.3s;"><span
                                                        class="icon-calendar icon"></span>
                                                <p>Fusce mattis felis quam, pharetra bibendum eros placerat tempus.</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="box two ">
                                        <section id="text-box-673265-84023" class="text_box fadeIn animated"
                                                 data-rt-animate="animate" data-rt-animation-type="fadeIn"
                                                 data-rt-animation-group="single" style="animation-delay: 0s;"><p><img
                                                        class="size-full wp-image-2174 aligncenter" alt="laptop"
                                                        src="https://rttheme18.demo-rt.com/wp-content/uploads/2014/03/laptop.png"
                                                        width="488" height="333"></p>
                                            <p>&nbsp;</p></section>
                                    </div>
                                </div>
                            </section>
                        </section>
                    </div>
                    <div id="row-673265-149190" class="content_block_background template_builder "
                         style="background-attachment: scroll;">
                        <section class="content_block clearfix">
                            <section id="row-673265-149190-content" class="content full  clearfix">
                                <div class="clearfix">
                                    <div id="products-673265-41197" class="product_holder product-showcase clearfix  ">
                                        <div class="product_boxes" data-rt-animation-group="group">
                                            <div class="row clearfix  with_borders fluid with_effect no_top_border no_bottom_border">
                                                <div class="box three first first-row grid-title"
                                                     style="min-height: 257px;">
                                                    <h3 class="grid_title">LATEST PRODUCTS</h3></div>
                                                <div class="box three  first-row   product-category-1 product-category-2 product-category-4"
                                                     style="min-height: 257px;">
                                                    <div class="product_item_holder fadeIn animated"
                                                         data-rt-animate="animate" data-rt-animation-type="fadeIn"
                                                         style="animation-delay: 0s;">

                                                        <div class="featured_image img_loaded">
                                                            <a href="https://rttheme18.demo-rt.com/product-detail/product-name-9/"
                                                               title="Product With All Elements" rel="bookmark"><img
                                                                        src="https://rttheme18.demo-rt.com/wp-content/uploads/2010/08/photodune-2221987-luxury-watch-black-leather-and-white-gold-xs-480x340.jpg"
                                                                        alt="" class=""></a>
                                                        </div>
                                                        <div class="product_info">

                                                            <h4>
                                                                <a href="https://rttheme18.demo-rt.com/product-detail/product-name-9/"
                                                                   title="Product With All Elements" rel="bookmark">Product
                                                                    With All Elements</a></h4>

                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Nulla at erat interdum velit eleifend ornare nec ut
                                                                erat. </p>

                                                            <p class="price">
                                                                <del><span class="amount">$90</span></del>
                                                                <ins><span class="amount">$75</span></ins>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box three  last first-row   product-category-1 product-category-2 product-category-4 sub-product-category-2"
                                                     style="min-height: 257px;">
                                                    <div class="product_item_holder fadeIn animated"
                                                         data-rt-animate="animate" data-rt-animation-type="fadeIn"
                                                         style="animation-delay: 0.1s;">

                                                        <div class="featured_image img_loaded">
                                                            <a href="https://rttheme18.demo-rt.com/product-detail/product-name-8/"
                                                               title="Product With Single Image" rel="bookmark"><img
                                                                        src="https://rttheme18.demo-rt.com/wp-content/uploads/2010/08/photodune-2635261-fashion-watch-xs-480x340.jpg"
                                                                        alt="" class=""></a>
                                                        </div>
                                                        <div class="product_info">

                                                            <h4>
                                                                <a href="https://rttheme18.demo-rt.com/product-detail/product-name-8/"
                                                                   title="Product With Single Image" rel="bookmark">Product
                                                                    With Single Image</a></h4>

                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Nulla at erat interdum velit eleifend ornare nec ut
                                                                erat. </p>

                                                            <p class="price">
                                                                <del><span class="amount">$115</span></del>
                                                                <ins><span class="amount">$70</span></ins>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix  with_borders fluid with_effect no_top_border no_bottom_border">
                                                <div class="box three  first  last-row  product-category-1 product-category-2 product-category-3"
                                                     style="min-height: 256px;">
                                                    <div class="product_item_holder fadeIn animated"
                                                         data-rt-animate="animate" data-rt-animation-type="fadeIn"
                                                         style="animation-delay: 0.2s;">

                                                        <div class="featured_image img_loaded">
                                                            <a href="https://rttheme18.demo-rt.com/product-detail/product-name-7/"
                                                               title="Product Without Tabs" rel="bookmark"><img
                                                                        src="https://rttheme18.demo-rt.com/wp-content/uploads/2010/08/photodune-4972493-wrist-watch-xs-480x340.jpg"
                                                                        alt="" class=""></a>
                                                        </div>
                                                        <div class="product_info">

                                                            <h4>
                                                                <a href="https://rttheme18.demo-rt.com/product-detail/product-name-7/"
                                                                   title="Product Without Tabs" rel="bookmark">Product
                                                                    Without Tabs</a></h4>

                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Nulla at erat interdum velit eleifend ornare nec ut
                                                                erat. </p>

                                                            <p class="price">
                                                                <del><span class="amount">$55</span></del>
                                                                <ins><span class="amount">$45</span></ins>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box three   last-row  product-category-1 product-category-2 product-category-4"
                                                     style="min-height: 256px;">
                                                    <div class="product_item_holder fadeIn animated"
                                                         data-rt-animate="animate" data-rt-animation-type="fadeIn"
                                                         style="animation-delay: 0.3s;">

                                                        <div class="featured_image img_loaded">
                                                            <a href="https://rttheme18.demo-rt.com/product-detail/product-name-6/"
                                                               title="Full Width Product Page" rel="bookmark"><img
                                                                        src="https://rttheme18.demo-rt.com/wp-content/uploads/2010/08/photodune-1739234-diamond-xs-480x340.jpg"
                                                                        alt="" class=""></a>
                                                        </div>
                                                        <div class="product_info">

                                                            <h4>
                                                                <a href="https://rttheme18.demo-rt.com/product-detail/product-name-6/"
                                                                   title="Full Width Product Page" rel="bookmark">Full
                                                                    Width Product Page</a></h4>

                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Nulla at erat interdum velit eleifend ornare nec ut
                                                                erat. </p>

                                                            <p class="price">
                                                                <del><span class="amount">$55</span></del>
                                                                <ins><span class="amount">$45</span></ins>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box three  last  last-row  product-category-1 product-category-3"
                                                     style="min-height: 256px;">
                                                    <div class="product_item_holder fadeIn animated"
                                                         data-rt-animate="animate" data-rt-animation-type="fadeIn"
                                                         style="animation-delay: 0.4s;">

                                                        <div class="featured_image img_loaded">
                                                            <a href="https://rttheme18.demo-rt.com/product-detail/product-name-5/"
                                                               title="Left Sidebar Product Page" rel="bookmark"><img
                                                                        src="https://rttheme18.demo-rt.com/wp-content/uploads/2010/08/photodune-804553-pen-xs-480x340.jpg"
                                                                        alt="" class=""></a>
                                                        </div>
                                                        <div class="product_info">

                                                            <h4>
                                                                <a href="https://rttheme18.demo-rt.com/product-detail/product-name-5/"
                                                                   title="Left Sidebar Product Page" rel="bookmark">Left
                                                                    Sidebar Product Page</a></h4>

                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Nulla at erat interdum velit eleifend ornare nec ut
                                                                erat. </p>

                                                            <p class="price">
                                                                <del><span class="amount">$55</span></del>
                                                                <ins><span class="amount">$45</span></ins>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </section>
                    </div>
                    <div >
                        <div class="swiper mySwiper" id="swiper1" style="height: 200px;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" style="height: 200px;">slider 1</div>
                                <div class="swiper-slide" style="height: 200px;">slider 2</div>
                                <div class="swiper-slide" style="height: 200px;">slider 4</div>
                                <div class="swiper-slide" style="height: 200px;">slider 4</div>
                                <div class="swiper-slide" style="height: 200px;">slider 5</div>
                            </div>
                            <div class="owl-controls clickable">
                                <div class="owl-buttons">
                                    <div class="swiper-button-prev"><span class="icon-left-open"></span>
                                    </div>
                                    <div class="swiper-button-next"><span class="icon-right-open"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="row-673265-163500" class="content_block_background template_builder row-style-2"
                         style="background-attachment: scroll;">
                        <section class="content_block clearfix" style="display: none">

                            <section id="row-673265-163500-content" class="content full  clearfix">
                                <div class="clearfix">
                                    <hr class="style-seven margin-t0 margin-b40  fadeInDown animated"
                                        data-rt-animate="animate" data-rt-animation-type="fadeInDown"
                                        data-rt-animation-group="single" >
                                </div>
                                <div class="clearfix" style="display: none">
                                        <div id="testimonial-carousel-673265-155252" style="height: 247px;"
                                             class="carousel-holder clearfix centered without_heading  fadeIn animated"
                                             data-rt-animate="animate" data-rt-animation-type="fadeIn"
                                             data-rt-animation-group="single">
                                            <section class="carousel_items clearfix ">
                                                <div class="owl-carousel owl-theme " style="opacity: 1; display: block;">
                                                    <div class="owl-wrapper-outer autoHeight "  style="height: 247px;">
                                                        <div class="owl-wrapper ">
                                                            <div class="owl-item " >
                                                                <div class="testimonial item">
                                                                    <div class="client_image gradient">
                                                                        <img src="https://rttheme18.demo-rt.com/wp-content/uploads/2014/01/face-3.jpg"
                                                                             alt="" class=""></div>
                                                                    <div class="text with_image">
                                                                        <p>
                                                                            <span class="icon-quote-left"></span>
                                                                            Nam orci orci, pretium vel elementum eu,
                                                                            vestibulum at sapien. Sed pretium turpis
                                                                            lacus, ut vehicula odio tempor non. Duis
                                                                            fermentum massa sed laoreet suscipit. Mauris
                                                                            sed semper urna, a facilisis elit. <span
                                                                                    class="icon-quote-right"></span>
                                                                        </p>
                                                                        <div class="client_info">
                                                                            Jane Woe
                                                                            - <span>Job Title</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item ">
                                                                <div class="testimonial item">
                                                                    <div class="client_image gradient">
                                                                        <img src="https://rttheme18.demo-rt.com/wp-content/uploads/2014/01/face-8.jpg"
                                                                             alt="" class=""></div>
                                                                    <div class="text with_image">
                                                                        <p>
                                                                            <span class="icon-quote-left"></span>
                                                                            In enim justo, rhoncus ut, imperdiet a,
                                                                            venenatis vitae, justo. Nullam dictum felis
                                                                            eu pede mollis pretium. Integer tincidunt.
                                                                            Cras dapibus. Vivamus elementum semper nisi.
                                                                            Aenean vulputate eleifend tellus. <span
                                                                                    class="icon-quote-right"></span>
                                                                        </p>
                                                                        <div class="client_info">
                                                                            William Woe
                                                                            - <span>CEO</span>
                                                                            <a href="http://themeforest.net"
                                                                               target="_blank" title="ThemeForest"
                                                                               class="client_link">ThemeForest</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item ">
                                                                <div class="testimonial item">
                                                                    <div class="client_image gradient">
                                                                        <img src="https://rttheme18.demo-rt.com/wp-content/uploads/2014/01/face-6.jpg"
                                                                             alt="" class=""></div>
                                                                    <div class="text with_image">
                                                                        <p>
                                                                            <span class="icon-quote-left"></span>
                                                                            Donec quam felis, ultricies nec,
                                                                            pellentesque eu, pretium quis, sem. Nulla
                                                                            consequat massa quis enim. Donec pede justo,
                                                                            fringilla vel, aliquet nec, vulputate eget,
                                                                            arcu. <span class="icon-quote-right"></span>
                                                                        </p>
                                                                        <div class="client_info">
                                                                            Robert Roe
                                                                            - <span>WordPress Specialist</span>
                                                                            <a href="http://envato.com" target="_blank"
                                                                               title="Envato"
                                                                               class="client_link">Envato</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item ">
                                                                <div class="testimonial item">
                                                                    <div class="client_image gradient">
                                                                        <img src="https://rttheme18.demo-rt.com/wp-content/uploads/2014/01/face.jpg"
                                                                             alt="" class=""></div>
                                                                    <div class="text with_image">
                                                                        <p>
                                                                            <span class="icon-quote-left"></span>
                                                                            Lorem ipsum dolor sit amet, consectetuer
                                                                            adipiscing elit. Aenean commodo ligula eget
                                                                            dolor. Aenean massa. Cum sociis natoque
                                                                            penatibus et magnis dis parturient montes,
                                                                            nascetur ridiculus mus. <span
                                                                                    class="icon-quote-right"></span>
                                                                        </p>
                                                                        <div class="client_info">
                                                                            Jane Doe
                                                                            - <span>Designer</span>
                                                                            <a href="http://rtthemes.com"
                                                                               target="_blank" title="RT-Themes"
                                                                               class="client_link">RT-Themes</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-controls clickable">
                                                        <div class="owl-buttons">
                                                            <div class="owl-prev"><span class="icon-left-open"></span>
                                                            </div>
                                                            <div class="owl-next"><span class="icon-right-open"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                </div>
                            </section>
                        </section>
                    </div>
                    <div id="row-673265-4826" class="content_block_background template_builder "
                         style="background-attachment: scroll;">
                        <section class="content_block clearfix">
                            <section id="row-673265-4826-content" class="content full  clearfix">
                                <div class="clearfix" style="    display: flex;
    flex-direction: row;
    align-content: flex-start;
    flex-wrap: wrap;
    justify-content: space-between;">
                                    <div class="box  ">
                                        <div class="title_line margin-b20"><h3
                                                    class="featured_article_title fade animated"
                                                    data-rt-animate="animate" data-rt-animation-type="fade"
                                                    data-rt-animation-group="single" style="animation-delay: 0s;"><span
                                                        class="icon-chart-line heading_icon"></span> TOP FIVE REASONS TO
                                                BUY RT-THEME 18</h3></div>
                                        <section id="text-box-673265-319345" class="text_box fadeIn animated"
                                                 data-rt-animate="animate" data-rt-animation-type="fadeIn"
                                                 data-rt-animation-group="single" style="animation-delay: 0s;"><p>Nam
                                                quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas
                                                nec odio et ante tincidunt tempus. Donec vitae sapien ut libero
                                                venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros
                                                faucibus tincidunt.</p></section>
                                        <div id="space-673265-54098" class="clearfix" style="height:20px"></div>
                                        <div data-rt-animation-group="group" class="rt-toggle ">
                                            <ol>
                                                <li data-rt-animate="animate" data-rt-animation-type="fadeInDown">
                                                    <div class="toggle-head">
                                                        <div class="toggle-number"><span class="icon-magic"></span>
                                                        </div>
                                                        <div class="toggle-title">Template Builder</div>
                                                    </div>
                                                    <div class="toggle-content fluid" style="display: none;">
                                                        <p>Template Builder is a built-in tool that lets you create
                                                            custom page templates to use with your pages or posts. You
                                                            are free to edit the default templates or create a new one
                                                            as you wish. Creating custom templates has never been easy
                                                            like this!</p>
                                                    </div>
                                                </li>
                                                <li data-rt-animate="animate" data-rt-animation-type="fadeInDown">
                                                    <div class="toggle-head">
                                                        <div class="toggle-number"><span class="icon-mobile"></span>
                                                        </div>
                                                        <div class="toggle-title">Mobile &amp; Retina Ready</div>
                                                    </div>
                                                    <div class="toggle-content fluid" style="display: none;">
                                                        <p>RT-Theme has been designed to fit the screens of all popular
                                                            devices such as tablets, smart phones and regular computers.
                                                            You can test it by resizing your browser window. Also, it is
                                                            carefully developed to look sharp with new generation&nbsp;HiDPI
                                                            /Retina devices.&nbsp; &nbsp;</p>
                                                    </div>
                                                </li>
                                                <li data-rt-animate="animate" data-rt-animation-type="fadeInDown">
                                                    <div class="toggle-head open">
                                                        <div class="toggle-number"><span class="icon-brush"></span>
                                                        </div>
                                                        <div class="toggle-title">Styling Tools</div>
                                                    </div>
                                                    <div class="toggle-content fluid" style="display: none;">
                                                        <p>With extended styling options of RT-Theme you are able to
                                                            create totally different look for each content section.
                                                            Please note that all parts of the theme can be re-styled
                                                            without editing core files. Everything you need is inside
                                                            the theme options.</p>
                                                    </div>
                                                </li>
                                                <li data-rt-animate="animate" data-rt-animation-type="fadeInDown">
                                                    <div class="toggle-head">
                                                        <div class="toggle-number"><span class="icon-th-list"></span>
                                                        </div>
                                                        <div class="toggle-title"> Product Showcase &amp; Portfolio
                                                            Features
                                                        </div>
                                                    </div>
                                                    <div class="toggle-content fluid" style="display: none;">
                                                        <p>This is a built-in (plugin free) product catalog page. You
                                                            can show your products easily by using powerful tools if you
                                                            don’t need to online shopping features. It also can be used
                                                            for service presentations such as tour itineraries, events
                                                            even hotel presentations. The tabs and their icons and order
                                                            where inside the <a
                                                                    title="A sample product page with all elements"
                                                                    href="https://rttheme18.demo-rt.com/product-detail/product-name-9/">products</a>
                                                            are totally customizable!</p>
                                                        <p>By using <a
                                                                    title="a sample page for sortable portfolio page "
                                                                    href="https://rttheme18.demo-rt.com/our-portfolio-2/">Portfolio</a>
                                                            custom post types; you can show your portfolio items easily
                                                            by using the Template Builder or shortcodes. You can
                                                            categorize, change layouts and combine with other elements.
                                                        </p>
                                                    </div>
                                                </li>
                                                <li data-rt-animate="animate" data-rt-animation-type="fadeInDown">
                                                    <div class="toggle-head">
                                                        <div class="toggle-number"><span class="icon-cog-alt"></span>
                                                        </div>
                                                        <div class="toggle-title">Amazing Theme Options</div>
                                                    </div>
                                                    <div class="toggle-content fluid" style="display: none;">
                                                        <p>RT-Framework offers a rock solid theme back-end with tons of
                                                            useful tools and options. </p>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="box  ">
                                        <div class="row clearfix">
                                            <div class="title_line margin-b20"><h3
                                                        class="featured_article_title fade animated"
                                                        data-rt-animate="animate" data-rt-animation-type="fade"
                                                        data-rt-animation-group="single" style="animation-delay: 0s;">
                                                    <span class="icon-doc-alt heading_icon"></span> LATEST NEWS</h3>
                                            </div>
                                            <div id="blog-carousel-673265-134887"
                                                 class="carousel-holder clearfix plain_carousel_holder with_heading  fadeIn animated"
                                                 data-rt-animation-group="single" data-rt-animation-type="fadeIn"
                                                 data-rt-animate="animate"
                                                 style="width: 353px; margin-left: -10px; animation-delay: 0s;">
                                                <section class="latest-news carousel_items clearfix">
                                                    <div class="owl-carousel owl-theme"
                                                         style="opacity: 1; display: block;">
                                                        <div class="owl-wrapper-outer autoHeight"
                                                             style="height: 300px;">
                                                            <div class="owl-wrapper"
                                                                 style="width: 2824px; left: 0px; display: block; transition: all 600ms ease 0s; transform: translate3d(-1059px, 0px, 0px);">
                                                                <div class="owl-item" style="width: 353px;">
                                                                    <div class="item">
                                                                        <div class="featured-image">
                                                                            <span class="date">March 1, 2012</span>
                                                                            <a href="https://rttheme18.demo-rt.com/video-post-type/"
                                                                               class="title" rel="bookmark"><img
                                                                                        src="https://rttheme18.demo-rt.com/wp-content/uploads/2014/01/photodune-3443604-fish9-s-480x240.jpg"
                                                                                        alt="" class=""></a>
                                                                        </div>
                                                                        <a href="https://rttheme18.demo-rt.com/video-post-type/"
                                                                           class="title" rel="bookmark">Video Post
                                                                            Type</a>
                                                                        Vestibulum ante ipsum primis in faucibus orci
                                                                        luctus et ultrices posuere cubilia Curae; Sed
                                                                        aliquam, nisi quis porttitor congue, elit erat
                                                                        euismod orci, ac placerat dolor lectus qu ..
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item" style="width: 353px;">
                                                                    <div class="item">
                                                                        <div class="featured-image">
                                                                            <span class="date">March 1, 2012</span>
                                                                            <a href="https://rttheme18.demo-rt.com/link-post-type/"
                                                                               class="title" rel="bookmark"><img
                                                                                        src="https://rttheme18.demo-rt.com/wp-content/uploads/2014/01/photodune-6427990-computer-game-s-480x240.jpg"
                                                                                        alt="" class=""></a>
                                                                        </div>
                                                                        <a href="https://rttheme18.demo-rt.com/link-post-type/"
                                                                           class="title" rel="bookmark">Link Post
                                                                            Type</a>
                                                                        Vestibulum ante ipsum primis in faucibus orci
                                                                        luctus et ultrices posuere cubilia Curae; In ac
                                                                        dui quis mi consectetuer lacinia. Nam pretium
                                                                        turpis et arcu. Duis arcu tortor, suscip ..
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item" style="width: 353px;">
                                                                    <div class="item">
                                                                        <div class="featured-image">
                                                                            <span class="date">March 1, 2012</span>
                                                                            <a href="https://rttheme18.demo-rt.com/gallery-post-tpye/"
                                                                               class="title" rel="bookmark"><img
                                                                                        src="https://rttheme18.demo-rt.com/wp-content/uploads/2014/01/photodune-6635927-abstract-fish2-s-480x240.jpg"
                                                                                        alt="" class=""></a>
                                                                        </div>
                                                                        <a href="https://rttheme18.demo-rt.com/gallery-post-tpye/"
                                                                           class="title" rel="bookmark">Gallery Post
                                                                            Type</a>
                                                                        Suspendisse pulvinar, augue ac venenatis
                                                                        condimentum, sem libero volutpat nibh, nec
                                                                        pellentesque velit pede quis nunc. Vestibulum
                                                                        ante ipsum primis in faucibus orci luctus et
                                                                        ultri ..
                                                                    </div>
                                                                </div>
                                                                <div class="owl-item" style="width: 353px;">
                                                                    <div class="item">
                                                                        <div class="featured-image">
                                                                            <span class="date">August 23, 2011</span>
                                                                            <a href="https://rttheme18.demo-rt.com/lorem-ipsum-dolor-sit-amet-2/"
                                                                               class="title" rel="bookmark"><img
                                                                                        src="https://rttheme18.demo-rt.com/wp-content/uploads/2014/01/photodune-6635906-abstract-city-s-480x240.jpg"
                                                                                        alt="" class=""></a>
                                                                        </div>
                                                                        <a href="https://rttheme18.demo-rt.com/lorem-ipsum-dolor-sit-amet-2/"
                                                                           class="title" rel="bookmark">Post With Left
                                                                            Sidebar</a>
                                                                        Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Pellentesque non eleifend
                                                                        tellus. Ut dui velit, porttitor et accumsan ac,
                                                                        faucibus placerat sapien. Ut sapien erat,
                                                                        vulputa ..
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-controls clickable" style="top: -43.5px;">
                                                            <div class="owl-buttons">
                                                                <div class="owl-prev"><span
                                                                            class="icon-left-open"></span></div>
                                                                <div class="owl-next"><span
                                                                            class="icon-right-open"></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                        </script>
                                    </div>
                                </div>
                            </section>
                        </section>
                    </div>
                </div>
                <div class="content_footer footer_widgets_holder footer-673265">
                    <section class="footer_widgets clearfix footer-widgets-673265 clearfix">
                        <div class="row clearfix">
                            <hr class="style-seven margin-t0 margin-b40 " data-rt-animate="animate"
                                data-rt-animation-type="fadeInDown" data-rt-animation-group="single">
                        </div>
                        <div class="row clearfix">
                            <div id="banner-673265-1146006" class="banner   clearfix" data-rt-animate="animate"
                                 data-rt-animation-type="fadeIn" data-rt-animation-group="single">
                                <a id=""
                                   href="https://themeforest.net/item/rttheme-18-responsive-wordpress-theme/7200532?ref=stmcan"
                                   target="_self" title="Purchase Now" style="background: #243b4ddb;"
                                   class="button_ default big icon-basket margin-t15 alignright"
                                   data-rt-animate="animate" data-rt-animation-type="bounceIn"
                                   data-rt-animation-group="single">Purchase Now</a>
                                <div class="featured_text withbutton big_button ">
                                    <p class=" icon">You can use this module to display a banner box
                                        <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sodales
                                            vehicula odio quis lobortis. Aenean lacinia pulvinar hendrerit.</small></p>
                                </div>
                            </div>
                        </div>
                        <div id="space-673265-136947" class="clearfix" style="height:35px"></div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript"
            src="/assets/content/themes/rttheme18/js/script.js?ver=5.1.4"></script>
    <?php $this->load->view('include/footer'); ?>
