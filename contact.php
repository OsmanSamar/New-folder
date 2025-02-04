<?php get_header();

//Template Name: contact
?>

<main class="contact flex-grow-1">

    <style>
        /* ::BEFORE UITLEGGEN
        
          /* .test-block::before {
        content: " ";
        position: absolute;
        background-color: blue;
        top: 0;
        left: 0;
        z-index: 0;
        border-radius: 20px;
        width: 100%;
        height: 100%;

    } */




        .gform-body {
            .gfield {
                color: black !important;
            }

            @media screen and (min-width: 700px) {
                .gfield {
                    grid-column: span 4 !important;
                }

                .gfield--type-textarea {
                    grid-row: span 2 !important;
                }
            }

            /* Sm Screen */
            @media screen and (max-width: 700px) {
                .gfield--type-textarea {
                    order: 1 !important;
                }
            }

            /* LG Screen */
            @media (min-width: 700px) {
                .gfield--type-textarea {
                    order: 0 !important;
                }
            }
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

        .left-container {
            border-radius: 30px;
            margin-top: ;
            color: white;
            height: 264px;
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



        .border-container {
            border-radius: 40px;
            max-width: 1700px;
            height: 581px;
            border-radius: 40px;
            border: 1px solid #CBCFDE;
            margin: 100px auto 10px;
        }

        .border-container2 {
            border-radius: 40px;
            max-width: 1700px;
            height: 576px;
            border-radius: 40px;
            border: 1px solid #CBCFDE;
            margin: 100px auto 10px;
        }



        .container-max-width {
            border-radius: 30px;
            /* max-width: 1700px; */
            height: 581px;
            /* margin: 200px auto 10px; */
        }

        .container-max-width .container-img {
            display: none;
        }

        .hero_white_block {
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
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: 54px;
            margin-top: 45px;
            margin-bottom: 31px;
        }

        .hero_text {
            color: #6A7291;
            font-family: Manrope;
            font-size: 17px;
            font-style: normal;
            font-weight: 700;
            line-height: 27.2px;
            width: 353px;
            /* height: 158px; */
            margin-bottom: 31px;
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
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .contact-info {
            color: #FFF;
            font-family: Manrope;
            font-size: 16px;
            font-style: normal;
            font-weight: 500;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: left;
            gap: 2px;
        }

        .testi-num {
            color: #E94271;
            font-family: Manrope;
            font-size: 14px;
            font-weight: 700;
            line-height: 23.8px;
        }

        .testi-title {
            font-size: 14px;
            font-weight: 700;
            line-height: 23.8px;
            color: #6A7291;
            font-family: Manrope;
        }

        .testi-text {
            color: #25325F;
            font-family: Manrope;
            font-size: 21px;
            font-style: normal;
            font-weight: 700;
            line-height: 33.6px;
        }



        @media (min-width: 768px) {
            .border-container {
                height: 278px;
            }

            .border-container2 {
                height: 278px;
                margin: 372px auto 10px;
            }

            .container-max-width .container-img {
                display: block;
            }

            .hero_white_block {
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
        }


        @media (min-width: 992px) {

            b,
            strong {
                font-size: inherit;
            }

            .form_section {
                height: 550px;
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


            .border-container {
                height: 581px;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .border-container2 {
                height: 263px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                margin: 100px auto 10px;
            }


            .hero_white_block {
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

            .hero_text {
                font-size: 17px;
            }

            .contact-info {
                justify-content: center;
                align-items: center;


            }

        }

        .back-to-home a img:hover {
            opacity: 0.5;
        }
    </style>
    <div>

        <!-- BreadCrumb Section -->
        <?php get_template_part('components/breadcrumb') ?>
        <!--End  Of BreadCrumb Section -->



        <!-- 2 -->
        <div class="border-container" style="margin-top:210px;" data-aos="fade-up" data-aos-offset="100"
            data-aos-delay="50" data-aos-duration="500" data-aos-easing="ease-in-out">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="container-max-width">
                        <img src="<?= get_field("heroimg")['url'] ?>" alt="<?= get_field("heroimg")['title'] ?>"
                            class="container-img" style=" height: 580px; border-radius: 40px; object-fit: cover;" />
                        <div class="hero_white_block">
                            <div class="container inner_block">
                                <div class=" p-3 ">
                                    <div class="d-flex align-items-center justify-content-between gap-2">
                                        <a href="<?= get_field("backtohome")['url'] ?>"
                                            class="d-flex justify-content-center align-items-center gap-2">
                                            <img src="<?= get_field("backhomebtn")['url'] ?>"
                                                alt="<?= get_field("backhomebtn")['alt'] ?>"
                                                style="width:20px; height:20px; margin:7px 0;" />
                                            <span class="separator"><img src="<?= get_field("separator")['url'] ?>"
                                                    alt="<?= get_field("separator")['alt'] ?>"
                                                    style="width:3px; height:6px; " /> </span>
                                            <span class="first" style="color:#FFF;">Contact us</span>
                                        </a>
                                    </div>
                                    <span class="left-btn">
                                        <?= get_field("herosuntitle") ?>
                                    </span>
                                    <span class="hero_title">
                                        <?= get_field("heromaintitle") ?>
                                    </span>
                                    <span class="hero_text">
                                        <?= get_field("herotext") ?>
                                    </span>

                                    <div style=" border-bottom: 0.5px solid  #6A7291; margin:30px 0;"></div>
                                </div>
                                <div class="row w-100">
                                    <div class=" col-12 col-lg-6  ">
                                        <div class="contact-info ">

                                            <span>
                                                <?= get_field("letstalktext") ?>

                                            </span>
                                            <span>
                                                <?= get_field("email") ?>

                                            </span>

                                            <span>
                                                <?= get_field("phone") ?>

                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-6  ">
                                        <div class="contact-info ">
                                            <span>
                                                <?= get_field("adresstitle") ?>

                                            </span>

                                            <span>
                                                <?= get_field("adress") ?>

                                            </span>
                                            <span>
                                                <?= get_field("postcode") ?>

                                            </span>
                                            <span>
                                                <?= get_field("place") ?>

                                            </span>
                                        </div>
                                    </div>
                                </div>



                                <!-- Talk to an export btn -->

                            </div>


                        </div>

                    </div>

                </div>

                <div class="col-12 col-lg-6">

                    <div class="form-container form-1">
                        <?= str_replace(['__START__', '__END__'], ['<div class="form-col">', '</div>'], do_shortcode('[gravityform id="5" title="false" description="false"  cssClass="form-1"]')) ?>
                    </div>
                </div>
            </div>
        </div>



        <!-- 3 -->
        <!-- <div class="container">
           
            <div class="row " style="margin-top:210px;"></div>
        </div> -->

        <!-- 11 -->
        <!-- Form Section container  -->
        <!-- [gravityform id="5" title="true"] -->

        <div class="row">
            <div class="col-12 col-lg-6">
            </div>
            <div class="col-12 col-lg-6">
                <!-- <div>
                    <?= str_replace(['__START__', '__END__'], ['<div class="form-col">', '</div>'], do_shortcode('[gravityform id="5" title="false" description="false"]')) ?>
                </div> -->
            </div>
        </div>


        <!-- End of Form Section -->



        <!-- <div class="container ">
            <div class="row g-0" style="margin-top:50px;background-color:red;  border-radius:20px;">
                <div class="col-lg-6 p-5" style="background-color:blue; border-radius:20px;">
                    <h1>hoiiiiiiiiiiiiiiiiiiii</h1>
                </div>
                <div class="col-lg-6 p-5">

                    <h1>hoiiiiiiiiiiiiiiiiiiii</h1>
                </div>
            </div>
        </div> -->


        <!-- <div class="container " style="margin-top:350px">



        
            <div class="row g-0" style="margin-top:50px;background-color:red;  border-radius:20px; ">
                <div class="col-lg-6 p-5 test-block" style="position:relative;">
                    <h1>hoiiiiiiiiiiiiiiiiiiii</h1>
                </div>
                <div class="col-lg-6 p-5">

                    <h1>hoiiiiiiiiiiiiiiiiiiii</h1>
                </div>
            </div>
        </div> -->


        <!-- 4 -->
        <div class="border-container2" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
            data-aos-duration="500" data-aos-easing="ease-in-out">
            <div class="container">
                <div class="row">
                    <?php foreach (get_field("testimonials") as $testimonial) {
                        ?>
                        <div class="col-12 col-lg-3 col-md-6">
                            <div class=" d-flex flex-column justify-content-center gap-2"
                                style="margin:20px; align-items:flex-start;">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="testi-num"><?= $testimonial["num"] ?></span>
                                    <span class="testi-title"><?= $testimonial["titletes"] ?></span>
                                </div>
                                <!-- <h3 class="testi-text"><?= $testimonial["mail"] ?></h3> -->

                                <?php if (!empty($testimonial['mail'])) { ?>
                                    <!-- Mail Section  -->
                                    <h3 class="testi-text"><?= $testimonial["mail"] ?></h3>

                                <?php } elseif (!empty($testimonial['social']['url'])) { ?>
                                    <!-- Socail Section -->
                                    <a href="<?= $testimonial['social']['url'] ?>">
                                        <?= $testimonial['social']['alt'] ?>
                                        <!-- Display the alt text as the link text -->
                                    </a>

                                <?php } ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>


    </div>


</main><?php get_footer() ?>