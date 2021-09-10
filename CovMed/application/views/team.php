
<style> .pagination > .active{background:pink;}
   .color{
    background-color: #780bd5;
    color: white;
   }
    
</style> 
    
    
    <!-- Page title -->
    <section class="page-title" style="background-image:url(<?=base_url()?>asset/images/background/3.jpg)">
        <div class="container">
            <div class="outer-box">
                <h1>Our Doctors</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?=base_url()?>welcome">Home</a></li>
                    <li class="active"><a href="<?=base_url()?>welcome/team">Team</a></li>
                </ul>
            </div>
        </div>
    </section>

     <!-- Our Team -->
    <section class="our-team sp-two">
        <div class="container">
                
                  <!-- search start -->
                  <div class="col-md-12"> 

                    <div class="row">

                    <div class="col-md-6">

                    <div class="form-group"> 

                        <input type="text" class="get_doctor_name form-control" name="search" onkeyup="get_doctor()" placeholder="search">

                    </div>

                    </div>

                    <div class="col-md-6">

                    <div class="form-group"> 

                        <input type="button" class="btn color" name="submit" onclick="get_doctor()" value="search">

                    </div>

                    </div>
                    </div>

                     <br> <br> <br>

                    <table class="table "> 
                   
                    <tbody class="doctor_result"></tbody>

                    </table>

             </div>
             <!-- search end -->

           <div class="row">
                <?php  foreach ($user as $user) {  ?>
                <!-- Team member --> 
                <div class="team-block-one col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <div class="image">
                          
                         <td><a href="<?=base_url()?>asset/images/<?=$user['doctor_image']?>"><img  src="<?=base_url()?>asset/images/<?=$user['doctor_image']?>" alt=""></a></td> 

                      </div>
                      
                        <div class="lower-box">
                            <h4><strong><td><?=$user['doctor_name']?></td></strong></h4>
                            <h4><td><?=$user['division']?></td></h4>
                        </div>
                        <div class="cus_r_con mb-0 text-center">
                            <div class="link-btn"><a href="<?=base_url()?>welcome/doctor_view/<?=$user['id']?>"><button style="color:#780bd5;" class="btn">View Details</button></a></div>
                        </div>
                       
                     </div>
               </div>
              <?php }?>
            </div>

            <?php echo $this->pagination->create_links(); ?> 
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

   