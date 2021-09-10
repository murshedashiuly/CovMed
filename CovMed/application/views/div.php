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
                <h1>Welcome To Bangladesh's Division</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?=base_url()?>welcome">Home</a></li>
                    <li class="active"><a href="<?=base_url()?>welcome/div">Division</a></li>
                </ul>
            </div>
        </div>
    </section>

    

    
  <!-- world wide tracker start-->
      <div class="container-fluid bg-light p-5 text-center my-3">
        <h1 class="h1"><span>Today</span> <?php echo date('y-m-d');?></h1>
    </div>

  <!-- search start -->
    <div class="container bg-light p-3 my-5 text-center">
        <!-- <h5 class="text-info">"Prevention is the Cure."</h5>
        <p class="text-muted">Stay Indoors Stay Safe.</p> -->

        <div class="col-md-12"> 

            <div class="row">

            <div class="col-md-6">

            <div class="form-group"> 

                <input type="text" class="get_div_name form-control " name="search"  onkeyup="get_div()" placeholder="search division">
               
                 
            </div>

            </div>

            <div class="col-md-6">

            <div class="form-group"> 

               <input type="button" class="btn color" name="submit" onclick="get_div()" value="search"></a>

            </div>

            </div>
            </div>
            <table class="table"> 
            <theader>
                
                    <tr>
                  <!--   <th>Division</th>
                    <th>District</th>
                    <th>Cases</th> -->

                    </tr>

            </theader>
            <tbody class="our_result"></tbody>

            </table>

     </div>
    </div>
    <!-- search end -->

    <!-- <canvas id="myChart"></canvas> -->

    <div class="container-fluid">
      <?php
        $url="http://dashboard.dghs.gov.bd/webportal/pages/covid19.php";

        $html=file_get_contents($url);

        $dom=new domDocument;

        @$dom->loadHTML ($html);

        $tables=$dom->getElementsByTagName('table');

        $rows=$tables->item (0) ->getElementsByTagName('tr');

         $con=mysqli_connect('localhost', 'root', '', 'db_covmed');

        // mysqli_query($con,"delete from tbl_division"); 

        //   die();

        echo "<table id='grid'>";
        echo "<tr><th>Division</th><th>District</th><th>Cases</th></tr>";
        foreach ($rows as $row) {
        $cols=$row->getElementsByTagName('td');
        if (isset($cols->item (0) ->nodeValue)) {

        echo "<tr><td>" . $cols->item (0) ->nodeValue."</td><td>".$cols->Item (1) ->nodeValue."</td><td>".$cols->item(
        2)->nodeValue;

              $division=$cols->item(0)->nodeValue;
              $district=$cols->item(1 )->nodeValue; 
              $cases=$cols->item(2)->nodeValue;  
              

             
             $data=$this->db->where('division',$division)->where('district',$district)->get('tbl_division')->result_array();
                

                // echo '<td>'.sizeof($data).'</td>';

                if(sizeof($data)==0)
                {
                  // echo '<td>'."insert".'</td>';
                   // mysqli_query($con,"insert into tbl_division(division,district,cases) values('$division','$district','$cases')");

                  $this->db->set('cases', $cases);
                  $this->db->set('division', $division);
                  $this->db->set('district', $district);
                  $this->db->insert('tbl_division'); 
                                  }
                else
                {

                  // $var1=-1000;
                  // echo '<td>'."update".'</td>';

                 
                  // mysqli_query($con, "UPDATE tbl_division SET cases = $var1 WHERE 'tbl_division.division' =$division AND 'tbl_division.district' = $district");
                   
                   // UPDATE `tbl_user` SET `user_address` = 'sylhet' WHERE `tbl_user`.`id` = 19;
                  $this->db->set('cases', $cases);
                  $this->db->where('division', $division);
                  $this->db->where('district', $district);
                  $this->db->update('tbl_division'); 

                }
             // if(sizeof($data)==0){
                 
             //      mysqli_query($con,"insert into tbl_division(division,district,cases) values('$division','$district','$cases')");
             // }
             // else
             // { 

             //   mysqli_query($con,"update into tbl_division(division,district,cases) values('$division','$district','$cases')");
             // }


             // $var= mysqli_query($con,"insert into tbl_division(division,district,cases) values('$division','$district','$cases')");
             

           //   foreach ($data as $data) {
      
           //  echo '<tr>';
           //  echo '<td>'.sizeof($data).'</td>';
           //  echo '</tr>';


           // }

           // $data['message']=$this->db->get('tbl_contact')->num_rows();

             


        }

        }
        echo "</table>";
        ?>
    </div>

 
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
    
    

