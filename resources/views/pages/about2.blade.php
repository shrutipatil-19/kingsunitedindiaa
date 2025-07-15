@extends('layout.app')

@section('content')
<div class="ms-all-content ms-content-mobile-space pt-130">
    <main>
        <div class="scrolling-wrapper work__area pt-70 ms-bg-2 pb-70">
            <!-- <div class="container"> -->
            <div class="card ps-5">
                <!-- <h2>Card 1</h2> -->
                <div class="row align-items-center bdFadeUp flex-lg-row">
                    <div class="col-xl-6 col-lg-10">
                        <div class="work__content-wrapper p-relative mb-60">
                            <div class="section__title-wrapper mb-50">
                                <h2 class="section__title mb-20 bd-title-anim">Suresh Mukund</h2>
                                <p>Suresh Mukund, the founder and choreographer of Kings United, has a story that feels like a Bollywood movie. Chasing a dream, building a team from the ground up, and winning one of the biggest dance championships in the entire world. Over a decade ago, Suresh and his group of passionate performers entered their first dance reality show, marking the start of a journey that would change their lives and put India on the global map in the dance scene.
                                </p>
                                <p>Known to many as “The Kings,” Kings United rose to international fame after winning Season 3 of the US reality show World of Dance. Their performance earned them the top prize of 1 million USD and global recognition. This incredible win not only put them on the world stage but also established them as one of the best dance crews to ever represent India.</p>

                                <!-- <div class="trending-btn d-flex">
                                        <a class="border__btn zindex-5" href="{{ route('sureshMukund') }}">View More</a>
                                    </div> -->
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="ms-work3-thumb-wrap d-inline-block p-relative mb-60">
                            <div class="ms-work3-inner">
                                <div class="ms-work3-thumb m-img p-relative fix ms-br-20 ms-lg-3 me-0">
                                    <div class="ms-overlay ms-overlay3 p-absolute"></div>
                                    <img src="{{ asset('assets/img/about/award.jpg')}}" alt="work image">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card ps-5">
                <!-- <h2>Card 2</h2> -->
                <div class="row align-items-center bdFadeUp">
                    <div class="col-xl-6 pl-30">
                        <div class="work__content-wrapper work__content-wrapper-space mb-70">
                            <div class="section__title-wrapper mb-30 bd-title-anim">
                                <!-- <span class="section__subtitle">Kings United</span> -->

                                <!-- <h2 class="section__title two">
                                    The Story Behind
                                    <span class="animated-underline active">the Crown</span>
                                </h2> -->
                                <h2 class="section__title two">
                                    The Kings United
                                </h2>
                            </div>
                            <div class="work__features-inner">
                                <p>At Kings United, dance is more than just steps, it's a combination of energy, emotion, and self-expression. We don't just perform for the stage or the clapping; we dance to challenge the normal, to tell stories without using words, and to connect deeply with people.</p>
                                <p>
                                    As a dance academy, our goal is to create a welcoming space where anyone, from beginners to advanced dancers can learn, grow, and shine. We're here to guide, support, and give every student a platform to explore their talent, push the limits, and celebrate their own unique style without trying to fit in.</p>

                                <!-- <div class="work__features-bottom">
                                    <div class="work__features-action">
                                        <div class="trending-btn d-flex">
                                            <a class="border__btn zindex-5" href="{{ route('theKings') }}">View More</a>
                                        </div>
                                    </div>

                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="work__thumb-wrapper zindex-1 p-relative mb-60 d-inline-block">
                            <div class="work__thumb-inner p-relative zindex-5">
                                <div class="work__thumb m-img">
                                    <img src="{{ asset('assets/img/kings img/about22.jpg') }}" alt="work image">
                                </div>
                            </div>
                            <div class="ms-work-round p-absolute zindex--1 d-none d-sm-block"></div>
                            <div class="ms-work-round p-absolute two zindex--1 d-none d-sm-block"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card ps-5">
                <!-- <h2>Card 3</h2> -->
                <div class="row align-items-center bdFadeUp">
                    <div class="col-xl-6 pl-30">
                        <div class="work__content-wrapper work__content-wrapper-space mb-70">
                            <div class="section__title-wrapper mb-30 bd-title-anim">
                                <!-- <span class="section__subtitle">Kings United</span> -->

                                <!-- <h2 class="section__title two">
                                    The Story Behind
                                    <span class="animated-underline active">the Crown</span>
                                </h2> -->
                                <h2 class="section__title two">
                                    Our Legacy
                                </h2>
                            </div>
                            <div class="work__features-inner">
                                <p>Founded by Emmy-nominated choreographer Suresh Mukund, Kings United began as a small crew with a big dream and went on to rewrite the story of the Indian dance scene. With wins in top global competitions and performances at major award shows, the crew rose to become world champions, putting India on the international dance map. Today, Kings United is not only known for offering the best dance classes in Mumbai but also for being one of the top training destinations in India and among the most respected in the world.</p>


                                <!-- <div class="work__features-bottom">
                                    <div class="work__features-action">
                                        <div class="trending-btn d-flex">
                                            <a class="border__btn zindex-5" href="{{ route('theKings') }}">View More</a>
                                        </div>
                                    </div>

                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="work__thumb-wrapper zindex-1 p-relative mb-60 d-inline-block">
                            <div class="work__thumb-inner p-relative zindex-5">
                                <div class="work__thumb m-img">
                                    <img src="{{ asset('assets/img/kings img/about22.jpg') }}" alt="work image">
                                </div>
                            </div>
                            <div class="ms-work-round p-absolute zindex--1 d-none d-sm-block"></div>
                            <div class="ms-work-round p-absolute two zindex--1 d-none d-sm-block"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="card">
                <h2>Card 4</h2>
            </div> -->
            <!-- </div> -->
        </div>
    </main>
</div>
@endsection

@push('style')
<style>
    body {
        overflow-x: hidden;
    }

    .scrolling-wrapper {
        display: flex;
        height: 100vh;
        width: max-content;
        background-color: #dea738;
    }

    .card {
        flex: 0 0 100vw;
        height: 100vh;
        background-color: transparent;
        border: none;
        outline: none;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
    }

    p{
    font-weight: 600;
    color: black;
}
    /* .card:nth-child(2) {
        background-color: tomato;
    }

    .card:nth-child(3) {
        background-color: seagreen;
    }

    .card:nth-child(4) {
        background-color: purple;
    } */
    .work__area .section__title {
        font-size: clamp(24px, 5vw, 48px);
        /* color: black; */
    }
</style>
@endpush

@push('js')
<script>
    gsap.registerPlugin(ScrollTrigger);

    let sections = gsap.utils.toArray(".card");

    gsap.to(sections, {
        xPercent: -100 * (sections.length - 1),
        ease: "none",
        scrollTrigger: {
            trigger: ".scrolling-wrapper",
            pin: true,
            scrub: 1,
            snap: 1 / (sections.length - 1),
            end: () => "+=" + document.querySelector(".scrolling-wrapper").offsetWidth
        }
    });
</script>
@endpush