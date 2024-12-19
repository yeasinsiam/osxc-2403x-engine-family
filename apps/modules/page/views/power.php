
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="<?=$page->meta_desc;?>">
   <meta name="keywords" content="<?=$page->meta_keyword;?>">
    <title><?=$page->pg_title;?></title>
    <?php $this->load->view('include/header'); ?>

    <!-- Start: Inner Banner Section -->
    <section class="section inner-banner-2" data-overlay="7" style="background-image: url('assets/images/bg/Ersatzteile.jpg');">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-left">
                    <h1><?=$page->pg_title;?></h1>
                    <ul class="inner-bnr-nav">
                        <li><a href="<?=base_url();?>">Home</a></li>
                        <li><?=$page->pg_title;?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Inner Banner Section -->

     <?=$page->content1;?>





<?php $this->load->view('include/footer'); ?>
