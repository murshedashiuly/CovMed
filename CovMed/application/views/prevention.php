

       

    
    <!-- Page title -->
    <section class="page-title" style="background-image:url(<?=base_url()?>asset/images/background/3.jpg)">
        <div class="container">
            <div class="outer-box">
                <h1>Prevention</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?=base_url()?>welcome">Home</a></li>
                    <li class="active"><a href="<?=base_url()?>welcome/prevention">Prevention</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- prevention section -->
    <section class="prevention-section sp-two">
        <div class="container">
            <div class="outer-box">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!-- prevention block one -->
                        <div class="prevention-block-one">
                            <div class="inner-box">
                                <div class="icon"><img src="<?=base_url()?>asset/images/resource/k1.png" alt=""></div>
                                <h4><a href="#">avoid close contact</a></h4>
                                <div class="text">Maintain at least 1 meter (3 feet) distance between yourself & anyone who is coughing or sneezing. If you are too close, get chance to infected.</div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!-- prevention block one -->
                        <div class="prevention-block-one">
                            <div class="inner-box">
                                <div class="icon"><img src="<?=base_url()?>asset/images/resource/k2.png" alt=""></div>
                                <h4><a href="#">clean your hands often</a></h4>
                                <div class="text">Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water for at least 20 seconds.</div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!-- prevention block one -->
                        <div class="prevention-block-one">
                            <div class="inner-box">
                                <div class="icon"><img src="<?=base_url()?>asset/images/resource/k3.png" alt=""></div>
                                <h4><a href="#">stay at home</a></h4>
                                <div class="text">Anyone who has coronavirus
                                symptoms must stay at home straight
                                away.
                                Other people who live in your house
                                must stay home and away from other
                                people too.</div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!-- prevention block one -->
                        <div class="prevention-block-one">
                            <div class="inner-box">
                                <div class="icon"><img src="<?=base_url()?>asset/images/resource/k4.png" alt=""></div>
                                <h4><a href="#">cover coughs and sneezes</a></h4>
                                <div class="text">Maintain good respiratory hygiene as covering your mouth & nose with your bent elbow or tissue when cough or sneeze.</div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!-- prevention block one -->
                        <div class="prevention-block-one">
                            <div class="inner-box">
                                <div class="icon"><img src="<?=base_url()?>asset/images/resource/k5.png" alt=""></div>
                                <h4><a href="#">wear a facemask</a></h4>
                                <div class="text">Masks should be used as part of a comprehensive strategy of measures to suppress transmission and save lives.</div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!-- prevention block one -->
                        <div class="prevention-block-one">
                            <div class="inner-box">
                                <div class="icon"><img src="<?=base_url()?>asset/images/resource/k6.png" alt=""></div>
                                <h4><a href="#">clean and disinfect</a></h4>
                                <div class="text">Cleaning with a household cleaner that contains soap or detergent reduces the amount of germs on surfaces.</div>
        
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
                </div>
            </div>
        </div>
    </div>

    <section class="corona-map">
        <div class="map-content-box">
            <img src="<?=base_url()?>asset/images/background/map.jpg" alt="">
            <div class="status-block">
                <div class="status-content">
                    <h4>US America</h4>
                    <ul>
                        <li>Cases : 108,500</li>
                        <li>Deaths: 3,500</li>
                    </ul>
                </div>                        
            </div>
            <div class="status-block">
                <div class="status-content">
                    <h4>Italy</h4>
                    <ul>
                        <li>Cases : 80,500</li>
                        <li>Deaths: 12,450</li>
                    </ul>
                </div>                        
            </div>
            <div class="status-block">
                <div class="status-content">
                    <h4>Iran</h4>
                    <ul>
                        <li>Cases : 70,700</li>
                        <li>Deaths: 8,300</li>
                    </ul>
                </div>                        
            </div>
            <div class="status-block">
                <div class="status-content">
                    <h4>China</h4>
                    <ul>
                        <li>Cases : 508,500</li>
                        <li>Deaths: 4,550</li>
                    </ul>
                </div>                        
            </div>
            <div class="status-block">
                <div class="status-content">
                    <h4>Australia</h4>
                    <ul>
                        <li>Cases : 60,230</li>
                        <li>Deaths: 2,270</li>
                    </ul>
                </div>                        
            </div>
        </div>
    </section>


   