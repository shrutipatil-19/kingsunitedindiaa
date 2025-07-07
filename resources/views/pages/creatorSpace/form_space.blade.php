 <section class="ms-contact-area pb-60 pt-130 ms-bg-2">
     <div class="container">
         <div class="row justify-content-center mb-25 bdFadeUp">
             <div class="col-xl-12">
                 <div class="ms-event2-top text-center">
                     <div class="section__title-wrapper mb-40 bd-title-anim">
                         <span class="section__subtitle">Book Now</span>
                         <h2 class="section__title">Book Us for rental space <span class="animated-underline active">
                             </span>
                         </h2>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="form-container sign-in col-md-8 col-12">
                 <form method="POST" action="{{ route('studio.book', ['studio' => $studio]) }}" id="rentalForm" class="contact">
                     @csrf
                     <div class="ms-cta-content d-flex flex-column">
                         <h2 class="text-center section__title two text-black">Book Now - Studio</h2>
                     </div>
                     <div class="row transparent-bg mt-4">
                         <div class="col-md-6">
                             <div class="ms-input2-box">
                                 <label>Enter Name</label>
                                 <input name="name" type="text" placeholder="Name" required>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="ms-input2-box">
                                 <label>Enter Email</label>
                                 <input name="email" type="email" placeholder="Email" required>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="ms-input2-box">
                                 <label>Enter Phone</label>
                                 <input name="phone" type="text" placeholder="Phone" required>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="ms-input2-box">
                                 <label for="studio">Studio</label>
                                 <select name="studio" class="form-select" required>
                                     @foreach($studios as $s)
                                     <option value="{{ $s }}" {{ $s === $studio ? 'selected' : '' }}>
                                         {{ ucfirst($s) }}
                                     </option>
                                     @endforeach
                                 </select>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="ms-input2-box">
                                 <label for="date">Date</label>
                                 <input name="date" type="date" class="form-control" required>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="ms-input2-box">
                                 <label class="text-white" for="time">Time</label>
                                 <select name="time" class="form-select" required>
                                     <option>Select Time</option>
                                 </select>
                             </div>
                         </div>
                         <div class="col-12 mt-3">
                             <div class="trending-btn d-flex justify-content-center">
                                 <button type="submit" class="border__btn zindex-5">Enquire Now</button>
                             </div>
                             <!-- <div class="trending-btn d-flex justify-content-center">
                                 <a class="border__btn zindex-5" href="#">Enquire Now</a>
                             </div> -->
                         </div>
                     </div>
                 </form>
             </div>

             <div class="col-md-4 col-12">
                 <div class="text-section toggle d-flex flex-column justify-content-center" id="textSection">

                     <h2 class="mb-3 text-center ms-event-title" id="dynamicHead">Ready to Flex Your Space?</h2>
                     <p id="dynamicPara" class="text-center text-white">Book your vibe. Own your moment</p>
                 </div>
             </div>
         </div>

     </div>
 </section>
 @push('style')
 <style>
     .ms-event-title {
         background: linear-gradient(90deg, #de4038 0%, #dea738 100%);
         -webkit-background-clip: text;
         -webkit-text-fill-color: transparent;
         background-clip: text;
         font-size: 2rem;
         text-shadow: 0 0 10px rgba(222, 64, 56, 0.4);

     }

     .toggle {
         background-color: #2da0a8;
         height: 100%;
         width: 100%;
         background: linear-gradient(90deg, #de4038 0%, #dea738 100%);
         color: #fff;
         border-radius: 12px;
         transform: translateX(0);
         transition: all 0.6s ease-in-out;
         padding: 40px;
     }

     .contact {
         background: white;
         padding: 30px;
         border-radius: 12px;
     }

     .contact input,
     .contact select {
         background-color: #eee;
         border: none;
         margin: 2px 0 10px 0px;
         font-size: 13px;
         border-radius: 15px;
         width: 100%;
         outline: none;
         height: 50px;
         color: black;
         padding: 0 30px;
     }

     /* Animation */
     .typing::after {
         content: "|";
         animation: blink 1s infinite;
     }

     @keyframes blink {

         0%,
         50% {
             opacity: 1;
         }

         51%,
         100% {
             opacity: 0;
         }
     }

     #textSection {
         position: relative;
         background-size: cover;
         background-position: center;
         overflow: hidden;
         /* ensures pseudo stays inside */
     }

     #textSection::before {
         content: "";
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background-color: rgba(0, 0, 0, 0.4);
         /* semi-transparent black */
         z-index: 1;
     }

     #textSection>* {
         position: relative;
         z-index: 2;
     }
 </style>
 @endpush
 @push('js')
 <!-- time slot Start -->
 <script>
     $(document).ready(function() {
         function loadTimes() {
             var selectedDate = $('input[name="date"]').val();
             var selectedStudio = $('select[name="studio"]').val();

             if (selectedDate && selectedStudio) {
                 $.ajax({
                     url: '{{ url("creator-space/$studio/available-times") }}',
                     data: {
                         date: selectedDate,
                         studio: selectedStudio
                     },
                     success: function(response) {
                         var timeSelect = $('select[name="time"]');
                         timeSelect.empty();
                         timeSelect.append('<option>Select Time</option>');
                         $.each(response, function(i, slot) {
                             timeSelect.append('<option value="' + slot + '">' + slot + '</option>');
                         });
                     },
                     error: function(err) {
                         console.log(err);
                         alert("Error loading available times");
                     }
                 });
             }
         }

         $('input[name="date"], select[name="studio"]').on('change', loadTimes);
     });
 </script>
 <!-- time slot end -->
 <script>
     document.addEventListener("DOMContentLoaded", () => {
         const form = document.getElementById("rentalForm");
         const head = document.getElementById("dynamicHead");
         const para = document.getElementById("dynamicPara");
         const textSection = document.getElementById("textSection");

         function typeWriter(element, text, speed = 50) {
             let i = 0;
             element.classList.add("typing");
             element.textContent = "";

             function typing() {
                 if (i < text.length) {
                     element.textContent += text.charAt(i);
                     i++;
                     setTimeout(typing, speed);
                 } else {
                     element.classList.remove("typing");
                 }
             }
             typing();
         }

         // initial
         typeWriter(head, "Ready to Flex Your Space?", 70);
         typeWriter(para, "Book your vibe. Own your moment.", 40);
         textSection.style.backgroundImage = "url('{{ asset('assets/img/course/bg.png') }}')";

         form.addEventListener("focusin", () => {
             typeWriter(head, "Big Moves!", 70);
             typeWriter(para, "Lock in the place before someone else steals your spotlight.", 30);
             textSection.style.backgroundImage = "url('{{ asset('assets/img/course/bg2.png') }}')";
         });

         form.addEventListener("focusout", () => {
             typeWriter(head, "Hey, Don’t Ghost!", 70);
             typeWriter(para, "You’re this close to booking your dream spot — don’t sleep on it.", 30);
             textSection.style.backgroundImage = "url('{{ asset('assets/img/kings img/tranding-bg.png') }}')";
         });

         form.addEventListener("submit", (e) => {
             // if you want to actually submit, do NOT preventDefault
             typeWriter(head, "You Did That!", 70);
             typeWriter(para, "Thanks for trusting us with your next big moment. We’ll be in touch!", 30);
             textSection.style.backgroundImage = "url('{{ asset('assets/img/course/bg.png') }}')";
             // allow submit
         });
     });
 </script>
 @endpush