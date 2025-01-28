<?php
get_header();
//Template Name: resources archive
?>
<main class="aboutus flex-grow-1">
    <style>
        .form_section {
            border-radius: 30px;
            background: #25325F;
            max-width: 1700px;
            margin: 50px auto 50px;
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
        }


        .hero_blue_block {
            position: static;
            margin-top: 0;
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
            margin-bottom: 31px;
        }

        @media(min-width: 768px) {
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
        }

        @mida(min-width: 992px) {
            .form_section {
                height: 575px;
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
                height: 100%;
                margin-top: unset;

            }

            .inner_block {

                margin: 10px 60px;
            }
        }
    </style>



    <!-- BreadCrumb Section -->
    <?php get_template_part('components/breadcrumb') ?>
    <!--End  Of BreadCrumb Section -->



    <!-- Hero Section -->
    <div class="container-max-width" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
        data-aos-duration="1000" data-aos-easing="ease-in-out">
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


























    <!-- Form Section container  -->
    <?php get_template_part('components/form') ?>
    <!-- End of Form Section -->

    <?php
    $posts = get_posts([
        'post_type' => 'resources',
        'numberposts' => -1
    ]);

    foreach ($posts as $post) {
        $fields = get_fields($post->ID);

        ?>
        <a href="<?= get_permalink($post) ?>">
            <div class="title">
                <?= $post->post_title ?>
            </div>
            <div class="description">
                <?= $fields['voorbeeld'] ?>
            </div>
            <div class="date">
                published
                <?= $fields['datum'] ?>
            </div>

            <div class="arrow">
                <img src="/arrow.svg" alt="">
            </div>
        </a>
        <?php

    }
    ?>

</main>

<?php get_footer() ?>li