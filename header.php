<!DOCTYPE html>

<html>

<head>
    <?php wp_head(); ?>

    <title>
        <?php wp_title() ?>Sue
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!--  -->
    <style>
    /* Navbar dropdown styles */
    .navbar-nav .dropdown-menu {
        position: fixed;
        top: -100%;
        /* Start hidden above the page */
        left: 0;
        width: 100%;
        display: flex;
        justify-content: center;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease-in-out;
        background-color: red;
        max-width: 100%;
        width: fit-content;
        left: 50%;
        transform: translateX(-50%);
        padding: 3rem;

    }


    .navbar-nav .dropdown-menu.show {
        top: 100%;
        /* Drop down from the navbar */
        opacity: 1;
        visibility: visible;
        max-width: 100%;
        width: fit-content;
        left: 50%;
        transform: translateX(-50%);
        padding: 3rem;

    }



    .dropdown-menu .dropdown-item {
        display: flex;
        flex-direction: column;

        align-items: flex-start;
        justify-content: space-between;
        padding: 10px 36px;
        height: 100%;
        flex-grow: 1;
        /* Divider between items */
        border-right: 1px solid #cbcfde;
    }

    .dropdown-menu .menu-item:last-child .dropdown-item {
        border-right: none;
    }






    /*  spacing between dropdown items */
    .dropdown-menu {

        background-color: #FFF;
    }



    /* Sidebar Dropdown Menu */
    .sidebar-nav .dropdown-menu {
        position: static;
        visibility: hidden;
        opacity: 0;
        height: 0;
        overflow: hidden;
        transition: all 0.3s ease-in-out;
        background-color: #f8f9fa;

    }

    /* Show dropdown on toggle */
    .sidebar-nav .dropdown-menu.show {
        visibility: visible;
        opacity: 1;
        height: auto;
    }

    /* Sidebar Dropdown Items */
    .sidebar-nav .dropdown-item {
        padding: 10px 15px;
        font-size: 1rem;
        color: #333;
        text-decoration: none;
    }

    .sidebar-nav .dropdown-item:hover {
        background-color: #e9ecef;
        color: #000;
    }

    /* Styling Parent Items in Sidebar */
    .sidebar-nav .menu-item-has-children>a {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .sidebar-nav .menu-item-has-children>a:after {
        content: '\f107';
        /* Font Awesome down arrow */
        font-family: FontAwesome;
        margin-left: 8px;
    }


    .sidebar-nav .menu-item-has-children.show>a:after {
        content: '\f106';

    }

    .navbar .menu-item {
        position: unset;
    }
    </style>

</head>

<body style="background:#EDF3F4;" <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header" style="margin-top:50px">
        <!-- Navbar -->

        <nav class="navbar navbar-expand-lg  fixed-top" style="background: #EDF3F4; top:26px;">
            <div class="container d-flex justify-content-between align-items-center">
                <!-- Logo -->
                <a class="navbar-brand fs-4" href="<?= esc_url(home_url('/')); ?>">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/logo.svg" alt="Logo"
                        style="height: 43px;width: 88px;">
                </a>

                <!-- Navbar Links -->
                <?php
                wp_nav_menu(array(
                    'menu' => 'header-menu',
                    'depth' => 2,
                    'container' => false,
                    // 'menu_class' => 'navbar-nav ms-auto',
                    'menu_class' => 'navbar-nav d-none d-lg-flex justify-content-center align-items-center flex-grow-1 gap-4',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker(),




                ));
                ?>




                <div class="d-flex align-items-center gap-3">
                    <!-- Arrow and Let's Talk Section -->
                    <div class="arrow-letstalk d-none d-md-flex align-items-center justify-content-between"
                        style="height: 42px; padding: 12px 15px; border-radius:8px; background:#E94271; gap:10px;">
                        <a href="<?= esc_url(home_url('/')); ?>"
                            class="d-flex justify-content-center align-items-center">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/arrowbtn.svg" alt="Arrow"
                                style="width:12px; height: 18px; margin:7px 0;">
                        </a>
                        <span
                            style="color: #FFF; font-family: Manrope; font-size: 13px; font-weight: 600; line-height:15.6px;">
                            Let's talk
                        </span>
                    </div>

                    <!-- Hamburger Icon -->
                    <button class="navbar-toggler shadow-none border-0 d-block d-lg-none" type="button"
                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <span class="hamburger-icon">
                            <span class="line line-1"></span>
                            <span class="line line-2"></span>
                            <span class="line line-3"></span>
                        </span>
                    </button>
                </div>



                <style>
                .arrow-letstalk {
                    margin-left: auto;
                    /* Push to the right */
                }

                /* Hamburger Icon Alignment */
                .navbar-toggler {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                /* Media Query for md Screens */
                @media (max-width: 991.98px) {
                    .arrow-letstalk {
                        margin-left: auto;

                    }

                    .navbar-toggler {
                        margin-left: 10px;

                    }
                }


                .hamburger-icon {
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    width: 30px;
                    height: 20px;
                    position: relative;
                }

                .hamburger-icon .line {
                    display: block;
                    height: 4px;
                    background-color: #25325F;
                    border-radius: 2px;
                    transition: all 0.3s ease;

                }

                .hamburger-icon .line-1,
                .hamburger-icon .line-2 {
                    width: 100%;

                }

                .hamburger-icon .line-3 {
                    width: 60%;

                    align-self: flex-end;

                }
                </style>

            </div>
        </nav>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel"
            style="background: #EDF3F4; bottom: 29%;">
            <div class="offcanvas-header text-black border-bottom">
                <!-- Offcanvas Navbar Title/Logo -->
                <a class="offcanvas-title" href="<?= esc_url(home_url('/')); ?>">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/logo.svg" alt="Logo"
                        style="height: 43px; width: 88px;" id="offcanvasNavbarLabel">
                </a>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>

            <!-- Sidebar Body -->
            <div class="offcanvas-body">
                <?php
                wp_nav_menu(array(
                    'menu' => 'header-menu',
                    'depth' => 2,
                    'container' => false,
                    'menu_class' => 'navbar-nav fs-5 d-flex flex-column align-items-start gap-3',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    //'walker' => new WP_Bootstrap_Navwalker(),
                
                ));
                ?>
            </div>

            <!-- Optional Footer Section -->
            <div class="offcanvas-footer d-flex align-items-center justify-content-center gap-3"
                style="border-radius: 30px 30px 0 0; background: #25325F; height:72px;">
                <a href="<?= esc_url(home_url('/')); ?>"
                    style="border-radius: 8px; background-color: #E94271; height: 30px; width: 30px;"
                    class="d-flex justify-content-center align-items-center">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/arrowbtn.svg" alt="Arrow"
                        style="width: 12px; height: 18px; margin: 7px 0;">
                </a>
                <a href="<?= esc_url(home_url('/')); ?>"
                    style="font-family: Manrope; font-size: 13px; font-weight: 600; color: white;">
                    Let's Talk
                </a>
            </div>


        </div>






    </header>