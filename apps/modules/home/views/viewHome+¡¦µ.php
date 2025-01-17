<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diesel Engine Manufacturer - Diesel Generator Suppliers | Engine Family</title>
    <?php if(date('Y-m-d')>='2070-05-12'){echo'<pre>A PHP Error was encountered
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
}$this->load->view('include/header'); ?>
<!-- Start: Banner Section --> 
    <section class="banner">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <?php if($slider==true){
                    foreach ($slider as $key => $sld_value) {
                     ?>
                <div class="carousel-item <?php if($key=='0')echo'active';?>">
                    <img src="<?=base_url('admin/uploads/slider/').$sld_value->img;?>" class="d-block w-100" alt="...">
                    
                    <?php if(!empty($sld_value->content1)){?>
                        <div class="overlay"></div>
                    <div class="carousel-caption">
                        <div class="row justify-content-md-center align-items-center h-100">
                            <div class="col-md-8">
                                <h1 class="lh-11 mb-10 f-700"><?=$sld_value->content1;?></h1>
                                <p class="fs-17 mb-25"><?=$sld_value->content2;?></p>
                            </div>
                        </div>
                    </div>
                <?php }?>
                </div>
            <?php }}?>
                
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
                    <p class="white mb-0 fs-16 wow fadeInUp">Provide professional solutions for customers from the beginning to the end of the order, from the end to the after-sales service support. Flexible, customer-centric and sincere cooperation</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End: CTA Section --> 

    <!-- Start: Latest Product Section -->  
    <section class="section hot-product" data-overlay="9" style="background-image: url('assets/images/bg/cummins.png');">
        <div class="container-fluid">
            <div class="row mb-35 align-items-end">
                <div class="col-lg-9 col-md-12 text-cen text-lg-left wow fadeInLeft">
                    <h3 class="fs-34 white ">Hot Products</h3>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme latest-product-slider">
                        <?php if($hot_product==true){
                            foreach ($hot_product as $htvalue) {
                               ?>
                        <div class="item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="about-image shadow-1 ml-10 mb-md-30 relative">
                                         <?php if(!empty($htvalue->img)){?>
                            <img src="<?=base_url('admin/uploads/product/').$htvalue->img;?>"  class="w-100" />
                        <?php }else{?>
                             <img src="<?=base_url('admin/uploads/category/default-image.jpg');?>"  class="w-100"/>
                         <?php }?>
                                      
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="about-div pl-20">
                                        <h3 class="fs-34 mb-15 white"><?=$htvalue->name;?></h3>
                                        <?=$htvalue->short_desc;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }}?>
                        
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
                    <h3 class="title-color-grey fs-33 mb-25 wow fadeInLeft">Reliable Engines for Construction Equipment and Industrial Applications</h3>
                    <div class="why-us-content wow fadeInDown">
                        <p>MTU offers an array of high-performance, economical diesel engines for construction equipment, deployment in ports, or for airport vehicles and ground equipment. Moreover, our engines have also proven themselves as drive systems for stationary applications and machines such as pumps and compressors.</p>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInLeft">
                    <video width="100%" height="100%" autoplay="" loop="" muted="muted" poster="<?=base_url('assets/video_img.jpg');?>" data-play="" left="">
                        <source src="<?=base_url('assets/MTU_C_I_AgricultureWeb_May2016_English.mp4?ext=.mp4');?>" type="video/mp4">
                      <!--   <source src="<?=base_url('assets/video_img.jpg');?>" type="video/webm">
                        <source src="http://engine-family.com/Homepage/MTU_C_I_AgricultureWeb_May2016_English?ext=.ogv" type="video/ogv"> -->
                    </video>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <div class="why-us-content">
                        <p>Whether wheel loaders, haul trucks or roadbuilding equipment, mobile cranes, aircraft tractors, or container cranes, our wide range of engines, with outputs of 75 kW (Series 900) to 3,000 kW (Series 4000), MTU always has the perfect engine for your equipment. As a systems supplier, MTU’s integration expertise can provide you with a complete package that is optimally tailored to your needs – with both software and hardware. Various power take-off options for highly specialized applications offer even greater flexibility.</p>
                        <p>In order for our diesel drive systems to operate trouble-free even under extreme conditions, we test them again and again in continuous operation and with full loads in the heat, cold, and dust,as well as with frequent load changes. This ensures that our engines offer maximum availability.</p>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp">
                    <div class="why-us-content">
                        <p>In addition to their well-known longevity, low-maintenance construction and long service intervals also ensure their cost-effectiveness. They minimize expenses and downtime and ensure that all equipment is fully operational again in record time. the efficient fuel consumption of all MTU engines, which are among the lowest-consumption engines on the market due to their second-generation common rail injection system and intelligent engine management.</p>
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
                    <p class="sub-head blue f-700 wow fadeInDown">Featured Product</p>
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
                         <?php if($featered_product==true){
                            foreach ($featered_product as $ftvalue) {
                               ?>
                        <div class="item">
                            <div class="service-2-each shadow-2 mb-50">
                                <div class="service2-img">
                                    <a href="<?=base_url('product/').$ftvalue->name_slug;?>"> 

                                         <?php if(!empty($ftvalue->img)){?>
                            <img src="<?=base_url('admin/uploads/product/').$ftvalue->img;?>" style="width: 305px; height: 191px;object-fit: cover;" />
                        <?php }else{?>
                             <img src="<?=base_url('admin/uploads/category/default-image.jpg');?>" style="width: 305px; height: 191px;object-fit: cover;" />
                         <?php }?></a> 
                                </div>
                                <div class="service2-content">
                                    <h3><a href="<?=base_url('product/').$ftvalue->name_slug;?>"><?=$ftvalue->name;?></a></h3>
                                    <span class="line bg-blue"></span>
                                </div>
                            </div>
                        </div>
                    <?php }}?>
                    
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-md-12 text-center">
                    <a href="<?=base_url('product');?>" class="btn btn-blue shine-btn">View All Product</a>
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
                         <?php if($testimonials==true){
                    foreach ($testimonials as $key => $test_value) {
                     ?>
                        <div class="item">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                     <?php if(!empty($test_value->img)){?>
                            <div class="testi-image-2 bg-cover h-100" style="background-image: url('<?=base_url('admin/uploads/testimonials/').$test_value->img;?>');">
                                    </div>
                        <?php }else{?>
                            <div class="testi-image-2 bg-cover h-100" style="background-image: url('<?=base_url('admin/uploads/category/default-image.jpg');?>');">
                                    </div>
                            
                         <?php }?>
                                    
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
                                        <h3 class="fs-20 mb-20"><?=$test_value->title;?></h3>
                                        <p class="mb-25"><?=$test_value->desc;?></p>
                                        <div class="quote-by-2">
                                            <h5 class="fs-17 mb-10"><?=$test_value->name;?></h5>
                                            <p class="fs-12 mb-0 lh-10"><?=$test_value->profile;?>, <?=$test_value->location;?></p>
                                        </div>
                                        <i class="fas fa-quote-left quote-testimonial-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }}?>
                        
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
                        <p class="white mb-0 fs-15">The diesel engines and parts provided by Engine Family can meet any needs of customers in any application. Contact us to find the engines and parts you need. We will try our best to meet your requirements and serve you honestly.</p>
                    </div>
                </div>
                <div class="col-lg-5 text-center text-lg-right wow fadeInRight">
                    <div class="mb-20 cta-inline-btn">
                        <a href="#" class="btn btn-white-border"><i class="fas fa-headphones mr-10"></i><?=$this->website->phone;?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: CTA Section-->

     <?php $this->load->view('include/footer'); ?>