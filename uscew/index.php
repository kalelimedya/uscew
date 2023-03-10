<?php include 'header.php'; ?>
<style>
.carousel{
	margin: 30px 0;
    background: white;
  	position: relative;
    box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
}
.carousel:after {
	content: "";
    position: absolute;
    z-index: -1;
    box-shadow: 0 0 20px rgba(0,0,0,0.8);
    height: 60px;
    bottom: 0px;
    left: 10px;
    right: 10px;
    border-radius: 100px / 20px;
}
.carousel .item {
    text-align: center;
	overflow: hidden;
    height: 475px;
}
.carousel .item img {
	max-width: 100%;
    margin: 0 auto; /* Align slide image horizontally center in Bootstrap v3 */
}
.carousel .carousel-control {
	width: 50px;
    height: 50px;
    background: #000;
    margin: auto 0;
	opacity: 0.8;
}
.carousel .carousel-control:hover {
	opacity: 0.9;
}
.carousel .carousel-control i {
    font-size: 41px;
}
.carousel-caption h3, .carousel-caption p {
	color: #fff;
	display: inline-block;
	font-family: 'Oswald', sans-serif;
	text-shadow: none;
	margin-bottom: 20px;
	text-decoration:none;
}
.carousel-caption h3 {
	background: rgba(0,0,0,0.9);
	padding: 12px 24px;
	font-size: 40px;	
	text-transform: uppercase;
	text-decoration:none;
}
.carousel-caption p {
	padding: 10px 20px;
	font-size: 20px;
	font-weight: 300;
	text-decoration:none;
 
  background-color: black;
}
.carousel-caption {
  filter:blur(0.5px);
    -o-filter:blur(0.5px);
    -ms-filter:blur(0.5px);
    -moz-filter:blur(0.5px);
    -webkit-filter:blur(0.5px);
}
.carousel-action {
	padding: 10px 0 30px;
}
.carousel-action .btn {
	min-height: 34px;
	border-radius: 3px;
	margin: 3px;
	min-width: 150px;
	text-transform: uppercase;
	font-family: 'Oswald', sans-serif;
}
.carousel-action .btn-primary {
	border-color: black;
	background: black;
	color: white;
  transition-property: all;
  transition-duration: 1000ms;
}
.carousel-action .btn-primary:hover {
	background: white;
	color: white;
  color:black;
  border-color:black;
}
.carousel-action .btn-success {
	background: #8fc93c;
	border: none;
}
.carousel-action .btn-success:hover {
	background: #87bd35;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 11px;
	height: 11px;
	border-radius: 50%;
	margin: 1px 6px;
	text-decoration:none
}
.carousel-indicators li {
	background: transparent;
	border: 1px solid #fff;
	text-decoration:none
}
.carousel-indicators li.active {
	background: black;
	border-color: black;
	text-decoration:none
}

.header-menu>li>a  {
	text-decoration: none;
	color: #2e073b;
}

.left-menu>li>a>span{
	text-decoration: none;
	
}

.left-menu>li>a {
	text-decoration: none;
	color: #2e073b;
}

.fixed-buttons a.up {
		text-decoration: none;
}
</style>



<style>

.achievement-cards-div {
    grid-gap: 1rem 1rem;
    display: grid;
    gap: 1rem 1rem;
    grid-template-columns: repeat(auto-fit,minmax(300px,1fr));
	text-decoration:none;
}

.certificate-card {
    background-color: #fff;
    border: 1px solid hsla(0,0%,83%,.397);
    border-radius: 10px;
    box-shadow: 0 10px 30px -15px rgb(0 0 0 / 20%);
    padding: 1.5rem;
    transition: all .3s ease;
	text-decoration:none;
}

.certificate-image-div {
    align-items: center;
    display: flex;
    height: 250px;
    justify-content: center;
    overflow: hidden;
    position: relative;
	text-decoration:none;
}

.card-image {
    height: auto;
    max-width: 100%;
    width: 250px;
	text-decoration:none;
}

.certificate-image-div {
    align-items: center;
    display: flex;
    height: 250px;
    justify-content: center;
    overflow: hidden;
    position: relative;
	text-decoration:none;
}

.certificate-detail-div {
    text-align: center;
	text-decoration:none;
}

