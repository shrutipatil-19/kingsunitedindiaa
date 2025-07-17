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
        <!-- achivements Area Start -->
        <section class="ms-news-area pt-130 pb-90 ms-bg-2">
            <div class="container">
                <div class="row align-items-end mb-25 bdFadeUp">
                    <div class="col-lg-6">
                        <div class="section__title-wrapper achievement mb-40 bd-title-anim">
                            <span class="section__subtitle">Key Achievements</span>
                            <h2 class="section__title">The <span class="animated-underline active">Kings
                                </span>
                            </h2>
                        </div>
                    </div>

                </div>
                <div class="row bdFadeUp">
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-news-item p-relative zindex-1 mb-40">
                            <div class="ms-news-overlay p-absolute"></div>

                            <div class="ms-news-thumb w-img w-100 h-100">
                                <a href="#"><img src="{{ asset('assets/img/suresh/achievements/winnerWorldDance2020.jpg') }}"
                                        alt="Winner of the World Choreography Award"></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute">
                                <h3 class="ms-news-title mb-15"><a href="#">World of Dance | Winner</a></h3>
                                <p>The first Indian team to claim the World Champion title on NBC’s World of Dance.</p>
                                <div class="ms-news-meta d-inline-block">
                                    <!-- <span>Feb 23, 2020</span> -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-news-item p-relative zindex-1 mb-40">
                            <div class="ms-news-overlay p-absolute"></div>

                            <div class="ms-news-thumb w-img w-100 h-100">
                                <a href="#"><img src="{{ asset('assets/img/suresh/achievements/worldDanceWinner.jpg') }}"
                                        alt="World Champion at Nbc's World of Dance"></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute">
                                <h3 class="ms-news-title mb-15"><a href="#">World Hip Hop Dance Championship Bronze Medalist</a></h3>
                                <p>India’s first dance crew to secure a medal at the World Hip-Hop Dance Championship.</p>
                                <div class="ms-news-meta d-inline-block">
                                    <!-- <span>Feb 15, 2019</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-news-item p-relative zindex-1 mb-40">
                            <div class="ms-news-overlay p-absolute"></div>

                            <div class="ms-news-thumb w-img w-100 h-100">
                                <a href="#"><img src="{{ asset('assets/img/suresh/achievements/emmy.jpg') }}"
                                        alt="Emmy-nominated Choreocrapher"></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute">
                                <h3 class="ms-news-title mb-15"><a href="#">ABCD 2 Movie </a></h3>
                                <p>
                                    Our story was celebrated on screen in Remo D’Souza’s “Any Body Can Dance 2”.</p>
                                <div class="ms-news-meta d-inline-block">
                                    <!-- <span>Feb 20, 2019</span> -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-news-item p-relative zindex-1 mb-40">
                            <div class="ms-news-overlay p-absolute"></div>

                            <div class="ms-news-thumb w-img w-100 h-100">
                                <a href="#"><img src="{{ asset('assets/img/suresh/achievements/dadaSahebPhalke.jpg') }}"
                                        alt="Recipient of the Dada Saheb PhalKe Award"></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute">
                                <h3 class="ms-news-title mb-15"><a href="#">India's got talent season 3 winner</a></h3>
                                <p>Lifted the trophy in Season 3 of India’s Got Talent with unforgettable performances.</p>
                                <div class="ms-news-meta d-inline-block">
                                    <!-- <span>Feb 23, 2019</span> -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-news-item p-relative zindex-1 mb-40">
                            <div class="ms-news-overlay p-absolute"></div>

                            <div class="ms-news-thumb w-img w-100 h-100">
                                <a href="#"><img src="{{ asset('assets/img/suresh/achievements/dancePlus.jpg') }}"
                                        alt="news image"></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute">
                                <h3 class="ms-news-title mb-15"><a href="#">Entertainment ke liye kuch bhi karega season 3 winner</a></h3>
                                <p>Brought home the win in Season 3 of Entertainment Ke Liye Kuch Bhi Karega.</p>
                                <div class="ms-news-meta d-inline-block">
                                    <!-- <span>Feb 23, 2015</span> -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-news-item p-relative zindex-1 mb-40">
                            <div class="ms-news-overlay p-absolute"></div>

                            <div class="ms-news-thumb w-img w-100 h-100">
                                <a href="#"><img src="{{ asset('assets/img/suresh/achievements/inspiration.jpg') }}"
                                        alt="news image"></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute">
                                <h3 class="ms-news-title mb-15"><a href="#">Boogie Woogie india winner</a></h3>
                                <p>Showcased our unique style on the iconic Boogie Woogie, earning nationwide appreciation.</p>
                                <div class="ms-news-meta d-inline-block">
                                    <!-- <span>Feb 23, 2015</span> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- achivements Area End -->
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
        /* background-color: white; */
        background: linear-gradient(90deg, #de4038 0%, #dea738 100%);
    }

    .scrolling-wrapper .card:first-child,
    .scrolling-wrapper .card:last-child {
        background: linear-gradient(90deg, #de4038 0%, #dea738 100%);
    }

    .scrolling-wrapper .card:nth-of-type(2) {
        background: linear-gradient(90deg, #dea738 0%, #de4038 100%);
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
        border-radius: 0px;
        outline: none;
        /* background-color: transparent; */
        /* background: linear-gradient(90deg, #de4038 0%, #dea738 100%); */
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


    @media (max-width: 992px) {
        .scrolling-wrapper {
            display: block !important;
            /* Switch to vertical */
            width: 100% !important;
            height: auto !important;
        }

        .card {
            width: 100vw;
            height: auto !important;
            padding: 2rem 1rem;
            display: block !important;
        }
    }

    .scrolling-wrapper .section__title {
        font-size: clamp(24px, 5vw, 48px);
        font-family: 'Ethnocentric';
        /* color: black; */
        color: white;
    }

    .scrolling-wrapper p {
        font-weight: 600;
        /* color: black; */
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

    function initHorizontalScroll() {
        const sections = gsap.utils.toArray(".card");

        ScrollTrigger.matchMedia({
            // Only apply horizontal scroll on larger screens
            "(min-width: 993px)": function() {
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
            }
        });
    }

    initHorizontalScroll();

    window.addEventListener("resize", () => {
        ScrollTrigger.refresh();
    });

    // gsap.registerPlugin(ScrollTrigger);

    // const sections = gsap.utils.toArray(".card");

    // gsap.to(sections, {
    //     xPercent: -100 * (sections.length - 1),
    //     ease: "none",
    //     scrollTrigger: {
    //         trigger: ".scrolling-wrapper",
    //         pin: true,
    //         scrub: 1,
    //         snap: 1 / (sections.length - 1),
    //         end: () => "+=" + document.querySelector(".scrolling-wrapper").offsetWidth,
    //         invalidateOnRefresh: true,
    //         anticipatePin: 1,
    //     }
    // });

    // // Handle resizing (mobile/tablet)
    // window.addEventListener("resize", () => {
    //     ScrollTrigger.refresh();
    // });
</script>
@endpush