@extends('layout.app')

@section('content')
<div class="ms-all-content ms-content-mobile-space pt-130">
    <main>
        <div class="scrolling-wrapper ">
            <div class="card ps-lg-5">
                <!-- <h2>Card 1</h2> -->
                <div class="row w-100">
                    <div class="col-lg-6">
                        <div class="section__title-wrapper">
                            <a href="{{ route('sureshMukund') }}">
                                <h2 class="section__title mb-3">Suresh Mukund</h2>
                            </a>
                            <p>Suresh Mukund, the founder and choreographer of Kings United, has a story that feels like a Bollywood movie. Chasing a dream, building a team from the ground up, and winning one of the biggest dance championships in the entire world. Over a decade ago, Suresh and his group of passionate performers entered their first dance reality show, marking the start of a journey that would change their lives and put India on the global map in the dance scene. Known to many as “The Kings,” Kings United rose to international fame after winning Season 3 of the US reality show World of Dance.
                            </p>
                            <p class="d-none">Known to many as “The Kings,” Kings United rose to international fame after winning Season 3 of the US reality show World of Dance. Their performance earned them the top prize of 1 million USD and global recognition. This incredible win not only put them on the world stage but also established them as one of the best dance crews to ever represent India.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- <div class="work__thumb m-img">
                            <img src="{{ asset('assets/img/about/award.jpg')}}" alt="work image" class="w-100">
                        </div> -->
                        <div class="cardfan ">
                            <img src="{{ asset('assets/img/suresh/suresh3.jpeg ')}}" alt="suresh1"
                                id="roma">
                            <img src="{{ asset('assets/img/suresh/dancePlus.jpg')}}" alt="suresh2"
                                id="aqueduct">
                            <img src="{{ asset('assets/img/about/award.jpg')}}" alt="suresh3"
                                id="bike">
                        </div>
                    </div>
                    <!-- </div> -->

                </div>
            </div>
            <div class="card ps-lg-5">
                <!-- <h2>Card 2</h2> -->
                <div class="row w-100">
                    <div class="col-lg-6">
                        <div class="section__title-wrapper">
                            <a href="{{ route('theKings') }}">
                                <h2 class="section__title mb-3">The kings United</h2>
                            </a>
                            <p>At Kings United, dance is more than just steps, it's a combination of energy, emotion, and self-expression. We don't just perform for the stage or the clapping; we dance to challenge the normal, to tell stories without using words, and to connect deeply with people.</p>
                            <p class="">
                                As a dance academy, our goal is to create a welcoming space where anyone, from beginners to advanced dancers can learn, grow, and shine. We're here to guide, support, and give every student a platform to explore their talent, push the limits, and celebrate their own unique style without trying to fit in.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- <div class="work__thumb m-img">
                            <img src="{{ asset('assets/img/kings img/about22.jpg') }}" alt="work image" class="w-100">
                        </div> -->
                        <div class="cardfan ">
                            <img src="{{ asset('assets/img/kings crew/12.jpg')}}" alt="suresh1"
                                id="roma">
                            <img src="{{ asset('assets/img/kings crew/1.jpg')}}" alt="suresh2"
                                id="aqueduct">
                            <img src="{{ asset('assets/img/kings crew/4.jpg')}}" alt="suresh3"
                                id="bike">
                        </div>
                    </div>
                </div>

            </div>
            <div class="card ps-lg-5">
                <!-- <h2>Card 1</h2> -->
                <div class="row w-100">
                    <div class="col-lg-6">
                        <div class="section__title-wrapper ">
                            <h2 class="section__title mb-3">Our Legacy</h2>
                            <p>Founded by Emmy-nominated choreographer Suresh Mukund, Kings United began as a small crew with a big dream and went on to rewrite the story of the Indian dance scene. With wins in top global competitions and performances at major award shows, the crew rose to become world champions, putting India on the international dance map. Today, Kings United is not only known for offering the best dance classes in Mumbai but also for being one of the top training destinations in India and among the most respected in the world.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- <div class="work__thumb m-img">
                            <img src="{{ asset('assets/img/about/award.jpg')}}" alt="work image" class="w-100">
                        </div> -->
                        <div class="cardfan ">
                            <img src="{{ asset('assets/img/kings crew/5.jpg')}}" alt="suresh1"
                                id="roma">
                            <img src="{{ asset('assets/img/kings img/about22.jpg')}}" alt="suresh2"
                                id="aqueduct">
                            <img src="{{ asset('assets/img/kings crew/9.jpg')}}" alt="suresh3"
                                id="bike">
                        </div>
                    </div>
                    <!-- </div> -->

                </div>
            </div>

        </div>
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
                            <div class="col-lg-4 col-md-6">
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
                            <div class="col-lg-4 col-md-6">
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

                            <div class="col-lg-4 col-md-6">
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

                            <div class="col-lg-4 col-md-6 mt-lg-5">
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
                            <div class="col-lg-4 col-md-6 mt-lg-5">
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
                            <div class="col-lg-4 col-md-6 mt-lg-5">
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
    </main>
