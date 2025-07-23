@extends('layout.app')

@section('content')
    <div class="ms-all-content ms-content-mobile-space pt-130">
        <main>
            <!-- Banner Area Start Here  -->
            <section class="ms-about-area fix">
                <div class="ms-about-bg include__bg p-relative zindex-1 pt-120 pb-130"
                    data-background="{{ asset('assets/img/suresh/achievements/worldDanceWinner.jpg') }}">
                    <div class="ms-overlay ms-overlay5 p-absolute zindex--1"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-10 col-lg-10">
                                <div class="ms-about-content text-center">
                                    <!-- <h2 class="ms-title2 white-text mb-30 bd-title-anim">SURESH MUKUND
                                        </h2>
                                        <p class="capitalize mb-65">CHOREOGRAPHER | EMMY-NOMINATED |
                                            INTERNATIONAL WORLD CHOREOGRAPHY AWARD WINNER
                                        </p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Banner Area End Here  -->

            <!-- About Suresh area start -->
            <section class="work__area pt-90 pb-30 ">
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
                                <div class="section__title-wrapper suresh mb-50">
                                    <h2 class="section__title mb-40 bd-title-anim">Story of <span class="text-bg"> Suresh
                                            Mukund </span> & his team - The Kings</h2>
                                    <p class="text-justify">Suresh Mukund, the founder and choreographer of Kings United,
                                        has a story that feels like a Bollywood movie. Chasing a dream, building a team from
                                        the ground up, and winning one of the biggest dance championships in the entire
                                        world. Over a decade ago, Suresh and his group of passionate performers entered
                                        their first dance reality show, marking the start of a journey that would change
                                        their lives and put India on the global map in the dance scene.
                                    </p>
                                    <p class="text-justify">Known to many as “The Kings,” Kings United rose to international
                                        fame after winning Season 3 of the US reality show World of Dance. Their performance
                                        earned them the top prize of 1 million USD and global recognition. This incredible
                                        win not only put them on the world stage but also established them as one of the
                                        best dance crews to ever represent India.</p>
                                    <!-- <div class="work__features-btn ms-work3-feature-btn">
                                            <a class="ms-fill-btn" href="#">The Kings</a>
                                        </div> -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Suresh area end -->

            <!-- Award of suresh area start -->
            <div class="scrolling-wrapper ">
                <div class="card ps-lg-5">
                    <!-- <h2>Card 1</h2> -->
                    <div class="row w-100">
                        <div class="col-lg-6">
                            <div class="section__title-wrapper">
                                <a href="{{ route('sureshMukund') }}">
                                    <h2 class="section__title mb-3">Winner of the World Choreography Award</h2>
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo cupiditate ut
                                    necessitatibus in ratione reprehenderit magnam eum porro, ipsa libero aperiam itaque
                                    voluptates deleniti. Distinctio assumenda unde nisi atque. Numquam!
                                </p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sit amet vero debitis
                                    nulla quae omnis, nobis mollitia! Quas quae perferendis voluptatum odit atque deleniti
                                    officia ea laborum! Nam molestias eaque magnam odit fugit accusamus eos excepturi,
                                    maxime sint neque!</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- <div class="work__thumb m-img">
                                    <img src="{{ asset('assets/img/about/award.jpg') }}" alt="work image" class="w-100">
                                </div> -->
                            <div class="cardfan ">
                                <img src="{{ asset('assets/img/suresh/suresh3.jpeg ') }}" alt="suresh1" id="roma">
                                <img src="{{ asset('assets/img/suresh/dancePlus.jpg') }}" alt="suresh2" id="aqueduct">
                                <img src="{{ asset('assets/img/about/award.jpg') }}" alt="suresh3" id="bike">
                            </div>
                        </div>
                        <!-- </div> -->

                    </div>
                </div>
                <div class="card ps-lg-5">
                    <!-- <h2>Card 2</h2> -->
                    <div class="row w-100">
                        <div class="col-lg-6">
                            <div class="section__title-wrapper">
                                <a href="{{ route('theKings') }}">
                                    <h2 class="section__title mb-3">Recipient of the Dada Saheb PhalKe Award</h2>
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt cumque minima
                                    laboriosam dolorum facere, iure eveniet magnam sed, illum voluptatum vero debitis non
                                    accusamus pariatur deserunt est beatae commodi enim perspiciatis quidem ut nostrum neque
                                    minus? Nesciunt, tempora! Odio, modi.</p>
                                <p class="">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error, ipsa Lorem ipsum dolor
                                    sit, amet consectetur adipisicing elit. Reiciendis suscipit natus id sit a,
                                    necessitatibus facilis praesentium fugit dolor dolorum?.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- <div class="work__thumb m-img">
                                    <img src="{{ asset('assets/img/kings img/about22.jpg') }}" alt="work image" class="w-100">
                                </div> -->
                            <div class="cardfan ">
                                <img src="{{ asset('assets/img/kings crew/12.jpg') }}" alt="suresh1" id="roma">
                                <img src="{{ asset('assets/img/kings crew/1.jpg') }}" alt="suresh2" id="aqueduct">
                                <img src="{{ asset('assets/img/kings crew/4.jpg') }}" alt="suresh3" id="bike">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card ps-lg-5">
                    <!-- <h2>Card 1</h2> -->
                    <div class="row w-100">
                        <div class="col-lg-6">
                            <div class="section__title-wrapper ">
                                <h2 class="section__title mb-3">Emmy-nominated Choreocrapher</h2>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque fugiat quasi quidem
                                    minus repudiandae explicabo minima, totam quos nihil reiciendis! Dignissimos beatae
                                    quasi dolorem incidunt illo alias quibusdam nesciunt excepturi! Itaque, porro optio
                                    similique deserunt alias nobis numquam labore rerum?</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- <div class="work__thumb m-img">
                                    <img src="{{ asset('assets/img/about/award.jpg') }}" alt="work image" class="w-100">
                                </div> -->
                            <div class="cardfan ">
                                <img src="{{ asset('assets/img/kings crew/5.jpg') }}" alt="suresh1" id="roma">
                                <img src="{{ asset('assets/img/kings img/about22.jpg') }}" alt="suresh2" id="aqueduct">
                                <img src="{{ asset('assets/img/kings crew/9.jpg') }}" alt="suresh3" id="bike">
                            </div>
                        </div>
                        <!-- </div> -->

                    </div>
                </div>

            </div>
            <!-- Award of suresh area  end -->

            <!-- parallax effect start -->
            <section class="ms-cta-area ms-event2-area include__bg pt-130 pb-130 p-relative zindex-10"
                style="background-image: url('{{ asset('assets/img/kings crew/2.jpg') }}');background-attachment: fixed;height: 60vh;">
                <!-- <div class="ms-overlay ms-overlay1 zindex--1"></div> -->
            </section>
            <!-- parallax effect end -->

            <!-- About the Kings - Parallax Section Start -->
            <section class="hero kings-parallax bg-w-3">
                <div class="container text-center">
                    <h2 class="section__title mb-4 text-black-custome">About <span class="text-bg">The Kings</span></h2>
                    <p class="text-black-custome"
                        style="max-width: 800px; margin: 0 auto; font-size: 1.2rem; font-weight: 300;">
                        The Kings are not just dancers—they're storytellers, dreamers, and pioneers of Indian hip-hop on a
                        global stage.
                        Rising from humble beginnings under the guidance of Suresh Mukund, they've become the symbol of
                        passion, precision,
                        and purpose in the dance world. Their journey continues to inspire millions across India and beyond.
                    </p>
                </div>
            </section>
            <!-- About the Kings - Parallax Section End -->

            <!-- achivements of kings Area Start -->
            <section class="ms-news-area pt-90 pb-90 ms-bg-2">
                <div class="container">
                    <div class="row align-items-end mb-25 bdFadeUp">
                        <div class="col-lg-6">
                            <div class="section__title-wrapper achievement mb-40 bd-title-anim">
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
                                    <a href="#"><img
                                            src="{{ asset('assets/img/suresh/achievements/winnerWorldDance2020.jpg') }}"
                                            alt="Winner of the World Choreography Award"></a>
                                </div>
                                <div class="ms-news-content ms-news-position p-absolute">
                                    <h3 class="ms-news-title mb-15"><a href="#">World of Dance | Winner</a></h3>
                                    <p>The first Indian team to claim the World Champion title on NBC’s World of Dance.</p>
                                    <div class="ms-news-meta d-inline-block">
                                        <!-- <span>Feb 23, 2020</span> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="ms-news-item p-relative zindex-1 mb-40">
                                <div class="ms-news-overlay p-absolute"></div>

                                <div class="ms-news-thumb w-img w-100 h-100">
                                    <a href="#"><img
                                            src="{{ asset('assets/img/suresh/achievements/worldDanceWinner.jpg') }}"
                                            alt="World Champion at Nbc's World of Dance"></a>
                                </div>
                                <div class="ms-news-content ms-news-position p-absolute">
                                    <h3 class="ms-news-title mb-15"><a href="#">World Hip Hop Dance Championship
                                            Bronze Medalist</a></h3>
                                    <p>India’s first dance crew to secure a medal at the World Hip-Hop Dance Championship.
                                    </p>
                                    <div class="ms-news-meta d-inline-block">
                                        <!-- <span>Feb 15, 2019</span> -->
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
                                    <h3 class="ms-news-title mb-15"><a href="#">ABCD 2 Movie </a></h3>
                                    <p>
                                        Our story was celebrated on screen in Remo D’Souza’s “Any Body Can Dance 2”.</p>
                                    <div class="ms-news-meta d-inline-block">
                                        <!-- <span>Feb 20, 2019</span> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="ms-news-item p-relative zindex-1 mb-40">
                                <div class="ms-news-overlay p-absolute"></div>

                                <div class="ms-news-thumb w-img w-100 h-100">
                                    <a href="#"><img
                                            src="{{ asset('assets/img/suresh/achievements/dadaSahebPhalke.jpg') }}"
                                            alt="Recipient of the Dada Saheb PhalKe Award"></a>
                                </div>
                                <div class="ms-news-content ms-news-position p-absolute">
                                    <h3 class="ms-news-title mb-15"><a href="#">India's got talent season 3
                                            winner</a></h3>
                                    <p>Lifted the trophy in Season 3 of India’s Got Talent with unforgettable performances.
                                    </p>
                                    <div class="ms-news-meta d-inline-block">
                                        <!-- <span>Feb 23, 2019</span> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="ms-news-item p-relative zindex-1 mb-40">
                                <div class="ms-news-overlay p-absolute"></div>

                                <div class="ms-news-thumb w-img w-100 h-100">
                                    <a href="#"><img
                                            src="{{ asset('assets/img/suresh/achievements/dancePlus.jpg') }}"
                                            alt="news image"></a>
                                </div>
                                <div class="ms-news-content ms-news-position p-absolute">
                                    <h3 class="ms-news-title mb-15"><a href="#">Entertainment ke liye kuch bhi
                                            karega season 3 winner</a></h3>
                                    <p>Brought home the win in Season 3 of Entertainment Ke Liye Kuch Bhi Karega.</p>
                                    <div class="ms-news-meta d-inline-block">
                                        <!-- <span>Feb 23, 2015</span> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="ms-news-item p-relative zindex-1 mb-40">
                                <div class="ms-news-overlay p-absolute"></div>

                                <div class="ms-news-thumb w-img w-100 h-100">
                                    <a href="#"><img
                                            src="{{ asset('assets/img/suresh/achievements/inspiration.jpg') }}"
                                            alt="news image"></a>
                                </div>
                                <div class="ms-news-content ms-news-position p-absolute">
                                    <h3 class="ms-news-title mb-15"><a href="#">Boogie Woogie india winner</a></h3>
                                    <p>Showcased our unique style on the iconic Boogie Woogie, earning nationwide
                                        appreciation.</p>
                                    <div class="ms-news-meta d-inline-block">
                                        <!-- <span>Feb 23, 2015</span> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- achivements kings Area End -->

            <!-- Work Links Area Start  -->
            <div class="ms-genres-listing pt-90 pb-90 bg-w-3">
                <div class="container">
                    <div class="row justify-content-center bdFadeUp">
                        <div class="col-xl-6 ">
                            <div class="section__title-wrapper text-center mb-25 bd-title-anim">
                                <span class="section__subtitle text-black-custome ">Work Links</span>
                                <h2 class="section__title text-black-custome "><span class="">The</span>
                                    Kings
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content d-none" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="https://youtu.be/Ki4_Fc3XoSk?si=gdBvw7_yewJDJWNE">
                                                <img src="{{ asset('assets/img/suresh/thumnail/vandeMatram.jpg') }}"
                                                    alt="ABCD2 Vande mataram" class="h-100">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://youtu.be/Ki4_Fc3XoSk?si=gdBvw7_yewJDJWNE"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>

                                        </div>
                                        <div class="ms-genres-content p-relative">

                                            <h4 class="ms-genres-title fw-light"><a
                                                    href="https://youtu.be/Ki4_Fc3XoSk?si=gdBvw7_yewJDJWNE">ABCD 2 Vande
                                                    Mataram</a></h4>

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
                                                <img src="{{ asset('assets/img/suresh/thumnail/bejuban.jpg') }}"
                                                    alt="ABCD 2 Bezubaan phir se img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://youtu.be/xutBFUf3LoU?si=Ump5GP3XNSslFF0i"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>

                                        </div>
                                        <div class="ms-genres-content p-relative">

                                            <h4 class="ms-genres-title fw-light"><a
                                                    href="https://youtu.be/xutBFUf3LoU?si=Ump5GP3XNSslFF0i">ABCD 2 Bezubaan
                                                    Phir Se</a></h4>


                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="https://youtu.be/6Z7tW64jpTM?si=W87ilT0WbCQWACVg">
                                                <img src="{{ asset('assets/img/suresh/thumnail/bazigar.jpg') }}"
                                                    alt="bazigar img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://youtu.be/6Z7tW64jpTM?si=W87ilT0WbCQWACVg"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>

                                        </div>
                                        <div class="ms-genres-content p-relative">

                                            <h4 class="ms-genres-title fw-light"><a
                                                    href="https://youtu.be/6Z7tW64jpTM?si=W87ilT0WbCQWACVg">DIVINE -
                                                    Baazigar</a></h4>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="https://youtu.be/6KBE8iRTg8Y?si=V1uXe6hzPyUjblnJ">
                                                <img src="{{ asset('assets/img/suresh/thumnail/chakravyuh.jpg') }}"
                                                    alt="Chakravyuh img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://youtu.be/6KBE8iRTg8Y?si=V1uXe6hzPyUjblnJ"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>

                                        </div>
                                        <div class="ms-genres-content p-relative">

                                            <h4 class="ms-genres-title fw-light"><a
                                                    href="https://youtu.be/6KBE8iRTg8Y?si=V1uXe6hzPyUjblnJ">Chakravyuh mein
                                                    - Virat Kohli X DIVINE | PUMA</a></h4>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="https://youtu.be/UqBzpg6YMBg?si=xwp31t4z-a8Uo5N9">
                                                <img src="{{ asset('assets/img/suresh/thumnail/worldDp2019.jpg') }}"
                                                    alt="World Dance Performace img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://youtu.be/UqBzpg6YMBg?si=xwp31t4z-a8Uo5N9"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>

                                        </div>
                                        <div class="ms-genres-content p-relative">
                                            <h4 class="ms-genres-title fw-light"><a
                                                    href="https://youtu.be/UqBzpg6YMBg?si=xwp31t4z-a8Uo5N9">World Dance
                                                    Performace 2019</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="https://youtu.be/0bve8unJ7e8?si=C0nw_fbrxPAno3HM">
                                                <img src="{{ asset('assets/img/suresh/thumnail/tattad.jpg') }}"
                                                    alt="The Kings TATTAD img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://youtu.be/0bve8unJ7e8?si=C0nw_fbrxPAno3HM"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>

                                        </div>
                                        <div class="ms-genres-content p-relative">

                                            <h4 class="ms-genres-title fw-light"><a
                                                    href="https://youtu.be/0bve8unJ7e8?si=C0nw_fbrxPAno3HM">The Kings
                                                    TATTAD TATTAD Routine</a>
                                            </h4>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="https://youtu.be/0j5Vyo4lGYc?si=HTs03SqnX1aps2c2">
                                                <img src="{{ asset('assets/img/suresh/thumnail/malhari.jpg') }}"
                                                    alt="The Kings Malhari img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://youtu.be/0j5Vyo4lGYc?si=HTs03SqnX1aps2c2"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>

                                        </div>
                                        <div class="ms-genres-content p-relative">

                                            <h4 class="ms-genres-title fw-light"><a
                                                    href="https://youtu.be/0j5Vyo4lGYc?si=HTs03SqnX1aps2c2">The Kings'
                                                    "Malhari" Routine Is INSANE</a>
                                            </h4>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="https://youtu.be/E6rd0fy0DUY?si=vT73nKRCJfPt1Cv5">
                                                <img src="{{ asset('assets/img/suresh/thumnail/winningMoment.jpg') }}"
                                                    alt="he Kings Winning Moment img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://youtu.be/E6rd0fy0DUY?si=vT73nKRCJfPt1Cv5"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>

                                        </div>
                                        <div class="ms-genres-content p-relative">

                                            <h4 class="ms-genres-title fw-light"><a
                                                    href="https://youtu.be/E6rd0fy0DUY?si=vT73nKRCJfPt1Cv5">The Kings
                                                    Winning Moment</a>
                                            </h4>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="https://youtu.be/zQGaZjJNIMg?si=c56JriWTbD4NYWVR">
                                                <img src="{{ asset('assets/img/suresh/thumnail/final.jpg') }}"
                                                    alt="World of Dance Finals img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://youtu.be/zQGaZjJNIMg?si=c56JriWTbD4NYWVR"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>

                                        </div>
                                        <div class="ms-genres-content p-relative">

                                            <h4 class="ms-genres-title fw-light"><a
                                                    href="https://youtu.be/zQGaZjJNIMg?si=c56JriWTbD4NYWVR">World of Dance
                                                    Finals</a>
                                            </h4>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="https://youtu.be/GHdzoot7rfg?si=DM93vqKiutAWesNe">
                                                <img src="{{ asset('assets/img/suresh/thumnail/50cent.jpg') }}"
                                                    alt="50cent img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://youtu.be/GHdzoot7rfg?si=DM93vqKiutAWesNe"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>

                                        </div>
                                        <div class="ms-genres-content p-relative">

                                            <h4 class="ms-genres-title fw-light"><a
                                                    href="https://youtu.be/GHdzoot7rfg?si=DM93vqKiutAWesNe">50 Cent X The
                                                    kings | Live Show Mumbai</a></h4>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="https://youtu.be/y4jv5bk8ato?si=8YJKEJT35ufWmBjx">
                                                <img src="{{ asset('assets/img/suresh/thumnail/dola.jpg') }}"
                                                    alt="Dola re dola img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://youtu.be/y4jv5bk8ato?si=8YJKEJT35ufWmBjx"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>

                                        </div>
                                        <div class="ms-genres-content p-relative">

                                            <h4 class="ms-genres-title fw-light"><a
                                                    href="https://youtu.be/y4jv5bk8ato?si=8YJKEJT35ufWmBjx">Dola re
                                                    dola</a>
                                            </h4>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="https://youtu.be/_7oTMDqV3ew?si=Q-Q3UtF1lq61vx0v">
                                                <img src="{{ asset('assets/img/suresh/thumnail/chaiya.jpg') }}"
                                                    alt="Chaiya chaiya img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://youtu.be/_7oTMDqV3ew?si=Q-Q3UtF1lq61vx0v"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>

                                        </div>
                                        <div class="ms-genres-content p-relative">

                                            <h4 class="ms-genres-title fw-light"><a
                                                    href="https://youtu.be/_7oTMDqV3ew?si=Q-Q3UtF1lq61vx0v">Chaiya chaiya
                                                </a>
                                            </h4>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide" style="margin-right: 30px;">
                                    <!-- <div class="col-xl-6"> -->
                                    <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="https://youtu.be/Ki4_Fc3XoSk?si=gdBvw7_yewJDJWNE">
                                                <img src="{{ asset('assets/img/suresh/thumnail/vandeMatram.jpg') }}"
                                                    alt="ABCD2 Vande mataram" class="h-100">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://youtu.be/Ki4_Fc3XoSk?si=gdBvw7_yewJDJWNE"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>

                                        </div>
                                        <div class="ms-genres-content p-relative">

                                            <h4 class="ms-genres-title fw-light"><a
                                                    href="https://youtu.be/Ki4_Fc3XoSk?si=gdBvw7_yewJDJWNE">ABCD 2 Vande
                                                    Mataram</a></h4>


                                        </div>
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="swiper-slide" style="margin-right: 30px;">
                                    <!-- <div class="col-xl-6"> -->
                                    <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="https://youtu.be/xutBFUf3LoU?si=Ump5GP3XNSslFF0i">
                                                <img src="{{ asset('assets/img/suresh/thumnail/bejuban.jpg') }}"
                                                    alt="ABCD 2 Bezubaan phir se img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://youtu.be/xutBFUf3LoU?si=Ump5GP3XNSslFF0i"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>

                                        </div>
                                        <div class="ms-genres-content p-relative">

                                            <h4 class="ms-genres-title fw-light"><a
                                                    href="https://youtu.be/xutBFUf3LoU?si=Ump5GP3XNSslFF0i">ABCD 2 Bezubaan
                                                    Phir Se</a></h4>


                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- <div class="col-xl-6"> -->
                                    <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="https://youtu.be/6Z7tW64jpTM?si=W87ilT0WbCQWACVg">
                                                <img src="{{ asset('assets/img/suresh/thumnail/bazigar.jpg') }}"
                                                    alt="bazigar img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://youtu.be/6Z7tW64jpTM?si=W87ilT0WbCQWACVg"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>

                                        </div>
                                        <div class="ms-genres-content p-relative">

                                            <h4 class="ms-genres-title fw-light"><a
                                                    href="https://youtu.be/6Z7tW64jpTM?si=W87ilT0WbCQWACVg">DIVINE -
                                                    Baazigar</a></h4>


                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- <div class="col-xl-6"> -->
                                    <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="https://youtu.be/6KBE8iRTg8Y?si=V1uXe6hzPyUjblnJ">
                                                <img src="{{ asset('assets/img/suresh/thumnail/chakravyuh.jpg') }}"
                                                    alt="Chakravyuh img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://youtu.be/6KBE8iRTg8Y?si=V1uXe6hzPyUjblnJ"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>

                                        </div>
                                        <div class="ms-genres-content p-relative">

                                            <h4 class="ms-genres-title fw-light"><a
                                                    href="https://youtu.be/6KBE8iRTg8Y?si=V1uXe6hzPyUjblnJ">Chakravyuh mein
                                                    - Virat Kohli X DIVINE | PUMA</a></h4>


                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- <div class="col-xl-6"> -->
                                    <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="https://youtu.be/UqBzpg6YMBg?si=xwp31t4z-a8Uo5N9">
                                                <img src="{{ asset('assets/img/suresh/thumnail/worldDp2019.jpg') }}"
                                                    alt="World Dance Performace img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://youtu.be/UqBzpg6YMBg?si=xwp31t4z-a8Uo5N9"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>

                                        </div>
                                        <div class="ms-genres-content p-relative">
                                            <h4 class="ms-genres-title fw-light"><a
                                                    href="https://youtu.be/UqBzpg6YMBg?si=xwp31t4z-a8Uo5N9">World Dance
                                                    Performace 2019</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- <div class="col-xl-6"> -->
                                    <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="https://youtu.be/0bve8unJ7e8?si=C0nw_fbrxPAno3HM">
                                                <img src="{{ asset('assets/img/suresh/thumnail/tattad.jpg') }}"
                                                    alt="The Kings TATTAD img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://youtu.be/0bve8unJ7e8?si=C0nw_fbrxPAno3HM"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>

                                        </div>
                                        <div class="ms-genres-content p-relative">

                                            <h4 class="ms-genres-title fw-light"><a
                                                    href="https://youtu.be/0bve8unJ7e8?si=C0nw_fbrxPAno3HM">The Kings
                                                    TATTAD TATTAD Routine</a>
                                            </h4>

                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- <div class="col-xl-6"> -->
                                    <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="https://youtu.be/0j5Vyo4lGYc?si=HTs03SqnX1aps2c2">
                                                <img src="{{ asset('assets/img/suresh/thumnail/malhari.jpg') }}"
                                                    alt="The Kings Malhari img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://youtu.be/0j5Vyo4lGYc?si=HTs03SqnX1aps2c2"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>

                                        </div>
                                        <div class="ms-genres-content p-relative">

                                            <h4 class="ms-genres-title fw-light"><a
                                                    href="https://youtu.be/0j5Vyo4lGYc?si=HTs03SqnX1aps2c2">The Kings'
                                                    "Malhari" Routine Is INSANE</a>
                                            </h4>


                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- <div class="col-xl-6"> -->
                                    <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="https://youtu.be/E6rd0fy0DUY?si=vT73nKRCJfPt1Cv5">
                                                <img src="{{ asset('assets/img/suresh/thumnail/winningMoment.jpg') }}"
                                                    alt="he Kings Winning Moment img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://youtu.be/E6rd0fy0DUY?si=vT73nKRCJfPt1Cv5"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>

                                        </div>
                                        <div class="ms-genres-content p-relative">

                                            <h4 class="ms-genres-title fw-light"><a
                                                    href="https://youtu.be/E6rd0fy0DUY?si=vT73nKRCJfPt1Cv5">The Kings
                                                    Winning Moment</a>
                                            </h4>


                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- <div class="col-xl-6"> -->
                                    <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="https://youtu.be/zQGaZjJNIMg?si=c56JriWTbD4NYWVR">
                                                <img src="{{ asset('assets/img/suresh/thumnail/final.jpg') }}"
                                                    alt="World of Dance Finals img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://youtu.be/zQGaZjJNIMg?si=c56JriWTbD4NYWVR"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>

                                        </div>
                                        <div class="ms-genres-content p-relative">

                                            <h4 class="ms-genres-title fw-light"><a
                                                    href="https://youtu.be/zQGaZjJNIMg?si=c56JriWTbD4NYWVR">World of Dance
                                                    Finals</a>
                                            </h4>

                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- <div class="col-xl-6"> -->
                                    <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="https://youtu.be/GHdzoot7rfg?si=DM93vqKiutAWesNe">
                                                <img src="{{ asset('assets/img/suresh/thumnail/50cent.jpg') }}"
                                                    alt="50cent img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://youtu.be/GHdzoot7rfg?si=DM93vqKiutAWesNe"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>

                                        </div>
                                        <div class="ms-genres-content p-relative">

                                            <h4 class="ms-genres-title fw-light"><a
                                                    href="https://youtu.be/GHdzoot7rfg?si=DM93vqKiutAWesNe">50 Cent X The
                                                    kings | Live Show Mumbai</a></h4>


                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- <div class="col-xl-6"> -->
                                    <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="https://youtu.be/y4jv5bk8ato?si=8YJKEJT35ufWmBjx">
                                                <img src="{{ asset('assets/img/suresh/thumnail/dola.jpg') }}"
                                                    alt="Dola re dola img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://youtu.be/y4jv5bk8ato?si=8YJKEJT35ufWmBjx"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>

                                        </div>
                                        <div class="ms-genres-content p-relative">

                                            <h4 class="ms-genres-title fw-light"><a
                                                    href="https://youtu.be/y4jv5bk8ato?si=8YJKEJT35ufWmBjx">Dola re
                                                    dola</a>
                                            </h4>

                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- <div class="col-xl-6"> -->
                                    <div class="ms-genres-item ms-genres-flex mb-25 card-bg-black hover-border">
                                        <div class="ms-genres-img ms-br-15 fix w-img genres-img-214">
                                            <a href="https://youtu.be/_7oTMDqV3ew?si=Q-Q3UtF1lq61vx0v">
                                                <img src="{{ asset('assets/img/suresh/thumnail/chaiya.jpg') }}"
                                                    alt="Chaiya chaiya img">
                                            </a>
                                            <a class="popup-video ms-genres-video"
                                                href="https://youtu.be/_7oTMDqV3ew?si=Q-Q3UtF1lq61vx0v"><i
                                                    class="fa-sharp fa-solid fa-play"></i></a>

                                        </div>
                                        <div class="ms-genres-content p-relative">

                                            <h4 class="ms-genres-title fw-light"><a
                                                    href="https://youtu.be/_7oTMDqV3ew?si=Q-Q3UtF1lq61vx0v">Chaiya chaiya
                                                </a>
                                            </h4>

                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- Work Links Area End  -->




        </main>
    </div>
