<style> 
   .cus_link1{
   margin-left: 70px;
   }
   .cus_link2{
    margin-right: 90px;
   }
    .head_img1{
    margin-top: -49px;
    float:left;
     padding:20px;
   }
   .head_title1{
    font-size: 29px !important;
    font-weight: 700 !important;
    margin-top: -45px !important;
    margin-left: 57px !important;
   }
   .fav1{
    width: 50px;
   }

</style> 

  <!--Main Footer-->
    <footer class="main-footer" style="background-image:url(<?=base_url()?>asset/images/background/bg1.jpg);">
        <div class="border-img">
            <img src="<?=base_url()?>asset/images/resource/footer-b.png" alt="">
        </div>
        <div class="rotate-image">
            <img class="rotate-me" src="<?=base_url()?>asset/images/resource/rt4.png" alt="">
        </div>
        <div class="container">
            <div class="row clearfix">

                <!--Big Column-->
                <div class="big-column col-lg-6 col-md-12">
                    <div class="row clearfix">
                    
                        <!--Footer Column-->
                        <div class="footer-column col-lg-8 col-md-6">
                            <div class="footer-widget logo-widget">
                                <div class="footer-logo"><a class="head_img1" href="<?=base_url()?>welcome"><img src="<?=base_url()?>asset/images/favicon.png" class="fav1" alt="" title=""><h2 class="head_title1">COV<strong>MED</strong></h2></a></div>
                                <div class="widget-content">
                                    <div class="text">Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
                                    </div>
                                    
                                    <ul class="social-icon-one">
                                        <li><a href="https://www.facebook.com/"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="https://twitter.com/"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="https://www.linkedin.com/feed/"><span class="fab fa-linkedin-in"></span></a></li>
                                        <li><a href="https://www.pinterest.com/"><span class="fab fa-pinterest"></span></a></li>
                                        <li><a href="https://www.skype.com/en/"><span class="fab fa-skype"></span></a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-4 col-md-6">
                            <div class="footer-widget links-widget">
                                <h2>Quick links</h2>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="<?=base_url()?>welcome/about">About</a></li>
                                        <li><a href="<?=base_url()?>welcome/about">Services</a></li>
                                        <li><a href="<?=base_url()?>welcome/blog_2">Blog</a></li>
                                        <li><a href="<?=base_url()?>welcome/prevention">Prevention</a></li>
                                        <li>
                                            <?php  if(empty($this->session->userdata('username'))){ ?>
                                          <a href="<?=base_url()?>welcome/contact1">Contact </a>
                                        <?php }
                                    else{?>
                                         <a href="<?=base_url()?>user/contact2">Contact </a>

                                    <?php } ?>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Big Column-->
                <div class="big-column col-lg-6 col-md-12">
                    <div class="row clearfix">
                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6">
                            <h2>Latest News</h2>
                            <!--Latest News-->
                            <div class="posts-widget">
                                <div class="posts">
                                    <div class="post">
                                        <figure class="post-thumb"><img src="<?=base_url()?>asset/images/resource/flp1.jpg" alt=""></figure>
                                        <div class="desc-text"><a href="#">Use masks to avoid Coronaviruses</a></div>
                                        <div class="time"><?php echo date('y-m-d');?></div>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><img src="<?=base_url()?>asset/images/resource/flp2.jpg" alt=""></figure>
                                        <div class="desc-text"><a href="#">Do not delay if the symptoms appear </a></div>
                                        <div class="time"><?php echo date('y-m-d');?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6">
                            <h2>Instagram</h2>
                            
                            <div class="footer-widget gallery-widget">
                                <div class="row clearfix">
                                    <figure class="image"><a href="<?=base_url()?>asset/images/resource/fg1.jpg" data-fancybox-group="instagram-gallery" class="lightbox-image" title="Caption Here"><img src="<?=base_url()?>asset/images/resource/fg1.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="<?=base_url()?>asset/images/resource/fg2.jpg" data-fancybox-group="instagram-gallery" class="lightbox-image" title="Caption Here"><img src="<?=base_url()?>asset/images/resource/fg2.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="<?=base_url()?>asset/images/resource/fg3.jpg" data-fancybox-group="instagram-gallery" class="lightbox-image" title="Caption Here"><img src="<?=base_url()?>asset/images/resource/fg3.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="<?=base_url()?>asset/images/resource/fg4.jpg" data-fancybox-group="instagram-gallery" class="lightbox-image" title="Caption Here"><img src="<?=base_url()?>asset/images/resource/fg4.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="<?=base_url()?>asset/images/resource/fg5.jpg" data-fancybox-group="instagram-gallery" class="lightbox-image" title="Caption Here"><img src="<?=base_url()?>asset/images/resource/fg5.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="<?=base_url()?>asset/images/resource/fg6.jpg" data-fancybox-group="instagram-gallery" class="lightbox-image" title="Caption Here"><img src="<?=base_url()?>asset/images/resource/fg6.jpg" alt=""></a></figure>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                    
            </div>

        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="copyright">&copy; 2021 All Rights Reserved.</div>
        </div>
    </footer>
    <!--End Main Footer-->

    <!-- start appointment popup-->
    <div class="modal fade appointment" id="appointment" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="appointment-inner">
                    <h5>To order our product please login to your account if you haven't any account please sign up fast</h5>
                        <div class="row">
                        <div class="col-lg-6">
                          <div class="text-center">
                            <div class="link-btn cus_link1"><a href="<?=base_url()?>sign/signup" class="theme-btn btn-style-two" data-toggle="" data-target="">Sign Up</a></div>
                          </div>
                        </div>
                            <div class="col-lg-6">
                        <div class="text-center">
                            <div class="link-btn cus_link2"><a href="<?=base_url()?>log" class="theme-btn btn-style-two" data-toggle="" data-target="">Login</a></div>
                        </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div> 

    <!-- end appointment popup-->

     <!-- start appointment popup-->
    <div class="modal fade appointment" id="appointment2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="appointment-inner">
                    <h5>To Message us please login to your account if you haven't any account please sign up fast</h5>
                        <div class="row">
                        <div class="col-lg-6">
                          <div class="text-center">
                            <div class="link-btn cus_link1"><a href="<?=base_url()?>sign/signup" class="theme-btn btn-style-two" data-toggle="" data-target="">Sign Up</a></div>
                          </div>
                        </div>
                            <div class="col-lg-6">
                        <div class="text-center">
                            <div class="link-btn cus_link2"><a href="<?=base_url()?>log" class="theme-btn btn-style-two" data-toggle="" data-target="">Login</a></div>
                        </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div> 

    <!-- end appointment popup-->


   

