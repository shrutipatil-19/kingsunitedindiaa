@extends('layout.app')
@section('content')
<div class="ms-all-content ms-content-mobile-space pt-130">
    <main>
        <!-- parallax effect start -->
        <section class="ms-cta-area ms-event2-area include__bg pt-130 pb-130 p-relative zindex-10" style="background-image: url('{{ asset('assets/img/kings crew/2.jpg')}}');background-attachment: fixed;height: 60vh;">
            <!-- <div class="ms-overlay ms-overlay1 zindex--1"></div> -->
        </section>
        <!-- parallax effect end -->

        <!-- Workshop area start -->
        <section class="ms-news-area pt-90 pb-90 ms-bg-2">
            <div class="container">
                <div class="row align-items-end mb-25 bdFadeUp">
                    <div class="col-lg-6">
                        <div class="section__title-wrapper bd-title-anim">
                            <span class="section__subtitle">Workshops</span>
                            <h2 class="section__title">Upcoming <span class="animated-underline active">Workshops
                                </span>
                            </h2>
                        </div>
                    </div>

                </div>
                <div class="row bdFadeUp">
                    <div class="col-xl-3 col-md-3">
                        <div class="ms-news-item p-relative zindex-1 mb-40 hover-text-container">
                            <div class="ms-news-overlay p-absolute"></div>

                            <div class="ms-news-thumb w-img w-100 h-100">
                                <a href="#"><img src="https://placehold.co/400x400"
                                        alt=""></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute ">
                                <h3 class="ms-news-title mb-15 hover-text"><a href="#">Lorem ipsum dolor sit amet.</a></h3>


                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="ms-news-item p-relative zindex-1 mb-40 hover-text-container">
                            <div class="ms-news-overlay p-absolute"></div>

                            <div class="ms-news-thumb w-img w-100 h-100">
                                <a href="#"><img src="https://placehold.co/400x400"
                                        alt=""></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute">
                                <h3 class="ms-news-title mb-15 hover-text"><a href="#">Lorem ipsum dolor sit amet.</a></h3>


                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="ms-news-item p-relative zindex-1 mb-40 hover-text-container">
                            <div class="ms-news-overlay p-absolute"></div>

                            <div class="ms-news-thumb w-img w-100 h-100">
                                <a href="#"><img src="https://placehold.co/400x400"
                                        alt=""></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute">
                                <h3 class="ms-news-title mb-15 hover-text"><a href="#">Lorem ipsum dolor sit amet.</a></h3>


                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 d-none">
                        <div class="ms-news-item p-relative zindex-1 mb-40 hover-text-container">
                            <div class="ms-news-overlay p-absolute"></div>

                            <div class="ms-news-thumb w-img w-100 h-100">
                                <a href="#"><img src="https://placehold.co/400x400"
                                        alt=""></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute">
                                <h3 class="ms-news-title mb-15 hover-text"><a href="#">Lorem ipsum dolor sit amet.</a></h3>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Workshop area start -->

        <!-- parallax effect start -->
        <section class="ms-cta-area ms-event2-area include__bg pt-130 pb-130 p-relative zindex-10" style="background-image: url('{{ asset('assets/img/kings crew/2.jpg')}}');background-attachment: fixed;height: 60vh;">
            <!-- <div class="ms-overlay ms-overlay1 zindex--1"></div> -->
        </section>
        <!-- parallax effect end -->

        <!-- personal training area start -->
        <section class="ms-news-area pt-90 pb-90 ms-bg-2">
            <div class="container">
                <div class="row align-items-end mb-25 bdFadeUp">
                    <div class="col-lg-6">
                        <div class="section__title-wrapper bd-title-anim">
                            <span class="section__subtitle">Workshops</span>
                            <h2 class="section__title mb-3">
                                Private <span class="animated-underline active">Lessons
                                </span>
                            </h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In, architecto quasi? Unde itaque eius</p>
                            <div class="trending-btn d-flex mt-3">
                                <a class="border__btn zindex-5" href="http://192.168.29.5:8000/the-kings" data-bs-toggle="modal" data-bs-target="#modal2020">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- personal training area end -->

    </main>
</div>
@endsection

@push('style')
<style>
    .ms-trending3-img {
        height: 600px !important;
        border-radius: 0px !important;
    }

    .ms-trending3-img img {
        border-radius: 0px !important;
    }

    #header-sticky {

        background: black;
    }

    .border__btn {
        padding: 25px 60px;
        font-size: calc(1rem + 0.5vw);
        box-shadow: rgba(222, 64, 56, 0.4) 0px 4px 12px;
        transform: scale(1.05);
        color: rgb(255, 255, 255);
        background: linear-gradient(90deg, rgb(255, 90, 77) 0%, rgb(255, 192, 77) 100%);
    }
</style>
@endpush