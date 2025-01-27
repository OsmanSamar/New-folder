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
        display: flex;
        justify-content: center;
        align-items: center;
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
    }

    .expertise-text {
        font-size: 13px;
        font-weight: 500;
        line-height: 22px;
        color: #6A7291;
        font-family: Manrope;
        text-align: left;
    }


    .test-block::before {
        content: " ";
        position: absolute;
        background: linear-gradient(13deg, rgba(55, 75, 141, 0.40) 1.5%, rgba(54, 70, 124, 0.00) 94.53%);
        top: 0;
        z-index: -1;
        border-radius: 30px;
        width: 97%;
        height: 100%;
    }

    .left-container {
        border-radius: 30px;
        color: white;
        height: 264px;
        padding: 0 26px;
    }

    .left-content {
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-top: 30px;
        gap: 50px;

    }

    .first-name {
        color: #9AA0B7;
        font-family: Manrope;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;

        line-height: 6.2px;
    }

    .form_section {
        border-radius: 30px;
        background: #25325F;
        max-width: 1700px;
        /* height: 1400px; */
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


    .right-col-form {
        margin-top: unset;
    }


    @media(min-width: 768px) {

        .first-name {
            line-height: 27.2px;
        }

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

        .border-left {
            border-left: 1px solid white;
            display: flex;
            flex-direction: column;
            padding: 20px 0 20px 60px;
            row-gap: 16px;
        }

        .left-content {
            display: flex;
            flex-direction: row;
            justify-content: space-between;

        }

    }


    @media (min-width: 992px) {

        .right-col-form {
            margin-top: 67px;
        }

        .first-name {
            line-height: 27.2px;
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
            margin-top: 50px;
        }


        .form_section {
            height: 550px;
            /* height: 585px; */
        }

        .test-block::before {
            /* height: 101%; */
            height: 100%;
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


    <!-- 1 -->
    <div class="back-to-home" style="margin-top:23px; margin-bottom:23px; ">
        <a href="<?= get_field("back_to_home")['url'] ?>"
            class="d-flex justify-content-center align-items-center gap-2">
            <img src="<?= get_field("back_home_btn")['url'] ?>" alt="
            <?= get_field("back_home_btn")['alt'] ?>" style="width:20px; height:20px; margin:7px 0;" />

            <span class="separator"><img src="<?= get_field("separator")['url'] ?>" alt="
                <?= get_field("separator")['alt'] ?>" style="width:3px; height:6px;" /> </span>
            <span class="last">Services</span>
        </a>
    </div>



    <!-- Hero Section -->
    <div class="container-max-width" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
        data-aos-duration="1000" data-aos-easing="ease-in-out">
        <img src="<?= get_field("hero_img")['url'] ?>" alt="
                <?= get_field("hero_img")['title'] ?>" class=""
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


    <!-- Second Section -->
    <div class="container">
        <div class="row" style="margin-top:50px;">
            <div class="col-12 col-md-6 col-lg-5" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <div class="left_col">
                    <div class="left-btn">
                        <?= get_field("services_title") ?>
                    </div>
                    <span class="title">
                        <?= get_field("services_main_title") ?>
                    </span>

                    <span class="left-text">
                        <?= get_field("services_left_text") ?>
                    </span>
                </div>
            </div>
            <div class="d-none d-lg-block col-lg-1"></div>
            <div class="col-12 col-md-6 col-lg-6" data-aos="fade-left" data-aos-offset="100" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <div class="right_col">
                    <span class="right-text">
                        <?= get_field("services_right_text") ?>
                    </span>
                </div>
            </div>
        </div>
    </div>


    <!-- Testimonials Section on All Screens -->
    <div class="container mt-5" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
        data-aos-easing="ease-in-out">
        <div class="row gy-2">
            <?php
            $delay = 0;
            foreach (get_field("expertise_testimonials") as $testimonial) { ?>
            <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= $delay ?>"
                data-aos-duration="800">
                <div class="testimonial-card">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span class="expertise-num">
                            <?= $testimonial["expertise_num"] ?>
                        </span>
                        <span class="expertise-sub-title"><?= $testimonial["expertise_sub_title"] ?></span>
                    </div>
                    <h2 class="expertise-main-title">
                        <?= $testimonial["expertise_main_title"] ?>
                    </h2>
                    <div class="divider mb-3" style="margin: 15px 1px;"></div>
                    <p class=" expertise-text">
                        <?= $testimonial["expertise_text"] ?>
                    </p>
                    <!-- Btn & text -->
                    <div class="d-flex align-items-center  gap-2" style=" margin-bottom:20px;">
                        <button>
                            <span class="circle blue-circle">
                                <a href="#" class="d-flex justify-content-center align-items-center  arrow" href="#">
                                    <img src="<?= $testimonial["expertise_img"]['url'] ?>" alt="
                                        <?= $testimonial["expertise_img"]['alt'] ?>"
                                        style="width: 12px; height: 18px; margin:7px 0" class="icon" />
                                </a>
                            </span>
                            <a href="<?= $testimonial["expertise_btn"]['url'] ?>"
                                class="text-decoration-none button-text blue2">
                                <?= $testimonial["expertise_btn"]['title'] ?>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            <?php

                $delay += 300;
            } ?>
        </div>
    </div>

    <!-- Form Section container  -->
    <?php get_template_part('components/form') ?>
    <!-- End of Form Section -->

</main>



<?php get_footer() ?>