</div>
<!--End pagewrapper--> 

<!-- Scroll Top Button -->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-angle-up"></span>
</button>
    

<!-- jequery plugins -->

<script src="<?=base_url()?>asset/js/jquery.js"></script>
<script src="<?=base_url()?>asset/js/popover.js"></script>
<script src="<?=base_url()?>asset/js/bootstrap.min.js"></script>

<script src="<?=base_url()?>asset/js/wow.js"></script>
<script src="<?=base_url()?>asset/js/owl.js"></script>
<script src="<?=base_url()?>asset/js/validate.js"></script>
<script src="<?=base_url()?>asset/js/mixitup.js"></script>
<script src="<?=base_url()?>asset/js/isotope.js"></script>
<script src="<?=base_url()?>asset/js/appear.js"></script>
<script src="<?=base_url()?>asset/js/jquery.fancybox.js"></script>
<script src="<?=base_url()?>asset/js/jquery.background-video.js"></script>
<script src="<?=base_url()?>asset/js/jquery.mCustomScrollbar.min.js"></script>

<script src="<?=base_url()?>asset/js/script.js"></script>

 <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
        
        function get_user(){

            //alert('HI!!');

            var user_name=$('.get_user_name').val();

                //alert(user_name);

            var page='<?=base_url()?>welcome/get_user/'+user_name;

            //alert(page );

            $.get( page, function( data ) {

            //alert(data );
              $( ".our_result" ).html( data );
             // alert( "Load was performed." );
            });
        }

    </script>

    <script type="text/javascript">
        
        function get_age(){

            //alert('HI!!');

            var gender=$('.get_gender').val();

                //alert(gender);

            var page='<?=base_url()?>Sign/get_ages/'+gender;

            $.get( page, function( data ) {

            //alert(data );
              $( ".our_result" ).html( data );
             // alert( "Load was performed." );
            });
        }

    </script>

    <script type="text/javascript">
        
        function get_doctor(){

            //alert('HI!!');

            var user_name=$('.get_doctor_name').val();

                //alert(user_name);

            var page='<?=base_url()?>welcome/get_doctor/'+user_name;

            //alert(page );

            $.get( page, function( data ) {

            //alert(data );
              $( ".doctor_result" ).html( data );
             // alert( "Load was performed." );
            });
        }

    </script>

    <script type="text/javascript">
        
        function get_div(){

            //alert('HI!!');

            var user_name=$('.get_div_name').val();

                //alert(user_name);

            var page='<?=base_url()?>welcome/get_div/'+user_name;

            //alert(page );

            $.get( page, function( data ) {

            //alert(data );
              $( ".our_result" ).html( data );
             // alert( "Load was performed." );
            });
        }

    </script>
    <script type="text/javascript">
        
        function get_vaccine(){

            //alert('HI!!');

            var user_name=$('.get_vaccine_name').val();

                //alert(user_name);

            var page='<?=base_url()?>welcome/get_vaccine/'+user_name;

            //alert(page );

            $.get( page, function( data ) {

            //alert(data );
              $( ".our_result" ).html( data );
             // alert( "Load was performed." );
            });
        }

    </script>

     <script type="text/javascript">
        
        function get_hospital(){

            //alert('HI!!');

            var user_name=$('.get_hospital_name').val();

                //alert(user_name);

            var page='<?=base_url()?>welcome/get_hospital/'+user_name;

            //alert(page );

            $.get( page, function( data ) {

            //alert(data );
              $( ".our_result" ).html( data );
             // alert( "Load was performed." );
            });
        }

    </script>
    <script type="text/javascript">
        
        function get_ambulance(){

            //alert('HI!!');

            var user_name=$('.get_ambulance_name').val();

                //alert(user_name);

            var page='<?=base_url()?>welcome/get_ambulance/'+user_name;

            //alert(page );

            $.get( page, function( data ) {

            //alert(data );
              $( ".our_result" ).html( data );
             // alert( "Load was performed." );
            });
        }

    </script>

    <script type="text/javascript">
        
        function get_oxygen(){

            //alert('HI!!');

            var user_name=$('.get_oxygen_name').val();

                //alert(user_name);

            var page='<?=base_url()?>welcome/get_oxygen/'+user_name;

            //alert(page );

            $.get( page, function( data ) {

            //alert(data );
              $( ".our_result" ).html( data );
             // alert( "Load was performed." );
            });
        }

    </script>
    
    <script type="text/javascript">
        
        function get_center(){

            //alert('HI!!');

            var user_name=$('.get_center_name').val();

                //alert(user_name);

            var page='<?=base_url()?>welcome/get_center/'+user_name;

            //alert(page );

            $.get( page, function( data ) {

            //alert(data );
              $( ".our_result" ).html( data );
             // alert( "Load was performed." );
            });
        }

    </script>

</body>
</html>