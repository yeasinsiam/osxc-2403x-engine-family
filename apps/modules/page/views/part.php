<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $product->meta_title.($now_page>1?" -Page ".$now_page:''); ?>  | Engine Family</title>

    <meta name="description" content="<?= $product->meta_desc; ?>">

    <meta name="keywords" content="<?= $product->meta_keyword; ?>">

    <?php $this->load->view('include/header'); ?>

    <style>.pager__item.is-active {

            font-weight: bold;

        }



        .pager__item {

            display: inline;

            padding: 0.5em;

        }



        .pager a {

            border: none;

            background: none;

        }</style>

    <script

            src="https://code.jquery.com/jquery-3.6.3.js"

            integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="

            crossorigin="anonymous"></script>

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

    <section class="section shop">

        <div class="container-fluid">



            <div class="row">

                <div class="col-lg-12">

                    <div><?= $product->short_desc; ?></div>

                    <br/>&nbsp;

                </div>

            </div>



            <!--<div class="row">-->

            <!--    <div class="col-lg-12 text-center"> -->

            <!--        <h3 class="fs-34 mb-45 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">Find our <?= $product->name; ?> Engines</h3>-->

            <!--    </div>-->

            <!--</div>-->



            <div class="row rewoww">

                <?php if ($category == true) { ?>

                    <div class="col-lg-12 text-center">

                        <h3 class="fs-34 mb-45 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;"><?= $product->title; ?></h3>

                    </div>

                    <?php foreach ($category as $value) { ?>

                        <div class="col-lg-3 col-md-4">

                            <div class="shop-prdt mb-30  wow fadeInLeft">

                                <div class="shop-prdt-img">

                                    <a data-aad="asdfasf" href="<?= base_url('part/') . $value->name_slug; ?>">

                                        <?php if (!empty($value->img)) { ?>

                                            <img src="<?= base_url('admin/uploads/category/') . $value->img; ?>"

                                                 alt="<?= $value->img_tag; ?>" class="bg-white"/>

                                        <?php } else { ?>

                                            <img src="<?= base_url('admin/uploads/product/Defaults-image.jpg'); ?>"

                                                 alt="<?= $value->img_tag; ?>" class="bg-white"/>

                                        <?php } ?>

                                    </a>

                                </div>

                                <div class="shop-prdt-data text-center">

                                    <a href="<?= base_url('part/') . $value->name_slug; ?>">

                                        <h5 class="f-700 fs-16 lh-13"><?= $value->name; ?></h5>

                                    </a>

                                </div>

                            </div>

                        </div>

                    <?php }

                } else { ?>

                    <?php if ($product_list == true) { ?>

                        <div class="col-lg-12 text-center">

                            <h3 class="fs-34 mb-45 wow fadeInLeft"

                                style="visibility: visible; animation-name: fadeInLeft;"><?= $product->title; ?></h3>

                        </div>

                        <div id="pro-content" class="row">

                            <?php foreach ($product_list as $pvalue) { ?>

                                <div class="col-lg-3 col-md-4">

                                    <div class="shop-prdt mb-30 wow fadeInLeft">

                                        <div class="shop-prdt-data text-pvalue text-center">

                                            <a href="<?= base_url('part-product/') . $pvalue->name_slug; ?>">

                                                <h5 class="f-700 fs-16 lh-13"><?= $pvalue->name; ?></h5>

                                            </a>

                                        </div>

                                        <div class="shop-prdt-img">

                                            <a href="<?= base_url('part-product/') . $pvalue->name_slug; ?>">

                                                <?php if (!empty($pvalue->img)) { ?>

                                                    <img src="<?= base_url('admin/uploads/product/') . $pvalue->img; ?>"

                                                         alt="<?= $pvalue->img_tag; ?>" class="bg-white"/>

                                                <?php } else { ?>

                                                    <img src="<?= base_url('admin/uploads/product/Defaults-image.jpg'); ?>"

                                                         alt="<?= $pvalue->img_tag; ?>" class="bg-white"/>

                                                <?php } ?>

                                            </a>

                                        </div>

                                        <div class="shop-prdt-data text-pvalue">

                                            <?= $pvalue->short_desc; ?>

                                        </div>



                                    </div>

                                </div>

                            <?php } ?>

                        </div>

                        <?php

                    }

                } ?>

            </div>

            <input type="hidden" name="page_total_page" value="<?=$page_total_page?>">

            <?php if ($page_total_page > 1) { ?>

                <div class="view-product-finder">

                    <div class="view-footer">

                        <div class="count-summary"><?= ($now_page - 1) * 16 ?> - <?= $now_page * 16 ?>

                            of <?= $page_total ?></div>

                        <div class="pager-nav">

                            <nav class="pager" role="navigation" aria-labelledby="pagination-heading--2">

                                <h4 id="pagination-heading--2" class="visually-hidden">Pagination</h4>

                                <ul class="pager__items js-pager__items">



                                    <li class="pager__item pager__item--first" <?php if ($now_page == 1) { ?> style="display: none"<?php } ?>>

                                        <a href="javascript:;" data-page="1"

                                           class="page-btn"

                                           title="Go to first page page-btn">

                                            <span class="visually-hidden">First page</span>

                                            <span aria-hidden="true">« First</span>

                                        </a>

                                    </li>

                                    <li class="pager__item pager__item--previous" <?php if ($now_page == 1) { ?> style="display: none"<?php } ?>>

                                        <a href="javascript:;" data-page="<?= $now_page - 1 ?>"

                                           class="page-btn"

                                           title="Go to previous page page-btn" rel="prev">

                                            <span class="visually-hidden">Previous page</span>

                                            <span aria-hidden="true">‹ Previous</span>

                                        </a>

                                    </li>

                                    <?php for ($ik = 1; $ik <= $page_total_page; $ik++) { ?>

                                        <?php if ($ik == $now_page) { ?>

                                            <li class="pager__item is-active">

                                                <a href="javascript:;" data-page="<?= $now_page ?>" class="page-btn"

                                                   title="page-btn">

                                                    <span class="visually-hidden">  Current page</span><?= $now_page ?>

                                                </a>

                                            </li>

                                        <?php } else { ?>

                                            <li class="pager__item">

                                                <a href="javascript:;" data-page="<?= $ik ?>" title="Go to page "

                                                   class="page-btn">

                                                    <span class="visually-hidden">Page</span><?= $ik ?>

                                                </a>

                                            </li>

                                        <?php } ?>

                                    <?php } ?>

                                    <li class="pager__item pager__item--next" <?php if ($ik != $now_page) { ?> style="display:none"<?php } ?>>

                                        <a href="javascript:;" class="page-btn"

                                           data-page="<?= ($now_page + 1); ?>" title="Go to next page" rel="next">

                                            <span class="visually-hidden">Next page</span>

                                            <span aria-hidden="true">Next ›</span>

                                        </a>

                                    </li>

                                    <li class="pager__item pager__item--last">

                                        <a href="javascript:;" data-page="<?= $ik ?>" class="page-btn"

                                           title="Go to last page">

                                            <span class="visually-hidden">Last page</span>

                                            <span aria-hidden="true">Last »</span>

                                        </a>

                                    </li>

                                </ul>

                            </nav>

                        </div>

                    </div>

                </div>

                <div style="display: none">

                    <div class="prod-result-footer">

                        <div class="pager">

                            <div class="page-num">

                                <?php for ($ik = 1; $ik <= $page_total_page; $ik++) { ?>

                                    <?php if ($ik == $now_page) { ?>

                                        <span class="current"><?= $now_page ?></span>

                                    <?php } else { ?>

                                        <a href="<?= base_url('part/') . $product->name_slug . '?page=' . $ik; ?>"

                                           rel="nofollow"><?= $ik ?></a>

                                    <?php } ?>

                                <?php } ?>

                                <?php if ($ik < $now_page) { ?>

                                    <span title="Go to Next Page">

                <a class="next page-main" rel="nofollow"

                   href="<?= base_url('part/') . $product->name_slug . '?page=' . ($now_page + 1); ?>">Next<i

                            class="ob-icon icon-right"></i></a>

              </span>  <?php } ?>

                            </div>

                        </div>

                    </div>

                </div>

            <?php } ?>

            <div class="row">

                <div class="col-lg-12">

                    <br/>

                    <div><?= $product->desc; ?></div>

                </div>

            </div>

        </div>

    </section>

    <!-- End: Product Listing Section -->

    <script>

        $(".page-btn").on('click', function () {

            var page = $(this).data('page');

            var page_total= $("input[name='page_total_page']").val();

            if(page<=0){

                page=1;

            }

            if(page>=page_total){

                page=page_total;

            }

            if(page<=page_total){

            $.ajax({

                url: "/page/partAjax/",

                method: 'POST',

                dataType: 'json',

                data: {'page': page, 'category': "<?=$category1?>"},

                success: function (result) {

                    var html_ = '';

                    var img = '';

                    var pro_list = result['product_list'];

                    var cal=''

                    if(pro_list.length==1){

                        $(".rewoww").removeClass('row');

                    }

                    for (const p in pro_list) {

                        var pvalue = pro_list[p];

                        console.log(pvalue);

                        img = pvalue['img'] ? '/admin/uploads/product/' + pvalue['img'] : '/admin/uploads/product/Defaults-image.jpg';

                        html_ += '<div class="col-lg-3 col-md-4"> <div class="shop-prdt mb-30 wow fadeInLeft">' +

                            '<div class="shop-prdt-data text-pvalue text-center">' +

                            '<a href="<?= base_url("part-product/") ?>' + pvalue["name_slug"] + '">' +

                            '<h5 class="f-700 fs-16 lh-13">' + pvalue["name"] + '</h5></a></div><div class="shop-prdt-img">' +

                            '<a href="<?= base_url('part-product/')?>' + pvalue["name_slug"] + '">' +

                            '<img src="' + img + '" alt="' + pvalue['img_tag'] + '" class="bg-white"/>' +

                            '</a> </div><div class="shop-prdt-data text-pvalue">' + pvalue['short_desc']+

                            '</div></div></div>';

                    }

                    $("#pro-content").html(html_+cal);

                    $(".count-summary").html(result.page_summary);

                }

            });

            $(".pager__item").removeClass('is-active');

            $(this).parents('.pager__item').addClass('is-active');

            $('html,body').animate({scrollTop: '500px'}, 800);

            if(page==1){

                $(".pager__item--first").hide();

                $(".pager__item--previous").hide();

            }else{

                $(".pager__item--first").show();

                $(".pager__item--previous").show();

                $(".pager__item--previous a").data('page',page-1);

            }}

            return false;

        });

    </script>

    <?php $this->load->view('include/footer'); ?>

