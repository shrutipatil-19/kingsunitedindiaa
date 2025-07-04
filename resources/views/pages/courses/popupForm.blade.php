 <!-- Join Area Start Here  -->
 <section class="ms-join-area pb-60 pt-130 p-relative ms-bg-2">
     <div class="ms-join-position p-absolute text-center">
         <h2 class="ms-title2 white-text mb-50">Join With us</h2>
         <div class="ms-banner3-item-wrap ms-join-img-grid">

             <div class="ms-banner3-item d-none d-md-block">
                 <div class="ms-banner3-img2 m-img p-relative">
                     <img src="{{ asset('assets/img/course/bg.png') }}" alt="banner image">
                 </div>
             </div>

         </div>
     </div>
     <div class="container" id="popupform">
         <div class="row">
             <div class="col-xl-12">
                 <div class="ms-join-wrap ms-join-space mb-70 ms-bg-2">
                     <!-- <h3 class="white-text ms-title3 mb-60">Join with us</h3> -->
                     <form>
                         <div class="row">
                             <div class="col-lg-6">
                                 <div class="ms-input-box style-2">
                                     <label>First Name</label>
                                     <input type="text" placeholder="Enter First Name">
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="ms-input-box style-2">
                                     <label>Contact Number</label>
                                     <input type="text" placeholder="Enter Contact Number">
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="ms-input-box style-2">
                                     <label>Email</label>
                                     <input type="text" placeholder="Enter Email Id">
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="ms-input-box style-2">
                                     <label>Select Course</label>
                                     <select class="ms-nice-select">
                                         <option>Diploma In Street Style</option>
                                         <option>Choreo Lab</option>
                                         <option>Dream 2 Dance</option>
                                     </select>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="ms-input-box style-2">
                                     <label>Expected Date of Join</label>
                                     <input type="date" placeholder="Haiden">
                                 </div>
                             </div>


                             <div class="col-lg-12">
                                 <div class="ms-submit-btn mt-70">
                                     <button class="unfill__btn" type="submit">Join</button>
                                 </div>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Join Area End Here  -->


 @push('style')
 <style>
     .ms-input-box input, .ms-input-box select, .ms-input-box .nice-select {

         border-radius: 12px;
     }
 </style>
 @endpush

