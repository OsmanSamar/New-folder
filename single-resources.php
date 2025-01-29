hallo

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
            position: sticky;
            top: 20px;
            height: fit-content;
            padding: 15px;
            border-radius: 8px;
            padding-top: 120px;
        }


        .content {
            padding: 15px;
        }


        .next-section {
            margin-top: 70px;
            padding: 20px;
            background-color: #274083;
            color: white;
            text-align: center;
            border-radius: 8px;
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

        }
    </style>
    <div>

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

                <div class="col-lg-4 sidebar">
                    <!-- <h3>Sidebar </h3>
                    <p>The first text</p> -->

                    <?php foreach (get_field("stickysidecontent") as $content) {
                        // var_dump($content);
                        if ($content['acf_fc_layout'] == 'text') {
                            ?>
                            <h3><?= $content['firsttitle'] ?></h3>
                            <div><?= $content['firsttext'] ?></div>
                            <h3><?= $content['secondtitle'] ?></h3>
                            <div><?= $content['secondtext'] ?></div>
                            <div><?= $content['thirdtitle'] ?></div>
                            <?php
                        }
                    }
                    ?>
                </div>


                <div class="col-lg-8 content">

                    <?php foreach (get_field("content") as $content) {
                        // var_dump($content);
                        if ($content['acf_fc_layout'] == 'text') {
                            ?>
                            <h3><?= $content['firsttitel'] ?></h3>
                            <div><?= $content['firsttext'] ?></div>
                            <h3><?= $content['secondtitel'] ?></h3>
                            <div><?= $content['secondtext'] ?></div>
                            <?php
                        }
                    }
                    ?>

                </div>
            </div>
        </div>


        <section class="next-section">
            <h3>Next Section</h3>
            <p>Vivamus non commodo nulla
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida, urna quis faucibus
                dapibus, nisi augue convallis metus, eget pretium orci felis et mauris. Curabitur tristique odio
                turpis, id iaculis justo viverra a. Cras et venenatis dolor, sed maximus dolor. Mauris elementum
                elit urna, sit amet tristique justo sagittis sit amet. Donec vehicula ligula nisl, nec laoreet
                erat tempor et. Donec nec cursus sapien. Donec bibendum hendrerit ullamcorper. Integer
                sollicitudin, urna a placerat venenatis, ligula mauris tincidunt nisl, in eleifend eros nunc in
                leo. Nunc sit amet nisl vitae nisl pulvinar efficitur. In scelerisque sed diam porttitor
                egestas. Maecenas id neque ac odio porttitor tempus at eget purus. Vivamus non commodo nulla.
            </p>
        </section>


    </div>






</main>



<?php get_footer() ?>