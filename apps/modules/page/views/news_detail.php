<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$news->meta_title;?> | Engine Family</title>
    <meta name="description" content="<?=$news->meta_desc;?>">
    <meta name="keywords" content="<?=$news->meta_keyword;?>">
    <?php $this->load->view('include/header'); ?>
    <link rel="stylesheet" href="https://www.mtu-solutions.com/etc/clientlibs/mtu/mtu-app.min.css" type="text/css">
    <!-- Start: Inner Banner Section -->
    <section class="section inner-banner-2" data-overlay="7" style="background-image: url('<?=base_url();?>assets/images/bg/Ersatzteile.jpg');">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-left">
                    <h1><?=$news->name;?></h1>
                    <ul class="inner-bnr-nav">
                        <li><a href="<?=base_url();?>">Home</a></li>
                        <li><?=$news->name;?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Inner Banner Section -->

    <!-- Start: Product Listing Section -->
    <section class="section shop">
        <div class="container-fluid">
            <main role="main" class="mtu-page-content">

                <div class="root responsivegrid">


                    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

                        <div class="mtu-js-refresh-root aem-GridColumn aem-GridColumn--default--12">
                            <section class="mtu-m-hero__container ">

                                <div>

                                    <div class="mtu-grid">
                                        <div class="mtu-grid-row">
                                            <div class="mtu-grid-col-xs-12">
                                                <div class="mtu-m-page-title ">
                                                    <span class="mtu-e-tag mtu-e-tag--pagetype" data-media-type="press">PRESS RELEASE</span>

                                                    <span class="mtu-e-tag">Corporate</span>

                                                    <h1 class="mtu-e-title mtu-e-title--display"><?=$news->name;?></h1>


                                                    <p class="mtu-e-copy--sub">
                                                        Posted on <strong><?=date("M",$news->created)?> <?=date("d",$news->created)?>, <?=date("Y",$news->created)?></strong>
                                                    </p>





                                                </div>
                                            </div>
                                        </div>
                                    </div>






                                </div>





                            </section>






                        </div>
                        <div class="layoutContainerNarrowContent aem-GridColumn aem-GridColumn--default--12">
                            <div class="mtu-grid">
                                <div class="mtu-grid-row">
                                    <?=$news->description;?>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </main>
        </div>
    </section>
    <!-- End: Product Listing Section -->

<?php $this->load->view('include/footer'); ?>
