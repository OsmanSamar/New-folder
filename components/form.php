<?php
$formulier = get_field('formulier_groep');
?>

<div class="form_section" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
    data-aos-easing="ease-in-out">
    <div>
        <!--  class="container" -->
        <div class="row">
            <div class="col-12 col-lg-3 test-block position-relative">

                <!-- Left Side -->
                <div class="row d-block d-md-none d-lg-none" style="margin-top:40px; padding:0 20px;">
                    <div class="col-lg-4">
                        <h2
                            style="color: var(--Secondary-400, #FFF);font-family: Manrope;font-size: 26px;font-style: normal;font-weight: 700;line-height: 150%; /* 39px */">
                            <?= $formulier['form_question'] ?>
                        </h2>
                    </div>
                    <div class="col-lg-7 offset-lg-1"
                        style="color: var(--Neutral-400, #9AA0B7); font-family: Manrope;font-size: 16px; font-style: normal;  font-weight: 700; line-height: 170%; /* 27.2px */">
                        <?= $formulier['formtext'] ?>
                    </div>
                </div>
                <!-- SM -->
                <div class="d-block d-md-none d-lg-none" style=" border-bottom: 1px solid  white; margin:30px 0">
                </div>
                <div class="left-container">
                    <div class="left-content">
                        <img src="<?= $formulier['image']['url'] ?>" alt="<?= $formulier['image']['alt'] ?>"
                            style="width:120px; height:120px; border-radius:15px; object-fit:cover; object-position:center" />
                        <div class="d-flex flex-column">
                            <span class="first-name" style=" ">
                                <?= $formulier['name'] ?>
                            </span>
                            <span class="d-none d-md-flex d-lg-flex"
                                style="color: #FFF;font-family: Manrope;font-size: 26px;font-style: normal;font-weight: 700; line-height:39px">
                                <?= $formulier['letstalk'] ?>
                            </span>
                            <div style=" margin-left:; margin-top:10px;" class="d-flex d-md-none d-lg-none">
                                <!-- E_mail -->
                                <div class="d-flex flex-column flex-lg-column gap-">
                                    <div class=" d-flex flex-row align-items-center justify-content-start gap-2">
                                        <a href="mailto:<?= $formulier['email'] ?>"
                                            style="background-color:white;height:30px;width:30px; border-radius: 8px;"
                                            class="d-flex justify-content-center align-items-center">
                                            <img src="<?= $formulier['arrow']['url'] ?>"
                                                alt="<?= $formulier['arrow']['alt'] ?>"
                                                style="width:12px; height:18px; margin:7px 0;" />
                                        </a>
                                        <span
                                            style="color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px; margin:30px 0"><?= $formulier['email'] ?>
                                        </span>
                                    </div>
                                    <!-- contact nummer -->
                                    <div class=" d-flex flex-row align-items-center justify-content-start gap-2">
                                        <a href="tel:<?= $formulier['phone'] ?>"
                                            style="background-color:white;height:30px;width:30px; border-radius: 8px;"
                                            class="d-flex justify-content-center align-items-center">
                                            <img src="<?= $formulier['arrow']['url'] ?>"
                                                alt="<?= $formulier['arrow']['alt'] ?>"
                                                style="width:12px; height:18px; margin:7px 0;" />
                                        </a>
                                        <span
                                            style="color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px">
                                            <?= $formulier['phone'] ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Md -->
                        <div style=" margin-top:10px;" class="d-none d-md-flex d-lg-none  border-left">
                            <!-- E_mail -->
                            <div class="d-flex flex-column flex-lg-column gap-">
                                <div class=" d-flex flex-row align-items-center justify-content-start gap-2">

                                    <a href="#"
                                        style="background-color:white;height:30px;width:30px; border-radius: 8px;"
                                        class="d-flex justify-content-center align-items-center">
                                        <img src="<?= $formulier['arrow']['url'] ?>"
                                            alt="<?= $formulier['arrow']['alt'] ?>"
                                            style="width:12px; height:18px; margin:7px 0;" />
                                    </a>
                                    <span
                                        style="color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px; margin:30px 0"><?= $formulier['email'] ?>
                                    </span>

                                </div>
                                <!-- contact nummer -->
                                <div class=" d-flex flex-row align-items-center justify-content-start gap-2">
                                    <a href="#"
                                        style="background-color:white;height:30px;width:30px; border-radius: 8px;"
                                        class="d-flex justify-content-center align-items-center">
                                        <img src="<?= $formulier['arrow']['url'] ?>"
                                            alt="<?= $formulier['arrow']['alt'] ?>"
                                            style="width:12px; height:18px; margin:7px 0;" />
                                    </a>
                                    <span
                                        style="color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px">+31
                                        345 656 666

                                    </span>
                                </div>
                            </div>
                        </div>

                        <!--LG -->
                        <div class="d-none d-md-none d-lg-block"
                            style=" border-bottom: 1px solid  white; margin:30px 0;width:204px;">
                        </div>
                    </div>
                    <!-- LG -->
                    <div class="d-none  d-lg-none" style=" border-bottom: 1px solid  white; margin:30px 0; ">
                    </div>
                    <div style=" margin-left:; margin-top:;" class="d-none d-md-none d-lg-flex">
                        <!-- E_mail -->
                        <div class="d-flex flex-row flex-lg-column gap-2">
                            <div class=" d-flex flex-row align-items-center justify-content-start gap-2">
                                <button>
                                    <span class="circle white-circle">
                                        <a href="mailto: <?= $formulier['email'] ?>"
                                            class="d-flex justify-content-center align-items-center arrow">
                                            <img src="<?= $formulier['arrow']['url'] ?>"
                                                alt="<?= $formulier['arrow']['alt'] ?>"
                                                style="width: 12px; height: 18px; margin:7px 0" class="icon" />
                                        </a>
                                    </span>
                                    <a href="#" class="button-text white">
                                        <?= $formulier['email'] ?>
                                    </a>
                                </button>
                            </div>
                            <!-- contact nummer -->
                            <div class=" d-flex flex-row align-items-center justify-content-start gap-2">
                                <button>
                                    <span class="circle white-circle">
                                        <a href="tel:<?= $formulier['phone'] ?>"
                                            class="d-flex justify-content-center align-items-center arrow">
                                            <img src="<?= $formulier['arrow']['url'] ?>"
                                                alt="<?= $formulier['arrow']['alt'] ?>"
                                                style="width: 12px; height: 18px; margin:7px 0" class="icon" />
                                        </a>
                                    </span>
                                    <a href="#" class="button-text white">
                                        <?= $formulier['phone'] ?>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right column Contact Form -->
            <div class="col-12  col-lg-9" style="padding: 0 26px; ">
                <!-- here -->
                <div class="row d-none d-md-flex d-lg-flex right-col-form" style="">
                    <div class="col-lg-4">
                        <h2
                            style="color: var(--Secondary-400, #FFF);font-family: Manrope;font-size: 26px;font-style: normal;font-weight: 700;line-height: 150%; /* 39px */">
                            <?= $formulier['form_question'] ?>
                        </h2>
                    </div>
                    <div class="col-lg-7 offset-lg-1"
                        style="color: var(--Neutral-400, #9AA0B7); font-family: Manrope;font-size: 16px; font-style: normal;  font-weight: 700; line-height: 170%; /* 27.2px */">
                        <?= $formulier['formtext'] ?>
                    </div>
                </div>
                <!-- here Form -->
                <div>
                    <?= str_replace(['__START__', '__END__'], ['<div class="form-col">', '</div>'], do_shortcode('[gravityform id="1" title="false" description="false"]')) ?>
                </div>
                <div class="row">
                    <div class="col-lg-8" style="">
                        <span
                            style="color:#9AA0B7;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 500;line-height:23.4px ">
                            <?= $formulier['formprivacy'] ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>