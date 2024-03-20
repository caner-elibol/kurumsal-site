<?php
function getUpper($string)
{
    $newString = Transliterator::create("tr-Upper")
        ->transliterate($string);

    return $newString;
}

$h = explode("/", $_SERVER['REQUEST_URI']);
$host = end($h);
