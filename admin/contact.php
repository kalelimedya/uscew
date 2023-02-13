<?php
include 'include/header.php';
if (!isset($_SESSION["admin"])) {
	header("location: login.php");
}


?>
  <div class="more">

				<?php 
				$query = mysqli_query($con, "SELECT * FROM contact ORDER BY id DESC");
				while ($row = mysqli_fetch_assoc($query)) {
					?>

					<div style="clear: both;margin-bottom: 50px;">
				
				
				<div style="width:60%;float: right;">
				<h3 style="color: black;margin: 0px;">
					İsim ve Soyadı: <?php echo $row['name']; ?>
                    <a style="background: blueviolet;padding: 5px;color: white;text-decoration: none;" href="contactread.php?id=<?php echo $row['id'] ?>">Mesajı Gör</a>
				<a style="background: blueviolet;padding: 5px;color: white;text-decoration: none;" href="contactdelete.php?id=<?php echo $row['id'] ?>">Mesajı Sil</a>
				</h3>
				<p style="color: black;" >
                    <b>Şirket:</b> <?php echo $row['business']; ?> <br>
                    <b>E-Posta:</b> <?php echo $row['mail']; ?> <br>
                    <b>Proje:</b> <?php echo $row['project']; ?> <br>
                    <b>Telefon Numarası:</b> <?php echo $row['tel']; ?> <br>
                    <b>Mesaj:</b>
					<?php echo substr($row['message'],0,300)."..."; ?>
				</p>
                <hr>
				</div>
				
               
				
				</div><br><br><br>

					<?php
				}
				?>
			</div>
<?php include 'include/footer.php'; ?>