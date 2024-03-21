<section id="page-title" class="page-title-parallax page-title-center page-title-dark include-header" style="background-image: linear-gradient(to top, rgba(254,150,3,0.5), #39384D), url('/demos/seo/images/faqs-title.jpg'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
    <div id="particles-line"></div>

    <div class="container clearfix mt-4">
        <div class="badge rounded-pill border border-light text-light">FAQ's</div>
        <h1>Frequently Asked Questions</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Support</li>
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
                        <div class="badge rounded-pill badge-default">How can we help you?</div>
                        <h3 class="nott ls0 mb-3">Frequently Asked Questions</h3>
                        <p>If You Can't See Any Information About Your Requests and Questions in the Main Headings Below, Please Contact Support</p>
                    </div>
                </div>

                <div class="clear"></div>

                <!-- Post Content
						============================================= -->
                <div class="col-lg-10">

                    <div class="grid-filter-wrap justify-content-center">
                        <ul class="grid-filter style-4 customjs">
                            <li class="activeFilter"><a href="#" class="fw-semibold" data-filter="all">All</a></li>
                            <li><a href="#" class="fw-semibold" data-filter=".faq-dcb">DCB</a></li>
                            <li><a href="#" class="fw-semibold" data-filter=".faq-virtual-pos">Virtual Pos</a></li>
                            <li><a href="#" class="fw-semibold" data-filter=".faq-money-transfer">Money Transfer</a></li>
                            <li><a href="#" class="fw-semibold" data-filter=".faq-integration">Integration</a></li>
                        </ul>
                    </div>

                    <div class="clear"></div>

                    <div id="faqs" class="faqs">
                        <?php
                        $a = [
                            '1' => [
                                'type' => "faq faq-integration",
                                'sign' => "play-sign",
                                'question' => "How Can I Become a JunoMoney's Merchant?",
                                'answer' => "You can start the process by clicking the \"Join Us\" button on our website, filling in the necessary information and uploading the requested documents."
                            ],
                            '2' => [
                                'type' => "faq-integration",
                                'sign' => "folder-settings",
                                'question' => "How Can I Access Integration Documents?",
                                'answer' => "You can access all documents at developer.junomoney.com.tr, and if you want to get support regarding the integration process, you can contact us at support@junomoney.com.tr."
                            ],
                            '3' => [
                                'type' => "faq-dcb",
                                'sign' => "line2-wallet",
                                'question' => "
                                From Which Operators Can I Get Payments?",
                                'answer' => "With JunoMoney Solutions, you can receive payments from all operators in Turkey (Turkcell, Vodafone, Turk Telekom)."
                            ],
                            '4' => [
                                'type' => "faq-dcb faq-virtual-pos faq-money-transfer",
                                'sign' => "calendar-alt",
                                'question' => "When Will I Receive My Payments?",
                                'answer' => "Your payments will be sent to your account in line with the terms specified in the 'Merchant Agreement' you have made with JunoMoney."
                            ],
                            '5' => [
                                'type' => "faq-dcb faq-virtual-pos faq-money-transfer",
                                'sign' => "phone-landscape",
                                'question' => "I'm Having Problems With Payment Infrastructure",
                                'answer' => "If you are having trouble receiving payments, you can create a support form and contact our finance department."
                            ],
                            '6' => [
                                'type' => "faq-dcb faq-virtual-pos faq-money-transfer",
                                'sign' => "percentage",
                                'question' => "What is the Commission Rate and Transaction Fee?",
                                'answer' => "JunoMoney offers its member merchants and solution partners competitive pricing and low commissions."
                            ],
                            '7' => [
                                'type' => "faq-dcb faq-virtual-pos faq-money-transfer",
                                'sign' => "newspaper2",
                                'question' => "
                                What are the required documents?",
                                'answer' => "The information to be requested during your application varies according to the field of activity, and you need to upload the documents given below to our system online.
                                <p>– Signature circular</p><p>– Tax plate</p><p>– Copies of identity cards of company partners</p><p>*Additional documents that may be requested according to the activity subject.</p><p> – A document received from your bank containing your name/company bank account information. In order for us to confirm the IBAN number you have registered in order to receive payment, you must send us any document containing your account name and bank IBAN number, received from your bank or via internet banking, or the front page of your passbook.</p>"
                            ],
                            '8' => [
                                'type' => "faq-dcb faq-virtual-pos faq-money-transfer",
                                'sign' => "line-user-check",
                                'question' => "I do not do physical product deliveries. Do I still need to add the distance sales contract and delivery return information to the website?",
                                'answer' => "If the product is not delivered, you must add the delivery return information to your website for the service you sell."
                            ],
                            '9' => [
                                'type' => "faq-dcb faq-virtual-pos faq-money-transfer",
                                'sign' => "line-cloud-upload",
                                'question' => "Do I need to ship the required documents to you?",
                                'answer' => "No. It will be sufficient to send the required documents to our Operations team via e-mail."
                            ],
                            '10' => [
                                'type' => "faq-dcb faq-virtual-pos faq-money-transfer",
                                'sign' => "comments-alt",
                                'question' => "
                                Do I have to notify you after I have submitted my application?",
                                'answer' => "No, there is no situation that requires you to inform us at this stage. When you complete your application by filling out the application form, your information is reflected on the screens of our relevant team. Our team will contact you as soon as possible after checking your information."
                            ],
                            '11' => [
                                'type' => "faq-dcb faq-virtual-pos faq-money-transfer",
                                'sign' => "comments-alt",
                                'question' => "How soon will I know the result of my appeal?",
                                'answer' => "<p>When you complete all stages of your application, our JunoMoney team will contact you within 24 hours via your e-mail address or contact information registered on the platform, and will begin to manage your process by providing information about your application.</p>
                                <p>Note: Our working hours are between 09.00-17.00 on weekdays, applications made on Saturday and Sunday are answered between 09.00-15.00 on Monday morning.</p>
                                "
                            ],
                            '12' => [
                                'type' => "faq-virtual-pos",
                                'sign' => "pocket",
                                'question' => "What is 3D Secure?",
                                'answer' => "3D Secure is a security system developed by Visa and Mastercard to make online shopping safer. 3D Secure, which requires you to enter the security code sent to your phone to complete your payment transaction, prevents these people from making purchases even if your card information is captured by others and ensures your electronic security. The application of the system prepared for the use of Visa cards is called \"Verified by Visa\", and the application prepared for the use of Mastercard cards is called \"SecureCode\". No additional fee is required to activate this system."
                            ],
                            '13' => [
                                'type' => "faq-dcb faq-virtual-pos faq-money-transfer",
                                'sign' => "calendar-times",
                                'question' => "What is the blocking period?",
                                'answer' => "The blocking period is the time it takes for money to be sent to you after a successful payment has been received from your customer."
                            ],
                            '14' => [
                                'type' => "faq-dcb faq-virtual-pos faq-money-transfer",
                                'sign' => "times-circle",
                                'question' => "What is the reason for the blocking period?",
                                'answer' => "The most important reason for the blockage period is the risk of chargeback, which is frequently encountered in e-commerce. In addition, the criteria applied by the banks we have agreed with cause us to work with the blockage period. Accordingly, different reporting criteria are applied at intervals determined during the application process and payment is made after this process. In the future, the periods may be shortened by considering your blockage period, volume and the products you sell."
                            ],
                            '15' => [
                                'type' => "faq-integration",
                                'sign' => "dashboard",
                                'question' => "I need a more detailed document. What can I do?",
                                'answer' => "If you need more detailed documentation for integrations, the JunoMoney Integration Team will assist you. You can reach us by sending a message to <a href='mailto:destek@junomoney.com.tr'>destek@junomoney.com.tr</a>."
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