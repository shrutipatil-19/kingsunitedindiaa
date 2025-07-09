@extends('layout.app')

@section('content')
<div class="ms-all-content ms-content-mobile-space pt-130">
    <main>
        <!-- Event info Start Here  -->
        <section class="ms-genres-area pt-40 pb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <div class="ms-genres-top text-center mb-50">
                            <!-- <div class="ms-genres-top-video mb-30">
                                <a class="ms-video-text popup-video"
                                    href="https://www.youtube.com/watch?v=Rf9flQISwok">
                                    <i class="fa-sharp fa-solid fa-play"></i>
                                    <span>Play Promo</span>
                                </a>
                            </div> -->
                            <h2 class="ms-title2 white-text mb-20">Wedding Event</h2>
                            <p class="ms-text2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, magni.</p>
                            <div class="ms-fun-brand-bottom border-0">
                                <div class="ms-fun-brand-location">
                                    <a href="https://www.google.com/maps" target="_blank"> <i
                                            class="flaticon-pin"></i>Manchester</a>
                                </div>
                                <div class="ms-fun-brand-rating">
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star unrate"></i>
                                    <span>(85)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ms-genres-shape include__bg" data-background="{{ asset('assets/img/genres/genres-shape.png') }}">
                <div class="container">
                    <div class="ms-genres-img p-relative ms-br-15 m-img fix mb-65">
                        <img src="{{ asset('assets/img/genres/genres-bg-2.jpg') }}" alt="genres image">

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-7">
                        <div class="ms-genres-left-wrap mb-60">
                            <div class="ms-genres-tab2 mb-20">
                                <nav>
                                    <div class="nav nav-tabs ms-tab-button border-0 ms-border2-btn ms-tab-prevent"
                                        id="nav-tab" role="tablist">
                                        <button class="nav-link prevent active" id="nav-home-tab"
                                            data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab"
                                            aria-controls="nav-home" aria-selected="true">About
                                            Event</button>
                                        <button class="nav-link prevent" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-profile" type="button" role="tab"
                                            aria-controls="nav-profile" aria-selected="false">Performance</button>
                                        <button class="nav-link prevent" id="nav-contact-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-contact" type="button" role="tab"
                                            aria-controls="nav-contact" aria-selected="false">Reviews</button>
                                    </div>
                                </nav>
                            </div>
                            <div class="ms-genres-tab2-content">
                                <div class="tab-content" id="nav-tabContent2">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab" tabindex="0">
                                        <div
                                            class="ms-genres-tab2-text ms-genres-tab2-padding ms-pb-10 ms-bg-2 ms-br-15">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat sapiente molestiae esse molestias facilis nam quos, reiciendis distinctio perspiciatis odit mollitia sequi, ipsum nihil veritatis quas possimus eveniet! Quo dolores odio quas doloribus nihil nemo quis quae nostrum, temporibus odit?</p>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae accusantium natus vel consequatur tenetur error beatae recusandae, nulla, nesciunt officiis nam dignissimos explicabo magnam ipsam. Eum, explicabo? Sit quod mollitia tempora accusamus doloribus dolorum, similique soluta delectus, ea numquam culpa, voluptate nemo distinctio totam quia earum fugiat voluptatibus officia provident.</p>

                                            <h2 class="mt-40 mb-30">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, a? Hic suscipit eligendi accusamus eos velit fugit sapiente necessitatibus </h2>

                                            <p>cumque dolor tempore, ratione dolores quidem odio numquam aliquid sequi voluptate itaque quasi placeat beatae? Fugiat, temporibus nam! Laboriosam ad distinctio sunt nulla doloribus praesentium earum!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab" tabindex="0">
                                        <div class="ms-genres-tab2-text ms-genres-tab2-padding ms-bg-2 ms-br-15">
                                            <!-- <h4 class="ms-title3 white-text text-center mb-25">Happy –
                                                Pharrell
                                                Williams</h4> -->
                                            <div class="ms-genres-img fix m-img ms-br-15 mb-60 d-inline-block">
                                                <img src="{{ asset('assets/img/genres/genres-bg-3.jpg') }}" alt="genres image">
                                            </div>
                                            <div class="ms-border2 mb-30">
                                                <h4 class="ms-title3 white-text text-center mb-30">Kings united
                                                </h4>
                                            </div>
                                            <div class="ms-genres-audio">
                                                <div class="ms-header2-song">
                                                    <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                                                    <div id="jp_container_1" class="jp-audio" role="application"
                                                        aria-label="media player">
                                                        <div class="jp-type-playlist">
                                                            <div class="ms-header2-singer d-none">
                                                                <div class="ms-header2-singer-img">
                                                                    <a href="#"><img
                                                                            src="{{ asset('assets/img/header/singer.png') }}"
                                                                            alt="singer"></a>
                                                                </div>
                                                                <div class="ms-header2-singer-text">
                                                                    <h4><a href="genres-details.html">Lazy
                                                                            Soul</a></h4>
                                                                    <div class="jp-title"></div>
                                                                </div>
                                                            </div>

                                                            <div class="jp-playlist">
                                                                <ul>
                                                                    <li>&nbsp;</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                        aria-labelledby="nav-contact-tab" tabindex="0">
                                        <div class="ms-genres-tab2-text ms-genres-tab2-padding ms-bg-2 ms-br-15">
                                            <!-- <div class="ms-border2"> -->
                                            <!-- <div class="row align-items-center"> -->
                                            <!-- <div class="col-lg-6">
                                                        <h4 class="ms-title3 white-text mb-30">Happy –
                                                            Pharrell
                                                            Williams</h4>
                                                    </div> -->
                                            <!-- <div class="col-lg-6">
                                                        <div class="ms-genres-review-btn text-lg-end">
                                                            <a href="#"
                                                                class="ms-border-btn ms-model2-show mb-30"><i
                                                                    class="fa-regular fa-pen-to-square"></i>
                                                                Write A
                                                                Review</a>
                                                        </div>
                                                    </div> -->
                                            <!-- </div>
                                            </div> -->
                                            <div class="ms-genres-review-content">
                                                <div
                                                    class="ms-genres-review-list ms-border2 pt-30 ms-genres-review-grid">
                                                    <div class="ms-genres-review-img">
                                                        <img src="{{ asset('assets/img/news/news-02.png') }}" alt="Review image">
                                                    </div>
                                                    <div class="ms-genres-review-content">
                                                        <h5 class="ms-genres-review-title">Ann, Wedding,
                                                            Harrogate Hilton, Harrogate</h5>
                                                        <p>The group were fantastic, they made the evening
                                                            go
                                                            with a blast. Great choice of songs , the dance
                                                            floor was full the
                                                            whole time. We would totally recommend them.</p>
                                                        <div class="ms-fun-brand-bottom mb-30">
                                                            <div class="ms-fun-brand-text lh-1">
                                                                <span>March 2023</span>
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
                                                <div
                                                    class="ms-genres-review-list ms-border2 pt-30 ms-genres-review-grid">
                                                    <div class="ms-genres-review-img">
                                                        <img src="{{ asset('assets/img/work/work-thumb-02.png') }}"
                                                            alt="Review image">
                                                    </div>
                                                    <div class="ms-genres-review-content">
                                                        <h5 class="ms-genres-review-title">Kathryn, Wedding,
                                                            Stock
                                                            Wedding Barn, Tatton</h5>
                                                        <p>Agent Smith were unbelievable at our wedding.
                                                            Completely
                                                            exceeded expectations. The band were engaging,
                                                            funny
                                                            and
                                                            got everyone up and dancing from the first song.
                                                        </p>
                                                        <div class="ms-fun-brand-bottom mb-30">
                                                            <div class="ms-fun-brand-text lh-1">
                                                                <span>March 2023</span>
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
                                                <div class="ms-genres-review-list pt-30 ms-genres-review-grid">
                                                    <div class="ms-genres-review-img">
                                                        <img src="{{ asset('assets/img/trending/01.jpg') }}" alt="Review image">
                                                    </div>
                                                    <div class="ms-genres-review-content">
                                                        <h5 class="ms-genres-review-title">Sue & Tom,
                                                            Wedding,
                                                            The
                                                            Ashes Barn Wedding Venue</h5>
                                                        <p>Absolutely awesome. So much energy, great
                                                            performers
                                                            and
                                                            crowd interaction! Agent Smith were so good!
                                                            Judged
                                                            the
                                                            room
                                                            perfectly - EVERYONE was up dancing all night!!
                                                            Highly
                                                            recommend!</p>
                                                        <div class="ms-fun-brand-bottom mb-30">
                                                            <div class="ms-fun-brand-text lh-1">
                                                                <span>March 2023</span>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-5">
                        <div class="ms-genres-right-wrap mb-40">
                            <div class="ms-genres-btn-box mb-20">
                                <div class="d-flex justify-content-xl-end flex-wrap">
                                    <!-- <div class="add-enquiry-btn mb-20 mr-20">
                                        <button class="ms-border-btn ms-model-show"><i class="flaticon-star"></i>
                                            Add
                                            enquiry
                                            list</button>
                                    </div> -->
                                    <div class="ms-enquire-btn mb-20">
                                        <a href="#" class="unfill__btn uppercase">Enquire Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ms-genres-info-wrap d-inline-block p-relative mb-50 ms-br-15 fix">
                                <div class="ms-genres-info-img p-absolute w-img">
                                    <img src="{{ asset('assets/img/event/event-bg-2.png') }}" alt="event img">
                                </div>
                                <div class="ms-genres-info">
                                    <div class="ms-overlay ms-overlay7 zindex--1 p-absolute"></div>
                                    <h5 class="ms-genres-info-title ms-title3 white-text">Performance info
                                    </h5>
                                    <div class="ms-genres-info-list-wrap">
                                        <div class="ms-genres-info-list">
                                            <h6>Line-up</h6>
                                            <p>Male|Female Lead/Background; Artist ; Dancers; Style</p>
                                        </div>
                                        <div class="ms-genres-info-list">
                                            <h6>Event duration</h6>
                                            <p>2 x 60 minute sets</p>
                                        </div>
                                        <div class="ms-genres-info-list">
                                            <h6>Interval music</h6>
                                            <p>Included</p>
                                        </div>
                                        <div class="ms-genres-info-list">
                                            <h6>performance costumes</h6>
                                            <p>Included</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ms-genres-social d-flex align-items-center flex-wrap">
                                <span class="ms-social-text mr-30 mb-20"><i class="flaticon-share"></i>
                                    Share
                                    on</span>
                                <div class="ms-social mb-20">
                                    <a target="_blank" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a target="_blank" href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a target="_blank" href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Event info End Here  -->

        <!-- Special Events Area Start -->
        <section class="ms-news-area pt-130 pb-90 ms-bg-2">
            <div class="container">
                <div class="row align-items-end mb-25 bdFadeUp">
                    <div class="col-lg-6">
                        <div class="section__title-wrapper mb-40 bd-title-anim">
                            <span class="section__subtitle">Latest Events</span>
                            <h2 class="section__title">Lorem <span class="animated-underline active">Lorem ipsum</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ms-news-btn d-flex justify-content-lg-end mb-40">
                            <a class="border__btn" href="{{route('events')}}">View All Event</a>
                        </div>
                    </div>
                </div>
                <div class="row bdFadeUp">
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-news-item p-relative zindex-1 mb-40">
                            <div class="ms-news-overlay p-absolute"></div>
                            <a class="ms-news4-cat" href="#">Event</a>
                            <div class="ms-news-thumb w-img">
                                <a href="#"><img src="{{ asset('assets/img/news/news-01.png') }}"
                                        alt="news image"></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute">
                                <h3 class="ms-news-title mb-15"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h3>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-news-item p-relative zindex-1 mb-40">
                            <div class="ms-news-overlay p-absolute"></div>
                            <a class="ms-news4-cat" href="#">Wedding Party</a>
                            <div class="ms-news-thumb w-img">
                                <a href="#"><img src="{{ asset('assets/img/news/news-02.png') }}"
                                        alt="news image"></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute">
                                <h3 class="ms-news-title mb-15"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit, ullam.</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-news-item p-relative zindex-1 mb-40">
                            <div class="ms-news-overlay p-absolute"></div>
                            <a class="ms-news4-cat" href="#">DJ Party Event</a>
                            <div class="ms-news-thumb w-img">
                                <a href="#"><img src="{{ asset('assets/img/news/news-03.png') }}"
                                        alt="news image"></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute">
                                <h3 class="ms-news-title mb-15"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati </a></h3>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Special Events Area End -->
    </main>
</div>
@endsection