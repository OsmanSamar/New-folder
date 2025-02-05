<?php get_header();

//Template Name: single-customer
?>

<main class="single-customer flex-grow-1">
    <style>
        .hr-white {
            border-top: 1px solid white;
            width: 100%;
            opacity: 1;
        }

        .hero_text {
            color: #FFF;
            font-family: Manrope;
            font-size: 16px;
            font-style: normal;
            font-weight: 600;
            line-height: 33.2px;

        }


        .post-title {
            color: #24325f;
            font-family: Manrope, sans-serif;
            text-wrap: balance;
            font-weight: 600;
            line-height: 1.4;
            font-size: 24px;
            text-align: center;
        }


        .profit-block {
            border-radius: 15px;
            background: white;
            height: auto;
            padding: 42px;
            margin-top: 27px
        }

        .profit_title {
            color: #25325F;
            font-family: Manrope;
            font-size: 21px;
            font-style: normal;
            font-weight: 700;
            line-height: 33.6px;
            margin-top: 33px;
        }

        .divider {
            border-bottom: 0.5px solid #25325F;
        }


        /*  */
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
            margin: 170px auto 0px;
        }

        .container-max-width .container-img {
            display: none;
        }

        .hero_blue_block {
            height: 700px;
            border-radius: 40px;
            background: #25325F;
            position: relative;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            /* padding: 30px; */
            padding: 18px;
            margin-top: -152px;
        }

        .inner_block {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: left;
            /* margin: 10px 60px; */
            gap: 2px;
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
            margin: 14px 0;
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

            .post-title {
                color: #24325f;
                font-family: Manrope, sans-serif;
                text-wrap: balance;
                font-weight: 600;
                line-height: 1.4;
                font-size: 37px;
                text-align: center;
            }





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


            .post-title {
                color: #24325f;
                font-family: Manrope, sans-serif;
                text-wrap: balance;
                font-weight: 600;
                line-height: 1.4;
                font-size: 47px;
                text-align: center;
            }



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
                margin: 50px auto 10px;
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
                width: 590px;
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
    <?php wp_reset_postdata(); ?>



    <!-- Hero Section -->
    <div class="container-max-width" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
        data-aos-duration="1000" data-aos-easing="ease-in-out">
        <img src="<?= get_field("heroimg")['url'] ?>" alt="<?= get_field("heroimg")['title'] ?>" class="container-img"
            style=" height: 581px; border-radius: 40px; object-fit: cover;" />
        <div class=" hero_blue_block">
            <div class="inner_block container">
                <div class="d-flex align-items-center justify-content-between gap-2" style="margin-bottom:20px;">
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

                <span class="hero_text ">
                    <?= get_field("herotext") ?>
                </span>
                <hr class="hr-white">

                <span class="hero_text">
                    <?= get_field("customerttitle") ?>
                </span>
                <span class="hero_text  ">
                    <?= get_field("customername") ?>
                </span>
                <hr class="hr-white">



            </div>



        </div>
    </div>


    <div class="container text-section">
        <div class="row">
            <div class="col-lg-5 content " data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <?php foreach (get_field("content") as $content) {
                    // var_dump($content);
                    if ($content['acf_fc_layout'] == 'text') { ?>
                        <div>
                            <span class="left-btn">
                                <?= $content['title'] ?></span>
                            <h1 class=" first_title"> <?= $content['maintitle'] ?></h1>
                        </div>
                        <div>
                            <h3 class="first_text">
                                <?= $content['text'] ?>
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
                <div class="profit-block">
                    <?php foreach (get_field("content") as $content) {
                        if ($content['acf_fc_layout'] == 'text') { ?>
                            <span class="profit_title"> <?= $content['lefttitle'] ?></span>
                            <?php
                        }
                    }
                    ?>
                    <div class="d-flex flex-column gap-2">

                        <?php foreach (get_field("profittestimonials") as $testimonial) { ?>
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <img src="<?= $testimonial["profitimg"]['url'] ?>"
                                    alt=" <?= $testimonial['profitimg']['alt'] ?>" class=""
                                    style="width: 15px;height: 16px;" />
                                <span class="expertise-sub-title"><?= $testimonial["profittext"] ?></span>
                            </div>
                            <div class="divider mb-1" style="max-width: 461px;"></div>
                        <?php } ?>

                    </div>

                </div>

            </div>








        </div>
    </div>


</main>
<?php get_footer() ?>