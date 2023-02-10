<?php include 'header.php'; ?>
<section style="background-color:#fafafa;margin-bottom:30px;">
<div class="container" style="padding-top:20px;">
    <h1>İletişim & Bize Ulaş</h1>
    <div class="row">
        <div class="col-6">
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
                              <input type="email" class="form-control" name="eposta" autocomplete="off" placeholder="E-Posta Adresi" require>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-11">
                            <textarea type="text" class="form-control" name="mesaj" autocomplete="off" placeholder="Mesaj" rows="3" require></textarea>                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row">
                          <div class="col-11">
                          <button type="submit" class="button button-large button-pink-white">
                            Gönder 
                        </button>
                          </div>
                          <div class="col-1">
                          </div>
                        </div>
                      </form>
        </div>
        <div class="col-6">
               <h3>ADRES</h3>
               <h5>USCEW
                    EMRE MAH.
                    3866 SOK.
                    USTAM PARK EVLERİ 3 C BLOK KAT:5 DAİRE:14
                    ISPARTA / MERKEZ ŞTİ.
                    TÜRKİYE

                    </h5>
        </div>
    </div>
</div>
</section>
<?php include 'footer.php'; ?>