
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
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 text-center">Dashboard</h1>
                        <ol class="breadcrumb mb-4 text-center">
                            <!-- <li class="breadcrumb-item active text-center">Dashboard</li> -->
                        </ol>
                        <br>  <br>  
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Users</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" style="text-decoration: none;" href="<?=base_url()?>Admin/user_list"><?=$user?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Total Messages</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" style="text-decoration: none;" href="<?=base_url()?>Admin/reply"><?=$message?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Doctors</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" style="text-decoration: none;" href="<?=base_url()?>Admin/show_doctor"><?=$doctor?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Total Orders</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" style="text-decoration: none;" href="<?=base_url()?>Admin/order_list"><?=$order?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>                      
                    </div>
                </main>
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
