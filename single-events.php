<?php get_header();

//Template Name: post-1
?>

<main class="single-resources flex-grow-1">
    <style></style>

    <div style="margin-top:180px;">

        <!-- BreadCrumb Section -->
        <?php get_template_part('components/breadcrumb') ?>


        <!-- Hero Section -->
        <div class="container-max-width" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
            data-aos-duration="1000" data-aos-easing="ease-in-out">
            <img src="<?= get_field("heroimg")['url'] ?>" alt="<?= get_field("heroimg")['title'] ?>"
                class="container-img" style=" height: 581px; border-radius: 40px; object-fit: cover;" />
            <div class=" hero_blue_block">
                <div class="inner_block container">
                    <div class="d-flex align-items-center justify-content-between gap-2">
                        <div class="d-flex align-items-center justify-content-center rounded "
                            style="width: 30px; height: 30px; background-color:#FFF;">
                            <img src="<?= get_field("backimg")['url'] ?>" alt="<?= get_field("backimg")['alt'] ?>"
                                style="width: 12px; height: 18px;" />
                        </div>
                        <a href="<?= get_field("backtooverview")['url'] ?>"
                            style="color:#FFF; font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px;  text-decoration: none; ">
                            <?= get_field("backtooverview")['title'] ?>
                        </a>
                    </div>
                    <span class="hero_title">
                        <?= get_field("herotitle") ?>
                    </span>
                </div>
            </div>
        </div>

        <section class="next-section">
            <!-- Form Section container  -->
            <?php get_template_part('components/form') ?>
            <!-- End of Form Section -->
        </section>


    </div>









</main>
<?php get_footer() ?>