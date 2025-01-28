<?php
// $breadcrumb = get_field('breadcrumb_groep');
?>

<div class="" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
    data-aos-easing="ease-in-out">

    <!-- 1 -->
    <div class="back-to-home d-flex align-items-center justify-content-center"
        style="margin-top:170px; margin-bottom:; ">
        <?php if (false) {
            ?> <a href="<?= $breadcrumb['backtohome']['url'] ?>"
            class="d-flex justify-content-center align-items-center gap-2">
            <img src="<?= $breadcrumb['backtohomeimg']['url'] ?>" alt="<?= $breadcrumb['backtohomeimg']['alt'] ?>"
                style="width:20px; height:20px; margin:7px 0;" />
            <span class="separator"><img src="<?= $breadcrumb['separator']['url'] ?>"
                    alt="<?= $breadcrumb['separator']['alt'] ?>" style="width:3px; height:6px;" /> </span>
            <span class="first">
                <?= $breadcrumb['firstpage'] ?></span>
            <span class="separator"><img src="<?= $breadcrumb['separator']['url'] ?>"
                    alt="<?= $breadcrumb['separator']['alt'] ?>" style="width:3px; height:6px;" /> </span>
            <span class="first">
                <?= $breadcrumb['secondpage'] ?></span>
        </a>
        <?php
        }
        ?>
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
        ?>

    </div>

</div>