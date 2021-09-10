 
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
  background-color: #fea09e;
}
.center{
      margin-left: 138px;
}
.center1{
       margin-left: -157px;
}
strong{
  font-size:20px;
}
   

</style> 
    
     <!-- Our Team -->
    <section class="our-team sp-two">
        <div class="container-fluid">
        <div class="center">
                        <div class="sec-title centered center1">
                              <!-- <h4><strong>Contact</strong></h4> -->
                              <h1>Message</h1>
                          </div>
                          <br>
             <table  class="table  table-responsive" >
            
            <tr >
              
              <th class="text-center"><strong>Name<strong></th>
               <th class="text-center"><strong>Email</strong></th>
              <th class="text-center"><strong>Subject</strong></th>
              <th class="text-center"><strong>Message</strong></th>
              <th class="text-center"><strong>Admin's Reply</strong></th>
            </tr>

            <?php  foreach ($user as $user) {  ?>
                   
                  <tr>
                   <td><?=$user['name']?></td>
                   <td><?=$user['email']?></td>
                   <td><?=$user['subject']?></td>
                  <td><?=$user['msg']?></td>
                  <td><?=$user['admin_reply']?></td>
                  </tr>
                           
             <?php } ?> 
        
      </table>    
        </div>
    
          
        </div>
    </section>
    <br> <br>




