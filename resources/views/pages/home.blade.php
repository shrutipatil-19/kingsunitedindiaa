@extends('layout.app')

@section('content')
<main>
    <!-- <div class="container-bg">
            <div class="circle" style="--i:0;"></div>
            <div class="circle" style="--i:1;"></div>
            <div class="circle" style="--i:2;"></div>
            <div class="circle" style="--i:3;"></div>
            <div class="circle" style="--i:4;"></div>
            <div class="circle" style="--i:5;"></div>
            <div class="circle" style="--i:6;"></div>
            <div class="circle" style="--i:7;"></div>
            <div class="circle" style="--i:8;"></div>
            <div class="circle" style="--i:9;"></div>
            <div class="circle" style="--i:10;"></div>
            <div class="circle" style="--i:11;"></div>
            <div class="circle" style="--i:12;"></div>
            <div class="circle" style="--i:13;"></div>
            <div class="circle" style="--i:14;"></div>
            <div class="circle" style="--i:15;"></div>
            <div class="circle" style="--i:16;"></div>
            <div class="circle" style="--i:17;"></div>
            <div class="circle" style="--i:18;"></div>
            <div class="circle" style="--i:19;"></div>
            <div class="circle" style="--i:20;"></div>
        </div> -->
        {{-- dsf --}}
    <section class="ms-banner2-area fix corousel-section-main d-none">
        <div class="container">
            <div class="carousel carousel-section ms-banner2-area fix ms-banner2-height pt-80">
                <div class="list">

                    <div class="item">
                        <img src="{{ asset('assets/img/course/bg.png') }}">
                        <div class="introduce">
                            <div class="title">
                                <h2 class="ms-event-title text-black-custome mt-1 mb-3 fs-3">Hip Hop</h2>
                            </div>
                            <!-- <div class="topic">Aerphone hello</div> -->
                            <div class="des">
                                <!-- 20 lorem -->
                                <p>
                                    A core style at Kings, focusing on rhythm, grooves, and street-style movements. It’s
                                    energetic and expressive, forming the base of many of their routines.</p>

                            </div>

                            <div class="trending-btn d-flex">
                                <a class="border__btn zindex-5 seeMore">View More</a>
                            </div>
                        </div>
                        <div class="detail">
                            <div class="title">
                                <h2 class="ms-event-title text-black-custome mt-1 mb-3 fs-3">Hip Hop</h2>
                            </div>
                            <div class="des">
                                <!-- lorem 50 -->
                                <p>
                                    A core style at Kings, focusing on rhythm, grooves, and street-style movements. It’s
                                    energetic and expressive, forming the base of many of their routines.</p>
                            </div>
                            <div class="specifications">
                                <div>
                                    <p>Used Time</p>
                                    <p>6 hours</p>
                                </div>
                                <div>
                                    <p>Charging port</p>
                                    <p>Type-C</p>
                                </div>
                                <div>
                                    <p>Compatible</p>
                                    <p>Android</p>
                                </div>
                                <div>
                                    <p>Bluetooth</p>
                                    <p>5.3</p>
                                </div>

                            </div>
                            <div class="checkout">
                                <button>Apply Now</button>

                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{ asset('assets/img/course/bg.png') }}">
                        <div class="introduce">
                            <div class="title">
                                <h2 class="ms-event-title text-black-custome mt-1 mb-3 fs-3">Bollywood Fusion</h2>
                            </div>
                            <!-- <div class="topic">Aerphone vjvjck</div> -->
                            <div class="des">
                                <!-- 20 lorem -->
                                <p>
                                    A vibrant mix of Bollywood dance with modern styles like hip hop or contemporary,
                                    often used in performances to connect with Indian culture.</p>
                            </div>
                            <div class="trending-btn d-flex">
                                <a class="border__btn zindex-5 seeMore">View More</a>
                            </div>
                        </div>
                        <div class="detail">
                            <div class="title">
                                <h2 class="ms-event-title text-black-custome mt-1 mb-3 fs-3">Bollywood Fusion</h2>
                            </div>
                            <div class="des">
                                <!-- lorem 50 -->
                                <p>
                                    A vibrant mix of Bollywood dance with modern styles like hip hop or contemporary,
                                    often used in performances to connect with Indian culture.</p>
                            </div>
                            <div class="specifications">
                                <div>
                                    <p>Used Time</p>
                                    <p>6 hours</p>
                                </div>
                                <div>
                                    <p>Charging port</p>
                                    <p>Type-C</p>
                                </div>
                                <div>
                                    <p>Compatible</p>
                                    <p>Android</p>
                                </div>
                                <div>
                                    <p>Bluetooth</p>
                                    <p>5.3</p>
                                </div>

                            </div>
                            <div class="checkout">
                                <button>Apply Now</button>
                                <!-- <button>CHECKOUT</button> -->
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{ asset('assets/img/course/bg.png') }}">
                        <div class="introduce">

                            <div class="title">
                                <h2 class="ms-event-title text-black-custome mt-1 mb-3 fs-3">Contemporary</h2>
                            </div>
                            <!-- <div class="topic">Aerphone</div> -->
                            <div class="des">
                                <!-- 20 lorem -->
                                <p>
                                    Known for its emotion-driven movement, this style uses fluid body motion, floor
                                    work, and expression to tell powerful stories.</p>
                            </div>
                            <div class="trending-btn d-flex">
                                <a class="border__btn zindex-5 seeMore">View More</a>
                            </div>
                        </div>
                        <div class="detail">
                            <div class="title">
                                <h2 class="ms-event-title text-black-custome mt-1 mb-3 fs-3">Contemporary</h2>
                            </div>
                            <div class="des">
                                <!-- lorem 50 -->
                                <p>
                                    Known for its emotion-driven movement, this style uses fluid body motion, floor
                                    work, and expression to tell powerful stories.</p>
                            </div>
                            <div class="specifications">
                                <div>
                                    <p>Used Time</p>
                                    <p>6 hours</p>
                                </div>
                                <div>
                                    <p>Charging port</p>
                                    <p>Type-C</p>
                                </div>
                                <div>
                                    <p>Compatible</p>
                                    <p>Android</p>
                                </div>
                                <div>
                                    <p>Bluetooth</p>
                                    <p>5.3</p>
                                </div>

                            </div>
                            <div class="checkout">
                                <button>Apply Now</button>
                                <!-- <button>CHECKOUT</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="arrows">
                    <button id="prev">
                        < </button>
                            <button id="next">></button>
                            <button id="back" class="d-none">See All &#8599</button>
                </div>
            </div>
        </div>

    </section>
    <!-- Banner Area Start Here  -->
    <section class="ms-banner2-area fix d-none">
        <div class="ms-banner2-wrap ms-banner2-height p-relative ms-bg custom-bg w-100"
            data-background="{{ asset('assets/img/kings img/banner/video_banner4.jpg') }}"
            style="background-image: url('{{ asset('assets/img/kings img/banner/video_banner4.jpg') }}');">
            <div class="ms-banner2-shape p-absolute"></div>
            {{-- <div class="ms-banner2-cover-img p-absolute custome-wh">
                <img src="{{ asset('assets/img/kings img/lion_logo.png') }}" alt="banner" class="w-100 h-100" style="object-fit: contain;">
        </div> --}}
        {{-- <h2 class="ms-banner2-title">Musicly</h2> --}}
        <div class="ms-banner2-video mb-10">
            <a href="https://www.youtube.com/watch?v=_7oTMDqV3ew" class="popup-video ms-banner2-video-btn">
                <img class="ms-rotation-360" src="{{ asset('assets/img/banner/banner-border.png') }}"
                    alt="banner">
                <span>play</span>
            </a>
        </div>
        </div>
    </section>
    <section class="ms-banner2-area ms-bg-2 fix video">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <video class="w-100 h-auto" loop autoplay muted playsinline preload="auto"
                        poster="{{ asset('assets/img/kings img/banner/video_banner4.jpg') }}">
                        <source src="{{ asset('assets/video/kings video.mp4') }}">
                    </video>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End Here  -->
    <style>
        .ele2 {
            position: absolute;
            top: 16%;
            right: 0%;
            opacity: 0.9 !important;
            transform: rotateY(180deg) !important;
        }

        .ele2 img {
            width: calc(100% - 340px);
            height: 100%;
            object-fit: cover;
            /* mix-blend-mode: luminosity; */
        }

        /* .work__content-wrapper.ele2::before {
            content: '';
            position: absolute;
            top: 0;
            left: 20%;
            width: 50%;
            height: 100%;
            background-image: url("{{ asset('assets/img/kings img/lion_logo.png')}}");
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0.2; 
            z-index: -1; 
        } */
    </style>
    <!-- about kings area start -->
    <section class="work__area pt-90 pb-60 ms-bg-2 p-relative overflow-hidden">
        <div class="ele2 aos-init aos-animate" data-aos="fade-right" data-aos-duration="2000" bis_skin_checked="1">
            <img src="{{ asset('assets/img/course/Layer8.png') }}" alt="">
        </div>

        <div class="container">
            <div class="row align-items-center bdFadeUp">
                <div class="col-xl-6">
                    <div class="work__thumb-wrapper zindex-1 p-relative mb-60 d-inline-block" data-aos="fade-right"
                        data-aos-delay="100" data-aos-duration="800">
                        <div class="work__thumb-inner p-relative zindex-5">
                            <div class="work__thumb m-img">
                                <img src="{{ asset('assets/img/kings img/about1.jpg') }}" alt="work image">
                            </div>
                        </div>
                        <div class="ms-work-round p-absolute zindex--1 d-none d-sm-block"></div>
                        <div class="ms-work-round p-absolute two zindex--1 d-none d-sm-block"></div>
                    </div>
                </div>
                <div class="col-xl-6 pl-30">
                    <div class="work__content-wrapper work__content-wrapper-space mb-70 p-relative">
                        <div class="section__title-wrapper kings mb-30 bd-title-anim">
                            <span class="section__subtitle">Kings United</span>
                            <!-- <h2 class="section__title two">
                                    The Kings: From <span class="text-bg">Dreamers</span> to <span class="text-bg">International</span>
                                    <span class="animated-underline active">Dance Champions</span>
                                </h2> -->
                            <!-- <h2 class="section__title two">
                                    The Kings: From Dreamers to International
                                    <span class="animated-underline active">Dance Champions</span>
                                </h2> -->
                            <h2 class="section__title two ">
                                The Story Behind
                                <span class="animated-underline active">the Crown</span>
                            </h2>
                        </div>
                        <div class="work__features-inner" data-aos="fade-up">
                            <p class="">What started in 2009 as a small team of passionate dancers has grown into a name known
                                around the world. From Mumbai to international stages, we’ve trained, performed, and
                                earned the title of world champions through hard work, discipline, and dedication to the
                                craft.</p>
                            <p class="">
                                Our studio is more than a training space. It is a place where dancers build strong
                                foundations, explore their style, and grow into confident performers. With expert-led
                                programs in hip-hop, contemporary, Bollywood, and classical Indian dance, we welcome
                                dancers of all levels to be part of our journey.</p>

                            <div class="work__features-bottom">
                                <div class="work__features-action">
                                    <div class="trending-btn d-flex">
                                        <a class="border__btn zindex-5" href="{{ route('theKings') }}"
                                            data-bs-toggle="modal" data-bs-target="#modal2020">View More</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- about kings area end -->

    <!-- Event Area Start Here  -->
    <section class="ms-event2-area include__bg zindex-1 p-relative pt-90 pb-90 bg-w-3">
        <div class="ele2 aos-init aos-animate" data-aos="fade-right" data-aos-duration="2000" bis_skin_checked="1">
            <img src="{{ asset('assets/img/course/Layer6.png') }}" alt="">
        </div>
        <!-- text -->
        <div class="ele2-text aos-init aos-animate" data-aos="fade-right" data-aos-duration="2000" bis_skin_checked="1">
            <h2 class="">THE <br> KINGS</h2>
        </div>
        <!-- <div class="ms-overlay ms-overlay1 zindex--1"></div> -->
        <div class="container">
            <div class="row justify-content-center mb-25 bdFadeUp">
                <div class="col-xl-6">
                    <div class="ms-event2-top text-center">

                        <div class="section__title-wrapper mb-40 bd-title-anim">
                            <span class="section__subtitle">Our Services</span>
                            <h2 class="section__title text-black-custome">Here’s the Heat <span class="animated-underline active">
                                    We Offer</span>

                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="l-cards">
                    <!-- CARD 1 -->
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="c-card card-bg-black hover-border ms-bg-2 ">
                                <div class="c-card__description">
                                    <!-- <p class="mb-1">
                                        Duration: 4 months</p> -->
                                    <h3 class="ms-event-title mt-1 mb-3">
                                        Choreography
                                    </h3>
                                    <p class="mb-1">Musicals Concerts, Theatrical Acts, Dance Reality Shows, Award Shows,
                                        Serials, Advertisements,</p>
                                </div>

                                <div class="c-card__figure">
                                    <img src="https://placehold.co/400x400" alt="Zzor">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="c-card card-bg-black hover-border ms-bg-2 ">
                                <div class="c-card__description">
                                    <!-- <p class="mb-1">
                                        Duration: 4 months</p> -->
                                    <h3 class="ms-event-title mt-1 mb-3">
                                        Music Videos
                                    </h3>
                                    <p class="mb-1">Choreography for Music videos with Celebrities, Dance Music Video
                                        Collaboration.</p>
                                </div>

                                <div class="c-card__figure">
                                    <img src="https://placehold.co/400x400" alt="Zzor">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CARD 3 -->
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="c-card card-bg-black hover-border ms-bg-2 ">
                                <div class="c-card__description">
                                    <!-- <p class="mb-1">
                                        Duration: 4 months</p> -->
                                    <h3 class="ms-event-title mt-1 mb-3">
                                        Wedding
                                    </h3>
                                    <p class="mb-1">Choreography and Training for Sangeet & Wedding</p>
                                </div>

                                <div class="c-card__figure">
                                    <img src="https://placehold.co/400x400" alt="Zzor">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="c-card card-bg-black hover-border ms-bg-2 ">
                                <div class="c-card__description">
                                    <!-- <p class="mb-1">
                                        Duration: 4 months</p> -->
                                    <h3 class="ms-event-title mt-1 mb-3">
                                        Corporate Events
                                    </h3>
                                    <p class="mb-1">Performances for National & International Shows and Corporate Events</p>
                                </div>

                                <div class="c-card__figure">
                                    <img src="https://placehold.co/400x400" alt="Zzor">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CARD 4 -->
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="c-card card-bg-black hover-border ms-bg-2 ">
                                <div class="c-card__description">
                                    <!-- <p class="mb-1">
                                        Duration: 4 months</p> -->
                                    <h3 class="ms-event-title mt-1 mb-3">
                                        Award Functions
                                    </h3>
                                    <p class="mb-1">Performances in renowned award ceremonies at National & International
                                        Platforms</p>
                                </div>

                                <div class="c-card__figure">
                                    <img src="https://placehold.co/400x400" alt="Zzor">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="c-card card-bg-black hover-border ms-bg-2 ">
                                <div class="c-card__description">
                                    <!-- <p class="mb-1">
                                        Duration: 4 months</p> -->
                                    <h3 class="ms-event-title mt-1 mb-3">
                                        Celebrity Judge
                                    </h3>
                                    <p class="mb-1">Suresh Mukund & Team as Celebrity Judge (for TV Dance Reality Shows/
                                        Schools / Colleges/ Dance Events)</p>
                                </div>

                                <div class="c-card__figure">
                                    <img src="https://placehold.co/400x400" alt="Zzor">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bdFadeUp justify-content-center align-items-center d-none">
                <div class="col-lg-6">
                    <div class=" mb-25 custome-border ms-bg-2">
                        <div class="row mb-3 align-items-center">
                            <div class="col-lg-2 text-center">
                                <div class="ms-fun-brand-thumb" bis_skin_checked="1">
                                    <a href="#" bis_skin_checked="1"><img src="{{ asset('assets/img/icon/choreography.png') }}"
                                            alt="function brand" class="w-100"></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <h3 class="ms-event-title mb-0 "><a href="#">Choreography</a></h3>
                            </div>
                        </div>
                        <p class="ms-event-text ">Musicals Concerts, Theatrical Acts, Dance Reality Shows, Award Shows,
                            Serials, Advertisements,</p>
                        <div class="trending-btn d-flex">
                            <a class="border__btn zindex-5" href="#">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class=" mb-25 custome-border ms-bg-2">
                        <div class="row mb-3 align-items-center">
                            <div class="col-lg-2 text-center">
                                <div class="ms-fun-brand-thumb" bis_skin_checked="1">
                                    <a href="#" bis_skin_checked="1"><img src="{{ asset('assets/img/icon/music.png') }}"
                                            alt="function brand" class="w-100"></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <h3 class="ms-event-title mb-0 "><a href="#">Music Videos</a>
                                </h3>
                            </div>
                        </div>

                        <p class="ms-event-text">Choreography for Music videos with Celebrities, Dance Music Video
                            Collaboration.</p>
                        <div class="trending-btn d-flex">
                            <a class="border__btn zindex-5" href="#">View More</a>
                        </div>
                        <!-- <div class="ms-event-inner">
                                <div class="ms-event-location">
                                    <a href="https://www.google.com/maps" target="_blank" tabindex="0"><i
                                            class="flaticon-pin"></i>Ohio</a>
                                </div>
                                <div class="ms-event-date">
                                    <span>9:00 PM, Saturday, February 25, 2023</span>
                                </div>
                            </div> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class=" mb-25 custome-border ms-bg-2">
                        <div class="row mb-3 align-items-center">
                            <div class="col-lg-2 text-center">
                                <div class="ms-fun-brand-thumb" bis_skin_checked="1">
                                    <a href="#" bis_skin_checked="1"><img src="{{ asset('assets/img/icon/wedding-couple.png') }}"
                                            alt="function brand" class="w-100"></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <h3 class="ms-event-title mb-0"><a href="#">Wedding</a>
                                </h3>
                            </div>
                        </div>
                        <p class="ms-event-text ">Choreography and Training for Sangeet & Wedding</p>
                        <div class="trending-btn d-flex">
                            <a class="border__btn zindex-5" href="#">View More</a>
                        </div>
                        <!-- <div class="ms-event-inner">
                                <div class="ms-event-location">
                                    <a href="https://www.google.com/maps" target="_blank" tabindex="0"><i
                                            class="flaticon-pin"></i>Ohio</a>
                                </div>
                                <div class="ms-event-date">
                                    <span>9:00 PM, Saturday, February 25, 2023</span>
                                </div>
                            </div> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class=" mb-25 custome-border ms-bg-2">
                        <div class="row mb-3 align-items-center">
                            <div class="col-lg-2 text-center">
                                <div class="ms-fun-brand-thumb" bis_skin_checked="1">
                                    <a href="#" bis_skin_checked="1"><img src="{{ asset('assets/img/icon/corporate_event.png') }}"
                                            alt="function brand" class="w-100"></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <h3 class="ms-event-title mb-0"><a href="#">Corporate Events</a>
                                </h3>
                            </div>
                        </div>
                        <p class="ms-event-text">Performances for National & International Shows and Corporate Events
                        </p>
                        <div class="trending-btn d-flex">
                            <a class="border__btn zindex-5" href="#">View More</a>
                        </div>
                        <!-- <div class="ms-event-inner">
                                <div class="ms-event-location">
                                    <a href="https://www.google.com/maps" target="_blank" tabindex="0"><i
                                            class="flaticon-pin"></i>City Club</a>
                                </div>
                                <div class="ms-event-date">
                                    <span>9:00 PM, Saturday, January 1, 2023</span>
                                </div>
                            </div> -->
                    </div>
                </div>
                <!-- <div class="col-lg-6">
                    <div class=" mb-25 custome-border ms-bg-2">
                        <div class="row mb-3 align-items-center">
                            <div class="col-lg-2 text-center">
                                <div class="ms-fun-brand-thumb" bis_skin_checked="1">
                                    <a href="#" bis_skin_checked="1"><img src="{{ asset('assets/img/icon/trophy.png') }}"
                                            alt="function brand" class="w-100"></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <h3 class="ms-event-title mb-0 "><a href="#">Award Functions</a>
                                </h3>
                            </div>
                        </div>
                        <p class="ms-event-text ">Performances in renowned award ceremonies at National & International
                            Platforms</p>
                        <div class="trending-btn d-flex">
                            <a class="border__btn zindex-5" href="#">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class=" mb-25 custome-border bg-w-1">
                        <div class="row mb-3 align-items-center">
                            <div class="col-lg-2 text-center">
                                <div class="ms-fun-brand-thumb" bis_skin_checked="1">
                                    <a href="#" bis_skin_checked="1"><img src="{{ asset('assets/img/icon/judges.png') }}"
                                            alt="function brand" class="w-100"></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <h3 class="ms-event-title mb-0 text-black-custome"><a href="#">Celebrity Judge</a>
                                </h3>
                            </div>
                        </div>
                        <p class="ms-event-text text-black-custome">Suresh Mukund & Team as Celebrity Judge (for TV Dance Reality Shows/
                            Schools / Colleges/ Dance Events)</p>
                        <div class="trending-btn d-flex">
                            <a class="border__btn zindex-5" href="#">View More</a>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-6">
                    <div class=" mb-25 custome-border ms-bg-2">
                        <div class="row mb-3 align-items-center">
                            <div class="col-lg-2 text-center">
                                <div class="ms-fun-brand-thumb" bis_skin_checked="1">
                                    <a href="#" bis_skin_checked="1"><img src="{{ asset('assets/img/icon/dance_traning.png') }}"
                                            alt="function brand" class="w-100"></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <h3 class="ms-event-title mb-0"><a href="#">Dance Training</a>
                                </h3>
                            </div>
                        </div>
                        <p class="ms-event-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        <div class="trending-btn d-flex">
                            <a class="border__btn zindex-5" href="#">View More</a>
                        </div>
                        
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Event Area End Here  -->

    <!-- parallax effect start -->
    <section class="ms-cta-area ms-event2-area include__bg pt-130 pb-130 p-relative zindex-10 d-none" style="background-image: url('{{ asset('assets/img/kings crew/2.jpg')}}');background-attachment: fixed;height: 60vh;">
        <!-- <div class="ms-overlay ms-overlay1 zindex--1"></div> -->
    </section>
    <!-- parallax effect end -->
    
    <!-- main page area start -->
    <section class="trending__area p-relative fix pt-90 include__bg pb-130 d-none">
        <div class="container">
            <div class="row align-items-end mb-25 bdFadeUp ">
                <div class="col-lg-8">
                    <div class="section__title-wrapper mb-40 bd-title-anim">
                        <span class="section__subtitle">Crowned Moves</span>
                        <h2 class="section__title"><span class="animated-underline active">Kings Dance Studio: </span>
                            Where Passion Meets Movement!</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="ms-trending-active-wrap bdFadeUp">
            <div class="swiper-container ms-trending-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="{{ route('sureshMukund') }}">
                            <div class="ms-trending2-item fix">
                                <div class="ms-trending2-overlay p-absolute"></div>
                                <span class="trending__title">Suresh Mukund</span>
                                <div class="ms-trending2-img w-img custome-h">
                                    <a href="{{ route('sureshMukund') }}"><img
                                            src="{{ asset('assets/img/about/award.jpg') }}" alt="trending image"></a>
                                </div>
                                <div class="ms-trending2-content">
                                    <div class="ms-trending2-shape">
                                        <img src="{{ asset('assets/img/trending/trending-shape.png') }}"
                                            alt="trending shape">
                                    </div>
                                    <div class="ms-trending2-title-wrap">
                                        <a class="ms-trending2-title p-relative ms-title-border"
                                            href="{{ route('sureshMukund') }}">Suresh Mukund is an internationally
                                            known choreographer and the first to win international titles and medals for
                                            India. He is the founder and choreographer of The Kings—a world-famous dance
                                            crew known for blending hip-hop and Bollywood in a powerful way. His passion
                                            and hard work are the reason behind the success of the best dance academy in
                                            India.</a>

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms-trending2-item fix">
                            <div class="ms-trending2-overlay p-absolute"></div>
                            <span class="trending__title">Our Trainers</span>
                            <!-- <div class="trending__price">
                                    <span>From $119</span>
                                </div> -->
                            <div class="ms-trending2-img w-img custome-h">
                                <a href="#"><img src="{{ asset('assets/img/kings img/course2.jpg') }}"
                                        alt="trending image"></a>
                            </div>
                            <div class="ms-trending2-content">
                                <div class="ms-trending2-shape">
                                    <img src="{{ asset('assets/img/trending/trending-shape.png') }}"
                                        alt="trending shape">
                                </div>
                                <div class="ms-trending2-title-wrap">
                                    <a class="ms-trending2-title p-relative ms-title-border" href="">Our
                                        experienced instructors are here to shape dance lovers at every level. Be it
                                        building strong foundations or sharpening advanced techniques, as kings we focus
                                        on progress with purpose, making us a trusted dance academy in India known for
                                        discipline and excellence.</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ route('creatorSpace') }}">
                            <div class="ms-trending2-item fix">
                                <div class="ms-trending2-overlay p-absolute"></div>
                                <span class="trending__title">Creator Space</span>
                                <!-- <div class="trending__price">
                                    <span>From $55</span>
                                </div> -->
                                <div class="ms-trending2-img w-img custome-h">
                                    <a href="{{ route('creatorSpace') }}"><img
                                            src="{{ asset('assets/img/studio/studio1.jpg') }}"
                                            alt="trending image"></a>
                                </div>
                                <div class="ms-trending2-content">
                                    <div class="ms-trending2-shape">
                                        <img src="{{ asset('assets/img/trending/trending-shape.png') }}"
                                            alt="trending shape">
                                    </div>
                                    <div class="ms-trending2-title-wrap">
                                        <a class="ms-trending2-title p-relative ms-title-border"
                                            href="{{ route('creatorSpace') }}">From ballet and jazz to hip-hop and
                                            contemporary, Kings Dance Studio offers a wide range of styles to match
                                            every dancer’s passion. As a leading dance institute, we encourage you to
                                            explore new genres, push your creative boundaries, and experience the true
                                            joy of expression through movement.</a>

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ route('theKings') }}">
                            <div class="ms-trending2-item fix">
                                <div class="ms-trending2-overlay p-absolute"></div>
                                <span class="trending__title">The Kings Crew</span>
                                <!-- <div class="trending__price">
                                    <span>From $90</span>
                                </div> -->
                                <div class="ms-trending2-img w-img custome-h">
                                    <a href="{{ route('theKings') }}"><img
                                            src="{{ asset('assets/img/kings crew/4.jpg') }}"
                                            alt="trending image"></a>
                                </div>
                                <div class="ms-trending2-content">
                                    <div class="ms-trending2-shape">
                                        <img src="{{ asset('assets/img/trending/trending-shape.png') }}"
                                            alt="trending shape">
                                    </div>
                                    <div class="ms-trending2-title-wrap">
                                        <a class="ms-trending2-title p-relative ms-title-border"
                                            href="{{ route('theKings') }}">The Kings represent a storm of energy,
                                            driven by thought and emotion. It’s not about the stage or the applause,
                                            it’s about the raw power of performance to challenge mediocrity and push
                                            boundaries. As a dance academy, The Kings believe in a deeper truth that
                                            moves people and awakens something within.</a>

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide d-none">
                        <div class="ms-trending2-item fix">
                            <div class="ms-trending2-overlay p-absolute"></div>
                            <span class="trending__title">Community Engagement</span>
                            <!-- <div class="trending__price">
                                    <span>From $90</span>
                                </div> -->
                            <div class="ms-trending2-img w-img custome-h">
                                <a href="#"><img src="{{ asset('assets/img/kings img/course2.jpg') }}"
                                        alt="trending image"></a>
                            </div>
                            <div class="ms-trending2-content">
                                <div class="ms-trending2-shape">
                                    <img src="{{ asset('assets/img/trending/trending-shape.png') }}"
                                        alt="trending shape">
                                </div>
                                <div class="ms-trending2-title-wrap">
                                    <a class="ms-trending2-title p-relative ms-title-border" href="#">Join a
                                        vibrant community of dancers who share your enthusiasm for dance. Connect with
                                        like-minded individuals, make lasting friendships, and build a support system
                                        that encourages growth, creativity, and mutual respect.</a>
                                    <a class="ms-round-btn popup-image"
                                        href="{{ asset('assets/img/trending/11.jpg') }}"><i
                                            class="flaticon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- main page area start -->

    @include('partial.goldenPass')
    <!-- parallax effect start -->
    <section class="ms-cta-area ms-event2-area include__bg pt-130 pb-130 p-relative zindex-10" style="background-image: url('{{ asset('assets/img/kings crew/2.jpg')}}');background-attachment: fixed;height: 60vh;">
        <!-- <div class="ms-overlay ms-overlay1 zindex--1"></div> -->
    </section>
    <!-- parallax effect end -->

    <!-- courses Area Start -->
    <section class="ms-news-area ms-bg-2 pt-130 pb-90 d-none">
        <div class="container">
            <div class="row align-items-end mb-25 bdFadeUp">
                <div class="col-lg-6">
                    <div class="section__title-wrapper course mb-40 bd-title-anim">
                        <span class="section__subtitle">Courses We Offer</span>
                        <h2 class="section__title">The <span class="animated-underline active">Kings</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mt-lg-4 mt-3">
                    <div class="main-card">
                        <a href="https://www.mythrillfiction.com/the-dark-rider" target="_blank">
                            <div class="mycard">
                                <div class="wrapper">
                                    <img src="https://ggayane.github.io/css-experiments/cards/dark_rider-cover.jpg"
                                        class="cover-image" />
                                </div>
                                <img src="https://ggayane.github.io/css-experiments/cards/dark_rider-title.png"
                                    class="title" />
                                <img src="https://ggayane.github.io/css-experiments/cards/dark_rider-character.webp"
                                    class="character" />

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mt-lg-4 mt-3">
                    <div class="main-card">
                        <a href="https://www.mythrillfiction.com/force-mage" target="_blank">
                            <div class="mycard">
                                <div class="wrapper">
                                    <img src="https://ggayane.github.io/css-experiments/cards/force_mage-cover.jpg"
                                        class="cover-image" />
                                </div>
                                <img src="https://ggayane.github.io/css-experiments/cards/force_mage-title.png"
                                    class="title" />
                                <img src="https://ggayane.github.io/css-experiments/cards/force_mage-character.webp"
                                    class="character" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- courses Area End -->

    @include('partial.course-grid')

    <!-- Parallax Video Section -->
    <section class="parallax-video-section">
        <!-- <div class="video-overlay-content parallax-overlay"> -->
        <!-- Optional content over the video -->
        <!-- <h1 class="text-white">Your Parallax Video Title</h1> -->
        </div>
        <video autoplay muted loop playsinline class="background-video">
            <source src="{{ asset('assets/video/kings crew.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </section>


    @include('partial.rental-studio')

    <!-- Special Events Area Start -->
    <section class="ms-news-area ms-bg-2 pt-130 pb-90 d-none">
        <div class="container">
            <div class="row justify-content-center bdFadeUp">
                <div class="col-xl-6">
                    <div class="section__title-wrapper text-center mb-65 bd-title-anim">
                        <span class="section__subtitle">Our Courses</span>
                        <h2 class="section__title">Train All Year, Any Style - <span
                                class="animated-underline active">Kings Golden Pass
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row bdFadeUp">
                <div class="col-xl-4 col-md-6">
                    <div class="ms-news-item p-relative zindex-1 mb-40">
                        <div class="ms-news-overlay p-absolute"></div>
                        <div class="ms-news-thumb w-img h-100">
                            <a href="#"><img src="{{ asset('assets/img/kings img/course1.jpg') }}"
                                    alt="news image" class="h-100"></a>
                        </div>
                        <div class="ms-news-content ms-news-position p-absolute">
                            <!-- <a class="ms-news2-cat mb-30" href="#">Event</a> -->
                            <h3 class="ms-news-title mb-15"><a href="#">Kings Golden Pass - One Year
                                    Unlimited Access</a></h3>
                            <!-- <div class="ms-news-meta d-inline-block">
                                    <span>Feb 15, 2023</span>
                                    <span><a href="#">0 Comments</a></span>
                                </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="ms-news-item p-relative zindex-1 mb-40">
                        <div class="ms-news-overlay p-absolute"></div>
                        <div class="ms-news-thumb w-img h-100">
                            <a href="news-details.html"><img src="{{ asset('assets/img/kings img/course2.jpg') }}"
                                    alt="news image" class="h-100"></a>
                        </div>
                        <div class="ms-news-content ms-news-position p-absolute">
                            <!-- <a class="ms-news2-cat mb-30" href="news-details.html">Wedding Party</a> -->
                            <h3 class="ms-news-title mb-15"><a href="#">Professional Training Program</a></h3>
                            <!-- <div class="ms-news-meta d-inline-block">
                                    <span>Feb 20, 2023</span>
                                    <span><a href="news-details.html">10 Comments</a></span>
                                </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="ms-news-item p-relative zindex-1 mb-40">
                        <div class="ms-news-overlay p-absolute"></div>
                        <div class="ms-news-thumb w-img h-100">
                            <a href="news-details.html"><img src="{{ asset('assets/img/kings img/course3.jpg') }}"
                                    alt="news image" class="h-100"></a>
                        </div>
                        <div class="ms-news-content ms-news-position p-absolute">
                            <!-- <a class="ms-news2-cat mb-30" href="news-details.html">DJ Party Event</a> -->
                            <h3 class="ms-news-title mb-15"><a href="#">Intensive Training
                                    Program</a></h3>
                            <!-- <div class="ms-news-meta d-inline-block">
                                    <span>Feb 25, 2023</span>
                                    <span><a href="news-details.html">14 Comments</a></span>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Special Events Area End -->

    @include('partial.universalForm')
