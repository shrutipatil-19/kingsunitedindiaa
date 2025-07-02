@extends('layout.app')

@section('content')

<div class="ms-all-content ms-all-content-space">
    <main>
        <!-- page title area start  -->
        <section class="page-title-area page-title-spacing p-relative zindex-1 "
            data-background="{{ asset('assets/img/bg/work-bg.jpg') }}">
            <div class="ms-overlay ms-overlay9 p-absolute zindex--1"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <h3 class="ms-page-title text-center">Contact us</h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end  -->

        <section class="ms-contact-area pb-60 pt-130">
            <div class="container">
                <div class="ms-contact-map-grid">

                    <div class="p-4 ms-bg-6 custome-radius">
                        <div class="ms-contact-flag mb-5">
                            <img src="{{ asset('assets/img/contact/flag-02.jpg') }}" alt="flag image">
                        </div>
                        <h3 class="ms-title3 white-text mb-40">Kings Dance Studio</h3>
                        <div class="ms-contact-map-content ms-footer2-contact border-0">
                            <ul>
                                <li><i class="flaticon-pin"></i><a href="#">Shah industrial estate, Ghanshyam Industrial Estate, Plot No.1, Off Link Rd, near SUPREME CHAMBERS, Industrial Area, Andheri West, Mumbai, Maharashtra 400047</a></li>

                            </ul>
                        </div>
                    </div>

                    <div class="ms-bg-6 p-4 custome-radius">
                        <div class="ms-contact-flag mb-5">
                            <img src="{{ asset('assets/img/contact/flag-02.jpg') }}" alt="flag image">
                        </div>

                        <h3 class="ms-title3 white-text mb-40">For Shows and Events</h3>
                        <div class="ms-contact-map-content ms-footer2-contact border-0">
                            <ul>
                                <li><i class="flaticon-phone-call"></i><a href="tel:+919166664556">91 9166664556</a></li>
                                <li><i class="flaticon-phone-call"></i><a href="tel:+91 7276539771">+91 7276539771</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="ms-bg-6 p-4 custome-radius">
                        <div class="ms-contact-flag mb-5">
                            <img src="{{ asset('assets/img/contact/flag-03.jpg') }}" alt="flag image">
                        </div>

                        <h3 class="ms-title3 white-text mb-40">Email Address</h3>
                        <div class="ms-contact-map-content ms-footer2-contact border-0">
                            <ul>
                                <li><i class="flaticon-mail"></i><a
                                        href="mailto:info@kingsunitedindia.com">info@kingsunitedindia.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- Contact Area Start Here  -->
        <section class="ms-contact-area pb-60 pt-130 ms-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="ms-contact-wrap ms-contact-space mb-70 ms-bg-2 bg-black">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="ms-input2-box mb-30">
                                            <label class="text-white" for="name">Name</label>
                                            <input type="text" name="name" placeholder="Name" class="mt-2">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ms-input2-box mb-30">
                                            <label class="text-white" for="email">Email</label>
                                            <input type="email" name="email" placeholder="Email" class="mt-2">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ms-input2-box mb-30">
                                            <label class="text-white" for="phone">Phone</label>
                                            <input type="text" name="phone" placeholder="Phone Number" class="mt-2">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ms-input2-box mb-30">
                                            <label class="text-white" for="service">Choose our Services</label>
                                            <select name="service" class="form-select mt-2" required >
                                                <option value="Choose">Choose Service</option>
                                                <option value="Book Us for Event">Book us for Event</option>
                                                <option value="Enroll Course">Enroll For Dance Course</option>
                                                <option value="book creator space">Book our creator space</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="ms-input2-box mb-30">
                                            <label class="text-white" for="message">Message</label>
                                            <textarea cols="30" rows="10" name="message"
                                                placeholder="Write Message . . ." class="mt-2"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">

                                        <div class="trending-btn d-flex justify-content-center">
                                            <button type="submit" class="border__btn zindex-5">Enquire Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="ms-contact-img-wrap mb-70 d-inline-block p-relative">
                            <div class="ms-contact-img m-img ms-br-15 fix p-relative zindex-1">
                                <div class="ms-overlay ms-overlay11"></div>
                                <img src="{{ asset('assets/img/news/news-07.jpg') }}" alt="banner image">
                            </div>
                            <div class="ms-contact-content text-center">
                                <div class="ms-round-icon mx-auto mb-20">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <h3 class="ms-title3 ms-text2 mb-15">Emergency Call</h3>
                                <h2 class="ms-title5 white-text"><a href="tel:+919166664556">+91 9166664556</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Area End Here  -->


        <!-- Contact Map Area Start Here  -->
        <section class="ms-contact-map-area">
            <div class="ms-contact-img w-img">
                <img class="mh-200" src="{{ asset('assets/img/bg/contact-bg.jpg') }}" alt="contact bg">
            </div>
        </section>
        <!-- Contact Map Area End Here  -->

        @include('partial.client')

    </main>
</div>
@endsection

@push('style')
<style>
    .ms-input2-box input,
    .ms-input2-box textarea {
        border-radius: 15px;
    }

    .ms-input2-box select {
        width: 100%;
        background: var(--clr-bg-4);
        border: 1px solid var(--clr-border-3);
        border-radius: 32.5px;
        height: 65px;
        color: var(--clr-text-8);
        padding: 0 30px;
        -webkit-transition: all 0.3s ease-out 0s;
        -moz-transition: all 0.3s ease-out 0s;
        -ms-transition: all 0.3s ease-out 0s;
        -o-transition: all 0.3s ease-out 0s;
        transition: all 0.3s ease-out 0s;
        resize: none;
        border-radius: 15px;
    }
</style>
@endpush