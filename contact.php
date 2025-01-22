<?php get_header();

//Template Name: contact
?>

<main class="contact flex-grow-1">

    <style>
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
        }
    </style>
    <div>
        <!-- 1   class="container" -->
        <div class="back-to-home" style="margin-top:170px; margin-bottom:-123px; ">
            <a href="<?= get_field("backtohome")['url'] ?>"
                class="d-flex justify-content-center align-items-center gap-2">
                <img src="<?= get_field("backhomebtn")['url'] ?>" alt="<?= get_field("backhomebtn")['alt'] ?>"
                    style="width:20px; height:20px; margin:7px 0;" />

                <span class="separator"><img src="<?= get_field("separator")['url'] ?>"
                        alt="<?= get_field("separator")['alt'] ?>" style="width:3px; height:6px; " /> </span>
                <span class="first">Contact us</span>

            </a>
        </div>



        <!-- 2 -->
        <div class="container">
            <!-- class="container" -->
            <div class="row " style="margin-top:210px;"></div>
        </div>

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
    </div>


</main><?php get_footer() ?>