</main>
@endsection
@push('style')
<style>
    @media screen and (max-width: 480px) {
        .video {
            margin-top: 120px;
        }
    }
</style>
<style>
    /* .ms-fun-brand-thumb img {
        filter: invert(1) !important;
    } */

    .img-box {
        height: auto;
        clip-path: none;
    }

    .custome-radius-top {
        border-radius: 12px 12px 12px 12px;
    }

    .content {
        padding: 15px 25px;
    }

    .ms-trending2-item:hover .trending__title {
        color: white;
    }

    .ms-fun-brand-thumb {
        border-radius: 0%;
    }

    /* event scroll */
    .card-bg-black::before {
        background: none !important;
    }

    .card-bg-black {
        background-color: #0D0D0D !important;
    }

    .ele2-text {
        position: absolute;
        top: 0%;
        left: 6%;
        /* opacity: 0.6 !important; */

    }

    .ele2-text h2 {
        font-family: "The Stranger Brush Personal Use";
        font-size: calc(max(10vw, 5rem));
        opacity: 0.2;
        rotate: 342deg;
        line-height: 0.7;
    }
</style>

@endpush
@push('js')
<script>
    const swiper = new Swiper(".achievementSwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        breakpoints: {
            576: {
                slidesPerView: 1.2
            },
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            }
        }
    });
</script>
<!-- scroll events -->
<script>
    gsap.registerPlugin(ScrollTrigger);

    const cards = gsap.utils.toArray(".c-card");
    const totalCards = cards.length;

    // Calculate cards in the last row (2 cards per row)
    const cardsPerRow = 2;
    const lastRowStartIndex = totalCards - cardsPerRow;

    // Reference the last card for scroll end
    const lastCardST = ScrollTrigger.create({
        trigger: cards[totalCards - 1],
        start: "center center"
    });

    // Loop through each card
    cards.forEach((card, index) => {
        // If it's in the last row, keep full scale (1), else scale down
        const scale = index >= lastRowStartIndex ? 1 : 0.5;

        const scaleDown = gsap.to(card, {
            scale: scale,
            ease: "none"
        });

        ScrollTrigger.create({
            trigger: card,
            start: "top top",
            end: () => lastCardST.start,
            pin: true,
            pinSpacing: false,
            scrub: 0.5,
            animation: scaleDown,
            toggleActions: "restart none none reverse"
        });
    });
</script>
@endpush