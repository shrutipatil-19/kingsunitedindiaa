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
                                <h2 class="ms-title2 white-text mb-30 bd-title-anim">EVENTS
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner Area End Here  -->

        <!-- News Area Start Here  -->
        <section class="ms-news-area pb-40 pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-8">
                        <div class="ms-news-sidebar mb-70">
                            <div class="ms-news-widget ms-dot-none">
                                <h3 class="ms-news-widget-title">Entertainment</h3>
                                <ul>
                                    <li><a href="#">Corporate Events
                                        </a>
                                    <li><a href="#">Wedding Events</a>
                                    <li><a href="#">Birthdays Events</a>
                                    <li><a href="#">Any entertainment</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="ms-news-widget ms-dot-none">
                                <h3 class="ms-news-widget-title">Community Events</h3>
                                <ul>
                                    <li><a href="#">Concerts</a></li>
                                    <li><a href="#">Festivals</a></li>
                                    <li><a href="#">Halftime Shows</a></li>
                                    <li><a href="#">Music Videos</a></li>
                                    <li><a href="#">School Programs</a></li>

                                </ul>
                            </div>
                            <div class="ms-news-widget ms-dot-none">
                                <h3 class="ms-news-widget-title">Sporting Events ideas</h3>
                                <ul>
                                    <li><a href="#">Sporting Events</a></li>
                                    <li><a href="#">world series party</a></li>

                                    <li><a href="#">grand opening</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-12">
                        <div class="ms-ideas-item-wrap mb-70">
                            <div class="ms-ideas-item-grid mb-65">
                                <div class="ms-ideas-item">
                                    <div class="ms-ideas-img w-img ms-br-15 mb-20">
                                        <a href="ideas-advice-details.html">
                                            <img src="{{ asset('assets/img/advice/adivce-01.jpg') }}" alt="ideas advice image">
                                        </a>
                                    </div>
                                    <h3 class="ms-title3 white-text text-center"><a href="#">
                                            Corporate Events</a></h3>
                                </div>
                                <div class="ms-ideas-item">
                                    <div class="ms-ideas-img w-img ms-br-15 mb-20">
                                        <a href="#">
                                            <img src="{{ asset('assets/img/advice/adivce-02.jpg') }}" alt="ideas advice image">
                                        </a>
                                    </div>
                                    <h3 class="ms-title3 white-text text-center"><a href="#">
                                            Wedding Events</a></h3>
                                </div>
                                <div class="ms-ideas-item">
                                    <div class="ms-ideas-img w-img ms-br-15 mb-20">
                                        <a href="#">
                                            <img src="{{ asset('assets/img/advice/adivce-03.jpg') }}" alt="ideas advice image">
                                        </a>
                                    </div>
                                    <h3 class="ms-title3 white-text text-center"><a href="#">
                                            Birthday Events</a></h3>
                                </div>
                                <div class="ms-ideas-item">
                                    <div class="ms-ideas-img w-img ms-br-15 mb-20">
                                        <a href="#">
                                            <img src="{{ asset('assets/img/advice/adivce-04.jpg') }}" alt="ideas advice image">
                                        </a>
                                    </div>
                                    <h3 class="ms-title3 white-text text-center"><a href="#">Reflecting
                                            Concerts</a></h3>
                                </div>
                                <div class="ms-ideas-item">
                                    <div class="ms-ideas-img w-img ms-br-15 mb-20">
                                        <a href="#">
                                            <img src="{{ asset('assets/img/advice/adivce-05.jpg') }}" alt="ideas advice image">
                                        </a>
                                    </div>
                                    <h3 class="ms-title3 white-text text-center"><a href="#">School Programs</a></h3>
                                </div>
                                <div class="ms-ideas-item">
                                    <div class="ms-ideas-img w-img ms-br-15 mb-20">
                                        <a href="#">
                                            <img src="{{ asset('assets/img/advice/adivce-06.jpg') }}" alt="ideas advice image">
                                        </a>
                                    </div>
                                    <h3 class="ms-title3 white-text text-center"><a href="#">Festivals</a></h3>
                                </div>
                            </div>
                            <div class="basic-pagination ms-border5">
                                <nav>
                                    <ul class="justify-content-start">
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-long-arrow-left"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">01</a>
                                        </li>
                                        <li>
                                            <span class="current">02</span>
                                        </li>
                                        <li>
                                            <a href="#">03</a>
                                        </li>
                                        <li>
                                            <a href="#">...</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-long-arrow-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- News Area End Here  -->

    </main>
</div>
@endsection

@push('style')
<style>
    .ms-ideas-item-grid {
        gap: 30px 24px;
    }
</style>
@endpush