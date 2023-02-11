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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3154.6217254981098!2d30.55283175694767!3d37.7520177214564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c5b5a04f6249b7%3A0x76a624149201647b!2sUstam%20Park%20Evleri!5e0!3m2!1str!2str!4v1676120686996!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               
        </div>
    </div>
</div>
</section>
<?php include 'footer.php'; ?>