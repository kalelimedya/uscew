<?php
    include 'include/db.php';
// Checking valid form is submitted or not
if (isset($_POST['submit_btn'])) {
      
    	// storing in database
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$business = $_POST['business'];
	$message = $_POST['message'];
	$project = $_POST['project'];
	$tel = $_POST['tel'];

    
    // Storing google recaptcha response
    // in $recaptcha variable
    $recaptcha = $_POST['g-recaptcha-response'];
  
    // Put secret key here, which we get
    // from google console
    $secret_key = 'your_secret_key';
  
    // Hitting request to the URL, Google will
    // respond with success or error scenario
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret='
          . $secret_key . '&response=' . $recaptcha;
  
    // Making request to verify captcha
    $response = file_get_contents($url);
  
    // Response return by google is in
    // JSON format, so we have to parse
    // that json
    $response = json_decode($response);
  
    // Checking, if response is true or not
    if ($response->success == true) {
        echo '<script>alert("Google reCAPTACHA verified")</script>';
    } else {
        echo '<script>alert("Error in Google reCAPTACHA")</script>';
    }
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
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
     $mail->setfrom('uscewyazilim@gmail.com', 'İletişim Formu');
     $mail->addAddress('uscewyazilim@gmail.com');
     $mail->addReplyTo('uscewyazilim@gmail.com');
     //İçerik
     $mail->isHTML(true);
     $mail->Subject = 'İletişim Formu.'.$_POST['business'];
     $mail->Body = $_POST['message']."<br>"."Telefon Numarası:".$_POST['tel'];
    
     $mail->send();
     echo "Mesajınız İletildi --> ".$_POST['mail']."<br>";
    } catch (Exception $e) {
     echo 'Mesajınız İletilemedi. Hata: ', $mail->ErrorInfo;
    }
    exit;
}
?>