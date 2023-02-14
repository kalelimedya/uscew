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
        
                if ($con->multi_query($sql) == TRUE) {
                    header("Location:index.php");


                } else {
                echo "Error: " . $sql . "<br>" . $con->error;
                }           
                   
    } else {
       echo "Hata";
    }
    exit;
}
?>