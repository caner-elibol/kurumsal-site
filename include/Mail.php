<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

class Mail
{
  public static function SendMailToAppealer($mailAppealer, $appealId, $apealerName)
  {
    $mesajicerik = "<!DOCTYPE HTML PUBLIC '-//W3C//DTD XHTML 1.0 Transitional //EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
        <html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
        
        <head>
            <!--[if gte mso 9]>
        <xml>
            <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <meta name='x-apple-disable-message-reformatting'>
            <!--[if !mso]><!-->
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <!--<![endif]-->
            <title></title>
        
            <style type='text/css'>
            @media only screen and (min-width: 620px) {
                .u-row {
                width: 600px !important;
                }
        
                .u-row .u-col {
                vertical-align: top;
                }
        
                .u-row .u-col-25 {
                width: 150px !important;
                }
        
                .u-row .u-col-100 {
                width: 600px !important;
                }
        
            }
        
            @media (max-width: 620px) {
              .u-row-container {
                max-width: 100% !important;
                padding-left: 0px !important;
                padding-right: 0px !important;
              }
        
              .u-row .u-col {
                min-width: 320px !important;
                max-width: 100% !important;
                display: block !important;
              }
        
              .u-row {
                width: calc(100% - 40px) !important;
              }
        
              .u-col {
                width: 100% !important;
              }
        
              .u-col>div {
                margin: 0 auto;
              }
            }
        
            body {
              margin: 0;
              padding: 0;
            }
        
            table,
            tr,
            td {
              vertical-align: top;
              border-collapse: collapse;
            }
        
            p {
              margin: 0;
            }
        
            .ie-container table,
            .mso-container table {
              table-layout: fixed;
            }
        
            * {
              line-height: inherit;
            }
        
            a[x-apple-data-detectors='true'] {
              color: inherit !important;
              text-decoration: none !important;
            }
        
            table,
            td {
              color: #000000;
            }
        
            a {
              color: #0000ee;
              text-decoration: underline;
            }
          </style>
        
        
        
          <!--[if !mso]><!-->
          <link href='https://fonts.googleapis.com/css?family=Cabin:400,700&display=swap' rel='stylesheet' type='text/css'>
          <!--<![endif]-->
        
        </head>
        
        <body class='clean-body u_body' style='margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #e7e7e7;color: #000000'>
          <!--[if IE]><div class='ie-container'><![endif]-->
          <!--[if mso]><div class='mso-container'><![endif]-->
          <table style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #e7e7e7;width:100%' cellpadding='0' cellspacing='0'>
            <tbody>
              <tr style='vertical-align: top'>
                <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top'>
                  <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td align='center' style='background-color: #e7e7e7;'><![endif]-->
        
        
                  <div class='u-row-container' style='padding: 0px;background-color: transparent'>
                    <div class='u-row' style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;'>
                      <div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
                        <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding: 0px;background-color: transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:600px;'><tr style='background-color: transparent;'><![endif]-->
        
                        <!--[if (mso)|(IE)]><td align='center' width='600' style='background-color: #ffffff;width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top'><![endif]-->
                        <div class='u-col u-col-100' style='max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;'>
                          <div style='background-color: #ffffff;width: 100% !important;'>
                            <!--[if (!mso)&(!IE)]><!-->
                            <div style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;'>
                              <!--<![endif]-->
        
                              <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
                                <tbody>
                                  <tr>
                                    <td style='overflow-wrap:break-word;word-break:break-word;padding:20px;font-family:arial,helvetica,sans-serif;' align='left'>
        
                                      <table width='100%' cellpadding='0' cellspacing='0' border='0'>
                                        <tr>
                                          <td style='padding-right: 0px;padding-left: 0px;' align='center'>
                                            <a href='https://junomoney.com.tr/' target='_blank'>
                                              <img align='center' border='0' src='https://junomoney.com.tr/images/mailimagesKayıt/image-11.png' alt='' title='' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 560px;' width='560' />
                                            </a>
                                          </td>
                                        </tr>
                                      </table>
        
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
        
                              <!--[if (!mso)&(!IE)]><!-->
                            </div>
                            <!--<![endif]-->
                          </div>
                        </div>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                      </div>
                    </div>
                  </div>
        
        
        
                  <div class='u-row-container' style='padding: 0px;background-color: transparent'>
                    <div class='u-row' style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #1a428a;'>
                      <div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
                        <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding: 0px;background-color: transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:600px;'><tr style='background-color: #1a428a;'><![endif]-->
        
                        <!--[if (mso)|(IE)]><td align='center' width='600' style='width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;' valign='top'><![endif]-->
                        <div class='u-col u-col-100' style='max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;'>
                          <div style='width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
                            <!--[if (!mso)&(!IE)]><!-->
                            <div style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
                              <!--<![endif]-->
        
                              <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
                                <tbody>
                                  <tr>
                                    <td style='overflow-wrap:break-word;word-break:break-word;padding:40px 10px 10px;font-family:arial,helvetica,sans-serif;' align='left'>
        
                                      <table width='100%' cellpadding='0' cellspacing='0' border='0'>
                                        <tr>
                                          <td style='padding-right: 0px;padding-left: 0px;' align='center'>
        
                                            <img align='center' border='0' src='https://junomoney.com.tr/images/mailimagesKayıt/image-8.png' alt='' title='' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 20%;max-width: 116px;' width='116' />
        
                                          </td>
                                        </tr>
                                      </table>
        
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
        
                              <!--[if (!mso)&(!IE)]><!-->
                            </div>
                            <!--<![endif]-->
                          </div>
                        </div>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                      </div>
                    </div>
                  </div>
        
        
        
                  <div class='u-row-container' style='padding: 0px;background-color: transparent'>
                    <div class='u-row' style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #1a428a;'>
                      <div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
                        <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding: 0px;background-color: transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:600px;'><tr style='background-color: #1a428a;'><![endif]-->
        
                        <!--[if (mso)|(IE)]><td align='center' width='600' style='width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;' valign='top'><![endif]-->
                        <div class='u-col u-col-100' style='max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;'>
                          <div style='width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
                            <!--[if (!mso)&(!IE)]><!-->
                            <div style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
                              <!--<![endif]-->
        
                              <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
                                <tbody>
                                  <tr>
                                    <td style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;' align='left'>
        
                                      <div style='line-height: 140%; text-align: center; word-wrap: break-word;'>
                                        <p style='font-size: 14px; line-height: 140%;'><span style='font-family: Cabin, sans-serif; font-size: 28px; line-height: 39.2px; color: #ffffff;'><strong>#" . $appealId . " numaralı başvurunuz bize ulaşmıştır.</strong></span></p>
                                      </div>
        
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
        
                              <!--[if (!mso)&(!IE)]><!-->
                            </div>
                            <!--<![endif]-->
                          </div>
                        </div>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                      </div>
                    </div>
                  </div>
        
        
        
                  <div class='u-row-container' style='padding: 0px;background-color: transparent'>
                    <div class='u-row' style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #1a428a;'>
                      <div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
                        <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding: 0px;background-color: transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:600px;'><tr style='background-color: #1a428a;'><![endif]-->
        
                        <!--[if (mso)|(IE)]><td align='center' width='600' style='width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;' valign='top'><![endif]-->
                        <div class='u-col u-col-100' style='max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;'>
                          <div style='width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
                            <!--[if (!mso)&(!IE)]><!-->
                            <div style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
                              <!--<![endif]-->
        
                              <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
                                <tbody>
                                  <tr>
                                    <td style='overflow-wrap:break-word;word-break:break-word;padding:0px 10px 31px;font-family:arial,helvetica,sans-serif;' align='left'>
        
                                      <div style='line-height: 140%; text-align: center; word-wrap: break-word;'>
                                        <p style='font-size: 14px; line-height: 140%;'><strong><span style='color: #ffffff; font-size: 20px; line-height: 28px; font-family: Cabin, sans-serif;'>Operasyon ekibimiz 48 saat i&ccedil;erisinde sizinle iletişime ge&ccedil;ecektir.</span></strong></p>
                                      </div>
        
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
        
                              <!--[if (!mso)&(!IE)]><!-->
                            </div>
                            <!--<![endif]-->
                          </div>
                        </div>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                      </div>
                    </div>
                  </div>
        
        
        
                  <div class='u-row-container' style='padding: 0px;background-color: transparent'>
                    <div class='u-row' style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;'>
                      <div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
                        <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding: 0px;background-color: transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:600px;'><tr style='background-color: transparent;'><![endif]-->
        
                        <!--[if (mso)|(IE)]><td align='center' width='600' style='width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;' valign='top'><![endif]-->
                        <div class='u-col u-col-100' style='max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;'>
                          <div style='width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
                            <!--[if (!mso)&(!IE)]><!-->
                            <div style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
                              <!--<![endif]-->
        
                              <!--[if (!mso)&(!IE)]><!-->
                            </div>
                            <!--<![endif]-->
                          </div>
                        </div>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                      </div>
                    </div>
                  </div>
        
        
        
                  <div class='u-row-container' style='padding: 0px;background-color: transparent'>
                    <div class='u-row' style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #e5eaf5;'>
                      <div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
                        <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding: 0px;background-color: transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:600px;'><tr style='background-color: #e5eaf5;'><![endif]-->
        
                        <!--[if (mso)|(IE)]><td align='center' width='600' style='width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;' valign='top'><![endif]-->
                        <div class='u-col u-col-100' style='max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;'>
                          <div style='width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
                            <!--[if (!mso)&(!IE)]><!-->
                            <div style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
                              <!--<![endif]-->
        
                              <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
                                <tbody>
                                  <tr>
                                    <td style='overflow-wrap:break-word;word-break:break-word;padding:41px 55px 18px;font-family:arial,helvetica,sans-serif;' align='left'>
        
                                      <div style='line-height: 160%; text-align: center; word-wrap: break-word;'>
                                        <p style='font-size: 14px; line-height: 160%;'><span style='font-family: Cabin, sans-serif; font-size: 12px; line-height: 19.2px;'>Vizyon Elektronik Para ve &Ouml;deme Hizmetleri A.Ş. 6493 sayılı &Ouml;deme ve Menkul Kıymet Mutabakat Sistemleri, &Ouml;deme ve Elektronik Para Kuruluşları Kanunu kapsamında lisanslı bir elektronik para kuruluşudur.</span></p>
                                        <p style='font-size: 14px; line-height: 160%;'>&nbsp;</p>
                                        <p style='font-size: 14px; line-height: 160%;'><span style='font-family: Cabin, sans-serif; font-size: 14px; line-height: 22.4px;'><span style='color: #1a428a; font-size: 14px; line-height: 22.4px;'>Adres:</span> Esentepe Mh. B&uuml;y&uuml;kdere Cd. No:120B Kat:8 D:37-38, 34394 Şişli/İstanbul</span><br /><span style='font-family: Cabin, sans-serif; font-size: 14px; line-height: 22.4px;'><span style='color: #1a428a; font-size: 14px; line-height: 22.4px;'>E-mail:</span> info@vizyonmobil.com.tr</span><br /><span style='font-family: Cabin, sans-serif; font-size: 14px; line-height: 22.4px;'><span style='color: #1a428a; font-size: 14px; line-height: 22.4px;'>Telefon:</span><a href='tel:+908505333360'> +90 850 533 33 60</a></span></p>
                                      </div>
        
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
        
                              <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
                                <tbody>
                                  <tr>
                                    <td style='overflow-wrap:break-word;word-break:break-word;padding:10px 10px 33px;font-family:arial,helvetica,sans-serif;' align='left'>
        
                                      <div align='center'>
                                        <div style='display: table; max-width:195px;'>
                                          <!--[if (mso)|(IE)]><table width='195' cellpadding='0' cellspacing='0' border='0'><tr><td style='border-collapse:collapse;' align='center'><table width='100%' cellpadding='0' cellspacing='0' border='0' style='border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:195px;'><tr><![endif]-->
        
        
                                          <!--[if (mso)|(IE)]><td width='32' style='width:32px; padding-right: 17px;' valign='top'><![endif]-->
                                          <table align='left' border='0' cellspacing='0' cellpadding='0' width='32' height='32' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 17px'>
                                            <tbody>
                                              <tr style='vertical-align: top'>
                                                <td align='left' valign='middle' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top'>
                                                  <a href='https://tr.linkedin.com/company/vizyonepara' title='LinkedIn' target='_blank'>
                                                    <img src='https://junomoney.com.tr/images/mailimagesKayıt/image-4.png' alt='LinkedIn' title='LinkedIn' width='32' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important'>
                                                  </a>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <!--[if (mso)|(IE)]></td><![endif]-->
        
                                          <!--[if (mso)|(IE)]><td width='32' style='width:32px; padding-right: 17px;' valign='top'><![endif]-->
                                          <table align='left' border='0' cellspacing='0' cellpadding='0' width='32' height='32' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 17px'>
                                            <tbody>
                                              <tr style='vertical-align: top'>
                                                <td align='left' valign='middle' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top'>
                                                  <a href='https://www.facebook.com/vizyonepara' title='Facebook' target='_blank'>
                                                    <img src='https://junomoney.com.tr/images/mailimagesKayıt/image-1.png' alt='Facebook' title='Facebook' width='32' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important'>
                                                  </a>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <!--[if (mso)|(IE)]></td><![endif]-->
        
                                          <!--[if (mso)|(IE)]><td width='32' style='width:32px; padding-right: 17px;' valign='top'><![endif]-->
                                          <table align='left' border='0' cellspacing='0' cellpadding='0' width='32' height='32' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 17px'>
                                            <tbody>
                                              <tr style='vertical-align: top'>
                                                <td align='left' valign='middle' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top'>
                                                  <a href='https://www.instagram.com/vizyonepara/' title='Instagram' target='_blank'>
                                                    <img src='https://junomoney.com.tr/images/mailimagesKayıt/image-2.png' alt='Instagram' title='Instagram' width='32' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important'>
                                                  </a>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <!--[if (mso)|(IE)]></td><![endif]-->
        
                                          <!--[if (mso)|(IE)]><td width='32' style='width:32px; padding-right: 0px;' valign='top'><![endif]-->
                                          <table align='left' border='0' cellspacing='0' cellpadding='0' width='32' height='32' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px'>
                                            <tbody>
                                              <tr style='vertical-align: top'>
                                                <td align='left' valign='middle' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top'>
                                                  <a href='https://twitter.com/vizyonepara' title='Twitter' target='_blank'>
                                                    <img src='https://junomoney.com.tr/images/mailimagesKayıt/image-3.png' alt='Twitter' title='Twitter' width='32' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important'>
                                                  </a>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <!--[if (mso)|(IE)]></td><![endif]-->
        
        
                                          <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                        </div>
                                      </div>
        
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
        
                              <!--[if (!mso)&(!IE)]><!-->
                            </div>
                            <!--<![endif]-->
                          </div>
                        </div>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                      </div>
                    </div>
                  </div>
        
        
        
                  <div class='u-row-container' style='padding: 0px;background-color: transparent'>
                    <div class='u-row' style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #e5eaf5;'>
                      <div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
                        <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding: 0px;background-color: transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:600px;'><tr style='background-color: #e5eaf5;'><![endif]-->
        
                        <!--[if (mso)|(IE)]><td align='center' width='150' style='width: 150px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;' valign='top'><![endif]-->
                        <div class='u-col u-col-25' style='max-width: 320px;min-width: 150px;display: table-cell;vertical-align: top;'>
                          <div style='width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
                            <!--[if (!mso)&(!IE)]><!-->
                            <div style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
                              <!--<![endif]-->
        
                              <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
                                <tbody>
                                  <tr>
                                    <td style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;' align='left'>
        
                                      <table width='100%' cellpadding='0' cellspacing='0' border='0'>
                                        <tr>
                                          <td style='padding-right: 0px;padding-left: 0px;' align='center'>
                                            <a href='https://faturavizyon.com/' target='_blank'>
                                              <img align='center' border='0' src='https://junomoney.com.tr/images/mailimagesKayıt/image-9.png' alt='' title='' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 130px;' width='130' />
                                            </a>
                                          </td>
                                        </tr>
                                      </table>
        
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
        
                              <!--[if (!mso)&(!IE)]><!-->
                            </div>
                            <!--<![endif]-->
                          </div>
                        </div>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]><td align='center' width='150' style='width: 150px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;' valign='top'><![endif]-->
                        <div class='u-col u-col-25' style='max-width: 320px;min-width: 150px;display: table-cell;vertical-align: top;'>
                          <div style='width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
                            <!--[if (!mso)&(!IE)]><!-->
                            <div style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
                              <!--<![endif]-->
        
