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
                                    A core style at Kings, focusing on rhythm, grooves, and street-style movements. It’s energetic and expressive, forming the base of many of their routines.</p>

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
                                    A core style at Kings, focusing on rhythm, grooves, and street-style movements. It’s energetic and expressive, forming the base of many of their routines.</p>
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
                                    A vibrant mix of Bollywood dance with modern styles like hip hop or contemporary, often used in performances to connect with Indian culture.</p>
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
                                    A vibrant mix of Bollywood dance with modern styles like hip hop or contemporary, often used in performances to connect with Indian culture.</p>
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
                                    Known for its emotion-driven movement, this style uses fluid body motion, floor work, and expression to tell powerful stories.</p>
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
                                    Known for its emotion-driven movement, this style uses fluid body motion, floor work, and expression to tell powerful stories.</p>
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
                        <
                            </button>
                            <button id="next">></button>
                            <button id="back" class="d-none">See All &#8599</button>
                </div>
            </div>
        </div>

    </section>
    <!-- Banner Area Start Here  -->
    <section class="ms-banner2-area fix">
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
                <img class="ms-rotation-360" src="{{ asset('assets/img/banner/banner-border.png') }}" alt="banner">
                <span>play</span>
            </a>
        </div>
        </div>
    </section>
    <!-- Banner Area End Here  -->

    <!-- about kings area start -->
    <section class="work__area ms-bg-2 pt-130 pb-60 p-relative">
        <div class="container">
            <div class="row align-items-center bdFadeUp">
                <div class="col-xl-6">
                    <div class="work__thumb-wrapper zindex-1 p-relative mb-60 d-inline-block" data-aos="fade-right" data-aos-delay="100" data-aos-duration="800">
                        <div class="work__thumb-inner p-relative zindex-5">
                            <div class="work__thumb m-img">
                                <img src="{{ asset('assets/img/kings img/about22.jpg') }}" alt="work image">
                            </div>
                        </div>
                        <div class="ms-work-round p-absolute zindex--1 d-none d-sm-block"></div>
                        <div class="ms-work-round p-absolute two zindex--1 d-none d-sm-block"></div>
                    </div>
                </div>
                <div class="col-xl-6 pl-30">
                    <div class="work__content-wrapper work__content-wrapper-space mb-70">
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
                            <h2 class="section__title two">
                                The Story Behind
                                <span class="animated-underline active">the Crown</span>
                            </h2>
                        </div>
                        <div class="work__features-inner">
                            <p>What started in 2009 as a small team of passionate dancers has grown into a name known around the world. From Mumbai to international stages, we’ve trained, performed, and earned the title of world champions through hard work, discipline, and dedication to the craft.</p>
                            <p>
                                Our studio is more than a training space. It is a place where dancers build strong foundations, explore their style, and grow into confident performers. With expert-led programs in hip-hop, contemporary, Bollywood, and classical Indian dance, we welcome dancers of all levels to be part of our journey.</p>

                            <div class="work__features-bottom">
                                <div class="work__features-action">
                                    <div class="trending-btn d-flex">
                                        <a class="border__btn zindex-5" href="{{ route('theKings') }}" data-bs-toggle="modal" data-bs-target="#modal2020">View More</a>
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

    <!-- main page area start -->
    <section class="trending__area p-relative fix pt-130 include__bg pb-130">
        <div class="container">
            <div class="row align-items-end mb-25 bdFadeUp ">
                <div class="col-lg-8">
                    <div class="section__title-wrapper mb-40 bd-title-anim">
                        <span class="section__subtitle">Crowned Moves</span>
                        <h2 class="section__title"><span class="animated-underline active">Kings Dance Studio: </span> Where Passion Meets Movement!</h2>
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
                                    <a href="{{ route('sureshMukund') }}"><img src="{{ asset('assets/img/about/award.jpg')}}"
                                            alt="trending image"></a>
                                </div>
                                <div class="ms-trending2-content">
                                    <div class="ms-trending2-shape">
                                        <img src="{{ asset('assets/img/trending/trending-shape.png') }}" alt="trending shape">
                                    </div>
                                    <div class="ms-trending2-title-wrap">
                                        <a class="ms-trending2-title p-relative ms-title-border"
                                            href="{{ route('sureshMukund') }}">Suresh Mukund is an internationally known choreographer and the first to win international titles and medals for India. He is the founder and choreographer of The Kings—a world-famous dance crew known for blending hip-hop and Bollywood in a powerful way. His passion and hard work are the reason behind the success of the best dance academy in India.</a>

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
                                    <img src="{{ asset('assets/img/trending/trending-shape.png') }}" alt="trending shape">
                                </div>
                                <div class="ms-trending2-title-wrap">
                                    <a class="ms-trending2-title p-relative ms-title-border"
                                        href="">Our experienced instructors are here to shape dance lovers at every level. Be it building strong foundations or sharpening advanced techniques, as kings we focus on progress with purpose, making us a trusted dance academy in India known for discipline and excellence.</a>

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
                                    <a href="{{ route('creatorSpace') }}"><img src="{{ asset('assets/img/studio/studio1.jpg') }}"
                                            alt="trending image"></a>
                                </div>
                                <div class="ms-trending2-content">
                                    <div class="ms-trending2-shape">
                                        <img src="{{ asset('assets/img/trending/trending-shape.png') }}" alt="trending shape">
                                    </div>
                                    <div class="ms-trending2-title-wrap">
                                        <a class="ms-trending2-title p-relative ms-title-border"
                                            href="{{ route('creatorSpace') }}">From ballet and jazz to hip-hop and contemporary, Kings Dance Studio offers a wide range of styles to match every dancer’s passion. As a leading dance institute, we encourage you to explore new genres, push your creative boundaries, and experience the true joy of expression through movement.</a>

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
                                    <a href="{{ route('theKings') }}"><img src="{{ asset('assets/img/kings crew/4.jpg') }}"
                                            alt="trending image"></a>
                                </div>
                                <div class="ms-trending2-content">
                                    <div class="ms-trending2-shape">
                                        <img src="{{ asset('assets/img/trending/trending-shape.png') }}" alt="trending shape">
                                    </div>
                                    <div class="ms-trending2-title-wrap">
                                        <a class="ms-trending2-title p-relative ms-title-border"
                                            href="{{ route('theKings') }}">The Kings represent a storm of energy, driven by thought and emotion. It’s not about the stage or the applause, it’s about the raw power of performance to challenge mediocrity and push boundaries. As a dance academy, The Kings believe in a deeper truth that moves people and awakens something within.</a>

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
                                    <img src="{{ asset('assets/img/trending/trending-shape.png') }}" alt="trending shape">
                                </div>
                                <div class="ms-trending2-title-wrap">
                                    <a class="ms-trending2-title p-relative ms-title-border"
                                        href="#">Join a vibrant community of dancers who share your enthusiasm for dance. Connect with like-minded individuals, make lasting friendships, and build a support system that encourages growth, creativity, and mutual respect.</a>
                                    <a class="ms-round-btn popup-image" href="{{ asset('assets/img/trending/11.jpg') }}"><i
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
                                    <img
                                        src="https://ggayane.github.io/css-experiments/cards/dark_rider-cover.jpg"
                                        class="cover-image" />
                                </div>
                                <img
                                    src="https://ggayane.github.io/css-experiments/cards/dark_rider-title.png"
                                    class="title" />
                                <img
                                    src="https://ggayane.github.io/css-experiments/cards/dark_rider-character.webp"
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
                                    <img
                                        src="https://ggayane.github.io/css-experiments/cards/force_mage-cover.jpg"
                                        class="cover-image" />
                                </div>
                                <img
                                    src="https://ggayane.github.io/css-experiments/cards/force_mage-title.png"
                                    class="title" />
                                <img
                                    src="https://ggayane.github.io/css-experiments/cards/force_mage-character.webp"
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
    @include('partial.rental-studio')

    <section class="ms-event2-area include__bg zindex-1 p-relative pt-140 pb-105" style="background-image: url('{{ asset('assets/img/kings crew/4.jpg')}}');background-attachment: fixed;">
        <div class="ms-overlay ms-overlay1 zindex--1"></div>
        <div class="container">
            <div class="row justify-content-center mb-25 bdFadeUp">
                <div class="col-xl-6">
                    <div class="ms-event2-top text-center">

                        <div class="section__title-wrapper mb-40 bd-title-anim">
                            <span class="section__subtitle">Our Services</span>
                            <h2 class="section__title">Here’s the Heat <span class="animated-underline active">
                                    We Offer</span>

                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bdFadeUp justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="ms-event2-item mb-25 custome-border">
                        <div class="row mb-3 align-items-center">
                            <div class="col-lg-2 text-center">
                                <div class="ms-fun-brand-thumb" bis_skin_checked="1">
                                    <a href="#" bis_skin_checked="1"><img src="https://placehold.co/80x80" alt="function brand" class="w-100"></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <h3 class="ms-event-title mb-0"><a href="#">Choreography</a></h3>
                            </div>
                        </div>
                        <p class="ms-event-text">Musicals Concerts, Theatrical Acts, Dance Reality Shows, Award Shows, Serials, Advertisements,</p>
                        <div class="trending-btn d-flex">
                            <a class="border__btn zindex-5" href="#">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ms-event2-item mb-25 custome-border">
                        <div class="row mb-3 align-items-center">
                            <div class="col-lg-2 text-center">
                                <div class="ms-fun-brand-thumb" bis_skin_checked="1">
                                    <a href="#" bis_skin_checked="1"><img src="https://placehold.co/80x80" alt="function brand" class="w-100"></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <h3 class="ms-event-title mb-0"><a href="#">Music Videos</a>
                                </h3>
                            </div>
                        </div>

                        <p class="ms-event-text">Choreography for Music videos with Celebrities, Dance Music Video Collaboration.</p>
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
                    <div class="ms-event2-item mb-25 custome-border">
                        <div class="row mb-3 align-items-center">
                            <div class="col-lg-2 text-center">
                                <div class="ms-fun-brand-thumb" bis_skin_checked="1">
                                    <a href="#" bis_skin_checked="1"><img src="https://placehold.co/80x80" alt="function brand" class="w-100"></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <h3 class="ms-event-title mb-0"><a href="#">Wedding</a>
                                </h3>
                            </div>
                        </div>
                        <p class="ms-event-text">Choreography and Training for Sangeet & Wedding</p>
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
                    <div class="ms-event2-item mb-25 custome-border">
                        <div class="row mb-3 align-items-center">
                            <div class="col-lg-2 text-center">
                                <div class="ms-fun-brand-thumb" bis_skin_checked="1">
                                    <a href="#" bis_skin_checked="1"><img src="https://placehold.co/80x80" alt="function brand" class="w-100"></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <h3 class="ms-event-title mb-0"><a href="#">Corporate Events</a>
                                </h3>
                            </div>
                        </div>
                        <p class="ms-event-text">Performances for National & International Shows and Corporate Events</p>
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
                <div class="col-lg-6">
                    <div class="ms-event2-item mb-25 custome-border">
                        <div class="row mb-3 align-items-center">
                            <div class="col-lg-2 text-center">
                                <div class="ms-fun-brand-thumb" bis_skin_checked="1">
                                    <a href="#" bis_skin_checked="1"><img src="https://placehold.co/80x80" alt="function brand" class="w-100"></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <h3 class="ms-event-title mb-0"><a href="#">Award Functions</a>
                                </h3>
                            </div>
                        </div>
                        <p class="ms-event-text">Performances in renowned award ceremonies at National & International Platforms</p>
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
                <div class="col-lg-6">
                    <div class="ms-event2-item mb-25 custome-border">
                        <div class="row mb-3 align-items-center">
                            <div class="col-lg-2 text-center">
                                <div class="ms-fun-brand-thumb" bis_skin_checked="1">
                                    <a href="#" bis_skin_checked="1"><img src="https://placehold.co/80x80" alt="function brand" class="w-100"></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <h3 class="ms-event-title mb-0"><a href="#">Celebrity Judge</a>
                                </h3>
                            </div>
                        </div>
                        <p class="ms-event-text">Suresh Mukund & Team as Celebrity Judge (for TV Dance Reality Shows/ Schools / Colleges/ Dance Events)</p>
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
                <div class="col-lg-6">
                    <div class="ms-event2-item mb-25 custome-border">
                        <div class="row mb-3 align-items-center">
                            <div class="col-lg-2 text-center">
                                <div class="ms-fun-brand-thumb" bis_skin_checked="1">
                                    <a href="#" bis_skin_checked="1"><img src="https://placehold.co/80x80" alt="function brand" class="w-100"></a>
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
            </div>
        </div>
    </section>
    <!-- Event Area End Here  -->

    <!-- Special Events Area Start -->
    <section class="ms-news-area ms-bg-2 pt-130 pb-90 d-none">
        <div class="container">
            <div class="row justify-content-center bdFadeUp">
                <div class="col-xl-6">
                    <div class="section__title-wrapper text-center mb-65 bd-title-anim">
                        <span class="section__subtitle">Our Courses</span>
                        <h2 class="section__title">Train All Year, Any Style - <span class="animated-underline active">Kings Golden Pass
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
                            <a href="news-details.html"><img src="{{ asset('assets/img/kings img/course1.jpg') }}" alt="news image" class="h-100"></a>
                        </div>
                        <div class="ms-news-content ms-news-position p-absolute">
                            <!-- <a class="ms-news2-cat mb-30" href="news-details.html">Event</a> -->
                            <h3 class="ms-news-title mb-15"><a href="news-details.html">Kings Golden Pass - One Year Unlimited Access</a></h3>
                            <!-- <div class="ms-news-meta d-inline-block">
                                <span>Feb 15, 2023</span>
                                <span><a href="news-details.html">0 Comments</a></span>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="ms-news-item p-relative zindex-1 mb-40">
                        <div class="ms-news-overlay p-absolute"></div>
                        <div class="ms-news-thumb w-img h-100">
                            <a href="news-details.html"><img src="{{ asset('assets/img/kings img/course2.jpg') }}" alt="news image" class="h-100"></a>
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
                            <a href="news-details.html"><img src="{{ asset('assets/img/kings img/course3.jpg') }}" alt="news image" class="h-100"></a>
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
</style>
<!-- <style>
    .content body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: #000;
        overflow: hidden;
    }

    .container-bg {
        position: fixed;

        height: 0%;
        pointer-events: none;

        opacity: 0.2;
        z-index: 0;
        left: 50%;
        position: absolute;
        top: 20%;
        height: 90%;
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0.2;
    }

    .carousel {
        position: relative;
        z-index: 1;
    }


    .circle {
        position: absolute;
        background: transparent;
        width: calc(var(--i) * 6.5vmin);
        aspect-ratio: 1;
        border-radius: 50%;
        border: 3px solid rgb(0, 255, 13);
        transform-style: preserve-3d;
        transform: rotateX(70deg) translateZ(50px);
        animation: animate 3s ease-in-out calc(var(--i) * 0.08s) infinite;
        box-shadow: 0 0 15px rgb(124, 124, 124),
            inset 0 0 15px rgb(124, 124, 124);
    }

    @keyframes animate {

        0%,
        100% {
            transform: rotateX(70deg) translateZ(50px) translateY(0);
            filter: hue-rotate(0);
        }

        50% {
            transform: rotateX(70deg) translateZ(50px) translateY(-50vmin);
            filter: hue-rotate(360deg);
        }
    }
</style> -->
@endpush
@push('js')

<script>
    AOS.init();
</script>
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
@endpush