<?php
ob_start();
session_start();
include("Head.php");
?>
<main>
    <!--? slider Area Start-->
    <div class="slider-area position-relative">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-10">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay="0.1s">Welcome Trainer</span>
                                <h1 data-animation="fadeInLeft" data-delay="0.4s"> <?php  echo $_SESSION["tname"]?></h1>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- Traning categories Start -->
    <section class="traning-categories black-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="../Assets/Template/Main/assets/img/gallery/cat1.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3>PROFILE</h3>
                                    <a href="MyProfile.php" class="border-btn">VIEW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="../Assets/Template/Main/assets/img/gallery/cat2.png" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3>MY CLIENTS</h3>
                                    <a href="BookedUser.php" class="btn">VIEW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Traning categories End-->
    <!--? Team -->
    <section class="team-area fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <h2 >CODE OF CONDUCT</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3.6 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" >
                        <div class="cat-icon">
                            <img src="../Assets/Template/Main/assets/img/gallery/pro.jpg"  width="362" height="300" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a>PROFESSIONALISM</a></h5>
                            <p>Maintain high level Of professionalism in all interaction with Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3.6 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="../Assets/Template/Main/assets/img/gallery/confi.jpg"  width="362" height="300" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a>CLIENT CONFIDENTIALITY</a></h5>
                            <p>Respect the privacy and confidentiality of client information and progress </p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-lg-3.6 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="../Assets/Template/Main/assets/img/gallery/boundaries.jpg"  width="362" height="300" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a>PERSONAL BOUNDARIES</a></h5>
                            <p>Maintain appropriate boundaries with clients to avoid any form of unethical behaviour </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3.6 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="../Assets/Template/Main/assets/img/gallery/centeredapproach.jpg" width="362" height="300"alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a>CLIENT-CENTERED APPROACH</a></h5>
                            <p>Tailor fitness programs to meet individual client needs, goals, and limitations</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-lg-3.6 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="../Assets/Template/Main/assets/img/gallery/culture.jpg"  width="362" height="300" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a>RESPECT AND CULTURAL SENSITIVITY</a></h5>
                            <p>Treat all clients with respect and cultural sensitivity, regardless of their background or identity</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3.6 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="cat-icon">
                            <img src="../Assets/Template/Main/assets/img/gallery/communication1.jpg"  width="362" height="300" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a>COMMUNICATION</a></h5>
                            <p>Foster open and honest communication with clients, addressing their concerns and questions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->
    <!--? Gallery Area Start -->
    <div class="gallery-area section-padding30 ">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        
                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                            <img src="../Assets/Template/Main/assets/img/gallery/tgallery1.jpg" width="100%" height="100%" alt="">
                        </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                            <img src="../Assets/Template/Main/assets/img/gallery/tgalley3.jpg" width="100%" height="100%" alt="">    
                         </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                            <img src="../Assets/Template/Main/assets/img/gallery/tgallery2.jpg" width="100%" height="100%" alt="">    
                         </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
  
    <!-- About Area End -->
    <!--? Blog Area Start -->
    <section class="home-blog-area pt-10 pb-50">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-9 col-sm-10">
                    <div class="section-tittle text-center mb-100 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                        <h2>THIS MONTH'S</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="../Assets/Template/Main/assets/img/gallery/besttrain.jpg" width="558" height="379" alt="">
                            </div>
                            <div class="blog-cap">
                                <span>BEST TRAINER</span>
                                <h3><a>FAHAD</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".6s">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="../Assets/Template/Main/assets/img/gallery/bestnutri.jpg" width="558" height="379" alt="">
                            </div>
                            <div class="blog-cap">
                                <span>BEST NUTRITIONIST</span>
                                <h3><a>AMAN</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
    <!--? video_start -->
    
    <!-- video_end -->
    <!-- ? services-area -->
    <section class="services-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="features-icon">
                            <img src="../Assets/Template/Main/assets/img/icon/icon1.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Location</h3>
                            <p>Muvattupuzha,Kerala,India</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="features-icon">
                            <img src="../Assets/Template/Main/assets/img/icon/icon2.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Phone</h3>
                            <p>90 277 278 25</p>
                            <p> 78 267 256 25</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                        <div class="features-icon">
                            <img src="../Assets/Template/Main/assets/img/icon/icon3.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Email</h3>
                            <p>jacson767@gmail.com</p>
                            <p>contact56@zacsion.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include("Foot.php");
ob_flush();
?>