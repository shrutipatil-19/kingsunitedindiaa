@extends('layout.app')
@section('content')
<main>


    <!-- Banner Area Start Here  -->
    <section class="ms-banner2-area fix">
        <div class="ms-banner2-wrap ms-banner2-height p-relative ms-bg custom-bg"
            data-background="{{ asset('assets/img/kings img/banner/banne1.jpg') }}"
            style="background-image: url('{{ asset('assets/img/kings img/banner/banne1.jpg') }}');">
            <div class="ms-banner2-shape p-absolute"></div>
            <div class="ms-banner2-cover-img p-absolute custome-wh">
                <img src="{{ asset('assets/img/kings img/lion_logo.png') }}" alt="banner" class="w-100 h-100" style="object-fit: contain;">
            </div>
            <h2 class="ms-banner2-title">Musicly</h2>
            <div class="ms-banner2-video mb-10">
                <a href="https://www.youtube.com/watch?v=y4jv5bk8ato" class="popup-video ms-banner2-video-btn">
                    <img class="ms-rotation-360" src="{{ asset('assets/img/banner/banner-border.png') }}" alt="banner">
                    <span>play</span>
                </a>
            </div>
        </div>
    </section>
    <!-- Banner Area End Here  -->

    <!-- Find Musician Area Start Here  -->
    <section class="ms-find-musician pt-70 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="ms-find-musician-wrap">
                        <h2 class="ms-find-musician-title mb-65 text-center bd-title-anim">Hire a live <span
                                class="ms-text-gradient1">band</span>
                            <span class="ms-color-1">or</span> <span class="ms-text-gradient2">musician</span> for
                            <br>
                            your wed ding or
                            party
                        </h2>
                        <div class="ms-banner__form two bdFadeUp">
                            <form action="#">
                                <div class="ms-banner__from-inner two ms-bg-2">
                                    <div class="ms-banner__form-select ms-nice-select">
                                        <select>
                                            <option value="1" selected disabled>What are you
                                                looking for?</option>
                                            <option value="2">Singers</option>
                                            <option value="3">Bands & Group</option>
                                            <option value="4">Tributes</option>
                                            <option value="5">Solo Musicians</option>
                                        </select>
                                    </div>
                                    <div class="ms-banner__form-select ms-nice-select">
                                        <select>
                                            <option value="1" selected disabled>When is your
                                                event?</option>
                                            <option value="2">This Week</option>
                                            <option value="3">Next Week</option>
                                            <option value="4">This Month</option>
                                            <option value="4">Next Month</option>
                                        </select>
                                    </div>
                                    <div class="ms-banner__form-select ms-nice-select ms-border-none">
                                        <select>
                                            <option value="1" selected disabled>Where is your
                                                event?</option>
                                            <option value="2">In Apartment</option>
                                            <option value="3">In a Hall</option>
                                            <option value="3">In a Resort</option>
                                            <option value="3">In an Open Field</option>
                                        </select>
                                    </div>
                                    <div class="banner__form-button">
                                        <button class="ms-white-bg"><i class="flaticon-loupe"></i> Find
                                            Acts</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Find Musician Area End Here  -->

    <!-- Brand Song Area Start Here  -->
    <section class="ms-song-area pb-130">
        <div class="container">
            <div class="ms-song-border pt-65 pb-65 bdFadeUp">
                <div class="swiper-container ms-song2-active fix">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="ms-song-item">
                                <div class="ms-song-img p-relative">
                                    <a href="genres-details.html"><img src="{{ asset('assets/img/brand-song/01.png') }}"
                                            alt="brand-song"></a>
                                    <span class="ms-song-num">01</span>
                                </div>
                                <div class="ms-song-content">
                                    <h3 class="ms-song-title"><a href="genres-details.html">Arcade Fire</a>
                                    </h3>
                                    <span class="ms-song-text">Canadian rock group</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ms-song-item">
                                <div class="ms-song-img p-relative">
                                    <a href="genres-details.html"><img src="{{ asset('assets/img/brand-song/02.png') }}"
                                            alt="brand-song"></a>
                                    <span class="ms-song-num">02</span>
                                </div>
                                <div class="ms-song-content">
                                    <h3 class="ms-song-title"><a href="genres-details.html">Beastie Boys</a>
                                    </h3>
                                    <span class="ms-song-text">American hip-hop</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ms-song-item">
                                <div class="ms-song-img p-relative">
                                    <a href="genres-details.html"><img src="{{ asset('assets/img/brand-song/03.png') }}"
                                            alt="brand-song"></a>
                                    <span class="ms-song-num">03</span>
                                </div>
                                <div class="ms-song-content">
                                    <h3 class="ms-song-title"><a href="genres-details.html">Blondie</a></h3>
                                    <span class="ms-song-text">American rock group</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ms-song-item">
                                <div class="ms-song-img p-relative">
                                    <a href="genres-details.html"><img src="{{ asset('assets/img/brand-song/04.png') }}"
                                            alt="brand-song"></a>
                                    <span class="ms-song-num">04</span>
                                </div>
                                <div class="ms-song-content">
                                    <h3 class="ms-song-title"><a href="genres-details.html">Black
                                            Sabbath</a></h3>
                                    <span class="ms-song-text">British rock group</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ms-song-item">
                                <div class="ms-song-img p-relative">
                                    <a href="genres-details.html"><img src="{{ asset('assets/img/brand-song/05.png') }}"
                                            alt="brand-song"></a>
                                    <span class="ms-song-num">05</span>
                                </div>
                                <div class="ms-song-content">
                                    <h3 class="ms-song-title"><a href="genres-details.html">Boy II Men</a>
                                    </h3>
                                    <span class="ms-song-text">Hong Kong Folk</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ms-song-item">
                                <div class="ms-song-img p-relative">
                                    <a href="genres-details.html"><img src="{{ asset('assets/img/brand-song/06.png') }}"
                                            alt="brand-song"></a>
                                    <span class="ms-song-num">06</span>
                                </div>
                                <div class="ms-song-content">
                                    <h3 class="ms-song-title"><a href="genres-details.html">The Coasters</a>
                                    </h3>
                                    <span class="ms-song-text">Canada band group</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ms-song-item">
                                <div class="ms-song-img p-relative">
                                    <a href="genres-details.html"><img src="{{ asset('assets/img/brand-song/07.png') }}"
                                            alt="brand-song"></a>
                                    <span class="ms-song-num">07</span>
                                </div>
                                <div class="ms-song-content">
                                    <h3 class="ms-song-title"><a href="genres-details.html">The
                                            Flamingos</a></h3>
                                    <span class="ms-song-text">Chicago rock group</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Brand Song Area End Here  -->

    <!-- work area start -->
    <section class="work__area ms-bg-2 pt-130 pb-60 p-relative">
        <img class="work__vactor-shape d-none d-xl-block" src="{{ asset('assets/img/work/vector-shape-2.png') }}"
            alt="vector shape">
        <div class="container">
            <div class="row align-items-center bdFadeUp">
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
                <div class="col-xl-6">
                    <div class="work__content-wrapper work__content-wrapper-space mb-70">
                        <div class="section__title-wrapper mb-50 bd-title-anim">
                            <span class="section__subtitle">About Kings</span>
                            <h2 class="section__title two">
                                The Kings: From Dreamers to International
                                <span class="animated-underline active">Dance Champions</span>
                            </h2>
                        </div>
                        <div class="work__features-inner">
                            <p>At The Kings, we don’t just dance; we elevate it to an art form. From our humble beginnings to becoming international champions, our journey has been nothing short of spectacular. Established in Mumbai, our dance studio is not just a place to learn dance; it’s a vibrant community where passion meets excellence.</p>
                            <p>
                                Founded in 2009, The Kings began as a small group of dedicated dancers with a dream. Today, we are renowned for our innovative choreography, high-energy performances, and unmatched dedication to the craft. Our studio offers a diverse range of dance styles including hip-hop, contemporary, Bollywood, and classical Indian dance, catering to dancers of all ages and skill levels.</p>
                            <!-- <div class="work__features-item">
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
                                                        stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
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
                                    <p>Compare rates and availability of local entertainers and vendors.</p>
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
                                    <p>Booking through GigSalad ensures payment protection, amazing service.
                                    </p>
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
                                                        stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
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
                                                        stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
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
                                                        stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M33.0191 6.22821L36.2079 11.7513L33.4466 13.3461L30.2571 7.82284L33.0191 6.22821Z"
                                                    fill="white" stroke="white" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M30.2575 7.82262L33.4462 13.3457L15.0969 23.0193L12.7052 18.8768L30.2575 7.82262Z"
                                                    stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M13.1038 19.5673L14.6985 22.3293L11.9367 23.9233L10.3419 21.1619L13.1038 19.5673Z"
                                                    fill="white" stroke="white" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M11.1395 22.5428L4.23499 26.5292" stroke="white"
                                                    stroke-linecap="square" stroke-linejoin="round" />
                                                <path
                                                    d="M3.54494 26.9275C1.63803 28.0284 0.984887 30.466 2.08584 32.3729C3.18697 34.2791 5.62455 34.9323 7.53127 33.832M11.5172 40.7358C13.4241 39.6348 14.0772 37.1973 12.9763 35.2904C11.8751 33.3841 9.43756 32.731 7.53084 33.8313"
                                                    stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M29.0258 35.4579C30.7317 35.4579 32.115 34.5359 32.115 33.3984C32.115 32.2608 30.7317 31.3389 29.0258 31.3389C27.3198 31.3389 25.9365 32.2608 25.9365 33.3984C25.9365 34.5359 27.3198 35.4579 29.0258 35.4579Z"
                                                    fill="white" />
                                                <path d="M31.4285 32.7118V23.1736" stroke="white"
                                                    stroke-linecap="round" stroke-linejoin="round" />
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
                                    <p>Sit back, relax, and watch your party come to life.</p>
                                </div>
                            </div> -->
                            <div class="work__features-bottom">
                                <div class="work__features-action">
                                    <div class="work__features-btn">
                                        <a class="unfill__btn" href="contact.html">Get Started</a>
                                    </div>
                                    <div class="features__btn-text">
                                        <span>Book something <br> awesome !</span>
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
    <!-- work area end -->

    <!-- Trending area start -->
    <section class="trending__area p-relative fix pt-130 include__bg pb-130"
        data-background="{{ asset('assets/img/trending/tranding-bg.png') }}">
        <div class="ms-overlay ms-overlay4 p-absolute"></div>
        <div class="container">
            <div class="row align-items-end mb-25 bdFadeUp ">
                <div class="col-lg-8">
                    <div class="section__title-wrapper mb-40 bd-title-anim">
                        <span class="section__subtitle">Crowned Moves</span>
                        <h2 class="section__title"><span class="animated-underline active">Kings Dance Studio: </span> Where Passion Meets Movement!</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trending-btn mb-40 d-flex justify-content-lg-end">
                        <a class="border__btn zindex-5" href="genres.html">View All</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ms-trending-active-wrap bdFadeUp">
            <div class="swiper-container ms-trending-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="ms-trending2-item fix">
                            <div class="ms-trending2-overlay p-absolute"></div>
                            <span class="trending__title">Performance Opportunities</span>
                            <!-- <div class="trending__price">
                                <span>From $99</span>
                            </div> -->
                            <div class="ms-trending2-img w-img">
                                <a href="genres-details.html"><img src="{{ asset('assets/img/trending/07.jpg') }}"
                                        alt="trending image"></a>
                            </div>
                            <div class="ms-trending2-content">
                                <div class="ms-trending2-shape">
                                    <img src="{{ asset('assets/img/trending/trending-shape.png') }}" alt="trending shape">
                                </div>
                                <div class="ms-trending2-title-wrap">
                                    <a class="ms-trending2-title p-relative ms-title-border"
                                        href="genres-details.html">Showcase your talent and passion on stage through our annual recitals, competitions, and showcases. Gain valuable performance experience, build confidence, and celebrate your hard work and dedication alongside your peers and instructors.</a>
                                    <a class="ms-round-btn popup-image" href="{{ asset('assets/img/trending/07.jpg') }}"><i
                                            class="flaticon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms-trending2-item fix">
                            <div class="ms-trending2-overlay p-absolute"></div>
                            <span class="trending__title">Expert Instruction</span>
                            <!-- <div class="trending__price">
                                <span>From $119</span>
                            </div> -->
                            <div class="ms-trending2-img w-img">
                                <a href="#"><img src="{{ asset('assets/img/trending/08.jpg') }}"
                                        alt="trending image"></a>
                            </div>
                            <div class="ms-trending2-content">
                                <div class="ms-trending2-shape">
                                    <img src="{{ asset('assets/img/trending/trending-shape.png') }}" alt="trending shape">
                                </div>
                                <div class="ms-trending2-title-wrap">
                                    <a class="ms-trending2-title p-relative ms-title-border"
                                        href="#">Our team of experienced dance instructors are dedicated to helping students of all levels achieve their dance goals. Whether you're a beginner looking to learn the basics or an experienced dancer aiming to refine your skills, our instructors are here to guide and support you every step of the way.</a>
                                    <a class="ms-round-btn popup-image" href="{{ asset('assets/img/trending/08.jpg') }}"><i
                                            class="flaticon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms-trending2-item fix">
                            <div class="ms-trending2-overlay p-absolute"></div>
                            <span class="trending__title">Variety of Dance Styles</span>
                            <!-- <div class="trending__price">
                                <span>From $55</span>
                            </div> -->
                            <div class="ms-trending2-img w-img">
                                <a href="#"><img src="{{ asset('assets/img/trending/02.jpg') }}"
                                        alt="trending image"></a>
                            </div>
                            <div class="ms-trending2-content">
                                <div class="ms-trending2-shape">
                                    <img src="{{ asset('assets/img/trending/trending-shape.png') }}" alt="trending shape">
                                </div>
                                <div class="ms-trending2-title-wrap">
                                    <a class="ms-trending2-title p-relative ms-title-border"
                                        href="#">From ballet and jazz to hip-hop and contemporary, Kings Dance Studio offers a diverse range of dance styles to cater to different interests and preferences. Explore new genres, challenge yourself creatively, and discover the joy of expression through movement.</a>
                                    <a class="ms-round-btn popup-image" href="{{ asset('assets/img/trending/02.jpg') }}"><i
                                            class="flaticon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms-trending2-item fix">
                            <div class="ms-trending2-overlay p-absolute"></div>
                            <span class="trending__title">State-of-the-Art Facilities</span>
                            <!-- <div class="trending__price">
                                <span>From $90</span>
                            </div> -->
                            <div class="ms-trending2-img w-img">
                                <a href="#"><img src="{{ asset('assets/img/trending/10.jpg') }}"
                                        alt="trending image"></a>
                            </div>
                            <div class="ms-trending2-content">
                                <div class="ms-trending2-shape">
                                    <img src="{{ asset('assets/img/trending/trending-shape.png') }}" alt="trending shape">
                                </div>
                                <div class="ms-trending2-title-wrap">
                                    <a class="ms-trending2-title p-relative ms-title-border"
                                        href="#">Our purpose-built dance studio is equipped with top-notch amenities and a spacious dance floor to enhance your training experience. Experience the thrill of dancing in a professional setting that is designed to inspire and elevate your performance.</a>
                                    <a class="ms-round-btn popup-image" href="{{ asset('assets/img/trending/10.jpg') }}"><i
                                            class="flaticon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms-trending2-item fix">
                            <div class="ms-trending2-overlay p-absolute"></div>
                            <span class="trending__title">Community Engagement</span>
                            <!-- <div class="trending__price">
                                <span>From $90</span>
                            </div> -->
                            <div class="ms-trending2-img w-img">
                                <a href="#"><img src="{{ asset('assets/img/trending/11.jpg') }}"
                                        alt="trending image"></a>
                            </div>
                            <div class="ms-trending2-content">
                                <div class="ms-trending2-shape">
                                    <img src="{{ asset('assets/img/trending/trending-shape.png') }}" alt="trending shape">
                                </div>
                                <div class="ms-trending2-title-wrap">
                                    <a class="ms-trending2-title p-relative ms-title-border"
                                        href="#">Join a vibrant community of dancers who share your enthusiasm for dance. Connect with like-minded individuals, make lasting friendships, and build a support system that encourages growth, creativity, and mutual respect.</a>
                                    <a class="ms-round-btn popup-image" href="{{ asset('assets/img/trending/11.jpg') }}"><i
                                            class="flaticon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="swiper-slide">
                        <div class="ms-trending2-item fix">
                            <div class="ms-trending2-overlay p-absolute"></div>
                            <span class="trending__title">Musicly</span>
                            <div class="trending__price">
                                <span>From $99</span>
                            </div>
                            <div class="ms-trending2-img w-img">
                                <a href="genres-details.html"><img src="{{ asset('assets/img/trending/07.jpg') }}"
                                        alt="trending image"></a>
                            </div>
                            <div class="ms-trending2-content">
                                <div class="ms-trending2-shape">
                                    <img src="{{ asset('assets/img/trending/trending-shape.png') }}" alt="trending shape">
                                </div>
                                <div class="ms-trending2-title-wrap">
                                    <a class="ms-trending2-title p-relative ms-title-border"
                                        href="genres-details.html">Party bands for
                                        hire</a>
                                    <a class="ms-round-btn popup-image" href="{{ asset('assets/img/trending/07.jpg') }}"><i
                                            class="flaticon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms-trending2-item fix">
                            <div class="ms-trending2-overlay p-absolute"></div>
                            <span class="trending__title">Musicly</span>
                            <div class="trending__price">
                                <span>From $119</span>
                            </div>
                            <div class="ms-trending2-img w-img">
                                <a href="genres-details.html"><img src="{{ asset('assets/img/trending/08.jpg') }}"
                                        alt="trending image"></a>
                            </div>
                            <div class="ms-trending2-content">
                                <div class="ms-trending2-shape">
                                    <img src="{{ asset('assets/img/trending/trending-shape.png') }}" alt="trending shape">
                                </div>
                                <div class="ms-trending2-title-wrap">
                                    <a class="ms-trending2-title p-relative ms-title-border"
                                        href="genres-details.html">Party bands for
                                        hire</a>
                                    <a class="ms-round-btn popup-image" href="{{ asset('assets/img/trending/08.jpg') }}"><i
                                            class="flaticon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms-trending2-item fix">
                            <div class="ms-trending2-overlay p-absolute"></div>
                            <span class="trending__title">Musicly</span>
                            <div class="trending__price">
                                <span>From $55</span>
                            </div>
                            <div class="ms-trending2-img w-img">
                                <a href="genres-details.html"><img src="{{ asset('assets/img/trending/02.jpg') }}"
                                        alt="trending image"></a>
                            </div>
                            <div class="ms-trending2-content">
                                <div class="ms-trending2-shape">
                                    <img src="{{ asset('assets/img/trending/trending-shape.png') }}" alt="trending shape">
                                </div>
                                <div class="ms-trending2-title-wrap">
                                    <a class="ms-trending2-title p-relative ms-title-border"
                                        href="genres-details.html">Party bands for
                                        hire</a>
                                    <a class="ms-round-btn popup-image" href="{{ asset('assets/img/trending/02.jpg') }}"><i
                                            class="flaticon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms-trending2-item fix">
                            <div class="ms-trending2-overlay p-absolute"></div>
                            <span class="trending__title">Musicly</span>
                            <div class="trending__price">
                                <span>From $90</span>
                            </div>
                            <div class="ms-trending2-img w-img">
                                <a href="genres-details.html"><img src="{{ asset('assets/img/trending/10.jpg') }}"
                                        alt="trending image"></a>
                            </div>
                            <div class="ms-trending2-content">
                                <div class="ms-trending2-shape">
                                    <img src="{{ asset('assets/img/trending/trending-shape.png') }}" alt="trending shape">
                                </div>
                                <div class="ms-trending2-title-wrap">
                                    <a class="ms-trending2-title p-relative ms-title-border"
                                        href="genres-details.html">Party bands for
                                        hire</a>
                                    <a class="ms-round-btn popup-image" href="{{ asset('assets/img/trending/10.jpg') }}"><i
                                            class="flaticon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms-trending2-item fix">
                            <div class="ms-trending2-overlay p-absolute"></div>
                            <span class="trending__title">Musicly</span>
                            <div class="trending__price">
                                <span>From $90</span>
                            </div>
                            <div class="ms-trending2-img w-img">
                                <a href="genres-details.html"><img src="{{ asset('assets/img/trending/11.jpg') }}"
                                        alt="trending image"></a>
                            </div>
                            <div class="ms-trending2-content">
                                <div class="ms-trending2-shape">
                                    <img src="{{ asset('assets/img/trending/trending-shape.png') }}" alt="trending shape">
                                </div>
                                <div class="ms-trending2-title-wrap">
                                    <a class="ms-trending2-title p-relative ms-title-border"
                                        href="genres-details.html">Party bands for
                                        hire</a>
                                    <a class="ms-round-btn popup-image" href="{{ asset('assets/img/trending/11.jpg') }}"><i
                                            class="flaticon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Trending area start -->

    <!-- Function Brand Area Start Here  -->
    <section class="ms-fun-brand pb-130 pt-130 d-none">
        <div class="container">
            <div class="row justify-content-center bdFadeUp">
                <div class="col-xl-7">
                    <div class="section__title-wrapper mb-65 text-center bd-title-anim">
                        <span class="section__subtitle">Function Bands</span>
                        <h2 class="section__title">
                            our <span class="animated-underline active">most popular function</span> bands
                        </h2>
                    </div>
                </div>
            </div>
            <div class="ms-fun-brand-wrap ms-fun-brand-bb pb-70 bdFadeUp">
                <div class="ms-fun-brand-item ms-fun-border">
                    <div class="ms-fun-brand-top mb-20">
                        <div class="ms-fun-brand-thumb">
                            <a href="genres-details.html"><img src="{{ asset('assets/img/function-brand/function-brand-01.png') }}"
                                    alt="function brand"></a>
                        </div>
                        <div class="ms-fun-brand-content">
                            <h3 class="ms-fun-brand-title"><a href="genres-details.html">Beastie Boys</a>
                            </h3>
                            <span class="ms-fun-brand-subtitle">American hip-hop</span>
                        </div>
                    </div>
                    <div class="ms-fun-brand-bottom">
                        <div class="ms-fun-brand-location">
                            <a href="https://www.google.com/maps" target="_blank"> <i
                                    class="flaticon-pin"></i>Ohio</a>
                        </div>
                        <div class="ms-fun-brand-rating">
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                        </div>
                    </div>
                </div>
                <div class="ms-fun-brand-item ms-fun-border">
                    <div class="ms-fun-brand-top mb-20">
                        <div class="ms-fun-brand-thumb">
                            <a href="genres-details.html"><img src="{{ asset('assets/img/function-brand/function-brand-02.png') }}"
                                    alt="function brand"></a>
                        </div>
                        <div class="ms-fun-brand-content">
                            <h3 class="ms-fun-brand-title"><a href="genres-details.html">Blondie</a></h3>
                            <span class="ms-fun-brand-subtitle">American rock group</span>
                        </div>
                    </div>
                    <div class="ms-fun-brand-bottom">
                        <div class="ms-fun-brand-location">
                            <a href="https://www.google.com/maps" target="_blank"> <i
                                    class="flaticon-pin"></i>Chicago</a>
                        </div>
                        <div class="ms-fun-brand-rating">
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star unrate"></i>
                        </div>
                    </div>
                </div>
                <div class="ms-fun-brand-item ms-fun-border">
                    <div class="ms-fun-brand-top mb-20">
                        <div class="ms-fun-brand-thumb">
                            <a href="genres-details.html"><img src="{{ asset('assets/img/function-brand/function-brand-03.png') }}"
                                    alt="function brand"></a>
                        </div>
                        <div class="ms-fun-brand-content">
                            <h3 class="ms-fun-brand-title"><a href="genres-details.html">Black Sabbath</a>
                            </h3>
                            <span class="ms-fun-brand-subtitle">British rock group</span>
                        </div>
                    </div>
                    <div class="ms-fun-brand-bottom">
                        <div class="ms-fun-brand-location">
                            <a href="https://www.google.com/maps" target="_blank"> <i
                                    class="flaticon-pin"></i>London</a>
                        </div>
                        <div class="ms-fun-brand-rating">
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                        </div>
                    </div>
                </div>
                <div class="ms-fun-brand-item ms-fun-border">
                    <div class="ms-fun-brand-top mb-20">
                        <div class="ms-fun-brand-thumb">
                            <a href="genres-details.html"><img src="{{ asset('assets/img/function-brand/function-brand-04.png') }}"
                                    alt="function brand"></a>
                        </div>
                        <div class="ms-fun-brand-content">
                            <h3 class="ms-fun-brand-title"><a href="genres-details.html">The Coasters</a>
                            </h3>
                            <span class="ms-fun-brand-subtitle">Canada band group</span>
                        </div>
                    </div>
                    <div class="ms-fun-brand-bottom">
                        <div class="ms-fun-brand-location">
                            <a href="https://www.google.com/maps" target="_blank"> <i
                                    class="flaticon-pin"></i>London</a>
                        </div>
                        <div class="ms-fun-brand-rating">
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                        </div>
                    </div>
                </div>
                <div class="ms-fun-brand-item ms-fun-border">
                    <div class="ms-fun-brand-top mb-20">
                        <div class="ms-fun-brand-thumb">
                            <a href="genres-details.html"><img src="{{ asset('assets/img/function-brand/function-brand-05.png') }}"
                                    alt="function brand"></a>
                        </div>
                        <div class="ms-fun-brand-content">
                            <h3 class="ms-fun-brand-title"><a href="genres-details.html">Beastie Boys</a>
                            </h3>
                            <span class="ms-fun-brand-subtitle">American hip-hop</span>
                        </div>
                    </div>
                    <div class="ms-fun-brand-bottom">
                        <div class="ms-fun-brand-location">
                            <a href="https://www.google.com/maps" target="_blank"> <i
                                    class="flaticon-pin"></i>Georgia</a>
                        </div>
                        <div class="ms-fun-brand-rating">
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star unrate"></i>
                        </div>
                    </div>
                </div>
                <div class="ms-fun-brand-item ms-fun-border">
                    <div class="ms-fun-brand-top mb-20">
                        <div class="ms-fun-brand-thumb">
                            <a href="genres-details.html"><img src="{{ asset('assets/img/function-brand/function-brand-06.png') }}"
                                    alt="function brand"></a>
                        </div>
                        <div class="ms-fun-brand-content">
                            <h3 class="ms-fun-brand-title"><a href="genres-details.html">Blondie</a></h3>
                            <span class="ms-fun-brand-subtitle">American rock group</span>
                        </div>
                    </div>
                    <div class="ms-fun-brand-bottom">
                        <div class="ms-fun-brand-location">
                            <a href="https://www.google.com/maps" target="_blank"> <i class="flaticon-pin"></i>City
                                Club</a>
                        </div>
                        <div class="ms-fun-brand-rating">
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                        </div>
                    </div>
                </div>
                <div class="ms-fun-brand-item ms-fun-border">
                    <div class="ms-fun-brand-top mb-20">
                        <div class="ms-fun-brand-thumb">
                            <a href="genres-details.html"><img src="{{ asset('assets/img/function-brand/function-brand-07.png') }}"
                                    alt="function brand"></a>
                        </div>
                        <div class="ms-fun-brand-content">
                            <h3 class="ms-fun-brand-title"><a href="genres-details.html">Black Sabbath</a>
                            </h3>
                            <span class="ms-fun-brand-subtitle">British rock group</span>
                        </div>
                    </div>
                    <div class="ms-fun-brand-bottom">
                        <div class="ms-fun-brand-location">
                            <a href="https://www.google.com/maps" target="_blank"> <i
                                    class="flaticon-pin"></i>Kenia</a>
                        </div>
                        <div class="ms-fun-brand-rating">
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                        </div>
                    </div>
                </div>
                <div class="ms-fun-brand-item ms-fun-border">
                    <div class="ms-fun-brand-top mb-20">
                        <div class="ms-fun-brand-thumb">
                            <a href="genres-details.html"><img src="{{ asset('assets/img/function-brand/function-brand-08.png') }}"
                                    alt="function brand"></a>
                        </div>
                        <div class="ms-fun-brand-content">
                            <h3 class="ms-fun-brand-title"><a href="genres-details.html">The Coasters</a>
                            </h3>
                            <span class="ms-fun-brand-subtitle">Canada band group</span>
                        </div>
                    </div>
                    <div class="ms-fun-brand-bottom">
                        <div class="ms-fun-brand-location">
                            <a href="https://www.google.com/maps" target="_blank"> <i
                                    class="flaticon-pin"></i>Pakistan</a>
                        </div>
                        <div class="ms-fun-brand-rating">
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star unrate"></i>
                        </div>
                    </div>
                </div>
                <div class="ms-fun-brand-item ms-fun-border">
                    <div class="ms-fun-brand-top mb-20">
                        <div class="ms-fun-brand-thumb">
                            <a href="genres-details.html"><img src="{{ asset('assets/img/function-brand/function-brand-05.png') }}"
                                    alt="function brand"></a>
                        </div>
                        <div class="ms-fun-brand-content">
                            <h3 class="ms-fun-brand-title"><a href="genres-details.html">Blondie</a></h3>
                            <span class="ms-fun-brand-subtitle">American rock group</span>
                        </div>
                    </div>
                    <div class="ms-fun-brand-bottom">
                        <div class="ms-fun-brand-location">
                            <a href="https://www.google.com/maps" target="_blank"> <i
                                    class="flaticon-pin"></i>Chicago</a>
                        </div>
                        <div class="ms-fun-brand-rating">
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star unrate"></i>
                        </div>
                    </div>
                </div>
                <div class="ms-fun-brand-item ms-fun-border">
                    <div class="ms-fun-brand-top mb-20">
                        <div class="ms-fun-brand-thumb">
                            <a href="genres-details.html"><img src="{{ asset('assets/img/function-brand/function-brand-01.png') }}"
                                    alt="function brand"></a>
                        </div>
                        <div class="ms-fun-brand-content">
                            <h3 class="ms-fun-brand-title"><a href="genres-details.html">Beastie Boys</a>
                            </h3>
                            <span class="ms-fun-brand-subtitle">American hip-hop</span>
                        </div>
                    </div>
                    <div class="ms-fun-brand-bottom">
                        <div class="ms-fun-brand-location">
                            <a href="https://www.google.com/maps" target="_blank"> <i
                                    class="flaticon-pin"></i>Ohio</a>
                        </div>
                        <div class="ms-fun-brand-rating">
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                        </div>
                    </div>
                </div>
                <div class="ms-fun-brand-item ms-fun-border">
                    <div class="ms-fun-brand-top mb-20">
                        <div class="ms-fun-brand-thumb">
                            <a href="genres-details.html"><img src="{{ asset('assets/img/function-brand/function-brand-05.png') }}"
                                    alt="function brand"></a>
                        </div>
                        <div class="ms-fun-brand-content">
                            <h3 class="ms-fun-brand-title"><a href="genres-details.html">Beastie Boys</a>
                            </h3>
                            <span class="ms-fun-brand-subtitle">American hip-hop</span>
                        </div>
                    </div>
                    <div class="ms-fun-brand-bottom">
                        <div class="ms-fun-brand-location">
                            <a href="https://www.google.com/maps" target="_blank"> <i
                                    class="flaticon-pin"></i>Georgia</a>
                        </div>
                        <div class="ms-fun-brand-rating">
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star unrate"></i>
                        </div>
                    </div>
                </div>
                <div class="ms-fun-brand-item ms-fun-border">
                    <div class="ms-fun-brand-top mb-20">
                        <div class="ms-fun-brand-thumb">
                            <a href="genres-details.html"><img src="{{ asset('assets/img/function-brand/function-brand-06.png') }}"
                                    alt="function brand"></a>
                        </div>
                        <div class="ms-fun-brand-content">
                            <h3 class="ms-fun-brand-title"><a href="genres-details.html">Blondie</a></h3>
                            <span class="ms-fun-brand-subtitle">American rock group</span>
                        </div>
                    </div>
                    <div class="ms-fun-brand-bottom">
                        <div class="ms-fun-brand-location">
                            <a href="https://www.google.com/maps" target="_blank"> <i class="flaticon-pin"></i>City
                                Club</a>
                        </div>
                        <div class="ms-fun-brand-rating">
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Function Brand Area End Here  -->

    <!-- Download App Area Start Here  -->
    <section class="ms-app-area fix pb-70 d-none">
        <div class="container">
            <div class="row align-items-center bdFadeUp">
                <div class="col-xl-6">
                    <div class="ms-app-left mb-45">
                        <div class="section__title-wrapper mb-40 bd-title-anim">
                            <span class="section__subtitle">Download Musicly</span>
                            <h2 class="section__title">Best way to <span class="animated-underline active">Hire to
                                    Musician</span>
                            </h2>
                        </div>
                        <p class="ms-app-text mb-65">Our hand-picked acts will guarantee you fantastic
                            wedding
                            entertainment for
                            each part. We'll
                            provide help and support 24
                            hours a day, 7 days a week, right up until</p>
                        <div class="ms-app-inner ms-app-list ms-app-opacity">
                            <a href="#" target="_blank"><img src="{{ asset('assets/img/cta/app-store.png') }}" alt="app store"></a>
                            <a href="#" class="active" target="_blank"><img src="{{ asset('assets/img/cta/amazonmusic.png') }}"
                                    alt="amazon music"></a>
                            <a href="#" target="_blank"><img src="{{ asset('assets/img/cta/play-store.png') }}"
                                    alt="play store"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ms-app-right m-img mb-60">
                        <img src="{{ asset('assets/img/bg/app-cricle-bg.png') }}" alt="app circle">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Download App Area Start Here -->

    <!-- Event Area Start Here  -->
    <section class="ms-event2-area include__bg zindex-1 p-relative pt-140 pb-105"
        data-background="{{ asset('assets/img/kings img/banner/event-bg-3.png') }}">
        <div class="ms-overlay ms-overlay1 zindex--1"></div>
        <div class="container">
            <div class="row justify-content-center mb-25 bdFadeUp">
                <div class="col-xl-6">
                    <div class="ms-event2-top text-center">
                        <!-- <div class="ms-event2 mb-40">
                            <a href="https://www.youtube.com/watch?v=Rf9flQISwok"
                                class="ms-round2-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                        </div> -->
                        <div class="section__title-wrapper mb-40 bd-title-anim">
                            <span class="section__subtitle">Our Services</span>
                            <h2 class="section__title">Our Services to Support Your <span class="animated-underline active">
                                    Dance Journey</span>
                                
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bdFadeUp">
                <div class="col-lg-6">
                    <div class="ms-event2-item mb-25">
                        <h3 class="ms-event-title"><a href="#">Choreography</a></h3>
                        <p class="ms-event-text">Musicals Concerts, Theatrical Acts, Dance Reality Shows, Award Shows, Serials, Advertisements,</p>
                        <!-- <div class="ms-event-inner">
                            <div class="ms-event-location">
                                <a href="https://www.google.com/maps" target="_blank" tabindex="0"><i
                                        class="flaticon-pin"></i>Chicago</a>
                            </div>
                            <div class="ms-event-date">
                                <span>7:00 PM, Saturday, February 18, 2023</span>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ms-event2-item mb-25">
                        <h3 class="ms-event-title"><a href="event-details.html">Music Videos</a>
                        </h3>
                        <p class="ms-event-text">Choreography for Music videos with Celebrities, Dance Music Video Collaboration.</p>
                        <!-- <div class="ms-event-inner">
                            <div class="ms-event-location">
                                <a href="https://www.google.com/maps" target="_blank" tabindex="0"><i
                                        class="flaticon-pin"></i>Ohio</a>
                            </div>
                            <div class="ms-event-date">
                                <span>9:00 PM, Saturday, February 25, 2023</span>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ms-event2-item mb-25">
                        <h3 class="ms-event-title"><a href="event-details.html">Wedding</a>
                        </h3>
                        <p class="ms-event-text">Choreography and Training for Sangeet & Wedding</p>
                        <!-- <div class="ms-event-inner">
                            <div class="ms-event-location">
                                <a href="https://www.google.com/maps" target="_blank" tabindex="0"><i
                                        class="flaticon-pin"></i>Ohio</a>
                            </div>
                            <div class="ms-event-date">
                                <span>9:00 PM, Saturday, February 25, 2023</span>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ms-event2-item mb-25">
                        <h3 class="ms-event-title"><a href="#">Corporate Events</a></h3>
                        <p class="ms-event-text">Performances for National & International Shows and Corporate Events</p>
                        <!-- <div class="ms-event-inner">
                            <div class="ms-event-location">
                                <a href="https://www.google.com/maps" target="_blank" tabindex="0"><i
                                        class="flaticon-pin"></i>City Club</a>
                            </div>
                            <div class="ms-event-date">
                                <span>9:00 PM, Saturday, January 1, 2023</span>
                            </div>
                        </div> -->
                    </div>
                </div>
                 <div class="col-lg-6">
                    <div class="ms-event2-item mb-25">
                        <h3 class="ms-event-title"><a href="#">Award Functions</a></h3>
                        <p class="ms-event-text">Performances in renowned award ceremonies at National & International Platforms</p>
                        <!-- <div class="ms-event-inner">
                            <div class="ms-event-location">
                                <a href="https://www.google.com/maps" target="_blank" tabindex="0"><i
                                        class="flaticon-pin"></i>City Club</a>
                            </div>
                            <div class="ms-event-date">
                                <span>9:00 PM, Saturday, January 1, 2023</span>
                            </div>
                        </div> -->
                    </div>
                </div>
                 <div class="col-lg-6">
                    <div class="ms-event2-item mb-25">
                        <h3 class="ms-event-title"><a href="#">Celebrity Judge</a></h3>
                        <p class="ms-event-text">Suresh Mukund & Team as Celebrity Judge (for TV Dance Reality Shows/ Schools / Colleges/ Dance Events)</p>
                        <!-- <div class="ms-event-inner">
                            <div class="ms-event-location">
                                <a href="https://www.google.com/maps" target="_blank" tabindex="0"><i
                                        class="flaticon-pin"></i>City Club</a>
                            </div>
                            <div class="ms-event-date">
                                <span>9:00 PM, Saturday, January 1, 2023</span>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Event Area End Here  -->

    <!-- Testimonial area end here  -->
    <section class="ms-tm2-area p-relative fix pt-130 pb-130">
        <div class="ms-tm2-line p-absolute">
            <img src="{{ asset('assets/img/testimonial/testimonial-line.png') }}" alt="testimonial line">
        </div>
        <div class="container">
            <div class="row justify-content-center bdFadeUp">
                <div class="col-xl-6">
                    <div class="section__title-wrapper text-center mb-65 bd-title-anim">
                        <span class="section__subtitle">Awesome Feedbacks</span>
                        <h2 class="section__title">Peoples <span class="animated-underline active">Think
                                About</span>
                            us
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="ms-tm2-imgs-wrap p-relative">
                <!-- <div class="ms-tm2-img1 ms-tm2-shadow p-absolute w-img d-none d-md-block">
                    <img src="{{ asset('assets/img/testimonial/testimonial-07.png') }}" alt="testimonial image">
                </div>
                <div class="ms-tm2-img2 ms-tm2-shadow p-absolute w-img d-none d-lg-block">
                    <img src="{{ asset('assets/img/testimonial/testimonial-08.png') }}" alt="testimonial image">
                </div>
                <div class="ms-tm2-img3 ms-tm2-shadow p-absolute w-img d-none d-xl-block">
                    <img src="{{ asset('assets/img/testimonial/testimonial-09.png') }}" alt="testimonial image">
                </div>
                <div class="ms-tm2-img4 ms-tm2-shadow p-absolute w-img d-none d-md-block">
                    <img src="{{ asset('assets/img/testimonial/testimonial-10.png') }}" alt="testimonial image">
                </div>
                <div class="ms-tm2-img5 ms-tm2-shadow p-absolute w-img d-none d-lg-block">
                    <img src="{{ asset('assets/img/testimonial/testimonial-11.png') }}" alt="testimonial image">
                </div>
                <div class="ms-tm2-img6 ms-tm2-shadow p-absolute w-img d-none d-xl-block">
                    <img src="{{ asset('assets/img/testimonial/testimonial-12.png') }}" alt="testimonial image">
                </div> -->
                <div class="row justify-content-center bdFadeUp">
                    <div class="col-xl-8">
                        <div class="ms-tm2-wrap">
                            <div class="ms-tm2-active mb-60">
                                <div class="ms-tm2-item text-center">
                                    <div class="ms-tm2-img-main">
                                        <div class="ms-tm2-img-wrap p-relative d-inline-block mx-auto">
                                            <div class="ms-tm2-signature w-img">
                                                <img src="{{ asset('assets/img/testimonial/testimonial-signature.png') }}"
                                                    alt="testimonial signature">
                                            </div>
                                            <div class="ms-tm2-author-img m-img">
                                                <img src=" assets/img/testimonial/testimonial-06.png') }}"
                                                    alt="testimonial image">
                                            </div>
                                        </div>
                                        <div class="ms-tm2-content pt-35">
                                            <div class="ms-tm2-quotation mb-25">
                                                <i class="flaticon-quotation"></i>
                                            </div>
                                            <p class="ms-tm2-text mb-30">Spacious studio in Andheri! We rented it to host some workshops and it was a great experience. A music system update would make it even better.</p>
                                            <div class="ms-tm2-author">
                                                <span class="ms-tm2-name">Soonruta Kothadia</span>
                                                <!-- <span class="ms-tm2-designation">CEO - XYZ Innovation</span> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-tm2-item text-center">
                                    <div class="ms-tm2-img-main">
                                        <div class="ms-tm2-img-wrap p-relative d-inline-block mx-auto">
                                            <div class="ms-tm2-signature w-img">
                                                <img src="{{ asset('assets/img/testimonial/testimonial-signature.png') }}"
                                                    alt="testimonial signature">
                                            </div>
                                            <div class="ms-tm2-author-img m-img">
                                                <img src=" assets/img/testimonial/testimonial-06.png') }}"
                                                    alt="testimonial image">
                                            </div>
                                        </div>
                                        <div class="ms-tm2-content pt-35">
                                            <div class="ms-tm2-quotation mb-25">
                                                <i class="flaticon-quotation"></i>
                                            </div>
                                            <p class="ms-tm2-text mb-30">This workshop was really amazing, as it gave a proper clarification about what all is gonna happen in the course and also what elements an individual has to work on to enter the fashion industry.A good path explainer and platform for those who want to enter this industry.</p>
                                            <div class="ms-tm2-author">
                                                <span class="ms-tm2-name">Anveshika Singh</span>
                                                <!-- <span class="ms-tm2-designation">CEO - XYZ Innovation</span> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-tm2-item text-center">
                                    <div class="ms-tm2-img-main">
                                        <div class="ms-tm2-img-wrap p-relative d-inline-block mx-auto">
                                            <div class="ms-tm2-signature w-img">
                                                <img src="{{ asset('assets/img/testimonial/testimonial-signature.png') }}"
                                                    alt="testimonial signature">
                                            </div>
                                            <div class="ms-tm2-author-img m-img">
                                                <img src=" assets/img/testimonial/testimonial-06.png') }}"
                                                    alt="testimonial image">
                                            </div>
                                        </div>
                                        <div class="ms-tm2-content pt-35">
                                            <div class="ms-tm2-quotation mb-25">
                                                <i class="flaticon-quotation"></i>
                                            </div>
                                            <p class="ms-tm2-text mb-30">awesome and the class atmosphere is energetic.the teachers are very supportive and always ready to help</p>
                                            <div class="ms-tm2-author">
                                                <span class="ms-tm2-name">Anishek Singh</span>
                                                <!-- <span class="ms-tm2-designation">CEO - XYZ Innovation</span> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="ms-tm2-dots ms-tm-dots-horizontal ms-round-dots d-flex justify-content-center mt-20">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial area end here  -->

    <!-- Special Events Area Start -->
    <section class="ms-news-area ms-bg-2 pt-130 pb-90">
        <div class="container">
            <div class="row justify-content-center bdFadeUp">
                <div class="col-xl-6">
                    <div class="section__title-wrapper text-center mb-65 bd-title-anim">
                        <span class="section__subtitle">Our Courses</span>
                        <h2 class="section__title">Train All Year, Any Style - <span class="animated-underline active">Kings Golden Pass
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row bdFadeUp">
                <div class="col-xl-4 col-md-6">
                    <div class="ms-news-item p-relative zindex-1 mb-40">
                        <div class="ms-news-overlay p-absolute"></div>
                        <div class="ms-news-thumb w-img h-100">
                            <a href="news-details.html"><img src="{{ asset('assets/img/kings img/course1.jpg') }}" alt="news image" class="h-100"></a>
                        </div>
                        <div class="ms-news-content ms-news-position p-absolute">
                            <!-- <a class="ms-news2-cat mb-30" href="news-details.html">Event</a> -->
                            <h3 class="ms-news-title mb-15"><a href="news-details.html">Kings Golden Pass - One Year Unlimited Access</a></h3>
                            <!-- <div class="ms-news-meta d-inline-block">
                                <span>Feb 15, 2023</span>
                                <span><a href="news-details.html">0 Comments</a></span>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="ms-news-item p-relative zindex-1 mb-40">
                        <div class="ms-news-overlay p-absolute"></div>
                        <div class="ms-news-thumb w-img h-100">
                            <a href="news-details.html"><img src="{{ asset('assets/img/kings img/course2.jpg') }}" alt="news image" class="h-100"></a>
                        </div>
                        <div class="ms-news-content ms-news-position p-absolute">
                            <!-- <a class="ms-news2-cat mb-30" href="news-details.html">Wedding Party</a> -->
                            <h3 class="ms-news-title mb-15"><a href="#">Professional Training Program</a></h3>
                            <!-- <div class="ms-news-meta d-inline-block">
                                <span>Feb 20, 2023</span>
                                <span><a href="news-details.html">10 Comments</a></span>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="ms-news-item p-relative zindex-1 mb-40">
                        <div class="ms-news-overlay p-absolute"></div>
                        <div class="ms-news-thumb w-img h-100">
                            <a href="news-details.html"><img src="{{ asset('assets/img/kings img/course3.jpg') }}" alt="news image" class="h-100"></a>
                        </div>
                        <div class="ms-news-content ms-news-position p-absolute">
                            <!-- <a class="ms-news2-cat mb-30" href="news-details.html">DJ Party Event</a> -->
                            <h3 class="ms-news-title mb-15"><a href="#">Intensive Training
                                    Program</a></h3>
                            <!-- <div class="ms-news-meta d-inline-block">
                                <span>Feb 25, 2023</span>
                                <span><a href="news-details.html">14 Comments</a></span>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Special Events Area End -->

    <!-- Popular  area start -->
    <section class="ms-popular__area pt-130 pb-100 fix">
        <div class="container">
            <div class="row align-items-end mb-25 bdFadeUp">
                <div class="col-xl-6 col-lg-6">
                    <div class="section__title-wrapper mb-40 bd-title-anim">
                        <span class="section__subtitle">Meet Our Faculty</span>
                        <h2 class="section__title msg_title">
                            <span class="animated-underline active">The Passionate Instructors</span> <br>
                            Powering Your Dance Journey
                        </h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="ms-popular__tab ms-popular-flex mb-40">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-popular-1-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-popular-1" type="button" role="tab"
                                    aria-controls="nav-popular-1" aria-selected="true">Musical Acts</button>
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
                                                <a href="genres-details.html"><img
                                                        src="{{ asset('assets/img/kings img/team/team1.jpg') }}"
                                                        alt="popular band" class="h-100 w-100 object-cover"></a>
                                                <a href="genres-details.html" class="ms-popular__link">
                                                    <span>Kirti</span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres-details.html">Jazz Funk</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres-details.html"><img
                                                        src="{{ asset('assets/img/kings img/team/team2.jpg') }}"
                                                        alt="popular band" class="h-100 w-100 object-cover"></a>
                                                <a href="genres-details.html" class="ms-popular__link">
                                                    <span>Rekha</span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres-details.html">Ballet / Contemporary</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres-details.html"><img
                                                        src="{{ asset('assets/img/kings img/team/team3.jpg') }}"
                                                        alt="popular band" class="h-100 w-100 object-cover"></a>
                                                <a href="genres-details.html" class="ms-popular__link">
                                                    <span>Abhishek</span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres-details.html">Hip-Hop /Popping</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres-details.html"><img
                                                        src="{{ asset('assets/img/kings img/team/team4.jpg') }}"
                                                        alt="popular band" class="h-100 w-100 object-cover"></a>
                                                <a href="genres-details.html" class="ms-popular__link">
                                                    <span>Amit</span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres-details.html">Locking And Soul Dancing
                                                </a></h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres-details.html"><img
                                                        src="{{ asset('assets/img/kings img/team/team5.jpg') }}"
                                                        alt="popular band" class="h-100 w-100 object-cover"></a>
                                                <a href="genres-details.html" class="ms-popular__link">
                                                    <span>Swapnil</span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres-details.html">House & Footwork</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres-details.html"><img
                                                        src="{{ asset('assets/img/kings img/team/team6.jpg') }}"
                                                        alt="popular band" class="h-100 w-100 object-cover"></a>
                                                <a href="genres-details.html" class="ms-popular__link">
                                                    <span>Arvind</span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="genres-details.html">Footworks</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ms-popular__item p-relative mb-30">
                                            <div class="ms-popular__thumb">
                                                <div class="ms-popular-overlay"></div>
                                                <a href="genres-details.html"><img
                                                        src="{{ asset('assets/img/kings img/team/team7.jpg') }}"
                                                        alt="popular band" class="h-100 w-100 object-cover"></a>
                                                <a href="#" class="ms-popular__link">
                                                    <span>Vivek</span>
                                                </a>
                                            </div>
                                            <h4 class="ms-popular__title"><a href="#">Break Dancing</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <!-- <div class="swiper-slide">
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
    <!-- Popular  area end -->

</main>
@endsection