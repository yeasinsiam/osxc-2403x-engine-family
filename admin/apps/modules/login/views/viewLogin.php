<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Manish Kumar" />
    <title>Admin Login | Engine Family</title> 
    <meta name="description" content="" />
    <meta name="keywords" content="">  
	  <!-- Favicon icon -->
	 <link rel="icon" href="<?=base_url();?>assets/images/favicon.ico" type="image/x-icon"> 

	<!-- vendor css -->
	<link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/custom-style.css">

</head>
<body class="">

    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End --> 

    <!-- [ auth-signin ] start -->
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="card-header text-white bg-primary text-center text-white h4 mb-2">Admin Login</div>
                <div class="card-body"> 
                    <div class="row align-items-center text-center">
                        <div class="col-md-12"> 
<?php $msg=$this->session->flashdata('msg');  
					if($msg){  ?>
					<div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible admin-msg" data-dismiss="alert" aria-hidden="true">
						<strong><?php echo $msg['type'] ?></strong> <?php echo $msg['message']; ?>
					</div> 	
				<?php } ?>
                            <form method="post" action="<?php echo site_url('login/verify');?>" class="form-horizontal custom-form" role="form"> 
                                <div class="form-group mb-3"> 
                                    <input id="email" type="email" class="form-control" name="email" value="" placeholder="E-Mail Address" /> 
                                </div>
                                <div class="form-group mb-4"> 
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" /> 
                                 </div>
                                <div class="custom-control custom-checkbox text-left mb-4 mt-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                </div>
                                <button type="submit" class="btn btn-block btn-primary">Submit</button> 
                                <!-- <a class="btn btn-link" href="<?php echo site_url('login/forgot_password');?>">Forgot Your Password?</a>   -->
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ auth-signin ] end -->
 
<!-- Required Js -->
<script src="<?=base_url();?>assets/js/vendor-all.min.js"></script>
<script src="<?=base_url();?>assets/js/plugins/bootstrap.min.js"></script>
<script src="<?=base_url();?>assets/js/ripple.js"></script>
<script src="<?=base_url();?>assets/js/pcoded.min.js"></script> 
</body> 
</html>
