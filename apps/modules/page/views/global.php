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
    <section class="inner-banner flex-center bg-light-white py-35">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7 text-center text-lg-left">
                    <h3 class="blue"><?=$page->pg_title;?></h3>
                </div>
                <div class="col-lg-5 text-center text-lg-right">
                    <ul class="inner-bnr-nav">
                        <li><a href="<?=base_url();?>">Home</a></li>
                        <li><?=$page->pg_title;?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Inner Banner Section -->  

    <!-- Start: Contact Us Section -->
   <?=$page->content1;?>
    <!-- End: Contact Us Section -->   

<?php $this->load->view('include/footer'); ?>