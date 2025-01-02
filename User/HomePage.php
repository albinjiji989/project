<?php
ob_start();
include("Head.php");
include("../Assets/Connection/connection.php");
session_start();
$userid=$_SESSION['uid'];
$selq="select user_name from tbl_user where user_id='".$userid."'";
$row=$con->query($selq);
$data=$row->fetch_assoc();
$username=$data["user_name"];
?>
<main>
    <!--? slider Area Start-->
    <div  class="slider-area position-relative">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container-fluid">
                    
                    <div class="row">
                        <div class="col-xl-10 col-lg-9 col-md-10">
                            <div class="hero__caption">
                            <h1 style="font-size: 90px;" data-animation="fadeInLeft" data-delay="0.4s">Welcome  <?php  echo $username;?></h1>

                                <span style="font-size: 60px;" data-animation="fadeInLeft" data-delay="0.4s">"Discover Your Fitness With FITQUEST"</span>


                            


                                
                                
 
<br><br><br><br>                                <a href="MyProfile.php" class="border-btn hero-btn" data-animation="fadeInLeft" data-delay="0.8s">My PROFILE</a>
                            

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
                            <img src="../Assets/Template/Main/assets/img/gallery/wallpaperflare.com_wallpaper.jpg" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3>TRAINER</h3>
                                    <p>"Finding a good trainer is as important as finding a soulmate. <br>They motivate, guide, and push you to be the best version of yourself."

</p>
                                    <a href="CategoryDisplay.php" class="border-btn">OUR TRAINER'S</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="../Assets/Template/Main/assets/img/gallery/istockphoto-1044382612-612x612.jpg" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3>NUTRITONIST</h3>
                                    <p>"Choosing a nutritionist is not just about what you eat; it's about <br>investing in your health, your future, and a better quality of life."</p>
                                    <a href="NutritionistSearch.php" class="border-btn">OUR NUTRITIONIST'S </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
    <!-- Traning categories End-->
    <!--? Team -->
    <section class="team-area fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <h2 ><br>What WE Offer</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3.5 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" >
                        <div class="cat-icon">
                            <img src="../Assets/Template/Main/assets/img/gallery/charles-gaudreault-xXofYCc3hqc-unsplash.jpg" alt="" width="350" height="300">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">  Body Building

 
 </a></h5>
                            <p>"Consistency is key in bodybuilding. Stick to your workout routine <br>and nutrition plan, even when you don't feel like it."</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3.5 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="../Assets/Template/Main/assets/img/gallery/gallery5.png" alt="" width="350" height="300">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html"> Functional Fitness</a></h5>
                            <p>"Follow functional fitness athletes and experts, read success stories,<br>and immerse yourself in content that keeps you motivated and educated."</p>
                        </div>
                    </div>
                </div>
                <br><br> 
                <div class="col-lg-3.5 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="cat-icon">
                            <img src="../Assets/Template/Main/assets/img/gallery/WhatsApp Image 2023-10-05 at 17.36.41_e7771363.jpg" alt=""  width="362" height="300">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Calisthenics</a></h5>
                            <p>"Cultivate a positive mindset. Stay focused on the progress you're<br>making and the benefits you're gaining from your calisthenics training."</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3.5 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" >
                        <div class="cat-icon">
                            <img src="../Assets/Template/Main/assets/img/gallery/contact_form.png" alt="" width="362" height="300">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Weightlifting</a></h5>
                            <p>"Find joy in the process of lifting weights and building strength.<br>Enjoy the sense of accomplishment after each successful lift"</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3.5 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" >
                        <div class="cat-icon">
                            <img src="../Assets/Template/Main/assets/img/gallery/WhatsApp Image 2023-10-07 at 12.10.53_fd141f23.jpg" alt="" width="362" height="300">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Diet Plans</a></h5>
                            <p>" Practice mindful eating by savoring each bite and <br>paying attention to your body's hunger and fullness cues."</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3.5 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" >
                        <div class="cat-icon">
                            <img src="../Assets/Template/Main/assets/img/gallery/WhatsApp Image 2023-10-07 at 12.10.52_3abf666c.jpg" alt="" width="362" height="300">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Nutrition Intake</a></h5>
                            <p>"Remember that your nutrition choices are investments in your long-term health <br>and well-being. Focus on the lifelong benefits of a nutritious diet."</p>
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
                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/neww.jpg);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                
                            <img width="100%" src="../Assets/Template/Main/assets/img/gallery/neww.jpg" alt="" >

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/WhatsApp Image 2023-10-05 at 17.36.39_e78a79e8.jpg);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                            <img src="../Assets/Template/Main/assets/img/gallery/peakpx.jpg" width="100%"alt="" >

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/new1.jpg);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                            <img  src="../Assets/Template/Main/assets/img/gallery/new1.jpg"width="100%" alt="">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/new2.jpg);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                            <img src="../Assets/Template/Main/assets/img/gallery/WhatsApp Image 2023-10-05 at 17.51.07_49b86c77.jpg" width="100%"alt="">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/WhatsApp Image 2023-10-05 at 17.49.57_4989084c.jpg);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                            <img src="../Assets/Template/Main/assets/img/gallery/WhatsApp Image 2023-10-05 at 17.49.57_4989084c.jpg" width="100%"alt="" >

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/WhatsApp Image 2023-10-05 at 17.49.54_a331940b.jpg);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                            <img src="../Assets/Template/Main/assets/img/gallery/WhatsApp Image 2023-10-05 at 17.49.54_a331940b.jpg"width="100%" alt="" >
 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
  
    <!--? About Area-2 Start -->
    <section class="about-area2 fix pb-padding pt-50 pb-80">
        <div class="support-wrapper align-items-center">
            <div class="right-content2">
                <!-- img -->
                <div class="right-img wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                    <img src="../Assets/Template/Main/assets/img/gallery/about.png" alt="">
                </div>
            </div>
            <div class="left-content2">
                <!-- section tittle -->
                <div class="section-tittle2 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="front-text">
                        <h2 class="">About Us</h2>
                        <p>At Gym and Fitness, we believe that fitness and wellbeing are the cornerstones of a full and vibrant life.
                        Gym and Fitness is powered by a vibrant extraordinary individuals - our success springs from their collective efforts!

