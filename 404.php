<?php
include 'include/extensions.php';
$titles = [
    "en" => "Contact",
    "tr" => "İletişim",
];
//include 'database/Database.php';

include 'partials/headtags.php';
include 'partials/header.php';
//include 'partials/slider.php';
include 'partials/content-404-' . $language . '.php';
include 'partials/footer.php';
