<?php get_header();

//Template Name: hybridcloud
?>

<main class="hybridcloud flex-grow-1">
    <style>
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
        font-size: 17px;
        font-style: normal;
        font-weight: 600;
        line-height: 50.4px;
    }

    .container-let-talk {
        display: flex;
        /* align-items: center; */
        align-items: flex-start;
        /* justify-content: space-between; */
        justify-content: space-around;
        /* gap: 1rem; */
        flex-direction: column;
    }

    .blue-container {
        border-radius: 40px;
        background: #25325F;
        height: 412px;
        max-width: 1700px;
        padding: 47px;
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
        font-size: 45px;
        font-style: normal;
        font-weight: 700;
        line-height: 54px;
        margin-top: 45px;
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

    .left-text,
    .right-text {
        color: #6A7291;
        font-family: Manrope;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 27.2px;
    }

    .title {
        color: #25325F;
        font-family: Manrope;
        font-size: 26px;
        font-style: normal;
        font-weight: 700;
        line-height: 39px;
        margin: 30px 0px;
    }


    .partners-container {
        border-radius: 6px;
        border: 1px solid #CBCFDE;
        background: #EDF3F4;
        width: 232px;
        height: 52px;
    }

    .sue-offering-container {
        border-radius: 6px;
        border: 1px solid #CBCFDE;
        background: #EDF3F4;
        width: 268px;
        height: 52px;
    }

    /* .swiper-title-on-sm {
        font-size: 12px;
    } */




    .block_blue {
        border-radius: 40px;
        background: #274083;
        margin: 80px auto;
        width: 100%;
        max-width: 1700px;
        position: relative;
        overflow: hidden;
        padding: 20px;
        display: flex;
        flex-direction: column;
    }

    .blue_block_img img {
        width: 100%;
        height: auto;
        border-radius: 40px;
        object-fit: cover;
    }

    .left-side-text {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        gap: 30px;
        text-align: left;
        margin-top: 38px;
    }

    .btn-container {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
    }

    .first_btn {
        display: inline-flex;
        height: 30px;
        padding: 3px 16px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 100px;
        background: #FFF;
    }

    .second-btn {
        display: inline-flex;
        height: 30px;
        padding: 3px 16px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 100px;
        background: #25325F;
    }

    .se-btn-text {
        color: #FFF
    }

    .f-btn-text {
        color: #274083;
    }

    .f-btn-text,
    .se-btn-text {

        font-family: Manrope;
        font-size: 12px;
        font-style: normal;
        font-weight: 500;
        line-height: 19px;
    }


    .text-on-blue-block {
        color: #FFF;
        font-family: Manrope;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 33.6px;
        /* width: 534px; */
        height: 238px;
    }


    .read-the-full-story-link {
        color: #FFF;
        font-family: Manrope;
        font-size: 13px;
        font-style: normal;
        font-weight: 600;
        line-height: 15.6px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        text-align: center;
    }



    .left2-text,
    .right2-text {
        color: #25325F;
        font-family: Manrope;
        font-size: 15px;
        font-style: normal;
        font-weight: 500;
        line-height: 27px;
    }

    .left_col2,
    .right_col2 {
        display: flex;
        align-items: flex-start;
        justify-content: left;
        flex-direction: column;
        gap: 4px;
    }


    .testimonial-card {
        border-radius: 15px;
        background-color: #FFF;
        /* max-width: 356px; */
        height: 277px;
        margin: 15px 0;
        padding: 27px;
        height: 337px;
    }


    .offering-num {
        color: #E94271;
        font-family: Manrope;
        font-size: 14px;
        font-weight: 700;
        line-height: 23.8px;
    }

    .offering-sub-title {
        font-size: 14px;
        font-weight: 700;
        line-height: 23.8px;
        color: #6A7291;
        font-family: Manrope;
    }

    .offering-main-title {
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

    .offering-text {
        font-size: 13px;
        font-weight: 500;
        line-height: 22px;
        color: #6A7291;
        font-family: Manrope;
        text-align: left;
    }

    .left-side-img-text {
        display: flex;
        /* align-items: center; */
        gap: 1rem;
        justify-content: flex-start;
        flex-direction: column;
    }


    @media (min-width: 768px) {

        .block_blue {
            height: 589px;
            flex-direction: row;
        }

        .blue_block_img {
            height: 100%;

        }

        .left-side-text {
            position: absolute;
            text-align: left;
            gap: 20px;
            max-width: 384px;
            margin: auto 0;
            top: 5%;
            left: 50%;
        }

        .btn-container {
            gap: 1rem;
        }

        .left-side-img-text {
            flex-direction: row;
        }

        .container-let-talk {
            flex-direction: row;
        }

        .left-side-img-text {
            align-items: center;
        }

        .blue-container {
            height: 212px;
        }



    }

    @media (min-width: 992px) {
        .hero_blue_block {
            width: 531px;
            position: absolute;
            bottom: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: left;
            padding: 30px;

        }

        .left-text,
        .right-text {
            width: 504px;
        }

        .title {
            width: 504px;
            height: 99px;
        }

        .block_blue {
            height: auto;
        }

        .blue_block_img {
            width: 100%;
            height: auto;
        }

        .left-side-text {
            text-align: left;
            position: absolute;
            gap: 20px;
            max-width: 384px;
            margin: auto 0;
            top: 25%;
            left: 50%;
        }

        .btn-container {
            gap: 1rem;
        }

        .text-on-blue-block {
            width: 534px;
            font-size: 21px;
        }

        .right_col2 {
            width: 546px;
        }

        .left_col2 {
            width: 546px;
        }



        .f-btn-text,
        .se-btn-text {
            color: #274083;
            font-family: Manrope;
            font-size: 13px;
            font-style: normal;
            font-weight: 700;
            line-height: 23.4px;
        }

        .left-side-img-text {
            flex-direction: row;
        }

        .container-let-talk {
            flex-direction: row;
        }

        .left-side-img-text {
            align-items: center;
        }

        .blue-container {
            height: 212px;
        }

        .lets-talk-gota-question {
            font-size: 35px;
        }

    }
    </style>
    <div class="" style="margin-top:190px; position:relative; max-width: 1700px; overflow: hidden;">
        <img src="<?= get_field("hybridcloud_hero")['url'] ?>" alt="<?= get_field("hybridcloud_hero")['title'] ?>"
            class="" style="width: 100%; height: 581px; border-radius: 40px; object-fit: cover;" />
        <div class="hero_blue_block">
            <div class="inner_block">
                <div class="d-flex align-items-center justify-content-between gap-2">
                    <div class="d-flex align-items-center justify-content-center rounded "
                        style="width: 30px; height: 30px; background-color:#FFF;">
                        <img src="<?= get_field("back_img")['url'] ?>" alt="<?= get_field("back_img")['alt'] ?>"
                            style="width: 12px; height: 18px;" />
                    </div>
                    <a href="<?= get_field("back_to_all_expertises_link")['url'] ?>"
                        style="color:#FFF; font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px;  text-decoration: none; ">
                        <?= get_field("back_to_all_expertises_link")['title'] ?>
                    </a>
                </div>
                <span class="hero_title">
                    <?= get_field("hero_title") ?>
                </span>
                <span class="hero_text">
                    <?= get_field("hero_text") ?>
                </span>
                <!-- Talk to an export btn -->
                <div class="d-flex justify-content-between align-items-center gap-2"
                    style="height:42.261px;padding: 12px 15px; border-radius: 8px;background: #E94271;">
                    <a href="<?= get_field("talk_to_an_expert_btn")['url'] ?>"
                        style="color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px; display: flex; align-items: center; gap:8px; text-decoration: none; ">
                        <img src="<?= get_field("talk_to_an_expert_img")['url'] ?>"
                            alt="<?= get_field("talk_to_an_expert_img")['alt'] ?>" style="width: 12px; height: 18px;" />
                        <?= get_field("talk_to_an_expert_btn")['title'] ?>
                    </a>
                </div>
            </div>
        </div>
    </div>




    <!-- Second Section -->
    <div class="container">
        <div class="row" style="margin-top:100px;">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="left_col">
                    <div class="left-btn">
                        <?= get_field("onsectetur_adipiscing_elit_title") ?>
                    </div>
                    <span class="title">
                        <?= get_field("main_title") ?> </span>

                    <span class="left-text" style="">
                        <?= get_field("left_text") ?></span>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="right_col">
                    <span class="right-text">
                        <?= get_field("second_text") ?>
                    </span>
                </div>

            </div>
        </div>
    </div>


    <!--Sue_Partners Repeater  Swiper On Small -->
    <div class="partners" style="margin-top:50px; margin-bottom: 60px;">
        <div class="position-relative d-block d-lg-none align-items-center  ">
            <div class="swipersue2 sue-partners-swiper2 ">
                <div class="swiper-wrapper">
                    <?php
                    foreach (get_field("sue_partner_testimonials") as $sue) {
                        ?>
                    <div class="swiper-slide d-flex justify-content-center align-items-center"
                        style="width:fit-content;">
                        <div>
                            <div class="d-flex flex-row align-items-center justify-content-evenly partners-container">
                                <a href=" <?= $sue['sue_partners_link']['url'] ?>" class="swiper-title-on-sm">
                                    <img src="<?= $sue['sue_partners_img']['url'] ?>"
                                        alt=" <?= $sue['sue_partners_img']['alt'] ?>" class="sue-img"
                                        style=" width:32px; height:19px; " />
                                </a>

                                <?= $sue['sue_partners_link']['title'] ?>
                                <img src="<?= $sue['sue_partners_btn']['url'] ?>"
                                    alt=" <?= $sue['sue_partners_btn']['alt'] ?>" class=""
                                    style="width:4px; height:8px; object-fit:cover " />

                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>


    <!-- Sue_Partners Repeater On LG -->
    <div class="container">
        <div class="row d-none d-md-none d-lg-flex flex-row align-items-center justify-content-between"
            style="margin-top:40px; margin-bottom:14px;">
            <?php
            foreach (get_field("sue_partner_testimonials") as $sue) {
                ?>
            <div class="col-auto">
                <a href=" <?= $sue['sue_partners_link']['url'] ?>">
                    <div style="border-radius:15px; height:99px; margin:35px 0;">
                        <div class="d-flex flex-row align-items-center justify-content-evenly "
                            style="border-radius: 6px;border: 1px solid #CBCFDE;background:#EDF3F4; width: 365px; height: 61px; ">
                            <img src="<?= $sue['sue_partners_img']['url'] ?>"
                                alt=" <?= $sue['sue_partners_img']['alt'] ?>" class="sue-img"
                                style="width:56px;height:33px;flex-shrink: 0; object-fit: " />

                            <?= $sue['sue_partners_link']['title'] ?>
                            <img src="<?= $sue['sue_partners_btn']['url'] ?>"
                                alt=" <?= $sue['sue_partners_btn']['alt'] ?>" class=""
                                style="width:4px; height:8px; object-fit:cover " />

                        </div>
                    </div>
                </a>
            </div>

            <?php
            }
            ?>
        </div>
    </div>


    <div class="block_blue">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 blue_block_img ">
                <img src="<?= get_field("blue_block_img")['url'] ?>" alt="<?= get_field("blue_block_img")['alt'] ?>" />
            </div>
            <div class="">
                <div class="col-12 col-md-6 col-lg-7 d-flex align-items-center justify-content-center">
                    <div class="left-side-text">
                        <div class="btn-container ">
                            <div class="first_btn">
                                <span class="f-btn-text">
                                    <?= get_field("gguus_meijer_text") ?>
                                </span>
                            </div>
                            <div class="second-btn">
                                <span class="se-btn-text"> <?= get_field("coo_text") ?></span>
                            </div>
                        </div>
                        <span class="text-on-blue-block">
                            <?= get_field("text_on_blue_block") ?></span>
                        <div>
                            <a href="<?= get_field("read_the_full_story_link")['url'] ?>"
                                class="read-the-full-story-link ">
                                <div
                                    style="background-color:white;width: 30px;height: 30px; border-radius:8px; display: flex; align-items: center;justify-content: center;">
                                    <img src="<?= get_field("read_the_full_story_img")['url'] ?>"
                                        alt="<?= get_field("read_the_full_story_img")['alt'] ?>"
                                        style="width: 12px;height: 18px;" />
                                </div>
                                <?= get_field("read_the_full_story_link")['title'] ?>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fifth Section -->
    <div class="container">
        <div class="row" style="margin-top:100px;">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="left_col2">
                    <div class="left-btn">
                        <?= get_field("left_btn_title") ?>
                    </div>
                    <span class="title">
                        <?= get_field("left_main_title") ?>
                    </span>


                    <span class="left2-text" style="">
                        <?= get_field("f_text_on_left") ?></span>
                    <span class="left2-text" style="">
                        <?= get_field("se_left_on_text") ?></span>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="right_col2">
                    <span class="right2-text">
                        <?= get_field("f_text_on_right") ?>
                    </span>
                    <span class="right2-text">
                        <?= get_field("se_text_on_right") ?>
                    </span>
                    <span class="right2-text">
                        <?= get_field("third_text_on_right") ?>
                    </span>


                </div>

            </div>
        </div>
    </div>





    <!-- Testimonials Section on All Screens -->
    <div class="container mt-5">
        <div class="row gy-2">
            <?php foreach (get_field("offering_testimonails") as $testimonial) { ?>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="testimonial-card">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span class="offering-num"><?= $testimonial["offering_num"] ?></span>
                        <span class="offering-sub-title"><?= $testimonial["offering_title"] ?></span>
                    </div>
                    <h2 class="offering-main-title"> <?= $testimonial["offering_main_title"] ?></h2>
                    <div class="divider mb-3" style="margin: 15px 1px;"></div>
                    <p class="offering-text"><?= $testimonial["offering_text"] ?></p>
                    <a href="<?= $testimonial["offering_link"]['url'] ?>"
                        class="d-flex align-items-center justify-content-left gap-3">
                        <div
                            style="background-color:#274083; width:30px; height:30px; border-radius:8px; display: flex; align-items: center;justify-content: center;">
                            <img src="<?= $testimonial["offering_img"]['url'] ?>"
                                alt="<?= $testimonial["offering_img"]['alt'] ?>" style="width: 12px;height: 18px;" />
                        </div>
                        <?= $testimonial["offering_link"]['title'] ?>
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>




    <!--Sue_Offering Repeater  Swiper On Small -->
    <div class="partners" style="margin-top:50px; margin-bottom: 60px;">
        <div class="position-relative d-block d-lg-none align-items-center  ">
            <div class="swipersue3 sue-offering-swiper3 ">
                <div class="swiper-wrapper">
                    <?php
                    foreach (get_field("sue_offering_testimonials") as $sue) {
                        ?>
                    <div class="swiper-slide d-flex justify-content-center align-items-center"
                        style="width:fit-content;">
                        <div>
                            <div
                                class="d-flex flex-row align-items-center justify-content-evenly sue-offering-container">
                                <a href=" <?= $sue['sue_offering_link']['url'] ?>" class="swiper-title-on-sm">
                                    <div
                                        style="background-color:#274083; width:30px; height:30px; border-radius:8px; display: flex; align-items: center;justify-content: center;">
                                        <img src="<?= $sue['sue_offering_img']['url'] ?>"
                                            alt=" <?= $sue['sue_offering_img']['alt'] ?>" class="sue-img"
                                            style="width: 12px;height: 18px;" />
                                    </div>
                                </a>
                                <?= $sue['sue_offering_link']['title'] ?>
                            </div>
                        </div>
                    </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>


    <!-- Sue_Offering Repeater On LG -->
    <div class="container">
        <div class="row d-none d-md-none d-lg-flex flex-row align-items-center justify-content-between"
            style="margin-top:40px; margin-bottom:14px;">
            <?php
            foreach (get_field("sue_offering_testimonials") as $sue) {
                ?>
            <div class="col-auto">
                <a href=" <?= $sue['sue_offering_link']['url'] ?>">
                    <div style="border-radius:6px; height:99px; margin:35px 0;">
                        <div class="d-flex flex-row align-items-center justify-content-evenly "
                            style="border-radius: 6px;border: 1px solid #CBCFDE;background:#EDF3F4; width: 356px; height: 65px; ">
                            <div
                                style="background-color:#274083; width:30px; height:30px; border-radius:8px; display: flex; align-items: center;justify-content: center;">
                                <img src="<?= $sue['sue_offering_img']['url'] ?>"
                                    alt=" <?= $sue['sue_offering_img']['alt'] ?>" class="sue-img"
                                    style="width: 12px;height: 18px;" />
                            </div>
                            <?= $sue['sue_offering_link']['title'] ?>
                        </div>
                    </div>
                </a>
            </div>

            <?php
            }
            ?>
        </div>
    </div>


    <div class="blue-container" style="">
        <div class="container-let-talk" style="">
            <!-- Left Side: Image and Texts -->
            <div class="left-side-img-text" style="">
                <img src="<?= get_field('lets_talk_img')['url'] ?>" alt="<?= get_field('lets_talk_img')['alt'] ?>"
                    style="width: 110px;height: 110px; border:15px;">
                <div>
                    <div class="d-flex align-items-center">
                        <span class="first-name"
                            style="display: block; color: #9AA0B7;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height:27.2px "><?= get_field('lets_talk_first_name') ?></span>
                        <span class="lets-talk-title"
                            style="display: block; color:#9AA0B7;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height: 27.2px"><?= get_field('lets_talk_title') ?></span>
                    </div>
                    <br>
                    <span class="lets-talk-gota-question" style=""><?= get_field('lets_talk_gota_question') ?></span>
                </div>
            </div>
            <!-- Right Side: Text, Email, and Phone -->
            <div
                style="display: flex; flex-direction: column; align-items: flex-start; justify-content:left; gap:1rem;">
                <span style="color: #FFF;"><?= get_field('lets_talk_word') ?></span>
                <div style="display: flex; align-items: center; gap: 0.5rem;">
                    <div
                        style="background-color:#E94271; width: 30px; height: 30px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                        <img src="<?= get_field('lets_talk_btn')['url'] ?>"
                            alt="<?= get_field('lets_talk_btn')['alt'] ?>" style="width: 12px; height: 18px;">
                    </div>
                    <span style="color: #FFF;"><?= get_field('lets_talk_mail') ?></span>
                </div>
                <div style="display: flex; align-items: center; gap: 0.5rem;">
                    <div
                        style="background-color:#FFF; width: 30px; height: 30px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                        <img src="<?= get_field('lets_talk_phone_link')['url'] ?>"
                            alt="<?= get_field('lets_talk_phone_link')['alt'] ?>" style="width: 12px; height: 18px;">
                    </div>
                    <span style="color: #FFF;"><?= get_field('lets_talk_phone_number') ?></span>
                </div>
            </div>
        </div>
    </div>
























    <!--  sue-partners-swiper -->
    <script>
    let swipersue2 = new Swiper('.sue-partners-swiper2', {
        slidesPerView: 1.5,
        grabCursor: true,
        spaceBetween: 1,

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {

            360: {
                slidesPerView: 1.6,
                spaceBetween: 1,

            },

            540: {
                slidesPerView: 2.5,
                spaceBetween: 1,

            },

            556: {
                slidesPerView: 3,


                spaceBetween: 1,
            },
            992: {

                slidesPerView: 2.2,
                spaceBetween: 1,
            },
            1024: {

                slidesPerView: 3,
                spaceBetween: 1,
            }


        }
    })
    </script>


    <script>
    let swipersue3 = new Swiper('.sue-offering-swiper3', {
        slidesPerView: 1.5,
        grabCursor: true,
        spaceBetween: 1,

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {

            360: {
                slidesPerView: 1.4,
                spaceBetween: 1,

            },

            540: {
                slidesPerView: 2,
                spaceBetween: 1,

            },

            556: {
                slidesPerView: 2.7,


                spaceBetween: 1,
            },
            992: {

                slidesPerView: 2.7,
                spaceBetween: 1,
            },
            1024: {

                slidesPerView: 3,
                spaceBetween: 0,
            }


        }
    })
    </script>

</main>



<?php get_footer() ?>