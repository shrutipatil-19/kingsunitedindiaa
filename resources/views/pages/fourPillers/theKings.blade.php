@extends('layout.app')

@section('content')
<div class="ms-all-content ms-content-mobile-space pt-130">
    <main>
        <!-- About Area Start Here  -->
        <section class="ms-about-area fix">
            <div class="ms-about-bg include__bg p-relative zindex-1 pt-120 pb-130"  style="background-image: url('{{ asset('assets/img/kings crew/4.jpg')}}');">
                <div class="ms-overlay ms-overlay5 p-absolute zindex--1"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="ms-about-content text-center">
                                <h2 class="ms-title2 white-text mb-30 bd-title-anim">THE KINGS
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
                                <h2 class="section__title mb-40 bd-title-anim">About Kings Crew</h2>
                                <p class="" data-aos="fade-left" data-aos-delay="100" data-aos-duration="800">The Kings is all about being the tornadoes of
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

        <!-- Why Choose Us Area Start Here  -->
        <section class="ms-choose-area pt-125 pb-105 ms-bg-2 include__bg p-relative zindex-1" style="background-image: url('{{ asset('assets/img/kings crew/5.jpg')}}');background-attachment: fixed;">
            <div class="ms-overlay ms-overlay5 p-absolute zindex--1" bis_skin_checked="1"></div>
            <div class="container">
                <div class="row align-items-end mb-25 bdFadeUp">
                    <div class="col-lg-7">
                        <div class="section__title-wrapper mb-40">
                            <!-- <h2 class="section__title mb-35 bd-title-anim">key achievements</h2> -->
                            <h2 class="section__title mb-35 bd-title-anim"> <span class="text-bg">key achievements</span>
                            </h2>
                            <p>Our hand-picked acts will guarantee you fantastic wedding <br> entertainment
                                for
                                each
                                part.
                                We'll provide help and support 24 hours a <br> day, 7 days a week, right up
                                until</p>
                        </div>
                    </div>
                </div>
                <div class="card-container">
                    <div class="container">
                        <div class="row g-4">
                            <!-- Card -->
                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                                <div class="achievement-card">
                                    <div class=""><img src="{{ asset('assets/img/kings img/banner2.jpg') }}" alt="" class="w-100 h-100 custome-radius-top"></div>
                                    <div class="inner-content">
                                        <div class="ms-news-meta d-inline-block">
                                            <span>Feb 23, 2020</span>

                                        </div>
                                        <h3 class="ms-event-title text-black-custome mt-4 mb-2"><a href="#">World of Dance | Winner</a></h3>
                                        <p class="text-black-light-custome">History created as the first Indian Crew being crowned as
                                            World Champions in NBC World of Dance.</p>
                                        <div class="trending-btn d-flex">
                                            <a class="border__btn zindex-5" href="#" data-bs-toggle="modal" data-bs-target="#modal2020">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Repeat Cards -->
                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                                <div class="achievement-card">
                                    <div class=""><img src="{{ asset('assets/img/kings img/banner2.jpg') }}" alt="" class="w-100 h-100 custome-radius-top"></div>
                                    <div class="inner-content">

                                        <div class="ms-news-meta d-inline-block">
                                            <span>Feb 23, 2015</span>

                                        </div>
                                        <h3 class="ms-event-title text-black-custome mt-4 mb-2"><a href="#">World Hip Hop Dance Championship Bronze Medalist</a></h3>
                                        <p class="text-black-light-custome">We are the first dance crew from India to achieve a Bronze Medal
                                            for our country India which was an incredible achievement.
                                        </p>
                                        <div class="trending-btn d-flex">
                                            <a class="border__btn zindex-5" href="#">View More</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                                <div class="achievement-card">
                                    <div class=""><img src="{{ asset('assets/img/kings img/banner2.jpg') }}" alt="" class="w-100 h-100 custome-radius-top"></div>
                                    <div class="inner-content">

                                        <div class="ms-news-meta d-inline-block">
                                            <span>Feb 23, 2015</span>

                                        </div>
                                        <h3 class="ms-event-title text-black-custome mt-4 mb-2"><a href="#">ABCD 2 Movie</a></h3>
                                        <p class="text-black-light-custome">An inspiring journey of the THE KINGS was showcased on a big
                                            screen in the form of movie Any Body Can Dance 2 directed by Remo
                                            D'Souza.</p>
                                        <div class="trending-btn d-flex">
                                            <a class="border__btn zindex-5" href="#">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 mt-lg-5" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                                <div class="achievement-card">
                                    <div class=""><img src="{{ asset('assets/img/kings img/banner2.jpg') }}" alt="" class="w-100 h-100 custome-radius-top"></div>
                                    <div class="inner-content">

                                        <div class="ms-news-meta d-inline-block">
                                            <span>Feb 23, 2010</span>

                                        </div>
                                        <h3 class="ms-event-title text-black-custome mt-4 mb-2"><a href="#">India's got talent season 3 winner</a></h3>
                                        <p class="text-black-light-custome">Winners of India's got talent season 3 on the back of their
                                            scintillating performances.</p>
                                        <div class="trending-btn d-flex">
                                            <a class="border__btn zindex-5" href="#">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-lg-5" data-aos="fade-up" data-aos-delay="500" data-aos-duration="800">
                                <div class="achievement-card">
                                    <div class=""><img src="{{ asset('assets/img/kings img/banner2.jpg') }}" alt="" class="w-100 h-100 custome-radius-top"></div>
                                    <div class="inner-content">

                                        <div class="ms-news-meta d-inline-block">
                                            <span>Feb 23, 2009</span>

                                        </div>
                                        <h3 class="ms-event-title text-black-custome mt-4 mb-2"><a href="#">Entertainment ke liye kuch bhi karega season 3 winner</a></h3>
                                        <p class="text-black-light-custome">Showcased an incredible achievement by winning
                                            Entertainment ke liye kuch bhi karega season 3</p>
                                        <div class="trending-btn d-flex">
                                            <a class="border__btn zindex-5" href="#">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-lg-5" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800">
                                <div class="achievement-card">
                                    <div class=""><img src="{{ asset('assets/img/kings img/banner2.jpg') }}" alt="" class="w-100 h-100 custome-radius-top"></div>
                                    <div class="inner-content">

                                        <div class="ms-news-meta d-inline-block">
                                            <span>Feb 23, 2009</span>

                                        </div>
                                        <h3 class="ms-event-title text-black-custome mt-4 mb-2"><a href="#">Boogie Woogie india winner </a></h3>
                                        <p class="text-black-light-custome">The only dance group in
                                            India who mesmerized the world with so many accolades during their
                                            journey and set themselves as an exemplary to all the dance aspirants
                                            across the country.</p>
                                        <div class="trending-btn d-flex">
                                            <a class="border__btn zindex-5" href="#">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Modals -->
                <div class="modal fade" id="modal2020" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content p-4">
                            <h5>World of Dance | Winner 2020</h5>
                            <p>The Kings created history as the first Indian crew crowned as champions in NBC's "World of Dance". Their powerful performance broke records globally.</p>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modal2015" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content p-4">
                            <h5>World Hip Hop | Bronze Medalist</h5>
                            <p>Achieved bronze in their first attempt at the World Hip-Hop Dance Championship with only 20 days of practice — an incredible feat for any crew.</p>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Why Choose Us Area End Here  -->
        <!-- Work System Area Start Here  -->
        <section class="ms-work-system-area pt-130 pb-130">
            <div class="container">
                <div class="ms-work-system-wrap">
                    <div class="ms-work-system-img d-inline-block fix m-img ms-br-15 mb-60 w-100" style="height: 300px;" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="800">
                        <img src="{{ asset('assets/img/kings img/banner/bann2.jpg') }}" alt="work system image" class="w-100 h-100">
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="ms-work-system-inner text-center">
                                <p class="text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">Dance is the most flexible way of communication we
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
        <section class="ms-bg-2 timeline-section ms-bg-2 ms-event2-area include__bg zindex-1 p-relative pt-140 pb-105" style="background-image: url('{{ asset('assets/img/kings crew/4.jpg')}}');background-attachment: fixed;">
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
         @include('partial.kings_gallary2')
        <!-- @include('partial.kings_gallary') -->
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

@push('js')
<!-- Bootstrap & AOS Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endpush