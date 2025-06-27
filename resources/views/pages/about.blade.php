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

        <!-- Why Choose Us Area Start Here  -->
        <section class="ms-choose-area pt-125 pb-105">
            <div class="container">
                <div class="row align-items-end mb-25 bdFadeUp">
                    <div class="col-lg-7">
                        <div class="section__title-wrapper mb-40">
                            <!-- <h2 class="section__title mb-35 bd-title-anim">key achievements</h2> -->
                            <h2 class="section__title mb-35 bd-title-anim"> <span class="text-bg">key achievements</span>
                            </h2>
                            <p>Our hand-picked acts will guarantee you fantastic wedding <br> entertainment
                                for
                                each
                                part.
                                We'll provide help and support 24 hours a <br> day, 7 days a week, right up
                                until</p>
                        </div>
                    </div>
                </div>
                <div class="card-container">
                    <div class="container">

                        <div class="row g-4">

                            <!-- Card -->
                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                                <div class="achievement-card">
                                    <div class=""><img src="{{ asset('assets/img/kings img/banner2.jpg') }}" alt="" class="w-100 h-100 custome-radius-top"></div>
                                    <div class="inner-content">
                                        <div class="ms-news-meta d-inline-block">
                                            <span>Feb 23, 2020</span>

                                        </div>
                                        <h3 class="ms-event-title text-black-custome mt-4 mb-2"><a href="#">World of Dance | Winner</a></h3>
                                        <p class="text-black-light-custome">History created as the first Indian Crew being crowned as
                                            World Champions in NBC World of Dance.</p>
                                        <div class="trending-btn d-flex">
                                            <a class="border__btn zindex-5" href="#" data-bs-toggle="modal" data-bs-target="#modal2020">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Repeat Cards -->
                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                                <div class="achievement-card">
                                    <div class=""><img src="{{ asset('assets/img/kings img/banner2.jpg') }}" alt="" class="w-100 h-100 custome-radius-top"></div>
                                    <div class="inner-content">

                                        <div class="ms-news-meta d-inline-block">
                                            <span>Feb 23, 2015</span>

                                        </div>
                                        <h3 class="ms-event-title text-black-custome mt-4 mb-2"><a href="#">World Hip Hop Dance Championship Bronze Medalist</a></h3>
                                        <p class="text-black-light-custome">We are the first dance crew from India to achieve a Bronze Medal
                                            for our country India which was an incredible achievement.
                                        </p>
                                        <div class="trending-btn d-flex">
                                            <a class="border__btn zindex-5" href="#">View More</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                                <div class="achievement-card">
                                    <div class=""><img src="{{ asset('assets/img/kings img/banner2.jpg') }}" alt="" class="w-100 h-100 custome-radius-top"></div>
                                    <div class="inner-content">

                                        <div class="ms-news-meta d-inline-block">
                                            <span>Feb 23, 2015</span>

                                        </div>
                                        <h3 class="ms-event-title text-black-custome mt-4 mb-2"><a href="#">ABCD 2 Movie</a></h3>
                                        <p class="text-black-light-custome">An inspiring journey of the THE KINGS was showcased on a big
                                            screen in the form of movie Any Body Can Dance 2 directed by Remo
                                            D'Souza.</p>
                                        <div class="trending-btn d-flex">
                                            <a class="border__btn zindex-5" href="#">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 mt-lg-5" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                                <div class="achievement-card">
                                    <div class=""><img src="{{ asset('assets/img/kings img/banner2.jpg') }}" alt="" class="w-100 h-100 custome-radius-top"></div>
                                    <div class="inner-content">

                                        <div class="ms-news-meta d-inline-block">
                                            <span>Feb 23, 2010</span>

                                        </div>
                                        <h3 class="ms-event-title text-black-custome mt-4 mb-2"><a href="#">India's got talent season 3 winner</a></h3>
                                        <p class="text-black-light-custome">Winners of India's got talent season 3 on the back of their
                                            scintillating performances.</p>
                                        <div class="trending-btn d-flex">
                                            <a class="border__btn zindex-5" href="#">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-lg-5" data-aos="fade-up" data-aos-delay="500" data-aos-duration="800">
                                <div class="achievement-card">
                                    <div class=""><img src="{{ asset('assets/img/kings img/banner2.jpg') }}" alt="" class="w-100 h-100 custome-radius-top"></div>
                                    <div class="inner-content">

                                        <div class="ms-news-meta d-inline-block">
                                            <span>Feb 23, 2009</span>

                                        </div>
                                        <h3 class="ms-event-title text-black-custome mt-4 mb-2"><a href="#">Entertainment ke liye kuch bhi karega season 3 winner</a></h3>
                                        <p class="text-black-light-custome">Showcased an incredible achievement by winning
                                            Entertainment ke liye kuch bhi karega season 3</p>
                                        <div class="trending-btn d-flex">
                                            <a class="border__btn zindex-5" href="#">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-lg-5" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800">
                                <div class="achievement-card">
                                    <div class=""><img src="{{ asset('assets/img/kings img/banner2.jpg') }}" alt="" class="w-100 h-100 custome-radius-top"></div>
                                    <div class="inner-content">

                                        <div class="ms-news-meta d-inline-block">
                                            <span>Feb 23, 2009</span>

                                        </div>
                                        <h3 class="ms-event-title text-black-custome mt-4 mb-2"><a href="#">Boogie Woogie india winner </a></h3>
                                        <p class="text-black-light-custome">The only dance group in
                                            India who mesmerized the world with so many accolades during their
                                            journey and set themselves as an exemplary to all the dance aspirants
                                            across the country.</p>
                                        <div class="trending-btn d-flex">
                                            <a class="border__btn zindex-5" href="#">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Modals -->
                <div class="modal fade" id="modal2020" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content p-4">
                            <h5>World of Dance | Winner 2020</h5>
                            <p>The Kings created history as the first Indian crew crowned as champions in NBC's "World of Dance". Their powerful performance broke records globally.</p>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modal2015" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content p-4">
                            <h5>World Hip Hop | Bronze Medalist</h5>
                            <p>Achieved bronze in their first attempt at the World Hip-Hop Dance Championship with only 20 days of practice — an incredible feat for any crew.</p>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Why Choose Us Area End Here  -->

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
    </main>
</div>
@endsection

@push('style')
<style>
  
   

    .achievement-card:hover {
        transform: translateY(-8px);
        box-shadow: linear-gradient(90deg, #ff5a4d 0%, #ffc04d 100%);
        border: linear-gradient(90deg, #ff5a4d 0%, #ffc04d 100%);
        box-shadow: 0 4px 12px rgba(222, 64, 56, 0.4);
        border-color: #de4038;
        /* Red border on hover */
    }

    .achievement-card:hover .ms-event-title {
        /* color: var(--clr-theme-1); */
        background: linear-gradient(90deg, #de4038 0%, #dea738 100%);
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .achievement-icon {
        font-size: 32px;
        color: #de4038;
        margin-bottom: 15px;
    }
</style>
@endpush

@push('js')
<!-- Bootstrap & AOS Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endpush