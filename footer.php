<footer class="footer">

    <style>
        .arrow_section {

            width: 57.851px;
            height: 92.371px;
            flex-shrink: 0;
        }

        .submit-btn a:hover img {
            transform: translateX(6px);
            transition: transform 0.2s ease;
        }




        @media (min-width: 992px) {

            .second-arrow {
                margin-top: 70px
            }

            .arrow_section {
                width: 87.239px;
                height: 139.295px;
                flex-shrink: 0;
                object-fit: cover;
                margin-right: 60px;
            }
        }
    </style>

</footer>
<?php wp_footer(); ?>




<!-- Footer -->

<div class="container" style="margin-top:100px; padding-bottom:50px;">

    <!-- New Section -->
    <div class="container">
        <div class="row" style="margin-top:50px;">
            <div class="col-12 col-md-6 col-lg-6 " data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <!-- First Row margin-top:150px; and newsletter-container also-->
                <div class="" style="display:flex;flex-direction: column; align-items: flex-start;gap: 2px; ">
                    <span class="information_title" style="">
                        <?= get_field("footersubtitle", 'option') ?>
                    </span>
                    <br>
                    <span class="information_text">
                        <?= get_field("footer_tekst", 'option') ?>
                    </span>
                </div>
                <!-- Second Row -->
                <div class="row" style="margin:35px 0;">
                    <div class="col-lg-4 ">
                        <!-- accordion -->
                        <div class=" d-block d-lg-none" id="accordionExample">
                            <!-- First Item -->
                            <div class="accordion-item">
                                <div class="d-flex flex-row align-items-center justify-content-between gap-3">
                                    <h2 class="accordion-header" id="headingOne">
                                        <a href="#collapseOne" class="accordion-button" data-bs-toggle="collapse"
                                            aria-expanded="true" aria-controls="collapseOne"
                                            style="color: #25325F; font-family: Manrope; font-size: 16px; font-style: normal; font-weight: 700; line-height: 27.2px;">
                                            <?= get_field("companyinfo", 'option') ?>
                                        </a>

                                    </h2>
                                    <!-- DownAroow -->
                                    <div>
                                        <a class="d-flex justify-content-center align-items-center" href="#collapseOne"
                                            class="accordion-button" data-bs-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            <img src="<?= get_field("downarrow", 'option')['url'] ?>"
                                                alt="<?= get_field("downarrow", 'option')['title'] ?>"
                                                style="width:12px; height:12px; margin:7px 0; " />
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body ">
                                        <div class="d-flex flex-column align-items-flex-start ">
                                            <span
                                                style="color: #6A7291; font-family: Manrope; font-size: 15px; font-style: normal; font-weight: 600; line-height: 27px;">
                                                <?= get_field("email", 'option') ?>
                                            </span>
                                            <span>
                                                <?= get_field("phone", 'option') ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-block d-lg-none" style=" border-bottom: 1px solid  #25325F; margin:16px 0; ">
                            </div>
                            <!-- Second Item -->
                            <div class="accordion-item">
                                <div class="d-flex flex-row align-items-center justify-content-between gap-3">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <a href="#collapseTwo" class="accordion-button collapsed"
                                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo"
                                            style="color: #25325F; font-family: Manrope; font-size: 16px; font-style: normal; font-weight: 700; line-height: 27.2px;">
                                            <?= get_field("adresstitle", 'option') ?>
                                        </a>
                                    </h2>
                                    <!-- DownAroow -->
                                    <div>
                                        <a class="d-flex justify-content-center align-items-center" href="#collapseTwo"
                                            class="accordion-button collapsed" data-bs-toggle="collapse"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            <img src="<?= get_field("downarrow", 'option')['url'] ?>"
                                                alt="<?= get_field("downarrow", 'option')['title'] ?>"
                                                style="width:12px; height:12px; margin:7px 0; " />
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-column align-items-flex-start ">
                                            <span
                                                style="color:  #6A7291;font-family: Manrope;font-size: 15px;font-style: normal;font-weight: 600;line-height:  27px ">
                                                <?= get_field("adres", 'option') ?></span>
                                            <span> <?= get_field("city", 'option') ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-block d-lg-none" style=" border-bottom: 1px solid  #25325F; margin:16px 0; ">
                            </div>

                            <!-- Third Item -->
                            <div class="accordion-item">
                                <div class="d-flex flex-row align-items-center justify-content-between gap-3">
                                    <h2 class="accordion-header" id="headingThree">
                                        <a href="#collapseThree" class="accordion-button collapsed"
                                            data-bs-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapseThree"
                                            style="color: #25325F; font-family: Manrope; font-size: 16px; font-style: normal; font-weight: 700; line-height: 27.2px;">
                                            <?= get_field("informationtitle", 'option') ?>
                                        </a>
                                    </h2>
                                    <!-- DownAroow -->
                                    <div>
                                        <a class="d-flex justify-content-center align-items-center"
                                            href="#collapseThree" class="accordion-button collapsed"
                                            data-bs-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            <img src="<?= get_field("downarrow", 'option')['url'] ?>"
                                                alt="<?= get_field("downarrow", 'option')['title'] ?>"
                                                style="width:12px; height:12px; margin:7px 0; " />
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">

                                        <div class="d-flex flex-column align-items-flex-start ">
                                            <span
                                                style="color: #6A7291;font-family: nformatifont-size: 15px;font-style: normal;font-weight: 600;line-height:27px ">

                                                <span
                                                    style="color:  #6A7291;font-family: Manrope;font-size: 15px;font-style: normal;font-weight: 600;line-height:  27px ">
                                                    <?= get_field("kvk", 'option') ?>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-column align-items-flex-start ">

                                            <?= get_field("btw", 'option') ?>
                                            </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-block d-lg-none" style=" border-bottom: 1px solid  #25325F; margin:16px 0; ">
                            </div>
                        </div>
                        <!-- LG -->
                        <div class="d-none d-md-none d-lg-flex flex-column align-items-flex-start gap-2">
                            <span
                                style="color:  #25325F;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height: 27.2px">
                                <?= get_field("companyinfo", 'option') ?></span>
                            <span
                                style="color:  #6A7291;font-family: Manrope;font-size: 15px;font-style: normal;font-weight: 600;line-height:  27px ">
                                <?= get_field("email", 'option') ?></span>
                            <span> <?= get_field("phone", 'option') ?></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-none d-md-none d-lg-flex flex-column align-items-flex-start gap-2">
                            <span
                                style="color:  #25325F;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height: 27.2px">
                                <?= get_field("adresstitle", 'option') ?></span>
                            <span
                                style="color:  #6A7291;font-family: Manrope;font-size: 15px;font-style: normal;font-weight: 600;line-height:  27px ">
                                <?= get_field("adres", 'option') ?></span>
                            <span> <?= get_field("city", 'option') ?></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-none d-md-none d-lg-flex flex-column align-items-flex-start gap-2">
                            <span
                                style="color:  #25325F;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height: 27.2px">
                                <?= get_field("informationtitle", 'option') ?>
                            </span>
                            <div class="d-flex flex-row align-items-center gap-2">
                                <span
                                    style="color: #6A7291;font-family: nformatifont-size: 15px;font-style: normal;font-weight: 600;line-height:27px ">
                                    <?= get_field("kvk", 'option') ?>
                                </span>
                                <!-- <span
                                    style="color:  #6A7291;font-family: Manrope;font-size: 15px;font-style: normal;font-weight: 600;line-height:  27px ">
                                    <?= get_field("kvk_num") ?>
                                </span> -->
                            </div>
                            <div class="d-flex flex-row align-items-center gap-2">

                                <span> <?= get_field("btw", 'option') ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gap between -->
            <div class="d-none d-lg-flex col-lg-2"></div>

            <!-- Newsletters -->
            <div class="col-12 col-md-6 col-lg-4" data-aos="fade-left" data-aos-offset="100" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <div>
                    <!-- style="display:flex;flex-direction: column; align-items: flex-start;  " -->
                    <div class="d-flex flex-column newsletter-container gap-2">
                        <!-- Logo -->
                        <!-- <a class="navbar-brand fs-4" href="<?= esc_url(home_url('/')); ?>">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/logo.svg" alt="Logo"
                                style="height: 43px;width: 88px;">
                        </a> -->
                        <a class="navbar-brand fs-4" href="<?= esc_url(home_url('/')); ?>">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/Logo.svg" alt="Logo"
                                style="height: 43px;width: 88px;">
                        </a>
                        <span class="newsletter_text" style="margin:20px 0;">
                            <?= get_field("newsletter_text", 'option') ?>
                        </span>
                        <div class="email-field-container" style="margin:20px 0;">
                            <input type="email" id="email" name="email" placeholder="Enter your email" required
                                style="margin-left:2px;">
                            <!-- Btn & text -->
                            <div class="d-flex justify-content-between align-items-center gap-2 submit-btn"
                                style="height:39.261px;padding: 12px 15px; border-radius: 8px;background: #274083 !important;">
                                <a href="<?= get_field("submitlink", 'option')['url'] ?>" target="_blank"
                                    style="color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px; display: flex; align-items: center; gap:8px;   justify-content: center; text-decoration: none; ">
                                    <img src="<?= get_field("submitimg", 'option')['url'] ?>"
                                        alt="<?= get_field("submitimg", 'option')['alt'] ?>"
                                        style="width: 12px; height: 18px;" />
                                    <?= get_field("submitlink", 'option')['title'] ?>
                                </a>
                            </div>
                        </div>
                        <span
                            style=" color:#6A7291; font-family: Manrope; font-size: 13px;font-style: normal;font-weight: 500; line-height: 23.4px; margin:20px 0;">
                            <?= get_field("privacy_statement") ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Rows -->

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row d-flex d-md-flex d-lg-flex flex-row align-items-center justify-content-around"
                    style="margin-top:50px">
                    <?php
                    foreach (get_field("arrowsection", 'option') as $testimonails) {
                        ?>
                        <div class="col-lg" style="border-radius:15px; height:99px; margin-top:35px 0;">
                            <div class="d-flex  align-items-center justify-content-around gap-4">
                                <img src="<?= $testimonails['img1']['url'] ?>" alt=" <?= $testimonails['img1']['alt'] ?>"
                                    class="arrow_section" />

                                <img src="<?= $testimonails['img2']['url'] ?>" alt=" <?= $testimonails['img2']['alt'] ?>"
                                    class="arrow_section d-none d-md-flex d-lg-flex" />

                                <img src="<?= $testimonails['img3']['url'] ?>" alt=" <?= $testimonails['img3']['alt'] ?>"
                                    class="arrow_section d-none d-md-flex d-lg-flex" />

                                <img src="<?= $testimonails['img4']['url'] ?>" alt=" <?= $testimonails['img4']['alt'] ?>"
                                    class="arrow_section" />

                                <img src="<?= $testimonails['img5']['url'] ?>" alt=" <?= $testimonails['img5']['alt'] ?>"
                                    class="arrow_section d-none d-md-flex d-lg-flex" />

                                <img src="<?= $testimonails['img6']['url'] ?>" alt=" <?= $testimonails['img6']['alt'] ?>"
                                    class="arrow_section d-none d-md-flex d-lg-flex" />

                                <img src="<?= $testimonails['img7']['url'] ?>" alt=" <?= $testimonails['img7']['alt'] ?>"
                                    class="arrow_section" />

                                <img src="<?= $testimonails['img8']['url'] ?>" alt=" <?= $testimonails['img8']['alt'] ?>"
                                    class="arrow_section" />

                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>


        <!-- Second Line  -->
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row d-flex d-md-flex d-lg-flex  align-items-center justify-content-around second-arrow"
                    style="">

                    <?php
                    foreach (get_field("secondarrowsection", 'option') as $testimonails) {
                        ?>
                        <div class="col-lg" style="border-radius:15px; height:99px; margin:35px 0;">
                            <div class="d-flex align-items-center justify-content-around  gap-4">
                                <img src="<?= $testimonails['img1']['url'] ?>" alt=" <?= $testimonails['img1']['alt'] ?>"
                                    class="arrow_section" />

                                <img src="<?= $testimonails['img2']['url'] ?>" alt=" <?= $testimonails['img2']['alt'] ?>"
                                    class="arrow_section" />

                                <img src="<?= $testimonails['img3']['url'] ?>" alt=" <?= $testimonails['img3']['alt'] ?>"
                                    class="arrow_section" />

                                <img src="<?= $testimonails['img4']['url'] ?>" alt=" <?= $testimonails['img4']['alt'] ?>"
                                    class="arrow_section d-none d-md-flex d-lg-flex" />

                                <img src="<?= $testimonails['img5']['url'] ?>" alt=" <?= $testimonails['img5']['alt'] ?>"
                                    class="arrow_section d-none d-md-flex d-lg-flex " />

                                <img src="<?= $testimonails['img6']['url'] ?>" alt=" <?= $testimonails['img6']['alt'] ?>"
                                    class="arrow_section d-none d-md-flex d-lg-flex" />

                                <img src="<?= $testimonails['img7']['url'] ?>" alt=" <?= $testimonails['img7']['alt'] ?>"
                                    class="arrow_section d-none d-md-flex d-lg-flex" />

                                <img src="<?= $testimonails['img8']['url'] ?>" alt=" <?= $testimonails['img8']['alt'] ?>"
                                    class="arrow_section" />

                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!--  -->
    <div class="row mt-5">
        <div class="col-12 col-lg-8">
            <div
                class="d-flex flex-column align-items-flex-start flex-md-row  flex-lg-row align-items-lg-center justify-content-between gap-3 ">
                <span
                    style="color:#6A7291;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 500;line-height: 23.4px">
                    <?= get_field("copyright", 'option') ?>
                </span>
                <span
                    style="color:#6A7291; font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 500;line-height: 23.4px">
                    <?= get_field("agemenevoorwaarden", 'option') ?>
                </span>
                <span
                    style="color:#6A7291;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 500;line-height: 23.4px">
                    <?= get_field("verwerkersovereenkomst", 'option') ?>
                </span>
                <span
                    style="color:#6A7291;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 500;line-height: 23.4px">
                    <?= get_field("privacystatement", 'option') ?>
                </span>
            </div>
        </div>
        <div class="col-12 col-lg-2"></div>
        <div class="col-12 col-lg-2">
            <div
                class="d-flex flex-column align-items-flex-start  flex-md-row flex-lg-row  align-items-md-center align-items-lg-end justify-content-end ">
            </div>
        </div>
    </div>
</div>
</body>

</html>