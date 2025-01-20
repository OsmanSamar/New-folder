<?php get_header();

//Template Name: aboutus
?>

<main class="aboutus flex-grow-1">
    <style>
        b,
        strong {
            color: #e94271;
            font-family: inherit;
            font-size: inherit;
            font-style: inherit;
            line-height: inherit;
        }

        .container-max-width {
            position: relative;
            text-align: center;
            border-radius: 40px;
            max-width: 1700px;
            height: 581px;
            margin: 200px auto 10px;
        }

        .centered {
            position: absolute;
            top: 68%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .hero-text {
            color: #FFF;
            text-align: center;
            font-feature-settings: 'ss01' on;
            font-family: Sora, sans-serif;
            font-size: 38px;
            font-weight: 700;
            line-height: 1.2;
            padding: 0;
            margin: 0;

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


        .center-left {
            position: absolute;
            top: 50%;
            left: 2%;
            /* transform: translate(-50%, -50%); */
            width: 449px;
            height: 355px;
            background-color: #FFF;
        }



        @media (max-width: 768px) {}



        @media (min-width: 992px) {

            b,
            strong {
                font-size: inherit;
            }

            .hero-text {
                font-family: Sora;
                font-size: 45px;
                font-style: normal;
                font-weight: 700;
                line-height: 54px;
            }




            .partner-container {
                width: 165px;
                height: 61px;
            }


        }
    </style>
    <div>
        <!-- 1 -->
        <div class="back-to-home" style="margin-top:170px; margin-bottom:-123px; ">
            <a href="<?= get_field("back_to_home")['url'] ?>"
                class="d-flex justify-content-center align-items-center gap-2">
                <img src="<?= get_field("back_home_btn")['url'] ?>" alt="<?= get_field("back_home_btn")['alt'] ?>"
                    style="width:20px; height:20px; margin:7px 0;" />
                <span class="separator"><img src="<?= get_field("separator")['url'] ?>"
                        alt="<?= get_field("separator")['alt'] ?>" style="width:3px; height:6px;" /> </span>
                <span class="first">About us</span>
            </a>
        </div>

        <!-- 2 -->
        <!-- Hero Section -->
        <div class="container-max-width">
            <img src="<?= get_field("aboutus_hero_img")['url'] ?>" alt="<?= get_field("aboutus_hero_img")['title'] ?>"
                class="container-img" style=" height: 580px; border-radius: 40px; object-fit: cover;" />
            <div class="row">
                <div class="col-12">
                    <div class="centered">
                        <span class="hero-text">
                            <?= get_field("hero_text") ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3 -->
        <!-- Third Section -->
        <div class="container">
            <div class="row" style="margin-top:50px;">
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="left_col">
                        <div class="left-btn">
                            <?= get_field("left_btn") ?>
                        </div>
                        <span class="title">
                            <?= get_field("aboutus_left_title") ?> </span>

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


        <!-- 4 -->
        <!--About us Repeater  Swiper On Small -->
        <div style="margin-top:50px; margin-bottom: 60px;">
            <div class="position-relative d-block d-lg-none  align-items-center  justify-content-between ">
                <div class="swiperaboutus aboutus-swiper ">
                    <div class="swiper-wrapper">
                        <?php
                        foreach (get_field("aboutus_testimonials") as $sue) {
                            ?>
                            <div class="swiper-slide d-flex justify-content-center align-items-center"
                                style="width:fit-content;">
                                <div
                                    class="d-flex flex-row align-items-center justify-content-center gap-4 partners-container">
                                    <a href=" <?= $sue['aboutus_testimonials_link']['url'] ?>" target="_blank">
                                        <div class="d-flex flex-row align-items-center justify-content-evenly partners-container"
                                            style="border-radius:8px;border:1px solid #CBCFDE; background:#EDF3F4; width:165px;height:61px;">
                                            <img src="<?= $sue['aboutus_testimonials_img']['url'] ?>"
                                                alt=" <?= $sue['aboutus_testimonials_img']['alt'] ?>" class=""
                                                style="width:56px;height:45px;flex-shrink: 0; object-fit:content" />
                                            <img src="<?= $sue['aboutus_testimonials_link']['url'] ?>"
                                                alt=" <?= $sue['aboutus_testimonials_link']['alt'] ?>" class="sue-img"
                                                style="width:4px; height:8px;object-fit:content" />
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


        <!-- About us Repeater On LG -->
        <div class="container">
            <div class="row d-none d-md-none d-lg-flex align-items-center justify-content-between"
                style="margin-top:40px; margin-bottom:14px; flex-wrap:nowrap;">
                <?php
                foreach (get_field("aboutus_testimonials") as $sue) {
                    ?>
                    <div class="col-auto partner-item">
                        <a href=" <?= $sue['aboutus_testimonials_link']['url'] ?>" target="_blank">
                            <div class="d-flex flex-row align-items-center justify-content-evenly partner-container "
                                style="border-radius:8px;border:1px solid #CBCFDE; background:#EDF3F4;  ">
                                <img src="<?= $sue['aboutus_testimonials_img']['url'] ?>"
                                    alt=" <?= $sue['aboutus_testimonials_img']['alt'] ?>" class="sue-img"
                                    style="width:56px;height:45px;flex-shrink: 0; object-fit:content" />
                                <img src="<?= $sue['aboutus_testimonials_link']['url'] ?>"
                                    alt=" <?= $sue['aboutus_testimonials_link']['alt'] ?>" class="sue-img"
                                    style="width:4px; height:8px;  object-fit:content" />
                            </div>
                        </a>
                    </div>

                    <?php
                }
                ?>
            </div>
        </div>


        <!-- 5 -->
        <div class="container-max-width">
            <img src="<?= get_field("img_section")['url'] ?>" alt="<?= get_field("img_section")['title'] ?>"
                class="container-img" style=" height: 580px; border-radius: 40px; object-fit: cover;" />
            <div class="row">
                <div class="col-12">
                    <div class="center-left">
                        <span class="hero-text">
                            <?= get_field("hero_text") ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>



























        <!-- Aboutus-swiper -->
        <script>
            let swiperaboutus = new Swiper('.aboutus-swiper', {
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
                        slidesPerView: 2.2,
                        spaceBetween: 1,

                    },

                    412: {
                        slidesPerView: 2.3,
                        spaceBetween: 1,

                    },

                    540: {
                        slidesPerView: 4.3,
                        spaceBetween: 1,

                    },

                    556: {
                        slidesPerView: 4.3,
                        spaceBetween: 1,
                    },
                    992: {

                        slidesPerView: 4.3,
                        spaceBetween: 1,
                    },
                    1024: {

                        slidesPerView: 6,
                        spaceBetween: 1,
                    }


                }
            })
        </script>


</main>



<?php get_footer() ?>