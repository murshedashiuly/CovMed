<style>
#grid {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
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
  background-color: #04AA6D;
  color: white;
}
#color th{
   padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
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
                <h1>Welcome To World Wide</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?=base_url()?>welcome">Home</a></li>
                    <li class="active"><a href="<?=base_url()?>welcome/world">World Wide</a></li>
                </ul>
            </div>
        </div>
    </section>

    <?php

     // Retrieving Json Data
    $jsonData = file_get_contents("https://pomber.github.io/covid19/timeseries.json");
    $data = json_decode($jsonData, true);

    // Counting the number of days in the Json File
    foreach($data as $key => $value){
        $days_count = count($value)-1;
        $days_count_prev = $days_count - 1;
    }

    $total_confirmed = 0;
    $total_recovered = 0;
    $total_deaths = 0;

    // Total Cases Calculation
    foreach($data as $key => $value){
        $total_confirmed = $total_confirmed + $value[$days_count]['confirmed'];
        $total_recovered = $total_recovered + $value[$days_count]['recovered'];
        $total_deaths = $total_deaths + $value[$days_count]['deaths'];
    }

?>


    
  <!-- world wide tracker start-->
   <div class="container-fluid bg-light p-5 text-center my-3">
         <h1 class="h1"><span>Today</span> <?php echo date('y-m-d');?></h1>
    </div>

    <div class="container my-5">
        <div class="row text-center">
            <div class="col-4 text-warning">
                <h5>Total Cases</h5>
                <?php echo $total_confirmed;?>
            </div>
            <div class="col-4 text-success">
                <h5>Total Recovered</h5>
                <?php echo $total_recovered;?>
            </div>
            <div class="col-4 text-danger">
                <h5>Total Deaths</h5>
                <?php echo $total_deaths;?>
            </div>
        </div>
    </div>

    <div class="container bg-light p-3 my-5 text-center">
        <h5 class="text-info">"Prevention is the Cure."</h5>
        <p class="text-muted">Stay Indoors Stay Safe.</p>
    </div>

    <!-- <canvas id="myChart"></canvas> -->

    <div class="container-fluid">
        <div class="table-responsive" >
            <table class="table" >
                <thead class="thead-dark" id="color">
                    <tr>
                        <th scope="col">Countries</th>
                        <th scope="col">Cases</th>
                        <th scope="col">Increase</th>
                        <th scope="col">Recovered</th>
                        <th scope="col">Deaths</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    
                        foreach($data as $key => $value){
                            $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'];
                    ?>
                        <tr>
                           <th scope="row"><?php echo $key?></th>
                            <td>
                                <?php echo $value[$days_count]['confirmed'];?>
                                <?php if($increase != 0){ ?>
                                    <!-- <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small> -->
                                    <!-- <div class="bg-warning"><?php echo $increase;?></div> -->
                                    <td class="btn bg-warning"><?php echo $increase;?></td>
                                     
                                <?php }
                                 else{?>
                                    <td class="btn btn-success"><?php echo $increase;?></td>
                                <?php }?>
                            </td>
                            <td><?php echo $value[$days_count]['recovered'];?></td>
                            <td><?php echo $value[$days_count]['deaths'];?></td>
                        </tr>
                    <?php

                     }?>
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
    
    

   