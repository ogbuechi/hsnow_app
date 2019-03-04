@extends('layouts.master')

@section('content')


    <!-- Heroslider Area -->
    <div class="heroslider-area">
        <!-- Heroslider Slider -->
        <div class="heroslider-slider-2 heroslider-animated-content tm-slider-arrow tm-slider-dots-left">

            @foreach ($sliders as $slider)
                <div class="heroslider-singleslider d-flex align-items-center" data-white-overlay="5" data-bgimage="{{ Voyager::image($slider->image) }}">
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
                            <img class="wow fadeInLeft" src="{{ Voyager::image(setting('extra.ceo_pics')) }}" alt="Elisha Chadwell">
                            <p>Elisha Caldwell (MPH), President and CEO</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h2>Welcome to Eli Health System</h2>
                            <h6>HealthCare for the poor.</h6>
                            <p>We are an emerging community global health Organization with a mission to provide  Universal
                                Primary Health Care System in Sub-Saharan Africa that is portable and accessible by all.</p>
                            <p>EHS aligned with the Institute of Health Care Improvement
                                2007 Triple Aim Conceptual Framework;

                                improved patient care experience,
                                improved the health of the population,
                                and reduce per capita healthcare cost.</p>
                            <p>
                                EHS was founded on the need to serve the vulnerable populations, make health care coverage a universal right, and improve the quality of life</p>
                            <ul class="stylish-list">
                                <li><i class="far fa-check-square"></i><span>Our Goal:</span>  Strengthen health system that is universal, portable, and accessible</li>
                                <li><i class="far fa-check-square"></i><span>Our Objective:</span>  All patients should be treated fairly, equally, with dignity and respect</li>
                            </ul>
                            <a href="{{ url('about-us') }}" class="tm-button" target="_blank">Read More <b></b></a>
                        </div>
                    </div>
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
                                    <p>We provide health care insurance on all our facilities.</p>
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
        <div class="tm-section funfact-area tm-padding-section" data-bgimage="assets/images/funfact/funfact-bg.jpg"
             data-black-overlay="8">
            <div class="funfact-areashape">
                <img src="assets/images/funfact/funfact-shape.png" alt="funfact area shape">
            </div>
            <div class="container">
                <div class="row mt-30-reverse">

                    <!-- Funfact Single -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-30">
                        <div class="tm-funfact">
                                <span class="tm-funfact-icon">
                                    <i class="fas fa-plus"></i>
                                </span>
                            <div class="tm-funfact-content">
                                <span class="odometer" data-count-to="4"></span>
                                <h5>Four Projects Underway</h5>
                            </div>
                        </div>
                    </div>
                    <!--// Funfact Single -->

                    <!-- Funfact Single -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-30">
                        <div class="tm-funfact">
                                <span class="tm-funfact-icon">
                                    <i class="fas fa-hospital"></i>
                                </span>
                            <div class="tm-funfact-content">
                                <span class="odometer" data-count-to="1"></span>
                                <h5>Health Center</h5>
                            </div>
                        </div>
                    </div>
                    <!--// Funfact Single -->

                    <!-- Funfact Single -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-30">
                        <div class="tm-funfact">
                                <span class="tm-funfact-icon">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            <div class="tm-funfact-content">
                                <span class="odometer" data-count-to="200"></span>
                                <h5>Mail Conversation</h5>
                            </div>
                        </div>
                    </div>
                    <!--// Funfact Single -->

                    <!-- Funfact Single -->

                    <!--// Funfact Single -->

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
                            <h2>Our Facility Centres</h2>
                            <p>These facilities are based in Liberia </p>
                        </div>
                    </div>
                </div>
                <div class="row services-wrap">

                    <!-- Single Service -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                        <div class="tm-service text-center">
                                <span class="tm-service-icon">
                                    <i class="fas fa-hospital"></i>
                                </span>
                            <h5><a href="voinjama.php">Voinjama District</a></h5>

                        </div>
                    </div>
                    <!--// Single Service -->

                    <!-- Single Service -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                        <div class="tm-service text-center">
                                <span class="tm-service-icon">
                                    <i class="fas fa-hospital"></i>
                                </span>
                            <h5><a href="zorzor.php">Zorzor District</a></h5>

                        </div>
                    </div>
                    <!--// Single Service -->

                    <!-- Single Service -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                        <div class="tm-service text-center">
                                <span class="tm-service-icon">
                                    <i class="fas fa-hospital"></i>
                                </span>
                            <h5><a href="foya.php">Foya District</a></h5>

                        </div>
                    </div>
                    <!--// Single Service -->

                    <!-- Single Service -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                        <div class="tm-service text-center">
                                <span class="tm-service-icon">
                                    <i class="fas fa-hospital"></i>
                                </span>
                            <h5><a href="vahun.php">Vahun District </a></h5>
                            <
                        </div>
                    </div>
                    <!--// Single Service -->

                    <!-- Single Service -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                        <div class="tm-service text-center">
                                <span class="tm-service-icon">
                                    <i class="fas fa-hospital"></i>
                                </span>
                            <h5><a href="kolahun.php">Kolahun District</a></h5>

                        </div>
                    </div>
                    <!--// Single Service -->

                    <!-- Single Service -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                        <div class="tm-service text-center">
                                <span class="tm-service-icon">
                                    <i class="fas fa-hospital"></i>
                                </span>
                            <h5><a href="saleyea.php">Salayea District</a></h5>

                        </div>
                    </div>
                    <!--// Single Service -->

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
                                    <img src="assets/images/admins/eli.jpg" alt="author image">
                                </div>
                                <div class="tm-testimonial-content">
                                    <p>Elisha is the founder, President & CEO of Eli Health System. Elisha has several years of experience
                                        in health system strengthening, international and global health, program management, and primary health care.
                                    </p>
                                    <i class="fas fa-quote-left"></i>
                                </div>
                            </div>
                            <div class="tm-testimonial-bottom">
                                <h5>Elisha Caldwell (Eli), MPH</h5>
                                <p>President & CEO, United States

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
                            <h2>Completed and On going jobs</h2>
                            <p>The following are images of on going and completed projects. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row blog-slider-active">

                <!-- Single Blog -->
                <div class="col">
                    <div class="tm-blog">
                        <div class="tm-blog-image">
                            <img src="assets/images/projects/h1_1.jpg" alt="projects">
                        </div>

                    </div>
                </div>
                <!--// Single Blog -->

                <!-- Single Blog -->
                <div class="col">
                    <div class="tm-blog">
                        <div class="tm-blog-image">
                            <img src="assets/images/projects/h2_1.jpg" alt="projects">
                        </div>
                    </div>
                </div>
                <!--// Single Blog -->

                <!-- Single Blog -->
                <div class="col">
                    <div class="tm-blog">
                        <div class="tm-blog-image">
                            <img src="assets/images/projects/h3_1.jpg" alt="projects">
                        </div>


                    </div>
                </div>
                <!--// Single Blog -->

                <!-- Single Blog -->
                <div class="col">
                    <div class="tm-blog">
                        <div class="tm-blog-image">
                            <img src="assets/images/projects/h4_2.jpg" alt="projects">
                        </div>


                    </div>
                </div>
                <!--// Single Blog -->

                <!-- Single Blog -->
                <div class="col">
                    <div class="tm-blog">
                        <div class="tm-blog-image">
                            <img src="assets/images/projects/h4_6.jpg" alt="projects">
                        </div>


                    </div>
                </div>
                <!--// Single Blog -->

                <!-- Single Blog -->
                <div class="col">
                    <div class="tm-blog">
                        <div class="tm-blog-image">
                            <img src="assets/images/projects/img-8334-1_1.jpg" alt="projects">
                        </div>

                    </div>
                </div>
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
        <!--// End of Partner Section -->

    </main>
    <!--// Main Content -->

@endsection