@endsection

@push('style')
    <style>
        /* @import url('https://fonts.googleapis.com/css?family=Signika+Negative:300,400&display=swap'); */

        * {
            box-sizing: border-box;
        }

        html,
        body {
            /* font-family: "Signika Negative", sans-serif; */
            /* font-weight: 300; */
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        #header-sticky {
            background-color: black;
        }

        .scrolling-wrapper {
            display: flex;
            height: 100vh;
            width: max-content;
            background-color: #E4EEF0;
            /* background: linear-gradient(90deg, #de4038 0%, #dea738 100%); */
        }

        /* .scrolling-wrapper .card:first-child,
            .scrolling-wrapper .card:last-child {
                background: linear-gradient(90deg, #de4038 0%, #dea738 100%);
            }

            .scrolling-wrapper .card:nth-of-type(2) {
                background: linear-gradient(90deg, #dea738 0%, #de4038 100%);
            } */

        .card {
            flex: 0 0 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: white;
            border: none;
            border-radius: 0px;
            outline: none;
            background-color: transparent;
            /* background: linear-gradient(90deg, #de4038 0%, #dea738 100%); */
        }

        /* .card:nth-child(1) {
                background-color: royalblue;
            }

            .card:nth-child(2) {
                background-color: tomato;
            }

            .card:nth-child(3) {
                background-color: seagreen;
            }

            .card:nth-child(4) {
                background-color: purple;
            } */


        @media (max-width: 992px) {
            .scrolling-wrapper {
                display: block !important;
                /* Switch to vertical */
                width: 100% !important;
                height: auto !important;
            }

            .card {
                width: 100vw;
                height: auto !important;
                padding: 2rem 1rem;
                display: block !important;
            }
        }

        .scrolling-wrapper .section__title {
            font-size: clamp(24px, 5vw, 35px);
            font-family: 'Ethnocentric';
            color: black;
            /* color: white; */
        }

        .scrolling-wrapper p {
            font-weight: 600;
            color: black;
            /* color: white; */
        }

        .section__title-wrapper p {
            max-width: 100% !important;
        }
    </style>
    <style>
        div.cardfan {
            position: relative;
            width: clamp(250px, 80vw, 450px);
            height: clamp(250px, 60vw, 450px);
            aspect-ratio: 1 / 1;
            margin: 0 auto;
            /* overflow: hidden; */
        }

        div.cardfan img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border: 12px solid #ffe;
            box-shadow: 4px 4px 3px rgba(0, 0, 0, 0.2);
            transform-origin: center 400px;
            transition: all 1s linear;


        }

        @media (min-width: 992px) {


            div.cardfan img:first-child {
                transform: rotate(5deg);
                top: -20px;
                right: -70px;
            }

            /* div.cardfan img:last-child {
                transform: rotate(-5deg);
            } */

            .cardfan img:nth-of-type(2) {
                transform: rotate(-5deg);
                top: -50px;
                left: -24px;
            }

            div.cardfan:hover img:first-child {
                transform: rotate(15deg);

            }

            div.cardfan:hover img:nth-of-type(2) {
                transform: rotate(-15deg);
            }

            img#aqueduct {
                -webkit-filter: grayscale(100%);
                filter: grayscale(100%);
                filter: url(#greyscale);
                filter: gray;
            }

            img#aqueduct:hover {
                -webkit-filter: grayscale(0);
                filter: grayscale(0);
                filter: none;
            }

            img#bike {
                -webkit-filter: sepia(100%);
                filter: sepia(100%);
                filter: url(#sepia);
                background-color: #5E2612;
                filter: alpha(opacity=50);
            }

            img#bike:hover {
                -webkit-filter: sepia(0);
                filter: sepia(0);
                filter: alpha(opacity=100);
                filter: none;
            }

            img#roma {
                -webkit-filter: blur(3px);
                filter: blur(3px);
                filter: url(#blur);
            }

            img#roma:hover {
                -webkit-filter: blur(0px);
                filter: blur(0px);
                filter: none;
            }
        }

        @media (max-width: 992px) {
            div.cardfan img:first-child {
                display: none;
            }

            div.cardfan img:last-child {
                display: block;
            }

            .cardfan img:nth-of-type(2) {
                display: none;
            }

        }
    </style>
    <style>
        .swiper {
            width: 100%;
            height: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            /* background: #333; */
            /* height: calc((100% - 30px) / 2) !important; */

            /* Center slide text vertically */
            display: flex;
            justify-content: center;
            align-items: center;
            /* margin-right: 30px !important; */

        }

        .card-bg-black {
            margin: 0px !important;
        }
    </style>
