
       
    <!-- Page title -->
    <section class="page-title" style="background-image:url(<?=base_url()?>asset/images/background/3.jpg)">
        <div class="container">
            <div class="outer-box">
                <h1>About Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?=base_url()?>welcome">Home</a></li>
                    <li class="active"><a href="<?=base_url()?>welcome/about">About Us</a></li>
                </ul>
            </div>
        </div>
    </section>
    
    <!-- About -->
    <section class="about-section sp-two">
        <div class="rotate-image-2">
            <img class="rotate-me" src="<?=base_url()?>asset/images/resource/rt4.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content-block">
                        <h3>We are providing Covid Helpline by some useful features through the <span>Coronavirus</span></h3>
                        <div class="text mb-40">
                            <p>Our Website provides Safety Items of Covid-19 you can order easily & keep yourself safe in this pandemic, Information about affected area in Bangladesh is also visible anyone can go through the data and one can also find the services about the coronavirus response in our local area.</p>
                            <p>Our Top priority is to guide our visitors with proper guideline.Our Website provides Safety Items of Covid-19 you can order easily & keep yourself safe in this pandemic, Information about affected area in Bangladesh is also visible anyone can go through the data and one can also find the services about the coronavirus response in our local area.</p>
                        </div>
                        <div class="link-btn mb-30">
                             <?php  if(empty($this->session->userdata('username'))){ ?>
                                          <a href="<?=base_url()?>welcome/contact1" class="theme-btn btn-style-two small-btn">Contact Us</a>
                                        <?php }
                                    else{?>
                                         <a href="<?=base_url()?>user/contact2" class="theme-btn btn-style-two small-btn">Contact</a>

                                    <?php } ?>
                    </div>                        
                </div>
                <div class="col-lg-6">
                    <div class="about-image-block about-img">
                        <div class="inner-box">
                            <div class="image wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
                                <img class="float-bob-y" src="<?=base_url()?>asset/images/resource/about2.jpg" alt="about">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <div class="call-to-action" style="background-image:url(<?=base_url()?>asset/images/background/bg2.jpg);">
        <div class="container">
            <div class="wrapper-box">
                <h1>Contact us immediately if there are signs <br>of the Coronavirus</h1>
                <div class="read-more">
                    <?php  if(empty($this->session->userdata('username'))){ ?>
                                          <a href="<?=base_url()?>welcome/contact1" class="theme-btn btn-style-two small-btn">Contact Us</a>
                                        <?php }
                                    else{?>
                                         <a href="<?=base_url()?>user/contact2" class="theme-btn btn-style-two small-btn">Contact</a>

                                    <?php } ?>
                    <!-- <a href="contact.html" class="theme-btn btn-style-five">Contact Us</a> -->
                </div>
            </div>
        </div>
    </div>

     <!--Testimonial Section-->
    <section class="testimonial-section-one">
        <div class="container">
            <div class="testimonial-outer">
                <!--Client Testimonial Carousel-->
                <div class="single-item-carousel owl-carousel owl-theme">
                
                    <!--Testimonial Block One-->
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="image"><img src="<?=base_url()?>asset/images/resource/au1.png" alt=""></div>
                            <div class="text">This is exactly what I'm looking for. Such a great website. keep it up..</div>
                        </div>
                        <div class="author-content">
                            <h4>Albert Foysal</h4>
                            <div class="designation">Happy Patient</div>
                        </div>
                    </div>
                    
                    <!--Testimonial Block One-->
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="image"><img src="<?=base_url()?>asset/images/resource/au2.png" alt=""></div>
                            <div class="text">This a very good website very easy to use. The product are also good quality. I'm very satisfied with the service.</div>
                        </div>
                        <div class="author-content">
                            <h4>Willum Jamil</h4>
                            <div class="designation">Happy Patient</div>
                        </div>
                    </div>
                    
                    <!--Testimonial Block One-->
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="image"><img src="<?=base_url()?>asset/images/resource/au3.png" alt=""></div>
                            <div class="text">This is exactly what I'm looking for. Such a great website. keep it up.</div>
                        </div>
                        <div class="author-content">
                            <h4>Robert Hasib</h4>
                            <div class="designation">Happy Patient</div>
                        </div>
                    </div>
                    
                </div>
            </div>  
        </div>
    </section>
    <!--End Testimonial Section-->

    <!-- Parallax section -->
    <section class="parallax-section" style="background-image:url(<?=base_url()?>asset/images/background/4.jpg);">
        <div class="rotate-image">
            <img class="rotate-me" src="<?=base_url()?>asset/images/resource/rt4.png" alt="">
        </div>
        <div class="container">
            <h1>It is a virus that shows the disease within 14 days of entering the body. Contact us immediately if Coronavirus is detected</h1>
        </div>
    </section>

   