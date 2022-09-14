<?php
include( '../controllers/add.php');
?>

<!DOCTYPE html>
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
<body>
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
          <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item d-none d-md-flex me-3">
              <div class="btn-list">
                <a href="https://github.com/tabler/tabler" class="btn btn-outline-white" target="_blank" rel="noreferrer">
                  <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-github" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg>
                  Source code
                </a>
                <a href="https://github.com/sponsors/codecalm" class="btn btn-outline-white" target="_blank" rel="noreferrer">
                  <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                  Sponsor
                </a>
              </div>
            </div>
            <div class="nav-item dropdown d-none d-md-flex me-3">
              <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                <span class="badge bg-red"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                <div class="card">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet consectetur exercitationem fugiat in ipsa ipsum, natus odio quidem quod repudiandae sapiente. Amet debitis et magni maxime necessitatibus ullam.
                  </div>
                </div>
              </div>
            </div>
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

                    <?php endif; ?> 


                  </div>
                  <div class="mt-1 small text-muted"></div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="#" class="dropdown-item">Set status</a>
                <a href="#" class="dropdown-item">Profile & account</a>
                <a href="#" class="dropdown-item">Feedback</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">Settings</a>
                <a href="#" class="dropdown-item">Logout</a>
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
                  <a class="nav-link" href="../admin/index.php" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Anasayfa
                    </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link " href="../admin/category.php">
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" /><line x1="12" y1="12" x2="20" y2="7.5" /><line x1="12" y1="12" x2="12" y2="21" /><line x1="12" y1="12" x2="4" y2="7.5" /><line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Ürün Kategorileri
                    </span>
                  </a>
                 </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../admin/tables.php" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 11 12 14 20 6" /><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Ürün Listesi
                    </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="#navbar-extra" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Admin
                    </span>
                  </a>                  
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="4" width="6" height="5" rx="2" /><rect x="4" y="13" width="6" height="7" rx="2" /><rect x="14" y="4" width="6" height="7" rx="2" /><rect x="14" y="15" width="6" height="5" rx="2" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Layout
                    </span>
                  </a>
                    </div>
                  </div>
                </li>
            </div>
          </div>
        </div>
      </div>
      <div class="page page-center">
      <div class="container-tight py-4">
        
      <form action="../controllers/add.php" method="POST" enctype="multipart/form-data">
      <?php if(count($errors)>0):?>
					<div class="alert alert-danger">
						<?php foreach($errors as $errors)://saasnbriisndnbndiitşködbyby?>
						<li><?php echo $errors;?></li>
						<?php endforeach;?>
					</div>
			   <?php endif; ?>
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Ürün Düzenleme</h2>
    
          
            <div class="mb-3">
          
          <label class="form-label">Kategori Adı</label>
          <select name="cid"  class=form-select> 
          
          <?php
           $selectquery= "SELECT * from category";

          $query= mysqli_query($pro,$selectquery);

          $num= mysqli_num_rows($query);                                                 
            
          while($row= mysqli_fetch_array($query)){
           
                  $ctg= $row['cname'];
                  $ctgi= $row['cid'];
                  echo "<option value='".$ctgi."'>".$ctg."</option>";

            }
            
            ?> </select>
            </div>
           <?php
           
           
           if(isset($_POST['edit-btn'])){

          
                $id= $_POST['edit_id'];
                //echo $id;

                $query= "SELECT * FROM products WHERE id=$id";
                $query_run= mysqli_query($pro,$query);
                //echo $query;
                //echo $query_run;
                foreach($query_run as $row){
                  ?>

                    <form action="add.php" method = "post">
                    
                      <input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
              
                      <div class="mb-3">
                        <label class="form-label">Ürün Adı</label>
                        <input type="text" name="edit_pname" class="form-control" value=<?php echo $row['pname']?>  placeholder="Ürününüz Adı">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Ürün Ücreti</label>
                        <input type="text"name="edit_pcost"  class="form-control"  value=<?php echo $row['pcost']?>  placeholder="Ürününüz Ücreti">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">İndirimli Ücret</label>
                        <input type="text" name="edit_pdisc" class="form-control" value=<?php echo $row['pdisc']?>  placeholder="Ürününüz indirimli ücreti">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Ürün fotoğrafı-1</label>
                        <input type="file" name="pimage1" id="pimage1" value=<?php echo $row['pimage1']?> class="form-control" >
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Ürün fotoğrafı-2</label>
                        <input type="file" name="edit_pimage2" value=<?php echo $row['pimage2']?> class="form-control" >
                      </div>

          
            <div class="modal modal-blur fade"></div>
                <div class="row">
                <div class="col-lg-8"> </div>
                <div class="col-lg-8">
                <div class="mb-3">
                    <label><input type="checkbox" name="edit_checks"  value=<?php echo $row['checks']?> /> Menüde gözüksün</label>
            
                </div>
                </div>
                </div>
                </div>

                <div class="modal-body">
                  <div class="row">
                   <div class="col-lg-12">
                    <div>
                        <label class="form-label">Ürün Açıklaması</label> 
                        <//?php echo "ksdjfkl"  ?>
                        <textarea class="form-control" name="edit_pinfo"  rows="3"><?php echo $row['pinfo']?></textarea>
                    </div>
                   </div>
                  </div>
                </div>

                <a href="../admin/tables.php" class="btn btn-danger">İptal</a>  
                <button type="submit" name="update-btn" class= "btn btn-primary">Güncelle</button>
                
                </form>
                
                <?php 
                }
            }
            ?>     
        </div>   
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="../static/dist/js/tabler.min.js"></script>

          

</body>
</html>