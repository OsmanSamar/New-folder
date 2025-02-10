<?php get_header();

//Template Name: single-customer
?>

<main class="single-customer flex-grow-1">
    <style>
        .ratio {
            position: relative;
            width: 100%;
        }

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

        .container-with-img {
            position: relative;
            text-align: center;
            border-radius: 40px;
            max-width: 1700px;
            height: 581px;
            margin: 200px auto 10px;
        }

        .center-left {
            position: absolute;
            left: 50%;
            transform: translate(-50%, -141%);
            width: 385px;
            height: 315px;
            background-color: #FFF;
            border-radius: 20px;
        }

        .center-left-text {
            color: #25325F;
            font-family: Manrope;
            font-size: 16px;
            font-style: normal;
            font-weight: 500;
            line-height: 32px;
            text-align: left;

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


        .text-section {
            margin-top: 150px
        }

        .text-section2 {
            margin-top: 50px
        }

        .form_section {
            border-radius: 30px;
            background: #25325F;
            max-width: 1700px;
            /* height: 1400px; */
            margin: 50px auto 50px;
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

        .right-col-form {
            margin-top: unset;
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


            .center-left {
                position: absolute;
                transform: translate(-71%, -114%);
                width: 479px;
                height: 379px;
                background-color: #FFF;
                border-radius: 20px;
            }

            .center-left-text {
                font-size: 21px;
                font-weight: 700;
                line-height: 39px;
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

            .blue-container {
                height: 212px;
            }

            .text-section {
                margin-top: 70px
            }

            .text-section2 {
                margin-top: 70px
            }


            .left-content {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                margin-top: 50px;
                gap: 20px;
            }

            .border-left {
                border-left: 1px solid white;
                display: flex;
                flex-direction: column;
                padding: 20px 0 20px 60px;
                row-gap: 16px;
            }


        }


        @media(min-width: 992px) {

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

            .center-left {
                position: absolute;
                transform: translate(-135%, -125%);
                width: 479px;
                height: 379px;
                background-color: #FFF;
                border-radius: 20px;
            }

            .form_section {
                height: 571px;
            }

            .left-container {
                height: 500px;
            }

            .left-content {
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                align-items: normal;
                margin-top: 67px;
            }

            .right-col-form {
                margin-top: 67px;
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
                    <!-- <div class="d-flex align-items-center justify-content-center rounded "
                        style="width: 30px; height: 30px; background-color:#FFF;">
                        <img src="<?= get_field("backimg")['url'] ?>" alt="<?= get_field("backimg")['alt'] ?>"
                            style="width: 12px; height: 18px;" />
                    </div>
                    <a href="<?= get_field("backtooverview")['url'] ?>"
                        style="color:#FFF; font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px;  text-decoration: none; ">
                        <?= get_field("backtooverview")['title'] ?>
                    </a> -->

                    <button>
                        <span class="circle white-circle">
                            <div class="d-flex align-items-center justify-content-center rounded  arrow">
                                <img src="<?= get_field("backimg")['url'] ?>" alt="<?= get_field("backimg")['alt'] ?>"
                                    style="width: 12px; height: 18px;" class="icon" />
                            </div>
                        </span>
                        <!-- <div class="button-text ">
                                <a href="<?= get_field("backlink")['url'] ?>">
                                    <?= get_field("backlink")['title'] ?>
                                </a>
                            </div> -->
                        <div class="button-text  white">
                            <span>
                                Back to overview
                            </span>
                        </div>
                    </button>
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

    <!-- 4 -->
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


    <!-- 5 -->
    <div class="container-with-img" style="  margin: 100px auto 10px;">
        <img src="<?= get_field("imgsection")['url'] ?>" alt="<?= get_field("imgsection")['title'] ?>"
            class="container-img" style=" height: 580px; border-radius: 40px; object-fit: cover;" />
        <div class="container" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50" data-aos-duration="400"
            data-aos-easing="ease-in-out">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="center-left">
                        <div class="left_col " style="padding: 38px;">
                            <span class="left-btn" style="text-align:left;  margin-bottom:14px">
                                <?= get_field("centerlefttitle") ?>
                            </span>

                            <span class="center-left-text">
                                <?= get_field("centerlefttext") ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- 6 -->
    <div class="container text-section2">
        <div class="row">

            <div class="col-12 col-lg-5 col-md-5  content order-2 order-md-1 order-lg-1" data-aos="fade-right"
                data-aos-offset="100" data-aos-delay="250" data-aos-duration="1000" data-aos-easing="ease-in-out">
                <?php foreach (get_field("contentwithimg") as $content) {
                    if ($content['acf_fc_layout'] == 'text') { ?>
                        <div class=" ratio ratio-1x1 ">
                            <img src="<?= $content['rightimg']['url'] ?>" alt="<?= $content['rightimg']['alt'] ?>"
                                style="object-fit: cover;border-radius: 40px;overflow: hidden; width:100%; height:100%" />
                        </div>
                        <?php
                    }
                }
                ?>
            </div>

            <div class="col-12 col-lg-4 col-md-6 offset-md-1 content order-1 order-md-2  order-lg-2  mb-4  "
                data-aos="fade-left" data-aos-offset="100" data-aos-delay="250" data-aos-duration="1000"
                data-aos-easing="ease-in-out">
                <?php foreach (get_field("contentwithimg") as $content) {
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
        </div>
    </div>


    <!-- Form Section container  -->
    <?php get_template_part('components/form') ?>




    <!-- Stories -->
    <div class="container">
        <div class="row">
            <div class="client-consultancy-container my-5">
                <p class="client-consultancy-title">
                    <?= get_field("customerstories") ?>
                </p>
                <div class=" d-flex flex-row align-items-center justify-content-end gap-1 client-consultancy-link">

                    <a href="<?= get_field("viewallstories")['url'] ?>"
                        style="background-color:#274083; height:30px; width:30px; border-radius:8px; "
                        class="d-flex justify-content-center align-items-center ">
                        <img src="<?= get_field("arrowimg")['url'] ?>" alt="<?= get_field("arrowimg")['alt'] ?>"
                            style="width:12px; height:18px; margin:7px 0;" class="" />

                    </a>
                    <?= get_field("viewallstories")['title'] ?>
                    <!-- 3 -->
                    <!-- <button>
                        <span class="circle3">
                            <a href="#" class="d-flex justify-content-center align-items-center  arrow">
                                <img src="<?= get_field("view_all_stories_img")['url'] ?>"
                                    alt="<?= get_field("view_all_stories_img")['alt'] ?>"
                                    style="width: 12px; height: 18px; margin:7px 0" class="icon" />
                            </a>
                        </span>
                        <a href="<?= get_field("clients_about_our_consultancy_link")['url'] ?>" class=" button-text3">
                            <?= get_field("clients_about_our_consultancy_link")['title'] ?>
                        </a>
                    </button> -->
                </div>
            </div>



            <?php
            //related posts
            $posts = get_posts([
                'post_type' => 'customer_stories',
                'numberposts' => 3,
                'exclude' => [get_the_ID()]
            ]);

            foreach ($posts as $post) {
                $fields = get_fields($post->ID);
                $testimonial = get_field("clientstorytestimonials");
                ?>
                <div class="col-12 col-md-4 col-lg-4 mb-4">
                    <a href="<?= get_permalink($post) ?>" class="card" style="border-radius: 20px;">

                        <img src="<?= $testimonial["clientimg"]['url'] ?>" alt="<?= $testimonial['clientimg']['alt'] ?>"
                            class="card-img-top" style="height: 213px; border-radius: 10px;" />

                        <!-- CARD BODY -->
                        <div class="card-body mt-3 mb-0 pb-4 px-4 h-10 position-relative" style="overflow: hidden;">
                            <div class="card-title">
                                <span><?= $testimonial["clientname"] ?></span>
                            </div>
                            <p class="card-text"><?= $post->post_title ?></p>
                            <div class="bottom-border position-absolute"
                                style="bottom: 0; left: 0; right: 0; height: 10px; border-bottom: 1px solid #CBCFDE; border-radius: 0 0 30px 30px;">
                            </div>
                        </div>
                        <!-- END OF CARD BODY -->

                        <!-- View Button -->
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <button>
                                <span class="circle blue-circle">
                                    <div class="d-flex justify-content-center align-items-center arrow">
                                        <img src="<?= get_template_directory_uri() ?>/images/arrowbtn.svg"
                                            alt="go to article" style="width: 12px; height: 18px; margin: 7px 0"
                                            class="icon" />
                                    </div>
                                </span>
                                <div class="button-text blue2">
                                    view
                                </div>
                            </button>
                        </div>

                    </a>

                </div>
                <?php
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>



</main>
<?php get_footer() ?>