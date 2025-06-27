@extends('layout.app')

@section('content')
<div class="ms-all-content ms-content-mobile-space pt-130">
    <main>
        <!-- About Area Start Here  -->
        <section class="ms-about-area fix">
            <div class="ms-about-bg include__bg p-relative zindex-1 pt-120 pb-130"
                data-background="{{ asset('assets/img/about/about3.jpg') }}">
                <div class="ms-overlay ms-overlay5 p-absolute zindex--1"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="ms-about-content text-center">
                                <h2 class="ms-title2 white-text mb-30 bd-title-anim">THE KINGS
                                </h2>
                                <p class="capitalize mb-65 d-none">CHOREOGRAPHER | EMMY-NOMINATED |
                                    INTERNATIONAL WORLD CHOREOGRAPHY AWARD WINNER
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End Here  -->

        <!-- work area start -->
        <section class="work__area pt-100 pb-30 ">
            <div class="container">
                <div class="row align-items-center bdFadeUp">
                    <div class="col-xl-6">
                        <div class="ms-work3-thumb-wrap d-inline-block p-relative mb-60">
                            <div class="ms-work3-inner">
                                <div class="ms-work3-thumb m-img p-relative fix ms-br-20">
                                    <div class="p-absolute"></div>
                                    <img src="{{ asset('assets/img/kings img/banner/bann3.jpg') }}" alt="work image">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-10">
                        <div class="work__content-wrapper p-relative mb-60">
                            <div class="section__title-wrapper mb-50">
                                <h2 class="section__title mb-40 bd-title-anim">About Kings</h2>
                                <p class="">The Kings is all about being the tornadoes of
                                    energy, direct beats of thoughts and emotions.
                                    It is not about stages, it is not about praise,
                                    it is all about the inherent strength of performing
                                    arts to create intangible bridges of resistance to
                                    status quo. The Kings are the natural truth that
                                    shakes up the consciousness and shrinks the souls.</p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- work area end -->
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
        <!-- Work System Area Start Here  -->
        <section class="ms-work-system-area pt-130 pb-130 ">
            <div class="container">
                <div class="ms-work-system-wrap">
                    <div class="ms-work-system-img d-inline-block fix m-img ms-br-15 mb-60 w-100" style="height: 300px;">
                        <img src="{{ asset('assets/img/kings img/banner/bann2.jpg') }}" alt="work system image" class="w-100 h-100">
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="ms-work-system-inner text-center">
                                <p class="text-center">Dance is the most flexible way of communication we
                                    articulate. A dialogue without words that is able to
                                    express it all. The Kings Dance studio is a place with
                                    a warm, supportive atmosphere and provide a social
                                    and entertainment forum for people with diverse
                                    interests, backgrounds and ages by educating people
                                    for all the levels in dance from beginner to advanced
                                    stages. Give our students a platform where they can
                                    showcase their talent and achieve their goals.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Work System Area End Here  -->

        <section class="timeline-section">
            <div class="container">
                <h2 class="text-center mb-5" data-aos="fade-up">Key Achievements</h2>
                <div class="timeline-line">

                    <!-- Timeline Item -->
                    <div class="row">


                        <div class="timeline-item col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <span class="year-badge">2020</span>
                            <h4>World of Dance | Winner</h4>
                            <p>First Indian Crew crowned as World Champions in NBC World of Dance.</p>
                            <button class="btn-read-more" data-bs-toggle="modal" data-bs-target="#modal2020">Read More</button>
                        </div>
                        <div class="col-lg-6 w-auto">
                            <img src="{{ asset('assets/img/kings img/banner/bann2.jpg') }}" alt="" class="w-100 h-100 object-cover">
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                        <span class="year-badge">2015</span>
                        <h4>World Hip Hop Dance Championship | Bronze</h4>
                        <p>First Indian team to reach finals and win Bronze on debut attempt.</p>
                        <button class="btn-read-more" data-bs-toggle="modal" data-bs-target="#modal2015">Read More</button>
                    </div>

                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                        <span class="year-badge">2015</span>
                        <h4>ABCD 2 Movie</h4>
                        <p>Their story was portrayed in Bollywood hit "Any Body Can Dance 2".</p>
                    </div>

                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="400">
                        <span class="year-badge">2010</span>
                        <h4>India's Got Talent | Season 3 Winner</h4>
                        <p>National recognition through their victory in India’s Got Talent.</p>
                    </div>

                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="500">
                        <span class="year-badge">2009</span>
                        <h4>Entertainment Ke Liye Kuch Bhi Karega | Winner</h4>
                        <p>Won hearts on one of the most entertaining talent shows on TV.</p>
                    </div>

                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="600">
                        <span class="year-badge">2009</span>
                        <h4>Boogie Woogie India Winner</h4>
                        <p>Winners of India’s first dance reality show — Boogie Woogie.</p>
                    </div>

                </div>
            </div>
        </section>


        <!-- Genres Listing Area Start  -->
        <div class="ms-genres-listing pt-130 pb-110 ms-bg-2">
            <div class="container">
                <div class="row justify-content-center bdFadeUp">
                    <div class="col-xl-6 ">
                        <div class="section__title-wrapper text-center mb-25 bd-title-anim">
                            <span class="section__subtitle">Work Links</span>
                            <h2 class="section__title"><span class="ms-text1">The</span>
                                Kings
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                        aria-labelledby="home-tab" tabindex="0">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <a href="genres-details.html">
                                            <img src="{{ asset('assets/img/genres/genres-01.jpg') }}" alt="genres img">
                                        </a>
                                        <a class="popup-video ms-genres-video"
                                            href="https://www.youtube.com/watch?v=Rf9flQISwok"><i
                                                class="fa-sharp fa-solid fa-play"></i></a>

                                    </div>
                                    <div class="ms-genres-content p-relative">

                                        <h4 class="ms-genres-title fw-light"><a href="">ABCD 2 Vande Mataram</a></h4>

                                        <div class="ms-fun-brand-bottom ms-genres-rating">
                                            <div class="ms-fun-brand-location">
                                                <a href="#" target="_blank"> <i class="flaticon-heart"></i> 1.8M </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <a href="">
                                            <img src="{{ asset('assets/img/genres/genres-01.jpg') }}" alt="genres img">
                                        </a>
                                        <a class="popup-video ms-genres-video"
                                            href="https://youtu.be/xutBFUf3LoU?si=9Vzf9RC4dpSqpDFX"><i
                                                class="fa-sharp fa-solid fa-play"></i></a>

                                    </div>
                                    <div class="ms-genres-content p-relative">

                                        <h4 class="ms-genres-title fw-light"><a href="">ABCD 2 Bezubaan Phir Se</a></h4>

                                        <div class="ms-fun-brand-bottom ms-genres-rating">
                                            <div class="ms-fun-brand-location">
                                                <a href="#" target="_blank"> <i class="flaticon-heart"></i> 1.4M </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <a href="">
                                            <img src="{{ asset('assets/img/genres/genres-04.jpg') }}" alt="genres img">
                                        </a>
                                        <a class="popup-video ms-genres-video"
                                            href="https://youtu.be/6Z7tW64jpTM?si=CbUIW6b4hiEv_DOo"><i
                                                class="fa-sharp fa-solid fa-play"></i></a>

                                    </div>
                                    <div class="ms-genres-content p-relative">

                                        <h4 class="ms-genres-title fw-light"><a href="">DIVINE - Baazigar</a></h4>

                                        <div class="ms-fun-brand-bottom ms-genres-rating">
                                            <div class="ms-fun-brand-location">
                                                <a href="#" target="_blank"> <i class="flaticon-heart"></i> 763K</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <a href="genres-details.html">
                                            <img src="{{ asset('assets/img/genres/genres-05.jpg') }}" alt="genres img">
                                        </a>
                                        <a class="popup-video ms-genres-video"
                                            href="https://youtu.be/6KBE8iRTg8Y?si=WuTDM2yRgn7mtz8a"><i
                                                class="fa-sharp fa-solid fa-play"></i></a>

                                    </div>
                                    <div class="ms-genres-content p-relative">

                                        <h4 class="ms-genres-title fw-light"><a href="#">Chakravyuh mein - Virat Kohli X DIVINE | PUMA</a></h4>

                                        <div class="ms-fun-brand-bottom ms-genres-rating">
                                            <div class="ms-fun-brand-location">
                                                <a href="https://www.google.com/maps" target="_blank"> <i class="flaticon-heart"></i> 139K </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <a href="">
                                            <img src="{{ asset('assets/img/genres/genres-06.jpg') }}" alt="genres img">
                                        </a>
                                        <a class="popup-video ms-genres-video"
                                            href="https://youtu.be/UqBzpg6YMBg?si=otznrnTDkENI0iaM"><i
                                                class="fa-sharp fa-solid fa-play"></i></a>

                                    </div>
                                    <div class="ms-genres-content p-relative">

                                        <h4 class="ms-genres-title fw-light"><a href="#">World Dance Performace</a>
                                        </h4>

                                        <div class="ms-fun-brand-bottom ms-genres-rating">
                                            <div class="ms-fun-brand-location">
                                                <a href="https://www.google.com/maps" target="_blank"> <i class="flaticon-heart"></i> 5.7K </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <a href="genres-details.html">
                                            <img src="{{ asset('assets/img/genres/genres-07.jpg') }}" alt="genres img">
                                        </a>
                                        <a class="popup-video ms-genres-video"
                                            href="https://youtu.be/0bve8unJ7e8?si=I1nLXN6g7NmU4dmM"><i
                                                class="fa-sharp fa-solid fa-play"></i></a>

                                    </div>
                                    <div class="ms-genres-content p-relative">

                                        <h4 class="ms-genres-title fw-light"><a href="#">The Kings TATTAD TATTAD Routine</a>
                                        </h4>

                                        <div class="ms-fun-brand-bottom ms-genres-rating">
                                            <div class="ms-fun-brand-location">
                                                <a href="https://www.google.com/maps" target="_blank"> <i class="flaticon-heart"></i> 5.8K </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <a href="">
                                            <img src="{{ asset('assets/img/genres/genres-08.jpg') }}" alt="genres img">
                                        </a>
                                        <a class="popup-video ms-genres-video"
                                            href="https://youtu.be/0j5Vyo4lGYc?si=mHyF1NeboZ0oG8IH"><i
                                                class="fa-sharp fa-solid fa-play"></i></a>

                                    </div>
                                    <div class="ms-genres-content p-relative">

                                        <h4 class="ms-genres-title fw-light"><a href="">The Kings' "Malhari" Routine Is INSANE</a>
                                        </h4>

                                        <div class="ms-fun-brand-bottom ms-genres-rating">
                                            <div class="ms-fun-brand-location">
                                                <a href="https://www.google.com/maps" target="_blank"> <i class="flaticon-heart"></i> 47K </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <a href="">
                                            <img src="{{ asset('assets/img/genres/genres-09.jpg') }}" alt="genres img">
                                        </a>
                                        <a class="popup-video ms-genres-video"
                                            href="https://youtu.be/E6rd0fy0DUY?si=ZmGKK7FePQiJ_QjH"><i
                                                class="fa-sharp fa-solid fa-play"></i></a>

                                    </div>
                                    <div class="ms-genres-content p-relative">

                                        <h4 class="ms-genres-title fw-light"><a href="">The Kings Winning Moment</a>
                                        </h4>

                                        <div class="ms-fun-brand-bottom ms-genres-rating">
                                            <div class="ms-fun-brand-location">
                                                <a href="https://www.google.com/maps" target="_blank"> <i class="flaticon-heart"></i> 62K </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <a href="genres-details.html">
                                            <img src="{{ asset('assets/img/genres/genres-10.jpg') }}" alt="genres img">
                                        </a>
                                        <a class="popup-video ms-genres-video"
                                            href="https://youtu.be/zQGaZjJNIMg?si=xMb_Io3moYWvviaz"><i
                                                class="fa-sharp fa-solid fa-play"></i></a>

                                    </div>
                                    <div class="ms-genres-content p-relative">

                                        <h4 class="ms-genres-title fw-light"><a href="">World of Dance Finals - Upper Team The Kings</a>
                                        </h4>

                                        <div class="ms-fun-brand-bottom ms-genres-rating">
                                            <div class="ms-fun-brand-location">
                                                <a href="https://www.google.com/maps" target="_blank"> <i class="flaticon-heart"></i> 38K </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <a href="genres-details.html">
                                            <img src="{{ asset('assets/img/genres/genres-05.jpg') }}" alt="genres img">
                                        </a>
                                        <a class="popup-video ms-genres-video"
                                            href="https://youtu.be/GHdzoot7rfg?si=fVBMhYv9wq8yzHaG"><i
                                                class="fa-sharp fa-solid fa-play"></i></a>

                                    </div>
                                    <div class="ms-genres-content p-relative">

                                        <h4 class="ms-genres-title fw-light"><a href="">50 Cent X The kings | Live Show Mumbai</a></h4>

                                        <div class="ms-fun-brand-bottom ms-genres-rating">
                                            <div class="ms-fun-brand-location">
                                                <a href="https://www.google.com/maps" target="_blank"> <i class="flaticon-heart"></i> 300 </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <a href="">
                                            <img src="{{ asset('assets/img/genres/genres-06.jpg') }}" alt="genres img">
                                        </a>
                                        <a class="popup-video ms-genres-video"
                                            href="https://youtu.be/y4jv5bk8ato?si=rL-wV03FjxH5JFl7"><i
                                                class="fa-sharp fa-solid fa-play"></i></a>

                                    </div>
                                    <div class="ms-genres-content p-relative">

                                        <h4 class="ms-genres-title fw-light"><a href="">Kings United Ultimate Epic Comeback</a>
                                        </h4>

                                        <div class="ms-fun-brand-bottom ms-genres-rating">
                                            <div class="ms-fun-brand-location">
                                                <a href="https://www.google.com/maps" target="_blank"> <i class="flaticon-heart"></i> 43K </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <a href="">
                                            <img src="{{ asset('assets/img/genres/genres-07.jpg') }}" alt="genres img">
                                        </a>
                                        <a class="popup-video ms-genres-video"
                                            href="https://youtu.be/_7oTMDqV3ew?si=bj2FvCl7ZrCKbiYA"><i
                                                class="fa-sharp fa-solid fa-play"></i></a>

                                    </div>
                                    <div class="ms-genres-content p-relative">

                                        <h4 class="ms-genres-title fw-light"><a href="">Kings United Ultimate Showdown</a>
                                        </h4>

                                        <div class="ms-fun-brand-bottom ms-genres-rating">
                                            <div class="ms-fun-brand-location">
                                                <a href="https://www.google.com/maps" target="_blank"> <i class="flaticon-heart"></i> 30K </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- Genres Listing Area End  -->
        <!-- CTA Area Start Here  -->
        <section class="ms-cta-area pt-130 pb-130 p-relative zindex-10">
            <div class="container">
                <div class="ms-cta-bg black-bg fix">
                    <div class="ms-cta-wrap">
                        <div class="ms-cta-item">
                            <div class="ms-cta-content">
                                <h2 class="section__title mb-25">Contact Information
                                </h2>
                                <p class="mb-0"><i class="fas fa-phone-alt me-2"></i> +91 9975562947</p>
                                <p class="mb-0"><i class="fas fa-envelope me-2"></i> suresh@kingsunitedindia.com</p>
                            </div>
                        </div>
                        <div class="ms-cta-item">
                            <div class="ms-cta-img">
                                <img src="{{ asset('assets/img/cta/cta-01.png')}}" alt="cta image">
                            </div>
                        </div>
                        <div class="ms-cta-item">
                            <div class="ms-cta-app">
                                <a target="_blank" href="https://www.instagram.com/worldofdance/" class="contactInfoLogo">
                                    <img src="{{ asset('assets/img/suresh/contactInfo.jpg')}}"
                                        alt="app store" style="object-fit: contain;">
                                </a>
                                <a target="_blank" href="https://www.instagram.com/officialhhi/</a>" class="contactInfoLogo">
                                    <img src="{{ asset('assets/img/suresh/contactInfo2.jpg')}}"
                                        alt="play store" style="object-fit: contain;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Area End Here  -->

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


<style>
    .timeline-section {
        padding: 80px 0;
    }

    .timeline-line {
        border-left: 3px solid #de4038;
        margin-left: 25px;
    }

    .timeline-item {
        position: relative;
        margin-bottom: 60px;
        padding-left: 60px;
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        left: 25px;
        top: 5px;
        width: 20px;
        height: 20px;
        background-color: #de4038;
        border-radius: 50%;
        z-index: 1;
    }

    .timeline-item h4 {
        font-weight: 600;
        color: #222;
    }

    .timeline-item p {
        color: #555;
    }

    .year-badge {
        font-size: 14px;
        font-weight: bold;
        color: #de4038;
        margin-bottom: 10px;
        display: inline-block;
    }

    .btn-read-more {
        padding: 6px 12px;
        background: #de4038;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 14px;
        margin-top: 10px;
    }

    .btn-read-more:hover {
        background: #b5312a;
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