@extends('layout.app')

@section('content')
<div class="ms-all-content ms-content-mobile-space pt-130">
    <main>
        <!-- About Area Start Here  -->
        <section class="ms-about-area fix">
            <div class="ms-about-bg include__bg p-relative zindex-1 pt-120 pb-130" style="background-image: url('{{ asset('assets/img/kings crew/4.jpg')}}');">
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
                            <div class="section__title-wrapper kings mb-50">
                                <span class="section__subtitle">Kings United</span>
                                <h2 class="section__title two">
                                    The Story Behind
                                    <span class="animated-underline active">the Crown</span>
                                </h2>

                                <p data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">At Kings United, dance is more than just steps, it’s a combination of energy, emotion, and self-expression. We don’t just perform for the stage or the clapping; we dance to challenge the normal, to tell stories without using words, and to connect deeply with people.</p>
                                <p data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                                    As a dance academy, our goal is to create a welcoming space where anyone, from beginners to advanced dancers can learn, grow, and shine. We’re here to guide, support, and give every student a platform to explore their talent, push the limits, and celebrate their own unique style without trying to fit in.</p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- work area end -->

        <!--achievements start  -->
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
                                        <p class="text-black-light-custome">The first Indian team to claim the World Champion title on NBC’s World of Dance.</p>
                                        <div class="trending-btn d-flex">
                                            <button class="border__btn zindex-5 btn-read-more" data-bs-toggle="modal" data-bs-target="#modal1">Read More</button>
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
                                        <p class="text-black-light-custome">India’s first dance crew to secure a medal at the World Hip-Hop Dance Championship.
                                        </p>
                                        <button class="border__btn zindex-5 btn-read-more" data-bs-toggle="modal" data-bs-target="#modal2">Read More</button>
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
                                        <p class="text-black-light-custome">Our story was celebrated on screen in Remo D’Souza’s “Any Body Can Dance 2”.</p>
                                        <button class="border__btn zindex-5 btn-read-more" data-bs-toggle="modal" data-bs-target="#modal3">Read More</button>
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
                                        <p class="text-black-light-custome">Lifted the trophy in Season 3 of India’s Got Talent with unforgettable performances.</p>
                                        <button class="border__btn zindex-5 btn-read-more" data-bs-toggle="modal" data-bs-target="#modal4">Read More</button>
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
                                        <p class="text-black-light-custome">Brought home the win in Season 3 of Entertainment Ke Liye Kuch Bhi Karega.</p>
                                        <button class="border__btn zindex-5 btn-read-more" data-bs-toggle="modal" data-bs-target="#modal5">Read More</button>
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
                                        <p class="text-black-light-custome">Showcased our unique style on the iconic Boogie Woogie, earning nationwide appreciation.</p>
                                        <button class="border__btn zindex-5 btn-read-more" data-bs-toggle="modal" data-bs-target="#modal6">Read More</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </section>
        <!-- Modals1 -->
        <div class="modal fade" id="modal1" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content p-4">
                    <h5 class="fw-bold fs-4 mb-3 ms-event-title">World of Dance | Winner 2020</h5>
                    <p class="text-black-light-custome">In 2019, we made history by becoming the first Indian crew to win NBC's World of Dance which is one of the most prestigious dance competitions in the world. We brought high-impact choreography, synchronized stunts, and cinematic storytelling to the global stage, earning recognition from both the audience and the judges. Our final act, inspired by Baahubali, featured gladiator-style visuals, powerful flips, and an intense slow-motion battle scene that had drama and precision. Judges Jennifer Lopez, Derek Hough, and Ne-Yo awarded us a perfect score of 100, making it a clean sweep. It wasn't just a win for us; it was a moment that marked India's arrival on the world dance map.</p>
                </div>
            </div>
        </div>
        <!-- Modals2 -->
        <div class="modal fade" id="modal2" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content p-4">
                    <h5 class="fw-bold fs-4 mb-3 ms-event-title">World Hip-Hop Dance Championship | Bronze Medallists</h5>
                    <p class="text-black-light-custome">What began as a last-minute decision turned into one of our best moments. With limited time but limitless drive, we came together, trained with intensity, and brought something bold to the global stage, which was our own unique Indian flavour fused into hip-hop. Competing against 90 of the world's best crews, we stood out with our style, creativity, and uniqueness. Our performance earned a standing ovation and a historic medal for the nation. India's first at the World Hip-Hop Dance Championship. Instead of following the trends we created our own and the world took notice of it.</p>
                </div>
            </div>
        </div>
        <!-- Modals3 -->
        <div class="modal fade" id="modal3" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content p-4">
                    <h5 class="fw-bold fs-4 mb-3 ms-event-title">ABCD2 Movie</h5>
                    <p class="text-black-light-custome">Our journey from local stages to international recognition was so impactful, it found its way to the big screen. Directed by Remo D’Souza, Any Body Can Dance 2 was inspired by the real-life story of Kings United and our hunger to succeed in spite of all odds. The film followed our rise through challenges, team spirit, and hard work. It captured the essence of what it means to chase a dream with everything you have. Bollywood actor Varun Dhawan portrayed our founder Suresh Mukund, mimicking the same energy in the role. The movie put our story in front of millions of people. For us, it wasn't just a film, it was a celebration of a movement we built with our hearts. ABCD 2 helped us connect with aspiring dancers across the country and inspired many to believe in their own journey. It's a reminder that when dance is powered by purpose, it can move more than just bodies, it can move the world.</p>
                </div>
            </div>
        </div>
        <!-- Modals4 -->
        <div class="modal fade" id="modal4" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content p-4">
                    <h5 class="fw-bold fs-4 mb-3 ms-event-title">India's Got Talent Season 3 Winner</h5>
                    <p class="text-black-light-custome">Winning Season 3 of India's Got Talent was a key moment in our journey. Already known in the dance circuit, this national platform helped us connect with a bigger audience across the country. Round after round, we brought our best to the stage and earned the support of viewers and judges. Taking home the title added another milestone to our growing list of achievements. It pushed us further, fuelled our ambition, and reminded us of what's possible with passion, discipline and the love for dance.</p>
                </div>
            </div>
        </div>
        <!-- Modals5 -->
        <div class="modal fade" id="modal5" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content p-4">
                    <h5 class="fw-bold fs-4 mb-3 ms-event-title">Entertainment Ke Liye Kuch Bhi Karega Season 3 Winner</h5>
                    <p class="text-black-light-custome">We brought home the win in Season 3 of Entertainment Ke Liye Kuch Bhi Karega, a popular talent show known for its tough format and nationwide reach. Judged by Farah Khan and Anu Malik, the show tested performers on creativity, skill, and entertainment value. Our act stood out among a diverse range of talents from across India. Each performance had to impress both the judges and the live audience to move forward. Week after week, we delivered with consistency and energy. Winning the show added another milestone to our journey and motivated us to keep pushing higher.</p>
                </div>
            </div>
        </div>
        <!-- Modals6 -->
        <div class="modal fade" id="modal6" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content p-4">
                    <h5 class="fw-bold fs-4 mb-3 ms-event-title">Boogie Woogie India Winner</h5>
                    <p class="text-black-light-custome">Boogie Woogie was India’s first major dance reality show, a stage that set the benchmark for televised dance competitions. Being part of such an iconic platform was a moment of pride for us. Our performances captivated both the judges and the audience with their energy and originality. The show gave us early recognition and a chance to represent our style in front of a national audience. It remains one of the key highlights in our journey, marking our presence in the growing Indian dance scene.</p>
                </div>
            </div>
        </div>
        <!--achievements end  -->
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
                        <div class="timeline-item col-lg-6 mb-lg-0 mb-2" data-aos="fade-up" data-aos-delay="100">
                            <div class="ms-news-meta d-inline-block">
                                <span>Feb 23, 2010</span>

                            </div>
                            <h3 class="ms-event-title mt-4 mb-2"><a href="#">Jhalak Dikhala Ja Season 7</a></h3>
                            <p class="text-white">Showcased an incredible achievement by winning
                                Entertainment ke liye kuch bhi karega season 3</p>
                        </div>
                        <div class="col-lg-6 mt-lg-0 mb-lg-0 mb-5 height-200" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                            <img src="{{ asset('assets/img/kings img/banner/bann2.jpg') }}" alt="" class="w-100 h-100 object-cover">
                        </div>
                    </div>
                    <div class="row">
                        <div class="timeline-item col-lg-6 mb-lg-0 mb-2" data-aos="fade-up" data-aos-delay="100">
                            <div class="ms-news-meta d-inline-block">
                                <span>Feb 23, 2010</span>

                            </div>
                            <h3 class="ms-event-title mt-4 mb-2"><a href="#">Season 8 IIFA Awards</a></h3>
                            <p class="text-white">First Indian Crew crowned as World Champions in NBC World of Dance.</p>

                        </div>
                        <div class="col-lg-6 mt-lg-0 mb-lg-0 mb-5 height-200" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                            <img src="{{ asset('assets/img/kings img/banner/bann2.jpg') }}" alt="" class="w-100 h-100 object-cover">
                        </div>
                    </div>

                    <div class="row">
                        <div class="timeline-item col-lg-6 mb-lg-0 mb-2" data-aos="fade-up" data-aos-delay="100">
                            <div class="ms-news-meta d-inline-block">
                                <span>Feb 23, 2010</span>

                            </div>
                            <h3 class="ms-event-title mt-4 mb-2"><a href="#">Filmfare Award</a></h3>
                            <p class="text-white">First Indian Crew crowned as World Champions in NBC World of Dance.</p>

                        </div>
                        <div class="col-lg-6 mt-lg-0 mb-lg-0 mb-5 height-200" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                            <img src="{{ asset('assets/img/kings img/banner/bann2.jpg') }}" alt="" class="w-100 h-100 object-cover">
                        </div>
                    </div>
                    <div class="row">
                        <div class="timeline-item col-lg-6 mb-lg-0 mb-2" data-aos="fade-up" data-aos-delay="100">
                            <div class="ms-news-meta d-inline-block">
                                <span>Feb 23, 2010</span>

                            </div>
                            <h3 class="ms-event-title mt-4 mb-2"><a href="#">Star Screen Awards</a></h3>
                            <p class="text-white">First Indian Crew crowned as World Champions in NBC World of Dance.</p>

                        </div>
                        <div class="col-lg-6 mt-lg-0 mb-lg-0 mb-5 height-200" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                            <img src="{{ asset('assets/img/kings img/banner/bann2.jpg') }}" alt="" class="w-100 h-100 object-cover">
                        </div>
                    </div>

                    <div class="row">
                        <div class="timeline-item col-lg-6 mb-lg-0 mb-2" data-aos="fade-up" data-aos-delay="100">
                            <div class="ms-news-meta d-inline-block">
                                <span>Feb 23, 2010</span>

                            </div>
                            <h3 class="ms-event-title mt-4 mb-2"><a href="#">Zee Cine Awards</a></h3>
                            <p class="text-white">First Indian Crew crowned as World Champions in NBC World of Dance.</p>

                        </div>
                        <div class="col-lg-6 mt-lg-0 mb-lg-0 mb-5 height-200" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                            <img src="{{ asset('assets/img/kings img/banner/bann2.jpg') }}" alt="" class="w-100 h-100 object-cover">
                        </div>
                    </div>

                    <div class="row">
                        <div class="timeline-item col-lg-6 mb-lg-0 mb-2" data-aos="fade-up" data-aos-delay="100">
                            <div class="ms-news-meta d-inline-block">
                                <span>Feb 23, 2010</span>

                            </div>
                            <h3 class="ms-event-title mt-4 mb-2"><a href="#">Big Star Entertainment Awards</a></h3>
                            <p class="text-white">First Indian Crew crowned as World Champions in NBC World of Dance.</p>

                        </div>
                        <div class="col-lg-6 mt-lg-0 mb-lg-0 mb-5 height-200" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
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


@push('style')
<style>
    .include__bg {
    background-position: center 36%;
    }
    .mb-5 {
        margin-bottom: 2rem !important;
    }

    .ms-event-title {
        background: linear-gradient(90deg, #de4038 0%, #dea738 100%);
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
</style>
@endpush
@push('js')
<script>
    AOS.init();
</script>
@endpush