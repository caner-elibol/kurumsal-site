<section id="content">
    <div class="content-wrap pt-0">
        <div class="section m-0" style="background: url('demos/seo/images/sections/1.jpg') no-repeat center center; background-size: cover; padding: 100px 0;">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-4">
                        <div class="heading-block border-bottom-0 bottommargin-sm">
                            <div class="badge rounded-pill badge-default">Başvuru</div>
                            <h3 class="nott ls0">Üye İşyerimiz Olmak İçin Lütfen Formu Doldurunuz </h3>
                        </div>
                        <p>JunoMoney'a katılmak için ilk adımı atın ve bugün finansal işlemlerinizi daha hızlı, daha güvenli ve daha verimli bir şekilde yönetmek için başvuru formumuzu doldurun. Bizimle birlikte dijital ödeme dünyasının avantajlarından yararlanın ve finansal özgürlüğünüzü daha da artırın. Hemen başvurun ve JunoMoney ailesinin bir parçası olun!</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="form">
                                    <?php
                                    if (isset($_GET["durum"])) {
                                        if ($_GET["durum"] == "ok") {
                                    ?>
                                            <div class="alert alert-success text-center" role="alert">
                                                Destek talebiniz başarılı bir şekilde ekibimize iletildi. En yakın zamanda
                                                sizinle iletişime geçeceğiz!
                                            </div>
                                        <?php
                                        } else if ($_GET["durum"] == "no") {
                                        ?>
                                            <div class="alert alert-danger text-center" role="alert">
                                                Bir hata oluştu. Tüm bilgileri kontrol ettikten sonra tekrar deneyiniz!
                                            </div>
                                        <?php
                                        } else if ($_GET["durum"] == "tooManyAttempts") {
                                        ?>
                                            <div class="alert alert-warning text-center" role="alert">
                                                Bir hata oluştu. Şu anda işlemde olan bir başvurunuz bulunmaktadır! En kısa
                                                sürede iletişime
                                                geçeceğiz!
                                            </div>
                                        <?php
                                        } else if ($_GET["durum"] == "mailnotsent") {
                                        ?>
                                            <div class="alert alert-danger text-center" role="alert">
                                                Bir hata oluştu! Başvurunuz veritabanımıza ulaştı fakat şu anda mail servisimize
                                                ulaşılamıyor, en kısa sürede düzelteceğiz. Lütfen daha sonra tekrar deneyiniz.
                                            </div>
                                        <?php
                                        } else if ($_GET["durum"] == "captchaEx") {
                                        ?>
                                            <div class="alert alert-danger text-center" role="alert">
                                                Lütfen Captcha sorgulamasını doğru bir şekilde yapınız!
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <form class="row mb-0" id="appeal_form" name="appeal_form" action="/include/posted.php" method="post">
                                        <div class="col-6 form-group mb-3">
                                            <label for="appealer_name">Ad Soyad:*</label>
                                            <input type="text" name="appealer_name" id="appealer_name" class="form-control input-sm required" placeholder="Adı Soyadı*" value="">
                                        </div>
                                        <div class="col-6 form-group mb-3">
                                            <label for="appealer_email">Emaİl Adresİ:*</label>
                                            <input type="email" name="appealer_email" id="appealer_email" class="form-control input-sm required" placeholder="Kurumsal Mail Adresi Tercih Sebebidir.*" value="">
                                        </div>
                                        <div class="col-6 form-group mb-4">
                                            <label for="appealer_phone">Telefon Numarası:*</label>
                                            <input type="text" name="appealer_phone" pattern="[5]{1}[0-9]{9}" onkeypress="return isNumberKey(event)" onKeyDown="limitText(this,10);" onKeyUp="limitText(this,10);" id="appealer_phone" class="form-control input-sm required" placeholder="5XXXXXXXXX" value="">
                                        </div>
                                        <div class="col-6 form-group mb-3">
                                            <label for="appeal_platform">Satış Platformu:*</label>
                                            <select class="form-select" name="appeal_platform" id="appeal_platform" required>
                                                <option value=""> Lütfen Seçim Yapınız</option>
                                                <option value="Web Sitesi"> Web Sitesi</option>
                                                <option value="Sosyal Medya"> Sosyal Medya</option>
                                                <option value="Fiziki Satış"> Fiziki Satış</option>
                                                <option value="Hiçbiri"> Bunlardan Hiçbiri</option>
                                            </select>
                                        </div>
                                        <div class="col-12 form-group mb-3" id="platform_description">
                                        </div>
                                        <div class="col-6 form-group mb-4">
                                            <label for="firm_product">Ürün Hakkında Bİlgİ:*</label>
                                            <input type="text" name="firm_product" id="firm_product" class="form-control input-sm required" placeholder="Ürün hakkında kısa bilgi veriniz.*" value="">
                                        </div>
                                        <div class="col-6 form-group mb-3">
                                            <label for="firm_type">Fİrma Türü:*</label>
                                            <select class="form-select" name="firm_type" id="firm_type" required>
                                                <option> Lütfen Seçim Yapınız</option>
                                                <option value="Şahıs İşletmesi"> Şahıs İşletmesi</option>
                                                <option value="Limited Şirket"> Limited Şirket</option>
                                                <option value="Anonim Şirket">Anonim Şirket </option>
                                                <option value="Bireysel Başvuru"> Bireysel Başvuru</option>
                                                <option value="Adi Ortaklık"> Adi Ortaklık</option>
                                                <option value="Apartman,Site ve İş Hanı Yönetimi"> Apartman,Site ve İş
                                                    Hanı Yönetimi</option>
                                                <option value="Dernek/Vakıf"> Dernek/Vakıf</option>
                                                <option value="İktisadi İşletme"> İktisadi İşletme</option>
                                                <option value="KKTC Şirketi"> KKTC Şirketi</option>
                                            </select>
                                        </div>
                                        <div class="col-6 form-group mb-4">
                                            <label for="firm_phone">Fİrma Telefon No:</label>
                                            <input type="text" name="firm_phone" pattern="[0-9]{11}" onkeypress="return isNumberKey(event)" onKeyDown="limitText(this,11);" onKeyUp="limitText(this,11);" id="firm_phone" class="form-control input-sm" value="">
                                        </div>
                                        <div class="col-6 form-group mb-3">
                                            <label for="firm_volume">Aylık Hacİm Beklentİsİ:*</label>
                                            <select class="form-select" name="firm_volume" id="firm_volume" required>
                                                <option value="Belli Değil"> Bilmiyorum</option>
                                                <option value="0-100.000"> 0-100.000 TL arasında </option>
                                                <option value="100.000-500.000"> 100.000-500.000 TL arasında</option>
                                                <option value=">500.000"> 500.000 TL üzerinde</option>
                                            </select>
                                        </div>
                                        <div class="col-12 form-group mb-4">
                                            <label for="captcha">Capthca:*</label>
                                            <img src="/include/captcha.php" id="capt">
                                            <input type="text" type="text" pattern="[0-9]{5}" name="captcha" id="captcha" onkeypress="return isNumberKey(event)" onKeyDown="limitText(this,5);" onKeyUp="limitText(this,5);" class="form-control input-sm required" value="">
                                        </div>
                                        <div class="col-12 form-group mb-0">
                                            <button class="button button-rounded w-100 nott ls0 m-0" type="submit" id="appeal_send" name="appeal_send" value="submit">Şimdi Başvur</button>
                                        </div>
                                        <input type="hidden" type="text" name="googleid" id="googleid" value="googele">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- Works/Projects
            ============================================= -->
        <!-- <div class="section m-0" style="background: url('demos/seo/images/sections/5.jpg') no-repeat center center; background-size: cover;padding: 80px 0;">
            <div class="container">
                <div class="heading-block border-bottom-0 center">
                    <div class="badge rounded-pill badge-default">Completed Projects</div>
                    <h3 class="nott ls0">Our Latest Works</h3>
                </div>

                <div id="portfolio" class="portfolio row grid-container gutter-20">

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-media pf-icons">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="/demos/seo/images/works/1.jpg" alt="The Atmosphere">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">The Atmosphere</a></h3>
                                <span>Digital Marketing</span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-illustrations">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="/demos/seo/images/works/2.jpg" alt="Wavelength Structure">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>Wavelength Structure</h3>
                                <span>SEO</span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-graphics pf-uielements">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="/demos/seo/images/works/3.jpg" alt="Greenhouse Garden">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>Simplicity Pages</h3>
                                <span>Analytics</span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-icons pf-illustrations">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="/demos/seo/images/works/4.jpg" alt="Industrial Hub">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>SEO Analysis</h3>
                                <span>SEO</span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-uielements pf-media">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="/demos/seo/images/works/5.jpg" alt="Corporate Headquarters">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>Marketing Strategy</h3>
                                <span>Digital Marketing</span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-graphics pf-illustrations">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="/demos/seo/images/works/6.jpg" alt="Space Station">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>Space Station</h3>
                                <span>Social Media</span>
                            </div>
                        </div>
                    </article>

                </div>

                <div class="center">
                    <a href="demo-seo-about.html" class="button button-large button-rounded text-capitalize ms-0 mt-5 ls0">View All Works</a>
                </div>

            </div>
        </div> -->
        <div class="container clearfix py-5">
            <div class="row">
                <div class="col-md-4 mt-5">
                    <div class="feature-box fbox-center border-0">
                        <div class="fbox-icon">
                            <a href="#"><img src="/demos/seo/images/icons/research.svg" alt="Feature Icon" class="bg-transparent rounded-0"></a>
                        </div>
                        <div class="fbox-content">
                            <h3 class="nott ls0">1. İnceleme &amp; Onay</h3>
                            <p>İbraz edilen belgelerin inceleme sonucunda gerekli onaylar alındıktan sonra üye işyeriniz açılır.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-5">
                    <div class="feature-box fbox-center border-0">
                        <div class="fbox-icon">
                            <a href="#"><img src="/demos/seo/images/icons/optimizing.svg" alt="Feature Icon" class="bg-transparent rounded-0"></a>
                        </div>
                        <div class="fbox-content">
                            <h3 class="nott ls0">2. Entegrasyon</h3>
                            <p>Gerekli entegrasyon süreçleri tamamlanarak işlemlere başlamak için hazır duruma getirilir.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-5">
                    <div class="feature-box fbox-center border-0">
                        <div class="fbox-icon">
                            <a href="#"><img src="/demos/seo/images/icons/result.svg" alt="Feature Icon" class="bg-transparent rounded-0"></a>
                        </div>
                        <div class="fbox-content">
                            <h3 class="nott ls0">3. Panel Erişimi</h3>
                            <p>Panel erişimleri tanımlanır ve ödeme almaya başlayabilirsiniz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="container py-4">
            <div class="heading-block border-bottom-0 center">
                <div class="badge rounded-pill badge-default">Latest Articles</div>
                <h3 class="nott ls0">Recently From the Blog</h3>
            </div>

            <div class="row mt-5 clearfix">
                <div class="col-md-4">
                    <article class="entry">
                        <div class="entry-image mb-3">
                            <a href="#"><img src="/demos/seo/images/blog/1.jpg" alt="Image 3"></a>
                        </div>
                        <div class="entry-title">
                            <h3><a href="#">Top Most SEO Optizied Websites</a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="icon-line2-user"></i><a href="#"> John Doe</a></li>
                                <li><i class="icon-calendar-times1"></i><a href="#"> 11 Mar 2021</a></li>
                            </ul>
                        </div>
                        <div class="entry-content clearfix">
                            <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem progressive
                                technology through pariatur quibusdam veritatis quisquam. Efficiently communicate
                                alternative.</p>
                        </div>
                    </article>
                </div>

                <div class="col-md-4">
                    <article class="entry">
                        <div class="entry-image mb-3">
                            <a href="#"><img src="/demos/seo/images/blog/2.jpg" alt="Image 3"></a>
                        </div>
                        <div class="entry-title">
                            <h3><a href="#">10 Recent SEO Tips for Startups</a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="icon-line2-user"></i><a href="#"> Semicolonweb</a></li>
                                <li><i class="icon-calendar-times1"></i><a href="#"> 18 Apr 2021</a></li>
                            </ul>
                        </div>
                        <div class="entry-content clearfix">
                            <p>Interactively predominate progressive technology through distinctive materials.
                                Progressively benchmark extensible intellectual. Exercitationem progressive
                                technology through pariatur.</p>
                        </div>
                    </article>
                </div>

                <div class="col-md-4">
                    <article class="entry">
                        <div class="entry-image mb-3">
                            <a href="#"><img src="/demos/seo/images/blog/3.jpg" alt="Image 3"></a>
                        </div>
                        <div class="entry-title">
                            <h3><a href="#">3 Ways to Transform Your Site Into a SEO</a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="icon-line2-user"></i><a href="#"> John Doe</a></li>
                                <li><i class="icon-calendar-times1"></i><a href="#"> 06 Aug 2021</a></li>
                            </ul>
                        </div>
                        <div class="entry-content clearfix">
                            <p>Globally synergize premium metrics with holistic e-markets. Professionally morph
                                interoperable networks vis-a-vis value-added methods.</p>
                        </div>
                    </article>
                </div>
            </div>

        </div> -->

        <!-- Promo/Contact
            ============================================= -->
        <?php
        //include('breadcumb-' . $language . '.php')
        ?>
    </div>
</section><!-- #content end -->
<script>
    $(document).ready(function() {
        $('#appeal_platform').change(function() {

            if ($('#appeal_platform').val() == "") {
                $('#platform_description').html("");
            } else if ($('#appeal_platform').val() == "Web Sitesi") {
                $('#platform_description').html("<label for='desc'>Websİte Adresİ</label>                                            <input type='text' name='appeal_platform_desc' id='desc' class='form-control' required='' data-error='Lütfen Website Adresinizi Giriniz.' placeholder='Lütfen Website Adresinizi Giriniz.*'>                                        </div>                                        <div class='help-block with-errors'></div>");

            } else if ($('#appeal_platform').val() == "Sosyal Medya") {
                $('#platform_description').html("<div class='form-group mb-30' name='desc'><label for='desc'>Sosyal Medya Satış Profİlİ Adresİ</label>                                            <input type='text' name='appeal_platform_desc' id='desc' class='form-control' required='' data-error='Sosyal Medya Satış Profili Adresinizi Giriniz.' placeholder='Sosyal Medya Satış Profili Adresinizi Giriniz.*'>                                        </div>                                        <div class='help-block with-errors'></div></div>");

            } else if ($('#appeal_platform').val() == "Fiziki Satış") {
                $('#platform_description').html("<div class='form-group mb-30' name='desc'><label for='desc'>Satış Platformu Hakkında Açıklama Gİrİnİz</label>                                            <input type='text' name='appeal_platform_desc' id='desc' class='form-control' required='' data-error='Satış Platformu Hakkında Açıklama Giriniz' placeholder='Lütfen Kısa ve Net Bir Açıklama Giriniz*'>                                        </div>                                        <div class='help-block with-errors'></div></div>");
            } else if ($('#appeal_platform').val() == "Hiçbiri") {
                $('#platform_description').html("<div class='form-group mb-30' name='desc'><label for='desc'>Satış Platformu Hakkında Açıklama Gİrİnİz</label>                                            <input type='text' name='appeal_platform_desc' id='desc' class='form-control' required='' data-error='Satış Platformu Hakkında Açıklama Giriniz' placeholder='Lütfen Kısa ve Net Bir Açıklama Giriniz*'>                                        </div>                                        <div class='help-block with-errors'></div></div>");
            }
        });
    });
</script>