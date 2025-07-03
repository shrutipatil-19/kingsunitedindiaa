@extends('layout.app')
@section('content')
<div class="ms-all-content ms-content-mobile-space pt-130">
    <main>
        <!-- banner Area Start Here  -->
        <section class="ms-about-area fix">
            <div class="ms-about-bg include__bg p-relative zindex-1 pt-120 pb-130"
                data-background="{{ asset('assets/img/about/about3.jpg') }}">
                <div class="ms-overlay ms-overlay5 p-absolute zindex--1"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="ms-about-content text-center">
                                <h2 class="ms-title2 white-text mb-30 bd-title-anim">COURSES
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner Area End Here  -->
        @include('partial.goldenPass')

        <!-- courses Area Start -->
        @include('partial.course-grid')
        <!-- Testimonial area end here  -->
        <section class="ms-tm2-area p-relative fix pt-130 pb-130">
            <!-- <div class="ms-tm2-line p-absolute">
            <img src="{{ asset('assets/img/testimonial/testimonial-line.png') }}" alt="testimonial line">
        </div> -->
            <div class="container">
                <div class="row justify-content-center bdFadeUp">
                    <div class="col-xl-6">
                        <div class="section__title-wrapper text-center mb-65 bd-title-anim">
                            <span class="section__subtitle">Awesome Feedbacks</span>
                            <h2 class="section__title">Peoples <span class="animated-underline active">Think
                                    About</span>
                                us
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="ms-tm2-imgs-wrap p-relative">

                    <div class="row justify-content-center bdFadeUp">
                        <div class="col-xl-8">
                            <div class="ms-tm2-wrap">
                                <div class="ms-tm2-active mb-60">
                                    <div class="ms-tm2-item text-center">
                                        <div class="ms-tm2-img-main">
                                            <div class="ms-tm2-img-wrap p-relative d-inline-block mx-auto">
                                                {{-- <div class="ms-tm2-signature w-img">
                                                <img src="{{ asset('assets/img/testimonial/testimonial-signature.png') }}"
                                                alt="testimonial signature">
                                            </div> --}}

                                        </div>
                                        <div class="ms-tm2-content pt-35">
                                            <div class="ms-tm2-quotation mb-25">
                                                <i class="flaticon-quotation"></i>
                                            </div>
                                            <p class="ms-tm2-text mb-30">This workshop was really amazing, as it gave a proper clarification about what all is gonna happen in the course and also what elements an individual has to work on to enter the fashion industry.A good path explainer and platform for those who want to enter this industry.</p>
                                            <div class="ms-tm2-author">
                                                <div class="d-flex justify-content-center align-items-center ">
                                                    <img src="https://ui-avatars.com/api/?name=Anveshika%20Singh"
                                                        alt="testimonial image" class="h-10"> &nbsp;&nbsp;&nbsp;
                                                    <span class="section__subtitle mb-0">Anveshika Singh</span>
                                                </div>
                                                <!-- <span class="ms-tm2-designation">CEO - XYZ Innovation</span> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-tm2-item text-center">
                                    <div class="ms-tm2-img-main">
                                        <div class="ms-tm2-img-wrap p-relative d-inline-block mx-auto">
                                            {{-- <div class="ms-tm2-signature w-img">
                                                <img src="{{ asset('assets/img/testimonial/testimonial-signature.png') }}"
                                            alt="testimonial signature">
                                        </div> --}}

                                    </div>
                                    <div class="ms-tm2-content pt-35">
                                        <div class="ms-tm2-quotation mb-25">
                                            <i class="flaticon-quotation"></i>
                                        </div>
                                        <p class="ms-tm2-text mb-30">Spacious studio in Andheri! We rented it to host some workshops and it was a great experience. A music system update would make it even better.</p>
                                        <div class="ms-tm2-author">
                                            <div class="d-flex justify-content-center align-items-center ">
                                                <img src="https://ui-avatars.com/api/?name=Soonruta%20Kothadia"
                                                    alt="testimonial image" class="h-10">&nbsp;&nbsp;&nbsp;
                                                <span class="section__subtitle mb-0">Soonruta Kothadia</span>
                                                <!-- <span class="ms-tm2-designation">CEO - XYZ Innovation</span> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ms-tm2-item text-center">
                                <div class="ms-tm2-img-main">
                                    <div class="ms-tm2-img-wrap p-relative d-inline-block mx-auto">
                                        {{-- <div class="ms-tm2-signature w-img">
                                                <img src="{{ asset('assets/img/testimonial/testimonial-signature.png') }}"
                                        alt="testimonial signature">
                                    </div> --}}
                                    {{-- <div class="m-img">
                                    <img src="https://ui-avatars.com/api/?name=Anishek%20Singh"
                                        alt="testimonial image">
                                </div> --}}
                                </div>
                                <div class="ms-tm2-content pt-35">
                                    <div class="ms-tm2-quotation mb-25">
                                        <i class="flaticon-quotation"></i>
                                    </div>
                                    <p class="ms-tm2-text mb-30">awesome and the class atmosphere is energetic.the teachers are very supportive and always ready to help</p>
                                    <div class="ms-tm2-author">
                                        <div class="d-flex justify-content-center align-items-center ">
                                            <img src="https://ui-avatars.com/api/?name=Anishek%20Singh"
                                                alt="testimonial image" class="h-10">&nbsp;&nbsp;&nbsp;
                                            <span class="section__subtitle mb-0">Anishek Singh</span>
                                            <!-- <span class="ms-tm2-designation">CEO - XYZ Innovation</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="ms-tm2-dots ms-tm-dots-horizontal ms-round-dots d-flex justify-content-center mt-20">
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial area end here  -->
    </main>
</div>
@endsection
