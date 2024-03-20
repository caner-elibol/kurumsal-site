<?php
include('../database/Database.php');
require 'Mail.php';
ob_start();
session_start();

if (isset($_POST['appeal_send'])) {
    if (isset($_POST['captcha']) && isset($_SESSION['captcha'])) {
        if ($_POST['captcha'] == $_SESSION['captcha']) {
            $messageResponse = $conn->query("SELECT * FROM `appeals` WHERE `appealer_email` = '" . $_POST['appealer_email'] . "'");
            if ($messageResponse->num_rows > 0) {
                header("Location:/joinus?durum=tooManyAttempts" . (($_POST['googleid'] != 'google') ? "&gclid=" .
                    $_POST['googleid'] : ""));
                exit;
            } else {
                $addMessageQuery = "INSERT INTO `appeals`
(
`appeal_id`,
`appealer_name`,
`appealer_email`,
`appealer_phone`,
`appeal_platform`,
`appeal_platform_desc`,
`firm_product`,
`firm_type`,
`firm_phone`,
`firm_volume`
) VALUES (
NULL,
'" . $_POST['appealer_name'] . "',
'" . $_POST['appealer_email'] . "',
'" . $_POST['appealer_phone'] . "',
'" . $_POST['appeal_platform'] . "',
'" . $_POST['appeal_platform_desc'] . "',
'" . $_POST['firm_product'] . "',
'" . $_POST['firm_type'] . "',
'" . $_POST['firm_phone'] . "',
'" . $_POST['firm_volume'] . "');";

                if ($conn->query($addMessageQuery)) {
                    $messageResponse = $conn->query("SELECT * FROM `appeals` WHERE `appealer_email` = '" . $_POST['appealer_email'] . "'");
                    $messageInfos = $messageResponse->fetch_assoc();
                    $mailgonder = Mail::SendMailToAppealer($_POST['appealer_email'], $messageInfos['appeal_id'], $_POST['appealer_name']);

                    if ($mailgonder == 'sent') {
                        $vizyonMailgonder = Mail::SendMailToOurFirm(
                            $_POST['appealer_name'],
                            $_POST['appealer_email'],
                            $_POST['appealer_phone'],
                            $_POST['appeal_platform'],
                            $_POST['appeal_platform_desc'],
                            $_POST['firm_product'],
                            $_POST['firm_type'],
                            $_POST['firm_phone'],
                            $_POST['firm_volume']
                        );
                        if ($vizyonMailgonder == 'sent') {
                            header("Location:/joinus" . (($_POST['googleid'] != 'google') ? "?gclid=" . $_POST['googleid'] . "&durum=ok" : "?durum=ok"));
                            exit;
                        }
                    } else {
                        header("Location:/joinus?durum=mailnotsent&hata=" . $mailgonder . (($_POST['googleid'] != 'google') ?
                            "&gclid=" . $_POST['googleid'] : ""));
                        exit;
                    }
                }
                echo $addMessageQuery;
            }
        } else {
            header("Location:/joinus?durum=captchaEx" . (($_POST['googleid'] != 'google') ? "&gclid=" .
                $_POST['googleid'] : ""));
            exit;
        }
    } else {
        header("Location:/joinus?durum=captchaDoesntExist" . (($_POST['googleid'] != 'google') ? "&gclid=" .
            $_POST['googleid'] : ""));
        exit;
    }
}
