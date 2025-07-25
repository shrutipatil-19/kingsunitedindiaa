@extends('layout.app')
@section('content')
    <div class="ms-all-content ms-content-mobile-space pt-140">
        <main class="bg-w-3">
            <!-- Banner Area Start Here  -->
            <section class="ms-about-area fix">
                {{-- <div class="ms-about-bg include__bg p-relative zindex-1 pt-120 pb-130"
                data-background="https://placehold.co/1920x600" class="w-100" style="height:50vh;"> --}}
                {{-- <div class="ms-overlay ms-overlay5 p-absolute zindex--1"></div> --}}
                <div class="row justify-content-center">
                    <div class="col-12">
                        {{-- <img src="https://placehold.co/1920x600" alt="" srcset="" class="w-100"> --}}
                        <picture>
                            <source media="(min-width:650px)" srcset="https://placehold.co/1920x600" class="w-100">
                            <source media="(min-width:465px)" srcset="https://placehold.co/400x400" class="w-100">
                            <img src="https://placehold.co/400x400" alt="Flowers" class="w-100">
                          </picture>
                    </div>
                </div>
            </section>
            <!-- Production area start -->
            <section class="production-section work__area pt-90 pb-45">
                <div class="container">
                    <div class="position-relative d-md-flex">
                        <div class="production-img">
                            <img src="{{ asset('assets/img/kings crew/4.jpg') }}" alt="Production Image">
                        </div>
                        <div class="production-content content-right section__title-wrapper mb-50 ms-bg-2">
                            <h2 class="section__title mb-40 bd-title-anim">Production</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat porro asperiores, et dolore
                                mollitia, possimus nostrum numquam, sapiente esse quo incidunt optio doloremque minus.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam numquam debitis quos
                                recusandae repellat, nulla rerum placeat a nemo deserunt esse mollitia adipisci.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Production area end -->

            <!-- Editor area start -->
            <section class="production-section work__area pt-90 pb-45">
                <div class="container">
                    <div class="position-relative d-md-flex flex-row-reverse">
                        <div class="production-img">
                            <img src="{{ asset('assets/img/kings crew/4.jpg') }}" alt="Production Image">
                        </div>
                        <div class="production-content content-left section__title-wrapper mb-50 ms-bg-2">
                            <h2 class="section__title mb-40 bd-title-anim">Editor</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat porro asperiores, et dolore
                                mollitia, possimus nostrum numquam, sapiente esse quo incidunt optio doloremque minus.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam numquam debitis quos
                                recusandae repellat, nulla rerum placeat a nemo deserunt esse mollitia adipisci.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- editor area end -->

                      <!-- Dop area start -->
                      <section class="production-section work__area pt-90 pb-45">
                        <div class="container">
                            <div class="position-relative d-md-flex">
                                <div class="production-img">
                                    <img src="{{ asset('assets/img/kings crew/4.jpg') }}" alt="Production Image">
                                </div>
                                <div class="production-content content-right section__title-wrapper mb-50 ms-bg-2">
                                    <h2 class="section__title mb-40 bd-title-anim">DOP</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat porro asperiores, et dolore
                                        mollitia, possimus nostrum numquam, sapiente esse quo incidunt optio doloremque minus.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam numquam debitis quos
                                        recusandae repellat, nulla rerum placeat a nemo deserunt esse mollitia adipisci.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Dop area end -->

                    <!-- Direction area start -->
            <section class="production-section work__area pt-90 pb-45">
                <div class="container">
                    <div class="position-relative d-md-flex flex-row-reverse">
                        <div class="production-img">
                            <img src="{{ asset('assets/img/kings crew/4.jpg') }}" alt="Production Image">
                        </div>
                        <div class="production-content content-left section__title-wrapper mb-50 ms-bg-2">
                            <h2 class="section__title mb-40 bd-title-anim">Direction</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat porro asperiores, et dolore
                                mollitia, possimus nostrum numquam, sapiente esse quo incidunt optio doloremque minus.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam numquam debitis quos
                                recusandae repellat, nulla rerum placeat a nemo deserunt esse mollitia adipisci.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Direction area end -->


            <!-- Editor area start -->
            <section class="work__area pt-100 pb-30 bg-w-3 d-none">
                <div class="container">
                    <div class="row align-items-center bdFadeUp">
                        <div class="col-xl-6 col-lg-10">
                            <div class="work__content-wrapper p-relative mb-60">
                                <div class="section__title-wrapper mb-50">
                                    <h2 class="section__title mb-40 bd-title-anim text-black-custome">Editor <span
                                            class="text-bg"> </span></h2>
                                    <p class="text-black-custome">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Quaerat porro asperiores, et dolore mollitia, possimus nostrum numquam, sapiente
                                        esse quo incidunt optio doloremque minus. Accusantium culpa nihil autem corporis
                                        neque sequi. Dolorem sint libero obcaecati dolorum voluptate nemo, ipsam asperiores.
                                    </p>
                                    <p class="text-black-custome">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Aliquam numquam debitis quos recusandae repellat, nulla rerum placeat a nemo
                                        deserunt esse mollitia adipisci, modi assumenda, labore non est accusantium quae
                                        consectetur et. Illum, a laudantium.</p>
                                    <!-- <div class="work__features-btn ms-work3-feature-btn">
                                        <a class="ms-fill-btn" href="#">The Kings</a>
                                    </div> -->
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="ms-work3-thumb-wrap d-inline-block p-relative mb-60 w-100">
                                <div class="ms-work3-inner">
                                    <div class="ms-work3-thumb m-img p-relative fix ms-br-20">
                                        <div class="p-absolute"></div>
                                        <img src="https://placehold.co/400x400" alt="work image">
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- Editor area end -->

            <!-- DOP area start -->
            <section class="work__area pt-100 pb-30 d-none">
                <div class="container">
                    <div class="row align-items-center bdFadeUp">
                        <div class="col-xl-6">
                            <div class="ms-work3-thumb-wrap d-inline-block p-relative mb-60 w-100">
                                <div class="ms-work3-inner">
                                    <div class="ms-work3-thumb m-img p-relative fix ms-br-20">
                                        <div class="p-absolute"></div>
                                        <img src="https://placehold.co/400x400" alt="work image">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-10">
                            <div class="work__content-wrapper p-relative mb-60">
                                <div class="section__title-wrapper mb-50">
                                    <h2 class="section__title mb-40 bd-title-anim">DOP <span class="text-bg"> </span></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat porro asperiores,
                                        et dolore mollitia, possimus nostrum numquam, sapiente esse quo incidunt optio
                                        doloremque minus. Accusantium culpa nihil autem corporis neque sequi. Dolorem sint
                                        libero obcaecati dolorum voluptate nemo, ipsam asperiores.
                                    </p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam numquam debitis quos
                                        recusandae repellat, nulla rerum placeat a nemo deserunt esse mollitia adipisci,
                                        modi assumenda, labore non est accusantium quae consectetur et. Illum, a laudantium.
                                    </p>
                                    <!-- <div class="work__features-btn ms-work3-feature-btn">
                                        <a class="ms-fill-btn" href="#">The Kings</a>
                                    </div> -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- DOP area end -->

            <!-- DIRECTION area start -->
            <section class="work__area pt-100 pb-30 bg-w-3 d-none">
                <div class="container">
                    <div class="row align-items-center bdFadeUp">
                        <div class="col-xl-6 col-lg-10">
                            <div class="work__content-wrapper p-relative mb-60">
                                <div class="section__title-wrapper mb-50">
                                    <h2 class="section__title mb-40 bd-title-anim text-black-custome">Direction <span
                                            class="text-bg"> </span></h2>
                                    <p class="text-black-custome">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Quaerat porro asperiores, et dolore mollitia, possimus nostrum numquam, sapiente
                                        esse quo incidunt optio doloremque minus. Accusantium culpa nihil autem corporis
                                        neque sequi. Dolorem sint libero obcaecati dolorum voluptate nemo, ipsam asperiores.
                                    </p>
                                    <p class="text-black-custome">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Aliquam numquam debitis quos recusandae repellat, nulla rerum placeat a nemo
                                        deserunt esse mollitia adipisci, modi assumenda, labore non est accusantium quae
                                        consectetur et. Illum, a laudantium.</p>
                                    <!-- <div class="work__features-btn ms-work3-feature-btn">
                                        <a class="ms-fill-btn" href="#">The Kings</a>
                                    </div> -->
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="ms-work3-thumb-wrap d-inline-block p-relative mb-60 w-100">
                                <div class="ms-work3-inner">
                                    <div class="ms-work3-thumb m-img p-relative fix ms-br-20">
                                        <div class="p-absolute"></div>
                                        <img src="https://placehold.co/400x400" alt="work image">
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- DIRECTION area end -->
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
    </style>
    <style>
        .production-section {
            position: relative;
            overflow: hidden;
        }

        .production-img img {
            width: 100%;
            height: 50vh;
            border-radius: 0;
        }

        .production-content {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            padding: 40px 80px 40px 60px;
            color: #fff;
            max-width: 60%;
            border-radius: 0;
        }

        .production-content.content-right {
            right: -20px;
        }

        .production-content.content-left {
            left: -20px;
        }

        .production-img {
            width: 70%;
        }

        /* Reversed section content */
        .reverse-content {
            left: 0px;
            right: auto;
        }

        /* Reversed image floats right */
        .end-img {
            position: absolute;
            right: 0;
            top: 0;
        }

        /* Responsive fix */
        @media (max-width: 991.98px) {

            .production-content,
            .reverse-content {
                position: static;
                transform: none;
                max-width: 100%;
                color: #000;
                padding: 20px 20px;
            }

            .production-img,
            .end-img {
                position: static;
                width: 100%;
            }

            .production-img img {
                width: 100%;
            }
        }
    </style>
@endpush
