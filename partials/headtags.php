<?php

session_start();
if (isset($_SESSION['language'])) {
    $language = $_SESSION['language'];
} else {
    $language = "tr";
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="<?= $language ?>">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    <!-- Stylesheets
    ============================================= -->
    <link rel="icon" href="/images/icons/favicon.ico" type="image/icon-x" sizes="32x32">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="/style.css" type="text/css" />

    <link rel="stylesheet" href="/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="/css/magnific-popup.css" type="text/css" />

    <!-- Bootstrap Switch CSS -->
    <link rel="stylesheet" href="/css/components/bs-switches.css" type="text/css" />

    <link rel="stylesheet" href="/css/custom.css" type="text/css" />
    <meta name='viewport' content='initial-scale=1, viewport-fit=cover'>

    <!-- Seo Demo Specific Stylesheet -->
    <link rel="stylesheet" href="/css/colors.php?color=FE9603" type="text/css" /> <!-- Theme Color -->
    <link rel="stylesheet" href="/demos/seo/css/fonts.css" type="text/css" />
    <link rel="stylesheet" href="/demos/seo/seo.css" type="text/css" />
    <!-- / -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- Document Title
    ============================================= -->
    <title>PayPandas | <?= $titles[$language] ?></title>

</head>


<body class="stretched">
    <div id="wrapper" class="clearfix">