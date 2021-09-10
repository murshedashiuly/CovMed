

<style>
#grid {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  text-align: center;
}

#grid td, #grid th {
  border: 1px solid #ddd;
  padding: 8px;
}

#grid tr:nth-child(even){background-color: #f2f2f2;}

#grid tr:hover {background-color: #ddd;}

#grid th {
  padding-top: 12px;
  padding-bottom: 12px;
  background-color: #780bd5;
  color: white;
}
.h1{
    font-size: 56px;
    font-weight:bold;
    color:#780bd5;
}
.h1 span{
    margin-right: 26px;
}
</style>



    <!-- Page title -->
    <section class="page-title" style="background-image:url(<?=base_url()?>asset/images/background/3.jpg)">
        <div class="container">
            <div class="outer-box">
                <h1>Welcome To Bangladesh</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?=base_url()?>welcome">Home</a></li>
                    <li class="active"><a href="<?=base_url()?>welcome/db">Bangladesh</a></li>
                </ul>
            </div>
        </div>
    </section>

    <?php

    // include 'logic.php';
  $jsonData = file_get_contents("https://covidbd-api.herokuapp.com/status");
    $data = json_decode($jsonData, true);

?>


    
  <!-- world wide tracker start-->
       <div class="container-fluid bg-light p-5 text-center my-3">
        <h1 class="h1"><span>Today</span> <?php echo date('y-m-d');?></h1>
       </div>

    <div class="container bg-light p-3 my-5 text-center">
        <h5 class="text-info">"Prevention is the Cure."</h5>
        <p class="text-muted">Stay Indoors Stay Safe.</p>
    </div>

    <!-- <canvas id="myChart"></canvas> -->

    <div class="container-fluid">
        <div class="table-responsive">

            
             <table class="table" id="grid">
                <thead class="thead-dark">
                    <tr>
                        <?php
                        foreach($data as $key => $value){
                    ?>
                      
                      <th scope="row"><?php echo $key;?> </th>
                    <?php }?> 
                    </tr>
                </thead>
                <tbody>
                   

                    <?php
                        foreach($data as $key => $value){
                    ?>
                         <td><?php echo "$value";?></td>         
                    <?php }?>
                </tbody>
            </table> 
        </div>
    </div>

  <!-- world wide tracker end-->


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
    
    

   