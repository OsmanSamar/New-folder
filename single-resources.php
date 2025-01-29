<?php get_header();

//Template Name: post-1
?>

<main class="single-resources flex-grow-1">
    <style>
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

        .container-max-width .container-img {
            display: none;
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
            color: #FFF;
            font-family: Sora;
            font-size: 29px;
            font-style: normal;
            font-weight: 700;
            line-height: 54px;
            margin-top: 45px;
            margin-bottom: 31px;
        }



        .container {
            margin-top: 50px;
        }


        .sidebar {
            /* position: sticky; */
            top: 20px;
            height: fit-content;
            padding: 15px;
            border-radius: 8px;
            padding-top: unset;
            order: 2 !important
        }


        .content {
            padding: 15px;
            order: 1 !important
        }


        .next-section {
            margin-top: 70px;
            /* padding: 20px;
            background-color: #274083;
            color: white;
            text-align: center;
            border-radius: 8px; */
        }

        .left-btn {
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

        .first_title {
            color: #25325F;
            font-family: Sora;
            font-size: 29px;
            font-style: normal;
            font-weight: 700;
            line-height: 44px;
            margin-top: 45px;
            margin-bottom: 31px;
        }

        .first_text {

            color: #25325F;
            font-family: Manrope;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 1.8;
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

            .container-max-width .container-img {
                display: block;
            }

            .hero_blue_block {
                width: 458px;
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

            .inner_block {
                margin: unset;
            }

            .hero_title {
                font-size: 35px;
            }


            .left-content {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                margin-top: 50px;
                gap: 20px;
            }

            .border-left {
                border-left: 1px solid white;
                display: flex;
                flex-direction: column;
                padding: 20px 0 20px 60px;
                row-gap: 16px;
            }

            .sidebar {
                order: 1 !important;
                padding-top: unset;
            }

            .content {
                order: 2 !important
            }

        }

        @media(min-width: 992px) {
            .hero_blue_block {
                width: 531px;
                position: relative;
                bottom: 580px;
                left: 0;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: center;
                padding: 30px;
                height: 100%;
                margin-top: unset;
            }


            .hero_title {
                font-size: 35px;
            }


            .form_section {
                height: 571px;
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

            .sidebar {
                order: 1 !important;
                padding-top: 120px;
            }

            .content {
                order: 2 !important;
                margin-left: 3rem;
            }

        }
    </style>
    <div style="margin-top:180px;">

        <!-- BreadCrumb Section -->
        <?php get_template_part('components/breadcrumb') ?>


        <!-- Hero Section -->
        <div class="container-max-width" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
            data-aos-duration="1000" data-aos-easing="ease-in-out">
            <img src="<?= get_field("heroimg")['url'] ?>" alt="<?= get_field("heroimg")['title'] ?>"
                class="container-img" style=" height: 581px; border-radius: 40px; object-fit: cover;" />
            <div class=" hero_blue_block">
                <div class="inner_block container">
                    <div class="d-flex align-items-center justify-content-between gap-2">
                        <div class="d-flex align-items-center justify-content-center rounded "
                            style="width: 30px; height: 30px; background-color:#FFF;">
                            <img src="<?= get_field("backimg")['url'] ?>" alt="<?= get_field("backimg")['alt'] ?>"
                                style="width: 12px; height: 18px;" />
                        </div>
                        <a href="<?= get_field("backtooverview")['url'] ?>"
                            style="color:#FFF; font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px;  text-decoration: none; ">
                            <?= get_field("backtooverview")['title'] ?>
                        </a>
                    </div>
                    <span class="hero_title">
                        <?= get_field("herotitle") ?>
                    </span>
                </div>
            </div>
        </div>



        <div class="container">
            <div class="row">
                <div class="col-lg-3 sidebar sticky-lg-top ">
                    <?php foreach (get_field("stickysidecontent") as $content) {
                        //   var_dump($content);
                        if ($content['acf_fc_layout'] == 'text') {
                            ?>
                            <h3 class="left-btn"><?= $content['firsttitle'] ?></h3>
                            <div style="margin-top: 2rem; margin-bottom: 2rem;"><?= $content['firsttext'] ?></div>
                            <h3 class="left-btn"><?= $content['secondtitle'] ?></h3>
                            <div class="d-flex justify-content-start align-items-baseline gap-2"
                                style="margin-top: 2rem; margin-bottom: 2rem;">
                                <a href="#vivamusnoncommodonulla" class="d-flex align-items-baseline text-decoration-none">
                                    <p class="mb-0"><?= $content['secondtext'] ?></p>
                                    <div class="d-flex align-items-center justify-content-center ms-2">
                                        <img src="<?= $content['arrowimg']['url'] ?>" alt="<?= $content['arrowimg']['alt'] ?>"
                                            style="width: 4px; height: 8px;" />
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-start align-items-baseline gap-2">
                                <a href="#pellentesquebibendumefficiturduisedconvallistinciduntelitegetiaculis"
                                    class="d-flex align-items-baseline text-decoration-none">
                                    <p class="mb-0"><?= $content['thirdtitle'] ?></p>
                                    <div class="d-flex align-items-center justify-content-center ms-2">
                                        <img src="<?= $content['arrowimg']['url'] ?>" alt="<?= $content['arrowimg']['alt'] ?>"
                                            style="width: 4px; height: 8px;" />
                                    </div>
                                </a>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>

                <div class="col-lg-8 content">
                    <?php foreach (get_field("content") as $content) {
                        // var_dump($content);
                        if ($content['acf_fc_layout'] == 'text') { ?>
                            <div id="vivamusnoncommodonulla">
                                <h1 class="first_title"><?= $content['firsttitel'] ?></h1>
                                <span class="first_text"> <?= $content['firsttext'] ?></span>
                            </div>

                            <div id="pellentesquebibendumefficiturduisedconvallistinciduntelitegetiaculis">
                                <h1 class="first_title">
                                    <?= $content['secondtitel'] ?>
                                </h1>
                                <span class="first_text"> <?= $content['secondtext'] ?></span>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>




        <section class="next-section">
            <!-- Form Section container  -->
            <?php get_template_part('components/form') ?>
            <!-- End of Form Section -->
        </section>


    </div>









</main>
<?php get_footer() ?>