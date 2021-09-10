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
  background-color: #780bd5;
  color: white;
}
.ash{
    background-color:#dee1e6 !important;
}
</style>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="<?=base_url()?>asset/admin-css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
         <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="<?=base_url()?>welcome">COV<strong>MED</strong></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
               
            </form>
             <a  style="color:white; text-decoration: none; "><?=$this->session->userdata('username2')?>
            </a>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?=base_url()?>admin/profile2">Profile</a></li>
                        <!-- <li><a class="dropdown-item" href="#!">Activity Log</a></li> -->
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="<?=base_url()?>Logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav> 
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                            <a class="nav-link" href="<?=base_url()?>admin">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                             <a class="nav-link" href="<?=base_url()?>admin/reply">
                                <div class="sb-nav-link-icon"><i class="fab fa-facebook-messenger"></i></div>
                                Message
                            </a>
                            <a class="nav-link" href="<?=base_url()?>admin/user_list">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                User List
                            </a>
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="<?=base_url()?>admin/add_doctor">
                                <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                                Add Doctor
                            </a>
                            <a class="nav-link" href="<?=base_url()?>admin/show_doctor">
                                <div class="sb-nav-link-icon"><i class="fas fa-eye"></i></div>
                                Show Doctor
                            </a> 
                            <a class="nav-link" href="<?=base_url()?>admin/order_list">
                                <div class="sb-nav-link-icon"><i class="fas fa-eye"></i></div>
                                Order List
                            </a>                          
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="<?=base_url()?>admin/add_product">
                                <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                                Add Safety Items
                            </a>
                            
                            <a class="nav-link" href="<?=base_url()?>admin/show_items">
                                <div class="sb-nav-link-icon"><i class="fas fa-eye"></i></div>
                                Show Safety Items
                            </a>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?=$this->session->userdata('username2')?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">

                <!-- add items start -->


                  <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header ash"><h3 class="text-center font-weight-light my-4">See Item List</h3></div>
                                    <div class="card-body">                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

               
                   <table  class="table table-responsive text-center" id="grid">
			      
			      <tr >
			        
			        <th class="text-center">Product Image</th>
			        <th class="text-center">Product Type</th>
			        <th class="text-center">Price</th>
                    <th class="text-center">Info</th>
                    <th class="text-center">View</th>
                    <th class="text-center">Change</th>
			        <th class="text-center">Delete</th>
			      </tr>

			      <?php  foreach ($user as $user) {?>
			         
			         
                    <tr>
                    <?php 
                    echo '<td><a href="'.base_url().'asset/images/'.$user['product_image'].'"><img width="100px;" height="100px" src="'.base_url().'asset/images/'.$user['product_image'].'" alt=""></a></td>'; ?>

                    <td><?=$user['product_type']?></td>
                    <td><?=$user['price']?></td>
                    <td><?=$user['info']?></td>
                    <td><a href="<?=base_url()?>admin/view_item/<?=$user['id']?>"><button class="btn btn-primary">View</button></a></td>
                    <td><a href="<?=base_url()?>admin/edit_item/<?=$user['id']?>"><button class="btn btn-primary">Change</button></a></td>
                    <td><a href="<?=base_url()?>admin/delete_item/<?=$user['id']?>"><button class="btn btn-danger">Delete</button></a></td>
                    
                  </tr>
                 
			       <?php } ?> 
        
                 </table>
      
			      
			    
                <!-- add items end -->

            

                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url()?>asset/admin-js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url()?>asset/admin-assets/demo/chart-area-demo.js"></script>
        <script src="<?=base_url()?>asset/admin-assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="<?=base_url()?>asset/admin-js/datatables-simple-demo.js"></script>
    </body>
</html>
