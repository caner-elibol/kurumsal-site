<?php
include 'include/extensions.php';
include 'database/Database.php';

$titles = [];
if ($host == "dcb") {
    $titles = [
        "en" => "DCB",
        "tr" => "Mobil Ödeme",
    ];
} else if ($host == "transfer") {
    $titles = [
        "en" => "Money Transfer",
        "tr" => "Para Transferi",
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
