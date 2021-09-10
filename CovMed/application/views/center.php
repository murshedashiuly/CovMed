
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
                <h1>Covid Test Center</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?=base_url()?>welcome">Home</a></li>
                    <li class="active"><a href="<?=base_url()?>welcome/center">Test Center</a></li>
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

        <input type="text" class="get_center_name form-control" name="search" onkeyup="get_center()" placeholder="search location">

      </div>

      </div>

      <div class="col-md-6">

      <div class="form-group"> 

        <input type="button" class="btn color" name="submit" onclick="get_center()" value="search">

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
          $url="https://corona.gov.bd/corona-out-service";
          // $url="http://103.247.238.92/webportal/pages/covid19-bedstatus-display.php";

          $html=file_get_contents($url);

          $dom=new domDocument;

          @$dom->loadHTML ($html);

          $tables=$dom->getElementsByTagName('table');

          $rows=$tables->item (0) ->getElementsByTagName('tr');

           $con=mysqli_connect('localhost', 'root', '', 'db_covmed');

        // mysqli_query($con,"delete from tbl_center"); 

        //   die();


          echo "<table id='grid'>";
          echo "<tr><th>NO.</th><th>COVID-19 Test Center</th><th>Location</th><th>Contact Number</th></tr>";
          foreach ($rows as $row) {
          $cols=$row->getElementsByTagName('td');
          if (isset($cols->item (0) ->nodeValue)) {

          echo "<tr><td>" . $cols->item (0) ->nodeValue."</td><td>".$cols->Item (1) ->nodeValue."</td><td>".$cols->item(
          2)->nodeValue."</td><td>".$cols->item(
          3)->nodeValue;


              $center=$cols->item(1)->nodeValue;
              $location=$cols->item(2 )->nodeValue; 
              $contact=$cols->item(3)->nodeValue;  
              
              // mysqli_query($con,"insert into tbl_center(center,location,contact) values('$center','$location','$contact')");

              $data=$this->db->where('location',$location)->get('tbl_center')->result_array();

               if(sizeof($data)==0)
                {
                  
                  $this->db->set('center', $center);
                  $this->db->set('location', $location);
                  $this->db->set('contact', $contact);
                  $this->db->insert('tbl_center'); 
                  }
                else
                {

                  $this->db->set('center', $center);
                  $this->db->set('contact', $contact);
                  $this->db->where('location', $location);
                  $this->db->update('tbl_center'); 

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
    
    

   