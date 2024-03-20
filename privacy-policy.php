<?php
include 'include/extensions.php';
$titles = [
    "en" => "Privacy Policy",
    "tr" => "K.V.K.K"
];
include 'partials/headtags.php';
include 'partials/header.php';
//include 'partials/slider.php';
include 'partials/content-' . $host . '-' . $language . '.php';
include 'partials/footer.php';
