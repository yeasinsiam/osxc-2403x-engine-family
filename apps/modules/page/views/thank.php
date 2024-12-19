
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	
	<title>Thank You - Digital marketing services | web development Company</title>
    <meta name="keyword" content="Digital marketing services, Digital Marketing Company in India, Digital Marketing Agency, Top Digital Marketing Agency and Services i, Website Design and development Services, Best Digital Marketing Company" />        
    <meta name="description" content="Digital marketing services,Iaptirs Digital India Based Digital Marketing Agency which provides whole SEO services India & London UK" />
	
	<link rel="icon" type="image/png" href="<?=base_url('assets/');?>images/favicon.png"> 
<!--fonts-->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<!--font awesome icon-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
<!--plagin css-->

<link href="<?=base_url('assets/');?>css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="<?=base_url('assets/');?>css/animate.css" rel="stylesheet" type="text/css">

<link href="<?=base_url('assets/');?>css/style.css" rel="stylesheet" type="text/css">
<link href="<?=base_url('assets/');?>css/responsive.css" rel="stylesheet" type="text/css">
<link href="<?=base_url('assets/');?>css/custom-style.css" rel="stylesheet" type="text/css">  
 


<style type="text/css">
    img.wp-smiley,
    img.emoji {
    	display: inline !important;
    	border: none !important;
    	box-shadow: none !important;
    	height: 1em !important;
    	width: 1em !important;
    	margin: 0 .07em !important;
    	vertical-align: -0.1em !important;
    	background: none !important;
    	padding: 0 !important;
    }
    .alert-success {
    font-size: 23px;
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    text-align: center;
    font-weight: 700;
    padding: 10px;
}
</style>   
</head>
<?php $this->load->view('include/topbar'); ?>


<script>
    var _client = null;
    

</script>

	

<script src="https://www.google.com/recaptcha/api.js?hl=" async defer></script>

   
	
	 
	
	<!--different-->
	<section class="different bg-gray">
		<div class="container">  
			<div class="differentText clear" align="center">
				<img src="<?=base_url('assets/images/');?>check-circle.png" class="img-responsive" style="    width: 100px;" />

				<br/>
				<h2> <b>Thank You !</b></h2>
				<br/>
				<?php $msg=$this->session->flashdata('msg'); if($msg){  ?>
                                <div class=" alert-<?php echo $msg['class'] ?> alert-dismissible" data-dismiss="alert" aria-hidden="true">
                                   
                                    <?php echo $msg['message']; ?>
                                </div>
                                <?php } ?>
				<br/>
				<br/>

				<p><a href="<?=base_url();?>"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> BACK TO HOME</a>
				
				
	</section>
	<!--different close-->
	
	
	<!--good vibes-->
	




    <script src='https://www.google.com/recaptcha/api.js'></script>

	<!--consultation close-->
<script>
function recaptchaCallback() {
    $('#submitBtn').removeAttr('disabled');
};
</script>

<!--footer-->	
<?php $this->load->view('include/footer'); ?>