<?php get_header();
//Template Name: 404


?>

<main id="page" class="404">
    <style>
    b,
    strong {
        color: #e94271;
        font-family: inherit;
        font-size: inherit;
        font-style: inherit;
        line-height: inherit;
    }

    .img-container {
        margin-bottom: -14rem;
    }

    .blue-container {
        border-radius: 40px;
        background: #25325F;
        height: 400px;
        max-width: 1700px;
        padding: 30px;
        margin-top: 12rem;
        position: relative;
        z-index: 1;
    }

    .first-name-name {
        display: flex;
        flex-direction: column;
    }

    .first-name::after {
        content: "";
        display: inline-block;
        width: 1px;
        height: 21px;
        opacity: 0.25;
        background: #CBCFDE;
        margin-left: 13px;
        margin-right: 13px;
        vertical-align: middle;
    }

    .lets-talk-title {
        display: block;
        color: #9AA0B7;
        font-family: Manrope;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 27.2px
    }


    .lets-talk-gota-question {
        display: block;
        color: #FFF;
        font-family: Sora;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 28.4px;
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
        .img-container {
            margin-bottom: -37rem;
        }

        .blue-container {
            height: 212px;
            margin-top: 32rem;
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
        }
    }

    @media (min-width: 992px) {

        b,
        strong {
            font-size: inherit;
        }

        .img-container {
            margin-bottom: -42rem;
        }

        .blue-container {
            height: 212px;
            margin-top: 39rem;

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
    <div class="flex-grow-1">

        <!-- BreadCrumb Section -->
        <?php get_template_part('components/breadcrumb') ?>



        <!-- <h1>404 - Pagina niet gevonden</h1>
        <p>
            <a href="<?= home_url() ?>">Ga terug naar de homepagina</a>
        </p> -->


        <div class="container">
            <div class="row">
                <div
                    class="col-lg-7 col-xxl-6 col-md-9 col-12 mx-auto d-flex align-items-center justify-content-center text-center flex-column mt-5 gap-4 ">
                    <h1 style="font-size:45px;"> <?= get_field("woopstext") ?></h1>

                    <div class="back-to-home d-flex align-items-center justify-content-center gap-2 flex-row"
                        style="margin-top:; ">
                        <div class="d-flex align-items-center justify-content-center rounded"
                            style="width: 30px; height: 30px; background-color:#274083;">
                            <img src="<?= get_field("backhomeimg")['url'] ?>"
                                alt="<?= get_field("backhomeimg")['alt'] ?>"
                                style="width: 12px; height: 18px; margin:7px 0;  " />
                        </div>
                        <a href="<?= get_field("backtohome")['url'] ?>"
                            style="color:#274083; font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px;  text-decoration: none; ">
                            <?= get_field("backtohome")['title'] ?>
                        </a>
                    </div>
                    <!-- <div class="img-container  pb-4 pb-lg-0  " style=" position:absolute; z-index:3;">
                        <img src="<?= get_field("404cloud")['url'] ?>" alt="<?= get_field("404cloud")['alt'] ?>"
                            class="">
                    </div> -->
                </div>
            </div>



        </div>
        <div
            class=" col-lg-7 col-xxl-6 col-md-9 col-12 mx-auto d-flex align-items-center justify-content-center text-center flex-column mt-5 gap-4 ">

            <div class="img-container  pb-4 pb-lg-0  " style=" position:absolute; z-index:3;">
                <img src="<?= get_field("404cloud")['url'] ?>" alt="<?= get_field("404cloud")['alt'] ?>" class="">
            </div>
        </div>


        <!--3  Blue-container -->
        <div class="blue-container  " data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
            data-aos-duration="500" data-aos-easing="ease-in-out">
            <div class="container-let-talk">
                <!-- Left Side: Image and Texts -->
                <div class="left-side-img-text">
                    <img src="<?= get_field('letstalkimg')['url'] ?>" alt="<?= get_field('letstalkimg')['alt'] ?>"
                        style="width: 120px;height: 120px; border-radius: 15px;">
                    <div>
                        <div class="first-name-name ">
                            <span class="first-name"
                                style="display: block; color: #9AA0B7;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height:27.2px "><?= get_field('letstalkfirstname') ?></span>
                            <span class="lets-talk-title"><?= get_field('letstalktitle') ?></span>
                        </div>
                        <br>
                        <span class="lets-talk-gota-question" style=""><?= get_field('letstalkgotaquestion') ?></span>
                    </div>
                </div>
                <!-- Right Side: Text, Email, and Phone -->
                <div
                    style="display: flex; flex-direction: column; align-items: flex-start; justify-content:left; gap:0.7rem;">
                    <span style="color: #FFF;"><?= get_field('letstalkword') ?></span>
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <div
                            style="background-color:#E94271; width: 30px; height: 30px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <img src="<?= get_field('letstalkbtn')['url'] ?>"
                                alt="<?= get_field('letstalkbtn')['alt'] ?>" style="width: 12px; height: 18px;">
                        </div>
                        <span style="color: #FFF;"><?= get_field('letstalkmail') ?></span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <div
                            style="background-color:#FFF; width: 30px; height: 30px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <img src="<?= get_field('letstalkphonelink')['url'] ?>"
                                alt="<?= get_field('letstalkphonelink')['alt'] ?>" style="width: 12px; height: 18px;">
                        </div>
                        <span style="color: #FFF;"><?= get_field('letstalkphonenumber') ?></span>
                    </div>
                </div>
            </div>
        </div>


</main>

<?php get_footer() ?>