     <!-- Offcanvas area start -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <div class="fix">
         <div class="offcanvas__info">
             <div class="offcanvas__wrapper">
                 <div class="offcanvas__content">
                     <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                         <div class="offcanvas__logo">
                             <a href="{{ route('home') }}">
                                 <img src="{{ asset('assets/img/kings img/kings_logo.png') }}" alt="logo">
                             </a>
                         </div>
                         <div class="offcanvas__close">
                             <button>
                                 <i class="fal fa-times"></i>
                             </button>
                         </div>
                     </div>
                     {{-- <div class="offcanvas__user mb-30 d-xxl-none">
                         <div class="user__acount">
                             <span>
                                 <a href="javascript:void(0)"><i class="flaticon-user"></i></a>
                             </span>
                             <div class="user__name-mail">
                                 <h4 class="user__name"><a href="javascript:void(0)">Johnson</a></h4>
                                 <p class="user__mail">johnson@webmail.com</p>
                             </div>
                         </div>
                     </div> --}}
                     <div class="hr-1 mt-30 mb-30"></div>
                     <div class="mobile-menu fix mb-30"></div>
                     <div class="hr-1 mt-30 mb-30"></div>
                     {{-- <div class="offcanvas__btn mb-30">
                         <a class="ms-border-btn" href="services.html"><i class="fa-solid fa-plus"></i> List Your
                             Service</a>
                     </div> --}}
                     <div class="offcanvas__social">
                         <div class="ms-footer-social mb-0">
                            <a href="https://www.facebook.com/kingsunitedofficial?mibextid=LQQJ4d" title="Facebook" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                            <a href="https://www.instagram.com/kings_united_india?igsh=MWVyMjY1enVoZnEwaA==" title="Instagram" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://youtube.com/@kingsunitedindiaofficial5626?si=CT2vkO_2sjU4FwiU" title="Youtube" target="_blank"><i class="fa-brands fa-youtube"></i></a>    
                             <a href="#" title="Pinterest" target="_blank"><i class="fa-brands fa-square-pinterest"></i></i></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Header area start -->
     <header>
         <div id="header-sticky" class="header__area header-1 ms-header-fixed ms-bg-body">
             <div class="container-fluid ms-maw-1710">
                 <div class="row align-items-center">
                     <div class="col-12">
                         <div class="mega__menu-wrapper p-relative">
                             <div class="header__main d-flex align-items-center justify-content-around">
                                 <div class="header__logo pt-10 pb-10" style="width: 100px;">
                                     <a href="{{ route('home') }}">
                                         <img src="{{ asset('assets/img/kings img/kings_logo.png') }}" alt="logo not found" class="w-100">
                                     </a>
                                 </div>
                                 <div class="d-none d-xxl-block">
                                     <div class="browse-filter p-relative ms-browse-act-wrap">
                                         <div class="ms-browse-act-item-wrap p-absolute">
                                             <div class="ms-song-item">
                                                 <div class="ms-song-img p-relative">
                                                     <a href="genres.html"><img src="{{ asset('assets/img/genres/genres-01.jpg') }}"
                                                             alt="brand-song"></a>
                                                 </div>
                                                 <div class="ms-song-content">
                                                     <h3 class="ms-song-title"><a href="genres.html">The Different
                                                             Lights</a>
                                                     </h3>
                                                 </div>
                                             </div>
                                             <div class="ms-song-item">
                                                 <div class="ms-song-img p-relative">
                                                     <a href="genres.html"><img src="{{ asset('assets/img/genres/genres-02.jpg') }}"
                                                             alt="brand-song"></a>
                                                 </div>
                                                 <div class="ms-song-content">
                                                     <h3 class="ms-song-title"><a href="genres.html">The Sweet
                                                             lockdown</a>
                                                     </h3>
                                                 </div>
                                             </div>
                                             <div class="ms-song-item">
                                                 <div class="ms-song-img p-relative">
                                                     <a href="genres.html"><img src="{{ asset('assets/img/genres/genres-03.jpg') }}"
                                                             alt="brand-song"></a>
                                                 </div>
                                                 <div class="ms-song-content">
                                                     <h3 class="ms-song-title"><a href="genres.html">The Sonics
                                                             Corporate
                                                             Band</a>
                                                     </h3>
                                                 </div>
                                             </div>
                                             <div class="ms-song-item">
                                                 <div class="ms-song-img p-relative">
                                                     <a href="genres.html"><img src="{{ asset('assets/img/genres/genres-04.jpg') }}"
                                                             alt="brand-song"></a>
                                                 </div>
                                                 <div class="ms-song-content">
                                                     <h3 class="ms-song-title"><a href="genres.html">The
                                                             Northern
                                                             Lights</a>
                                                     </h3>
                                                 </div>
                                             </div>
                                             <div class="ms-song-item">
                                                 <div class="ms-song-img p-relative">
                                                     <a href="genres.html"><img src="{{ asset('assets/img/genres/genres-05.jpg') }}"
                                                             alt="brand-song"></a>
                                                 </div>
                                                 <div class="ms-song-content">
                                                     <h3 class="ms-song-title"><a href="genres.html">The Sweet The
                                                             Jets</a>
                                                     </h3>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="header__right">
                                     <div class="mean__menu-wrapper">
                                         <div class="main-menu main-menu-ff-space">
                                             <nav id="mobile-menu">
                                                 <ul>
                                                     <li>
                                                         <a href="{{ route('home') }}">Home</a>
                                                         <!-- <ul class="submenu">
                                                            <li><a href="index.html">Home Style 01</a></li>
                                                            <li><a href="index-2.html">Home Style 02</a></li>
                                                            <li><a href="index-3.html">Home Style 03</a></li>
                                                            <li class="has-dropdown">
                                                                <a href="javascript:void(0)">RTL Demos</a>
                                                                <ul class="submenu">
                                                                    <li><a href="index-rtl.html">Home Style 01 RTL</a>
                                                                    </li>
                                                                    <li><a href="index-2-rtl.html">Home Style 02 RTL</a>
                                                                    </li>
                                                                    <li><a href="index-3-rtl.html">Home Style 03 RTL</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul> -->
                                                     </li>
                                                     <li>
                                                         <a href="{{ route('about') }}">About us</a>
                                                     </li>
                                                     <li class="has-dropdown">
                                                         <a href="#">Kings Dance Studio</a>
                                                         <ul class="submenu">
                                                             <li class="has-dropdown">
                                                                 <a href="javascript:void(0)">Courses</a>
                                                                 <ul class="submenu">
                                                                     <li><a href="#">Kings Golden Pass - One Year Unlimited</a>
                                                                     </li>
                                                                     <li><a href="#">Professional Training Courses</a>
                                                                     </li>
                                                                     <li><a href="#">Intensive Training Courses</a>
                                                                     </li>
                                                                     <li><a href="#">Regular Classes</a>
                                                                     </li>
                                                                     <li><a href="#">Personal/Reality show Training</a>
                                                                     </li>
                                                                 </ul>
                                                             </li>
                                                             <li><a href="{{ route('creatorSpace') }}">Creator Space</a></li>
                                                             <li><a href="{{ route('theKings') }}">Kings Crew</a></li>

                                                         </ul>
                                                     </li>
                                                     <!-- <li class="has-dropdown has-mega-menu">
                                                        <a href="javascript:void(0)">Pages</a>
                                                        <ul class="mega-menu">
                                                            <li>
                                                                <a href="javasript:void(0);"
                                                                    class="mega-menu-title">Page
                                                                    Layout
                                                                    1</a>
                                                                <ul>
                                                                    <li><a href="index.html">Home Style 01</a></li>
                                                                    <li><a href="index-2.html">Home Style 02</a></li>
                                                                    <li><a href="index-3.html">Home Style 03</a></li>
                                                                    <li><a href="index-rtl.html">Home Style 01 RTL</a>
                                                                    </li>
                                                                    <li><a href="index-2-rtl.html">Home Style 02 RTL</a>
                                                                    </li>
                                                                    <li><a href="index-3-rtl.html">Home Style 03 RTL</a>
                                                                    </li>
                                                                    <li><a href="about.html">About</a></li>

                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javasript:void(0);"
                                                                    class="mega-menu-title">Page
                                                                    Layout
                                                                    2</a>
                                                                <ul>
                                                                    <li><a href="genres.html">genres</a></li>
                                                                    <li><a href="genres-details.html">genres details</a>
                                                                    </li>
                                                                    <li><a href="team.html">Team</a></li>
                                                                    <li><a href="team-details.html">team details</a>
                                                                    </li>
                                                                    <li><a href="enquiry-list.html">enquiry list</a>
                                                                    </li>
                                                                    <li><a href="work-system.html">how it works</a></li>
                                                                    <li><a href="faq.html">FAQ</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javasript:void(0);"
                                                                    class="mega-menu-title">Page
                                                                    Layout
                                                                    3</a>
                                                                <ul>
                                                                    <li><a href="event.html">event</a></li>
                                                                    <li><a href="event-details.html">event details</a>
                                                                    </li>
                                                                    <li><a href="ideas-advice.html">ideas advice</a>
                                                                    </li>
                                                                    <li><a href="ideas-advice-details.html">ideas advice
                                                                            details</a></li>
                                                                    <li><a href="news.html">blog</a></li>
                                                                    <li><a href="news-details.html">blog details</a>
                                                                    </li>
                                                                    <li><a href="join.html">Join Us</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javasript:void(0);"
                                                                    class="mega-menu-title">Page
                                                                    Layout
                                                                    4</a>
                                                                <ul>
                                                                    <li><a href="shop.html">Shop</a></li>
                                                                    <li><a href="shop-details.html">Shop
                                                                            Details</a></li>
                                                                    <li><a href="cart.html">cart</a></li>
                                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                                    <li><a href="login.html">Login</a></li>
                                                                    <li><a href="signup.html">Register</a></li>
                                                                    <li><a href="contact.html">contact</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li> -->
                                                     <li class="has-dropdown">
                                                         <a href="#">Book Us Live</a>
                                                         <ul class="submenu">
                                                             <li><a href="#">Book Us For Live Event</a></li>

                                                         </ul>
                                                     </li>
                                                     <li>
                                                         <a href="#">Contact Us</a>
                                                     </li>
                                                 </ul>
                                             </nav>
                                             <!-- for wp -->
                                             <div class="header__hamburger ml-50 d-none">
                                                 <button type="button" class="hamburger-btn offcanvas-open-btn">
                                                     <span>01</span>
                                                     <span>01</span>
                                                     <span>01</span>
                                                 </button>
                                             </div>
                                         </div>
                                     </div>
                                     <!-- <div class="header__action-inner d-flex align-items-center">
                                        <div class="enquiry__list ml-10 mr-10 ms-browse-act-wrap p-relative">
                                            <div class="ms-enquiry-box p-relative d-none d-xl-inline-flex">
                                                <a href="#"><i class="flaticon-star icon"></i> <span class="text">My
                                                        enquiry list</span> <span class="number">03</span></a>
                                            </div>
                                            <div class="ms-browse-act-item-wrap p-absolute">
                                                <div class="ms-song-item">
                                                    <div class="ms-song-img p-relative">
                                                        <a href="genres.html"><img src="{{ asset('assets/img/genres/genres-03.jpg') }}"
                                                                alt="brand-song"></a>
                                                    </div>
                                                    <div class="ms-song-content">
                                                        <h3 class="ms-song-title"><a href="genres.html">The
                                                                Sonics
                                                                Corporate
                                                                Band</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="ms-song-item">
                                                    <div class="ms-song-img p-relative">
                                                        <a href="genres.html"><img src="{{ asset('assets/img/genres/genres-04.jpg') }}"
                                                                alt="brand-song"></a>
                                                    </div>
                                                    <div class="ms-song-content">
                                                        <h3 class="ms-song-title"><a href="genres.html">The
                                                                Northern
                                                                Lights</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="ms-song-item">
                                                    <div class="ms-song-img p-relative">
                                                        <a href="genres.html"><img src="{{ asset('assets/img/genres/genres-05.jpg') }}"
                                                                alt="brand-song"></a>
                                                    </div>
                                                    <div class="ms-song-content">
                                                        <h3 class="ms-song-title"><a href="genres.html">The
                                                                Sweet
                                                                The
                                                                Jets</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="header__btn">
                                            <a href="join.html" class="ms-border-btn"><i
                                                    class="fa-regular fa-plus"></i>List
                                                Your Service</a>
                                        </div>
                                        <div class="user__acount d-none d-xxl-inline-flex">
                                            <span>
                                                <a href="login.html"><i class="flaticon-user"></i></a>
                                            </span>
                                        </div>
                                    </div> -->
                                     <div class="header__hamburger">
                                         <div class="sidebar__toggle">
                                             <a class="bar-icon" href="javascript:void(0)">
                                                 <span></span>
                                                 <span></span>
                                                 <span></span>
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </header>
     <!-- Header area end -->