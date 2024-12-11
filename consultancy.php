<?php get_header();

//Template Name: consultancy
?>

<main class="consultancy flex-grow-1">

    <style>
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


    /*  */
    .hero_blue_block {

        /* width: 531px; */
        height: 100%;
        border-radius: 40px;
        background: #25325F;
        position: relative;
        bottom: 350px;
        left: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 30px;

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
    }

    .title {
        color: var(--Primary-600, #25325F);
        font-family: Manrope;
        font-size: 26px;
        font-style: normal;
        font-weight: 700;
        line-height: 39px;
        margin: 27px 0px;
        /* width: 504px;
        height: 99px; */

    }

    .left-text,
    .right-text {
        color: #6A7291;
        font-family: Manrope;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 27.2px;
        /* width: 504px; */
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
        width: 264px;

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
        height: 2000.03px;
        border-radius: 40px;
        background: #25325F;
        margin: 80px auto;
        width: 100%;
        max-width: 1700px;
    }

    .client-consultancy-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-direction: column;


    }

    .client-consultancy-title {

        height: 40px;
        color: #FFF;
        font-family: Manrope;
        font-size: 26px;
        font-style: normal;
        font-weight: 700;
        line-height: 150%;
        margin-top: 83px;

    }

    .client-consultancy-link {
        margin-top: 83px;
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


    @media (min-width: 768px) {

        .block_blue {
            height: 1390px;
        }
    }


    @media (min-width: 992px) {
        .hero_blue_block {
            width: 531px;
            position: absolute;
            bottom: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: left;
            padding: 30px;

        }

        .title {
            width: 504px;
            height: 99px;
        }

        .left-text,
        .right-text {
            width: 504px;
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




    }
    </style>
    <div class="" style="margin-top:190px; position:relative; max-width: 1700px; overflow: hidden;">

        <!-- <a href="#" style="position: relative; display: inline-block;" class="">
            <img src="<?= get_field("consultancy_hero")['url'] ?>" alt="<?= get_field("consultancy_hero")['title'] ?>"
                class="" style="width: 100%; height: 581px; border-radius: 40px; object-fit: cover;" />
        </a> -->
        <img src="<?= get_field("consultancy_hero")['url'] ?>" alt="<?= get_field("consultancy_hero")['title'] ?>"
            class="" style="width: 100%; height: 581px; border-radius: 40px; object-fit: cover;" />

        <div class="hero_blue_block">
            <div class="inner_block">

                <div style="width:192px;height:100px;">
                    <a href="#">
                        <img src="<?= get_field("back_link")['url'] ?>" alt=" <?= get_field("back_link")['title'] ?>" />
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
        <div class="row" style="margin-top:100px;">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="left_col">
                    <div class="left-btn">
                        <?= get_field("onsectetur_adipiscing_elit_title") ?>
                    </div>
                    <span class="title">
                        <?= get_field("main_title") ?> </span>

                    <span class="left-text" style="">
                        <?= get_field("left_text") ?></span>
                </div>
            </div>
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
            <div class="col-12 col-md-5 col-lg-4  ">
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
                <a href="<?= get_field("clients_about_our_consultancy_link")['url'] ?>" class="client-consultancy-link">
                    <img src="<?= get_field("view_all_stories_img")['url'] ?>"
                        alt="<?= get_field("view_all_stories_img")['alt'] ?>" />
                </a>
            </div>

            <div class="row d-flex align-items-center justify-content-start gy-4">
                <?php foreach (get_field("clients_consultancy_testimonials") as $testimonial) { ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img src="<?= $testimonial["clients_img"]['url'] ?>"
                            alt="<?= $testimonial['clients_img']['alt'] ?>" class="card-img-top "
                            style="height: 213px; border-radius:20px;" />
                        <div class="card-body">
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
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="d-flex align-items-center justify-content-center rounded bg-primary"
                                        style="width: 30px; height: 30px;">
                                        <img src="<?= $testimonial["bekijk"]['url'] ?>"
                                            alt="<?= $testimonial["bekijk"]['alt'] ?>"
                                            style="width: 12px; height: 18px;" />
                                    </div>
                                    <a href="<?= $testimonial['bekijk_btn']['url'] ?>" class="text-decoration-none">
                                        <?= $testimonial["bekijk_btn"]['title'] ?>
                                    </a>
                                </div>
                                <img src="<?= $testimonial["kpn"]['url'] ?>" alt="<?= $testimonial["kpn"]['alt'] ?>"
                                    style="width: 63px; height: 24px;" />
                            </div>
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
                    <div class="d-flex justify-content-between align-items-center gap-2"
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
                                                    <h4 class="card-title" style="">
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
                    <span class="main_title_knowledge" style="">
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