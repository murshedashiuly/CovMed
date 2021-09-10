

   <style> .pagination > .active{background:pink;}
   .color{
    background-color: #780bd5;
    color: white;
   }
    .h2{
        font-weight:bold;
       color: black;
       font-size: 25px;
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
        margin-left: 622px;
        margin-top: -318px;
    }
    .gap{
         margin-top: 100px;
         margin-bottom: 100px;
    }

</style> 
  <!-- Page title -->
    <section class="page-title" style="background-image:url(<?=base_url()?>asset/images/background/3.jpg)">
        <div class="container">
            <div class="outer-box">
                <h1>Doctor Details</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?=base_url()?>welcome">Home</a></li>
                    <li class="active"><a href="<?=base_url()?>welcome/team">Team</a></li>
                </ul>
            </div>
        </div>
    </section>

    <div class="container gap">
      
              <!-- <h2 class="h2 text-center">Featured Item</h2>  -->
                 <div class="menu-right-content single">
                   <?php 
                 echo '<td><a href="'.base_url().'asset/images/'.$user[0]['doctor_image'].'"><img  src="'.base_url().'asset/images/'.$user[0]['doctor_image'].'" alt=""></a></td>'; ?>
                 </div>
                 
                 <div class="single text-center pic">
                 <h2 class="h2"><strong>Doctor Name:
                 <?php   
                   echo $user[0]['doctor_name'];
                 ?>
                 </strong></h2>
                 <br>
                 <h2 class="h2"><strong>Mobile:
                 <?php 
                 echo $user[0]['number']; 
               ?>
                </strong></h2>
                <br>
                <h2 class="h2"><strong>Hospital:
                 <?php 
                 echo $user[0]['hospital']; 
               ?>
                </strong></h2>
                <br>
                <h2 class="h2"><strong>Division:
                 <?php 
                 echo $user[0]['division']; 
               ?>
                </strong></h2>
                 </div>
               </div>
           
    </div>

    <!-- Call to Action -->
    <div class="call-to-action" style="">
        <div class="container">
            <div class="wrapper-box  box">
                <!-- <h1>Order us immediately if you like <br>our products</h1> -->
                
            </div>
        </div>
    </div>

   