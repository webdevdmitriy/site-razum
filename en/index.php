<?
include_once("../lang/switch-lang.php");
include_once("../lang/lang." . 'en' . ".php");
include('./head-en.php');
?>

<!DOCTYPE page-sections>
<page-sections lang="en">

    <body>
        <!-- prettier-ignore -->
        @@include('../src/page-sections/header.php')
        @@include('../src/page-sections/top.php')

        <main>
            <!-- prettier-ignore -->
            @@include('../src/page-sections/about.php')
            @@include('../src/page-sections/now.php')
            @@include('../src/page-sections/application.php')
            @@include('../src/page-sections/beneficiation.php')
            @@include('../src/page-sections/tools.php')
            @@include('../src/page-sections/integration.php')
            @@include('../src/page-sections/articles.php')
            @@include('../src/page-sections/ambassadors.php')
            @@include('../src/page-sections/callback.php')
        </main>

        <!-- prettier-ignore -->
        @@include('../src/page-sections/footer.php')
        @@include('../src/page-sections/modal-article.php')
        @@include('../src/page-sections/modals.php')
    </body>

</page-sections>