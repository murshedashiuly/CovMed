
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
                <h1>Vaccine</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?=base_url()?>welcome">Home</a></li>
                    <li class="active"><a href="<?=base_url()?>welcome/vaccine">Vaccine</a></li>
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

	 			<input type="text" class="get_vaccine_name form-control" name="search" onkeyup="get_vaccine()" placeholder="search country">

	 		</div>

	 		</div>

	 		<div class="col-md-6">

	 		<div class="form-group"> 

	 			<input type="button" class="btn color" name="submit" onclick="get_vaccine()" value="search">

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
        $url="https://www.pharmaceutical-technology.com/covid-19-vaccination-tracker/";

        $html=file_get_contents($url);

        $dom=new domDocument;

        @$dom->loadHTML ($html);
        

        $tables=$dom->getElementsByTagName('table');
        $rows=$tables->item (0) ->getElementsByTagName('tr');

        $con=mysqli_connect('localhost', 'root', '', 'db_covmed');

        // mysqli_query($con,"delete from tbl_vaccine"); 

        //   die();



        //echo $tables;

        echo "<table id='grid'>";

         echo "<tr><th>Country</th><th>Doses Administered</th><th>Doses per 1000</th><th>Fully vaccinated Population (%)</th><th>Vaccine being used in a country</th></tr>";

         
        foreach ($rows as $row) {
        $cols=$row->getElementsByTagName('td');
        if (isset($cols->item (0) ->nodeValue) &&  isset($cols->item (1) ->nodeValue) && isset($cols->item (2) ->nodeValue) && isset($cols->item (3) ->nodeValue) && isset($cols->item (4) ->nodeValue) ) {

           

          

          
              echo "<tr><td>" . $cols->item (0) ->nodeValue. "</td><td>".$cols->item(1)->nodeValue."</td><td>".$cols->item (2) ->nodeValue."</td><td>".$cols->item (3) ->nodeValue. "</td><td>".$cols->item (4) ->nodeValue. "</td></tr>";
              



              $country=$cols->item(0)->nodeValue;
              $dose=$cols->item(1)->nodeValue; 
              $per =$cols->item(2)->nodeValue; 
              $vaccinated =$cols->item(3)->nodeValue; 
              $used =$cols->item(4)->nodeValue; 
              
              // mysqli_query($con,"insert into tbl_vaccine(country,dose,per ,vaccinated ,used ) values('$country','$dose','$per ','$vaccinated ','$used ')");

               $data=$this->db->where('country',$country)->get('tbl_vaccine')->result_array();

               if(sizeof($data)==0)
                {
                  
                  $this->db->set('country', $country);
                  $this->db->set('dose', $dose);
                  $this->db->set('per', $per);
                  $this->db->set('vaccinated', $vaccinated);
                  $this->db->set('used', $used);
                  $this->db->insert('tbl_vaccine'); 
                  }
                else
                {

                  $this->db->set('dose', $dose);
                  $this->db->set('per', $per);
                  $this->db->set('vaccinated', $vaccinated);
                  $this->db->set('used', $used);
                  $this->db->where('country', $country);
                  $this->db->update('tbl_vaccine'); 

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
    
    

   