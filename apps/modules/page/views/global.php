<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= $page->meta_desc; ?>">
    <meta name="keywords" content="<?= $page->meta_keyword; ?>">
    <title><?= $page->pg_title; ?></title>
    <?php $this->load->view('include/header'); ?>

    <!-- Start: Inner Banner Section -->
    <section class="section inner-banner-2" data-overlay="7"
        style="background-image: url('https://wikitechbd.site/assets/images/bg/Ersatzteile.jpg');">

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-12 text-left">

                    <h1>Global</h1>

                    <ul class="inner-bnr-nav pl-0">

                        <li><a href="https://wikitechbd.site/">Home</a></li>

                        <li>Global</li>

                    </ul>

                </div>

            </div>

        </div>

    </section>
    <!-- End: Inner Banner Section -->

    <!-- Start: Contact Us Section -->
    <?= $page->content1; ?>
    <!-- End: Contact Us Section -->

    <?php $this->load->view('include/footer'); ?>