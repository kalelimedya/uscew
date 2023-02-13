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
    
	$sql .= "INSERT INTO contact (name, mail, business,message,project,tel)
    VALUES ('$name', '$mail', '$business','$message','$project','$tel')";

    if ($con->multi_query($sql) === TRUE) {
    echo "New records created successfully";
    header("Location:index.php?durum=ok");
    } else {
    echo "Error: " . $sql . "<br>" . $con->error;
    }
    exit;
}
?>