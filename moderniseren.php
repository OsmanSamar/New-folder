<?php get_header();

//Template Name: moderniseren
?>

<main class="moderniseren flex-grow-1">
    <style>

    </style>
    <div>

        <!--1-->
        <div class="back-to-home" style="margin-top:170px; margin-bottom:-123px; ">
            <a href="<?= get_field("backtohome")['url'] ?>"
                class="d-flex justify-content-center align-items-center gap-2">
                <img src="<?= get_field("backhomeimg")['url'] ?>" alt="<?= get_field("backhomeimg")['alt'] ?>"
                    style="width:20px; height:20px; margin:7px 0;" />

                <span class="separator"><img src="<?= get_field("separator")['url'] ?>"
                        alt="<?= get_field("separator")['alt'] ?>" style="width:3px; height:6px; " /> </span>
                <span class="first">Services</span>
                <span class="separator"><img src="<?= get_field("separator")['url'] ?>"
                        alt="<?= get_field("separator")['alt'] ?>" style="width:3px; height:6px;" /> </span>
                <span class="last">Moderniseren</span>
            </a>
        </div>

    </div>


</main>



<?php get_footer() ?>