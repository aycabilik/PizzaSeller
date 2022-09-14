<?php 
//session_start();
include('../controllers/security.php');
 ?>
<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta3
* @link https://tabler.io
* Copyright 2018-2021 The Tabler Authors
* Copyright 2018-2021 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="../static/dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="../static/dist/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="../static/dist/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="../static/dist/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="../static/dist/css/demo.min.css" rel="stylesheet"/>
  </head>
  <body class="antialiased">
    <div class="wrapper">
      <header class="navbar navbar-expand-md navbar-light d-print-none">
        <div class="container-xl">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href=".">
              <img src="../static/dist/img/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
            </a>
          </h1>
          
            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm" style="background-image: url(../static/avatars/000m.jpg)"></span>
                <div class="d-none d-xl-block ps-2">
                  <div>
                  <?php if(isset($_SESSION['message'])): ?>
                  <div class="alert <?php echo $_SESSION['alert-class']; ?> ">
                     <?php  
                            echo $_SESSION['message']; 
                            unset($_SESSION['message']);
                            unset($_SESSION['alert-class']);
                      
                      ?>
                  </div>
                    <?php endif; ?>
                    
                     <?php if(isset($_SESSION['username'])): ?>
                      <h3> <?php echo $_SESSION['username']; ?> </h3>
                      <?php else: {
                          echo "yok";
                      } ?>

                    <?php endif; ?></div>
                  <div class="mt-1 small text-muted"></div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="#" class="dropdown-item">Set status</a>
                <a href="#" class="dropdown-item">Profile & account</a>
                <a href="#" class="dropdown-item">Feedback</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">Settings</a>
                <a href="logout.php" class="dropdown-item">Çıkış</a>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div class="navbar navbar-light">
            <div class="container-xl">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Anasayfa
                    </span>
                  </a>
                </li>
                <li class="nav-item active ">
                  <a class="nav-link" href="category.php" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" /><line x1="12" y1="12" x2="20" y2="7.5" /><line x1="12" y1="12" x2="12" y2="21" /><line x1="12" y1="12" x2="4" y2="7.5" /><line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Ürün Kategorileri
                    </span>
                  </a>
                  
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="tables.php" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 11 12 14 20 6" /><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Ürün Listesi
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="admin.php">
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Admin
                    </span>
                  </a>
                 
                </li>
                
            </div>
          </div>
        </div>
      </div>
      <div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Kategoriler
                </h2>
              </div>
              <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                  
                  <a href="newc.php" class="btn btn-primary d-none d-sm-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                    Kategori Ekle
                  </a>
                  <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-12">
                <div class="card">
                  <div class="table-responsive">
                    <table
		class="table table-vcenter card-table">
                      <thead>
                        <tr>
                        <th>Kategori ismi</th>
                        <th>kategori açıklaması</th>
                        <th>menüde gözüksün</th>
                        <th>İşlemler</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                  
                
                 <?php

                    //include('../config/dbpr.php');

                    $selectquery= "SELECT * from category";

                    $query= mysqli_query($pro,$selectquery);

                    $num= mysqli_num_rows($query);                                                 
                      
                    while($row= mysqli_fetch_array($query)){?>
                   <tr>
                            
                             <td ><?php echo $row['cname'];?></td> 
                             <td ><?php echo $row['cinfo'];?></td> 
                             <td ><?php echo $row['checksC'];?></td>
                             
                             <td>
                               <form action="../controllers/category_edit.php" method="post">
                                  <input type="hidden" name="edit_cid"   value="<?php echo $row['cid'];?>">
                                  <button type="submit" name="editc-btn" class= "btn btn-success" >Düzenle</button>                               
                               </form>
                             </td>
                             <td>
                                <form method="post">
                                    <input type="hidden" name="delete_cid"   value="<?php echo $row['cid'];?>">
                                    <button type="submit" name="deletec-btn" class="btn btn-danger">Sil</button>
                               </form>
                            </td>
                        </tr>  
                        <?php
                          }
                          ?>

                          <div class="modal-body"
                          <?php
                          if(isset($_POST['delete_cid']))
                          {
                            $cid= $_POST['delete_cid'];
                            //echo $id;
                          ?>
                          <h4> Silmek istediğinize emin misiniz? </h4>
                          </div>
                          <div class= "modal-footer"
                          
                          <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="history.back();">İptal </button>
                          
                          <form action="../controllers/add.php" method="post">
                              <input type="hidden" name="delete_cid"   value="<?php echo $cid;?>">
                              <button type="submit" name="delc_data" class="btn btn-primary" >Sil </button>
                          </form> 
                          <?php
                          }
                           ?>      
                
                </tbody>                      
                    </table>
                  </div>
                </div>
              </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="../static/dist/js/tabler.min.js"></script>
  </body>
</html>