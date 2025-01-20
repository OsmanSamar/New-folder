<?php get_header();

//Template Name: services
?>

<main class="services flex-grow-1">


    <style>
        .back-to-home {
            position: absolute;
            top: 80px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            padding: 10px 20px;
            border-radius: 10px;
        }

        .back-to-home a {
            text-decoration: none;
            color: black;
            font-size: 16px;
            font-weight: bold;
        }

        .back-to-home img {
            margin-left: 5px;
            vertical-align: middle;
        }

        .last {
            color: #25325F;
            font-family: Manrope;
            font-size: 13px;
            font-style: normal;
            font-weight: 700;
            line-height: 23.4px;
        }

        b,
        strong {
            color: #e94271;
            font-family: inherit;
            font-size: inherit;
            font-style: inherit;
            line-height: inherit;
        }

        .container-max-width {
            border-radius: 30px;
            max-width: 1700px;
            height: 581px;
            margin: 200px auto 10px;

        }


        .hero_blue_block {

            height: 100%;
            border-radius: 40px;
            background: #25325F;
            position: relative;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 30px;
            margin-top: -400px;

        }


        .inner_block {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: left;
            margin: 10px 60px;
        }

        .hero_title {
            color: #FFF;
            font-family: Sora;
            font-size: 45px;
            font-style: normal;
            font-weight: 700;
            line-height: 54px;
            margin-bottom: 31px;
        }

        .hero_text {
            color: #9AA0B7;
            font-family: Manrope;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: 27.2px;
            width: 353px;
            /* height: 158px; */
            margin-bottom: 31px;
        }


        .container-max-width img {
            display: none;
        }

        .hero_blue_block {
            position: static;
            margin-top: 0;
        }

        .hero_text,
        .hero_title {
            text-align: left;
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

        .title {
            color: #25325F;
            font-family: Manrope;
            font-size: 26px;
            font-style: normal;
            font-weight: 700;
            line-height: 39px;
            margin: 27px 0px;
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


        .left-container {
            border-radius: 30px;
            margin-top: ;
            color: white;
            height: 264px;

        }


        .left-content {
            display: flex;
            flex-direction: row;
            /* justify-content: flex-start; */
            align-items: center;
            margin-top: 30px;
            gap: 50px;
            /* margin-left: 15px; */
        }

        .first-name {

            color: #9AA0B7;
            font-family: Manrope;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;

            line-height: 6.2px;
        }

        .form_section {
            border-radius: 30px;
            background: #25325F;
            /* margin: 150px auto; */
            max-width: 1700px;
            height: 1400px;
            margin: 50px auto 50px;

        }

        .arrow_section {

            width: 57.851px;
            height: 92.371px;
            flex-shrink: 0;
        }


        .information_title {
            color: #25325F;
            font-family: Manrope;
            font-size: 17px;
            font-style: normal;
            font-weight: 700;
            line-height: 27.2px;
            margin: 10px 5px 0
        }

        .information_text {
            color: var(--Text, #6A7291);
            font-family: Manrope;
            font-size: 17px;
            font-style: normal;
            font-weight: 700;
            line-height: 27.2px;
            margin: 5px 0;
            width: 326px;
        }


        .right-col-form {
            margin-top: unset;
        }


        @media(min-width: 768px) {

            .first-name {
                line-height: 27.2px;
            }

            .container-max-width img {
                display: block;
            }

            .hero_blue_block {
                width: 531px;
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

            .hero_text,
            .hero_title {
                text-align: left;
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

            }

        }




        @media (min-width: 992px) {

            .right-col-form {
                margin-top: 67px;
            }

            .first-name {
                line-height: 27.2px;
            }

            .hero_blue_block {
                width: 531px;
                /* position: absolute;
            bottom: 0; */
                position: relative;
                bottom: 582px;
                left: 0;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: center;
                padding: 30px;
                height: 100%;
                margin-top: unset;

            }

            .hero_text,
            .hero_title {
                text-align: left;
            }


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

            .second-arrow {
                margin-top: 70px
            }

            .information_title {
                font-size: 16px;
                line-height: 27px;

            }

            .information_text {
                font-size: 16px;
                width: 504px;
            }


        }
    </style>



    <div class="back-to-home" style="margin-top:23px; margin-bottom:23px; ">
        <a href="<?= get_field("back_to_home")['url'] ?>"
            class="d-flex justify-content-center align-items-center gap-2">
            <img src="<?= get_field("back_home_btn")['url'] ?>" alt="<?= get_field("back_home_btn")['alt'] ?>"
                style="width:20px; height:20px; margin:7px 0;" />

            <span class="separator"><img src="<?= get_field("separator")['url'] ?>"
                    alt="<?= get_field("separator")['alt'] ?>" style="width:3px; height:6px;" /> </span>
            <span class="last">Services</span>
        </a>
    </div>



    <!-- Hero Section -->
    <div class="container-max-width">
        <img src="<?= get_field("hero_img")['url'] ?>" alt="<?= get_field("hero_img")['title'] ?>" class=""
            style=" height: 581px; border-radius: 40px; object-fit: cover;" />
        <div class="hero_blue_block">
            <div class="container inner_block">
                <span class="hero_title">
                    <?= get_field("hero_title") ?>
                </span>
                <span class="hero_text">
                    <?= get_field("hero_text") ?>
                </span>
            </div>
        </div>
    </div>
    <!-- End of Hero Section -->


    <!-- Second Section -->
    <div class="container">
        <div class="row" style="margin-top:50px;">
            <div class="col-12 col-md-6 col-lg-5">
                <div class="left_col">
                    <div class="left-btn">
                        <?= get_field("services_title") ?>
                    </div>
                    <span class="title">
                        <?= get_field("services_main_title") ?> </span>

                    <span class="left-text">
                        <?= get_field("services_left_text") ?></span>
                </div>
            </div>
            <div class="d-none d-lg-block col-lg-1"></div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="right_col">
                    <span class="right-text">
                        <?= get_field("services_right_text") ?>
                    </span>
                </div>
            </div>
        </div>
    </div>




    <!-- Testimonials Section on All Screens -->
    <div class="container mt-5">
        <div class="row gy-2">
            <?php foreach (get_field("expertise_testimonials") as $testimonial) { ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="expertise-num">
                                <?= $testimonial["expertise_num"] ?></span>
                            <span class="expertise-sub-title"><?= $testimonial["expertise_sub_title"] ?></span>
                        </div>
                        <h2 class="expertise-main-title"> <?= $testimonial["expertise_main_title"] ?></h2>
                        <div class="divider mb-3" style="margin: 15px 1px;"></div>
                        <p class="expertise-text"><?= $testimonial["expertise_text"] ?></p>

                        <!-- Btn & text -->
                        <div class="d-flex align-items-center  gap-2" style=" margin-bottom:20px;">
                            <a href="<?= $testimonial["expertise_btn"]['url'] ?>"
                                style="border-radius:8px; background-color: #274083; height:30px; width:30px;"
                                class="d-flex justify-content-center align-items-center">
                                <img src="<?= $testimonial["expertise_img"]['url'] ?>"
                                    alt="<?= $testimonial["expertise_img"]['alt'] ?>"
                                    style="width:12px; height:18px; margin:7px 0;" />
                            </a>
                            <?= $testimonial["expertise_btn"]['title'] ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>



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
                                <?= get_field("are_u_ready") ?>
                            </h2>
                        </div>
                        <div class="col-lg-7 offset-lg-1"
                            style="color: var(--Neutral-400, #9AA0B7); font-family: Manrope;font-size: 16px; font-style: normal;  font-weight: 700; line-height: 170%; /* 27.2px */">
                            <?= get_field("form_text") ?>

                        </div>
                    </div>
                    <!-- here -->
                    <div class="d-block d-md-none d-lg-none" style=" border-bottom: 1px solid  white; margin:30px 0">
                    </div>
                    <div class="left-container">
                        <div class="left-content">
                            <img src="<?= get_field("form_img")['url'] ?>" alt="<?= get_field("form_img")['alt'] ?>"
                                style="width:120px; height:120px; border-radius:15px; object-fit:cover; object-position:center" />
                            <div class="d-flex flex-column">
                                <span class="first-name" style=" "><?= get_field("first_name") ?></span>
                                <span class="d-none d-md-flex d-lg-flex"
                                    style="color: #FFF;font-family: Manrope;font-size: 26px;font-style: normal;font-weight: 700; line-height:39px">
                                    <?= get_field("lets_talk") ?>
                                </span>
                                <div style=" margin-left:; margin-top:10px;" class="d-flex d-md-none d-lg-none">
                                    <!-- E_mail -->
                                    <div class="d-flex flex-column flex-lg-column gap-">
                                        <div class=" d-flex flex-row align-items-center justify-content-start gap-2">

                                            <a href="#"
                                                style="background-color:white;height:30px;width:30px; border-radius: 8px;"
                                                class="d-flex justify-content-center align-items-center">
                                                <img src="<?= get_field("link_btn")['url'] ?>"
                                                    alt="<?= get_field("link_btn")['alt'] ?>"
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
                                                <img src="<?= get_field("link_btn")['url'] ?>"
                                                    alt="<?= get_field("link_btn")['alt'] ?>"
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
                                            <img src="<?= get_field("link_btn")['url'] ?>"
                                                alt="<?= get_field("link_btn")['alt'] ?>"
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
                                            <img src="<?= get_field("link_btn")['url'] ?>"
                                                alt="<?= get_field("link_btn")['alt'] ?>"
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
                        <div style=" margin-left:; margin-top:;" class="d-none d-md-none d-lg-flex">
                            <!-- E_mail -->
                            <div class="d-flex flex-row flex-lg-column gap-">
                                <div class=" d-flex flex-row align-items-center justify-content-start gap-2">

                                    <a href="#"
                                        style="background-color:white;height:30px;width:30px; border-radius: 8px;"
                                        class="d-flex justify-content-center align-items-center">
                                        <img src="<?= get_field("link_btn")['url'] ?>"
                                            alt="<?= get_field("link_btn")['alt'] ?>"
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
                                        <img src="<?= get_field("link_btn")['url'] ?>"
                                            alt="<?= get_field("link_btn")['alt'] ?>"
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
                                <?= get_field("are_u_ready") ?>
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











</main>



<?php get_footer() ?>