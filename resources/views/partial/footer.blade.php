   <!-- Footer Area Start Here  -->
   <style>
    .fa{
        filter: brightness(3.5);
    }
   </style>
   <footer>
       <div class="ms-footer-bg ms-footer-overlay zindex-1 include__bg pt-20" data-background="">
           <div class="ms-footer-top pt-20">
               <div class="container">
                   <div class="ms-footer-border pb-10">
                       <div class="row">
                           <div class="col-xxl-3 col-lg-3 col-md-6 col-12 text-center">
                               <div class="ms-footer-widget mb-20">
                                   <a href="{{ route('home') }}">
                                       <img src="{{ asset('assets/img/kings img/kings_logo.png') }}" alt="logo"
                                           class="w-75">
                                   </a>
                               </div>
                           </div>
                           <div class="col-xxl-3 col-lg-3 col-md-6 col-4">
                               <div class="ms-footer-widget mb-50">
                                   <h3 class="ms-footer-title">Quick links</h3>
                                   <ul>
                                       <li><a href="{{ route('about') }}">The legacy</a></li>
                                       <li><a href="{{ route('theKings') }}">Kings Crew</a></li>
                                       <li><a href="{{ route('sureshMukund') }}">Suresh Mukund</a></li>
                                       <li><a href="{{ route('events') }}">Events</a></li>
                                       <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                   </ul>
                               </div>
                           </div>
                           <div class="col-xxl-3 col-lg-3 col-md-6 col-8">
                               <div class="ms-footer-widget mb-50">
                                   <h3 class="ms-footer-title">Creator Space</h3>
                                   <ul>
                                       <li><a href="{{ route('studio.book.form', ['studio' => 'studio-1']) }}">Studio 1</a></li>
                                       <li><a href="{{ route('studio.book.form', ['studio' => 'studio-2']) }}">Studio 2</a></li>
                                       <li><a href="{{ route('studio.book.form', ['studio' => 'studio-3']) }}">Studio 3A</a></li>
                                       <li><a href="{{ route('studio.book.form', ['studio' => 'studio-4']) }}">Studio 3B</a></li>
                                       <li><a href="{{ route('studio.book.form', ['studio' => 'studio-5']) }}">Studio 3 Full</a></li>
                                   </ul>
                               </div>
                           </div>
                           <div class="col-xxl-3 col-lg-3 col-md-6 col-12">
                               <div class="ms-footer-widget mb-50">
                                   <h3 class="ms-footer-title">Contact</h3>
                                   <ul>
                                    <li><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;<a href="mailto:info@kingsunitedindia.com">info@kingsunitedindia.com</a></li>
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;<a href="#">Shah industrial estate, Ghanshyam Industrial Estate, Plot No.1, Off Link Rd, near SUPREME CHAMBERS, Industrial Area, Andheri West, Mumbai, Maharashtra 400047</a></li>
                                    <li><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<a href="tel:7276539771">7276539771</a></li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="ms-footer-bottom">
               <div class="container">
                   <div class="ms-footer-bottom-wrap align-items-center d-flex flex-wrap justify-content-between pt-10 pb-10">
                       <div class="ms-footer-copy">
                           <p>© Kings United 2025, All Rights Reserved</p>
                       </div>
                       <!-- HTML -->
                        {{-- <div class="counter-number">1024</div>
                        <script>
                            // JavaScript
                                    $(".counter-number").counterUp({
                                        delay: 10,
                                        time: 1000,
                                    });
                        </script> --}}
                       <div class="ms-footer-social mb-0">
                        <p>Follow Us On :- </p>
                        <a href="https://www.facebook.com/kingsunitedofficial?mibextid=LQQJ4d" title="Facebook" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                        <a href="https://www.instagram.com/kings_united_india?igsh=MWVyMjY1enVoZnEwaA==" title="Instagram" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://youtube.com/@kingsunitedindiaofficial5626?si=CT2vkO_2sjU4FwiU" title="Youtube" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                        {{-- <a href="#" title="Pinterest" target="_blank"><i class="fa-brands fa-square-pinterest"></i></i></a> --}}
                    </div>
                   </div>
               </div>
           </div>
       </div>
   </footer>
   
   <!-- Footer Area End Here  -->
