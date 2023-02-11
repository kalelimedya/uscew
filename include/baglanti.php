<?php session_start(); 

include 'db.php';
/*
This script is wrtten by 
	Author = Adeleye Ayodeji 
	FacebookPage = https://www.facebook.com/biggidroid
	Developer = Adeleye Ayodeji
	Developer URL = https://www.adeleyeayodeji.com
	WhatsApp = +2347034803384
*/
	
	$query = mysqli_query($con, "SELECT * FROM sitedetails");
	$row = mysqli_fetch_assoc($query);
	
?>
<!DOCTYPE html>
<html>
