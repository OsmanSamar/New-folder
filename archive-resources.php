<?php
get_header();
$id = 1519;
//Template Name: resources archive
?>
<main class="resources flex-grow-1">
    <style>
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

    .container-max-width {
        border-radius: 30px;
        /* max-width: 1700px; */
        min-height: 381px;
        margin: 200px auto 10px;
    }

    .container-max-width .container-img {
        display: none;
    }

    .hero_white_block {
        height: 100%;
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

    .desc {
        border-bottom: 7px solid green;
    }

    .date {
        border-left: unset;

    }

    .resource-item {
        display: flex;
        flex-direction: row;
        align-items: center;
        /* justify-content: space-between; */
        border: 1px solid #ccc;
        border-radius: 15px;
        height: 80px;
        /* padding: 16px; */
        /* padding: 8px; */
        margin-bottom: 250px;
        /* overflow: hidden; */
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

    /* .resource-item>div {
        padding: 0 10px;
        border-left: 1px solid #ccc;
        height: 80px;
        display: flex;
        align-items: center;
    } */

    .border-end {
        border-left: 1px solid red;
    }

    .border-left {
        border-left: 1px solid white;
        display: flex;
        flex-direction: column;
        padding: 20px 0 20px 60px;
        row-gap: 16px;
    }

    @media (min-width: 768px) {
        .container-max-width .container-img {
            display: block;
        }

        .hero_white_block {
            width: 380px;
            position: relative;
            bottom: 302px;
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

        .border-left {
            border-left: 1px solid red;
            display: flex;
            flex-direction: column;
            padding: 20px 0 20px 60px;
            row-gap: 16px;
        }

        .inner_block {
            gap: 36px;
        }

    }

    @media (min-width: 992px) {

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
            position: relative;
            bottom: 303px;
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
            gap: 37px;
        }

        .desc {
            border-bottom: unset;
        }

        .date {
            border-left: 1px solid red;

        }
    }
    </style>

    <!-- BreadCrumb Section -->
    <?php get_template_part('components/breadcrumb') ?>
    <!--End  Of BreadCrumb Section -->

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
                        <div class="d-flex align-items-center justify-content-center rounded "
                            style="width: 30px; height: 30px; background-color:#274083;">
                            <img src="<?= get_field("backimg")['url'] ?>" alt="<?= get_field("backimg")['alt'] ?>"
                                style="width: 12px; height: 18px;" />
                        </div>
                        <a href="<?= get_field("backlink")['url'] ?>"
                            style="color:#274083;; font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px;  text-decoration: none; ">
                            <?= get_field("backlink")['title'] ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                <div class="col-12 col-lg-4  justify-content-center justify-content-lg-start d-flex align-items-center h-100 p-3 px-4"
                    style="background-color:#274083; border-radius:15px 0px 0px 15px;">
                    <span class="title ">
                        <?= $post->post_title ?>
                    </span>
                </div>
                <div class="col-12 col-lg-5 justify-content-center justify-content-lg-start d-flex align-items-center h-100  p-3 px-4 desc "
                    style="background-color:">
                    <div class="description">
                        <?= $fields['voorbeeld'] ?>
                    </div>
                </div>
                <div class="d-none d-lg-flex col-lg-2 justify-content-center justify-content-lg-start d-flex align-items-center h-100 p-3 px-4 date "
                    style="background-color: ">
                    <div class="">
                        Published <?= $fields['datum'] ?>
                    </div>
                </div>

                <div class=" d-none d-lg-flex col flex-shrink-0  justify-content-center  d-flex align-items-center h-100  date"
                    style="background-color:">
                    <div class="d-flex align-items-center justify-content-center rounded  arrow"
                        style="width: 30px; height: 30px; background-color:#274083;">
                        <img src="/sue/wp-content/themes/New folder/images/arrow.svg" alt="Arrow">
                    </div>
                </div>
                <!-- SM Screen -->
                <div class="d-flex justify-content-between d-lg-none col-12  align-items-center h-100 p-3 px-4 date flex-row"
                    style="background-color:">
                    <div class="date">
                        Published <?= $fields['datum'] ?>
                    </div>
                    <div class="d-flex d-lg-none border-left"></div>
                    <div class="d-flex align-items-center justify-content-center rounded  arrow"
                        style="width: 30px; height: 30px; background-color:#274083;">
                        <img src="/sue/wp-content/themes/New folder/images/arrow.svg" alt="Arrow">
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

<?php get_footer() ?>li