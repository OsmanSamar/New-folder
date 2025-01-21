<?php get_header();

//Template Name: financial
?>

<main class="financial flex-grow-1">

    <style>
    .letstalk-btn a:hover img {
        transform: translateX(6px);
        transition: transform 0.2s ease;
    }

    .right-side,
    .right_col2 {
        margin-top: 40px;

    }

    .why-sue-title {
        color: #25325F;
        font-family: Manrope;
        font-size: 26px;
        font-style: normal;
        font-weight: 700;
        line-height: 39px;
    }

    .why-sue-text {
        color: #25325F;
        font-family: Manrope;
        font-size: 15px;
        font-style: normal;
        font-weight: 500;
        line-height: 27px;
    }

    .why-sue-text1 {
        color: #6A7291;
        font-family: Manrope;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 27.2px;
    }

    .cloud-projects {
        border-radius: 40px;
        background: #FFF;
        max-width: 1700px;
        height: 837px;
        padding: 16px;
        margin-top: 50px;
        height: 1745px;
        /* margin: 150px auto 100px; */
        margin: 50px auto 10px;
    }

    .cloud-projects-title {
        color: #25325F;
        font-family: Manrope;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: 39px;
    }

    .cloud-projects-row {
        display: flex;
        flex-direction: column;
        align-items: flex-start;

    }


    .view-all-link {
        color: #25325F;
        font-family: Manrope;
        font-size: 24px;
        font-style: normal;
        font-weight: 600;
        line-height: 15.6px;

    }


    .view-btn {
        background-color: #E94271;
        height: 30px;
        width: 30px;
        border-radius: 8px;
        background: #25325F;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .challenge-title {
        color: #CBCFDE;
        font-family: Manrope;
        font-size: 15px;
        font-style: normal;
        font-weight: 600;
        line-height: 27px;
    }

    .challenge-text {
        color: #FFF;
        font-family: Manrope;
        font-size: 21px;
        font-style: normal;
        font-weight: 700;
        line-height: 33.6px;
        margin-top: 20px;
    }

    .first-name-name {
        display: flex;
        flex-direction: column;
    }

    .right-col-form {
        margin-top: unset;
    }

    .container-max-width {
        border-radius: 30px;
        max-width: 1700px;
        height: 581px;
        margin: 200px auto 10px;
    }

    .container-max-width .container-img {
        display: none;
    }

    b,
    strong {
        color: #e94271;
        font-family: inherit;
        font-size: inherit;
        font-style: inherit;
        line-height: inherit;
    }

    .hero_white_block {
        height: 100%;
        border-radius: 40px;
        background: #FFF;
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
        color: #25325F;
        font-family: Sora;
        font-size: 45px;
        font-style: normal;
        font-weight: 700;
        line-height: 54px;
        margin-top: 45px;
        margin-bottom: 31px;
    }

    .hero_text {
        color: #6A7291;
        font-family: Manrope;
        font-size: 17px;
        font-style: normal;
        font-weight: 700;
        line-height: 27.2px;
        width: 353px;
        /* height: 158px; */
        margin-bottom: 31px;
    }

    .left_col2 {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        gap: 2px;
    }

    .left_col,
    .right_col {
        display: flex;
        align-items: flex-start;
        justify-content: left;
        flex-direction: column;
        gap: 1px;
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
        margin: 10px auto;
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



    .block_blue {
        border-radius: 40px;
        background: #274083;
        max-width: 1700px;
        flex-direction: column;
        margin: 50px auto 10px;
    }


    .left-side-width {
        margin-top: 50px;
        padding: 24px;

    }

    .testimonial-card {
        border-radius: 15px;
        background-color: #FFF;
        margin: 15px 0;
        padding: 27px 40px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }


    .testimonial-card>* {
        margin: 5px 0;
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


    .blue-container {
        border-radius: 40px;
        background: #25325F;
        height: 400px;
        max-width: 1700px;
        padding: 30px;
        margin: 2rem auto;
    }


    .articles_page_link::after {
        content: "";
        display: inline-block;
        width: 1px;
        height: 21px;
        opacity: 0.25;
        /* background: #CBCFDE; */
        background: green;
        margin-left: 13px;
        margin-right: 13px;
        vertical-align: middle;
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
        /* align-items: center; */
        align-items: flex-start;
        /* justify-content: space-between; */
        justify-content: space-around;
        /* gap: 1rem; */
        flex-direction: column;
    }

    .left-side-img-text {
        display: flex;
        gap: 1rem;
        justify-content: center;
        flex-direction: row;
        align-items: flex-start;

    }

    .name-class {
        display: flex;
        justify-content: center;
        flex-direction: column;

    }

    .form_section {
        border-radius: 30px;
        background: #25325F;
        max-width: 1700px;
        height: 1400px;
        margin: 50px auto 50px;
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
        align-items: center;
        margin-top: 30px;
        gap: 50px;

    }

    .arrow_section {

        width: 57.851px;
        height: 92.371px;
        flex-shrink: 0;
    }



    @media (min-width: 768px) {
        .left-content {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }


        .border-left {
            border-left: 1px solid white;
            display: flex;
            flex-direction: column;
            padding: 20px 0 20px 60px;
            row-gap: 16px;
        }

        .right-side,
        .right_col2 {
            margin-top: unset;
        }

        .container-max-width .container-img {
            display: block;
        }

        .img-on-blue-block {
            height: 589px;
            border-radius: 40px;
            object-fit: cover;
        }

        .block_blue {
            height: 589px;
            /* flex-direction: row; */
        }

        .left-side-width {

            max-width: 352px;
        }

        .blue-container {
            height: 212px;
        }

        .container-let-talk {
            flex-direction: row;
        }

        .left-side-img-text {
            align-items: center;
            flex-direction: row;
        }


        .first-name-name {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .hero_white_block {
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

        .cloud-projects {
            height: 1200px;
        }

        .cloud-projects-row {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
        }

        .cloud-projects-title {
            font-size: 23px;
        }

        .view-all-link {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 21px;

        }


    }


    @media (min-width: 992px) {

        .form_section {
            height: 550px;
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

        .right-side,
        .right_col2 {
            margin-top: unset;
        }

        .view-all-link {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            font-size: 13px;

        }

        .cloud-projects {
            height: 706px;
        }

        .cloud-projects-title {
            font-size: 26px;
        }

        .inner_block {
            margin: 10px 60px;
        }

        .first-name-name {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .blue-container {
            height: 212px;
        }

        .container-let-talk {
            flex-direction: row;
        }

        .left-side-img-text {
            align-items: center;
            flex-direction: row;
        }

        .name-class {
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
        }

        .lets-talk-gota-question {
            font-size: 35px;
            font-weight: 600;
            line-height: 50.4px;
        }





        .right-col-form {
            margin-top: 67px;
        }

        .hero_white_block {
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




        b,
        strong {
            font-size: inherit;
        }


        .block_blue {
            /* height: 589px; */
            height: 540px;
        }

        .img-on-blue-block {
            height: 540px;
            border-radius: 40px;
            object-fit: cover;
        }

        .left-side-width {
            max-width: 694px;
            padding: 10px;
            display: flex;
            flex-direction: column;
            row-gap: 70px;
        }


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

    <div class="back-to-home" style="margin-top:170px; margin-bottom:-123px; ">
        <a href="<?= get_field("back_to_home")['url'] ?>"
            class="d-flex justify-content-center align-items-center gap-2">
            <img src="<?= get_field("back_home_btn")['url'] ?>" alt="<?= get_field("back_home_btn")['alt'] ?>"
                style="width:20px; height:20px; margin:7px 0;" />

            <span class="separator"><img src="<?= get_field("separator")['url'] ?>"
                    alt="<?= get_field("separator")['alt'] ?>" style="width:3px; height:6px;" /> </span>
            <span class="first">Industries</span>
            <span class="separator"><img src="<?= get_field("separator")['url'] ?>"
                    alt="<?= get_field("separator")['alt'] ?>" style="width:3px; height:6px;" /> </span>
            <span class="last">Financial</span>
        </a>
    </div>



    <!-- Hero Section -->
    <div class="container-max-width">
        <img src="<?= get_field("financial_hero_img")['url'] ?>" alt="<?= get_field("financial_hero_img")['title'] ?>"
            class="container-img" style=" height: 580px; border-radius: 40px; object-fit: cover;" />
        <div class="hero_white_block">
            <div class="container inner_block">
                <div class="d-flex align-items-center justify-content-between gap-2">
                    <div class="d-flex align-items-center justify-content-center rounded "
                        style="width: 30px; height: 30px; background-color:#274083;">
                        <img src="<?= get_field("back_btn")['url'] ?>" alt="<?= get_field("back_btn")['alt'] ?>"
                            style="width: 12px; height: 18px;" />
                    </div>
                    <a href="<?= get_field("back_link")['url'] ?>"
                        style="color:#274083; font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px;  text-decoration: none; ">
                        <?= get_field("back_link")['title'] ?>
                    </a>
                </div>
                <span class="hero_title">
                    <?= get_field("hero_title") ?>
                </span>
                <span class="hero_text">
                    <?= get_field("hero_text") ?>
                </span>
                <!-- Talk to an export btn -->
                <div class="d-flex justify-content-between align-items-center gap-2 letstalk-btn"
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
    <!-- End of Hero Section -->




    <!--Bijdragers Repeater  Swiper On Small -->
    <div class="partners" style="margin-top:50px; margin-bottom: 60px;">
        <div class="position-relative d-block d-lg-none align-items-center  justify-content-between ">
            <div class="swiperbijdragers bijdragers-swiper ">
                <div class="swiper-wrapper">
                    <?php
                    foreach (get_field("bijdragers_testimonials") as $sue) {
                        ?>
                    <div class="swiper-slide d-flex justify-content-center align-items-center"
                        style="width:fit-content;">
                        <div>
                            <a href=" <?= $sue['bijdragers_testimonials_link']['url'] ?>" class="swiper-title-on-sm"
                                target="_blank">
                                <div
                                    class="d-flex flex-row align-items-center justify-content-evenly partners-container">
                                    <img src="<?= $sue['bijdragers_testimonials_img']['url'] ?>"
                                        alt=" <?= $sue['bijdragers_testimonials_img']['alt'] ?>" class=""
                                        style="background:#EDF3F4; width:185px ; height: 61px; object-fit:cover; border-radius: 6px; border: 1px solid #CBCFDE;" />
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>


    <!-- Bijdragers Repeater On LG -->
    <div class="container">
        <div class="row d-none d-md-none d-lg-flex align-items-center justify-content-between"
            style="margin-top:40px; margin-bottom:14px;">
            <?php
            foreach (get_field("bijdragers_testimonials") as $sue) {
                ?>
            <div class="col-auto">
                <!-- col-auto width: 365px;-->
                <a href=" <?= $sue['bijdragers_testimonials_link']['url'] ?>" target="_blank">
                    <div style="border-radius:; height:99px; margin:35px 0;">
                        <div class="d-flex flex-row align-items-center justify-content-center ">
                            <!--  style="border-radius: 6px;border: 1px solid #CBCFDE;background:#EDF3F4; width:165px ; height: 61px; " -->
                            <img src="<?= $sue['bijdragers_testimonials_img']['url'] ?>"
                                alt=" <?= $sue['bijdragers_testimonials_img']['alt'] ?>" class="sue-img"
                                style="background:#EDF3F4; width:185px ; height: 61px; object-fit:cover; border-radius: 6px; border: 1px solid #CBCFDE;" />
                        </div>
                    </div>
                </a>
            </div>

            <?php
            }
            ?>
        </div>
    </div>

    <!-- Third Section -->
    <div class="container">
        <div class="row" style="margin-top:50px;">
            <div class="col-12 col-md-6 col-lg-5">
                <div class="left_col">
                    <div class="left-btn">
                        <?= get_field("left_btn") ?>
                    </div>
                    <span class="title">
                        <?= get_field("financial_left_title") ?> </span>

                    <span class="left-text" style="">
                        <?= get_field("left_text") ?></span>
                </div>
            </div>

            <div class=" col-lg-1 d-none d-lg-block"></div>

            <div class="col-12 col-md-6 col-lg-6">
                <div class="right_col">
                    <span class="right-text">
                        <?= get_field("second_text") ?>
                    </span>
                </div>

            </div>
        </div>
    </div>


    <!-- The Blue Block With Img & Text -->
    <div class="block_blue">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-5">
                <img src="<?= get_field("blue_block_img")['url'] ?>" alt="<?= get_field("blue_block_img")['alt'] ?>"
                    class="img-on-blue-block" />
            </div>
            <div class="col-lg-1 d-none"></div>
            <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-around">
                <div class="left-side-width">
                    <div class="row">
                        <?php
                        $testimonials = get_field("challenge_testimonials");
                        foreach ($testimonials as $index => $testimonial) {
                            if ($index % 2 == 0 && $index != 0) {
                                echo '</div><div class="row">';
                            }
                            ?>
                        <div class="col-12 col-lg-6">
                            <div class="testimonial">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="offering-num"><?= $testimonial["num"] ?></span>
                                    <span class="challenge-title"><?= $testimonial["title"] ?></span>
                                </div>
                                <h3 class="challenge-text"><?= $testimonial["text_cha"] ?></h3>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fifth Section -->
    <div class="container">
        <div class="row" style="margin-top:50px;">
            <div class="col-12 col-md-6 col-lg-5">
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
            <div class=" col-lg-1 d-none d-lg-block"></div>

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


                    <div class="d-flex align-items-center gap-2 mb col">
                        <span class="offering-num"><?= $testimonial["offering_num"] ?></span>
                        <span class="offering-sub-title"><?= $testimonial["offering_sub_title"] ?></span>
                    </div>
                    <h2 class="offering-main-title"> <?= $testimonial["offering_main_title"] ?></h2>
                    <div class="divider mb-3" style="margin: 15px 1px;"></div>
                    <p class="offering-text"><?= $testimonial["offering_text"] ?></p>
                    <!-- READ MORE -->
                    <!-- <a href="<?= $testimonial["offering_link"]['url'] ?>"
                        class="d-flex align-items-center justify-content-left gap-3" style="margin-top:20px;">
                        <div
                            style="background-color:#274083; width:30px; height:30px; border-radius:8px; display: flex; align-items: center;justify-content: center;">
                            <img src="<?= $testimonial["offering_img"]['url'] ?>"
                                alt="<?= $testimonial["offering_img"]['alt'] ?>" style="width: 12px;height: 18px;" />
                        </div>
                        <?= $testimonial["offering_link"]['title'] ?>
                    </a> -->

                    <div class="d-flex align-items-center  gap-2" style="margin-top:20px">
                        <button>
                            <span class="circle blue-circle">
                                <a href="#" class="d-flex justify-content-left align-items-center  arrow">
                                    <img src="<?= $testimonial["offering_img"]['url'] ?>"
                                        alt=" <?= $testimonial["offering_img"]['alt'] ?>"
                                        style="width:12px; height: 18px; margin:7px 0;" class="icon" />
                                </a>
                            </span>
                            <a href="<?= $testimonial["offering_link"]['url'] ?>" class="button-text blue2">
                                <?= $testimonial["offering_link"]['title'] ?>
                            </a>
                        </button>
                    </div>

                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <!--Sue_Offering Repeater  Swiper On Small -->
    <div class="partners" style="margin-top:30px; margin-bottom: ;">
        <div class="position-relative d-block d-lg-none align-items-center  ">
            <div class="swiperoffer sue-offering-swiper ">
                <div class="swiper-wrapper">
                    <?php
                    foreach (get_field("sue_offering_testimonials") as $sue) {
                        ?>
                    <div class="swiper-slide d-flex justify-content-center align-items-center"
                        style="width:fit-content;">
                        <div>
                            <div class="d-flex flex-row align-items-center justify-content-evenly "
                                style="font-size:16px; gap:9px;">
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
            style="margin-top:; margin-bottom:;">
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



    <!-- Blue-container -->
    <div class="blue-container">
        <div class="container-let-talk">
            <!-- Left Side: Image and Texts -->
            <div class="left-side-img-text">
                <img src="<?= get_field('lets_talk_img')['url'] ?>" alt="<?= get_field('lets_talk_img')['alt'] ?>"
                    style="width: 120px;height: 120px; border:15px;">
                <div>
                    <div class="first-name-name ">
                        <span class="first-name"
                            style="display: flex; color: #9AA0B7;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height:27.2px "><?= get_field('lets_talk_first_name') ?></span>
                        <span class="lets-talk-title"
                            style="display: block; color:#9AA0B7;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height: 27.2px"><?= get_field('lets_talk_title') ?></span>
                    </div>
                    <br>
                    <span class="lets-talk-gota-question" style=""><?= get_field('lets_talk_gota_question') ?></span>
                </div>
            </div>
            <!-- Right Side: Text, Email, and Phone -->
            <div
                style="display: flex; flex-direction: column; align-items: flex-start; justify-content:left; gap:0.7rem;">
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


    <!--cloud-projects Section  -->
    <div class="cloud-projects">
        <div class="container">
            <div class="row cloud-projects-row mt-5">
                <div class="col-12 col-lg-6 col-md-6">
                    <span class="cloud-projects-title">
                        <?= get_field("cloud_projects_title") ?>
                    </span>
                </div>
                <div class="col-12 col-lg-6 col-md-6">
                    <a href="<?= get_field("view_all_link")['url'] ?>"
                        class="d-flex  align-items-center gap-2 view-all-link">
                        <!-- justify-content-end -->
                        <div class="view-btn">
                            <img src="<?= get_field("view_btn")['url'] ?>" alt="<?= get_field("view_btn")['alt'] ?>"
                                style="width:12px; height:18px; margin:7px 0;" />
                        </div>
                        <?= get_field("view_all_link")['title'] ?>
                    </a>

                </div>
            </div>

            <div class="row d-flex align-items-center justify-content-start gy-4 mt-1">
                <?php foreach (get_field("financial_projects_testimonials") as $testimonial) { ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card" style="border-radius: 20px; border: 1px solid #CBCFDE; background: #FFF;">
                        <img src="<?= $testimonial["test_img"]['url'] ?>" alt="<?= $testimonial['test_img']['alt'] ?>"
                            class="card-img-top " style="height: 213px; border-radius:20px;" />
                        <!-- CARD BODY -->
                        <div class="card-body mt-3 mb-0 pb-4 px-4 h-10 position-relative"
                            style="background-color:; overflow:hidden;">
                            <div class="card-title">
                                <span><?= $testimonial["test_name"] ?></span>
                            </div>
                            <p class="card-text">
                                <?= $testimonial["test_text"] ?>
                            </p>
                            <div class="d-flex justify-content-start align-items-center gap-2">
                                <p class="industry_title">
                                    <?= $testimonial["text_industry"] ?>
                                </p>
                                <p class="industry">
                                    <?= $testimonial["test_type"] ?>
                                </p>
                            </div>

                            <div class="bottom-border position-absolute"
                                style="bottom:0; left: 0; right:0; height:10px; background-color:; border-bottom:1px solid #CBCFDE; border-radius:0 0 30px 30px;">
                            </div>
                        </div>
                        <!-- END OF CARD BODY -->
                        <!-- Bejijken btn -->
                        <div class=" card-body d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center gap-2">
                                <!-- <div class="d-flex align-items-center justify-content-center"
                                    style="width: 30px; height: 30px;  border-radius: 8px;background: #274083;">
                                    <img src="<?= $testimonial["img_btn"]['url'] ?>"
                                        alt="<?= $testimonial["img_btn"]['alt'] ?>"
                                        style="width: 12px; height: 18px;" />
                                </div>
                                <a href="<?= $testimonial['test_link']['url'] ?>" class="text-decoration-none">
                                    <?= $testimonial["test_link"]['title'] ?>
                                </a> -->
                                <button>
                                    <span class="circle blue-circle">
                                        <a href="<?= $testimonial['test_link']['url'] ?>"
                                            class="d-flex justify-content-center align-items-center  arrow" href="#">
                                            <img src="<?= $testimonial["img_btn"]['url'] ?>"
                                                alt="<?= $testimonial["img_btn"]['alt'] ?>"
                                                style="width: 12px; height: 18px; margin:7px 0" class="icon" />
                                        </a>
                                    </span>
                                    <!-- <?= get_field("lets_talk_link")['title'] ?> -->
                                    <span class="button-text blue2"><?= $testimonial["test_link"]['title'] ?></span>
                                </button>

                            </div>
                            <img src="<?= $testimonial["knp_img"]['url'] ?>" alt="<?= $testimonial["knp_img"]['alt'] ?>"
                                style="width: 63px; height: 24px;" />
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

        </div>
    </div>



    <!--Why-Sue  Section -->
    <div class="container">

        <div class="row " style="margin-top:50px;">
            <div class="col-12 col-md-6 col-lg-5 ">
                <div class="d-flex flex-column  justify-content-center align-items-start gap-3">
                    <span class="left-btn"><?= get_field("why_sue_sub_title") ?></span>
                    <span class="why-sue-title"><?= get_field("why_sue_title") ?></span>
                    <span class="why-sue-text1"><?= get_field("why_sue_text") ?> </span>
                    <!-- Let's talk btn -->
                    <div class="d-flex justify-content-between align-items-center gap-2 letstalk-btn"
                        style="height:42.261px;padding: 12px 15px; border-radius: 8px;background: #E94271;">
                        <a href="<?= get_field("why_sue_link")['url'] ?>" target="_blank"
                            style="color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px; display: flex; align-items: center; gap:8px; text-decoration: none; ">
                            <img src="<?= get_field("why_sue_img")['url'] ?>"
                                alt="<?= get_field("why_sue_img")['alt'] ?>" style="width: 12px; height: 18px;" />
                            <?= get_field("why_sue_link")['title'] ?>
                        </a>
                    </div>
                </div>

            </div>
            <div class=" col-lg-1 d-lg-block d-none"></div>

            <div class="col-12 col-lg-6 col-md-6 right-side ">
                <span class="why-sue-text"><?= get_field("why_sue_first_right_text") ?></span>
            </div>
        </div>
    </div>



    <!-- Form Section container  -->
    <?php get_template_part('components/form') ?>
    <!-- End of Form Section -->



    <!-- Related Financial articles -->
    <div class="container" style="margin-top:50px;">
        <div class="row cloud-projects-row">
            <div class="col-12 col-md-6 col-lg-6">
                <span class="cloud-projects-title">
                    <?= get_field("related_financial_articles_title") ?>
                </span>
            </div>
            <div class="col-12  col-md-6  col-lg-6">
                <a href="<?= get_field("niew_all_our_knowledge_link")['url'] ?>"
                    class="d-flex align-items-center gap-2 view-all-link" target="_blank">
                    <div class="view-btn">
                        <img src="<?= get_field("niew_all_our_knowledge_btn")['url'] ?>"
                            alt="<?= get_field("niew_all_our_knowledge_btn")['alt'] ?>"
                            style="width:12px; height:18px; margin:7px 0;" />
                    </div>
                    <?= get_field("niew_all_our_knowledge_link")['title'] ?>
                </a>

            </div>
        </div>




        <div class="row d-flex align-items-center justify-content-start gy-4 mt-5">
            <?php foreach (get_field("financial_articles_testimonails") as $testimonial) { ?>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card" style=" border-radius: 20px;border: 1px solid #CBCFDE; background-color:#EDF3F4;">
                    <img src="<?= $testimonial["articles_img"]['url'] ?>"
                        alt="<?= $testimonial['articles_img']['alt'] ?>" class="card-img-top "
                        style="height: 213px; border-radius:20px; " />

                    <!-- CARD BODY -->
                    <div class="card-body mt-3 mb-0 pb-4 px-4 h-10 position-relative"
                        style="background-color:; overflow:hidden;">
                        <div class="card-title">
                            <span><?= $testimonial["articles_date"] ?></span>
                        </div>
                        <div class=" d-flex align-items-center  gap-2 ">
                            <span class="card-text">
                                <?= $testimonial["articles_text"] ?>
                                <a href="<?= $testimonial['articles_link']['url'] ?>">
                                    <img src="<?= $testimonial["articles_btn"]['url'] ?>"
                                        alt="<?= $testimonial["articles_btn"]['alt'] ?>"
                                        style="width:4px; height: 8px; margin-left:8px;" />

                                </a>

                            </span>
                        </div>
                        <div class="d-flex justify-content-start align-items-center gap-2" style="margin-top:15px;">
                            <p class="industry_title">
                                <?= $testimonial["articles_author"] ?>
                            </p>
                            <p class="industry">
                                <?= $testimonial["articles_author_name"] ?>
                            </p>
                        </div>
                        <div class="bottom-border position-absolute"
                            style="bottom:0; left: 0; right:0; height:10px; background-color:; border-bottom:1px solid #CBCFDE; border-radius:0 0 30px 30px;">
                        </div>
                    </div>
                    <!-- END OF CARD BODY -->
                    <!-- Bekijken btn -->
                    <div class="card-body d-flex justify-content-start align-items-center gap-2"
                        style="flex-wrap: wrap;">
                        <a href="<?= $testimonial['articles_consultancy']['url'] ?>" class="d-block articles_page_link">
                            <?= $testimonial['articles_consultancy']['title'] ?>
                        </a>
                        <a href="<?= $testimonial['articales_data_&_ai']['url'] ?>" class="d-block articles_page_link">
                            <?= $testimonial['articales_data_&_ai']['title'] ?>
                        </a>
                        <a href="<?= $testimonial['articales_financieel']['url'] ?> "
                            class="d-block articles_page_link">
                            <?= $testimonial['articales_financieel']['title'] ?>
                        </a>
                        <a href="<?= $testimonial['articales_gezondheidszorg']['url'] ?> "
                            class="d-block articles_page_link">
                            <?= $testimonial['articales_gezondheidszorg']['title'] ?>
                        </a>
                        <a href="<?= $testimonial['articales_ecss']['url'] ?>" class="href">
                            <?= $testimonial['articales_ecss']['title'] ?>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>


    </div>

































    <!-- Bijdragers-swiper -->
    <script>
    let swiperbijdragers = new Swiper('.bijdragers-swiper', {
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
                slidesPerView: 1.8,
                spaceBetween: 1,

            },

            412: {
                slidesPerView: 1.9,
                spaceBetween: 1,

            },

            540: {
                slidesPerView: 3.3,
                spaceBetween: 1,

            },

            556: {
                slidesPerView: 3.6,


                spaceBetween: 1,
            },
            992: {

                slidesPerView: 4.3,
                spaceBetween: 1,
            },
            1024: {

                slidesPerView: 5,
                spaceBetween: 1,
            }


        }
    })
    </script>



    <script>
    let swiperoffer = new Swiper('.sue-offering-swiper', {
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
                slidesPerView: 1.3,
                spaceBetween: 1,

            },
            412: {
                slidesPerView: 1.5,
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
                spaceBetween: 1,
            }


        }
    })
    </script>


</main>



<?php get_footer() ?>