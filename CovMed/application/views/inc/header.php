<style>
    .cus_menu{
       margin-top: 31px;  
       margin-right: 33px;

    }
    .link_pro{
        font-size: 27px;
        margin-top: 10px;
    }
    .link_pro1{
         font-size: 27px;
        margin-top: 10px;
        margin-left: 10px;
    }
    .cus_logo{
              margin-top: -7px;
              margin-right: -25px;
            /*margin-right: -7px;*/
    }
    .cus_logo2{
         margin-left: 7px;
        margin-top: 10px;
    }
    .cus_nav{
         /*margin-right: 72px;*/
         margin-right: 54px;
         margin-top: 8px;
    }
    .cus_sign{
        margin-right: -16px;
    }
    .btn1{
            margin-right: -4px;
    }
    .btn2{
            width: 108px;
    }
    .btn3{
      margin-right: -20px;
    margin-left: -27px;
    }
    .cus_r_con{
        margin-right: -11px;
    }
   .dis{
    margin-right: -12px !important;
   }
   .width{
    margin-left: -88px;
    width: 180px !important;
   }
   .font i{
    font-size: 25px;
   }
   .head_img{
    float:left;
     padding:20px;
   }
   .head_title{
    font-size: 29px !important;
    font-weight: 700 !important;
    margin-top: -45px !important;
    margin-left: 57px !important;
   }
   .fav{
    width: 50px;
   }
</style>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>COVMED</title>

<!-- Stylesheets -->
<link href="<?=base_url()?>asset/css/bootstrap.css" rel="stylesheet">
<link href="<?=base_url()?>asset/css/style.css" rel="stylesheet">
<link href="<?=base_url()?>asset/css/responsive.css" rel="stylesheet">
<link href="<?=base_url()?>asset/custom.css" rel="stylesheet">

