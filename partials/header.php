<?php
include 'include/language.php';
?>
<div id="top-bar" class="transparent-topbar <?= !($host == "" || $host == "index" || explode('?', $host)[0] == "joinus" || explode('?', $host)[0] == "appeal") ? "dark" : "" ?>">
    <div class="container clearfix">

        <div class="row justify-content-between">
            <div class="col-12 col-md-auto">

                <!-- Top Links
                        ============================================= -->
                <div class="top-links">
                    <ul class="top-links-container">
                        <li class="top-links-item"><a href="/">
                                <?= ($language == "tr") ? getUpper($top_navigation_array[$language][0]) : $top_navigation_array[$language][0] ?>
                            </a></li>
                        <li class="top-links-item"><a href="/support/privacy-policy"><?= ($language == "tr") ? getUpper($top_navigation_array[$language][1]) : $top_navigation_array[$language][1] ?></a></li>
                        <!-- <li class="top-links-item"><a href="/support/contact">
                                <?= ($language == "tr") ? getUpper($top_navigation_array[$language][2]) : $top_navigation_array[$language][2] ?>
                            </a></li> -->
                        <li class="top-links-item"><a href="/about">
                                <?= ($language == "tr") ? getUpper($top_navigation_array[$language][3]) : $top_navigation_array[$language][3] ?>
                            </a></li>
                        <li class="top-links-item"><a href=""><?= $language ?></a>
                            <ul class="top-links-sub-menu">
                                <li class="top-links-item"><a href="/include/function.php?language=en"><img src="/demos/seo/images/flags/eng.png" alt="Lang">EN</a></li>
                                <li class="top-links-item"><a href="/include/function.php?language=tr"><img src="/demos/seo/images/flags/tr.png" alt="Lang">TR</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- .top-links end -->

            </div>

            <div class="col-12 col-md-auto dark">

                <!-- Top Social
                        ============================================= -->
                <ul id="top-social">
                    <!-- <li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
                    <li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
                    <li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
                    <li><a href="#" class="si-linkedin"><span class="ts-icon"><i class="icon-linkedin"></i></span><span class="ts-text">LinkedIn</span></a></li> -->
                    <li><a href="tel:+902167552063" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+902167552063</span></a>
                    </li>
                    <li><a href="mailto:info@junomoney.com.tr" class="si-email3"><span class="ts-icon"><i class="icon-envelope-alt"></i></span><span class="ts-text">info@junomoney.com.tr</span></a></li>
                </ul><!-- #top-social end -->

            </div>
        </div>

    </div>
</div><!-- #top-bar end -->
<header id="header" class="transparent-header floating-header header-size-md">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <!-- Logo
                        ============================================= -->
                <div id="logo">
                    <a href="/" class="standard-logo" data-dark-logo="/images/logo-dark.png"><img src="/images/logo.png" alt="JunoMoney Logo"></a>
                    <a href="/" class="retina-logo" data-dark-logo="/images/logo-dark@2x.png"><img src="/images/logo@2x.png" alt="JunoMoney Logo"></a>
                </div><!-- #logo end -->

                <div class="header-misc">

                    <!-- Top Search
                            ============================================= -->
                    <!-- <div id="top-search" class="header-misc-icon">
                        <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
                    </div> 

                    <a href="/joinus" class="button button-rounded ms-3 d-none d-sm-block">
                        <?= ($language == "tr") ? getUpper($navigation_array[$language][5]) : $navigation_array[$language][5] ?>
                    </a>-->

                </div>

                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100">
                        <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                        </path>
                        <path d="m 30,50 h 40"></path>
                        <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                        </path>
                    </svg>
                </div>

                <!-- Primary Navigation
                        ============================================= -->
                <nav class="primary-menu with-arrows">

                    <ul class="menu-container">
                        <li class="menu-item <?= ($host == "transfer") ? "current" : "" ?>"><a class="menu-link" href="/services/servicedetail/transfer">
                                <div>
                                    <?= $navigation_array[$language][0] ?>
                                </div>
                            </a></li>
                        <li class="menu-item <?= ($host == "payments") ? "current" : "" ?>"><a class="menu-link" href="/services/servicedetail/payments">
                                <div>
                                    <?= $navigation_array[$language][1] ?>
                                </div>
                            </a></li>
                        <li class="menu-item <?= ($host == "faqs" || $host == "contact") ? "current" : "" ?> mega-menu">
                            <div class="menu-link">
                                <div>
                                    <?= $navigation_array[$language][2] ?>
                                </div>
                            </div>
                            <div class="mega-menu-content mega-menu-style-2 px-0">
                                <div class="container">
                                    <div class="row">
                                        <a href="/support/faqs" class="mega-menu-column sub-menu-container col-lg-6 border-bottom h-bg-light py-2">
                                            <div class="feature-box text-center">
                                                <div class="fbox-icon-v mb-2">
                                                    <img src="/demos/seo/images/icons/social.svg" alt="Dcb" class="bg-transparent rounded-0">
                                                </div>
                                                <div class="fbox-content">
                                                    <h3 class="nott ls0">
                                                        <?= array_keys($services_array[$language])[0] ?>
                                                    </h3>
                                                    <p><?= array_values($services_array[$language])[0][0] ?></p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="/support/contact" class="mega-menu-column sub-menu-container col-lg-6 border-bottom h-bg-light py-2">
                                            <div class="feature-box text-center">
                                                <div class="fbox-icon-v mb-2">
                                                    <img src="/demos/seo/images/icons/optimizing.svg" alt="Pos" class="bg-transparent rounded-0">
                                                </div>
                                                <div class="fbox-content">
                                                    <h3 class="nott ls0">
                                                        <?= array_keys($services_array[$language])[1] ?>
                                                    </h3>
                                                    <p><?= array_values($services_array[$language])[1][0] ?></p>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- <div class="mega-menu-column sub-menu-container col-12 p-0">
                                            <a href="/joinus" class="button button-rounded button-large nott ls0 w-100 text-center m-0 rounded-0 py-3 button-light ">
                                                <?= ($language == "tr") ? getUpper($navigation_array[$language][5]) : $navigation_array[$language][5] ?><i class="icon-line-arrow-right"></i>
                                            </a>
                                        </div>  -->
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- <li class="menu-item <?= ($host == "faqs") ? "current" : "" ?>"><a class="menu-link" href="/support/faqs">
                                <div>
                                    <?= $navigation_array[$language][3] ?>
                                </div>
                            </a></li>
                        <li class="menu-item <?= ($host == "contact") ? "current" : "" ?>"><a class="menu-link" href="/support/contact">
                                <div>
                                    <?= $navigation_array[$language][4] ?>
                                </div>
                            </a></li> -->
                    </ul>

                </nav><!-- #primary-menu end -->

                <!-- <form class="top-search-form" action="search.html" method="get">
                    <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
                </form> -->

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->