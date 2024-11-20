<?php get_header();

//Template Name: frontpage
?>

<main class="front-page">
    <style>
    /* Container for the background image and overlay */
    .responsive-container {
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    .background-image {
        width: 100%;
        height: auto;
    }

    /* Overlay styles */

    .overlay2 {
        /* position: absolute; */
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
        text-align: center;
    }

    .overlay {
        display: none;
    }



    /* Subtitle styles */
    .sub-title {
        background-color: #274083;
        color: #FFF;
        padding: 5px 20px;
        border-radius: 40px;
        font-family: Manrope, sans-serif;
        font-size: 0.8rem;
        font-weight: 700;
        margin-bottom: 10px;
    }

    /* Main title styles */
    .main-title {
        color: #25325F;
        font-family: Manrope, sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 20px;
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

    /* Responsive Design */
    @media (min-width: 768px) {
        .overlay2 {
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
            text-align: center;
        }

        .overlay {
            display: none;
        }

        .sub-title {
            font-size: 1rem;
        }

        .main-title {
            font-size: 2rem;
        }

        .icon {
            width: 140px;
        }
    }

    @media (min-width: 992px) {
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
            text-align: center;
        }

        /* .overlay {
            width: 449px;
            max-width: none;
        } */

        .icon {
            width: 160px;
        }
    }


    /*  */
    .mySwiper2 .swiper-pagination-bullet {
        background-color: white;
    }

    .mySwiper2 .swiper-pagination-bullet-active {
        background-color: #E94271;
    }

    .swiper-container2 {
        position: relative;
        width: 70%;
        margin: 0 auto;
    }

    .swiper-container2 .swiper-button-prev {
        left: -40px;
    }

    .swiper-container2 .swiper-button-next {
        right: -40px;
    }

    .swiper-container2 .swiper-pagination {
        bottom: -30px !important;
    }

    .swiper-container2 img {
        width: 100%;
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

    .swiper-container .swiper-pagination {
        bottom: -50px !important;
        display: block;
    }

    .swiper-container .swiper-pagination-bullet {
        width: 15px;
        height: 15px;

    }

    .swiper-pagination {
        position: relative;
    }



    /*  */
    .img-container {
        height: 350px;
        margin-top: -120px;
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
        /* font-family: Sora; */
        font-size: 18px;
        font-style: normal;
        font-weight: 700;
        line-height: 150%;
    }

    .card {
        border-radius: 20px;
        border: 1px solid #CBCFDE;
        background: #EDF3F4;
        width: ;


    }

    .testimonial-img {
        width: 95px;
        height: 95px;
        flex-shrink: 0;
        object-fit: cover;
        border-radius: 15px;
        margin-left: 12px;
    }

    .client-btn {
        border-radius: 14px;
        color: #FFFFFF;
        background-color: #E94271;
        width: 106px;
        height: 26px;
        text-align: center;
    }

    .card-title {
        color: #25325F;
        font-size: 14px;
        font-weight: 600;
        line-height: 27px;
    }

    /* .bg-container {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: -195px;
    }

    .testimonial-container {

        border-radius: 15px;
        background-color: #EFBDC5;
        width: 350px;
       
        margin: 10px 0;

    } */

    @media (min-width: 768px) {

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
    }

    @media (min-width: 992px) {

        .container2 {

            margin-top: -45px;
        }

        .testimonial-container {

            border-radius: 15px;
            background-color: #EDF3F4;
            width: 390px;
            height: 287px;
            margin: 0 18px;

        }



        .card {
            border-radius: 20px;
            border: 1px solid #CBCFDE;
            background: #EDF3F4;
            width: 546px;
            height: 172px;

        }

        .testimonial-img {
            width: 166px;
            height: 131px;
            flex-shrink: 0;
            object-fit: cover;
            border-radius: 15px;
            margin-left: 12px;
        }

        .client-btn {
            border-radius: 14px;
            color: #FFFFFF;
            background-color: #E94271;
            width: 106px;
            height: 26px;
            text-align: center;
        }

        .card-title {

            font-size: 15px;

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



    }

    @media (min-width: 992px) {
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





    }
    </style>



    <div class="container" style="margin-top:250px">

        <div class="row">
            <div class="d-flex align-items-center justify-content-between">
                <h1 class="left-text ">
                    <!-- Cloud complexity made <span style="color:#E94271">simple</span> -->
                    <?= get_field("left_text") ?>

                </h1>
                <div class="vl d-none d-lg-flex "></div>


                <p class="right-text d-none d-lg-flex ">
                    <?= get_field("right_text") ?>
                </p>
            </div>
        </div>

        <div class="d-flex d-lg-none" style="margin-top:50px;">
            <div class="row">
                <div class="col-6 d-flex align-items-center justify-content-center  mt-4">
                    <a href="<?= esc_url(home_url('/')); ?>" style="border-radius:14px;
                        background-color: #E94271; height:39px; width:44px;"
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



        <!-- width:1280px; -->
        <div class="bg-container col-12 col-lg-12" style="background:#25325F; border-radius:40px;   margin-top:120px;">
            <div class="d-flex flex-row align-items-center justify-content-around">


                <!-- pagination-container -->
                <!-- <div class="">
                    <div class="pagination-container d-flex flex-row align-items-start" style="margin-left:20px;">
                        <button class="pagination-btn active" data-target="0"></button>
                        <button class="pagination-btn" data-target="1"></button>
                        <button class="pagination-btn" data-target="2"></button> 

                         <div class="pagination-btn swiper-pagination active"></div>
                    </div>
                </div> -->

                <!-- Btn Trending -->
                <!-- <div class="">
                    <a href="<?= get_field("trending_btn")['url'] ?>"
                        style="white-space:nowrap; color: #FFF;font-family: Manrope;font-size: 13px;font-style:normal;font-weight: 700;line-height:180%; background-color:#E94271; border-radius:20px; ;"
                        class="btn  ">
                        <?= get_field("trending_btn")['title'] ?>
                    </a>
                </div> -->


                <div class="d-flex flex-row align-items-center justify-content-around gap-4"
                    style="width:50%; overflow:hidden; position:relative;">

                    <!-- Btn Trending -->
                    <div class="" style=" position: absolute;left: 10%;">
                        <a href="<?= get_field("trending_btn")['url'] ?>"
                            style="white-space:nowrap; color: #FFF;font-family: Manrope;font-size: 13px;font-style:normal;font-weight: 700;line-height:180%; background-color:#E94271; border-radius:20px; ;"
                            class="btn  ">
                            <?= get_field("trending_btn")['title'] ?>
                        </a>
                    </div>

                    <div class=" " style="width:50%; overflow:hidden; position:absolute; left:-22%;top:43%;">
                        <div class="swiper-pagination">
                        </div>
                    </div>
                    <div class="swiper swiper-container " style="flex-grow:1; --swiper-pagination-color: #E94271">
                        <div class="swiper-wrapper" style=" position: relative;left: 41%; overflow:hidden;">
                            <div class="swiper-slide">
                                <span style="color: white; text-align:left; font-size:16px;">There is space here for
                                    the title of a
                                    trending article</span>
                            </div>
                            <div class="swiper-slide">
                                <span style="color: white; text-align: center; font-size:16px;">Scrolling Text Example 2
                                </span>
                            </div>
                            <div class="swiper-slide">
                                <span style="color: white; text-align: center; font-size:16px;">Scrolling Text Example 3
                                </span>
                            </div>
                        </div>

                    </div>
                    <!-- <div class="swiper-pagination"></div> -->

                </div>



                <div class="">
                    <a style="border-radius:14px; background-color:white; height:39px; width:44px;"
                        class="d-flex justify-content-center align-items-center" href="#Maaktuin">
                        <img src="<?= get_field("arrow_btn")['url'] ?>" alt="<?= get_field("arrow_btn")['title'] ?>"
                            style="width:12px; height:18px; margin:7px 0; object-fit:cover;" />
                    </a>
                </div>

            </div>
        </div>



        <div class="col-12 col-lg-12 img-container" style="">
            <!-- width:390px; -->
            <img src="<?= get_field("bg_img")['url'] ?>" alt="<?= get_field("bg_img")['title'] ?>" class=""
                style=" height: ;border-radius:40px; object-fit:cover" />
        </div>

        <!-- Testimonials Section on All Screens -->

        <div class="container">

            <div class="row d-flex flex-column align-items-center justify-content-center d-md-none d-lg-none"
                style="margin-top:-195px;">
                <?php
                foreach (get_field("testimonials_section") as $testimonial) {
                    ?>
                <div class="testimonial"
                    style="border-radius:15px; background-color:#EDF3F4; width:350px; height:99px; margin:15px 0;">
                    <span
                        style="color: #E94271;font-family: Manrope;font-size: 14px;font-style: normal;font-weight: 700;line-height: 23.8px;">
                        <?= $testimonial["num"] ?>
                    </span>
                    <span
                        style="font-size: 14px;font-style: normal;font-weight: 700;line-height: 23.8px; color:#6A7291;">
                        <?= $testimonial["sub_title"] ?>
                    </span>
                    <div class="d-flex justify-content-end ">
                        <a style="border-radius:14px; background-color: #E94271; height:39px; width:44px;"
                            class="d-flex justify-content-center align-items-center" href="#Maaktuin">
                            <img src="<?= get_field("arrow_btn")['url'] ?>" alt="<?= get_field("arrow_btn")['title'] ?>"
                                class="arrow_btn" style="width:12px; height:18px; margin:7px 0; object-fit:cover  " />
                        </a>
                    </div>

                    <h1 style="color: #25325F; font-size: 21px;font-weight: 700;line-height:33.6px ">
                        <?= $testimonial["main_title"] ?>
                    </h1>

                </div>
                <?php
                }
                ?>
            </div>
        </div>


        <!-- here -->

        <div class="container">

            <div class="row d-none d-md-flex d-lg-flex container2" style="">
                <?php
                foreach (get_field("testimonials_section") as $testimonial) {
                    ?>
                <div class="testimonial-container" style=" ">
                    <span
                        style="color: #E94271;font-family: Manrope;font-size: 15px;font-style: normal;font-weight: 700;line-height:27px;">
                        <?= $testimonial["num"] ?>
                    </span>
                    <span
                        style="font-size: 14px;font-style: normal;font-weight: 700;line-height: 23.8px; color:#6A7291;">
                        <?= $testimonial["sub_title"] ?>
                    </span>
                    <h1 style="color: #25325F;
                                             font-size: 21px;
                                            font-weight: 700;line-height:33.6px ">
                        <?= $testimonial["main_title"] ?>
                    </h1>
                    <p class=""
                        style="font-size:13px;font-style: normal;font-weight: 500;line-height: 23.4px; color:#6A7291;  ">
                        <?= $testimonial["text"] ?>
                    </p>

                    <div class="d-flex align-items-center gap-2">
                        <a style="border-radius:14px;
                                            background-color: #E94271; height:39px; width:44px;"
                            class="d-flex justify-content-center align-items-center" href="#Maaktuin">
                            <img src="<?= get_field("arrow_btn")['url'] ?>" alt="<?= get_field("arrow_btn")['title'] ?>"
                                class="arrow_btn" style="width:12px; height:18px; margin:7px 0; object-fit:cover  " />
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



        <!-- Sue_Partners Repeater -->


        <div class="container">
            <div class="">
                <div class="row d-none d-md-none d-lg-flex flex-row align-items-center justify-content-between"
                    style="margin-top:50px">
                    <span class="col-lg-2 "
                        style="color:#25325F;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height: 27.2px ">SUE
                        partners:</span>
                    <?php
                    foreach (get_field("sue_partners") as $sue) {
                        ?>
                    <div class="col-lg" style="border-radius:15px; background-color:;  height:99px; margin:35px 0;">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <img src="<?= $sue['sue_partners_img']['url'] ?>"
                                alt=" <?= $sue['sue_partners_img']['alt'] ?>" class="sue-img"
                                style="width:56px;height:33px;flex-shrink: 0; object-fit: " />
                            <h1 style="color:#25325F;font-size: 15px;font-weight:600;line-height:27px ">
                                <?= $sue["sue_partners_text"] ?>
                            </h1>
                            <a style="border-radius:14px; background-color:; height:; width:;" class="" href="#">
                                <img src="<?= $sue['sue_partners_link']['url'] ?>"
                                    alt=" <?= $sue['sue_partners_link']['alt'] ?>" class=""
                                    style="width:4px; height:8px; object-fit:cover  " />
                            </a>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>



        <!--  Sue_Partners Repeater  Swiper -->
        <div style="margin-top:50px; margin-bottom: 60px;">
            <div class="position-relative d-flex d-md-flex d-lg-none align-items-center  ">


                <div class=" swiper2 mySwiper1 " style="flex-grow: 1;">
                    <div class="swiper-wrapper">
                        <?php
                        foreach (get_field("sue_partners") as $sue) {
                            ?>

                        <div class="swiper-slide d-flex justify-content-center w-fit" style="width:fit-content;">

                            <div
                                style="border-radius:15px; border-radius:100px;border: 1px solid #CBCFDE;background: #EDF3F4; width:272px; height:49px; margin:0 8px ;">
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
                                            style="width:4px; height:8px; object-fit:cover  " />
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






        <!-- Client Story -->
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 g-4">
                <?php foreach (get_field("client_story") as $testimonial) { ?>
                <div class="col">
                    <div class="card mb-3 d-flex flex-row align-items-center justify-content-center">
                        <div class="row g-0 align-items-center">
                            <div class=" col-4 ">
                                <img src="<?= $testimonial['client_img']['url'] ?>"
                                    alt="<?= $testimonial['client_img']['alt'] ?>" class="testimonial-img" />
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <div class="d-flex flex-row align-items-center justify-content-left gap-4">
                                        <a class="client-btn" href="<?= $testimonial['client_story_btn']['url'] ?>">
                                            <?= $testimonial['client_story_btn']['title'] ?>
                                        </a>
                                        <h4 class="card-title" style="">
                                            <?= $testimonial["client_name"] ?>
                                        </h4>
                                    </div>
                                    <h4 class="card-text mt-2"
                                        style="color:#25325F;font-size: 15px;font-weight:600;line-height:27px;">
                                        <?= $testimonial["client_text"] ?>
                                        <a href="#">
                                            <img src="<?= $testimonial['client_link']['url'] ?>"
                                                alt="<?= $testimonial['client_link']['alt'] ?>"
                                                style="width:4px; height:8px; object-fit:cover; margin-left:2px;" />
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

    <!-- The blue block -->
    <div style="border-radius:40px;background: #25325F; height:850px;  margin-top:150px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 ">
                    <div class="d-flex flex-column align-items-flex-start justify-content-left gap-4"
                        style="margin-left:23px; color:#FFF; margin-top:150px;">
                        <span
                            style="background-color:#274083;width:243px;height: 30px;border-radius:40px;color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 700;line-height: 23.4px; text-align:center">Lorem

                            <?= get_field("sub_title") ?>

                        </span>
                        <span
                            style="color: #FFF;font-family: Manrope;font-size: 26px;font-style: normal;font-weight: 700;line-height: 39px;">
                            <?= get_field("main_title") ?>

                        </span>
                        <span
                            style="color: var(--Neutral-400, #9AA0B7);font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height:  27.2px;">
                            <?= get_field("text") ?>
                        </span>
                        <!-- schedule_link -->
                        <div class=" d-flex flex-row align-items-center justify-content-left gap-3 mt-4">
                            <a href="#" style="border-radius: 14px;background-color: #E94271; height:38px; width:47px;"
                                class="d-flex justify-content-center align-items-center">
                                <img src="<?= get_field("schedule_link")['url'] ?>"
                                    alt="<?= get_field("schedule_link")['alt'] ?>"
                                    style="width:92px; height: 30px; margin:7px 0;" />
                            </a>
                            <span
                                style="font-family: Manrope; font-size:13px; font-style: normal; font-weight: 600; line-height: 120%; color:#FFF;;">
                                <?= get_field("schedule_text") ?>
                            </span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-3 d-none d-md-none d-lg-flex">
                    <div class="container">

                        <div class="row  d-flex flex-cloumn align-items-center justify-content-between"
                            style=" margin-top:150px;">

                            <?php
                            foreach (get_field("testimonails_section") as $testimonails) {
                                ?>

                            <div class="" style="border-radius:15px; background-color:; width:350px;
                                            height:99px; margin:35px 0;">


                                <div class="d-flex flex-row align-items-center justify-content-between">
                                    <div class="d-flex flex-row align-items-center justify-content-around">
                                        <span
                                            style="color:  #E94271;font-family: Manropefont-size: 15px;font-style: normal;font-weight: 600;line-height: 27px ">
                                            <?= $testimonails["num"] ?>
                                        </span>
                                        <span
                                            style="color: var(--Neutral-400, #9AA0B7);font-family: Manrope;font-size: 15px;font-style: normal;font-weight: 600;line-height: 27px;">
                                            <?= $testimonails["title"] ?>

                                        </span>
                                    </div>

                                </div>
                                <span
                                    style="color: #FFF;font-family: Manrope;font-size: 21px;font-style: normal;font-weight: 700;line-height: 33.6px">
                                    <?= $testimonails["text"] ?>
                                </span>

                                <a href="#"
                                    style="border-radius:14px;background-color: #E94271;height:38px; width:47px;"
                                    class="d-flex justify-content-center align-items-center" href="#Maaktuin">

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


                <div class="col-lg-3 d-none d-md-none d-lg-flex">
                    <div class="container">

                        <div class="row  d-flex flex-cloumn align-items-center justify-content-between"
                            style=" margin-top:150px;">

                            <?php
                            foreach (get_field("testimonails_section") as $testimonails) {
                                ?>

                            <div class="" style="border-radius:15px; background-color:; width:350px;
                                                            height:99px; margin:35px 0;">


                                <div class="d-flex flex-row align-items-center justify-content-between">
                                    <div class="d-flex flex-row align-items-center justify-content-around">
                                        <span
                                            style="color:  #E94271;font-family: Manropefont-size: 15px;font-style: normal;font-weight: 600;line-height: 27px ">
                                            <?= $testimonails["num"] ?>
                                        </span>
                                        <span
                                            style="color: var(--Neutral-400, #9AA0B7);font-family: Manrope;font-size: 15px;font-style: normal;font-weight: 600;line-height: 27px;">
                                            <?= $testimonails["title"] ?>

                                        </span>
                                    </div>

                                </div>
                                <span
                                    style="color: #FFF;font-family: Manrope;font-size: 21px;font-style: normal;font-weight: 700;line-height: 33.6px">
                                    <?= $testimonails["text"] ?>
                                </span>

                                <a href="#"
                                    style="border-radius:14px;background-color: #E94271;height:38px; width:47px;"
                                    class="d-flex justify-content-center align-items-center" href="#Maaktuin">

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
                <div style="margin-top:50px; margin-bottom: 60px;">
                    <div class="position-relative d-flex d-md-flex d-lg-none align-items-center  ">


                        <div class="swiper mySwiper2 " style="flex-grow: 1;">
                            <div class="swiper-wrapper">
                                <?php
                                foreach (get_field("testimonails_section") as $testimonails) {
                                    ?>
                                <div class="swiper-slide d-flex align-items-center justify-content-center w-fit"
                                    style="width:fit-content;">
                                    <div
                                        style="border-radius:15px; background-color:white; width:350px;height:139px; margin:35px 20px;padding: 16px 20px;">
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div
                                                class="d-flex flex-row align-items-center justify-content-around gap-2">
                                                <span
                                                    style="color:#E94271;font-family: Manropefont-size: 15px;font-style: normal;font-weight: 600;line-height:27px;">
                                                    <?= $testimonails["num"] ?>
                                                </span>
                                                <span
                                                    style="color: var(--Text, #6A7291);font-family: Manrope;font-size: 14px;font-style: normal;font-weight: 700;line-height:23.8px;">
                                                    <?= $testimonails["title"] ?>
                                                </span>
                                            </div>

                                        </div>
                                        <span
                                            style="color: var(--Primary-600, #25325F);font-family: Manrope;font-size: 18px;font-style: normal;font-weight: 700;line-height: 27px;">
                                            <?= $testimonails["text"] ?>
                                        </span>

                                        <a href="#"
                                            style="border-radius:14px;background-color: #E94271;height:38px; width:47px;"
                                            class="d-flex justify-content-center align-items-center" href="#Maaktuin">

                                            <img src="<?= $testimonails['link']['url'] ?>"
                                                alt=" <?= $testimonails['link']['alt'] ?>" class=""
                                                style="width:12px; height: 18px; margin:7px 0;" />
                                        </a>

                                    </div>
                                </div>

                                <?php
                                }
                                ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End of The blue block -->

    <!-- SUE Insights -->
    <div class="container" style="margin-top:40px;">


        <div class="row">
            <div class="col-6 col-lg-6">
                <span
                    style="color: var(--Text, #6A7291);font-family: Manrope;font-size: 15px;font-style: normal;font-weight: 600;line-height:27px;">
                    <?= get_field("sue_insights") ?>
                </span>
            </div>
            <div class="col-6 col-lg-6 ">
                <div class=" d-flex flex-row align-items-center justify-content-end gap-3">
                    <a href="#"
                        style="background-color: #E94271; height:30px; width:30px; border-radius: 8px;background:#25325F;"
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

        <div style=" border-bottom: 1px solid  #25325F; margin:30px 0;"></div>

        <div class="row">
            <div class="col-12 col-lg-5 col-md-12">



                <!-- Client Story -->
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-5 col-md-12" style="margin-top:150px;">
                            <?php foreach (get_field("article_testimonails") as $testimonial) { ?>
                            <div class="col">
                                <div class="card mb-3 d-flex flex-row align-items-center justify-content-center">
                                    <div class="row g-0 align-items-center">
                                        <div class=" col-4 ">
                                            <img src="<?= $testimonial['img']['url'] ?>"
                                                alt="<?= $testimonial['img']['alt'] ?>" class="testimonial-img" />
                                        </div>
                                        <div class="col-8">
                                            <div class="card-body">
                                                <div
                                                    class="d-flex flex-row align-items-center justify-content-left gap-4">
                                                    <a class="client-btn" href="<?= $testimonial['btn']['url'] ?>"
                                                        style="width:94px; height:30px;">
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
                                                            alt="<?= $testimonial['client_link']['alt'] ?>"
                                                            style="width:4px; height:8px; object-fit:cover; margin-left:2px;" />
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
            <div class="d-none d-md-none d-lg-block col-lg-3"></div>
            <div class="col-12 col-lg-4">
                <!-- hereeee -->
                <div class="d-flex flex-column align-items-flex-start justify-content-left gap-4"
                    style="margin-left:; color:#FFF; margin-top:150px;">
                    <span
                        style="background-color:#274083;width:243px;height: 30px;border-radius:40px;color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 700;line-height: 23.4px; text-align:center">Lorem
                        <?= get_field("sub_title") ?>
                    </span>
                    <span
                        style="color:#25325F;font-family: Manrope;font-size: 26px;font-style: normal;font-weight: 700;line-height: 39px;">
                        <?= get_field("main_title") ?>

                    </span>
                    <span
                        style="color:#6A7291;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height:  27.2px;">
                        <?= get_field("text") ?>
                    </span>

                </div>


                <div class="row">
                    <div class="col-12 col-lg-6" style="">

                        <div style="border-bottom: 1px solid   #25325F; ">

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


                        <div style="border-bottom: 1px solid  #25325F;">
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

                        <div style="border-bottom: 1px solid  #25325F;">
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



                    <div class="col-12 col-lg-6 ">

                        <div style="border-bottom: 1px solid  #25325F;">
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

                        <div style="border-bottom: 1px solid  #25325F;">
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
        </div>


        <!-- <div class="row">
            <div class=" " style="position:relative; ">
                <img src="<?= get_field("sue_customers_bg")['url'] ?>" alt="<?= get_field("sue_customers_bg")['alt'] ?>"
                    style="height:610px" />
                <div class="d-flex flex-column align-items-left justify-content-center"
                    style="background-color:white; border-radius:14px;width: 449px;height: 454px; position: absolute; top:15%;left:88px;">
                    <span
                        style="background-color:#274083;width:243px;height: 30px;border-radius:40px;color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 700;line-height: 23.4px; text-align:center; margin-left:35px;">Lorem
                        <?= get_field("sub_title") ?>
                    </span>
                    <span
                        style="color:#25325F;font-family: Manrope;font-size: 26px;font-style: normal;font-weight: 700;line-height: 39px;  margin-left:37px;">
                        <?= get_field("main_title") ?>
                    </span>

                    <div class="row">
                        <div class="col-12 col-lg-12" style="margin-left:16px; margin-top:30px;">

                            <img src="<?= get_field("rabobank_icon")['url'] ?>"
                                alt="<?= get_field("rabobank_icon")['alt'] ?>"
                                style="width: 161px;height: 82px; margin-left:20px;" />
                            <img src="<?= get_field("bol_icon")['url'] ?>" alt="<?= get_field("bol_icon")['alt'] ?>"
                                style="width: 161px;height: 82px; margin-left:20px;" />
                        </div>

                        <div class="col-12 col-lg-12" style="margin-left:16px; margin-top:30px;">

                            <img src="<?= get_field("kpn_icon")['url'] ?>" alt="<?= get_field("kpn_icon")['alt'] ?>"
                                style="width: 161px;height: 82px; margin-left:20px;" />
                            <img src="<?= get_field("booking_icon")['url'] ?>"
                                alt="<?= get_field("booking_icon")['alt'] ?>"
                                style="width: 161px;height: 82px; margin-left:20px;" />
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


        <div class="row">
            <div class="responsive-container">
                <img src="<?= get_field("sue_customers_bg")['url'] ?>" alt="<?= get_field("sue_customers_bg")['alt'] ?>"
                    class="background-image" />
                <div class="overlay">
                    <span class="sub-title">Lorem <?= get_field("sub_title") ?></span>
                    <span class="main-title"><?= get_field("main_title") ?></span>

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
            </div>


            <div class="overlay2">
                <span class="sub-title">Lorem <?= get_field("sub_title") ?></span>
                <span class="main-title"><?= get_field("main_title") ?></span>

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

        </div>


    </div>


















    <!-- ------------------------------------------------------------------- -->


    <!-- Swiper JS -->

    <script>
    let swiper1 = new Swiper('.swiper-container', {
        loop: true, //loop
        pagination: { //pagination(dots)
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: { //navigation(arrows)
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
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


            410: {
                slidesPerView: 1.1,
                spaceBetween: 4,

            },

            540: {
                slidesPerView: 1.4,
                spaceBetween: 2,

            },

            556: {
                slidesPerView: 2.3,


                spaceBetween: 2,
            },
            992: {

                slidesPerView: 3.5,
                spaceBetween: 0,
            }


        }
    })
    </script>







</main>

<?php get_footer() ?>