<!-- Fav Icons -->
<link rel="shortcut icon" href="<?=base_url()?>asset/images/favicon.png" type="image/x-icon">
<link rel="icon" href="<?=base_url()?>asset/images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="<?=base_url()?>asset/js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
    
    <!-- pre loader  -->
    <div class="preloader"></div>

    <!-- main header -->
    <header class="main-header">

        <!-- header top -->
        <div class="header-top">
            <div class="container">
                <div class="outer-box clearfix">
                    <!--Top Left-->
                    <div class="top-left float-sm-left">
                        <ul class="topbar-info">
                            <li>
                                <a href="tel:+1 111 222 888"><i class="fa fa-phone"></i> +1 111 222 888</a>
                            </li>
                            <li>
                                <a href="mailto:info@yourmail.com"><i class="fa fa-envelope"></i> sadia@gmail.com</a>
                            </li>
                        </ul>   
                    </div>
                    <!--Top Right-->
                    <div class="top-right float-sm-right">
                        <div class="social-links clearfix">
                            <a href="https://www.facebook.com/"><span class="fab fa-facebook-f"></span></a>
                            <a href="https://twitter.com/"><span class="fab fa-twitter"></span></a>
                            <a href="https://www.linkedin.com/feed/"><span class="fab fa-linkedin-in"></span></a>
                            <a href="https://www.pinterest.com/"><span class="fab fa-pinterest"></span></a>
                            <a href="https://www.skype.com/en/"><span class="fab fa-skype"></span></a>
                            <!-- <?php  if(!empty($this->session->userdata('username2'))){ 
                                if($res['type']=='admin'){?>

                             <a class="" href="<?=base_url()?>admin">admin</a>
                            <?php }}?> -->
                        </div>
                    </div>
                </div>  
            </div>
        </div>

        <!-- Header upper -->
        <div class="header-upper">
            <div class="container clearfix">
                    
                <div class="float-left logo-outer cus_logo">
                    <div class="logo cus_logo"><a class="head_img" href="<?=base_url()?>welcome"><img src="<?=base_url()?>asset/images/favicon.png" class="fav" alt="" title=""><h2 class="head_title">COV<strong>MED</strong></h2></a></div>
                </div>
                
                <div class="float-right upper-right clearfix">
                    
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix cus_nav" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="dropdown current dis"><a href="">Home</a>
                                        <ul>
                                            <li><a href="<?=base_url()?>welcome">Home</a></li> 
                                            <li><a href="<?=base_url()?>welcome/covid_19">Covid-19</a></li>
                                            <li><a href="<?=base_url()?>welcome/prevention">Prevention</a></li>
                                            <li><a href="<?=base_url()?>welcome/blog_2">Covid Guideline</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dis"><a href="#">About</a>
                                        <ul>
                                            <li><a href="<?=base_url()?>welcome/about">About Us</a></li>
                                            <li><a href="<?=base_url()?>welcome/team">Medical Team</a></li>
                                            <li><a href="<?=base_url()?>welcome/faq">FAQ's</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li><a href="<?=base_url()?>welcome/prevention">Prevention</a></li> -->
                                    <li class="dis"><a href="<?=base_url()?>welcome/view_product">Safety Items</a></li>
                                    <!-- <li class="dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="<?=base_url()?>welcome/service">Services</a></li>
                                            <li><a href="<?=base_url()?>welcome/testimonial">Testimonial</a></li>
                                            <li><a href="<?=base_url()?>welcome/covid_19">Covid-19</a></li>
                                            <li><a href="<?=base_url()?>welcome/error">404 Page</a></li>
                                        </ul>
                                    </li> -->
                                    <!-- <li class="dropdown"><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="<?=base_url()?>welcome/blog_2">Blog Classic</a></li>
                                            <li><a href="<?=base_url()?>welcome/blog_details">Blog Details</a></li>
                                        </ul>
                                    </li> -->
                                   <!--  <?php  if(empty($this->session->userdata('username'))){ ?>
                                          <li class="dis"><a href="<?=base_url()?>welcome/contact1">Contact</a></li>
                                        <?php }
                                    else{?>
                                         <li class="dis"><a href="<?=base_url()?>user/contact2">Contact</a></li>

                                    <?php } ?> -->

                                    <li class="dropdown dis"><a href="#">Covid Track</a>
                                        <ul>
                                            <li><a href="<?=base_url()?>welcome/world">World Wide</a></li>
                                            <li><a href="<?=base_url()?>welcome/db">Bangladesh</a></li>
                                            <li><a href="<?=base_url()?>welcome/div">Division</a></li>
                                        </ul>
                                    </li>
                                     <li class="dropdown dis "><a href="#">Helpline</a>
                                        <ul>
                                            <li><a href="<?=base_url()?>welcome/hospital">Hospital</a></li>
                                            <li><a href="<?=base_url()?>welcome/vaccine">Vaccine</a></li>
                                            <li><a href="<?=base_url()?>welcome/oxygen">Oxygen</a></li>
                                            <li><a href="<?=base_url()?>welcome/ambulance">Ambulance</a></li>
                                            <li><a href="<?=base_url()?>welcome/center">Covid Test Center</a></li>
                                        </ul>
                                    </li>
                                     <?php  if(empty($this->session->userdata('username'))){ ?>
                                          <li class="dis"><a href="<?=base_url()?>welcome/contact1">Contact</a></li>
                                        <?php }
                                    else{?>
                                         <li class="dis"><a href="<?=base_url()?>user/contact2">Contact</a></li>

                                    <?php } ?>
                                    <!-- profile start -->
                                      <?php  if(!empty($this->session->userdata('username2'))){ ?>
                                              <li class="dis">
                                                   <a href="<?=base_url()?>admin">Dashboard</a>  
                                                   <!--  <div class="menu-right-content">
                                                    <div class="link-btn btn2"><a href="<?=base_url()?>admin" class="theme-btn btn-style-two" data-toggle="" data-target="">Dashboard</a></div>
                                                    </div> -->
                                                </li>

                                        <?php }
                                        else if(empty($this->session->userdata('username'))){?>
                                             <li class="dis">
                                                 <div class="menu-right-content cus_sign mb-0">
                                                <div class="link-btn btn1"><a href="<?=base_url()?>sign/signup" class="theme-btn btn-style-two" data-toggle="" data-target="">Sign Up</a></div>
                                                </div>
                                                <div class="menu-right-content">
                                                <div class="link-btn btn2"><a href="<?=base_url()?>log" class="theme-btn btn-style-two" data-toggle="" data-target="">Login</a></div>
                                           </li>
                                       <?php }
                                       else if(!empty($this->session->userdata('username'))){?>
                                           
                                            
                                               
                                                <li class="dropdown dis"><a class="font" href=""><i class="fas fa-user"></i></a>
                                                <ul class="width">
                                                    <li><a href="<?=base_url()?>user/profile1">Profile</a></li>
                                                    <li><a href="<?=base_url()?>user/msg">Message</a></li>
                                                    <li><a href="<?=base_url()?>user/status">order status</a></li>
                                                    <li><a href="<?=base_url()?>logout/user_logout">Log Out</a></li>
                                                </ul>
                                              </li>
                                            

                                        
                                          
                                        <?php } ?>
                                    <!-- profile end -->
                                </ul>
                            </div>
                        </nav>                        
                        <!-- Main Menu End-->

                          <!-- <div class="menu-right-content cus_r_con">
                            <a class="navbar" style="color:blue;"><?=$this->session->userdata('username')?></a>
                        </div> -->
                       <!--  <?php  if(empty($this->session->userdata('username'))){ ?>
                        <div class="menu-right-content cus_sign mb-0">
                            <div class="link-btn btn1"><a href="<?=base_url()?>sign/signup" class="theme-btn btn-style-two" data-toggle="" data-target="">Sign Up</a></div>
                        </div>
                        <div class="menu-right-content">
                            <div class="link-btn btn2"><a href="<?=base_url()?>log" class="theme-btn btn-style-two" data-toggle="" data-target="">Login</a></div>

                        </div>
                    <?php }
                      else{?>
                         <div class="menu-right-content cus_r_con">
                            <div class="link-btn link_pro"><a href="<?=base_url()?>user/profile1"><i class="fas fa-user"></i></a></div>
                            <div class="pro"><a href="<?=base_url()?>user/profile1"><p>Profile</p></a>
                              <ul class="dropdown">
                                  <li><a href="<?=base_url()?>logout" class="">Log Out</a></li>
                                  <li><a href="<?=base_url()?>user/status">order status</a></li>
                              </ul>
                            </div>
                        </div>
                         <div class="menu-right-content cus_r_con">
                            <div class="link-btn"><a href="<?=base_url()?>logout" class="theme-btn btn-style-two" data-toggle="" data-target="">Log Out</a></div>
                        </div>
                      
                   <?php } ?>
  -->
                    </div>
                    
                </div>
                    
            </div>
        </div>
        <!--End Header Upper-->


        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container">
                <div class="clearfix">
                    <!--Logo-->
                    <div class="logo float-left cus_logo2">
                       <!--  <a href="index-2.html" class="img-responsive"><img src="<?=base_url()?>asset/images/logo.png" alt="" title=""></a> -->
                       <!-- <a class="head_img" href="<?=base_url()?>welcome"><img src="<?=base_url()?>asset/images/favicon.png" alt="" title=""><h2 class="head_title">COV<strong>MED</strong></h2></a> -->

                       <a class="head_img" href="<?=base_url()?>welcome"><img src="<?=base_url()?>asset/images/favicon.png" class="fav" alt="" title=""><h2 class="head_title">COV<strong>MED</strong></h2></a>
                    </div>
                    
                    <!--Right Col-->
                    <div class="right-col float-right">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg cus_menu">
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="dropdown current dis"><a href="">Home</a>
                                        <ul>
                                           <li><a href="<?=base_url()?>welcome">Home</a></li>
                                           <li><a href="<?=base_url()?>welcome/covid_19">Covid-19</a></li>
                                            <li><a href="<?=base_url()?>welcome/prevention">Prevention</a></li>
                                            <li><a href="<?=base_url()?>welcome/blog_2">Covid Guideline</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dis"><a href="#">About</a>
                                        <ul>
                                            <li><a href="<?=base_url()?>welcome/about">About Us</a></li>
                                            <li><a href="<?=base_url()?>welcome/team">Medical Team</a></li>
                                            <li><a href="<?=base_url()?>welcome/faq">FAQ's</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li><a href="<?=base_url()?>welcome/prevention">Prevention</a></li> -->
                                    <li class="dis"><a href="<?=base_url()?>welcome/view_product">Safety Items</a></li>
                                    <!-- <li class="dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="<?=base_url()?>welcome/service">Services</a></li>
                                            <li><a href="<?=base_url()?>welcome/testimonial">Testimonial</a>
                                            <li><a href="<?=base_url()?>welcome/covid_19">Covid-19</a></li>
                                            <li><a href="<?=base_url()?>welcome/error">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="<?=base_url()?>welcome/blog_2">Blog Classic</a></li>
                                            <li><a href="<?=base_url()?>welcome/blog_details">Blog Details</a></li>
                                        </ul>
                                    </li> -->
                                    <!--  <?php  if(empty($this->session->userdata('username'))){ ?>
                                          <li class="dis"><a href="<?=base_url()?>welcome/contact1">Contact</a></li>
                                        <?php }
                                    else{?>
                                         <li class="dis"><a href="<?=base_url()?>user/contact2">Contact</a></li>

                                    <?php } ?> -->
                                    <li class="dropdown dis"><a href="#">Covid Track</a>
                                        <ul>
                                            <li><a href="<?=base_url()?>welcome/world">World Wide</a></li>
                                            <li><a href="<?=base_url()?>welcome/db">Bangladesh</a></li>
                                            <li><a href="<?=base_url()?>welcome/div">Division</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dis"><a href="#">Helpline</a>
                                        <ul>
                                            <li><a href="<?=base_url()?>welcome/hospital">Hospital</a></li>
                                            <li><a href="<?=base_url()?>welcome/vaccine">Vaccine</a></li>
                                            <li><a href="<?=base_url()?>welcome/oxygen">Oxygen</a></li>
                                            <li><a href="<?=base_url()?>welcome/ambulance">Ambulance</a></li>
                                            <li><a href="<?=base_url()?>welcome/center">Covid Test Center</a></li>
                                        </ul>
                                    </li>

                                     <?php  if(empty($this->session->userdata('username'))){ ?>
                                          <li class="dis"><a href="<?=base_url()?>welcome/contact1">Contact</a></li>
                                        <?php }
                                    else{?>
                                         <li class="dis"><a href="<?=base_url()?>user/contact2">Contact</a></li>

                                    <?php } ?>
                                     <!-- profile start -->
                                     <!--  <?php  if(empty($this->session->userdata('username'))){ ?>
                                        <li class="dis">
                                             <div class="menu-right-content cus_sign mb-0">
                                            <div class="link-btn btn1"><a href="<?=base_url()?>sign/signup" class="theme-btn btn-style-two" data-toggle="" data-target="">Sign Up</a></div>
                                            </div>
                                            <div class="menu-right-content">
                                            <div class="link-btn btn2"><a href="<?=base_url()?>log" class="theme-btn btn-style-two" data-toggle="" data-target="">Login</a></div>
                                        </li>


                                        <?php }
                                       else{?>
                                        <li class="dropdown dis"><a class="font" href=""><i class="fas fa-user"></i></a>
                                        <ul class="width">
                                            <li><a href="<?=base_url()?>user/profile1">Profile</a></li>
                                            <li><a href="<?=base_url()?>user/msg">Message</a></li>
                                            <li><a href="<?=base_url()?>user/status">order status</a></li>
                                            <li><a href="<?=base_url()?>logout">Log Out</a></li>
                                        </ul>
                                    </li>
                                          
                                        <?php } ?> -->
                                        <!-- profile start -->
                                      <?php  if(!empty($this->session->userdata('username2'))){ ?>
                                              <li class="dis">
                                                     <a href="<?=base_url()?>admin">Dashboard</a>
                                                    <!-- <div class="menu-right-content">
                                                    <div class="link-btn btn2"><a href="<?=base_url()?>admin" class="theme-btn btn-style-two" data-toggle="" data-target="">Dashboard</a></div>
                                                    </div> -->
                                                </li>

                                        <?php }
                                        else if(empty($this->session->userdata('username'))){?>
                                             <li class="dis">
                                                 <div class="menu-right-content cus_sign mb-0">
                                                <div class="link-btn btn1"><a href="<?=base_url()?>sign/signup" class="theme-btn btn-style-two" data-toggle="" data-target="">Sign Up</a></div>
                                                </div>
                                                <div class="menu-right-content">
                                                <div class="link-btn btn2"><a href="<?=base_url()?>log" class="theme-btn btn-style-two" data-toggle="" data-target="">Login</a></div>
                                           </li>
                                       <?php }
                                       else if(!empty($this->session->userdata('username'))){?>
                                           
                                            
                                               
                                                <li class="dropdown dis"><a class="font" href=""><i class="fas fa-user"></i></a>
                                                <ul class="width">
                                                    <li><a href="<?=base_url()?>user/profile1">Profile</a></li>
                                                    <li><a href="<?=base_url()?>user/msg">Message</a></li>
                                                    <li><a href="<?=base_url()?>user/status">order status</a></li>
                                                    <li><a href="<?=base_url()?>logout/user_logout">Log Out</a></li>
                                                </ul>
                                              </li>
                                            

                                        
                                          
                                        <?php } ?>
                                    <!-- profile end -->
                                    <!-- profile end -->
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        <!--  <div class="menu-right-content cus_r_con">
                            <a class="navbar" style="color:blue;"><?=$this->session->userdata('username')?></a>
                        </div> -->
                      
                    </div>
                </div>
                    
                
            </div>
        </div>
        <!--End Sticky Header-->
    </header>

