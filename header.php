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
    <!-- Swiper -->


    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- AOS -->

    <!-- ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <!-- ScrollTrigger -->


    <style>
        .letstalk-btn a:hover img {
            transform: translateX(6px);
            transition: transform 0.2s ease;
        }

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
            /* background-color: red; */
            background-color: #FFF;
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
            /* padding: 20px 36px; */
            padding: 36px 42px;
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

        .navbar .menu-item {
            position: unset;
        }

        .navbar ul li a {
            color: #25325F;
            text-align: center;
            font-family: Manrope;
            font-size: 15px;
            font-style: normal;
            font-weight: 600;
            line-height: 15.6px;
        }

        .navbar ul li a:hover {
            color: #E94271 !important;
        }


        /* Added new */

        .dropdown-toggle::after {
            display: block;
            margin-left: 1.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid;
            border-right: 0.3em solid transparent;
            border-bottom: 0;
            border-left: 0.3em solid transparent;
            position: absolute;
            bottom: -6;
            bottom: 13px;
            /* left: 50%; */
            /* transform: translate(-50px); */
        }


        /*  */

        /* Sidebar Dropdown Menu */
        /* .sidebar-nav .dropdown-menu {
        position: static;
        visibility: hidden;
        opacity: 0;
        height: 0;
        overflow: hidden;
        transition: all 0.3s ease-in-out;
        background-color: #f8f9fa;
    } */

        /* Show dropdown on toggle */
        /* .sidebar-nav .dropdown-menu.show {
        visibility: visible;
        opacity: 1;
        height: auto;
    } */

        /* Sidebar Dropdown Items */
        /* .sidebar-nav .dropdown-item {
        padding: 10px 15px;
        font-size: 1rem;
        color: red;
        text-decoration: none;
    }

    .sidebar-nav .dropdown-item:hover {
        background-color: #e9ecef;
        color: #000;
    } */

        /* Styling Parent Items in Sidebar */
        /* .sidebar-nav .menu-item-has-children>a {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .sidebar-nav .menu-item-has-children>a:after {
        content: '\f107';
        margin-left: 8px;
    }


    .sidebar-nav .menu-item-has-children.show>a:after {
        content: '\f106';
    }

   
    /* }  */


        .offcanvas-body ul li ul li {

            background-color: red;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 25px;
            border-bottom: 1px solid black;
        }

        /* .menu-item {
        width: 100%;
        background-color: aliceblue;
    }

    .offcanvas-body .navbar-nav {
        background-color: aqua;
    } */
    </style>

</head>

<body style="background:#EDF3F4;" <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
    <!-- AOS -->

    <header class="header" style="margin-top:50px">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg  fixed-top" style="background: #EDF3F4; top:26px; ">
            <div class="container d-flex justify-content-between align-items-center">
                <!-- Logo -->
                <a class="navbar-brand fs-4" href="<?= esc_url(home_url('/')); ?>">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/Logo.svg" alt="Logo"
                        style="height: 43px;width: 88px;">
                </a>

                <!-- Navbar Links  LG-->
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
                    <div class="arrow-letstalk d-none d-md-flex align-items-center justify-content-between letstalk-btn"
                        style="height: 42px; padding: 12px 15px; border-radius:8px; background:#E94271; gap:10px;">
                        <a href="<?= esc_url(home_url('/contact')); ?>"
                            class="d-flex justify-content-center align-items-center gap-2">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/arrowbtn.svg" alt="Arrow"
                                style="width:12px; height: 18px; margin:7px 0;">
                            <span
                                style="color: #FFF; font-family: Manrope; font-size: 13px; font-weight: 600; line-height:15.6px;">
                                Let's talk
                            </span>
                        </a>
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
            style="background: #EDF3F4; bottom: 0%;width:100%">
            <div class="offcanvas-header text-black border-bottom">
                <!-- Offcanvas Navbar Title/Logo -->
                <a class="offcanvas-title" href="<?= esc_url(home_url('/')); ?>">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/Logo.svg" alt="Logo"
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
                    'menu_class' => 'navbar-nav fs-5 d-flex flex-column align-items-center gap-3 w-100',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    //'walker' => new WP_Bootstrap_Navwalker(),
                
                ));
                ?>
            </div>

            <div class="offcanvas-footer d-flex  align-items-center justify-content-center gap-3 "
                style="border-radius: 30px 30px 0 0; ; background: #25325F; height:72px;">
                <div class="d-flex align-items-center justify-content-between letstalk-btn"
                    style="height: 42px; padding: 12px 15px; border-radius:8px; background:#E94271;">
                    <a href="<?= esc_url(home_url('/contact')); ?>"
                        class="d-flex justify-content-center align-items-center gap-2">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/arrowbtn.svg" alt="Arrow"
                            style="width:12px; height: 18px; margin:7px 0;">
                        <span
                            style="color: #FFF; font-family: Manrope; font-size: 13px; font-weight: 600; line-height:15.6px;">
                            Let's talk
                        </span>
                    </a>
                </div>
            </div>
        </div>






    </header>