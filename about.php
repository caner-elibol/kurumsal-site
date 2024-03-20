<?php
include 'include/extensions.php';
$titles = [
    'en' => "About Us",
    'tr' => "Hakkımızda"
];
include 'database/Database.php';

include 'partials/headtags.php';
include 'partials/header.php';
//include 'partials/slider.php';
include 'partials/content-about-' . $language . '.php';
include 'partials/footer.php';