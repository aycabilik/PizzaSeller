<?php
//session_start();
//include('../config/dbpr.php');
include('security.php');

$errors = array();
$pname= "";
$pcost= "";
$cname="";



if(isset($_POST['add-btn'])){ 
    
    $cid= $_POST['cid'];
    //echo $cid;
    $pname= $_POST['pname'];
    $pcost= $_POST['pcost'];
    $pinfo= $_POST['pinfo'];
    $pdisc= $_POST['pdisc'];
    $pimage1= $_FILES["pimage1"]['name'];
    //$pimage2= $_FILES['pimage2']['name2'];
    
    $target_dir= "product_image/";
    $target_file= $target_dir.basename($_FILES["pimage1"]["name"]);

    if(empty($pname)){
      
        $errors['pname']="Ürün adını giriniz";
    }
    if(empty($pcost)){
        
        $errors['pcost']="Ürün ücretini giriniz";
    }

    if(isset($_POST['checks'])){
        echo "işaretli";
        $checks= $_POST['checks'];
    }else{
        echo"işaretlenmedi";
        $checks=0;
    }

    if(count($errors) === 0){
        echo "ıokfjç";
        $query= "INSERT INTO products(`cid`,`pname`,`pcost`,`pinfo`,`pdisc`,`pimage1`,`checks`) VALUES 
        (?,?,?,?,?,?,?)";
       
        $stmt = $pro-> prepare($query);
        $stmt->bind_param('isdsdss',$cid, $pname,$pcost,$pinfo,$pdisc,$pimage1,$checks);
        
         
        if($stmt->execute()){
            echo "uıjokplğşü";
            $user_id= $pro->insert_id;
            $_SESSION['cid']=$cid;
            $_SESSION['pname']=$pname;
            $_SESSION['pcost']=$pcost;
            $_SESSION['pinfo']=$pinfo;
            $_SESSION['pdisc']=$pdisc;
            $_SESSION['checks']=$checks;
            
            move_uploaded_file($_FILES["pimage1"]["tmp_name"],$target_file);
            $_SESSION['status']= "Ürün eklendi!";
            $_SESSION['alert-class']= "alert-succes";
            
            header('location:tables.php');
            exit();
        
        }else{
            var_dump($stmt->error);
            $errors['db_error']="Veri hatası: kayıt başarısız";
        } 
    }
 }


if(isset($_POST['update-btn']))
{
    
    $id=$_POST['edit_id'];
    $cid = $_POST['cid'];
    $pname = $_POST['edit_pname'];
    $pcost= $_POST['edit_pcost'];
    $pinfo= $_POST['edit_pinfo'];
    $pdisc= $_POST['edit_pdisc'];
    $pimage1= $_FILES["pimage1"]['name'];

    $target_dir= "product_image/";
    $target_file= $target_dir.basename($_FILES["pimage1"]["name"]);

    if(empty($pname)){
        $errors['pname']="Ürün adını giriniz";
    }
    if(empty($pcost)){
        $errors['pcost']="Ürün ücretini giriniz";
    }

    if(isset($_POST['edit_checks'])){
        $checks= 1;
    }else{
        $checks=0;
    }

    if(count($errors) === 0){
       
        $query = "UPDATE products SET pname= '$pname', cid= '$cid', pcost='$pcost', pinfo ='$pinfo', pdisc='$pdisc', pimage1= '$pimage1', checks='$checks' WHERE id='$id'";
       
        if($pro->query($query)===TRUE){
         
            move_uploaded_file($_FILES["edit_pimage1"]["tmp_name"],$target_file);
            $_SESSION['status']= "Ürün güncellendi!";
            $_SESSION['alert-class']= "alert-succes";
           
            header('location:../admin/tables.php');
            exit();
        }else{
            ?>
            <div class="alert alert-danger">
                      <?php foreach($errors as $errors):?>
                      <li><?php echo $errors;?></li>
                    <?php endforeach;?>
                </div>
          <?php 
        }
        
    } 

}

if(isset($_POST['del_data']))
{
    
    $id=$_POST['delete_id'];
   
    $query = "DELETE FROM products WHERE id='$id' ";

    if($pro->query($query)===TRUE){
        $_SESSION['message']= "Ürün silindi!";
        $_SESSION['alert-class']= "alert-succes";
       
        header('location:../admin/tables.php');
        exit();
    }else{
        echo "error". $pro->error;
    }


}


