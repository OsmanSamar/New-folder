<?php get_header();

//Template Name: moderniseren
?>

<main class="moderniseren flex-grow-1">

    <style>
        b,
        strong {
            color: #e94271;
            font-family: inherit;
            font-size: inherit;
            font-style: inherit;
            line-height: inherit;
        }

        .blue-container {
            border-radius: 40px;
            background: #25325F;
            height: 400px;
            max-width: 1700px;
            padding: 30px;
            margin: 2rem auto;
        }

        .container-let-talk {
            display: flex;

            align-items: flex-start;

            justify-content: space-around;

            flex-direction: column;
        }

        .left-side-img-text {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-direction: row;
            align-items: flex-start;

        }

        .name-class {
            display: flex;
            justify-content: center;
            flex-direction: column;

        }

        @media (min-width: 768px) {
            .blue-container {
                height: 212px;
            }

            .container-let-talk {
                flex-direction: row;
            }

            .left-side-img-text {
                align-items: center;
                flex-direction: row;
            }


            .first-name-name {
                display: flex;
                flex-direction: row;
                align-items: center;
            }
        }

        @media (min-width: 992px) {

            b,
            strong {
                font-size: inherit;
            }

            .blue-container {
                height: 212px;
            }

            .container-let-talk {
                flex-direction: row;
            }

            .left-side-img-text {
                align-items: center;
                flex-direction: row;
            }

            .name-class {
                display: flex;
                flex-direction: row;
                justify-content: flex-start;
            }

            .lets-talk-gota-question {
                font-size: 35px;
                font-weight: 600;
                line-height: 50.4px;
            }
        }
    </style>
    <div>


        <!-- BreadCrumb Section -->
        <?php get_template_part('components/breadcrumb') ?>
        <!--End  Of BreadCrumb Section -->



        <!-- 2 -->
        <div class="container">
            <div class="d-flex align-items-center justify-content-center flex-column">
                <h1 style="font-size:45px;"> <?= get_field("woopstext") ?></h1>
            </div>

            <div class="back-to-home" style="margin-top:170px;  ">
                <a href="<?= get_field("backtohome")['url'] ?>"
                    class="d-flex justify-content-center align-items-center gap-2">
                    <img src="<?= get_field("backhomeimg")['url'] ?>" alt="<?= get_field("backhomeimg")['alt'] ?>"
                        style="width:20px; height:20px; margin:7px 0;" />
                    <?= get_field("backtohome")['title'] ?>


                </a>
            </div>
        </div>

        <!--3  Blue-container -->
        <div class="blue-container" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="500"
            data-aos-easing="ease-in-out">
            <div class="container-let-talk">
                <!-- Left Side: Image and Texts -->
                <div class="left-side-img-text">
                    <img src="<?= get_field('lets_talk_img')['url'] ?>" alt="<?= get_field('lets_talk_img')['alt'] ?>"
                        style="width: 120px;height: 120px; border:15px;">
                    <div>
                        <div class="first-name-name ">
                            <span class="first-name"
                                style="display: flex; color: #9AA0B7;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height:27.2px "><?= get_field('lets_talk_first_name') ?></span>
                            <span class="lets-talk-title"
                                style="display: block; color:#9AA0B7;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height: 27.2px"><?= get_field('lets_talk_title') ?></span>
                        </div>
                        <br>
                        <span class="lets-talk-gota-question"
                            style=""><?= get_field('lets_talk_gota_question') ?></span>
                    </div>
                </div>
                <!-- Right Side: Text, Email, and Phone -->
                <div
                    style="display: flex; flex-direction: column; align-items: flex-start; justify-content:left; gap:0.7rem;">
                    <span style="color: #FFF;"><?= get_field('lets_talk_word') ?></span>
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <div
                            style="background-color:#E94271; width: 30px; height: 30px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <img src="<?= get_field('lets_talk_btn')['url'] ?>"
                                alt="<?= get_field('lets_talk_btn')['alt'] ?>" style="width: 12px; height: 18px;">
                        </div>
                        <span style="color: #FFF;"><?= get_field('lets_talk_mail') ?></span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <div
                            style="background-color:#FFF; width: 30px; height: 30px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <img src="<?= get_field('lets_talk_phone_link')['url'] ?>"
                                alt="<?= get_field('lets_talk_phone_link')['alt'] ?>"
                                style="width: 12px; height: 18px;">
                        </div>
                        <span style="color: #FFF;"><?= get_field('lets_talk_phone_number') ?></span>
                    </div>
                </div>
            </div>
        </div>

    </div>


</main>



<?php get_footer() ?>