                              <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
                                <tbody>
                                  <tr>
                                    <td style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;' align='left'>
        
                                      <table width='100%' cellpadding='0' cellspacing='0' border='0'>
                                        <tr>
                                          <td style='padding-right: 0px;padding-left: 0px;' align='center'>
                                            <a href='https://junomoney.com.tr/' target='_blank'>
                                              <img align='center' border='0' src='https://junomoney.com.tr/images/mailimagesKayıt/image-7.png' alt='' title='' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 130px;' width='130' />
                                            </a>
                                          </td>
                                        </tr>
                                      </table>
        
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
        
                              <!--[if (!mso)&(!IE)]><!-->
                            </div>
                            <!--<![endif]-->
                          </div>
                        </div>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]><td align='center' width='150' style='width: 150px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;' valign='top'><![endif]-->
                        <div class='u-col u-col-25' style='max-width: 320px;min-width: 150px;display: table-cell;vertical-align: top;'>
                          <div style='width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
                            <!--[if (!mso)&(!IE)]><!-->
                            <div style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
                              <!--<![endif]-->
        
                              <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
                                <tbody>
                                  <tr>
                                    <td style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;' align='left'>
        
                                      <table width='100%' cellpadding='0' cellspacing='0' border='0'>
                                        <tr>
                                          <td style='padding-right: 0px;padding-left: 0px;' align='center'>
                                            <a href='https://vizyonpos.com.tr/' target='_blank'>
                                              <img align='center' border='0' src='https://junomoney.com.tr/images/mailimagesKayıt/image-5.png' alt='' title='' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 130px;' width='130' />
                                            </a>
                                          </td>
                                        </tr>
                                      </table>
        
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
        
                              <!--[if (!mso)&(!IE)]><!-->
                            </div>
                            <!--<![endif]-->
                          </div>
                        </div>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]><td align='center' width='150' style='width: 150px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;' valign='top'><![endif]-->
                        <div class='u-col u-col-25' style='max-width: 320px;min-width: 150px;display: table-cell;vertical-align: top;'>
                          <div style='width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
                            <!--[if (!mso)&(!IE)]><!-->
                            <div style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
                              <!--<![endif]-->
        
                              <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
                                <tbody>
                                  <tr>
                                    <td style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;' align='left'>
        
                                      <table width='100%' cellpadding='0' cellspacing='0' border='0'>
                                        <tr>
                                          <td style='padding-right: 0px;padding-left: 0px;' align='center'>
        
                                            <img align='center' border='0' src='https://junomoney.com.tr/images/mailimagesKayıt/image-10.png' alt='' title='' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 130px;' width='130' />
        
                                          </td>
                                        </tr>
                                      </table>
        
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
        
                              <!--[if (!mso)&(!IE)]><!-->
                            </div>
                            <!--<![endif]-->
                          </div>
                        </div>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                      </div>
                    </div>
                  </div>
        
        
        
                  <div class='u-row-container' style='padding: 0px;background-color: transparent'>
                    <div class='u-row' style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #e5eaf5;'>
                      <div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
                        <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding: 0px;background-color: transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:600px;'><tr style='background-color: #e5eaf5;'><![endif]-->
        
                        <!--[if (mso)|(IE)]><td align='center' width='600' style='width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;' valign='top'><![endif]-->
                        <div class='u-col u-col-100' style='max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;'>
                          <div style='width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
                            <!--[if (!mso)&(!IE)]><!-->
                            <div style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
                              <!--<![endif]-->
        
                              <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
                                <tbody>
                                  <tr>
                                    <td style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;' align='left'>
        
                                      <table width='100%' cellpadding='0' cellspacing='0' border='0'>
                                        <tr>
                                          <td style='padding-right: 0px;padding-left: 0px;' align='center'>
        
                                            <img align='center' border='0' src='https://junomoney.com.tr/images/mailimagesKayıt/image-6.png' alt='' title='' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 30%;max-width: 174px;' width='174' />
                                          </td>
                                        </tr>
                                      </table>
        
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
        
                              <!--[if (!mso)&(!IE)]><!-->
                            </div>
                            <!--<![endif]-->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </body>
        
        </html>";

    try {
      //Server settings                   //Enable verbose debug output
      $mail = new PHPMailer(true);

      $mail->isSMTP(); // Set mailer to use SMTP

      $mail->setLanguage('tr', 'PHPMailer/language/phpmailer.lang-tr.php');
      //second with charset
      $mail->CharSet = 'UTF-8';
      $mail->Encoding = 'base64';

      $mail->SMTPAuth = true; // Enable SMTP authentication
      $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted

      $mail->Host = 'smtp.office365.com'; // Specify main and backup SMTP servers
      $mail->Port = 587; // TCP port to connect to
      $mail->SMTPOptions = array(
        'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
        )
      );
      $mail->isHTML(true); // Set email format to HTML

      $mail->Username = 'info@vizyonmobil.com.tr'; // SMTP username
      $mail->Password = '1sS!^x00xJf2'; // SMTP password

      $mail->setFrom('info@vizyonmobil.com.tr', 'Basvurunuz Bize Ulasmıstır'); //Your application NAME and EMAIL
      $mail->Subject = 'Vizyonmobil Yeni Uye İş Yeri Başvurunuz Bize Ulaşmıştır'; //Message subject
      $mail->MsgHTML($mesajicerik); // Message body

      $mail->addAddress($mailAppealer, $apealerName); // Target email
      $mail->send();
      $mailstatus = "sent";
    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      $mailstatus = $mail->ErrorInfo;
    }
    return $mailstatus;
  }
  public static function SendMailToOurFirm($appealerName, $appealerMail, $appealerPhone, $appealerPlatform, $appealerPlatformDesc, $productInfo, $firmType, $firmPhone, $firmVolume)
  {
    $mesajicerik = "<!DOCTYPE HTML PUBLIC '-//W3C//DTD XHTML 1.0 Transitional //EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
    <html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
    
    <head>
      <!--[if gte mso 9]>
                <xml>
                  <o:OfficeDocumentSettings>
                    <o:AllowPNG/>
                    <o:PixelsPerInch>96</o:PixelsPerInch>
                  </o:OfficeDocumentSettings>
                </xml>
                <![endif]-->
      <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <meta name='x-apple-disable-message-reformatting'>
      <!--[if !mso]><!-->
      <meta http-equiv='X-UA-Compatible' content='IE=edge'>
      <!--<![endif]-->
      <title></title>
    
      <style>
        body,
        table,
        td,
        a {
          -webkit-text-size-adjust: 100%;
          -ms-text-size-adjust: 100%;
        }
    
        table,
        td {
          mso-table-lspace: 0pt;
          mso-table-rspace: 0pt;
        }
    
        img {
          -ms-interpolation-mode: bicubic;
        }
    
        img {
          border: 0;
          height: auto;
          line-height: 100%;
          outline: none;
          text-decoration: none;
        }
    
        table {
          border-collapse: collapse !important;
        }
    
        body {
          height: 100% !important;
          margin: 0 !important;
          padding: 0 !important;
          width: 100% !important;
        }
    
        a[x-apple-data-detectors] {
          color: inherit !important;
          text-decoration: none !important;
          font-size: inherit !important;
          font-family: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
        }
    
        div[style*='margin: 16px 0;'] {
          margin: 0 !important;
        }
      </style>
    </head>
    
    <body style='background-color: #f7f5fa; margin: 0 !important; padding: 0 !important;'>
    
      <table border='0' cellpadding='0' cellspacing='0' width='100%'>
        <tr>
          <td bgcolor='#F1EB9C' align='center'>
            <table border='0' cellpadding='0' cellspacing='0' width='480'>
              <tr>
                <td align='center' valign='top' style='padding: 20px 10px 20px 10px;'>
                  <div border='0'><img src='https://junomoney.com.tr/images/logo.png' alt='PaypandasLogo'></div>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td bgcolor='#B7B09C' align='center' style='padding: 0px 10px 0px 10px;'>
            <table border='0' cellpadding='0' cellspacing='0' width='480'>
              <tr>
                <td bgcolor='#ffffff' align='left' valign='top' style='padding: 30px 30px 20px 30px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; line-height: 48px;'>
                  <h1 style='font-size: 32px; font-weight: 400; margin: 0;'>Yeni Üye İşyeri Başvurusu</h1>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td bgcolor='#f4f4f4' align='center' style='padding: 0px 10px 0px 10px;'>
            <table border='0' cellpadding='0' cellspacing='0' width='480'>
              <tr>
                <td bgcolor='#ffffff' align='left'>
                  <table width='100%' border='1' cellspacing='0' cellpadding='0'>
                    <tr>
                      <th style='padding-left:30px;padding-right:15px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>Adı Soyadı</th>
                      <td style='padding-left:15px;padding-right:30px;font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>" . $appealerName . "</td>
                    </tr>
                    <tr>
                      <th style='padding-left:30px;padding-right:15px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>Mail Adresi</th>
                      <td style='padding-left:15px;padding-right:30px;font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>" . $appealerMail . "</td>
                    </tr>
                    <tr>
                      <th style='padding-left:30px;padding-right:15px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>Telefon numarası</th>
                      <td style='padding-left:15px;padding-right:30px;font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>" . $appealerPhone . " </td>
                    </tr>
                    <tr>
                      <th style='padding-left:30px;padding-right:15px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>Satış Platformu</th>
                      <td style='padding-left:15px;padding-right:30px;font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>" . $appealerPlatform . "</td>
                    </tr>
                    <tr>
                      <th style='padding-left:30px;padding-right:15px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>Satış Platformu Acıklaması</th>
                      <td style='padding-left:15px;padding-right:30px;font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>" . $appealerPlatformDesc . "</td>
                    </tr>
                    <tr>
                      <th style='padding-left:30px;padding-right:15px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>Urun Hakkında Bilgi</th>
                      <td style='padding-left:15px;padding-right:30px;font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>" . $productInfo . "</td>
                    </tr>
                    <tr>
                      <th style='padding-left:30px;padding-right:15px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>İşletme Turu</th>
                      <td style='padding-left:15px;padding-right:30px;font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>" . $firmType . "</td>
                    </tr>
                    <tr>
                      <th style='padding-left:30px;padding-right:15px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>Firma Telefon Numarası</th>
                      <td style='padding-left:15px;padding-right:30px;font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>" . $firmPhone . "</td>
                    </tr>
                    <tr>
                      <th style='padding-left:30px;padding-right:15px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>Aylık Hacim Beklentisi</th>
                      <td style='padding-left:15px;padding-right:30px;font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>" . $firmVolume . " TL</td>
                    </tr>
                  </table>
                </td>
              </tr>
    
    </html>";

    try {
      //Server settings                   //Enable verbose debug output
      $mail = new PHPMailer(true);

      $mail->isSMTP(); // Set mailer to use SMTP
      $mail->setLanguage('tr', 'PHPMailer/language/phpmailer.lang-tr.php');
      //second with charset
      $mail->CharSet = 'UTF-8';
      $mail->Encoding = 'base64';
      $mail->SMTPAuth = true; // Enable SMTP authentication
      $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted

      $mail->Host = 'smtp.office365.com'; // Specify main and backup SMTP servers
      $mail->Port = 587; // TCP port to connect to
      $mail->SMTPOptions = array(
        'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
        )
      );
      $mail->isHTML(true); // Set email format to HTML

      $mail->Username = 'info@vizyonmobil.com.tr'; // SMTP username
      $mail->Password = '1sS!^x00xJf2'; // SMTP password


      $mail->setFrom('info@vizyonmobil.com.tr', 'Yeni Uye İş Yeri Başvurusu'); //Your application NAME and EMAIL
      $mail->Subject = 'JunoMoney Yeni Uye İş Yeri Başvurusu'; //Message subject
      $mail->MsgHTML($mesajicerik); // Message body

      //$mail->addAddress('operasyon@junomoney.com.tr', 'JunoMoney Operasyon'); // Target email
      $mail->addAddress('caner@rapidpara.com', 'Caner Elibol'); // Target email
      $mail->send();
      $mailstatus = "sent";
    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      $mailstatus = "error";
    }
    return $mailstatus;
  }
}
