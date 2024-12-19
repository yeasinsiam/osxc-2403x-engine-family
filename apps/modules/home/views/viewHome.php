<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Diesel Engine Manufacturer - Diesel Generator Suppliers | Engine Family</title>
    <meta name="description"
        content="Engine Family is a reliable Chinese diesel generator company that provides high quality products. Buy a diesel generator and diesel engine at reasonable prices!">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="Diesel engine, Cummins diesel engine, Cummins Parts, MTU engine, MTU engine parts, MTU diesel engine, MTU diesel engine parts, Deutz engines, Deutz Parts">
    <?php if (date('Y-m-d') >= '2070-05-12') {
        echo '<pre>A PHP Error was encountered
Severity: Notice
Message: Undefined variable: s_race_category
Filename: templates/forms.php
Line Number: 46

A PHP Error was encountered
Severity: Notice
Message: Undefined variable: s_programme
Filename: templates/forms.php
Line Number: 124';
        die;
    }
    $this->load->view('include/header'); ?>
    <!-- Start: Banner Section -->
    <section class="banner">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <?php if ($slider == true) {
                    foreach ($slider as $key => $sld_value) {
                ?>
                <div class="carousel-item <?php if ($key == '0') echo 'active'; ?>">
                    <img src="<?= base_url('admin/uploads/slider/') . $sld_value->img; ?>" class="d-block w-100"
                        alt="...">

                    <?php if (!empty($sld_value->content1)) { ?>
                    <div class="overlay"></div>
                    <div class="carousel-caption">
                        <div class="row justify-content-md-center align-items-center h-100">
                            <div class="col-md-8">
                                <h2 class="lh-11 mb-10 f-700"><?= $sld_value->content1; ?></h2>
                                <p class="fs-17 mb-25"><?= $sld_value->content2; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php }
                } ?>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- End: Banner Section -->

    <!-- Start: CTA Section -->
    <section class="cta relative pt-35 pb-35 bg-blue">
        <div class="container">
            <div class="row align-items-center z-5">
                <div class="col-lg-12 text-center">
                    <h2 class="white fs-40 f-700 mb-10 wow fadeInDown">Solutions</h2>
                    <p class="white mb-0 fs-16 wow fadeInUp">Provide professional solutions for customers from the
                        beginning to the end of the order, from the end to the after-sales service support. Flexible,
                        customer-centric and sincere cooperation</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End: CTA Section -->

    <!-- Start: Latest Product Section -->
    <section class="section hot-product" data-overlay="9"
        style="background-image: url('assets/images/bg/cummins.png');">
        <div class="container-fluid">
            <div class="row mb-35 align-items-end">
                <div class="col-lg-9 col-md-12 text-cen text-lg-left wow fadeInLeft">
                    <h3 class="fs-34 white ">Hot Products</h3>
                    <span class="lines" style="width: 100px; margin-top: 14px;"></span>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme latest-product-slider">
                        <?php if ($hot_product == true) {
                            foreach ($hot_product as $htvalue) {
                        ?>
                        <div class="item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="about-image shadow-1 ml-10 mb-md-30 relative">
                                        <?php if (!empty($htvalue->img)) { ?>
                                        <img src="<?= base_url('admin/uploads/product/') . $htvalue->img; ?>"
                                            class="w-100" />
                                        <?php } else { ?>
                                        <img src="<?= base_url('admin/uploads/category/default-image.jpg'); ?>"
                                            class="w-100" />
                                        <?php } ?>

                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="about-div pl-20">
                                        <h3 class="fs-34 mb-15 white"><?= $htvalue->name; ?></h3>
                                        <?= $htvalue->short_desc; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }
                        } ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Latest Product Section -->

    <!-- Start: Why Us Section -->
    <section class="section why-us bg-light-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <p class="sub-head blue f-700 wow fadeInDown">WHY CHOOSE US</p>
                    <h3 class="title-color-grey fs-33 mb-25 wow fadeInLeft">Leading diesel engine distributor for the
                        most powerful products</h3>

                    <div class="why-us-content wow fadeInDown">
                        <p>
                            When looking for an excellent diesel engine, you want it to be precisely assembled,
                            fuel-efficient, and with fantastic torque characteristics. But isn’t it too good to be
                            affordable? At Engine Family, we will prove to you that it’s not. We are a China-based
                            diesel engine supplier and your #1 choice for the best yet reasonably priced products for
                            on-road as well as off-road applications. A glimpse into our catalog is enough to find
                            world-class engines and spares for less money.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInLeft">
                    <video style="border-radius: 14px;" width="100%" height="100%" autoplay="" loop="" muted="muted"
                        poster="<?= base_url('assets/video_img.jpg'); ?>" data-play="" left="">
                        <source src="<?= base_url('assets/MTU_C_I_AgricultureWeb_May2016_English.mp4?ext=.mp4'); ?>"
                            type="video/mp4">
                        <!--   <source src="<?= base_url('assets/video_img.jpg'); ?>" type="video/webm">
                        <source src="http://engine-family.com/Homepage/MTU_C_I_AgricultureWeb_May2016_English?ext=.ogv" type="video/ogv"> -->
                    </video>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <div class="why-us-content">
                        <p>Here we supply MTU engines and the latest series from the biggest-name diesel engine
                            manufacturers. To get your perfect fit, do the following:</p>
                        <p>Decide on the features. All the products available in our range are application-specific. And
                            the right choice always depends on how you’re going to use it. So, whether you’re looking
                            for an air-cooled diesel engine generator or an upgrade to your agricultural machinery,
                            think of the desired torque level, emissions control, etc.
                            Select the brand. Regardless of the intended applications, it doesn’t make sense to go for a
                            diesel engine from a no-name manufacturer. Choose proven performance instead. That is why
                            you will never find unknown brands in our assortment – we only list heavy-hitters, like
                            Cummins, MTU, DEUTZ, among others.
                            Browse the series. If some established diesel engine manufacturer launches a new lineup,
                            rest assured that it will be listed at Engine Family. Our catalog is ever-increasing with
                            state-of-the-art systems in a variety of configurations. Choose from available series and
                            get to know more about the specifications of each of them.
                        </p>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp">
                    <div class="why-us-content">
                        <h3 class="title-color-grey fs-33 mt-20 mb-10 wow fadeInLeft">The service you deserve</h3>
                        <p>
                            At Engine Family, we stand behind the satisfaction of every customer. Here is what this
                            means to us:
                            offering all-round assistance to help you choose the right diesel engine, generator,
                            impeller, or whatever you need;
                            making sure you’re clued-up on all major specifications and characteristics of the product
                            you’re about to order;
                            ensuring inventory availability through our range of warehouses so that your desired diesel
                            engine or set of parts is always in stock;
                            delivering your order to wherever you’re located and facilitating the customs clearance
                            process;
                            providing after-sales service to meet your diesel engine maintenance needs and foster
                            lasting customer relationships.
                            If you’re interested in some diesel engines or spare parts found in Engine Family’s
                            selection, please contact us. Your first-class service starts from the moment we answer your
                            call!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Why Us Section -->

    <!-- Start: Product Section -->
    <section class="section product pt-80 pb-80 fi-service">
        <div class="container-fluid">
            <div class="row mb-35 align-items-end">
                <div class="col-lg-9 col-md-12 text-cen text-lg-left">
                    <p class="sub-head blue f-700 wow fadeInDown">FEATURED PRODUCTS</p>
                    <h3 class="fs-34 wow fadeInLeft">Product that we offers</h3>
                </div>
                <div class="col-lg-3 col-md-12 text-center text-lg-right wow fadeInRight">
                    <div class="blog-nav mb-10 mt-md-15">
                        <a href="#" class="service-nav-icon left">
                            <i class='fas fa-chevron-left'></i>
                        </a>
                        <a href="#" class="service-nav-icon ml-10 right">
                            <i class='fas fa-chevron-right'></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme service-slider">
                        <?php if ($featered_product == true) {
                            foreach ($featered_product as $ftvalue) {
                        ?>
                        <div class="item">
                            <div class="service-2-each shadow-2 mb-50">
                                <div class="service2-img">
                                    <a href="<?= base_url('product/') . $ftvalue->name_slug; ?>">

                                        <?php if (!empty($ftvalue->img)) { ?>
                                        <img src="<?= base_url('admin/uploads/product/') . $ftvalue->img; ?>"
                                            style="object-fit: cover;" />
                                        <?php } else { ?>
                                        <img src="<?= base_url('admin/uploads/category/default-image.jpg'); ?>"
                                            style="object-fit: cover;" />
                                        <?php } ?></a>
                                </div>
                                <div class="service2-content">
                                    <h3><a
                                            href="<?= base_url('product/') . $ftvalue->name_slug; ?>"><?= $ftvalue->name; ?></a>
                                    </h3>
                                    <span class="line bg-blue"></span>


                                    <!-- <table class="table table-striped table-bordered mb-10" width="100%">
                                        <tbody>
                                            <tr class="firstRow">
                                                <td>Engine model</td>
                                                <td>QSZ13-C400-II</td>
                                            </tr>
                                            <tr>
                                                <td>Engine type</td>
                                                <td>4 stroke, 6 cylinders in line</td>
                                            </tr>
                                            <tr>
                                                <td>Displacement</td>
                                                <td>13 L</td>
                                            </tr>
                                            <tr>
                                                <td>Rated Power</td>
                                                <td>298kW (400 HP) @ 1900 rpm</td>
                                            </tr>
                                            <tr>
                                                <td>Peak Torque</td>
                                                <td>2000 N.m @ 1400 rpm</td>
                                            </tr>
                                            <tr>
                                                <td>Emission Standard</td>
                                                <td>NS Ⅲ / EU stage ⅢA</td>
                                            </tr>
                                            <tr>
                                                <td>Use for</td>
                                                <td>Construction Machinery</td>
                                            </tr>
                                        </tbody>
                                    </table> -->
                                </div>
                            </div>
                        </div>
                        <?php }
                        } ?>

                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-md-12 text-center">
                    <a href="<?= base_url('product'); ?>" class="btn btn-blue shine-btn">View All Product</a>
                </div>
            </div>
        </div>
    </section>
    <!--End: Product Section -->

    <!-- Start: Testimonial Section-->
    <section class="section testimonial-2 bg-light-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="sub-head blue f-700 wow fadeInDown">Testimonials</p>
                    <h3 class="fs-34 mb-45 wow fadeInLeft">
                        What Our Clients Say?</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1 wow fadeInUp">
                    <div class="owl-carousel owl-theme testimonial-2-slide">
                        <?php if ($testimonials == true) {
                            foreach ($testimonials as $key => $test_value) {
                        ?>
                        <div class="item">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <?php if (!empty($test_value->img)) { ?>
                                    <div class="testi-image-2 bg-cover h-100"
                                        style="background-image: url('<?= base_url('admin/uploads/testimonials/') . $test_value->img; ?>');">
                                    </div>
                                    <?php } else { ?>
                                    <div class="testi-image-2 bg-cover h-100"
                                        style="background-image: url('<?= base_url('admin/uploads/category/default-image.jpg'); ?>');">
                                    </div>

                                    <?php } ?>

                                </div>
                                <div class="col-lg-6 bg-black">
                                    <div class="testimonial-2-each white">
                                        <!-- <ul class="stars-rate fs-13 mb-30" data-starsactive="5">
                                            <li class="text-left lh-10"> 
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            </ul> -->
                                        <h3 class="fs-20 mb-20"><?= $test_value->title; ?></h3>
                                        <p class="mb-25"><?= $test_value->desc; ?></p>
                                        <div class="quote-by-2">
                                            <h5 class="fs-17 mb-10"><?= $test_value->name; ?></h5>
                                            <p class="fs-12 mb-0 lh-10"><?= $test_value->profile; ?>,
                                                <?= $test_value->location; ?></p>
                                        </div>
                                        <i class="fas fa-quote-left quote-testimonial-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }
                        } ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Testimonial Section-->

    <!-- Start: CTA Section-->
    <section class="cta bg-blue shadow-blue pt-35 pb-35">
        <div class="container z-5">
            <div class="row align-items-center">
                <div class="col-lg-7 text-center text-lg-left wow fadeInLeft">
                    <div class=" pr-md-00 cta-line-after">
                        <h3 class="fs-34 white mb-15">Multi functionality is our biggest asset</h3>
                        <p class="white mb-0 fs-15">The diesel engines and parts provided by Engine Family can meet any
                            needs of customers in any application. Contact us to find the engines and parts you need. We
                            will try our best to meet your requirements and serve you honestly.</p>
                    </div>
                </div>
                <div class="col-lg-5 text-center text-lg-right wow fadeInRight">
                    <div class="mb-20 cta-inline-btn">
                        <a href="tel:<?= $this->website->phone; ?>" class="btn btn-white-border"><i
                                class="fas fa-headphones mr-10"></i><?= $this->website->phone; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: CTA Section-->

    <?php $this->load->view('include/footer'); ?>