.card-title {
    font-size: 25px;
}
.card-subtitle {
    color: #666;
    font-size: 1.063rem;
    line-height: 1.5rem;
	text-decoration:none;
}

.certificate-card-footer {
    align-items: center;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
	text-decoration:none;
}

.certificate-card-footer span.certificate-tag {
    align-items: center;
    background: #55198b;
    border-radius: 4px;
    color: #f5f2f4;
    cursor: pointer;
    display: inline-flex;
    font-size: .75rem;
    height: 2em;
    justify-content: center;
    line-height: 1.5;
    margin: 0 0.5rem 0.5rem 0;
    padding: 0 0.75em;
    transition: .2s ease-in;
    vertical-align: middle;
    white-space: nowrap;
	text-decoration:none;
}

.certificate-card-footer {
    align-items: center;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
	text-decoration:none;
}

.certificate-card {
    background-color: #fff;
    border: 1px solid hsla(0,0%,83%,.397);
    border-radius: 10px;
    box-shadow: 0 10px 30px -15px rgb(0 0 0 / 20%);
    padding: 1.5rem;
    transition: all .3s ease;
	text-decoration:none;
}

.header-mobil-menu>li>a {
   text-decoration: none;
   color: white;
}

#header-mobile-menu-switch-close i {
	
	color: white;
	
}
</style>


<style>



@media (max-width: 991.98px)
.header-mobil-menu>li>a {
   text-decoration: none;
}


</style>


<link href="https://fonts.googleapis.com/css?family=Roboto|Oswald:300,400" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


 <section class="home-about-section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg">
          <div class="row">
            <p class="col-12 title scaled-p">
           Dijital ????z??m orta????n??z </p>
            <div class="col-12 description">
            Web Site Yap??m??, Mobil Uygulama Yap??m??, SEO, Sosyal Medya Y??netimi, Dijital Tasar??m gibi alanlardaki ihtiya??lar??n??z i??in buraday??z.</div>
            <div class="col-12 mt-5">
              <!--
              <a href="" class="button button-gray-black">
                <i class="fad fa-chevron-right button-before"></i>Detayl?? ??ncele </a>
              -->
              </div>
            </div>
          </div>
          <div class="col-auto d-none d-lg-block ml-auto mr-auto image-container">
            <div class="row">
              <div class="col-4 ml-auto mr-auto image">
                
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-12">
                <img src="assets/img/giphy2.gif" style="border-radius: 10px;width:500px;">
              </div>
            </div>
            <div class="row">
              <div class="col-4 ml-auto mr-auto image">
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<section>
	<div class="row">
		<div class="col-md-12">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="assets/images/tablet.jpg" alt="">
						<div class="carousel-caption">
							<h3>Dijital web tasar??m ve reklam st??dyosu</h3>
				
                <p>Pulvinar leo id risus pellentesque vestibulum. Sed diam libero, sodales eget cursus dolor.</p>
             
							<div class="carousel-action">
								<a href="#" class="btn btn-primary">??leti??im</a>
							</div>
						</div>
					</div>	
					<div class="item">
						<img src="assets/images/slider2.webp" alt="">
						<div class="carousel-caption">
							<h3>Amazing Digital Experience</h3>							
							<p>Nullam hendrerit justo non leo aliquet imperdiet. Etiam sagittis lectus condime dapibus.</p>
							<div class="carousel-action">
              <a href="#" class="btn btn-primary">??leti??im</a>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="assets/images/slider3.jpg" alt="">
						<div class="carousel-caption">
							<h3>Live Monitoring Tools</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu pellentesque sem tempor.</p>
							<div class="carousel-action">
              <a href="#" class="btn btn-primary">??leti??im</a>
							</div>
						</div>
					</div>	
				</div>
				<!-- Carousel controls -->
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>
	</div>
