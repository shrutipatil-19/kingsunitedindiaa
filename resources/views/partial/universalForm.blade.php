 <!-- Contact Area Start Here  -->

 <section class="ms-contact-area pb-60 pt-130 ms-bg-2">

     <div class="container ">
         <div class="row justify-content-center mb-25 bdFadeUp">
             <div class="col-xl-8">
                 <div class="ms-event2-top text-center">
                     <div class="section__title-wrapper mb-40 bd-title-anim">
                         <span class="section__subtitle">Book Now</span>
                         <h2 class="section__title">Book Us for events <span class="animated-underline active">
                             </span>
                         </h2>
                     </div>
                 </div>
             </div>
         </div>
         <div class="contact" id="container">
             <div class="row">
                 <!-- coruse form -->
                 <div class="form-container sign-up col-md-6 col-12">
                     <form method="post" action="{{ route('courseEnquiry') }}">
                         @csrf
                         <div class="ms-cta-content d-flex flex-column">
                             <h2 class="text-center section__title two text-black">Explore dance courses</h2>
                         </div>
                         <div class="row transparent-bg mt-4">
                             <div class="col-md-6">
                                 <div class="ms-input2-box">
                                     <label class="text-white" for="name">Enter Name</label>
                                     <input name="name" type="text" placeholder="Name" required>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="ms-input2-box">
                                     <label class="text-white" for="phone">Enter Phone</label>
                                     <input name="phone" type="text" placeholder="Phone" required>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="ms-input2-box">
                                     <label class="text-white" for="email">Enter Email</label>
                                     <input name="email" type="email" placeholder="Email" required>
                                 </div>
                             </div>

                             <div class="col-lg-6">
                                 <div class="ms-input2-box">
                                     <label class="text-white" for="course">Select Course</label>
                                     <!-- <label>Select Course</label> -->
                                     <select class="form-select" name="course">
                                         <option value="" disabled>Select Course</option>
                                         <option value="Diploma In Street Style">Diploma In Street Style</option>
                                         <option value="Choreo Lab">Choreo Lab</option>
                                         <option value="Dream 2 Dance">Dream 2 Dance</option>
                                     </select>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="ms-input2-box">
                                     <label class="text-white" for="date">Expected Date of Join</label>
                                     <input name="date" type="date" class="form-control">
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
                 <!-- enquiry form -->
                 <div class="form-container sign-in col-md-6 col-12">

                     <form method="POST" action="{{ route('enquiry') }}">
                         @csrf
                         <div class="ms-cta-content d-flex flex-column">
                             <h2 class="text-center section__title two text-black">Contact us for any events</h2>
                         </div>
                         <div class="row transparent-bg mt-4">
                             <div class="col-md-6">
                                 <div class="ms-input2-box">
                                     <label for="name" class="text-white">Name</label>
                                     <input type="text" name="name" placeholder="Name">
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="ms-input2-box ">
                                     <label for="email" class="text-white">Email</label>
                                     <input type="email" name="email" placeholder="Email">
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="ms-input2-box">
                                     <label for="phone" class="text-white">Phone</label>
                                     <input type="phone" name="phone" placeholder="Phone">
                                 </div>
                             </div>

                             <div class="col-md-6">
                                 <div class="ms-input2-box">
                                     <label class="text-white" for="service">Choose our Services</label>
                                     <select name="service" class="form-select" required>
                                         <option value="Choose" disabled>Choose Service</option>
                                         <option value="Book Us for Event">Book us for Event</option>
                                         <option value="Enroll Course">Enroll For Dance Course</option>
                                         <option value="book creator space">Book our creator space</option>
                                     </select>
                                 </div>
                             </div>
                             <!-- <div class="col-md-6">
                                 <div class="ms-input2-box">
                                     <label class="text-white" for="service">Service</label>

                                     <select class="form-select" id="multiple-select-field" data-placeholder="Choose Service" name="service[]" multiple required>
                                         <option value="Choose" disabled>Choose Service</option>
                                         <option value="Book Us for Event">Book us for Event</option>
                                         <option value="Enroll Course">Enroll For Dance Course</option>
                                         <option value="book creator space">Book our creator space</option>
                                     </select>

                                 </div>
                             </div> -->

                             <!-- <div class="col-md-12">
                                 <div class="ms-input2-box mb-30">
                                     <label class="text-white" for="message">Message</label>
                                     <textarea cols="10" rows="5" name="message"
                                         placeholder="Write Message . . ." class="mt-2"></textarea>
                                 </div>
                             </div> -->
                             <!-- <div class="trending-btn d-flex justify-content-center">
                                 <a class="border__btn zindex-5" href="#">Enquire Now</a>
                             </div> -->
                             <div class="trending-btn d-flex justify-content-center">
                                 <button type="submit" class="border__btn zindex-5">Enquire Now</button>
                             </div>
                         </div>

                     </form>
                 </div>



                 <div class="col-md-6 col-12">
                     <div class="toggle-container">
                         <div class="toggle">
                             <div class="toggle-panel toggle-left">
                                 <div class="ms-cta-content d-flex flex-column">
                                     <h2 class="text-center section__title two custome-font-size">Ready to Dance? Reserve Your Studio — Fill the Form!</h2>
                                 </div>
                                 <p>Unlock the perfect space for your next rehearsal, class, or performance! Our studio offers a professional, comfortable environment for dancers of all styles and levels. Complete the form below to secure your preferred time slot and take your dance practice to the next level. Don’t wait — your ideal dance space is just a click away!</p>
                                 <button class="hidden" id="login">Book Studio</button>
                             </div>
                             <div class="toggle-panel toggle-right">
                                 <div class="ms-cta-content d-flex flex-column">
                                     <h2 class="text-center section__title two custome-font-size">Ready to Dance? Claim Your Spot — Fill the Form!</h2>
                                 </div>
                                 <p>
                                     Step into a world of rhythm and excitement! Whether you’re a passionate dance lover or just looking for an unforgettable show, this event is your ticket to incredible performances and vibrant energy. Simply complete the form below to secure your place — don’t miss your chance to witness the moves, the music, and the magic live!
                                 </p>
                                 <button class="hidden" id="register">Book Us Live</button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Contact Area End Here  -->

 @push('style')
 <style>
     .transparent-bg {
         background-color: black;
         /* opacity: 0.7; */
         padding: 30px 20px;
         border-radius: 15px;
     }

     .custome-font-size {
         font-size: 30px !important;
     }

     .contact {
         background-color: #fff;
         border-radius: 30px;
         box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
         position: relative;
         overflow: hidden;

         min-height: 500px;
     }

     .contact p {
         font-size: 14px;
         line-height: 20px;
         letter-spacing: 0.3px;
         margin: 20px 0;
         color: white;
     }

     .contact span {
         font-size: 12px;
     }


     .contact button {
         background-color: #2da0a8;
         color: #fff;
         font-size: 12px;
         padding: 10px 45px;
         border: 1px solid transparent;
         font-weight: 600;
         letter-spacing: 0.5px;
         text-transform: uppercase;
         margin-top: 10px;
         cursor: pointer;
     }

     .contact button.hidden {
         background-color: transparent;
         border-color: #fff;
     }

     .contact form {
         background-color: #fff;
         display: flex;
         align-items: center;
         justify-content: center;
         flex-direction: column;
         padding: 0 40px;
         height: 100%;
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

     .form-container {
         position: absolute;
         top: 0;
         height: 100%;
         transition: all 0.6s ease-in-out;
     }

     .sign-in {
         left: 0;

         z-index: 2;
     }

     .contact.active .sign-in {
         transform: translateX(100%);
     }

     .sign-up {
         left: 0;

         opacity: 0;
         z-index: 1;
     }

     .contact.active .sign-up {
         transform: translateX(100%);
         opacity: 1;
         z-index: 5;
         animation: move 0.6s;
     }

     @keyframes move {

         0%,
         49.99% {
             opacity: 0;
             z-index: 1;
         }

         50%,
         100% {
             opacity: 1;
             z-index: 5;
         }
     }

     .social-icons {
         margin: 20px 0;
     }

     .social-icons a {
         border: 1px solid #ccc;
         border-radius: 20%;
         display: inline-flex;
         justify-content: center;
         align-items: center;
         margin: 0 3px;
         width: 40px;
         height: 40px;
     }

     .toggle-container {
         position: absolute;
         top: 0;
         left: 50%;
         width: 50%;
         height: 100%;
         overflow: hidden;
         transition: all 0.6s ease-in-out;
         border-radius: 150px 0 0 100px;
         z-index: 1;
     }

     .contact.active .toggle-container {
         transform: translateX(-100%);
         border-radius: 0 150px 100px 0;
     }

     .toggle {
         background-color: #2da0a8;
         height: 100%;
         background: linear-gradient(90deg, #de4038 0%, #dea738 100%);
         color: #fff;
         position: relative;
         left: -100%;
         height: 100%;
         width: 200%;
         transform: translateX(0);
         transition: all 0.6s ease-in-out;
     }

     .contact.active .toggle {
         transform: translateX(50%);
     }

     .toggle-panel {
         position: absolute;
         width: 50%;
         height: 100%;
         display: flex;
         align-items: center;
         justify-content: center;
         flex-direction: column;
         padding: 0 30px;
         text-align: center;
         top: 0;
         transform: translateX(0);
         transition: all 0.6s ease-in-out;
     }

     .toggle-left {
         transform: translateX(-200%);
     }

     .contact.active .toggle-left {
         transform: translateX(0);
     }

     .toggle-right {
         right: 0;
         transform: translateX(0);
     }

     .contact.active .toggle-right {
         transform: translateX(200%);
     }

     @media (max-width: 991px) {
         .contact {
             border-radius: 15px;
             min-height: auto;
             overflow: visible;
             padding: 20px 10px;
         }

         .form-container,
         .toggle-container {
             position: static;
             width: 100%;
             height: auto;
             transform: none !important;
             opacity: 1 !important;
             z-index: auto !important;
             animation: none !important;
         }

         .contact .toggle {
             display: none;
         }

         .contact form {
             padding: 20px;
         }

         .contact input,
         .contact select {
             font-size: 14px;
             height: 45px;
         }

         .custome-font-size {
             font-size: 22px;
         }
     }

     @media (max-width: 576px) {

         .contact input,
         .contact select {
             font-size: 12px;
             height: 40px;
         }

         .custome-font-size {
             font-size: 18px;
         }

         .transparent-bg {
             padding: 20px 10px;
         }

         .contact button {
             padding: 8px 30px;
             font-size: 10px;
         }

         .contact .sign-up {
             display: none;
         }
     }
 </style>
 @endpush
 @push('js')
 <script>
     $('#multiple-select-field').select2({
         theme: "bootstrap-5",
         width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
         placeholder: $(this).data('placeholder'),
         closeOnSelect: false,
     });
 </script>
 <!-- toggle Start -->
 <script>
     const container = document.getElementById("container");
     const registerBtn = document.getElementById("register");
     const loginBtn = document.getElementById("login");

     registerBtn.addEventListener("click", () => {
         container.classList.add("active");
     });

     loginBtn.addEventListener("click", () => {
         container.classList.remove("active");
     });
 </script>

 <!-- toggle end -->
 @endpush