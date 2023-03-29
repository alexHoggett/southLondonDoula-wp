<?php get_header(); ?>

  <main>
    <section class="section site-intro">
      <div class="site-intro__text">
        <h1 class="site-intro__heading">Hi, I'm Robyn</h1>
        <p>Hello lovely! You are likely here as you are pregnant or have a young baby and curious about how a doula could support you. Browse through my website to get a better understanding of me and my approach. If you would like to speak further do get in touch to talk  – I would love to work with you!</p> 
      </div>
      <div class="site-intro__img">
        <img class="img--small img--round" src="<?php echo get_bloginfo('template_url') ?>/assets/images/img9.jpg" alt="">
      </div>
    </section>

    <section class="section section__break section__break--mint">
      <div class="section__break--2-cols">
        <div class="section__img__container">
          <img class="img--medium" src="<?php echo get_bloginfo('template_url') ?>/assets/images/img10.jpg" alt="">
        </div>
        <div class="section__text__container">
          <h3 class="sub-heading">About Me</h3>
          <p>I’m Robyn, I use both she/they pronouns. I am a black, queer breast/chest feeding counsellor & doula based in southwest London. Also a dedicated mama & home educator to one lovely person. I became a doula because of my experience during my own pregnancies of not feeling held, heard or nurtured via the main maternity health system. In 2013, I began my early volunteering as a breastfeeding helper. The families I supported shared many emotive pregnancy & birth stories which led to my passion for providing empathic support to people in all transitioning areas of life. Especially when it comes to pregnancy, birth, feeding and early mothering/parenting. While building up trust in your body, I work to ensure you are educated to make informed choices and have the confidence to explore the unique power and rhythm your budding family requires.</p>
        </div>
      </div>
    </section>

    <section class="section">
      <h3 class="sub-heading">We might be a good fit for eachother if you want:</h3>
      <ul class="list__2-cols">
        <li>Non-judgemental, empathic and continuous support.</li>
        <li>Gentle guidance, offered in a unobtrusive way.</li>
        <li>Encouragement to be assertive and have authority in your choices.</li>
        <li>An engaging, friendly, and intuitive approach.</li>
        <li>Someone to provide a calming and stable presence throughout pregnancy, birth & postnatal journey.</li>
        <li>To explore thoughtful, considered questions and be supported with any decision that you make.</li>
        <li>Someone to respect and honour your decisions and protect your birthing/babymoon space.</li>
        <li>A professional presence to support creating an environment that makes your birth or early journey in parenting an unforgettable and empowering experience.</li>
        <li>Someone to support you in gaining a far better understanding of your baby.</li>
      </ul>
    </section>

    <section class="section__break section__break--img-2">
      <div class="container__pd--6">
        <h3 class="sub-heading"><span class="background background--seashell">Personal experience</span></h3>
        <p><span class="background background--seashell">I have my own experience of positive birth in the hospital, of rebirth at home in a birthing pool and full term breastfeeding for 5.5 years. Extensively experienced with babywearing, breastfeeding, bed sharing, gentle parenting and home educating. I also bring with me the experience of early birth/ late miscarriage and navigating grief and anxiety.</span></p>
      </div>
    </section>
    <section class="section">
      <h3 class="sub-heading underline underline--apricot">Some Testimonials:</h3>
      <div class="carousel">
        <input type="radio" id="carousel-1" name="carousel[]" checked>
        <input type="radio" id="carousel-2" name="carousel[]">
        <input type="radio" id="carousel-3" name="carousel[]">
        <input type="radio" id="carousel-4" name="carousel[]">
        <ul class="carousel__items">
          <li class="carousel__item">
            <div class="carousel__quote">
              Robyn is nothing short of fantastic - she helped me in the first 4 weeks of motherhood and I can honestly say I would not be the mum I am now if not for her! Her knowledge of all things baby is vast, including breastfeeding and baby wearing, and she's able to impart in a very unobtrusive way - empowering you to make your own decisions and have a far better understanding of your baby.
            </div>
          </li>
          <li class="carousel__item">
            <div class="carousel__quote">
              Robyn's help has been great. She's knowledgeable and professional. Her support during a critical moment of my breastfeeding journey has been very helpful. Tailored and caring approach. Thank you Robyn for your support.
            </div>
          </li>
          <li class="carousel__item">
            <div class="carousel__quote">
              Robyn’s love and passion started to work for us right after the first phone call.We got lots of help with the latching, positioning and overcoming the nipple confusion and during the course of our home visit lots of useful information given in a very warm and kind way.I totally recommend getting in touch with this lovely Sister!
            </div>
          </li>
          <li class="carousel__item">
            <div class="carousel__quote">
              Robyn was fantastic - so knowledgeable and compassionate, and really practical too. She advised us before the birth as well, which was extremely useful. I would definitely recommend her. 
            </div>
          </li>
        </ul>
        <div class="carousel__prev">
          <label for="carousel-1"></label>
          <label for="carousel-2"></label>
          <label for="carousel-3"></label>
          <label for="carousel-4"></label>
        </div>
        <div class="carousel__next">
          <label for="carousel-1"></label>
          <label for="carousel-2"></label>
          <label for="carousel-3"></label>
          <label for="carousel-4"></label>
        </div>
        <div class="carousel__nav">
          <label for="carousel-1"></label>
          <label for="carousel-2"></label>
          <label for="carousel-3"></label>
          <label for="carousel-4"></label>
        </div>
      </div>
    </section>
    <section class="section padding--large">
      <!-- Place <div> tag where you want the feed to appear -->
      <div id="curator-feed-default-feed-layout"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div><!-- The Javascript can be moved to the end of the html page before the </body> tag --><script type="text/javascript">
      /* curator-feed-default-feed-layout */
      (function(){
        var i,e,d=document,s="script";i=d.createElement("script");i.async=1;i.charset="UTF-8";
        i.src="https://cdn.curator.io/published/0710c0b4-bd7a-4de0-ab60-dfdf96668e75.js";
        e=d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
      })();
      </script>
    </section>
  </main>
  <?php get_footer(); ?>
  <?php wp_footer(); ?>