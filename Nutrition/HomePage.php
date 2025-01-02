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
                                <span data-animation="fadeInLeft" data-delay="0.1s">Welcome <?php  echo $_SESSION["nname"]?></span>
                                <h1 data-animation="fadeInLeft" data-delay="0.4s">Nutritionist</h1>
                               
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
                            <img src="../Assets/Template/Main/assets/img/gallery/c12.jpg" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3>MY PROFILE</h3>
                                   
                                    <a href="MyProfile.php" class="border-btn">VIEW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="../Assets/Template/Main/assets/img/gallery/c13.png" alt="">
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
            <div class="row">
                <div class="col-lg-3.6 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" >
                        <div class="cat-icon">
                            <img src="../Assets/Template/Main/assets/img/gallery/c4.jpg"  width="362" height="300" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a>SOCIAL RESPONSIBILITY</a></h5>
                            <p>Understand the needs and requirements of your clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3.6 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="../Assets/Template/Main/assets/img/gallery/c5.jpg"  width="362" height="300" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a>INNOVATION</a></h5>
                            <p>Adding more value to the customer's relationship. </p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-lg-3.6 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="../Assets/Template/Main/assets/img/gallery/c3.jpg"  width="362" height="300" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a> CUSTOMER FOCUS</a></h5>
                            <p>It is a strategy that puts your customers' needs first.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3.6 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="../Assets/Template/Main/assets/img/gallery/c6.jpg" width="362" height="300"alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a>INTEGRITY</a></h5>
                            <p>You have an obligation to not only tell the truth at every
                             turn but to also not hold back information that could be considered useful to customers.</p>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </section>
    <!-- Services End -->
    <!--? Gallery Area Start -->
    <div class="gallery-area section-padding30 ">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                            <img src="../Assets/Template/Main/assets/img/gallery/team9.jpg" width="100%" height="100%"alt="">  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery5.png);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                            <img src="../Assets/Template/Main/assets/img/gallery/team10.jpg" width="100%" height="100%"alt="">  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery6.png);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                            <img src="../Assets/Template/Main/assets/img/gallery/team5.png" width="100%" height="100%"alt=""> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->       
    <!-- Gallery Area End -->
  
    <!--? About Area-2 Start -->
    <section class="about-area2 fix pb-padding pt-50 pb-80">
        <div class="support-wrapper align-items-center">
           
            <div class="center-content2">
                <!-- section tittle -->
                <div class="section-tittle2 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="front-text" align="center">
                        <h2 class="">About Nutritionist</h2>
                        <p >Nutritionist is a healthcare professional who specializes in the field of nutrition.
                             These experts play a crucial role in promoting healthy eating habits and overall well-being.
                             Nutritionists assess individuals' dietary needs, design personalized meal plans,
                              and offer guidance on making nutritious food choices.</p>

                        <p class="mb-40">They are trained to understand the science of nutrition, including the role of nutrients, vitamins,
                                and minerals in the body.
                             Nutritionists often work in various settings, such as hospitals, clinics, fitness centers, and private practices,
                              helping clients achieve their health and wellness goals through proper diet and nutrition.
                             Their expertise is instrumental in preventing and managing various health conditions, and they serve as valuable resources for
                              individuals seeking to optimize their nutritional intake.</p>
                        <a href="NutritionIntro.php" class="border-btn">Booked users</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->
    <!--? Blog Area Start -->
    <section class="home-blog-area pt-10 pb-50">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-9 col-sm-10">
                    <div class="section-tittle text-center mb-100 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                        <h2>This Month's</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="../Assets/Template/Main/assets/img/gallery/blog3.jpg" alt="">
                            </div>
                            <div class="blog-cap">
                                <span>BEST TRAINER</span>
                                <h3><a>Daniel Ricciardo</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".6s">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="../Assets/Template/Main/assets/img/gallery/blog5.jpg" alt="">
                            </div>
                            <div class="blog-cap">
                                <span>BEST NUTRITIONIST</span>
                                <h3><a>Max Verstappen</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
 
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
                            <p>MUVATTUPUZHA,KERALA,INDIA</p>
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
                            <p>8089602626</p>
                            <p>9947286700</p>
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
                            <p>fitquests@gmail.com</p>
                            
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