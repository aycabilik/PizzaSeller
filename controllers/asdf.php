<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    require 'inc/config.php'; 

    if ( $_POST)
    {

        $email = $_POST['email'];
        print_r($email);
        
        $query= "INSERT INTO iletisim(`email`) VALUES 
        (?)";
        
        $stmt = $pdo-> prepare($query);
        $stmt->bind_param('s', $email);
        
        
        if($stmt->execute()){
            $user_id= $pro->insert_id;
            $_SESSION['email']=$email;
            
            
        }

        


       // DB::insert("INSERT INTO iletisim(skyidesign_gpgadmindb) VALUES (?)" ,array($email));
        //$error = mysqli_error($iletisim);
        // print("Error Occurred: ".$error);
       // print_r($email);
       // header("Location:index.php?success=1");

       

        require 'phpmailler/src/Exception.php';
        require 'phpmailler/src/PHPMailer.php';
        require 'phpmailler/src/SMTP.php';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.yandex.ru';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'dogukan.dugun@mesebilisim.com';                     //SMTP username
            $mail->Password   = 'Dd12345*!';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;         
            $mail->SMTPOptions = array(
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
                )
                );
            //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('dogukan.dugun@mesebilisim.com', 'Doğukan Düğün');
            $mail->addAddress('dogukan.dugun@hotmail.com', 'Gpg');     //Add a recipient
           

           

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->CharSet = 'UTF-8';
            $mail->Subject = 'E-bülten Aboneliği';
            $mail->Body    = $email;
            $mail->AltBody = '';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    


    


?>