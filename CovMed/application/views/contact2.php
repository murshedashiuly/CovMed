

       
    
    <!-- Page title -->
    <section class="page-title" style="background-image:url(<?=base_url()?>asset/images/background/3.jpg)">
        <div class="container">
            <div class="outer-box">
                <h1>Contact Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?=base_url()?>welcome">Home</a></li>
                    <li class="active"><a href="<?=base_url()?>welcome/contact">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </section>

    

    <!-- Contact section -->
    <section class="contact-section sp-two">
        <div class="rotate-image">
            <img class="rotate-me" src="<?=base_url()?>asset/images/resource/testi.png" alt="">
        </div>
        <div class="container">
            <div class="contact-info">
                <div class="sec-title centered">
                    <h4>Contact</h4>
                    <h1>Get In Touch</h1>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-info-block">
                            <h5>Address</h5>
                            <div class="text">Patantula,Sylhet</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-info-block">
                            <h5>Email</h5>
                            <div class="text"><a href="mailto:shiulycse@gmail.com">shiulycse@gmail.com</a></div
                                >
                            <div class="text"><a href="mailto:chowdhurysadia771@gmail.com">chowdhurysadia771@gmail.com</a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-info-block">
                            <h5>Phone</h5>
                            <div class="text"><a href="01708042742">01708042742</a></div>
                            <div class="text"><a href="01727456779">01727456779</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <br> <br> <br> <br>
             <div class="default-form-area">
                <div class="sec-title centered mb-20">
                    <h1>Contact Form</h1>
                </div>
                <?=$this->session->flashdata('success')?>
                <form class="contact-form" action="" method="post">
                    <div class="row clearfix">
                           <div class="col-md-12 column">
                               <div class="form-group">                              
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control" value="<?=set_value('email')
                                ?>" placeholder="Enter Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                           <div class="error"><?=form_error('email')?></div>
                          </div>
                         
                          <div class="col-md-12 column">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Subject</label>
                                <input type="text" name="subject" class="form-control" value="<?=set_value('subject')
                                ?>" placeholder="Enter Subject" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="error"><?=form_error('subject')?></div>
                           </div>
                        <div class="col-md-12 column">
                             <div class="form-group">
                            <label for="exampleInputEmail1">Message</label>
                            <textarea name="msg" class="form-control" placeholder="Message..."><?=set_value('msg')?></textarea>
                         </div>
                         <div class="error"><?=form_error('msg')?></div>
                        </div>                                            
                    </div>
                    <div class="contact-section-btn center">
                        <div class="form-group style-two">
                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                            <button class="theme-btn btn-style-two" type="submit" data-loading-text="Please wait...">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End form -->
            </div>
    </section>


   


    <!-- map section -->
    <section class="map-section">
        <div class="home-google-map">
            <div 
                class="google-map" 
                id="contact-google-map" 
                data-map-lat="40.714060" 
                data-map-lng="-74.013334" 
                data-icon-path="<?=base_url()?>asset/images/icons/map-marker.png"
                data-map-title="Chester"
                data-map-zoom="11" >
            </div>
        </div>  
    </section>
    <!-- Call to Action -->
    <div class="call-to-action" style="background-image:url(<?=base_url()?>asset/images/background/bg2.jpg);">
        <div class="container">
            <div class="wrapper-box">
                <h1>Contact us immediately if you like <br>our website</h1>
                <div class="read-more"><a href="<?=base_url()?>welcome/contact" class="theme-btn btn-style-five">Contact Us</a></div>
            </div>
        </div>
    </div>
    