@endpush

@push('js')
    <script>
        gsap.registerPlugin(ScrollTrigger);

        function initHorizontalScroll() {
            const sections = gsap.utils.toArray(".card");

            ScrollTrigger.matchMedia({
                // Only apply horizontal scroll on larger screens
                "(min-width: 993px)": function() {
                    gsap.to(sections, {
                        xPercent: -100 * (sections.length - 1),
                        ease: "none",
                        scrollTrigger: {
                            trigger: ".scrolling-wrapper",
                            pin: true,
                            scrub: 1,
                            snap: 1 / (sections.length - 1),
                            end: () => "+=" + document.querySelector(".scrolling-wrapper").offsetWidth,
                            invalidateOnRefresh: true,
                            anticipatePin: 1,
                        }
                    });
                }
            });
        }

        initHorizontalScroll();

        window.addEventListener("resize", () => {
            ScrollTrigger.refresh();
        });

        // gsap.registerPlugin(ScrollTrigger);

        // const sections = gsap.utils.toArray(".card");

        // gsap.to(sections, {
        //     xPercent: -100 * (sections.length - 1),
        //     ease: "none",
        //     scrollTrigger: {
        //         trigger: ".scrolling-wrapper",
        //         pin: true,
        //         scrub: 1,
        //         snap: 1 / (sections.length - 1),
        //         end: () => "+=" + document.querySelector(".scrolling-wrapper").offsetWidth,
        //         invalidateOnRefresh: true,
        //         anticipatePin: 1,
        //     }
        // });

        // // Handle resizing (mobile/tablet)
        // window.addEventListener("resize", () => {
        //     ScrollTrigger.refresh();
        // });
    </script>
    <script>
        gsap.registerPlugin(ScrollTrigger);

        // Pin the intro text section
        ScrollTrigger.create({
            trigger: ".intro-wrapper",
            start: "top top",
            end: "bottom top",
            pin: ".text-align-center",
            pinSpacing: false
        });

        // Handling the scroll for the tabs
        document.addEventListener("scroll", function() {
            let scrollPosition = window.scrollY;
            let windowHeight = window.innerHeight +
                550; // +550 = increasing the scroll distance before each class changes
            let sections = document.querySelectorAll('.tabs_let-content');
            let videos = document.querySelectorAll('.tabs_video');
            let lastSectionIndex = sections.length - 1;

            sections.forEach((section, index) => {
                if (scrollPosition >= (index * windowHeight) && scrollPosition < ((index + 1) *
                        windowHeight)) {
                    section.classList.add('is-1');
                    videos[index].classList.add('is-1');
                } else {
                    // Remove is-1 class from all sections except the last one
                    if (index !== lastSectionIndex) {
                        section.classList.remove('is-1');
                        videos[index].classList.remove('is-1');
                    }
                }
            });

            // Keep is-1 class on the last section until user scrolls past it
            if (scrollPosition > (lastSectionIndex * windowHeight)) {
                sections[lastSectionIndex].classList.add('is-1');
                videos[lastSectionIndex].classList.add('is-1');
            } else {
                sections[lastSectionIndex].classList.remove('is-1');
                videos[lastSectionIndex].classList.remove('is-1');
            }
        });
    </script>


    <script>
        new Swiper(".mySwiper", {
            autoplay: {
                delay: 2500,
                disableOnInteraction: false
            },
            slidesPerView: 1,
            navigation: {
                nextEl: ".mySwiper .swiper-button-next",
                prevEl: ".mySwiper .swiper-button-prev",
            },
            slidesPerView: 1,
            grid: {
                rows: 1,
                fill: 'row'
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                    grid: {
                        rows: 2,
                    },
                },
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 50,
                    grid: {
                        rows: 2,
                    },
                },
                1400: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                    grid: {
                        rows: 2,
                    },
                },
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
@endpush
