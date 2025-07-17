    <!-- golden pass area start -->
     <section class="ms-news-area ms-bg-2 pt-130 pb-90 p-relative z-index-1">
        <div class="ele4 aos-init aos-animate zindex--1" data-aos="fade-right" data-aos-duration="2000" bis_skin_checked="1">
            <img src="{{ asset('assets/img/course/Layer7.png') }}" alt="">
        </div>
        <div class="container">
            <div class="ms-cta-bg fix border-custome">
                {{-- black-bg --}}
                <div class="ms-cta-wrap row">
                    <div class="ms-cta-item col-lg-6 pt-lg-0 pt-4 pb-lg-0 pb-4">
                        <div class="ms-cta-content d-flex flex-column">
                            <span class="section__subtitle text-center text-white section__subtitle-with-lines">One Year Unlimited Access</span>
                            <a href="{{ route('golden') }}">
                                <h2 class="section__title two text-center">
                                    Kings Golden Pass
                                    <span class="animated-underline active"></span>
                                </h2>
                            </a>
                            <a href="{{ route('golden') }}">
                                <p class="text-center">Train without limits for an entire year with the Golden Pass,
                                    <span class="gold-color">giving you complete access to our 
                                    </span>classes and workshops.
                                </p>
                            </a>
                            <p class="text-center"><i class="flaticon-phone-call"></i> Call Us: 7276539771/ 9326961717</p>
                            <div class="trending-btn d-flex justify-content-center">
                                <a class="border__btn zindex-5" href="{{ route('golden') }}">Enquire Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="work__thumb-wrapper zindex-1 p-relative d-inline-block col-lg-6">
                        <div class="work__thumb-inner p-relative zindex-5">
                            <div class="m-img">
                                <a href="{{ route('golden') }}">
                                    <img src="{{ asset('assets/img/kings img/about22.jpg') }}" alt="work image" class="border-none border-0">
                                </a>
                            </div>
                        </div>
                        <!-- <div class="ms-work-round p-absolute zindex--1 d-none d-sm-block"></div>
                        <div class="ms-work-round p-absolute two zindex--1 d-none d-sm-block"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('style')
    <style>
        .ele4 {
            position: absolute;
                top: 16%;
                left: -20%;
                opacity: 0.6 !important;
                transform: rotateY(180deg) !important;
             }
     
             .ele4 img {
                width: calc(100% - 300px);
                height: 100%;
                object-fit: contain;
            }
        .ms-cta-wrap {
            gap: 0px;

        }

        .ms-cta-bg {
            padding: 0px;
        }

        .border-none {
            border: none !important;
        }

        .gold-color {
            color: #EDC967;
        }

        .ms-cta-bg i {
            color: #EDC967;
            margin-right: 10px;
        }

        :root {
            --neon-gold: #ffd700;
        }

        .border-custome {
            border: 4px solid var(--neon-gold);
            border-radius: 20px;
            /* padding: 12px 18px; */
            transition: box-shadow 0.3s ease;
            box-shadow:
                0 0 4px var(--neon-gold);
        }

        /* .border-custome:hover {
            box-shadow:
                0 0 6px var(--neon-gold),
                0 0 10px var(--neon-gold);
        } */
    </style>
    @endpush