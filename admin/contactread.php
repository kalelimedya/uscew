<?php
include 'include/header.php';
if (isset($_SESSION["admin"])) {
	
			$id = $_GET['id'];
			$query = mysqli_query($con, "SELECT * FROM contact WHERE id='$id' ");
			$row = mysqli_fetch_assoc($query);
}

?>

<style type="text/css">
	form{
		margin-right: auto;
		margin-left: auto;
		width: 50%;
		margin-top: 10px;
		margin-bottom: 10px;
	}
	h2{
		text-align: center;
	}
	input{
		height: 30px;
		background: transparent;
		outline: none;
		border:none;
		border-bottom: 1px solid blueviolet;
	}
	textarea{
		 height: 100px;
   		 width: 110%;
		background: transparent;
		outline: none;
		border:none;
		border-bottom: 1px solid blueviolet;
	}
</style> 
	<form method="post" action="">
		<p><?php if (isset($_POST["update"])) {
						echo $posted;
					} ?></p>
					<p>İsim:</p>
				    <input type="text" name="name" placeholder="Enter your title" value="<?php echo $row["name"] ?>" readonly>
				     <p>E-Posta:</p>
                     <input type="text" name="mail" placeholder="Enter your title" value="<?php echo $row["mail"] ?>" readonly>
                     <p>Şirket:</p>
                     <input type="text" name="business" placeholder="Enter your title" value="<?php echo $row["business"] ?>" readonly>
                     <p>Proje:</p>
                     <input type="text" name="project" placeholder="Enter your title" value="<?php echo $row["project"] ?>" readonly>
                     <p>Telefon Numarası:</p>
                     <input type="text" name="tel" placeholder="Enter your title" value="<?php echo $row["tel"] ?>" readonly>
      		          <p>Mesaj:</p>
      		          <textarea name="text" style="font-family: calibri;" readonly><?php echo $row["message"] ?></textarea>
                        <input type="submit" name="update" value="Update Post">
                        <center style="margin-top: 5px;">
                            <a style="font-family: calibri; background: blueviolet;padding: 5px;color: white;text-decoration: none;" href="javascript:history.go(-1)">&larr; Go Back</a>
                        </center>
		</p>
	</form>
<?php include 'include/footer.php'; ?>