<?php
get_header();
$id = 1576;
//Template Name: events archive
?>
<main class="events flex-grow-1">
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
            min-height: 381px;
            margin: 40px auto 10px;
        }

        .container-max-width .container-img {
            display: none;
        }

        .hero_white_block {
            height: 306px;
            border-radius: 40px;
            background: #FFF;
            position: relative;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 53px;
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
            color: #274083;
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
            padding: 20px 0 20px 60px;
            /*  padding: 55px 0 20px 138px; */
            row-gap: 16px;
        }

        .date {
            border-left: unset;
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


            .container-max-width .container-img {
                display: block;
            }

            .hero_white_block {
                width: 380px;
                /* position: relative; */
                position: absolute;
                bottom: 76px;
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
                border-left: 1px solid white;
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

            .datum {
                border-radius: 15px 0px 0px 15px;
            }


            .hero_text {
                font-size: 46px;
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
                /* position: relative;
                bottom: 306px; */
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
        'post_type' => 'events',
        'numberposts' => -1
    ]);

    foreach ($posts as $post) {
        $fields = get_fields($post->ID);
        ?>
        <div class="container">
            <div class="row">
                <a href="<?= get_permalink($post) ?>" class="resource-item g-0 row ">
                    <div
                        class="col-12 col-lg-3  justify-content-center justify-content-lg-start d-flex align-items-center h-100 p-3 px-4 datum">
                        <span class="">
                            <?= $fields['datum'] ?>
                        </span>
                    </div>
                    <div class="col-12 col-lg-4  d-flex justify-content-center justify-content-lg-start align-items-center h-100  p-3 px-4  date post-id "
                        style="color: #24325f;font-family: Manrope, sans-serif;text-wrap: balance; font-weight: 600;line-height: 1.4; font-size:17px;">
                        <span class="d-flex flex-row align-items-baseline justify-content-center  gap-2 ">
                            <span class="title ">
                                <?= $post->post_title ?>
                            </span>
                            <div class="d-flex align-items-center justify-content-center rounded  "
                                style="width: 6px; height: 9px; ">
                                <img src="/sue/wp-content/themes/New folder/images/nextarrow.svg" alt="Arrow">
                            </div>

                        </span>
                    </div>
                    <div class="d-flex col-lg-2 justify-content-center  align-items-center h-100 p-3 px-4  date post-id">
                        <div class="d-flex flex-row align-items-center justify-content-between gap-">
                            <div class="flex-shrink-0">
                                <?= $fields['starttime'] ?>
                                <span style=" color:#9AA0B7"> <?= $fields['start'] ?></span>

                            </div>
                            <div style="width:40px">
                                <hr>
                            </div>
                            <div class="flex-shrink-0">
                                <?= $fields['endtime'] ?>
                                <span style=" color:#9AA0B7"><?= $fields['end'] ?> </span>

                            </div>
                        </div>
                    </div>

                    <div
                        class="col-12 col-lg-2 justify-content-center justify-content-lg-start d-flex align-items-center h-100  p-3 px-4 date post-id ">
                        <span class="d-flex flex-row align-items-baseline justify-content-center  gap-2 "
                            style="color: #24325f;font-family: Manrope, sans-serif;text-wrap: balance; font-weight: 600;line-height: 1.4; font-size:17px;">
                            <svg class="flex-shrink-0 mt-2" xmlns="http://www.w3.org/2000/svg" width="10" height="15"
                                fill="none">
                                <g fill="#6A7291" clip-path="url(#a)">
                                    <path d="M4.63 14.47 5 14.2l.37.27L5 15l-.37-.53Z"></path>
                                    <g fill-rule="evenodd" clip-rule="evenodd">
                                        <path
                                            d="M5 2.793c-1.256 0-2.273 1.043-2.273 2.328 0 1.286 1.017 2.328 2.272 2.328s2.273-1.042 2.273-2.328c0-1.285-1.018-2.328-2.273-2.328ZM3tar5 5.121c0-.771.61-1.396 1.363-1.396s1.364.625 1.364 1.396c0 .772-.61 1.397-1.364 1.397-.753 0-1.363-.625-1.363-1.397Z">
                                        </path>
                                        <path
                                            d="M4.63 14.47 5 14.2l.37.27.003-.005.01-.014.04-.056.145-.214a58.524 58.524 0 0 0 2.095-3.318c.572-.981 1.15-2.053 1.587-3.048.428-.976.75-1.944.75-2.694C10 2.293 7.761 0 5 0S0 2.293 0 5.121c0 .75.322 1.718.75 2.694.436.995 1.014 2.067 1.587 3.049a58.495 58.495 0 0 0 2.24 3.53l.04.057.01.014.003.006ZM.91 5.122C.91 2.807 2.74.931 5 .931s4.09 1.876 4.09 4.19c0 .536-.245 1.346-.67 2.313-.415.948-.974 1.985-1.537 2.952a57.499 57.499 0 0 1-1.883 3 57.517 57.517 0 0 1-1.883-3c-.563-.967-1.122-2.004-1.538-2.952C1.155 6.467.91 5.657.91 5.12Z">
                                        </path>
                                    </g>
                                </g>
                                <defs>
                                    <clipPath id="a">
                                        <path fill="#fff" d="M0 0h10v15H0z"></path>
                                    </clipPath>
                                </defs>
                            </svg>
                            <?= $fields['place'] ?>
                        </span>
                    </div>


                    <div class=" d-none d-lg-flex col flex-shrink-0  justify-content-center  d-flex align-items-center h-100  date"
                        style="background-color:">
                        <div class="d-flex align-items-center justify-content-center rounded  arrow"
                            style="width: 30px; height: 30px; background-color:#274083;">
                            <img src="/sue/wp-content/themes/New folder/images/arrow.svg" alt="Arrow">
                        </div>
                    </div>


                    <!-- <div class="d-flex justify-content-between d-lg-none col-12  align-items-center h-100 p-3 px-4 date flex-row"
                        style="background-color:">
                        <div class="date">
                            Published <?= $fields['datum'] ?>
                        </div>
                        <div class="d-flex d-lg-none border-left"></div>
                        <div class="d-flex align-items-center justify-content-center rounded  arrow"
                            style="width: 30px; height: 30px; background-color:#274083;">
                            <img src="/sue/wp-content/themes/New folder/images/arrow.svg" alt="Arrow">
                        </div>
                    </div> -->

                </a>
            </div>
        </div>
        <?php
    }
    wp_reset_postdata();
    ?>

    <!-- <div class="text-center mt-4">
        <button id="load-more" class="btn btn-primary" data-page="1" data-url="<?= admin_url('admin-ajax.php'); ?>">
            Load More
        </button>
    </div> -->











    <!-- Form Section container  -->
    <?php get_template_part('components/form') ?>
    <!-- End of Form Section -->

    <!-- <script>
        jQuery(document).ready(function ($) {
            $("#load-more").on("click", function () {
                var button = $(this),
                    page = button.data("page"),
                    ajaxurl = button.data("url");

                $.ajax({
                    url: ajaxurl,
                    type: "POST",
                    data: {
                        action: "load_more",
                        page: page,
                    },
                    beforeSend: function () {
                        button.text("Loading...");
                    },
                    success: function (data) {
                        if ($.trim(data)) {
                            $("#posts-container").append(data);
                            button.data("page", page + 1).text("Load More");
                        } else {
                            button.remove();  Hide button when no more posts
                        }
                    },
                });
            });
        });
    </script> -->


</main>

<?php get_footer() ?>