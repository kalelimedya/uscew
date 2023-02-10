<?php include 'header.php'; ?>
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
<section class="home-slider-section" style="background-color:black;">
  <div class="container">
    <div class="row">
      
      <div class="col-12 col-sm-7 col-md-6 col-lg-7 col-xxl-6 image-col">
        <div>
          <picture class="img-fluid">
            <img sizes="650px" src="assets/images/SEO.gif" class="img-fluid" alt="slider">
          </picture>
        </div>
        </div>
        <div class="col-12 col-sm-5 col-md-6 col-lg-5 col-xxl-6 slider-col">

        <div class="owl-carousel" id="home-slider-owl-carousel">

          <div class="item">
            <p class="scaled-p">Dijital web tasarım ve reklam stüdyosu</p>
          </div>
          <div class="item">
            <p class="scaled-p">Dijital web tasarım</p>
          </div>
          <div class="item">
            <p class="scaled-p">Dijital </p>
          </div>
          <div class="item">
            <p class="scaled-p">Dijital web tasarım </p>
          </div>
        </div>
       <div class="owl-nav owl-fa-nav">
          <a href="#" class="owl-prev">
            <i class="fad fa-chevron-left"></i>
          </a>
          <a href="#" class="owl-next">
            <i class="fad fa-chevron-right"></i>
          </a>
        </div>
      </div>
      </div>
    </div>
  </section>

    <section class="references-home-section">
      <div class="container">
        <div class="row top">
          <p class="col col-mr-auto title scaled-p">Projelerimiz</p>
        </div>
        <!-- item -->
        <div class="row">
          <!-- item -->
          <div class="col-6 col-lg-6 col-xxl-6 reference-list-col">
            <div class="reference-list-container" style="background-color: #0e2a4f">
              <p class="title">
                <a href="">
                    GoMekan
                </a>
              </p>
              <div class="row">
                <div class="col-6 col-lg-6 col-xxl-6">
                    <div class="description">
                    GoMekan web sitesi ve mobil uygulaması geliştirildi, kullanıma açıldı.
                  </div>
                </div>
                <div class="col-6 col-lg-6 col-xxl-6">
                <div class="image">
                <a href="gomekan.com">
                  <picture class="img-fluid">
                    <!--
                    <img src="assets/img/projeler/gomekan_kirmizi_siyah.png" alt="proje logosu" style="width:250px">
                    -->
                  </picture>
                </a>
              </div>
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-6 col-lg-6 col-xxl-6 reference-list-col">
            <div class="reference-list-container" style="background-color: #0e2a4f">
              <p class="title">
                <a href="">
                    GoMekan
                </a>
              </p>
              <div class="row">
                <div class="col-6 col-lg-6 col-xxl-6">
                    <div class="description">
                    GoMekan web sitesi ve mobil uygulaması geliştirildi, kullanıma açıldı.
                  </div>
                </div>
                <div class="col-6 col-lg-6 col-xxl-6">
                <div class="image">
                <a href="gomekan.com">
                  <picture class="img-fluid">
                    <!--
                    <img src="assets/img/projeler/gomekan_kirmizi_siyah.png" alt="proje logosu" style="width:250px">
                    -->
                  </picture>
                </a>
              </div>
                </div>
              </div>
              
            </div>
          </div>
           
        </div>
      <!--
        <div class="row">
          <div class="col-auto mr-auto ml-auto work-stages-button">
            <a href="projelerimiz.html" class="button button-pink-white">
              <i class="fad fa-chevron-double-right button-before"></i>Tüm Projeler </a>
            </div>
          </div>
        -->
        </div>
      </section>
        <section class="information-section">
          <div class="container">
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
                      <form action="islemler/ajax.php" method="POST">
                        <div class="row">
                            <div class="col-11">
                              <input type="text" class="form-control" name="isim" autocomplete="off" placeholder="Adınız ve Soyadınız" require>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-11">
                              <input type="text" class="form-control" name="firmaisim" autocomplete="off" placeholder="Firma İsmi" require>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-11">
                              <input type="text" class="form-control" name="tel" autocomplete="off" placeholder="Telefon Numarası" require>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-11">
                              <input type="email" class="form-control" name="name" autocomplete="off" placeholder="E-Posta Adresi" require>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-11">
                            <textarea type="text" class="form-control" name="message" autocomplete="off" placeholder="Mesaj" rows="3" require></textarea>                            </div>
                            <div class="col-1"></div>
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