</section>

    <section class="references-home-section" style="margin-bottom:-120px;">
      <div class="container">
        <div class="row top">
          <p class="col col-mr-auto title scaled-p">Projelerimiz</p>
        </div>
        <!-- item -->
      
          <!-- item -->
          <div class="achievement-cards-div">
          <?php
						$query = mysqli_query($con, "SELECT * FROM project ORDER BY id ASC");
						while ($row = mysqli_fetch_assoc($query)) {
							?>
                  <div class="certificate-card">
                  <div class="certificate-image-div">
                  <img src="assets/images/<?php echo $row["image"]; ?>" alt="Google Code-In Logo" class="card-image"></div>
                  <div class="certificate-detail-div"><h5 class="card-title"><?php echo $row["title"]; ?></h5>
                  <p class="card-subtitle"><?php echo $row["text"]; ?></p>
                  </div><div class="certificate-card-footer">
                  <span class="certificate-tag">Web Sitesi</span>
                  <span class="certificate-tag">Mobil Uygulama</span>
                  <span class="certificate-tag">Geli??tirme</span></div>
                  </div>
									
									<?php 
						} ?> 
            </div>
	
		
		
           
       
      <!--
        <div class="row">
          <div class="col-auto mr-auto ml-auto work-stages-button">
            <a href="projelerimiz.html" class="button button-pink-white">
              <i class="fad fa-chevron-double-right button-before"></i>T??m Projeler </a>
            </div>
          </div>
        
        </div>
        -->
		
		
		<?php
    
// Checking valid form is submit or not
if (isset($_POST['submit_btn'])) {
    
    // Storing name in $name variable
    $name = $_POST['name'];
    
    // Storing google recaptcha response
    // in $recaptcha variable
    $recaptcha = $_POST['g-recaptcha-response'];
}
?>
      </section>
        <section class="information-section">
          <div class="container">
            <h1 style="margin-bottom:30px;font-weight: bolder;">Teklif Al??n & Soru Sorun</h1>
            <div class="row">
              <div class="col-12">
                <ul class="left-menu cs-menu-area">
                  <li>
                    <a href="#" class="smooth click-area">
                      <i class="before fad fa-chevron-double-right"></i>
                      <span style="font-weight:bolder;">TEKL??F ALIN</span>
                      <div class="menu-open"></div>
                    </a>
                    <ul class="fr-view collapse-description">
                      <form action="action.php" method="POST">
                        <div class="row">
                            <div class="col-11">
                              <input type="text" class="form-control form-control-2" name="name"  autocomplete="on" placeholder="Ad??n??z ve Soyad??n??z" required>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-11">
                              <input type="text" class="form-control form-control-2" name="business"  autocomplete="on" placeholder="Firma ??smi" required>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-11">
                              <input type="text" class="form-control form-control-2" name="tel"  autocomplete="on" placeholder="Telefon Numaras??" required>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-11">
                              <input type="email" class="form-control form-control-2" name="mail"  autocomplete="on" placeholder="E-Posta Adresi" required>
                            </div>
                            <div class="col-1"></div>
                        </div>
						<div class="row">
						
						   <div class="col-11">
						  
						  
                                            <select name="project" required class="form-control form-control-2" id="proje" required>

                                                <option value="Web Site Yap??m??">Web Site Yap??m??</option>
                                                <option value="SEO">SEO</option>
												                        <option value="Mobil Uygulama Yap??m??">Mobil Uygulama Yap??m??</option>
                                                <option value="Sosyal Medya Y??netimi">Sosyal Medya Y??netimi</option>
                                                <option value="Dijital Tasar??m">Dijital Tasar??m</option>
                                                <option value="Di??er">Di??er</option>
                                            </select>
                                           <div class="col-1"></div>
										
                                        </div>
						</div>
						
                        <div class="row">
                            <div class="col-11">
                            <textarea type="text" class="form-control form-control-2" name="message" autocomplete="off" placeholder="Mesaj" rows="3" required></textarea></div>
                            <div class="col-1"></div>
                        </div>
						<div class="row">
						
						<div class="g-recaptcha" 
                data-sitekey="6Lf_F3wkAAAAAEeJCw-ShjnmYCU1RC-1RGHUF5gD">
            </div>
						
						</div>
                        <div class="row">
                          <div class="col-11">
                          <button type="submit" name="submit_btn" class="button button-large button-pink-white">
                            G??nder 
                        </button>
                          </div>
                          <div class="col-1">
                          </div>
                        </div>
                      </form>
                    </ul>
                  </li>
                  
                </ul>
              </div>
             
            </div>
          </div>
        </section>
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
        
        <?php include 'footer.php'; ?>