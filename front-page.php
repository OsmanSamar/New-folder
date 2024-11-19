<?php get_header();

//Template Name: frontpage
?>

<main class="front-page">
    <style>
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


    @media (min-width: 992px) {

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

        /* 
        .swiper-container {
            width: 100%;
            height: 100%;
        } */

        /* .swiper-wrapper {
            display: flex;
            align-items: left;
        } */

        /* .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: left;
            text-align: center;
            height: 100%;
        } */




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

            <div class="row d-flex d-md-none d-lg-none" style="margin-top:-45px;">
                <?php
                foreach (get_field("testimonials_section") as $testimonial) {
                    ?>
                <div class="testimonial" style="border-radius:15px; background-color:#EFBDC5; width:350px;
                                            height:99px; margin:15px 0;">
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

        <div class="container">

            <div class="row d-none d-md-flex d-lg-flex" style="margin-top:-45px;">
                <?php
                foreach (get_field("testimonials_section") as $testimonial) {
                    ?>
                <div class="col-12 col-lg-4 testimonial " style=" border-radius:15px; background-color:#EFBDC5; width:390px ;
                            height: 287px; margin:0 18px;">
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
                <div class="row  d-flex flex-row align-items-center justify-content-between" style="">
                    <h1>SUE partners:</h1>
                    <?php
                    foreach (get_field("sue_partners") as $sue) {
                        ?>

                    <div class="" style="border-radius:15px; background-color:; width:350px;
                                            height:99px; margin:35px 0;">


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

    <div style="border-radius:40px;background: #25325F; height:850px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 ">
                    <div class="d-flex flex-column align-items-flex-start justify-content-left gap-4"
                        style="margin-left:23px; color:#FFF; margin-top:150px;">
                        <span
                            style="background-color:#274083;width: 203px;height: 30px;border-radius:40px;color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 700;line-height: 23.4px; text-align:center">Lorem
                            ipsum
                            dolor sit amet</span>
                        <span
                            style="color: #FFF;font-family: Manrope;font-size: 26px;font-style: normal;font-weight: 700;line-height: 39px;">Mi
                            vel turpis vitae mi mollis a id vitae turpis lacus</span>
                        <span style="color: var(--Neutral-400, #9AA0B7);

font-family: Manrope;
font-size: 16px;
font-style: normal;
font-weight: 700;
line-height:  27.2px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla egestas, nisl porttitor
                            vulputate,
                            felis orci venenatis nibh, ut diam ullamcorper sapien.</span>
                        <!-- Arrow and Let's Talk -->
                        <div class=" d-flex flex-row align-items-center justify-content-left gap-3 mt-4">
                            <a href="<?= esc_url(home_url('/')); ?>" style="border-radius: 14px;
                                                                background-color: #E94271; height:34px; width:48px;"
                                class="d-flex justify-content-center align-items-center">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/arrowbtn.svg" alt="Arrow"
                                    style="width:12px; height: 18px; margin:7px 0;  ">
                            </a>
                            <a href="<?= esc_url(home_url('/')); ?>"
                                style="font-family: Manrope; font-size:13px; font-style: normal; font-weight: 600; line-height: 120%; color:#FFF;;">
                                Schedule a consultation
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-3"></div>
                <div class="col-lg-3"></div>
            </div>

        </div>

    </div>








    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
    const swiper = new Swiper('.swiper-container', {
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





</main>

<?php get_footer() ?>