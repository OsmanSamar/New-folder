<?php get_header();

//Template Name: frontpage
?>

<main class="front-page flex-grow-1">
    <style>
    /* .swiper-pagination2 {
        transform: translateY(50%);
    }

    .btn-swiper {
        padding: 10px 20px;
        font-size: 14px;
    }

    @media (max-width: 768px) {
        .bg-container {
            padding: 20px;
        }

        .swiper-slide .slide-date {
            display: inline-block !important;
            margin-right: 10px;
        }

        .text-swiper {
            flex-grow: 1;
            width: 100%;
        }
    } */

    /*  */
    .mask-group {
        background-image: url("<?= esc_url(get_template_directory_uri()); ?>/images/maskgroup.png");
        background-size: cover;
        background-repeat: no-repeat;
        background-size: ;
    }

    .client-img {
        width: 108px !important;
        height: 108px !important;
        flex-shrink: 0;
        object-fit: cover;
        border-radius: 15px;
        margin-left: 10px;
    }



    .left-container {
        border-radius: 30px;
        margin-top: ;
        color: white;
        height: 264px;
        /* background: linear-gradient(13deg, rgba(55, 75, 141, 0.40) 1.5%, rgba(54, 70, 124, 0.00) 94.53%); */
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

    .newsletter-container {
        margin-top: 15px;
    }

    .custom-container {
        max-width: ;
        max-height: 492px;
        border: 0;
        padding: 45px 20px;
        margin-top: -160px;
    }


    .custom-video {
        margin-bottom: -74px;
    }

    .first-container {
        padding-top: 96px;
    }

    .client-btn {
        border-radius: 100px;
        color: #FFFFFF;
        background-color: #E94271;
        text-align: center;
        font-size: 11px;
        width: 103px;
        height: 30px;
        padding: 4px;
    }

    .card-title {
        color: #25325F;
        font-size: 14px;
        font-weight: 600;
        /* line-height: 27px; */
        margin: 2px 0;
    }

    .card-text {
        color: #25325F;
        font-size: 14px;
        font-weight: 600;
        line-height: 27px;
        font-family: Manrope;
        font-style: normal;
        line-height: 23.8px;
        font-weight: 700;
    }


    .client2-btn {
        border-radius: 100px;
        color: #FFFFFF;
        background-color: #E94271;
        text-align: center;
        padding: 4px 10px;
        width: fit-content;
    }


    .right_section {
        margin-top: 27px;
    }

    .text-swiper {
        font-size: 11px;
        color: white;

    }

    .text-swiper.span {

        overflow-wrap: break-word;
    }

    .btn-swiper {
        white-space: nowrap;
        color: #FFF;
        font-family: Manrope;
        font-size: 12px;
        font-style: normal;
        font-weight: 700;
        line-height: 180%;
        background-color: #E94271;
        border-radius: 100px;
        padding: 4px 8px;
        width: 88px;
        height: 33px;
    }

    .bg_img {
        height: 350px;
    }

    .form_section {
        border-radius: 30px;
        background: #25325F;
        /* margin: 150px auto; */
        max-width: 1700px;
        height: 1400px;
        margin: 150px auto 100px;

    }

    .arrow_section {

        width: 57.851px;
        height: 92.371px;
        flex-shrink: 0;
    }

    /* Custom Pagination Numbers */
    .custom-pagination {
        display: flex;
        gap: 8px;
        justify-content: flex-start;
        align-items: center;
        margin-bottom: 20px;
    }

    .custom-number {
        position: relative;
        background-color: #f0f0f0;
        color: #000;
        font-size: 12px;
        font-weight: bold;
        width: 40px;
        height: 40px;
        border-radius: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }



    .custom-number.active {
        background-color: #274083;
        color: #fff;
        width: auto;
        padding: 0 20px;
    }

    .custom-number .custom-title {
        display: none;
        margin-left: 10px;
        white-space: nowrap;
    }

    .custom-number.active .custom-title {
        display: inline-block;
    }


    /* Container for the background image and overlay */
    .responsive-container {
        position: relative;
        width: 100%;
        max-width: 1700px;
        overflow: hidden;
        margin: 70px auto;
    }

    .background-image {
        width: 100%;
        height: auto;
        object-fit: cover;
    }


    .overlay2 {
        position: relative;
        left: 50%;
        transform: translate(-50%, -49%);
        background-color: #FFF;
        border-radius: 15px;
        width: 90%;
        max-width: 350px;
        padding: 32px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .overlay {
        display: none;
    }

    .sub-title {
        background-color: #274083;
        color: #FFF;
        padding: 5px 20px;
        border-radius: 40px;
        font-family: Manrope, sans-serif;
        font-size: 0.8rem;
        font-weight: 700;
        margin-bottom: 15px;
    }


    .main-title {
        color: #25325F;
        font-family: Manrope, sans-serif;
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 20px;
        text-align: center;
    }

    /* Icon container */
    .icon-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 20px;
    }

    /* Individual icons */
    .icon {
        width: 120px;
        height: auto;
    }


    /* The first Card  */
    .client_card1 {
        background: #EDF3F4;
        max-height: 172px;
        padding: 20px 0;
        border: 0;
    }


    .client_card2 {
        border-radius: 20px;
        border: 0;
        background: #EDF3F4;
    }


    @media (min-width: 768px) {

        .right_section {
            margin-top: 27px;
        }

        .custom-number {
            font-size: 16px;
        }


        .text-swiper {
            font-size: 14px;
        }

        .btn-swiper {
            font-size: 13px;
            padding: 4px 12px;
        }

        .container2 {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: -65px;
        }

        .testimonial-container {
            border-radius: 15px;
            background-color: #EDF3F4;
            /* width: 390px; */
            height: 229px;
            margin: 20px 0;

        }

        .testimonial-img {
            width: 182px;
            height: 108px;
            flex-shrink: 0;
            object-fit: cover;
            border-radius: 15px;
            margin-left: 12px;
        }

        .overlay2 {
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #FFF;
            border-radius: 15px;
            width: 90%;
            max-width: 400px;
            padding: 32px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .overlay {
            display: none;
        }

        .sub-title {
            font-size: 1rem;
        }

        .main-title {
            font-size: 26px;
        }

        .icon {
            width: 140px;
        }

        .client_card2 {
            border-radius: 20px;
        }

        .client-img {
            /* width: 135px !important;
            height: 108px !important; */
            width: 159px !important;
            height: 138px !important;

        }

        .client-btn {
            width: 103px;
            height: 30px;
            font-size: 14px;
            padding: 4px;
        }


        .card-title {
            font-size: 13px;
        }

    }

    @media (min-width: 992px) {

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

        .newsletter-container {
            /* margin-top: 150px; */
        }

        .custom-container {
            max-width: ;
            max-height: 492px;
            border: 1px solid #CBCFDE;
            border-radius: 25px;
            padding: 45px 20px;
            margin-top: 0;
        }

        .custom-video {
            margin-bottom: 0;
        }


        .first-container {
            padding-top: 140px;
        }

        .right_section {
            margin-top: 0;
        }

        /* Custom Pagination Numbers */
        .custom-pagination {
            display: flex;
            gap: 20px;
            justify-content: flex-start;
            align-items: center;
            margin-bottom: 20px;
        }

        .custom-number {
            font-size: 16px;
        }

        .text-swiper {
            font-size: 14px;
        }

        .btn-swiper {
            font-size: 14px;
            padding: 4px 12px;
        }

        .m-scroll {
            display: flex;
            position: relative;
            width: 800px;
            height: 62px;
            margin: auto;
            background-color: ;
            overflow: hidden;
            z-index: 1;
        }

        .m-scroll__title {
            display: flex;
            position: absolute;
            top: 50%;
            left: 0;
            align-items: center;
            transform: translateY(-50%);
            white-space: nowrap;
        }

        .m-scroll__title>div {
            display: flex;
            animation: scrollText 15s infinite linear;
        }

        .m-scroll__title h1 {
            margin: 0;

            color: #FFF;
            font-family: Manrope;
            font-size: 13px;
            font-style: normal;
            font-weight: 700;
            line-height: 23.4px
        }

        @keyframes scrollText {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .pagination-container {
            display: flex;
            flex-direction: row;
            gap: 15px;
        }

        .pagination-btn {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: #ccc;
            border: none;
            cursor: pointer;
            background-color: #E94271;
            transition: background-color 0.3s;
        }

        .pagination-btn.active {
            background-color: #E94271;
        }

        .resources {
            margin-top: 40px;
        }

        .container2 {

            margin-top: 250px;
        }

        .testimonial-container {

            border-radius: 15px;
            background-color: #EDF3F4;
            width: 390px;
            height: 287px;
            margin: 0 18px;
        }

        .client_card2 {
            border-radius: 20px;
            width: 546px;
            height: 172px;
        }

        .client1-img {
            width: 135px;
            height: 135px;
            /* flex-shrink: 0; */
            object-fit: cover;
            border-radius: 15px;
            margin-left: 12px;
        }

        .client-btn {
            width: 103px;
            height: 30px;
            font-size: 14px;
            padding: 4px;
        }

        .card-title {
            font-size: 13px;
        }

        .card-text {
            font-size: 16px;
            line-height: 27.2px;
        }

        .bg-container {
            height: 361px;
        }

        .img-container {
            height: 648px;
            margin-top: -270px;
        }

        .left-text {
            font-family: Sora;
            font-size: 45px;
            font-style: normal;
            font-weight: 700;
            line-height: 120%;
        }


        .bg_img {
            height: 648px;
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

        .overlay2 {
            display: none;
        }

        /* Overlay styles */
        .overlay {
            position: absolute;
            top: 50%;
            left: 24%;
            transform: translate(-50%, -50%);
            background-color: white;
            border-radius: 14px;
            width: 90%;
            max-width: 450px;
            padding: 32px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: left;
        }

        .icon {
            width: 160px;
        }

        .client-img {
            /* width: 135px !important;
            height: 108px !important; */
            width: 159px !important;
            height: 138px !important;

        }
    }


    .mySwiper2 .swiper-pagination-bullet {
        background-color: white;
    }

    .mySwiper2 .swiper-pagination-bullet-active {
        background-color: #E94271;
    }


    .mySwiper1 {
        width: 100%;

    }

    .mySwiper1 .swiper-slide {
        margin: 0;
        padding: 0;
    }

    .sample-slider .swiper-slide {
        margin: 0;
        padding: 0;
    }

    .swiper-container {
        position: relative;
    }

    .swiper-pagination {
        display: flex !important;
        justify-content: center;
        align-items: center;
        gap: 2px;
        flex-direction: row;
    }

    .swiper-pagination-bullet {
        background-color: #E94271;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        opacity: 1;
    }

    .swiper-pagination-bullet-active {
        background-color: #FFF;

    }

    .img-container {
        height: 350px;
        /* margin-top: -120px; */
        max-width: 1700px;
        margin-top: -215px;
        margin-left: auto;
        margin-right: auto;

    }

    .bg-container {
        height: 200px;
    }

    .left-text {
        color: #25325F;
        font-family: Sora;
        font-size: 45px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%;
    }

    .vl {
        width: 1px;
        height: 81.006px;
        background: #25325F;
    }

    .right-text {
        color: #25325F;
        font-family: Manrope;
        font-size: 18px;
        font-style: normal;
        font-weight: 500;
        line-height: 150%;
    }
    </style>



    <div style="background:#EDF3F4; height:;">

        <div class="container">

            <!-- 1 -->
            <div class="container first-container" style=" padding-top:">
                <div class=" row">
                    <div class="d-flex align-items-center justify-content-between">
                        <h1 class="left-text ">
                            <!-- Cloud complexity made <span style="color:#E94271">simple</span> -->
                            <?= get_field("left_text") ?>
                            <span style="color:#E94271"><?= get_field("left_text_pink_word") ?></span>
                        </h1>
                        <div class="vl d-none d-lg-flex "></div>
                        <p class="right-text d-none d-lg-flex ">
                            <?= get_field("right_text") ?>
                        </p>
                    </div>
                </div>

                <div class="d-flex d-lg-none" style="margin-top:50px;">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center justify-content-center" style="margin-bottom:64px;">
                            <a href="<?= esc_url(home_url('/')); ?>" style="border-radius:8px;
                                background-color: #E94271; height:30px; width:30px;"
                                class="d-flex justify-content-center align-items-center">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/arrowbtn.svg" alt="Arrow"
                                    style="width:12px; height:18px; margin:7px 0;  ">
                            </a>
                            <a href="<?= esc_url(home_url('/')); ?>"
                                style="font-family: Manrope; font-size:14px; font-style: normal; font-weight: 600; line-height: 120%; color: #25325F;margin: 0 10px;">
                                Let's talk
                            </a>
                        </div>
                        <p class="right-text col-6">
                            <!-- <?= get_field("right_text") ?> -->
                            Empowering organizations to innovate faster
                        </p>

                    </div>
                </div>
            </div>
            <!-- End of the first container div -->
        </div>

        <!-- 2  class="container"-->
        <div>
            <div class="bg-container"
                style="background:#25325F; border-radius:40px; margin:80px auto; max-width:1700px;">
                <div class="container">
                    <div class="row align-items-center justify-content-between" style="padding: 20px;">
                        <!-- Left Section: Pagination, Button, Date, and Text -->
                        <div class="d-flex flex-lg-row flex-row align-items-center gap-3 col-lg-10 col-md-9 col-sm-12">

                            <!-- Pagination -->
                            <div class=" col-md-2 col-lg-1 d-none d-md-block d-lg-block ml-2">
                                <div class="swiper-pagination2"
                                    style="position:relative;transform: translateY(50%);  z-index:1;">
                                </div>
                            </div>


                            <!-- Button -->
                            <div class="col-2 col-lg-1">
                                <div style="position: relative; margin:0 ">

                                    <a href="<?= get_field("trending_btn")['url'] ?>" class="btn-swiper">
                                        <?= get_field("trending_btn")['title'] ?>
                                    </a>

                                </div>
                            </div>


                            <!-- Swiper Container -->
                            <div class="text-swiper col-8 col-lg-5">
                                <div class="swiper swiper-container"
                                    style="flex-grow:1; --swiper-pagination-color: #E94271;">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="d-flex flex-row align-items-center justify-content-between">
                                                <span class="slide-date d-none d-lg-block"
                                                    style="color: var(--Neutral-400, #9AA0B7);font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 700;line-height:23.4px">12.12.2024</span>
                                                <span class="slide-text">There is space here for the title
                                                    of a
                                                    trending
                                                    article</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="d-flex flex-row align-items-center justify-content-between">
                                                <span class="slide-date d-none d-lg-block"
                                                    style="color: var(--Neutral-400, #9AA0B7);font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 700;line-height:23.4px">14.12.2024</span>
                                                <span class="slide-text">There is space here for the title
                                                    of a
                                                    trending
                                                    article2</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="d-flex flex-row align-items-center justify-content-between">
                                                <span class="slide-date d-none d-lg-block"
                                                    style="color: var(--Neutral-400, #9AA0B7);font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 700;line-height:23.4px">16.12.2024</span>
                                                <span class="slide-text">There is space here for the title
                                                    of a
                                                    trending
                                                    article3</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Section: Arrow Button -->
                        <div class="col-lg-2 col-md-3 col-sm-12 d-flex justify-content-end">
                            <a href="#" style="border-radius:8px; background-color:white; height:30px; width:30px;"
                                class="d-flex justify-content-center align-items-center">
                                <img src="<?= get_field('arrow_btn')['url'] ?>"
                                    alt="<?= get_field('arrow_btn')['title'] ?>"
                                    style="width:12px; height:18px; object-fit:cover;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  -->


        <!-- Img under the container -->
        <div class=" col-12 col-lg-12 img-container" style="">


            <img src="<?= get_field("bg_img")['url'] ?>" alt="<?= get_field("bg_img")['title'] ?>" class="bg_img"
                style=" height: ;border-radius:40px; object-fit:cover" />

            <!-- Arrow on Image -->
            <a style="border-radius:8px; background-color:#25325F; height:30px; width:30px; position:relative ;top: -59%; left:49.9%;transform: translate(-50%, -50%);"
                class="d-none d-lg-flex justify-content-center align-items-center" href="#testimonials">
                <img src="<?= get_field("arrow_on_img")['url'] ?>" alt="<?= get_field("arrow_on_img")['alt'] ?>"
                    style="width:12px; height:18px; margin:7px 0;" />
            </a>

        </div>

        <!-- Outcome Testimonials Section on Small Screens -->
        <div class="container" style="">
            <div class="row d-flex flex-column align-items-center justify-content-center d-md-none d-lg-none"
                style="margin-top:-195px;">
                <?php
                foreach (get_field("testimonials_section") as $testimonial) {
                    ?>
                <div class="testimonial"
                    style="border-radius:15px; background-color:#FFF; width:350px; height:104px; margin:15px 0;">
                    <div style=" margin-top:2px;">
                        <span
                            style="color: #E94271;font-family: Manrope;font-size: 14px;font-style: normal;font-weight: 700;line-height: 23.8px;">
                            <?= $testimonial["num"] ?>
                        </span>
                        <span
                            style="font-size: 14px;font-style: normal;font-weight: 700;line-height: 23.8px; color:#6A7291;">
                            <?= $testimonial["sub_title"] ?>
                        </span>
                    </div>

                    <div class="d-flex justify-content-end ">
                        <a style="border-radius:8px; background-color: #E94271; height:30px; width:30px;"
                            class="d-flex justify-content-center align-items-center" href="#">
                            <img src="<?= get_field("schedule_link")['url'] ?>"
                                alt="<?= get_field("schedule_link")['alt'] ?>"
                                style="width:12px; height:18px; margin:7px 0;" />
                        </a>
                    </div>

                    <h1 style="color: #25325F; font-size: 21px;font-weight:700;line-height:33.6px; ; ">
                        <?= $testimonial["main_title"] ?>
                    </h1>

                </div>
                <?php
                }
                ?>
            </div>
        </div>


        <!-- Outcome Testimonials Section on Lg and MD Screens -->
        <div class="container" id="testimonials">

            <div class="row d-none d-md-flex d-lg-flex container2" style="position: ">
                <?php
                foreach (get_field("testimonials_section") as $testimonial) {
                    ?>
                <div class="testimonial-container" style="background-color:#FFF;border-radius:15px; ">
                    <div style=" margin-top:25px; padding:0 20px">
                        <span
                            style="color:#E94271;font-family:Manrope;font-size:15px;font-style:normal;font-weight:700;line-height:27px;">
                            <?= $testimonial["num"] ?>
                        </span>
                        <span
                            style="font-size: 14px;font-style: normal;font-weight: 700;line-height: 23.8px; color:#6A7291;">
                            <?= $testimonial["sub_title"] ?>
                        </span>
                    </div>
                    <h1 style="color: #25325F;font-size: 21px;font-weight:700; line-height:33.6px; padding:0 20px ">
                        <?= $testimonial["main_title"] ?>
                    </h1>

                    <div style=" border-bottom: 0.5px solid  #25325F; margin:30px 8px;"></div>

                    <p class=""
                        style="font-size:13px;font-style: normal;font-weight: 500;line-height: 23.4px; color:#6A7291;padding:0 20px  ">
                        <?= $testimonial["text"] ?>
                    </p>

                    <div class="d-flex align-items-center gap-2" style="padding:0 20px">
                        <a style="border-radius:8px; background-color: #E94271; height:30px; width:30px;"
                            class="d-flex justify-content-center align-items-center" href="#">
                            <img src="<?= get_field("schedule_link")['url'] ?>"
                                alt="<?= get_field("schedule_link")['alt'] ?>"
                                style="width:12px; height:18px; margin:7px 0;" />
                        </a>
                        <span class="" style="font-size:16px;color:black;  ">
                            <?= $testimonial["btn_text"] ?>
                        </span>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>



        <div class="mask-group">

            <!--  Sue_Partners Repeater  Swiper On Small -->
            <div class="" style="margin-top:50px; margin-bottom: 60px;">

                <div class="col-12 d-block d-md-block d-lg-none" style="text-align:center; margin-bottom: 40px; ">
                    <span
                        style="color:#25325F;font-family: Manrope;font-size:16px;font-style: normal;font-weight: 700;line-height: 27.2px; ">
                        SUE partners:
                    </span>
                </div>

                <div class="position-relative d-flex d-md-flex d-lg-none align-items-center  ">
                    <div class=" swiper2 mySwiper1 " style="flex-grow: 1;">
                        <div class="swiper-wrapper">
                            <?php
                            foreach (get_field("sue_partners") as $sue) {
                                ?>
                            <div class="swiper-slide d-flex justify-content-center align-items-center w-fit"
                                style="width:fit-content;">
                                <div
                                    style="border-radius:100px;border: 1px solid #CBCFDE;background: #EDF3F4; width:272px; height:49px; margin:0 8px; padding: 8px 0;">
                                    <div class="d-flex flex-row align-items-center justify-content-around">
                                        <img src="<?= $sue['sue_partners_img']['url'] ?>"
                                            alt=" <?= $sue['sue_partners_img']['alt'] ?>" class="sue-img"
                                            style="width:35px;height:21px;flex-shrink: 0; object-fit: " />
                                        <h1 style="color:#25325F;font-size: 14px;font-weight:600;line-height:27px ">
                                            <?= $sue["sue_partners_text"] ?>
                                        </h1>
                                        <a style="border-radius:14px; background-color:; height:; width:;"
                                            class="d-flex align-items-center" href="#">
                                            <img src="<?= $sue['sue_partners_link']['url'] ?>"
                                                alt=" <?= $sue['sue_partners_link']['alt'] ?>" class=""
                                                style="width:4px; height:8px; object-fit:cover " />
                                        </a>
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
                <div class="">
                    <div class="row d-none d-md-none d-lg-flex flex-row align-items-center justify-content-between"
                        style="margin-top:100px">
                        <span class="col-lg-2 "
                            style="color:#25325F;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height: 27.2px; margin-bottom: 70px; ">
                            SUE partners:</span>
                        <?php
                        foreach (get_field("sue_partners") as $sue) {
                            ?>
                        <div class="col-lg" style="border-radius:15px; height:99px; margin:35px 0;">
                            <div class="d-flex flex-row align-items-center justify-content-around">
                                <img src="<?= $sue['sue_partners_img']['url'] ?>"
                                    alt=" <?= $sue['sue_partners_img']['alt'] ?>" class="sue-img"
                                    style="width:56px;height:33px;flex-shrink: 0; object-fit: " />
                                <h1 style="color:#25325F;font-size: 15px;font-weight:600;line-height:27px ">
                                    <?= $sue["sue_partners_text"] ?>
                                </h1>
                                <a style="border-radius:8px; height:; width:;display:flex; flex-direction: row; align-items: center;"
                                    class="" href="#">
                                    <img src="<?= $sue['sue_partners_link']['url'] ?>"
                                        alt=" <?= $sue['sue_partners_link']['alt'] ?>" class=""
                                        style="width:4px; height:8px; object-fit:cover " />
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <!-- Client Story1 -->
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 g-4">
                    <?php foreach (get_field("client_story") as $testimonial) { ?>
                    <div class="col">
                        <div class="card client_card1 mb-3 d-flex flex-row align-items-center justify-content-center"
                            style="border-radius: 20px;border: 1px solid #CBCFDE;background:#EDF3F4;">
                            <div class="row g-0 align-items-center">
                                <div class=" col-4 ">
                                    <img src="<?= $testimonial['client_img']['url'] ?>"
                                        alt="<?= $testimonial['client_img']['alt'] ?>"
                                        class="client-img img-fluid rounded-start" />
                                </div>
                                <div class="col-8 col-md-7 col-lg-7">
                                    <div class="card-body">
                                        <div class="d-flex flex-row align-items-center justify-content-left gap-2">
                                            <a class="client-btn" href="<?= $testimonial['client_story_btn']['url'] ?>">
                                                <span>
                                                    <?= $testimonial['client_story_btn']['title'] ?>
                                                </span>
                                            </a>
                                            <h4 class="card-title" style="">
                                                <?= $testimonial["client_name"] ?>
                                            </h4>
                                        </div>
                                        <h4 class="card-text mt-2" style="">
                                            <?= $testimonial["client_text"] ?>
                                            <a href="#">
                                                <img src="<?= $testimonial['client_link']['url'] ?>"
                                                    alt="<?= $testimonial['client_link']['alt'] ?>"
                                                    style="width:4px; height:8px; object-fit:cover; margin-left:8px;" />
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

        </div>
        <!-- Here new -->

        <!-- The blue block container -->

        <div class=""
            style="border-radius:40px;background: #25325F; margin:80px auto; height: 850px; width: 100%; max-width: 1700px;">
            <div class="container">
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-lg-4 ">
                        <div class="d-flex flex-column align-items-flex-start justify-content-left gap-4"
                            style="margin-left:23px; color:#FFF; margin-top:80px;">
                            <span
                                style="background-color:#274083;width:223px;height: 30px;border-radius:40px;color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 700;line-height: 23.4px; padding: 3px 15px;">
                                <?= get_field("sub_title") ?>
                            </span>
                            <span
                                style="color: #FFF;font-family: Manrope;font-size: 26px;font-style: normal;font-weight: 700;line-height: 39px;">
                                <?= get_field("main_title") ?>
                                <!-- <span><?= get_field("blue_block_main_title_pink_word") ?></span> -->
                            </span>
                            <span
                                style="color: var(--Neutral-400, #9AA0B7);font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height:  27.2px;">
                                <?= get_field("text") ?>
                            </span>
                            <!-- schedule_link -->
                            <div class=" d-flex flex-row align-items-center justify-content-left gap-3 mt-4">
                                <a href="#"
                                    style="border-radius:8px; background-color:#E94271; height:30px; width:30px;"
                                    class="d-flex justify-content-center align-items-center">
                                    <img src="<?= get_field("schedule_link")['url'] ?>"
                                        alt="<?= get_field("schedule_link")['alt'] ?>"
                                        style="width:12px; height:18px; margin:7px 0;" />
                                </a>
                                <span
                                    style="font-family: Manrope; font-size:13px; font-style: normal; font-weight: 600; line-height: 120%; color:#FFF;;">
                                    <?= get_field("schedule_text") ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>

                    <!-- Right Column First one -->
                    <div class="col-lg-3 d-none d-md-none d-lg-flex">
                        <div class="container">

                            <div class="row  d-flex flex-cloumn align-items-center justify-content-between gap-4"
                                style=" margin-top:80px;">

                                <?php
                                foreach (get_field("testimonails_section") as $testimonails) {
                                    ?>

                                <div class="" style="border-radius:15px;  width:350px; height:99px; margin:35px 0;">
                                    <div class="d-flex flex-row align-items-center justify-content-between">
                                        <div class="d-flex flex-row align-items-center justify-content-around gap-2">
                                            <span
                                                style="color: #E94271;font-family Manropefont-size:15px;font-style:normal;font-weight:600;line-height:27px;">
                                                <?= $testimonails["num"] ?>
                                            </span>
                                            <span
                                                style="color: var(--Neutral-400, #9AA0B7);font-family: Manrope;font-size: 15px;font-style: normal;font-weight: 600;line-height: 27px;">
                                                <?= $testimonails["title"] ?>

                                            </span>
                                        </div>

                                    </div>
                                    <div style="margin:20px 0">
                                        <span
                                            style="color: #FFF;font-family: Manrope;font-size: 21px;font-style: normal;font-weight: 700;line-height: 33.6px">
                                            <?= $testimonails["text"] ?>
                                        </span>
                                    </div>
                                    <a href="#"
                                        style="border-radius:8px; background-color: #E94271; height:30px; width:30px; margin:10px 0;"
                                        class="d-flex justify-content-center align-items-center" href="#">

                                        <img src="<?= $testimonails['link']['url'] ?>"
                                            alt=" <?= $testimonails['link']['alt'] ?>" class=""
                                            style="width:12px; height: 18px; margin:7px 0;" />
                                    </a>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column Second one -->

                    <div class="col-lg-3 d-none d-md-none d-lg-flex">
                        <div class="container">

                            <div class="row  d-flex flex-cloumn align-items-center justify-content-between gap-4"
                                style=" margin-top:80px;">

                                <?php
                                foreach (get_field("testimonails_section_right") as $testimonails) {
                                    ?>

                                <div class=""
                                    style="border-radius:15px; background-color:; width:350px;height:99px; margin:35px 0;">
                                    <div class="d-flex flex-row align-items-center justify-content-between">
                                        <div class="d-flex flex-row align-items-center justify-content-around gap-2">
                                            <span
                                                style="color:  #E94271;font-family: Manropefont-size: 15px;font-style: normal;font-weight: 600;line-height: 27px ">
                                                <?= $testimonails["num"] ?>
                                            </span>
                                            <span
                                                style="color: #9AA0B7;font-family: Manrope;font-size: 15px;font-style: normal;font-weight: 600;line-height: 27px;">
                                                <?= $testimonails["title"] ?>

                                            </span>
                                        </div>
                                    </div>

                                    <div style="margin:20px 0">
                                        <span
                                            style="color: #FFF;font-family: Manrope;font-size: 21px;font-style: normal;font-weight: 700;line-height: 33.6px;">
                                            <?= $testimonails["text"] ?>
                                        </span>
                                    </div>

                                    <a href="#"
                                        style="border-radius:8px; background-color: #E94271;height:30px; width:30px; margin:10px 0"
                                        class="d-flex justify-content-center align-items-center" href="#">

                                        <img src="<?= $testimonails['link']['url'] ?>"
                                            alt=" <?= $testimonails['link']['alt'] ?>" class=""
                                            style="width:12px; height: 18px; margin:7px 0;" />
                                    </a>

                                </div>
                                <?php
                                }
                                ?>
                            </div>

                        </div>
                    </div>

                    <!-- Left columns Repeater  Swiper -->
                    <div style="margin-top:160px; margin-bottom:;">
                        <div class="position-relative d-flex d-md-flex d-lg-none align-items-center  ">

                            <!-- Swiper block on the big blue background -->
                            <div class="swiper mySwiper2" style="flex-grow: 1;">
                                <div class="swiper-wrapper">
                                    <?php
                                    $testimonails_left = get_field("testimonails_section");
                                    $testimonails_right = get_field("testimonails_section_right");

                                    // Testimonails merged
                                    $merged_testimonails = array_merge($testimonails_left, $testimonails_right);

                                    // Arrange the elements if each elements has number
                                    usort($merged_testimonails, function ($a, $b) {
                                        return $a['num'] - $b['num'];
                                    });

                                    // Display elements
                                    foreach ($merged_testimonails as $testimonails) {
                                        ?>
                                    <div class="swiper-slide d-flex align-items-center justify-content-center w-fit"
                                        style="width:fit-content;">
                                        <div
                                            style="border-radius:15px; background-color:white; width:350px;height:139px; margin:16px 10px;padding: 16px 10px;">
                                            <div class="d-flex flex-row align-items-center justify-content-between">
                                                <div
                                                    class="d-flex flex-row align-items-center justify-content-around gap-2">
                                                    <span
                                                        style="color:#E94271;font-family: Manrope;font-size: 15px;font-style: normal;font-weight: 600;line-height:27px;">
                                                        <?= $testimonails["num"] ?>
                                                    </span>
                                                    <span
                                                        style="color: var(--Text, #6A7291);font-family: Manrope;font-size: 14px;font-style: normal;font-weight: 700;line-height:23.8px;">
                                                        <?= $testimonails["title"] ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items gap-1">
                                                <span
                                                    style="color: var(--Primary-600, #25325F);font-family: Manrope;font-size: 18px;font-style: normal;font-weight: 700;line-height: 27px;">
                                                    <?= $testimonails["text"] ?>
                                                </span>
                                                <a href="#"
                                                    style="border-radius:8px;background-color: #E94271;height:30px; width:30px;"
                                                    class="d-flex justify-content-center align-items-center">
                                                    <img src="<?= $testimonails['link']['url'] ?>"
                                                        alt="<?= $testimonails['link']['alt'] ?>"
                                                        style="width:12px; height: 18px; margin:7px 0;" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="swiper-pagination1" style="position:relative;left: 42%;"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End of The blue block -->




        <!-- SUE Insights -->
        <div class="container" style="margin-top:120px;">
            <div class="row">
                <div class="col-6 col-lg-6">
                    <span
                        style="color:#6A7291;font-family: Manrope;font-size:15px;font-style:normal;font-weight: 600;line-height:27px;">
                        <?= get_field("sue_insights") ?>
                    </span>
                </div>
                <div class="col-6 col-lg-6 ">
                    <div class=" d-flex flex-row align-items-center justify-content-end gap-3">
                        <a href="#"
                            style="background-color:#E94271; height:30px; width:30px; border-radius:8px; background:#25325F;"
                            class="d-flex justify-content-center align-items-center">
                            <img src="<?= get_field("sue_insights_link")['url'] ?>"
                                alt="<?= get_field("sue_insights_link")['alt'] ?>"
                                style="width:12px; height:18px; margin:7px 0;" />
                        </a>
                        <span
                            style="color: #25325F;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px;">
                            <?= get_field("sue_insights_text") ?>
                        </span>
                    </div>
                </div>
            </div>

            <div style=" border-bottom:0.5px solid  #CBCFDE; margin:30px 0;"></div>
            <!-- End of SUE Insights -->

            <div class="row">
                <div class="col-12 col-lg-5 col-md-12  mask-group ">
                    <!-- Client Story2 -->
                    <div class="container ">
                        <div class="row">
                            <div class="col-12 col-lg-5 col-md-12" style="margin-top:60px;">
                                <?php foreach (get_field("article_testimonails") as $testimonial) { ?>
                                <div class="col">
                                    <div
                                        class="card client_card2 mb-3 d-flex flex-row align-items-center justify-content-center">
                                        <div class="row g-0 align-items-center">
                                            <div class=" col-4 ">
                                                <img src="<?= $testimonial['img']['url'] ?>"
                                                    alt="<?= $testimonial['img']['alt'] ?>" class="client-img" />
                                            </div>
                                            <div class="col-8 col-lg-6">
                                                <div class="card-body">
                                                    <div
                                                        class="d-flex flex-row align-items-center justify-content-left gap-2">
                                                        <a class="client2-btn" href="<?= $testimonial['btn']['url'] ?>">

                                                            <?= $testimonial['btn']['title'] ?>
                                                        </a>
                                                        <h4 class="card-title" style="">
                                                            <?= $testimonial["client_name"] ?>
                                                        </h4>
                                                    </div>
                                                    <h4 class="card-text mt-2"
                                                        style="color:#25325F;font-size: 15px;font-weight:600;line-height:27px;">
                                                        <?= $testimonial["text"] ?>
                                                        <a href="#">
                                                            <img src="<?= $testimonial['client_link']['url'] ?>"
                                                                alt="<?= $testimonial['client_link']['alt'] ?>" style="width:4px; height:8px; object-fit:cover;
                                                        margin-left:8px;" />
                                                        </a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="d-none d-md-none d-lg-block col-lg-2 ">

                </div>
                <div class="d-none d-md-none d-lg-block col-lg-1 ">
                    <div>
                        <!--Verticall line On Lg Screen  -->
                        <div class=" d-none d-lg-flex "
                            style=" width:1px; height:692px; background: #CBCFDE; position:relative; top:-27px;">
                        </div>
                    </div>
                </div>


                <div class="col-12 col-lg-4">
                    <!-- Right Column  Knowledge And ReSources-->
                    <div class="d-flex flex-column align-items-flex-start justify-content-left gap-4"
                        style="margin-left:; color:#FFF; margin-top:60px; ">
                        <span
                            style="background-color:#274083;width:243px;height:30px;border-radius:40px;color:#FFF;font-family:Manrope;font-size:13px;font-style:normal;font-weight:700;line-height:23.4px;text-align:center;padding:4px 0;margin-bottom:15px; ">
                            <?= get_field("sub_title") ?>
                        </span>
                        <span
                            style="color:#25325F;font-family:Manrope;font-size:26px;font-style:normal;font-weight:700;line-height:39px; margin-bottom:15px;">
                            <?= get_field("main_title") ?>

                        </span>
                        <span
                            style="color:#6A7291;font-family:Manrope;font-size:16px;font-style:normal;font-weight:700;line-height:27.2px; margin-bottom:15px;">
                            <?= get_field("text") ?>
                        </span>

                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-6 resources" style="margin-top:;">

                            <div style="border-bottom: 0.5px solid   #25325F; ">

                                <div class=" d-flex flex-row align-items-center justify-content-between  gap-3 mt-4"
                                    style="margin:20px 0;">
                                    <span
                                        style="color: #25325F;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px;">
                                        <?= get_field("knowledge") ?>
                                    </span>
                                    <a href="#" class="d-flex justify-content-center align-items-center">
                                        <img src="<?= get_field("knowledge_link")['url'] ?>"
                                            alt="<?= get_field("knowledge_link")['alt'] ?>"
                                            style="width:4px; height:8px; object-fit:cover; margin-left:2px;" />
                                    </a>
                                </div>

                            </div>

                            <div style="border-bottom: 0.5px solid  #25325F;">
                                <div class=" d-flex flex-row align-items-center justify-content-between gap-3 mt-4"
                                    style="margin:20px 0;">
                                    <span
                                        style="color: #25325F;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px;">
                                        <?= get_field("client_stories") ?>
                                    </span>
                                    <a href="#" class="d-flex justify-content-center align-items-center">
                                        <img src="<?= get_field("client_stories_link")['url'] ?>"
                                            alt="<?= get_field("client_stories_link")['alt'] ?>"
                                            style="width:4px; height:8px; object-fit:cover; margin-left:2px;" />
                                    </a>
                                </div>
                            </div>

                            <div style="border-bottom: 0.5px solid  #25325F;">
                                <div class=" d-flex flex-row align-items-center justify-content-between gap-3 mt-4"
                                    style="margin:20px 0;">
                                    <span
                                        style="color: #25325F;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px;">
                                        <?= get_field("events") ?>
                                    </span>
                                    <a href="#" class="d-flex justify-content-center align-items-center">
                                        <img src="<?= get_field("events_link")['url'] ?>"
                                            alt="<?= get_field("client_stories_link")['alt'] ?>"
                                            style="width:4px; height:8px; object-fit:cover; margin-left:2px;" />
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div class="col-12 col-lg-6 resources " style="margin-top:;">

                            <div style="border-bottom: 0.5px solid  #25325F;">
                                <div class=" d-flex flex-row align-items-center justify-content-between gap-3 mt-4"
                                    style="margin:20px 0;">
                                    <span
                                        style="color: #25325F;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px;">
                                        <?= get_field("resources") ?>
                                    </span>
                                    <a href="#" class="d-flex justify-content-center align-items-center">
                                        <img src="<?= get_field("resources_link")['url'] ?>"
                                            alt="<?= get_field("resources_link")['alt'] ?>"
                                            style="width:4px; height:8px; object-fit:cover; margin-left:2px;" />
                                    </a>
                                </div>
                            </div>

                            <div style="border-bottom: 0.5px solid  #25325F;">
                                <div class=" d-flex flex-row align-items-center justify-content-between gap-3 mt-4"
                                    style="margin:20px 0;">
                                    <span
                                        style="color: #25325F;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px;">
                                        <?= get_field("video") ?>
                                    </span>
                                    <a href="#" class="d-flex justify-content-center align-items-center">
                                        <img src="<?= get_field("videos_link")['url'] ?>"
                                            alt="<?= get_field("videos_link")['alt'] ?>"
                                            style="width:4px; height:8px; object-fit:cover; margin-left:2px;" />
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- End of Client Story2 and Right column -->
        </div> <!-- End of container div -->




        <div>
            <!-- responsive-container With banks Block class="container" -->
            <div class="row">
                <div class="responsive-container">
                    <img src="<?= get_field("sue_customers_bg")['url'] ?>"
                        alt="<?= get_field("sue_customers_bg")['alt'] ?>" class="background-image" />
                    <div class="overlay">
                        <span class="sub-title"><?= get_field("sue_title") ?></span>
                        <span class="main-title"><?= get_field("sue_main_title") ?>

                            <span class="main-title" style="color:#E94271"><?= get_field("sue_main_title_pink_word") ?>
                            </span>

                            <div class="row" style="margin-top: 20px;">
                                <div class="icon-container col-12 col-lg-12">
                                    <img src="<?= get_field("rabobank_icon")['url'] ?>"
                                        alt="<?= get_field("rabobank_icon")['alt'] ?>" class="icon" />
                                    <img src="<?= get_field("bol_icon")['url'] ?>"
                                        alt="<?= get_field("bol_icon")['alt'] ?>" class="icon" />
                                </div>
                            </div>
                            <div class="icon-container">
                                <img src="<?= get_field("kpn_icon")['url'] ?>" alt="<?= get_field("kpn_icon")['alt'] ?>"
                                    class="icon" />
                                <img src="<?= get_field("booking_icon")['url'] ?>"
                                    alt="<?= get_field("booking_icon")['alt'] ?>" class="icon" />
                            </div>
                    </div>
                </div>

                <div class="overlay2">
                    <span class="sub-title"><?= get_field("sue_title") ?></span>
                    <span class="main-title"><?= get_field("sue_main_title") ?></span>

                    <div class="row">
                        <div class="icon-container col-12 col-lg-12">
                            <img src="<?= get_field("rabobank_icon")['url'] ?>"
                                alt="<?= get_field("rabobank_icon")['alt'] ?>" class="icon" />
                            <img src="<?= get_field("bol_icon")['url'] ?>" alt="<?= get_field("bol_icon")['alt'] ?>"
                                class="icon" />
                        </div>
                    </div>
                    <div class="icon-container">
                        <img src="<?= get_field("kpn_icon")['url'] ?>" alt="<?= get_field("kpn_icon")['alt'] ?>"
                            class="icon" />
                        <img src="<?= get_field("booking_icon")['url'] ?>" alt="<?= get_field("booking_icon")['alt'] ?>"
                            class="icon" />
                    </div>
                </div>
            </div><!-- End of responsive-container With banks Block -->
        </div>


        <div class="container">

            <!-- New Section With Swiper On Right Side -->
            <div class="row">
                <!-- Left Section -->
                <div class="col12 col-lg-5 order-2 order-lg-1 custom-video">
                    <img src="<?= get_field("left_img")['url'] ?>" alt="<?= get_field("left_img")['alt'] ?>"
                        style="max-width:; max-height:412px; border-radius: 25px; object-fit:cover" />
                </div>

                <!-- Right Section -->
                <div class="col-12 col-lg-7 right_section order-1 order-lg-2">
                    <div class="custom-container" style="">

                        <div class="custom-pagination">

                            <div class="custom-number active" data-index="0">
                                1
                                <span class="custom-title">Mi vel turpis vitae mi a id vitae</span>
                            </div>
                            <div class="custom-number" data-index="1">2

                                <span class="custom-title">Vel turpis lacus vitae mi mollis</span>
                            </div>
                            <div class="custom-number" data-index="2">3

                                <span class="custom-title">Turpis lacus vitae mi mollis volutpat</span>
                            </div>

                            <div class="d-none d-md-flex d-lg-flex align-items-center gap-4"
                                style="justify-content: flex-end; width: 100%;">
                                <div>
                                    <a href="#" id="prevBtn"
                                        style=" height:30px; width:30px; border-radius:8px; border: 1px solid #6A7291;"
                                        class="d-flex justify-content-center align-items-center">
                                        <img src="<?= get_field("prev_btn")['url'] ?>"
                                            alt="<?= get_field("prev_btn")['title'] ?>"
                                            style="width:12px; height:18px; margin:7px 0; object-fit:cover" />
                                    </a>
                                </div>
                                <div>
                                    <a href="#" id="nextBtn"
                                        style=" height:30px; width:30px; border-radius:8px; border: 1px solid #6A7291;"
                                        class="d-flex justify-content-center align-items-center">
                                        <img src="<?= get_field("next_btn")['url'] ?>"
                                            alt="<?= get_field("next_btn")['title'] ?>"
                                            style="width:12px; height:18px; margin:7px 0; object-fit:cover " />
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div style="border-bottom: 1px solid #CBCFDE; margin: 40px 0;"></div>

                        <div class="swiper sample-slider"
                            style="background-color:; width: 85%; margin: 0 ; overflow:hidden">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <h1>Mi vel turpis vitae mi a id vitae turpis lacus vitae mi mollis</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla egestas, nisl
                                        posuere
                                        porttitor
                                        vulputate, felis orci venenatis nibh, ut diam ullamcorper sapien.
                                    </p>
                                    <div class=" d-flex flex-row align-items-center justify-content-start gap-3">
                                        <a href="#"
                                            style="background-color: #25325F; height:30px; width:30px; border-radius: 8px;"
                                            class="d-flex justify-content-center align-items-center">
                                            <img src="<?= get_field("sue_insights_link")['url'] ?>"
                                                alt="<?= get_field("sue_insights_link")['alt'] ?>"
                                                style="width:12px; height:18px; margin:7px 0;" />
                                        </a>

                                        <span
                                            style="color: #25325F;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height:  15.6px">Buttom</span>
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <h1>Vel turpis lacus vitae mi mollis</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Nulla egestas, nisl posuere
                                        porttitor
                                        vulputate, felis orci venenatis nibh, ut diam ullamcorper sapien.
                                    </p>

                                    <div class="d-flex flex-row align-items-center justify-content-start gap-3">
                                        <a href="#"
                                            style="background-color:#25325F;; height:30px; width:30px; border-radius: 8px;"
                                            class="d-flex justify-content-center align-items-center">
                                            <img src="<?= get_field("sue_insights_link")['url'] ?>"
                                                alt="<?= get_field("sue_insights_link")['alt'] ?>"
                                                style="width:12px; height:18px; margin:7px 0;" />
                                        </a>
                                        <span
                                            style="color:  #25325F;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height:  15.6px">Buttom</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <h1>Turpis lacus vitae mi mollis </h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla egestas, nisl
                                        posuere
                                        porttitor
                                        vulputate, felis orci venenatis nibh, ut diam ullamcorper sapien.
                                    </p>
                                    <div class=" d-flex flex-row align-items-center justify-content-start gap-3">
                                        <a href="#"
                                            style="background-color:#25325F;; height:30px; width:30px; border-radius: 8px;"
                                            class="d-flex justify-content-center align-items-center">
                                            <img src="<?= get_field("sue_insights_link")['url'] ?>"
                                                alt="<?= get_field("sue_insights_link")['alt'] ?>"
                                                style="width:12px; height:18px; margin:7px 0;" />
                                        </a>
                                        <span
                                            style="color:  #25325F;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height:  15.6px">Buttom</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of  New Section With Swiper On Right Side -->

        </div> <!-- End of the Container -->


        <!-- Form Section   container  -->
        <div class="form_section">
            <!-- container -->
            <div class="container">
                <div class="row">
                    <div class=" col-12 col-lg-3">
                        <div class="left-container">
                            <div class="left-content">
                                <img src="<?= get_field("left_img")['url'] ?>" alt="<?= get_field("left_img")['alt'] ?>"
                                    style="max-width:72px; height:72px; border-radius:15px; object-fit:cover" />
                                <div class="d-flex flex-column">
                                    <span class="first-name" style=" ">Firstname:</span>

                                    <span
                                        style="color: #FFF;font-family: Manrope;font-size: 26px;font-style: normal;font-weight: 700; line-height:39px">Let's
                                        talk!
                                    </span>
                                </div>

                                <div class="d-none d-lg-block"
                                    style=" border-bottom: 1px solid  white; margin:30px 0;width:204px;">
                                </div>
                            </div>
                            <div class="d-block d-lg-none" style=" border-bottom: 1px solid  white; margin:30px 0; ">
                            </div>




                            <div style=" margin-left:; margin-top:10px;">
                                <!-- email -->
                                <div class="d-flex flex-row flex-lg-column gap-3">
                                    <div class=" d-flex flex-row align-items-center justify-content-start gap-3">
                                        <a href="#" style="background:#E94271;height:30px;width:30px;border-radius:8px;"
                                            class="d-flex justify-content-center align-items-center">
                                            <img src="<?= get_field("sue_insights_link")['url'] ?>"
                                                alt="<?= get_field("sue_insights_link")['alt'] ?>"
                                                style="width:12px; height:18px; margin:7px 0;" />
                                        </a>
                                        <span
                                            style="color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px; margin:30px 0">voornaam@sue.nl
                                        </span>
                                    </div>

                                    <!-- contact nummer -->
                                    <div class=" d-flex flex-row align-items-center justify-content-start gap-3">
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
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Right column -->
                    <div class="col-12 col-lg-9">
                        <div style=" margin:50px 12px">
                            <?= str_replace(['__START__', '__END__'], ['<div class="form-col">', '</div>'], do_shortcode('[gravityform id="1" title="true"]')) ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End of Form Section -->

        <!-- New Section -->
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <!-- First Row margin-top:150px; and newsletter-container also-->
                    <div class="" style="display:flex;flex-direction: column; align-items: flex-start;gap: 2px; ">
                        <span
                            style="color:#25325F;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height: 27.2px; margin:10px 5px 0">
                            <?= get_field("information_title") ?>
                        </span>
                        <br>
                        <span
                            style="color: var(--Text, #6A7291);font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height: 27.2px; margin:5px 0 ">

                            <?= get_field("information_text") ?>
                        </span>
                    </div>

                    <!-- Second Row -->
                    <div class="row" style="margin:50px 0;">
                        <div class="col-lg-4">
                            <!-- accordion -->
                            <div class=" d-block d-lg-none" id="accordionExample">
                                <!-- First Item -->
                                <div class="accordion-item">
                                    <div class="d-flex flex-row align-items-center justify-content-between gap-3">
                                        <h2 class="accordion-header" id="headingOne">
                                            <a href="#collapseOne" class="accordion-button" data-bs-toggle="collapse"
                                                aria-expanded="true" aria-controls="collapseOne"
                                                style="color: #25325F; font-family: Manrope; font-size: 16px; font-style: normal; font-weight: 700; line-height: 27.2px;">
                                                <?= get_field("contact_en_adres_on_sm") ?>
                                            </a>

                                        </h2>
                                        <!-- DownAroow -->
                                        <div>
                                            <a class="d-flex justify-content-center align-items-center"
                                                href="#collapseOne" class="accordion-button" data-bs-toggle="collapse"
                                                aria-expanded="false" aria-controls="collapseOne">
                                                <img src="<?= get_field("contact_en_adres_collapse")['url'] ?>"
                                                    alt="<?= get_field("contact_en_adres_collapse")['title'] ?>"
                                                    style="width:12px; height:12px; margin:7px 0; " />
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="accordion-collapse collapse "
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
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
                                            <div class="d-flex flex-column align-items-flex-start ">
                                                <span
                                                    style="color:  #6A7291;font-family: Manrope;font-size: 15px;font-style: normal;font-weight: 600;line-height:  27px ">
                                                    <?= get_field("address") ?></span>
                                                <span> <?= get_field("city") ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-block d-lg-none"
                                    style=" border-bottom: 1px solid  #25325F; margin:30px 0; ">
                                </div>

                                <!-- Second Item -->
                                <div class="accordion-item">
                                    <div class="d-flex flex-row align-items-center justify-content-between gap-3">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <a href="#collapseTwo" class="accordion-button collapsed"
                                                data-bs-toggle="collapse" aria-expanded="false"
                                                aria-controls="collapseTwo"
                                                style="color: #25325F; font-family: Manrope; font-size: 16px; font-style: normal; font-weight: 700; line-height: 27.2px;">
                                                <?= get_field("information") ?>
                                            </a>
                                        </h2>


                                        <!-- DownAroow -->
                                        <div>
                                            <a class="d-flex justify-content-center align-items-center"
                                                href="#collapseTwo" class="accordion-button collapsed"
                                                data-bs-toggle="collapse" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                <img src="<?= get_field("contact_en_adres_collapse")['url'] ?>"
                                                    alt="<?= get_field("contact_en_adres_collapse")['title'] ?>"
                                                    style="width:12px; height:12px; margin:7px 0; " />
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
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
                                <div class="d-block d-lg-none"
                                    style=" border-bottom: 1px solid  #25325F; margin:30px 0; ">
                                </div>
                            </div>





                            <!-- LG -->
                            <div class="d-none d-md-none d-lg-flex flex-column align-items-flex-start gap-2">
                                <span
                                    style="color:  #25325F;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height: 27.2px">
                                    <?= get_field("contact_title") ?></span>
                                <span
                                    style="color:  #6A7291;font-family: Manrope;font-size: 15px;font-style: normal;font-weight: 600;line-height:  27px ">
                                    <?= get_field("e_mail") ?></span>
                                <span> <?= get_field("tele") ?></span>

                            </div>

                        </div>

                        <div class="col-lg-4">
                            <div class="d-none d-md-none d-lg-flex flex-column align-items-flex-start gap-2">
                                <span
                                    style="color:  #25325F;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height: 27.2px">
                                    <?= get_field("address_title") ?></span>
                                <span
                                    style="color:  #6A7291;font-family: Manrope;font-size: 15px;font-style: normal;font-weight: 600;line-height:  27px ">
                                    <?= get_field("address") ?></span>
                                <span> <?= get_field("city") ?></span>
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="d-none d-md-none d-lg-flex flex-column align-items-flex-start gap-2">
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
                <div class="d-none d-lg-flex col-lg-2"></div>

                <!-- Newsletters -->

                <div class="col-12 col-lg-4">
                    <div style="display:flex;flex-direction: column; align-items: flex-start;gap: 2px; ">
                        <div class="d-flex flex-column align-items-flex-start gap-2 newsletter-container">

                            <!-- Logo -->

                            <a class="navbar-brand fs-4" href="<?= esc_url(home_url('/')); ?>">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/logo.svg" alt="Logo"
                                    style="height: 43px;width: 88px;">
                            </a>

                            <span
                                style="margin:20px 0; color: var(--Primary-600, #25325F);font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height: 27.2px">
                                <?= get_field("newsletter_text") ?>
                            </span>
                            <span
                                style=" color: #6A7291;leading-trim: both;text-edge: cap;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 500;line-height:  23.4px">
                                <?= get_field("privacy_statement") ?>
                            </span>
                            <!-- #25325F -->


                        </div>


                    </div>

                </div>
            </div>






            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row d-flex d-md-flex d-lg-flex flex-row align-items-center justify-content-between"
                            style="margin-top:50px">
                            <?php
                            foreach (get_field("arrow_section") as $testimonails) {
                                ?>
                            <div class="col-lg"
                                style="border-radius:15px; background-color:;  height:99px; margin:35px 0;">
                                <div class="d-flex flex-row align-items-center justify-content-between gap-4">
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
                        <div class="row d-flex d-md-flex d-lg-flex flex-row align-items-center justify-content-around"
                            style="margin-top:50px">

                            <?php
                            foreach (get_field("arrow_section_second_row") as $testimonails) {
                                ?>
                            <div class="col-lg"
                                style="border-radius:15px; background-color:;  height:99px; margin:35px 0;">
                                <div class="d-flex flex-row align-items-center justify-content-around  gap-4">
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

            <!-- Footer -->

            <div class="container" style="margin-top:100px; padding-bottom:50px;">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div
                            class="d-flex flex-column align-items-flex-start flex-md-row  flex-lg-row align-items-lg-center justify-content-between gap-2 ">
                            <span
                                style="color:#6A7291;leading-trim: both;text-edge: cap;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 500;line-height: 23.4px">
                                © Copyright 2024
                            </span>


                            <span
                                style="color:#6A7291;leading-trim: both;text-edge: cap;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 500;line-height: 23.4px">
                                Algemene leveringsvoorwaarden
                            </span>
                            <span
                                style="color:#6A7291;leading-trim: both;text-edge: cap;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 500;line-height: 23.4px">
                                Verwerkers overeenkomst
                            </span>
                            <span
                                style="color:#6A7291;leading-trim: both;text-edge: cap;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 500;line-height: 23.4px">
                                Privacy Statement
                            </span>

                        </div>
                    </div>

                    <div class="col-12 col-lg-2"></div>
                    <div class="col-12 col-lg-2">
                        <div
                            class="d-flex flex-column align-items-flex-start  flex-md-row flex-lg-row  align-items-md-center align-items-lg-end justify-content-end ">

                            <span
                                style="color:#6A7291;leading-trim: both;text-edge: cap;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 500;line-height: 23.4px">
                                Website Code Blauw
                            </span>
                        </div>

                    </div>
                </div>
            </div>


        </div>


        <!-- End of the first bg-color -->
    </div>






    <!-- ------------------------------------------------------------------- -->


    <!-- Swiper JS -->

    <script>
    let swiper1 = new Swiper('.swiper-container', {
        loop: true, //loop
        pagination: { //pagination(dots)
            el: '.swiper-pagination2',
            clickable: true,
        },

    })
    </script>




    <!--  mySwiper1 -->
    <script>
    let swiper2 = new Swiper('.mySwiper1', {
        slidesPerView: 1.3,
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


            540: {
                slidesPerView: 2,
                spaceBetween: 4,

            },

            556: {
                slidesPerView: 2.5,


                spaceBetween: 4,
            },
            992: {

                slidesPerView: 3.5,
                spaceBetween: 0,
            }


        }
    })
    </script>


    <script>
    let swiper3 = new Swiper('.mySwiper2', {
        slidesPerView: 1.1,
        grabCursor: true,
        spaceBetween: 1,

        pagination: {
            el: '.swiper-pagination1',
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {


            410: {
                slidesPerView: 1.1,
                spaceBetween: 2,

            },

            540: {
                slidesPerView: 1.4,
                spaceBetween: 2,

            },

            556: {
                slidesPerView: 2.1,


                spaceBetween: 2,
            },
            992: {

                slidesPerView: 3.5,
                spaceBetween: 0,
            }


        }
    })
    </script>





    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const swiper = new Swiper('.sample-slider', {
            loop: false,
            navigation: {
                nextEl: "#nextBtn",
                prevEl: "#prevBtn",
            },

        });

        // Custom Pagination
        const numbers = document.querySelectorAll('.custom-number');
        numbers.forEach((number, index) => {
            number.addEventListener('click', () => {
                // Remove active class from all numbers
                numbers.forEach(num => num.classList.remove('active'));

                // Add active class to clicked number
                number.classList.add('active');

                // Slide to the corresponding index
                swiper.slideTo(index);
            });
        });

        // Update custom pagination on slide change
        swiper.on('slideChange', function() {
            const activeIndex = swiper.activeIndex;
            numbers.forEach(num => num.classList.remove('active'));
            numbers[activeIndex].classList.add('active');
        });
    });
    </script>



</main>

<?php get_footer() ?>