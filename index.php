<!DOCTYPE html>
<html>
<head>
<title>ICF</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
<link rel="icon" type="image/x-icon" href="assets/images/company-logo.png" />
<link rel="stylesheet" href="assets/css/default.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-12/css/all.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/modernizr.min.js"></script>
</head>
<body>

<!-- Start Main -->
<div id="main">
    <div class="header-search-form header-show">
        <span class="header-search-form-close" onclick="closeSearchPopUp()"><i class="search-form-close fas fa-times"></i></span>
        <form method="get" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="header-search-form-field">
                <button type="submit"><i class="fas fa-search"></i></button>
                <input type="search" name="s" placeholder="Search" value="">
            </div>
        </form>
    </div>

    <!-- Start Header -->
    <header>

        <video muted loop id="myVideo" poster="assets/images/video-hero-background.jpg">
            <source src="assets/videos/video.mp4" type="video/mp4">
        </video>
        <!-- Start Hero Image -->
        <div class="hero-img-wrap">


            <!-- Start Color Line Background -->
            <div class="color-line">

                <!-- Start Section 1 -->
                <section class="section-1" id="section-1">
                    <!-- Start Header Container -->
                    <div class="header-container">
                        <div class="logo-wrap">
                            <div class="logo-sub-wrapper">
                                <img src="assets/images/company-logo.png" class="company-logo" alt="">
                            </div>        
                        </div>
                        <div class="menu-wrap">
                            <div class="mobile-nav-wrap">   
                                <div class="mobile-search-wrap">
                                    <a href="javascript:void(0)" onclick="openSearchPopUp()">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                                <div>
                                    <a class="mobile-menu-wrap" href="javascript:void(0)">
                                        <i id="hamburger-icon" class="fas fa-bars" onclick="openNav()"></i>
                                    </a>
                                </div>
                            </div>
                            <label class="screen-reader-text">Main menu:</label>
                            <div class="main-menu d-flex flex-row-reverse">
                                <form action="">
                                    <div class="search-box">
                                        <div class="search-box-inner">   
                                            <label class="screen-reader-text">Search:</label>
                                            <input type="search" id="search-input" name="s" value="" placeholder="Search">
                                            <button><img src="assets/images/search-icon.png"></button>
                                        </div>      
                                    </div>
                                </form>
                                <div class="navigation">
                                    <nav>
                                        <ul>
                                            <li>
                                                <div class="main-nav-tab"><img src="assets/images/nav-right-arrow.png" class="nav-right-arrow"><a href="">Blog</a>
                                                </div>                      
                                            </li>
                                            <li>
                                                <div class="main-nav-tab"><img src="assets/images/nav-right-arrow.png" class="nav-right-arrow"><a href="">News & Events</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="main-nav-tab"><img src="assets/images/nav-right-arrow.png" class="nav-right-arrow"><a href="">Careers</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="main-nav-tab"><img src="assets/images/nav-right-arrow.png" class="nav-right-arrow"><a href="">Contact</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <label class="screen-reader-text">Secondary menu:</label>
                            <div class="secondary-menu">
                                <nav>
                                    <ul>
                                        <li>
                                            <div class="secondary-nav-tab">
                                                <a href="">Company</a>
                                                <span class="secondary-focus"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="secondary-nav-tab">
                                                <a href="">What we do</a>
                                                <span class="secondary-focus"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="secondary-nav-tab">
                                                <a href="">Investors</a>
                                                <span class="secondary-focus"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="secondary-nav-tab">
                                                <a href="">Resources</a>
                                                <span class="secondary-focus"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>    
                        </div>


                    </div>
                    <!-- Finish Header -->

                    <div class="heading-title">
                        <h1>Strategic consulting for a digital world</h1>
                    </div>
                    <div class="hero-hr-line">
                        <img src="assets/images/hero-hr-line.png" alt="">
                    </div>
                    <div class="heading-subtitle">
                        <p>We work with hundreds of companies and governments to plan, design and implement transformative projects.<br>With +5,000 experts across +70 countries, we solve complex problems in unique ways.</p>
                    </div>
                    <div class="hero-vid-wrap">
                        <button onclick="playVid()" type="button" id="playvid-icon"><img src="assets/images/play-video-icon.png" alt=""></button>
                        <span class="hero-vid-text">Play video</span>
                    </div>
                    <div class="hero-scroll-wrap">
                        <span class="hero-vid-text">Scroll</span>
                        <a href="#section-2"><img src="assets/images/scroll-down-nav.png" alt=""></a>
                    </div>

                </section>
                <!-- Finish Section 1 -->

            </div>
            <!-- Finish Color Line Background -->
        

        </div>
        <!-- Finish Hero Image -->

        <!-- <ul class="left-social-icons">      
            <li>
                <a href=""><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
                <a href=""><i class="fab fa-twitter"></i></a>
            </li>
            <li>
                <a href=""><i class="fab fa-instagram"></i></a>
            </li>
            <li>
                <a href=""><i class="fab fa-linkedin"></i></a>
            </li>
        </ul>
        <div class="right-circle-nav-wrap">       
            <ul class="right-circle-nav-icons">
                <li>
                    <a href="#section-1"><img src="assets/images/dotted-blue.png"></a>
                </li>
                <li>
                    <a href="#section-2"><img src="assets/images/dotted-gray.png"></a>
                </li>
                <li>
                    <a href="#section-3"><img src="assets/images/dotted-gray.png"></a>
                </li>
                <li>
                    <a href="#section-4"><img src="assets/images/dotted-gray.png"></a>
                </li>
                <li>
                    <a href="#section-5"><img src="assets/images/dotted-gray.png"></a>
                </li>
                <li>
                    <a href="#section-6"><img src="assets/images/dotted-gray.png"></a>
                </li>
            </ul>
        </div>
        <div class="page-section-nav-wrap">
            <a href="#section-2"><img src="assets/images/page-down-blue-arrow.png"></a>
        </div> -->




    </header>
    <!-- Finish Header -->

    <!-- Start Content -->

        <!-- Start Section 2 -->
        <section class="section-2" id="section-2">
            <div class="section-wrap">
                <div class="spacer-sec-top"></div>
                <h2>What we do</h2>
                <p>We combine traditional consulting expertise with cutting-edge digital agency services to serve our customers in a holistic way.</p>

                <div class="section-title-wrap">   
                    <img src="assets/images/s-text.png" class="sl-text"><span class="section-2-title">Industries<img src="assets/images/s-text.png" class="sr-text">
                </div>
                <div class="sect2-box-wrap">
                    <div class="sect2-box">
                        <div class="sect2-item">
                            <img src="assets/images/industries/sect2-background-img.png" class="sect2Img-bg">
                            <div class="sect2-item-inner">
                                <img src="assets/images/industries/item1.png" class="sect2Img-item">
                                <img src="assets/images/industries/item1-white.png" class="sect2Img-item-white">
                                <div class="sect2-item-title">
                                    <span>Consumer & financial</span>
                                </div>
                                <img src="assets/images/industries/sect2-line.png" class="sect2-line">
                            </div>
                        </div>
                        <div class="sect2-item">
                            <img src="assets/images/industries/sect2-background-img.png" class="sect2Img-bg" style="width:100%">
                            <div class="sect2-item-inner">
                                <img src="assets/images/industries/item1.png" class="sect2Img-item">
                                <img src="assets/images/industries/item1-white.png" class="sect2Img-item-white">
                                <div class="sect2-item-title">
                                    <span>Consumer & financial</span>
                                </div>
                                <img src="assets/images/industries/sect2-line.png" class="sect2-line">
                            </div>
                        </div>
                        <div class="sect2-item">
                            <img src="assets/images/industries/sect2-background-img.png" class="sect2Img-bg" style="width:100%">
                            <div class="sect2-item-inner">
                                <img src="assets/images/industries/item1.png" class="sect2Img-item">
                                <img src="assets/images/industries/item1-white.png" class="sect2Img-item-white">
                                <div class="sect2-item-title">
                                    <span>Consumer & financial</span>
                                </div>
                                <img src="assets/images/industries/sect2-line.png" class="sect2-line">
                            </div>
                        </div>
                        <div class="sect2-item">
                            <img src="assets/images/industries/sect2-background-img.png" class="sect2Img-bg" style="width:100%">
                            <div class="sect2-item-inner">
                                <img src="assets/images/industries/item1.png" class="sect2Img-item">
                                <img src="assets/images/industries/item1-white.png" class="sect2Img-item-white">
                                <div class="sect2-item-title">
                                    <span>Consumer & financial</span>
                                </div>
                                <img src="assets/images/industries/sect2-line.png" class="sect2-line">
                            </div>
                        </div>
                        <div class="sect2-item">
                            <img src="assets/images/industries/sect2-background-img.png" class="sect2Img-bg" style="width:100%">
                            <div class="sect2-item-inner">
                                <img src="assets/images/industries/item1.png" class="sect2Img-item">
                                <img src="assets/images/industries/item1-white.png" class="sect2Img-item-white">
                                <div class="sect2-item-title">
                                    <span>Consumer & financial</span>
                                </div>
                                <img src="assets/images/industries/sect2-line.png" class="sect2-line">
                            </div>
                        </div>
                        <div class="sect2-item">
                            <img src="assets/images/industries/sect2-background-img.png" class="sect2Img-bg" style="width:100%">
                            <div class="sect2-item-inner">
                                <img src="assets/images/industries/item1.png" class="sect2Img-item">
                                <img src="assets/images/industries/item1-white.png" class="sect2Img-item-white">
                                <div class="sect2-item-title">
                                    <span>Consumer & financial</span>
                                </div>
                                <img src="assets/images/industries/sect2-line.png" class="sect2-line">
                            </div>
                        </div>
                        <div class="sect2-item">
                            <img src="assets/images/industries/sect2-background-img.png" class="sect2Img-bg" style="width:100%">
                            <div class="sect2-item-inner">
                                <img src="assets/images/industries/item1.png" class="sect2Img-item">
                                <img src="assets/images/industries/item1-white.png" class="sect2Img-item-white">
                                <div class="sect2-item-title">
                                    <span>Consumer & financial</span>
                                </div>
                                <img src="assets/images/industries/sect2-line.png" class="sect2-line">
                            </div>
                        </div>
                        <div class="sect2-item">
                            <img src="assets/images/industries/sect2-background-img.png" class="sect2Img-bg" style="width:100%">
                            <div class="sect2-item-inner">
                                <img src="assets/images/industries/item1.png" class="sect2Img-item">
                                <img src="assets/images/industries/item1-white.png" class="sect2Img-item-white">
                                <div class="sect2-item-title">
                                    <span>Consumer & financial</span>
                                </div>
                                <img src="assets/images/industries/sect2-line.png" class="sect2-line">
                            </div>
                        </div>
                        <div class="sect2-item">
                            <img src="assets/images/industries/sect2-background-img.png" class="sect2Img-bg" style="width:100%">
                            <div class="sect2-item-inner">
                                <img src="assets/images/industries/item1.png" class="sect2Img-item">
                                <img src="assets/images/industries/item1-white.png" class="sect2Img-item-white">
                                <div class="sect2-item-title">
                                    <span>Consumer & financial</span>
                                </div>
                                <img src="assets/images/industries/sect2-line.png" class="sect2-line">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sect2-spacer"></div>
                <div class="section-title-wrap">
                    <img src="assets/images/s-text.png" class="sl-text"><span class="section-2-title">Services<img src="assets/images/s-text.png" class="sr-text"></span>
                </div>
                <div class="sect2-box">
                    <div class="sect2-item">
                        <img src="assets/images/industries/sect2-background-img.png" class="sect2Img-bg" style="width:100%">
                        <div class="sect2-item-inner">
                            <img src="assets/images/industries/item1.png" class="sect2Img-item">
                            <img src="assets/images/industries/item1-white.png" class="sect2Img-item-white">
                            <div class="sect2-item-title">
                                <span>Consumer & financial</span>
                            </div>
                            <img src="assets/images/industries/sect2-line.png" class="sect2-line">
                        </div>
                    </div>
                    <div class="sect2-item">
                        <img src="assets/images/industries/sect2-background-img.png" class="sect2Img-bg" style="width:100%">
                        <div class="sect2-item-inner">
                            <img src="assets/images/industries/item1.png" class="sect2Img-item">
                            <img src="assets/images/industries/item1-white.png" class="sect2Img-item-white">
                            <div class="sect2-item-title">
                                <span>Consumer & financial</span>
                            </div>
                            <img src="assets/images/industries/sect2-line.png" class="sect2-line">
                        </div>
                    </div>
                    <div class="sect2-item">
                        <img src="assets/images/industries/sect2-background-img.png" class="sect2Img-bg" style="width:100%">
                        <div class="sect2-item-inner">
                            <img src="assets/images/industries/item1.png" class="sect2Img-item">
                            <img src="assets/images/industries/item1-white.png" class="sect2Img-item-white">
                            <div class="sect2-item-title">
                                <span>Consumer & financial</span>
                            </div>
                            <img src="assets/images/industries/sect2-line.png" class="sect2-line">
                        </div>
                    </div>
                    <div class="sect2-item">
                        <img src="assets/images/industries/sect2-background-img.png" class="sect2Img-bg" style="width:100%">
                        <div class="sect2-item-inner">
                            <img src="assets/images/industries/item1.png" class="sect2Img-item">
                            <img src="assets/images/industries/item1-white.png" class="sect2Img-item-white">
                            <div class="sect2-item-title">
                                <span>Consumer & financial</span>
                            </div>
                            <img src="assets/images/industries/sect2-line.png" class="sect2-line">
                        </div>
                    </div>
                    <div class="sect2-item">
                        <img src="assets/images/industries/sect2-background-img.png" class="sect2Img-bg" style="width:100%">
                        <div class="sect2-item-inner">
                            <img src="assets/images/industries/item1.png" class="sect2Img-item">
                            <img src="assets/images/industries/item1-white.png" class="sect2Img-item-white">
                            <div class="sect2-item-title">
                                <span>Consumer & financial</span>
                            </div>
                            <img src="assets/images/industries/sect2-line.png" class="sect2-line">
                        </div>
                    </div>
                </div>
                <div class="sect2-bottom-spacer"></div>
            </div>
            <!-- <ul class="left-social-icons">
                <li>
                    <a href=""><img src="assets/images/Social-media/white/fb-icon-white.png"></a>
                </li>
                <li>
                    <a href=""><img src="assets/images/Social-media/white/twitter-icon-white.png"></a>
                </li>
                <li>
                    <a href=""><img src="assets/images/Social-media/white/instagram-icon-white.png"></a>
                </li>
                <li>
                    <a href=""><img src="assets/images/Social-media/white/linkedin-icon-white.png"></a>
                </li>
            </ul>
            <div class="circle-section-icon-wrap">
                <a href=""><img src="assets/images/circle-section-icon.png"></a>
            </div>
            <div class="right-circle-nav-wrap">       
                <ul class="right-circle-nav-icons">
                    <li>
                        <a href="#section-1"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                    <li>
                        <a href="#section-2"><img src="assets/images/dotted-blue.png"></a>
                    </li>
                    <li>
                        <a href="#section-3"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                    <li>
                        <a href="#section-4"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                    <li>
                        <a href="#section-5"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                    <li>
                        <a href="#section-6"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                </ul>
            </div>
            <div class="page-section-nav-wrap">
                <a href="#section-3"><img src="assets/images/page-down-arrow.png"></a>
            </div> -->
        </section>
        <!-- Finish Section 2 -->

        <!-- Start Section 3 -->
        <section class="section-3" id="section-3">
            <div class="section-wrap">
                <div class="spacer-sec-top"></div>
                <div class="container-fluid">   
                    <div class="row">
                        <div class="col-md-4">
                            <div class="sect3-title-wrap">
                                <img src="assets/images/s-text.png" class="sl-text"><span class="section-3-title">Investor overview<img src="assets/images/s-text.png" class="sr-text"></span>
                            </div>
                        </div>
                        <div class="col-md-8 sect3-subheading">
                            <p>ICF (NASDAQ:ICFI) is a leading provider of professional services and technology-based solutions to government and commercial clients.</p>
                        </div>           
                    </div> 
                </div> 
                <div class="sect3-chart-wrap">
                    <a href=""><img src="assets/images/sect3-chart-1.png"></a>
                </div>          
            </div>
            <!-- <ul class="left-social-icons">      
                <li>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href=""><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href=""><i class="fab fa-linkedin"></i></a>
                </li>
            </ul>
            <div class="circle-section-icon-wrap">
                <a href=""><img src="assets/images/circle-section-icon.png"></a>
            </div>
            <div class="right-circle-nav-wrap">       
                <ul class="right-circle-nav-icons">
                    <li>
                        <a href="#section-1"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                    <li>
                        <a href="#section-2"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                    <li>
                        <a href="#section-3"><img src="assets/images/dotted-blue.png"></a>
                    </li>
                    <li>
                        <a href="#section-4"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                    <li>
                        <a href="#section-5"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                    <li>
                        <a href="#section-6"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                </ul>
            </div>
            <div class="page-section-nav-wrap">
                <a href="#section-4"><img src="assets/images/page-down-blue-arrow.png"></a>
            </div> -->
        </section>
        <!-- Finish Section 3 -->

        <!-- Start Section 4 -->
        <section class="section-4" id="section-4">
            <div class="slideshow-container">
                <div class="section-wrap mySlides fades">
                    <div class="spacer-sec-top"></div>
                    <div class="sect4-title-wrap">
                        <img src="assets/images/s-text.png" class="sl-text"><span class="section-4-title">Case studies<img src="assets/images/s-text.png" class="sr-text"></span>
                    </div>
                    <div class="pt-5">
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <img src="assets/images/hand-icon.png" class="hand-icon">
                            </div>
                            <div class="sect4-info col-md-6">
                                <h2>Benefits of Low Emission Development Strategies</h2>
                                <p class="sec-subheading">The case of clean energy policies in Bangladesh</p>
                                <p>As a low-lying country situated in one of the world’s largest river deltas, Bangladesh is highly vulnerable to the consequences of climate variability and change. The country is the eighth most populous in the world and one of the most densely populated. Almost one third of its people live below the poverty line, and only about 60% of the population has access to electricity. At the same time, Bangladesh is coping with a serious energy crisis as a result of sluggish growth in energy supplies and intense expansion of energy demand. Furthermore, challenges associated with urbanization (especially in Dhaka, Chittagong and Khulna metropolitan areas) have led to concerns over livable environments, with problems relating to air pollution, noise pollution, and waste disposal, among others...</p>
                                <div class="sect4-view-wrap">
                                    <a href="">View more ></a>
                                </div>
                                <div class="sect4-view-btn-wrap">
                                    <button class="sect4-btn btn-info-clr">View all case studies <img src="assets/images/view-right-arrow.png"></button>
                                </div>
                            </div>
                        </div>     
                    </div>
                </div>

                <div class="section-wrap mySlides fades">
                    <div class="spacer-sec-top"></div>
                    <div class="sect4-title-wrap">
                        <img src="assets/images/s-text.png" class="sl-text"><span class="section-4-title">Case studies 2<img src="assets/images/s-text.png" class="sr-text"></span>
                    </div>
                    <div class="pt-5">
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <img src="assets/images/hand-icon.png" class="hand-icon">
                            </div>
                            <div class="sect4-info col-md-6">
                                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, voluptas. Quae saepe illo, perferendis illum. </h2>
                                <p class="sec-subheading">Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Deserunt, enim.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, optio cumque esse distinctio recusandae quis. Numquam excepturi quod facilis delectus praesentium suscipit? Ipsum dolorum odit, animi mollitia nostrum accusamus, molestias libero eaque laborum itaque quis aperiam expedita maxime optio, iste delectus exercitationem illum, illo nesciunt dolore. Exercitationem maxime sint, aut.</p>
                                <div class="sect4-view-wrap">
                                    <a href="">View more ></a>
                                </div>
                                <div class="sect4-view-btn-wrap">
                                    <button class="sect4-btn btn-info-clr">View all case studies <img src="assets/images/view-right-arrow.png"></button>
                                </div>
                            </div>
                        </div>     
                    </div>
                </div>
                <div class="section-wrap mySlides fades">
                    <div class="spacer-sec-top"></div>
                    <div class="sect4-title-wrap">
                        <img src="assets/images/s-text.png" class="sl-text"><span class="section-4-title">Case studies 3<img src="assets/images/s-text.png" class="sr-text"></span>
                    </div>
                    <div class="pt-5">
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <img src="assets/images/hand-icon.png" class="hand-icon">
                            </div>
                            <div class="sect4-info col-md-6">
                                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis vitae in recusandae? </h2>
                                <p class="sec-subheading">Lorem, ipsum dolor, sit amet consectetur adipisicing elit. Sit quos, eos magni quidem? Accusantium obcaecati a rem ullam! .</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, fuga, porro? Sint similique, voluptas minus repudiandae. Quas quidem perferendis soluta quae atque, id earum nemo assumenda eaque iste hic cumque distinctio laboriosam sunt quod! Tenetur explicabo est, nesciunt repellendus culpa, quas minus numquam, cupiditate, molestias sunt id mollitia sapiente dolorem. Odio nemo doloremque dolorum autem quia ducimus praesentium qui aliquam cupiditate consequatur expedita iure explicabo hic, temporibus fugiat omnis voluptatem ullam incidunt voluptate eligendi exercitationem consectetur minus sapiente earum. Quae omnis ipsum, sed minima libero hic fuga, nemo? Mollitia alias, debitis pariatur quos ab officiis eaque minus, inventore natus veniam.   </p>
                                <div class="sect4-view-wrap">
                                    <a href="">View more ></a>
                                </div>
                                <div class="sect4-view-btn-wrap">
                                    <button class="sect4-btn btn-info-clr">View all case studies <img src="assets/images/view-right-arrow.png"></button>
                                </div>
                            </div>
                        </div>     
                    </div>
                </div>
                <div class="sect4-left-slide-nav">
                    <a href="javascript:void(0)" onclick="plusSlides(-1)"><img src="assets/images/left-light-blue-arrow.png"></a>
                </div>
                <div class="sect4-right-slide-nav">
                    <a href="javascript:void(0)" onclick="plusSlides(1)"><img src="assets/images/right-light-blue-arrow.png"></a>
                </div>
            </div>
            <!-- <ul class="left-social-icons">      
                <li>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href=""><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href=""><i class="fab fa-linkedin"></i></a>
                </li>
            </ul>
            <div class="circle-section-icon-wrap">
                <a href=""><img src="assets/images/circle-section-icon.png"></a>
            </div>
            <div class="right-circle-nav-wrap">       
                <ul class="right-circle-nav-icons">
                    <li>
                        <a href="#section-1"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                    <li>
                        <a href="#section-2"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                    <li>
                        <a href="#section-3"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                    <li>
                        <a href="#section-4"><img src="assets/images/dotted-blue.png"></a>
                    </li>
                    <li>
                        <a href="#section-5"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                    <li>
                        <a href="#section-6"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                </ul>
            </div>
            <div class="page-section-nav-wrap">
                <a href="#section-5"><img src="assets/images/page-down-blue-arrow.png"></a>
            </div> -->
        </section>
        <!-- Finish Section 4 -->

        <!-- Start Section 5 -->
        <section class="section-5" id="section-5">
            <div class="section-wrap">
                <div class="spacer-sec-top"></div>
                <div class="section-title-wrap">   
                    <img src="assets/images/s-text.png" class="sl-text"><span class="section-5-title">News & events<img src="assets/images/s-text.png" class="sr-text">
                </div>
                <div class="container-fluid news-events-wrapper">
                    <div class="row">
                        <div class="col-md-3 news-item">
                            <div class="img-hover-zoom">
                                <img src="assets/images/News/news-item1.jpg" class="sect3Img-bg">
                                <div class="news-item-wrap">
                                    <div class="sect5-view-btn-wrap">
                                        <button class="sect5-btn btn-warning-clr">News</button>
                                    </div>
                                    <h4>ICF Acquires <br/>We are Vista</h4>
                                    <span class="news-item-date">October 4, 2018</span>
                                    <p>Highly Recognized Agency will Join ICF's Growing Global Marketing and Communications Practice</p>
                                    <div class="sect5-view-wrap">
                                        <a href="">View more ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 news-item">
                            <div class="img-hover-zoom">
                                <img src="assets/images/News/news-item2.jpg" class="sect3Img-bg">
                                <div class="news-item-wrap">
                                    <div class="sect5-view-btn-wrap">
                                        <button class="sect5-btn btn-warning-clr">News</button>
                                    </div>
                                    <h4>ICF Wins $200 Million Contract to Conduct Demographic and Health Surveys</h4>
                                    <span class="news-item-date">October 16, 2018</span>
                                    <p>Company Will Continue to Implement USAID's Gold Standard Global Survey Research Program</p>
                                    <div class="sect5-view-wrap">
                                        <a href="">View more ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 news-item">
                            <div class="img-hover-zoom">
                                <img src="assets/images/News/news-item1.jpg" class="sect3Img-bg">
                                <div class="news-item-wrap">
                                    <div class="sect5-view-btn-wrap">
                                        <button class="sect5-btn btn-info2-clr">Events</button>
                                    </div>
                                    <h4>2018 SOCIETY FOR RISK ANALYSIS ANNUAL MEETING</h4>
                                    <span class="news-item-date">DECEMBER 2 - 6, 2018</span>
                                    <p>This conference is the premier opportunity to discuss all avenues of risk analysis with other enthusiasts from around the globe.</p>
                                    <div class="sect5-view-wrap">
                                        <a href="">View more ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 news-item">
                            <div class="img-hover-zoom">
                                <img src="assets/images/News/news-item2.jpg" class="sect3Img-bg">
                                <div class="news-item-wrap">
                                    <div class="sect5-view-btn-wrap">
                                        <button class="sect5-btn btn-info2-clr">Events</button>
                                    </div>
                                    <h4>2018<br/>CYBERSCI<br/>SYMPOSIUM</h4>
                                    <span class="news-item-date">DECEMBER 6, 2018</span>
                                    <p>Leaders from the U.S. Government, academia, and the larger cyber community will come together under one roof to discuss the questions facing cybersecurity.</p>
                                    <div class="sect5-view-wrap">
                                        <a href="">View more ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sect5-view-btn-bottom-wrap">
                    <button class="sect5-btn-bottom btn-info-clr">View all news & events <img src="assets/images/view-right-arrow.png"></button>
                </div>
            </div>
            <!-- <ul class="left-social-icons">
                <li>
                    <a href=""><img src="assets/images/Social-media/white/fb-icon-white.png"></a>
                </li>
                <li>
                    <a href=""><img src="assets/images/Social-media/white/twitter-icon-white.png"></a>
                </li>
                <li>
                    <a href=""><img src="assets/images/Social-media/white/instagram-icon-white.png"></a>
                </li>
                <li>
                    <a href=""><img src="assets/images/Social-media/white/linkedin-icon-white.png"></a>
                </li>
            </ul>
            <div class="circle-section-icon-wrap">
                <a href=""><img src="assets/images/circle-section-icon.png"></a>
            </div>
            <div class="right-circle-nav-wrap">       
                <ul class="right-circle-nav-icons">
                    <li>
                        <a href="#section-1"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                    <li>
                        <a href="#section-2"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                    <li>
                        <a href="#section-3"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                    <li>
                        <a href="#section-4"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                    <li>
                        <a href="#section-5"><img src="assets/images/dotted-blue.png"></a>
                    </li>
                    <li>
                        <a href="#section-6"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                </ul>
            </div>
            <div class="page-section-nav-wrap">
                <a href="#section-6"><img src="assets/images/page-down-arrow.png"></a>
            </div> -->
        </section>
        <!-- Finish Section 5 -->

        <!-- Start Section 6 -->
        <section class="section-6" id="section-6">
            <div class="section-wrap">
                <div id="map">            
                </div>
                <div id="latlong" data-lat="38.872340" data-long="-77.263430">
                </div>
                <div class="contactus-wrap">
                    <div class="contactus-outer">
                        <div class="contactus-inner">
                            <div class="contactus-details">
                                <div class="section-title-wrap">
                                    <img src="assets/images/s-text.png" class="sl-text"><span class="section-6-title">Contact us<img src="assets/images/s-text.png" class="sr-text"></span>
                                </div>
                                <div class="contactus-details-box">
                                    <ul>
                                        <li><a href="mailto:INFO@ICF.COM">INFO@ICF.COM</a></li>
                                        <li><a href="tel:+1.703.934.3000">+1.703.934.3000</a></li>
                                        <li><a href="tel:+1.703.934.3000">+1.703.934.3740</a></li>
                                        <li><a>9300 Lee Highway, Fairfax, VA 22031</a>
                                    </ul>
                                </div>
                            </div>
                            <div class="contactus-form">
                                <form action="" id="contact-form">
                                    <div class="contactus-wrap-input">
                                        <label class="screen-reader-text">Name:</label>
                                        <input type="text" name="name" placeholder="Name" class="contactus-input">
                                        <span class="contactus-focus-input"></span>
                                    </div>
                                    <div class="contactus-wrap-input">
                                        <label class="screen-reader-text">Email:</label>
                                        <input type="email" name="email" placeholder="Email" class="contactus-input">
                                        <span class="contactus-focus-input"></span>
                                    </div>
                                    <div class="contactus-wrap-input">
                                        <label class="screen-reader-text">Your message:</label>
                                        <input type="text" name="message" placeholder="Your message" class="contactus-input">
                                        <span class="contactus-focus-input"></span>
                                    </div>
                                    <div class="sect6-view-btn-wrap">
                                        <button class="sect6-btn btn-primary-clr"><img src="assets/images/contactus/contact-send-icon.png"> Send</button>
                                    </div>  
                                </form>
                            </div>
                        </div>
                    </div>         
                </div>
            </div>
            <!-- <div class="circle-section-icon-wrap">
                <a href=""><img src="assets/images/circle-section-icon.png"></a>
            </div>
            <div class="right-circle-nav-wrap">       
                <ul class="right-circle-nav-icons">
                    <li>
                        <a href="#section-1"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                    <li>
                        <a href="#section-2"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                    <li>
                        <a href="#section-3"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                    <li>
                        <a href="#section-4"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                    <li>
                        <a href="#section-5"><img src="assets/images/dotted-gray.png"></a>
                    </li>
                    <li>
                        <a href="#section-6"><img src="assets/images/dotted-blue.png"></a>
                    </li>
                </ul>
            </div> -->
        </section>
        <!-- Finish Section 6 -->

    <!-- Finish Content -->

    <!-- Start Footer -->
    <footer>
        <div class="footer-container container-fluid">
            <div class="row text-left">
                <div class="logo-footer-wrap col-md-2">
                    <div class="logo-footer-sub-wrapper">
                        <img src="assets/images/company-logo.png" class="logo-footer" alt="">
                    </div>        
                </div>
                <div class="col-md-2 footer-nav-secondary">
                    <ul>
                        <li>
                            <a href="">Company</a>
                        </li>
                        <li>
                            <a href="">What we do</a>
                        </li>
                        <li>
                            <a href="">Investors</a>
                        </li>
                        <li>
                            <a href="">Resources</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 footer-nav-main">
                    <ul>
                        <li>
                            <a href="">Blogs</a>
                        </li>
                        <li>
                            <a href="">News & events</a>
                        </li>
                        <li>
                            <a href="">Careers</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 contact-details">
                    <ul>
                        <li><a href="mailto:contact@adec-innovations.com">contact@adec-innovations.com</a></li>
                        <li><a href="tel:+1.703.934.3000">+1.703.934.3000</a></li>
                        <li><a href="tel:+1.703.934.3000">+1.703.934.3740</a></li>
                        <li><a>9300 Lee Highway<br/>&nbsp;&nbsp;&nbsp;Fairfax, VA 22031 US</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="social-wrap">
                        <h6>Social</h6>
                        <div class="column">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-linkedin"></i>
                            <i class="fab fa-instagram"></i>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="page-section-nav-bottom-wrap" onclick="pageUpArrow()">
            <a href="#section-1"><img src="assets/images/page-up-arrow.png"></a>
        </div>
    </footer>
    <!-- Finish Footer -->

    <div class="float-icons">
        <ul class="left-social-icons">      
            <li>
                <a href=""><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
                <a href=""><i class="fab fa-twitter"></i></a>
            </li>
            <li>
                <a href=""><i class="fab fa-instagram"></i></a>
            </li>
            <li>
                <a href=""><i class="fab fa-linkedin"></i></a>
            </li>
        </ul>
        <div class="circle-section-icon-wrap">
            <a href=""><img src="assets/images/circle-section-icon.png"></a>
        </div>
        <div class="right-circle-nav-wrap">       
            <ul class="right-circle-nav-icons" id="sect-dot">
                <li>
                    <a href="#section-1" id="sect1-dot"><i class="fas fa-circle"></i></a>
                </li>
                <li>
                    <a href="#section-2" id="sect2-dot"><i class="fas fa-circle"></i></a>
                </li>
                <li>
                    <a href="#section-3" id="sect3-dot"><i class="fas fa-circle"></i></a>
                </li>
                <li>
                    <a href="#section-4" id="sect4-dot"><i class="fas fa-circle"></i></a>
                </li>
                <li>
                    <a href="#section-5" id="sect5-dot"><i class="fas fa-circle"></i></a>
                </li>
                <li>
                    <a href="#section-6" id="sect6-dot"><i class="fas fa-circle"></i></a>
                </li>
            </ul>
        </div>
        <div class="page-section-nav-wrap" id="page-section-nav-wrap">
            <a href="#section-2"><img src="assets/images/page-down-blue-arrow.png"></a>
        </div> 
    </div>

</div>
<!-- Finish Main -->

</body>

<script src="assets/js/app.js"></script>
<script src="assets/js/map.js" key="AIzaSyDl2XW8t9AtwsUWDHIhvDZx39J4Kr5VyN0"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl2XW8t9AtwsUWDHIhvDZx39J4Kr5VyN0&callback=initMap" key="AIzaSyDl2XW8t9AtwsUWDHIhvDZx39J4Kr5VyN0"></script>

</html>