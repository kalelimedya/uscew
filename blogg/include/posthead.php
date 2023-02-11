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

// Program to display current page URL. 
  
$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
                "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  
                $_SERVER['REQUEST_URI']; 
	 
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php $id = $_GET["id"];
		$query = mysqli_query($con, "SELECT * FROM post WHERE id='$id' ");
		$row2 = mysqli_fetch_assoc($query); echo $row2["title"]; ?></title>
	<meta charset="utf-8">
	<base href="/biggidroid/">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keyword" content="Biggidroid, Biggidroid simple php cms, php cms">
	<meta name="description" content="<?php echo substr($row2['text'],0,180).'...'; ?>">
	<!-- OG Meta data -->

	<meta property="og:url" content="<?php echo $link; ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="<?php echo $row2["title"]; ?>" />
	<meta property="og:description" content="<?php echo substr($row2['text'],0,180).'...'; ?>" />
	<!-- Og Image generator -->
	<?php
	 $postimg = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
                "https" : "http") . "://" . $_SERVER['HTTP_HOST'] ."/biggidroid/image/".$row2['image'];
	 ?>
	<meta property="og:image" content="<?php echo $postimg ?>" />

	<!-- OG Meta data ends here -->
	<?php
		$query = mysqli_query($con, "SELECT * FROM sitedetails");
		$row = mysqli_fetch_assoc($query);
	?>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="icon" href="img/<?php echo $row["sitelogo"] ?>">
	<script src="js/jquery.min.js"></script>
	<script src="js/index.js"></script>
	<script src="js/search.js"></script>

</head>
<body>
