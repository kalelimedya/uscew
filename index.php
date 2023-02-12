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
	background: black;
	padding: 10px 20px;
	font-size: 20px;
	font-weight: 300;
	text-decoration:none
	text-decoration:none;
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
	background: none;
	color: #000;
  transition-property: all;
  transition-duration: 1000ms;
}
.carousel-action .btn-primary:hover {
	background: black;
	color: white;
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
}

.left-menu>li>a>span{
	text-decoration: none;
}

.left-menu>li>a {
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
           Dijital çözüm ortağınız </p>
            <div class="col-12 description">
            Web Site Yapımı, Mobil Uygulama Yapımı, SEO, Sosyal Medya Yönetimi, Dijital Tasarım gibi alanlardaki ihtiyaçlarınız için buradayız.</div>
            <div class="col-12 mt-5">
              <!--
              <a href="" class="button button-gray-black">
                <i class="fad fa-chevron-right button-before"></i>Detaylı İncele </a>
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
							<h3>Dijital web tasarım ve reklam stüdyosu</h3>
							<p>Pulvinar leo id risus pellentesque vestibulum. Sed diam libero, sodales eget cursus dolor.</p>
							<div class="carousel-action">
								<a href="#" class="btn btn-primary">İletişim</a>
							</div>
						</div>
					</div>	
					<div class="item">
						<img src="assets/images/slider2.webp" alt="">
						<div class="carousel-caption">
							<h3>Amazing Digital Experience</h3>							
							<p>Nullam hendrerit justo non leo aliquet imperdiet. Etiam sagittis lectus condime dapibus.</p>
							<div class="carousel-action">
              <a href="#" class="btn btn-primary">İletişim</a>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="assets/images/slider3.jpg" alt="">
						<div class="carousel-caption">
							<h3>Live Monitoring Tools</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu pellentesque sem tempor.</p>
							<div class="carousel-action">
              <a href="#" class="btn btn-primary">İletişim</a>
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
		<div class="certificate-card">
		<div class="certificate-image-div">
		<img src="assets/images/gomekan.png" alt="Google Code-In Logo" class="card-image"></div>
		<div class="certificate-detail-div"><h5 class="card-title">GoMekan</h5>
		<p class="card-subtitle">GoMekan web sitesi ve mobil uygulaması geliştirildi, kullanıma açıldı</p>
		</div><div class="certificate-card-footer">
		<span class="certificate-tag">Web Sitesi</span>
		<span class="certificate-tag">Mobil Uygulama</span>
		<span class="certificate-tag">Geliştirme</span></div>
		</div><div class="certificate-card">
		<div class="certificate-image-div">
		<img src="assets/images/medyaloji.png" alt="Google Assistant Action Logo" class="card-image"></div>
		<div class="certificate-detail-div"><h5 class="card-title">Medyaloji</h5>
		<p class="card-subtitle">Türkiye’nin en büyük İnfluencer Pazarlama şirketi Mediaoloji’nin web sitesi teslim edildi, SEO çalışmaları devam etmekte.</p></div>
		<div class="certificate-card-footer">
		<span class="certificate-tag">Web Sitesi</span></div></div>
		<div class="certificate-card"><div class="certificate-image-div">
		<img src="assets/images/jobsangel.png" alt="PWA Logo" class="card-image"></div>
		<div class="certificate-detail-div">
		<h5 class="card-title">Jobsangel</h5>
		<p class="card-subtitle">Jobsangel web sitesi A’dan Z’ye tasarlandı, hayata geçirildi.</p></div><div class="certificate-card-footer"><span class="certificate-tag">Certification</span>
		<span class="certificate-tag">Web Sitesi</span>
		</div>
		</div></div>
		
		
		
           
       
      <!--
        <div class="row">
          <div class="col-auto mr-auto ml-auto work-stages-button">
            <a href="projelerimiz.html" class="button button-pink-white">
              <i class="fad fa-chevron-double-right button-before"></i>Tüm Projeler </a>
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
            <h1 style="margin-bottom:30px;">Teklif Alın & Soru Sorun</h1>
            <div class="row">
              <div class="col-12">
                <ul class="left-menu cs-menu-area">
                  <li>
                    <a href="#" class="smooth click-area">
                      <i class="before fad fa-chevron-double-right"></i>
                      <span style="font-weight:bolder;">SORU SORUN</span>
                      <div class="menu-open"></div>
                    </a>
                    <ul class="fr-view collapse-description">
                      <form action="action.php" method="POST">
                        <div class="row">
                            <div class="col-11">
                              <input type="text" class="form-control form-control-2" name="isim" autocomplete="off" placeholder="Adınız ve Soyadınız" require>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-11">
                              <input type="text" class="form-control form-control-2" name="firmaisim" autocomplete="off" placeholder="Firma İsmi" require>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-11">
                              <input type="text" class="form-control form-control-2" name="tel" autocomplete="off" placeholder="Telefon Numarası" require>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-11">
                              <input type="email" class="form-control form-control-2" name="eposta" autocomplete="off" placeholder="E-Posta Adresi" require>
                            </div>
                            <div class="col-1"></div>
                        </div>
						<div class="row">
						
						   <div class="col-11">
						  
						  
                                            <select name="proje" class="form-control form-control-2" id="proje">
                                                <option value="">Lütfen seçiniz</option>
                                                <option value="Andorid">Web Site Yapımı</option>
                                                <option value="İOS">SEO</option>
												<option value="Andorid">Mobil Uygulama Yapımı</option>
                                                <option value="İOS">Sosyal Medya Yönetimi</option>
												<option value="İOS">Dijital Tasarım</option>
												<option value="İOS">Diğer</option>
                                            </select>
                                           <div class="col-1"></div>
										
                                        </div>
						</div>
						
                        <div class="row">
                            <div class="col-11">
                            <textarea type="text" class="form-control form-control-2" name="mesaj" autocomplete="off" placeholder="Mesaj" rows="3" require></textarea></div>
                            <div class="col-1"></div>
                        </div>
						<div class="row">
						
						<div class="g-recaptcha" 
                data-sitekey="6Lc4AXEkAAAAAPATpOV7Uo4hYo5AIgCUtWZPr7E4">
            </div>
						
						</div>
                        <div class="row">
                          <div class="col-11">
                          <button type="submit" name="submit_btn" class="button button-large button-pink-white">
                            Gönder 
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
        
        <?php include 'footer.php'; ?>