hallo

<?php get_header();

//Template Name: video-1
?>

<main class="single-resources flex-grow-1">
    <div>

        <!-- BreadCrumb Section -->
        <?php get_template_part('components/breadcrumb') ?>
        <!--End  Of BreadCrumb Section -->



        <!--2-->
        <div class="container">
            <div class="row" style="margin-top:50px;">
                <div class="col-12 col-md-6 col-lg-5" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                    data-aos-duration="400" data-aos-easing="ease-in-out">
                    <div class="left_col">
                        <div class="left-btn">
                            <?= get_field("lefttitle") ?>
                        </div>
                        <!-- <span class="title">
                            <?= get_field("aboutus_left_title") ?> </span> -->

                        <span class="left-text" style="">
                            <?= get_field("lefttext") ?></span>
                    </div>
                </div>

                <div class=" col-lg-1 d-none d-lg-block"></div>

                <div class="col-12 col-md-6 col-lg-6" data-aos="fade-left" data-aos-offset="100" data-aos-delay="50"
                    data-aos-duration="400" data-aos-easing="ease-in-out">
                    <div class="right_col">
                        <span class="right-text">
                            <?= get_field("second_text") ?>
                        </span>
                    </div>

                </div>
            </div>
        </div>

    </div>


</main>



<?php get_footer() ?>