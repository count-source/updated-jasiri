<?php
session_start();
if (isset($_POST["submit"])) {
    require "db.php";
    extract($_POST);
        $sql = "INSERT INTO `email_info`(`email_id`, `from-name`, `subject`, `email`, `message`) 
              VALUES (null ,'$from','$subject','$email','$messages')";


       $query_run =  mysqli_query($conn, $sql);
    if($query_run){
        echo"<script type='text/javascript'>alert('Your mail was sent successfully ,Jasiri will respond immediately ')</script>";
    }else{
        echo"<script type='text/javascript'>alert>alert('Your mail was not sent , contact Jasiri with the following Number +254743770216 ')</script>";
    }
        header('location:index.php');

    }




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jasiri Marketting Agency</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-----------frame work css----------------->
    <!-----------fontawesome file----------------->

    <link rel="stylesheet" href="css/all.min.css" />
    <!--------------user defined css-styles------>
    <link rel="stylesheet" href="css/index.css" />
    <!-------------slick css slider-->
    <link rel="stylesheet" href="owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="owl-carousel/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
<!-----navbar section-->
<section id="navbar-area">
    <div class="container navbar-header">
        <div class="navbar-logo ">
            <img src="images/mainL1.png" alt="" />
        </div>
        <div class="navbar-items">
            <ul>
                <li><a class="active nav-items" href="">Home</a></li>
                <li><a href="" class="nav-items">Who we are ?</a></li>
                <li><a href="" class="nav-items">Services</a></li>
                <li><a href="" class="nav-items">How we Work</a></li>
                <li><a href="" class="nav-items">Testimonals</a></li>
            </ul>
        </div>
        <div class="navbar-items-right">
            <ul>
                <li class="contact">
                    <a href="" class="contact-us btn">Contact us</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="sub-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7 col-sm-12">
                <div class="sub-body-image-expl mb-5">
                    <h2>Jasiri Maketing Agency</h2>
                    <p>Jasiri Agency is a full service Advertising & Marketing firm. Think of us as your outsourced marketing department. we focus on your leads.So you can focus on your customers.We have developed this package for small businesses to
                        help accelerate your online presence and drive new business.</p>
                    <span>Buliding Brands with Purpose and Passion</span>
                    <button class="btn   text-white">Hire us</button>
                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-12 banner">
                <div class="owl-carousel owl-theme py-4">
                    <div class="item">
                        <div class="img-hover">
                            <img src="images/pexels1.jpg" class="img-fluid py-1" alt="blog1">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-hover">
                            <img src="images/marketing-desk.jpg" class="img-fluid py-1" alt="blog1">
                        </div>
                    </div>
                    <div class="item">
                        <div class="item">
                            <div class="img-hover">
                                <img src="images/working.jpg" class="img-fluid py-1" alt="blog1">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item">
                            <div class="img-hover">
                                <img src="images/header-bg.png" class="img-fluid py-1" alt="blog1">
                            </div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="item">
                            <div class="img-hover">
                                <img src="images/lady-making-presentation.jpg" class="img-fluid py-1" alt="blog1">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item">
                            <div class="img-hover">
                                <img src="images/partner5.png" class="img-fluid py-1" alt="blog1">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item">
                            <div class="img-hover">
                                <img src="images/partner6.png" class="img-fluid py-1" alt="blog1">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item">
                            <div class="img-hover">
                                <img src="images/partner7.png" class="img-fluid py-1" alt="blog1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="paterns">
    <div class="container">
        <h1 class="paterns-title ">Our Partners</h1>
        <div class="owl-carousel owl-theme py-4  partners">
            <div class="item">
                <div class="img-hover my-image-partner">
                    <img src="images/patern1.jpg" class="img-fluid py-1" alt="blog1">
                </div>
            </div>
            <div class="item">
                <div class="img-hover my-image-partner">
                    <img src="images/patern2.jpg" class="img-fluid py-1" alt="blog1">
                </div>
            </div>
            <div class="item">
                <div class="item">
                    <div class="img-hover my-image-partner">
                        <img src="images/patern3.jpg" class="img-fluid py-1" alt="blog1">
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item">
                    <div class="img-hover my-image-partner">
                        <img src="images/patern4.jpg" class="img-fluid py-1" alt="blog1">
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item">
                    <div class="img-hover my-image-partner">
                        <img src="images/patern5.jpg" class="img-fluid py-1" alt="blog1">
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item">
                    <div class="img-hover my-image-partner">
                        <img src="images/partner5.png" class="img-fluid py-1" alt="blog1">
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item">
                    <div class="img-hover my-image-partner">
                        <img src="images/partner6.png" class="img-fluid py-1" alt="blog1">
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item">
                    <div class="img-hover my-image-partner">
                        <img src="images/partner7.png" class="img-fluid py-1" alt="blog1">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="engage" class="engage">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 engage-img">
                <img src="images/socialdb.svg" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="engage-intro">
                    <span class="engage-title">Engagement Plan</span>
                    <h2 class="engage-text1">Lorem ipsum dolor sit amet consectetur.</h2>
                    <p class="engage-text2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, aperiam. Unde sapiente nobis, cumque, magnam in ipsa accusantium veritatis est consequuntur, aspernatur iure harum voluptatibus architecto numquam. Neque, at temporibus!</p>
                    <button class="btn engage-btn text-white">Reach Out</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-9 col-sm-12">
                <div class="into-abt">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia aperiam cumque impedit labore libero. Ex. <br> collaborate
                    </p>

                </div>
            </div>
        </div>
    </div>
    <div id="about-us-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <div class="about-us-img">
                        <img src="images/man.png" alt="" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <div class="about-us">
                        <h6 class="abouts">About us</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam veniam quaerat, eos temporibus aliquid earum vel ex sint dolore molestias vero voluptatem aliquam et iste necessitatibus quibusdam unde, praesentium possimus?
                        </p>
                        <button class="read-more">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="featured-services" class="mt-0 py-5 featured-services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="service-intro">
                    <span>What we do</span>
                    <h1 class="services-title mt-5 mb-5">Our services</h1>
                    <p class="services-text">
                        We aim to provide solutions by using existing technologies, we customize each solution according to the project’s needs. This doesn’t mean we reinvent the wheel, we just customize the wheel to your specifications.
                    </p>
                </div>
            </div>
        </div>
        <div class="owl-carousel services-carousel owl-theme py-4">
            <div class="item">
                <div class="single-service">
                    <div class="service-icon-wrap">
                        <img src="images/tools-alt-2.svg" alt="" />
                    </div>
                    <div class="service-details">
                        <h2>Logo design</h2>
                        <p>
                            We will design 3-5 new logo identities for your business. Includes 2 rounds of revisions. Final artwork copyright belongs to you. Will include original files and common file types
                        </p>
                        <a href="/services">services</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-service">
                    <div class="service-icon-wrap">
                        <img src=images/tools-alt-2.svg" alt="" />
                    </div>
                    <div class="service-details">
                        <h2>Corporate Identity Suite Design</h2>
                        <p>
                            We will design 3-5 new logo identities for your business. Includes 2 rounds of revisions. Final artwork copyright belongs to you. Will include original files and common file types
                        </p>
                        <a href="/services">services</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-service">
                    <div class="service-icon-wrap">
                        <img src="images/code.svg" alt="" />
                    </div>
                    <div class="service-details">
                        <h2>Website Design</h2>
                        <p>
                            We will design 3-5 new logo identities for your business. Includes 2 rounds of revisions. Final artwork copyright belongs to you. Will include original files and common file types
                        </p>
                        <a href="/services">services</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-service">
                    <div class="service-icon-wrap">
                        <img src="/images/hand-drag.svg" alt="" />
                    </div>
                    <div class="service-details">
                        <h2>Social Media Profiles (Setup & Design)</h2>
                        <p>
                            We will design 3-5 new logo identities for your business. Includes 2 rounds of revisions. Final artwork copyright belongs to you. Will include original files and common file types
                        </p>
                        <a href="/services">services</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-service">
                    <div class="service-icon-wrap">
                        <img src="images/search.svg" alt="" />
                    </div>
                    <div class="service-details">
                        <h2>SEO Audit</h2>
                        <p>
                            We will design 3-5 new logo identities for your business. Includes 2 rounds of revisions. Final artwork copyright belongs to you. Will include original files and common file types
                        </p>
                        <a href="/services">services</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-service">
                    <div class="service-icon-wrap">
                        <img src="images/tools-alt-2.svg" alt="" />
                    </div>
                    <div class="service-details">
                        <h2>Online visibility management</h2>
                        <p>
                            We will design 3-5 new logo identities for your business. Includes 2 rounds of revisions. Final artwork copyright belongs to you. Will include original files and common file types
                        </p>
                        <a href="/services">services</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-service">
                    <div class="service-icon-wrap">
                        <img src="images/tools-alt-2.svg" alt="" />
                    </div>
                    <div class="service-details">
                        <h2>Online visibility management</h2>
                        <p>
                            We will design 3-5 new logo identities for your business. Includes 2 rounds of revisions. Final artwork copyright belongs to you. Will include original files and common file types
                        </p>
                        <a href="/services">services</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-service">
                    <div class="service-icon-wrap">
                        <img src="images/tools-alt-2.svg" alt="" />
                    </div>
                    <div class="service-details">
                        <h2>Online visibility management</h2>
                        <p>
                            We will design 3-5 new logo identities for your business. Includes 2 rounds of revisions. Final artwork copyright belongs to you. Will include original files and common file types
                        </p>
                        <a href="/services">services</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-service">
                    <div class="service-icon-wrap">
                        <img src="images/tools-alt-2.svg" alt="" />
                    </div>
                    <div class="service-details">
                        <h2>Online visibility management</h2>
                        <p>
                            We will design 3-5 new logo identities for your business. Includes 2 rounds of revisions. Final artwork copyright belongs to you. Will include original files and common file types
                        </p>
                        <a href="/services">services</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-service">
                    <div class="service-icon-wrap">
                        <img src="images/tools-alt-2.svg" alt="" />
                    </div>
                    <div class="service-details">
                        <h2>Online visibility management</h2>
                        <p>
                            We will design 3-5 new logo identities for your business. Includes 2 rounds of revisions. Final artwork copyright belongs to you. Will include original files and common file types
                        </p>
                        <a href="/services">services</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-service">
                    <div class="service-icon-wrap">
                        <img src="images/tools-alt-2.svg" alt="" />
                    </div>
                    <div class="service-details">
                        <h2>Online visibility management</h2>
                        <p>
                            We will design 3-5 new logo identities for your business. Includes 2 rounds of revisions. Final artwork copyright belongs to you. Will include original files and common file types
                        </p>
                        <a href="/services">services</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-service">
                    <div class="service-icon-wrap">
                        <img src="images/tools-alt-2.svg" alt="" />
                    </div>
                    <div class="service-details">
                        <h2>Online visibility management</h2>
                        <p>
                            We will design 3-5 new logo identities for your business. Includes 2 rounds of revisions. Final artwork copyright belongs to you. Will include original files and common file types
                        </p>
                        <a href="/services">services</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-service">
                    <div class="service-icon-wrap">
                        <img src="images/tools-alt-2.svg" alt="" />
                    </div>
                    <div class="service-details">
                        <h2>Online visibility management</h2>
                        <p>
                            We will design 3-5 new logo identities for your business. Includes 2 rounds of revisions. Final artwork copyright belongs to you. Will include original files and common file types
                        </p>
                        <a href="/services">services</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-service">
                    <div class="service-icon-wrap">
                        <img src="images/tools-alt-2.svg" alt="" />
                    </div>
                    <div class="service-details">
                        <h2>Online visibility management</h2>
                        <p>
                            We will design 3-5 new logo identities for your business. Includes 2 rounds of revisions. Final artwork copyright belongs to you. Will include original files and common file types
                        </p>
                        <a href="/services">services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section id="why-choose-us" class="why-choose-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="choose-reason-intro">
                    <h2 class="why-choose-us-title">Why choose us foryour digital marketting project</h2>
                    <ul>
                        <li><a href="http://" class="fa fa-check check1"><span>Cost saving</span></a></li>
                        <li><a href="http://" class="fa fa-check check2"><span>Lead Generation</span></a></li>
                        <li><a href="http://" class="fa fa-check check3"><span>Transparency</span></a></li>
                        <li><a href="http://" class="fa fa-check check4"><span>Brand awareness and protection</span></a>
                        </li>
                        <li><a href="http://" class="fa fa-check check4"><span>Flexible</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="choose-us-img">
                    <img src="images/setup.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="subscriptions">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-10 col-sm-10">
                <div class="flexible-plans">
                    <h2>Flexible plans</h2>
                    <p>Choose a plan that best suits</p>
                    <h2>Our monthly plans</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="my-card">
                    <div class="my-card-header">
                        <small>Digital Marketting</small>
                    </div>
                    <div class="my-card-body">
                        <div class="my-card-body-reasons">
                            <li class="fa fa-check"><span>Online visibility Management</span></li>
                            <li class="fa fa-check"><span>Social Content Management</span></li>
                            <li class="fa fa-check"><span>Review Monitoring & Collection</span></li>
                            <li class="fa fa-check"><span>Offsite Progressive search engine optimization</span>
                            </li>
                        </div>
                        <hr>
                        <div class="my-sub-main-card-body">
                            <div class="my-sub-card-body">
                                <small>45%</small>
                                <p>Consumers who feel social media interaction increases likelihood of purchase
                                </p>
                            </div>
                            <div class="my-sub-card-body">
                                <small>92%</small>
                                <p>Consumers that read online reviews before selecting a business
                                </p>
                            </div>
                            <div class="my-sub-card-body">
                                <small>93%</small>
                                <p>online expereinces begin with a search engine
                                </p>
                            </div>
                        </div>
                        <button class="my-card-btn">Subscribe</button>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="my-card">
                    <div class="my-card-header">
                        <small>Social search</small>
                    </div>
                    <div class="my-card-body">
                        <div class="my-card-body-reasons">
                            <li class="fa fa-check"><span>Online visibility Management</span></li>
                            <li class="fa fa-check"><span>Social Content Management</span></li>
                            <li class="fa fa-check"><span>Review Monitoring & Collection</span></li>
                            <li class="fa fa-check"><span>Offsite Progressive search engine optimization</span>
                            </li>
                        </div>
                        <hr>
                        <div class="my-sub-main-card-body">
                            <div class="my-sub-card-body">
                                <small>93%</small>
                                <p>Marketters use video for online marketing
                                </p>
                            </div>
                            <div class="my-sub-card-body">
                                <small>92%</small>
                                <p>Marketters use Facebook marketting
                                </p>
                            </div>
                            <div class="my-sub-card-body">
                                <small>70%</small>
                                <p>Retargeted users are more likely to convert
                                </p>
                            </div>
                        </div>
                        <button class="my-card-btn">Subscribe</button>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="my-card">
                    <div class="my-card-header">
                        <small>Paid search and social marketting</small>
                    </div>
                    <div class="my-card-body">
                        <div class="my-card-body-reasons">
                            <li class="fa fa-check"><span>Online visibility Management</span></li>
                            <li class="fa fa-check"><span>Social Content Management</span></li>
                            <li class="fa fa-check"><span>Review Monitoring & Collection</span></li>
                            <li class="fa fa-check"><span>Offsite Progressive search engine optimization</span>
                            </li>
                        </div>
                        <hr>
                        <div class="my-sub-main-card-body">
                            <div class="my-sub-card-body">
                                <small>Facebook</small>
                                <p>we reach audience based on their location, age, interests and more.
                                </p>
                            </div>
                            <div class="my-sub-card-body">
                                <small>Youtube</small>
                                <p>
                                    will reach your audience based on their location, age, interests and more.
                                </p>
                            </div>
                            <div class="my-sub-card-body">
                                <small>Google</small>
                                <p>Haunting ads, keeps your brand in front of website We will create and manage a retargeting campaign to improve conversion, repeat business and customer loyalty
                                </p>
                            </div>
                        </div>
                        <button class="my-card-btn">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact-us" class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-6">
                <div class="contact-us-intro">
                    <h2 classs="contact-us-title">Contact us</h2>
                    <p class="contact-us-text">Feel like contacting us? drop your queries and we wwill get to you as urgently as soon</p>
                    <div class="social-media">
                        <li>
                            <a href="" class="fab fa-facebook"></a>
                        </li>
                        <li>
                            <a href="" class="fab fa-twitter"></a>
                        </li>
                        <li>
                            <a href="" class="fab fa-instagram"></a>
                        </li>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-6">
                <div class="contact-us-form">
                    <h2>Send us a Email</h2>
                    <form action="index.php" method="POST" id="form" class="py-4 form">
                        <div class="input-area input1">
                            <input type="text" name="from" class="from" id="name" placeholder="Full Name" required>
                       <span id="text_from"></span>
                        </div>
                        <div class="input-area input2">

                            <input type="email" id="email" autocomplete="off" onkeydown="validation()" class="email" name="email" placeholder="Email" required>
                            <span id="text"></span>
                        </div>
                        <div class="input-area input3">
                            <input type="text" class="subject" id="subject" name="subject" placeholder="Subject" required>
                            <span id="text_subject"></span>
                        </div>
                        <div class="input-area input4">
                            <input type="number" class="phonenumber" name="phonenumber" id="phonenumber" placeholder="PhoneNumber" required>
                            <span id="text_phonenumber"></span>
                        </div>
                        <textarea name="messages" class="message" onclick="message()" id="message" col="2" class=" input5" rows="5" required placeholder="Message"></textarea>
                        <span id="text_message"></span>
                        <button type="submit" id="send"  name="submit" class="mail-submit input6">Submit message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="what-people-say" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-12">
                <div class="customer-reviews">
                    <h2 class="review-title">Our customer reviews</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 review-1">
                <div class="card">
                    <div class="card-header-area py-5">
                        <div class="user ">
                            <img src="images/th.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="user-info">
                            <h3>Nadia katambe</h3>
                            <small class="artist">Artist<span class="px-3 place">seven Hub</span></small>
                        </div>
                    </div>
                    <div class="card-body">

                        <p><i class="fa fa-quote-left pr-2"></i>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo amet vitae accusantium quam, praesentium molestias.</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit . Quo amet vitae accusantium quam, praesentium molestias. <i class="fa fa-quote-right"></i></p>

                    </div>
                    <hr>
                    <div class="card-footer-area d-flex mb-0">
                        <div class="bottom-user d-flex">
                            <img src="images/th.jpg" class="img-fluid " alt="">
                            <div class="px-2">
                                <p class="mb-0">Joshua Ndeleva</p>
                                <p>2 months</p>
                            </div>
                        </div>

                        <div class="d-flex ml-auto">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-0"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4  review-2">
                <div class="card">
                    <div class="card-header-area py-5">
                        <div class="user ">
                            <img src="images/th.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="user-info">
                            <h3>Nadia katambe</h3>
                            <small class="artist">Artist<span class="px-3 place">seven Hub</span></small>
                        </div>
                    </div>
                    <div class="card-body">

                        <p><i class="fa fa-quote-left pr-2"></i>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo amet vitae accusantium quam, praesentium molestias.</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit . Quo amet vitae accusantium quam, praesentium molestias. <i class="fa fa-quote-right"></i></p>

                    </div>
                    <hr>
                    <div class="card-footer-area d-flex mb-0">
                        <div class="bottom-user d-flex">
                            <img src="images/th.jpg" class="img-fluid" alt="">
                            <div class="px-2">
                                <p class="mb-0">Joshua Ndeleva</p>
                                <p>2 months</p>
                            </div>
                        </div>

                        <div class="d-flex ml-auto">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-0"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4  review-3">
                <div class="card">
                    <div class="card-header-area py-5">
                        <div class="user ">
                            <img src="images/th.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="user-info">
                            <h3>Nadia katambe</h3>
                            <small class="artist">Artist<span class="px-3 place">seven Hub</span></small>
                        </div>
                    </div>
                    <div class="card-body">

                        <p><i class="fa fa-quote-left pr-2"></i>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo amet vitae accusantium quam, praesentium molestias.</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit . Quo amet vitae accusantium quam, praesentium molestias. <i class="fa fa-quote-right"></i></p>

                    </div>
                    <hr>
                    <div class="card-footer-area d-flex mb-0">
                        <div class="bottom-user d-flex">
                            <img src="images/th.jpg" class="img-fluid" alt="">
                            <div class="px-2">
                                <p class="mb-0">Joshua Ndeleva</p>
                                <p>2 months</p>
                            </div>
                        </div>

                        <div class="d-flex ml-auto">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-0"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="footer-logo">
                    <img src="images/mainL1.png" alt="">
                    <p class="img-text">Buliding Brands with Purpose and Passion</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="links-area">
                    <h2 class="links-title">Our company</h2>
                    <div class="footer-links">
                        <ul>
                            <li><a href=""><i class="fa fa-home px-2 footer-home1"></i>Home</a></li>
                            <li><a href=""><i class="fa fa-home px-2 footer-home2"></i>About us</a></li>
                            <li><a href=""><i class="fa fa-home px-2 footer-home3"></i>our marketing package</a></li>
                            <li>
                                <a href=""> <i class="fa fa-home px-2"></i>services</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="links-area">
                    <h2 class="links-title">Get in Touch</h2>
                    <div class="footer-links">
                        <ul>
                            <li><a href="">Phone<span class="px-2 footer-home1">(+254) 792044673</span>or <br>
                                    <span>(+254)743770216</span></a></li>
                            <li><a href="">Email<span class="footer-home2">jasirimarkettingagency@gmail.com</span></a>
                            </li>
                            <li><a href="">Office<span class="footer-home3">Nairobi ,G.P.O , 11400-00100</span></a></li>
                        </ul>
                    </div>
                    <div class="footer-socila-media">
                        <li>
                            <a href="" class="fab fa-facebook"></a>
                        </li>
                        <li>
                            <a href="" class="fab fa-twitter"></a>
                        </li>
                        <li>
                            <a href="" class="fab fa-instagram"></a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="copyright d-flex justify-content-center">
            <p>&copysr; Powered by <a href="#">CursorHub LTD</a></p>
            <span class="pl-2">&copy;  2020</span>
        </div>
    </div>
</section>
<script src="js/jquery.min.js"></script>
<script src="owl-carousel/js/owl.carousel.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script>
    var email = document.getElementById('email')
    function validation(){
        var form = document.getElementById('form');
        var email = document.getElementById('email').value;
        var text = document.getElementById('text');


        var pattern = /^[^]+[^]+\.[a-z]{2,3}$/;
        if(email.match(pattern)){
            form.classList.add("valid");
            form.classList.remove("invalid");
            text.innerHTML = "Your Email address is valid";
            text.style.color = "00ff00";

        }else{
            form.classList.remove("valid");
            form.classList.add("invalid");
            text.innerHTML = "Your Email address is invalid";
            text.style.color = "00ff00";

        }
        if(email == ''){
            form.classList.remove("valid");
            form.classList.add("invalid");
            text.innerHTML = "Fill Your  Email address ";
            text.style.color = "00ff00";

        }
    }
    var send = document.getElementById('send');
    send.addEventListener("click",function (){
        if(email == ''){
            text.innerHTML = "Fill Your  Email address ";
            text.style.color = "00ff00";

        }

    })
</script>

<script src="index.js"></script>
</body>

</html>
