<?php get_header();

//Template Name: frontpage
?>

<main class="front-page flex-grow-1">
    <style>
    .letstalk-btn a:hover img {
        transform: translateX(6px);
        transition: transform 0.2s ease;
    }


    .right-col-form {
        margin-top: unset;
    }

    .img-form-container {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: ;
        gap: 10px;
    }

    .knowledge-links {
        color: #25325F;
        font-family: Manrope;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 27.2px;
    }

    b,
    strong {
        color: #e94271;
        font-family: inherit;
        font-size: inherit;
        font-style: inherit;
        line-height: inherit;
    }

    .first-blue-block {
        border-radius: 40px;
        background: #25325F;
        margin: 54px auto;
        height: 850px;
        width: 100%;
        max-width: 1700px;
    }

    .test-main-title {
        color: #25325F;
        font-size: 18px;
        font-weight: 700;
        line-height: 21.6px;
        padding: 0 17px;
        font-family: Manrope;
        display: block;
    }

    .test-text {
        color: #25325F;
        font-size: 13px;
        font-weight: 700;
        line-height: 21.6px;
        padding: 0 17px;
        font-family: Manrope;
        display: block;

    }

    .newsletter_text {
        margin: 20px 0;
        color: #25325F;
        font-family: Manrope;
        font-size: 18px;
        font-style: normal;
        font-weight: 700;
        line-height: 27.2px
    }

    .information_title {
        color: #25325F;
        font-family: Manrope;
        font-size: 17px;
        font-style: normal;
        font-weight: 700;
        line-height: 27.2px;
        margin: 10px 5px 0
    }

    .information_text {
        color: var(--Text, #6A7291);
        font-family: Manrope;
        font-size: 17px;
        font-style: normal;
        font-weight: 700;
        line-height: 27.2px;
        margin: 5px 0;
        width: 326px;
    }

    .sample-slider-title {
        color: #25325F;
        font-family: Manrope;
        font-size: 22px;
        font-style: normal;
        font-weight: 700;
        line-height: 35.2px;
        width: 290px;
    }

    .main_title_knowledge {
        color: #25325F;
        font-family: Manrope;
        font-size: 22px;
        font-style: normal;
        font-weight: 700;
        line-height: 31px;
        margin-bottom: 15px;
        width: 290px;

    }

    .blue_block_main_title {
        color: #FFF;
        font-family: Manrope;
        font-size: 22px;
        font-style: normal;
        font-weight: 700;
        line-height: 39px;
        width: 290px;
    }

    .blue_block_text {
        color: #9AA0B7;
        font-family: Manrope;
        font-size: 17px;
        font-style: normal;
        font-weight: 700;
        line-height: 27.2px;
        width: 326px;

    }

    .left-columns-repeater-swiper {
        margin-top: 36px;
    }

    .partners-container {
        border-radius: 10px;
        border: 1px solid #CBCFDE;
        background: #EDF3F4;
        width: 102px;
        height: 52px;
    }



    .img-container {
        height: 350px;
        /* margin-top: -120px; */
        max-width: 1700px;
        /* margin-top: -215px; */
        /* margin-top: -96px; */
        margin-top: -406px;
        margin-left: auto;
        margin-right: auto;

    }


    .client2-img {
        height: 136px !important;
        margin: 11px;
        object-fit: cover;
        border-radius: 15px;
    }

    .left-column {
        color: #FFF;
        margin-top: 107px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: left;
        /* padding: 0 8px; */
        position: relative;
        /* width: fit-content; */
        z-index: 1;
        /* Ensure it stays above its background */
        padding: 0 14px;
    }


    .left-column::before {
        /* content: "";
    position: absolute;
    top: 0; 
    left: -109px; 
    background: linear-gradient(335deg, rgba(55, 75, 141, 0.40) 8.61%, rgba(54, 70, 124, 0.00) 61.92%);
    height: 766px;
    width: calc(100% + 150px + 0px); 
    z-index: -1; 
    border-radius: 40px;*/

        content: "";
        position: absolute;
        top: -44px;
        left: -5px;
        height: 513px;
        background: linear-gradient(335deg, rgba(55, 75, 141, 0.40) 8.61%, rgba(54, 70, 124, 0.00) 61.92%);
        width: calc(100% + 11px + 0px);
        z-index: -1;
        border-radius: 40px;
    }

    .swiper_block {
        margin-top: 86px;
    }

    .slide-text {
        display: block;
        /* white-space: nowrap; */
        overflow: hidden;
        text-overflow: ellipsis;
        color: #FFF;
        font-family: Manrope;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 27.2px;
        text-align: center;

    }


    .mask-group {
        background-image: url("<?= esc_url(get_template_directory_uri()); ?>/images/maskgroup.png");
        background-size: cover;
        background-repeat: no-repeat;
        background-size: ;
    }

    .client-img {
        width: 108px !important;
        height: 108px !important;
        flex-shrink: 0;
        object-fit: cover;
        border-radius: 15px;
        margin-left: 10px;
    }



    .test-block::before {
        content: " ";
        position: absolute;
        /* background-color: red; */
        background: linear-gradient(13deg, rgba(55, 75, 141, 0.40) 1.5%, rgba(54, 70, 124, 0.00) 94.53%);
        top: 0;
        /* left: 0; */
        /* z-index: 0; */
        z-index: -1;
        border-radius: 30px;
        width: 97%;
        /* height: 100%; */
        height: 99.9%;

    }

    /* Form left container */
    .left-container {
        border-radius: 30px;
        color: white;
        height: 264px;
        padding: 0 26px;
    }

    .left-content {
        display: flex;
        flex-direction: row;
        /* justify-content: flex-start; */
        /* justify-content: space-between; */
        align-items: center;
        margin-top: 50px;
        gap: 20px;
        /* margin-left: 15px; */
    }

    .first-name {

        color: #9AA0B7;
        font-family: Manrope;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 27.2px
    }

    .newsletter-container {
        margin-top: 15px;
    }

    .custom-container {
        max-width: ;
        max-height: 492px;
        border: 1px solid #CBCFDE;
        border-radius: 25px;
        padding: 45px 20px;
        margin-top: -160px;
        margin-bottom: 30px;
    }


    .custom-video {
        margin-bottom: -74px;
    }

    .first-container {
        padding-top: 96px;
    }

    .client-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        color: #6A7291;
        background-color: #CBCFDE;
        border-radius: 100px;
        font-family: Manrope;
        font-size: 14px;
        font-style: normal;
        font-weight: 700;
        line-height: 24px;
        width: 69px;
        height: 33px;
        padding: 4px;
        text-align: center;
    }

    .card-title {
        color: #25325F;
        font-size: 14px;
        font-weight: 600;
        /* line-height: 27px; */
        margin: 2px 0;
        font-family: Manrope;
    }

    .card-text {
        color: #25325F;
        font-size: 14px;
        font-weight: 600;
        line-height: 27px;
        font-family: Manrope;
        font-style: normal;
        line-height: 23.8px;
        font-weight: 700;
    }


    .client2-btn {
        border-radius: 100px;
        color: #6A7291;
        background: #CBCFDE;
        text-align: center;
        padding: 4px 10px;
        width: fit-content;
        font-family: Manrope;
        font-size: 13px;
        font-style: normal;
        font-weight: 700;
        line-height: 23.4px;
    }


    .right_section {
        margin-top: 27px;
    }

    .text-swiper {
        font-size: 11px;
        color: white;
        font-family: Manrope;

    }

    .text-swiper.span {

        overflow-wrap: break-word;
    }

    .btn-swiper {
        white-space: nowrap;
        color: #FFF;
        font-family: Manrope;
        font-size: 14px;
        font-style: normal;
        font-weight: 700;
        line-height: 180%;
        background-color: #274083;
        border-radius: 100px;
        padding: 4px 8px;
        width: 61px;
        height: 30px;
    }

    /* .bg_img {
        height: 350px;
    } */


    .bg_img {
        height: 100%;
    }

    .form_section {
        border-radius: 30px;
        background: #25325F;
        /* margin: 150px auto; */
        max-width: 1700px;
        margin: 150px auto 100px;

    }

    .arrow_section {

        width: 57.851px;
        height: 92.371px;
        flex-shrink: 0;
    }

    /* Custom Pagination Numbers */
    .custom-pagination {
        display: flex;
        gap: 8px;
        align-items: center;
        margin-bottom: 20px;
        justify-content: space-between;
    }

    .custom-number {
        position: relative;
        border: 1px solid var(--Line, #CBCFDE);
        border-radius: 100px;
        color: #000;
        font-size: 12px;
        font-weight: bold;
        width: 17px;
        height: 30px;
        border-radius: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }


    .custom-title {
        color: #FFF;
        font-family: Manrope;
        font-size: 13px;
        font-style: normal;
        font-weight: 700;
        line-height: 23.4px;
    }

    .custom-number.active {
        background-color: #274083;
        color: #fff;
        width: auto;
        padding: 0 6px;
    }

    .custom-number .custom-title {
        display: none;
        margin-left: 10px;
        white-space: nowrap;
    }




    /* Container for the background image and overlay */
    .responsive-container {
        position: relative;
        width: 100%;
        max-width: 1700px;
        overflow: hidden;
        margin: 100px auto;
    }

    .background-image {
        width: 100%;
        /* height: auto; */
        height: 350px;
        border-radius: 30px;
        object-fit: cover;
    }


    .overlay2 {
        position: relative;
        /* left: 50%;
        top: 30%; */
        left: 7%;
        top: -15%;
        /* transform: translate(-50%, -64%); */
        background-color: #FFF;
        border-radius: 15px;
        width: 90%;
        /* max-width: 349px; */
        max-width: 316px;
        padding: 32px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        text-align: left;
    }

    .overlay {
        display: none;
    }

    .sub-title {
        background-color: #274083;
        color: #FFF;
        padding: 5px 20px;
        border-radius: 40px;
        font-family: Manrope;
        font-size: 14px;
        font-weight: 700;
        margin-bottom: 11px;
    }


    .main-title {
        color: #25325F;
        font-family: Manrope font-size: 22px;
        font-weight: 700;
        margin-bottom: 11px;
        text-align: left;
        margin-top: 13px;
    }

    /* Icon container */
    .icon-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 20px;
    }

    /* Individual icons */
    .icon {
        width: 120px;
        height: auto;
    }


    /* The first Card  */
    .client_card1 {
        max-height: 234px;
        padding: 20px 0;

    }


    .client_card2 {
        background: #EDF3F4;
        border-radius: 20px;
        border: 1px solid #CBCFDE;
    }

    .hidden-text {
        display: none;
    }

    @media (min-width: 768px) {
        .left-content {
            display: flex;
            flex-direction: row;
            /* justify-content: flex-start; */
            justify-content: space-between;
            align-items: center;
            margin-top: 50px;
            gap: 20px;

        }

        .custom-container {
            margin-top: -96px;
        }

        .first-blue-block {
            height: 852px;
        }

        .left-column {
            color: #FFF;
            margin-top: 107px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 1;
            padding: 0 14px;
            text-align: center;
        }

        .blue_block_main_title {
            font-size: 26px;
            line-height: 150%;
            width: 342px;
            text-align: center;
        }


        .blue_block_text {
            font-size: 16px;
            width: 530px;
        }


        .custom-number.active {
            background-color: #274083;
            color: #fff;
            width: auto;
            padding: 0 20px;
        }


        .left-columns-repeater-swiper {
            margin-top: -96px;
        }

        .partners-container {
            /* width: 114px; */
            width: 108px;
            height: 61px;
            gap: 14px;

        }

        .swiper_block {
            margin-top: 229px;
        }


        .left-column::before {
            content: "";
            position: absolute;
            top: -44px;
            /* left: -5px; */
            left: -47px;
            height: 513px;
            background: linear-gradient(335deg, rgba(55, 75, 141, 0.40) 8.61%, rgba(54, 70, 124, 0.00) 61.92%);
            /* width: calc(100% + 11px + 0px); */
            width: calc(100% + 96px + 0px);
            z-index: -1;
            border-radius: 40px;
        }



        .background-image {
            /* height: auto; */
            height: 471px;
        }

        .custom-number.active .custom-title {
            display: inline-block;
        }


        .right_section {
            margin-top: 27px;
        }

        .custom-number {
            font-size: 16px;
        }


        .text-swiper {
            font-size: 14px;
        }

        .btn-swiper {
            font-size: 13px;
            padding: 4px 12px;
        }

        .container2 {
            /* display: flex !important;
            align-items: center;
            justify-content: center; */
            margin-top: -154px;
            /* gap: 20px; */
        }

        .testimonial-container {
            width: 230px;
            padding: 10px;
            border-radius: 15px;
            background-color: #FFF;
            /* width: 100%; */


        }

        .testimonial-img {
            width: 182px;
            height: 108px;
            flex-shrink: 0;
            object-fit: cover;
            border-radius: 15px;
            margin-left: 12px;
        }

        .overlay2 {
            position: absolute;
            /* top: 50%; */
            /* left: 50%; */
            top: 7%;
            left: 9%;
            transform: translate(-90%, 28%);
            background-color: #FFF;
            border-radius: 15px;
            width: 90%;
            max-width: 389px;
            padding: 32px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            text-align: left;
        }

        .overlay {
            display: none;
        }

        .sub-title {
            font-size: 13px;
        }

        .main-title {
            font-size: 26px;
        }

        .icon {
            width: 140px;
        }

        .client_card2 {
            border-radius: 20px;
        }

        .client-img {
            /* width: 135px !important;
            height: 108px !important; */
            width: 159px !important;
            height: 138px !important;

        }

        .client-btn {
            width: 69px;
            height: 30px;
            font-size: 14px;
            padding: 4px;
            width: fit-content;
        }


        .card-title {
            font-size: 13px;
        }

        .border-left {
            border-left: 1px solid white;
            display: flex;
            flex-direction: column;
            padding: 20px 0 20px 60px;
            row-gap: 16px;
        }

        .img-container {
            height: 648px;
            margin-top: -581px;
        }



    }

    @media (min-width: 992px) {

        .right-col-form {
            margin-top: 67px;
        }

        .hidden-text {
            display: inline;
        }


        .img-form-container {
            display: flex;
            align-items: flex-start;
            /* justify-content: flex-start; */
            flex-direction: column;
            gap: 10px;
        }

        .knowledge-links {
            color: #25325F;
            font-family: Manrope;
            font-size: 13px;
            font-style: normal;
            font-weight: 600;
            line-height: 15.6px;
        }


        .margin-class {
            margin: 8px;
        }



        b,
        strong {

            font-size: inherit;

        }


        .newsletter_text {

            font-size: 16px;
        }

        .custom-number.active {
            background-color: #274083;
            color: #fff;
            width: auto;
            padding: 0 20px;
        }


        .second-arrow {
            margin-top: 70px
        }

        .information_title {
            font-size: 16px;
            line-height: 27px;

        }

        .information_text {
            font-size: 16px;
            width: 504px;
        }


        .sample-slider-title {
            font-size: 26px;
            line-height: 39px;
            width: 492px;
        }

        .main_title_knowledge {
            font-size: 26px;
            width: 342px;
        }

        .blue_block_main_title {
            font-size: 26px;
            width: 342px;
            margin: 5px 0px;
            text-align: left;
        }

        .blue_block_text {
            font-size: 16px;
            width: 356px;
            margin: 5px 0px;
            text-align: left;
        }

        .main-title {
            text-align: center;
            margin-left: 0;
        }

        .background-image {
            height: auto;
        }







        .left-column {
            padding: 0;
            align-items: flex-start;
            justify-content: left;
            text-align: left;
        }

        .left-column::before {
            content: "";
            position: absolute;
            top: 0;
            left: -109px;
            /* Extend background outside */
            background: linear-gradient(335deg, rgba(55, 75, 141, 0.40) 8.61%, rgba(54, 70, 124, 0.00) 61.92%);
            height: 740px;
            width: calc(100% + 150px + 0px);
            /* Adjust width to account for margin */
            z-index: -1;
            /* Behind the content */
            border-radius: 40px;
        }

        /* Custom Pagination Numbers */
        .custom-pagination {
            display: flex;
            gap: 8px;
            justify-content: flex-start;
            align-items: center;
            margin-bottom: 20px;
        }


        .custom-number.active .custom-title {
            display: inline-block;
        }


        .slide-text {
            display: block;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .left-container {
            height: 500px;
        }

        .left-content {
            display: flex;
            flex-direction: column;

            /* margin-left: 15px; */
            margin-top: 50px;
            align-items: flex-start;
        }

        .newsletter-container {
            /* margin-top: 150px; */
        }

        .custom-container {
            max-width: ;
            /* max-height: 492px; */
            border: 1px solid #CBCFDE;
            border-radius: 25px;
            padding: 45px 20px;
            margin-top: 0;
            height: 423px;
        }

        .custom-video {
            margin-bottom: 0;
        }


        .first-container {
            padding-top: 140px;
        }

        .right_section {
            margin-top: 0;
        }

        /* Custom Pagination Numbers */
        .custom-pagination {
            display: flex;
            gap: 20px;
            justify-content: flex-start;
            align-items: center;
            margin-bottom: 20px;
        }

        .custom-number {
            font-size: 16px;
        }

        .text-swiper {
            font-size: 14px;
        }

        .btn-swiper {
            font-size: 13px;
            padding: 4px 12px;
        }

        .m-scroll {
            display: flex;
            position: relative;
            width: 800px;
            height: 62px;
            margin: auto;
            background-color: ;
            overflow: hidden;
            z-index: 1;
        }

        .m-scroll__title {
            display: flex;
            position: absolute;
            top: 50%;
            left: 0;
            align-items: center;
            transform: translateY(-50%);
            white-space: nowrap;
        }

        .m-scroll__title>div {
            display: flex;
            animation: scrollText 15s infinite linear;
        }

        .m-scroll__title h1 {
            margin: 0;

            color: #FFF;
            font-family: Manrope;
            font-size: 13px;
            font-style: normal;
            font-weight: 700;
            line-height: 23.4px
        }

        @keyframes scrollText {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .pagination-container {
            display: flex;
            flex-direction: row;
            gap: 15px;
        }

        .pagination-btn {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: #ccc;
            border: none;
            cursor: pointer;
            background-color: #E94271;
            transition: background-color 0.3s;
        }

        .pagination-btn.active {
            background-color: #E94271;
        }

        .resources {
            margin-top: 35px;
        }

        .container2 {

            margin-top: -45px;
            gap: unset;
        }

        .testimonial-container {
            border-radius: 15px;
            /* background-color: #EDF3F4; */
            background-color: #FFF;
            width: 100%;
            height: 100%;
        }

        .client_card2 {
            width: 546px;
            height: 172px;
        }

        .client1-img {
            width: 135px;
            height: 135px;
            /* flex-shrink: 0; */
            object-fit: cover;
            border-radius: 15px;
            margin-left: 12px;
        }

        .client-btn {
            width: 79px;
            height: 30px;
            font-size: 14px;
            padding: 4px;
        }

        .card-title {
            font-size: 13px;
        }

        .card-text {
            font-size: 16px;
            line-height: 27.2px;
        }

        .bg-container {
            height: 361px;
        }

        .img-container {
            height: 648px;
            /* margin-top: -581px; */
            margin-top: -570px;
        }

        .left-text {
            /* font-family: Sora; */
            font-family: "Sora", serif;
            font-size: 45px;
            font-style: normal;
            font-weight: 700;
            line-height: 120%;
            text-align: left;
        }


        /* .bg_img {
            height: 648px;
        } */

        .form_section {
            height: 550px;
        }

        .arrow_section {
            width: 87.239px;
            height: 139.295px;
            flex-shrink: 0;
            object-fit: cover;
            margin-right: 60px;
        }

        .overlay2 {
            display: none;
        }

        /* Overlay styles */
        .overlay {
            position: absolute;
            /* top: 50%;
                left: 24%; */
            top: 19%;
            left: 9%;
            /* transform: translate(-50%, -50%); */
            background-color: white;
            border-radius: 14px;
            width: 90%;
            max-width: 450px;
            padding: 32px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: left;
        }

        .icon {
            width: 160px;
        }

        .client-img {
            /* width: 135px !important;
            height: 108px !important; */
            width: 166px !important;
            height: 195px !important;

        }
    }


    .mySwiper2 .swiper-pagination-bullet {
        background-color: white;
    }

    .mySwiper2 .swiper-pagination-bullet-active {
        background-color: #E94271;
    }


    .mySwiper1 {
        width: 100%;

    }

    .mySwiper1 .swiper-slide {
        margin: 0;
        padding: 0;
    }

    .sample-slider .swiper-slide {
        margin: 0;
        padding: 0;
    }

    .swiper-container {
        position: relative;
        cursor: pointer;
    }

    .swiper-pagination {
        display: flex !important;
        justify-content: center;
        align-items: center;
        gap: 2px;
        flex-direction: row;
    }

    .swiper-pagination-bullet {
        background-color: #E94271;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        opacity: 1;
    }

    .swiper-pagination-bullet-active {
        background-color: #FFF;

    }



    .bg-container {
        height: 200px;
    }

    .left-text {
        color: #25325F;
        font-family: Sora;
        font-size: 45px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%;
        text-align: center;
    }

    .vl {
        width: 1px;
        height: 81.006px;
        background: #25325F;
    }

    .right-text {
        color: #25325F;
        font-family: Manrope;
        font-size: 18px;
        font-style: normal;
        font-weight: 500;
        line-height: 150%;
    }
    </style>



    <div>


        <!-- 1 -->
        <div class="container" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
            data-aos-easing="ease-in-out">
            <div class="container first-container">
                <div class=" row">
                    <div class="d-flex d-md-none d-lg-flex align-items-center justify-content-between">
                        <span class="left-text ">
                            <!-- Cloud Complexity Text -->
                            <?= get_field("left_text") ?>
                            <span style="color:#E94271"><?= get_field("left_text_pink_word") ?></span>
                        </span>
                        <div class="vl d-none d-lg-flex  d-md-none"></div>
                        <p class="right-text d-none d-md-none d-lg-flex ">
                            <?= get_field("right_text") ?>
                        </p>
                    </div>
                </div>
                <div class=" row">
                    <div class=" col-12  d-md-flex d-lg-none d-none align-items-center justify-content-between">
                        <span class=" col-md-7" style="font-size:28px;">
                            <!-- Cloud complexity made <span style="color:#E94271">simple</span> -->
                            <?= get_field("left_text") ?>
                            <span style="color:#E94271"><?= get_field("left_text_pink_word") ?></span>
                        </span>
                        <div class="vl  d-md-flex d-lg-none d-none"></div>
                        <p class=" right-text  d-md-flex d-lg-none d-none ">
                            <?= get_field("right_text") ?>
                        </p>
                    </div>
                </div>

                <!-- Small Screen -->
                <div class="d-flex flex-column align-items-center d-md-none  d-lg-none" style="margin-top:30px;">
                    <div class="row">
                        <p
                            style="color:#25325F; text-align:center; font-family:Manrope; font-size:18px; font-style:normal;font-weight: 500;line-height:27px; width:256px; margin-bottom:30px;">
                            <!-- <?= get_field("right_text") ?> -->
                            <span style="font-weight: 700;">Empowering</span> organizations to <span
                                style="font-weight: 700;">innovate</span> faster
                        </p>

                    </div>
                    <div class="d-flex d-md-none d-lg-none  align-items-center justify-content-between"
                        style="height:42px; padding:12px 15px; border-radius:8px; background:#E94271; gap:16px;">
                        <a href="<?= esc_url(home_url('/')); ?>"
                            class="d-flex justify-content-center align-items-center">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/images/arrowbtn.svg" alt="Arrow"
                                style="width:12px; height: 18px; margin:7px 0;  ">
                        </a>
                        <span
                            style="color: #FFF;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px">
                            Let's talk</span>
                    </div>
                </div>
            </div>
        </div>



        <!-- 2 Swiper Container  class="container"-->
        <div class="section-header" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
            data-aos-duration="1000" data-aos-easing="ease-in-out">
            <div class="bg-container"
                style="background:#25325F; border-radius:40px; margin:80px auto; max-width:1700px; height:577px;">
                <div class="container">
                    <!-- row -->
                    <div class=" blue-container d-block d-lg-flex d-md-flex align-items-center justify-content-between"
                        style="padding: 20px; ">
                        <!-- Pagination -->
                        <div class="swiper-pagination2 d-none d-md-flex d-lg-flex align-items-center justify-content-center"
                            style="z-index: 1; margin-left: 10px;  width:100px; padding:20px;">
                        </div>


                        <!-- Swiper Container -->
                        <div class="swiper swiper-container" style="flex-grow:1; --swiper-pagination-color: #E94271;">
                            <div class="swiper-wrapper">

                                <!-- Slide 1 -->
                                <div class="swiper-slide">
                                    <div
                                        class="d-none d-md-flex d-lg-flex flex-row align-items-center justify-content-between w-100">
                                        <!-- Left Section -->
                                        <div class="d-flex align-items-center gap-1">
                                            <a href="<?= get_field("trending_btn")['url'] ?>" class="btn-swiper">
                                                <?= get_field("trending_btn")['title'] ?>
                                            </a>
                                        </div>
                                        <!-- Slide Content -->
                                        <div class="text-swiper">
                                            <span class="slide-text">
                                                1Nulla facilisi.Duis at<strong>nulla</strong>
                                                posuere,cursus justo vitae,<span id="dots">...</span>
                                                <span class="hidden-text"><strong>interdum</strong>dui fusce euismod
                                                    rhoncus1</span>
                                            </span>
                                        </div>

                                        <!-- Right Section -->
                                        <div class="d-lg-flex d-md-none align-items-center gap-1">
                                            <a href="#"
                                                style="border-radius:8px; background-color:white; height:30px; width:30px;"
                                                class="d-flex justify-content-center align-items-center">
                                                <img src="<?= get_field('arrow_btn')['url'] ?>"
                                                    alt="<?= get_field('arrow_btn')['title'] ?>"
                                                    style="width:12px; height:18px; object-fit:cover;">
                                            </a>
                                            <span
                                                style="color: var(--Secondary-400, #FFF);font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px">Learn
                                                more</span>
                                        </div>

                                        <!-- class="btn" -->
                                        <!-- <div class="d-flex flex-row  d-lg-flex d-md-none align-items-center ">
                                            <button>
                                                <span class="circle1">
                                                    <a href="#"
                                                        class="d-flex justify-content-center align-items-center  arrow1"
                                                        href="#">

                                                        <img src="<?= get_field('arrow_btn')['url'] ?>"
                                                            alt="<?= get_field('arrow_btn')['title'] ?>"
                                                            style="width:12px; height:18px; object-fit:content;"
                                                            class="icon1">
                                                    </a>
                                                </span>
                                                <span class="button-text1">Read More</span>
                                            </button>
                                        </div> -->

                                    </div>
                                </div>

                                <!-- Slide 2 -->
                                <div class="swiper-slide">
                                    <div
                                        class="d-none d-md-flex d-lg-flex flex-row align-items-center justify-content-between w-100">
                                        <!-- Left Section -->
                                        <div class="d-flex align-items-center gap-1">
                                            <div class="swiper-pagination2"
                                                style="position:relative; z-index:1; transform: translateY(50%);"></div>
                                            <a href="<?= get_field("trending_btn")['url'] ?>" class="btn-swiper">
                                                <?= get_field("trending_btn")['title'] ?>
                                            </a>
                                        </div>
                                        <!-- Slide Content -->
                                        <div class="text-swiper">
                                            <span class="slide-text">
                                                2Nulla facilisi.Duis at <strong>nulla</strong>
                                                posuere,cursus justo vitae,<span id="dots">...</span>
                                                <span class="hidden-text"><strong>interdum</strong>dui fusce euismod
                                                    rhoncus</span>
                                            </span>
                                        </div>
                                        <!-- Right Section -->
                                        <div class="d-lg-flex d-md-none align-items-center gap-1">
                                            <a href="#"
                                                style="border-radius:8px; background-color:white; height:30px; width:30px;"
                                                class="d-flex justify-content-center align-items-center">
                                                <img src="<?= get_field('arrow_btn')['url'] ?>"
                                                    alt="<?= get_field('arrow_btn')['title'] ?>"
                                                    style="width:12px; height:18px; object-fit:cover;">
                                            </a>
                                            <span
                                                style="color: var(--Secondary-400, #FFF);font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px">Learn
                                                more</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 3 -->
                                <div class="swiper-slide">
                                    <div
                                        class="d-none d-md-flex d-lg-flex flex-row align-items-center justify-content-between w-100">
                                        <!-- Left Section -->
                                        <div class="d-flex align-items-center gap-1">
                                            <div class="swiper-pagination2"
                                                style="position:relative; z-index:1; transform: translateY(50%);"></div>
                                            <a href="<?= get_field("trending_btn")['url'] ?>" class="btn-swiper">
                                                <?= get_field("trending_btn")['title'] ?>
                                            </a>
                                        </div>
                                        <!-- Slide Content -->
                                        <div class="text-swiper">
                                            <span class="slide-text">
                                                3Nulla facilisi.Duis at <strong>nulla</strong>
                                                posuere,cursus justo vitae,<span id="dots">...</span>
                                                <span class="hidden-text"><strong>interdum</strong>dui fusce euismod
                                                    rhoncus</span>
                                            </span>
                                        </div>
                                        <!-- Right Section -->
                                        <div class="d-lg-flex d-md-none align-items-center gap-1">
                                            <a href="#"
                                                style="border-radius:8px; background-color:white; height:30px; width:30px;"
                                                class="d-flex justify-content-center align-items-center">
                                                <img src="<?= get_field('arrow_btn')['url'] ?>"
                                                    alt="<?= get_field('arrow_btn')['title'] ?>"
                                                    style="width:12px; height:18px; object-fit:cover;">
                                            </a>
                                            <span
                                                style="color: var(--Secondary-400, #FFF);font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px">Learn
                                                more</span>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <!-- Small Screen -->
                        <div
                            class="d-flex flex-column align-items-center justify-content-center d-md-none d-lg-none gap-2">
                            <!-- -->
                            <!-- Swiper Container -->
                            <div class="text-swiper col-10 ">
                                <div class="swiper swiper-container"
                                    style="flex-grow:1; --swiper-pagination-color: #E94271;">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="d-flex flex-column align-items-center gap-4">

                                                <div style="position: relative; margin:0 ">
                                                    <a href="<?= get_field("trending_btn")['url'] ?>"
                                                        class="btn-swiper">
                                                        <?= get_field("trending_btn")['title'] ?>
                                                    </a>
                                                </div>

                                                <span class="slide-text ">
                                                    Nulla facilisi. Duis at <span
                                                        style="color:#E94271;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height: 170%;">nulla</span>
                                                    posuere, cursus
                                                    justo vitae, <span
                                                        style="color:#E94271;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height: 170%;">interdum</span>
                                                    dui fusce
                                                    euismod rhoncus1
                                                </span>

                                                <!-- Right Section: Arrow Button -->
                                                <div
                                                    class=" col-md-10 col-sm-10 col-10 d-flex align-items-center justify-content-center gap-2">
                                                    <a href="#"
                                                        style="border-radius:8px; background-color:white; height:30px; width:30px;"
                                                        class="d-flex justify-content-center align-items-center">
                                                        <img src="<?= get_field('arrow_btn')['url'] ?>"
                                                            alt="<?= get_field('arrow_btn')['title'] ?>"
                                                            style="width:12px; height:18px; object-fit:cover;">
                                                    </a>
                                                    <span class="d-md-inline"
                                                        style="color: var(--Secondary-400, #FFF);font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px">Learn
                                                        more</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="d-flex flex-column align-items-center gap-4">

                                                <div style="position: relative; margin:0 ">
                                                    <a href="<?= get_field("trending_btn")['url'] ?>"
                                                        class="btn-swiper">
                                                        <?= get_field("trending_btn")['title'] ?>
                                                    </a>
                                                </div>

                                                <span class="slide-text">
                                                    Nulla facilisi. Duis at <span
                                                        style="color:#E94271;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height: 170%;">nulla</span>
                                                    posuere, cursus
                                                    justo vitae, <span
                                                        style="color:#E94271;font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height: 170%;">interdum</span>
                                                    dui fusce
                                                    euismod rhoncus2
                                                </span>

                                                <!-- Right Section: Arrow Button -->
                                                <div
                                                    class=" col-md-10 col-sm-10 col-10 d-flex align-items-center justify-content-center gap-2">
                                                    <a href="#"
                                                        style="border-radius:8px; background-color:white; height:30px; width:30px;"
                                                        class="d-flex justify-content-center align-items-center">
                                                        <img src="<?= get_field('arrow_btn')['url'] ?>"
                                                            alt="<?= get_field('arrow_btn')['title'] ?>"
                                                            style="width:12px; height:18px; object-fit:cover;">
                                                    </a>
                                                    <span class="d-md-inline"
                                                        style="color: var(--Secondary-400, #FFF);font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px">Learn
                                                        more</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="d-flex flex-column align-items-center gap-4 ">

                                                <div style="position: relative; margin:0 ">
                                                    <a href="<?= get_field("trending_btn")['url'] ?>"
                                                        class="btn-swiper">
                                                        <?= get_field("trending_btn")['title'] ?>
                                                    </a>
                                                </div>

                                                <span class="slide-text">
                                                    Nulla facilisi. Duis at <span
                                                        style="color:#E94271; font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height: 170%;">nulla</span>
                                                    posuere, cursus
                                                    justo vitae, <span
                                                        style="color:#E94271; font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 700;line-height: 170%;">interdum</span>
                                                    dui fusce
                                                    euismod rhoncus3
                                                </span>

                                                <!-- Right Section: Arrow Button -->
                                                <div
                                                    class=" col-md-10 col-sm-10 col-10 d-flex align-items-center justify-content-center gap-2">
                                                    <a href="#"
                                                        style="border-radius:8px; background-color:white; height:30px; width:30px;"
                                                        class="d-flex justify-content-center align-items-center">
                                                        <img src="<?= get_field('arrow_btn')['url'] ?>"
                                                            alt="<?= get_field('arrow_btn')['title'] ?>"
                                                            style="width:12px; height:18px; object-fit:cover;">
                                                    </a>
                                                    <span class="d-md-inline"
                                                        style="color: var(--Secondary-400, #FFF);font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 600;line-height: 15.6px">Learn
                                                        more</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- here -->
                    </div>
                </div>
            </div>
            <!-- Img under the container -->
            <div class=" col-12 col-lg-12 img-container" style="">
                <img src="<?= get_field("bg_img")['url'] ?>" alt="<?= get_field("bg_img")['title'] ?>" class="bg_img"
                    style=" height: ;border-radius:40px; object-fit:cover" />
            </div>
        </div>
        <!-- Img under the container -->
        <!-- <div class=" col-12 col-lg-12 img-container" style="">
            <img src="<?= get_field("bg_img")['url'] ?>" alt="<?= get_field("bg_img")['title'] ?>" class="bg_img"
                style=" height: ;border-radius:40px; object-fit:cover" />
        </div> -->





        <!-- Outcome Testimonials Section on Small Screens -->
        <div class="container">
            <div class="row d-flex flex-column align-items-center justify-content-center d-md-none d-lg-none"
                style="margin-top:-163px;">
                <?php
                $delay = 0;
                $posts = get_posts([
                    'post_type' => 'outcome_stories',
                    'numberposts' => -1,
                    "order" => 'asc'
                ]);

                foreach ($posts as $post) {
                    $fields = get_fields($post->ID);
                    $testimonial = get_field("testimonialssection");
                    ?>
                <a href="<?= get_permalink($post) ?>">
                    <div class="testimonial h-100"
                        style="border-radius:15px; background-color:#FFF; width:350px; height:193px; margin:15px 0; padding: 20px;"
                        data-aos="fade-up" data-aos-delay="<?= $delay ?>" data-aos-duration="800">
                        <div style="margin:0 0 2px 0 ; display: flex;align-items: center;gap:8px;">
                            <span
                                style="color: #E94271;font-family: Manrope;font-size: 14px;font-style: normal;font-weight: 700;line-height: 23.8px; font-family: Manrope;">
                                <?= $testimonial["num"] ?>
                            </span>
                            <span
                                style="font-size: 14px;font-style: normal;font-weight: 700;line-height: 23.8px; color:#6A7291;font-family: Manrope;">
                                <?= $post->post_title ?>
                            </span>
                        </div>
                        <div class="d-flex justify-content-between ">
                            <h1
                                style="color:#25325F; font-size:18px; font-weight:700; line-height:27px; font-family:Manrope; ">
                                <?= $testimonial["maintitle"] ?>
                            </h1>
                            <a style="border-radius:8px; background-color:#274083; height:30px; width:30px;"
                                class="d-flex justify-content-center align-items-center" href="#">

                                <img src="<?= get_template_directory_uri() ?>/images/arrowbtn.svg"
                                    alt="go to outcome stories" style="width: 12px; height: 18px; margin: 7px 0"
                                    class="icon" />
                            </a>

                        </div>
                        <div style=" border-bottom: 0.5px solid  #25325F; margin:15px 1px;"></div>
                        <p class=""
                            style="font-size:13px; font-style:normal; font-weight:500; line-height:22px; color:#6A7291; padding: ; font-family: Manrope; text-align: left;  ">
                            <?= $testimonial["text"] ?>
                        </p>
                    </div>
                </a>

                <?php
                    $delay += 300;
                }
                ?>
            </div>
        </div>




        <!-- Outcome_Stories  on Lg and MD Screens-->
        <div class="container" id="testimonials" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
            data-aos-duration="1000" data-aos-easing="ease-in-out">
            <div class="row  d-none d-md-flex d-lg-flex container2 ">
                <?php
                $delay = 0;
                $posts = get_posts([
                    'post_type' => 'outcome_stories',
                    'numberposts' => -1,
                    "order" => 'asc'
                ]);

                foreach ($posts as $post) {
                    $fields = get_fields($post->ID);
                    $testimonial = get_field("testimonialssection");
                    ?>
                <div class="col-lg-4 col-md-4 col-12" data-aos="fade-up" data-aos-delay="<?= $delay ?>"
                    data-aos-duration="800">
                    <a href="<?= get_permalink($post) ?>">

                        <div class="testimonial-container h-100">

                            <div class="d-flex align-items-center" style=" margin-top:25px;padding:0 20px; gap:11px; ">
                                <span
                                    style="color:#E94271;font-family:Manrope;font-size:15px;font-style:normal;font-weight:700;line-height:27px;font-family: Manrope;">
                                    <?= $testimonial["num"] ?>
                                </span>
                                <span class="test-post-title"
                                    style="font-size: 14px;font-style: normal;font-weight: 700;line-height: 23.8px; color:#6A7291;font-family: Manrope;">
                                    <?= $post->post_title ?>
                                </span>
                            </div>

                            <span class="test-main-title">
                                <?= $testimonial["maintitle"] ?>
                            </span>


                            <div style=" border-bottom: 0.5px solid  #25325F; margin:30px 19px;"></div>

                            <span class="test-text">
                                <?= $testimonial["text"] ?>
                            </span>
                            <!-- View Button -->
                            <div class="d-flex flex-row align-items-center my-3 " style="padding: 0 17px;">
                                <button>
                                    <span class="circle blue-circle">
                                        <span class="d-flex justify-content-center align-items-center arrow">
                                            <img src="<?= get_template_directory_uri() ?>/images/arrowbtn.svg"
                                                alt="go to outcome stories"
                                                style="width: 12px; height: 18px; margin: 7px 0" class="icon" />
                                        </span>
                                    </span>
                                    <span class="button-text blue2">
                                        view
                                    </span>
                                </button>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                    $delay += 300;
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>


        <div class="mask-group container">

            <!--Sue_Partners Repeater  Swiper On Small -->
            <div class="partners" style="margin-top:47px; margin-bottom: 47px;">
                <div class="position-relative d-flex d-md-flex d-lg-none align-items-center  ">
                    <div class=" swiper2 mySwiper1 " style="flex-grow: 1;">
                        <div class="swiper-wrapper">
                            <?php

                            foreach (get_field("sue_partners") as $sue) {
                                ?>
                            <div class="swiper-slide d-flex justify-content-center align-items-center"
                                style="width:fit-content;">
                                <div>
                                    <div
                                        class="d-flex flex-row align-items-center justify-content-center gap-4 partners-container">
                                        <!-- justify-content-evenly -->
                                        <a href=" <?= $sue['sue_partners_link_url']['url'] ?>">
                                            <img src="<?= $sue['sue_partners_img']['url'] ?>"
                                                alt=" <?= $sue['sue_partners_img']['alt'] ?>" class="sue-img"
                                                style=" width:32px; height:19px; " />
                                        </a>
                                        <a style="border-radius:8px; height:; width:;display:flex; flex-direction: row; align-items: center;"
                                            href="">
                                            <img src="<?= $sue['sue_partners_link']['url'] ?>"
                                                alt=" <?= $sue['sue_partners_link']['alt'] ?>" class=""
                                                style="width:4px; height:8px; object-fit:cover " />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Sue_Partners Repeater On LG -->
            <div class="container">
                <div class="row d-none d-md-none d-lg-flex flex-row align-items-center justify-content-between"
                    style="margin-top:40px; margin-bottom:14px;">
                    <?php
                    foreach (get_field("sue_partners") as $sue) {
                        ?>
                    <div class="col-auto">
                        <a href=" <?= $sue['sue_partners_link_url']['url'] ?>">
                            <div style="border-radius:15px; height:99px; margin:35px 0;">
                                <div class="d-flex flex-row align-items-center justify-content-evenly "
                                    style="border-radius: 6px;border: 1px solid #CBCFDE;background:#EDF3F4;width: 165px;height: 61px; ">
                                    <img src="<?= $sue['sue_partners_img']['url'] ?>"
                                        alt=" <?= $sue['sue_partners_img']['alt'] ?>" class="sue-img"
                                        style="width:56px;height:33px;flex-shrink: 0; object-fit:content " />
                                    <img src="<?= $sue['sue_partners_link']['url'] ?>"
                                        alt=" <?= $sue['sue_partners_link']['alt'] ?>" class=""
                                        style="width:4px; height:8px; object-fit:content " />
                                </div>
                            </div>
                        </a>
                    </div>

                    <?php
                    }
                    ?>
                </div>
            </div>


            <!-- Client Story1 on Sm Screen replaced row-cols-lg-2 with row-cols-md-2 -->
            <div class="container d-block d-md-block d-lg-none">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <?php
                    $index = 0;
                    $delay = 0;
                    foreach (get_field("client_story") as $testimonial) {
                        $aos_effect = ($index % 2 === 0) ? "fade-right" : "fade-left";
                        ?>
                    <div class="col" data-aos="<?= $aos_effect ?>">
                        <div class="card  mb-3 d-flex flex-column align-items-center justify-content-center"
                            style="border-radius: 20px; border:1px solid #CBCFDE; background:#EDF3F4; padding: 15px 0; width: 100%; ">
                            <div class="row g-0 align-items-center">
                                <div class="  " style="padding: 0 15px;">
                                    <img src="<?= $testimonial['client_img']['url'] ?>"
                                        alt="<?= $testimonial['client_img']['alt'] ?>" class=" card-img-top"
                                        style="width:100%; max-width:; border-radius: 15px; height: 118px; object-fit: cover; padding: ; display: flex; align-items: center;" />
                                </div>
                                <div class="container">
                                    <div class="col-12 col-md-12 ">
                                        <div class="card-body"
                                            style="display:flex;align-items:flex-start ;justify-content: center; flex-direction: column; padding:1rem;">
                                            <div
                                                class="d-flex  align-items-center justify-content-left gap-3 mt-2 mb-2">
                                                <a class="client-btn"
                                                    href="<?= $testimonial['client_story_btn']['url'] ?>">
                                                    <span">
                                                        <?= $testimonial['client_story_btn']['title'] ?>
                                                        </span>
                                                </a>
                                                <span
                                                    style="color: #6A7291;font-family: Manrope;font-size: 14px;font-style: normal;font-weight: 700;line-height: 24px;">
                                                    <?= $testimonial["client_name"] ?>
                                                </span>
                                            </div>
                                            <span class=" mt-3"
                                                style=" color:#25325F; font-family:Manrope; font-size:17px; font-style: normal;font-weight: 700;line-height: 27px; width:291px;">
                                                <?= $testimonial["client_text"] ?>
                                                <a href="#">
                                                    <img src="<?= $testimonial['client_link']['url'] ?>"
                                                        alt="<?= $testimonial['client_link']['alt'] ?>"
                                                        style="width:4px; height:8px; object-fit:cover; margin-left:8px;" />
                                                </a>
                                            </span>
                                            <span class="mt-3"
                                                style="color: var(--Primary-600, #25325F);font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 500;line-height: 180%; text-align:left; width:288px;">
                                                <?= $testimonial["client_sub_text"] ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        $index++;
                        $delay += 300;
                    } ?>
                </div>
            </div>




            <!-- Client Story1 on Lg Screen -->
            <div class="container d-none d-md-none d-lg-block">
                <div class="row row-cols-1 row-cols-lg-2 g-4">
                    <?php
                    $index = 0;
                    $delay = 0;

                    foreach (get_field("client_story") as $testimonial) {
                        $aos_effect = ($index % 2 === 0) ? "fade-right" : "fade-left";
                        ?>
                    <div class="col-12 col-md-12 col-lg-6" data-aos="<?= $aos_effect ?>" data-aos-delay="<?= $delay ?>">
                        <div class="card client_card1 mb-3 d-flex flex-row align-items-center justify-content-center"
                            style="border-radius: 20px;border: 1px solid #CBCFDE;background:#EDF3F4;">
                            <div class="row g-0 align-items-center">
                                <div class=" col-4 ">
                                    <img src="<?= $testimonial['client_img']['url'] ?>"
                                        alt="<?= $testimonial['client_img']['alt'] ?>"
                                        class="client-img img-fluid rounded-start" />
                                </div>
                                <div class="col-8 col-md-7 col-lg-7">
                                    <div class="card-body">
                                        <div class="d-flex flex-row align-items-center justify-content-left gap-2">
                                            <a class="client-btn" href="<?= $testimonial['client_story_btn']['url'] ?>">
                                                <span>
                                                    <?= $testimonial['client_story_btn']['title'] ?>
                                                </span>
                                            </a>
                                            <h4 class="card-title">
                                                <?= $testimonial["client_name"] ?>
                                            </h4>
                                        </div>
                                        <h4 class="card-text mt-2">
                                            <?= $testimonial["client_text"] ?>
                                            <a href="#">
                                                <img src="<?= $testimonial['client_link']['url'] ?>"
                                                    alt="<?= $testimonial['client_link']['alt'] ?>"
                                                    style="width:4px; height:8px; object-fit:cover; margin-left:8px;" />
                                            </a>
                                        </h4>
                                        <span
                                            style="color: var(--Primary-600, #25325F);leading-trim: both;font-family: Manrope;font-size: 13px;font-style: normal;font-weight: 500;line-height:23.4px; ">
                                            <?= $testimonial["client_sub_text"] ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        $index++;
                        $delay += 500;
                    } ?>
                </div>
            </div>



        </div>


        <!-- The blue block container -->
        <div class="first-blue-block" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
            data-aos-duration="1000" data-aos-easing="ease-in-out">
            <div class="container">
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-lg-5  ">
                        <div class="left-column d-flex flex-column align-items-flex-start justify-content-left gap-4"
                            style="">
                            <span
                                style="background-color:#274083; width:fit-content;height:30px;border-radius:40px; color: #FFF;font-family:Manrope; font-size:14px;font-style:normal;font-weight:700;line-height:24px; padding: 3px 15px;">
                                <?= get_field("sub_title") ?>
                            </span>
                            <span class="blue_block_main_title" style="">
                                <?= get_field("main_title_1") ?>
                                <!-- <span><?= get_field("blue_block_main_title_pink_word") ?></span> -->
                            </span>
                            <span class="blue_block_text" style="">
                                <?= get_field("text") ?>
                            </span>
                            <!-- schedule_link -->
                            <div class=" d-flex flex-row align-items-center justify-content-left gap-3 mt-4  letstalk-btn"
                                style="height:42px; padding:12px 15px; border-radius:8px; background:#E94271;width: fit-content; ">
                                <a href="#" class="d-flex justify-content-center align-items-center">
                                    <img src="<?= get_field("schedule_link")['url'] ?>"
                                        alt="<?= get_field("schedule_link")['alt'] ?>"
                                        style="width:12px; height:18px; margin:7px 0;" />
                                </a>
                                <span
                                    style="font-family:Manrope; font-size:13px; font-style: normal; font-weight: 600; line-height:15.6px; color:#FFF;;">
                                    <?= get_field("schedule_text") ?>
                                </span>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-1"></div>

                    <!-- Right Column First one -->
                    <div class="col-lg-3 d-none d-md-none d-lg-flex">
                        <div class="container">

                            <div class="row  d-flex flex-cloumn align-items-center justify-content-between gap-4"
                                style=" margin-top:103px; margin-bottom:103px;">
                                <?php
                                foreach (get_field("testimonails_section") as $testimonails) {
                                    ?>
                                <div class=""
                                    style="border-radius:15px; width:261px; height:168px; margin:0px 0 40px 0;">
                                    <div class="d-flex flex-row align-items-center justify-content-between">
                                        <div class="d-flex flex-row align-items-center justify-content-around gap-3">
                                            <span
                                                style="color: #E94271;font-family Manrope; font-size:15px;font-style:normal;font-weight:600;line-height:27px;">
                                                <?= $testimonails["num"] ?>
                                            </span>
                                            <span
                                                style="color: var(--Neutral-400, #9AA0B7);font-family: Manrope; font-size: 15px;font-style: normal;font-weight: 600;line-height: 27px;">
                                                <?= $testimonails["title"] ?>

                                            </span>
                                        </div>

                                    </div>
                                    <div style="margin:12px 0">
                                        <span
                                            style="color: #FFF;font-family:Manrope; font-size:19px;font-style: normal;font-weight: 700;line-height: 33.6px;">
                                            <?= $testimonails["text"] ?>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-row align-items-center  gap-3">
                                        <button>
                                            <!-- class="btn" -->
                                            <span class="circle blue-circle">
                                                <a href="#"
                                                    class="d-flex justify-content-center align-items-center  arrow"
                                                    href="#">
                                                    <img src="<?= $testimonails['link']['url'] ?>"
                                                        alt=" <?= $testimonails['link']['alt'] ?>" class=""
                                                        style="width:12px; height: 18px; margin:7px 0;" class="icon" />
                                                </a>
                                            </span>
                                            <span class="button-text blue">Read More</span>
                                        </button>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>

                            </div>
                        </div>
                    </div>

                    <!-- Right Column Second one -->
                    <div class="col-lg-3 d-none d-md-none d-lg-flex">
                        <div class="container">
                            <div class="row  d-flex flex-cloumn align-items-center justify-content-between gap-4"
                                style=" margin-top:103px; margin-bottom:103px;">
                                <?php
                                foreach (get_field("testimonails_section_right") as $testimonails) {
                                    ?>
                                <div class=""
                                    style="border-radius:15px;  width:261px; height:168px; margin:0px 0 40px 0;">
                                    <div class="d-flex flex-row align-items-center justify-content-between">
                                        <div class="d-flex flex-row align-items-center justify-content-around gap-3">
                                            <span
                                                style="color:  #E94271;font-family:Manrope; font-size:15px; font-style: normal;font-weight: 600;line-height: 27px ">
                                                <?= $testimonails["num"] ?>
                                            </span>
                                            <span
                                                style="color: #9AA0B7;font-family:Manrope; font-size:15px; font-style: normal;font-weight: 600;line-height: 27px;">
                                                <?= $testimonails["title"] ?>

                                            </span>
                                        </div>
                                    </div>

                                    <div style="margin:12px 0">
                                        <span
                                            style="color: #FFF;font-family: Manrope; font-size:19px;font-style: normal;font-weight: 700;line-height: 33.6px;">
                                            <?= $testimonails["text"] ?>
                                        </span>
                                    </div>

                                    <div class="d-flex flex-row align-items-center  gap-3">
                                        <button>
                                            <!-- class="btn" -->
                                            <span class="circle blue-circle">
                                                <a href="#"
                                                    class="d-flex justify-content-center align-items-center  arrow"
                                                    href="#">
                                                    <img src="<?= $testimonails['link']['url'] ?>"
                                                        alt=" <?= $testimonails['link']['alt'] ?>" class=""
                                                        style="width:12px; height: 18px; margin:7px 0;" class="icon" />
                                                </a>
                                            </span>
                                            <span class="button-text blue">Read More</span>
                                        </button>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>



                    <!-- Here for test on md  -->

                    <!-- Combined Items for Medium Screens -->
                    <div class="col-md-12 d-none d-md-block d-lg-none" style="margin-top:160px;">
                        <div class="row d-flex flex-wrap gap- justify-content-center align-items-center">
                            <?php
                            $all_testimonials = array_merge(get_field("testimonails_section"), get_field("testimonails_section_right"));
                            usort($all_testimonials, function ($a, $b) {
                                return $a["num"] <=> $b["num"];
                            });
                            foreach ($all_testimonials as $testimonial) {
                                ?>
                            <div class="col-md-4 d-flex flex-column  justify-content-start">


                                <div class="d-flex flex-row  justify-content-between">
                                    <div class="d-flex flex-row  justify-content-around gap-3">
                                        <span
                                            style="color:  #E94271;font-family:Manrope; font-size:15px; font-style: normal;font-weight: 600;line-height: 27px ">
                                            <?= $testimonial["num"] ?>
                                        </span>
                                        <span
                                            style="color: #9AA0B7;font-family:Manrope; font-size:15px; font-style: normal;font-weight: 600;line-height: 27px;">
                                            <?= $testimonial["title"] ?>

                                        </span>
                                    </div>
                                </div>
                                <div style="margin:12px 0">
                                    <span
                                        style="color: #FFF;font-family: Manrope; font-size:19px;font-style: normal;font-weight: 700;line-height: 33.6px;">
                                        <?= $testimonial["text"] ?>
                                    </span>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                    <!-- End of  test on md -->

                    <!-- Left columns Repeater  Swiper -->
                    <div class="left-columns-repeater-swiper" style="">
                        <div class="position-relative d-flex d-md-none d-lg-none align-items-center  ">

                            <!-- Swiper block on the big blue background -->
                            <div class="swiper mySwiper2" style="flex-grow: 1;">
                                <div class="swiper-wrapper swiper_block">
                                    <?php
                                    $testimonails_left = get_field("testimonails_section");
                                    $testimonails_right = get_field("testimonails_section_right");

                                    // Testimonails merged
                                    $merged_testimonails = array_merge($testimonails_left, $testimonails_right);

                                    // Arrange the elements if each elements has number
                                    usort($merged_testimonails, function ($a, $b) {
                                        return $a['num'] - $b['num'];
                                    });

                                    // Display elements
                                    foreach ($merged_testimonails as $testimonails) {
                                        ?>
                                    <div class="swiper-slide d-flex align-items-center justify-content-center w-fit"
                                        style="width:fit-content;">
                                        <div
                                            style="border-radius:15px; background-color:white; width:350px;height:139px; margin:16px 10px;padding: 16px 10px;">
                                            <div class="d-flex flex-row align-items-center justify-content-between">
                                                <div
                                                    class="d-flex flex-row align-items-center justify-content-around gap-2">
                                                    <span
                                                        style="color:#E94271;font-family: Manrope; font-size: 15px;font-style: normal;font-weight: 600;line-height:27px;">
                                                        <?= $testimonails["num"] ?>
                                                    </span>
                                                    <span
                                                        style="color:#6A7291; font-family:Manrope; font-size: 14px;font-style: normal;font-weight: 700;line-height:23.8px;">
                                                        <?= $testimonails["title"] ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items gap-1">
                                                <span
                                                    style="color: #25325F; font-family: Manrope; font-size: 18px;font-style: normal;font-weight: 700;line-height: 27px; width: 86%;">
                                                    <?= $testimonails["text"] ?>
                                                </span>
                                                <a href="#"
                                                    style="border-radius:8px;background-color:#274083; height:30px; width:30px;"
                                                    class="d-flex justify-content-center align-items-center">
                                                    <img src="<?= $testimonails['link']['url'] ?>"
                                                        alt="<?= $testimonails['link']['alt'] ?>"
                                                        style="width:12px; height: 18px; margin:7px 0;" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="swiper-pagination1" style="position:relative;left: 42%;"></div>
                            </div>

                        </div>
                    </div>
                </div>





            </div>
        </div> <!-- End of The blue block -->




        <!-- SUE Insights -->
        <div class="container" style="margin-top:65px;">
            <div class="row">
                <div class="col-6 col-lg-6">
                    <span
                        style="color:#6A7291; font-family:Manrope; font-size:15px;font-style:normal;font-weight: 600;line-height:27px;">
                        <?= get_field("sue_insights") ?>
                    </span>
                </div>
                <div class="col-6 col-lg-6  d-block d-md-none d-lg-block">
                    <div class=" d-flex flex-row align-items-center justify-content-end gap-3">
                        <a href="#"
                            style="background-color:#E94271; height:30px; width:30px; border-radius:8px; background:#25325F;"
                            class="d-flex justify-content-center align-items-center">
                            <img src="<?= get_field("sue_insights_link")['url'] ?>"
                                alt="<?= get_field("sue_insights_link")['alt'] ?>"
                                style="width:12px; height:18px; margin:7px 0;" />
                        </a>
                        <span
                            style="color: #25325F;font-family:Manrope; font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px;">
                            <?= get_field("sue_insights_text") ?>
                        </span>
                    </div>
                </div>
            </div>

            <div style=" border-bottom:0.5px solid  #CBCFDE; margin:30px 0;"></div>
            <!-- End of SUE Insights -->



            <div class="row">
                <div class="col-12 col-lg-5 d-md-none d-flex d-lg-flex  mask-group ">
                    <!-- Client Story2  container-->
                    <div class="row ">
                        <!-- gy-2 -->
                        <div class="col-lg-5 col-md-8" style="margin-top:55px;">
                            <?php
                            $delay = 0;
                            foreach (get_field("article_testimonails") as $testimonial) {
                                ?>
                            <div class="col" data-aos="fade-right" data-aos-delay="<?= $delay ?>"
                                data-aos-duration="800">
                                <div class="card client_card2 mb-3 d-flex flex-row align-items-center ">
                                    <!-- justify-content-center -->
                                    <div class="row align-items-center">
                                        <div class="col-4 col-md-5 margin-class">
                                            <?php if (!empty($testimonial['video'])) { ?>
                                            <!-- Video Section -->
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="<?= $testimonial['video'] ?>"
                                                    allowfullscreen
                                                    style="width: 100%; height: 138px; border-radius: 15px;"></iframe>
                                            </div>
                                            <?php } elseif (!empty($testimonial['img']['url'])) { ?>
                                            <!-- Image Section -->
                                            <img src="<?= $testimonial['img']['url'] ?>"
                                                alt="<?= $testimonial['img']['alt'] ?>" class="card-img-top"
                                                style="width: 100%; border-radius: 15px; height: 138px; object-fit: cover;" />
                                            <?php } ?>
                                        </div>
                                        <div class="col-8 col-md-5 col-lg-6">
                                            <div class="" style="padding:;card-body">
                                                <div
                                                    class="d-flex flex-row align-items-center justify-content-left gap-3">
                                                    <a class="client2-btn" href="<?= $testimonial['btn']['url'] ?>">

                                                        <?= $testimonial['btn']['title'] ?>
                                                    </a>
                                                    <h4 class="card-title" style="">
                                                        <?= $testimonial["client_name"] ?>
                                                    </h4>
                                                </div>
                                                <h4 class="card-text mt-2"
                                                    style="color:#25325F;font-size: 15px;font-weight:600;line-height:27px;">
                                                    <?= $testimonial["text"] ?>
                                                    <a href="#">
                                                        <img src="<?= $testimonial['client_link']['url'] ?>"
                                                            alt="<?= $testimonial['client_link']['alt'] ?>" style="width:4px; height:8px; object-fit:cover;
                                                        margin-left:8px;" />
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                $delay += 300;
                            } ?>
                        </div>
                    </div>
                </div>



                <!-- Client Story2 on Sm and MS Screen replaced row-cols-lg-2 with row-cols-md-2 -->
                <div class="container d-none d-md-block d-lg-none">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <?php
                        $delay = 0;
                        foreach (get_field("article_testimonails") as $testimonial) {
                            ?>
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="<?= $delay ?>" data-aos-duration="800">
                            <div class="card mb-3 d-flex flex-column align-items-center justify-content-center"
                                style="border-radius: 20px; border:1px solid #CBCFDE; background:#EDF3F4; padding: 15px 0; width: 100%;">
                                <div class="row g-0 align-items-center">
                                    <div class="container" style="padding: 0 15px;">
                                        <?php if (!empty($testimonial['video'])) { ?>
                                        <!-- Video Section -->
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="<?= $testimonial['video'] ?>"
                                                allowfullscreen
                                                style="width: 100%; height: 138px; border-radius: 15px;"></iframe>
                                        </div>
                                        <?php } elseif (!empty($testimonial['img']['url'])) { ?>
                                        <!-- Image Section -->
                                        <img src="<?= $testimonial['img']['url'] ?>"
                                            alt="<?= $testimonial['img']['alt'] ?>" class="card-img-top"
                                            style="width: 100%; border-radius: 15px; height: 138px; object-fit: cover;" />
                                        <?php } ?>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="card-body" style="padding: 1rem;">
                                            <div class="d-flex align-items-center justify-content-left gap-3 mt-2 mb-2">
                                                <a class="client-btn" href="<?= $testimonial['btn']['url'] ?>">
                                                    <span><?= $testimonial['btn']['title'] ?></span>
                                                </a>
                                                <span
                                                    style="color: #6A7291;font-family: Manrope;font-size: 14px;font-style: normal;font-weight: 700;line-height: 24px;">
                                                    <?= $testimonial["client_name"] ?>
                                                </span>
                                            </div>
                                            <span class="mt-3"
                                                style="color:#25325F; font-family:Manrope; font-size:17px; font-style: normal;font-weight: 700;line-height: 27px; width:291px;">
                                                <?= $testimonial["text"] ?>
                                                <a href="#">
                                                    <img src="<?= $testimonial['client_link']['url'] ?>"
                                                        alt="<?= $testimonial['client_link']['alt'] ?>"
                                                        style="width:4px; height:8px; object-fit:cover; margin-left:8px;" />
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            $delay += 300;
                        } ?>
                    </div>
                </div>



                <div class="d-none d-md-none d-lg-block col-lg-2 ">

                </div>
                <div class="d-none d-md-none d-lg-block col-lg-1 ">
                    <div>
                        <!--Verticall line On Lg Screen  -->
                        <div class=" d-none d-lg-flex "
                            style=" width:1px; height:692px; background: #CBCFDE; position:relative; top:-27px;">
                        </div>
                    </div>
                </div>





                <!-- Right Column Knowledge And Resources -->
                <div class="d-none d-lg-none d-md-flex">
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <div class="d-flex flex-column align-items-flex-start justify-content-left gap-4"
                                style="margin-left:; color:#FFF; margin-top:60px; ">
                                <span
                                    style="background-color:#274083;width:203px;height:30px;border-radius:40px;color:#FFF;font-family:Manrope; font-size:13px;font-style:normal;font-weight:700;line-height:23.4px;text-align:center;padding:4px 0;margin-bottom:15px; ">
                                    <?= get_field("sub_title") ?>
                                </span>
                                <span class="main_title_knowledge" style="">
                                    <?= get_field("main_title_front_page") ?>

                                </span>
                                <span
                                    style="color:#6A7291;font-family:Manrope; font-size:16px;font-style:normal;font-weight:700;line-height:27.2px; margin-bottom:15px;">
                                    <?= get_field("text") ?>
                                </span>

                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-12 col-lg-6 col-md-12 resources" style="margin-top:40px;"
                                    data-aos="fade-left" data-aos-offset="100" data-aos-delay="50"
                                    data-aos-duration="1000" data-aos-easing="ease-in-out">

                                    <div style="border-bottom: 0.5px solid   #25325F; ">

                                        <div class=" d-flex flex-row align-items-center justify-content-between  gap-3 mt-4"
                                            style="margin:20px 0;">
                                            <span
                                                style="color: #25325F;font-family: Manrope; font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px;">
                                                <?= get_field("knowledge") ?>
                                            </span>
                                            <a href="#" class="d-flex justify-content-center align-items-center">
                                                <img src="<?= get_field("knowledge_link")['url'] ?>"
                                                    alt="<?= get_field("knowledge_link")['alt'] ?>"
                                                    style="width:4px; height:8px; object-fit:cover; margin-left:2px;" />
                                            </a>
                                        </div>

                                    </div>

                                    <div style="border-bottom: 0.5px solid  #25325F;">
                                        <div class=" d-flex flex-row align-items-center justify-content-between gap-3 mt-4"
                                            style="margin:20px 0;">
                                            <span
                                                style="color: #25325F;font-family: Manrope; font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px;">
                                                <?= get_field("client_stories") ?>
                                            </span>
                                            <a href="#" class="d-flex justify-content-center align-items-center">
                                                <img src="<?= get_field("client_stories_link")['url'] ?>"
                                                    alt="<?= get_field("client_stories_link")['alt'] ?>"
                                                    style="width:4px; height:8px; object-fit:cover; margin-left:2px;" />
                                            </a>
                                        </div>
                                    </div>

                                    <div style="border-bottom: 0.5px solid  #25325F;">
                                        <div class=" d-flex flex-row align-items-center justify-content-between gap-3 mt-4"
                                            style="margin:20px 0;">
                                            <span
                                                style="color: #25325F;font-family: Manrope; font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px;">
                                                <?= get_field("events") ?>
                                            </span>
                                            <a href="#" class="d-flex justify-content-center align-items-center">
                                                <img src="<?= get_field("events_link")['url'] ?>"
                                                    alt="<?= get_field("client_stories_link")['alt'] ?>"
                                                    style="width:4px; height:8px; object-fit:cover; margin-left:2px;" />
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12 col-lg-6 col-md-12 resources " data-aos="fade-left"
                                    data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
                                    data-aos-easing="ease-in-out">

                                    <div style="border-bottom: 0.5px solid  #25325F;">
                                        <div class=" d-flex flex-row align-items-center justify-content-between gap-3 mt-4"
                                            style="margin:20px 0;">
                                            <span
                                                style="color: #25325F;font-family: Manrope; font-size:13px;font-style: normal;font-weight: 600;line-height:15.6px;">
                                                <?= get_field("resources") ?>
                                            </span>
                                            <a href="#" class="d-flex justify-content-center align-items-center">
                                                <img src="<?= get_field("resources_link")['url'] ?>"
                                                    alt="<?= get_field("resources_link")['alt'] ?>"
                                                    style="width:4px; height:8px; object-fit:cover; margin-left:2px;" />
                                            </a>
                                        </div>
                                    </div>

                                    <div style="border-bottom: 0.5px solid  #25325F;">
                                        <div class=" d-flex flex-row align-items-center justify-content-between gap-3 mt-4"
                                            style="margin:20px 0;">
                                            <span
                                                style="color: #25325F;font-family: Manrope; font-size: 13px;font-style: normal;font-weight: 600;line-height:15.6px;">
                                                <?= get_field("video") ?>
                                            </span>
                                            <a href="#" class="d-flex justify-content-center align-items-center">
                                                <img src="<?= get_field("videos_link")['url'] ?>"
                                                    alt="<?= get_field("videos_link")['alt'] ?>"
                                                    style="width:4px; height:8px; object-fit:cover; margin-left:2px;" />
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-12  col-lg-4 d-md-none d-lg-block" data-aos="fade-left" data-aos-offset="100"
                    data-aos-delay="50" data-aos-duration="1000">

                    <div class="d-flex flex-column align-items-flex-start justify-content-left gap-4"
                        style="margin-left:; color:#FFF; margin-top:60px; ">
                        <span
                            style="background-color:#274083;width:254px;height:30px;border-radius:40px;color:#FFF;font-family:Manrope; font-size:13px;font-style:normal;font-weight:700;line-height:23.4px;text-align:center;padding:4px 0;margin-bottom:15px; ">
                            <?= get_field("sub_title") ?>
                        </span>
                        <span class="main_title_knowledge" style="">
                            <?= get_field("main_title_front_page") ?>

                        </span>
                        <span
                            style="color:#6A7291;font-family:Manrope; font-size:16px;font-style:normal;font-weight:700;line-height:27.2px; margin-bottom:25px;">
                            <?= get_field("text") ?>
                        </span>

                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-6 col-md-8 resources" style="margin-top:;">

                            <div style="border-bottom: 0.5px solid   #25325F; ">

                                <div class=" d-flex flex-row align-items-center justify-content-between  gap-3 mt-4"
                                    style="margin:20px 0;">
                                    <span class="knowledge-links">
                                        <?= get_field("knowledge") ?>
                                    </span>
                                    <a href="#" class="d-flex justify-content-center align-items-center">
                                        <img src="<?= get_field("knowledge_link")['url'] ?>"
                                            alt="<?= get_field("knowledge_link")['alt'] ?>"
                                            style="width:4px; height:8px; object-fit:cover; margin-left:2px;" />
                                    </a>
                                </div>

                            </div>

                            <div style="border-bottom: 0.5px solid  #25325F;">
                                <div class=" d-flex flex-row align-items-center justify-content-between gap-3 mt-4"
                                    style="margin:20px 0;">
                                    <span class="knowledge-links">
                                        <?= get_field("client_stories") ?>
                                    </span>
                                    <a href="#" class="d-flex justify-content-center align-items-center">
                                        <img src="<?= get_field("client_stories_link")['url'] ?>"
                                            alt="<?= get_field("client_stories_link")['alt'] ?>"
                                            style="width:4px; height:8px; object-fit:cover; margin-left:2px;" />
                                    </a>
                                </div>
                            </div>

                            <div style="border-bottom: 0.5px solid  #25325F;">
                                <div class=" d-flex flex-row align-items-center justify-content-between gap-3 mt-4"
                                    style="margin:20px 0;">
                                    <span class="knowledge-links">
                                        <?= get_field("events") ?>
                                    </span>
                                    <a href="#" class="d-flex justify-content-center align-items-center">
                                        <img src="<?= get_field("events_link")['url'] ?>"
                                            alt="<?= get_field("client_stories_link")['alt'] ?>"
                                            style="width:4px; height:8px; object-fit:cover; margin-left:2px;" />
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div class="col-12 col-lg-6 col-md-8 resources " style="margin-top:;">

                            <div style="border-bottom: 0.5px solid  #25325F;">
                                <div class=" d-flex flex-row align-items-center justify-content-between gap-3 mt-4"
                                    style="margin:20px 0;">
                                    <span class="knowledge-links">
                                        <?= get_field("resources") ?>
                                    </span>
                                    <a href="#" class="d-flex justify-content-center align-items-center">
                                        <img src="<?= get_field("resources_link")['url'] ?>"
                                            alt="<?= get_field("resources_link")['alt'] ?>"
                                            style="width:4px; height:8px; object-fit:cover; margin-left:2px;" />
                                    </a>
                                </div>
                            </div>

                            <div style="border-bottom: 0.5px solid  #25325F;">
                                <div class=" d-flex flex-row align-items-center justify-content-between gap-3 mt-4"
                                    style="margin:20px 0;">
                                    <span class="knowledge-links">
                                        <?= get_field("video") ?>
                                    </span>
                                    <a href="#" class="d-flex justify-content-center align-items-center">
                                        <img src="<?= get_field("videos_link")['url'] ?>"
                                            alt="<?= get_field("videos_link")['alt'] ?>"
                                            style="width:4px; height:8px; object-fit:cover; margin-left:2px;" />
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- End of Client Story2 and Right column -->
        </div> <!-- End of container div -->




        <div>
            <!-- responsive-container With banks Block class="container" -->
            <div class="row">
                <div class="responsive-container">
                    <img src="<?= get_field("sue_customers_bg")['url'] ?>"
                        alt="<?= get_field("sue_customers_bg")['alt'] ?>" class="background-image" />
                    <div class="overlay" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <span
                            style="display: flex;justify-content: left;align-items: flex-start;text-align: left; margin-right: 118px;">
                            <span class="sub-title"><?= get_field("sue_title") ?></span>
                        </span>
                        <span class="main-title"><?= get_field("sue_main_title") ?></span>
                        <div class="row" style="margin-top: 27px;">
                            <div class="icon-container col-12 col-lg-12">
                                <img src="<?= get_field("rabobank_icon")['url'] ?>"
                                    alt="<?= get_field("rabobank_icon")['alt'] ?>" class="icon" />
                                <img src="<?= get_field("bol_icon")['url'] ?>" alt="<?= get_field("bol_icon")['alt'] ?>"
                                    class="icon" />
                            </div>
                        </div>
                        <div class="icon-container">
                            <img src="<?= get_field("kpn_icon")['url'] ?>" alt="<?= get_field("kpn_icon")['alt'] ?>"
                                class="icon" />
                            <img src="<?= get_field("booking_icon")['url'] ?>"
                                alt="<?= get_field("booking_icon")['alt'] ?>" class="icon" />
                        </div>
                    </div>

                    <div class="overlay2" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">

                        <span class="sub-title"><?= get_field("sue_title") ?></span>
                        <span class="main-title"><?= get_field("sue_main_title") ?></span>

                        <div class="row">
                            <div class="icon-container col-12 col-lg-12">
                                <img src="<?= get_field("rabobank_icon")['url'] ?>"
                                    alt="<?= get_field("rabobank_icon")['alt'] ?>" class="icon" />
                                <img src="<?= get_field("bol_icon")['url'] ?>" alt="<?= get_field("bol_icon")['alt'] ?>"
                                    class="icon" />
                            </div>
                        </div>
                        <div class="icon-container">
                            <img src="<?= get_field("kpn_icon")['url'] ?>" alt="<?= get_field("kpn_icon")['alt'] ?>"
                                class="icon" />
                            <img src="<?= get_field("booking_icon")['url'] ?>"
                                alt="<?= get_field("booking_icon")['alt'] ?>" class="icon" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of responsive-container With banks Block -->




            <!-- New Section With Swiper On Right Side -->
            <div class="container">
                <!-- margin-top:60px; -->
                <div class="row">
                    <!-- Left Section -->
                    <div class="col-12 col-lg-5 order-2 order-lg-1 custom-video" data-aos="fade-right"
                        data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                        <img src="<?= get_field("left_img")['url'] ?>" alt="<?= get_field("left_img")['alt'] ?>"
                            style="max-width:; max-height:412px; border-radius: 25px; object-fit:cover" />

                    </div>
                    <!-- Right Section -->
                    <div class="col-12 col-lg-7 right_section order-1 order-lg-2" data-aos="fade-left"
                        data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                        <div class="custom-container" style="">
                            <div class="custom-pagination">
                                <div class="d-flex d-md-none d-lg-none justify-content-left">
                                    <a href="#" id="prevBtn"
                                        style=" height:30px; width:30px; border-radius:8px; border: 1px solid #6A7291;"
                                        class="d-flex justify-content-center align-items-center">
                                        <img src="<?= get_field("prev_btn")['url'] ?>"
                                            alt="<?= get_field("prev_btn")['title'] ?>"
                                            style="width:12px; height:18px; margin:7px 0; object-fit:cover" />
                                    </a>
                                </div>


                                <div class="d-flex align-items-center gap-1">
                                    <div class="custom-number active" data-index="0">
                                        1
                                        <span class="custom-title">Mi vel turpis vitae mi a id
                                            vitae</span>
                                    </div>
                                    <div class="custom-number" data-index="1">2

                                        <span class="custom-title">Vel turpis lacus vitae mi mollis</span>
                                    </div>
                                    <div class="custom-number" data-index="2">3

                                        <span class="custom-title">Turpis lacus vitae mi mollis volutpat</span>
                                    </div>
                                </div>

                                <div class="d-flex d-md-none d-lg-none justify-content-start">
                                    <a href="#" id="nextBtn"
                                        style=" height:30px; width:30px; border-radius:8px; border: 1px solid #6A7291;"
                                        class="d-flex justify-content-center align-items-center">
                                        <img src="<?= get_field("next_btn")['url'] ?>"
                                            alt="<?= get_field("next_btn")['title'] ?>"
                                            style="width:12px; height:18px; margin:7px 0; object-fit:cover " />
                                    </a>
                                </div>

                                <div class="d-none d-md-flex d-lg-flex align-items-center gap-4"
                                    style="justify-content: flex-end; width: 100%;">
                                    <div>
                                        <a href="#" id="prevBtn"
                                            style=" height:30px; width:30px; border-radius:8px; border: 1px solid #6A7291;"
                                            class="d-flex justify-content-center align-items-center">
                                            <img src="<?= get_field("prev_btn")['url'] ?>"
                                                alt="<?= get_field("prev_btn")['title'] ?>"
                                                style="width:12px; height:18px; margin:7px 0; object-fit:cover" />
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" id="nextBtn"
                                            style=" height:30px; width:30px; border-radius:8px; border: 1px solid #6A7291;"
                                            class="d-flex justify-content-center align-items-center">
                                            <img src="<?= get_field("next_btn")['url'] ?>"
                                                alt="<?= get_field("next_btn")['title'] ?>"
                                                style="width:12px; height:18px; margin:7px 0; object-fit:cover " />
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div style="border-bottom: 1px solid #CBCFDE; margin: 40px 0;"></div>

                            <div class="swiper sample-slider"
                                style="background-color:; width: 83%; margin: 0 ; overflow:hidden">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <span class="sample-slider-title">Mi vel turpis vitae mi a id vitae
                                            <strong>turpis lacus</strong>
                                            vitae mi mollis</span>
                                        <p style="margin-top:2rem; margin-bottom:2rem">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Nulla egestas, nisl
                                            posuere
                                            porttitor
                                            vulputate, felis orci venenatis nibh, ut diam ullamcorper sapien.
                                        </p>
                                        <div class=" d-flex flex-row align-items-center justify-content-start gap-3">
                                            <button>
                                                <!-- class="btn" -->
                                                <span class="circle blue-circle">
                                                    <a href="#"
                                                        class="d-flex justify-content-center align-items-center  arrow"
                                                        href="#">
                                                        <img src="<?= get_field("sue_insights_link")['url'] ?>"
                                                            alt=" <?= get_field("sue_insights_link")['alt'] ?>" class=""
                                                            style="width:12px; height: 18px; margin:7px 0;"
                                                            class="icon" />
                                                    </a>
                                                </span>
                                                <span class="button-text blue2">Buttom</span>
                                            </button>
                                        </div>

                                    </div>
                                    <div class="swiper-slide">
                                        <span class="sample-slider-title">Vel turpis lacus <strong>vitae mi</strong>
                                            mollis</span>
                                        <p style="margin-top:2rem; margin-bottom:2rem">Lorem ipsum dolor sit amet,
                                            consectetur
                                            adipiscing elit. Nulla egestas, nisl posuere
                                            porttitor
                                            vulputate, felis orci venenatis nibh, ut diam ullamcorper sapien.
                                        </p>

                                        <div class="d-flex flex-row align-items-center justify-content-start gap-3">
                                            <button>
                                                <!-- class="btn" -->
                                                <span class="circle blue-circle">
                                                    <a href="#"
                                                        class="d-flex justify-content-center align-items-center  arrow"
                                                        href="#">
                                                        <img src="<?= get_field("sue_insights_link")['url'] ?>"
                                                            alt=" <?= get_field("sue_insights_link")['alt'] ?>" class=""
                                                            style="width:12px; height: 18px; margin:7px 0;"
                                                            class="icon" />
                                                    </a>
                                                </span>
                                                <span class="button-text blue2">Buttom</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <span class="sample-slider-title">Turpis lacus <strong>vitae mi</strong> mollis
                                        </span>
                                        <p style="margin-top:2rem; margin-bottom:2rem">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Nulla egestas, nisl
                                            posuere
                                            porttitor
                                            vulputate, felis orci venenatis nibh, ut diam ullamcorper sapien.
                                        </p>

                                        <div class="d-flex flex-row align-items-center justify-content-start  gap-3">
                                            <button>
                                                <!-- class="btn" -->
                                                <span class="circle blue-circle">
                                                    <a href="#"
                                                        class="d-flex justify-content-center align-items-center  arrow"
                                                        href="#">
                                                        <img src="<?= get_field("sue_insights_link")['url'] ?>"
                                                            alt=" <?= get_field("sue_insights_link")['alt'] ?>" class=""
                                                            style="width:12px; height: 18px; margin:7px 0;"
                                                            class="icon" />
                                                    </a>
                                                </span>
                                                <span class="button-text blue2">Buttom</span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of  New Section With Swiper On Right Side -->
            </div> <!-- End of the Container -->



            <!-- Form Section container  -->
            <?php get_template_part('components/form') ?>
            <!-- End of Form Section -->

            <!-- New Section -->



            <!-- End of the first bg-color -->
        </div>






        <!-- ------------------------------------------------------------------- -->


        <!-- swiper-container-->

        <script>
        let swiper1 = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false, // Ensure autoplay resumes after interaction
            },
            pagination: {
                el: document.querySelector('.swiper-pagination2'),

                clickable: true,
            },
        });

        // Stop autoplay on hover and resume on unhover
        const swiperContainer = document.querySelector('.swiper-container');

        swiperContainer.addEventListener('mouseenter', () => {
            swiper1.autoplay.stop();
        });

        swiperContainer.addEventListener('mouseleave', () => {
            swiper1.autoplay.start();
        });
        </script>




        <!--  mySwiper1 -->
        <script>
        let swiper2 = new Swiper('.mySwiper1', {
            slidesPerView: 2.1,
            grabCursor: true,
            spaceBetween: 1,

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {

                360: {
                    slidesPerView: 3.2,
                    spaceBetween: 1,

                },

                540: {
                    slidesPerView: 4.2,
                    spaceBetween: 1,

                },

                556: {
                    slidesPerView: 6,


                    spaceBetween: 1,
                },
                992: {

                    slidesPerView: 3.9,
                    spaceBetween: 0,
                }


            }
        })
        </script>



        <!--  mySwiper2 -->

        <script>
        let swiper3 = new Swiper('.mySwiper2', {
            slidesPerView: 1.1,
            grabCursor: true,
            spaceBetween: 1,

            pagination: {
                el: '.swiper-pagination1',
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {


                350: {
                    slidesPerView: 1.1,
                    spaceBetween: 0,

                },

                540: {
                    slidesPerView: 1.2,
                    spaceBetween: 2,

                },

                556: {
                    slidesPerView: 2.2,


                    spaceBetween: 2,
                },
                992: {

                    slidesPerView: 3.5,
                    spaceBetween: 0,
                }


            }
        })
        </script>





        <script>
        document.addEventListener("DOMContentLoaded", function() {
            const swiper = new Swiper('.sample-slider', {
                loop: false,
                navigation: {
                    nextEl: "#nextBtn",
                    prevEl: "#prevBtn",
                },

            });

            // Custom Pagination
            const numbers = document.querySelectorAll('.custom-number');
            numbers.forEach((number, index) => {
                number.addEventListener('click', () => {
                    // Remove active class from all numbers
                    numbers.forEach(num => num.classList.remove('active'));

                    // Add active class to clicked number
                    number.classList.add('active');

                    // Slide to the corresponding index
                    swiper.slideTo(index);
                });
            });

            // Update custom pagination on slide change
            swiper.on('slideChange', function() {
                const activeIndex = swiper.activeIndex;
                numbers.forEach(num => num.classList.remove('active'));
                numbers[activeIndex].classList.add('active');
            });
        });
        </script>
</main>

<?php get_footer() ?>