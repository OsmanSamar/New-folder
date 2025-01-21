<?php get_header();

//Template Name: consultancy
?>

<main class="consultancy flex-grow-1">

    <style>
    /* 3 */
    button .circle3 {
        justify-content: center;
        display: inline-flex;
        position: relative;
        z-index: 1;
        height: 30px;
        width: 30px;
    }

    button .button-text3 {
        position: relative;
        top: -24px;
        left: 12px;
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
        line-height: 15.6px;
    }

    button .circle3::before {
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        border-radius: 8px;
        background-color: #FFF;
        margin: 0;
        content: '';
        z-index: -1;
    }

    button:hover .circle3::before {
        width: 10rem;
    }

    button:hover .button-text3 {
        color: #274083;
    }

    .right-col-form {
        margin-top: unset;
    }

    button {
        position: relative;
        display: inline-block;
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

    button .circle2 {
        justify-content: center;
        display: inline-flex;
        position: relative;
        z-index: 1;
        height: 30px;
        width: 30px;
    }

    button .button-text2 {
        position: absolute;
        top: 0;
        left: 24px;
        margin: 0 0 0 1.85rem;
        color: #FFF;
        font-size: 13px;
        line-height: 15.6px;
        text-align: center;
        z-index: 2;
    }

    button .circle2::before {
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        border-radius: 8px;
        background-color: #FFF;
        margin: 0;
        content: '';
        z-index: -1;
    }


    button:hover .circle2::before {
        width: 8rem;
    }

    button:hover .circle2 .icon.arrow {
        background: #fff;
    }






    /*  */
    b,
    strong {
        color: #e94271;
        font-family: inherit;
        font-size: inherit;
        font-style: inherit;
        line-height: inherit;
    }


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


    .first {
        color: #25325F;
        font-family: Manrope;
        font-size: 13px;
        font-style: normal;
        font-weight: 700;
        line-height: 23.4px;
    }

    .last {
        color: #25325F;
        font-family: Manrope;
        font-size: 13px;
        font-style: normal;
        font-weight: 700;
        line-height: 23.4px;
    }


    .container-max-width {
        border-radius: 30px;
        max-width: 1700px;
        height: 581px;
        margin: 200px auto 10px;
    }



    .container-max-width .container-img {
        display: none;
    }



    .hero_blue_block {
        position: static;
        margin-top: 0;
    }

    .hero_text,
    .hero_title {
        text-align: center;
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



    .hero_blue_block {
        /* width: 531px; */
        height: 100%;
        border-radius: 40px;
        background: #25325F;
        position: relative;
        /* bottom: 350px; */
        left: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 30px;
        /* margin-top: -350px; */
        /* margin-top: -152px; */
        /* margin-top: -450px; */
        /* margin-top: -400px; */

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

    .hero_text,
    .hero_title {
        text-align: left;
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
        padding: 4px 11px;
        text-align: center;
        color: #FFF;
        font-family: Manrope;
        font-size: 13px;
        font-style: normal;
        font-weight: 700;
        line-height: 23.4px;
        display: flex;
        align-items: center;
        justify-content: center;
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


    .card {
        border-radius: 20px;
        border: 1px solid #CBCFDE;
        background: #EDF3F4;
        display: flex;
        flex-direction: column;
        justify-content: space-between;

    }

    .card-img-top {
        object-fit: cover;
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
        margin: 26px 0px;
    }

    .card-text {
        color: #25325F;
        font-family: Manrope;
        font-size: 21px;
        font-style: normal;
        font-weight: 700;
        line-height: 33.6px;
        /* width: 264px; */

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

    /*  */
    .block_blue {
        /* height: 2000.03px; */
        height: 1974px;
        border-radius: 40px;
        background: #25325F;
        margin: 50px auto;
        width: 100%;
        max-width: 1700px;
    }

    .client-consultancy-container {
        display: flex;
        /* align-items: center;
            justify-content: space-between; */
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;


    }

    .client-consultancy-title {

        height: 40px;
        color: #FFF;
        font-family: Manrope;
        font-size: 26px;
        font-style: normal;
        font-weight: 700;
        line-height: 150%;

        margin-top: 50px;
        margin-bottom: 10px;

    }




    .inner_block2 {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: left;

    }

    .profit-block {
        border-radius: 15px;
        background: white;
        /* max-width: 545px; */
        /* height: 316.956px; */
        height: auto;
        padding: 42px;
    }

    .profit_title {
        color: #25325F;
        font-family: Manrope;
        font-size: 21px;
        font-style: normal;
        font-weight: 700;
        line-height: 33.6px;
        margin-top: 33px;

    }

    .workforce_certifications_main_title {
        color: #25325F;
        font-family: Manrope;
        font-size: 26px;
        font-style: normal;
        font-weight: 700;
        line-height: 39px;
    }

    .workforce_certifications_text {

        color: #6A7291;
        font-family: Manrope;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 27.2px;
    }

    .partners-container {
        border-radius: 10px;
        border: 1px solid #CBCFDE;
        background: #EDF3F4;
        width: 102px;
        height: 52px;
    }

    .client_card2 {

        background: #EDF3F4;
        border-radius: 20px;
        border: 1px solid #CBCFDE;

    }

    .client2-btn {
        border-radius: 100px;
        color: #6A7291;
        background: #CBCFDE;
        text-align: center;
        padding: 4px 10px;
        width: fit-content;
        font-family: Manrope;
        font-size: 13px;
        font-style: normal;
        font-weight: 700;
        line-height: 23.4px;
    }

    .form_section {
        border-radius: 30px;
        background: #25325F;
        /* margin: 150px auto; */
        max-width: 1700px;
        height: 1400px;
        margin: 50px auto 50px;

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
        /* justify-content: flex-start; */
        align-items: center;
        margin-top: 30px;
        gap: 50px;
        /* margin-left: 15px; */
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

    .client-consultancy-link {
        color: white;
        font-size: 26px;
    }


    .letstalk-btn a:hover img {
        transform: translateX(6px);
        transition: transform 0.2s ease;
    }

    /*  */
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

    button .circle2 {
        justify-content: center;
        display: inline-flex;
        position: relative;
        z-index: 1;
        height: 30px;
        width: 30px;
    }


    button .button-text2 {
        position: relative;
        top: -24px;
        left: 12px;
        margin: 0 0 0 1.55rem;
        color: #274083;
        font-size: 13px;
        line-height: 15.6px;
        text-align: center;
        z-index: 2;
        font-family: Manrope;
        font-style: normal;
        font-weight: 600;
        display: flex;
        align-items: center;
        /* text-decoration: none; */
        line-height: 15.6px;
    }

    button .circle2::before {
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        border-radius: 8px;
        background-color: #274083;
        margin: 0;
        content: '';
        z-index: -1;
    }

    .arrow_section button:hover .circle2::before {
        width: 8rem;
    }


    button:hover .button-text2 {
        color: #FFF;
    }

    /*  */

    @media (min-width: 768px) {

        .client-consultancy-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-direction: row;
        }

        .inner_block {

            margin: unset;
        }

        .client-consultancy-link {
            margin-top: 50px;
            font-size: 26px;

        }


        .container-max-width .container-img {
            display: block;
        }

        .hero_blue_block {
            width: 458px;
            position: relative;
            bottom: 582px;
            le ft: 0;
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



        .block_blue {
            height: 853px;
        }

        .card-text {
            font-size: 19px;
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

        .inner_block {

            margin: 10px 60px;
        }

        .client-consultancy-link {
            margin-top: 83px;
            margin-bottom: 10px;
            /* margin-top: 69px; */
            font-size: 16px;
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
            /* height: 581.608px; */
            height: 100%;
            margin-top: unset;

        }

        .hero_text,
        .hero_title {
            text-align: left;
        }

        .title {
            width: 504px;
            height: 99px;
        }

        b,
        strong {
            font-size: inherit;
        }




        .block_blue {

            height: 815.03px;
        }

        .client-consultancy-container {

            flex-direction: row;

        }

        .client-consultancy-title {
            width: 596px;
        }

        .workforce_certifications_main_title {
            width: 342px;
        }

        .workforce_certifications_text {
            width: 451px;
        }

        .client_card2 {

            width: 546px;
            height: 172px;
        }

        .form_section {
            height: 550px;
            /* margin: unset; */
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
            margin-top: 67px;
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
            <span class="first">Services</span>
            <span class="separator"><img src="<?= get_field("separator")['url'] ?>"
                    alt="<?= get_field("separator")['alt'] ?>" style="width:3px; height:6px;" /> </span>
            <span class="last">Consultancy</span>
        </a>
    </div>






    <!-- Hero Section -->
    <div class="container-max-width">
        <img src="<?= get_field("consultancy_hero")['url'] ?>" alt="<?= get_field("consultancy_hero")['title'] ?>"
            class="container-img" style=" height: 581px; border-radius: 40px; object-fit: cover;" />
        <div class="hero_blue_block">
            <div class="container inner_block">
                <div style="width:192px;height:100px;">
                    <a href="<?= get_field("back_to_all_services")['url'] ?>">
                        <img src="<?= get_field("back_link")['url'] ?>" alt=" <?= get_field("back_link")['title'] ?>" />
                        <!--  href="<?= get_field("back_to_all_services")['url'] ?>" -->
                    </a>

                </div>
                <span class="hero_title">
                    <?= get_field("hero_title") ?>
                </span>
                <span class="hero_text">
                    <?= get_field("hero_text") ?>
                </span>
                <!-- Talk to an export btn -->
                <div class="d-flex justify-content-between align-items-center gap-2 letstalk-btn"
                    style="height:42.261px;padding: 12px 15px; border-radius: 8px;background: #E94271;">
                    <a href="<?= get_field("talk_to_an_expert_btn")['url'] ?>" style="color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px; display: flex; 
                                                        align-items: center; gap:8px; text-decoration: none; ">
                        <img src="<?= get_field("talk_to_an_expert_img")['url'] ?>"
                            alt="<?= get_field("talk_to_an_expert_img")['alt'] ?>" style="width: 12px; height: 18px;" />
                        <?= get_field("talk_to_an_expert_btn")['title'] ?>
                    </a>
                </div>
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
                        <?= get_field("onsectetur_adipiscing_elit_title") ?>
                    </div>
                    <span class="title">
                        <?= get_field("main_title1") ?> </span>

                    <span class="left-text">
                        <?= get_field("left_text") ?></span>
                </div>
            </div>
            <div class="d-none d-lg-block col-lg-1"></div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="right_col">
                    <span class="right-text">
                        <?= get_field("second_text") ?>
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


    <!-- New Section blue block -->
    <div class="block_blue">
        <div class="container">
            <div class="client-consultancy-container my-5">
                <p class="client-consultancy-title">
                    <?= get_field("clients_about_our_consultancy_title") ?>
                </p>




                <div class=" d-flex flex-row align-items-center justify-content-end gap-1 client-consultancy-link">

                    <a href="<?= get_field("clients_about_our_consultancy_link")['url'] ?>"
                        style="background-color:white; height:30px; width:30px; border-radius:8px; "
                        class="d-flex justify-content-center align-items-center ">
                        <img src="<?= get_field("view_all_stories_img")['url'] ?>"
                            alt="<?= get_field("view_all_stories_img")['alt'] ?>"
                            style="width:12px; height:18px; margin:7px 0;" class="" />

                    </a>
                    <?= get_field("clients_about_our_consultancy_link")['title'] ?>
                    <!-- 3 -->
                    <!-- <button>
                        <span class="circle3">
                            <a href="#" class="d-flex justify-content-center align-items-center  arrow">
                                <img src="<?= get_field("view_all_stories_img")['url'] ?>"
                                    alt="<?= get_field("view_all_stories_img")['alt'] ?>"
                                    style="width: 12px; height: 18px; margin:7px 0" class="icon" />
                            </a>
                        </span>
                        <a href="<?= get_field("clients_about_our_consultancy_link")['url'] ?>" class=" button-text3">
                            <?= get_field("clients_about_our_consultancy_link")['title'] ?>
                        </a>
                    </button> -->
                </div>
            </div>
            <div class="row d-flex align-items-center justify-content-start gy-4">
                <?php foreach (get_field("clients_consultancy_testimonials") as $testimonial) { ?>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="card">
                        <img src="<?= $testimonial["clients_img"]['url'] ?>"
                            alt="<?= $testimonial['clients_img']['alt'] ?>" class="card-img-top "
                            style="height: 213px; border-radius:20px;" />

                        <!-- CARD BODY -->
                        <div class="card-body mt-3 mb-0 pb-4 px-4 h-10 position-relative"
                            style="background-color:; overflow:hidden;">
                            <div class="card-title">
                                <span><?= $testimonial["clients_name"] ?></span>
                            </div>
                            <p class="card-text">
                                <?= $testimonial["clients_text"] ?>
                            </p>
                            <div class="d-flex justify-content-start align-items-center gap-2">
                                <p class="industry_title">
                                    <?= $testimonial["industry_title"] ?>
                                </p>
                                <p class="industry">
                                    <?= $testimonial["industry"] ?>
                                </p>
                            </div>
                            <div class="bottom-border position-absolute"
                                style="bottom:0; left: 0; right:0; height:10px; background-color:; border-bottom:1px solid #CBCFDE; border-radius:0 0 30px 30px;">
                            </div>
                        </div>
                        <!-- END OF CARD BODY -->
                        <!-- Bejijken btn -->
                        <div class=" card-body d-flex justify-content-between align-items-center">
                            <!-- <div class="d-flex align-items-center gap-2">
                                <div class="d-flex align-items-center justify-content-center"
                                    style="width: 30px; height: 30px;  border-radius: 8px;background: #274083;">
                                    <img src="<?= $testimonial["bekijk"]['url'] ?>"
                                        alt="<?= $testimonial["bekijk"]['alt'] ?>" style="width: 12px; height: 18px;" />
                                </div>
                                <a href="<?= $testimonial['bekijk_btn']['url'] ?>" class="text-decoration-none">
                                    <?= $testimonial["bekijk_btn"]['title'] ?>
                                </a>
                            </div> -->

                            <button>
                                <span class="circle2">
                                    <a href="#" class="d-flex justify-content-center align-items-center  arrow">
                                        <img src="<?= $testimonial["bekijk"]['url'] ?>"
                                            alt="<?= $testimonial["bekijk"]['alt'] ?>"
                                            style="width: 12px; height: 18px; margin:7px 0" class="icon" />
                                    </a>
                                </span>
                                <a href="<?= $testimonial['bekijk_btn']['url'] ?>" class=" button-text2">
                                    <?= $testimonial["bekijk_btn"]['title'] ?>
                                </a>
                            </button>

                            <img src="<?= $testimonial["kpn"]['url'] ?>" alt="<?= $testimonial["kpn"]['alt'] ?>"
                                style="width: 63px; height: 24px;" />
                        </div>





                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 ">

                <div class="inner_block2 gap-4">
                    <span class="left-btn">
                        <?= get_field("workforce_certifications_sub_title") ?>
                    </span>
                    <h1 class="workforce_certifications_main_title">
                        <?= get_field("workforce_certifications_main_title") ?>
                    </h1>
                    <p class="workforce_certifications_text">
                        <?= get_field("workforce_certifications_text") ?>
                    </p>

                    <!-- Talk to an export btn -->
                    <div class="d-flex justify-content-between align-items-center gap-2 letstalk-btn"
                        style="height:42.261px;padding: 12px 15px; border-radius: 8px;background: #E94271;">
                        <a href="<?= get_field("talk_to_an_expert_btn")['url'] ?>"
                            style="color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px; display: flex; align-items: center; gap:8px; text-decoration: none; ">
                            <img src="<?= get_field("talk_to_an_expert_img")['url'] ?>"
                                alt="<?= get_field("talk_to_an_expert_img")['alt'] ?>"
                                style="width: 12px; height: 18px;" />
                            <?= get_field("talk_to_an_expert_btn")['title'] ?>
                        </a>
                    </div>

                </div>
            </div>



            <div class="col-12 col-md-6 col-lg-6 ">
                <div class="profit-block">
                    <div class="">
                        <!-- inner_block  gap-4 -->
                        <h1 class="profit_title">
                            <?= get_field("how_you_can_profit_title") ?>
                        </h1>
                        <div class="d-flex flex-column gap-2">
                            <?php foreach (get_field("profit_testimonials") as $testimonial) { ?>
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <img src="<?= $testimonial["profit_img"]['url'] ?>"
                                    alt="<?= $testimonial['profit_img']['alt'] ?>" class=""
                                    style="width: 15px;height: 16px;" />
                                <span class="expertise-sub-title"><?= $testimonial["profit_text"] ?></span>
                            </div>
                            <div class="divider mb-1" style="max-width: 461px;"></div>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>



    <div>
        <!--Sue_Partners Repeater  Swiper On Small -->
        <div class="partners" style="margin-top:50px; margin-bottom: 60px;">
            <div class="position-relative d-block d-lg-none align-items-center  ">
                <div class=" swipersue sue-partners-swiper ">
                    <div class="swiper-wrapper">
                        <?php
                        foreach (get_field("sue_partners") as $sue) {
                            ?>
                        <div class="swiper-slide d-flex justify-content-center align-items-center"
                            style="width:fit-content;">
                            <div>
                                <div
                                    class="d-flex flex-row align-items-center justify-content-evenly partners-container">
                                    <a href=" <?= $sue['sue_partners_link_url']['url'] ?>">
                                        <img src="<?= $sue['sue_partners_img']['url'] ?>"
                                            alt=" <?= $sue['sue_partners_img']['alt'] ?>" class="sue-img"
                                            style=" width:32px; height:19px; " />
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
            <?php for ($i = 0; $i < 4; $i++) { // Loop to repeat the block four times ?>
            <div class="row d-none d-md-none d-lg-flex flex-row align-items-center justify-content-between"
                style="margin-top:; margin-bottom:;">
                <?php foreach (get_field("sue_partners") as $sue) { ?>
                <div class="col-auto">
                    <a href="<?= $sue['sue_partners_link_url']['url'] ?>">
                        <div style="border-radius: 6px;background: var(--Neutral-light, #EDF3F4); height:76px;">
                            <!--  margin:35px 0; -->
                            <div class="d-flex flex-row align-items-center justify-content-evenly"
                                style="border-radius: 6px; border: 1px solid #CBCFDE; background:#EDF3F4; width: 165px; height: 61px;">
                                <img src="<?= $sue['sue_partners_img']['url'] ?>"
                                    alt="<?= $sue['sue_partners_img']['alt'] ?>" class="sue-img"
                                    style="width:56px; height:33px; flex-shrink: 0;" />
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
        </div>

    </div>



    <!-- SUE Insights -->
    <div class="container" style="margin-top:120px;">
        <div class="row">
            <div class="col-6 col-lg-6">
                <span
                    style="color:#6A7291; font-family:Manrope; font-size:15px;font-style:normal;font-weight: 600;line-height:27px;">
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
                        style="color: #25325F;font-family:Manrope; font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px;">
                        <?= get_field("sue_insights_text") ?>
                    </span>

                    <!-- 4 -->
                    <!-- <button>
                        <span class="circle3">
                            <a href="#" class="d-flex justify-content-center align-items-center  arrow">
                                <img src="<?= get_field("view_all_stories_img")['url'] ?>"
                                    alt="<?= get_field("view_all_stories_img")['alt'] ?>"
                                    style="width: 12px; height: 18px; margin:7px 0" class="icon" />
                            </a>
                        </span>
                        <a href="<?= get_field("clients_about_our_consultancy_link")['url'] ?>" class=" button-text3">
                            <?= get_field("clients_about_our_consultancy_link")['title'] ?>
                        </a>
                    </button> -->

                </div>
            </div>
        </div>

        <div style=" border-bottom:0.5px solid  #CBCFDE; margin:30px 0;"></div>
        <!-- End of SUE Insights -->



        <div class="row">
            <div class="col-12 col-lg-5 col-md-12  mask-group ">
                <!-- Client Story2  container-->
                <div class=" ">
                    <div class="row gy-2">
                        <div class="col-12 col-lg-5 col-md-12" style="margin-top:60px;">
                            <?php foreach (get_field("article_testimonails") as $testimonial) { ?>
                            <div class="col">
                                <div class="card client_card2 mb-3 d-flex flex-row align-items-center ">
                                    <!-- justify-content-center -->
                                    <div class="row align-items-center">
                                        <div class="col-4 col-md-5  ">
                                            <img src="<?= $testimonial['img']['url'] ?>"
                                                alt="<?= $testimonial['img']['alt'] ?>" class="client2-img" />
                                        </div>
                                        <div class="col-8 col-md-5 col-lg-6">
                                            <div class="card-body" style="padding:;">
                                                <div
                                                    class="d-flex flex-row align-items-center justify-content-left gap-3">
                                                    <a class="client2-btn" href="<?= $testimonial['btn']['url'] ?>">

                                                        <?= $testimonial['btn']['title'] ?>
                                                    </a>
                                                    <h4 class=""
                                                        style=" color: #6A7291;font-size: 14px;font-weight: 600;/* line-height: 27px; */margin: 2px 0;font-family: Manrope;">
                                                        <?= $testimonial["client_name"] ?>
                                                    </h4>
                                                </div>
                                                <h4 class=" mt-2"
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

            <!-- Right Column  Knowledge And ReSources-->
            <div class="col-12 col-lg-4">

                <div class="d-flex flex-column align-items-flex-start justify-content-left gap-4"
                    style="margin-left:; color:#FFF; margin-top:60px; ">
                    <span
                        style="background-color:#274083;width:203px;height:30px;border-radius:40px;color:#FFF;font-family:Manrope; font-size:13px;font-style:normal;font-weight:700;line-height:23.4px;text-align:center;padding:4px 0;margin-bottom:15px; ">
                        <?= get_field("sub_title") ?>
                    </span>
                    <span class="main_title_knowledge"
                        style="color: var(--Primary-600, #25325F);font-family: Manrope;font-size: 26px;font-style: normal;font-weight: 700;line-height: 150%; /* 39px */">
                        <?= get_field("main_title") ?>

                    </span>
                    <span
                        style="color:#6A7291;font-family:Manrope; font-size:16px;font-style:normal;font-weight:700;line-height:27.2px; margin-bottom:15px;">
                        <?= get_field("text") ?>
                    </span>

                </div>

                <div class="row">
                    <div class="col-12 col-lg-6 resources" style="margin-top:;">

                        <div style="border-bottom: 0.5px solid   #25325F; ">

                            <div class=" d-flex flex-row align-items-center justify-content-between  gap-3 mt-4"
                                style="margin:20px 0;">
                                <span
                                    style="color: #25325F;font-family: Manrope; font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px;">
                                    <?= get_field("knowledge") ?>
                                </span>
                                <a href="#" class="d-flex justify-content-center align-items-center">
                                    <img src="<?= get_field("knowledgel_ink")['url'] ?>"
                                        alt="<?= get_field("knowledgel_ink")['alt'] ?>"
                                        style="width:4px; height:8px; object-fit:cover; margin-left:2px;" />
                                </a>
                            </div>

                        </div>

                        <div style="border-bottom: 0.5px solid  #25325F;">
                            <div class=" d-flex flex-row align-items-center justify-content-between gap-3 mt-4"
                                style="margin:20px 0;">
                                <span
                                    style="color: #25325F;font-family: Manrope; font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px;">
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
                                    style="color: #25325F;font-family: Manrope; font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px;">
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
                                    style="color: #25325F;font-family: Manrope; font-size:13px;font-style: normal;font-weight: 600;line-height:15.6px;">
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
                                    style="color: #25325F;font-family: Manrope; font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px;">
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
                                <div style="  margin-top:10px;" class="d-flex d-md-none d-lg-none">
                                    <!-- E_mail -->
                                    <div class="d-flex flex-column flex-lg-column ">
                                        <div class=" d-flex flex-row align-items-center justify-content-start gap-2">

                                            <a href="#"
                                                style="background-color:white;height:30px;width:30px; border-radius: 8px;"
                                                class="d-flex justify-content-center align-items-center">
                                                <img src="<?= get_field("form_link")['url'] ?>"
                                                    alt="<?= get_field("form_link")['alt'] ?>"
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
                                                <img src="<?= get_field("form_link")['url'] ?>"
                                                    alt="<?= get_field("form_link")['alt'] ?>"
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
                                    <div class=" d-flex flex-row align-tems-center justify-content-start gap-2">

                                        <a href="#"
                                            style="background-color:white;height:30px;width:30px; border-radius: 8px;"
                                            class="d-flex justify-content-center align-items-center">
                                            <img src="<?= get_field("form_link")['url'] ?>"
                                                alt="<?= get_field("form_link")['alt'] ?>"
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
                                            <img src="<?= get_field("form_link")['url'] ?>"
                                                alt="<?= get_field("form_link")['alt'] ?>"
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
                            <!-- LG -->
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
                                    <button>
                                        <span class="circle3">
                                            <a href="#" class="d-flex justify-content-center align-items-center  arrow"
                                                href="#">
                                                <img src="<?= get_field("form_link")['url'] ?>"
                                                    alt="<?= get_field("form_link")['alt'] ?>"
                                                    style="width: 12px; height: 18px; margin:7px 0" class="icon" />
                                            </a>
                                        </span>
                                        <a href="#" class="button-text3"
                                            style="font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px;">
                                            voornaam@sue.nl
                                        </a>
                                    </button>
                                </div>
                                <!-- contact nummer -->
                                <div class=" d-flex flex-row align-items-center justify-content-start gap-2">
                                    <button>
                                        <span class="circle3">
                                            <a href="#" class="d-flex justify-content-center align-items-center  arrow">
                                                <img src="<?= get_field("form_link")['url'] ?>"
                                                    alt="<?= get_field("form_link")['alt'] ?>"
                                                    style="width: 12px; height: 18px; margin:7px 0" class="icon" />
                                            </a>
                                        </span>
                                        <a href="#" class="button-text3"
                                            style="font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px;">
                                            +31345 656 666
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right column Contact Form -->
                <div class="col-12  col-lg-9">
                    <!-- here -->
                    <div class="row d-none d-md-flex d-lg-flex right-col-form">
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
                        <div class="col-lg-8">
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














    <!-- =---------------------------- -->


    <!--  sue-partners-swiper -->
    <script>
    let swipersue = new Swiper('.sue-partners-swiper', {
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
                slidesPerView: 3.9,


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