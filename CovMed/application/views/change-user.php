
<style>
	.pad{
		padding:20px;
	}
</style>
    

    <!-- Contact section -->
    <section class="contact-section sp-two">
        <div class="rotate-image">
            <img class="rotate-me" src="<?=base_url()?>asset/images/resource/testi.png" alt="">
        </div>
        <div class="container">
             <div class="default-form-area">
                <div class="sec-title centered mb-20">
                    <h1>Sign Up Form</h1>
                </div>

                <?=$this->session->flashdata('success')?>
     
                 <form  class="contact-form" action="#" method="post">
                    <div class="row clearfix">
                        <div class="col-md-6 column"> 

                          <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" class="form-control" value="<?php if(set_value('name')){ echo set_value('name'); }else{ echo $user[0]['name']; } ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="error"><?=form_error('name')?></div>


                          <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" class="form-control"  value="<?php if(set_value('email')){ echo set_value('email'); }else{ echo $user[0]['email']; } ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="error"><?=form_error('email')?></div>

                        </div>

                        <div class="col-md-6 column">

                          <div class="form-group">
                            <label for="exampleInputEmail1">Mobile</label>
                            <input type="text" name="mobile" class="form-control" value="<?php if(set_value('mobile')){ echo set_value('mobile'); }else{ echo $user[0]['mobile']; } ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="error"><?=form_error('mobile')?></div>

                           <div class="form-group">
                            <label for="exampleInputEmail1">Blood Group</label>
                            <input type="text" name="blood_group" class="form-control" value="<?php if(set_value('blood_group')){ echo set_value('blood_group'); }else{ echo $user[0]['blood_group']; } ?>" id="exampleInputEmail1" aria-describedby="emailHelp">  
                            </div>
                            <div class="error"><?=form_error('blood_group')?></div>
                         
                         </div>

                        <div class="col-md-6 column">
                          
                        <div class="form-group">
				            <label for="exampleInputEmail1">Address</label>
				            <textarea name="user_address" class="form-control"><?php if(set_value('user_address')){ echo set_value('user_address'); }else{ echo $user[0]['user_address']; } ?></textarea>            
					        </div>
					        <div class="error"><?=form_error('user_address')?></div>
                        </div>

                       <div class="col-md-6 column">
                          <div class="form-group">
							<label for="exampleInputPassword1">Gender</label> <br>	
							<select  onchange="get_age()" name="gender" class="get_gender" >				
								<option  value="">---Please Select Gender---</option>
								<option value="male" <?php if(set_value('gender')=='male') { echo 'selected'; } else if($user[0]['gender']=='male'){ echo 'selected'; } ?> >Male</option>

								<option value="female" <?php if(set_value('gender')=='female') { echo 'selected'; } else if($user[0]['gender']=='female'){ echo 'selected'; } ?> >Female</option>
							</select>
						 </div>
						 <div class="error"><?=form_error('gender')?></div>

						 <div class="form-group">	
							<label for="exampleInputPassword1">Ages</label> <br>	
							<select name="ages" class="our_result" >		
								<option value="<?php echo $user[0]['ages']; ?>"><?php echo $user[0]['ages']; ?></option>
							</select>
						 </div>
						 <div class="error"><?=form_error('ages')?></div>
                        </div>


                        <div class="col-md-6 column">

                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="text" name="password" class="form-control" value="<?php if(set_value('password')){ echo set_value('password'); }else{ echo $user[0]['password']; } ?>" id="exampleInputPassword1">
                          </div>
                          <div class="error"><?=form_error('password')?></div>

                        </div>

                        <div class="col-md-6 column">

                          <div class="form-group">
                            <label for="exampleInputPassword1">Verify Password</label>
                            <input type="text" name="verify_password"  class="form-control" value="<?php if(set_value('verify_password')){ echo set_value('verify_password'); }else{ echo $user[0]['password']; } ?>" id="exampleInputPassword1">
                          </div>
                         <div class="error"><?=form_error('verify_password')?></div>

                        </div>
                                                                  
                    </div>
                    <div class="contact-section-btn center">
                        <div class="form-group style-two">
                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                            <button class="theme-btn btn-style-two" type="submit" data-loading-text="Please wait...">Change</button>
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


    