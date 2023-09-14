<?
include_once("../lang/switch-lang.php");
include_once("../lang/lang." . 'en' . ".php");
include('./head-en.php');
?>

<!DOCTYPE page-sections>
<page-sections lang="en">

    <body>
        <!-- prettier-ignore -->
        <header class="header">
  <div class="header__outter">
    <div class="container">
      <div class="header__inner">
        <a class="logo" href="#top">
          <picture class="logo_img">
            <!-- <source srcset="images/logo-mpbile.png" media="(max-width: 640px)" /> -->
            <img src="/images/logo.png" alt="Логотип разум" />
          </picture>
        </a>

        <nav class="menu">
          <ul class="munu__list">
            <?
            foreach ($lang['menu'] as $item) {
            ?>
              <li class="menu__list-item">
                <a href="<?= $item['href']; ?>" class="menu__list-link"><?= $item['name']; ?></a>
              </li>
            <?
            }
            ?>
          </ul>
        </nav>
        <div class="lang">

          <a href="/" data-lang='ru' class="<?= $_SESSION['lang'] == 'ru' ? 'active' : '' ?>">Ru</a>
          /
          <a href="/en" data-lang='en' class="<?= $_SESSION['lang'] == 'en' ? 'active' : '' ?>">En</a>
        </div>
        <div class="menu-burger">
          <span class="menu-burger__line"></span>

        </div>
        <div class="menu-window">
          <div class="menu-window__inner">
            <a href="#top">
              <picture class="menu-window__logo">
                <!-- <source srcset="images/logo-mpbile.png" media="(max-width: 640px)" /> -->
                <img src="/images/logo.png" alt="Логотип разум" />
              </picture>
            </a>
            <div class="lang-mobile">

              <a href="/" data-lang='ru' class="<?= $_SESSION['lang'] == 'ru' ? 'active' : '' ?>">Ru</a>
              /
              <a href="/en" data-lang='en' class="<?= $_SESSION['lang'] == 'en' ? 'active' : '' ?>">En</a>
            </div>
            <nav class="menu-mobile">
              <ul class="munu-mobile__list">
                <?
                foreach ($lang['menu'] as $item) {
                ?>
                  <li class="menu-mobile__list-item">
                    <a href="<?= $item['href']; ?>" class="menu__list-link"><?= $item['name']; ?></a>
                  </li>
                <?
                }
                ?>
              </ul>
            </nav>
          </div>
        </div>

      </div>
    </div>
  </div>
</header>
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

        <main>
            <!-- prettier-ignore -->
            <section class="page-section about">
  <div class="container">
    <div class="about__inner">
      <p class="about__text">
        <?= $lang['about']['text']; ?>
        <img src="images/about/line.svg" alt="" class="about__line" />
      </p>
      <div class="about__animation"></div>
    </div>
  </div>
</section>
            <section class="page-section" id="now">
  <div class="container">
    <h2 class="title now__title"> <?= $lang['now']['title']; ?></h2>
    <div class="now__inner ">
      <div class="now__block" data-id='1'>
        <!-- <img class="now__block-img animation" src="/images/now/block.svg" alt="" /> -->
        <div class="now__block-line now__block-line-1">
          <img src="/images/now/block-line1.svg" alt="" />
        </div>

        <h3 class="now__block-title"> <?= $lang['now']['text'][0]['title']; ?></h3>
        <p class="now__block-text"><?= $lang['now']['text'][0]['text']; ?></p>
      </div>
      <div class="now__block" data-id='2'>
        <!-- <img class="now__block-img animation" src="/images/now/block.svg" alt="" /> -->
        <div class="now__block-line now__block-line-2">
          <img src="/images/now/block-line2.svg" alt="" />
        </div>
        <h3 class="now__block-title"><?= $lang['now']['text'][1]['title']; ?></h3>
        <p class="now__block-text"><?= $lang['now']['text'][1]['text']; ?></p>
      </div>
      <div class="now__block" data-id='3'>
        <!-- <img class="now__block-img animation" src="/images/now/block.svg" alt="" /> -->
        <div class="now__block-line now__block-line-3">
          <img src="/images/now/block-line3.svg" alt="" />
        </div>

        <h3 class="now__block-title"><?= $lang['now']['text'][2]['title']; ?></h3>
        <p class="now__block-text">
          <?= $lang['now']['text'][2]['text']; ?>
        </p>
      </div>
      <div class="now__block" data-id='4'>
        <!-- <img class="now__block-img animation" src="/images/now/block.svg" alt="" /> -->
        <div class="now__block-line now__block-line-4">
          <img src="/images/now/block-line4.svg" alt="" />
        </div>
        <h3 class="now__block-title"><?= $lang['now']['text'][3]['title']; ?></h3>
        <p class="now__block-text"> <?= $lang['now']['text'][3]['text']; ?></p>
      </div>
      <div class="now__block" data-id='5'>
        <!-- <img class="now__block-img animation" src="/images/now/block.svg" alt="" /> -->
        <div class="now__block-line now__block-line-5">
          <img src="/images/now/block-line5.svg" alt="" />
        </div>
        <h3 class="now__block-title"><?= $lang['now']['text'][4]['title']; ?></h3>
        <p class="now__block-text"><?= $lang['now']['text'][4]['text']; ?></p>
      </div>
    </div>
  </div>
