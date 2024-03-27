<?php
include 'include/extensions.php';
//include 'database/Database.php';

$titles = [];
if ($host == "payments") {
    $titles = [
        "en" => "Payments",
        "tr" => "Ödemeler",
    ];
} else if ($host == "transfer") {
    $titles = [
        "en" => "Send Money 7/24 for Free ",
        "tr" => "7/24 Ücretsiz Para Gönder",
    ];
} else if ($host == "pos") {
    $titles = [
        "en" => "Virtual Pos",
        "tr" => "Sanal Pos",
    ];
}
include 'partials/headtags.php';
include 'partials/header.php';
//include 'partials/slider.php';
include 'partials/content-' . $host . '-' . $language . '.php';
include 'partials/footer.php';
