<?php get_header();

//Template Name: event
?>

<main class="single-events flex-grow-1">
    <style>
        .resource-item {
            display: flex;
            flex-direction: row;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 15px;
            height: 80px;
            margin-top: 40px;

            /* margin-bottom: 40px; */
        }

        .resource-item:hover {
            background-color: #f9f9f9;
        }

        .resource-item>div:first-child {
            border-left: none;
        }

        .resource-item .arrow img {
            width: 12px;
            height: 18px;
        }

        .post-title {
            color: #24325f;
            font-family: Manrope, sans-serif;
            text-wrap: balance;
            font-weight: 600;
            line-height: 1.4;
            font-size: 47px;
            text-align: center;
        }

        .post-place {
            color: #24325f;
            font-family: Manrope, sans-serif;
            text-wrap: balance;
            font-weight: 600;
            line-height: 1.4;
            font-size: 17px;
        }

        .testi-num {
            color: #E94271;
            font-family: Manrope;
            font-size: 20px;
            font-weight: 700;
            line-height: 23.8px;
        }

        .testi-title {
            font-size: 20px;
            font-weight: 700;
            line-height: 23.8px;
            color: #6A7291;
            font-family: Manrope;
        }

        .test-block::before {
            content: " ";
            position: absolute;
            border-radius: 40px;
            background: linear-gradient(335deg, rgba(71, 95, 173, 0.4) 8.61%, rgba(52, 63, 101, 0) 61.92%);
            top: 15px;
            left: 0;
            z-index: -1;
            width: 100%;
            height: 211px;
        }

        ::selection {
            background-color: rgb(216, 98, 131);
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
            margin: 400px auto 10px;
        }

        .container-max-width .container-img {
            display: none;
        }

        .hero_blue_block {
            /* height: 100%; */
            height: 700px;
            border-radius: 40px;
            background: #25325F;
            position: relative;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 30px;
            margin-top: -152px;
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
            font-size: 29px;
            font-style: normal;
            font-weight: 700;
            line-height: 54px;
            margin-top: 45px;
            margin-bottom: 31px;
        }


        .left-btn {
            width: fit-content;
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

        .first_title {
            color: #25325F;
            font-family: Sora;
            font-size: 29px;
            font-style: normal;
            font-weight: 700;
            line-height: 44px;
            margin-top: 45px;
            margin-bottom: 31px;
        }

        .first_text {

            color: #25325F;
            font-family: Manrope;
            font-size: 18px;
            font-style: normal;
            font-weight: 400;
            line-height: 1.8;
        }

        .border-container2 {
            border-radius: 40px;
            max-width: 1700px;
            height: 576px;
            border-radius: 40px;
            border: 1px solid #CBCFDE;
            margin: 100px auto 10px;
        }

        .first-name::after {
            content: "";
            display: inline-block;
            width: 1px;
            height: 21px;
            opacity: 0.25;
            background: #CBCFDE;
            margin-left: 13px;
            margin-right: 13px;
            vertical-align: middle;
        }

        .lets-talk-title {
            display: block;
            color: #9AA0B7;
            font-family: Manrope;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: 27.2px
        }


        .lets-talk-gota-question {
            display: block;
            color: #FFF;
            font-family: Sora;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 28.4px;
        }

        .container-let-talk {
            display: flex;
            align-items: flex-start;
            justify-content: space-around;
            flex-direction: column;
            /* align-items: center;
            justify-content: space-between; */
        }

        .blue-container {
            border-radius: 40px;
            background: #25325F;
            height: 400px;
            max-width: 1700px;
            /* padding: 30px; */
            margin: 50px auto 10px;
            display: flex;
            align-items: anchor-center;
        }

        .left-side-img-text {
            display: flex;
            /* gap: 1rem;
            justify-content: center; */
            flex-direction: row;
            /* align-items: flex-start; */
            /* align-items: center; */
            justify-content: space-around;
        }

        .first-name-name {
            display: flex;
            flex-direction: column;
        }

        .letstalkgotaquestion {
            color: #FFF;
            font-family: Sora;
            font-size: 16px;
            font-style: normal;
            font-weight: 600;
            line-height: 50.4px;
        }


        .date {
            border-left: unset;
        }

        .datum {
            background-color: #274083;
            border-radius: 15px 15px 0px 0px;
            color: #FFF;
            font-size: 20px
        }

        .post-id {
            border: 1px solid #ccc;
        }

        .post-id-sm {
            border: 1px solid #ccc;
        }


        /* Custom styles for Form 1 */
        .form-1 .gform_wrapper .gform_body .gform_fields .gfield {
            width: 100%;
        }

        /* Input field */
        .gform-theme--foundation .gfield input,
        .gform-theme--foundation .gfield select {
            inline-size: 100% !important;
            box-sizing: border-box !important;
            border-radius: 8px !important;
            margin-bottom: 8px !important;
        }

        @media (min-width: 768px) {
            .gform_fields top_label form_sublabel_below description_below validation_below {
                display: inline-block !important;
            }

            .gform-theme--foundation .gform_fields {
                display: inline-block !important;
                font-size: 30px !important;
                font-weight: 500 !important;
            }

            /* Label */
            .gform-field-label--type-sub {
                font-size: 18px !important;
                font-weight: 700 !important;
            }

            .gform-theme--foundation .gform_footer,
            .gform-theme--foundation .gform_page_footer {
                justify-content: start !important;
            }
        }

        .text-section {
            margin-top: 150px
        }


        @media (min-width: 768px) {

            .test-block::before {
                content: " ";
                position: absolute;
                border-radius: 40px;
                background: linear-gradient(335deg, rgba(71, 95, 173, 0.4) 8.61%, rgba(52, 63, 101, 0) 61.92%);
                top: -5px;
                left: 0;
                z-index: -1;
                width: 100%;
                height: 211px;
            }


            .container-max-width {
                margin: 250px auto 10px;
            }

            .container-max-width .container-img {
                display: block;
            }

            .hero_blue_block {
                width: 458px;
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

            .inner_block {
                margin: unset;
            }

            .hero_title {
                font-size: 35px;
            }

            .border-container2 {
                height: 278px;
            }

            .container-let-talk {
                flex-direction: row;
            }

            .left-side-img-text {
                align-items: center;
                flex-direction: row;
                padding: 28px;
                justify-content: flex-start;
                column-gap: 31px;
            }

            .blue-container {
                height: 212px;
            }

            .first-name-name {
                display: flex;
                flex-direction: row;
                align-items: center;
            }

            .datum {
                background-color: #274083;
                border-radius: 15px 15px 0px 0px;
                color: #FFF;
                font-size: 20px
            }

            .text-section {
                margin-top: 50px
            }

        }


        @media(min-width: 992px) {

            .test-block::before {
                content: " ";
                position: absolute;
                border-radius: 40px;
                background: linear-gradient(335deg, rgba(71, 95, 173, 0.4) 8.61%, rgba(52, 63, 101, 0) 61.92%);
                top: -5px;
                left: 0;
                z-index: -1;
                width: 100%;
                height: 211px;
            }

            .container-max-width {
                border-radius: 30px;
                margin: 100px auto 10px;
            }

            .hero_blue_block {
                width: 531px;
                position: relative;
                bottom: 580px;
                left: 0;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: center;
                padding: 30px;
                height: 100%;
                margin-top: unset;
            }


            .hero_title {
                font-size: 35px;
            }

            .border-container2 {
                height: 263px;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .container-let-talk {
                flex-direction: row;
            }

            .left-side-img-text {
                align-items: center;
                flex-direction: row;
                height: 200px;
                /* justify-content: center; */
                justify-content: flex-start;
                column-gap: 31px;
            }

            .blue-container {
                height: 212px;
            }

            .lets-talk-gota-question {
                font-size: 35px;
                font-weight: 600;
                line-height: 50.4px;
            }

            .first-name-name {
                display: flex;
                flex-direction: row;
                align-items: center;
            }


            .letstalkgotaquestion {
                font-size: 36px;
            }


            .date {
                border-left: 1px solid #ccc;
            }

            .datum {
                background-color: #274083;
                border-radius: 15px 0px 0px 15px;
                color: #FFF;
                font-size: 20px
            }

            .post-id-sm {
                border: unset;
            }

            .text-section {
                margin-top: 50px
            }

        }
    </style>


    <!-- BreadCrumb Section -->
    <div style="margin-top:180px;">
        <?php get_template_part('components/breadcrumb') ?>
    </div>

    <?php

    $post_id = get_the_ID();
    $fields = get_fields($post_id);
    ?>

    <div class="col-12 col-lg-12 d-flex justify-content-center align-items-center  h-100  p-3 px-4">
        <span class="post-title ">
            <?= get_the_title($post_id) ?>
        </span>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <a href=" <?= get_permalink($post_id) ?>" class="resource-item g-0 row ">
                    <div
                        class="col-12 col-lg-2 justify-content-center justify-content-lg-start d-flex align-items-center h-100 p-3 px-4 datum">
                        <div class="">
                            <?= $fields['datum'] ?>
                        </div>
                    </div>
                    <div class="col-lg-2 d-none"></div>

                    <div
                        class="d-flex col-lg-4 justify-content-center  align-items-center h-100 p-3 px-4 date post-id ">
                        <div class="d-flex flex-row align-items-center justify-content-between gap-3">
                            <div class="flex-shrink-0">
                                <?= $fields['starttime'] ?>
                                <span style=" color:#9AA0B7"> <?= $fields['start'] ?></span>
                            </div>
                            <div style="width:40px">
                                <hr>
                            </div>
                            <div class="flex-shrink-0">
                                <?= $fields['endtime'] ?>
                                <span style=" color:#9AA0B7"><?= $fields['end'] ?> </span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="col-12 col-lg-4 justify-content-center justify-content-lg-start d-flex align-items-center h-100  p-3 px-4  date  post-id-sm">
                        <span class="d-flex flex-row align-items-baseline justify-content-center  gap-2 post-place">
                            <svg class="flex-shrink-0 mt-2" xmlns="http://www.w3.org/2000/svg" width="10" height="15"
                                fill="none">
                                <g fill="#6A7291" clip-path="url(#a)">
                                    <path d="M4.63 14.47 5 14.2l.37.27L5 15l-.37-.53Z"></path>
                                    <g fill-rule="evenodd" clip-rule="evenodd">
                                        <path
                                            d="M5 2.793c-1.256 0-2.273 1.043-2.273 2.328 0 1.286 1.017 2.328 2.272 2.328s2.273-1.042 2.273-2.328c0-1.285-1.018-2.328-2.273-2.328ZM3.635 5.121c0-.771.61-1.396 1.363-1.396s1.364.625 1.364 1.396c0 .772-.61 1.397-1.364 1.397-.753 0-1.363-.625-1.363-1.397Z">
                                        </path>
                                        <path
                                            d="M4.63 14.47 5 14.2l.37.27.003-.005.01-.014.04-.056.145-.214a58.524 58.524 0 0 0 2.095-3.318c.572-.981 1.15-2.053 1.587-3.048.428-.976.75-1.944.75-2.694C10 2.293 7.761 0 5 0S0 2.293 0 5.121c0 .75.322 1.718.75 2.694.436.995 1.014 2.067 1.587 3.049a58.495 58.495 0 0 0 2.24 3.53l.04.057.01.014.003.006ZM.91 5.122C.91 2.807 2.74.931 5 .931s4.09 1.876 4.09 4.19c0 .536-.245 1.346-.67 2.313-.415.948-.974 1.985-1.537 2.952a57.499 57.499 0 0 1-1.883 3 57.517 57.517 0 0 1-1.883-3c-.563-.967-1.122-2.004-1.538-2.952C1.155 6.467.91 5.657.91 5.12Z">
                                        </path>
                                    </g>
                                </g>
                                <defs>
                                    <clipPath id="a">
                                        <path fill="#fff" d="M0 0h10v15H0z"></path>
                                    </clipPath>
                                </defs>
                            </svg>
                            <?= $fields['place'] ?>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <?php wp_reset_postdata(); ?>


    <!-- Hero Section -->
    <div class="container-max-width" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
        data-aos-duration="1000" data-aos-easing="ease-in-out">
        <img src="<?= get_field("heroimg")['url'] ?>" alt="<?= get_field("heroimg")['title'] ?>" class="container-img"
            style=" height: 581px; border-radius: 40px; object-fit: cover;" />
        <div class=" hero_blue_block">
            <div class="inner_block container">
                <div class="d-flex align-items-center justify-content-between gap-2">
                    <div class="d-flex align-items-center justify-content-center rounded "
                        style="width: 30px; height: 30px; background-color:#FFF;">
                        <img src="<?= get_field("backimg")['url'] ?>" alt="<?= get_field("backimg")['alt'] ?>"
                            style="width: 12px; height: 18px;" />
                    </div>
                    <a href="<?= get_field("backtooverview")['url'] ?>"
                        style="color:#FFF; font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px;  text-decoration: none; ">
                        <?= get_field("backtooverview")['title'] ?>
                    </a>
                </div>
                <span class="hero_title">
                    <?= get_field("herotitle") ?>
                </span>


            </div>
            <div class="form-container form-1">
                <?= str_replace(['__START__', '__END__'], ['<div class="form-col">', '</div>'], do_shortcode('[gravityform id="5" title="false" description="false"  cssClass="form-1"]')) ?>
            </div>


        </div>
    </div>




    <div class="container text-section" style="">
        <div class="row">
            <div class="col-lg-5 content" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <?php foreach (get_field("content") as $content) {
                    // var_dump($content);
                    if ($content['acf_fc_layout'] == 'text') { ?>
                        <div id="vivamusnoncommodonulla">
                            <span class="left-btn">
                                <?= $content['subtitle'] ?></span>
                            <h1 class=" first_title"> <?= $content['maintitle'] ?></h1>
                        </div>
                        <div id="pellentesquebibendumefficiturduisedconvallistinciduntelitegetiaculis">
                            <h3 class="first_text">
                                <?= $content['righttext'] ?>
                            </h3>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <div class="col-lg-2 d-none d-lg-block"></div>
            <div class="col-lg-5 content" data-aos="fade-left" data-aos-offset="100" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <?php foreach (get_field("content") as $content) {
                    if ($content['acf_fc_layout'] == 'text') { ?>
                        <span class="first_text"> <?= $content['lefttext'] ?></span>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>


    <!-- 3 -->
    <div class="border-container2" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="500"
        data-aos-easing="ease-in-out">
        <div class="container">
            <div class="row">
                <?php foreach (get_field("testimonials") as $testimonial) {
                    ?>
                    <div class="col-12 col-lg-3 col-md-6">
                        <div class=" d-flex flex-column justify-content-center gap-2"
                            style="margin:20px; align-items:flex-start;">
                            <div class="d-flex align-items-center gap-2">
                                <span class="testi-num"><?= $testimonial["num"] ?></span>
                            </div>
                            <span class="testi-title"><?= $testimonial["titletes"] ?></span>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>

    <!-- 4 -->
    <div class="blue-container row g-0 " data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
        data-aos-duration="1000" data-aos-easing="ease-in-out">
        <!-- Left Side: Image and Texts container-let-talk -->
        <div class="container-let-talk">
            <div class="left-side-img-text col-lg-9 col-md-8 col-12 ">
                <!-- col-lg-9 col-md-8 col-12 -->
                <img src="<?= get_field('letstalkimg')['url'] ?>" alt="<?= get_field('letstalkimg')['alt'] ?>"
                    style="width: 120px;height: 120px; border:15px;">
                <div>
                    <div class="first-name-name">
                        <span class="first-name"
                            style="display: block; color:#9AA0B7;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height:27.2px "><?= get_field('letstalkfirstname') ?></span>
                        <span class="lets-talk-title"
                            style="display: block; color#9AA0B7;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height: 27.2px"><?= get_field('letstalktitle') ?></span>
                    </div>
                    <br>
                    <span class="letstalkgotaquestion"><?= get_field('letstalkgotaquestion') ?></span>
                </div>
            </div>

            <!-- Right Side: Text, Email, and Phone -->
            <div class=" test-block col-lg-3 col-12 col-md-4 "
                style="display: flex; flex-direction: column; align-items: flex-start; justify-content:center; gap:1rem; position:relative; height:200px; padding:28px; width:;">
                <!-- col-lg-3 col-12 col-md-4 -->
                <span style="color: #FFF;"><?= get_field('letstalkword') ?></span>
                <div style="display: flex; align-items: center; gap: 0.5rem;">
                    <div
                        style="background-color:#E94271; width: 30px; height: 30px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                        <img src="<?= get_field('letstalkarrow')['url'] ?>"
                            alt="<?= get_field('letstalkarrow')['alt'] ?>" style="width: 12px; height: 18px;">
                    </div>
                    <span style="color: #FFF;"><?= get_field('letstalkmail') ?></span>
                </div>
                <div style="display: flex; align-items: center; gap: 0.5rem;">
                    <div
                        style="background-color:#FFF; width: 30px; height: 30px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                        <img src="<?= get_field('letstalkphoneimg')['url'] ?>"
                            alt="<?= get_field('letstalkphoneimg')['alt'] ?>" style="width: 12px; height: 18px;">
                    </div>
                    <span style="color: #FFF;"><?= get_field('letstalkphonenumber') ?></span>
                </div>
            </div>
        </div>




    </div>


















</main>
<?php get_footer() ?>