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