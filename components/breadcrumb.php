<?php
// $breadcrumb = get_field('breadcrumb_groep');
?>

<div class="" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
    data-aos-easing="ease-in-out">

    <div class="back-to-home d-flex align-items-center justify-content-center" style="margin-top:123px; ">
        <!--  margin-bottom:-123px; -->

        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
        ?>

    </div>

</div>