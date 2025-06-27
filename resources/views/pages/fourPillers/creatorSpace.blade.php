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
        <section class="work__area pt-100 pb-30">
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
                                <h2 class="section__title mb-40 bd-title-anim">Kings Creator Space: Unleash Your Creativity</h2>
                                <p class="">Welcome to Kings Creator Space, where imagination meets innovation. Our state-of-the-art studio is designed to provide you with everything you need to create high-quality, engaging content. Whether you’re an aspiring artist, a seasoned professional, or just looking to have some fun, Kings Creator Space has something for everyone.</p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- work area end -->
        <!-- Trending area start -->
        <section class="trending__area p-relative z-index-11 pt-130 pb-60 ms-bg-2">
            <div class="container">
                <div class="row align-items-end mb-25 bdFadeUp">
                    <div class="col-lg-8">
                        <div class="section__title-wrapper mb-40 bd-title-anim">
                            <span class="section__subtitle">Creator space</span>
                            <h2 class="section__title">Creator <span class="ms-text1">Space</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="trending-btn mb-40 d-flex justify-content-lg-end">
                            <a class="border__btn" href="">View All</a>
                        </div>
                    </div>
                </div>
                <!-- Swiper -->
                <div class="swiper achievementSwiper pt-lg-5 ms-trending3-wrap bdFadeUp">
                    <div class="swiper-wrapper pt-lg-4">
                        <!-- Slide 1 -->
                        <div class="swiper-slide ms-trending3-item p-relative fix mb-40">
                            <div class="ms-trending3-img w-img ms-br-15 p-relative fix mb-30">
                                <a href="#"><img src="{{ asset('assets/img/trending/01.jpg') }}"
                                        alt="trending image"></a>
                                <div class="trending__arrow">
                                    <a href="{{ asset('assets/img/trending/01.jpg') }}" class="popup-image"><i
                                            class="fa-regular fa-arrow-right-long"></i></a>
                                </div>

                                <div class="trending__number">
                                    <span>01</span>
                                </div>
                            </div>
                            <div class="ms-trending3-content">
                                <h3 class="ms-trending3-title mb-25"><a href="#">STUDIO 1 - 100 SQ.FT</a></h3>
                                <p class="ms-trending3-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, nobis! Beatae, dolorum.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide ms-trending3-item p-relative fix mb-40">
                            <div class="ms-trending3-img w-img ms-br-15 p-relative fix mb-30">
                                <a href="#"><img src="{{ asset('assets/img/trending/01.jpg') }}"
                                        alt="trending image"></a>
                                <div class="trending__arrow">
                                    <a href="{{ asset('assets/img/trending/01.jpg') }}" class="popup-image"><i
                                            class="fa-regular fa-arrow-right-long"></i></a>
                                </div>

                                <div class="trending__number">
                                    <span>02</span>
                                </div>
                            </div>
                            <div class="ms-trending3-content">
                                <h3 class="ms-trending3-title mb-25"><a href="#">STUDIO 2 - 750 SQ.FT</a></h3>
                                <p class="ms-trending3-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus incidunt iste quis.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide ms-trending3-item p-relative fix mb-40">
                            <div class="ms-trending3-img w-img ms-br-15 p-relative fix mb-30">
                                <a href="#"><img src="{{ asset('assets/img/trending/01.jpg') }}"
                                        alt="trending image"></a>
                                <div class="trending__arrow">
                                    <a href="{{ asset('assets/img/trending/01.jpg') }}" class="popup-image"><i
                                            class="fa-regular fa-arrow-right-long"></i></a>
                                </div>

                                <div class="trending__number">
                                    <span>03</span>
                                </div>
                            </div>
                            <div class="ms-trending3-content">
                                <h3 class="ms-trending3-title mb-25"><a href="#">STUDIO 3A- 650 SQ.FT</a></h3>
                                <p class="ms-trending3-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum fugiat corrupti sint.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide ms-trending3-item p-relative fix mb-40">
                            <div class="ms-trending3-img w-img ms-br-15 p-relative fix mb-30">
                                <a href="#"><img src="{{ asset('assets/img/trending/01.jpg') }}"
                                        alt="trending image"></a>
                                <div class="trending__arrow">
                                    <a href="{{ asset('assets/img/trending/01.jpg') }}" class="popup-image"><i
                                            class="fa-regular fa-arrow-right-long"></i></a>
                                </div>

                                <div class="trending__number">
                                    <span>04</span>
                                </div>
                            </div>
                            <div class="ms-trending3-content">
                                <h3 class="ms-trending3-title mb-25"><a href="#">STUDIO 3B- 650 SQ.FT</a></h3>
                                <p class="ms-trending3-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, harum eligendi! Dolorum!
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide ms-trending3-item p-relative fix mb-40">
                            <div class="ms-trending3-img w-img ms-br-15 p-relative fix mb-30">
                                <a href="#"><img src="{{ asset('assets/img/trending/01.jpg') }}"
                                        alt="trending image"></a>
                                <div class="trending__arrow">
                                    <a href="{{ asset('assets/img/trending/01.jpg') }}" class="popup-image"><i
                                            class="fa-regular fa-arrow-right-long"></i></a>
                                </div>

                                <div class="trending__number">
                                    <span>05</span>
                                </div>
                            </div>
                            <div class="ms-trending3-content">
                                <h3 class="ms-trending3-title mb-25"><a href="#">STUDIO 3 FULL</a></h3>
                                <p class="ms-trending3-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, harum eligendi! Dolorum!
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

            </div>
        </section>
        <!-- Trending area start -->
        <!-- work area start -->
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
                        <div class="work__thumb-wrapper d-inline-block p-relative mb-60">
                            <div class="work__thumb-inner">
                                <div class="work__thumb">
                                    <img src="{{ asset('assets/img/work/work-thumb-01.png') }}" alt="work image">
                                </div>
                                <div class="work__small-thumb">
                                    <div class="work__thumb">
                                        <img src="{{ asset('assets/img/work/work-thumb-02.png') }}" alt="work image">
                                    </div>
                                    <div class="work__thumb">
                                        <img src="{{ asset('assets/img/work/work-thumb-03.png') }}" alt="work image">
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
</div>
</section>
<!-- work area end -->
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