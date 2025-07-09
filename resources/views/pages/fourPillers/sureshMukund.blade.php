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
                                <!-- <div class="ms-about-round-btn d-inline-block bdFadeUp">
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
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End Here  -->

        <!-- work area start -->
        <section class="work__area pt-100 pb-30 ">
            <div class="container">
                <div class="row align-items-center bdFadeUp">
                    <div class="col-xl-6">
                        <div class="ms-work3-thumb-wrap d-inline-block p-relative mb-60">
                            <div class="ms-work3-inner">
                                <div class="ms-work3-thumb m-img p-relative fix ms-br-20">
                                    <div class="p-absolute"></div>
                                    <img src="{{ asset('assets/img/suresh/award.jpg') }}" alt="work image">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-10">
                        <div class="work__content-wrapper p-relative mb-60">
                            <div class="section__title-wrapper mb-50">
                                <h2 class="section__title mb-40 bd-title-anim">About <span class="text-bg">Suresh Mukund</span></h2>
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
                                <!-- <div class="work__features-btn ms-work3-feature-btn">
                                    <a class="ms-fill-btn" href="#">The Kings</a>
                                </div> -->
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
                            <h2 class="section__title">The <span class="animated-underline active">Kings
                                </span>
                            </h2>
                        </div>
                    </div>

                </div>
                <div class="row bdFadeUp">
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-news-item p-relative zindex-1 mb-40">
                            <div class="ms-news-overlay p-absolute"></div>

                            <div class="ms-news-thumb w-img w-100 h-100">
                                <a href="https://www.thehindu.com/entertainment/dance/suresh-mukund-exults-as-kings-united-wins-the-world-choreography-awards-2020-for-world-of-dance/article34647778.ece"><img src="{{ asset('assets/img/suresh/achievements/winnerWorldDance2020.jpg') }}"
                                        alt="Winner of the World Choreography Award"></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute">
                                <h3 class="ms-news-title mb-15"><a href="https://www.thehindu.com/entertainment/dance/suresh-mukund-exults-as-kings-united-wins-the-world-choreography-awards-2020-for-world-of-dance/article34647778.ece">Winner of the World Choreography Award</a></h3>

                                <div class="ms-news-meta d-inline-block">
                                    <span>Feb 23, 2020</span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-news-item p-relative zindex-1 mb-40">
                            <div class="ms-news-overlay p-absolute"></div>

                            <div class="ms-news-thumb w-img w-100 h-100">
                                <a href="https://www.moneycontrol.com/news/india/the-kings-mumbai-based-hip-hop-group-win-world-of-dance-season-3-3938891.html#google_vignette"><img src="{{ asset('assets/img/suresh/achievements/worldDanceWinner.jpg') }}"
                                        alt="World Champion at Nbc's World of Dance"></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute">
                                <h3 class="ms-news-title mb-15"><a href="https://www.moneycontrol.com/news/india/the-kings-mumbai-based-hip-hop-group-win-world-of-dance-season-3-3938891.html#google_vignette">World Champion at Nbc's World of Dance</a></h3>
                                <div class="ms-news-meta d-inline-block">
                                    <span>Feb 15, 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-news-item p-relative zindex-1 mb-40">
                            <div class="ms-news-overlay p-absolute"></div>

                            <div class="ms-news-thumb w-img w-100 h-100">
                                <a href="#"><img src="{{ asset('assets/img/suresh/achievements/emmy.jpg') }}"
                                        alt="Emmy-nominated Choreocrapher"></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute">
                                <h3 class="ms-news-title mb-15"><a href="#">Emmy-nominated Choreocrapher </a></h3>

                                <div class="ms-news-meta d-inline-block">
                                    <span>Feb 20, 2019</span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-news-item p-relative zindex-1 mb-40">
                            <div class="ms-news-overlay p-absolute"></div>

                            <div class="ms-news-thumb w-img w-100 h-100">
                                <a href="#"><img src="{{ asset('assets/img/suresh/achievements/dadaSahebPhalke.jpg') }}"
                                        alt="Recipient of the Dada Saheb PhalKe Award"></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute">
                                <h3 class="ms-news-title mb-15"><a href="#">Recipient of the Dada Saheb PhalKe Award</a></h3>

                                <div class="ms-news-meta d-inline-block">
                                    <span>Feb 23, 2019</span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-news-item p-relative zindex-1 mb-40">
                            <div class="ms-news-overlay p-absolute"></div>

                            <div class="ms-news-thumb w-img w-100 h-100">
                                <a href="#"><img src="{{ asset('assets/img/suresh/achievements/dancePlus.jpg') }}"
                                        alt="news image"></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute">
                                <h3 class="ms-news-title mb-15"><a href="#">Judge on Dance Plus 5 (Reality Tv Show)</a></h3>

                                <div class="ms-news-meta d-inline-block">
                                    <span>Feb 23, 2015</span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="ms-news-item p-relative zindex-1 mb-40">
                            <div class="ms-news-overlay p-absolute"></div>

                            <div class="ms-news-thumb w-img w-100 h-100">
                                <a href="#"><img src="{{ asset('assets/img/suresh/achievements/inspiration.jpg') }}"
                                        alt="news image"></a>
                            </div>
                            <div class="ms-news-content ms-news-position p-absolute">
                                <h3 class="ms-news-title mb-15"><a href="#">The Film ABCD 2 (2015) Was Inspired by
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
                            <h2 class="section__title"><span class="">The</span>
                                Kings
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ms-news3-wrap bdFadeUp">
                <div class="swiper-container ms-news3-active">
                    <div class="ms-news3-slick">
                        <div class="ms-news3-item p-relative">
                            <a class="ms-news3-cat" href="#">50 Cent's Concert</a>
                            <h3 class="ms-news3-title"><a href="#">Choreographed 50 Cent's Concert</a></h3>
                            <div class="ms-news-meta">
                                <ul>
                                    <li><span>2023</span></li>
                                </ul>
                            </div>
                            <div class="ms-news3-img w-img ms-br-15 fix">
                                <a href="#"><img src="{{ asset('assets/img/suresh/work/choreographed50CentsConcert.jpg') }}"
                                        alt="Choreographed 50 Cent's Concert"></a>
                            </div>
                        </div>
                    </div>
                    <div class="ms-news3-slick">
                        <div class="ms-news3-item p-relative">
                            <a class="ms-news3-cat" href="#">Trump's Inaugural Program</a>
                            <h3 class="ms-news3-title"><a href="#">Choreographed Donald Trump's Inaugural
                                    Program</a></h3>
                            <div class="ms-news-meta">
                                <ul>
                                    <li><span>2016</span></li>

                                </ul>
                            </div>
                            <div class="ms-news3-img w-img ms-br-15 fix">
                                <a href="news-details.html"><img src="{{ asset('assets/img/suresh/work/Donald_Trump_swearing_in_ceremony.jpg') }}"
                                        alt="news image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="ms-news3-slick">
                        <div class="ms-news3-item p-relative">
                            <a class="ms-news3-cat" href="news-details.html">Divine's - Baazigar</a>
                            <h3 class="ms-news3-title"><a href="news-details.html">Choreographed Divine's Popular Track Baazigar</a></h3>
                            <div class="ms-news-meta">
                                <ul>
                                    <li><span>Mar 02, 2023</span></li>
                                </ul>
                            </div>
                            <div class="ms-news3-img w-img ms-br-15 fix">
                                <a href="news-details.html"><img src="{{ asset('assets/img/suresh/work/bazigar.jpg') }}"
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

        <!-- Testimonial Area Start Here  -->
        <section class="ms-tm-area">
            <div class="container">
                <div class="pt-130 pb-70">
                    <div class="row align-items-center bdFadeUp">
                        <div class="col-xl-5">
                            <div class="ms-tm-img-wrap p-relative mb-60">
                                <div class="ms-tm-img-main p-relative m-img">

                                    <!-- <div class="ms-tm-signature">
                                        <img src="{{ asset('assets/img/testimonial/testimonial-signature.png') }}"
                                            alt="testimonial signature">
                                    </div> -->
                                    <img src="{{ asset('assets/img/suresh/suresh.jpg') }}" alt="suresh Services image">
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="ms-tm-content-wrap ms-tm-content-space mb-60">

                                <div class="section__title-wrapper mb-30 bd-title-anim">
                                    <span class="section__subtitle mb-2">Services & Expertise</span>
                                    <h2 class="ms-tm-author-title fw-normal">Choreography & Creative Direction
                                        Areas of Work:
                                    </h2>
                                </div>
                                <div class="ms-tm-content">
                                    <div class="ms-tm-active">
                                        <div class="ms-tm-slick">
                                            <div class="ms-tm-slick-item">
                                                <!-- <p>assumenda fugiat ut quibusdam aliquid qui molestiae
                                                    itaque est atque
                                                    iste
                                                    ea
                                                    ipsum
                                                    adipisci ut rerum voluptas ex autem
                                                    aliquid. Ut voluptatem voluptate et distinctio fuga vel
                                                    dicta magni.</p> -->
                                                <div class="ms-tm-author">
                                                    <h4 class="section__title">Music Videos</h4>
                                                    <span class="ms-tm-author-subtitle">Choreography & Direction</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-tm-slick">
                                            <div class="ms-tm-slick-item">
                                                <!-- <p>assumenda fugiat ut quibusdam aliquid qui molestiae
                                                    itaque est atque
                                                    iste
                                                    ea
                                                    ipsum
                                                    adipisci ut rerum voluptas ex autem
                                                    aliquid. Ut voluptatem voluptate et distinctio fuga vel
                                                    dicta magni.</p> -->
                                                <div class="ms-tm-author">
                                                    <h4 class="section__title">Live Stage Performances</h4>
                                                    <span class="ms-tm-author-subtitle">Concerts, Award Shows, TV Shows, Reality Shows</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-tm-slick">
                                            <div class="ms-tm-slick-item">

                                                <div class="ms-tm-author">
                                                    <h4 class="section__title">Bollywood Choreography</h4>
                                                    <span class="ms-tm-author-subtitle">Films, Songs, Large scale production</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-tm-slick">
                                            <div class="ms-tm-slick-item">

                                                <div class="ms-tm-author">
                                                    <h4 class="section__title">Wedding Choreography</h4>
                                                    <span class="ms-tm-author-subtitle">Sangeet, Couple Performances, Family Act</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-tm-slick">
                                            <div class="ms-tm-slick-item">

                                                <div class="ms-tm-author">
                                                    <h4 class="section__title">Corporate & Special Event shows</h4>
                                                    <span class="ms-tm-author-subtitle">Brand Launch, Award Nights, Festivals</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="ms-tm-dots ms-tm-dots-horizontal ms-round-dots d-flex justify-content-lg-end mt-lg-0 mt-30">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Area End Here  -->

        <!-- Genres Listing Area Start  -->
        <div class="ms-genres-listing pt-130 pb-110 ms-bg-2">
            <div class="container">
                <div class="row justify-content-center bdFadeUp">
                    <div class="col-xl-6 ">
                        <div class="section__title-wrapper text-center mb-25 bd-title-anim">
                            <span class="section__subtitle">Work Links</span>
                            <h2 class="section__title"><span class="">The</span>
                                Kings
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                        aria-labelledby="home-tab" tabindex="0">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <a href="https://youtu.be/Ki4_Fc3XoSk?si=gdBvw7_yewJDJWNE">
                                            <img src="{{ asset('assets/img/suresh/thumnail/vandeMatram.jpg') }}" alt="ABCD2 Vande mataram" class="h-100">
                                        </a>
                                        <a class="popup-video ms-genres-video"
                                            href="https://youtu.be/Ki4_Fc3XoSk?si=gdBvw7_yewJDJWNE"><i
                                                class="fa-sharp fa-solid fa-play"></i></a>

                                    </div>
                                    <div class="ms-genres-content p-relative">

                                        <h4 class="ms-genres-title fw-light"><a href="https://youtu.be/Ki4_Fc3XoSk?si=gdBvw7_yewJDJWNE">ABCD 2 Vande Mataram</a></h4>

                                        {{-- <div class="ms-fun-brand-bottom ms-genres-rating">
                                            <div class="ms-fun-brand-location">
                                                <a href="#" target="_blank"> <i class="flaticon-heart"></i> 1.8M </a>
                                            </div>

                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <a href="https://youtu.be/xutBFUf3LoU?si=Ump5GP3XNSslFF0i">
                                            <img src="{{ asset('assets/img/suresh/thumnail/bejuban.jpg') }}" alt="ABCD 2 Bezubaan phir se img">
                                        </a>
                                        <a class="popup-video ms-genres-video"
                                            href="https://youtu.be/xutBFUf3LoU?si=Ump5GP3XNSslFF0i"><i
                                                class="fa-sharp fa-solid fa-play"></i></a>

                                    </div>
                                    <div class="ms-genres-content p-relative">

                                        <h4 class="ms-genres-title fw-light"><a href="https://youtu.be/xutBFUf3LoU?si=Ump5GP3XNSslFF0i">ABCD 2 Bezubaan Phir Se</a></h4>


                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <a href="https://youtu.be/6Z7tW64jpTM?si=W87ilT0WbCQWACVg">
                                            <img src="{{ asset('assets/img/suresh/thumnail/bazigar.jpg') }}" alt="bazigar img">
                                        </a>
                                        <a class="popup-video ms-genres-video"
                                            href="https://youtu.be/6Z7tW64jpTM?si=W87ilT0WbCQWACVg"><i
                                                class="fa-sharp fa-solid fa-play"></i></a>

                                    </div>
                                    <div class="ms-genres-content p-relative">

                                        <h4 class="ms-genres-title fw-light"><a href="https://youtu.be/6Z7tW64jpTM?si=W87ilT0WbCQWACVg">DIVINE - Baazigar</a></h4>


                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <a href="https://youtu.be/6KBE8iRTg8Y?si=V1uXe6hzPyUjblnJ">
                                            <img src="{{ asset('assets/img/suresh/thumnail/chakravyuh.jpg') }}" alt="Chakravyuh img">
                                        </a>
                                        <a class="popup-video ms-genres-video"
                                            href="https://youtu.be/6KBE8iRTg8Y?si=V1uXe6hzPyUjblnJ"><i
                                                class="fa-sharp fa-solid fa-play"></i></a>

                                    </div>
                                    <div class="ms-genres-content p-relative">

                                        <h4 class="ms-genres-title fw-light"><a href="https://youtu.be/6KBE8iRTg8Y?si=V1uXe6hzPyUjblnJ">Chakravyuh mein - Virat Kohli X DIVINE | PUMA</a></h4>


                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <a href="https://youtu.be/UqBzpg6YMBg?si=xwp31t4z-a8Uo5N9">
                                            <img src="{{ asset('assets/img/suresh/thumnail/worldDp2019.jpg') }}" alt="World Dance Performace img">
                                        </a>
                                        <a class="popup-video ms-genres-video"
                                            href="https://youtu.be/UqBzpg6YMBg?si=xwp31t4z-a8Uo5N9"><i
                                                class="fa-sharp fa-solid fa-play"></i></a>

                                    </div>
                                    <div class="ms-genres-content p-relative">
                                        <h4 class="ms-genres-title fw-light"><a href="https://youtu.be/UqBzpg6YMBg?si=xwp31t4z-a8Uo5N9">World Dance Performace 2019</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <a href="https://youtu.be/0bve8unJ7e8?si=C0nw_fbrxPAno3HM">
                                            <img src="{{ asset('assets/img/suresh/thumnail/tattad.jpg') }}" alt="The Kings TATTAD img">
                                        </a>
                                        <a class="popup-video ms-genres-video"
                                            href="https://youtu.be/0bve8unJ7e8?si=C0nw_fbrxPAno3HM"><i
                                                class="fa-sharp fa-solid fa-play"></i></a>

                                    </div>
                                    <div class="ms-genres-content p-relative">

                                        <h4 class="ms-genres-title fw-light"><a href="https://youtu.be/0bve8unJ7e8?si=C0nw_fbrxPAno3HM">The Kings TATTAD TATTAD Routine</a>
                                        </h4>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <a href="https://youtu.be/0j5Vyo4lGYc?si=HTs03SqnX1aps2c2">
                                            <img src="{{ asset('assets/img/suresh/thumnail/malhari.jpg') }}" alt="The Kings Malhari img">
                                        </a>
                                        <a class="popup-video ms-genres-video"
                                            href="https://youtu.be/0j5Vyo4lGYc?si=HTs03SqnX1aps2c2"><i
                                                class="fa-sharp fa-solid fa-play"></i></a>

                                    </div>
                                    <div class="ms-genres-content p-relative">

                                        <h4 class="ms-genres-title fw-light"><a href="https://youtu.be/0j5Vyo4lGYc?si=HTs03SqnX1aps2c2">The Kings' "Malhari" Routine Is INSANE</a>
                                        </h4>


                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <a href="https://youtu.be/E6rd0fy0DUY?si=vT73nKRCJfPt1Cv5">
                                            <img src="{{ asset('assets/img/suresh/thumnail/winningMoment.jpg') }}" alt="he Kings Winning Moment img">
                                        </a>
                                        <a class="popup-video ms-genres-video"
                                            href="https://youtu.be/E6rd0fy0DUY?si=vT73nKRCJfPt1Cv5"><i
                                                class="fa-sharp fa-solid fa-play"></i></a>

                                    </div>
                                    <div class="ms-genres-content p-relative">

                                        <h4 class="ms-genres-title fw-light"><a href="https://youtu.be/E6rd0fy0DUY?si=vT73nKRCJfPt1Cv5">The Kings Winning Moment</a>
                                        </h4>


                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <a href="https://youtu.be/zQGaZjJNIMg?si=c56JriWTbD4NYWVR">
                                            <img src="{{ asset('assets/img/suresh/thumnail/final.jpg') }}" alt="World of Dance Finals img">
                                        </a>
                                        <a class="popup-video ms-genres-video"
                                            href="https://youtu.be/zQGaZjJNIMg?si=c56JriWTbD4NYWVR"><i
                                                class="fa-sharp fa-solid fa-play"></i></a>

                                    </div>
                                    <div class="ms-genres-content p-relative">

                                        <h4 class="ms-genres-title fw-light"><a href="https://youtu.be/zQGaZjJNIMg?si=c56JriWTbD4NYWVR">World of Dance Finals</a>
                                        </h4>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <a href="https://youtu.be/GHdzoot7rfg?si=DM93vqKiutAWesNe">
                                            <img src="{{ asset('assets/img/suresh/thumnail/50cent.jpg') }}" alt="50cent img">
                                        </a>
                                        <a class="popup-video ms-genres-video"
                                            href="https://youtu.be/GHdzoot7rfg?si=DM93vqKiutAWesNe"><i
                                                class="fa-sharp fa-solid fa-play"></i></a>

                                    </div>
                                    <div class="ms-genres-content p-relative">

                                        <h4 class="ms-genres-title fw-light"><a href="https://youtu.be/GHdzoot7rfg?si=DM93vqKiutAWesNe">50 Cent X The kings | Live Show Mumbai</a></h4>


                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <a href="https://youtu.be/y4jv5bk8ato?si=8YJKEJT35ufWmBjx">
                                            <img src="{{ asset('assets/img/suresh/thumnail/dola.jpg') }}" alt="Dola re dola img">
                                        </a>
                                        <a class="popup-video ms-genres-video"
                                            href="https://youtu.be/y4jv5bk8ato?si=8YJKEJT35ufWmBjx"><i
                                                class="fa-sharp fa-solid fa-play"></i></a>

                                    </div>
                                    <div class="ms-genres-content p-relative">

                                        <h4 class="ms-genres-title fw-light"><a href="https://youtu.be/y4jv5bk8ato?si=8YJKEJT35ufWmBjx">Dola re dola</a>
                                        </h4>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                    <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                        <a href="https://youtu.be/_7oTMDqV3ew?si=Q-Q3UtF1lq61vx0v">
                                            <img src="{{ asset('assets/img/suresh/thumnail/chaiya.jpg') }}" alt="Chaiya chaiya img">
                                        </a>
                                        <a class="popup-video ms-genres-video"
                                            href="https://youtu.be/_7oTMDqV3ew?si=Q-Q3UtF1lq61vx0v"><i
                                                class="fa-sharp fa-solid fa-play"></i></a>

                                    </div>
                                    <div class="ms-genres-content p-relative">

                                        <h4 class="ms-genres-title fw-light"><a href="https://youtu.be/_7oTMDqV3ew?si=Q-Q3UtF1lq61vx0v">Chaiya chaiya </a>
                                        </h4>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- Genres Listing Area End  -->
        <!-- CTA Area Start Here  -->
        <section class="ms-cta-area pt-130 pb-130 p-relative zindex-10">
            <div class="container">
                <div class="ms-cta-bg black-bg fix">
                    <div class="ms-cta-wrap">
                        <div class="ms-cta-item">
                            <div class="ms-cta-content">
                                <h2 class="section__title mb-25">Contact Information
                                </h2>
                                <p class="mb-0"><i class="fas fa-phone-alt me-2"></i> +91 9975562947</p>
                                <p class="mb-0"><i class="fas fa-envelope me-2"></i> suresh@kingsunitedindia.com</p>
                            </div>
                        </div>
                        <div class="ms-cta-item">
                            <div class="ms-cta-img">
                                <img src="{{ asset('assets/img/cta/cta-01.png')}}" alt="cta image">
                            </div>
                        </div>
                        <div class="ms-cta-item">
                            <div class="ms-cta-app">
                                <a target="_blank" href="https://www.instagram.com/worldofdance/" class="contactInfoLogo">
                                    <img src="{{ asset('assets/img/suresh/contactInfo.jpg')}}"
                                        alt="app store" style="object-fit: contain;">
                                </a>
                                <a target="_blank" href="https://www.instagram.com/officialhhi/</a>" class="contactInfoLogo">
                                    <img src="{{ asset('assets/img/suresh/contactInfo2.jpg')}}"
                                        alt="play store" style="object-fit: contain;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Area End Here  -->

    </main>
</div>
@endsection


@push('style')

<style>
    .ms-genres-flex {
        grid-template-columns: 60% auto;
    }

    .ms-genres-item {
        padding: 9px;
    }

    .ms-genres-img img {
        min-height: 100% !important;
    }

    /* .card-bg-black {
        height: 200px;
    } */
    @media (max-width: 767px) {
        .ms-genres-flex {
            grid-template-columns: none;
            grid-auto-rows: auto !important;
        }
    }

    .hover-border:hover {
        /* transform: translateY(-6px); */
        /* border: 1px solid red; */
        box-shadow: 0 2px 8px #dea738;
    }

    .hover-border {
        transition: all 0.3s ease;
    }
</style>

@endpush