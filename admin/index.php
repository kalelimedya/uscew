<?php
include 'include/header.php';
if (!isset($_SESSION["admin"])) {
	header("location: login.php");
}


?>
  <div class="more">

  				<h2 class="h2admin">Gönderi <a href="post.php"><small>Yeni Gönderi Ekle</small></a></h2>
				<?php 
				$query = mysqli_query($con, "SELECT * FROM post ORDER BY id DESC");
				while ($row = mysqli_fetch_assoc($query)) {
					?>

					<div style="clear: both;margin-bottom: 50px;">
				
				<div style="width: 40%;float: left;">
					<a href="../post.php?id=<?php echo $row['id'] ?>">
					<div class="adminpost" style="background-image: url('../image/<?php echo $row['image']; ?>');
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
				<small style="margin: 0px;background: black none repeat scroll 0% 0%;color: white;padding: 3px;font-size: 10px;">Kategori: <?php echo $row["category"]; ?></small>
				<small style="margin: 0px;background: black none repeat scroll 0% 0%;color: white;padding: 3px;font-size: 10px;">Tarih: <?php echo $row["date"]; ?></small>
				<p style="color: black;" >
					<?php echo substr($row['text'],0,300)."..."; ?>
				</p>	
				</div>
				
				<p style="font-family: calibri; "><a style="background: blueviolet;padding: 5px;color: white;text-decoration: none;" href="../post.php?id=<?php echo $row['id'] ?>">Gönderiyi Oku</a> <a style="background: blueviolet;padding: 5px;color: white;text-decoration: none;" href="edit.php?id=<?php echo $row['id'] ?>">Düzenle</a>
				<a style="background: blueviolet;padding: 5px;color: white;text-decoration: none;" href="delete.php?id=<?php echo $row['id'] ?>">Sil</a></p>
				
				</div><br><hr><br>

					<?php
				}
				?>
			</div>
<?php include 'include/footer.php'; ?>