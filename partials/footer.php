<!-- Footer
        ============================================= -->
<footer id="footer" class="border-0 bg-white">
    <div class="container">
        <!-- Footer Widgets
                ============================================= -->
        <div class="footer-widgets-wrap pb-5 clearfix">

            <div class="row col-mb-50">
                <div class="col-md-8">

                    <div class="widget clearfix">
                        <div class="row">
                            <div class="col-md-6 col-xs-12  bottommargin-sm">
                                <img src="/images/footer-widget-logo.png" alt="Footer Logo" class="alignleft" style="margin-top: 8px; padding-right: 18px; border-right: 1px solid #DDD;">
                                <img src="/images/icons/footer_logos.webp" alt="">
                            </div>
                            <div class="col-md-6 col-xs-12  bottommargin-sm">
                                <p><?= $footer_stext[$language] ?></p>

                            </div>

                        </div>





                        <div class="line line-sm"></div>

                        <div class="row">
                            <div class="col-md-4 col-6 bottommargin-sm widget_links">
                                <ul>
                                    <li><a href="/about"><?= $bottom_navigation_array[$language][0] ?></a></li>
                                    <li><a href="/support/faqs"><?= $bottom_navigation_array[$language][1] ?></a></li>
                                    <li><a href="/support/privacy-policy"><?= $bottom_navigation_array[$language][2] ?></a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-md-4">
                    <div class="widget clearfix">

                        <div class="row clearfix">
                            <div class="col-12">
                                <div class="feature-box fbox-plain fbox-sm align-items-center">
                                    <div class="fbox-icon">
                                        <i class="icon-envelope text-dark"></i>
                                    </div>
                                    <div class="fbox-content">
                                        <span class="text-muted"><?= ($language == "tr") ? "Mail Adresi" : "Mail Address" ?></span><br>
                                        <h3 class="nott ls0 fw-semibold"><a href="mailto:destek@junomoney.com.tr">destek@junomoney.com.tr</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <div class="feature-box fbox-plain fbox-sm align-items-center">
                                    <div class="fbox-icon">
                                        <i class="icon-phone3 text-dark"></i>
                                    </div>
                                    <div class="fbox-content">

                                        <span class="text-muted"><?= ($language == "tr") ? "Telefon Numarası" : "Phone Number" ?></span><br>
                                        <h3 class="nott ls0 fw-semibold"><a href="tel:+902167552063">+90(216)755 20 63</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- <div class="widget subscribe-widget clearfix">
                        <h5><?= ($language == "tr") ? "Bize ulaşamıyorsanız mail adresinizi iletin. Biz ulaşalım!" : "If You can't reach us. Send your mail address!" ?></h5>
                        <div class="widget-subscribe-form-result">

                        </div>
                        <form id="widget-subscribe-form" action="/include/posted.php" method="post" class="mb-0">
                            <div class="input-group mx-auto">
                                <div class="input-group-text bg-transparent"><i class="icon-email2"></i></div>
                                <input type="email" id="subscribe-form-email" name="subscribe-form-email" class="form-control required email" placeholder="<?= ($language == "tr") ? "Mail Adresi" : "Mail Address" ?>">
                                <button class="btn btn-success button button-color nott ls0 m-0" type="submit"><?= ($language == "tr") ? "Gönder" : "Send" ?></button>
                            </div>
                        </form>
                    </div> -->

                    <!-- <div class="widget">

                        <div class="row col-mb-30">
                            <div class="col-lg-6 col-md-12 col-6">
                                <a href="https://facebook.com/junomoney" target="_blank" class="social-icon si-dark si-colored si-facebook mb-0" style="margin-right: 10px;">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="https://facebook.com/junomoney" target="_blank" class="text-dark"><small style="display: block; margin-top: 3px;"><strong><?= ($language == "tr") ? "Takip Et" : "Follow" ?></strong><br>
                                        Facebook</small></a>
                            </div>
                            <div class="col-lg-6 col-md-12 col-6">
                                <a href="https://linkedin.com/company/junomoneyteknoloji" target="_blank" class="social-icon si-dark si-colored si-rss mb-0" style="margin-right: 10px;">
                                    <i class="icon-linkedin"></i>
                                    <i class="icon-linkedin"></i>
                                </a>
                                <a href="https://linkedin.com/company/junomoneyteknoloji" target="_blank" class="text-dark"><small style="display: block; margin-top: 3px;"><strong><?= ($language == "tr") ? "Görüntüle" : "View" ?></strong><br>
                                        Profile</small></a>
                            </div>
                        </div>

                    </div> -->
                </div>
            </div>

        </div><!-- .footer-widgets-wrap end -->
    </div>

    <!-- Copyrights
            ============================================= -->
    <div id="copyrights" style="background: url('/demos/seo/images/hero/footer.svg') no-repeat top center; background-size: cover; padding-top: 70px;">
        <div class="container clearfix">

            <div class="row justify-content-between col-mb-30">
                <div class="col-12 col-lg-auto text-center text-lg-start">
                    Copyrights &copy; 2024 All Rights Reserved by JunoMoney<br>
                    <div class="copyright-links"><a href="/support/terms-conditions">Terms of Use</a> / <a href="/support/privacy-policy">Privacy Policy</a></div>
                </div>

                <div class="col-12 col-lg-auto text-center text-lg-end">
                    <div class="copyrights-menu copyright-links clearfix">
                    </div>
                </div>
            </div>

        </div>
    </div><!-- #copyrights end -->
