<?php 
if (!ini_get('display_errors')) {
    ini_set('display_errors', 1);
}

require_once 'vendor/autoload.php';
$application  = new \App\Application();
$application->run();

exit ;
$texto = "#teste #çãba$%32 #kk-09)(* #werQWEWQ(*&¨%$#@#&¨%*&¨%$$GGRGGRG#yt6545345345";
function getHashtags($string) {  
    $hashtags= FALSE;  
    preg_match_all("/(#\w+)/u", $string, $matches);  
    if ($matches) {
        $hashtagsArray = array_count_values($matches[0]);
        $hashtags = array_keys($hashtagsArray);
    }
    return $hashtags;
}
print_r(getHashtags($texto));