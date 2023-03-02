<?php

include("koneksi.php");

$level = $_SESSION["level"];

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>EmailCHIMP | Responsive Bootstrap 4 Admin Dashboard Template</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="assets/images/favicon.ico" />
      <!-- <link rel="stylesheet" href="assets/css/backend-plugin.min.css"> -->
      <link rel="stylesheet" href="assets/css/backend.css?v=1.0.2">
      <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <link rel="stylesheet" href="assets/vendor/remixicon/fonts/remixicon.css">
      <link rel="stylesheet" href="assets/vendor/@icon/dripicons/dripicons.css"> 
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     </head>
  <body class="email-chimp ">
    <!-- loader Start -->
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
      
      <div class="iq-sidebar  sidebar-default ">
          <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
              <a href="backend/index.html" class="header-logo">
                  <img src="assets/images/logo.png" class="img-fluid  light-logo" alt="logo"><h5 class="logo-title text-white ml-3 mt-1">EmailCHIMP</h5>
              </a>
              <div class="iq-menu-bt-sidebar ">
                  <svg class="svg-icon feather feather-repeat wrapper-menu animated rotation"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="17 1 21 5 17 9"></polyline>
                  <path d="M3 11V9a4 4 0 0 1 4-4h14"></path><polyline points="7 23 3 19 7 15"></polyline><path d="M21 13v2a4 4 0 0 1-4 4H3"></path>
                  </svg>
              </div>
          </div>
          <div class="data-scrollbar" data-scroll="1">
              <nav class="iq-sidebar-menu">
                        <ul id="iq-sidebar-toggle" class="iq-menu">
                            <?php if($level == 'Manager') : ?>
                             <li class="active">
                                  <a href="?page-menu" class="svg-icon">                        
                                          <svg class="svg-icon feather feather-home"  width="20" height="20" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                          <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline>
                                          </svg>
                                      <span class="ml-3">MENU</span>
                                  </a>
                             </li>
                             <li class="">
                                    <a href="?page=transaksi2" class="">
                                         <svg class="svg-icon feather feather feather-send" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                         <line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                         </svg>
                                        <span class="ml-3">Transaksi</span>
                                    </a>
                                <ul id="campaigns" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                </ul>
                             </li>
                             <?php elseif($level == 'Kasir') : ?>
                             <li class="">
                                    <a href="?page=list-menu" class="">
                                    <svg class="svg-icon feather feather feather-users" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    <span class="ml-3">Pemesanan</span>
                                    </a>
                                <ul id="contacts" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                </ul>
                             </li>
                             <?php else : ?>
                                <li>
                                <a href="?page=pegawai" class="svg-icon">                        
                                          <svg class="svg-icon feather feather-home"  width="20" height="20" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                          <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline>
                                          </svg>
                                      <span class="ml-3">Pegawai</span>
                                  </a>
                                </li>
                             <?php endif; ?>
                        </ul>
                    </nav>
              <div class="p-3"></div>
          </div>
          </div>       <div class="iq-top-navbar">
          <div class="iq-navbar-custom">
              <nav class="navbar navbar-expand-lg navbar-light">
      
              <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                  <i class="ri-menu-line wrapper-menu"></i>
                  <a href="index.html" class="header-logo">
                  <img src="assets/images/logo.png" class="img-fluid  light-logo" alt="logo"><h5 class="logo-title ml-3 mt-1">EmailCHIMP</h5>
                      
                  </a>
                  <div class="navbar-breadcrumb">
                                  <h4>Dashboard</h4>
                              </div>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                  <div class="iq-search-bar device-search">
                      <form action="#" class="searchbox">
                      <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                      <input type="text" class="text search-input" placeholder="Search for your document , people,...">
                      </form>
                  </div>
                  <div class="d-flex align-items-center">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                      <i class="ri-menu-3-line"></i>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto navbar-list align-items-center">  
                          <li class="nav-item nav-icon search-content">
                                    <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-search-line"></i>
                                    </a>
                                    <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                        <form action="#" class="searchbox p-2">
                                            <div class="form-group mb-0 position-relative">
                                            <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                            <a href="#" class="search-link"><i class="las la-search"></i></a> 
                                            </div>
                                        </form>
                                    </div>
                                </li>               
                          <li class="nav-item nav-icon dropdown"> 
                              <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButtontwo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-notification-line"></i>
                                <span class="bg-primary dots"></span>
                            </a>
                          </li>
      
                          <li class="nav-item nav-icon dropdown"> 
                              <a href="#" class="search-toggle iq-user-toggle dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="assets/images/user/one.png" class="img-fluid rounded-small" alt="user">
                                        </a>
                          <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <div class="card mb-0">    
                                    <a class="right-ic btn btn-primary btn-block   position-relative iq-logout" href="logout.php" role="button">                                           
                                        Log Out
                                    </a>                                            
                                  </div>
                              </div>
                              </div>                            
                          </li>                    
                          </ul>                     
                      </div> 
                  </div>
                  </div>
              </nav>
          </div>
      </div>
      <div class="content-page">
        <div class="container">
            <?php 
               if(isset($_GET['page'])) {
                   $page = $_GET['page'];

                   switch ($page) {
                        case 'transaksi':
                            include "transaksi.php";
                            break;
                        case 'transaksi2':
                            include "transaksi2.php";
                            break;
                        case 'buat-transaksi':
                            include "buat_transaksi.php";
                            break;
                        case 'menu':
                            include "menu.php";
                            break;
                        case 'tambah-menu':
                            include "tambah_menu.php";
                            break;
                        case 'edit-menu':
                            include "edit_menu.php";
                            break;
                        case 'laporan':
                            include "laporan.php";
                            break;
                        case 'kasir':
                            include "kasir.php";
                            break;
                        case 'pegawai':
                            include "daftar-pegawai.php";
                            break;
                        case 'tambah-pegawai':
                            include "tambah-pegawai.php";
                            break;
                        case 'edit-pegawai':
                            include "edit-pegawai.php";
                            break;
                        case 'list-menu':
                            include "list-menu.php";
                            break;
                        default:
                            echo "<center><h3>Maaf, Halaman Tydack Ditemukan !</h3></center>";
                   }
               } else {
                   include "menu.php";
               }

               ?>
        </div>
   <!-- Page end  -->
    </div>
</div>
</div>
    <!-- Wrapper End-->
    <!-- Backend Bundle JavaScript -->
    <script src="assets/js/backend-bundle.min.js"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="assets/js/table-treeview.js"></script>
    
    <!-- SweetAlert JavaScript -->
    <script src="assets/js/sweetalert.js"></script>
    
    <!-- Vectoe Map JavaScript -->
    <script src="assets/js/vector-map-custom.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="assets/js/chart-custom.js"></script>
    
    <!-- slider JavaScript -->
    <script src="assets/js/slider.js"></script>
    
    <!-- app JavaScript -->
    <script src="assets/js/app.js"></script>
  </body>
</html>