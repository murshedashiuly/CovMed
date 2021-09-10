
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
.color{
    color:white;
    background-color:#780bd5; 
}
</style>
    <!-- Page title -->
    <section class="page-title" style="background-image:url(<?=base_url()?>asset/images/background/3.jpg)">
        <div class="container">
            <div class="outer-box">
                <h1>Hospital</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?=base_url()?>welcome">Home</a></li>
                    <li class="active"><a href="<?=base_url()?>welcome/hospital">Hospital</a></li>
                </ul>
            </div>
        </div>
    </section>

   

    
  <!-- world wide tracker start-->
      <div class="container-fluid bg-light p-5 text-center my-3">
       <h1 class="h1"><span>Today</span> <?php echo date('y-m-d');?></h1>
    </div>


    <div class="container bg-light p-3 my-5 text-center">
          <div class="col-md-12"> 

      <div class="row">

      <div class="col-md-6">

      <div class="form-group"> 

        <input type="text" class="get_hospital_name form-control" name="search" onkeyup="get_hospital()" placeholder="search district">

      </div>

      </div>

      <div class="col-md-6">

      <div class="form-group"> 

        <input type="button" class="btn color" name="submit" onclick="get_hospital()" value="search">

      </div>

      </div>
      </div>


      <table class="table"> 


      <theader>
        
          <!-- <tr>
          <th>Name</th>
          <th>Mobile</th>

          </tr>
 -->
      </theader>
      <tbody class="our_result"></tbody>

      </table>

   </div>
    </div>

   

    <!-- <canvas id="myChart"></canvas> -->

   <div class="container-fluid">
      <?php
        $url="http://103.247.238.92/webportal/pages/covid19-bedstatus-display.php";

        $html=file_get_contents($url);

        $dom=new domDocument;

        @$dom->loadHTML ($html);
        

        $tables=$dom->getElementsByTagName('table');
        $rows=$tables->item (0) ->getElementsByTagName('tr');

        $con=mysqli_connect('localhost', 'root', '', 'db_covmed');

        // mysqli_query($con,"delete from tbl_hospital"); 

        //   die();

        echo "<table id='grid'>";

         echo "<tr><th>#</th><th>District</th><th>Faculty name</th><th>Covid dedicated general bed</th><th>Occupied Covid dedicated general bed</th><th>Admitted Covid patient in extra bed </th><th>Covid dedicated ICU bed </th><th>Occupied Covid dedicated ICU bed </th><th>ICU equivalent bed with high flow nasal canula </th><th>Occupied ICU equivalent bed with high flow nasal canula </th><th>Total Beds </th><th>Occupied Beds </th><th>Vacant Beds </th><th>Last update</th></tr>";


        foreach ($rows as $row) {
        $cols=$row->getElementsByTagName('td');
        if (isset($cols->item (0) ->nodeValue) &&  isset($cols->item (1) ->nodeValue) && isset($cols->item (2) ->nodeValue) && isset($cols->item (3) ->nodeValue) && isset($cols->item (4) ->nodeValue) && isset($cols->item (5) ->nodeValue)&& isset($cols->item (6) ->nodeValue)&& isset($cols->item (7) ->nodeValue)&& isset($cols->item (8) ->nodeValue)&& isset($cols->item (9) ->nodeValue)&& isset($cols->item (12) ->nodeValue)&& isset($cols->item (13) ->nodeValue)&& isset($cols->item (14) ->nodeValue)&& isset($cols->item (16) ->nodeValue) ) {


        echo "<tr><td>" . $cols->item (0) ->nodeValue. "</td><td>" . $cols->item (1) ->nodeValue."</td><td>".$cols->item(2)->nodeValue."</td><td>".$cols->item (3) ->nodeValue."</td><td>".$cols->item (4) ->nodeValue. "</td><td>".$cols->item (5) ->nodeValue."</td><td>".$cols->item (6) ->nodeValue."</td><td>".$cols->item (7) ->nodeValue."</td><td>".$cols->item (8) ->nodeValue."</td><td>".$cols->item (9) ->nodeValue."</td><td>".$cols->item (12) ->nodeValue."</td><td>".$cols->item (13) ->nodeValue."</td><td>".$cols->item (14) ->nodeValue."</td><td>".$cols->item (16) ->nodeValue."</td></tr>";


              $district=$cols->item(1)->nodeValue;
              $facilityName=$cols->item(2 )->nodeValue; 
              $covidDedicatedGeneralBed=$cols->item(3)->nodeValue; 
              $occupiedCovidDedicatedGeneralBed=$cols->item(4)->nodeValue; 
              $admittedCovidPatientInExtraBed=$cols->item(5)->nodeValue;
              $covidDedicatedICUBed=$cols->item(6)->nodeValue;
              $occupiedCovidDedicatedICUBed=$cols->item(7)->nodeValue; 
              $iCUEquivalentBedWithHighFlowNasalCanula=$cols->item(8)->nodeValue; 
              $occupiedICUEquivalentBedWithHighFlowNasalCanula=$cols->item(9)->nodeValue; 
              // $covidDedicatedHDUBed =$cols->item(10)->nodeValue; 
              // $occupiedCovidDedicatedHDUBed=$cols->item(11)->nodeValue;
              $totalBeds=$cols->item(12)->nodeValue; 
              $occupiedBeds=$cols->item(13)->nodeValue; 
              $vacantBeds=$cols->item(14)->nodeValue; 
              // $bedOccupencyRate=$cols->item(15)->nodeValue;
               

              // mysqli_query($con,"insert into tbl_hospital(district,facilityName,covidDedicatedGeneralBed,occupiedCovidDedicatedGeneralBed,admittedCovidPatientInExtraBed,covidDedicatedICUBed,occupiedCovidDedicatedICUBed,iCUEquivalentBedWithHighFlowNasalCanula,occupiedICUEquivalentBedWithHighFlowNasalCanula,totalBeds,occupiedBeds,vacantBeds) values('$district','$facilityName','$covidDedicatedGeneralBed','$occupiedCovidDedicatedGeneralBed','$admittedCovidPatientInExtraBed','$covidDedicatedICUBed','$occupiedCovidDedicatedICUBed','$iCUEquivalentBedWithHighFlowNasalCanula','$occupiedICUEquivalentBedWithHighFlowNasalCanula',' $totalBeds','$occupiedBeds','$vacantBeds')");

               $data=$this->db->where('district',$district)->get('tbl_hospital')->result_array();

               if(sizeof($data)==0)
                {
                  
                  $this->db->set('district', $district);
                  $this->db->set('facilityName', $facilityName);
                  $this->db->set('covidDedicatedGeneralBed', $covidDedicatedGeneralBed);
                  $this->db->set('occupiedCovidDedicatedGeneralBed', $occupiedCovidDedicatedGeneralBed);
                  $this->db->set('admittedCovidPatientInExtraBed', $admittedCovidPatientInExtraBed);
                  $this->db->set('covidDedicatedICUBed', $covidDedicatedICUBed);
                  $this->db->set('occupiedCovidDedicatedICUBed', $occupiedCovidDedicatedICUBed);
                  $this->db->set('iCUEquivalentBedWithHighFlowNasalCanula', $iCUEquivalentBedWithHighFlowNasalCanula);
                  $this->db->set('occupiedICUEquivalentBedWithHighFlowNasalCanula', $occupiedICUEquivalentBedWithHighFlowNasalCanula);
                  $this->db->set('totalBeds', $totalBeds);
                  $this->db->set('occupiedBeds', $occupiedBeds);
                  $this->db->set('vacantBeds', $vacantBeds);
                  $this->db->insert('tbl_hospital'); 
                  }
                else
                {

                  $this->db->set('facilityName', $facilityName);
                  $this->db->set('covidDedicatedGeneralBed', $covidDedicatedGeneralBed);
                  $this->db->set('occupiedCovidDedicatedGeneralBed', $occupiedCovidDedicatedGeneralBed);
                  $this->db->set('admittedCovidPatientInExtraBed', $admittedCovidPatientInExtraBed);
                  $this->db->set('covidDedicatedICUBed', $covidDedicatedICUBed);
                  $this->db->set('occupiedCovidDedicatedICUBed', $occupiedCovidDedicatedICUBed);
                  $this->db->set('iCUEquivalentBedWithHighFlowNasalCanula', $iCUEquivalentBedWithHighFlowNasalCanula);
                  $this->db->set('occupiedICUEquivalentBedWithHighFlowNasalCanula', $occupiedICUEquivalentBedWithHighFlowNasalCanula);
                  $this->db->set('totalBeds', $totalBeds);
                  $this->db->set('occupiedBeds', $occupiedBeds);
                  $this->db->set('vacantBeds', $vacantBeds);
                  $this->db->where('district', $district);
                  $this->db->update('tbl_hospital'); 

                }

            }
          }

        echo "</table>";

        ?>

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
    
    

   