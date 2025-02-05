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
            /* width: 209px; */
            width: fit-content;
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
            /* top: 50%; */
            left: 50%;
            /* transform: translate(-50%, -50%); */
            transform: translate(-50%, -159%);
            width: 385px;
            height: 250px;
            background-color: #FFF;
            border-radius: 20px;
        }

        .center-left-text {
            color: #25325F;
            font-family: Manrope;
            font-size: 16px;
            font-style: normal;
            font-weight: 500;
            line-height: 32px;
            text-align: left;

        }



        .border-container {
            border-radius: 40px;
            max-width: 1700px;
            height: 576px;
            border-radius: 40px;
            border: 1px solid #CBCFDE;
            margin: 100px auto 10px;
        }


        .testi-num {
            color: #E94271;
            font-family: Manrope;
            font-size: 14px;
            font-weight: 700;
            line-height: 23.8px;
        }

        .testi-title {
            font-size: 14px;
            font-weight: 700;
            line-height: 23.8px;
            color: #6A7291;
            font-family: Manrope;
        }

        .testi-text {
            color: #25325F;
            font-family: Manrope;
            font-size: 21px;
            font-style: normal;
            font-weight: 700;
            line-height: 33.6px;
        }

        .block_blue {
            border-radius: 40px;
            background: #25325F;
            max-width: 1700px;
            flex-direction: column;
            margin: 50px auto 10px;
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        .title-block {
            color: #FFF;
            /* Desktop/H3 */
            font-family: Manrope;
            font-size: 26px;
            font-style: normal;
            font-weight: 700;
            line-height: 39px;
        }

        .left-text-block {
            color: #9AA0B7;

            /* Desktop/Lead (Bold) */
            font-family: Manrope;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: 27.2px;
        }


        /* .left-side-width {
        margin-top: 50px;
        padding: 24px;

    } */

        .offering-num {
            color: #E94271;
            font-family: Manrope;
            font-size: 14px;
            font-weight: 700;
            line-height: 23.8px;
        }

        .challenge-title {
            color: #9AA0B7;
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
        }

        .first-row {
            margin-bottom: 20px;
        }

        .custom-container {
            max-width: ;
            max-height: 492px;
            border: 1px solid #CBCFDE;
            border-radius: 25px;
            padding: 45px 20px;
            margin-top: -160px;
            margin-bottom: 30px;
        }


        /* Custom Pagination Numbers */
        .custom-pagination {
            display: flex;
            gap: 8px;
            align-items: center;
            margin-bottom: 20px;
            justify-content: space-between;
        }


        .custom-number {
            position: relative;
            border: 1px solid var(--Line, #CBCFDE);
            border-radius: 100px;
            color: #000;
            font-size: 12px;
            font-weight: bold;
            width: 17px;
            height: 30px;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }


        .custom-title {
            color: #FFF;
            font-family: Manrope;
            font-size: 13px;
            font-style: normal;
            font-weight: 700;
            line-height: 23.4px;
        }

        .custom-number.active {
            background-color: #274083;
            color: #fff;
            width: auto;
            padding: 0 6px;
        }

        .custom-number .custom-title {
            display: none;
            margin-left: 10px;
            white-space: nowrap;
        }

        .right_section {
            margin-top: 188px;
        }

        .form_section {
            border-radius: 30px;
            background: #25325F;
            max-width: 1700px;
            /* height: 1400px; */
            margin: 50px auto 50px;
        }

        .test-block::before {
            content: " ";
            position: absolute;
            background: linear-gradient(13deg, rgba(55, 75, 141, 0.40) 1.5%, rgba(54, 70, 124, 0.00) 94.53%);
            top: 0;
            z-index: -1;
            border-radius: 30px;
            width: 97%;
            height: 100%;
        }

        .left-container {
            border-radius: 30px;
            color: white;
            height: 264px;
            padding: 0 26px;
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

        @media (min-width: 768px) {

            .center-left {
                position: absolute;
                top: 50%;
                /* Added left */
                left: 50%;
                /* transform: translate(-76%, -50%); */
                transform: translate(-76%, -131%);
                width: 449px;
                height: 355px;
                background-color: #FFF;
                border-radius: 20px;
            }

            .center-left-text {
                font-size: 28px;
            }

            .border-container {
                height: 278px;
            }

            .block_blue {
                height: 589px;
            }


            .first-row {
                margin-bottom: 60px;
            }

            .custom-container {
                margin-top: -96px;
            }

            .custom-number.active .custom-title {
                display: inline-block;
            }

            .right_section {
                margin-top: 115px;
            }

            .border-left {
                border-left: 1px solid white;
                display: flex;
                flex-direction: column;
                padding: 20px 0 20px 60px;
                row-gap: 16px;
            }



            .left-content {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                margin-top: 50px;
                gap: 20px;
            }


        }



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

            .center-left {
                position: absolute;
                /* top: 50%; */
                /* transform: translate(-100%, -50%); */
                /* left: 50%;
                transform: translate(-90%, -50%); */
                /* new */
                transform: translate(-100%, -132%);
                width: 449px;
                height: 355px;
                background-color: #FFF;
                border-radius: 20px;
            }

            .center-left-text {
                font-size: 26px;
                font-weight: 700;
                line-height: 39px;
            }

            .border-container {
                height: 263px;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .block_blue {

                height: 540px;
            }

            .left-side-width {
                max-width: 694px;
                padding: 10px;
                display: flex;
                flex-direction: column;
                row-gap: 70px;
            }

            .first-row {
                margin-bottom: unset;
            }

            .custom-container {
                max-width: ;
                border: 1px solid #CBCFDE;
                border-radius: 25px;
                padding: 45px 20px;
                margin-top: 0;
                height: 423px;
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
                font-size: 16px;
            }


            .custom-number.active .custom-title {
                display: inline-block;
            }

            .right_section {
                margin-top: 0;
            }


            .form_section {
                height: 575px;
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



        }
    </style>


    <!-- BreadCrumb Section -->
    <?php get_template_part('components/breadcrumb') ?>
    <!--End  Of BreadCrumb Section -->


    <!-- Hero Section -->
    <div class="container-max-width" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
        data-aos-duration="500" data-aos-easing="ease-in-out">
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
    <div class="container">
        <div class="row" style="margin-top:50px;">
            <div class="col-12 col-md-6 col-lg-5" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                data-aos-duration="400" data-aos-easing="ease-in-out">
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

            <div class="col-12 col-md-6 col-lg-6" data-aos="fade-left" data-aos-offset="100" data-aos-delay="50"
                data-aos-duration="400" data-aos-easing="ease-in-out">
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
                            <div class="d-flex flex-row align-items-center justify-content-center gap-4 partners-container">
                                <a href=" <?= $sue['aboutus_testimonials_link']['url'] ?>" target=" _blank">
                                    <div class="d-flex flex-row align-items-center justify-content-evenly partners-container"
                                        style="border-radius:8px;border:1px solid #CBCFDE; background:#EDF3F4; width:165px;height:61px;">
                                        <img src="<?= $sue['aboutus_testimonials_img']['url'] ?>"
                                            alt=" <?= $sue['aboutus_testimonials_img']['alt'] ?>" class=""
                                            style="width:56px;height:45px;flex-shrink: 0; object-fit:content" />
                                        <img src="<?= $sue['aboutus_testimonials_img_link']['url'] ?>"
                                            alt=" <?= $sue['aboutus_testimonials_img_link']['alt'] ?>" class="sue-img"
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
                            <img src="<?= $sue['aboutus_testimonials_img_link']['url'] ?>"
                                alt=" <?= $sue['aboutus_testimonials_img_link']['alt'] ?>" class="sue-img"
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
    <div class="container-max-width" style="  margin: 100px auto 10px;">
        <img src="<?= get_field("img_section")['url'] ?>" alt="<?= get_field("img_section")['title'] ?>"
            class="container-img" style=" height: 580px; border-radius: 40px; object-fit: cover;" />
        <div class="container" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50" data-aos-duration="400"
            data-aos-easing="ease-in-out">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="center-left">
                        <div class="left_col " style="padding: 50px;">
                            <span class="left-btn" style="text-align:left; justify-content-left">
                                <?= get_field("center_left_title") ?>
                            </span>

                            <span class="center-left-text">
                                <?= get_field("center_left_text") ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- 6 -->
    <div class="border-container" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="500"
        data-aos-easing="ease-in-out">
        <div class="container">
            <div class="row">
                <?php foreach (get_field("testimonials") as $testimonial) {
                    ?>
                    <div class="col-12 col-lg-3 col-md-6">
                        <div class=" d-flex flex-column justify-content-center gap-2"
                            style="margin:20px; align-items:flex-start;">
                            <div class="d-flex align-items-center gap-2">
                                <span class="testi-num"><?= $testimonial["num"] ?></span>
                                <span class="testi-title"><?= $testimonial["title_tes"] ?></span>
                            </div>
                            <h3 class="testi-text"><?= $testimonial["text_tes"] ?></h3>
                        </div>

                    </div>

                    <?php
                }
                ?>
            </div>
        </div>
    </div>

    <!-- 7 -->
    <!-- The Blue Block With Img & Text -->
    <div class="block_blue" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="500"
        data-aos-easing="ease-in-out">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-12 col-lg-4 first-row">
                    <div class="left_col">
                        <div class="left-btn">
                            <?= get_field("left_block") ?>
                        </div>
                        <span class="title-block">
                            <?= get_field("left_block_title") ?>
                        </span>

                        <span class="left-text-block" style="">
                            <?= get_field("left_block_text") ?>
                        </span>
                    </div>

                </div>

                <div class="col-lg-2 d-none d-lg-block">
                </div>


                <div class="col-12 col-md-12 col-lg-6 d-flex align-items-center justify-content-around">
                    <div class="left-side-width">
                        <div class="row">
                            <?php
                            $testimonials = get_field("challenge_testimonials");
                            foreach ($testimonials as $index => $testimonial) {
                                if ($index % 2 == 0 && $index != 0) {
                                    echo '</div><div class="row">';
                                }
                                ?>
                                <div class="col-12 col-md-6 col-lg-6">
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


    <!-- 8 -->
    <div class="container">
        <div class="row" style="margin-top:50px;">
            <div class="col-12 col-md-6 col-lg-5" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                data-aos-duration="500" data-aos-easing="ease-in-out">
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

            <div class="col-12 col-md-6 col-lg-6" data-aos="fade-left" data-aos-offset="100" data-aos-delay="50"
                data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="right_col">
                    <span class="right-text">
                        <?= get_field("second_text") ?>
                    </span>
                </div>

            </div>
        </div>
    </div>

    <!-- 9 -->
    <div class="container">
        <div class="row" style="margin-top:50px;">
            <div class="col-12 col-md-12 col-lg-5" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                data-aos-duration="500" data-aos-easing="ease-in-out">
                <img src="<?= get_field("left_img_aboutus")['url'] ?>" alt="<?= get_field("left_img_aboutus")['alt'] ?>"
                    style="max-width:; max-height:412px; border-radius: 25px; object-fit:cover" />
            </div>

            <!-- Right Section -->
            <div class="col-12 col-lg-7 right_section order-1 order-lg-2" data-aos="fade-left" data-aos-offset="100"
                data-aos-delay="50" data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="custom-container" style="">
                    <div class="custom-pagination">
                        <div class="d-flex d-md-none d-lg-none justify-content-left">
                            <a href="#" id="prevBtn"
                                style=" height:30px; width:30px; border-radius:8px; border: 1px solid #6A7291;"
                                class="d-flex justify-content-center align-items-center">
                                <img src="<?= get_field("prev_btn")['url'] ?>"
                                    alt="<?= get_field("prev_btn")['title'] ?>"
                                    style="width:12px; height:18px; margin:7px 0; object-fit:cover" />
                            </a>
                        </div>


                        <div class="d-flex align-items-center gap-1">
                            <div class="custom-number active" data-index="0">
                                1
                                <span class="custom-title">Mi vel turpis vitae mi a id
                                    vitae</span>
                            </div>
                            <div class="custom-number" data-index="1">2

                                <span class="custom-title">Vel turpis lacus vitae mi mollis</span>
                            </div>
                            <div class="custom-number" data-index="2">3

                                <span class="custom-title">Turpis lacus vitae mi mollis volutpat</span>
                            </div>
                        </div>

                        <div class="d-flex d-md-none d-lg-none justify-content-start">
                            <a href="#" id="nextBtn"
                                style=" height:30px; width:30px; border-radius:8px; border: 1px solid #6A7291;"
                                class="d-flex justify-content-center align-items-center">
                                <img src="<?= get_field("next_btn")['url'] ?>"
                                    alt="<?= get_field("next_btn")['title'] ?>"
                                    style="width:12px; height:18px; margin:7px 0; object-fit:cover " />
                            </a>
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
                        style="background-color:; width: 83%; margin: 0 ; overflow:hidden">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <span class="sample-slider-title">Culture en CSR. Vel turpis vitae mi a id
                                    <strong>vitae turpis lacus</strong>
                                    vitae mi mollis</span>
                                <p style="margin-top:2rem; margin-bottom:2rem">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Nulla egestas, nisl
                                    posuere
                                    porttitor
                                    vulputate, felis orci venenatis nibh, ut diam ullamcorper sapien.
                                </p>
                                <!-- <div class=" d-flex flex-row align-items-center justify-content-start gap-3">
                                    <a href="#"
                                        style="background-color: #25325F; height:30px; width:30px; border-radius: 8px;"
                                        class="d-flex justify-content-center align-items-center">
                                        <img src="<?= get_field("sue_insights_link")['url'] ?>"
                                            alt="<?= get_field("sue_insights_link")['alt'] ?>"
                                            style="width:12px; height:18px; margin:7px 0;" />
                                    </a>

                                    <span
                                        style="color: #25325F;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height:  15.6px">Buttom</span>
                                </div> -->
                                <div class=" d-flex flex-row align-items-center justify-content-start gap-3">
                                    <button>
                                        <!-- class="btn" -->
                                        <span class="circle blue-circle">
                                            <a href="#" class="d-flex justify-content-center align-items-center  arrow"
                                                href="#">
                                                <img src="<?= get_field("sue_insights_link")['url'] ?>"
                                                    alt=" <?= get_field("sue_insights_link")['alt'] ?>" class=""
                                                    style="width:12px; height: 18px; margin:7px 0;" class="icon" />
                                            </a>
                                        </span>
                                        <span class="button-text blue2">Buttom</span>
                                    </button>
                                </div>

                            </div>
                            <div class="swiper-slide">
                                <span class="sample-slider-title">Vel turpis lacus <strong>vitae mi</strong>
                                    mollis</span>
                                <p style="margin-top:2rem; margin-bottom:2rem">Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipiscing elit. Nulla egestas, nisl posuere
                                    porttitor
                                    vulputate, felis orci venenatis nibh, ut diam ullamcorper sapien.
                                </p>
                                <div class=" d-flex flex-row align-items-center justify-content-start gap-3">
                                    <button>
                                        <!-- class="btn" -->
                                        <span class="circle blue-circle">
                                            <a href="#" class="d-flex justify-content-center align-items-center  arrow"
                                                href="#">
                                                <img src="<?= get_field("sue_insights_link")['url'] ?>"
                                                    alt=" <?= get_field("sue_insights_link")['alt'] ?>" class=""
                                                    style="width:12px; height: 18px; margin:7px 0;" class="icon" />
                                            </a>
                                        </span>
                                        <span class="button-text blue2">Buttom</span>
                                    </button>
                                </div>


                            </div>
                            <div class="swiper-slide">
                                <span class="sample-slider-title">Turpis lacus <strong>vitae mi</strong> mollis
                                </span>
                                <p style="margin-top:2rem; margin-bottom:2rem">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Nulla egestas, nisl
                                    posuere
                                    porttitor
                                    vulputate, felis orci venenatis nibh, ut diam ullamcorper sapien.
                                </p>
                                <div class=" d-flex flex-row align-items-center justify-content-start gap-3">
                                    <button>
                                        <!-- class="btn" -->
                                        <span class="circle blue-circle">
                                            <a href="#" class="d-flex justify-content-center align-items-center  arrow"
                                                href="#">
                                                <img src="<?= get_field("sue_insights_link")['url'] ?>"
                                                    alt=" <?= get_field("sue_insights_link")['alt'] ?>" class=""
                                                    style="width:12px; height: 18px; margin:7px 0;" class="icon" />
                                            </a>
                                        </span>
                                        <span class="button-text blue2">Buttom</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>

    <!-- 10 -->
    <!-- Form Section container  -->
    <?php get_template_part('components/form') ?>
    <!-- End of Form Section -->

















































    <!--Aboutus-swiper -->
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




    <script>
        document.addEventListener("DOMContentLoaded", function () {
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
            swiper.on('slideChange', function () {
                const activeIndex = swiper.activeIndex;
                numbers.forEach(num => num.classList.remove('active'));
                numbers[activeIndex].classList.add('active');
            });
        });
    </script>


</main>



<?php get_footer() ?>