</section>
            <section class="page-section application" id="application">
  <div class="container">
    <div class="title"><?= $lang['application']['title']; ?></div>
    <div class="application__inner">
      <div class="application__item application__lines">
        <div class="application__item-img">
          <div class="application__item-img-shadow"></div>
        </div>
        <h3 class="aplication__item-title"><?= $lang['application']['blocks'][0] ?></h3>
      </div>
      <div class="application__item">
        <div class="application__item-img">
          <div class="application__item-img-shadow"></div>
        </div>
        <h3 class="aplication__item-title"><?= $lang['application']['blocks'][1] ?></h3>
      </div>
      <div class="application__item">
        <div class="application__item-img">
          <div class="application__item-img-shadow"></div>
        </div>
        <h3 class="aplication__item-title"><?= $lang['application']['blocks'][2] ?></h3>
      </div>

      <div class="application__brain">
        <img src="/video/brain2.gif" alt="" />
        <div class="application__brain-shadow" alt=""></div>
        <!-- <video class="" playsinline="true" muted loop autoplay src="video/brain.mp4" type="video/mp4"></video> -->
      </div>

      <div class="application__item">
        <h3 class="aplication__item-title"><?= $lang['application']['blocks'][3] ?></h3>
        <div class="application__item-img">
          <div class="application__item-img-shadow"></div>
        </div>

      </div>
      <div class="application__item">
        <h3 class="aplication__item-title"><?= $lang['application']['blocks'][4] ?></h3>
        <div class="application__item-img">
          <div class="application__item-img-shadow"></div>
        </div>

      </div>
      <div class="application__item">
        <h3 class="aplication__item-title"><?= $lang['application']['blocks'][5] ?></h3>
        <div class="application__item-img">
          <div class="application__item-img-shadow"></div>
        </div>
      </div>
      <p class="application__text"><?= $lang['application']['text'] ?></p>
    </div>
  </div>
</section>
            <section class="page-section beneficiation" id="beneficiation">
  <div class="container">
    <h2 class="title"><?= $lang['beneficiation']['title']; ?></h2>
    <div class="beneficiation__inner">
      <div class="beneficiation__text">
        <p><?= $lang['beneficiation']['text']; ?></p>
      </div>
      <h3 class="results__title"><?= $lang['results']['title']; ?></h3>
      <h4 class="results__subtitle"><?= $lang['results']['subtitle']; ?></h4>
      <div class="results__blocks">
        <div class="results__block">
          <div class="results__block-inner">
            <p class="results__block-percent"><?= $lang['results']['blocks'][0]['percent']; ?>%</p>
            <p class="results__block-text"><?= $lang['results']['blocks'][0]['text']; ?></p>
          </div>
        </div>
        <div class="results__block">
          <div class="results__block-inner">
            <p class="results__block-percent"><?= $lang['results']['blocks'][1]['percent']; ?> %</p>
            <p class="results__block-text"><?= $lang['results']['blocks'][1]['text']; ?></p>
          </div>
        </div>
        <div class="results__block">
          <div class="results__block-inner">
            <p class="results__block-percent"><?= $lang['results']['blocks'][2]['percent']; ?> %</p>
            <p class="results__block-text"><?= $lang['results']['blocks'][2]['text']; ?></p>
          </div>
        </div>
        <div class="results__block">
          <div class="results__block-inner">
            <p class="results__block-percent"><?= $lang['results']['blocks'][3]['percent']; ?> %</p>
            <p class="results__block-text"><?= $lang['results']['blocks'][3]['text']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
            <section class="page-section tools" id="tools">
  <div class="container">
    <h2 class="title"><?= $lang['tools']['title']; ?></h2>
    <div class="tools__inner">
      <div class="tools__text">
        <?= $lang['tools']['text']; ?>
      </div>
      <div class="tools__animation">
        <img src="/images/tools/dub-img.png" alt="<?= $lang['tools']['title']; ?>" />
      </div>
    </div>
  </div>
