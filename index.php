<?php

include 'include/extensions.php';
$titles = [
    'en' => "Home Page",
    'tr' => "Anasayfa",
];
include 'database/Database.php';

include 'partials/headtags.php';

include 'partials/header.php';
include 'partials/slider-' . $language . '.php';
include 'partials/content-index-' . $language . '.php';
include 'partials/footer.php';
