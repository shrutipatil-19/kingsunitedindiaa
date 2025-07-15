@extends('layout.app')

@section('content')
<div class="ms-all-content ms-content-mobile-space pt-130">
    <main>
        <div class="scroll-container-wrapper">
            <div class="scrolling-wrapper work__area pt-70 pb-70">

                <!-- CARD 1 -->
                <div class="card ps-5">
                    <div class="row align-items-center bdFadeUp flex-lg-row">
                        <div class="col-xl-6 col-lg-10">
                            <div class="work__content-wrapper p-relative mb-60">
                                <div class="section__title-wrapper mb-50">
                                    <h2 class="section__title mb-20 bd-title-anim">Suresh Mukund</h2>
                                    <p>Suresh Mukund, the founder and choreographer of Kings United, has a story that feels like a Bollywood movie...</p>
                                    <p>Known to many as “The Kings,” Kings United rose to international fame after winning Season 3 of the US reality show World of Dance...</p>
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

                <!-- CARD 2 -->
                <div class="card ps-5">
                    <div class="row align-items-center bdFadeUp">
                        <div class="col-xl-6 pl-30">
                            <div class="work__content-wrapper work__content-wrapper-space mb-70">
                                <div class="section__title-wrapper mb-30 bd-title-anim">
                                    <h2 class="section__title two">The Kings United</h2>
                                </div>
                                <div class="work__features-inner">
                                    <p>At Kings United, dance is more than just steps, it's a combination of energy, emotion, and self-expression...</p>
                                    <p>As a dance academy, our goal is to create a welcoming space where anyone can learn, grow, and shine...</p>
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
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="card ps-5">
                    <div class="row align-items-center bdFadeUp">
                        <div class="col-xl-6 pl-30">
                            <div class="work__content-wrapper work__content-wrapper-space mb-70">
                                <div class="section__title-wrapper mb-30 bd-title-anim">
                                    <h2 class="section__title two">Our Legacy</h2>
                                </div>
                                <div class="work__features-inner">
                                    <p>Founded by Emmy-nominated choreographer Suresh Mukund, Kings United began as a small crew with a big dream...</p>
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
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
</div>
@endsection

@push('style')
<style>
    html {
        scroll-behavior: smooth;
    }

    body {
        overflow-x: hidden;
    }

    .scroll-container-wrapper {
        overflow: hidden;
    }

    .scrolling-wrapper {
        display: flex;
        flex-wrap: nowrap;
        width: fit-content;
        height: 100vh;
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
        box-sizing: border-box;
        will-change: transform;
    }

    .work__area .section__title {
        font-size: clamp(24px, 5vw, 48px);
    }

    @media (max-width: 767px) {
        .scroll-container-wrapper {
            padding-top: 55px;
        }

        .card .row {
            flex-direction: column;
        }

        .work__content-wrapper,
        .work__thumb-wrapper {
            text-align: center;
            padding: 0 15px;
        }

        .work__features-inner p {
            font-size: 1rem;
        }
    }
</style>
@endpush

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script>
    gsap.registerPlugin(ScrollTrigger);

    const sections = gsap.utils.toArray(".card");

    gsap.to(sections, {
        xPercent: -100 * (sections.length - 1),
        ease: "power1.inOut",
        scrollTrigger: {
            trigger: ".scrolling-wrapper",
            pin: true,
            pinType: "transform",
            scrub: 0.5,
            snap: 1 / (sections.length - 1),
            end: () => "+=" + document.querySelector(".scrolling-wrapper").offsetWidth,
            invalidateOnRefresh: true,
        }
    });

    window.addEventListener("resize", () => {
        ScrollTrigger.refresh();
    });
</script>
@endpush
