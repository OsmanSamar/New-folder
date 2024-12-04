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

    <!-- Get Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
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
                <ul class="navbar-nav d-none d-lg-flex justify-content-center align-items-center flex-grow-1">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"
                            style="color:#25325F; font-style: normal;font-weight: 600;line-height:15.6px;padding: 0 20px; text-align: center;font-family: Manrope;font-size: 13px;">
                            Diensten


                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" style="color:#25325F; ">Action</a></li>
                            <li><a class="dropdown-item" href="#" style="color:#25325F; ">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Something else here</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"
                            style="color:#25325F; font-style: normal;font-weight: 600;line-height:15.6px;padding: 0 20px; text-align: center;font-family: Manrope;font-size: 13px;">
                            Expertises
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Action</a></li>
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Something else here</a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"
                            style="color:#25325F; font-style: normal;font-weight: 600;line-height:15.6px;padding: 0 20px; text-align: center;font-family: Manrope;font-size: 13px;">
                            Producten
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Action</a></li>
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Something else here</a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"
                            style="color:#25325F; font-style: normal;font-weight: 600;line-height:15.6px;padding: 0 20px; text-align: center;font-family: Manrope;font-size: 13px;">
                            Industrieën
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Action</a></li>
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Something else here</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"
                            style="color:#25325F; font-style: normal;font-weight: 600;line-height:15.6px;padding: 0 20px; text-align: center;font-family: Manrope;font-size: 13px;">
                            Insights
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Action</a></li>
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Something else here</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"
                            style="color:#25325F; font-style: normal;font-weight: 600;line-height:15.6px;padding: 0 20px; text-align: center;font-family: Manrope;font-size: 13px;">
                            Over ons
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"
                                    style="color:#25325F;font-size: 13px;font-style: normal;font-weight: 600;line-height: 120%;">Action</a>
                            </li>
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Something else here</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- Arrow and Let's Talk on LG Screen-->
                <div class="d-none d-lg-flex  align-items-center justify-content-between"
                    style="height: 42px; padding: 12px 15px; border-radius:8px; background:#E94271; gap:10px;">
                    <a href="<?= esc_url(home_url('/')); ?>" class="d-flex justify-content-center align-items-center">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/arrowbtn.svg" alt="Arrow"
                            style="width:12px; height: 18px; margin:7px 0;  ">

                    </a>
                    <span
                        style="color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px">
                        Let's talk</span>

                </div>



                <button class="navbar-toggler shadow-none border-0 d-block d-lg-none" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                    aria-label="Toggle navigation" style=" ">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <span class="hamburger-icon">
                        <span class="line line-1"></span>
                        <span class="line line-2"></span>
                        <span class="line line-3"></span>
                    </span>

                </button>


                <style>
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

                <!-- ----------------------------------------------------- -->
                <!-- Toggle Button slidebar on Lg -->
                <!-- <button class="btn  btn-outline-light shadow-none border-0 d-none d-lg-block p-4" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                    style=" background-color: #25325F; color: #25325F;">
                    <span class="navbar-toggler-icon" style="color: #25325F;"></span>
                </button> -->



            </div>
        </nav>

        <!-- Sidebar p-lg-0 on SM Screen  bottom:6%  p-4-->
        <div class="offcanvas offcanvas-end  " tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel"
            style=" background:; bottom:29%">
            <div class="offcanvas-header text-black border-bottom">
                <!-- offcanvasNavbartitle/logo -->

                <a class=" offcanvas-title" href="<?= esc_url(home_url('/')); ?>">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/logo.svg" alt="Logo"
                        style="height:43px;width: 88px;" id="offcanvasNavbarLabel">
                </a>

                <button type="button" class="btn-close btn-close-#25325F shadow-none" data-bs-dismiss="offcanvas"
                    aria-label="Close">
                </button>
            </div>

            <!-- Sidebar Body p-lg-0 display: flex;flex-direction: column; -->
            <div class="offcanvas-body">
                <ul class="navbar-nav fs-5 d-flex align-items-left justify-content-start">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex justify-content-between align-items-center" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false"
                            style="color:#25325F; font-style: normal;font-weight: 600;line-height: 120%;">
                            <!-- Diensten -->
                            <span>Diensten</span>
                            <span class="dropdown-icon ms-2"></span>

                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Action</a></li>
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Something else here</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex justify-content-between align-items-center" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false"
                            style="color:#25325F; font-style: normal;font-weight: 600;line-height: 120%;">
                            <span> Expertises</span>
                            <span class="dropdown-icon ms-2"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Action</a></li>
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Something else here</a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  d-flex justify-content-between align-items-center" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false"
                            style="color:#25325F; font-style: normal;font-weight: 600;line-height: 120%;">
                            <span> Producten</span>
                            <span class="dropdown-icon ms-2"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Action</a></li>
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Something else here</a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  d-flex justify-content-between align-items-center" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false"
                            style="color:#25325F; font-style: normal;font-weight: 600;line-height: 120%;">
                            <span>Industrieën</span>
                            <span class="dropdown-icon ms-2"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Action</a></li>
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Something else here</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex justify-content-between align-items-center" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false"
                            style="color:#25325F; font-style: normal;font-weight: 600;line-height: 120%;">
                            <span>Insights</span>
                            <span class="dropdown-icon ms-2"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Action</a></li>
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Something else here</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex justify-content-between align-items-center" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false"
                            style="color:#25325F; font-style: normal;font-weight: 600;line-height: 120%;">
                            <span> Over ons</span>
                            <span class="dropdown-icon ms-2"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Action</a></li>
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#" style="color:#25325F">Something else here</a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <!-- Arrow and Let's Talk on SM Screen-->
                <!-- <div style="position: relative;bottom: -30%; ">
                    <div style="border-radius:30px;background:#25325F;width:100%;height: 101px; ">
                        <div class="d-flex align-items-center justify-content-center gap-3" style="">
                            <a href="<?= esc_url(home_url('/')); ?>"
                                style="border-radius:8px;
                                                                        background-color: #E94271; height:30px; width:30px;"
                                class="d-flex justify-content-center align-items-center">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/images/arrowbtn.svg" alt="Arrow"
                                    style="width:12px; height: 18px; margin:7px 0;  ">
                            </a>
                            <a href="<?= esc_url(home_url('/')); ?>"
                                style="font-family: Manrope; font-size:13px; font-style: normal; font-weight: 600; line-height: 120%; color: white;">
                                Let's talk
                            </a>
                        </div>

                    </div>
                </div> -->




            </div>


            <div class="offcanvas-header d-flex align-items-center justify-content-center gap-3 "
                style="border-radius:;background:#25325F; ">


                <div class="d-flex align-items-center justify-content-center gap-3" style="">
                    <a href="<?= esc_url(home_url('/')); ?>"
                        style="border-radius:8px; background-color: #E94271; height:30px; width:30px;"
                        class="d-flex justify-content-center align-items-center">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/arrowbtn.svg" alt="Arrow"
                            style="width:12px; height: 18px; margin:7px 0;  ">
                    </a>
                    <a href="<?= esc_url(home_url('/')); ?>"
                        style="font-family: Manrope; font-size:13px; font-style: normal; font-weight: 600; line-height: 120%; color: white;">
                        Let's talk
                    </a>
                </div>

            </div>


        </div>


    </header>