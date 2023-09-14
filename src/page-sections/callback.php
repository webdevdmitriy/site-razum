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