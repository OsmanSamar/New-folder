<?php get_header();

//Template Name: multistax
?>

<main class="multistax flex-grow-1  d-flex  justify-content-center w-100   bg ">
    <!--  bg -->
    <style>
    .letstalk-btn a:hover img {
        transform: translateX(6px);
        transition: transform 0.2s ease;
    }

    body {
        color: #39456E;
        font-family: Manrope, sans-serif;
    }

    b,
    strong {
        color: #e94271;
        font-family: inherit;
        font-size: inherit;
        font-style: inherit;
        line-height: inherit;
    }

    .bg {
        color: #39456E;
        /* background: linear-gradient(147deg, rgba(36, 50, 95, 0.00) 9.21%, #263E7B 107.54%); */
        /* background: #263E7B; */
        background: #263E61;
        min-height: 100vh;

    }

    .left-btn {

        display: inline-flex;
        height: 30px;
        padding: 3px 16px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        flex-shrink: 0;
        border-radius: 100px;
        background: #274083;
        text-align: center;
        color: #FFF;
        font-family: Manrope;
        font-size: 13px;
        font-style: normal;
        font-weight: 700;
        line-height: 23.4px;
    }

    .hero-title {
        color: #FFF;
        text-align: center;
        font-feature-settings: 'ss01'on;
        font-family: Sora;
        font-size: 45px;
        font-style: normal;
        font-weight: 700;
        line-height: 54px;
    }

    .hero-text {
        color: #9AA0B7;
        text-align: center;
        font-family: Manrope;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 27.2px;
    }

    .first,
    .last {
        color: #FFF;
        font-family: Manrope;
        font-size: 13px;
        font-style: normal;
        font-weight: 700;
        line-height: 23.4px;
    }

    .swiper-container {
        position: relative;
        /* 1 */
        /* position: absolute; */
        width: 70%;
        margin: 0 auto;
    }

    /* 1 */
    /* .swiper-pagination {
            position: relative;
        } */
    /* 2 */
    .swiper-wrapper {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 1;
        display: flex;
        transition-property: transform;
        box-sizing: content-box;
    }

    .swiper-slide {
        height: auto;
        width: auto;
        flex-shrink: 0;
    }

    .swiper-container .swiper-pagination {
        /* Added */
        position: relative;
        bottom: -116px !important;
        /*  */
        /* bottom: -30px !important; */

    }


    .swiper-pagination-bullet {
        background-color: #FFF !important;
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




    .blue-block-partner {
        border-radius: 20px;
        max-width: 100vw;
        margin: 4rem auto;
        background: #25325F;
        height: 530px;
    }


    .mySwiper2 {
        width: 100%;

    }

    .mySwiper2 .swiper-slide {
        margin: 0;
        padding: 0;
    }


    .sue-main-title {
        color: #FFF;
        text-align: center;
        font-family: Sora;
        font-size: 26px;
        font-style: normal;
        font-weight: 600;
        line-height: 50.4px;
    }


    .main-left-title {
        color: #FFF;
        font-family: Manrope;
        font-size: 26px;
        font-style: normal;
        font-weight: 700;
        line-height: 39px;
    }

    .left-text {
        color: #CBCFDE;
        font-family: Manrope;
        font-size: 15px;
        font-style: normal;
        font-weight: 500;
        line-height: 27px;
    }


    button {
        position: relative;
        /* display: inline-block; */
        display: inline-grid;
        cursor: pointer;
        outline: none;
        vertical-align: middle;
        text-decoration: none;
        border: 0;
        background: transparent;
        padding: 0;
        font-size: inherit;
        font-family: inherit;
    }

    button .circle {
        justify-content: center;
        display: inline-flex;
        position: relative;
        z-index: 1;
        height: 30px;
        width: 30px;
    }



    button .button-text {
        /* position: absolute; */
        position: relative;
        top: -24px;
        left: 24px;
        margin: 0 0 0 1.55rem;
        color: #FFF;
        font-size: 13px;
        line-height: 15.6px;
        text-align: center;
        z-index: 2;
        font-family: Manrope;
        font-style: normal;
        font-weight: 600;
        display: flex;
        align-items: center;
        text-decoration: none;
    }


    button .circle::before {
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        border-radius: 8px;
        background-color: #E94271;
        margin: 0;
        content: '';
        z-index: -1;
    }

    button:hover .circle::before {
        width: 8rem;
    }

    button:hover .circle .icon.arrow {
        background: #fff;
    }


    .block_blue {
        /* height: 1974px; */
        border-radius: 40px;
        background: #25325F;
        margin: 50px auto;
        width: 100vw;
        max-width: 1700px;
    }

    .cloud-projects-row {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
    }

    .view-all-link {
        color: #FFF;
        font-family: Manrope;
        font-size: 24px;
        font-style: normal;
        font-weight: 600;
        line-height: 15.6px;
    }


    .view-btn {
        background-color: #FFF;
        height: 30px;
        width: 30px;
        border-radius: 8px;

        display: flex;
        align-items: center;
        justify-content: center;
    }

    .cloud-projects-title {
        color: #25325F;
        font-family: Manrope;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: 39px;
    }



    .card-title {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 96px;
        height: 30px;
        border-radius: 100px;
        background: #E94271;
        color: #FFF;
        font-family: Manrope;
        font-size: 13px;
        font-style: normal;
        font-weight: 700;
        line-height: 23.4px;
        text-align: center;
        margin: 16px 0px;
    }


    .card-text {
        color: #25325F;
        font-family: Manrope;
        font-size: 22px;
        font-style: normal;
        font-weight: 700;
        line-height: 33.6px;
        width: 264px;

    }

    .industry_title {
        color: var(--Text, #6A7291);
        font-family: Manrope;
        font-size: 13px;
        font-style: normal;
        font-weight: 600;
        line-height: 15.6px
    }


    .industry {
        color: var(--Primary-600, #25325F);
        font-family: Manrope;
        font-size: 13px;
        font-style: normal;
        font-weight: 600;
        line-height: 15.6px
    }


    .cloud-projects-title {
        color: #FFF;
        font-family: Manrope;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: 39px;
    }


    .left-side-width {
        margin-top: 50px;
        padding: 24px;

    }

    .offering-num {
        color: #E94271;
        font-family: Manrope;
        font-size: 14px;
        font-weight: 700;
        line-height: 23.8px;
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

    .right-col-form {
        margin-top: unset;
    }

    .cloud-projects-row {
        display: flex;
        flex-direction: column;
        align-items: flex-start;

    }


    @media (min-width: 768px) {
        .blue-block-partner {
            background: #25325F;
            height: 380px;
        }


        .block_blue {
            height: 900px;
        }

        .cloud-projects-row {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
        }


        .view-all-link {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            font-size: 13px;
        }

        .cloud-projects-title {
            font-size: 23px;
        }

        .left-side-width {
            max-width: 352px;
        }


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

        b,
        strong {
            font-size: inherit;
        }

        .sue-main-title {
            font-size: 36px;
        }

        button .button-text {

            top: -33px;
        }

        .block_blue {
            height: 815.03px;
        }


        .cloud-projects {
            height: 837px;
        }

        .view-all-link {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            font-size: 13px;
        }

        .cloud-projects-title {
            font-size: 26px;
        }


        .left-side-width {
            max-width: 694px;
            padding: 10px;
            display: flex;
            flex-direction: column;
            row-gap: 70px;
        }

        .swiper-wrapper {
            position: relative;
        }

        .swiper-container .swiper-pagination {
            position: relative;
            bottom: -59px !important;
        }


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

        .right-col-form {
            margin-top: 67px;
        }

        .cloud-projects-title {
            font-size: 26px;
        }


    }
    </style>




    <div class="">
        <!-- 1   class="container" -->
        <div class="back-to-home" style="margin-top:170px; margin-bottom:-123px; ">
            <a href="<?= get_field("back_to_home")['url'] ?>"
                class="d-flex justify-content-center align-items-center gap-2">
                <img src="<?= get_field("back_home_btn")['url'] ?>" alt="<?= get_field("back_home_btn")['alt'] ?>"
                    style="width:20px; height:20px; margin:7px 0;" />

                <span class="separator"><img src="<?= get_field("separator")['url'] ?>"
                        alt="<?= get_field("separator")['alt'] ?>" style="width:3px; height:6px; " /> </span>
                <span class="first">Products</span>
                <span class="separator"><img src="<?= get_field("separator")['url'] ?>"
                        alt="<?= get_field("separator")['alt'] ?>" style="width:3px; height:6px;" /> </span>
                <span class="last">Multistax</span>
            </a>
        </div>


        <!-- 2 -->
        <div class="container">
            <!-- class="container" -->
            <div class="row " style="margin-top:210px;">
                <div class="col-lg-3 d-md-none d-none d-lg-block"></div>
                <div
                    class="d-inline-flex align-items-center justify-content-center flex-column gap-3 col-lg-6 col-12 col-md-12">
                    <span class="left-btn">
                        <?= get_field("hero_sub_title") ?>

                    </span>
                    <span class="hero-title my-4">
                        <?= get_field("hero_main_title") ?>
                    </span>
                    <span class="hero-text">
                        <?= get_field("hero_text") ?>
                    </span>
                    <!-- Talk to an export btn -->
                    <div class="d-flex justify-content-between align-items-center gap-2 letstalk-btn"
                        style="height:42.261px;padding: 12px 15px; border-radius: 8px;background: #E94271;">
                        <a href="<?= get_field("request_demo")['url'] ?>"
                            style="color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px; display: flex; align-items: center; gap:8px; text-decoration: none; ">
                            <img src="<?= get_field("request_arrow")['url'] ?>"
                                alt="<?= get_field("request_arrow")['alt'] ?>" style="width: 12px; height: 18px;" />
                            <?= get_field("request_demo")['title'] ?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 d-md-none d-none d-lg-block"></div>
            </div>

        </div>

        <!-- 3 container -->
        <div class="container" style="margin-top:80px;">
            <div class="swiper-container">
                <div class="swiperimgoffering offering-swiper1">
                    <div class="swiper-wrapper">
                        <?php
                        foreach (get_field("testimonials") as $testimonial) {
                            ?>
                        <!-- height:auto; -->
                        <div class="swiper-slide" style="width:fit-content; "
                            style="height:35vw; max-height:500px; margin:0 12px;">

                            <img src="<?= $testimonial['url'] ?>" alt="<?= $testimonial['alt'] ?>"
                                class="w- h- objectfit-cover" />
                            <!-- style="width: 736px;height: 352px;" -->

                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>


        <!-- 4 -->
        <div>
            <!-- class="container" -->
            <div class="row " style="margin-top:150px;">
                <div class="col-lg-3 d-md-none d-none d-lg-block"></div>
                <div
                    class="d-inline-flex align-items-center justify-content-center flex-column gap-3 col-lg-6 col-12 col-md-12">
                    <span class="left-btn">
                        <?= get_field("hero_sub_title") ?>
                    </span>
                    <span class="hero-title my-4">
                        <?= get_field("hero_main_title") ?>
                    </span>
                    <span class="hero-text">
                        <?= get_field("hero_text") ?>
                    </span>

                    <!-- Talk to an export btn -->
                    <div class="d-flex justify-content-between align-items-center gap-2 letstalk-btn"
                        style="height:42.261px;padding: 12px 15px; border-radius: 8px;background: #E94271;">
                        <a href="<?= get_field("request_demo")['url'] ?>"
                            style="color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px; display: flex; align-items: center; gap:8px; text-decoration: none; ">
                            <img src="<?= get_field("request_arrow")['url'] ?>"
                                alt="<?= get_field("request_arrow")['alt'] ?>" style="width: 12px; height: 18px;" />
                            <?= get_field("request_demo")['title'] ?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 d-md-none d-none d-lg-block"></div>
            </div>
        </div>


        <!--5  Testimonials Section on All Screens -->
        <div class="container mt-5">
            <div class="row gy-2">
                <?php foreach (get_field("expertise_testimonials") as $testimonial) { ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="expertise-num"><?= $testimonial["expertise_num"] ?></span>
                            <span class="expertise-sub-title"><?= $testimonial["expertise_sub_title"] ?></span>
                        </div>
                        <h2 class="expertise-main-title"> <?= $testimonial["expertise_main_title"] ?></h2>
                        <div class="divider mb-3" style="margin: 15px 1px;"></div>
                        <p class="expertise-text"><?= $testimonial["expertise_text"] ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>


        <!-- 6 -->
        <!-- Sue_Partners Repeater On All Screen-->
        <div class="blue-block-partner">
            <div class="row">
                <div class="col-md-10 col-lg-6 mx-auto text-center pt-4">
                    <span class="left-btn" style="margin-top:40px;">
                        <?= get_field("sue_sub_title") ?>
                    </span>
                    <span class="sue-main-title" style="">
                        <?= get_field("sue_main_title") ?>
                    </span>
                </div>
            </div>

            <div class="container">
                <div class="row d-flex  justify-content-center ">
                    <?php
                    foreach (get_field("sue_partners") as $sue) {
                        ?>
                    <div class="col-md-4 col-lg-2 col-6 ">
                        <a href=" <?= $sue['sue_partners_link_url']['url'] ?>" target="_blank">
                            <div style=" margin:15px auto;">
                                <div class="d-flex flex-row align-items-center justify-content-evenly ">
                                    <img src="<?= $sue['sue_partners_img']['url'] ?>"
                                        alt=" <?= $sue['sue_partners_img']['alt'] ?>" class="sue-img" style=" background:#EDF3F4; width:185px ; height:
                                        61px; object-fit:cover; border-radius: 6px; border: 1px solid #CBCFDE;" />
                                </div>
                            </div>
                        </a>
                    </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- 7 -->
        <div class="container mt-5">
            <div class="row ">
                <div class="col-lg-1 d-none d-lg-block"></div>
                <div class="col-lg-5 col-md-5 d-flex flex-wrap ">
                    <span class="left-btn mb-2">

                        <?= get_field("sbu_title_left") ?>
                    </span>
                    <span class="main-left-title mb-2">

                        <?= get_field("main_title_left") ?>
                    </span>
                    <span class="left-text  mb-2">

                        <?= get_field("left_text") ?>
                    </span>
                    <!-- Talk to an export btn -->
                    <button>
                        <span class="circle">
                            <a href="<?= get_field("lets_talk_link")['url'] ?>"
                                class="d-flex justify-content-center align-items-center  arrow" href="#">
                                <img src="<?= get_field("lets_talk_img")['url'] ?>"
                                    alt="<?= get_field("lets_talk_img")['alt'] ?>"
                                    style="width: 12px; height: 18px; margin:7px 0" class="icon" />
                            </a>
                        </span>
                        <!-- <?= get_field("lets_talk_link")['title'] ?> -->
                        <span class="button-text">Let's talk</span>
                    </button>
                </div>

                <div class="col-lg-1 col-md-1 d-md-block d-none d-lg-block"></div>
                <div class="col-lg-5 col-md-6">

                    <img src="<?= get_field("left_img")['url'] ?>" alt="<?= get_field("left_img")['alt'] ?>"
                        class="w-100 h-100 objectfit-cover" style=" border-radius:40px; " />
                </div>


                <div class="col-lg-1 d-none d-lg-block"></div>
            </div>
        </div>


        <!-- 8 -->
        <div class="container mt-5">
            <div class="row ">
                <div class="col-lg-1 d-none d-lg-block"></div>
                <div class="col-lg-5 col-md-6">
                    <img src="<?= get_field("left_img")['url'] ?>" alt="<?= get_field("left_img")['alt'] ?>"
                        class="w-100 h-100 objectfit-cover" style=" border-radius:40px; " />
                </div>
                <div class="col-lg-5 col-md-5 d-flex flex-wrap ">
                    <span class="left-btn mb-2">

                        <?= get_field("sbu_title_left") ?>
                    </span>
                    <span class="main-left-title mb-2">

                        <?= get_field("main_title_left") ?>
                    </span>
                    <span class="left-text  mb-2">

                        <?= get_field("left_text") ?>
                    </span>
                    <!-- Talk to an export btn -->
                    <button>
                        <span class="circle">
                            <a href="<?= get_field("lets_talk_link")['url'] ?>"
                                class="d-flex justify-content-center align-items-center  arrow" href="#">
                                <img src="<?= get_field("lets_talk_img")['url'] ?>"
                                    alt="<?= get_field("lets_talk_img")['alt'] ?>"
                                    style="width: 12px; height: 18px; margin:7px 0" class="icon" />
                            </a>
                        </span>
                        <!-- <?= get_field("lets_talk_link")['title'] ?> -->
                        <span class="button-text">Let's talk</span>
                    </button>
                </div>

                <div class="col-lg-1 col-md-1 d-md-block d-none d-lg-block"></div>



                <div class="col-lg-1 d-none d-lg-block"></div>
            </div>
        </div>


        <!-- 9 -->
        <div class="block_blue">
            <div class="container">
                <!-- class="container" -->

                <div class="row px-5 py-5">
                    <div class="col-lg-4 col-md-6 col-12 d-flex flex-wrap" style="margin:30px auto">
                        <span class="left-btn mb-2">

                            <?= get_field("sbu_title_left") ?>
                        </span>
                        <span class="main-left-title mb-2">

                            <?= get_field("main_title_left") ?>
                        </span>
                        <span class="left-text  mb-2">

                            <?= get_field("left_text") ?>
                        </span>
                        <!-- Talk to an export btn -->
                        <div class="d-flex justify-content-between align-items-center gap-2 letstalk-btn"
                            style="height:42.261px;padding: 12px 15px; border-radius: 8px;background: #E94271;">
                            <a href="<?= get_field("request_demo")['url'] ?>"
                                style="color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px; display: flex; align-items: center; gap:8px; text-decoration: none; ">
                                <img src="<?= get_field("request_arrow")['url'] ?>"
                                    alt="<?= get_field("request_arrow")['alt'] ?>" style="width: 12px; height: 18px;" />
                                <?= get_field("request_demo")['title'] ?>
                            </a>
                        </div>

                    </div>
                    <div class="col-lg-2 d-none d-lg-block"></div>

                    <div class="col-lg-6 col-md-6 col-12">

                        <div class=" d-flex align-items-center justify-content-around">
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
            </div>


        </div>


        <!-- 10 -->
        <!--cloud-projects Section  -->
        <div class="cloud-projects">
            <div class="container">
                <div class="row cloud-projects-row mt-5">
                    <div class="col-12 col-lg-6 col-md-6">
                        <span class="cloud-projects-title">
                            <?= get_field("cloudprojects_title") ?>
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
                    <?php foreach (get_field("cloud_projects_testimonials") as $testimonial) { ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card" style="border-radius: 20px; border: 1px solid #CBCFDE; background: #FFF;">
                            <img src="<?= $testimonial["test_img"]['url'] ?>"
                                alt="<?= $testimonial['test_img']['alt'] ?>" class="card-img-top "
                                style="height: 213px; border-radius:20px; object-fit:cover;" />
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
                                        <?= $testimonial["text_type"] ?>
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
                                    <div class="d-flex align-items-center justify-content-center"
                                        style="width: 30px; height: 30px;  border-radius: 8px;background: #274083;">
                                        <img src="<?= $testimonial["img_btn"]['url'] ?>"
                                            alt="<?= $testimonial["img_btn"]['alt'] ?>"
                                            style="width: 12px; height: 18px;" />
                                    </div>
                                    <a href="<?= $testimonial['test_link']['url'] ?>" class="text-decoration-none">
                                        <?= $testimonial["test_link"]['title'] ?>
                                    </a>
                                </div>
                                <img src="<?= $testimonial["knp_img"]['url'] ?>"
                                    alt="<?= $testimonial["knp_img"]['alt'] ?>" style="width: 63px; height: 24px;" />
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </div>

        <!-- 11 -->
        <!-- Form Section   container  -->
        <div class="form_section">
            <div class="container">
                <div class="row">
                    <div class=" col-12 col-lg-3">

                        <!-- here -->
                        <div class="row d-block d-md-none d-lg-none" style="margin-top:40px;">
                            <div class="col-lg-4">
                                <h2
                                    style="color: var(--Secondary-400, #FFF);font-family: Manrope;font-size: 26px;font-style: normal;font-weight: 700;line-height: 150%; /* 39px */">
                                    <?= get_field("r_u_ready") ?>
                                </h2>
                            </div>
                            <div class="col-lg-7 offset-lg-1"
                                style="color: var(--Neutral-400, #9AA0B7); font-family: Manrope;font-size: 16px; font-style: normal;  font-weight: 700; line-height: 170%; /* 27.2px */">
                                <?= get_field("form_text") ?>
                            </div>
                        </div>
                        <!-- here -->
                        <div class="d-block d-md-none d-lg-none"
                            style=" border-bottom: 1px solid  white; margin:30px 0">
                        </div>
                        <div class="left-container">
                            <div class="left-content">
                                <img src="<?= get_field("form_img")['url'] ?>" alt="<?= get_field("form_img")['alt'] ?>"
                                    style="width:120px; height:120px; border-radius:15px; object-fit:cover; object-position:center" />
                                <div class="d-flex flex-column">
                                    <span style=" ">
                                        <!-- class="first-name"  -->
                                        <?= get_field("first_name_form") ?>
                                    </span>
                                    <span class="d-none d-md-flex d-lg-flex">

                                        <a href="<?= get_field("lets_talk")['url'] ?>"
                                            style="color:  #FFF;font-family: Manrope;font-size: 26px;font-style: normal;font-weight: 700;line-height: 150%; /* 39px */">
                                            <?= get_field("lets_talk")['title'] ?>
                                        </a>
                                    </span>


                                    <div style=" margin-top:10px;" class="d-flex d-md-none d-lg-none">
                                        <!-- E_mail -->
                                        <div class="d-flex flex-column flex-lg-column ">
                                            <div class="d-flex flex-row align-items-center justify-content-start gap-2">

                                                <a href="#"
                                                    style="background-color:white;height:30px;width:30px; border-radius: 8px;"
                                                    class="d-flex justify-content-center align-items-center">
                                                    <img src="<?= get_field("tel_link")['url'] ?>"
                                                        alt="<?= get_field("tel_link")['alt'] ?>"
                                                        style="width:12px; height:18px; margin:7px 0;color:black" />
                                                </a>
                                                <span
                                                    style="color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px; margin:30px 0">voornaam@sue.nl
                                                </span>
                                                <!-- e_mail -->
                                            </div>
                                            <!-- contact nummer -->
                                            <div
                                                class=" d-flex flex-row align-items-center justify-content-start gap-2">
                                                <a href="#"
                                                    style="background-color:white;height:30px;width:30px; border-radius: 8px;"
                                                    class="d-flex justify-content-center align-items-center">
                                                    <img src="<?= get_field("tel_link")['url'] ?>"
                                                        alt="<?= get_field("tel_link")['alt'] ?>"
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

                                <!-- Md -->
                                <div style=" margin-top:10px;" class="d-none d-md-flex d-lg-none  border-left">
                                    <!-- E_mail -->
                                    <div class="d-flex flex-column flex-lg-column">
                                        <div class=" d-flex flex-row align-items-center justify-content-start gap-2">

                                            <a href="#"
                                                style="background-color:white;height:30px;width:30px; border-radius: 8px;"
                                                class="d-flex justify-content-center align-items-center">
                                                <img src="<?= get_field("tel_link")['url'] ?>"
                                                    alt="<?= get_field("tel_link")['alt'] ?>"
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
                                                <img src="<?= get_field("tel_link")['url'] ?>"
                                                    alt="<?= get_field("tel_link")['alt'] ?>"
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
                                <!-- MD -->
                                <!-- here -->
                                <div class="d-none d-md-none d-lg-block"
                                    style=" border-bottom: 1px solid  white; margin:30px 0;width:204px;">
                                </div>
                            </div>
                            <!-- here -->
                            <div class="d-none  d-lg-none" style=" border-bottom: 1px solid  white; margin:30px 0; ">
                            </div>
                            <div class="d-none d-md-none d-lg-flex">
                                <!-- E_mail -->
                                <div class="d-flex flex-row flex-lg-column ">
                                    <div class=" d-flex flex-row align-items-center justify-content-start gap-2">

                                        <a href="#"
                                            style="background-color:white;height:30px;width:30px; border-radius: 8px;"
                                            class="d-flex justify-content-center align-items-center">
                                            <img src="<?= get_field("tel_link")['url'] ?>"
                                                alt="<?= get_field("tel_link")['alt'] ?>"
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
                                            <img src="<?= get_field("tel_link")['url'] ?>"
                                                alt="<?= get_field("tel_link")['alt'] ?>"
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
                    <div class="col-12  col-lg-9">
                        <!-- here -->
                        <div class="row d-none d-md-flex d-lg-flex right-col-form" style="">
                            <div class="col-lg-4">
                                <h2
                                    style="color: var(--Secondary-400, #FFF);font-family: Manrope;font-size: 26px;font-style: normal;font-weight: 700;line-height: 150%; /* 39px */">
                                    <?= get_field("r_u_ready") ?>
                                </h2>
                            </div>
                            <div class="col-lg-7 offset-lg-1"
                                style="color: var(--Neutral-400, #9AA0B7); font-family: Manrope;font-size: 16px; font-style: normal;  font-weight: 700; line-height: 170%; /* 27.2px */">
                                <?= get_field("form_text") ?>

                            </div>
                        </div>
                        <!-- here Form -->
                        <div>
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
























































































    </div>


























    <script>
    let swiperimgoffering = new Swiper('.offering-swiper1', {
        slidesPerView: 1.5,
        grabCursor: true,
        spaceBetween: 24,

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

            },
            412: {
                slidesPerView: 1.5,

            },

            540: {
                slidesPerView: 2,

            },

            556: {
                slidesPerView: 2.7,
            },
            992: {

                slidesPerView: 2.7,
            },
            1024: {

                slidesPerView: 1.7,
            }


        }
    })
    </script>




    <!--  mySwiper2 -->
    <script>
    let swiper2 = new Swiper('.mySwiper2', {
        slidesPerView: 2.1,
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
                slidesPerView: 3.2,
                spaceBetween: 1,

            },

            540: {
                slidesPerView: 4.2,
                spaceBetween: 1,

            },

            556: {
                slidesPerView: 6,


                spaceBetween: 1,
            },
            992: {

                slidesPerView: 3.9,
                spaceBetween: 0,
            }


        }
    })
    </script>











</main>



<?php get_footer() ?>