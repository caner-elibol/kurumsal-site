<?php
include 'include/extensions.php';
$titles = [
    "en" => "Information",
    "tr" => "Müşteri Bilgilendirme",
];
//include 'database/Database.php';

include 'partials/headtags.php';
include 'partials/header.php';
//include 'partials/slider.php';
include 'partials/content-information-' . $language . '.php';
include 'partials/footer.php';
