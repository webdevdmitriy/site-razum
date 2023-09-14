<?@session_start();
$langURL = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
// print('  $_SESSION[]:  ' .   $_SESSION['lang'] . "</br>");
// print('def lang '  .   substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
if (!isset($_SESSION['lang'])) {
    //Определяем язык браузера
    $def_leng = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if ($def_leng != 'ru') {
        $def_leng = "en";
    }
    $_SESSION['lang'] = $def_leng;

    if ($def_leng != $langURL) {
        if ($def_leng == 'ru') $def_leng  = '';
        header('Location: /' . $def_leng);
    }
} else {
    if ($langURL == '') $langURL = 'ru';
    $_SESSION['lang'] = $langURL;
}



// session_unset();
// session_destroy();
