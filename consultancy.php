<?php get_header();

//Template Name: consultancy
?>

<main class="consultancy flex-grow-1">

    <style>
    .hero_blue_block {

        width: 531px;
        height: 100%;
        border-radius: 40px;
        background: #25325F;
        position: absolute;
        bottom: 0;
        left: 0;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: left;
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
        line-height: 54px
    }

    .hero_text {
        color: #9AA0B7;
        font-family: Manrope;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 27.2px;
        width: 353px;
        height: 158px;
    }

    .left_col,
    .right_col {
        display: flex;
        align-items: flex-start;
        justify-content: left;
        flex-direction: column;
        gap-4
    }

    .left-btn {
        width: 209px;
        height: 34px;
        border-radius: 100px;
        background: #274083;
        padding: 3px 11px;
        text-align: center
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

    @media (min-width: 992px) {

        .title {
            width: 504px;
            height: 99px;
        }

        .left-text,
        .right-text {
            width: 504px;
        }



    }
    </style>
    <div class="" style="margin-top:190px; position: relative;">
        <a href="#" style="" style="position: relative; display: inline-block;" class="">
            <img src="<?= get_field("consultancy_hero")['url'] ?>" alt="<?= get_field("consultancy_hero")['title'] ?>"
                class="" style="width: 100%; height: 581px; border-radius: 40px; object-fit: cover;" />

            <div class="hero_blue_block">
                <div class="inner_block">

                    <div style="width: 192px;height: 190px;">
                        <a href="#">
                            <img src="<?= get_field("back_link")['url'] ?>"
                                alt=" <?= get_field("back_link")['title'] ?>" />
                        </a>
                    </div>
                    <span class="hero_title">
                        <?= get_field("hero_title") ?>
                    </span>
                    <span class="hero_text">
                        <?= get_field("hero_text") ?>
                    </span>
                    <div class="d-flex justify-content-between align-items-center gap-2"
                        style="height:42.261px;padding: 12px 15px; border-radius: 8px;background: #E94271;">
                        <a href="<?= get_field("talk_to_an_expert_btn")['url'] ?>" style="color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px; display: flex; 
                                                align-items: center; gap:8px; text-decoration: none; ">
                            <img src="<?= get_field("talk_to_an_expert_img")['url'] ?>"
                                alt="<?= get_field("talk_to_an_expert_img")['alt'] ?>"
                                style="width: 12px; height: 18px;" />
                            <?= get_field("talk_to_an_expert_btn")['title'] ?>
                        </a>
                    </div>
                </div>
            </div>
        </a>
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
                        <?= get_field("main_title") ?>
                    </span>

                    <span class="left-text" style="">
                        <?= get_field("left_text") ?>
                    </span>
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




    <!-- Outcome Testimonials Section on Small Screens -->
    <div class="container" style="">
        <div class="row d-flex flex-row align-items-center justify-content-center  gap-4" style="margin-top:100px;">
            <?php
            foreach (get_field("expertise_testimonials") as $testimonial) {
                ?>
            <div class="testimonial"
                style="border-radius:15px; background-color:#FFF; width:350px; height:193px; margin:15px 0; padding: 20px;">
                <div style="margin:0 0 2px 0 ; display: flex;align-items: center;gap:8px;">
                    <!-- margin: 15px auto 2px auto -->
                    <span
                        style="color: #E94271;font-family: Manrope;font-size: 14px;font-style: normal;font-weight: 700;line-height: 23.8px; font-family: Manrope;">
                        <?= $testimonial["expertise_num"] ?>
                    </span>
                    <span
                        style="font-size: 14px;font-style: normal;font-weight: 700;line-height: 23.8px; color:#6A7291;font-family: Manrope;">
                        <?= $testimonial["expertise_sub_title"] ?>
                    </span>
                </div>


                <!-- <h1 style="color: #25325F; font-size:18px;font-weight:700;line-height:27px; font-family: Manrope; ">
                        <?= $testimonial["expertise_main_title"] ?>
                    </h1> -->

                <div style=" border-bottom: 0.5px solid  #25325F; margin:15px 1px;"></div>

                <p class=""
                    style="font-size:13px; font-style:normal; font-weight:500; line-height:22px; color:#6A7291; padding: ; font-family: Manrope; text-align: left;  ">
                    <?= $testimonial["expertise_text"] ?>
                </p>

            </div>
            <?php
            }
            ?>
        </div>
    </div>








</main>



<?php get_footer() ?>