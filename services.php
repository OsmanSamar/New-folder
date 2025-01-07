<?php get_header();

//Template Name: services
?>

<main class="services flex-grow-1">


    <style>
    .back-to-home {
        position: absolute;
        top: 80px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 10;
        padding: 10px 20px;
        border-radius: 10px;
    }

    .back-to-home a {
        text-decoration: none;
        color: black;
        font-size: 16px;
        font-weight: bold;
    }

    .back-to-home img {
        margin-left: 5px;
        vertical-align: middle;
    }

    .last {
        color: #25325F;
        font-family: Manrope;
        font-size: 13px;
        font-style: normal;
        font-weight: 700;
        line-height: 23.4px;
    }

    b,
    strong {
        color: #e94271;
        font-family: inherit;
        font-size: inherit;
        font-style: inherit;
        line-height: inherit;
    }

    .container-max-width {
        border-radius: 30px;
        max-width: 1700px;
        height: 581px;
        margin: 200px auto 10px;

    }


    .hero_blue_block {

        height: 100%;
        border-radius: 40px;
        background: #25325F;
        position: relative;
        left: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 30px;
        margin-top: -400px;

    }


    .inner_block {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: left;
        margin: 10px 60px;
    }

    .hero_title {
        color: #FFF;
        font-family: Sora;
        font-size: 45px;
        font-style: normal;
        font-weight: 700;
        line-height: 54px;
        margin-bottom: 31px;
    }

    .hero_text {
        color: #9AA0B7;
        font-family: Manrope;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 27.2px;
        width: 353px;
        /* height: 158px; */
        margin-bottom: 31px;
    }


    .container-max-width img {
        display: none;
    }

    .hero_blue_block {
        position: static;
        margin-top: 0;
    }

    .hero_text,
    .hero_title {
        text-align: left;
    }


    .left_col,
    .right_col {
        display: flex;
        align-items: flex-start;
        justify-content: left;
        flex-direction: column;
        gap: 4px;
    }

    .left-btn {
        width: 209px;
        height: 34px;
        border-radius: 100px;
        background: #274083;
        padding: 3px 11px;
        text-align: center;
        color: #FFF;
        font-family: Manrope;
        font-size: 13px;
        font-style: normal;
        font-weight: 700;
        line-height: 23.4px;
    }

    .title {
        color: #25325F;
        font-family: Manrope;
        font-size: 26px;
        font-style: normal;
        font-weight: 700;
        line-height: 39px;
        margin: 27px 0px;
    }

    .left-text,
    .right-text {
        color: #6A7291;
        font-family: Manrope;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 27.2px;
    }

    .testimonial-card {
        border-radius: 15px;
        background-color: #FFF;
        /* max-width: 356px; */
        height: 277px;
        margin: 15px 0;
        padding: 27px;

    }

    .expertise-num {
        color: #E94271;
        font-family: Manrope;
        font-size: 14px;
        font-weight: 700;
        line-height: 23.8px;
    }

    .expertise-sub-title {
        font-size: 14px;
        font-weight: 700;
        line-height: 23.8px;
        color: #6A7291;
        font-family: Manrope;
    }

    .expertise-main-title {

        color: #25325F;

        font-family: Manrope;
        font-size: 21px;
        font-style: normal;
        font-weight: 700;
        line-height: 33.6px;
    }

    .divider {
        border-bottom: 0.5px solid #25325F;
        /* margin: 15px 1px; */
    }

    .expertise-text {
        font-size: 13px;
        font-weight: 500;
        line-height: 22px;
        color: #6A7291;
        font-family: Manrope;
        text-align: left;
    }


    .left-container {
        border-radius: 30px;
        margin-top: ;
        color: white;
        height: 264px;

    }


    .left-content {
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: center;
        margin-top: 50px;
        gap: 20px;
        /* margin-left: 15px; */
    }

    .first-name {

        color: #9AA0B7;
        font-family: Manrope;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 27.2px
    }

    .form_section {
        border-radius: 30px;
        background: #25325F;
        /* margin: 150px auto; */
        max-width: 1700px;
        height: 1400px;
        margin: 50px auto 50px;

    }

    .arrow_section {

        width: 57.851px;
        height: 92.371px;
        flex-shrink: 0;
    }


    .information_title {
        color: #25325F;
        font-family: Manrope;
        font-size: 17px;
        font-style: normal;
        font-weight: 700;
        line-height: 27.2px;
        margin: 10px 5px 0
    }

    .information_text {
        color: var(--Text, #6A7291);
        font-family: Manrope;
        font-size: 17px;
        font-style: normal;
        font-weight: 700;
        line-height: 27.2px;
        margin: 5px 0;
        width: 326px;
    }


    @media(min-width: 768px) {
        .container-max-width img {
            display: block;
        }

        .hero_blue_block {
            width: 531px;
            position: relative;
            bottom: 582px;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            padding: 30px;
            height: 581.608px;
            margin-top: unset;

        }

        .hero_text,
        .hero_title {
            text-align: left;
        }

    }




    @media (min-width: 992px) {
        .hero_blue_block {
            width: 531px;
            /* position: absolute;
            bottom: 0; */
            position: relative;
            bottom: 582px;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            padding: 30px;
            height: 100%;
            margin-top: unset;

        }

        .hero_text,
        .hero_title {
            text-align: left;
        }


        .left-container {
            height: 500px;
        }

        .left-content {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: normal;
            /* margin-left: 15px; */
            margin-top: 50px;
        }


        .form_section {
            height: 550px;
        }


        .arrow_section {
            width: 87.239px;
            height: 139.295px;
            flex-shrink: 0;
            object-fit: cover;
            margin-right: 60px;
        }

        .second-arrow {
            margin-top: 70px
        }

        .information_title {
            font-size: 16px;
            line-height: 27px;

        }

        .information_text {
            font-size: 16px;
            width: 504px;
        }


    }
    </style>



    <div class="back-to-home" style="margin-top:23px; margin-bottom:23px; ">
        <a href="<?= get_field("back_to_home")['url'] ?>"
            class="d-flex justify-content-center align-items-center gap-2">
            <img src="<?= get_field("back_home_btn")['url'] ?>" alt="<?= get_field("back_home_btn")['alt'] ?>"
                style="width:20px; height:20px; margin:7px 0;" />

            <span class="separator"><img src="<?= get_field("separator")['url'] ?>"
                    alt="<?= get_field("separator")['alt'] ?>" style="width:3px; height:6px;" /> </span>
            <span class="last">Services</span>
        </a>
    </div>



    <!-- Hero Section -->

    <div class="container-max-width">
        <img src="<?= get_field("hero_img")['url'] ?>" alt="<?= get_field("hero_img")['title'] ?>" class=""
            style=" height: 581px; border-radius: 40px; object-fit: cover;" />
        <div class="hero_blue_block">
            <div class="container inner_block">
                <span class="hero_title">
                    <?= get_field("hero_title") ?>
                </span>
                <span class="hero_text">
                    <?= get_field("hero_text") ?>
                </span>
            </div>
        </div>
    </div>
    <!-- End of Hero Section -->


    <!-- Second Section -->
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-5" style="margin-top:40px;">
                <div class="left_col">
                    <div class="left-btn">
                        <?= get_field("services_title") ?>
                    </div>
                    <span class="title">
                        <?= get_field("services_main_title") ?> </span>

                    <span class="left-text">
                        <?= get_field("services_left_text") ?></span>
                </div>
            </div>
            <div class="d-none d-lg-block col-lg-1"></div>
            <div class="col-12 col-md-6 col-lg-6" style="margin-top:40px;">
                <div class="right_col">
                    <span class="right-text">
                        <?= get_field("services_right_text") ?>
                    </span>
                </div>
            </div>
        </div>
    </div>




    <!-- Testimonials Section on All Screens -->
    <div class="container mt-5">
        <div class="row gy-2">
            <?php foreach (get_field("expertise_testimonials") as $testimonial) { ?>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="testimonial-card">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span class="expertise-num">
                            <?= $testimonial["expertise_num"] ?></span>
                        <span class="expertise-sub-title"><?= $testimonial["expertise_sub_title"] ?></span>
                    </div>
                    <h2 class="expertise-main-title"> <?= $testimonial["expertise_main_title"] ?></h2>
                    <div class="divider mb-3" style="margin: 15px 1px;"></div>
                    <p class="expertise-text"><?= $testimonial["expertise_text"] ?></p>

                    <!-- Btn & text -->
                    <div class="d-flex align-items-center  gap-2" style=" margin-bottom:20px;">
                        <a href="<?= $testimonial["expertise_btn"]['url'] ?>"
                            style="border-radius:8px; background-color: #274083; height:30px; width:30px;"
                            class="d-flex justify-content-center align-items-center">
                            <img src="<?= $testimonial["expertise_img"]['url'] ?>"
                                alt="<?= $testimonial["expertise_img"]['alt'] ?>"
                                style="width:12px; height:18px; margin:7px 0;" />
                        </a>
                        <?= $testimonial["expertise_btn"]['title'] ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>



    <!-- Form Section   container  -->
    <div class="form_section">
        <div class="container">
            <div class="row">
                <div class=" col-12 col-lg-3">
                    <div class="left-container">
                        <div class="left-content">
                            <img src="<?= get_field("form_img")['url'] ?>" alt="<?= get_field("form_img")['alt'] ?>"
                                style="max-width:72px; height:72px; border-radius:15px; object-fit:cover" />
                            <div class="d-flex flex-column">
                                <span class="first-name" style=" "><?= get_field("first_name") ?></span>
                                <span
                                    style="color: #FFF;font-family: Manrope;font-size: 26px;font-style: normal;font-weight: 700; line-height:39px">
                                    <?= get_field("lets_talk") ?>
                                </span>
                            </div>
                            <div class="d-none d-lg-block"
                                style=" border-bottom: 1px solid  white; margin:30px 0;width:204px;">
                            </div>
                        </div>
                        <div class="d-block d-lg-none" style=" border-bottom: 1px solid  white; margin:30px 0; ">
                        </div>
                        <div style=" margin-left:; margin-top:10px;">
                            <!-- E_mail -->
                            <div class="d-flex flex-row flex-lg-column gap-">
                                <div class=" d-flex flex-row align-items-center justify-content-start gap-2">

                                    <a href="#"
                                        style="background-color:white;height:30px;width:30px; border-radius: 8px;"
                                        class="d-flex justify-content-center align-items-center">
                                        <img src="<?= get_field("link_btn")['url'] ?>"
                                            alt="<?= get_field("link_btn")['alt'] ?>"
                                            style="width:12px; height:18px; margin:7px 0;color:black" />
                                    </a>
                                    <span
                                        style="color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px; margin:30px 0">voornaam@sue.nl
                                    </span>
                                    <!-- e_mail -->
                                </div>
                                <!-- contact nummer -->
                                <div class=" d-flex flex-row align-items-center justify-content-start gap-2">
                                    <a href="#"
                                        style="background-color:white;height:30px;width:30px; border-radius: 8px;"
                                        class="d-flex justify-content-center align-items-center">
                                        <img src="<?= get_field("link_btn")['url'] ?>"
                                            alt="<?= get_field("link_btn")['alt'] ?>"
                                            style="width:12px; height:18px; margin:7px 0;color:black" />
                                    </a>
                                    <span
                                        style="color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px">+31
                                        345 656 666
                                        <!-- tel_num -->
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right column Contact Form -->
                <div class="col-12 col-lg-9">
                    <div class="row" style="margin-top:67px;">
                        <div class="col-lg-4">
                            <h2
                                style="color: var(--Secondary-400, #FFF);font-family: Manrope;font-size: 26px;font-style: normal;font-weight: 700;line-height: 150%; /* 39px */">
                                <?= get_field("are_u_ready") ?>
                            </h2>
                        </div>
                        <div class="col-lg-7 offset-lg-1"
                            style="color: var(--Neutral-400, #9AA0B7); font-family: Manrope;font-size: 16px; font-style: normal;  font-weight: 700; line-height: 170%; /* 27.2px */">
                            <?= get_field("form_text") ?>

                        </div>
                    </div>
                    <div style=" margin:">
                        <?= str_replace(['__START__', '__END__'], ['<div class="form-col">', '</div>'], do_shortcode('[gravityform id="1" title="false" description="false"]')) ?>
                    </div>
                    <div class="row">
                        <div class="col-lg-8" style="">
                            <span
                                style="color:#9AA0B7;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 500;line-height:23.4px ">
                                <?= get_field("privacy_text") ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End of Form Section -->








    <!-- New Section -->
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 ">
                <div class="" style="display:flex;flex-direction: column; align-items: flex-start;gap: 2px; ">
                    <span class="information_title" style="">
                        <?= get_field("information_title") ?>
                    </span>
                    <br>
                    <span class="information_text">

                        <?= get_field("information_text") ?>
                    </span>
                </div>
                <!-- Second Row  on Small Screen-->
                <div class="row" style="margin:35px 0;">
                    <div class="col-lg-4  col-md-4">
                        <!-- accordion -->
                        <div class=" d-block d-md-none d-lg-none" id="accordionExample">
                            <!-- First Item -->
                            <div class="accordion-item">
                                <div class="d-flex flex-row align-items-center justify-content-between gap-3">
                                    <h2 class="accordion-header" id="headingOne">
                                        <a href="#collapseOne" class="accordion-button" data-bs-toggle="collapse"
                                            aria-expanded="true" aria-controls="collapseOne"
                                            style="color: #25325F; font-family: Manrope; font-size: 16px; font-style: normal; font-weight: 700; line-height: 27.2px;">
                                            <?= get_field("contact_title") ?>
                                        </a>
                                    </h2>
                                    <!-- DownAroow -->
                                    <div>
                                        <a class="d-flex justify-content-center align-items-center" href="#collapseOne"
                                            class="accordion-button" data-bs-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            <img src="<?= get_field("contact_en_adres_collapse")['url'] ?>"
                                                alt="<?= get_field("contact_en_adres_collapse")['title'] ?>"
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
                                                <?= get_field("e_mail") ?>
                                            </span>
                                            <span>
                                                <?= get_field("tele") ?>
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
                                            <?= get_field("address_title") ?>
                                        </a>
                                    </h2>
                                    <!-- DownAroow -->
                                    <div>
                                        <a class="d-flex justify-content-center align-items-center" href="#collapseTwo"
                                            class="accordion-button collapsed" data-bs-toggle="collapse"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            <img src="<?= get_field("contact_en_adres_collapse")['url'] ?>"
                                                alt="<?= get_field("contact_en_adres_collapse")['title'] ?>"
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
                                                <?= get_field("address") ?></span>
                                            <span> <?= get_field("city") ?></span>
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
                                            <?= get_field("information") ?>
                                        </a>
                                    </h2>
                                    <!-- DownAroow -->
                                    <div>
                                        <a class="d-flex justify-content-center align-items-center"
                                            href="#collapseThree" class="accordion-button collapsed"
                                            data-bs-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            <img src="<?= get_field("contact_en_adres_collapse")['url'] ?>"
                                                alt="<?= get_field("contact_en_adres_collapse")['title'] ?>"
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
                                                <?= get_field("kvk") ?>
                                                <span
                                                    style="color:  #6A7291;font-family: Manrope;font-size: 15px;font-style: normal;font-weight: 600;line-height:  27px ">
                                                    <?= get_field("kvk_num") ?>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-column align-items-flex-start ">
                                            <span> <?= get_field("vat") ?> <span>
                                                    <?= get_field("account_num") ?>
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
                        <div class="d-none d-md-flex d-lg-flex flex-column align-items-flex-start gap-2">
                            <span
                                style="color:  #25325F;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height: 27.2px">
                                <?= get_field("contact_title") ?></span>
                            <span
                                style="color:  #6A7291;font-family: Manrope;font-size: 15px;font-style: normal;font-weight: 600;line-height:  27px ">
                                <?= get_field("e_mail") ?></span>
                            <span> <?= get_field("tele") ?></span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="d-none d-md-flex d-lg-flex flex-column align-items-flex-start gap-2">
                            <span
                                style="color:  #25325F;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height: 27.2px">
                                <?= get_field("address_title") ?></span>
                            <span
                                style="color:  #6A7291;font-family: Manrope;font-size: 15px;font-style: normal;font-weight: 600;line-height:  27px ">
                                <?= get_field("address") ?></span>
                            <span> <?= get_field("city") ?></span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="d-none d-md-flex d-lg-flex flex-column align-items-flex-start gap-2">
                            <span
                                style="color:  #25325F;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height: 27.2px">
                                <?= get_field("information") ?>
                            </span>
                            <div class="d-flex flex-row align-items-center gap-2">
                                <span
                                    style="color: #6A7291;font-family: nformatifont-size: 15px;font-style: normal;font-weight: 600;line-height:27px ">
                                    <?= get_field("kvk") ?>
                                </span>
                                <span
                                    style="color:  #6A7291;font-family: Manrope;font-size: 15px;font-style: normal;font-weight: 600;line-height:  27px ">
                                    <?= get_field("kvk_num") ?>
                                </span>
                            </div>
                            <div class="d-flex flex-row align-items-center gap-2">
                                <span> <?= get_field("vat") ?></span>
                                <span> <?= get_field("account_num") ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Gap between -->
            <div class="d-none  d-lg-flex  col-lg-2"></div>
            <!-- Newsletters -->
            <div class="col-12 col-md-2 col-lg-4">
                <div style="display:flex;flex-direction: column; align-items: flex-start; ">
                    <div class="d-flex flex-column align-items-flex-start gap-3 newsletter-container">
                        <!-- Logo -->
                        <a class="navbar-brand fs-4" href="<?= esc_url(home_url('/')); ?>">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/logo.svg" alt="Logo"
                                style="height: 43px;width: 88px;">
                        </a>
                        <span class="newsletter_text">
                            <?= get_field("newsletter_text") ?>
                        </span>
                        <div class="email-field-container">
                            <input type="email" id="email" name="email" placeholder="Email address" required>
                            <!-- <button type="submit" class="submit-btn">Subscribe</button> -->
                            <!-- Btn & text -->
                            <button type="submit"
                                class="submit-btn d-flex justify-content-center align-items-center gap-2"> <img
                                    src="<?= get_field("subscribe_btn")['url'] ?>"
                                    alt="<?= get_field("subscribe_btn")['alt'] ?>"
                                    style="width:12px; height:18px; margin:7px 0;" />Subscribe
                            </button>
                        </div>
                        <span
                            style=" color:#6A7291; font-family: Manrope; font-size: 13px;font-style: normal;font-weight: 500; line-height: 23.4px">
                            <?= get_field("privacy_statement") ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>


        <!-- Arrows container -->
        <div class="container">
            <div class="row gy-2">
                <div class="col-12 col-lg-12">
                    <div class=" row d-flex d-md-flex d-lg-flex  align-items-center justify-content-around"
                        style="margin-top:50px">


                        <?php
                        foreach (get_field("arrow_section") as $testimonails) {
                            ?>
                        <div class="col-lg" style="border-radius:15px;   height:99px; margin-top:35px 0;">
                            <div class="d-flex  align-items-center justify-content-around gap-4">
                                <img src="<?= $testimonails['img_1']['url'] ?>"
                                    alt=" <?= $testimonails['img_1']['alt'] ?>" class="arrow_section" />

                                <img src="<?= $testimonails['img_2']['url'] ?>"
                                    alt=" <?= $testimonails['img_2']['alt'] ?>"
                                    class="arrow_section d-none d-md-flex d-lg-flex" />

                                <img src="<?= $testimonails['img_3']['url'] ?>"
                                    alt=" <?= $testimonails['img_3']['alt'] ?>"
                                    class="arrow_section d-none d-md-flex d-lg-flex" />

                                <img src="<?= $testimonails['img_4']['url'] ?>"
                                    alt=" <?= $testimonails['img_4']['alt'] ?>" class="arrow_section" />

                                <img src="<?= $testimonails['img_5']['url'] ?>"
                                    alt=" <?= $testimonails['img_5']['alt'] ?>"
                                    class="arrow_section d-none d-md-flex d-lg-flex" />

                                <img src="<?= $testimonails['img_6']['url'] ?>"
                                    alt=" <?= $testimonails['img_6']['alt'] ?>"
                                    class="arrow_section d-none d-md-flex d-lg-flex" />

                                <img src="<?= $testimonails['img_7']['url'] ?>"
                                    alt=" <?= $testimonails['img_7']['alt'] ?>" class="arrow_section" />

                                <img src="<?= $testimonails['img_8']['url'] ?>"
                                    alt=" <?= $testimonails['img_8']['alt'] ?>" class="arrow_section" />

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
                    <div class="row d-flex d-md-flex d-lg-flex  align-items-center justify-content-around second-arrow">

                        <?php
                        foreach (get_field("arrow_section_second_row") as $testimonails) {
                            ?>
                        <div class="col-lg" style="border-radius:15px;  height:99px; margin:35px 0;">
                            <div class="d-flex  align-items-center justify-content-around  gap-4">
                                <img src="<?= $testimonails['img_1']['url'] ?>"
                                    alt=" <?= $testimonails['img_1']['alt'] ?>" class="arrow_section" />

                                <img src="<?= $testimonails['img_2']['url'] ?>"
                                    alt=" <?= $testimonails['img_2']['alt'] ?>" class="arrow_section" />

                                <img src="<?= $testimonails['img_3']['url'] ?>"
                                    alt=" <?= $testimonails['img_3']['alt'] ?>" class="arrow_section" />

                                <img src="<?= $testimonails['img_4']['url'] ?>"
                                    alt=" <?= $testimonails['img_4']['alt'] ?>"
                                    class="arrow_section d-none d-md-flex d-lg-flex" />

                                <img src="<?= $testimonails['img_5']['url'] ?>"
                                    alt=" <?= $testimonails['img_5']['alt'] ?>"
                                    class="arrow_section d-none d-md-flex d-lg-flex " />

                                <img src="<?= $testimonails['img_6']['url'] ?>"
                                    alt=" <?= $testimonails['img_6']['alt'] ?>"
                                    class="arrow_section d-none d-md-flex d-lg-flex" />

                                <img src="<?= $testimonails['img_7']['url'] ?>"
                                    alt=" <?= $testimonails['img_7']['alt'] ?>"
                                    class="arrow_section d-none d-md-flex d-lg-flex" />

                                <img src="<?= $testimonails['img_8']['url'] ?>"
                                    alt=" <?= $testimonails['img_8']['alt'] ?>" class="arrow_section" />

                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>


</main>



<?php get_footer() ?>