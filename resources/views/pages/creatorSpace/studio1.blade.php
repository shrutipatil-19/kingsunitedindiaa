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
                                <h2 class="ms-title2 white-text mb-30 bd-title-anim">STUDIO 1
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

        <!-- work area end -->
    </main>
</div>
@endsection