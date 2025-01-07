<?php get_header();

//Template Name: services
?>

<main class="services flex-grow-1">


    <style>
    b,
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
            margin: 150px auto 170px;
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
        margin-top: -400px;

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

    .hero_text {
        color: #9AA0B7;
        font-family: Manrope;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 27.2px;
        width: 353px;
        /* height: 158px; */
        margin-bottom: 31px;
    }

    @media (min-width: 992px) {
        .hero_blue_block {
            width: 531px;
            /* position: absolute;
            bottom: 0; */
            position: relative;
            bottom: 582px;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: left;
            padding: 30px;
            height: 581.608px;
            margin-top: unset;

        }
    }
    </style>
 


    <div class="d-inline-block" style="margin-top:23px; margin-bottom:23px; ">
            <a class="text-white" href="<?= esc_url(home_url('/')); ?>">Home</a>
            <!-- <span class="separator"> // </span> -->
            <a  class="d-flex justify-content-center align-items-center"
                             href="#">
                            <img src="<?= get_field("back_home_btn")['url'] ?>"
                                alt="<?= get_field("back_home_btn")['alt'] ?>"
                                 style="width:12px; height:18px; margin:7px 0;"
                            />
                                <span class="last">Services</span>
             </a>
          
    </div>



   <!-- Hero Section -->
    <div class="container-max-width">
        <img src="<?= get_field("hero_img")['url'] ?>" alt="<?= get_field("hero_img")['title'] ?>" class=""
            style=" height: 581px; border-radius: 40px; object-fit: cover;" />
        <div class="hero_blue_block">
            <div class="container inner_block">
                <span class="hero_title">
                    <?= get_field("hero_title") ?>
                </span>
                <span class="hero_text">
                    <?= get_field("hero_text") ?>
                </span>

            </div>
        </div>
    </div>
    <!-- End of Hero Section -->


</main>



<?php get_footer() ?>