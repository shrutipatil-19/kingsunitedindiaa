  <!-- Trending area start -->
  <section class="trending__area p-relative z-index-11 pt-130 pb-60">

      <div class="container">
          <div class="row align-items-end mb-25 bdFadeUp">
              <div class="col-lg-8">
                  <div class="section__title-wrapper mb-40 bd-title-anim d-flex flex-column  align-items-lg-start align-items-center">
                      <span class="section__subtitle ">Creator space</span>

                      <h2 class="section__title text-lg-left">Creator <span class="animated-underline active">Space</span></h2>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="trending-btn mb-40 d-flex justify-content-lg-end justify-content-center">
                      <a class="border__btn" href="{{ route('creatorSpace') }}">View All</a>
                  </div>
              </div>
          </div>
          <!-- Swiper -->
          <div class="swiper achievementSwiper pt-5 ms-trending3-wrap bdFadeUp">
              <div class="swiper-wrapper pt-4">
                  <!-- Slide 1 -->
                  <div class="swiper-slide ms-trending3-item p-relative fix mb-40">
                      <div class="ms-trending3-img w-img ms-br-15 p-relative fix mb-30" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                          <a href="{{ route('studio.book.form', ['studio' => 'studio-1']) }}">
                              <img src="{{ asset('assets/img/studio/studio1.jpg') }}" alt="Studio 1 Image">
                          </a>
                          <!-- availability -->
                          <div class="ms-availability-badge bg-success text-white p-1 rounded position-absolute top-0 end-0 m-2">
                              Available
                          </div>
                      </div>
                      <div class="ms-trending3-content">
                          <h3 class="ms-trending3-title mb-15">
                              <a href="{{ route('studio.book.form', ['studio' => 'studio-1']) }}">STUDIO 1 - 100 SQ.FT</a>
                          </h3>
                          <p class="ms-trending3-text mb-10">
                              Perfect for small dance groups and video shoots.
                          </p>
                          <ul class="list-inline mb-15 small">
                              <li class="list-inline-item"><i class="fa-solid fa-music"></i> Sound System</li>
                              <li class="list-inline-item"><i class="fa-solid fa-snowflake"></i> AC</li>
                              <li class="list-inline-item"><i class="fa-solid fa-mirror"></i> Mirrors</li>
                          </ul>
                          <div class="d-flex justify-content-between align-items-start">
                              <p class="fw-bold mb-1 text-white">
                                  ₹1500/Hour
                                  <!-- <del class="text-muted ms-2">₹1,00000</del> -->
                              </p>

                              <div class="trending-btn mb-40 d-flex justify-content-lg-end">
                                  <a class="border__btn" href="{{ route('studio.book.form', ['studio' => 'studio-1']) }}">Book Now</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Slide 2 -->
                  <div class="swiper-slide ms-trending3-item p-relative fix mb-40">
                      <div class="ms-trending3-img w-img ms-br-15 p-relative fix mb-30" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                          <a href="{{ route('studio.book.form', ['studio' => 'studio-2']) }}">
                              <img src="{{ asset('assets/img/studio/studio1.jpg') }}" alt="Studio 1 Image">
                          </a>

                      </div>
                      <div class="ms-trending3-content">
                          <h3 class="ms-trending3-title mb-15">
                              <a href="{{ route('studio.book.form', ['studio' => 'studio-1']) }}">STUDIO 2 - 750 SQ.FT</a>
                          </h3>
                          <p class="ms-trending3-text mb-10">
                              Perfect for small dance groups and video shoots.
                          </p>
                          <ul class="list-inline mb-15 small">
                              <li class="list-inline-item"><i class="fa-solid fa-music"></i> Sound System</li>
                              <li class="list-inline-item"><i class="fa-solid fa-snowflake"></i> AC</li>
                              <li class="list-inline-item"><i class="fa-solid fa-mirror"></i> Mirrors</li>
                          </ul>
                          <div class="d-flex justify-content-between align-items-start">
                              <p class="fw-bold mb-1 text-white">
                                  ₹1500/Hour
                                  <!-- <del class="text-muted ms-2">₹1,00000</del> -->
                              </p>

                              <div class="trending-btn mb-40 d-flex justify-content-lg-end">
                                  <a class="border__btn" href="{{ route('studio.book.form', ['studio' => 'studio-2']) }}">Book Now</a>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="swiper-slide ms-trending3-item p-relative fix mb-40">
                      <div class="ms-trending3-img w-img ms-br-15 p-relative fix mb-30" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                          <a href="{{ route('studio.book.form', ['studio' => 'studio-3']) }}">
                              <img src="{{ asset('assets/img/studio/studio1.jpg') }}" alt="Studio 1 Image">
                          </a>

                      </div>
                      <div class="ms-trending3-content">
                          <h3 class="ms-trending3-title mb-15">
                              <a href="{{ route('studio.book.form', ['studio' => 'studio-3']) }}">STUDIO 3A- 650 SQ.FT</a>
                          </h3>
                          <p class="ms-trending3-text mb-10">
                              Perfect for small dance groups and video shoots.
                          </p>
                          <ul class="list-inline mb-15 small">
                              <li class="list-inline-item"><i class="fa-solid fa-music"></i> Sound System</li>
                              <li class="list-inline-item"><i class="fa-solid fa-snowflake"></i> AC</li>
                              <li class="list-inline-item"><i class="fa-solid fa-mirror"></i> Mirrors</li>
                          </ul>
                          <div class="d-flex justify-content-between align-items-start">
                              <p class="fw-bold mb-1 text-white">
                                  ₹2,000/Hour
                                  <!-- <del class="text-muted ms-2">₹1,00000</del> -->
                              </p>

                              <div class="trending-btn mb-40 d-flex justify-content-lg-end">
                                  <a class="border__btn" href="{{ route('studio.book.form', ['studio' => 'studio-2']) }}">Book Now</a>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="swiper-slide ms-trending3-item p-relative fix mb-40">
                      <div class="ms-trending3-img w-img ms-br-15 p-relative fix mb-30" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                          <a href="{{ route('studio.book.form', ['studio' => 'studio-3']) }}">
                              <img src="{{ asset('assets/img/studio/studio1.jpg') }}" alt="Studio 1 Image">
                          </a>

                      </div>
                      <div class="ms-trending3-content">
                          <h3 class="ms-trending3-title mb-15">
                              <a href="{{ route('studio.book.form', ['studio' => 'studio-4']) }}">STUDIO 3B- 650 SQ.FT</a>
                          </h3>
                          <p class="ms-trending3-text mb-10">
                              Perfect for small dance groups and video shoots.
                          </p>
                          <ul class="list-inline mb-15 small">
                              <li class="list-inline-item"><i class="fa-solid fa-music"></i> Sound System</li>
                              <li class="list-inline-item"><i class="fa-solid fa-snowflake"></i> AC</li>
                              <li class="list-inline-item"><i class="fa-solid fa-mirror"></i> Mirrors</li>
                          </ul>
                          <div class="d-flex justify-content-between align-items-start">
                              <p class="fw-bold mb-1 text-white">
                                  ₹2,000/Hour
                                  <!-- <del class="text-muted ms-2">₹1,00000</del> -->
                              </p>

                              <div class="trending-btn mb-40 d-flex justify-content-lg-end">
                                  <a class="border__btn" href="{{ route('studio.book.form', ['studio' => 'studio-4']) }}">Book Now</a>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="swiper-slide ms-trending3-item p-relative fix mb-40">
                      <div class="ms-trending3-img w-img ms-br-15 p-relative fix mb-30" data-aos="fade-up" data-aos-delay="500" data-aos-duration="800">
                          <a href="{{ route('studio.book.form', ['studio' => 'studio-3']) }}">
                              <img src="{{ asset('assets/img/studio/studio1.jpg') }}" alt="Studio 1 Image">
                          </a>

                      </div>
                      <div class="ms-trending3-content">
                          <h3 class="ms-trending3-title mb-15">
                              <a href="{{ route('studio.book.form', ['studio' => 'studio-5']) }}">STUDIO 3 FULL</a>
                          </h3>
                          <p class="ms-trending3-text mb-10">
                              Perfect for small dance groups and video shoots.
                          </p>
                          <ul class="list-inline mb-15 small">
                              <li class="list-inline-item"><i class="fa-solid fa-music"></i> Sound System</li>
                              <li class="list-inline-item"><i class="fa-solid fa-snowflake"></i> AC</li>
                              <li class="list-inline-item"><i class="fa-solid fa-mirror"></i> Mirrors</li>
                          </ul>
                          <div class="d-flex justify-content-between align-items-start">
                              <p class="fw-bold mb-1 text-white">
                                  ₹4,000/Hour
                                  <!-- <del class="text-muted ms-2">₹1,00000</del> -->
                              </p>

                              <div class="trending-btn mb-40 d-flex justify-content-lg-end">
                                  <a class="border__btn" href="{{ route('studio.book.form', ['studio' => 'studio-5']) }}">Book Now</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Navigation -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
          </div>

      </div>
  </section>
  <!-- Trending area start -->

  @push('style')

  <style>
      .ms-trending3-content {
          padding-inline-end: 15px;
          padding-inline-start: 15px;
      }

      .pt-5 {
          padding-top: 2rem !important;
      }
  </style>

  @endpush