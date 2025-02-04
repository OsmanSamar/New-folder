<?php
get_header();
$id = 1564;
//Template Name: videos archive
?>
<main class="videos flex-grow-1">
    <style>
        b,
        strong {
            color: #e94271;
            font-family: inherit;
            font-size: inherit;
            font-style: inherit;
            line-height: inherit;
        }

        .form_section {
            border-radius: 30px;
            background: #25325F;
            max-width: 1700px;
            /* height: 1400px; */
            margin: 50px auto 50px;
        }

        .test-block::before {
            content: " ";
            position: absolute;
            background: linear-gradient(13deg, rgba(55, 75, 141, 0.40) 1.5%, rgba(54, 70, 124, 0.00) 94.53%);
            top: 0;
            z-index: -1;
            border-radius: 30px;
            width: 97%;
            height: 100%;
        }

        .left-container {
            border-radius: 30px;
            color: white;
            height: 264px;
            padding: 0 26px;
        }

        .left-content {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-top: 30px;
            gap: 50px;
        }

        .right-col-form {
            margin-top: unset;
        }

        .container-max-width {
            border-radius: 30px;
            /* max-width: 1700px; */
            min-height: 381px;
            margin: 40px auto 0px;
        }

        .container-max-width .container-img {
            display: none;
        }

        .hero_white_block {
            height: 306px;
            border-radius: 40px;
            background: #25325f;
            position: relative;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 53px;
            position: static;
            margin-top: 0;
        }

        .inner_block {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: left;
            margin: 10px 60px;
            gap: 20px;
        }

        .hero_title {
            color: #FFF;
            font-family: Sora;
            font-size: 45px;
            font-style: normal;
            font-weight: 700;
            line-height: 54px;
            margin-bottom: 31px;
        }

        .hero_text,
        .hero_title {
            text-align: left;
        }

        .hero_text {
            color: #FFF;
            font-family: Manrope;
            font-size: 36px;
            font-style: normal;
            font-weight: 700;
            line-height: 27.2px;
        }

        .left-btn {
            width: fit-content;
            height: 34px;
            border-radius: 100px;
            /* background: #274083; */
            background: #FFF;
            padding: 3px 11px;
            text-align: center;
            color: #FFF;
            font-family: Manrope;
            font-size: 13px;
            font-style: normal;
            font-weight: 700;
            line-height: 23.4px;
            display: flex;
            justify-content: center;
            align-items: center;
        }


        .hero_text {
            /* color: #9AA0B7; */
            color: #FFF;
            font-family: Manrope;
            font-size: 36px;
            font-style: normal;
            font-weight: 700;
            line-height: 27.2px;
        }


        .articles_page_link::after {
            content: "";
            display: inline-block;
            width: 1px;
            height: 21px;
            opacity: 0.25;
            /* background: #CBCFDE; */
            background: green;
            margin-left: 13px;
            margin-right: 13px;
            vertical-align: middle;
        }



        .video-title-overlay {
            position: absolute;
            bottom: 10px;
            left: 10px;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
        }

        /* Video Popup Modal */
        .video-modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 70%;
            height: 60%;
            background: white;
            border-radius: 20px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
            z-index: 1000;
            padding: 20px;
        }

        .video-modal-content {
            display: flex;
            gap: 20px;
            height: 100%;
        }

        .video-left {
            width: 60%;
        }

        .video-right {
            width: 40%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 24px;
            cursor: pointer;
        }




        @media (min-width: 768px) {

            /* .container-max-width {
                margin-bottom: -240px;
            } */

            .container-max-width .container-img {
                display: block;
            }

            .hero_white_block {
                width: 380px;
                position: absolute;
                bottom: 76px;
                left: 0;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: center;
                padding: 30px;
                margin-top: unset;
            }

            .left-content {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                margin-top: 50px;
                gap: 20px;
            }

            .border-left {
                border-left: 1px solid red;
                display: flex;
                flex-direction: column;
                padding: 20px 0 20px 60px;
                row-gap: 16px;
            }

            .inner_block {
                gap: 36px;
            }

        }

        @media (min-width: 992px) {

            b,
            strong {
                font-size: inherit;
            }

            .container-max-width {
                margin: 100px auto 0px;
            }

            /* .container-max-width {
                margin-bottom: -240px;
            } */

            .form_section {
                height: 571px;
            }

            .left-container {
                height: 500px;
            }

            .left-content {
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                align-items: normal;
                margin-top: 67px;
            }

            .right-col-form {
                margin-top: 67px;
            }

            .hero_white_block {
                width: 531px;
                position: absolute;
                bottom: 79px;
                /* position: relative;
                bottom: 306px; */
                left: 0;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: center;
                padding: 30px;
                margin-top: unset;
            }

            .inner_block {
                margin: 10px 60px;
                gap: 37px;
            }


        }
    </style>

    <!-- BreadCrumb Section -->
    <?php get_template_part('components/breadcrumb') ?>
    <!--End  Of BreadCrumb Section -->

    <!-- Hero Section -->
    <div class="container container-max-width" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
        data-aos-duration="1000" data-aos-easing="ease-in-out">
        <div class="row">
            <div class="">
                <img src="<?= get_field("heroimg", $id)['url'] ?>" alt="<?= get_field("heroimg")['title'] ?>"
                    class="container-img" style=" height: 302px; border-radius: 40px; object-fit: cover;" />
            </div>
            <div class="hero_white_block ">
                <div class="container inner_block">
                    <span class="left-btn" style="color:#25325f;">
                        <?= get_field("herotitle") ?>
                    </span>
                    <span class="hero_text">
                        <?= get_field("herotext") ?>
                    </span>
                    <div class="d-flex align-items-center justify-content-between gap-2">
                        <div class="d-flex align-items-center justify-content-center rounded "
                            style="width: 30px; height: 30px; background-color:#FFF;">
                            <img src="<?= get_field("backimg")['url'] ?>" alt="<?= get_field("backimg")['alt'] ?>"
                                style="width: 12px; height: 18px;" />
                        </div>
                        <a href="<?= get_field("backlink")['url'] ?>"
                            style="color:#FFF; font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px;  text-decoration: none; ">
                            <?= get_field("backlink")['title'] ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php
    $posts = get_posts([
        'post_type' => 'videos',
        'numberposts' => -1
    ]);

    foreach ($posts as $post) {
        $fields = get_fields($post->ID);
        $videos = $fields['videogallery'];
        if ($videos): ?>
            <div class="container" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
                data-aos-easing="ease-in-out">
                <div class="row">
                    <?php
                    $delay = 0;
                    foreach ($videos as $video_item): ?>
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="<?= $delay ?>"
                            data-aos-duration="800" style="margin: 0 0 23px 0;">
                            <div class="video-card"
                                style="background-color:#FFF; height: 290px; border-radius: 30px; position: relative; cursor: pointer;">
                                <div class="video-container" style="position: relative;">
                                    <img class="video-trigger" src="<?= esc_url($video_item['thumbnail']['url']) ?>"
                                        alt="<?= esc_attr($video_item['thumbnail']['alt']) ?>" data-bs-toggle="modal"
                                        data-bs-target="#videoModal" data-video="<?= esc_url($video_item['video']) ?>"
                                        data-title="<?= esc_attr($video_item['videotitle']) ?>"
                                        data-text="<?= esc_attr($video_item['videotext']) ?>"
                                        style="width: 100%; height: 218px; border-radius: 15px; object-fit: cover;">


                                    <!-- Video Title Overlay -->
                                    <div class="video-title-overlay" style="position: absolute; bottom: 10px; left: 10px; background: rgba(0, 0, 0, 0.7); 
                                     color: white; padding: 5px 10px; border-radius: 5px;">
                                        <?= esc_html($video_item['videotitle']) ?>
                                    </div>
                                </div>

                                <!-- Video Info (Number + Text) -->
                                <div class="d-flex align-items-center justify-content-start gap-2"
                                    style="margin-top: 1rem; margin-left:1rem">
                                    <span class="d-block articles_page_link"> <?= esc_html($video_item['videonum']) ?></span>
                                    <span> <?= esc_html($video_item['videotext']) ?></span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $delay += 300;
                    endforeach; ?>
                </div>
            </div>
        <?php endif;
    }
    wp_reset_postdata();
    ?>





    <!-- Video Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="modalTitle" class="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex">
                    <!-- Left: Video -->
                    <div class="video-left" style="flex: 1;">
                        <iframe id="modalVideo" class="embed-responsive-item" allowfullscreen
                            style="width: 100%; height: 100%; border-radius: 15px;"></iframe>
                    </div>
                    <!-- Right: Video Title and Text -->
                    <div class="video-right" style="flex: 1; padding: 20px;">
                        <p class="left-btn" style="background-color:#274083" id="modalText"></p>
                        <h2 id="modalTitleText"></h2>
                        <h6 id="modalVideoNum"></h6>


                        <!-- Let's talk button -->
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="<?= esc_url(home_url('/contact')); ?>"
                                class="d-flex justify-content-center align-items-center gap-2">
                                <div class="d-flex align-items-center justify-content-between"
                                    style="height: 42px; padding: 12px 15px; border-radius: 8px; background:#E94271;">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/arrowbtn.svg"
                                        alt="Arrow" style="width: 12px; height: 18px; margin: 7px 0;">
                                </div>
                                <span
                                    style="color: #6A7291; font-family: Manrope; font-size: 16px; font-weight: 700; line-height:15.6px;">
                                    Let's talk
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Form Section container  -->
    <?php get_template_part('components/form') ?>
    <!-- End of Form Section -->








    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const videoTriggers = document.querySelectorAll(".video-trigger");
            const modal = document.getElementById("videoModal");
            const modalVideo = document.getElementById("modalVideo");
            const modalTitle = document.getElementById("modalTitle");
            const modalTitleText = document.getElementById("modalTitleText");
            const modalVideoNum = document.getElementById("modalVideoNum");
            const modalText = document.getElementById("modalText");

            // When clicking on a video thumbnail
            videoTriggers.forEach(trigger => {
                trigger.addEventListener("click", function () {
                    const videoSrc = this.getAttribute("data-video");
                    const videoTitle = this.getAttribute("data-title");
                    const videoDescription = this.getAttribute("data-text");
                    const videoNum = this.getAttribute("data-text");

                    modalTitle.innerText = videoTitle;
                    modalTitleText.innerText = videoTitle;
                    modalText.innerText = videoDescription;
                    modalVideoNum.innerText = videoNum;
                    modalVideo.src = videoSrc + "?autoplay=1"; // Autoplay when modal opens
                });
            });

            // Stop video when modal closes
            modal.addEventListener("hidden.bs.modal", function () {
                modalVideo.src = "";
            });
        });
    </script>


</main>

<?php get_footer() ?>