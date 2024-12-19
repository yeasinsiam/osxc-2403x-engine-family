<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $news->meta_title; ?>| Engine Family</title>
    <meta name="description" content="<?= $news->meta_desc; ?>">
    <meta name="keywords" content="<?= $news->meta_keyword; ?>">
    <?php $this->load->view('include/header'); ?>
    <link rel="stylesheet" href="https://www.mtu-solutions.com/etc/clientlibs/mtu/mtu-app.min.css" type="text/css">
    <!-- Start: Inner Banner Section -->
    <section class="section inner-banner-2" data-overlay="7"
             style="background-image: url('<?= base_url(); ?>assets/images/bg/Ersatzteile.jpg');">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-left">
                    <h1><?= $news->name; ?></h1>
                    <ul class="inner-bnr-nav">
                        <li><a href="<?= base_url(); ?>">Home</a></li>
                        <li><?= $news->name; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Inner Banner Section -->

    <!-- Start: Product Listing Section -->
    <section class="section shop">
        <div class="container-fluid">
            <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">


                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

                    <div class="mediagrid parbase aem-GridColumn aem-GridColumn--default--12">

                        <mtu-m-filterable-content class="mtu-m-filterable-content">

                            <section class="mtu-m-filterable-content__content">
                                <div class="mtu-grid">
                                    <div class="mtu-grid-row">
                                        <div class="mtu-grid-col-xs-12">
                                            <p class="mtu-m-filterable-content__results-summary"><span
                                                        class="mtu-m-filterable-content__results-count"><?=$news_total?></span>
                                                Results</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mtu-m-filterable-content__results-container">
                                    <mtu-m-teaser-collection class="mtu-m-teaser-collection">
                                        <div class="mtu-grid">
                                            <div class="mtu-grid-row">
                                                <?php foreach ($news_list as $pvalue) { ?>
                                                    <div class="mtu-grid-col-xs-12 mtu-grid-col-m-6 mtu-grid-col-xl-3 wow fadeInLeft" >
                                                        <div class="mtu-m-teaser mtu-m-teaser--media mtu-m-teaser--reposition wow fadeInLeft"
                                                             data-media-type="press" draggable="auto">
                                                            <div class="mtu-m-teaser__image mtu-m-teaser__image--4x3 wow fadeInLeft" >
                                                                <a rel="noopener"
                                                                   class="mtu-e-image__clickable-container"
                                                                   data-track-link-tags="[&quot;PRESS RELEASE&quot;]"
                                                                   data-track-link-type="internal"
                                                                   href="<?= base_url('news_detail/') . $pvalue->name_slug; ?>"
                                                                   target="_blank">
                                                                    <image src="/assets/images/demo.jpg"
                                                                           class="fadeInLeft mtu-e-lazy-image mtu-js-lazy-image mtu-m-gallery__thumb mtu-state-initialized mtu-state-loaded"
                                                                           aspect-ratio="4x3"></image>
                                                                </a>
                                                            </div>
                                                            <div class="mtu-m-teaser__info" style="height: 277px;">
                                                                <div class="mtu-m-teaser__tags" style="top: 10px;">
                                                                    <span class="mtu-e-tag mtu-e-tag--pagetype">PRESS RELEASE</span>
                                                                </div>
                                                                <div class="mtu-e-title mtu-e-title--card" style="top: 88px;overflow: hidden;height: 80px;">
                                                                    <?=$pvalue->short_desc;?>
                                                                </div>
                                                                <?php $pvalue->created=strtotime($pvalue->created); ?>
                                                                <time class="mtu-m-teaser__date" datetime="2023-06-06"
                                                                      style="top: 58px;">
                                                                    <span class="mtu-m-teaser__date-day"><?=date("d",$pvalue->created)?></span>
                                                                    <span class="mtu-m-teaser__date-month"><?=date("M",$pvalue->created)?></span>
                                                                    <span class="mtu-m-teaser__date-year"><?=date("Y",$pvalue->created)?></span>
                                                                </time>
                                                                <p class="mtu-e-copy--sub" style="top: 182px;">
                                                                    <?=$pvalue->name;?>
                                                                </p>
                                                                <p class="mtu-m-teaser__cta" style="top: 228px;">
                                                                    <a class="mtu-e-button mtu-e-button--tertiary mtu-e-button--icon-right mtu-e-button--icon-small mtu-m-teaser__cta-link mtu-e-button--small mtu-e-button--icon-small "
                                                                       tabindex="0"
                                                                       data-track-link-tags="[&quot;PRESS RELEASE&quot;]"
                                                                       data-track-link-type="internal"
                                                                       href="<?= base_url('news_detail/') . $pvalue->name_slug; ?>"
                                                                       target="_blank">
                                                                        <span class="mtu-e-button__label">Read more</span>
                                                                        <span class="mtu-e-button__icon-block">
                                                                            <mtu-e-icon class="mtu-e-icon mtu-e-button__icon" icon-id="mtu-icon-chevron_right"> </mtu-e-icon>
                                                                        <span class="mtu-e-button__loader">
                                                                            <span class="mtu-e-button__loader-dot"></span>
                                                                            <span class="mtu-e-button__loader-dot"></span>
                                                                            <span class="mtu-e-button__loader-dot"></span></span>
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <mtu-m-overlay close-btn-label="Close"
                                                       class="mtu-m-overlay mtu-m-teaser-collection__overlay mtu-js-teaser-collection__overlay">
                                            <mtu-m-video class="mtu-m-video" video-src="" video-type="" poster-src="">
                                                <video class="mtu-m-video__video mtu-js-video__video" controls=""
                                                       disablepictureinpicture=""></video>
                                            </mtu-m-video>
                                            <mtu-m-youtube class="mtu-m-youtube">
                                                <iframe class="mtu-m-youtube__embed" src="" frameborder="0"
                                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen="" title="YouTube video player"
                                                        id="mtu-youtube-embed-4">
                                                </iframe>
                                            </mtu-m-youtube>
                                            <img class="mtu-m-teaser-collection__overlay-image"
                                                 src="/etc/clientlibs/mtu/mtu-app/assets/images/_blank.gif">
                                            <button class="mtu-m-overlay__close-btn mtu-js-overlay__close-btn
               mtu-e-button mtu-e-button--tertiary
                mtu-e-button--small" type="button">
                                                <span class="mtu-e-button__label">Close</span>
                                                <span class="mtu-e-button__icon-block">
    <mtu-e-icon class="mtu-e-button__icon mtu-m-overlay__close-icon mtu-js-overlay__close-icon"
                icon-id="mtu-icon-close">
    </mtu-e-icon>
    <span class="mtu-h-visually-hidden">Close</span>
  </span>
                                            </button>
                                        </mtu-m-overlay>
                                    </mtu-m-teaser-collection>
                                </div>

                                <div class="mtu-grid">
                                    <div class="mtu-grid-row">
                                        <div class="mtu-grid-col-xs-12">
                                            <div class="mtu-m-filterable-content__addendum">
                                                <input type="checkbox"
                                                       class="mtu-e-toggle mtu-m-filterable-content__addendum-toggle"
                                                       id="mtu-m-filterable-content__addendum-toggle">
                                                <div class="mtu-m-filterable-content__addendum-wrapper">
                                                    <div class="mtu-m-filterable-content__addendum-icon">
                                                        <mtu-e-icon class="mtu-e-icon "
                                                                    icon-id="mtu-icon-info"></mtu-e-icon>
                                                    </div>
                                                    <p class="mtu-m-filterable-content__addendum-text">
                                                        The content of our publications reflects the status as of the
                                                        respective date of publication. They are not updated. Further
                                                        developments are therefore not taken into account.
                                                    </p>
                                                    <div class="mtu-m-filterable-content__addendum-icon mtu-m-filterable-content__addendum-icon--close">
                                                        <label class="mtu-m-filterable-content__addendum-close"
                                                               for="mtu-m-filterable-content__addendum-toggle"
                                                               tabindex="0">
                                                            <mtu-e-icon class="mtu-e-icon "
                                                                        icon-id="mtu-icon-close"></mtu-e-icon>
                                                            <span class="mtu-h-visually-hidden">Close</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="mtu-grid" style="display: none">
                                    <div class="mtu-grid-row">
                                        <div class="mtu-grid-col-xs-12">
                                            <div class="mtu-m-filterable-content__pagination">
                                                <button class="mtu-e-button mtu-e-button--secondary" type="button">
                                                    <span class="mtu-e-button__label">Load more content</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </mtu-m-filterable-content>


                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- End: Product Listing Section -->

    <?php $this->load->view('include/footer'); ?>
