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



.cloud {
   position: absolute;
    left: 0%;
    top: 0%;
    right: 0%;
    bottom: 0%;
    z-index: -10;
    width: 100%;
    -webkit-filter: blur(60px);
    filter: blur(60px);
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
}
@keyframes cloudBig {
    from {
        transform: rotate(0deg) translate(10px) rotate(0deg);
    }
    to {
        transform: rotate(360deg) translate(10px) rotate(-360deg);
    }
}


</style>


<style>



@media (max-width: 991.98px)
.header-mobil-menu>li>a {
   text-decoration: none;
}
.baslik-2 span {
  font-family: DEGRADE;
   font-size: 72px;
  background: -webkit-linear-gradient(45deg, #ff8000, #ffbb00 70%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
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
		  <div class="cloud">
		  <div data-w-id="87c9b593-239b-478b-a6cf-5b17084d6a94" class="lottie-hero" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/632b845203cf40e09d13ecb4/632b845203cf406dcb13ecd0_Lottie%20Hero.json" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="20" data-duration="0" style="opacity: 1; animation: cloudBig 2s linear infinite;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 800" width="1200" height="800" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);"><defs><clipPath id="__lottie_element_11"><rect width="1200" height="800" x="0" y="0"></rect></clipPath><linearGradient id="__lottie_element_15" spreadMethod="pad" gradientUnits="userSpaceOnUse" x1="1135.8299560546875" y1="525.8870239257812" x2="703.2410278320312" y2="456.77801513671875"><stop offset="0%" stop-color="rgb(246,211,101)"></stop><stop offset="100%" stop-color="rgb(255,121,82)"></stop></linearGradient><linearGradient id="__lottie_element_19" spreadMethod="pad" gradientUnits="userSpaceOnUse" x1="590.3350219726562" y1="442.38299560546875" x2="132.93099975585938" y2="478.2619934082031"><stop offset="0%" stop-color="rgb(255,122,34)"></stop><stop offset="100%" stop-color="rgb(255,74,185)"></stop></linearGradient></defs><g clip-path="url(#__lottie_element_11)"><g transform="matrix(0.9988667964935303,-0.04759287089109421,0.04759287089109421,0.9988667964935303,13.36358642578125,106.14019775390625)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,0,0)"><path fill="url(#__lottie_element_15)" fill-opacity="1" d=" M896.3095703125,711.6392822265625 C960.6405639648438,716.7863159179688 1020.7841796875,668.5936279296875 1058.964599609375,619.7686157226562 C1095.2445068359375,573.3656005859375 1018.9774169921875,544.9286499023438 1014.2673950195312,483.7866516113281 C1009.8673706054688,426.8626708984375 1102.57177734375,382.26458740234375 1065.291748046875,336.6095886230469 C1025.1451416015625,287.4385986328125 982.2306518554688,329.0951232910156 921.7176513671875,334.4561462402344 C865.2656860351562,339.4571228027344 846.7301025390625,335.27508544921875 807.05810546875,373.4371032714844 C766.0350952148438,412.8981018066406 733.9058837890625,381.7880554199219 728.8978881835938,440.18804931640625 C723.6148681640625,501.79705810546875 742.4873046875,512.8973999023438 788.7542724609375,558.0523681640625 C834.3363037109375,602.5383911132812 834.8425903320312,706.7213134765625 896.3095703125,711.6392822265625 C896.3095703125,711.6392822265625 896.3095703125,711.6392822265625 896.3095703125,711.6392822265625z"></path></g></g><g transform="matrix(0.9977397918701172,-0.06719622761011124,0.06719622761011124,0.9977397918701172,-42.065673828125,-29.61431884765625)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,0,0)"><path fill="url(#__lottie_element_19)" fill-opacity="1" d=" M325.58447265625,566.9984741210938 C395.7464599609375,570.0385131835938 480.1038513183594,591.32568359375 523.8308715820312,536.3806762695312 C565.3888549804688,484.1596984863281 476.318115234375,391.3575744628906 473.6191101074219,324.66656494140625 C471.1051025390625,262.5755615234375 538.7969970703125,195.5030059814453 499.8630065917969,147.06300354003906 C457.92999267578125,94.89299774169922 386.58795166015625,56.74835205078125 320.178955078125,65.04835510253906 C258.2259521484375,72.79135131835938 257.8550109863281,172.90467834472656 212.92201232910156,216.24667358398438 C166.4600067138672,261.06365966796875 82.15672302246094,260.2754211425781 74.32772064208984,324.3583984375 C66.0677261352539,391.96441650390625 133.72659301757812,407.3672180175781 182.51959228515625,454.8982238769531 C230.58958435058594,501.7252197265625 258.54547119140625,564.093505859375 325.58447265625,566.9984741210938 C325.58447265625,566.9984741210938 325.58447265625,566.9984741210938 325.58447265625,566.9984741210938z"></path></g></g></g></svg></div>
		</div>
            <p class="col-12 title scaled-p baslik-2">
           <span>Dijital çözüm ortağınız.</span></p>
            <div class="col-12 description">
            <div><b>Web Site Yapımı, Mobil Uygulama Yapımı, SEO, Sosyal Medya Yönetimi, Dijital Tasarım gibi alanlardaki ihtiyaçlarınız için buradayız.</b></div></div>
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
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>
          <li data-target="#myCarousel" data-slide-to="6"></li>
          <li data-target="#myCarousel" data-slide-to="7"></li>
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
                  <span class="certificate-tag">Geliştirme</span></div>
                  </div>
									
									<?php 
						} ?> 
            </div>
	
		
		
           
       
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
            <h1 style="margin-bottom:30px;font-weight: bolder;">Teklif Alın & Soru Sorun</h1>
            <div class="row">
              <div class="col-12">
                <ul class="left-menu cs-menu-area">
                  <li>
                    <a href="#" class="smooth click-area">
                      <i class="before fad fa-chevron-double-right"></i>
                      <span style="font-weight:bolder;">TEKLİF ALIN</span>
                      <div class="menu-open"></div>
                    </a>
                    <ul class="fr-view collapse-description">
                      <form action="action.php" method="POST">
                        <div class="row">
                            <div class="col-11">
                              <input type="text" class="form-control form-control-2" name="name"  autocomplete="on" placeholder="Adınız ve Soyadınız" required>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-11">
                              <input type="text" class="form-control form-control-2" name="business"  autocomplete="on" placeholder="Firma İsmi" required>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-11">
                              <input type="text" class="form-control form-control-2" name="tel"  autocomplete="on" placeholder="Telefon Numarası" required>
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

                                                <option value="Web Site Yapımı">Web Site Yapımı</option>
                                                <option value="SEO">SEO</option>
												                        <option value="Mobil Uygulama Yapımı">Mobil Uygulama Yapımı</option>
                                                <option value="Sosyal Medya Yönetimi">Sosyal Medya Yönetimi</option>
                                                <option value="Dijital Tasarım">Dijital Tasarım</option>
                                                <option value="Diğer">Diğer</option>
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
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
        
        <?php include 'footer.php'; ?>