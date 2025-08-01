@extends('layout.app')
@section('content')
<div class="ms-all-content ms-content-mobile-space pt-140">
    <main>
           <!-- Banner Area Start Here  -->
           <section class="ms-about-area fix">
            <div class="ms-about-bg include__bg p-relative zindex-1 pt-120 pb-130"
                data-background="https://placehold.co/1920x600" style="height:50vh;">
                {{-- <div class="ms-overlay ms-overlay5 p-absolute zindex--1"></div> --}}
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="ms-about-content text-center">
                                <!-- <h2 class="ms-title2 white-text mb-30 bd-title-anim">SURESH MUKUND
                                    </h2>
                                    <p class="capitalize mb-65">CHOREOGRAPHER | EMMY-NOMINATED |
                                        INTERNATIONAL WORLD CHOREOGRAPHY AWARD WINNER
                                    </p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Area End Here  -->
        <!-- About Suresh area start -->
        <section class="work__area pt-100 pb-30 ">
            <div class="container">
                <div class="row align-items-center bdFadeUp">
                    <div class="col-xl-6">
                        <div class="ms-work3-thumb-wrap d-inline-block p-relative mb-60">
                            <div class="ms-work3-inner">
                                <div class="ms-work3-thumb m-img p-relative fix ms-br-20">
                                    <div class="p-absolute"></div>
                                    <img src="https://placehold.co/400x400" alt="work image" class="w-100">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-10">
                        <div class="work__content-wrapper p-relative mb-60">
                            <div class="section__title-wrapper service mb-50">
                                <h2 class="section__title mb-40 bd-title-anim">Live <span class="text-bg"> Performances </span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat porro asperiores, et dolore mollitia, possimus nostrum numquam, sapiente esse quo incidunt optio doloremque minus. Accusantium culpa nihil autem corporis neque sequi. Dolorem sint libero obcaecati dolorum voluptate nemo, ipsam asperiores.
                                </p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam numquam debitis quos recusandae repellat, nulla rerum placeat a nemo deserunt esse mollitia adipisci, modi assumenda, labore non est accusantium quae consectetur et. Illum, a laudantium.</p>
                                <!-- <div class="work__features-btn ms-work3-feature-btn">
                                    <a class="ms-fill-btn" href="#">The Kings</a>
                                </div> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Suresh area end -->

        <!-- parallax effect start -->
        <section class="ms-cta-area ms-event2-area include__bg pt-130 pb-130 p-relative zindex-10" style="background-image: url('{{ asset('assets/img/kings crew/4.jpg')}}');background-attachment: fixed;height: 60vh;">
            <!-- <div class="ms-overlay ms-overlay1 zindex--1"></div> -->
        </section>
        <!-- parallax effect end -->

        <!-- live performances grid Area Start -->
        <section class="ms-news-area pt-130 pb-90 bg-w-3 p-relative">
            <div class="ele2-text aos-init aos-animate" data-aos="fade-right" data-aos-duration="2000" bis_skin_checked="1">
                <h2 class="">THE <br> KINGS</h2>
            </div>
            <div class="container">
                 {{-- <div class="row align-items-end mb-25 bdFadeUp">
                    <div class="col-lg-6">
                        <div class="section__title-wrapper achievement mb-40 bd-title-anim">
                            <span class="section__subtitle">Perfomances</span>
                            <h2 class="section__title text-black-custome">Our <span class="animated-underline active">Performances
                                </span>
                            </h2>
                        </div>
                    </div>

                </div>  --}}

                <div class="row ms-trending3-wrap bdFadeUp">
                    <div class="col-xl-6 col-md-6">
                        <div class="ms-trending3-item p-relative fix mb-40">
                            <div class="ms-trending3-img w-img ms-br-15 p-relative fix mb-30">
                                <a href="#"><img src="https://placehold.co/400x400"
                                        alt="Winner of the World Choreography Award"></a>
                            </div>
                            <div class="ms-trending3-content">
                                <p class="ms-trending3-title text-black-custome text-center fs-4 fw-semibold"><a href="#">Lorem ipsum dolor sit amet.</a></p>
                                <p class="ms-trending3-title mb-25 text-black-custome text-center fs-5 fw-semibold"><a href="#">(2023 - 2024)</a></p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="ms-trending3-item p-relative fix mb-40">
                            <div class="ms-trending3-img w-img ms-br-15 p-relative fix mb-30">
                                <a href="#"><img src="https://placehold.co/400x400"
                                        alt="World Champion at Nbc's World of Dance"></a>
                            </div>
                            <div class="ms-trending3-content">
                                <p class="ms-trending3-title text-black-custome text-center fs-4 fw-semibold"><a href="#">Lorem ipsum dolor sit amet.</a></p>
                                <p class="ms-trending3-title mb-25 text-black-custome text-center fs-5 fw-semibold"><a href="#">(2023 - 2024)</a></p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="ms-trending3-item p-relative fix mb-40">
                            <div class="ms-trending3-img w-img ms-br-15 p-relative fix mb-30">
                                <a href="#"><img src="https://placehold.co/400x400"
                                        alt="Emmy-nominated Choreocrapher"></a>
                            </div>
                            <div class="ms-trending3-content">
                                <p class="ms-trending3-title text-black-custome text-center fs-4 fw-semibold"><a href="#">Lorem ipsum dolor sit amet.</a></p>
                                <p class="ms-trending3-title mb-25 text-black-custome text-center fs-5 fw-semibold"><a href="#">(2023 - 2024)</a></p>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-6">
                        <div class="ms-trending3-item p-relative fix mb-40">
                            <div class="ms-trending3-img w-img ms-br-15 p-relative fix mb-30">
                                <a href="#"><img src="https://placehold.co/400x400"
                                        alt="Recipient of the Dada Saheb PhalKe Award"></a>
                            </div>
                            <div class="ms-trending3-content">
                                <p class="ms-trending3-title text-black-custome text-center fs-4 fw-semibold"><a href="#">Lorem ipsum dolor sit amet.</a></p>
                                <p class="ms-trending3-title mb-25 text-black-custome text-center fs-5 fw-semibold"><a href="#">(2023 - 2024)</a></p>

                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-6 col-md-6">
                        <div class="ms-trending3-item p-relative fix mb-40">
                            <div class="ms-trending3-img w-img ms-br-15 p-relative fix mb-30">
                                <a href="#"><img src="https://placehold.co/400x400"
                                        alt="Judge on Dance Plus 5 (Reality Tv Show)"></a>


                            </div>
                            <div class="ms-trending3-content">
                                <p class="ms-trending3-title text-black-custome text-center fs-4 fw-semibold"><a href="#">Lorem ipsum dolor sit amet.</a></p>
                                <p class="ms-trending3-title mb-25 text-black-custome text-center fs-5 fw-semibold"><a href="#">(2023 - 2024)</a></p>

                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-xl-6 col-md-6">
                        <div class="ms-trending3-item p-relative fix mb-40">
                            <div class="ms-trending3-img w-img ms-br-15 p-relative fix mb-30">
                                <a href="#"><img src="https://placehold.co/400x400"
                                        alt="The Film ABCD 2 (2015) Was Inspired by
                                        Suresh Mukund and the Kings"></a>


                            </div>
                            <div class="ms-trending3-content">
                                <p class="ms-trending3-title text-black-custome text-center fs-4 fw-semibold"><a href="#">Lorem ipsum dolor sit amet.</a></p>
                                <p class="ms-trending3-title mb-25 text-black-custome text-center fs-5 fw-semibold"><a href="#">(2023 - 2024)</a></p>

                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- live performances grid Area End -->
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
    .ele2-text {
        position: absolute;
        top: 0%;
        right: 6%;
        /* opacity: 0.6 !important; */

    }

    .ele2-text h2 {
        font-family: "The Stranger Brush Personal Use";
        font-size: calc(max(10vw, 5rem));
        opacity: 0.2;
        rotate: 342deg;
        line-height: 0.7;
    }
</style>
@endpush