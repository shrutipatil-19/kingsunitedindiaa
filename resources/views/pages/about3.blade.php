@extends('layout.app')

@section('content')
<div class="ms-all-content ms-content-mobile-space pt-130">
    <main>
        <div class="scrolling-wrapper">
            <div class="card ps-lg-5">
                <!-- <h2>Card 1</h2> -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section__title-wrapper mb-50">
                            <h2 class="section__title">Suresh Mukund</h2>
                            <p>Suresh Mukund, the founder and choreographer of Kings United, has a story that feels like a Bollywood movie. Chasing a dream, building a team from the ground up, and winning one of the biggest dance championships in the entire world. Over a decade ago, Suresh and his group of passionate performers entered their first dance reality show, marking the start of a journey that would change their lives and put India on the global map in the dance scene.
                            </p>
                            <p>Known to many as “The Kings,” Kings United rose to international fame after winning Season 3 of the US reality show World of Dance. Their performance earned them the top prize of 1 million USD and global recognition. This incredible win not only put them on the world stage but also established them as one of the best dance crews to ever represent India.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="work__thumb m-img">
                            <img src="{{ asset('assets/img/about/award.jpg')}}" alt="work image" class="w-100">
                        </div>
                    </div>
                    <!-- </div> -->

                </div>
            </div>
            <div class="card ps-lg-5">
                <!-- <h2>Card 2</h2> -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section__title-wrapper mb-50">
                            <h2 class="section__title ">The kings United</h2>
                            <p>At Kings United, dance is more than just steps, it's a combination of energy, emotion, and self-expression. We don't just perform for the stage or the clapping; we dance to challenge the normal, to tell stories without using words, and to connect deeply with people.</p>
                            <p>
                                As a dance academy, our goal is to create a welcoming space where anyone, from beginners to advanced dancers can learn, grow, and shine. We're here to guide, support, and give every student a platform to explore their talent, push the limits, and celebrate their own unique style without trying to fit in.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="work__thumb m-img">
                            <img src="{{ asset('assets/img/kings img/about22.jpg') }}" alt="work image" class="w-100">
                        </div>
                    </div>
                </div>

            </div>
            <div class="card ps-lg-5">
                <!-- <h2>Card 1</h2> -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section__title-wrapper mb-50">
                            <h2 class="section__title">Our Legacy</h2>
                            <p>Founded by Emmy-nominated choreographer Suresh Mukund, Kings United began as a small crew with a big dream and went on to rewrite the story of the Indian dance scene. With wins in top global competitions and performances at major award shows, the crew rose to become world champions, putting India on the international dance map. Today, Kings United is not only known for offering the best dance classes in Mumbai but also for being one of the top training destinations in India and among the most respected in the world.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="work__thumb m-img">
                            <img src="{{ asset('assets/img/about/award.jpg')}}" alt="work image" class="w-100">
                        </div>
                    </div>
                    <!-- </div> -->

                </div>
            </div>

        </div>

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
        background-color: transparent;
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
            font-size: 2rem;
        }

        .scrolling-wrapper {
            margin-top: 3rem !important;
        }
    }

    .section__title {
        font-size: clamp(24px, 5vw, 48px);
        font-family: 'Ethnocentric';
        color: black;
    }

    p {
        font-weight: 600;
        color: black;
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