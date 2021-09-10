 
   <style>
  #grid {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-right: 20px;
}

#grid td, #grid th {
  border: 1px solid #ddd;
  padding: 8px;
}

#grid tr:nth-child(even){background-color: #f2f2f2;}

#grid tr:hover {background-color: #ddd;}

#grid th{
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #780bd5;
  color: white;
}
.color{
  color:white;
  background-color:  #780bd5;
}
.color1{
  border-radius: 20px;
  text-align:center;
  background-color: #e5e9f2;
}
.part2{
    margin-left: 600px;
    margin-top: -357px;
}
.width{
  width: 327px !important;
}
.center{
  margin-left: 182px;
}
.center1{
  margin-left: -108px;
}
.set{
  padding: 14px;
}
</style>

   
   


    
     <!-- Our Team -->
    <section class="our-team sp-two">
        <div class="container">
        <div class="profile">
        
             <table  class="table table-responsive" id="grid">
            
            <!-- <tr >
              
              <th class="text-center">User Name</th>
              <th class="text-center">User Email</th>
              <th class="text-center">Mobile</th>
              <th class="text-center">Address</th>
              <th class="text-center">Blood Group</th>
              <th class="text-center">Gender</th>
              <th class="text-center">Ages</th>
              <th class="text-center">Setting</th>
            </tr>
             -->
             
            <div class="center">
            <?php  foreach ($user as $user) {  ?>
               
            

            
              <?php if($user['type']!= 'admin') { ?>
                 <!--  <tr>
                       <td> -->  
                        <!-- <strong></strong> -->
                        
                            <div class="sec-title centered center1">
                              <!-- <h4><strong>Contact</strong></h4> -->
                              <h1>User Profile</h1>
                          </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="contact-info-block color1">
                                <h5><strong>Name</strong></h5>
                                 <?=$user['name']?>
                            </div>
                            </div>
                            <br>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="contact-info-block color1">
                                <h5><strong>Email</strong></h5>
                                 <?=$user['email']?>
                            </div>
                            </div>
                            <br>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="contact-info-block color1">
                                <h5><strong>Mobile</strong></h5>
                                 <?=$user['mobile']?>
                            </div>
                            </div>
                            <br>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="contact-info-block color1">
                                <h5><strong>Address</strong></h5>
                                 <?=$user['user_address']?>
                            </div>
                            </div>
                            <br>
                           <div class="part2">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="contact-info-block color1 width">
                                <h5><strong>Blood Group</strong></h5>
                                 <?=$user['blood_group']?>
                            </div>
                            </div>
                            <br>
                          
                            <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="contact-info-block color1 width">
                                <h5><strong>Gender</strong></h5>
                                 <?=$user['gender']?>
                            </div>
                            </div>
                            <br>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="contact-info-block color1 width">
                                <h5><strong>Ages</strong></h5>
                                 <?=$user['ages']?>
                            </div>
                            </div>
                            <br>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="contact-info-block color1 width">
                              <div class="set"><a href="<?=base_url()?>user/change_user/<?=$user['id']?>"><button class="btn color"><strong>Setting</strong></button></a>
                                </div> 
                            </div>
                            </div>
                            <br>
                      </div>
                       
                      <!-- </td> -->
                    <!-- <td><?=$user['email']?></td>
                    <td><?=$user['mobile']?></td>
                    <td><?=$user['user_address']?></td>
                    <td><?=$user['blood_group']?></td>
                    <td><?=$user['gender']?></td>
                    <td><?=$user['ages']?></td>
                    <td><a href="<?=base_url()?>user/change_user/<?=$user['id']?>"><button class="btn color">Setting</button></a></td> -->
                  <!-- </tr> -->
                  <?php  }?>
              
            

             <?php } ?> 
             </div>
<!--         <div class="contact-info">
                <div class="sec-title centered">
                    <h4>Contact</h4>
                    <h1>Get In Touch</h1>
                </div>
            <?php  foreach ($user as $user) {  ?>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-info-block">
                            <h5>User Name</h5>
                             <td><?=$user['name']?></td>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-info-block">
                            <h5>Address</h5>
                            <div class="text">Patantula,Sylhet</div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-info-block">
                            <h5>Address</h5>
                            <div class="text">Patantula,Sylhet</div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-info-block">
                            <h5>Address</h5>
                            <div class="text">Patantula,Sylhet</div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-info-block">
                            <h5>Address</h5>
                            <div class="text">Patantula,Sylhet</div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-info-block">
                            <h5>Address</h5>
                            <div class="text">Patantula,Sylhet</div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-info-block">
                            <h5>Email</h5>
                            <div class="text"><a href="mailto:shiulycse@gmail.com">shiulycse@gmail.com</a></div
                                >
                            <div class="text"><a href="mailto:chowdhurysadia771@gmail.com">chowdhurysadia771@gmail.com</a></div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-info-block">
                            <h5>Phone</h5>
                            <div class="text"><a href="01708042742">01708042742</a></div>
                            <div class="text"><a href="01727456779">01727456779</a></div>
                        </div>
                    </div>
                    <br> <br> <br>
                </div>
                <?php  }?> 
            </div> -->
      </table>    
        </div>
		
          
        </div>
    </section>