Our team, a diverse mix of exceptional talent, work tirelessly to ensure your experience is unparalleled. They're the gears behind our operations - from sales, marketing and e-commerce, customer service, warehousing, finance, human resources, to R&D and management.

If you're on the lookout for a growth-fostering role in an empowering, inclusive environment that values great work, than you should get in touch!
                        </p>
                        <p class="mb-40">We know that building a positive culture is incredibly important. We believe in encouraging, supporting, challenging, learning and growing to be the best! Our flexible working solutions, gym rebates and educational opportunities create a positive work/life balance for all our employees.

We believe in giving back and offering time, money and products to volunteer services and community organisations. We’re committed to improving individuals' health, fitness, and well-being by supporting global and local charities, local sports teams, and events.</p>
                     
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
                        <h2>THIS MONTHS</h2>
                    </div>
                </div>
            </div>
           
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="../Assets/Template/Main/assets/img/gallery/blog1.png" alt="">
                            </div>
                            <div class="blog-cap">
                                <span>
<?php
                       $selq = "WITH MaxUserRatings AS (
                        SELECT trainer_id, COUNT(*) AS max_user_ratings
                        FROM tbl_review
                        WHERE user_rating IN (4, 5)
                        GROUP BY trainer_id
                        HAVING COUNT(*) = (
                          SELECT MAX(rating_count)
                          FROM (
                            SELECT COUNT(*) AS rating_count, trainer_id
                            FROM tbl_review
                            WHERE user_rating IN (4, 5)
                            GROUP BY trainer_id
                          ) AS subquery
                        )
                      )
                      
                      SELECT t1.trainer_name
                      FROM tbl_trainer AS t1
                      LEFT JOIN MaxUserRatings AS m
                      ON t1.trainer_id = m.trainer_id
                      ORDER BY
                        CASE
                          WHEN m.max_user_ratings IS NOT NULL THEN 1
                          ELSE 0
                        END DESC,
                        m.max_user_ratings DESC
                      LIMIT 1";
               
               $result = $con->query($selq);
               $row = $result->fetch_assoc();
                   $randomName = $row["trainer_name"];
                   ?>
                         <div class="front-text">
                        <h2><font color="white"><?php echo $randomName ;?></font></h2>
</div>

            
            </span>
                                <h3><font color="white">BEST RATED TRAINER</font></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".6s">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="../Assets/Template/Main/assets/img/gallery/blog2.png" alt="">
                            </div>
                            <div class="blog-cap">
                                <span><?php



                               $selq="WITH MaxUserReviews AS (
                                SELECT nutrition_id, COUNT(*) AS max_user_reviews
                                FROM tbl_review
                                WHERE user_rating IN (4, 5)
                                GROUP BY nutrition_id
                                HAVING COUNT(*) = (
                                  SELECT MAX(review_count)
                                  FROM (
                                    SELECT COUNT(*) AS review_count, nutrition_id
                                    FROM tbl_review
                                    WHERE user_rating IN (4, 5)
                                    GROUP BY nutrition_id
                                  ) AS subquery
                                )
                              )
                              
                              SELECT n1.nutrition_name
                              FROM tbl_nutrition AS n1
                              LEFT JOIN MaxUserReviews AS m
                              ON n1.nutrition_id = m.nutrition_id
                              ORDER BY
                                CASE
                                  WHEN m.max_user_reviews IS NOT NULL THEN 1
                                  ELSE 0
                                END DESC,
                                m.max_user_reviews DESC
                              LIMIT 1";
                              
                               
                       
                       $result = $con->query($selq);
                       
                      
                           $row = $result->fetch_assoc();
                           $randomName = $row["nutrition_name"];
                           ?>
                                 <div class="front-text">
                                <h2><font color="white"><?php echo $randomName;?></font></h2>
                       
                                 
</div>
                                
                            </span>
                                <h3><font color="white">BEST RATED NUTRITIONIST</font></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
    <!--? video_start -->
    <div class="video-area section-bg2 d-flex align-items-center"  data-background="../Assets/Template/Main/assets/img/gallery/video-bg.png">
        <div class="container">
            <div class="video-wrap position-relative">
                <div class="video-icon" >
                    <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=aAKeGKcqhvY"><i class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
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
                            <p>INDIA</p>
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
                            <p>(90) 277 278 2566</p>
                            <p>  (78) 267 256 2578</p>
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