<?php
include 'include/header.php';

if (isset($_POST['submit'])) {
	$target = "../assets/images/" . basename($_FILES['image']['name']);

	// storing in database
	$image = $_FILES['image']['name'];
	$text = $_POST['text'];
	$category = $_POST['category'];
	$title = $_POST['title'];

	$query = mysqli_query($con, "INSERT INTO project(image, text, category, title) VALUES('$image', '$text', '$category', '$title') ");
	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		$query = mysqli_query($con, "SELECT * FROM post ORDER BY id DESC LIMIT 1");
		$row = mysqli_fetch_assoc($query);
		$posted = "<p style='color:white;background:green;padding:5px;text-align:left;'>Posted Successfully </p>";
	} else {
		$posted = "<p style='color:white;background:red;padding:5px;border-radius:5px;text-align:center;'>Post Error!!!</p>";
	}
}



?>
<script src="ckeditor/ckeditor.js"></script>
<script type="text/javasciprt" src="ckeditor/ckeditor.js"> </script>
<style type="text/css">
	form {
		width: 50%;
		float: left;
		margin-top: 10px;
		margin-bottom: 10px;
		clear: both;
	}

	h2 {
		text-align: center;
	}

	input {
		height: 30px;
		background: transparent;
		outline: none;
		border: none;
		border-bottom: 1px solid blueviolet;
	}

	textarea {
		height: 100px;
		background: transparent;
		outline: none;
		border: none;
		width: 500px;
		border-bottom: 1px solid blueviolet;
	}
</style>

<div class="more">
	<div class="postside">
		<h3
			style="margin-top: 10px;padding-top: 0px;font-family: calibri;background:blueviolet;text-align: left;padding: 5px;color: white;">
			Yeni Blog Gönderisi</h3>

		<form method="post" action="" enctype="multipart/form-data"
			style="width: 100%;float: left;margin-top: 0px;margin-bottom: 10px;clear: both;">
			<p>
				<?php if (isset($_POST["submit"])) {
					echo $posted;
				} ?>
			</p>
			<p>Gönderi başlığı:</p>
			<input type="text" name="title" placeholder="Enter your title">
			<input type="hidden" value="999999999999999">
			<label>
				<input style="display: none;" id="file" type="file" name="image"
					onchange="proccess(window.lastFile=this.files[0])">
				<div style="margin: 0px;padding: 0px;">
					<!--Sample image uploaded begins HERE -->
					<img id="image" style="width: 100%;height: auto;cursor: pointer;margin-left:0px;"
						class="ui centered large image" src="../image/postthumbnail.png" />
					<!--Sample image uploaded ends HERE -->
				</div>

			</label>
			<?php
			$editor_data = $_POST['content'];
			?>
			<p>Gönderi içeriği:</p>
			<textarea name="text" class="form-control" id="content"></textarea>
			<input type="submit" value="Gönder" name="submit">
			<script>
				// Replace the <textarea id="editor1"> with a CKEditor 4
				// instance, using default configuration.
				CKEDITOR.replace('content');
			</script>
		</form>
	</div>

</div>

<?php include 'include/footer.php'; ?>