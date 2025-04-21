@extends('layouts.app')

@section('title', 'Home')

@section('content')



    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

        <div class="container position-relative">

            <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
                <h2>WELCOME TO HEALTH CARE</h2>
                <p>Committed to delivering exceptional healthcare services with compassion and excellence.</p>
            </div><!-- End Welcome -->

            <div class="content row gy-4">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
                        <h3>Comprehensive Health Services</h3>
                        <p>
                            At Medilab, we offer a wide range of medical services tailored to meet the diverse needs of our
                            community. Our dedicated team ensures personalized care for every patient.
                        </p>
                        <div class="text-center">
                            <a class="more-btn" href="{{ url('/appointment') }}">Make an Appointment</a>
                        </div>
                    </div>
                </div><!-- End Why Box -->

                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="row gy-4">

                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                                    <i class="bi bi-clipboard-data"></i>
                                    <h4>Advanced Diagnostics</h4>
                                    <p>Utilizing state-of-the-art technology to provide accurate and timely diagnostic
                                        services for effective treatment planning.</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                                    <i class="bi bi-gem"></i>
                                    <h4>Expert Medical Team</h4>
                                    <p>Our team of experienced healthcare professionals is dedicated to delivering
                                        compassionate and comprehensive care.</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                                    <i class="bi bi-inboxes"></i>
                                    <h4>Patient-Centered Approach</h4>
                                    <p>We prioritize our patients' needs, ensuring personalized treatment plans and
                                        continuous support throughout their healthcare journey.</p>
                                </div>
                            </div><!-- End Icon Box -->

                        </div>
                    </div>
                </div>
            </div><!-- End  Content-->

        </div>

    </section><!-- /Hero Section -->


    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4 gx-5">

                <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                    <h3>About Us</h3>
                    <p>
                        At Medilab, we are dedicated to providing comprehensive healthcare services with a focus on
                        compassion, innovation, and excellence. Our multidisciplinary team of medical professionals works
                        collaboratively to ensure each patient receives personalized care tailored to their unique needs.
                    </p>
                    <ul>
                        <li>
                            <i class="fa-solid fa-vial-circle-check"></i>
                            <div>
                                <h5>State-of-the-Art Diagnostic Services</h5>
                                <p>Utilizing advanced technology to deliver accurate and timely diagnostic results,
                                    facilitating effective treatment plans.</p>
                            </div>
                        </li>
                        <li>
                            <i class="fa-solid fa-pump-medical"></i>
                            <div>
                                <h5>Comprehensive Treatment Options</h5>
                                <p>Offering a wide range of medical services across various specialties to address diverse
                                    health concerns under one roof.</p>
                            </div>
                        </li>
                        <li>
                            <i class="fa-solid fa-heart-circle-xmark"></i>
                            <div>
                                <h5>Patient-Centered Care</h5>
                                <p>Prioritizing patient well-being by fostering a supportive environment that encourages
                                    open communication and trust.</p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Explore our comprehensive range of medical services designed to address your health needs with personalized
                care and advanced treatment options.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="row gy-4">
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="{{ $service->icon }}"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>{{ $service->title }}</h3>
                                </a>
                                <p>{{ $service->description }}</p>
                            </div>
                        </div><!-- End Service Item -->
                    @endforeach
                </div>


            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Doctors Section -->
    <section id="doctors" class="doctors section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Doctors</h2>
            <p>Meet our team of highly qualified and compassionate doctors dedicated to providing exceptional healthcare
                services across various specialties.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">
                @foreach ($doctors as $doctor)
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic">
                                <img src="{{ asset($doctor->image) }}" class="img-fluid" alt="{{ $doctor->name }}">
                            </div>
                            <div class="member-info">
                                <h4>{{ $doctor->name }}</h4>
                                <span>{{ $doctor->position }}</span>
                                <p>{{ $doctor->description }}</p>
                                <div class="social">
                                    @if (!empty($doctor->social_links['twitter']))
                                        <a href="{{ $doctor->social_links['twitter'] }}"><i class="bi bi-twitter"></i></a>
                                    @endif
                                    @if (!empty($doctor->social_links['facebook']))
                                        <a href="{{ $doctor->social_links['facebook'] }}"><i
                                                class="bi bi-facebook"></i></a>
                                    @endif
                                    @if (!empty($doctor->social_links['instagram']))
                                        <a href="{{ $doctor->social_links['instagram'] }}"><i
                                                class="bi bi-instagram"></i></a>
                                    @endif
                                    @if (!empty($doctor->social_links['linkedin']))
                                        <a href="{{ $doctor->social_links['linkedin'] }}"><i
                                                class="bi bi-linkedin"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                @endforeach
            </div>

        </div>

    </section><!-- /Doctors Section -->






    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>





@endsection
