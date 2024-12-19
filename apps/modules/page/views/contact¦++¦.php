<!DOCTYPE html>
<html lang="en"> 
<head> 
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Contact Us | Engine Family</title> 
<?php $this->load->view('include/header'); ?>
   
    <!-- Start: Inner Banner Section --> 
    <section class="inner-banner flex-center bg-light-white py-35">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7 text-center text-lg-left">
                    <h3 class="blue">Contact Us</h3>
                </div>
                <div class="col-lg-5 text-center text-lg-right">
                    <ul class="inner-bnr-nav">
                        <li><a href="<?=base_url();?>">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Inner Banner Section -->   

    <!-- Start: Contact Us Section --> 
    <section class="section contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <h3 class="fs-26 f-700 mb-5">We are Here for You</h3>
                    <p class="mb-20">Lorem ipsum dolor sit amet consectetur adipi sicing elit, sed do eiusmod tempor incididut labore et dolore magna aliqua. </p>
                    <div class="hr-1 bg-black opacity-1 mb-20"></div>
                    <h4 class="fs-20 f-700 mb-15">Contact Information</h4>
                    <ul class="contacts-list">
                        <li class="mb-15">
                            <span class="icon bg-blue"><i class="fas fa-phone"></i></span>
                            <span class="sub-head">Phone</span>
                            <p><?=$this->website->phone;?></p>
                        </li>
                        <li>
                            <span class="icon bg-blue"><i class="fas fa-envelope"></i></span>
                            <span class="sub-head">Email</span>
                            <p><?=$this->website->comp_email;?></p>
                        </li>
                    </ul>
                    <div class="hr-1 bg-black opacity-1 mt-25 mb-25"></div>
                    <h4 class="fs-20 f-700 mb-15">Address</h4>
                    <ul class="contacts-list">
                        <li>
                            <span class="icon bg-blue"><i class="fas fa-map-marker-alt"></i></span>
                            <span class="sub-head">Location</span>
                            <p><?=$this->website->facebook;?></p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <div class="contact-form bg-blue mt-md-45">
                        <h3 class="fs-26 f-700 white mb-20">Get in Touch with Us</h3>
                        <?php $msg=$this->session->flashdata('msg'); if($msg){  ?>
                                <div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible" data-dismiss="alert" aria-hidden="true">
                                   
                                    <?php echo $msg['message']; ?>
                                </div>
                                <?php } ?>
                        <form method="POST" action="<?=base_url('page/send');?>">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group relative">
                                        <input type="text" name="name" class="form-control input-white" id="FirstName" placeholder="First Name" required="">
                                        <i class="far fa-user transform-v-center"></i>
                                    </div>
                                </div> 
                                <div class="col-lg-6">
                                    <div class="form-group relative">
                                        <input type="email" name="email" class="form-control input-white" id="YourEmail" placeholder="Your Email" required="">
                                        <i class="far fa-envelope transform-v-center"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group relative">
                                        <input type="text" name="phone" class="form-control input-white" id="PhoneNumber" placeholder="Phone Number" required="">
                                        <i class="fas fa-phone transform-v-center"></i>
                                    </div>
                                </div> 
                                <div class="col-lg-12">
                                    <div class="form-group relative">
                                        <input type="text" class="form-control input-white" id="FirstName" placeholder="Subject" name="subject" required="">
                                        <i class="fas fa-pencil-alt transform-v-center"></i>
                                    </div>
                                </div> 
                                <div class="col-lg-12">
                                    <div class="form-group relative">
                                        <textarea class="form-control input-white light-border mb-25" name="message" id="message" cols="30" rows="20" placeholder="Your message" required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-black shine-btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </section>
    <!-- End: Contact Us Section -->

<?php $this->load->view('include/footer'); ?>