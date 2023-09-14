<section class="page-section top" id = 'top'>
  <div class="container">
    <div class="top__media">
      <video class="top__media-video" playsinline="true" muted loop autoplay src="/video/intro.mp4" type="video/mp4">
        <source src="/video/intro.mp4" />
      </video>
    </div>
    <div class="top__inner">
      <!-- <div class="top__logo">
        <picture>
          <source srcset="images/logo-mpbile.png" media="(max-width: 640px)" />
          <img src="images/logo.png" alt="Логотип разума" />
        </picture>
      </div> -->

      <h1 class="title top__title title_without-line">
        <?= $lang['top']['title']; ?>
      </h1>
      <p class="top__subtitle"> <?= $lang['top']['subtitle']; ?></p>
      <a href="#callback" class="top__btn"> <?= $lang['top']['btn']; ?> </a>
    </div>
  </div>
</section>