<? include_once("lang/switch-lang.php");
include_once("lang/lang." . 'ru' . ".php");
?>
<!DOCTYPE page-sections>
<page-sections lang="ru">
  <?
  // include_once("lang/lang." . $CurentLang . ".php");
  include('ru/head.php');
  ?>
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
    (function(m, e, t, r, i, k, a) {
      m[i] = m[i] || function() {
        (m[i].a = m[i].a || []).push(arguments)
      };
      m[i].l = 1 * new Date();
      for (var j = 0; j < document.scripts.length; j++) {
        if (document.scripts[j].src === r) {
          return;
        }
      }
      k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(93621732, "init", {
      clickmap: true,
      trackLinks: true,
      accurateTrackBounce: true,
      webvisor: true
    });
  </script>
  <noscript>
    <div><img src="https://mc.yandex.ru/watch/93621732" style="position:absolute; left:-9999px;" alt="" /></div>
  </noscript>
  <!-- /Yandex.Metrika counter -->

  <body>
    <!-- prettier-ignore -->
    @@include('./src/page-sections/header.php')
    @@include('./src/page-sections/top.php')

    <main>
      <!-- prettier-ignore -->
      @@include('./src/page-sections/about.php')
      @@include('./src/page-sections/now.php')
      @@include('./src/page-sections/application.php')
      @@include('./src/page-sections/beneficiation.php')
      @@include('./src/page-sections/tools.php')
      @@include('./src/page-sections/integration.php')
      @@include('./src/page-sections/articles.php')
      @@include('./src/page-sections/ambassadors.php')
      @@include('./src/page-sections/callback.php')
    </main>

    <!-- prettier-ignore -->
    @@include('./src/page-sections/footer.php')
    @@include('./src/page-sections/modal-article.php')
    @@include('./src/page-sections/modals.php')
  </body>

</page-sections>