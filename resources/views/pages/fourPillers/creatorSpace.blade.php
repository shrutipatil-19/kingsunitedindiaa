@extends('layout.app')

@section('content')
<div class="ms-all-content ms-content-mobile-space pt-130">
    <main>
        <!-- About Area Start Here  -->
        <section class="ms-about-area fix">
            <div class="ms-about-bg include__bg p-relative zindex-1 pt-120 pb-130"
                data-background="{{ asset('assets/img/studio/studio1.jpg') }}">
                <div class="ms-overlay ms-overlay5 p-absolute zindex--1"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="ms-about-content text-center">
                                <h2 class="ms-title2 white-text mb-30 bd-title-anim">CREATOR SPACE
                                </h2>
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
                        <div class="ms-work3-thumb-wrap d-inline-block p-relative mb-60" data-aos="fade-right" data-aos-delay="100" data-aos-duration="800">
                            <div class="ms-work3-inner">
                                <div class="ms-work3-thumb m-img p-relative fix ms-br-20">
                                    <div class="p-absolute"></div>
                                    <img src="{{ asset('assets/img/studio/main.jpg') }}" alt="work image">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-10">

                        <div class="work__content-wrapper p-relative mb-60">
                            <div class="section__title-wrapper mb-50">
                                <h2 class="section__title mb-40 bd-title-anim">Kings Creator Space:<span class="text-bg"> Unleash Your</span> Creativity</h2>
                                <p class="" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">Welcome to Kings Creator Space, where imagination meets innovation. Our state-of-the-art studio is designed to provide you with everything you need to create high-quality, engaging content. Whether you’re an aspiring artist, a seasoned professional, or just looking to have some fun, Kings Creator Space has something for everyone.</p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- work area end -->


        <!-- courses Area Start -->
        <section class="ms-news-area ms-bg-2 pt-130 pb-90 ms-bg-2 include__bg p-relative zindex-1" style="background-image: url('{{ asset('assets/img/studio/bg.jpg')}}');background-attachment: fixed;">
            <div class="ms-overlay ms-overlay5 p-absolute zindex--1" bis_skin_checked="1"></div>
            <div class="container">
                <div class="row align-items-end mb-25 bdFadeUp">
                    <div class="col-lg-6">
                        <div class="section__title-wrapper mb-40 bd-title-anim">
                            <span class="section__subtitle">Creator space</span>
                            <h2 class="section__title">Creator <span class="animated-underline active">space
                                </span>
                            </h2>
                        </div>
                    </div>

                </div>
                <!-- Swiper -->
                <div class="row">
                    <!-- <div class="col-lg-6 pt-lg-4"> -->
                    <div class="col-lg-12 mt-lg-1 mt-3">
                        <div class="achievement-card d-flex flex-row " data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                            <div class="row">
                                <div class="img-box position-relative col-lg-4">
                                    <img src="{{ asset('assets/img/studio/studio1.jpg') }}" alt="Street Dance" class="w-100 h-100 object-cover custome-radius-top">

                                    <!-- offer badge -->
                                    <div class="offer-badge position-absolute top-0 start-1 bg-danger text-white px-2 py-1 fw-bold custome-radius ">
                                        10% OFF
                                    </div>
                                    <!-- <div class="ms-availability-badge bg-success text-white p-1 rounded position-absolute top-0 start-1 m-2">
                                        Available
                                    </div> -->
                                </div>

                                <div class="content col-lg-5 col-12">
                                    <p class="text-black-light-custome mb-1"><i class="fa-solid fa-location-dot"></i> Andheri, Mumbai</p>
                                    <h3 class="ms-event-title text-black-custome mt-1 mb-3"><a href="{{ route('studio.book.form', ['studio' => 'studio-1']) }}">STUDIO 1 - 100 SQ.FT</a></h3>

                                    <p class="text-black-light-custome mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <p><span class="bg-light font-mini">Mirrors</span> <span class="bg-light font-mini">Sound system</span> <span class="bg-light font-mini">Cameras</span> <span class="bg-light font-mini">Changing rooms</span> <span class="bg-light font-mini">Air conditioning</span></p>
                                    <p class="text-black-light-custome mb-1">
                                        <i class="fa-solid fa-rotate-left me-1"></i>
                                        Free cancellation up to 24 hours before booking
                                    </p>

                                </div>
                                <div class="pricing col-lg-3 d-flex flex-column justify-content-center">
                                    <p class="fw-bold mb-1 text-black fs-4">
                                        ₹1,500/Hour
                                        <!-- <del class="text-muted ms-2">₹59,999</del> -->
                                    </p>
                                    <p class="fw-bold mb-1 text-black">
                                        ₹3,000/3 Hour
                                        <!-- <del class="text-muted ms-2">₹1,00000</del> -->
                                    </p>
                                    <p class="text-success small">Limited-time offer — save ₹1,500!</p>
                                    <div class="trending-btn d-flex">
                                        <a class="border__btn zindex-5" href="{{ route('studio.book.form', ['studio' => 'studio-1']) }}">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Slide 2 -->
                    <div class="col-lg-12 mt-lg-3 mt-3">
                        <div class="achievement-card d-flex flex-row " data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                            <div class="row">
                                <div class="img-box position-relative col-lg-4">
                                    <img src="{{ asset('assets/img/studio/studio2/Studio 2 (2).jpg') }}" alt="Street Dance" class="w-100 h-100 object-cover custome-radius-top">

                                    <!-- offer badge -->
                                    <!-- <div class="offer-badge position-absolute top-0 start-1 bg-danger text-white px-2 py-1 fw-bold custome-radius ">
                                    20% OFF
                                </div> -->
                                    <div class="ms-availability-badge bg-success text-white p-1 rounded position-absolute top-0 start-1 m-2">
                                        Available
                                    </div>
                                </div>

                                <div class="content col-lg-5 col-12">
                                    <p class="text-black-light-custome mb-1"><i class="fa-solid fa-location-dot"></i> Andheri, Mumbai</p>
                                    <h3 class="ms-event-title text-black-custome mt-1 mb-3"><a href="{{ route('studio.book.form', ['studio' => 'studio-2']) }}">STUDIO 2 - 750 SQ.FT</a></h3>

                                    <p class="text-black-light-custome mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <p><span class="bg-light font-mini">Mirrors</span> <span class="bg-light font-mini">Sound system</span> <span class="bg-light font-mini">Cameras</span> <span class="bg-light font-mini">Changing rooms</span> <span class="bg-light font-mini">Air conditioning</span></p>
                                    <p class="text-black-light-custome mb-1">
                                        <i class="fa-solid fa-rotate-left me-1"></i>
                                        Free cancellation up to 24 hours before booking
                                    </p>

                                </div>
                                <div class="pricing col-lg-3 d-flex flex-column justify-content-center">
                                    <p class="fw-bold mb-1 text-black fs-4">
                                        ₹1,500/Hour
                                        <!-- <del class="text-muted ms-2">₹59,999</del> -->
                                    </p>
                                    <p class="fw-bold mb-1 text-black">
                                        ₹3,000 - 3 Hour
                                        <!-- <del class="text-muted ms-2">₹1,00000</del> -->
                                    </p>
                                    <p class="text-success small">Limited-time offer — save ₹1,500!</p>
                                    <div class="trending-btn d-flex">
                                        <a class="border__btn zindex-5" href="{{ route('studio.book.form', ['studio' => 'studio-2']) }}">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="col-lg-12 mt-lg-3 mt-3">
                        <div class="achievement-card d-flex flex-row " data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                            <div class="row">
                                <div class="img-box position-relative col-lg-4">
                                    <img src="{{ asset('assets/img/studio/studio3A/Studio 3A.jpg') }}" alt="Street Dance" class="w-100 h-100 object-cover custome-radius-top">

                                    <!-- offer badge -->
                                    <!-- <div class="offer-badge position-absolute top-0 start-1 bg-danger text-white px-2 py-1 fw-bold custome-radius ">
                                    20% OFF
                                </div> -->
                                    <!-- <div class="ms-availability-badge bg-success text-white p-1 rounded position-absolute top-0 start-1 m-2">
                                        Available
                                    </div> -->
                                </div>

                                <div class="content col-lg-5 col-12">
                                    <p class="text-black-light-custome mb-1"><i class="fa-solid fa-location-dot"></i> Andheri, Mumbai</p>
                                    <h3 class="ms-event-title text-black-custome mt-1 mb-3"><a href="{{ route('studio.book.form', ['studio' => 'studio-3']) }}">STUDIO 3A- 650 SQ.FT</a></h3>

                                    <p class="text-black-light-custome mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <p><span class="bg-light font-mini">Mirrors</span> <span class="bg-light font-mini">Sound system</span> <span class="bg-light font-mini">Cameras</span> <span class="bg-light font-mini">Changing rooms</span> <span class="bg-light font-mini">Air conditioning</span></p>
                                    <p class="text-black-light-custome mb-1">
                                        <i class="fa-solid fa-rotate-left me-1"></i>
                                        Free cancellation up to 24 hours before booking
                                    </p>
                                </div>
                                <div class="pricing col-lg-3 d-flex flex-column justify-content-center">
                                    <p class="fw-bold mb-1 text-black fs-4">
                                        ₹2,000/Hour
                                        <!-- <del class="text-muted ms-2">₹59,999</del> -->
                                    </p>
                                    <p class="fw-bold mb-1 text-black">
                                        ₹5,500 - 3 Hour
                                        <!-- <del class="text-muted ms-2">₹1,00000</del> -->
                                    </p>
                                    <p class="text-success small">Limited-time offer — save ₹500!</p>
                                    <div class="trending-btn d-flex">
                                        <a class="border__btn zindex-5" href="{{ route('studio.book.form', ['studio' => 'studio-3']) }}">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!-- Slide 4 -->
                    <div class="col-lg-12 mt-lg-3 mt-3">
                        <div class="achievement-card d-flex flex-row " data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                            <div class="row">
                                <div class="img-box position-relative col-lg-4">
                                    <img src="{{ asset('assets/img/studio/studio3B/Studio 3B (6).jpg') }}" alt="Street Dance" class="w-100 h-100 object-cover custome-radius-top">

                                    <!-- offer badge -->
                                    <!-- <div class="offer-badge position-absolute top-0 start-1 bg-danger text-white px-2 py-1 fw-bold custome-radius ">
                                    20% OFF
                                </div> -->
                                    <!-- <div class="ms-availability-badge bg-success text-white p-1 rounded position-absolute top-0 start-1 m-2">
                                        Available
                                    </div> -->
                                </div>

                                <div class="content col-lg-5 col-12">
                                    <p class="text-black-light-custome mb-1"><i class="fa-solid fa-location-dot"></i> Andheri, Mumbai</p>
                                    <h3 class="ms-event-title text-black-custome mt-1 mb-3"><a href="{{ route('studio.book.form', ['studio' => 'studio-4']) }}">STUDIO 3B- 650 SQ.FT</a></h3>

                                    <p class="text-black-light-custome mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <p><span class="bg-light font-mini">Mirrors</span> <span class="bg-light font-mini">Sound system</span> <span class="bg-light font-mini">Cameras</span> <span class="bg-light font-mini">Changing rooms</span> <span class="bg-light font-mini">Air conditioning</span></p>
                                    <p class="text-black-light-custome mb-1">
                                        <i class="fa-solid fa-rotate-left me-1"></i>
                                        Free cancellation up to 24 hours before booking
                                    </p>
                                </div>
                                <div class="pricing col-lg-3 d-flex flex-column justify-content-center">
                                    <p class="fw-bold mb-1 text-black fs-4">
                                        ₹2,000/Hour
                                        <!-- <del class="text-muted ms-2">₹59,999</del> -->
                                    </p>
                                    <p class="fw-bold mb-1 text-black">
                                        ₹5,500 - 3 Hour
                                        <!-- <del class="text-muted ms-2">₹1,00000</del> -->
                                    </p>
                                    <p class="text-success small">Limited-time offer — save ₹500!</p>
                                    <div class="trending-btn d-flex">
                                        <a class="border__btn zindex-5" href="{{ route('studio.book.form', ['studio' => 'studio-4']) }}">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!-- Slide 5 -->
                    <div class="col-lg-12 mt-lg-4 mt-4">
                        <div class="achievement-card d-flex flex-row " data-aos="fade-up" data-aos-delay="500" data-aos-duration="800">
                            <div class="row">
                                <div class="img-box position-relative col-lg-4">
                                    <img src="{{ asset('assets/img/studio/studio1.jpg') }}" alt="Street Dance" class="w-100 h-100 object-cover custome-radius-top">

                                    <!-- offer badge -->
                                    <!-- <div class="offer-badge position-absolute top-0 start-1 bg-danger text-white px-2 py-1 fw-bold custome-radius ">
                                    20% OFF
                                </div> -->
                                    <!-- <div class="ms-availability-badge bg-success text-white p-1 rounded position-absolute top-0 start-1 m-2">
                                        Available
                                    </div> -->
                                </div>

                                <div class="content col-lg-5 col-12">
                                    <p class="text-black-light-custome mb-1"><i class="fa-solid fa-location-dot"></i> Andheri, Mumbai</p>
                                    <h3 class="ms-event-title text-black-custome mt-1 mb-3"><a href="{{ route('studio.book.form', ['studio' => 'studio-5']) }}">STUDIO 3 FULL</a></h3>

                                    <p class="text-black-light-custome mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <p><span class="bg-light font-mini">Mirrors</span> <span class="bg-light font-mini">Sound system</span> <span class="bg-light font-mini">Cameras</span> <span class="bg-light font-mini">Changing rooms</span> <span class="bg-light font-mini">Air conditioning</span></p>
                                    <p class="text-black-light-custome mb-1">
                                        <i class="fa-solid fa-rotate-left me-1"></i>
                                        Free cancellation up to 24 hours before booking
                                    </p>

                                </div>
                                <div class="pricing col-lg-3 d-flex flex-column justify-content-center">
                                    <p class="fw-bold mb-1 text-black fs-4">
                                        ₹4,000/Hour
                                        <!-- <del class="text-muted ms-2">₹59,999</del> -->
                                    </p>
                                    <p class="fw-bold mb-1 text-black">
                                        ₹11,000 - 3 Hour
                                        <!-- <del class="text-muted ms-2">₹1,00000</del> -->
                                    </p>
                                    <p class="text-success small">Limited-time offer — save ₹1,000!</p>
                                    <div class="trending-btn d-flex">
                                        <a class="border__btn zindex-5" href="{{ route('studio.book.form', ['studio' => 'studio-5']) }}">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </section>
        <!-- courses Area End -->


        @push('style')
        <style>
            .achievement-card {
                height: auto;
                box-shadow: 0 4px 12px rgba(222, 64, 56, 0.4);
                border: 1px solid red;
            }

            .font-mini {
                font-size: 0.7rem !important;
                border-radius: 12px;
                padding: 2px 6px !important;
                color: grey;
            }

            .ms-event-title {
                background: linear-gradient(90deg, #de4038 0%, #dea738 100%);
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }

            .img-box {
                height: auto;
                clip-path: none;
            }

            .custome-radius-top {
                border-radius: 12px 12px 12px 12px;
            }

            .content, .pricing {
                padding: 15px 25px;
                justify-content: start;
            }

            .ms-trending2-item:hover .trending__title {
                color: white;
            }
        </style>
        @endpush

        <section class="work__area pt-125 pb-60 include__bg" alt="vactoe-shape.png">
            <div class="container">
                <div class="row justify-content-center mb-25 bdFadeUp">
                    <div class="col-xl-8">
                        <div class="ms-event2-top text-center">
                            <div class="section__title-wrapper mb-40 bd-title-anim">
                                <span class="section__subtitle">What we offer you</span>
                                <h2 class="section__title">Lorem ipsum dolor sem! <span class="animated-underline active">
                                        Dance Journey</span>

                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center bdFadeUp">
                    <div class="col-xl-6">
                        <div class="gallery">
                            <img src="{{ asset('assets/img/studio/studio2.jpg') }}" alt="work image">
                            <img src="{{ asset('assets/img/studio/studio1.jpg') }}" alt="work image">
                            <img src="{{ asset('assets/img/studio/studio3.jpg') }}" alt="work image">
                            <img src="{{ asset('assets/img/studio/main.jpg') }}" alt="work image">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="work__content-wrapper work__content-space mb-70 pl-40">

                            <div class="work__features-inner">
                                <div class="ms-faq-wrap ms-faq-2column">
                                    <div class="accordion p-relative" id="accordionExample2">
                                        <div class="ms-faq-group w-100">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSeven">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseSeven" aria-expanded="true"
                                                        aria-controls="collapseSeven">Create Creative Videos</button>
                                                </h2>
                                                <div id="collapseSeven" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingSeven"
                                                    data-bs-parent="#accordionExample2">
                                                    <div class="accordion-body">Bring your ideas to life with our advanced video production facilities. Our studio is equipped with the latest technology to help you produce captivating and imaginative video content. From concept to completion, our space supports your vision every step of the way.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingEight">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseEight" aria-expanded="false"
                                                        aria-controls="collapseEight">
                                                        Professional Photoshoots
                                                    </button>
                                                </h2>
                                                <div id="collapseEight" class="accordion-collapse collapse"
                                                    aria-labelledby="headingEight"
                                                    data-bs-parent="#accordionExample2">
                                                    <div class="accordion-body">Capture stunning images with our professional studio setup. Our space offers a variety of backdrops, props, and lighting options to ensure your photoshoots are picture-perfect. Whether it’s for a portfolio, marketing campaign, or personal project, Kings Creator Space has got you covered.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingNine">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                                        aria-expanded="false" aria-controls="collapseNine">
                                                        Music Video Creation
                                                    </button>
                                                </h2>
                                                <div id="collapseNine" class="accordion-collapse collapse"
                                                    aria-labelledby="headingNine"
                                                    data-bs-parent="#accordionExample2">
                                                    <div class="accordion-body">Craft and film your next music video in a creative environment that inspires. Our studio provides all the tools you need to produce a visually compelling music video that stands out. Work with our experienced team to bring your musical vision to life.
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
            </div>

        </section>

        <!-- work area start -->
        <section class="work__area pt-125 pb-60 include__bg d-none" alt="vactoe-shape.png">
            <div class="container">
                <div class="row justify-content-center mb-25 bdFadeUp">
                    <div class="col-xl-8">
                        <div class="ms-event2-top text-center">
                            <div class="section__title-wrapper mb-40 bd-title-anim">
                                <span class="section__subtitle">What we offer you</span>
                                <h2 class="section__title">Lorem ipsum dolor sem! <span class="animated-underline active">
                                        Dance Journey</span>

                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center bdFadeUp">
                    <div class="col-xl-6">
                        <div class="work__thumb-wrapper d-inline-block p-relative mb-60">
                            <div class="work__thumb-inner">
                                <div class="work__thumb">
                                    <img src="{{ asset('assets/img/studio/studio2.jpg') }}" alt="work image" class="w-100 h-100 object-cover">
                                </div>
                                <div class="work__small-thumb">
                                    <div class="work__thumb">
                                        <img src="{{ asset('assets/img/studio/studio1.jpg') }}" alt="work image" class="w-100 h-100 object-cover">
                                    </div>
                                    <div class="work__thumb">
                                        <img src="{{ asset('assets/img/studio/studio3.jpg') }}" alt="work image" class="w-100 h-100 object-cover">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="work__content-wrapper work__content-space mb-70 pl-40">

                            <div class="work__features-inner">
                                <div class="ms-faq-wrap ms-faq-2column">
                                    <div class="accordion p-relative" id="accordionExample2">
                                        <div class="ms-faq-group w-100">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSeven">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseSeven" aria-expanded="true"
                                                        aria-controls="collapseSeven">Create Creative Videos</button>
                                                </h2>
                                                <div id="collapseSeven" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingSeven"
                                                    data-bs-parent="#accordionExample2">
                                                    <div class="accordion-body">Bring your ideas to life with our advanced video production facilities. Our studio is equipped with the latest technology to help you produce captivating and imaginative video content. From concept to completion, our space supports your vision every step of the way.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingEight">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseEight" aria-expanded="false"
                                                        aria-controls="collapseEight">
                                                        Professional Photoshoots
                                                    </button>
                                                </h2>
                                                <div id="collapseEight" class="accordion-collapse collapse"
                                                    aria-labelledby="headingEight"
                                                    data-bs-parent="#accordionExample2">
                                                    <div class="accordion-body">Capture stunning images with our professional studio setup. Our space offers a variety of backdrops, props, and lighting options to ensure your photoshoots are picture-perfect. Whether it’s for a portfolio, marketing campaign, or personal project, Kings Creator Space has got you covered.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingNine">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                                        aria-expanded="false" aria-controls="collapseNine">
                                                        Music Video Creation
                                                    </button>
                                                </h2>
                                                <div id="collapseNine" class="accordion-collapse collapse"
                                                    aria-labelledby="headingNine"
                                                    data-bs-parent="#accordionExample2">
                                                    <div class="accordion-body">Craft and film your next music video in a creative environment that inspires. Our studio provides all the tools you need to produce a visually compelling music video that stands out. Work with our experienced team to bring your musical vision to life.
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
            </div>

        </section>
        <!-- work area end -->
        <!-- Why Choose Us Area Start Here  -->
        <section class="ms-choose-area pt-125 pb-105 ms-bg-2">
            <div class="container">
                <div class="row align-items-end mb-25 bdFadeUp">
                    <div class="col-lg-7">
                        <div class="section__title-wrapper mb-40">
                            <h2 class="section__title mb-35 bd-title-anim">Equipment & Gears</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit laudantium nulla asperiores nisi fugiat natus, perspiciatis magnam odio laborum voluptatem. Temporibus aspernatur ducimus rem, quas iste odit nostrum quo laudantium.</p>
                        </div>
                    </div>
                    <!-- <div class="col-lg-5">
                        <div class="d-flex justify-content-lg-end">
                            <div class="ms-review-part mb-40">
                                <div class="ms-review-gap d-flex align-items-center">
                                    <div class="ms-review-left">
                                        <h3>Excellent :</h3>
                                        <p>1050 Review On</p>
                                    </div>
                                    <div class="ms-review-right">
                                        <img src="assets/img/footer/start-01.png" alt="review img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="row mb-45 bdFadeUp">
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-choose-item mb-25 border-color">
                            <div class="ms-choose-icon d-inline-block p-relative">
                                <i class="flaticon-dollar"></i>
                                <!-- <span>01</span> -->
                            </div>
                            <h3 class="ms-choose-title">Pay no more than booking direct</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-choose-item mb-25 border-color">
                            <div class="ms-choose-icon d-inline-block p-relative ">
                                <i class="flaticon-theater"></i>
                                <!-- <span>02</span> -->
                            </div>
                            <h3 class="ms-choose-title">Our acts are vetted and
                                road-tested</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-choose-item mb-25 border-color">
                            <div class="ms-choose-icon d-inline-block p-relative">
                                <i class="flaticon-verified"></i>
                                <!-- <span>03</span> -->
                            </div>
                            <h3 class="ms-choose-title">Your booking is secure
                                in our site</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-choose-item mb-25 border-color">
                            <div class="ms-choose-icon d-inline-block p-relative">
                                <i class="flaticon-appointment"></i>
                                <!-- <span>04</span> -->
                            </div>
                            <h3 class="ms-choose-title">Booking is just the
                                begin night</h3>
                        </div>
                    </div>
                </div>
                <div class="ms-border2 pb-130">
                    <div class="row bdFadeUp">
                        <div class="col-xl-12">
                            <div class="ms-choose-bg m-img ms-br-15 fix custome-height-30">
                                <img src="{{ asset('assets/img/studio/main.jpg') }}" alt="choose img" class="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Us Area End Here  -->
    </main>
</div>

@endsection

@push('style')
<style>
    .ms-choose-title {
        color: var(--clr-common-heading);
    }
</style>
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