</div>
@endsection

@push('style')
<style>
    /* @import url('https://fonts.googleapis.com/css?family=Signika+Negative:300,400&display=swap'); */

    * {
        box-sizing: border-box;
    }

    html,
    body {
        /* font-family: "Signika Negative", sans-serif; */
        /* font-weight: 300; */
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    #header-sticky {
        background-color: black;
    }

    .scrolling-wrapper {
        display: flex;
        height: 100vh;
        width: max-content;
        background-color: white;
    }

    .card {
        flex: 0 0 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.5rem;
        color: white;
        border: none;
        /* background-color: transparent; */
        background: linear-gradient(90deg, #de4038 0%, #dea738 100%);
    }

    /* .card:nth-child(1) {
        background-color: royalblue;
    }

    .card:nth-child(2) {
        background-color: tomato;
    }

    .card:nth-child(3) {
        background-color: seagreen;
    }

    .card:nth-child(4) {
        background-color: purple;
    } */

    @media (max-width: 768px) {
        .card {
            justify-content: start;
            margin-top: 3.7rem;
            align-items: self-end;
            margin-bottom: 6rem;

        }

        /* .scrolling-wrapper {
            margin-top: 3rem !important;
        } */
    }

    .section__title {
        font-size: clamp(24px, 5vw, 48px);
        font-family: 'Ethnocentric';
        /* color: black; */
        color: white;
    }

    .scrolling-wrapper p {
        font-weight: 600;
        color: white;
    }

    .section__title-wrapper p {
        max-width: 100% !important;
    }
</style>
<style>
    div.cardfan {
        position: relative;
        width: clamp(250px, 80vw, 450px);
        height: clamp(250px, 60vw, 450px);
        aspect-ratio: 1 / 1;
        margin: 0 auto;
        /* overflow: hidden; */
    }

    div.cardfan img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border: 12px solid #ffe;
        box-shadow: 4px 4px 3px rgba(0, 0, 0, 0.2);
        transform-origin: center 400px;
        transition: all 1s linear;


    }

    @media (min-width: 992px) {


        div.cardfan img:first-child {
            transform: rotate(5deg);
            top: -20px;
            right: -70px;
        }

        /* div.cardfan img:last-child {
        transform: rotate(-5deg);
    } */

        .cardfan img:nth-of-type(2) {
            transform: rotate(-5deg);
            top: -50px;
            left: -24px;
        }

        div.cardfan:hover img:first-child {
            transform: rotate(15deg);

        }

        div.cardfan:hover img:nth-of-type(2) {
            transform: rotate(-15deg);
        }

        img#aqueduct {
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
            filter: url(#greyscale);
            filter: gray;
        }

        img#aqueduct:hover {
            -webkit-filter: grayscale(0);
            filter: grayscale(0);
            filter: none;
        }

        img#bike {
            -webkit-filter: sepia(100%);
            filter: sepia(100%);
            filter: url(#sepia);
            background-color: #5E2612;
            filter: alpha(opacity=50);
        }

        img#bike:hover {
            -webkit-filter: sepia(0);
            filter: sepia(0);
            filter: alpha(opacity=100);
            filter: none;
        }

        img#roma {
            -webkit-filter: blur(3px);
            filter: blur(3px);
            filter: url(#blur);
        }

        img#roma:hover {
            -webkit-filter: blur(0px);
            filter: blur(0px);
            filter: none;
        }
    }

    @media (max-width: 992px) {
        div.cardfan img:first-child {
            display: none;
        }

        div.cardfan img:last-child {
            display: block;
        }

        .cardfan img:nth-of-type(2) {
            display: none;
        }

    }
</style>
@endpush

@push('js')
<script>
    gsap.registerPlugin(ScrollTrigger);

    const sections = gsap.utils.toArray(".card");

    gsap.to(sections, {
        xPercent: -100 * (sections.length - 1),
        ease: "none",
        scrollTrigger: {
            trigger: ".scrolling-wrapper",
            pin: true,
            scrub: 1,
            snap: 1 / (sections.length - 1),
            end: () => "+=" + document.querySelector(".scrolling-wrapper").offsetWidth,
            invalidateOnRefresh: true,
            anticipatePin: 1,
        }
    });

    // Handle resizing (mobile/tablet)
    window.addEventListener("resize", () => {
        ScrollTrigger.refresh();
    });
</script>
@endpush