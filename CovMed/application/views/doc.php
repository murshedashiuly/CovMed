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
                            <textarea name="user_address" class="form-control"><?php if(set_value('address')){ echo set_value('address'); }else{ echo $user[0]['address']; } ?></textarea>
                         </div>
                         <div class="error"><?=form_error('user_address')?></div>
                        </div>

                        <div class="col-md-6 column">
                           <div class="form-group">
                            <label for="exampleInputPassword1">Gender</label> <br>  
                            <select  onchange="get_age()" name="gender" class="get_gender form-control" >       
                              <option value="">Please Select Gender</option>
                              <option value="male" <?php if(set_value('gender')=='male') { echo 'selected'; } else if($user[0]['gender']=='male'){ echo 'selected'; } ?> >Male</option>
                              <option value="female" <?php if(set_value('gender')=='female') { echo 'selected'; } else if($user[0]['gender']=='female'){ echo 'selected'; } ?> >Female</option>
                            </select>
                           </div>
                           <div class="error"><?=form_error('gender')?></div>

                         <div class="form-group"> 
                            <label for="exampleInputPassword1">Ages</label> <br>  
                            <select name="ages" class="our_result form-control" >   
                              <option value="<?php echo $user[0]['ages']; ?>"><?php echo $user[0]['ages']; ?></option>
                            </select>
                           </div>
                           <div class="error"><?=form_error('ages')?></div>
                        </div>

                        <div class="col-md-6 column">

                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" value="<?php if(set_value('password')){ echo set_value('password'); }else{ echo $user[0]['password']; } ?>" id="exampleInputPassword1">
                          </div>
                          <div class="error"><?=form_error('password')?></div>

                        </div>

                        <div class="col-md-6 column">

                          <div class="form-group">
                            <label for="exampleInputPassword1">Verify Password</label>
                            <input type="password" name="verify_password"  class="form-control" value="<?php if(set_value('verify_password')){ echo set_value('verify_password'); }else{ echo $user[0]['password']; } ?>" id="exampleInputPassword1">
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
