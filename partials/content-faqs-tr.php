<section id="page-title" class="page-title-parallax page-title-center page-title-dark include-header" style="background-image: linear-gradient(to top, rgba(254,150,3,0.5), #39384D), url('/demos/seo/images/faqs-title.jpg'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
    <div id="particles-line"></div>

    <div class="container clearfix mt-4">
        <div class="badge rounded-pill border border-light text-light">S.S.S</div>
        <h1>Sıkça Sorulan Sorular</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Ana Sayfa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Destek</li>
        </ol>
    </div>

</section><!-- #page-title end -->

<!-- Content
		============================================= -->
<section id="content">

    <div class="content-wrap pb-0">

        <div class="container bottommargin">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 text-center">
                    <div class="heading-block border-bottom-0 center mx-auto">
                        <div class="badge rounded-pill badge-default">Size Nasıl Yardımcı Olabiliriz?</div>
                        <h3 class="nott ls0 mb-3">Sıkça Sorulan Sorular</h3>
                        <p>İstek ve Sorularınız Hakkında Aşağıda Bulunan Ana Başlıklarda Bir Bilgi Göremiyorsanız Lütfen Destek İle İletişime Geçiniz</p>
                    </div>
                </div>

                <div class="clear"></div>

                <!-- Post Content
						============================================= -->
                <div class="col-lg-10">

                    <div class="grid-filter-wrap justify-content-center">
                        <ul class="grid-filter style-4 customjs">
                            <!-- <li class="activeFilter"><a href="#" class="fw-semibold" data-filter="all">Tümü</a></li> -->
                            <!-- <li><a href="#" class="fw-semibold" data-filter=".faq-dcb">Mobil Ödeme</a></li> -->
                            <li class="activeFilter"><a href="#" class="fw-semibold" data-filter=".faq-virtual-pos">Sanal Pos</a></li>
                            <li><a href="#" class="fw-semibold" data-filter=".faq-money-transfer">Para Transferi</a></li>
                            <li><a href="#" class="fw-semibold" data-filter=".faq-integration">Entegrasyon</a></li>
                        </ul>
                    </div>

                    <div class="clear"></div>

                    <div id="faqs" class="faqs">
                        <?php
                        $a = [
                            '1' => [
                                'type' => "faq faq-integration",
                                'sign' => "play-sign",
                                'question' => "Nasıl Üye İş Yeri Olabilirim?",
                                'answer' => "Web sitemizdeki “Bize Katıl” butonuna tıklayıp gerekli bilgileri doldurup istenen evrakları yükleyerek süreci başlatabilirsiniz."
                            ],
                            '2' => [
                                'type' => "faq-integration",
                                'sign' => "folder-settings",
                                'question' => "Entegrasyon Dokümanlarına Nasıl Ulaşabilirim?",
                                'answer' => "developer.junomoney.com.tr adresinden tüm dokümanlara ulaşabilir, entegrasyon süreci ile ilgili destek almak isterseniz destek@junomoney.com.tr adresinden bizimle iletişime geçebilirsiniz."
                            ],
                            '3' => [
                                'type' => "faq-dcb",
                                'sign' => "line2-wallet",
                                'question' => "Hangi Operatörlerden Ödeme Alabilirim?",
                                'answer' => "JunoMoney Çözümleri ile Türkiye’deki tüm(Turkcell, Vodafone, Turk Telekom) operatörlerden ödeme alabilirsiniz."
                            ],
                            '4' => [
                                'type' => "faq-dcb faq-virtual-pos faq-money-transfer",
                                'sign' => "calendar-alt",
                                'question' => "Ödemelerimi Ne Zaman Alırım?",
                                'answer' => "Ödemeleriniz, JunoMoney ile yapmış olduğunuz ‘Üye İş Yeri Sözleşmesi’nde belirtilen vadeler doğrultusunda hesabınıza gönderilecektir."
                            ],
                            '5' => [
                                'type' => "faq-dcb faq-virtual-pos faq-money-transfer",
                                'sign' => "phone-landscape",
                                'question' => "Ödeme Altyapısı ile İlgili Sorun Yaşıyorum",
                                'answer' => "Ödemeleri almakta sorun yaşıyorsanız destek formu oluşturabilir ve finans birimimiz ile iletişime geçebilirsiniz."
                            ],
                            '6' => [
                                'type' => "faq-dcb faq-virtual-pos faq-money-transfer",
                                'sign' => "percentage",
                                'question' => "Komisyon Oranı ve İşlem Ücreti Nedir?",
                                'answer' => "JunoMoney, üye işyerlerine ve çözüm ortaklarına rekabetçi fiyatlama ve düşük komisyonlarla hizmet sunmaktadır."
                            ],
                            '7' => [
                                'type' => "faq-dcb faq-virtual-pos faq-money-transfer",
                                'sign' => "newspaper2",
                                'question' => "Gerekli evraklar nelerdir?",
                                'answer' => "Başvurunuz esnasında faaliyet konusuna göre istenecek bilgiler değişiklik göstermekte olup aşağıda örnek verilen evrakları, online olarak sistemimize yüklemeniz gerekmektedir.
                                <p>– İmza sirküleri</p><p>– Vergi levhası</p><p>– Şirket ortaklarının kimlik fotokopileri</p><p>*Faaliyet konusuna göre istenebilecek ek belgeler.</p><p>– Adınıza/şirketinize ait banka hesap bilgilerinizin bulunduğu, bankanızdan teslim alınmış bir belge. Ödeme alabilme amacıyla kaydettiğiniz IBAN numarasını teyit edebilmemiz için, hesap adınızın ve banka IBAN numaranızın yer aldığı, bankanızdan veya internet bankacılığı aracılığıyla teslim aldığınız herhangi bir belge ya da hesap cüzdanınızın ön sayfasını tarafımıza göndermeniz gerekmektedir.</p>"
                            ],
                            '8' => [
                                'type' => "faq-dcb faq-virtual-pos faq-money-transfer",
                                'sign' => "line-user-check",
                                'question' => "Fiziksel ürün teslimatı yapmıyorum. Yine de mesafeli satış sözleşmesi ve teslimat iade bilgilerini web sitesine eklemem gerekir mi?",
                                'answer' => "Ürün teslimatı yapılmadığı takdirde, satışını yaptığınız hizmet için teslimat iade bilgilerini web sitenize eklemeniz gerekmektedir."
                            ],
                            '9' => [
                                'type' => "faq-dcb faq-virtual-pos faq-money-transfer",
                                'sign' => "line-cloud-upload",
                                'question' => "Gereken evrakları size kargolamam gerekiyor mu?",
                                'answer' => "Hayır. Gereken evraklarınızı Operasyon ekibimize e-mail üzerinden göndermeniz yeterli olacaktır."
                            ],
                            '10' => [
                                'type' => "faq-dcb faq-virtual-pos faq-money-transfer",
                                'sign' => "comments-alt",
                                'question' => "Başvurumu yaptıktan sonra size haber vermem gerekiyor mu?",
                                'answer' => "Hayır, bu aşamada bizi bilgilendirmenizi gerektirecek herhangi bir durum yoktur. Siz başvuru formunu doldurarak başvurunuzu tamamladığınızda, bilgileriniz ilgili ekibimizin ekranlarına yansımaktadır. Ekibimiz en kısa sürede bilgilerinizi kontrol ederek sizinle iletişime geçecektir."
                            ],
                            '11' => [
                                'type' => "faq-dcb faq-virtual-pos faq-money-transfer",
                                'sign' => "comments-alt",
                                'question' => "Başvuru sonucumu ne kadar süre içerisinde öğreneceğim?",
                                'answer' => "<p>Başvurunuzun tüm aşamalarını eksiksiz olarak tamamladığınızda, JunoMoney ekibimiz 24 saat içerisinde, platformda kayıtlı olan e-posta adresiniz veya iletişim bilgileriniz üzerinden sizinle iletişime geçecek ve başvurunuzla ilgili bilgi vererek sürecinizi yönetmeye başlayacaktır.</p>
                                <p>Not: Mesai saatlerimiz hafta içi 09.00-17.00, cumartesi ve pazar günü yapılan başvurular, pazartesi sabahı 09.00-15.00 saatleri arasında cevaplanmaktadır.</p>
                                "
                            ],
                            '12' => [
                                'type' => "faq-virtual-pos",
                                'sign' => "pocket",
                                'question' => "3D Secure Nedir?",
                                'answer' => "3D Secure, internet üzerinden yapılan alışverişlerin daha güvenli bir hâle gelmesi için Visa ve Mastercard tarafından geliştirilen bir güvenlik sistemidir. Ödeme işleminizi tamamlamak için telefonunuza gelen güvenlik kodunu girmenizi zorunlu hâle getiren 3D Secure, kart bilgileriniz başkaları tarafından ele geçirilse de bu kişilerin alışveriş yapabilmesini engeller ve elektronik güvenliğinizi sağlamış olur. Sistemin Visa kartları kullanımı için hazırlanan uygulamasına “Verified by Visa”, Mastercard kartları kullanımı için hazırlanan uygulamasına ise “SecureCode” isimleri verilmektedir. Bu sistemi aktive etmek için ayrıca bir ücret ödenmesi gerekmemektedir."
                            ],
                            '13' => [
                                'type' => "faq-dcb faq-virtual-pos faq-money-transfer",
                                'sign' => "calendar-times",
                                'question' => "Blokaj süresi nedir?",
                                'answer' => "Blokaj süresi müşterinizden başarılı bir şekilde ödeme alındıktan sonra paranın size gönderilmesi için beklenen süredir."
                            ],
                            '14' => [
                                'type' => "faq-dcb faq-virtual-pos faq-money-transfer",
                                'sign' => "times-circle",
                                'question' => "Blokaj süresinin sebebi nedir?",
                                'answer' => "Blokaj süresinin en önemli sebebi, e-ticarette sıklıkla rastlanan ters ibraz (Chargeback) riskidir. Ayrıca anlaştığımız bankaların uyguladığı kriterler de blokaj süresi ile çalışmamıza sebep olmaktadır. Buna göre başvuru sürecinde belirlenen aralıklarla değişik raporlama kriterleri uygulanır ve bu süreçten sonra ödeme yapılır. İlerleyen dönemde blokaj süreniz, hacminiz ve sattığınız ürünler de göz önünde bulundurularak süreler kısaltılabilir."
                            ],
                            '15' => [
                                'type' => "faq-integration",
                                'sign' => "dashboard",
                                'question' => "Daha detaylı bir dokümana ihtiyacım var. Ne yapabilirim?",
                                'answer' => "Entegrasyonlar için daha ayrıntılı dokümana ihtiyacınız varsa, JunoMoney Entegrasyon Ekibi size yardımcı olacaktır. <a href='mailto:destek@junomoney.com.tr'>destek@junomoney.com.tr</a> adresi üzerinden mesaj göndererek ulaşabilirsiniz."
                            ],
                        ];
                        foreach ($a as $s) {
                            $type = $s['type'];
                            $sign = $s['sign'];
                            $question = $s['question'];
                            $answer = $s['answer'];
                        ?>
                            <div class="toggle faq pb-3 mb-4 <?= $type ?>">
                                <div class="toggle-header">
                                    <div class="toggle-icon color">
                                        <i class="toggle-closed icon-<?= $sign ?>"></i>
                                        <i class="toggle-open icon-<?= $sign ?>"></i>
                                    </div>
                                    <div class="toggle-title fw-semibold ps-1">
                                        <?= $question ?>
                                    </div>
                                    <div class="toggle-icon color">
                                        <i class="toggle-closed icon-chevron-down text-black-50"></i>
                                        <i class="toggle-open icon-chevron-up color"></i>
                                    </div>
                                </div>
                                <div class="toggle-content text-black-50 ps-4"><?= $answer ?></div>
                            </div>
                        <?php
                        }
                        ?>


                    </div>

                </div>

            </div><!-- .postcontent end -->
        </div>

        <div class="clear"></div>
    </div>
</section><!-- #content end -->

<?php
$script = ""
?>