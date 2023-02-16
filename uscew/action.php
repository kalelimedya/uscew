<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Your function Code 
?>


<?php
    include 'include/db.php';
	
	
	
	$captcha;
if (isset($_POST['g-recaptcha-response'])) {
    $captcha = $_POST['g-recaptcha-response'];
}
// Checking For correct reCAPTCHA
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=SECRETKEY&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
if (!$captcha || $response.success == false) {
    echo "Your CAPTCHA response was wrong.";
	header("location:iletisim.php?durum=no");
    exit ;
}

	
if (isset($_POST['submit_btn'])) {
      
    	// storing in database
	$name = $_POST['name'];
	$email = $_POST['mail'];
	$business = $_POST['business'];
	$message = $_POST['message'];
	$project = $_POST['project'];
	$tel = $_POST['tel'];

    if($_POST["name"]!="" || $_POST["mail"]!="" ||  $_POST["message"]!="" || $_POST["project"]!="" || $_POST["tel"]!="") {

        $sql = "INSERT INTO contact (name, mail, business, message, project, tel)
        VALUES ('$name', '$email', '$business','$message','$project','$tel')";
		
		
        
                if ($con->multi_query($sql) === TRUE) {
                    
                               require 'PHPMailer/src/Exception.php';
                                require 'PHPMailer/src/PHPMailer.php';
                                require 'PHPMailer/src/SMTP.php';
                                
                                
                                $mail = new PHPMailer(true);
                                try {
                                //Server settings
                                $mail->CharSet = 'UTF-8';
                                $mail->SMTPDebug = 0; // debug on - off
                                $mail->isSMTP(); 
                                $mail->Host = 'smtp.gmail.com'; // SMTP sunucusu örnek : mail.alanadi.com
                                $mail->SMTPAuth = true; // SMTP Doğrulama
                                $mail->Username = 'uscewyazilim@gmail.com'; // Mail kullanıcı adı
                                $mail->Password = 'jtddwpcezgvefakz'; // Mail şifresi
                                $mail->SMTPSecure = 'ssl'; // Şifreleme
                                $mail->Port = 465; // SMTP Port
                                $mail->SMTPOptions = array(
                                'ssl' => array(
                                'verify_peer' => false,
                                'verify_peer_name' => false,
                                'allow_self_signed' => true
                                )
                                );
                                
                                //Alıcılar
                                $mail->setfrom('erenekmekci@kalelimedya.com', 'Soru Sorun&Teklif Al');
                                $mail->addAddress('erenekmekci@kalelimedya.com');
                                $mail->addReplyTo('erenekmekci@kalelimedya.com');
                                //İçerik
                                $mail->isHTML(true);
                                $mail->Subject = 'Proje:'.$_POST['project'];
                                $mail->Body ="İsim ve Soyadı:".$_POST['name']."<br>".  "Mesaj:".$_POST['message']."<br> <br>"."Telefon Numarası:".$_POST['tel']."<br>". "Proje:".$_POST['project']."<br>"."Şirket:".$_POST['business'];
                                


								$mail->send();
                                echo "Mesajınız İletildi --> ".$_POST['mail']."<br>";
								 header("location:iletisim.php?durum=ok");
                                } catch (Exception $e) {
                                echo 'Mesajınız İletilemedi. Hata: ', $mail->ErrorInfo;
                                }

 

                } else {
                echo "Error: " . $sql . "<br>" . $con->error;
                }           
                   
    } else {
       echo "Hata";
    }
    exit;
}
?>
