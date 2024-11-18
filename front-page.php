<?php get_header();

//Template Name: frontpage
?>

<main class="front-page">
    <style>
    .img-container {
        height: 350px;
        margin-top: -120px;
    }

    .bg-container {
        height: 200px;
    }

    .swiper-container {
        position: relative;
        width: 100%;
        height: 50px;
    }

    .swiper-container .swiper-pagination {
        bottom: -50px !important;
        display: block;
    }

    .swiper-container .swiper-pagination-bullet {
        width: 15px;
        height: 15px;
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


    /* .pagination-container {
        text-align: center;
    }


    .pagination-buttons {
        margin-bottom: 15px;
    }

    .pagination-btn {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #ccc;
        border: none;
        margin: 0 2px;
        cursor: pointer;
        outline: none;
    }

    .pagination-btn.active {
        background-color: #25325F;
    } */


    @media (min-width: 992px) {

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
            transition: background-color 0.3s;
        }

        .pagination-btn.active {
            background-color: #E94271;
        }

        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-wrapper {
            display: flex;
            align-items: left;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: left;
            text-align: center;
            height: 100%;
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


        <!-- 1<div class="d-none d-lg-block "
            style="background:#25325F; border-radius:40px;height:361px;width:1280px; margin-top:120px">
            <div class="row">
                <div class="d-flex align-items-center justify-content-between" style="margin-top:20px">

                    pagination-container
                    <div class="col-lg-1">
                        <div class="pagination-container  d-flex d-lg-row" style="margin-left:20px;">
                            <div class="pagination-container ">

                                <div class="pagination-buttons">
                                    <button class="pagination-btn active" data-target="0"></button>
                                    <button class="pagination-btn" data-target="1"></button>
                                    <button class="pagination-btn" data-target="2"></button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <a href="<?= get_field("trending_btn")['url'] ?>"
                        style="white-space:nowrap; color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 700;line-height:180%; background-color:#E94271; border-radius:20px; margin-left:60px;margin-right: 10px;"
                        class="btn col-lg-1 ">
                        <?= get_field("trending_btn")['title'] ?>
                    </a>
                    <span
                        style="color:#9AA0B7;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 700;line-height: 180%;"
                        class="col-lg-1">
                        10.10.2024
                    </span>

                    <div class="m-scroll">
                        <div class="m-scroll__title">
                            <div>
                                <h1> There is space here for the title of a trending article &nbsp;</h1>
                                <h1>Scrolling Text Example2 &nbsp;</h1>
                                <h1>Scrolling Text Example3 &nbsp;</h1>
                            </div>

                        </div>
                    </div>

                    Swiper On Small Screen

                     <div class="swiper-container col-lg-6 " style="--swiper-pagination-color: #fff">
                        <div class="swiper mySwiper"
                            style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: #f5a287">

                            <div class="swiper-wrapper">
                                <div class="swiper-slide " style="text-align:left;">
                                    <span> There is space here for the title of a trending article &nbsp;</span>
                                </div>
                                <div class="swiper-slide " style="text-align:left;">
                                    <span> There is space here for the title of a trending article &nbsp;</span>

                                </div>
                                <div class="swiper-slide " style="text-align:left;">
                                    <span> There is space here for the title of a trending article &nbsp;</span>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>


                    <div class="col-lg-4"></div>
                    <div class="col-lg-1" style="margin-left:-97px;">
                        <a style="border-radius:14px;
                                            background-color:white; height:39px; width:44px;"
                            class="d-flex justify-content-center align-items-center" href="#Maaktuin">
                            <img src="<?= get_field("arrow_btn")['url'] ?>" alt="<?= get_field("arrow_btn")['title'] ?>"
                                class="arrow_btn" style="width:12px; height:18px; margin:7px 0;object-fit:cover  " />
                        </a>
                    </div>
                </div>


            </div>

        </div> -->


        <!-- 2<div class="d-block d-lg-none "
            style="background:#25325F; border-radius:40px;height:361px;width: 390px; margin-top:120px">
            <div class="row">
                <div class="d-flex align-items-center justify-content-between" style="margin-top:20px">

                    <div class="col-lg-1"></div>
                    <a href="<?= get_field("trending_btn")['url'] ?>"
                        style="white-space:nowrap; color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 700;line-height:180%; background-color:#E94271; border-radius:20px; margin-left:20px;margin-right: 10px;"
                        class="btn col-lg-1 ">

                       
                        <?= get_field("trending_btn")['title'] ?>
                    </a>

                    <span
                        style="color: #FFF; font-family: Manrope; font-size: 13px;font-style: normal;font-weight: 700;line-height:23.4px"
                        class="col-lg-4">
                        There is space here for the title of a trending article
                    </span> 

                   <div class="m-scroll">
                        <div class="m-scroll__title">
                            <div>
                                <h1> There is space here for the title of a trending article &nbsp;</h1>
                                <h1>Scrolling Text Example2 &nbsp;</h1>
                                <h1>Scrolling Text Example3 &nbsp;</h1>
                            </div>

                        </div>
                    </div>




                    Swiper On Small Screen

                    <div class="swiper-container fadeIn" style="--swiper-pagination-color: #fff">
                        <div #swiperRef=""
                            class="swiper mySwiper smrow order-2 order-md-2 projecten-slider  d-flex d-md-flex d-lg-flex"
                            style="--swiper-navigation-color: #f5a287; --swiper-pagination-color: #f5a287">

                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <h1> There is space here for the title of a trending article &nbsp;</h1>
                                </div>
                                <div class="swiper-slide">
                                    <h1>Scrolling Text Example2 &nbsp;</h1>
                                </div>
                                <div class="swiper-slide">
                                    <h1>Scrolling Text Example3 &nbsp;</h1>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>




                    <div class="col-lg-4"></div>
                    <div class="col-lg-1" style="margin-right:20px;">
                        <a style="border-radius:14px;
                                                    background-color:white; height:39px; width:44px;"
                            class="d-flex justify-content-center align-items-center" aria-label="Go to the content"
                            href="#Maaktuin">
                            <img src="<?= get_field("arrow_btn")['url'] ?>" alt="<?= get_field("arrow_btn")['title'] ?>"
                                class="arrow_btn" style="width:12px; height:18px; margin:7px 0;" />
                        </a>


                    </div>
                </div>


            </div>

        </div> -->
        <!-- width:1280px; -->
        <div class="bg-container col-12 col-lg-12" style="background:#25325F; border-radius:40px;   margin-top:120px;">
            <div class="d-flex flex-row align-items-center justify-content-around">

                <div class="">
                    <div class="pagination-container d-flex flex-row align-items-start" style="margin-left:20px;">
                        <button class="pagination-btn active" data-target="0"></button>
                        <button class="pagination-btn" data-target="1"></button>
                        <button class="pagination-btn" data-target="2"></button>
                    </div>
                </div>

                <div class="">
                    <a href="<?= get_field("trending_btn")['url'] ?>"
                        style="white-space:nowrap; color: #FFF;font-family: Manrope;font-size: 13px;font-style:normal;font-weight: 700;line-height:180%; background-color:#E94271; border-radius:20px; ;"
                        class="btn  ">
                        <?= get_field("trending_btn")['title'] ?>
                    </a>
                </div>

                <!-- Swiper -->
                <div class="" style="width:50%; overflow:hidden; position:relative;">
                    <div class="swiper-container" style="flex-grow:1;">
                        <div class="swiper-wrapper">
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

        <!--  style="margin-top:-270px" -->
        <!-- <div class="d-none d-lg-block" style="margin-top:-270px">
            <img src="<?= get_field("bg_img")['url'] ?>" alt="<?= get_field("bg_img")['title'] ?>" class=""
                style="width:1280px; height:648px;border-radius: 40px; object-fit:cover" />
        </div> -->


        <!-- Testimonials Section on All Screens -->

        <div class="container">

            <div class="row d-none d-lg-flex" style="margin-top:-45px;">
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


        <div class="container">

            <div class="row d-flex d-lg-none" style="margin-top:-45px;">
                <?php
                foreach (get_field("testimonials_section") as $testimonial) {
                    ?>
                <div class="col-12 col-lg-4 testimonial " style=" border-radius:15px; background-color:#EFBDC5; width:350px ;
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

    </div>






    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    document.addEventListener("DOMContentLoaded", () => {

        const swiper = new Swiper(".swiper-container", {
            slidesPerView: 1,
            centeredSlides: true,
            loop: false,
            allowTouchMove: true,
        });

        // Pagination Buttons Logic
        const paginationButtons = document.querySelectorAll(".pagination-btn");

        paginationButtons.forEach((button, index) => {
            button.addEventListener("click", () => {
                // Remove active class from all buttons
                paginationButtons.forEach(btn => btn.classList.remove("active"));
                // Add active class to the clicked button
                button.classList.add("active");
                // Slide to the corresponding swiper slide
                swiper.slideTo(index);
            });
        });

        // Synchronize pagination buttons with Swiper
        swiper.on("slideChange", () => {
            paginationButtons.forEach(btn => btn.classList.remove("active"));
            paginationButtons[swiper.realIndex].classList.add("active");
        });
    });
    </script>





</main>

<?php get_footer() ?>