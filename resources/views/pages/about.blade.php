@extends('layout.app')

@section('content')
<div class="ms-all-content ms-content-mobile-space pt-130">
    <main>
        <!-- About Area Start Here  -->
        <section class="ms-about-area fix">
            <div class="ms-about-bg include__bg p-relative zindex-1 pt-120 pb-130"
                data-background="{{ asset('assets/img/about/bg.jpg')}}" style="background-image: url('{{ asset('assets/img/about/bg.jpg')}}');">
                <div class="ms-overlay ms-overlay5 p-absolute zindex--1"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="ms-about-content text-center">
                                <h2 class="ms-title2 white-text mb-30 bd-title-anim">About Musicly In band
                                    party hiring
                                    agency
                                </h2>
                                <p class="capitalize mb-65">musicly is the UK's leading live music booking
                                    agency: we
                                    manage
                                    over
                                    3000 bookings a year, from intimate <br> weddings to high-profile
                                    corporate
                                    functions.
                                </p>
                                <div class="ms-about-round-btn d-inline-block bdFadeUp">
                                    <a href="https://www.youtube.com/watch?v=y4jv5bk8ato"
                                        class="popup-video ms-video-round p-relative">
                                        <div class="ms-video-img1 wh250">
                                            <img src="{{ asset('assets/img/kings img/video_banner1.jpg')}}" alt="about image" class="w-100 h-100 object-cover rounded-circle">
                                        </div>
                                        <div class="ms-video-img2 d-inline-block">
                                            <img src="{{ asset('assets/img/about/about2.png')}}" alt="about image">
                                        </div>
                                        <div class="ms-video-icon">
                                            <i class="fa-sharp fa-regular fa-play"></i>
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

        <!-- Why Choose Us Area Start Here  -->
        <section class="ms-choose-area pt-125 pb-105">
            <div class="container">
                <div class="row align-items-end mb-25 bdFadeUp">
                    <div class="col-lg-7">
                        <div class="section__title-wrapper mb-40">
                            <h2 class="section__title mb-35 bd-title-anim">Why choose us?</h2>
                            <p>Our hand-picked acts will guarantee you fantastic wedding <br> entertainment
                                for
                                each
                                part.
                                We'll provide help and support 24 hours a <br> day, 7 days a week, right up
                                until</p>
                        </div>
                    </div>
                    <!-- <div class="col-lg-5">
                        <div class="d-flex justify-content-lg-end">
                            <div class="ms-review-part mb-40">
                                <div class="ms-review-gap d-flex align-items-center">
                                    <div class="ms-review-left">
                                        <h3>Excellent :</h3>
                                        <p>1050 Review On</p>
                                    </div>
                                    <div class="ms-review-right">
                                        <img src="{{ asset('assets/img/footer/start-01.png')}}" alt="review img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="row mb-45 bdFadeUp">
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-choose-item mb-25">
                            <div class="ms-choose-icon d-inline-block p-relative">
                                <i class="flaticon-dollar"></i>
                                <span>01</span>
                            </div>
                            <h3 class="ms-choose-title">Pay no more than booking
                                direct</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-choose-item mb-25">
                            <div class="ms-choose-icon d-inline-block p-relative">
                                <i class="flaticon-theater"></i>
                                <span>02</span>
                            </div>
                            <h3 class="ms-choose-title">Our acts are vetted and
                                road-tested</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-choose-item mb-25">
                            <div class="ms-choose-icon d-inline-block p-relative">
                                <i class="flaticon-verified"></i>
                                <span>03</span>
                            </div>
                            <h3 class="ms-choose-title">Your booking is secure
                                in our site</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-choose-item mb-25">
                            <div class="ms-choose-icon d-inline-block p-relative">
                                <i class="flaticon-appointment"></i>
                                <span>04</span>
                            </div>
                            <h3 class="ms-choose-title">Booking is just the
                                begin night</h3>
                        </div>
                    </div>
                </div>
                <!-- <div class="ms-border2 pb-130">
                    <div class="row bdFadeUp">
                        <div class="col-xl-12">
                            <div class="ms-choose-bg m-img ms-br-15 fix">
                                <img src="{{ asset('assets/img/about/choose-bg.png')}}" alt="choose img">
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <!-- Why Choose Us Area End Here  -->

        <!-- work area start -->
        <section class="work__area pt-30 pb-70">
            <div class="container">
                <div class="row align-items-center bdFadeUp">
                    <div class="col-xl-6">
                        <div class="ms-work3-thumb-wrap d-inline-block p-relative mb-60">
                            <div class="ms-work3-inner">
                                <div class="ms-work3-thumb m-img p-relative fix ms-br-20">
                                    <div class="ms-overlay ms-overlay3 p-absolute"></div>
                                    <img src="{{ asset('assets/img/about/award.jpg')}}" alt="work image">
                                </div>
                                <div class="work__features-bottom ms-work3-features pb-0">
                                    <div class="work__features-action">
                                        <div class="work__features-btn ms-work3-feature-btn">
                                            <a class="ms-fill-btn" href="contact.html">Get Started</a>
                                        </div>
                                        <div class="features__btn-text">
                                            <span>Book something <br> awesome !</span>
                                        </div>
                                    </div>
                                    <div class="work__features-arrow">
                                        <img src="{{ asset('assets/img/work/arrow.png')}}" alt="image not found">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-10">
                        <div class="work__content-wrapper p-relative mb-60">
                            <div class="section__title-wrapper mb-50">
                                <h2 class="section__title mb-40 bd-title-anim">Story of Suresh Mukund & his team – The Kings</h2>
                                <p>Suresh Mukund, the visionary founder and choreographer of Kings United, has a story that mirrors the plot of a Bollywood film: an impossible dream, an underdog team starting from scratch, and ultimately winning the biggest championship. Over a decade ago, Suresh Mukund and his dedicated group of dancers entered their first dance reality show, marking the beginning of an incredible journey.
                                </p>
                                <p>Kings United, also known simply as “The Kings,” shot to global fame by winning the third season of the US reality show, “World of Dance.” Their victory was historic, as they walked away with a grand prize of USD 1 million. This monumental achievement placed them on the global dance map and cemented their reputation as one of the best dance crews in the world</p>
                            </div>
                            <!-- <div class="work__features-inner">
                                <div class="work__features-item">
                                    <div class="work__features-icon">
                                        <span>
                                            <svg width="46" height="27" viewBox="0 0 46 27" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_36_265)">
                                                    <mask id="mask0_36_265" style="mask-type:alpha"
                                                        maskUnits="userSpaceOnUse" x="2" y="-1" width="42"
                                                        height="27">
                                                        <path
                                                            d="M40.3981 0.0808105H5.59708C4.33871 0.0808105 3.3186 1.1096 3.3186 2.37868V23.0226C3.3186 24.2917 4.33871 25.3205 5.59708 25.3205H40.3981C41.6565 25.3205 42.6766 24.2917 42.6766 23.0226V2.37868C42.6766 1.1096 41.6565 0.0808105 40.3981 0.0808105Z"
                                                            fill="#DFEFFF" stroke="#2690FF" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </mask>
                                                    <g mask="url(#mask0_36_265)">
                                                        <path
                                                            d="M40.3981 0.0808105H5.59708C4.33871 0.0808105 3.3186 1.1096 3.3186 2.37868V23.0226C3.3186 24.2917 4.33871 25.3205 5.59708 25.3205H40.3981C41.6565 25.3205 42.6766 24.2917 42.6766 23.0226V2.37868C42.6766 1.1096 41.6565 0.0808105 40.3981 0.0808105Z"
                                                            stroke="white" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <mask id="mask1_36_265" style="mask-type:alpha"
                                                        maskUnits="userSpaceOnUse" x="0" y="23" width="46"
                                                        height="4">
                                                        <path
                                                            d="M3.05673 25.8934C3.60661 26.3559 4.56615 26.7308 5.19913 26.7308H41.5731C42.2065 26.7308 43.1378 26.2914 43.6562 25.7464L45.0058 24.3275C45.523 23.7838 45.4265 23.343 44.7957 23.343H1.17102C0.537823 23.343 0.470957 23.7185 1.02017 24.1805L3.05673 25.8934Z"
                                                            fill="#2690FF" />
                                                    </mask>
                                                    <g mask="url(#mask1_36_265)">
                                                        <path
                                                            d="M3.05673 25.8934C3.60661 26.3559 4.56615 26.7308 5.19913 26.7308H41.5731C42.2065 26.7308 43.1378 26.2914 43.6562 25.7464L45.0058 24.3275C45.523 23.7838 45.4265 23.343 44.7957 23.343H1.17102C0.537823 23.343 0.470957 23.7185 1.02017 24.1805L3.05673 25.8934Z"
                                                            fill="white" />
                                                    </g>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M14.6847 16.2461H16.1739L15.057 10.614H11.7063L10.9617 16.2461H12.4509V17.7478C12.4509 18.368 12.9509 18.8743 13.5678 18.8743C14.1889 18.8743 14.6847 18.37 14.6847 17.7478V16.2462V16.2461Z"
                                                        fill="white" stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M21.7584 18.8743H20.2692L18.4077 10.6139H23.6199L21.7584 18.8743Z"
                                                        fill="white" stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M13.3817 9.48762C14.3069 9.48762 15.057 8.73116 15.057 7.79801C15.057 6.86486 14.3069 6.1084 13.3817 6.1084C12.4564 6.1084 11.7063 6.86486 11.7063 7.79801C11.7063 8.73116 12.4564 9.48762 13.3817 9.48762Z"
                                                        fill="white" stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M20.8277 9.48762C21.753 9.48762 22.5031 8.73116 22.5031 7.79801C22.5031 6.86486 21.753 6.1084 20.8277 6.1084C19.9024 6.1084 19.1523 6.86486 19.1523 7.79801C19.1523 8.73116 19.9024 9.48762 20.8277 9.48762Z"
                                                        fill="white" stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M27.9299 7.56274H34.8759" stroke="white"
                                                        stroke-linecap="round" />
                                                    <path d="M27.9299 10.4714H34.8759" stroke="white"
                                                        stroke-linecap="round" />
                                                    <path d="M27.9299 13.3801H34.8759" stroke="white"
                                                        stroke-linecap="round" />
                                                    <path d="M27.9299 16.2888H32.5446" stroke="white"
                                                        stroke-linecap="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_36_265">
                                                        <rect width="45" height="27" fill="white"
                                                            transform="translate(0.523438)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="work__features-content">
                                        <h4>Browse and compare.</h4>
                                        <p>Compare rates and availability <br> of local entertainers</p>
                                    </div>
                                </div>
                                <div class="work__features-item">
                                    <div class="work__features-icon">
                                        <span>
                                            <svg width="46" height="30" viewBox="0 0 46 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_36_354)">
                                                    <mask id="mask0_36_354" style="mask-type:alpha"
                                                        maskUnits="userSpaceOnUse" x="6" y="-1" width="41"
                                                        height="27">
                                                        <path
                                                            d="M9.26562 24.7666L43.3012 24.7666C44.5285 24.7666 45.5234 23.7717 45.5234 22.5444V2.25166C45.5234 1.02435 44.5285 0.0294323 43.3012 0.0294323L9.26562 0.0294323C8.03832 0.0294323 7.0434 1.02435 7.0434 2.25166V22.5444C7.0434 23.7717 8.03832 24.7666 9.26562 24.7666Z"
                                                            fill="#DFEFFF" stroke="#2690FF" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </mask>
                                                    <g mask="url(#mask0_36_354)">
                                                        <path
                                                            d="M9.26562 24.7666L43.3012 24.7666C44.5285 24.7666 45.5234 23.7717 45.5234 22.5444V2.25166C45.5234 1.02435 44.5285 0.0294323 43.3012 0.0294323L9.26562 0.0294323C8.03832 0.0294323 7.0434 1.02435 7.0434 2.25166V22.5444C7.0434 23.7717 8.03832 24.7666 9.26562 24.7666Z"
                                                            stroke="white" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <path
                                                        d="M40.7134 17.208L27.6577 17.208M24.9091 17.208L11.8533 17.208"
                                                        stroke="white" stroke-linecap="square"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M31.5173 11.7109L39.6023 11.7109C40.2159 11.7109 40.7134 11.2135 40.7134 10.5998V5.95061C40.7134 5.33696 40.2159 4.8395 39.6023 4.8395L31.5173 4.8395C30.9037 4.8395 30.4062 5.33696 30.4062 5.95061V10.5998C30.4062 11.2135 30.9037 11.7109 31.5173 11.7109Z"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M34.5291 11.7109V4.8395M40.7134 8.96236H35.2162M34.5291 7.58808H30.4062"
                                                        stroke="white" stroke-linecap="square"
                                                        stroke-linejoin="round" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M1.26636 20.3433H12.9603V28.4391H1.26636V20.3433Z"
                                                        fill="white" stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M12.0606 19.8935C12.0606 17.1611 9.8456 14.946 7.11321 14.946C4.38081 14.946 2.16577 17.1611 2.16577 19.8935"
                                                        stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_36_354">
                                                        <rect width="45" height="29.4444" fill="white"
                                                            transform="translate(0.523438)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="work__features-content">
                                        <h4>Book securely.</h4>
                                        <p>Booking through GigSalad <br> ensures payment protection.</p>
                                    </div>
                                </div>
                                <div class="work__features-item">
                                    <div class="work__features-icon">
                                        <span>
                                            <svg width="46" height="42" viewBox="0 0 46 42" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_36_396)">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M36.5665 12.3724C38.1067 12.677 39.8538 12.4088 41.4313 11.4975C44.5453 9.70015 45.8206 6.07889 44.2793 3.4094C42.7388 0.740078 38.965 0.0338131 35.8508 1.83184C34.2735 2.7425 33.1675 4.12203 32.6608 5.60739L36.5665 12.3724Z"
                                                        stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <mask id="mask0_36_396" style="mask-type:alpha"
                                                        maskUnits="userSpaceOnUse" x="38" y="2" width="4"
                                                        height="4">
                                                        <path
                                                            d="M38.9634 2.95068L40.5035 3.36336L40.0908 4.90348L38.5507 4.4908L38.9634 2.95068Z"
                                                            stroke="#2690FF" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </mask>
                                                    <g mask="url(#mask0_36_396)">
                                                        <path
                                                            d="M39.8188 2.83813L40.6161 4.21897L39.2352 5.01619L38.438 3.63536L39.8188 2.83813Z"
                                                            stroke="white" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <mask id="mask1_36_396" style="mask-type:alpha"
                                                        maskUnits="userSpaceOnUse" x="39" y="5" width="4"
                                                        height="4">
                                                        <path
                                                            d="M40.5579 5.7124L42.098 6.12508L41.6853 7.6652L40.1452 7.25252L40.5579 5.7124Z"
                                                            stroke="#2690FF" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </mask>
                                                    <g mask="url(#mask1_36_396)">
                                                        <path
                                                            d="M41.4133 5.59985L42.2106 6.98069L40.8297 7.77791L40.0325 6.39708L41.4133 5.59985Z"
                                                            stroke="white" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <mask id="mask2_36_396" style="mask-type:alpha"
                                                        maskUnits="userSpaceOnUse" x="36" y="5" width="4"
                                                        height="4">
                                                        <path
                                                            d="M36.999 5.92603L38.5391 6.3387L38.1265 7.87882L36.5863 7.46614L36.999 5.92603Z"
                                                            stroke="#2690FF" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </mask>
                                                    <g mask="url(#mask2_36_396)">
                                                        <path
                                                            d="M37.8545 5.81348L38.6517 7.19431L37.2709 7.99153L36.4737 6.6107L37.8545 5.81348Z"
                                                            stroke="white" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M33.0191 6.22821L36.2079 11.7513L33.4466 13.3461L30.2571 7.82284L33.0191 6.22821Z"
                                                        fill="white" stroke="white" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M30.2575 7.82262L33.4462 13.3457L15.0969 23.0193L12.7052 18.8768L30.2575 7.82262Z"
                                                        stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M13.1038 19.5673L14.6985 22.3293L11.9367 23.9233L10.3419 21.1619L13.1038 19.5673Z"
                                                        fill="white" stroke="white" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M11.1395 22.5428L4.23499 26.5292" stroke="white"
                                                        stroke-linecap="square" stroke-linejoin="round" />
                                                    <path
                                                        d="M3.54494 26.9275C1.63803 28.0284 0.984887 30.466 2.08584 32.3729C3.18697 34.2791 5.62455 34.9323 7.53127 33.832M11.5172 40.7358C13.4241 39.6348 14.0772 37.1973 12.9763 35.2904C11.8751 33.3841 9.43756 32.731 7.53084 33.8313"
                                                        stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M29.0258 35.4579C30.7317 35.4579 32.115 34.5359 32.115 33.3984C32.115 32.2608 30.7317 31.3389 29.0258 31.3389C27.3198 31.3389 25.9365 32.2608 25.9365 33.3984C25.9365 34.5359 27.3198 35.4579 29.0258 35.4579Z"
                                                        fill="white" />
                                                    <path d="M31.4285 32.7118V23.1736" stroke="white"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M37.9503 38.204C39.6563 38.204 41.0396 37.282 41.0396 36.1445C41.0396 35.0069 39.6563 34.085 37.9503 34.085C36.2444 34.085 34.8611 35.0069 34.8611 36.1445C34.8611 37.282 36.2444 38.204 37.9503 38.204Z"
                                                        fill="white" />
                                                    <path d="M40.3529 34.7713V25.4452L31.4285 23.1008"
                                                        stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_36_396">
                                                        <rect width="45" height="41.4474" fill="white"
                                                            transform="translate(0.523438)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="work__features-content">
                                        <h4>Enjoy your event.</h4>
                                        <p>Sit back, relax, and watch <br> your party come to life.</p>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- work area end -->

        <!-- Advice Area Start Here  -->
        <section class="ms-advice-details pb-90 pt-130 d-none">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="ms-advice-wrap">
                            <div class="ms-advice-img fix ms-br-15 m-img mb-30">
                                <img src="{{ asset('assets/img/about/choose-bg.png')}}" alt="choose img">
                            </div>
                            <h3 class="ms-title4 ms-border2 pb-30 mb-30 text-center">
                                The Journey has been full of & struggles, pain and sacrifices
                            </h3>
                            <p class="mb-30 text-center">Belonging to a middle-class family in Maharashtra’s Vasai, Suresh Mukund started a dance group between 2008-2009, mostly consisting of young and aspirational dancers from the Nalasopara-Vasai belt. Back then, there was only one reality show, ‘Boogie Woogie,’ and no social media. Our dancers didn’t even have smartphones. The team’s struggle was immense a decade ago. We battled not only skepticism regarding our ambitions but also financial constraints. Initially, we had a few dancers who didn’t have any money, coming from middle-class family backgrounds. When we went to ‘Boogie Woogie,’ some were wearing torn jeans and were on stage in slippers. That day, I told one of my crew members that someday these people will be stars. This time when the prize money was announced, I was recollecting those memories. They became stars after all.</p>
                            <p class="mb-30 text-center">I consider myself extremely lucky. When we came back, we constructed the place properly. Today, it is India’s biggest dance studio. It’s the same place where we practiced for ‘World of Dance’ too. I was aware of how far The Kings could go from there. A global platform has opened up for them and has also given us the opportunity to pursue our other ambitions. I want to establish myself as a Bollywood choreographer first and then want to go into direction. That will take time, but I’m prepared for it. That’s on my bucket list. But until that dream is achieved, I want to give my all to dancing and to my crew.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Advice Area End Here  -->
        <!-- Work System Area Start Here  -->
        <section class="ms-work-system-area pt-130 pb-130">
            <div class="container">
                <div class="ms-work-system-wrap">
                    <div class="ms-work-system-grid mb-10">
                        <div class="work__features-item">
                            <div class="work__features-icon">
                                <span>
                                    <svg width="46" height="27" viewBox="0 0 46 27" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_36_265)">
                                            <mask id="mask0_36_265" style="mask-type:alpha"
                                                maskUnits="userSpaceOnUse" x="2" y="-1" width="42" height="27">
                                                <path
                                                    d="M40.3981 0.0808105H5.59708C4.33871 0.0808105 3.3186 1.1096 3.3186 2.37868V23.0226C3.3186 24.2917 4.33871 25.3205 5.59708 25.3205H40.3981C41.6565 25.3205 42.6766 24.2917 42.6766 23.0226V2.37868C42.6766 1.1096 41.6565 0.0808105 40.3981 0.0808105Z"
                                                    fill="#DFEFFF" stroke="#2690FF" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </mask>
                                            <g mask="url(#mask0_36_265)">
                                                <path
                                                    d="M40.3981 0.0808105H5.59708C4.33871 0.0808105 3.3186 1.1096 3.3186 2.37868V23.0226C3.3186 24.2917 4.33871 25.3205 5.59708 25.3205H40.3981C41.6565 25.3205 42.6766 24.2917 42.6766 23.0226V2.37868C42.6766 1.1096 41.6565 0.0808105 40.3981 0.0808105Z"
                                                    stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <mask id="mask1_36_265" style="mask-type:alpha"
                                                maskUnits="userSpaceOnUse" x="0" y="23" width="46" height="4">
                                                <path
                                                    d="M3.05673 25.8934C3.60661 26.3559 4.56615 26.7308 5.19913 26.7308H41.5731C42.2065 26.7308 43.1378 26.2914 43.6562 25.7464L45.0058 24.3275C45.523 23.7838 45.4265 23.343 44.7957 23.343H1.17102C0.537823 23.343 0.470957 23.7185 1.02017 24.1805L3.05673 25.8934Z"
                                                    fill="#2690FF" />
                                            </mask>
                                            <g mask="url(#mask1_36_265)">
                                                <path
                                                    d="M3.05673 25.8934C3.60661 26.3559 4.56615 26.7308 5.19913 26.7308H41.5731C42.2065 26.7308 43.1378 26.2914 43.6562 25.7464L45.0058 24.3275C45.523 23.7838 45.4265 23.343 44.7957 23.343H1.17102C0.537823 23.343 0.470957 23.7185 1.02017 24.1805L3.05673 25.8934Z"
                                                    fill="white" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M14.6847 16.2461H16.1739L15.057 10.614H11.7063L10.9617 16.2461H12.4509V17.7478C12.4509 18.368 12.9509 18.8743 13.5678 18.8743C14.1889 18.8743 14.6847 18.37 14.6847 17.7478V16.2462V16.2461Z"
                                                fill="white" stroke="white" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M21.7584 18.8743H20.2692L18.4077 10.6139H23.6199L21.7584 18.8743Z"
                                                fill="white" stroke="white" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13.3817 9.48762C14.3069 9.48762 15.057 8.73116 15.057 7.79801C15.057 6.86486 14.3069 6.1084 13.3817 6.1084C12.4564 6.1084 11.7063 6.86486 11.7063 7.79801C11.7063 8.73116 12.4564 9.48762 13.3817 9.48762Z"
                                                fill="white" stroke="white" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M20.8277 9.48762C21.753 9.48762 22.5031 8.73116 22.5031 7.79801C22.5031 6.86486 21.753 6.1084 20.8277 6.1084C19.9024 6.1084 19.1523 6.86486 19.1523 7.79801C19.1523 8.73116 19.9024 9.48762 20.8277 9.48762Z"
                                                fill="white" stroke="white" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M27.9299 7.56274H34.8759" stroke="white"
                                                stroke-linecap="round" />
                                            <path d="M27.9299 10.4714H34.8759" stroke="white"
                                                stroke-linecap="round" />
                                            <path d="M27.9299 13.3801H34.8759" stroke="white"
                                                stroke-linecap="round" />
                                            <path d="M27.9299 16.2888H32.5446" stroke="white"
                                                stroke-linecap="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_36_265">
                                                <rect width="45" height="27" fill="white"
                                                    transform="translate(0.523438)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                            </div>
                            <div class="work__features-content">
                                <h4>Browse and compare.</h4>
                                <p>Compare rates and availability <br>of local entertainers and vendors.</p>
                            </div>
                        </div>
                        <div class="work__features-item">
                            <div class="work__features-icon">
                                <span>
                                    <svg width="46" height="30" viewBox="0 0 46 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_36_354)">
                                            <mask id="mask0_36_354" style="mask-type:alpha"
                                                maskUnits="userSpaceOnUse" x="6" y="-1" width="41" height="27">
                                                <path
                                                    d="M9.26562 24.7666L43.3012 24.7666C44.5285 24.7666 45.5234 23.7717 45.5234 22.5444V2.25166C45.5234 1.02435 44.5285 0.0294323 43.3012 0.0294323L9.26562 0.0294323C8.03832 0.0294323 7.0434 1.02435 7.0434 2.25166V22.5444C7.0434 23.7717 8.03832 24.7666 9.26562 24.7666Z"
                                                    fill="#DFEFFF" stroke="#2690FF" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </mask>
                                            <g mask="url(#mask0_36_354)">
                                                <path
                                                    d="M9.26562 24.7666L43.3012 24.7666C44.5285 24.7666 45.5234 23.7717 45.5234 22.5444V2.25166C45.5234 1.02435 44.5285 0.0294323 43.3012 0.0294323L9.26562 0.0294323C8.03832 0.0294323 7.0434 1.02435 7.0434 2.25166V22.5444C7.0434 23.7717 8.03832 24.7666 9.26562 24.7666Z"
                                                    stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <path d="M40.7134 17.208L27.6577 17.208M24.9091 17.208L11.8533 17.208"
                                                stroke="white" stroke-linecap="square" stroke-linejoin="round" />
                                            <path
                                                d="M31.5173 11.7109L39.6023 11.7109C40.2159 11.7109 40.7134 11.2135 40.7134 10.5998V5.95061C40.7134 5.33696 40.2159 4.8395 39.6023 4.8395L31.5173 4.8395C30.9037 4.8395 30.4062 5.33696 30.4062 5.95061V10.5998C30.4062 11.2135 30.9037 11.7109 31.5173 11.7109Z"
                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M34.5291 11.7109V4.8395M40.7134 8.96236H35.2162M34.5291 7.58808H30.4062"
                                                stroke="white" stroke-linecap="square" stroke-linejoin="round" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M1.26636 20.3433H12.9603V28.4391H1.26636V20.3433Z" fill="white"
                                                stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M12.0606 19.8935C12.0606 17.1611 9.8456 14.946 7.11321 14.946C4.38081 14.946 2.16577 17.1611 2.16577 19.8935"
                                                stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_36_354">
                                                <rect width="45" height="29.4444" fill="white"
                                                    transform="translate(0.523438)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                            </div>
                            <div class="work__features-content">
                                <h4>Book securely.</h4>
                                <p>Booking through GigSalad ensures <br>payment protection.</p>
                            </div>
                        </div>
                        <div class="work__features-item">
                            <div class="work__features-icon">
                                <span>
                                    <svg width="46" height="42" viewBox="0 0 46 42" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_36_396)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M36.5665 12.3724C38.1067 12.677 39.8538 12.4088 41.4313 11.4975C44.5453 9.70015 45.8206 6.07889 44.2793 3.4094C42.7388 0.740078 38.965 0.0338131 35.8508 1.83184C34.2735 2.7425 33.1675 4.12203 32.6608 5.60739L36.5665 12.3724Z"
                                                stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                            <mask id="mask0_36_396" style="mask-type:alpha"
                                                maskUnits="userSpaceOnUse" x="38" y="2" width="4" height="4">
                                                <path
                                                    d="M38.9634 2.95068L40.5035 3.36336L40.0908 4.90348L38.5507 4.4908L38.9634 2.95068Z"
                                                    stroke="#2690FF" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </mask>
                                            <g mask="url(#mask0_36_396)">
                                                <path
                                                    d="M39.8188 2.83813L40.6161 4.21897L39.2352 5.01619L38.438 3.63536L39.8188 2.83813Z"
                                                    stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <mask id="mask1_36_396" style="mask-type:alpha"
                                                maskUnits="userSpaceOnUse" x="39" y="5" width="4" height="4">
                                                <path
                                                    d="M40.5579 5.7124L42.098 6.12508L41.6853 7.6652L40.1452 7.25252L40.5579 5.7124Z"
                                                    stroke="#2690FF" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </mask>
                                            <g mask="url(#mask1_36_396)">
                                                <path
                                                    d="M41.4133 5.59985L42.2106 6.98069L40.8297 7.77791L40.0325 6.39708L41.4133 5.59985Z"
                                                    stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <mask id="mask2_36_396" style="mask-type:alpha"
                                                maskUnits="userSpaceOnUse" x="36" y="5" width="4" height="4">
                                                <path
                                                    d="M36.999 5.92603L38.5391 6.3387L38.1265 7.87882L36.5863 7.46614L36.999 5.92603Z"
                                                    stroke="#2690FF" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </mask>
                                            <g mask="url(#mask2_36_396)">
                                                <path
                                                    d="M37.8545 5.81348L38.6517 7.19431L37.2709 7.99153L36.4737 6.6107L37.8545 5.81348Z"
                                                    stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M33.0191 6.22821L36.2079 11.7513L33.4466 13.3461L30.2571 7.82284L33.0191 6.22821Z"
                                                fill="white" stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M30.2575 7.82262L33.4462 13.3457L15.0969 23.0193L12.7052 18.8768L30.2575 7.82262Z"
                                                stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M13.1038 19.5673L14.6985 22.3293L11.9367 23.9233L10.3419 21.1619L13.1038 19.5673Z"
                                                fill="white" stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M11.1395 22.5428L4.23499 26.5292" stroke="white"
                                                stroke-linecap="square" stroke-linejoin="round" />
                                            <path
                                                d="M3.54494 26.9275C1.63803 28.0284 0.984887 30.466 2.08584 32.3729C3.18697 34.2791 5.62455 34.9323 7.53127 33.832M11.5172 40.7358C13.4241 39.6348 14.0772 37.1973 12.9763 35.2904C11.8751 33.3841 9.43756 32.731 7.53084 33.8313"
                                                stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M29.0258 35.4579C30.7317 35.4579 32.115 34.5359 32.115 33.3984C32.115 32.2608 30.7317 31.3389 29.0258 31.3389C27.3198 31.3389 25.9365 32.2608 25.9365 33.3984C25.9365 34.5359 27.3198 35.4579 29.0258 35.4579Z"
                                                fill="white" />
                                            <path d="M31.4285 32.7118V23.1736" stroke="white" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M37.9503 38.204C39.6563 38.204 41.0396 37.282 41.0396 36.1445C41.0396 35.0069 39.6563 34.085 37.9503 34.085C36.2444 34.085 34.8611 35.0069 34.8611 36.1445C34.8611 37.282 36.2444 38.204 37.9503 38.204Z"
                                                fill="white" />
                                            <path d="M40.3529 34.7713V25.4452L31.4285 23.1008" stroke="white"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_36_396">
                                                <rect width="45" height="41.4474" fill="white"
                                                    transform="translate(0.523438)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                            </div>
                            <div class="work__features-content">
                                <h4>Enjoy your event.</h4>
                                <p>Sit back, relax, and watch <br>your party come to life.</p>
                            </div>
                        </div>
                    </div>
                    <div class="ms-work-system-img d-inline-block fix m-img ms-br-15 mb-60 w-100 custome-h">
                        <img src="{{ asset('assets/img/kings img/about22.jpg')}}" alt="work system image" class="w-100 h-100">
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="ms-work-system-inner text-center">
                                <h3 class="ms-title4 ms-border2 pb-30 mb-30 text-center">
                                    The Journey has been full of & struggles, pain and sacrifices
                                </h3>
                                <p class="mb-30 text-center">Belonging to a middle-class family in Maharashtra’s Vasai, Suresh Mukund started a dance group between 2008-2009, mostly consisting of young and aspirational dancers from the Nalasopara-Vasai belt. Back then, there was only one reality show, ‘Boogie Woogie,’ and no social media. Our dancers didn’t even have smartphones. The team’s struggle was immense a decade ago. We battled not only skepticism regarding our ambitions but also financial constraints. Initially, we had a few dancers who didn’t have any money, coming from middle-class family backgrounds. When we went to ‘Boogie Woogie,’ some were wearing torn jeans and were on stage in slippers. That day, I told one of my crew members that someday these people will be stars. This time when the prize money was announced, I was recollecting those memories. They became stars after all.</p>
                                <p class="mb-30 text-center">I consider myself extremely lucky. When we came back, we constructed the place properly. Today, it is India’s biggest dance studio. It’s the same place where we practiced for ‘World of Dance’ too. I was aware of how far The Kings could go from there. A global platform has opened up for them and has also given us the opportunity to pursue our other ambitions. I want to establish myself as a Bollywood choreographer first and then want to go into direction. That will take time, but I’m prepared for it. That’s on my bucket list. But until that dream is achieved, I want to give my all to dancing and to my crew.</p>
                                <div class="work__features-bottom d-inline-block mt-45">
                                    <div class="work__features-action">
                                        <div class="work__features-btn">
                                            <a class="unfill__btn" href="contact.html">Get Started</a>
                                        </div>
                                        <div class="features__btn-text">
                                            <span>Book something <br>awesome !</span>
                                        </div>
                                    </div>
                                    <div class="work__features-arrow">
                                        <img src="{{ asset('assets/img/work/arrow.png') }}" alt="image not found">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Work System Area End Here  -->

        <!-- Special Events Area Start -->
        <section class="ms-event-area pt-130 pb-70">
            <div class="container">
                <div class="row align-items-end mb-25 bdFadeUp">
                    <div class="col-lg-8">
                        <div class="section__title-wrapper mb-40 bd-title-anim">
                            <span class="section__subtitle">Our Achievements</span>
                            <h2 class="section__title"><span class="animated-underline active">Our Journey of Success</span>
                                and Recognition
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="trending-btn mb-40 d-flex justify-content-lg-end">
                            <a class="border__btn" href="event.html">View All Event</a>
                        </div>
                    </div>
                </div>
                <div class="row bdFadeUp">
                    <div class="col-xl-8">
                        <div class="ms-event-bg p-relative mb-60"
                            data-background="{{ asset('assets/img/event/event-testimonial-bg.png') }}" style="background-image: url('{{ asset('assets/img/event/event-testimonial-bg.png')}}');">
                            <div class="ms-event-overlay p-absolute"></div>
                            <div class="ms-event-wrap">
                                <div class="ms-event-inner-box">
                                    <div class="ms-event-active">
                                        <div class="ms-event-item">
                                            <div class="ms-event-item-top">
                                                <h3 class="ms-event-title"><a href="event-details.html">2020</a></h3>
                                                <p class="ms-event-text">WORLD CHOREOGRAPHY AWARDS </p>

                                            </div>
                                            <div class="ms-event-item-bottom">
                                                <h3 class="ms-event-title"><a href="event-details.html">2019</a>
                                                </h3>
                                                <p class="ms-event-text">WORLD CHOREOGRAPHY AWARDS</p>

                                            </div>
                                        </div>
                                        <div class="ms-event-item">
                                            <div class="ms-event-item-top">
                                                <h3 class="ms-event-title"><a href="event-details.html">2018</a></h3>
                                                <p class="ms-event-text">WORLD CHOREOGRAPHY AWARDS</p>

                                            </div>
                                            <div class="ms-event-item-bottom">
                                                <h3 class="ms-event-title"><a href="event-details.html">2016</a>
                                                </h3>
                                                <p class="ms-event-text">WORLD CHOREOGRAPHY AWARDS</p>

                                            </div>
                                        </div>
                                        <div class="ms-event-item">
                                            <div class="ms-event-item-top">
                                                <h3 class="ms-event-title"><a href="event-details.html">2015</a></h3>
                                                <p class="ms-event-text">WORLD CHOREOGRAPHY AWARDS</p>

                                            </div>
                                            <div class="ms-event-item-bottom">
                                                <h3 class="ms-event-title"><a href="event-details.html">2010</a></h3>
                                                <p class="ms-event-text">WORLD CHOREOGRAPHY AWARDS</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-event-dots ms-round-dots"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="ms-event-play d-inline-block w-img p-relative mb-60">
                            <div class="ms-event-play-overlay p-absolute"></div>
                            <img src="{{ asset('assets/img/event/event-bg-2.png') }}" alt="event img">
                            <a href="https://www.youtube.com/watch?v=Rf9flQISwok"
                                class="ms-play-border ms-event-play-btn popup-video">play</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Special Events Area End -->
        <!-- FAQ area start -->
        <section id="bd_has_accordion" class="ms-faq-area pt-120 pb-110 fix d-none">
            <div class="bd-accordion-fix">
                <div class="container">
                    <div class="row align-items-center mb-15 bdFadeUp">
                        <div class="col-xl-7 col-lg-10">
                            <div class="section__title-wrapper section__title-wrapper-faq mb-40">
                                <h2 class="section__title mb-40 bd-title-anim">
                                    Have questions? We have answers!
                                </h2>
                                <p>Our hand-picked acts will guarantee you fantastic wedding
                                    entertainment
                                    for
                                    each
                                    part. We'll provide help and support 24
                                    hours a day, 7 days a week, right up until</p>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="ms-faq-tab mb-40">
                                <nav>
                                    <div class="nav nav-tabs mb-tab-button-style justify-content-xl-end"
                                        id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-faq-1-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-faq-1" type="button" role="tab"
                                            aria-controls="nav-faq-1" aria-selected="true">Musical Acts</button>
                                        <button class="nav-link" id="nav-faq-2-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-faq-2" type="button" role="tab"
                                            aria-controls="nav-faq-2" aria-selected="false">Entertainers</button>
                                        <button class="nav-link" id="nav-faq-3-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-faq-3" type="button" role="tab"
                                            aria-controls="nav-faq-3" aria-selected="false">Event
                                            Services</button>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="row bdFadeUp">
                        <div class="col-xxl-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-faq-1" role="tabpanel"
                                    aria-labelledby="nav-faq-1-tab" tabindex="0">
                                    <div class="ms-faq-wrap ms-faq-2column">
                                        <div class="accordion p-relative" id="accordionExample">
                                            <div class="ms-faq-group">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">How do
                                                            event
                                                            planners find me on Musicly?</button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingOne"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">We do not charge for
                                                            leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a
                                                            small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                            Do I have to pay to receive or respond to leads?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                                        aria-labelledby="headingTwo"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">We do not charge for
                                                            leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a
                                                            small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingThree">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false"
                                                            aria-controls="collapseThree">
                                                            Why should I use Musicly over other sites?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseThree" class="accordion-collapse collapse"
                                                        aria-labelledby="headingThree"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">We do not charge for
                                                            leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a
                                                            small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ms-faq-group">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingFour">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                            aria-expanded="true" aria-controls="collapseFour">How
                                                            many leads
                                                            and bookings can I expect to get?</button>
                                                    </h2>
                                                    <div id="collapseFour" class="accordion-collapse collapse"
                                                        aria-labelledby="headingFour"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">We do not charge for
                                                            leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a
                                                            small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingFive">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                            aria-expanded="false" aria-controls="collapseFive">
                                                            How do I get paid for my gigs?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseFive" class="accordion-collapse collapse"
                                                        aria-labelledby="headingFive"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">We do not charge for
                                                            leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a
                                                            small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingSix">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                            aria-expanded="false" aria-controls="collapseSix">
                                                            What type of events are booked on Musicly?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseSix" class="accordion-collapse collapse"
                                                        aria-labelledby="headingSix"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">We do not charge for
                                                            leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a
                                                            small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-faq-2" role="tabpanel"
                                    aria-labelledby="nav-faq-2-tab" tabindex="0">
                                    <div class="ms-faq-wrap ms-faq-2column">
                                        <div class="accordion p-relative" id="accordionExample2">
                                            <div class="ms-faq-group">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingSeven">
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseSeven" aria-expanded="true"
                                                            aria-controls="collapseSeven">How do event
                                                            planners find me on Musicly?</button>
                                                    </h2>
                                                    <div id="collapseSeven" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingSeven"
                                                        data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">We do not charge for
                                                            leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a
                                                            small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingEight">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseEight" aria-expanded="false"
                                                            aria-controls="collapseEight">
                                                            Do I have to pay to receive or respond to leads?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseEight" class="accordion-collapse collapse"
                                                        aria-labelledby="headingEight"
                                                        data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">We do not charge for
                                                            leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a
                                                            small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingNine">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                                            aria-expanded="false" aria-controls="collapseNine">
                                                            Why should I use Musicly over other sites?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseNine" class="accordion-collapse collapse"
                                                        aria-labelledby="headingNine"
                                                        data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">We do not charge for
                                                            leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a
                                                            small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ms-faq-group">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingTen">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseTen"
                                                            aria-expanded="true" aria-controls="collapseTen">How
                                                            many leads
                                                            and bookings can I expect to get?</button>
                                                    </h2>
                                                    <div id="collapseTen" class="accordion-collapse collapse"
                                                        aria-labelledby="headingTen"
                                                        data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">We do not charge for
                                                            leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a
                                                            small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingEleven">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseEleven" aria-expanded="false"
                                                            aria-controls="collapseEleven">
                                                            How do I get paid for my gigs?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseEleven" class="accordion-collapse collapse"
                                                        aria-labelledby="headingEleven"
                                                        data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">We do not charge for
                                                            leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a
                                                            small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingTwelve">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwelve" aria-expanded="false"
                                                            aria-controls="collapseTwelve">
                                                            What type of events are booked on Musicly?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwelve" class="accordion-collapse collapse"
                                                        aria-labelledby="headingTwelve"
                                                        data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">We do not charge for
                                                            leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a
                                                            small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-faq-3" role="tabpanel"
                                    aria-labelledby="nav-faq-3-tab" tabindex="0">
                                    <div class="ms-faq-wrap ms-faq-2column">
                                        <div class="accordion p-relative" id="accordionExample3">
                                            <div class="ms-faq-group">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingThirteen">
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThirteen" aria-expanded="true"
                                                            aria-controls="collapseThirteen">How do
                                                            event
                                                            planners find me on Musicly?</button>
                                                    </h2>
                                                    <div id="collapseThirteen"
                                                        class="accordion-collapse collapse show"
                                                        aria-labelledby="headingThirteen"
                                                        data-bs-parent="#accordionExample3">
                                                        <div class="accordion-body">We do not charge for
                                                            leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a
                                                            small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingFourteen">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFourteen" aria-expanded="false"
                                                            aria-controls="collapseFourteen">
                                                            Do I have to pay to receive or respond to leads?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseFourteen" class="accordion-collapse collapse"
                                                        aria-labelledby="headingFourteen"
                                                        data-bs-parent="#accordionExample3">
                                                        <div class="accordion-body">We do not charge for
                                                            leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a
                                                            small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingFifteen">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFifteen" aria-expanded="false"
                                                            aria-controls="collapseFifteen">
                                                            Why should I use Musicly over other sites?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseFifteen" class="accordion-collapse collapse"
                                                        aria-labelledby="headingFifteen"
                                                        data-bs-parent="#accordionExample3">
                                                        <div class="accordion-body">We do not charge for
                                                            leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a
                                                            small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ms-faq-group">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingSixteen">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseSixteen" aria-expanded="true"
                                                            aria-controls="collapseSixteen">How many
                                                            leads
                                                            and bookings can I expect to get?</button>
                                                    </h2>
                                                    <div id="collapseSixteen" class="accordion-collapse collapse"
                                                        aria-labelledby="headingSixteen"
                                                        data-bs-parent="#accordionExample3">
                                                        <div class="accordion-body">We do not charge for
                                                            leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a
                                                            small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingSeventeen">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseSeventeen"
                                                            aria-expanded="false" aria-controls="collapseSeventeen">
                                                            How do I get paid for my gigs?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseSeventeen" class="accordion-collapse collapse"
                                                        aria-labelledby="headingSeventeen"
                                                        data-bs-parent="#accordionExample3">
                                                        <div class="accordion-body">We do not charge for
                                                            leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a
                                                            small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingEighteen">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseEighteen" aria-expanded="false"
                                                            aria-controls="collapseEighteen">
                                                            What type of events are booked on Musicly?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseEighteen" class="accordion-collapse collapse"
                                                        aria-labelledby="headingEighteen"
                                                        data-bs-parent="#accordionExample3">
                                                        <div class="accordion-body">We do not charge for
                                                            leads.
                                                            The
                                                            only
                                                            money you’ll ever pay to GigSalad is for your
                                                            membership
                                                            subscription which gives
                                                            you additional features and exposure, and a
                                                            small
                                                            service fee.
                                                        </div>
                                                    </div>
                                                </div>
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
        <!-- Popular  area end -->

        <!-- Partner Area Start Here  -->
        <div class="ms-partner-area fix pb-130">
            <div class="container">
                <div class="ms-border5 pt-130">
                    <div class="swiper-container ms-partner-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/kings img/intel.webp') }}" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/kings img/ipl_logo.jpg') }}" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/kings img/microsoft.png') }}" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/kings img/red_bull.jpg') }}" alt="partner image">
                            </div>
                            <!-- <div class="swiper-slide">
                                    <img src="assets/img/partner/partner-05.png" alt="partner image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/partner/partner-04.png" alt="partner image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/partner/partner-01.png" alt="partner image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/partner/partner-02.png" alt="partner image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/partner/partner-03.png" alt="partner image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/partner/partner-04.png" alt="partner image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/partner/partner-05.png" alt="partner image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/partner/partner-04.png" alt="partner image">
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partner Area End Here  -->

    </main>


</div>
@endsection