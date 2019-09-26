@extends('layouts.master')

@section('content')


    <!-- Heroslider Area -->
    <div class="heroslider-area">
        <!-- Heroslider Slider -->
        <div class="heroslider-slider-2 heroslider-animated-content tm-slider-arrow tm-slider-dots-left">

            @foreach ($sliders as $slider)
                <div class="heroslider-singleslider d-flex align-items-center"  data-bgimage="{{ Voyager::image($slider->image) }}">
                    <div class="container">
                        <div class="row @if($slider->position == 'text-center') justify-content-center @endif">
                            <div class="col-lg-7 col-md-8">
                                <div class="heroslider-content {{ $slider->position }}">
                                    <h1>{{ $slider->title }}</h1>

                                    <p>{{ $slider->sub_title }}</p>
                                   {!!  $slider->link !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
        <!--// Heroslider Slider -->
    </div>
    <!--// Heroslider Area -->

    <!-- Main Content -->
    <main class="main-content">

        <!-- About Us Area -->
        <div class="tm-section about-us-area bg-white tm-padding-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-image2">
                            <img style="height:600px" class="wow fadeInLeft" src="{{ Voyager::image(setting('extra.ceo_pics')) }}" alt="Elisha Chadwell">
                            <p>{{ setting('extra.founder') }}</p>
                        </div>
                    </div>

                   {!! setting('site.intro') !!}
                </div>
            </div>
        </div>
        <!--// About Us Area -->

        <!-- Features Area -->
        <div class="tm-section features-area bg-grey tm-padding-section">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-9 col-lg-12">
                        <div class="features-slider-active tm-slider-dots tm-slider-dots-vertical">

                            <div class="features-slider-row">

                                <!-- Single Feature -->
                                <div class="tm-feature text-center">
                                        <span class="tm-feature-icon">
                                            <i class="fas fa-hospital"></i>
                                        </span>
                                    <h5>Maternal Care</h5>
                                    <p>We engage in Maternal Infant and Reproductive Health Care.</p>
                                </div>
                                <!--// Single Feature -->

                                <!-- Single Feature -->
                                <div class="tm-feature text-center">
                                        <span class="tm-feature-icon">
                                            <i class="fas fa-first-aid"></i>
                                        </span>
                                    <h5>Infectious Diseases</h5>
                                    <p>Diseases such as Hepatitis B,C, HIV/AIDS and TB are covered.</p>
                                </div>
                                <!--// Single Feature -->

                                <!-- Single Feature -->
                                <div class="tm-feature text-center">
                                        <span class="tm-feature-icon">
                                            <i class="fas fa-building"></i>
                                        </span>
                                    <h5>Preventive Care</h5>
                                    <p>Proper Hygiene and Sanitation ensure good living.</p>
                                </div>
                                <!--// Single Feature -->
                            </div>

                            <div class="features-slider-row">

                                <!-- Single Feature -->
                                <div class="tm-feature text-center">
                                        <span class="tm-feature-icon">
                                            <i class="fas fa-users"></i>
                                        </span>
                                    <h5>Family Planning</h5>
                                    <p>Good family planning and trainings.</p>
                                </div>
                                <!--// Single Feature -->

                                <!-- Single Feature -->
                                <div class="tm-feature text-center">
                                        <span class="tm-feature-icon">
                                            <i class="fas fa-school"></i>
                                        </span>
                                    <h5>Professional Training</h5>
                                    <p>Health Sensitization and Workshop for Liberians.</p>
                                </div>
                                <!--// Single Feature -->

                                <!-- Single Feature -->
                                <div class="tm-feature text-center">
                                        <span class="tm-feature-icon">
                                            <i class="fas fa-dollar-sign"></i>
                                        </span>
                                    <h5>Health Insurance</h5>
                                    <p>
                                        We share our beliefs and values with underprivileged
                                        communities about how to achieve high-quality health care outcomes
                                    </p>
                                </div>
                                <!--// Single Feature -->
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-lg-9 col-md-12 feature-image">
                <img class="wow fadeInLeft" src="assets/images/others/henry.jpg" alt="feature image">
                <h5>Otunuya Henry Chukwudi, Database Specialist | Nigeria.</h5>
            </div>
        </div>
        <!--// Features Area -->

        <!-- Funfact Area -->
        <div class="tm-section services-area tm-padding-section bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-12">
                        <div class="tm-section-title text-center">
                            <h2>Yes We Care</h2>
                            <p>Eli Health System hears the voices of these mothers and their children </p>
                        </div>
                    </div>
                </div>
                <div class="row services-wrap">

                    <!-- Single Service -->

                    <!--// Single Service -->

                    <!-- Single Service -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeInUp">
                        <div class="tm-service text-center">
                            <img src="assets/images/campaign/keb.jpg">
                            <caption>Kebeh Horrice</caption>
                            <p>
                                Kebeh is a student and six months pregnant.
                                She has only received a medical checkup once so far in her pregnancy and she is now in her second trimester.
                                <br>  <a class="btn btn-primary" href="/campaign">Read More</a>
                            </p>

                        </div>
                    </div>
                    <!--// Single Service -->

                    <!-- Single Service -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeInUp">
                        <div class="tm-service text-center">
                            <img src="assets/images/campaign/kess.jpg">
                            <caption>Ma Kesselly</caption>
                            <p>
                                The reality is that a young woman named
                                Ma had many difficulties throughout her pregnancy. But, she was one of the lucky ones.
                                <br> <a class="btn btn-primary" href="/campaign">Read More</a>
                            </p>

                        </div>
                    </div>
                    <!--// Single Service -->

                    <!-- Single Service -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeInUp">
                        <div class="tm-service text-center">
                            <img src="assets/images/campaign/tarn.jpg">
                            <caption>Tarnue Johnson</caption>
                            <p>
                                We are very proud of Tarnue Johnson. Tarnue desperately wants to become a medical doctor.
                                <br>  <a class="btn btn-primary" href="/campaign">Read More</a>
                            </p>

                        </div>
                    </div>
                    <!--// Single Service -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeInUp">
                        <div class="tm-service text-center">
                            <img src="assets/images/campaign/abi.jpg">
                            <caption>Abigail Zaza</caption>
                            <p class="pt-3">
                                Abigail is a young mother that became pregnant while she was in school.
                                Throughout her pregnancy Abigail did not have access to the prenatal care services she needed.
                                <br> <a class="btn btn-primary" href="/campaign">Read More</a>
                            </p>

                        </div>
                    </div>




                </div>
            </div>
        </div>
        <!--// Funfact Area -->

        <!-- Services Area -->
        <div class="tm-section services-area tm-padding-section bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-12">
                        <div class="tm-section-title text-center">
                            <h2>Our Facility Centers</h2>
                            <p>These facilities are based in Liberia </p>
                        </div>
                    </div>
                </div>
                <div class="row services-wrap">

                    <div class="col-md-12">
                        <div class="row">
                            @foreach ($facilities as $item)
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                                    <div class="tm-service text-center">
                                <span class="tm-service-icon">
                                    <i class="{{ $item->icon }}"></i>
                                </span>
                                        <h5><a href="/{{ $item->link }}">{{ $item->name }}</a></h5>

                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--// Services Area -->

        <!-- Testimonial Area -->
        <div class="tm-section testimonial-area tm-padding-section bg-grey">
            <div class="container">
                <div class="row testimonial-slider-active">

                    <!-- Testimonial -->
                    <div class="col-lg-6">
                        <div class="tm-testimonial">
                            <div class="tm-testimonial-top">
                                <div class="tm-testimonial-author">
                                    <img src="assets/images/admins/ell.jpg" alt="author image">
                                </div>
                                <div class="tm-testimonial-content">
                                    <p>Elisha is the Founder & CEO of Eli Health System. Elisha has several years of experience
                                        in health system strengthening, international and global health, program management, and primary health care.
                                    </p>
                                    <i class="fas fa-quote-left"></i>
                                </div>
                            </div>
                            <div class="tm-testimonial-bottom">
                                <h5>Elisha Caldwell (Eli), MPH</h5>
                                <p>Founder & CEO, United States

                                </p>
                            </div>
                        </div>
                    </div>
                    <!--// Testimonial -->

                    <!-- Testimonial -->
                    <div class="col-lg-6">
                        <div class="tm-testimonial">
                            <div class="tm-testimonial-top">
                                <div class="tm-testimonial-author">
                                    <img src="assets/images/admins/francis.jpg" alt="francis">
                                </div>
                                <div class="tm-testimonial-content">
                                    <p>Francis serves as the Vice President of EHS. Francis has several years of leadership experience.
                                        He has worked in several capacities in community health, primary healthcare, healthcare delivery system, nursing,
                                        government policy, program management, procurement and logistics, and budget forecast. </p>
                                    <i class="fas fa-quote-left"></i>
                                </div>
                            </div>
                            <div class="tm-testimonial-bottom">
                                <h5>Francis V. Zayzay, BSN/MPH </h5>
                                <p>Vice President, Liberia</p>
                            </div>
                        </div>
                    </div>
                    <!--// Testimonial -->

                    <!-- Testimonial -->
                    <div class="col-lg-6">
                        <div class="tm-testimonial">
                            <div class="tm-testimonial-top">
                                <div class="tm-testimonial-author">
                                    <img src="assets/images/admins/zeze.jpg" alt="author image">
                                </div>
                                <div class="tm-testimonial-content">
                                    <p>David has over 40 years of experience as a pediatric nurse practitioner.
                                        He has worked in several capacities including Central Lutheran Hospital as a pediatric head nurse, nutritional surveyor,
                                        and chief officer for the Zorzor Rural Teacher Training Institute.
                                    </p>
                                    <i class="fas fa-quote-left"></i>
                                </div>
                            </div>
                            <div class="tm-testimonial-bottom">
                                <h5>David K. Zeze, NP </h5>
                                <p>Consultant and Director of Nursing, Liberia</p>
                            </div>
                        </div>
                    </div>
                    <!--// Testimonial -->

                    <!-- Testimonial -->
                    <div class="col-lg-6">
                        <div class="tm-testimonial">
                            <div class="tm-testimonial-top">
                                <div class="tm-testimonial-author">
                                    <img src="assets/images/admins/kamara.jpg" alt="author image">
                                </div>
                                <div class="tm-testimonial-content">
                                    <p>Boakai Lamin  Kamara brings over 10 years of experience in the field of Information Technology.
                                        Previously Mr. Kamara worked with International Bank Liberia Ltd as Network Administrator for six years.

                                    </p>
                                    <i class="fas fa-quote-left"></i>
                                </div>
                            </div>
                            <div class="tm-testimonial-bottom">
                                <h5>Boakai Lamin Kamara</h5>
                                <p>Director of Data analytics, Liberia</p>
                            </div>
                        </div>
                    </div>
                    <!--// Testimonial -->
                    <!-- Testimonial -->
                    <div class="col-lg-6">
                        <div class="tm-testimonial">
                            <div class="tm-testimonial-top">
                                <div class="tm-testimonial-author">
                                    <img src="assets/images/admins/mutinta.png" alt="author image">
                                </div>
                                <div class="tm-testimonial-content">
                                    <p>Mutinta serves as the Health System Administrator and Secretary to the Board of Directors of Eli Health System.
                                        Mutinta has over ten years of experience in business administration and financial management. Currently,
                                        she’s the Clinical Department Administrator with the Infectious Diseases at the University of Virginia School of Medicine. </p>
                                    <i class="fas fa-quote-left"></i>
                                </div>
                            </div>
                            <div class="tm-testimonial-bottom">
                                <h5>Mutinta Bulanda, MHA </h5>
                                <p>Health System Administrator</p><p>
                                    Secretary & Treasurer to the Board of Directors, United States
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--// Testimonial -->

                    <!-- Testimonial -->
                    <div class="col-lg-6">
                        <div class="tm-testimonial">
                            <div class="tm-testimonial-top">
                                <div class="tm-testimonial-author">
                                    <img src="assets/images/admins/howard.jpg" alt="author image">
                                </div>
                                <div class="tm-testimonial-content">
                                    <p>Honorable Howard serves as the Advisor to the Board of Directors of Eli Health System.
                                        He has a passion for social justice and represents the underprivileged community.
                                        Honorable Howard is a representative in the Liberian government. He represents the fifth district of Lofa County.  </p>
                                    <i class="fas fa-quote-left"></i>
                                </div>
                            </div>
                            <div class="tm-testimonial-bottom">
                                <h5>Honorable Beyan D. Howard</h5>
                                <p>Senior Advisor to the Board of Directors, Liberia</p>
                            </div>
                        </div>
                    </div>
                    <!--// Testimonial -->

                    <!-- Testimonial -->
                    <div class="col-lg-6">
                        <div class="tm-testimonial">
                            <div class="tm-testimonial-top">
                                <div class="tm-testimonial-author">
                                    <img src="assets/images/admins/mm.jpg" alt="author image">
                                </div>
                                <div class="tm-testimonial-content">
                                    <p> Muhammad Akram has over 10 years’ experience in Program, Research, Monitoring, and Evaluation of projects. He has published 7 research papers,
                                        5 development reports, and reviewed research papers for Durham University, UK.</p>
                                    <i class="fas fa-quote-left"></i>
                                </div>
                            </div>
                            <div class="tm-testimonial-bottom">
                                <h5>Muhammad Akram, M.A, M.Sc</h5>
                                <p>Project Manager, Eli Health System</p>
                            </div>
                        </div>
                    </div>
                    <!--// Testimonial -->

                    <!-- Testimonial -->
                    <div class="col-lg-6">
                        <div class="tm-testimonial">
                            <div class="tm-testimonial-top">
                                <div class="tm-testimonial-author">
                                    <img src="assets/images/admins/Steve.jpg" alt="author image">
                                </div>
                                <div class="tm-testimonial-content">
                                    <p>Steve has over 25 years of experience and successful grant writer with a track record of obtaining funding </p>
                                    <i class="fas fa-quote-left"></i>
                                </div>
                            </div>
                            <div class="tm-testimonial-bottom">
                                <h5>Steve Every, M.Ed</h5>
                                <p>Grants Specialist</p>
                            </div>
                        </div>
                    </div>
                    <!--// Testimonial -->

                </div>
            </div>
        </div>
        <!--// Testimonial Area -->

        <!-- Pupular Products -->

        <!--// Pupular Products -->

        <!-- Promo Offer Area -->

        <!--// Promo Offer Area -->

        <!-- Latest Blog Area -->
        <div class="tm-section latest-blog-area tm-padding-section bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="tm-section-title text-center">
                            <h2>Our Beneficiaries</h2>
{{--                            <p>The following are images of on going and completed projects. </p>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row blog-slider-active">

                @foreach($bsliders as $item)
                <div class="col">
                    <div class="tm-blog">
                        <div class="tm-blog-image">
                            <img src="{{ Voyager::image($item->image) }}" alt="projects">
                        </div>

                    </div>
                </div>
                @endforeach
                <!--// Single Blog -->





            </div>
        </div>
        <!--// Latest Blog Area -->

        <!-- Partner Section -->
        <div class="tm-section latest-blog-area tm-padding-section bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="tm-section-title text-center">
                            <h2>Our Partners</h2>
                            <p>Our Partners at the moment include. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row blog-slider-active">

                <!-- Single Blog -->
                <div class="col">
                    <div class="tm-blog">
                        <div class="tm-blog-image">
                            <img src="assets/images/partners/logo_header.png" alt="Ministry of Health Liberia">
                        </div>

                    </div>
                </div>
                <!--// Single Blog -->

                <!-- Single Blog -->

                <!--// Single Blog -->

                <!-- Single Blog -->

                <!--// Single Blog -->

                <!-- Single Blog -->

                <!--// Single Blog -->

                <!-- Single Blog -->

                <!--// Single Blog -->

                <!-- Single Blog -->

                <!--// Single Blog -->





            </div>

        </div>

<div style="display:none" class="container">

                <!-- Single Blog -->
                <div class="col text-center">
                    <div class="tm-blog">
                        <h3 class="text-center">Operations for 2018</h3>
                        <div class="tm-blog-image">
                            <img style="height:515px;width:662px" src="{{ Voyager::image(setting('site.map')) }}" alt="Operations for 2018">
                        </div>

                    </div>
                </div>
            </div>

        <!--// End of Partner Section -->

    </main>
    <!--// Main Content -->

@endsection
