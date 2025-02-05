<?php
get_header();
$id = 1519;
//Template Name: resources archive
?>
<main class="resources flex-grow-1">
    <style>
        .button-text a {
            color: #274083;
            font-family: Manrope;
            font-size: 13px;
            font-style: normal;
            font-weight: 600;
            line-height: 15.6px;
            text-decoration: none;
        }

        .button-text a:hover {
            color: #FFF;
        }

        b,
        strong {
            color: #e94271;
            font-family: inherit;
            font-size: inherit;
            font-style: inherit;
            line-height: inherit;
        }

        .form_section {
            border-radius: 30px;
            background: #25325F;
            max-width: 1700px;
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

        .container-max-width {
            border-radius: 30px;
            min-height: 381px;
            margin: 40px auto 10px;
        }

        .container-max-width .container-img {
            display: none;
        }

        .hero_white_block {
            /* height: 100%; */
            border-radius: 40px;
            background: #FFF;
            position: relative;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 30px;
            position: static;
            margin-top: 0;
        }

        .inner_block {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: left;
            margin: 10px 60px;
            gap: 20px;
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
            font-size: 36px;
            font-style: normal;
            font-weight: 700;
            line-height: 27.2px;
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


        .hero_text {
            color: #9AA0B7;
            font-family: Manrope;
            font-size: 36px;
            font-style: normal;
            font-weight: 700;
            line-height: 27.2px;
        }

        .date {
            border-left: unset;
        }

        .resource-item {
            display: flex;
            flex-direction: row;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 15px;
            height: 80px;
            margin-bottom: 250px;
        }

        .resource-item:hover {
            background-color: #f9f9f9;
        }

        .resource-item>div:first-child {
            border-left: none;
        }

        .resource-item .arrow img {
            width: 12px;
            height: 18px;
        }

        .border-end {
            border-left: 1px solid red;
        }

        .border-left {
            border-left: 1px solid #ccc;
            display: flex;
            flex-direction: column;
            padding: 55px 0 20px 138px;
            row-gap: 16px;
        }

        .border-right {
            border-right: 1px solid #ccc;
            display: flex;
            flex-direction: column;
            padding: 55px 0 20px 138px;
            row-gap: 16px;
        }

        .datum {
            background-color: #274083;
            border-radius: 15px 15px 0px 0px;
            color: #FFF;
            font-size: 20px;
        }

        .post-id {
            border: 1px solid #ccc;
        }

        @media (min-width: 768px) {
            .datum {
                border-radius: 15px 15px 0px 0px;
            }

            .container-max-width .container-img {
                display: block;
            }

            .hero_white_block {
                width: 380px;
                /* position: relative; */
                position: absolute;
                bottom: 79px;
                left: 0;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: center;
                padding: 30px;
                margin-top: unset;
            }

            .left-content {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                margin-top: 50px;
                gap: 20px;
            }

            .border-right {
                padding: 55px 0 20px 482px;
            }

            .inner_block {
                gap: 36px;
            }

        }

        @media (min-width: 992px) {

            .container-max-width {
                margin: 100px auto 10px;
            }

            .datum {
                border-radius: 15px 0px 0px 15px;
            }

            .border-top {
                border-top: 1px solid red;
            }

            b,
            strong {
                font-size: inherit;
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

            .hero_white_block {
                width: 531px;
                position: absolute;
                bottom: 79px;
                left: 0;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: center;
                padding: 30px;
                margin-top: unset;
            }

            .inner_block {
                margin: 10px 60px;
                gap: 37px;
            }

            .resource-item {
                margin-bottom: 40px;
            }

            .date {
                border-left: 1px solid #ccc;

            }
        }
    </style>

    <!-- BreadCrumb Section -->
    <?php get_template_part('components/breadcrumb') ?>


    <!-- Hero Section -->
    <div class="container container-max-width" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
        data-aos-duration="1000" data-aos-easing="ease-in-out">
        <div class="row">
            <div class="">
                <img src="<?= get_field("heroimg", $id)['url'] ?>" alt="<?= get_field("heroimg")['title'] ?>"
                    class="container-img" style=" height: 302px; border-radius: 40px; object-fit: cover;" />
            </div>
            <div class="hero_white_block ">
                <div class="container inner_block">
                    <span class="left-btn">
                        <?= get_field("herotitle") ?>
                    </span>
                    <span class="hero_text">
                        <?= get_field("herotext") ?>
                    </span>
                    <div class="d-flex align-items-center justify-content-between gap-2">
                        <button>
                            <span class="circle blue-circle">
                                <div class="d-flex align-items-center justify-content-center rounded  arrow">
                                    <img src="<?= get_field("backimg")['url'] ?>"
                                        alt="<?= get_field("backimg")['alt'] ?>" style="width: 12px; height: 18px;"
                                        class="icon" />
                                </div>
                            </span>
                            <div class="button-text ">
                                <a href="<?= get_field("backlink")['url'] ?>">
                                    <?= get_field("backlink")['title'] ?>
                                </a>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Posts -->
    <?php
    $posts = get_posts([
        'post_type' => 'resources',
        'numberposts' => -1
    ]);

    foreach ($posts as $post) {
        $fields = get_fields($post->ID);
        ?>
        <div class="container">
            <div class="row">
                <a href="<?= get_permalink($post) ?>" class="resource-item g-0 row ">
                    <div
                        class="col-12 col-lg-4  justify-content-center justify-content-lg-start d-flex align-items-center h-100 p-3 px-4 datum">
                        <span class="title ">
                            <?= $post->post_title ?>
                        </span>
                    </div>
                    <div
                        class="col-12 col-lg-5 d-flex  justify-content-center justify-content-lg-start  align-items-center h-100  p-3 px-4 date post-id">
                        <div class="flex-shrink-0">
                            <?= $fields['voorbeeld'] ?>
                        </div>
                    </div>
                    <div
                        class="col-12 col-lg-2 d-none d-lg-flex justify-content-center justify-content-lg-start  align-items-center h-100  p-3 px-4 date post-id">
                        <div class="d-flex align-items-baseline gap-3">
                            <span style=" color:#E94271"> Published </span> <?= $fields['datum'] ?>
                        </div>
                    </div>

                    <div class=" d-none d-lg-flex col flex-shrink-0  justify-content-center  d-flex align-items-center h-100  date post-id"
                        style="background-color:">
                        <div class="d-flex align-items-center justify-content-center rounded  arrow"
                            style="width: 30px; height: 30px; background-color:#274083;">
                            <img src="wp-content/themes/New folder/images/arrow.svg" alt="Arrow">
                        </div>
                    </div>
                    <!-- SM Screen -->
                    <div
                        class="d-flex justify-content-between d-lg-none col-12  align-items-center h-100 p-3 px-4  flex-row  post-id">

                        <div class="flex-shrink-0 d-flex flex-column align-items-center justify-content-between gap-3">
                            <span style=" color:#E94271"> Published </span>
                            <?= $fields['datum'] ?>
                        </div>

                        <div class="d-flex d-lg-none border-right"></div>
                        <div class="d-flex align-items-center justify-content-center rounded  arrow"
                            style="width: 30px; height: 30px; background-color:#274083;">
                            <img src="wp-content/themes/New folder/images/arrow.svg" alt="Arrow">
                        </div>
                    </div>

                </a>
            </div>
        </div>
        <?php
    }
    wp_reset_postdata();
    ?>





    <!-- Form Section container  -->
    <?php get_template_part('components/form') ?>
    <!-- End of Form Section -->


</main>

<?php get_footer() ?>