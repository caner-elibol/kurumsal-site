<?php
function getUpper($string)
{
    $Upperstring = strtoupper($string);

    return $Upperstring;
}

$h = explode("/", $_SERVER['REQUEST_URI']);
$host = end($h);
