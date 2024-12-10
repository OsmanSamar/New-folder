<?php get_header();

//Template Name: consultancy
?>

<main class="consultancy flex-grow-1">

    <style>
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
        gap-4;
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


    .block_blue {
        height: 1080.03px;
        border-radius: 40px;
        background: #25325F;
        margin: 80px auto;
        width: 100%;
        max-width: 1700px;
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

                <div style="width: 192px;height: 190px;">
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
                        r
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




    <!--  Testimonials Section on All Screens -->
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center  gap-4 gy-2" style="margin-top:100px;">
            <?php
            foreach (get_field("expertise_testimonials") as $testimonial) {
                ?>
            <div class="col-lg-4 col-md-12 col-12"
                style="border-radius:15px; background-color:#FFF; width:350px; height:193px; margin:15px 0; padding: 20px;">

                <div style="margin:0 0 2px 0 ; display: flex;align-items: center;gap:8px;">
                    <span
                        style="color: #E94271;font-family: Manrope;font-size: 14px;font-style: normal;font-weight: 700;line-height: 23.8px; font-family: Manrope;">
                        <?= $testimonial["expertise_num"] ?>
                    </span>
                    <span
                        style="font-size: 14px;font-style: normal;font-weight: 700;line-height: 23.8px; color:#6A7291;font-family: Manrope;">
                        <?= $testimonial["expertise_sub_title"] ?>
                    </span>
                </div>
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


    <!-- New Section blue block -->
    <div class="block_blue">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center" style="margin-top:100px;">
                <?php
                foreach (get_field("clients_consultancy_testimonials") as $testimonial) {
                    ?>
                <div class="col-12 col-md-12 col-lg-4 mt-2 d-flex align-items-center justify-content-center">
                    <div class="card" style="width:356px;height: 464px; border-radius:15px; background-color:#FFF;">
                        <img src="<?= $testimonial["clients_img"]['url'] ?>"
                            alt="<?= $testimonial['clients_img']['alt'] ?>" class="card-img-top"
                            style="width:100%;height: 213px;border-radius: 20px;" />

                        <div class="card-body">
                            <div class="card-title d-flex align-items-center justify-content-center"
                                style="width: 96px;height: 30px;border-radius: 100px;background: #E94271; color: #FFF; font-family: Manrope; font-size: 13px; font-style: normal; font-weight: 700; line-height: 23.4px; text-align:center">
                                <span>
                                    <?= $testimonial["clients_name"] ?>
                                </span>
                            </div>
                            <p style="color: #25325F;font-family: Manrope;font-size:18px;font-style: normal;font-weight: 700;line-height:33.6px; width:264px;"
                                class="card-text"> <?= $testimonial["clients_text"] ?></p>

                            <div class="d-flex justify-content-left align-items-center gap-2">
                                <p style="color: var(--Text, #6A7291);font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px"
                                    class="card-text"><?= $testimonial["industry_title"] ?>

                                <p style="color: var(--Primary-600, #25325F);font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px"
                                    class="card-text"><?= $testimonial["industry"] ?></p>
                                </p>

                            </div>

                            <div class="d-flex flex-row align-items-left justify-content-between">
                                <div class="d-flex flex-row align-items-left justify-content-between gap-2">

                                    <div style="border-radius:8px; background:#274083; width:30px; height:30px;"
                                        class="d-flex align-items-center justify-content-center">
                                        <img class="" src="<?= $testimonial["bekijk"]['url'] ?>"
                                            alt="<?= $testimonial["bekijk"]['alt'] ?>"
                                            style="width: 12px;height: 18px;" />
                                    </div>
                                    <a href="<?= $testimonial['bekijk_btn']['url'] ?>">
                                        <?= $testimonial["bekijk_btn"]['title'] ?>
                                    </a>

                                </div>

                                <img src="<?= $testimonial["kpn"]['url'] ?>" alt="<?= $testimonial["kpn"]['alt'] ?>"
                                    class="" style="width: 62.952px;height: 24px;" />
                            </div>



                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>






</main>



<?php get_footer() ?>