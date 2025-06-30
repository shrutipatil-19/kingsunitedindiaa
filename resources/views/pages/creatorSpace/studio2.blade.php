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
                                <h2 class="ms-title2 white-text mb-30 bd-title-anim">STUDIO 2                                </h2>
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
                                    <img src="{{ asset('assets/img/choose/choose-bg.png') }}" alt="event image">
                                </div>
                               
                                <div class="ms-border2 pb-20 mb-30">
                                    <h2 class="ms-event-dtitle">Studio 2</h2>
                                </div>
                                <p class="mb-25">Our hand-picked acts will guarantee you fantastic wedding
                                    entertainment for each
                                    part. We'll provide help and support 24
                                    hours a day, 7 days a week, right up until Outstanding wedding band playing
                                    chart, indie, rock anthems and Britpop and
                                    featuring guitars, keyboards.</p>
                                <p class="mb-35">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex,
                                    nihil
                                    expetendis in
                                    mei. Mei an pericula euripidis, hinc
                                    partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem
                                    tincidunt vix at, vel pertinax sensibus id,
                                    error epicurei mea et. Mea facilisis urbanitas moderatius id. Vis ei
                                    rationibus
                                    definiebas, eu qui purto zril laoreet.
                                    Ex error omnium interpretaris pro, alia illum ea vim. Lorem ipsum dolor sit
                                    amet, te ridens.</p>
                               

                              
                                <div class="ms-border5 pt-30 mt-70">
                                    <div class="row">
                                        
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
                            <div class="ms-event-sidebar mb-60">
                                <h3 class="ms-event-sidebar-title">Studio Details Information</h3>
                                <div class="ms-event-sidebar-item">
                                    <div class="ms-event-sidebar-inner">
                                        <h4 class="ms-event-title2">Area of studio</h4>
                                        <span class="ms-event-stext">750 SQ.FT</span>
                                    </div>
                                    <div class="ms-event-sidebar-inner">
                                        <h4 class="ms-event-title2">Charge per hour</h4>
                                        <span class="ms-event-stext">INR 1500/HOUR</span>
                                    </div>
                                    <div class="ms-event-sidebar-inner">
                                        <h4 class="ms-event-title2">Shift Charge</h4>
                                        <span class="ms-event-stext">INR 4000 (3 HOUR SHIFT)</span>
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


        <!-- work area end -->
    </main>
</div>
@endsection