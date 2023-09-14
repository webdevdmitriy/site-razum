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