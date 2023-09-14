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