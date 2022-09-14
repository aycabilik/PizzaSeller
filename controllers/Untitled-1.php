<div class="container">
            <div class="row">
              <div class="col-md-5 mx-auto mt-5">
                  <?php if(isset($_SESSION['message'])): ?>
                    <div class= "alert alert-success">
                    <?php echo $_SESSION['message'];?>
                    </div>
                    <?php endif; ?>
                    <?php unset($_SESSION['message']);?>
                </div> 
              </div>           
          </div>
          <script>
          setTimeout(function() => {
             let alert= document.querySelector(".alert");
             alert.remove();
          }, 3000);
          </script>













<?php if(isset($_SESSION['status'])){
        ?>
            <div class= "alert alert-warning alert-dismissible fade show" role="alert">
              <strong></strong> <?php echo $_SESSION['status'];?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></b>
            </div>
            <?php
            unset($_SESSION['status']);
      }
      ?>

















if(count($errors) === 0){

$query= "INSERT INTO products(pname,pcost,pinfo,pdisc,pimage1,pimage2) VALUES 
(?,?,?,?)";
//$stmt->close();
$stmt = $pro-> prepare($query);
$stmt->bind_param('sdsd', $pname,$pcost,$pinfo, $pdisc );

// if(isset($_POST['check'])){
 //   echo "Menüye ve listeye eklendi.";
//}else{
  //  "Listeye eklendi.";
//}

if($stmt->execute()){
    $user_id= $pro->insert_id;
    $_SESSION['pname']=$pname;
    $_SESSION['pcost']=$pcost;
    $_SESSION['pinfo']=$pinfo;
    $_SESSION['pdisc']=$pdisc;
    
    //$_SESSION['checks']=$checks;
    

    $_SESSION['status']= "Ürün eklendi!";
    $_SESSION['alert-class']= "alert-succes";
    
    header('location:index.php');
    exit();

}else{
    $errors['db_error']="Veri hatası: kayıt başarısız";
} 
}
}



if(count($errors) === 0){

$query= "INSERT INTO products(pname,pcost,pinfo,pdisc,pimage1,pimage2) VALUES 
($pname, $pcost, $pinfo, $pdisc, $pimage1, $pimage2)";

if($pro->query($query)===TRUE){
    
    header('location:../admin/index.php');
    exit();
}else{
    echo"jdskjf";
}
 

// if(isset($_POST['check'])){
 //   echo "Menüye ve listeye eklendi.";
//}else{
  //  "Listeye eklendi.";
//}


}