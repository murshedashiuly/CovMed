

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
         margin-top: 64px;
         margin-bottom: 57px;
    }

</style> 
  <!-- Page title -->
    <section class="page-title" style="background-image:url(<?=base_url()?>asset/images/background/3.jpg)">
        <div class="container">
            <div class="outer-box">
                <h1>Order Details</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?=base_url()?>user">Home</a></li>
                    <li class="active"><a href="<?=base_url()?>user/status">order details</a></li>
                </ul>
            </div>
        </div>
    </section>

    <div class="container gap">


      <!-- 
               <?php   
		            $this->db->select('tbl_order.order_name','tbl_user.name');
		            $this->db->from('tbl_order');
		            $this->db->join('tbl_user','tbl_user.id=tbl_order.user_id');
		            $data=$this->db->get();

		            foreach ($data->result() as $row) {
		            	
		            	echo $row->order_name;

		            	
		            }
                 ?> -->

      <table  class="table table-responsive">
      
      <tr>
        
        <th>User Name</th>
        <th>Product Name</th>
        <th>Order Name</th>
        <th>Order Mobile</th>
        <th>Address</th>
        <th>Date</th>
        <th>Cancel</th>
      </tr>

      <?php  foreach ($booking as $user) {  ?>
         
      

      <tr>
        
        <td><?=$user['name']?></td>
        <td><?=$user['product_type']?></td>
        <td><?=$user['order_name']?></td>
        <td><?=$user['order_mobile']?></td>
        <td><?=$user['address']?></td>
        <td><?=$user['date']?></td> 
        <td><a href="<?=base_url()?>user/delete_order/<?=$user['o_id']?>"><button class="btn btn-danger">Cancel</button></a></td>
      </tr>

       <?php } ?> 
        
      </table>
      
	 		
    </div>

    <!-- Call to Action -->
    <div class="call-to-action" style="">
        <div class="container">
            <div class="wrapper-box  box">
                <!-- <h1>Order us immediately if you like <br>our products</h1> -->
                
            </div>
        </div>
    </div>

   