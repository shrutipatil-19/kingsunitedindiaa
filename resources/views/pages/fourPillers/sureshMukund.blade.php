@extends('layout.app')

@section('content')
<div class="ms-all-content ms-content-mobile-space pt-130">
    <main>
        <!-- About Area Start Here  -->
        <section class="ms-about-area fix">
            <div class="ms-about-bg include__bg p-relative zindex-1 pt-120 pb-130"
                data-background="{{ asset('assets/img/about/about3.jpg') }}">
                <div class="ms-overlay ms-overlay5 p-absolute zindex--1"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="ms-about-content text-center">
                                <h2 class="ms-title2 white-text mb-30 bd-title-anim">SURESH MUKUND
                                </h2>
                                <p class="capitalize mb-65">CHOREOGRAPHER | EMMY-NOMINATED |
                                    INTERNATIONAL WORLD CHOREOGRAPHY AWARD WINNER
                                </p>
                                <div class="ms-about-round-btn d-inline-block bdFadeUp">
                                    <a href="https://www.youtube.com/watch?v=Rf9flQISwok"
                                        class="popup-video ms-video-round p-relative">
                                        <div class="ms-video-img1">
                                            <img src="{{ asset('assets/img/about/about1.png') }}" alt="about image">
                                        </div>
                                        <div class="ms-video-img2 d-inline-block">
                                            <img src="{{ asset('assets/img/about/about2.png') }}" alt="about image">
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
        <section class="ms-choose-area pt-125 pb-105 d-none">
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
                    <div class="col-lg-5">
                        <div class="d-flex justify-content-lg-end">
                            <div class="ms-review-part mb-40">
                                <div class="ms-review-gap d-flex align-items-center">
                                    <div class="ms-review-left">
                                        <h3>Excellent :</h3>
                                        <p>1050 Review On</p>
                                    </div>
                                    <div class="ms-review-right">
                                        <img src="{{ asset('assets/img/footer/start-01.png') }}" alt="review img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <div class="ms-border2 pb-130">
                    <div class="row bdFadeUp">
                        <div class="col-xl-12">
                            <div class="ms-choose-bg m-img ms-br-15 fix">
                                <img src="{{ asset('assets/img/choose/choose-bg.png') }}" alt="choose img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Us Area End Here  -->

        <!-- work area start -->
        <section class="work__area pt-30 pb-70 ">
            <div class="container">
                <div class="row align-items-center bdFadeUp">
                    <div class="col-xl-6">
                        <div class="ms-work3-thumb-wrap d-inline-block p-relative mb-60">
                            <div class="ms-work3-inner">
                                <div class="ms-work3-thumb m-img p-relative fix ms-br-20">
                                    <div class="ms-overlay ms-overlay3 p-absolute"></div>
                                    <img src="{{ asset('assets/img/work/work-thumb-06.png') }}" alt="work image">
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
                                        <img src="{{ asset('assets/img/work/arrow.png') }}" alt="image not found">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-10">
                        <div class="work__content-wrapper p-relative mb-60">
                            <div class="section__title-wrapper mb-50">
                                <h2 class="section__title mb-40 bd-title-anim">About Suresh Mukund</h2>
                                <p class="">Suresh Mukund is an Internationally Acclaimed
                                    Choreographer and the First Choreographer to Bring
                                    International Championship Titles and Medals for India
                                    In History. He is the Founder and Choreographer of
                                    The Kings, a Globally Recognized Dance Crew Known
                                    For Its Unique Fusion of Hip-hop and Bollywood, Grand
                                    Formations, and Breathtaking 'wow' Moments That
                                    Have Captivated Audiences Worldwide.</p>
                                <p>
                                    In the Early 2000's, He Played a Pioneering Role in
                                    Introducing and Growing Hip-hop and Crew
                                    Choreography Culture in India, Helping It Gain
                                    Mainstream Recognition Through Nationwide Reality
                                    Shows. Over the Years, He Has Taken Indian Dance to
                                    The Global Stage, Representing the Country at
                                    Prestigious International Competitions and Concerts.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- work area end -->

        <!-- Special Events Area Start -->
        <section class="ms-news-area pt-130 pb-90">
            <div class="container">
                <div class="row align-items-end mb-25 bdFadeUp">
                    <div class="col-lg-6">
                        <div class="section__title-wrapper mb-40 bd-title-anim">
                            <span class="section__subtitle">Key Achievements</span>
                            <h2 class="section__title">Morning <span class="animated-underline active">Insight
                                    Musicly</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ms-news-btn d-flex justify-content-lg-end mb-40">
                            <a class="border__btn" href="event.html">View All Achievements</a>
                        </div>
                    </div>
                </div>
                <div class="row bdFadeUp">
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-news-item p-relative zindex-1 mb-40">
                            <div class="ms-news-overlay p-absolute"></div>
                            <a class="ms-news4-cat" href="news-details.html">Winner</a>
                            <div class="ms-news-thumb w-img">
                                <a href="news-details.html"><img src="{{ asset('assets/img/news/news-03.png') }}"
                                        alt="news image"></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute">
                                <h3 class="ms-news-title mb-15"><a href="news-details.html">Winner of the World Choreography Award</a></h3>

                                <div class="ms-news-meta d-inline-block">
                                    <span>Feb 23, 2020</span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-news-item p-relative zindex-1 mb-40">
                            <div class="ms-news-overlay p-absolute"></div>
                            <a class="ms-news4-cat" href="news-details.html">NBC'S</a>
                            <div class="ms-news-thumb w-img">
                                <a href="news-details.html"><img src="{{ asset('assets/img/news/news-01.png') }}"
                                        alt="news image"></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute">
                                <h3 class="ms-news-title mb-15"><a href="news-details.html">World Champion at Nbc's World of Dance</a></h3>
                                <div class="ms-news-meta d-inline-block">
                                    <span>Feb 15, 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-news-item p-relative zindex-1 mb-40">
                            <div class="ms-news-overlay p-absolute"></div>
                            <a class="ms-news4-cat" href="news-details.html">Emmy</a>
                            <div class="ms-news-thumb w-img">
                                <a href="news-details.html"><img src="{{ asset('assets/img/news/news-02.png') }}"
                                        alt="news image"></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute">
                                <h3 class="ms-news-title mb-15"><a href="news-details.html">Emmy-nominated Choreocrapher </a></h3>

                                <div class="ms-news-meta d-inline-block">
                                    <span>Feb 20, 2019</span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-news-item p-relative zindex-1 mb-40">
                            <div class="ms-news-overlay p-absolute"></div>
                            <a class="ms-news4-cat" href="news-details.html">Award</a>
                            <div class="ms-news-thumb w-img">
                                <a href="news-details.html"><img src="{{ asset('assets/img/news/news-03.png') }}"
                                        alt="news image"></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute">
                                <h3 class="ms-news-title mb-15"><a href="news-details.html">Recipient of the Dada Saheb PhalKe Award</a></h3>

                                <div class="ms-news-meta d-inline-block">
                                    <span>Feb 23, 2019</span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-news-item p-relative zindex-1 mb-40">
                            <div class="ms-news-overlay p-absolute"></div>
                            <a class="ms-news4-cat" href="news-details.html">Judge</a>
                            <div class="ms-news-thumb w-img">
                                <a href="news-details.html"><img src="{{ asset('assets/img/news/news-03.png') }}"
                                        alt="news image"></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute">
                                <h3 class="ms-news-title mb-15"><a href="news-details.html">Judge on Dance Plus 5 (Reality Tv Show)</a></h3>

                                <div class="ms-news-meta d-inline-block">
                                    <span>Feb 23, 2015</span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-news-item p-relative zindex-1 mb-40">
                            <div class="ms-news-overlay p-absolute"></div>
                            <a class="ms-news4-cat" href="news-details.html">Inspiration</a>
                            <div class="ms-news-thumb w-img">
                                <a href="news-details.html"><img src="{{ asset('assets/img/news/news-03.png') }}"
                                        alt="news image"></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute">
                                <h3 class="ms-news-title mb-15"><a href="news-details.html">The Film ABCD 2 (2015) Was Inspired by
                                        Suresh Mukund and the Kings, With Varun
                                        Dhawan Portraying Suresh Mukund's
                                        Character.</a></h3>

                                <div class="ms-news-meta d-inline-block">
                                    <span>Feb 23, 2015</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Special Events Area End -->

        <!-- News area end here  -->
        <section class="ms-news3-area ms-bg-2 p-relative fix pt-130 pb-90">
            <div class="container">
                <div class="row justify-content-center bdFadeUp">
                    <div class="col-xl-6">
                        <div class="section__title-wrapper text-center mb-25 bd-title-anim">
                            <span class="section__subtitle">Choreography Work</span>
                            <h2 class="section__title"><span class="ms-text1">Musicly</span>
                                Morning Insight
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ms-news3-wrap bdFadeUp">
                <div class="swiper-container ms-news3-active">
                    <div class="ms-news3-slick">
                        <div class="ms-news3-item p-relative">
                            <a class="ms-news3-cat" href="news-details.html">Concert</a>
                            <h3 class="ms-news3-title"><a href="news-details.html">Choreographed 50 Cent's Concert</a></h3>
                            <div class="ms-news-meta">
                                <ul>
                                    <li><span>Feb 27, 2023</span></li>
                                </ul>
                            </div>
                            <div class="ms-news3-img w-img ms-br-15 fix">
                                <a href="news-details.html"><img src="{{ asset('assets/img/news/news-01.png') }}"
                                        alt="news image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="ms-news3-slick">
                        <div class="ms-news3-item p-relative">
                            <a class="ms-news3-cat" href="#">Choreographed</a>
                            <h3 class="ms-news3-title"><a href="#">Choreographed Donald Trump's Inaugural
                                    Pro Cram</a></h3>
                            <div class="ms-news-meta">
                                <ul>
                                    <li><span>Mar 01, 2016</span></li>

                                </ul>
                            </div>
                            <div class="ms-news3-img w-img ms-br-15 fix">
                                <a href="news-details.html"><img src="{{ asset('assets/img/news/news-02.png') }}"
                                        alt="news image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="ms-news3-slick">
                        <div class="ms-news3-item p-relative">
                            <a class="ms-news3-cat" href="news-details.html">Choreographed</a>
                            <h3 class="ms-news3-title"><a href="news-details.html">Choreographed Divine's Popular Track Baazicar</a></h3>
                            <div class="ms-news-meta">
                                <ul>
                                    <li><span>Mar 02, 2023</span></li>
                                </ul>
                            </div>
                            <div class="ms-news3-img w-img ms-br-15 fix">
                                <a href="news-details.html"><img src="{{ asset('assets/img/news/news-03.png') }}"
                                        alt="news image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="ms-news3-slick">
                        <div class="ms-news3-item p-relative">
                            <a class="ms-news3-cat" href="news-details.html">Choreographed</a>
                            <h3 class="ms-news3-title"><a href="news-details.html">Choreographed Puma Ad Featuring Divine & Virat Kohli</a></h3>
                            <div class="ms-news-meta">
                                <ul>
                                    <li><span>Mar 04, 2023, 2023</span></li>

                                </ul>
                            </div>
                            <div class="ms-news3-img w-img ms-br-15 fix">
                                <a href="news-details.html"><img src="{{ asset('assets/img/news/news-02.png') }}"
                                        alt="news image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="ms-news3-slick">
                        <div class="ms-news3-item p-relative">
                            <a class="ms-news3-cat" href="news-details.html">Choreographed</a>
                            <h3 class="ms-news3-title"><a href="news-details.html">Choreographed the Film ABCD 2</a></h3>
                            <div class="ms-news-meta">
                                <ul>
                                    <li><span>Mar 05, 2023</span></li>
                                </ul>
                            </div>
                            <div class="ms-news3-img w-img ms-br-15 fix">
                                <a href="news-details.html"><img src="{{ asset('assets/img/news/news-03.png') }}"
                                        alt="news image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="ms-news3-slick">
                        <div class="ms-news3-item p-relative">
                            <a class="ms-news3-cat" href="news-details.html">Choreographed</a>
                            <h3 class="ms-news3-title"><a href="news-details.html"> Choreographed Two Songs From Street Dancer 3</a></h3>
                            <div class="ms-news-meta">
                                <ul>
                                    <li><span>Mar 05, 2023</span></li>
                                </ul>
                            </div>
                            <div class="ms-news3-img w-img ms-br-15 fix">
                                <a href="news-details.html"><img src="{{ asset('assets/img/news/news-03.png') }}"
                                        alt="news image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="ms-news3-slick">
                        <div class="ms-news3-item p-relative">
                            <a class="ms-news3-cat" href="news-details.html">Choreographed</a>
                            <h3 class="ms-news3-title"><a href="news-details.html">Choreographed for the Nba Halftime Show in The United States</a></h3>
                            <div class="ms-news-meta">
                                <ul>
                                    <li><span>Mar 05, 2023</span></li>
                                </ul>
                            </div>
                            <div class="ms-news3-img w-img ms-br-15 fix">
                                <a href="news-details.html"><img src="{{ asset('assets/img/news/news-03.png') }}"
                                        alt="news image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="ms-news3-slick">
                        <div class="ms-news3-item p-relative">
                            <a class="ms-news3-cat" href="news-details.html">Choreographed</a>
                            <h3 class="ms-news3-title"><a href="news-details.html">Choreographed Showcase for Redbull Dance Style World Finals</a></h3>
                            <div class="ms-news-meta">
                                <ul>
                                    <li><span>Mar 05, 2023</span></li>
                                </ul>
                            </div>
                            <div class="ms-news3-img w-img ms-br-15 fix">
                                <a href="news-details.html"><img src="{{ asset('assets/img/news/news-03.png') }}"
                                        alt="news image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="ms-news3-slick">
                        <div class="ms-news3-item p-relative">
                            <a class="ms-news3-cat" href="news-details.html">Choreographed</a>
                            <h3 class="ms-news3-title"><a href="news-details.html">Choreographed for Prestigious Award Shows: Zee Cine Awards</a></h3>
                            <div class="ms-news-meta">
                                <ul>
                                    <li><span>Mar 05, 2023</span></li>
                                </ul>
                            </div>
                            <div class="ms-news3-img w-img ms-br-15 fix">
                                <a href="news-details.html"><img src="{{ asset('assets/img/news/news-03.png') }}"
                                        alt="news image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="ms-news3-slick">
                        <div class="ms-news3-item p-relative">
                            <a class="ms-news3-cat" href="news-details.html">Choreographed</a>
                            <h3 class="ms-news3-title"><a href="news-details.html">Choreographed for Prestigious Award Shows: IIFA Awards</a></h3>
                            <div class="ms-news-meta">
                                <ul>
                                    <li><span>Mar 05, 2023</span></li>
                                </ul>
                            </div>
                            <div class="ms-news3-img w-img ms-br-15 fix">
                                <a href="news-details.html"><img src="{{ asset('assets/img/news/news-03.png') }}"
                                        alt="news image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="ms-news3-slick">
                        <div class="ms-news3-item p-relative">
                            <a class="ms-news3-cat" href="news-details.html">Choreographed</a>
                            <h3 class="ms-news3-title"><a href="news-details.html">Choreographed for Prestigious Award Shows: Star Screen Awards</a></h3>
                            <div class="ms-news-meta">
                                <ul>
                                    <li><span>Mar 05, 2023</span></li>
                                </ul>
                            </div>
                            <div class="ms-news3-img w-img ms-br-15 fix">
                                <a href="news-details.html"><img src="{{ asset('assets/img/news/news-03.png') }}"
                                        alt="news image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="ms-news3-slick">
                        <div class="ms-news3-item p-relative">
                            <a class="ms-news3-cat" href="news-details.html">Choreographed</a>
                            <h3 class="ms-news3-title"><a href="news-details.html">Choreographed for Prestigious Award Shows: Film Fare Awards</a></h3>
                            <div class="ms-news-meta">
                                <ul>
                                    <li><span>Mar 05, 2023</span></li>
                                </ul>
                            </div>
                            <div class="ms-news3-img w-img ms-br-15 fix">
                                <a href="news-details.html"><img src="{{ asset('assets/img/news/news-03.png') }}"
                                        alt="news image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="ms-news3-slick">
                        <div class="ms-news3-item p-relative">
                            <a class="ms-news3-cat" href="news-details.html">Choreographed</a>
                            <h3 class="ms-news3-title"><a href="news-details.html">Choreographed for Prestigious Award Shows: Big Star Entertainment Awards</a></h3>
                            <div class="ms-news-meta">
                                <ul>
                                    <li><span>Mar 05, 2023</span></li>
                                </ul>
                            </div>
                            <div class="ms-news3-img w-img ms-br-15 fix">
                                <a href="news-details.html"><img src="{{ asset('assets/img/news/news-03.png') }}"
                                        alt="news image"></a>
                            </div>
                        </div>
                    </div>
                     <div class="ms-news3-slick">
                        <div class="ms-news3-item p-relative">
                            <a class="ms-news3-cat" href="news-details.html">Choreographed</a>
                            <h3 class="ms-news3-title"><a href="news-details.html">Choreographed for Prestigious Award Shows: Led the Kings on a World Tour Across the Us &
                                    Canada</a></h3>
                            <div class="ms-news-meta">
                                <ul>
                                    <li><span>Mar 05, 2023</span></li>
                                </ul>
                            </div>
                            <div class="ms-news3-img w-img ms-br-15 fix">
                                <a href="news-details.html"><img src="{{ asset('assets/img/news/news-03.png') }}"
                                        alt="news image"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- News area end here  -->

        <!-- team area start here  -->
        <section class="ms-team-area ms-bg-2 pt-125 pb-90">
            <div class="container">
                <div class="row justify-content-center mb-25 bdFadeUp">
                    <div class="col-xl-6">
                        <div class="section__title-wrapper text-center mb-40">
                            <h2 class="section__title bd-title-anim">Our awesome team</h2>
                        </div>
                    </div>
                </div>
                <div class="row ms-team-inner bdFadeUp">
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-team-item-wrap">
                            <div class="ms-team-item p-relative">
                                <div class="ms-team-img">
                                    <a href="team-details.html"><img src="{{ asset('assets/img/team/team-01.jpg') }}"
                                            alt="team image"></a>
                                    <div class="ms-team-social">
                                        <a href="https://www.linkedin.com/" title="Instagram" target="_blank">IN</a>
                                        <a href="https://twitter.com/" title="Twitter" target="_blank">TW</a>
                                        <a href="https://www.facebook.com/" title="Facebook" target="_blank">FB</a>
                                    </div>
                                </div>
                                <h3 class="ms-team-title"><a href="team-details.html">Essie L. Whitman</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-team-item-wrap">
                            <div class="ms-team-item p-relative">
                                <div class="ms-team-img">
                                    <a href="team-details.html"><img src="{{ asset('assets/img/team/team-02.jpg') }}"
                                            alt="team image"></a>
                                    <div class="ms-team-social">
                                        <a href="https://www.linkedin.com/" title="Instagram" target="_blank">IN</a>
                                        <a href="https://twitter.com/" title="Twitter" target="_blank">TW</a>
                                        <a href="https://www.facebook.com/" title="Facebook" target="_blank">FB</a>
                                    </div>
                                </div>
                                <h3 class="ms-team-title"><a href="team-details.html">Maria D. Guthrie</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-team-item-wrap">
                            <div class="ms-team-item p-relative">
                                <div class="ms-team-img">
                                    <a href="team-details.html"><img src="{{ asset('assets/img/team/team-03.jpg') }}"
                                            alt="team image"></a>
                                    <div class="ms-team-social">
                                        <a href="https://www.linkedin.com/" title="Instagram" target="_blank">IN</a>
                                        <a href="https://twitter.com/" title="Twitter" target="_blank">TW</a>
                                        <a href="https://www.facebook.com/" title="Facebook" target="_blank">FB</a>
                                    </div>
                                </div>
                                <h3 class="ms-team-title"><a class="ms-team-title" href="team-details.html">Mark
                                        W.
                                        Barrientes</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-team-item-wrap">
                            <div class="ms-team-item p-relative">
                                <div class="ms-team-img">
                                    <a href="team-details.html"><img src="{{ asset('assets/img/team/team-04.jpg') }}"
                                            alt="team image"></a>
                                    <div class="ms-team-social">
                                        <a href="https://www.linkedin.com/" title="Instagram" target="_blank">IN</a>
                                        <a href="https://twitter.com/" title="Twitter" target="_blank">TW</a>
                                        <a href="https://www.facebook.com/" title="Facebook" target="_blank">FB</a>
                                    </div>
                                </div>
                                <h3 class="ms-team-title"><a class="ms-team-title" href="team-details.html">John
                                        L.
                                        Dombrowski</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-team-item-wrap">
                            <div class="ms-team-item p-relative">
                                <div class="ms-team-img">
                                    <a href="team-details.html"><img src="{{ asset('assets/img/team/team-05.jpg') }}"
                                            alt="team image"></a>
                                    <div class="ms-team-social">
                                        <a href="https://www.linkedin.com/" title="Instagram" target="_blank">IN</a>
                                        <a href="https://twitter.com/" title="Twitter" target="_blank">TW</a>
                                        <a href="https://www.facebook.com/" title="Facebook" target="_blank">FB</a>
                                    </div>
                                </div>
                                <h3 class="ms-team-title"><a class="ms-team-title" href="team-details.html">Donald
                                        J.
                                        Green</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-team-item-wrap">
                            <div class="ms-team-item p-relative">
                                <div class="ms-team-img">
                                    <a href="team-details.html"><img src="{{ asset('assets/img/team/team-06.jpg') }}"
                                            alt="team image"></a>
                                    <div class="ms-team-social">
                                        <a href="https://www.linkedin.com/" title="Instagram" target="_blank">IN</a>
                                        <a href="https://twitter.com/" title="Twitter" target="_blank">TW</a>
                                        <a href="https://www.facebook.com/" title="Facebook" target="_blank">FB</a>
                                    </div>
                                </div>
                                <h3 class="ms-team-title"><a class="ms-team-title" href="team-details.html">Mary
                                        W.
                                        Russell</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team area end here  -->

        <!-- FAQ area start -->
        <section id="bd_has_accordion" class="ms-faq-area pt-120 pb-110 fix">
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
                                <img src="{{ asset('assets/img/partner/partner-01.png') }}" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/partner/partner-02.png') }}" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/partner/partner-03.png') }}" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/partner/partner-04.png') }}" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/partner/partner-05.png') }}" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/partner/partner-04.png') }}" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/partner/partner-01.png') }}" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/partner/partner-02.png') }}" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/partner/partner-03.png') }}" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/partner/partner-04.png') }}" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/partner/partner-05.png') }}" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/partner/partner-04.png') }}" alt="partner image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partner Area End Here  -->

    </main>
</div>
@endsection