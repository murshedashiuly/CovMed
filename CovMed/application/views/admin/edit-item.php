<style>
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
                                    <div class="card-header ash"><h3 class="text-center font-weight-light my-4">Change Product's Info</h3></div>
                                    <div class="card-body">

                                        <?=$this->session->flashdata('success')?>
                                        <form action="" method="post" enctype="multipart/form-data">
                                           <div class="form-group"> 
                                                <!-- <label for="">Photo</label> -->
                                                <br>
                                                <img width="200px;" height="200px" src="<?=base_url()?>asset/images/<?=$user[0]['product_image']?>" alt="">
                                                <br>
                                                <input type="file" name="product_image" >
                                                 
                                            </div>
                                            <br>
                                           <!--  <div class="form-group">
                                                <label for="exampleInputEmail1">Product Type</label>
                                                <input type="text" name="product_type" class="form-control" value="<?=set_value('product_type')?>" placeholder="Enter Product Name" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                
                                            </div> -->
                                             <div class="form-group">
                                            <label for="exampleInputPassword1">Product Type</label> <br>  
                                            <select  name="product_type" class="form-control" >               
                                                <option value="">Please Select Product</option>
                                                <option value="mask" <?php if(set_value('product_type')=='mask') { echo 'checked'; } else if($user[0]['product_type']=='mask'){ echo 'checked'; }?>  >Mask</option>

                                                <option value="sanitizer" <?php if(set_value('product_type')=='sanitizer') { echo 'checked'; } else if($user[0]['product_type']=='sanitizer'){ echo 'checked'; }?> >Sanitizer</option>

                                                <option value="gloves" <?php if(set_value('product_type')=='gloves') { echo 'checked'; } else if($user[0]['product_type']=='gloves'){ echo 'checked'; }?>  >Gloves</option>

                                                <option value="wipes" <?php if(set_value('product_type')=='wipes') { echo 'checked'; } else if($user[0]['product_type']=='wipes'){ echo 'checked'; }?>  >Wipes</option>
                                            </select>
                                         </div>
                                            <div class="error"><?=form_error('product_type')?></div>
                                             <br>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Product Price</label>
                                                <input type="text" name="price" class="form-control" value="<?php if(set_value('price')){ echo set_value('price'); }else{ echo $user[0]['price']; } ?>" placeholder="Enter Product Price" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                
                                            </div>
                                            <div class="error"><?=form_error('price')?></div>
                                             <br>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Product Info</label>
                                                <input type="text" name="info" class="form-control" value="<?php if(set_value('info')){ echo set_value('info'); }else{ echo $user[0]['info']; } ?>" placeholder="Enter Product Info" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                
                                            </div>
                                            <div class="error"><?=form_error('info')?></div>

                                            <div class="mt-4 mb-0">
                                                <!-- <div type="submit" class="d-grid btn btn-primary btn-block">Add Product</div> -->
                                                 <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

               

    
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
