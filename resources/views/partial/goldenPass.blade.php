    <!-- golden pass area start -->
    <section class="ms-cta-area ms-event2-area include__bg pt-130 pb-130 p-relative zindex-10" style="background-image: url('{{ asset('assets/img/kings crew/4.jpg')}}');background-attachment: fixed;">
        <div class="ms-overlay ms-overlay1 zindex--1"></div>
        <div class="container">
            <div class="ms-cta-bg black-bg fix ">
                <div class="ms-cta-wrap row">
                    <div class="ms-cta-item col-lg-6">
                        <div class="ms-cta-content d-flex flex-column">
                            <span class="section__subtitle text-center text-white section__subtitle-with-lines">One Year Unlimited Access</span>
                            <a href="{{ route('golden') }}">
                                <h2 class="section__title two text-center">
                                    Kings Golden Pass
                                    <span class="animated-underline active"></span>
                                </h2>
                            </a>
                            <a href="{{ route('golden') }}">
                                <p class="text-center">Join The Golden Pass
                                    Membership And Experience A Year Of
                                    <span class="gold-color">Unlimited Dance
                                        Training And Unparalleled
                                    </span>Opportunities.
                                </p>
                            </a>
                            <p class="text-center"><i class="flaticon-phone-call"></i> Call Us: 7276539771/ 9326961717</p>
                            <div class="trending-btn d-flex justify-content-center">
                                <a class="border__btn zindex-5" href="http://localhost/kingsunitedindiaa/course/diploma-in-street-dance">Enquire Now</a>
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
    <!-- golden area end -->

    @push('style')
    <style>
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
    </style>
    @endpush