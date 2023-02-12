<?php include("include/posthead.php"); ?>
	  <?php
					$id = (isset($_GET['id']) ? $_GET['id'] : '');
					$query = mysqli_query($con, "SELECT * FROM post WHERE id='$id' ");
					$row = mysqli_fetch_assoc($query);
				?>


<style>



.post-outer {
	width:600px;
	margin-bottom:40px;
}
.kategori {
    border-bottom: 2px solid black;
	width:150px;
	height:35px;
}
.kategori-2 {
	padding-left:30px;
}

.postresim {
	    height: 250px;
    width: 438px;
}
}

</style>

	  <?php
					 $id = (isset($_GET['id']) ? $_GET['id'] : '');
					$query = mysqli_query($con, "SELECT * FROM post WHERE id='$id' ");
					$row = mysqli_fetch_assoc($query);
				?>
					
<section class="references-home-section" style="margin-bottom:-120px;">
<div class="container">
<img class="postresim"  src="blogg/image/<?php echo $row['image']; ?>" alt="Design conferences in 2022" loading="lazy">
 <h2><?php echo $row['title']; ?></h2>
		<div class="row">
			<div class="col-8">

					<p>  <?php echo $row["text"]; ?>  </p>
					
					
					
					

<style>
	ul,ol {
		list-style-type:none;
	}
</style>
		</div>
				<div class="col-md-4">
					<div>
						<h4 class="kategori">Kategoriler</h4>
						<div class="kategori-2">
							<ul>
								<li><a class="kategori-3">Kategori 1</a></li>
									<ol>
										<li>Kategori</li>
										<li>Kategori</li>
										<li>Kategori</li>
									</ol>
								<li><a class="kategori-3">Kategori 2</a></li>
									<ol>
										<li>Kategori</li>
										<li>Kategori</li>
										<li>Kategori</li>
									</ol>
								<li><a class="kategori-3">Kategori 3</a></li>
									<ol>
										<li>Kategori</li>
										<li>Kategori</li>
										<li>Kategori</li>
									</ol>
							</ul>
						</div>
					</div>
				</div>
			
		</div>
	</div>
</section>






<?php include 'footer.php'; ?>