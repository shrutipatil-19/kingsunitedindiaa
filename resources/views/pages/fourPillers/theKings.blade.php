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
                                <h2 class="section__title mb-40 bd-title-anim">About Kings Crew</h2>
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


        <!-- Event Area Start Here  -->
        <section class="timeline-section ms-bg-2 ms-event2-area include__bg zindex-1 p-relative pt-140 pb-105">
            <div class="ms-overlay ms-overlay1 zindex--1"></div>
            <div class="container">
                <div class="row justify-content-center mb-25 bdFadeUp">
                    <div class="col-xl-8">
                        <div class="ms-event2-top text-center">

                            <div class="section__title-wrapper mb-40 bd-title-anim">
                                <span class="section__subtitle">Awards</span>
                                <h2 class="section__title">Award Functions & Guest performances<span class="animated-underline active">
                                        Dance Journey</span>

                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-line">

                    <!-- Timeline Item -->
                    <div class="row">
                        <div class="timeline-item col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="ms-news-meta d-inline-block">
                                <span>Feb 23, 2010</span>

                            </div>
                            <h3 class="ms-event-title mt-4 mb-2"><a href="#">Jhalak Dikhala Ja Season 7</a></h3>
                            <p class="text-white">Showcased an incredible achievement by winning
                                Entertainment ke liye kuch bhi karega season 3</p>
                        </div>
                        <div class="col-lg-6 mt-3 height-200" data-aos="fade-left" data-aos-delay="100" data-aos-duration="800">
                            <img src="{{ asset('assets/img/kings img/banner/bann2.jpg') }}" alt="" class="w-100 h-100 object-cover">
                        </div>
                    </div>
                    <div class="row">
                        <div class="timeline-item col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="ms-news-meta d-inline-block">
                                <span>Feb 23, 2010</span>

                            </div>
                            <h3 class="ms-event-title mt-4 mb-2"><a href="#">Season 8 IIFA Awards</a></h3>
                            <p class="text-white">First Indian Crew crowned as World Champions in NBC World of Dance.</p>

                        </div>
                        <div class="col-lg-6 mt-3 height-200" data-aos="fade-left" data-aos-delay="100" data-aos-duration="800">
                            <img src="{{ asset('assets/img/kings img/banner/bann2.jpg') }}" alt="" class="w-100 h-100 object-cover">
                        </div>
                    </div>

                    <div class="row">
                        <div class="timeline-item col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="ms-news-meta d-inline-block">
                                <span>Feb 23, 2010</span>

                            </div>
                            <h3 class="ms-event-title mt-4 mb-2"><a href="#">Filmfare Award</a></h3>
                            <p class="text-white">First Indian Crew crowned as World Champions in NBC World of Dance.</p>

                        </div>
                        <div class="col-lg-6 mt-3 height-200" data-aos="fade-left" data-aos-delay="100" data-aos-duration="800">
                            <img src="{{ asset('assets/img/kings img/banner/bann2.jpg') }}" alt="" class="w-100 h-100 object-cover">
                        </div>
                    </div>
                    <div class="row">
                        <div class="timeline-item col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="ms-news-meta d-inline-block">
                                <span>Feb 23, 2010</span>

                            </div>
                            <h3 class="ms-event-title mt-4 mb-2"><a href="#">Star Screen Awards</a></h3>
                            <p class="text-white">First Indian Crew crowned as World Champions in NBC World of Dance.</p>

                        </div>
                        <div class="col-lg-6 mt-3 height-200" data-aos="fade-left" data-aos-delay="100" data-aos-duration="800">
                            <img src="{{ asset('assets/img/kings img/banner/bann2.jpg') }}" alt="" class="w-100 h-100 object-cover">
                        </div>
                    </div>

                    <div class="row">
                        <div class="timeline-item col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="ms-news-meta d-inline-block">
                                <span>Feb 23, 2010</span>

                            </div>
                            <h3 class="ms-event-title mt-4 mb-2"><a href="#">Zee Cine Awards</a></h3>
                            <p class="text-white">First Indian Crew crowned as World Champions in NBC World of Dance.</p>

                        </div>
                        <div class="col-lg-6 mt-3 height-200" data-aos="fade-left" data-aos-delay="100" data-aos-duration="800">
                            <img src="{{ asset('assets/img/kings img/banner/bann2.jpg') }}" alt="" class="w-100 h-100 object-cover">
                        </div>
                    </div>

                    <div class="row">
                        <div class="timeline-item col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="ms-news-meta d-inline-block">
                                <span>Feb 23, 2010</span>

                            </div>
                            <h3 class="ms-event-title mt-4 mb-2"><a href="#">Big Star Entertainment Awards</a></h3>
                            <p class="text-white">First Indian Crew crowned as World Champions in NBC World of Dance.</p>

                        </div>
                        <div class="col-lg-6 mt-3 height-200" data-aos="fade-left" data-aos-delay="100" data-aos-duration="800">
                            <img src="{{ asset('assets/img/kings img/banner/bann2.jpg') }}" alt="" class="w-100 h-100 object-cover">
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Event Area End Here  -->
        @include('partial.client')
        <!-- CTA Area Start Here  -->
        <section class="ms-cta-area pt-130 pb-130 p-relative zindex-10 d-none">
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
<!-- award -->

<style>
    .timeline-line {
        position: relative;
        background: transparent;
        padding: 15px 20px;
        margin-bottom: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        padding-left: 20px;
        /* for space to see the colored strip */
    }

    .timeline-line::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 3px;
        background: linear-gradient(90deg, #de4038 0%, #dea738 100%);
        border-radius: 2px;
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
        background: linear-gradient(90deg, #de4038 0%, #dea738 100%);
        border-radius: 50%;
        z-index: 1;
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