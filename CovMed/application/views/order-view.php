

   <style> .pagination > .active{background:pink;}
   .color{
    background-color: #780bd5;
    color: white;
   }
    .h2{
        font-weight:bold;
       color: #780bd5;
    }
    .h3{
    font-size: 25px;
    color:#262626;
    }
    .box h1{
       margin-left: 315px;
    }
    .pic{
        display:inline-block;
        margin-left: 500px;
        margin-top: -318px;
    }
    .gap{
            margin-bottom: 46px;
    }

</style> 
  <!-- Page title -->
    <section class="page-title" style="background-image:url(<?=base_url()?>asset/images/background/3.jpg)">
        <div class="container">
            <div class="outer-box">
                <h1>Product Details</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?=base_url()?>user">Home</a></li>
                    <li class="active">product</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="container gap">
      
              <!-- <h2 class="h2 text-center">Featured Item</h2>  -->
                 <div class="menu-right-content single">
                   <?php 
                 echo '<td><a href="'.base_url().'asset/images/'.$user[0]['product_image'].'"><img  src="'.base_url().'asset/images/'.$user[0]['product_image'].'" alt=""></a></td>'; ?>
                 </div>
                 
                 <div class="single text-center pic">
                 <h2 class="h2"><strong>Product Type:
                 <?php   
                   echo $user[0]['product_type'];
                 ?>
                 </strong></h2>
                 <h2 class="h2"><strong>Price:
                 <?php 
                 echo $user[0]['price']; 
               ?>
                BDT</strong></h2>
                <br>
                 <!-- <div class="h3"> -->
                 <p class="h3">
                 <?php 
                 echo $user[0]['info']; 
               ?>
                </p>
                <!-- </div> -->
                <br>
                 </div>
               </div>
            <!-- <div class="row">
                <?php  foreach ($user as $user) {  ?> 
                <div class="team-block-one col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <div class="image">
                          
                         <td><a href="<?=base_url()?>asset/images/<?=$user['product_image']?>"><img  src="<?=base_url()?>asset/images/<?=$user['product_image']?>" alt=""></a></td> 
                      </div>
                      
                        <div class="lower-box">
                            <h4><td><?=$user['product_type']?></td></h4>
                            <h4><td><?=$user['price']?></td> BDT</h4>
                        </div>
                        <div class="cus_r_con mb-0 text-center">
                            <div class="link-btn cus_link"><a href="#" class="theme-btn btn-style-two" data-toggle="modal" data-target="#appointment">Order Us</a></div>
                        </div>
                        <?php  if(empty($this->session->userdata('username'))){ ?>
                         <div class="cus_r_con mb-0 text-center">
                            <div class="link-btn"><a href="#" class="">View Details</a></div>
                        </div>
                        <br>
                        <div class="cus_r_con mb-0 text-center">
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-two" data-toggle="modal" data-target="#appointment">Order Us</a></div>
                        </div>
                    <?php }
                      else{?>
                         <div class="cus_r_con mb-0 text-center">
                            <div class="link-btn"><a href="<?=base_url()?>user/single-view/<?=$user['id']?>"><button class="btn">View Details</button></a></div>
                        </div>
                         <br>
                        <div class="cus_r_con mb-0 text-center">
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-two" data-toggle="modal" data-target="#appointment2">Order Now</a></div>
                        </div>
                      
                   <?php } ?>
                    </div>
                </div>
            
             <?php } ?>
            </div> -->
    </div>

    <!-- Call to Action -->
    <div class="call-to-action" style="">
        <div class="container">
            <div class="wrapper-box  box">
                <!-- <h1>Order us immediately if you like <br>our products</h1> -->
                
            </div>
        </div>
    </div>

   