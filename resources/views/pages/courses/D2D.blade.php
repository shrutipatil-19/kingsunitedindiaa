@extends('layout.app')
@section('content')
<div class="ms-all-content ms-content-mobile-space pt-130">
    <main>
        <!-- banner Area Start Here  -->
        <section class="ms-about-area fix">
            <div class="ms-about-bg include__bg p-relative zindex-1 pt-120 pb-130"
                data-background="{{ asset('assets/img/about/about3.jpg') }}">
                <div class="ms-overlay ms-overlay5 p-absolute zindex--1"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="ms-about-content text-center">
                                <h2 class="ms-title2 white-text mb-30 bd-title-anim">DANCE 2 DANCE
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner Area End Here  -->
{{-- <style>
    .work__area {
            position: relative; /* Essential for absolute positioning of the video */
            padding-top: 100px;
            padding-bottom: 30px;
            overflow: hidden; /* Ensure video doesn't spill out */
        }

        .work__area .background-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; 
            z-index: 0; 
            opacity: 0.2; 
            filter: grayscale(50%); /
        }
</style> --}}
        <!-- about course start -->
        <section class="work__area pt-100 pb-30 ">
              <!-- Background Video -->
        {{-- <video class="background-video" loop autoplay muted playsinline preload="auto" poster="{{ asset('assets/img/kings img/banner/video_banner4.jpg') }}">
            <source src="{{ asset('assets/video/kings video.mp4') }}" type="video/mp4">
            <source src="{{ asset('assets/video/kings video.mp4') }}" type="video/ogg">
        </video> --}}
            <div class="container">
                <div class="row align-items-center bdFadeUp">
                    <div class="col-xl-6">
                        <div class="ms-work3-thumb-wrap d-inline-block p-relative mb-60">
                            <div class="ms-work3-inner">
                                <div class="ms-work3-thumb m-img p-relative fix ms-br-20">
                                    <div class="p-absolute"></div>
                                    <img src="{{ asset('assets/img/trending/01.jpg') }}" alt="work image">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-10">
                        <div class="work__content-wrapper p-relative mb-60">
                            <div class="section__title-wrapper mb-50">
                                <h2 class="section__title mb-40 bd-title-anim">Your Journey from Passion to <span class="text-bg">Performance</span></h2>
                                <p class="">Dream 2 Dance is a premium 6-month certified dance training program
                                    designed to take you from foundations to professional performance. With
                                    a total of 120 sessions, this course blends both Modern and Street Styles,
                                    allowing you to learn, explore, and perform at your highest potential.
                                </p>
                                <p>Whether you’re a beginner or an intermediate dancer, this course is built to
                                    strengthen your fundamentals, boost your versatility, and give you
                                    professional exposure through masterclasses, battles, auditions, and realworld opportunities.</p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about course area end -->

        <!-- Work System Area Start Here  -->
        <section class="ms-work-system-area pt-130 pb-130 ms-bg-2">
            <div class="container">
                <div class="ms-work-system-wrap">
                    <div class="row justify-content-center">
                        <div class="col-xl-12">
                            <div class="ms-work-system-inner text-center">
                                <span class="section__subtitle">What We offer you</span>
                                <h2 class="section__title mb-40 bd-title-anim">Career & Performance Opportunities <span class="text-bg"></span></h2>
                            </div>
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
                                    <div class="work__features-content mt-3 mt-lg-0">
                                        <p>Participate in ocial battles & competitions</p>

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
                                    <div class="work__features-content mt-3 mt-lg-0">
                                        <p>Attend auditions for professional shows
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
                                    <div class="work__features-content mt-3 mt-lg-0">
                                        <p>Shoot video collaborations with The Kings</p>

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
                                    <div class="work__features-content mt-3 mt-lg-0">
                                        <p>Get selected for internships/assistant roles with The Kings Management
                                            Team</p>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

        </section>
        <!-- Work System Area End Here  -->

        <!-- Trending area start -->
        <section class="trending__area p-relative z-index-11 pt-130 pb-60 ">
            <div class="container">
                <div class="row align-items-end mb-25 bdFadeUp">
                    <div class="col-lg-8">
                        <div class="section__title-wrapper mb-40 bd-title-anim">
                            <span class="section__subtitle">What You’ll Learn</span>
                            <p>The course is divided into three structured stages:</p>
                            <h2 class="section__title">Kings Style<span class="ms-text1">
                                </span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="trending-btn mb-40 d-flex justify-content-lg-end">
                            <a class="unfill__btn" href="{{ asset('assets/file/pdf/D2D.pdf') }}" download>Download
                                PDF <i class="flaticon-downloads"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row mb-45">
                    <div class="col-lg-6">
                        <div class="ms-booking-item mb-25 custome-border">
                            <h4 class="text-bg">Stage 1: LEARN (85 Sessions) - Modern Styles</h4>
                            <ul>
                                <li>Ballet – Technique, posture, balance & grace</li>
                                <li>Jazz – Sharp lines, turns, kicks & choreography</li>
                                <li>Contemporary – Floorwork, fluidity, expression</li>
                                <li>Choreography Sessions – Applying modern styles in creative routines</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ms-booking-item mb-25 custome-border">
                            <h4 class="text-bg">Street Styles</h4>
                            <ul>
                                <li>Old Skool Hip Hop – Grooves, social dances, funk base</li>
                                <li>House – Footwork, rhythm, jacking</li>
                                <li>Footwork – Speed, clarity & agility</li>
                                <li>Soul Dancing – Groove, feel, funk foundation</li>
                                <li>Popping – Isolations, hits, animation, freestyle foundation</li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ms-booking-item mb-25 custome-border">
                            <h4 class="text-bg">Stage 2: - EXPLORE (15 Sessions)</h4>
                            <p>Dive into power styles and advanced tricks:</p>
                            <ul>
                                <li>Breaking – Toprock, footwork, freezes, power techniques</li>
                                <li>Flips & Tricks – Acrobatics, transitions, performance tricks</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ms-booking-item mb-25 custome-border">
                            <h4 class="text-bg">Stage 3: - PERFORM (20 Sessions)</h4>
                            <p>Unlock your creative identity through:</p>
                            <ul>
                                <li>Musicality & Freestyle Drills</li>
                                <li>Hook Steps & Battle Practice</li>
                                <li>Fusion Routines & Improvisation Labs</li>
                                <li>Choreography Tasks & Performance Practice</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ms-booking-item mb-25 custome-border">
                            <h4 class="text-bg">Masterclasses (4 Total)</h4>
                            <ul>
                                <li>
                                    1 with Suresh Mukund – Emmy-nominated choreographer & founder of
                                    The Kings</li>
                                <li>3 with India’s top industry professionals</li>

                            </ul>

                        </div>
                    </div>

                </div>
                <!-- <div class="row">
                    <div class="col-xl-12">
                        <div class="ms-booking-load-btn text-center">
                            <a href="#" class="ms-load-btn">load more</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <!-- Trending area start -->

        <!-- Work System Area Start Here  -->
        <section class="ms-work-system-area pt-130 pb-130 ms-bg-2">
            <div class="container">
                <div class="ms-work-system-wrap">
                    <div class="row justify-content-center">
                        <div class="col-xl-12">
                            <div class="ms-work-system-inner text-center">
                                <span class="section__subtitle">Payment Module
                                </span>
                                <h2 class="section__title mb-40 bd-title-anim">One - Time Payment :
                                    ₹75,000 <span class="text-bg"></span></h2>
                            </div>
                            <div class="row mb-45 bdFadeUp">
                                <div class="col-xl-3 col-md-6">
                                    <div class="ms-choose-item mb-25">
                                        <div class="ms-choose-icon d-inline-block p-relative">
                                            <img src="{{ asset('assets/img/icon/rupee-indian.png') }}" alt="" srcset="" class="w-50">
                                            <span>01</span>
                                        </div>
                                        <h3 class="ms-choose-title">₹22,500
                                            1ST Instalment</h3>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="ms-choose-item mb-25">
                                        <div class="ms-choose-icon d-inline-block p-relative">
                                            <img src="{{ asset('assets/img/icon/rupee-indian.png') }}" alt="" srcset="" class="w-50">
                                            <span>02</span>
                                        </div>
                                        <h3 class="ms-choose-title">₹22,500
                                            2ND Instalment
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="ms-choose-item mb-25">
                                        <div class="ms-choose-icon d-inline-block p-relative">
                                            <img src="{{ asset('assets/img/icon/rupee-indian.png') }}" alt="" srcset="" class="w-50">
                                            <span>03</span>
                                        </div>
                                        <h3 class="ms-choose-title">
                                            ₹22,500
                                            3RD Instalment </h3>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="ms-choose-item mb-25">
                                        <div class="ms-choose-icon d-inline-block p-relative">
                                            <img src="{{ asset('assets/img/icon/rupee-indian.png') }}" alt="" srcset="" class="w-50">
                                            <span>04</span>
                                        </div>
                                        <h3 class="ms-choose-title">
                                            ₹22,500
                                            4TH Instalment </h3>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="trending-btn d-flex justify-content-center">
                                <a class="border__btn zindex-5" href="#">Apply Now</a>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- payment Area End Here  -->
        @include('pages.courses.popupForm')
    </main>
</div>
@endsection
@push('style')
<style>
    .ms-work-system-grid {
        grid-template-columns: auto auto;
        justify-content: space-around;
    }

    .work__features-content h4 {
        font-weight: 300;
    }

    .ms-text-line-1 {
        transform: none;
    }

    .ms-booking-item {
        border-color: var(--clr-border-2);

    }

    .img-box {
        height: auto;
        clip-path: none;
    }

    .achievement-card:hover {
        transform: none;
        border: none;
    }

    .work__features-inner .work__features-item {
        margin-bottom: 25px;
    }

    .ms-booking-item {
        padding: 35px 30px;
         border: none;
    }

    @media (max-width: 767px) {
        .work__features-item {
            display: block;

            padding: 11px;
        }
    }
     
</style>
@endpush