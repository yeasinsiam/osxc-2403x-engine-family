<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us | Engine Family</title>
    <?php $this->load->view('include/header'); ?>

    <style>
        .li-img {
            padding-left: 10px !important;
            display: inline-block;
            width: 150px;
        }

        .captcha-container {
            margin: 10px 0px;
        }

        canvas {
            border: 1px black solid;
        }

        #textCanvas {
            display: none;
        }

        #image {
            border-radius: 6px;
        }

        /* .captcha-container span {
        background-color: #131b23;
        color: white;
        padding: 10px 5px;
    } */
    </style>

    <!-- Start: Inner Banner Section -->
    <section class="inner-banner flex-center bg-light-white py-35">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7 text-center text-lg-left">
                    <h3 class="blue">Contact Us</h3>
                </div>
                <div class="col-lg-5 text-center text-lg-right">
                    <ul class="inner-bnr-nav">
                        <li><a href="<?= base_url(); ?>">Home</a></li>
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
                    <p class="mb-20">We offer superior power solutions and excellent service that helps drive success
                        for our customers and end users in every industry we work in. We’re continuously expanding our
                        product lines and optimizing our processes to bring our customers better value. We thrive on
                        keeping pace with emerging markets and the latest technologies. Our team of sales consultants,
                        application engineers, service technicians and project managers seek to continuously improve our
                        sales and service experience for our customers. </p>
                    <div class="hr-1 bg-black opacity-1 mb-20"></div>
                    <h4 class="fs-20 f-700 mb-15">Contact Information</h4>
                    <ul class="contacts-list">
                        <li class="mb-15">
                            <span class="icon bg-blue"><i class="fas fa-phone"></i></span>
                            <span class="sub-head">Phone</span>
                            <p><?= $this->website->phone; ?></p>
                        </li>
                        <li>
                            <span class="icon bg-blue"><i class="fas fa-envelope"></i></span>
                            <span class="sub-head">Email</span>
                            <p><?= $this->website->comp_email; ?></p>
                        </li>
                    </ul>
                    <div class="hr-1 bg-black opacity-1 mt-25 mb-25"></div>
                    <h4 class="fs-20 f-700 mb-15">WeChat</h4>
                    <ul class="contacts-list" style="text-align:center">
                        <li class="li-img"><img src="/admin/uploads/media/IMG_0023_0019_Charles_RR.jpg"
                                style="padding-bottom:17px">MTU Parts</li>
                        <li class="li-img"><img src="/admin/uploads/media/IMG_0023_0020_Alisa_RR.jpg"
                                style="padding-bottom:17px">Cummins Parts</li>
                        <li class="li-img"><img src="/admin/uploads/media/IMG_0023_0021_Aimme_RR.jpg"
                                style="padding-bottom:17px">Deutz Parts</li>
                        <li style="display: none">
                            <span class="icon bg-blue"><i class="fas fa-map-marker-alt"></i></span>
                            <span class="sub-head">Location</span>
                            <p><?= $this->website->facebook; ?></p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <div class="contact-form bg-blue mt-md-45">
                        <h3 class="fs-26 f-700 white mb-20">Get in Touch with Us</h3>
                        <?php $msg = $this->session->flashdata('msg');
                        if ($msg) {  ?>
                            <div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible" data-dismiss="alert"
                                aria-hidden="true">

                                <?php echo $msg['message']; ?>
                            </div>
                        <?php } ?>
                        <form method="POST" id="form" action="<?= base_url('page/send'); ?>">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group relative">
                                        <input type="text" name="name" class="form-control input-white" id="FirstName"
                                            placeholder="First Name" required="">
                                        <i class="far fa-user transform-v-center"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group relative">
                                        <input type="email" name="email" class="form-control input-white" id="YourEmail"
                                            placeholder="Your Email" required="">
                                        <i class="far fa-envelope transform-v-center"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group relative">
                                        <input type="text" name="phone" class="form-control input-white"
                                            id="PhoneNumber" placeholder="Phone Number" required="">
                                        <i class="fas fa-phone transform-v-center"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group relative">
                                        <input type="text" class="form-control input-white" id="FirstName"
                                            placeholder="Subject" name="subject" required="">
                                        <i class="fas fa-pencil-alt transform-v-center"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group relative">
                                        <textarea class="form-control input-white light-border mb-25" name="message"
                                            id="message" cols="30" rows="20" placeholder="Your message"
                                            required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="captcha-container">
                                        <!-- <span>512006</span> -->
                                        <canvas id='textCanvas' height=50 width=300></canvas>
                                        <img id='image'>
                                        <button id="captcha-refresh" class="btn btn-black btn-small"
                                            style="padding: 20px 15px;min-width: min-content;" type="button"><i
                                                class="fa fa-sync"></i></button>

                                    </div>
                                    <div>

                                    </div>
                                    <div class="form-group relative">
                                        <input type="text" id="captchaField" class="form-control input-white"
                                            id="FirstName" placeholder="Enter captcha" name="subject" required="">
                                        <i class="fas fa-pencil-alt transform-v-center"></i>
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


    <script>
        function generateRandomString(length) {
            const characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            let result = '';
            for (let i = 0; i < length; i++) {
                const randomIndex = Math.floor(Math.random() * characters.length);
                result += characters[randomIndex];
            }
            return result;
        }

        function generateCaptchaArray(count, length) {
            const captchaArray = [];
            for (let i = 0; i < count; i++) {
                const randomString = generateRandomString(length);
                captchaArray.push([randomString, randomString]);
            }
            return captchaArray;
        }

        console.log()


        let main_captcha = generateCaptchaArray(10, 5)

        var tCtx = document.getElementById('textCanvas').getContext('2d'),
            imageElem = document.getElementById('image');

        let random_captcha, random_captcha_imaga;

        function generateCaptcha() {
            random_captcha = main_captcha[Math.floor(Math.random() * main_captcha.length)];
            random_captcha_imaga = random_captcha[0];

            tCtx.clearRect(0, 0, tCtx.canvas.width, tCtx.canvas.height);

            tCtx.canvas.width = 200;
            tCtx.canvas.height = 70;
            tCtx.fillStyle = "#f2f2f2";
            tCtx.fillRect(0, 0, tCtx.canvas.width, tCtx.canvas.height);

            for (let i = 0; i < 8; i++) {
                tCtx.strokeStyle =
                    `rgba(${Math.floor(Math.random() * 256)}, ${Math.floor(Math.random() * 256)}, ${Math.floor(Math.random() * 256)}, 0.5)`;
                tCtx.beginPath();
                tCtx.moveTo(Math.random() * tCtx.canvas.width, Math.random() * tCtx.canvas.height);
                tCtx.lineTo(Math.random() * tCtx.canvas.width, Math.random() * tCtx.canvas.height);
                tCtx.stroke();
            }

            tCtx.font = 'bold 30px Arial';
            tCtx.fillStyle = "#000";
            let x = 10;
            for (let i = 0; i < random_captcha_imaga.length; i++) {
                tCtx.setTransform(1, Math.random() * 0.3, Math.random() * 0.3, 1, 0, 0);
                tCtx.fillText(random_captcha_imaga[i], x, 40 + Math.random() * 5);
                x += tCtx.measureText(random_captcha_imaga[i]).width + Math.random() * 5;
            }
            tCtx.setTransform(1, 0, 0, 1, 0, 0);

            imageElem.src = tCtx.canvas.toDataURL();
        }

        generateCaptcha();

        function captchaSubmit(event) {
            event.preventDefault();
            if (captchaField.value === random_captcha[1]) {
                window.alert("Captcha is successfully passed")
                event.target.submit();
            } else {
                window.alert("Captcha is failed. please try again.")
                generateCaptcha();
                captchaField.value = '';
            }
        }

        document.getElementById("captcha-refresh").addEventListener("click", function() {
            generateCaptcha();
        });

        const form = document.getElementById("form");
        const captchaField = document.getElementById("captchaField");
        console.log(form)
        form.addEventListener("submit", captchaSubmit);
    </script>

    <?php $this->load->view('include/footer'); ?>