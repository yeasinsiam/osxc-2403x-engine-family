<!DOCTYPE html>
<html lang="en"> 
<head> 
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>404 Page | Engine Family</title>
    <style type="text/css">
    section.error:after {
        position: absolute;
        content: close-quote;
        width: 55vw;
        height: 55vw;
        top: 0;
        border-radius: 50%;
        z-index: -1;
        opacity: .5;
        left: 23%;
    }
</style>
<?php $this->load->view('include/header'); ?>
 
    <!-- Start: Inner Banner Section --> 
    <section class="inner-banner flex-center bg-light-white pt-50 pb-35">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <h1 class="blue">404 Page</h1>
                    <ul class="inner-bnr-nav">
                        <li><a href="<?=base_url();?>">Home</a></li>
                        <li>404 Page</li>
                    </ul>
                </div> 
            </div>
        </div>
    </section>
    <!-- End: Inner Banner Section -->   

    <!-- Start: error Section --> 
    <section class="error o-hidden relative pt-90 pb-90">
        <div class="container">
            <div class="row justify-content-center align-items-center"> 
                <div class="col-lg-6 text-center">
                    <div class="error-texts relative">
                        <h1 class="blue mt-md-40 mb-xs-10">404</h1>
                        <h3 class="fs-25 f-700 ">Ooops! That page doesn't exist!</h3>
                        <p class="mt-5 fs-16">This file May Have Been Moved or Deleted. Be Sure to Check Your Spelling.</p>
                        <a href="<?=base_url();?>" class="btn btn-black mt-10">Back to Home</a>
                        <img src="<?=base_url('assets/');?>img/other/bubble.png" class="error-bg-icon" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: error Section -->  

<?php $this->load->view('include/footer'); ?>