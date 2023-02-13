<?php
include 'include/header.php';
if (!isset($_SESSION["admin"])) {
	header("location: login.php");
}


?>
  <div class="more">

  				<h2 class="h2admin">Your Post <a href="projectadd.php"><small>Yeni Proje Ekle</small></a></h2>
				<?php 
				$query = mysqli_query($con, "SELECT * FROM project ORDER BY id DESC");
				while ($row = mysqli_fetch_assoc($query)) {
					?>

					<div style="clear: both;margin-bottom: 50px;">
				
				<div style="width: 40%;float: left;">
					<div class="adminpost" style="background-image: url('../assets/images/<?php echo $row['image']; ?>');
				    background-position: center top !important;
				    background-size: cover;
				    background-repeat: no-repeat;
				    height: 190px;
				    width: 83%;
				    margin-left: 11px;
				    border: 5px solid blueviolet;"></div>
				</a>
				</div>
				<div style="width:60%;float: right;">
				<h3 style="color: black;margin: 0px;">
					<?php echo $row['title']; ?>

				</h3>
				
				
				<p style="color: black;" >
					<?php echo substr($row['text'],0,300)."..."; ?>
				</p>	
				</div>
				
				<a style="background: blueviolet;padding: 5px;color: white;text-decoration: none;" href="projectdelete.php?id=<?php echo $row['id'] ?>">Sil</a></p>
				
				</div><br><hr><br>

					<?php
				}
				?>
			</div>
<?php include 'include/footer.php'; ?>
