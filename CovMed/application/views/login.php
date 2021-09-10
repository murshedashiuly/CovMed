

    

    <!-- Contact section -->
    <section class="contact-section sp-two">
        <div class="rotate-image">
            <img class="rotate-me" src="<?=base_url()?>asset/images/resource/testi.png" alt="">
        </div>
        <div class="container">
          <div class="default-form-area">
                <div class="sec-title centered mb-20">
                    <h1>Login Form</h1>
                </div>

                <?=$this->session->flashdata('success')?>
     
                <form  class="contact-form" action="" method="post">
                    <div class="row clearfix">
                        <div class="col-md-6 column">
                          
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" class="form-control" value="<?=set_value('email')?>" placeholder="Enter Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="error"><?=form_error('email')?></div>
                          <!-- <div class="form-group">
                            <label for="exampleInputEmail1">Mobile</label>
                            <input type="text" name="mobile" class="form-control" value="<?=set_value('mobile')?>" placeholder="Enter Mobile" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="error"><?=form_error('mobile')?></div> -->

                        </div>
                        <div class="col-md-6 column">

                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" value="<?=set_value('password')?>" placeholder="Enter Password😊" id="exampleInputPassword1">
                          </div>
                          <div class="error"><?=form_error('password')?></div>
                        </div>                                             
                    </div>
                    <div class="contact-section-btn center">
                        <div class="form-group style-two">
                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                            <button class="theme-btn btn-style-two" type="submit" data-loading-text="Please wait...">Login</button>
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


  