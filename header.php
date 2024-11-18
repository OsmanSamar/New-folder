<!DOCTYPE html>

<html>

<head>
    <?php wp_head(); ?>

    <title>
        <?php wp_title() ?>Sue
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Get Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header" style="margin-top:50px">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: ; top: 26px;">
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
                            style="color:#25325F; font-style: normal;font-weight: 600;line-height: 120%;">
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
                            style="color:#25325F; font-style: normal;font-weight: 600;line-height: 120%;">
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
                            style="color:#25325F ; font-style: normal;font-weight: 600;line-height: 120%;">
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
                            aria-expanded="false" style="color:#25325F">
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
                            style="color:#25325F; font-style: normal;font-weight: 600;line-height: 120%;">
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
                            style="color:#25325F; font-style: normal;font-weight: 600;line-height: 120%;">
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

                <!-- Arrow and Let's Talk -->
                <div class="d-none d-lg-flex align-items-center gap-3">
                    <a href="<?= esc_url(home_url('/')); ?>">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/arrowbtn.svg" alt="Arrow"
                            style="width: 92px; height: 30px;">
                    </a>
                    <a href="<?= esc_url(home_url('/')); ?>"
                        style="font-family: Manrope; font-size: 13px; font-style: normal; font-weight: 600; line-height: 120%; color: #25325F;">
                        Let's talk
                    </a>
                </div>

                <!-- Toggle Button -->
                <button class="navbar-toggler shadow-none border-0 d-lg-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <button class="btn  btn-outline-light shadow-none border-0 d-none d-lg-block p-4" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                    style=" background-color: #25325F; color: #25325F;">
                    <span class="navbar-toggler-icon" style="color: #25325F;"></span>
                </button>

            </div>
        </nav>

        <!-- Sidebar p-lg-0 -->
        <div class="offcanvas offcanvas-end p-4 " tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel" style="background-color:;">
            <div class="offcanvas-header text-black border-bottom">
                <!-- <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5> -->

                <a class=" offcanvas-title" href="<?= esc_url(home_url('/')); ?>">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/logo.svg" alt="Logo"
                        style="height:43px;width: 88px;" id="offcanvasNavbarLabel">
                </a>

                <button type="button" class="btn-close btn-close-#25325F shadow-none" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>

            <!-- Sidebar Body p-lg-0 -->
            <div class="offcanvas-body">
                <ul class="navbar-nav fs-5 d-flex align-items-left justify-content-start">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"
                            style="color:#25325F; font-style: normal;font-weight: 600;line-height: 120%;">
                            Diensten
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
                            style="color:#25325F; font-style: normal;font-weight: 600;line-height: 120%;">
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
                            style="color:#25325F; font-style: normal;font-weight: 600;line-height: 120%;">
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
                            style="color:#25325F; font-style: normal;font-weight: 600;line-height: 120%;">
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
                            style="color:#25325F; font-style: normal;font-weight: 600;line-height: 120%;">
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
                            style="color:#25325F; font-style: normal;font-weight: 600;line-height: 120%;">
                            Over ons
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
                <div class="d-flex align-items-center justify-content-center gap-3 mt-4">
                    <a href="<?= esc_url(home_url('/')); ?>" style="border-radius: 14px;
                        background-color: #E94271; height:48px; width:67px;"
                        class="d-flex justify-content-center align-items-center">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/images/arrowbtn.svg" alt="Arrow"
                            style="width:92px; height: 30px; margin:7px 0;  ">
                    </a>
                    <a href="<?= esc_url(home_url('/')); ?>"
                        style="font-family: Manrope; font-size:13px; font-style: normal; font-weight: 600; line-height: 120%; color: #25325F;">
                        Let's talk
                    </a>
                </div>
            </div>
        </div>


    </header>