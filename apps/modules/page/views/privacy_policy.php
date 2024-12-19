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
    <section class="inner-banner flex-center bg-light-white pt-35 pb-35">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 text-center">
                    <h1 class="blue fs-36"><?=$page->pg_title;?></h1> 
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