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
                             {{-- justify-content-md-around --}}
                             <div class="header__main d-flex align-items-center justify-content-between justify-content-md-center">
                                 <div class="header__logo pt-10 pb-10 d-block d-md-none" style="width: 100px;">
                                     <a href="{{ route('home') }}">
                                         <img src="{{ asset('assets/img/kings img/kings_logo.png') }}" alt="logo not found" class="w-100">
                                     </a>
                                 </div>
                                 <div class="d-none d-xxl-block">
                                     <div class="browse-filter p-relative ms-browse-act-wrap">
                                         <div class="ms-browse-act-item-wrap p-absolute">
                                             <div class="ms-song-item">
                                                 <div class="ms-song-img p-relative">
                                                     <a href="#"><img src="{{ asset('assets/img/genres/genres-01.jpg') }}"
                                                             alt="brand-song"></a>
                                                 </div>
                                                 <div class="ms-song-content">
                                                     <h3 class="ms-song-title"><a href="#">The Different
                                                             Lights</a>
                                                     </h3>
                                                 </div>
                                             </div>
                                             <div class="ms-song-item">
                                                 <div class="ms-song-img p-relative">
                                                     <a href="#"><img src="{{ asset('assets/img/genres/genres-02.jpg') }}"
                                                             alt="brand-song"></a>
                                                 </div>
                                                 <div class="ms-song-content">
                                                     <h3 class="ms-song-title"><a href="#">The Sweet
                                                             lockdown</a>
                                                     </h3>
                                                 </div>
                                             </div>
                                             <div class="ms-song-item">
                                                 <div class="ms-song-img p-relative">
                                                     <a href="#"><img src="{{ asset('assets/img/genres/genres-03.jpg') }}"
                                                             alt="brand-song"></a>
                                                 </div>
                                                 <div class="ms-song-content">
                                                     <h3 class="ms-song-title"><a href="#">The Sonics
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
                                                     <!-- <li>
                                                         <a href="{{ route('about') }}">The legacy</a>
                                                     </li> -->
                                                     <li class="">
                                                         <a href="{{ route('about') }}">The legacy</a>
                                                         <ul class="submenu d-none">
                                                             <li class="">
                                                                 <a href="{{ route('sureshMukund') }}">Suresh Mukund</a>
                                                             </li>
                                                             <li class="">
                                                                 <a href="{{ route('theKings') }}">The Kings</a>
                                                             </li>

                                                         </ul>
                                                     </li>
                                                     <li class="has-dropdown d-none">
                                                         <a href="{{ route('course') }}">Courses</a>
                                                         <ul class="submenu">
                                                             <li class="">
                                                                 <a href="{{ route('diploma') }}">Diploma In Street Style</a>
                                                             </li>
                                                             <li class="">
                                                                 <a href="{{ route('choreoLab') }}">Choreo Lab</a>
                                                             </li>
                                                             <li class="">
                                                                 <a href="{{ route('D2D') }}">Dream 2 Dance</a>
                                                             </li>
                                                         </ul>
                                                     </li>
                                                     <!-- <li>
                                                        <a href="{{ route('sureshMukund') }}">Suresh Mukund</a>
                                                    </li> -->
                                                     <li class="p-0">
                                                         <div class="header__logo d-none d-md-block" style="width: 140px;">
                                                             <a href="{{ route('home') }}" class="p-0">
                                                                 <img src="{{ asset('assets/img/kings img/kings_logo.png') }}" alt="logo not found" class="w-100">
                                                             </a>
                                                         </div>
                                                     </li>
                                                     <li class="has-dropdown d-none">
                                                         <a href="{{ route('creatorSpace') }}">Creator Space</a>
                                                         <ul class="submenu">
                                                             <li class="">
                                                                 <a href="{{ route('studio.book.form', ['studio' => 'studio-1']) }}">Studio 1</a>
                                                             </li>
                                                             <li class="">
                                                                 <a href="{{ route('studio.book.form', ['studio' => 'studio-2']) }}">Studio 2</a>
                                                             </li>
                                                             <li class="">
                                                                 <a href="{{ route('studio.book.form', ['studio' => 'studio-3']) }}">Studio 3A</a>
                                                             </li>
                                                             <li class="">
                                                                 <a href="{{ route('studio.book.form', ['studio' => 'studio-4']) }}">Studio 3B</a>
                                                             </li>
                                                             <li class="">
                                                                 <a href="{{ route('studio.book.form', ['studio' => 'studio-5']) }}">Studio 3 Full</a>
                                                             </li>
                                                         </ul>
                                                     </li>
                                                     <!-- <li><a href="{{ route('theKings') }}">Kings Crew</a></li> -->

                                                     <li class="has-dropdown">
                                                         <a href="#">The Kings</a>
                                                         <ul class="submenu">
                                                             <li class="has-dropdown">
                                                                 <a href="javascript:void(0)">Kings Service</a>
                                                                 <ul class="submenu">
                                                                     <li><a href="#">Live Performance</a>
                                                                     </li>
                                                                     <li><a href="#">Coreography For Corporate</a>
                                                                     </li>
                                                                     <li><a href="#">Wedding</a>
                                                                     </li>
                                                                     <li><a href="#">Music/Videos</a>
                                                                     </li>
                                                                     <li><a href="#">Live Performance/Concerts</a>
                                                                     </li> 
                                                                     <li><a href="#">Feature Films</a>
                                                                     </li> 
                                                                     <li><a href="#">Artist Coreography</a>
                                                                     </li> 
                                                                 </ul>
                                                             </li>
                                                             <li class="has-dropdown">
                                                                 <a href="">Kings Dance</a>
                                                                 <ul class="submenu">
                                                                     <li><a href="{{ route('course') }}">Courses</a>
                                                                     </li>
                                                                     <li><a href="{{ route('creatorSpace')}}">Creator Space</a>
                                                                     </li>
                                                                     <li><a href="{{ route('studio.book.form', ['studio' => 'studio-3']) }}">Personal Traning</a>
                                                                     </li>
                                                                     <li><a href="{{ route('studio.book.form', ['studio' => 'studio-4']) }}">Workshop Tours</a>
                                                                     </li>
                                                                     {{-- <li><a href="{{ route('studio.book.form', ['studio' => 'studio-5']) }}">Studio 3 Full</a>
                                                                     </li> --}}
                                                                 </ul>
                                                             </li>
                                                             <li><a href="{{ route('theKings') }}">Kings Production</a></li>

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
                                                     <!-- <li class="has-dropdown">
                                                         <a href="{{ route('events') }}">Events</a>
                                                         <ul class="submenu">
                                                             <li><a href="{{ route('events') }}">Book Us For Live Event</a></li>

                                                         </ul>
                                                     </li> -->
                                                     <li class="d-none">
                                                         <a href="{{ route('events') }}">Events</a>
                                                     </li>
                                                     <li>
                                                         <a href="{{ route('contact') }}">Contact Us</a>
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

     <div class="book_appointment_holder bg-yellow" bis_skin_checked="1">
         <div class="appointment_text trending-btn" bis_skin_checked="1">
             <a class="zindex-5" data-bs-toggle="modal" data-bs-target="#bookModal" href="#" target="_blank" style="border-radius: 20px;">
                 <img src="{{ asset('assets/img/icon/conversation.png') }}" alt="" srcset="" class="w-100">
             </a>
         </div>
     </div>
     <!-- Modal -->
     <div class="modal fade" id="bookModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content ms-bg-2">
                 <!-- <div class="modal-header">
                     <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div> -->
                 <div class="modal-body">
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     @include('partial.popupForm')
                 </div>

             </div>
         </div>
     </div>
     <style>
         .btn-close {
             top: 10px;
             right: 10px;
             position: absolute;
             z-index: 10;
             filter: invert(1);
         }

         .book_appointment_holder {
             position: fixed;
             bottom: 2%;
             right: 8px;
             color: #ffffff;
             /* display: flex */
             ;
             cursor: pointer;
             /* transition: right 0.3s ease-in-out; */
             padding: 10px;
             /* transform: rotate(270deg) translateY(106px); */
             z-index: 1000;
             /* font-size: 18px; */
             border-radius: 50%;
             width: 70px;
             height: 70px;
             display: flex;
             justify-content: center;
             align-items: center;
         }

         .bg-yellow {
             background-color: #dea738;
         }
     </style>

     <script>
         $(document).ready(function() {
             var lastScrollTop = 0; // Stores the previous scroll position
             var header = $('#header-sticky'); // Get your header element
             var headerHeight = header.outerHeight(); // Get the header's height, including padding/border

             // Add a class to the header initially for smooth transitions
             header.addClass('scroll-transition');

             $(window).scroll(function() {
                 var currentScroll = $(this).scrollTop(); // Get current scroll position

                 // Only act if scrolling has passed the header height (to avoid flicker at top)
                 if (currentScroll > headerHeight) {
                     // Scrolling Down
                     if (currentScroll > lastScrollTop) {
                         header.addClass('header-hidden');
                     }
                     // Scrolling Up
                     else {
                         header.removeClass('header-hidden');
                     }
                 } else {
                     // At or near the top of the page, always show header
                     header.removeClass('header-hidden');
                 }

                 lastScrollTop = currentScroll; // Update last scroll position
             });
         });
     </script>
     <style>
         /* Ensure the header is fixed at the top */
         #header-sticky {
             position: fixed;
             top: 0;
             left: 0;
             width: 100%;
             z-index: 1000;
             /* Ensure it's above other content */
         }

         /* Add transition for smooth hiding/showing */
         .scroll-transition {
             transition: transform 0.3s ease-in-out;
             /* Smooth slide effect */
         }

         /* Class to hide the header */
         .header-hidden {
             transform: translateY(-100%);
             /* Moves the header completely up and out of view */
         }
     </style>

     <style>
         .ms-input-box input,
         .ms-input-box select,
         .ms-input-box .nice-select {
             border-radius: 12px;
         }

         .ms-input-box input {
             background: white;
             color: black;
         }

         .ms-input-box select {

             border: 1px solid #292929;
             border-radius: 32.5px;
             height: 65px;
             display: block;
             width: 100%;
             color: black;
             padding: 0 30px;
             border-radius: 10px;
         }

         input.error,
         select.error {
             border: 1px solid red !important;
         }

         .ms-input-box.style-2 label {
             margin-bottom: 6px !important;
             color: white;
         }

         label.error {
             color: red;
             font-size: 0.85rem;
             margin-top: 5px;
             display: block;
         }

         .ms-join-space {
             padding: 20px !important;
             margin-top: 60px !important;
         }

         /* .section__title {
             font-size: 24px !important;
         } */
     </style>