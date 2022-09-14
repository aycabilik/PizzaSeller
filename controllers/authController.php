<?php
session_start();
//include('security.php');
include('../config/dbpr.php');

$errors = array();
$username="";
$email="";

if(isset($_POST['signup-btn'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];


    if(empty($username)){
      $errors['username']="Kullanıcı adını giriniz";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email']="Geçersiz e-mail!";
    }
    if(empty($email)){
        $errors['email']="E-mailinizi giriniz";
    }
    if(empty($password)){
        $errors['password']= "Şifre giriniz";
    }
    if($password != $passwordConf){
        $errors['password']="Girilen şifreler birbiriyle eşleşmedi!";
    }


    $emailQuery= "SELECT * FROM users WHERE email=? LIMIT 1";
    $stmt = $pro-> prepare($emailQuery);
    $stmt->bind_param('s',$email);
    $stmt->execute();
    $result= $stmt->get_result();
    $userCount= $result->num_rows;
    $stmt->close();

    $usernameQuery= "SELECT * FROM users WHERE username=? LIMIT 1";
    $stmt = $pro-> prepare($usernameQuery);
    $stmt->bind_param('s',$username);
    $stmt->execute();
    $result2= $stmt->get_result();
    $userCount2= $result2->num_rows;
    $stmt->close();


    if($userCount >0){
        $errors['email']= "Bu e-mail kayıtlı!";
    }
    if($userCount2 >0){
        $errors['username']= "Bu kullanıcı adı kayıtlı!";
    }

    if(count($errors) === 0){
        $password = password_hash($password,PASSWORD_DEFAULT);

        $sql= "INSERT INTO users( username, email,password) VALUES (?,?,?)";
        $stmt = $pro-> prepare($sql);
        $stmt->bind_param('sss', $username, $email, $password);
        
        if($stmt->execute()){
            $user_id= $pro->insert_id;
            $_SESSION['id']= $user_id;
            $_SESSION['username']= $username;
            $_SESSION['email']= $email;

            $_SESSION['message']= "Kayıt Olundu!";
            $_SESSION['alert-class']= "alert-succes";
            header('location:index.php');
            exit();

        }else{
            $errors['db_error']="Veri hatası: kayıt başarısız";
            //header('location:login.php');
        }
    
    }
}


if(isset($_POST['login-btn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(empty($username)){
      $errors['username']="Kullanıcı adını giriniz";
    }
    if(empty($password)){
        $errors['password']= "Şifre giriniz";
    }


    $sql="SELECT * FROM users WHERE email=? OR username=? LIMIT 1";
    $stmt= $pro->prepare($sql);
    $stmt-> bind_param('ss', $username, $username);
    $stmt->execute();
    $result= $stmt->get_result();
    $user= $result->fetch_assoc();
    echo $user;
    if(!empty($user)&&password_verify($password, $user['password'])){
       
        $_SESSION['id']= $user['id'];
        $_SESSION['username']= $user['username'];
        $_SESSION['email']= $user['email'];

        $_SESSION['success']= "Giriş yapıldı. Hoşgeldiniz!";
        //echo $username;
        echo "asdfg";
        $_SESSION['alert-class']= "alert-succes";
        header('location:index.php');
        exit();
    }

   
    else{
        $errors['login_fail']="Hatalı Giriş!";
    }
}


if(isset($_POST['signupAd-btn'])){
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];


    if(empty($username)){
      $errors['username']="Kullanıcı adını giriniz";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email']="Geçersiz e-mail!";
    }
    if(empty($email)){
        $errors['email']="E-mailinizi giriniz";
    }
    if(empty($password)){
        $errors['password']= "Şifre giriniz";
    }
    if($password != $passwordConf){
        $errors['password']="Girilen şifreler birbiriyle eşleşmedi!";
    }


    $emailQuery= "SELECT * FROM admins WHERE email=? LIMIT 1";
    $stmt = $pro-> prepare($emailQuery);
    $stmt->bind_param('s',$email);
    $stmt->execute();
    $result= $stmt->get_result();
    $userCount= $result->num_rows;
    $stmt->close();

    $usernameQuery= "SELECT * FROM admins WHERE username=? LIMIT 1";
    $stmt = $pro-> prepare($usernameQuery);
    $stmt->bind_param('s',$username);
    $stmt->execute();
    $result2= $stmt->get_result();
    $userCount2= $result2->num_rows;
    $stmt->close();


    if($userCount >0){
        $errors['email']= "Bu e-mail kayıtlı!";
    }
    if($userCount2 >0){
        $errors['username']= "Bu kullanıcı adı kayıtlı!";
    }

    if(count($errors) === 0){
        $password = password_hash($password,PASSWORD_DEFAULT);

        $sql= "INSERT INTO admins( username, email,password) VALUES (?,?,?)";
        $stmt = $pro-> prepare($sql);
        $stmt->bind_param('sss', $username, $email, $password);
        
        if($stmt->execute()){
            $user_id= $pro->insert_id;
            $_SESSION['id']= $user_id;
            $_SESSION['username']= $username;
            $_SESSION['email']= $email;

            $_SESSION['message']= "Kayıt Olundu!";
            $_SESSION['alert-class']= "alert-succes";
            header('location:index.php');
            exit();

        }else{
            $errors['db_error']="Veri hatası: kayıt başarısız";
            //header('location:login.php');
        }
    
    }
}