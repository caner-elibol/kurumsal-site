<?php
include 'include/extensions.php';
$titles = [
    "en" => "Join Us!",
    "tr" => "Bize Katılın!"
];
include 'database/Database.php';


include 'partials/headtags.php';
include 'partials/header.php';
//include 'partials/slider.php';
include 'partials/content-joinus-' . $language . '.php';
include 'partials/footer.php';
