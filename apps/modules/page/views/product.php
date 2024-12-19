<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title><?=$product->meta_title;?> | Engine Family</title>
    <meta name="description" content="<?=$product->meta_desc;?>">
   <meta name="keywords" content="<?=$product->meta_keyword;?>">
        <?php $this->load->view('include/header'); ?>
        
        <!-- Start: Inner Banner Section --> 
        <section class="section inner-banner-2" data-overlay="7" style="background-image: url('<?=base_url();?>assets/images/bg/Ersatzteile.jpg');">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-left">
                        <h1><?=$product->name;?></h1>
                        <ul class="inner-bnr-nav">
                            <li><a href="<?=base_url();?>">Home</a></li>
                            <li><?=$product->name;?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End: Inner Banner Section -->   
        
        <!-- Start: Product Listing Section --> 
        <section class="section shop">
            <div class="container-fluid"> 
                        
                <div class="row"> 
                    <div class="col-lg-12">  
                        <div><?=$product->short_desc;?></div>
                        <br/>&nbsp;
                    </div>
                </div>
                
                <!--<div class="row">-->
                <!--    <div class="col-lg-12 text-center"> -->
                <!--        <h3 class="fs-34 mb-45 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">Find our <?=$product->name;?> Engines</h3>-->
                <!--    </div>-->
                <!--</div>-->
    
                <div class="row">
                    <?php if($category==true){ ?>
                    
                    
                    <div class="col-lg-12 text-center"> 
                        <h3 class="fs-34 mb-45 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;"><?=$product->title;?></h3>
                    </div>
                    
                        
                    <?php foreach ($category as $value) {?>
                        <div class="col-lg-3 col-md-4">
                            <div class="shop-prdt mb-30  wow fadeInLeft">
                                <div class="shop-prdt-img">
                                    <a href="<?=base_url('categories/').$value->name_slug;?>">
                                    <?php if(!empty($value->img)){?>
                                    <img src="<?=base_url('admin/uploads/category/').$value->img;?>" alt="<?=$value->img_tag;?>" class="bg-white" />
                                    <?php }else{?>
                                    <img src="<?=base_url('admin/uploads/category/default-image.jpg');?>" alt="<?=$value->img_tag;?>" class="bg-white" />
                                    <?php }?>
                                    </a>
                                </div>
                                <div class="shop-prdt-data text-center">
                                    <a href="<?=base_url('categories/').$value->name_slug;?>">
                                        <h5 class="f-700 fs-16 lh-13"><?=$value->name;?></h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php }}else{?>
                    <?php if($product_list==true){ ?>
                        
                    <div class="col-lg-12 text-center"> 
                        <h3 class="fs-34 mb-45 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;"><?=$product->title;?></h3>
                    </div>    
                        
                    <?php foreach ($product_list as $pvalue) {?>
                        <div class="col-lg-3 col-md-4">
                            <div class="shop-prdt mb-30 wow fadeInLeft">
                                 <div class="shop-prdt-data text-pvalue text-center">
                                    <a href="<?=base_url('product/').$value->name_slug;?>">
                                        <h5 class="f-700 fs-16 lh-13"><?=$pvalue->name;?></h5>
                                    </a>
                                </div>
                                <div class="shop-prdt-img">
                                    <a href="<?=base_url('product/').$pvalue->name_slug;?>">
                                    <?php if(!empty($pvalue->img)){?>
                                    <img src="<?=base_url('admin/uploads/product/').$pvalue->img;?>" alt="<?=$pvalue->img_tag;?>"  class="bg-white" />
                                    <?php }else{?>
                                    <img src="<?=base_url('admin/uploads/category/default-image.jpg');?>" alt="<?=$pvalue->img_tag;?>" class="bg-white"  />
                                    <?php }?>
                                    </a>
                                </div>
                                <div class="shop-prdt-data text-pvalue">
                                <?=$pvalue->short_desc;?>
                                </div>
                               
                            </div>
                        </div>
                    <?php }}}?> 
                </div>
                
                <div class="row"> 
                    <div class="col-lg-12">          
                        <br/>
                        <div><?=$product->desc;?></div>
                    </div> 
                </div>
            </div>
        </section>
        <!-- End: Product Listing Section --> 
        
        <?php $this->load->view('include/footer'); ?>