</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
    ============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- JavaScripts
    ============================================= -->
<script src="/js/jquery.js"></script>
<script src="/js/plugins.min.js"></script>
<script src="/js/particles/particles.min.js"></script>
<script src="/js/particles/particles-line.js"></script><!-- Particles Line -->

<!-- Footer Scripts
    ============================================= -->
<script src="/js/functions.js"></script>
<?= (isset($script) ? $script : "") ?>
</body>
<script>
    jQuery(document).ready(function($) {
        var $faqItems = $('#faqs .faq');
        if (window.location.hash != '') {
            var getFaqFilterHash = window.location.hash;
            var hashFaqFilter = getFaqFilterHash.split('#');
            if ($faqItems.hasClass(hashFaqFilter[1])) {
                $('.grid-filter li').removeClass('activeFilter');
                $('[data-filter=".' + hashFaqFilter[1] + '"]').parent('li').addClass('activeFilter');
                var hashFaqSelector = '.' + hashFaqFilter[1];
                $faqItems.css('display', 'none');
                if (hashFaqSelector != 'all') {
                    $(hashFaqSelector).fadeIn(500);
                } else {
                    $faqItems.fadeIn(500);
                }
            }
        }

        $('.grid-filter a').on('click', function() {
            $('.grid-filter li').removeClass('activeFilter');
            $(this).parent('li').addClass('activeFilter');
            var faqSelector = $(this).attr('data-filter');
            $faqItems.css('display', 'none');
            if (faqSelector != 'all') {
                $(faqSelector).fadeIn(500);
            } else {
                $faqItems.fadeIn(500);
            }
            return false;
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            $.fn.dataTable.tables({
                visible: true,
                api: true
            }).columns.adjust();
        });
    });


    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode > 31 && (charCode != 46 && (charCode < 48 || charCode > 57)))
            return false;
        return true;
    }


    function limitText(limitField, limitNum) {
        if (limitField.value.length > limitNum) {
            limitField.value = limitField.value.substring(0, limitNum);
        }
    }
</script>
<script>
    window.addEventListener("scroll", function() {
        // Videoyu oynatmak istediğiniz scroll eşiği (örneğin, sayfanın %50'si)
        var scrollThreshold = 0.8 * document.documentElement.clientHeight;

        // Video elementini alın
        var video = document.querySelector("#slider video");

        // Video varsa ve kullanıcı scroll eşiğini aştıysa
        if (video && window.scrollY > scrollThreshold) {
            // Videoyu oynatın
            video.play();

            // Scroll olaylarını dinlemeyi bırakın, video zaten oynatılıyor
            window.removeEventListener("scroll", arguments.callee);
        }
    });
</script>


</html>