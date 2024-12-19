<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
	<title><?php echo $this->website->web_meta_title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="<?php echo $this->website->web_meta_title; ?>" />
  	<meta name="description" content="<?php echo $this->website->web_meta_description; ?>" />
  	<meta name="Author" content="Rinku Vishwakarma" />
  	<!-- Favicon -->
  	<link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url('uploads/website/favicon/').$this->website->web_favicon_icon;?>">

    <!-- begin::global styles -->
    <link rel="stylesheet" href="<?php echo site_url('assets/vendors/bundle.css');?>" type="text/css">
    <!-- end::global styles -->

    <!-- begin::custom styles -->
    <link rel="stylesheet" href="<?php echo site_url('assets/css/app.min.css');?>" type="text/css">
    <!-- end::custom styles -->
</head>
<body class="bg-white h-100-vh p-t-0">

<!-- begin::page loader-->
<div class="page-loader">
    <div class="spinner-border"></div>
    <span>Loading ...</span>
</div>
<!-- end::page loader -->

<div class="p-b-50 d-block d-lg-none"></div>

<div class="container h-100-vh">
    <div class="row align-items-md-center h-100-vh">
        <div class="col-lg-6 d-none d-lg-block">
            <img class="img-fluid" src="<?php echo site_url('assets/media/svg/recover-password.svg');?>" alt="...">
        </div>

        <div class="col-lg-4 offset-lg-1">
            <div class="m-b-20">
                <?php if($this->website->web_company_logo!=''){ ?>
                    <img src="<?php echo site_url('uploads/website/logo/'.$this->website->web_company_logo);?>" class="m-r-10" width="100" alt="">
                <?php }else{ ?>
                    <img src="<?php echo site_url('assets/media/image/dark-logo.png');?>" class="m-r-15" width="180" alt="">
                <?php } ?>
            </div>
            <h3>Recovery Password</h3>
            <p>Change your password now</p>
            <?php $msg=$this->session->flashdata('msg');  
                if($msg){  ?>
                <div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible admin-msg" data-dismiss="alert" aria-hidden="true">
                    <strong><?php echo $msg['type'] ?></strong> <?php echo $msg['message']; ?>
                </div> 	
            <?php } ?>
            <form method="post" action="<?php echo site_url('login/forgot_password');?>">
                <div class="form-group mb-4">
                    <input type="email" name="email" class="form-control fodrm-control-lg" autofocus placeholder="Email Address" required>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block btn-uppercase mb-4">Submit</button>
                <p class="text-right">
                    <a href="<?php echo site_url('login');?>" class="text-underline">Sign in now</a>
                </p>
            </form>
        </div>

    </div>
</div>

<!-- begin::global scripts -->
<script src="<?php echo site_url('assets/vendors/bundle.js');?>"></script>
<!-- end::global scripts -->

<!-- begin::custom scripts -->
<script src="<?php echo site_url('assets/manual.js');?>"></script>
<script src="<?php echo site_url('assets/js/borderless.min.js');?>"></script>
<!-- end::custom scripts -->
</body>
</html>