@extends('layout.app')

@section('content')
<div class="ms-all-content ms-content-mobile-space pt-130">
    <main>
        <!-- About Area Start Here  -->
        <section class="ms-about-area fix">
            <div class="ms-about-bg include__bg p-relative zindex-1 pt-120 pb-130"
                data-background="{{ asset('assets/img/kings img/video_banner1.jpg')}}" style="background-image: url('{{ asset('assets/img/kings img/video_banner1.jpg')}}');">
                <div class="ms-overlay ms-overlay5 p-absolute zindex--1"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="ms-about-content text-center">
                                <h2 class="ms-title2 white-text mb-30 bd-title-anim">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </h2>
                                <p class="capitalize mb-65">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate debitis nam reprehenderit minima consequuntur ducimus beatae!
                                </p>
                                <div class="ms-about-round-btn d-inline-block bdFadeUp ms-choose-area pt-125 pb-105">
                                    <a href="https://www.youtube.com/watch?v=y4jv5bk8ato"
                                        class="popup-video ms-video-round p-relative">
                                        <div class="ms-video-img1 wh250">
                                            <img src="{{ asset('assets/img/kings img/video_banner1.jpg')}}" alt="about image" class="w-100 h-100 object-cover rounded-circle">
                                        </div>
                                        <div class="ms-video-img2 d-inline-block">
                                            {{-- <img src="{{ asset('assets/img/about/about2.png')}}" alt="about image"> --}}
                                        </div>
                                        <div class="ms-video-icon">
                                            <i class="fa fa-play"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End Here  -->
        <!-- Key achievement Area Start -->
        <section class="ms-news-area ms-bg-2 pt-130 pb-90">
            <div class="container">
                <div class="row align-items-end mb-25 bdFadeUp">
                    <div class="col-lg-6">
                        <div class="section__title-wrapper mb-40 bd-title-anim">
                            <span class="section__subtitle">Key Achievements</span>
                            <h2 class="section__title">The <span class="animated-underline active">Kings
                                </span>
                            </h2>
                        </div>
                    </div>

                </div>
                <!-- Swiper -->
                <div class="swiper achievementSwiper pt-lg-5">
                    <div class="swiper-wrapper pt-lg-4">

                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="achievement-card">
                                <div class="img-box">
                                    <img src="{{ asset('assets/img/kings img/banner2.jpg') }}" alt="WOD" class="w-100 h-100 object-cover custome-radius-top">
                                    <div class="ms-news-meta d-inline-block">
                                        <span>Feb 23, 2010</span>

                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="ms-event-title text-black-custome mt-4 mb-2"><a href="#">India's got talent season 3 winner</a></h3>
                                    <p class="text-black-light-custome">Winners of India's got talent season 3 on the back of their
                                        scintillating performances.</p>
                                    <div class="trending-btn d-flex">
                                        <a class="border__btn zindex-5" href="#">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="achievement-card">
                                <div class="img-box">
                                    <img src="{{ asset('assets/img/kings img/banner2.jpg') }}" alt="Hip Hop" class="w-100 h-100 object-cover custome-radius-top">
                                    <div class="ms-news-meta d-inline-block">
                                        <span>Feb 23, 2010</span>

                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="ms-event-title text-black-custome mt-4 mb-2"><a href="#">India's got talent season 3 winner</a></h3>
                                    <p class="text-black-light-custome">Winners of India's got talent season 3 on the back of their
                                        scintillating performances.</p>
                                    <div class="trending-btn d-flex">
                                        <a class="border__btn zindex-5" href="#">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="achievement-card">
                                <div class="img-box">
                                    <img src="{{ asset('assets/img/kings img/banner2.jpg') }}" alt="ABCD2" class="w-100 h-100 object-cover custome-radius-top">
                                    <div class="ms-news-meta d-inline-block">
                                        <span>Feb 23, 2010</span>

                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="ms-event-title text-black-custome mt-4 mb-2"><a href="#">India's got talent season 3 winner</a></h3>
                                    <p class="text-black-light-custome">Winners of India's got talent season 3 on the back of their
                                        scintillating performances.</p>
                                    <div class="trending-btn d-flex">
                                        <a class="border__btn zindex-5" href="#">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <div class="achievement-card">
                                <div class="img-box">
                                    <img src="{{ asset('assets/img/kings img/banner2.jpg') }}" alt="IGT" class="w-100 h-100 object-cover custome-radius-top">
                                    <div class="ms-news-meta d-inline-block">
                                        <span>Feb 23, 2010</span>

                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="ms-event-title text-black-custome mt-4 mb-2"><a href="#">India's got talent season 3 winner</a></h3>
                                    <p class="text-black-light-custome">Winners of India's got talent season 3 on the back of their
                                        scintillating performances.</p>
                                    <div class="trending-btn d-flex">
                                        <a class="border__btn zindex-5" href="#">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 5 -->
                        <div class="swiper-slide">
                            <div class="achievement-card">
                                <div class="img-box">
                                    <img src="{{ asset('assets/img/kings img/banner2.jpg') }}" alt="EKLKBK" class="w-100 h-100 object-cover custome-radius-top">
                                    <div class="ms-news-meta d-inline-block">
                                        <span>Feb 23, 2010</span>

                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="ms-event-title text-black-custome mt-4 mb-2"><a href="#">India's got talent season 3 winner</a></h3>
                                    <p class="text-black-light-custome">Winners of India's got talent season 3 on the back of their
                                        scintillating performances.</p>
                                    <div class="trending-btn d-flex">
                                        <a class="border__btn zindex-5" href="#">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- Key achievement Area End -->
        <!-- work area start -->
        <section class="work__area ms-bg-2 pt-125 pb-105">
            <div class="container">
                <div class="row align-items-center bdFadeUp">
                    <div class="col-xl-6">
                        <div class="ms-work3-thumb-wrap d-inline-block p-relative mb-60" data-aos="fade-right" data-aos-delay="100" data-aos-duration="800">
                            <div class="ms-work3-inner">
                                <div class="ms-work3-thumb m-img p-relative fix ms-br-20">
                                    <div class="ms-overlay p-absolute"></div>
                                    <img src="{{ asset('assets/img/kings img/banner/bann3.jpg')}}" alt="work image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-10">
                        <div class="work__content-wrapper p-relative mb-60">
                            <div class="section__title-wrapper mb-50">
                                <h2 class="section__title mb-40 bd-title-anim">The <span class="text-bg">Kings</span></h2>
                                <p data-aos="fade-left" data-aos-delay="100" data-aos-duration="800">The Kings is all about being the tornadoes of
                                    energy, direct beats of thoughts and emotions.
                                    It is not about stages, it is not about praise,
                                    it is all about the inherent strength of performing
                                    arts to create intangible bridges of resistance to
                                    status quo. The Kings are the natural truth that
                                    shakes up the consciousness and shrinks the souls.
                                </p>
                                <p data-aos="fade-left" data-aos-delay="200" data-aos-duration="800">Dance is the most flexible way of communication we
                                    articulate. A dialogue without words that is able to
                                    express it all. The Kings Dance studio is a place with
                                    a warm, supportive atmosphere and provide a social
                                    and entertainment forum for people with diverse
                                    interests, backgrounds and ages by educating people
                                    for all the levels in dance from beginner to advanced
                                    stages. Give our students a platform where they can
                                    showcase their talent and achieve their goals.</p>
                                <div class="trending-btn d-flex">
                                    <a class="border__btn zindex-5" href="{{ route('theKings') }}">View More</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- work area end -->

        <!-- work area start -->
        <section class="work__area pt-125 pb-105">
            <div class="container">
                <div class="row align-items-center bdFadeUp">
                    <div class="col-xl-6 col-lg-10">
                        <div class="work__content-wrapper p-relative mb-60">
                            <div class="section__title-wrapper mb-50">
                                <h2 class="section__title mb-40 bd-title-anim">Story of <span class="text-bg">Suresh Mukund</span> & his team – The Kings</h2>
                                <p class="text-justify" data-aos="fade-right" data-aos-delay="100" data-aos-duration="800">Suresh Mukund, the visionary founder and choreographer of Kings United, has a story that mirrors the plot of a Bollywood film: an impossible dream, an underdog team starting from scratch, and ultimately winning the biggest championship. Over a decade ago, Suresh Mukund and his dedicated group of dancers entered their first dance reality show, marking the beginning of an incredible journey.
                                </p>
                                <p class="text-justify" data-aos="fade-right" data-aos-delay="100" data-aos-duration="800">Kings United, also known simply as “The Kings,” shot to global fame by winning the third season of the US reality show, “World of Dance.” Their victory was historic, as they walked away with a grand prize of USD 1 million. This monumental achievement placed them on the global dance map and cemented their reputation as one of the best dance crews in the world</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="ms-work3-thumb-wrap d-inline-block p-relative mb-60">
                            <div class="ms-work3-inner">
                                <div class="ms-work3-thumb m-img p-relative fix ms-br-20 ms-lg-3 me-0">
                                    <div class="ms-overlay ms-overlay3 p-absolute"></div>
                                    <img src="{{ asset('assets/img/about/award.jpg')}}" alt="work image" data-aos="fade-left" data-aos-delay="100" data-aos-duration="800">
                                </div>
                                <div class="work__features-bottom ms-work3-features pb-0">
                                    <div class="work__features-action">
                                        <div class="work__features-btn ms-work3-feature-btn">
                                            <a class="unfill__btn" href="{{ route('sureshMukund') }}">Get Started</a>
                                        </div>
                                        <div class="features__btn-text">
                                            <span>Book something <br> awesome !</span>
                                        </div>
                                    </div>
                                    <div class="work__features-arrow">
                                        <img src="{{ asset('assets/img/work/arrow.png')}}" alt="image not found">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- work area end -->
        <!-- team  area start -->
        <section class="ms-popular__area ms-bg-2 pt-130 pb-100 fix">
            <div class="container">
                <div class="row align-items-end mb-25 bdFadeUp">
                    <div class="col-xl-8 col-lg-8">
                        <div class="section__title-wrapper mb-40 bd-title-anim">
                            <span class="section__subtitle">Meet Our Professional</span>
                            <h2 class="section__title msg_title">
                                <span class="animated-underline active">The Passionate Instructors</span> <br>
                                Powering Your Dance Journey
                            </h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="ms-popular__tab ms-popular-flex mb-40 d-none">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-popular-1-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-popular-1" type="button" role="tab"
                                        aria-controls="nav-popular-1" aria-selected="true">Dancers</button>
                                    <button class="nav-link" id="nav-popular-2-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-popular-2" type="button" role="tab"
                                        aria-controls="nav-popular-2" aria-selected="false">Entertainers</button>
                                    <button class="nav-link" id="nav-popular-3-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-popular-3" type="button" role="tab"
                                        aria-controls="nav-popular-3" aria-selected="false">Event
                                        Services</button>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row bdFadeUp">
                    <div class="col-xxl-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-popular-1" role="tabpanel"
                                aria-labelledby="nav-popular-1-tab" tabindex="0">
                                <div class="swiper-container ms-popular-active fix">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="#"><img
                                                            src="{{ asset('assets/img/kings img/team/Amey.jpg') }}"
                                                            alt="popular band" class="h-100 w-100 object-cover"></a>
                                                    {{-- <a href="#" class="ms-popular__link">
                                                    <span>Amey</span>
                                                </a> --}}
                                                </div>
                                                <h4 class="ms-popular__title"><a href="#">Amey</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="#"><img
                                                            src="{{ asset('assets/img/kings img/team/Amit.jpg') }}"
                                                            alt="popular band" class="h-100 w-100 object-cover"></a>
                                                    {{-- <a href="#" class="ms-popular__link">
                                                    <span>Amit</span>
                                                </a> --}}
                                                </div>
                                                <h4 class="ms-popular__title"><a href="#">Amit</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="#"><img
                                                            src="{{ asset('assets/img/kings img/team/BLUE.jpg') }}"
                                                            alt="popular band" class="h-100 w-100 object-cover"></a>
                                                    {{-- <a href="#" class="ms-popular__link">
                                                    <span>Blue</span>
                                                </a> --}}
                                                </div>
                                                <h4 class="ms-popular__title"><a href="#">Blue</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="#"><img
                                                            src="{{ asset('assets/img/kings img/team/dance.jpg') }}"
                                                            alt="popular band" class="h-100 w-100 object-cover"></a>
                                                    {{-- <a href="#" class="ms-popular__link">
                                                    <span>Dance</span>
                                                </a> --}}
                                                </div>
                                                <h4 class="ms-popular__title"><a href="#">Dance
                                                    </a></h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="#"><img
                                                            src="{{ asset('assets/img/kings img/team/Flying Machine.jpg') }}"
                                                            alt="popular band" class="h-100 w-100 object-cover"></a>
                                                    {{-- <a href="#" class="ms-popular__link">
                                                    <span>Flying Machine</span>
                                                </a> --}}
                                                </div>
                                                <h4 class="ms-popular__title"><a href="#">Flying Machine</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="#"><img
                                                            src="{{ asset('assets/img/kings img/team/ROCKLEE.jpg') }}"
                                                            alt="popular band" class="h-100 w-100 object-cover"></a>
                                                    {{-- <a href="#" class="ms-popular__link">
                                                    <span>Rocklee</span>
                                                </a> --}}
                                                </div>
                                                <h4 class="ms-popular__title"><a href="#">Rocklee</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="#"><img
                                                            src="{{ asset('assets/img/kings img/team/Rohan Pal.jpg') }}"
                                                            alt="popular band" class="h-100 w-100 object-cover"></a>
                                                    {{-- <a href="#" class="ms-popular__link">
                                                    <span>Rohan Pal</span>
                                                </a> --}}
                                                </div>
                                                <h4 class="ms-popular__title"><a href="#">Rohan Pal</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="#"><img
                                                            src="{{ asset('assets/img/kings img/team/SWAPNIL.jpg') }}"
                                                            alt="popular band" class="h-100 w-100 object-cover"></a>
                                                    {{-- <a href="#" class="ms-popular__link">
                                                    <span>Swapnil</span>
                                                </a> --}}
                                                </div>
                                                <h4 class="ms-popular__title"><a href="#">Swapnil</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="#"><img
                                                            src="{{ asset('assets/img/kings img/team/Tanya Bhushan.jpg') }}"
                                                            alt="popular band" class="h-100 w-100 object-cover"></a>
                                                    {{-- <a href="#" class="ms-popular__link">
                                                    <span>Tanya Bhushan</span>
                                                </a> --}}
                                                </div>
                                                <h4 class="ms-popular__title"><a href="#">Tanya Bhushan</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <!-- <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="#"><img
                                                        src="{{ asset('assets/img/popular/popular-03.png') }}"
                                                        alt="popular band"></a>
                                                <a href="genres-details.html" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres-details.html">Tributes</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres-details.html"><img
                                                        src="{{ asset('assets/img/popular/popular-04.png') }}"
                                                        alt="popular band"></a>
                                                <a href="genres-details.html" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres-details.html">Solo
                                                    Musicians
                                                </a></h4>
                                        </div>
                                    </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-popular-2" role="tabpanel"
                                aria-labelledby="nav-popular-2-tab" tabindex="0">
                                <div class="swiper-container ms-popular-active fix">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-01.png') }}"
                                                            alt="popular band" class="h-100 w-100 object-cover"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Singers</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-02.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Bands &
                                                        Group</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-03.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Tributes</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-04.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Solo
                                                        Musicians
                                                    </a></h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-01.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Singers</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-02.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Bands &
                                                        Group</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-03.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Tributes</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-04.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Solo
                                                        Musicians
                                                    </a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-popular-3" role="tabpanel"
                                aria-labelledby="nav-popular-3-tab" tabindex="0">
                                <div class="swiper-container ms-popular-active fix">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-01.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Singers</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-02.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Bands &
                                                        Group</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-03.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Tributes</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-04.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Solo
                                                        Musicians
                                                    </a></h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-01.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Singers</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-02.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Bands &
                                                        Group</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-03.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Tributes</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-04.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Solo
                                                        Musicians
                                                    </a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team  area end -->
        @include('partial.client')
        @include('partial.kings_gallary')
    </main>
</div>
@endsection

@push('style')

<style>
    .swiper {
        padding-bottom: 60px;
    }

    .swiper-button-next,
    .swiper-button-prev {
        color: #111;
        background-color: #fff;
        border-radius: 50%;
        padding: 20px;
    }

    .achievement-card {
        background: #fff;
    }

    .achievement-card:hover {
        transform: translateY(-6px);
        border: 1px solid red;
    }

    .img-box {
        position: relative;
        clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        overflow: hidden;
        height: 220px;
    }


    .content {
        padding: 20px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .achievementSwiper {
        position: relative;
    }

    .achievementSwiper .swiper-button-next,
    .achievementSwiper .swiper-button-prev {
        top: 23px;
        /* adjust as needed */
        right: 10px;
        /* keep both aligned to the right */
        left: auto;
        /* cancel default left position */
        position: absolute;
        z-index: 10;
    }

    .achievementSwiper .swiper-button-prev {
        right: 66px;
        /* push previous button to the left of next button */
    }

    .swiper-button-next:after,
    .swiper-button-prev:after {
        font-size: 25px !important;
    }
</style>
@endpush


@push('js')
<!-- Scripts -->
<!-- Bootstrap & AOS Scripts -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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