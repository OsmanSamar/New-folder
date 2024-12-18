<?php get_header();

//Template Name: financial
?>

<main class="financial flex-grow-1">

    <style>
    .container-max-width {
        border-radius: 30px;
        max-width: 1700px;
        height: 581px;
        margin: 150px auto 100px;
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
        margin: 30px 0px;
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
        margin: 150px auto 100px;
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
        height: 471px;
        max-width: 1700px;
        padding: 30px;
        margin: 150px auto 100px;
    }







    @media (min-width: 768px) {

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






    }


    @media (min-width: 992px) {
        .hero_white_block {
            width: 531px;
            /* position: absolute;
            bottom: -71px; */
            position: relative;
            bottom: 429px;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: left;
            padding: 30px;
            height: 581.608px;

        }

        b,
        strong {
            font-size: inherit;
        }


        .block_blue {
            height: 589px;
        }

        .img-on-blue-block {
            height: 589px;
            border-radius: 40px;
            object-fit: cover;
        }

        .left-side-width {
            max-width: 584px;
            padding: 10px;
        }





    }
    </style>

    <!--  -->

    <div class="container-max-width">
        <img src="<?= get_field("financial_hero_img")['url'] ?>" alt="<?= get_field("financial_hero_img")['title'] ?>"
            class="" style=" height: 581px; border-radius: 40px; object-fit: cover;" />
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
        <div class="row" style="margin-top:100px;">
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

            <div class=" col-lg-1"></div>

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
            <div class="col-12 col-md-6 col-lg-5  ">
                <img src="<?= get_field("blue_block_img")['url'] ?>" alt="<?= get_field("blue_block_img")['alt'] ?>"
                    class="img-on-blue-block" style="" />
            </div>
            <div class="col-12 col-md-6 col-lg-7 d-flex align-items-center justify-content-center">
                <div class="left-side-width" style="">


                </div>
            </div>

        </div>
    </div>




    <!-- Fifth Section -->
    <div class="container">
        <div class="row" style="margin-top:100px;">
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
            <div class=" col-lg-1"></div>
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
                    <a href="<?= $testimonial["offering_link"]['url'] ?>"
                        class="d-flex align-items-center justify-content-left gap-3" style="margin-top:20px;">
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
            <div class="swiperoffer sue-offering-swiper ">
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




    <div class="blue-container">
        <div class="container-let-talk">
            <!-- Left Side: Image and Texts -->
            <div class="left-side-img-text">
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