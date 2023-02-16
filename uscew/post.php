<?php include("include/posthead.php"); ?>
<?php
$id = (isset($_GET['id']) ? $_GET['id'] : '');
$query = mysqli_query($con, "SELECT * FROM post WHERE id='$id' ");
$row = mysqli_fetch_assoc($query);
?>


<style>
	.post-outer {
		width: 600px;
		margin-bottom: 40px;
	}

	.kategori {
		border-bottom: 2px solid black;
		width: 150px;
		height: 35px;
	}
	.postresim {
		border-top-right-radius: 10px;
		border-bottom-right-radius: 10px;
		transition: 1000ms all;
	}
	.postresim:hover {
		border-top-right-radius: 20px;
		border-bottom-right-radius: 20px;
		transition: 1000ms all;
	}
	.postbaslik {
		margin-top:20px;
		margin-bottom:20px;
		transition: 1000ms all;
	}
	.postbaslik:hover {
		color:gray;
		transition: 1000ms all;
	}
	.postyazi {
		text-align: justify;
		color:gray;
		transition: 1000ms all;
	}
	.postyazi {
		color:black;
		transition: 1000ms all;
	}
</style>
<div class="container">
<div class="row">
	<div class="col-7">
		<section class="references-home-section">
			<div class="container">
				<img class="postresim img-fluid" src="blogg/image/<?php echo $row['image']; ?>" alt="Design conferences in 2022"
					loading="lazy">
				<h2 class="postbaslik">
					<?php echo $row['title']; ?>
				</h2>


				<p class="postyazi">
					<?php echo $row["text"]; ?>
				</p>





				<style>
					ul,
					ol {
						list-style-type: none;
					}
				</style>
			</div>
		</section>
		</div>
			<div class="col-5">
				
				
				
			</div>

	
</div>
				</div>






<?php include 'footer.php'; ?>