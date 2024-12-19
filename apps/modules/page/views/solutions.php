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
                    <p>To provide you with diesel engines and generator sets. Engine Family brand engines provide advanced power solutions for different applications and budgets. We can also tailor the perfect solution to your specific environmental needs.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Inner Banner Section -->  

      <?=$page->content1;?>
    <!-- End: Contact Us Section -->  
        


<?php $this->load->view('include/footer'); ?>