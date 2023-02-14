<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Your function Code 
?>


<?php
    include 'include/db.php';
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
                    
                        //Create an instance; passing `true` enables exceptions
                        $mail = new PHPMailer(true);

                        try {
                            //Server settings
                            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                            $mail->isSMTP();                                            //Send using SMTP
                            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                            $mail->Username   = 'uscew@gmail.com';                     //SMTP username
                            $mail->Password   = 'jtddwpcezgvefakz';                               //SMTP password
                            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                            //Recipients
                            $mail->setFrom('uscew@gmail.com', 'Mailer');
                            $mail->addAddress('uscew@gmail.com', 'Joe User');     
                            $mail->addReplyTo('uscew@gmail.com', 'Information'); 

                            //Content
                            $mail->isHTML(true);                                  //Set email format to HTML
                            $mail->Subject = 'Here is the subject';
                            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                            $mail->send();
                            echo 'Message has been sent';
                            header("Location:index.php");
                        } catch (Exception $e) {
                            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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