<?php
get_header();
$id = 1576;
//Template Name: events archive
?>
<main class="events flex-grow-1">
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
        border: 1px solid #dee2e6;
        border-radius: 15px;
        height: 125px;
        margin-bottom: 414px;
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
        border-left: 1px solid #dee2e6;
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
        border-right: 1px solid #dee2e6;
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
        border: 1px solid #dee2e6;
    }



    .weekday {
        color: #9aa0b7;
    }


    /*  */

    .filter-bar select.filter-input {
        background-image: url("<?= get_template_directory_uri() ?>/images/nextarrow.svg"alt="Arrow");
        background-position: right 1rem center;
        background-repeat: no-repeat;
        background-size: .75rem;

    }

    .filter-bar .filter-input {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background: none;
        border: 1px solid #cbcfde;
        border-radius: 10px;
        box-shadow: none;
        color: #24325f;
        font-size: inherit;
        margin: .5rem 0;
        padding: .75rem 4rem .75rem 1rem;
        width: auto;
    }

    .filter-bar .search button {
        position: absolute;
        right: 133px;
        /* top: 50%; */
        bottom: 87px;
        transform: translateY(-50%);
        /* background-color: #24325f; */
        color: #24325f;
    }




    .filter-bar.filter-bar-results .filter-input {
        border: 0;
        padding-right: 3rem;
    }


    option {
        font-weight: normal;
        display: block;
        padding-block-start: 0px;
        padding-block-end: 1px;
        min-block-size: 1.2em;
        padding-inline: 2px;
        white-space: nowrap;
    }





    /*  */



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

        .post-id {
            border: 1px solid #dee2e6;
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

        /* .date {
            border-left: 1px solid #dee2e6;

        } */

        .post-id {
            border: none;
        }

        .date {
            border-left: 1px solid #dee2e6;
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
                            <div class="button-text  blue2">
                                <span>
                                    Back to insights
                                </span>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Filter-->

    <div class="filter-bar-container" id="list">
        <div class="container">
            <div class="row">
                <div
                    class="filter-bar d-flex justify-content-between flex-wrap mb-4 mt-lg-g align-items-center flex-lg-nowrap">
                    <div class="d-flex gap-md-4 flex-wrap align-items-md-center flex-column flex-md-row w-100">
                        <p class="mb-0 lead">Filter:</p>
                        <select name="industry" class="filter-input level">
                            <option value="null" selected="">Industry</option>
                            <option value="28">Banking &amp; FinTech</option>
                            <option value="20">Enterprise Software Development</option>
                            <option value="40">General</option>
                            <option value="21">High Tech Manufacturing</option>
                            <option value="39">Hospitals &amp; Clinical Care</option>
                            <option value="38">Research &amp; BioTech</option>
                            <option value="37">State &amp; National Agencies</option>
                        </select>

                        <select name="expertise" class="filter-input">
                            <option value="null" selected="">Expertise</option>
                            <option value="23">Application Modernization</option>
                            <option value="36">Cloud Security</option>
                            <option value="35">Data &amp; AI</option>
                            <option value="22">Hybrid Cloud</option>
                            <option value="24">Platform Engineering</option>
                        </select>
                    </div>
                    <div class="search d-flex align-items-center w-50">
                        <input type="text" id="myInput" name="search" class="filter-input w-100 position-relative"
                            onkeyup="myFunction()" placeholder="Search events...">

                        <div class="d-flex align-items-center justify-content-cenetr gap-2 position-absolute   submit-btn"
                            style="right:204px">
                            <span class="d-flex justify-content-cenetr align-items-center "
                                style="height:39.261px;padding: 4px 13px; border-radius: 8px;background: #274083 !important;">
                                <img src="<?= get_field("submitimg", 'option')['url'] ?>"
                                    alt="<?= get_field("submitimg", 'option')['alt'] ?>"
                                    style="width: 12px; height: 18px;" />
                            </span>
                            <span
                                style="color: #274083;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px;">
                                Search
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div
                        class="filter-bar filter-bar-results d-flex align-items-md-center justify-content-between flex-column flex-md-row">
                        <p class="mb-0 color-neutral-500">Showing <span class="shown">5</span> of <span
                                class="total">30</span> articles</p>
                        <div class="filter-bar-results-sort d-flex align-items-center gap-2">
                            <p class="mb-0 color-neutral-500">Sort by:</p>
                            <select name="sort" class="filter-input">
                                <option value="date_desc">Newest to oldest</option>
                                <option value="date_asc">Oldest to newest</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









    <?php
    $posts = get_posts([
        'post_type' => 'events',
        'numberposts' => -1,
        "order" => 'asc'
    ]);

    foreach ($posts as $post) {
        $fields = get_fields($post->ID);
        $testimonial = get_field("eventtestimonials");
        $expertises = get_the_terms($post, 'expertise_cat') ?? [];
        $expertiseSlugs = [];
        if ($expertises) {
            foreach ($expertises as $expertise) {
                $expertiseSlugs[] = $expertise->slug;
            }
        }
        ?>
    <div class="container" data-expertise="<?= implode(',', $expertiseSlugs) ?>">
        <div class="row g-0">
            <a href="<?= get_permalink($post) ?>" class="resource-item g-0 row ">

                <div
                    class="col-12 col-lg-3 justify-content-center justify-content-lg-start d-flex flex-column  align-items-center align-items-lg-start h-100 p-3 px-4 datum">
                    <!-- <span class="">
                            <?php
                            $date = strtotime($testimonial['datum']); // Convert string to timestamp
                            echo date('l', $date) . "<br>" . date('d M, Y', $date);
                            ?>
                        </span> -->
                    <span class="weekday d-block">
                        <?php

                            echo date('l', strtotime($testimonial['datum'])); ?>
                    </span><br>

                    <span class="">
                        <?php echo date('d M, Y', strtotime($testimonial['datum'])); ?>
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
                            <!-- <img src="/wp-content/themes/New folder/images/nextarrow.svg" alt="Arrow"> -->
                            <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg" alt="Arrow">
                        </div>

                    </span>
                </div>
                <div class="d-flex col-lg-2 justify-content-center  align-items-center h-100 p-3 px-4  date post-id ">
                    <div class="flex-shrink-0">
                        <p> <?= $testimonial['starttime'] ?></p>
                        <p style=" color:#9AA0B7"> <?= $testimonial['start'] ?></p>
                    </div>

                    <div style="width:40px; ">
                        <hr>
                    </div>
                    <div class="flex-shrink-0 ">
                        <p><?= $testimonial['endtime'] ?></p>
                        <p style=" color:#9AA0B7"><?= $testimonial['end'] ?> </p>
                    </div>
                </div>

                <div
                    class="col-12 col-lg-2 justify-content-center justify-content-lg-start d-flex align-items-center h-100  p-3 px-4  post-id date ">
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
                        <?= $testimonial['place'] ?>
                    </span>
                </div>

                <div class=" d-none d-lg-flex col flex-shrink-0  justify-content-center  d-flex align-items-center h-100  date"
                    style="background-color:">
                    <div class="d-flex align-items-center justify-content-center rounded  arrow"
                        style="width: 30px; height: 30px; background-color:#274083;">
                        <img src="<?= get_template_directory_uri() ?>/images/arrow.svg" alt="Arrow">

                    </div>
                </div>
            </a>
        </div>
    </div>
    <?php
    }
    wp_reset_postdata();
    ?>



    <div class="text-center mt-4">
        <!-- <button id="load-more" class="btn btn-primary" data-page="1" data-url="<?= admin_url('admin-ajax.php'); ?>">
            Load More
        </button> -->


        <div class="d-flex justify-content-center align-items-center gap-2">
            <button>
                <span class="circle blue-circle">
                    <div class="d-flex align-items-center justify-content-center rounded  arrow">
                        <img src="<?= get_template_directory_uri() ?>/images/downloadimg.svg" alt="Arrow"
                            style="width:16px; height:18px; margin:7px 0;" class="icon">
                    </div>
                </span>
                <div class="button-text  blue2">
                    <span>
                        Load more</span>
                </div>
            </button>
        </div>

    </div>
    </div>



    <!-- Form Section container  -->
    <?php get_template_part('components/form') ?>
    <!-- End of Form Section -->







    <!-- <script>
    function myFunction() {
        let input = document.getElementById("myInput").value.toLowerCase();
        let eventItems = document.querySelectorAll(".event-item");

        eventItems.forEach(function(event) {
            let eventText = event.textContent.toLowerCase();
            if (eventText.includes(input)) {
                event.style.display = "";
            } else {
                event.style.display = "none";
            }
        });
    }
    </script> -->

</main>

<?php get_footer() ?>