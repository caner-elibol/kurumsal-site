<?php
include 'include/extensions.php';
//include 'database/Database.php';

$titles = [
    "en" => "Documents",
    "tr" => "Belgeler",
];
include 'partials/headtags.php';
include 'partials/header.php';
//include 'partials/slider.php';
include 'partials/content-' . $host . '.php';
include 'partials/footer.php';
