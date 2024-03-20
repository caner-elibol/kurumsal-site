<?php
if (session_start()) {
} else {
    session_start();
}

if ($_GET['language']) {
    $_SESSION['language'] = $_GET['language'];
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
