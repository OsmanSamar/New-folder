<?php get_header();

//Template Name: multistax
?>

<main class="multistax flex-grow-1  d-flex  justify-content-center w-100   bg">
    <style>
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
        width: 70%;
        margin: 0 auto;
    }

    .swiper-container .swiper-pagination {
        bottom: -30px !important;
    }


    .swiper-pagination-bullet {
        background-color: #FFF !important;
    }

    @media (min-width: 992px) {

        b,
        strong {
            font-size: inherit;
        }
    }
    </style>




    <div class="container">
        <!-- 1 -->
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
        <div>
            <!-- class="container" -->
            <div class="row " style="margin-top:210px;">
                <div class="col-lg-3 d-md-none d-none d-lg-block"></div>
                <div
                    class="d-inline-flex align-items-center justify-content-center flex-column gap-3 col-lg-6 col-12 col-md-6">
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
                    <div class="d-flex justify-content-between align-items-center gap-2"
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

        <!-- 3 -->
        <div style="margin-top:80px;">
            <div class="swiper-container">
                <div class="swiperimg offering-swiper">
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
            <div class="row " style="margin-top:210px;">
                <div class="col-lg-3 d-md-none d-none d-lg-block"></div>
                <div
                    class="d-inline-flex align-items-center justify-content-center flex-column gap-3 col-lg-6 col-12 col-md-6">
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
                    <div class="d-flex justify-content-between align-items-center gap-2"
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























































































    </div>

    <script>
    let swiperimg = new Swiper('.offering-swiper', {
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
</main>



<?php get_footer() ?>