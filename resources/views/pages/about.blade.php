@extends('layout.app')

@section('content')
<div class="ms-all-content ms-content-mobile-space pt-130">
    <main>
        <!-- About Area Start Here  -->
        <section class="ms-about-area fix">
            <div class="ms-about-bg include__bg p-relative zindex-1 pt-120 pb-130"
                data-background="{{ asset('assets/img/kings img/video_banner1.jpg')}}" style="background-image: url('{{ asset('assets/img/kings img/video_banner1.jpg')}}');">
                <div class="ms-overlay ms-overlay5 p-absolute zindex--1"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="ms-about-content text-center">
                                <h2 class="ms-title2 white-text mb-30 bd-title-anim">Started Small, Moved Big, Danced Bold. Made History.
                                </h2>
                                <p class="capitalize mb-65">Founded by Emmy-nominated choreographer Suresh Mukund, Kings United began as a small crew with a big dream and went on to rewrite the story of the Indian dance scene. With wins in top global competitions and performances at major award shows, the crew rose to become world champions, putting India on the international dance map. Today, Kings United is not only known for offering the best dance classes in Mumbai but also for being one of the top training destinations in India and among the most respected in the world.
                                </p>
                                <div class="ms-about-round-btn d-inline-block bdFadeUp ms-choose-area pt-125 pb-105">
                                    <a href="https://www.youtube.com/watch?v=y4jv5bk8ato"
                                        class="popup-video ms-video-round p-relative">
                                        <div class="ms-video-img1 wh250">
                                            <img src="{{ asset('assets/img/kings img/video_banner1.jpg')}}" alt="about image" class="w-100 h-100 object-cover rounded-circle">
                                        </div>
                                        <div class="ms-video-img2 d-inline-block">
                                            {{-- <img src="{{ asset('assets/img/about/about2.png')}}" alt="about image"> --}}
                                        </div>
                                        <div class="ms-video-icon">
                                            <i class="fa fa-play"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End Here  -->
        {{-- <style>
            .section_title2{
                font-size: calc(max(4vw,2rem));
                font-family: 'Stubed';
                /* -webkit-text-stroke: 1px #f7f7f700; */
                color: white;
                font-weight: 100;
                letter-spacing: 5px;
                /* rotate: 90deg; */
            }
        </style> --}}
        <!-- Key achievement Area Start -->
        <section class="ms-news-area ms-bg-2 pt-130 pb-90 p-relative">
            <div class="">
                <div class="container">
                    <div class="row align-items-end mb-25 bdFadeUp">
                        <div class="col-lg-6">
                            <div class="section__title-wrapper achievement mb-40 bd-title-anim">
                                <span class="section__subtitle">From Studio to Stardom </span>
                                <h2 class="section__title">Steps That Made <span class="animated-underline active">History
                                    </span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <!-- Swiper -->
                    <div class="swiper achievementSwiper pt-5">
                        <div class="swiper-wrapper pt-4">

                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <div class="achievement-card">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/img/kings img/banner2.jpg') }}" alt="WOD" class="w-100 h-100 object-cover custome-radius-top">
                                        <div class="ms-news-meta d-inline-block">
                                            <span>Feb 23, 2010</span>

                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="ms-event-title text-black-custome mt-4 mb-2"><a href="#">World of Dance | Winner</a></h3>
                                        <p class="text-black-light-custome">The first Indian team to claim the World Champion title on NBC’s World of Dance.</p>
                                        <div class="trending-btn d-flex">
                                            <button class="border__btn zindex-5 btn-read-more" data-bs-toggle="modal" data-bs-target="#modal1">Read More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="swiper-slide">
                                <div class="achievement-card">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/img/kings img/banner2.jpg') }}" alt="Hip Hop" class="w-100 h-100 object-cover custome-radius-top">
                                        <div class="ms-news-meta d-inline-block">
                                            <span>Feb 23, 2010</span>

                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="ms-event-title text-black-custome mt-4 mb-2"><a href="#">World Hip Hop Dance Championship Bronze Medalist</a></h3>
                                        <p class="text-black-light-custome">India’s first dance crew to secure a medal at the World Hip-Hop Dance Championship.</p>
                                        <div class="trending-btn d-flex">
                                            <button class="border__btn zindex-5 btn-read-more" data-bs-toggle="modal" data-bs-target="#modal2">Read More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 3 -->
                            <div class="swiper-slide">
                                <div class="achievement-card">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/img/kings img/banner2.jpg') }}" alt="ABCD2" class="w-100 h-100 object-cover custome-radius-top">
                                        <div class="ms-news-meta d-inline-block">
                                            <span>Feb 23, 2010</span>

                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="ms-event-title text-black-custome mt-4 mb-2"><a href="#">ABCD 2 Movie</a></h3>
                                        <p class="text-black-light-custome">Our story was celebrated on screen in Remo D’Souza’s “Any Body Can Dance 2”.</p>
                                        <div class="trending-btn d-flex">
                                            <button class="border__btn zindex-5 btn-read-more" data-bs-toggle="modal" data-bs-target="#modal3">Read More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 4 -->
                            <div class="swiper-slide">
                                <div class="achievement-card">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/img/kings img/banner2.jpg') }}" alt="IGT" class="w-100 h-100 object-cover custome-radius-top">
                                        <div class="ms-news-meta d-inline-block">
                                            <span>Feb 23, 2010</span>

                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="ms-event-title text-black-custome mt-4 mb-2"><a href="#">India's got talent season 3 winner</a></h3>
                                        <p class="text-black-light-custome">Lifted the trophy in Season 3 of India’s Got Talent with unforgettable performances.</p>
                                        <div class="trending-btn d-flex">
                                            <button class="border__btn zindex-5 btn-read-more" data-bs-toggle="modal" data-bs-target="#modal4">Read More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 5 -->
                            <div class="swiper-slide">
                                <div class="achievement-card">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/img/kings img/banner2.jpg') }}" alt="EKLKBK" class="w-100 h-100 object-cover custome-radius-top">
                                        <div class="ms-news-meta d-inline-block">
                                            <span>Feb 23, 2010</span>

                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="ms-event-title text-black-custome mt-4 mb-2"><a href="#">Entertainment ke liye kuch bhi karega season 3 winner</a></h3>
                                        <p class="text-black-light-custome">Brought home the win in Season 3 of Entertainment Ke Liye Kuch Bhi Karega.</p>
                                        <div class="trending-btn d-flex">
                                            <button class="border__btn zindex-5 btn-read-more" data-bs-toggle="modal" data-bs-target="#modal5">Read More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="achievement-card">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/img/kings img/banner2.jpg') }}" alt="EKLKBK" class="w-100 h-100 object-cover custome-radius-top">
                                        <div class="ms-news-meta d-inline-block">
                                            <span>Feb 23, 2010</span>

                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="ms-event-title text-black-custome mt-4 mb-2"><a href="#">Boogie Woogie india winner </a></h3>
                                        <p class="text-black-light-custome">Showcased our unique style on the iconic Boogie Woogie, earning nationwide appreciation.</p>
                                        <div class="trending-btn d-flex">
                                            <button class="border__btn zindex-5 btn-read-more" data-bs-toggle="modal" data-bs-target="#modal6">Read More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Navigation -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
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
        <!-- Key achievement Area End -->
        <!-- about kings area start -->
        <section class="work__area pt-130 pb-60 p-relative">
            <div class="container">
                <div class="row align-items-center bdFadeUp">
                    <div class="col-xl-6">
                        <div class="work__thumb-wrapper zindex-1 p-relative mb-60 d-inline-block" data-aos="fade-right" data-aos-delay="100" data-aos-duration="800">
                            <div class="work__thumb-inner p-relative zindex-5">
                                <div class="work__thumb m-img">
                                    <img src="{{ asset('assets/img/kings img/about22.jpg') }}" alt="work image">
                                </div>
                            </div>
                            <div class="ms-work-round p-absolute zindex--1 d-none d-sm-block"></div>
                            <div class="ms-work-round p-absolute two zindex--1 d-none d-sm-block"></div>
                        </div>
                    </div>
                    <div class="col-xl-6 pl-30">
                        <div class="work__content-wrapper work__content-wrapper-space mb-70">
                            <div class="section__title-wrapper kings mb-30 bd-title-anim">
                                <span class="section__subtitle">Kings United</span>
                                <!-- <h2 class="section__title two">
                                The Kings: From <span class="text-bg">Dreamers</span> to <span class="text-bg">International</span>
                                <span class="animated-underline active">Dance Champions</span>
                            </h2> -->
                                <!-- <h2 class="section__title two">
                                The Kings: From Dreamers to International
                                <span class="animated-underline active">Dance Champions</span>
                            </h2> -->
                                <h2 class="section__title two">
                                    The Story Behind
                                    <span class="animated-underline active">the Crown</span>
                                </h2>
                            </div>
                            <div class="work__features-inner">
                                <p>At Kings United, dance is more than just steps, it’s a combination of energy, emotion, and self-expression. We don’t just perform for the stage or the clapping; we dance to challenge the normal, to tell stories without using words, and to connect deeply with people.</p>
                                <p>
                                    As a dance academy, our goal is to create a welcoming space where anyone, from beginners to advanced dancers can learn, grow, and shine. We’re here to guide, support, and give every student a platform to explore their talent, push the limits, and celebrate their own unique style without trying to fit in.</p>

                                <div class="work__features-bottom">
                                    <div class="work__features-action">
                                        <div class="trending-btn d-flex">
                                            <a class="border__btn zindex-5" href="{{ route('theKings') }}">View More</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- about kings area end -->

        <!-- suresh Mukund area start -->
        <section class="work__area pt-125 ms-bg-2 pb-105">
            <div class="container">
                <div class="row align-items-center bdFadeUp flex-column-reverse flex-lg-row">
                    <div class="col-xl-6 col-lg-10">
                        <div class="work__content-wrapper p-relative mb-60">
                            <div class="section__title-wrapper suresh mb-50">
                                <h2 class="section__title mb-40 bd-title-anim">Story of <span class="text-bg"> Suresh Mukund </span> & his team - The Kings</h2>
                                <p class="text-justify" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">Suresh Mukund, the founder and choreographer of Kings United, has a story that feels like a Bollywood movie. Chasing a dream, building a team from the ground up, and winning one of the biggest dance championships in the entire world. Over a decade ago, Suresh and his group of passionate performers entered their first dance reality show, marking the start of a journey that would change their lives and put India on the global map in the dance scene.
                                </p>
                                <p class="text-justify" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">Known to many as “The Kings,” Kings United rose to international fame after winning Season 3 of the US reality show World of Dance. Their performance earned them the top prize of 1 million USD and global recognition. This incredible win not only put them on the world stage but also established them as one of the best dance crews to ever represent India.</p>

                                <div class="trending-btn d-flex">
                                    <a class="border__btn zindex-5" href="{{ route('sureshMukund') }}">View More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="ms-work3-thumb-wrap d-inline-block p-relative mb-60">
                            <div class="ms-work3-inner">
                                <div class="ms-work3-thumb m-img p-relative fix ms-br-20 ms-lg-3 me-0">
                                    <div class="ms-overlay ms-overlay3 p-absolute"></div>
                                    <img src="{{ asset('assets/img/about/award.jpg')}}" alt="work image" data-aos="fade-left" data-aos-delay="100" data-aos-duration="800">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- suresh mukund area end -->
        <!-- team  area start -->
        <section class="ms-popular__area pt-130 pb-100 fix">

            <div class="container">
                <div class="row align-items-end mb-25 bdFadeUp">
                    <div class="col-xl-8 col-lg-8">
                        <div class="section__title-wrapper Professional mb-40 bd-title-anim">
                            <span class="section__subtitle">Meet Our Professional</span>
                            <h2 class="section__title msg_title">
                                <span class="animated-underline active">The Passionate Instructors</span> <br>
                                Powering Your Dance Journey
                            </h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="ms-popular__tab ms-popular-flex mb-40 d-none">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-popular-1-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-popular-1" type="button" role="tab"
                                        aria-controls="nav-popular-1" aria-selected="true">Dancers</button>
                                    <button class="nav-link" id="nav-popular-2-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-popular-2" type="button" role="tab"
                                        aria-controls="nav-popular-2" aria-selected="false">Entertainers</button>
                                    <button class="nav-link" id="nav-popular-3-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-popular-3" type="button" role="tab"
                                        aria-controls="nav-popular-3" aria-selected="false">Event
                                        Services</button>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row bdFadeUp">
                    <div class="col-xxl-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-popular-1" role="tabpanel"
                                aria-labelledby="nav-popular-1-tab" tabindex="0">
                                <div class="swiper-container ms-popular-active fix">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="#"><img
                                                            src="{{ asset('assets/img/kings img/team/Amey.jpg') }}"
                                                            alt="popular band" class="h-100 w-100 object-cover"></a>
                                                    {{-- <a href="#" class="ms-popular__link">
                                                    <span>Amey</span>
                                                </a> --}}
                                                </div>
                                                <h4 class="ms-popular__title"><a href="#">Amey</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="#"><img
                                                            src="{{ asset('assets/img/kings img/team/Amit.jpg') }}"
                                                            alt="popular band" class="h-100 w-100 object-cover"></a>
                                                    {{-- <a href="#" class="ms-popular__link">
                                                    <span>Amit</span>
                                                </a> --}}
                                                </div>
                                                <h4 class="ms-popular__title"><a href="#">Amit</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="#"><img
                                                            src="{{ asset('assets/img/kings img/team/BLUE.jpg') }}"
                                                            alt="popular band" class="h-100 w-100 object-cover"></a>
                                                    {{-- <a href="#" class="ms-popular__link">
                                                    <span>Blue</span>
                                                </a> --}}
                                                </div>
                                                <h4 class="ms-popular__title"><a href="#">Blue</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="#"><img
                                                            src="{{ asset('assets/img/kings img/team/dance.jpg') }}"
                                                            alt="popular band" class="h-100 w-100 object-cover"></a>
                                                    {{-- <a href="#" class="ms-popular__link">
                                                    <span>Dance</span>
                                                </a> --}}
                                                </div>
                                                <h4 class="ms-popular__title"><a href="#">Dance
                                                    </a></h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="#"><img
                                                            src="{{ asset('assets/img/kings img/team/Flying Machine.jpg') }}"
                                                            alt="popular band" class="h-100 w-100 object-cover"></a>
                                                    {{-- <a href="#" class="ms-popular__link">
                                                    <span>Flying Machine</span>
                                                </a> --}}
                                                </div>
                                                <h4 class="ms-popular__title"><a href="#">Flying Machine</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="#"><img
                                                            src="{{ asset('assets/img/kings img/team/ROCKLEE.jpg') }}"
                                                            alt="popular band" class="h-100 w-100 object-cover"></a>
                                                    {{-- <a href="#" class="ms-popular__link">
                                                    <span>Rocklee</span>
                                                </a> --}}
                                                </div>
                                                <h4 class="ms-popular__title"><a href="#">Rocklee</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="#"><img
                                                            src="{{ asset('assets/img/kings img/team/Rohan Pal.jpg') }}"
                                                            alt="popular band" class="h-100 w-100 object-cover"></a>
                                                    {{-- <a href="#" class="ms-popular__link">
                                                    <span>Rohan Pal</span>
                                                </a> --}}
                                                </div>
                                                <h4 class="ms-popular__title"><a href="#">Rohan Pal</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="#"><img
                                                            src="{{ asset('assets/img/kings img/team/SWAPNIL.jpg') }}"
                                                            alt="popular band" class="h-100 w-100 object-cover"></a>
                                                    {{-- <a href="#" class="ms-popular__link">
                                                    <span>Swapnil</span>
                                                </a> --}}
                                                </div>
                                                <h4 class="ms-popular__title"><a href="#">Swapnil</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="#"><img
                                                            src="{{ asset('assets/img/kings img/team/Tanya Bhushan.jpg') }}"
                                                            alt="popular band" class="h-100 w-100 object-cover"></a>
                                                    {{-- <a href="#" class="ms-popular__link">
                                                    <span>Tanya Bhushan</span>
                                                </a> --}}
                                                </div>
                                                <h4 class="ms-popular__title"><a href="#">Tanya Bhushan</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <!-- <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="#"><img
                                                        src="{{ asset('assets/img/popular/popular-03.png') }}"
                                                        alt="popular band"></a>
                                                <a href="genres-details.html" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres-details.html">Tributes</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres-details.html"><img
                                                        src="{{ asset('assets/img/popular/popular-04.png') }}"
                                                        alt="popular band"></a>
                                                <a href="genres-details.html" class="ms-popular__link">
                                                    <span class="ms-popular-icon"><i
                                                            class="fa-regular fa-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres-details.html">Solo
                                                    Musicians
                                                </a></h4>
                                        </div>
                                    </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-popular-2" role="tabpanel"
                                aria-labelledby="nav-popular-2-tab" tabindex="0">
                                <div class="swiper-container ms-popular-active fix">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-01.png') }}"
                                                            alt="popular band" class="h-100 w-100 object-cover"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Singers</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-02.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Bands &
                                                        Group</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-03.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Tributes</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-04.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Solo
                                                        Musicians
                                                    </a></h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-01.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Singers</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-02.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Bands &
                                                        Group</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-03.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Tributes</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-04.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Solo
                                                        Musicians
                                                    </a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-popular-3" role="tabpanel"
                                aria-labelledby="nav-popular-3-tab" tabindex="0">
                                <div class="swiper-container ms-popular-active fix">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-01.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Singers</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-02.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Bands &
                                                        Group</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-03.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Tributes</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-04.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Solo
                                                        Musicians
                                                    </a></h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-01.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Singers</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-02.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Bands &
                                                        Group</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-03.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Tributes</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ms-popular__item p-relative mb-30">
                                                <div class="ms-popular__thumb">
                                                    <div class="ms-popular-overlay"></div>
                                                    <a href="genres-details.html"><img
                                                            src="{{ asset('assets/img/popular/popular-04.png') }}"
                                                            alt="popular band"></a>
                                                    <a href="genres-details.html" class="ms-popular__link">
                                                        <span class="ms-popular-icon"><i
                                                                class="fa-regular fa-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                                <h4 class="ms-popular__title"><a href="genres-details.html">Solo
                                                        Musicians
                                                    </a></h4>
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
        <!-- team  area end -->
        @include('partial.client')
    </main>
</div>
@endsection
@push('style')
<style>
    .content {
        padding: 0px 20px 20px 20px;
    }

    .pt-5 {
        padding-top: 2rem !important;
    }

    .ms-work3-thumb::after {
        content: "";
        position: absolute;
        top: 0;
        left: -75%;
        width: 50%;
        height: 100%;
        background: linear-gradient(75deg,
                rgba(255, 255, 255, 0.1) 0%,
                rgba(255, 255, 255, 0.3) 50%,
                rgba(255, 255, 255, 0.1) 100%);
        transform: skewX(-20deg);
        transition: left 0.5s ease;
        z-index: 2;
    }

    .ms-work3-thumb:hover::after {
        left: 125%;
    }

    .ms-event-title {
        background: linear-gradient(90deg, #de4038 0%, #dea738 100%);
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* .work__area::before {
        content: '';
        position: absolute;
        top: -8%;
        left: 8%;
        transform: translateX(-50%);
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(222, 64, 56, 0.15), transparent 70%);
        z-index: 0;
        pointer-events: none;
    } */
</style>

@endpush

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