<?php
include 'include/extensions.php';
$titles = [
    "en" => "FAQ's",
    "tr" => "S.S.S",
];
include 'database/Database.php';

include 'partials/headtags.php';
include 'partials/header.php';
//include 'partials/slider.php';
include 'partials/content-faqs-' . $language . '.php';
include 'partials/footer.php';
