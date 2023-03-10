<?php session_start(); 
include '../include/db.php';

	$query = mysqli_query($con, "SELECT * FROM sitedetails");
	$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title> USCEW</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keyword" content="Biggidroid, Biggidroid simple php cms, php cms">
	<meta name="description" content="<?php echo $row["sitetagline"] ?>">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="icon" href="../img/<?php echo $row["sitelogo"] ?>">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/index.js"></script>
	<script src="../js/search.js"></script>

</head>


<style>
.sitelogo {
    height: 57px;
    width: 159px;
     background:#eeeeee00;
    margin-top: 5px;
    padding: 10px;
     border-radius: 0%; 
    border: 1px solid #eeeeee00;
}

</style>
<body>
<div class="container">
	<!-- Welcome message to Admin -->
		<?php if (isset($_SESSION["admin"])) { ?><p class="linktag"><a href="index.php">
	Hoş geldiniz <?php echo $_SESSION["user"]; ?> </a></p><?php
}; ?>
<!-- Welcome message to Admin ends here -->
	<div class="header">
		<!--Logo begin Here -->
		<div class="logo">
			<a href="../index.php"><img align="center" class="sitelogo" src="assets/images/logo.png"></a>
			<?php if (isset($_SESSION["admin"])) {
				echo "" ?>
				<br><small style="font-family: calibri;text-align: center;"><a href="editsite.php?id=<?php echo $row['id'] ?>">Logoyu Düzenle</a></small>
				<?php
			"";} ?>
		</div>
		<!--Logo ends Here -->
		<div class="mainhead">
			<!-- Site title begins here -->
			<h2><?php echo $row["sitetitle"] ?>
				<?php if (isset($_SESSION["admin"])) {
				echo "" ?>
				<small style="font-family: calibri;text-align: center;font-size: 15px;"><a href="editsite.php?id=<?php echo $row['id'] ?>">Başlığı Düzenle</a></small>
				<?php
			"";} ?>
			</h2>
			<!-- Site title ends here -->

			<!-- Site tagline begins here -->
			<span class="sitetagline"><?php echo $row["sitetagline"] ?>
				<?php if (isset($_SESSION["admin"])) {
				echo "" ?>
				<small style="font-family: calibri;letter-spacing: normal;"><a href="editsite.php?id=<?php echo $row['id'] ?>">Tagları Düzenle</a></small>
				<?php
			"";} ?>
			</span>
			<!-- Site tagline ends here -->
		</div>
		<br>
		<!-- Site navigation link begins here -->
		<nav>
			<a href="index.php">Blog</a> |
			<a href="projelerim.php">Projelerim</a> |
			<a href="contact.php">İletişim</a> |
			 
		</nav>
		<!-- Site navigation link ends here -->
	</div>