</section>
            <section class="page-section integration" id="integration">
  <div class="container">
    <h2 class="title"><?= $lang['integration']['title'] ?></h2>
    <div class="integration__inner">
      <div class="integration__animation">
        <!-- <video class="" playsinline="true" muted loop autoplay src="video/machine.mp4" type="video/mp4"></video> -->
        <img class="start" src="/images/integration/conveyor/start-img.png" alt="" />
        <!-- <img class= 'main' src="video/main.gif" alt="" > -->
      </div>
      <div class="imgs"></div>
      <div class="integration__blocks">
        <?
        foreach ($lang['integration']['blocks'] as $key => $value) {
        ?>
          <div class="integration__block">
            <img src="/images/integration/icon-<?= $key + 1 ?>.svg" alt="" class="integration__block-img" />
            <div class="integration__block-text">
              <h3 class="integration__block-title"><?= $value['title'] ?></h3>
              <p class="integration__block-subtitle"><?= $value['subtitle'] ?></p>
            </div>
          </div>
        <?
        }
        ?>
      </div>
    </div>
    <div class="integration__text">
      <p><?= $lang['integration']['text'] ?></p>
    </div>
  </div>
</section>
            <section class="page-section articles" id="articles">
  <div class="container">
    <div class="articles__inner">
      <div class="articles__block">
        <h2 class="articles__title"><?= $lang['articles']['title']; ?></h2>
        <div class="articles__text">
          <?= $lang['articles']['text']; ?>
        </div>
        <a href="javascript:void 0;" class="btn articles__btn"><?= $lang['articles']['btn']; ?></a>
      </div>
    </div>
  </div>
</section>
            <section class="page-section ambassadors" id="ambassadors">
  <div class="container">
    <h2 class="title ambassadors__title"><?= $lang['ambassadors']['title']; ?></h2>
    <p class="ambassadors__subtitle"><?= $lang['ambassadors']['subtitle']; ?></p>
    <div class="ambassadors__inner">
      <div class="ambassadors__logos">
        <a href="https://www.labengi.com/">
          <img src="/images/ambassadors/lab.png" alt="Engineering Laboratory" class="ambassadors__logo ambassadors__logo_lab" />
        </a>
        <a href="https://pesk.spb.ru/">
          <img src="/images/ambassadors/pesc.png" alt="ПЭСК" class="ambassadors__logo ambassadors__logo_pesc" />
        </a>
        <a href="https://stcompany24.ru/">
          <img src="/images/ambassadors/sit.png" alt="Системы и технологии" class="ambassadors__logo ambassadors__logo_sit" />
        </a>
        <a href="https://perspektive.su/">
          <img src="/images/ambassadors/per.png" alt="Перспектива" class="ambassadors__logo ambassadors__logo_per" />
        </a>
        <a href="http://www.spectran.org/">
          <img src="/images/ambassadors/spec.png" alt="Спектран" class="ambassadors__logo ambassadors__logo_spec" />
        </a>
        <a href="https://www.spbcie.ru/">
          <img src="/images/ambassadors/spbcie.png" alt="Спектран" class="ambassadors__logo ambassadors__logo_eng" />
        </a>
      </div>
    </div>
  </div>
</section>
            <section class="page-section callback" id="callback">
  <div class="container">
    <div class="callback__inner">
      <div class="callback__block">
        <img class="callback__logo" src="/images/logo__callback.svg" />
        <form class="callback__form" action="">
          <input type="text" name="name" placeholder="<?= $lang['callback']['name']; ?>" />
          <input type="email" name="email" placeholder="<?= $lang['callback']['email']; ?>" />
          <input type="tel" name="tel" placeholder="<?= $lang['callback']['tel']; ?>" />
          <div class="callback__check">
            <input type="checkbox" name="check" id="check" />
            <label for="check"></label>
            <label class="callback__data" for="check"><?= $lang['callback']['check']; ?></label>
          </div>
          <button class="btn callback__btn" type="submit"><?= $lang['callback']['btn']; ?></button>
          <p class="callback__response"></p>
        </form>
      </div>
    </div>
  </div>
</section>
        </main>

        <!-- prettier-ignore -->
        <footer class="footer">
  <div class="container">
    <div class="footer__inner">
      <div class="footer__block">
        <span class="footer__item"><?= $lang['footer']['razum']; ?></span>
        <a class="footer__item" href="mailto:info@разум.рф">info@разум.рф</a>
        <a href="privacy-policy<?= $_SESSION['NowLang'] == 'en'  ? '-en' : '' ?>.php" target="_blank" class="footer__item footer__link"><?= $lang['footer']['termsOfUse']; ?></a>
        <a href="user-agreement<?= $_SESSION['NowLang'] == 'en'  ? '-en' : '' ?>.php" class="footer__item"><?= $lang['footer']['privacyPolicy']; ?></a>
      </div>
      <div class="footer__block"><?= $lang['footer']['text']; ?></div>
    </div>
  </div>
</footer>
        <div class="modal-article">
  <div class="modal-article__inner">
    <div class="modal-article__text">
      <h2 class="modal-article__title"><?= $lang['modal-article']['title']; ?></h2>
      <?= $lang['modal-article']['text']; ?>
    </div>
  </div>
</div>
        <div class="modal-preloader">
    <img src="/images/loading.gif" alt="Прелоадер">
</div>
    </body>

</page-sections>