if(isset($_POST['addc-btn'])){ 

    $cname= $_POST['cname'];
    $cinfo= $_POST['cinfo'];

    if(empty($cname)){
        $errors['cname']="Ürün adını giriniz";
    }
    

    if(isset($_POST['checksC'])){
        //echo "işaretli";
        $checksC= $_POST['checksC'];
    }else{
        //echo"işaretlenmedi";
        $checksC=0;
    }

    if(count($errors) === 0){
        echo "error yok";
        $query= "INSERT INTO category(`cname`,`cinfo`,`checksC`) VALUES (?,?,?)";
      
        $stmt = $pro-> prepare($query);
        echo $pro->error;

        $stmt->bind_param('sss', $cname,$cinfo, $checksC);
        
       
        
        if($stmt->execute()){
            //echo "oldu mu";
            $_SESSION['cname']=$cname;
            $_SESSION['cinfo']=$cinfo;
            $_SESSION['checksC']=$checksC;
            echo "jdfkslşai";
            //move_uploaded_file($_FILES["pimage1"]["tmp_name"]."product_image/".$_FILES["pimage1"]["name"]);
            $_SESSION['status']= "Kategori eklendi!";
            $_SESSION['alert-class']= "alert-succes";
            
            header('location:category.php');
            exit();
        
        }else{
            $errors['db_error']="Veri hatası: kayıt başarısız";
        } 
    }
 }

if(isset($_POST['updatec-btn']))
{
    $cid=$_POST['edit_cid'];
    $cname = $_POST['edit_cname'];
    
    $cinfo= $_POST['edit_cinfo'];
        
    if(empty($cname)){
        $errors['cname']="Ürün adını giriniz";
    }
   
    if(isset($_POST['edit_checksC'])){
        $checksC= 1;
    }else{
        $checksC=0;
    }

    if(count($errors) === 0){
        
        $query = "UPDATE category SET cname= '$cname',cinfo ='$cinfo', checksC='$checksC' WHERE cid='$cid' ";

        if($pro->query($query)===TRUE){
            $_SESSION['status']= "Kategori güncellendi!";
            $_SESSION['alert-class']= "alert-succes";
           
            header('location:../admin/category.php');
            exit();
        }else{
            echo "error". $pro->error;
        }
        
    } 

}
echo $cname;
if(isset($_POST['delc_data']))
{
    $cid=$_POST['delete_cid'];

    $query = "DELETE FROM category WHERE cid='$cid' ";
   

    if($pro->query($query)===TRUE){
        $_SESSION['message']= "Kategori silindi!";
        $_SESSION['alert-class']= "alert-succes";
       
        header('location:../admin/category.php');
        exit();
    }else{
        echo "error". $pro->error;
    }
}


if(isset($_POST['updateAd-btn']))
{
    
    $id=$_POST['edit_id'];
   
    $username = $_POST['edit_name'];
    $email = $_POST['edit_email'];
    

    if(empty($username)){
        $errors['username']="Kullanıcı adını giriniz";
      }
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $errors['email']="Geçersiz e-mail!";
      }
      if(empty($email)){
          $errors['email']="E-mailinizi giriniz";
      }

    if(count($errors) === 0){
        
        $query = "UPDATE admins SET username= '$username',  email ='$email' WHERE id='$id' ";

        if($pro->query($query)===TRUE){
            $_SESSION['status']= "Admin güncellendi!";
            $_SESSION['alert-class']= "alert-succes";
           
            header('location:../admin/admin.php');
            exit();
        }else{
            echo "error". $pro->error;
        }
        
    } 
}

if(isset($_POST['delAp_data']))
{
    
    $id=$_POST['delete_id'];
   
    $query = "DELETE FROM admins WHERE id='$id' ";

    if($pro->query($query)===TRUE){
        $_SESSION['message']= "Admin silindi!";
        $_SESSION['alert-class']= "alert-succes";
       
        header('location:../admin/admin.php');
        exit();
    }else{
        echo "error". $pro->error;
    }


}