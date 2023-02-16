<?php include 'header.php'; ?>

<?php if(@$_GET["durum"]=="ok") { ?>
<script>Swal.fire('Mesajınız başarılı bir şekilde gönderildi.', '', 'success')</script>
<?php } ?>


<?php if(@$_GET["durum"]=="no") { ?>
<script>Swal.fire('Lütfen CAPTCHA kutusunu işaretleyin.', '', 'error')</script>
<?php } ?>


<style>
.cloud {
position: absolute;
    left: -15%;
    right: 101px;
    width: 50%;
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

<section style="background-color:#fafafa;margin-bottom:30px;">
  <div class="container" style="padding-top:20px;">
  <div class="cloud">
		  <div data-w-id="87c9b593-239b-478b-a6cf-5b17084d6a94" class="lottie-hero" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/632b845203cf40e09d13ecb4/632b845203cf406dcb13ecd0_Lottie%20Hero.json" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="20" data-duration="0" style="opacity: 1; animation: cloudBig 2s linear infinite;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 800" width="1200" height="800" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);"><defs><clipPath id="__lottie_element_11"><rect width="1200" height="800" x="0" y="0"></rect></clipPath><linearGradient id="__lottie_element_15" spreadMethod="pad" gradientUnits="userSpaceOnUse" x1="1135.8299560546875" y1="525.8870239257812" x2="703.2410278320312" y2="456.77801513671875"><stop offset="0%" stop-color="rgb(246,211,101)"></stop><stop offset="100%" stop-color="rgb(255,121,82)"></stop></linearGradient><linearGradient id="__lottie_element_19" spreadMethod="pad" gradientUnits="userSpaceOnUse" x1="590.3350219726562" y1="442.38299560546875" x2="132.93099975585938" y2="478.2619934082031"><stop offset="0%" stop-color="rgb(255,122,34)"></stop><stop offset="100%" stop-color="rgb(255,74,185)"></stop></linearGradient></defs><g clip-path="url(#__lottie_element_11)"><g transform="matrix(0.9988667964935303,-0.04759287089109421,0.04759287089109421,0.9988667964935303,13.36358642578125,106.14019775390625)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,0,0)"><path fill="url(#__lottie_element_15)" fill-opacity="1" d=" M896.3095703125,711.6392822265625 C960.6405639648438,716.7863159179688 1020.7841796875,668.5936279296875 1058.964599609375,619.7686157226562 C1095.2445068359375,573.3656005859375 1018.9774169921875,544.9286499023438 1014.2673950195312,483.7866516113281 C1009.8673706054688,426.8626708984375 1102.57177734375,382.26458740234375 1065.291748046875,336.6095886230469 C1025.1451416015625,287.4385986328125 982.2306518554688,329.0951232910156 921.7176513671875,334.4561462402344 C865.2656860351562,339.4571228027344 846.7301025390625,335.27508544921875 807.05810546875,373.4371032714844 C766.0350952148438,412.8981018066406 733.9058837890625,381.7880554199219 728.8978881835938,440.18804931640625 C723.6148681640625,501.79705810546875 742.4873046875,512.8973999023438 788.7542724609375,558.0523681640625 C834.3363037109375,602.5383911132812 834.8425903320312,706.7213134765625 896.3095703125,711.6392822265625 C896.3095703125,711.6392822265625 896.3095703125,711.6392822265625 896.3095703125,711.6392822265625z"></path></g></g><g transform="matrix(0.9977397918701172,-0.06719622761011124,0.06719622761011124,0.9977397918701172,-42.065673828125,-29.61431884765625)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,0,0)"><path fill="url(#__lottie_element_19)" fill-opacity="1" d=" M325.58447265625,566.9984741210938 C395.7464599609375,570.0385131835938 480.1038513183594,591.32568359375 523.8308715820312,536.3806762695312 C565.3888549804688,484.1596984863281 476.318115234375,391.3575744628906 473.6191101074219,324.66656494140625 C471.1051025390625,262.5755615234375 538.7969970703125,195.5030059814453 499.8630065917969,147.06300354003906 C457.92999267578125,94.89299774169922 386.58795166015625,56.74835205078125 320.178955078125,65.04835510253906 C258.2259521484375,72.79135131835938 257.8550109863281,172.90467834472656 212.92201232910156,216.24667358398438 C166.4600067138672,261.06365966796875 82.15672302246094,260.2754211425781 74.32772064208984,324.3583984375 C66.0677261352539,391.96441650390625 133.72659301757812,407.3672180175781 182.51959228515625,454.8982238769531 C230.58958435058594,501.7252197265625 258.54547119140625,564.093505859375 325.58447265625,566.9984741210938 C325.58447265625,566.9984741210938 325.58447265625,566.9984741210938 325.58447265625,566.9984741210938z"></path></g></g></g></svg></div>
		</div>
    <h1>İletişim & Bize Ulaş</h1>
    <div class="row">
      <div class="col-6">
        <form action="action.php" method="POST">
          <div class="row">
            <div class="col-11">
              <input type="text" class="form-control" name="name" required autocomplete="off" placeholder="Adınız ve Soyadınız"
                require>
            </div>
            <div class="col-1"></div>
          </div>
          <div class="row">
            <div class="col-11">
              <input type="text" class="form-control" name="tel" required autocomplete="off" placeholder="Telefon Numarası"
                require>
            </div>
            <div class="col-1"></div>
          </div>
          <div class="row">
            <div class="col-11">
              <input type="email" class="form-control" name="mail" required autocomplete="off" placeholder="E-Posta Adresi"
                require>
            </div>
            <div class="col-1"></div>
          </div>
          <div class="row">
            <div class="col-11">
              <textarea type="text" class="form-control" name="message" required autocomplete="off" placeholder="Mesaj" rows="3"
                require></textarea>
            </div>
            <div class="col-1"></div>
          </div>
		  	  <div class="row">
						
						<div class="g-recaptcha" 
                data-sitekey="6LcjmK0eAAAAAClFgo2ACdu1HxnudSeE7bMoLqpY">
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
      </div>
      <div class="col-6">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3154.6217254981098!2d30.55283175694767!3d37.7520177214564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c5b5a04f6249b7%3A0x76a624149201647b!2sUstam%20Park%20Evleri!5e0!3m2!1str!2str!4v1676120686996!5m2!1str!2str"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>
    </div>
  </div>
</section>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php include 'footer.php'; ?>