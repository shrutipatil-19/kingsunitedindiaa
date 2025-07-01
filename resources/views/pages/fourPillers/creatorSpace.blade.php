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
                        <div class="ms-work3-thumb-wrap d-inline-block p-relative mb-60" data-aos="fade-right" data-aos-delay="100" data-aos-duration="800">
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
                                <p class="" data-aos="fade-left" data-aos-delay="100" data-aos-duration="800">Welcome to Kings Creator Space, where imagination meets innovation. Our state-of-the-art studio is designed to provide you with everything you need to create high-quality, engaging content. Whether you’re an aspiring artist, a seasoned professional, or just looking to have some fun, Kings Creator Space has something for everyone.</p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- work area end -->

        @include('partial.rental-studio')

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
                        <div class="ms-choose-item mb-25">
                            <div class="ms-choose-icon d-inline-block p-relative">
                                <i class="flaticon-dollar"></i>
                                <span>01</span>
                            </div>
                            <h3 class="ms-choose-title">Pay no more than booking
                                direct</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-choose-item mb-25">
                            <div class="ms-choose-icon d-inline-block p-relative">
                                <i class="flaticon-theater"></i>
                                <span>02</span>
                            </div>
                            <h3 class="ms-choose-title">Our acts are vetted and
                                road-tested</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-choose-item mb-25">
                            <div class="ms-choose-icon d-inline-block p-relative">
                                <i class="flaticon-verified"></i>
                                <span>03</span>
                            </div>
                            <h3 class="ms-choose-title">Your booking is secure
                                in our site</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-choose-item mb-25">
                            <div class="ms-choose-icon d-inline-block p-relative">
                                <i class="flaticon-appointment"></i>
                                <span>04</span>
                            </div>
                            <h3 class="ms-choose-title">Booking is just the
                                begin night</h3>
                        </div>
                    </div>
                </div>
                <div class="ms-border2 pb-130">
                    <div class="row bdFadeUp">
                        <div class="col-xl-12">
                            <div class="ms-choose-bg m-img ms-br-15 fix">
                                <img src="{{ asset('assets/img/choose/choose-bg.png') }}" alt="choose img">
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