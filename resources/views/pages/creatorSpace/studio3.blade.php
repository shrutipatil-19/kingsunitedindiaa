@extends('layout.app')

@section('content')
<div class="ms-all-content ms-content-mobile-space pt-130">
    <main>
        <!-- About Area Start Here  -->
        <section class="ms-about-area fix">
            <div class="ms-about-bg include__bg p-relative zindex-1 pt-120 pb-130"
                data-background="{{ asset('assets/img/studio/mainStudio3A.jpg') }}">
                <div class="ms-overlay ms-overlay5 p-absolute zindex--1"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="ms-about-content text-center">
                                <h2 class="ms-title2 white-text mb-30 bd-title-anim">STUDIO 3A
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End Here  -->

        <!-- Event Details Area Start Here  -->
        <section class="ms-event-details-area pt-130 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-12">
                        <div class="ms-event-details-content mb-40">
                            <div class="ms-event-dimg m-img d-inline-block fix ms-br-15 mb-30">
                                <img src="{{ asset('assets/img/studio/studio3A/Studio 3A.jpg') }}" alt="studio 3A image">
                            </div>

                            <div class="ms-border2 pb-20 mb-30">
                                <h2 class="ms-event-dtitle">Studio 3A</h2>
                            </div>
                            <p class="mb-25">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias illo vero veritatis blanditiis distinctio accusamus inventore dolorem suscipit impedit quibusdam.</p>
                            <p class="mb-35">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus sed delectus nemo numquam doloribus. Nulla ratione, quam animi nesciunt vitae ut nostrum cupiditate a illo necessitatibus neque omnis optio aspernatur deserunt tempora dignissimos dolore beatae?.</p>



                            <div class="ms-border5 pt-30 mt-70">
                                <div class="row">
                                    <!-- <div class="col-lg-8">
                                            <div class="ms-tags-wrap d-flex mb-20">
                                                <span class="ms-tag-title d-inline-block mr-20">Tags :</span>
                                                <span class="ms-tags">
                                                    <a href="#">Music</a>
                                                    <a href="#">Singer</a>
                                                    <a href="#">Bands</a>
                                                </span>
                                            </div>
                                        </div> -->
                                    <div class="col-lg-4">
                                        <div class="ms-social2-wrap mb-20 d-flex justify-content-lg-end">
                                            <span class="ms-social-text mr-20"><i class="flaticon-share"></i>
                                                Share on: </span>
                                            <span class="ms-social2">
                                                <a target="_blank" href="#"><i
                                                        class="fa-brands fa-facebook-f"></i></a>
                                                <a target="_blank" href="#"><i
                                                        class="fa-brands fa-twitter"></i></a>
                                                <a target="_blank" href="#"><i
                                                        class="fa-brands fa-youtube"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-8">
                        <div class="ms-event-sidebar mb-60 border-color-bg-black">
                            <h3 class="ms-event-title">Studio Details Information</h3>
                            <div class="ms-event-sidebar-item">
                                <div class="ms-event-sidebar-inner">
                                    <h4 class="ms-event-title2">Area of studio</h4>
                                    <span class="ms-event-stext">650 SQ.FT</span>
                                </div>
                                <div class="ms-event-sidebar-inner">
                                    <h4 class="ms-event-title2">Charge per hour</h4>
                                    <span class="ms-event-stext">INR 2000/HOUR</span>
                                </div>
                                <div class="ms-event-sidebar-inner">
                                    <h4 class="ms-event-title2">Shift Charge</h4>
                                    <span class="ms-event-stext">INR 5500 (3 HOUR SHIFT)</span>
                                </div>
                                <div class="ms-event-sidebar-inner">
                                    <h4 class="ms-event-title2">Service</h4>
                                    <span class="ms-event-stext">many</span>
                                </div>
                            </div>
                            <div class="ms-event-sidebar-item">

                                <div class="ms-event-sidebar-inner">
                                    <h4 class="ms-event-title2">Phone Number</h4>
                                    <span class="ms-event-stext"><a href="tel:+9103625968302">+91 036
                                            25968 302</a></span>
                                </div>
                                <div class="ms-event-sidebar-inner">
                                    <h4 class="ms-event-title2">Email Address</h4>
                                    <span class="ms-event-stext"><a
                                            href="mailto:info@example.com">info@example.com</a></span>
                                </div>
                            </div>
                            <div class="ms-event-sidebar-item">
                                <div class="ms-event-sidebar-inner">
                                    <h4 class="ms-event-title2">Venue</h4>
                                    <span class="ms-event-stext">Malad</span>
                                    <span class="ms-event-stext"><a href="#">Mumbai</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Event Details Area End Here  -->

        @include('pages.creatorSpace.form_space', ['studio' => $studio, 'studios' => $studios])

    </main>
</div>
@endsection