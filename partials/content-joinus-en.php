<section id="content">
    <div class="content-wrap pt-0">
        <div class="section m-0" style="background: url('demos/seo/images/sections/1.jpg') no-repeat center center; background-size: cover; padding: 100px 0;">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-4">
                        <div class="heading-block border-bottom-0 bottommargin-sm">
                            <div class="badge rounded-pill badge-default">Join Us!</div>
                            <h3 class="nott ls0">Please Fill The Form To Become Our Merchant</h3>
                        </div>
                        <p>Take the first step to join PayPandas and fill out our application form today to manage your financial transactions faster, safer, and more efficiently. Join us to reap the benefits of the digital payment world and further enhance your financial freedom. Apply now and become a part of the PayPandas family!</p>
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
                                                Your application request has been successfully forwarded to our team. As soon as possible
                                                we will contact you!
                                            </div>
                                        <?php
                                        } else if ($_GET["durum"] == "no") {
                                        ?>
                                            <div class="alert alert-danger text-center" role="alert">
                                                Something went wrong. Try again after checking all the information!
                                            </div>
                                        <?php
                                        } else if ($_GET["durum"] == "tooManyAttempts") {
                                        ?>
                                            <div class="alert alert-warning text-center" role="alert">
                                                Something went wrong. You have an application currently in process! As soon as possible
                                                we will contact you!
                                            </div>
                                        <?php
                                        } else if ($_GET["durum"] == "mailnotsent") {
                                        ?>
                                            <div class="alert alert-danger text-center" role="alert">
                                                Something went wrong! Your application has reached our database, but we are currently in our mail service.
                                                unreachable, we will fix it as soon as possible. As soon as possible
                                                we will contact you!
                                            </div>
                                        <?php
                                        } else if ($_GET["durum"] == "captchaEx") {
                                        ?>
                                            <div class="alert alert-danger text-center" role="alert">
                                                Please pass Captcha correctly!
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <form class="row mb-0" id="appeal_form" name="appeal_form" action="/include/posted.php" method="post">
                                        <div class="col-6 form-group mb-3">
                                            <label for="appealer_name">Name:*</label>
                                            <input type="text" name="appealer_name" id="appealer_name" class="form-control input-sm required" placeholder="Name*" value="">
                                        </div>
                                        <div class="col-6 form-group mb-3">
                                            <label for="appealer_email">Email Address:*</label>
                                            <input type="email" name="appealer_email" id="appealer_email" class="form-control input-sm required" placeholder="Corporate Email Address is Preferred.*" value="">
                                        </div>
                                        <div class="col-6 form-group mb-4">
                                            <label for="appealer_phone">Phone Number:*</label>
                                            <input type="text" name="appealer_phone" pattern="[5]{1}[0-9]{9}" onkeypress="return isNumberKey(event)" onKeyDown="limitText(this,10);" onKeyUp="limitText(this,10);" id="appealer_phone" class="form-control input-sm required" placeholder="5XXXXXXXXX" value="">
                                        </div>
                                        <div class="col-6 form-group mb-3">
                                            <label for="appeal_platform">Sale Platform:*</label>
                                            <select class="form-select" name="appeal_platform" id="appeal_platform" required>
                                                <option value=""> Choose</option>
                                                <option value="Web Sitesi"> Website</option>
                                                <option value="Sosyal Medya"> Social Media</option>
                                                <option value="Fiziki Satış"> Physical Product</option>
                                                <option value="Hiçbiri"> Else </option>
                                            </select>
                                        </div>
                                        <div class="col-12 form-group mb-3" id="platform_description">
                                        </div>
                                        <div class="col-6 form-group mb-4">
                                            <label for="firm_product">Product:*</label>
                                            <input type="text" name="firm_product" id="firm_product" class="form-control input-sm required" placeholder="Please give us an information for product*" value="">
                                        </div>
                                        <div class="col-6 form-group mb-3">
                                            <label for="firm_type">Firm Type:*</label>
                                            <select class="form-select" name="firm_type" id="firm_type" required>
                                                <option> Lütfen Seçim Yapınız</option>
                                                <option value="Single Proprietorship"> Single Proprietorship</option>
                                                <option value="Limited Company"> Limited Company</option>
                                                <option value="Corporation">Corporation </option>
                                                <option value="Individual"> Individual</option>
                                                <option value="General Partnership"> General Partnership</option>
                                                <option value="Association"> Association</option>
                                                <option value="Economic Enterprise"> Economic Enterprise</option>
                                                <option value="International Company"> International Company</option>
                                            </select>
                                        </div>
                                        <div class="col-6 form-group mb-4">
                                            <label for="firm_phone">Firm Phone:</label>
                                            <input type="text" name="firm_phone" pattern="[5]{1}[0-9]{9}" onkeypress="return isNumberKey(event)" onKeyDown="limitText(this,10);" onKeyUp="limitText(this,10);" id="firm_phone" class="form-control input-sm" placeholder="5XXXXXXXXX" value="">
                                        </div>
                                        <div class="col-6 form-group mb-3">
                                            <label for="firm_volume">Volume:*</label>
                                            <select class="form-select" name="firm_volume" id="firm_volume" required>
                                                <option value="Belli Değil"> Not Known</option>
                                                <option value="0-100.000">Between 0-100.000 ₺</option>
                                                <option value="100.000-500.000"> Between 100.000-500.000 ₺</option>
                                                <option value=">500.000"> Over 500.000 ₺</option>
                                            </select>
                                        </div>
                                        <div class="col-12 form-group mb-4">
                                            <label for="captcha">Capthca:*</label>
                                            <img src="/include/captcha.php" id="capt">
                                            <input type="text" type="text" pattern="[0-9]{5}" name="captcha" id="captcha" onkeypress="return isNumberKey(event)" onKeyDown="limitText(this,5);" onKeyUp="limitText(this,5);" class="form-control input-sm required" value="">
                                        </div>
                                        <div class="col-12 form-group mb-0">
                                            <button class="button button-rounded w-100 nott ls0 m-0" type="submit" id="appeal_send" name="appeal_send" value="submit">Apply Now</button>
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
                            <h3 class="nott ls0">1. Planning &amp; Research</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, dolore, voluptates!
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
                            <h3 class="nott ls0">2. Optimizing</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, provident.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-5">
                    <div class="feature-box fbox-center border-0">
                        <div class="fbox-icon">
                            <a href="#"><img src="/demos/seo/images/icons/result.svg" alt="Feature Icon" class="bg-transparent rounded-0"></a>
                        </div>
                        <div class="fbox-content">
                            <h3 class="nott ls0">3. Result</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
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
        include('breadcumb-' . $language . '.php')
        ?>
    </div>
</section><!-- #content end -->
<script>
    $(document).ready(function() {
        $('#appeal_platform').change(function() {

            if ($('#appeal_platform').val() == "") {
                $('#platform_description').html("");
            } else if ($('#appeal_platform').val() == "Web Sitesi") {
                $('#platform_description').html("<label for='desc'>Website Address</label>                                            <input type='text' name='appeal_platform_desc' id='desc' class='form-control' required='' data-error='Please Enter Your Website Address.' placeholder='Please Enter Your Website Address.*'>                                        </div>                                        <div class='help-block with-errors'></div>");

            } else if ($('#appeal_platform').val() == "Sosyal Medya") {
                $('#platform_description').html("<div class='form-group mb-30' name='desc'><label for='desc'>Social Media Profile Address</label>                                            <input type='text' name='appeal_platform_desc' id='desc' class='form-control' required='' data-error='Enter Your Social Media Sales Profile Address.' placeholder='Enter Your Social Media Sales Profile Address.*'>                                        </div>                                        <div class='help-block with-errors'></div></div>");

            } else if ($('#appeal_platform').val() == "Fiziki Satış") {
                $('#platform_description').html("<div class='form-group mb-30' name='desc'><label for='desc'>Give Us An Information For Platform</label>                                            <input type='text' name='appeal_platform_desc' id='desc' class='form-control' required='' data-error='Satış Platformu Hakkında Açıklama Giriniz' placeholder='Please Enter a Short and Clear Explanation*'>                                        </div>                                        <div class='help-block with-errors'></div></div>");
            } else if ($('#appeal_platform').val() == "Hiçbiri") {
                $('#platform_description').html("<div class='form-group mb-30' name='desc'><label for='desc'>Give Us An Information For Platform</label>                                            <input type='text' name='appeal_platform_desc' id='desc' class='form-control' required='' data-error='Satış Platformu Hakkında Açıklama Giriniz' placeholder='Please Enter a Short and Clear Explanation*'>                                        </div>                                        <div class='help-block with-errors'></div></div>");
            }
        });
    });
</script>