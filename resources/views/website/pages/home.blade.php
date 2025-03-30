<x-web-layout>

    <div class="container-fluid mb-3">
        <div class="container border-bottom border-primary text-primary py-3">
            <marquee behavior="scroll">
                <h5 class="p-0 m-0 text-primary">Welcome To Your School Name</h5>
            </marquee>
        </div>
    </div>

    {{-- banner::begin --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-3">
                <section class="banner position-ralative">
                    <div id="main-slider" class="swiper-container h-400 h-lg-400 h-md-300 h-sm-200">
                        <div class="swiper-wrapper">
                            <!-- Swiper Slider 1-->
                            <div class="swiper-slide align-items-center d-flex bg-overlay-black-40"
                                style="background-image: url({{ asset('assets/frontend/images/bg/01.jpg') }}); background-size: cover; background-position: center center;">
                                <div class="swipeinner container">
                                    <div class="row justify-content-center text-center">
                                        <div class="col-lg-10 col-md-12">
                                            <div class="slider-1">
                                                <div class="animated" data-swiper-animation="fadeInUp"
                                                    data-duration="1s" data-delay="0.25s">
                                                    <h3 class="animated text-white mb-4"
                                                        data-swiper-animation="fadeInUp" data-duration="1.5s"
                                                        data-delay="0.25s">Exceptional Education.
                                                        Exceptional
                                                        Value.</h3>
                                                    <div class="animated text-white px-lg-5"
                                                        data-swiper-animation="fadeInUp" data-duration="2.5s"
                                                        data-delay="0.25s">
                                                        <p class="d-none d-sm-block">Lorem ipsum dolor sit, amet
                                                            consectetur adipisicing elit. Consequatur, quos?</p>
                                                    </div>
                                                    <a href="#"
                                                        class="animated4 btn btn-sm btn-white mt-4 mr-1 mr-sm-2"
                                                        data-swiper-animation="fadeInUp" data-duration="3.5s"
                                                        data-delay="0.25s">Read More<span></span></a>
                                                    <a href="#"
                                                        class="animated4 btn btn-sm btn-primary mt-4 ml-1 ml-sm-2"
                                                        data-swiper-animation="fadeInUp" data-duration="3.5s"
                                                        data-delay="0.25s">Learn More<span></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Swiper Slider 2-->
                            <div class="swiper-slide align-items-center d-flex bg-overlay-black-40"
                                style="background-image: url({{ asset('assets/frontend/images/bg/03.jpg') }}); background-size: cover; background-position: center center;">
                                <div class="swipeinner container">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-8 col-lg-10 col-md-12">
                                            <div class="slider-2 text-center">
                                                <div class="animated" data-swiper-animation="fadeInUp"
                                                    data-duration="1s" data-delay="0.25s">
                                                    <h3 class="animated text-white mb-4"
                                                        data-swiper-animation="fadeInUp" data-duration="1s"
                                                        data-delay="0.25s">The Education You Want. The
                                                        Attention You Deserve</h3>
                                                    <div class="animated text-dark" data-swiper-animation="fadeInUp"
                                                        data-duration="2.5s" data-delay="0.25s">
                                                        <p class="text-white d-none d-sm-block">Lorem ipsum dolor sit
                                                            amet consectetur adipisicing elit. Delectus, cupiditate.</p>
                                                    </div>
                                                    <a href="#" class="animated4 btn btn-sm btn-dark mt-4"
                                                        data-swiper-animation="fadeInUp" data-duration="3s"
                                                        data-delay="0.25s">Learn
                                                        More<span></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="swiper-button-prev text-white"><i class="fa fa-arrow-left"></i></div>
                    <div class="swiper-button-next text-white"><i class="fa fa-arrow-right"></i></div>
                </section>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="card h-400 h-lg-400 h-md-300 h-sm-200">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Notice Board</h5>
                    </div>
                    <div class="card-body p-1 scrollable-notices">
                        <div class="list-group">
                            <div class="list-group-item">
                                <h6 class="mb-1"><a href="#">Meeting Tomorrow</a></h6>
                                <small class="text-muted">March 29, 2025 - 10:00 AM</small>
                            </div>
                            <div class="list-group-item">
                                <h6 class="mb-1"><a href="#">Holiday Notice</a></h6>
                                <small class="text-muted">April 1, 2025</small>
                            </div>
                            <div class="list-group-item">
                                <h6 class="mb-1"><a href="#">System Maintenance</a></h6>
                                <small class="text-muted">March 30, 2025 - 2:00 AM</small>
                            </div>
                            <div class="list-group-item">
                                <h6 class="mb-1"><a href="">System Maintenance</a></h6>
                                <small class="text-muted">March 30, 2025 - 2:00 AM</small>
                            </div>

                            <div class="list-group-item">
                                <h6 class="mb-1"><a href="">System Maintenance</a></h6>
                                <small class="text-muted">March 30, 2025 - 2:00 AM</small>
                            </div>

                            <div class="list-group-item">
                                <h6 class="mb-1"><a href="">System Maintenance</a></h6>
                                <small class="text-muted">March 30, 2025 - 2:00 AM</small>
                            </div>

                            <div class="list-group-item">
                                <h6 class="mb-1"><a href="">System Maintenance</a></h6>
                                <small class="text-muted">March 30, 2025 - 2:00 AM</small>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-primary">View All Notices</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- banner::end --}}


    {{-- short intro::begin --}}
    <section class="space-ptb bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0 pr-xl-6">
                    <div class="section-title mb-4">
                        <h2 class="title">Personal Education, Extraordinary Success</h2>
                    </div>
                    <p class="mb-4 mb-lg-5 text-justify">The other virtues practice in succession by Franklin were
                        silence,
                        order,
                        resolution, frugality, industry, sincerity, Justice, moderation, cleanliness, tranquility,
                        chastity and humility. For the summary order he followed a little scheme of employing his
                        time
                        each day.</p>
                    <a href="#" class="btn btn-primary btn-round">Read More</a>
                </div>
                <div class="col-lg-6 pr-lg-5">
                    <div class="row">
                        <div class="col-sm-7">
                            <img class="img-fluid w-100 border-radius"
                                src="{{ asset('assets/frontend/images/about/01.jpg') }}" alt="">
                        </div>
                        <div class="col-sm-5 mt-sm-5 mt-4">
                            <img class="img-fluid mb-sm-2 w-100 border-radius"
                                src="{{ asset('assets/frontend/images/about/02.jpg') }}" alt="">
                            <div class="position-relative bg-overlay-black-50 border-radius overflow-hidden mt-4">
                                <img class="img-fluid border-radius"
                                    src="{{ asset('assets/frontend/images/about/03.jpg') }}" alt="image">
                                <a class="btn-animation position-center popup-youtube"
                                    href="https://www.youtube.com/watch?v=LgvseYYhqU0">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- short intro::end --}}

    {{-- counter:begin --}}
    <section class="space-ptb bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="flaticon-team-1 text-white"></i>
                        </div>
                        <div class="counter-content">
                            <span class="timer text-white" data-to="1790" data-speed="10000">1325</span>
                            <label class="text-white">Satisfied Students</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="flaticon-diploma-1 text-white"></i>
                        </div>
                        <div class="counter-content align-self-center">
                            <span class="timer text-white" data-to="245" data-speed="10000">181</span>
                            <label class="text-white">Course Completed</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-md-0">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="flaticon-support text-white"></i>
                        </div>
                        <div class="counter-content">
                            <span class="timer text-white" data-to="491" data-speed="10000">363</span>
                            <label class="text-white">Expert Advisors</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="flaticon-trophy-1 text-white"></i>
                        </div>
                        <div class="counter-content">
                            <span class="timer text-white" data-to="1090" data-speed="10000">807</span>
                            <label class="text-white">Award Winning</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- counter:end --}}

    {{-- Our Leadership Team ::Begin --}}
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 text-center">
                    <!-- Section Title START -->
                    <div class="section-title">
                        <h2>Our Leadership Team</h2>
                        <p>Meet the outstanding performers in our industry-award-winning team of professionals</p>
                    </div>
                    <!-- Section Title END -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4 mb-md-0">
                    <!-- team-01 START -->
                    <div class="team">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/team/01.jpg') }}"
                                alt="">
                        </div>
                        <div class="team-info">
                            <a href="teachers-single.html" class="team-name">Mellissa Doe</a>
                            <p class="team-leader">Team Leader</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- team-01 END -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4 mb-md-0">
                    <!-- team-01 START -->
                    <div class="team">
                        <img class="img-fluid" src="{{ asset('assets/frontend/images/team/02.jpg') }}"
                            alt="">
                        <div class="team-info">
                            <a href="teachers-single.html" class="team-name">Ora Bryan</a>
                            <p class="team-leader">Illustration</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- team-01 END -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <!-- team-01 START -->
                    <div class="team">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/team/03.jpg') }}"
                                alt="">
                        </div>
                        <div class="team-info">
                            <a href="teachers-single.html" class="team-name">Gwen Bass</a>
                            <p class="team-leader">Sales and Marketing</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- team-01 END -->
                </div>
            </div>
        </div>
    </section>
    {{-- Our Leadership Team ::End --}}


    {{-- gallary Images:begin --}}
    <section class="space-ptb bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 text-center">
                    <!-- Section Title START -->
                    <div class="section-title">
                        <h2>Our Gallery</h2>
                    </div>
                    <!-- Section Title END -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="filters-group mb-lg-4 text-center">
                        <button class="btn-filter  active" data-group="all">All</button>
                        <button class="btn-filter" data-group="branding">Branding</button>
                        <button class="btn-filter" data-group="web">Web</button>
                        <button class="btn-filter" data-group="photography">Photography</button>
                        <button class="btn-filter" data-group="advertising">Advertising</button>
                        <button class="btn-filter" data-group="design">Design</button>
                    </div>
                    <div class="my-shuffle-container columns-3 popup-gallery full-screen">
                        <!-- item START -->
                        <div class="grid-item" data-groups='["branding"]'>
                            <div class="portfolio-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('assets/frontend/images/gallery/02.jpg') }}"
                                        alt="">
                                    <div class="portfolio-overlay">
                                        <a class="portfolio-img"
                                            href="{{ asset('assets/frontend/images/gallery/02.jpg') }}"><i
                                                class="fas fa-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item End -->

                        <!-- item START -->
                        <div class="grid-item" data-groups='["web", "photography", "branding"]'>
                            <div class="portfolio-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('assets/frontend/images/gallery/03.jpg') }}"
                                        alt="">
                                    <div class="portfolio-overlay">
                                        <a class="portfolio-img"
                                            href="{{ asset('assets/frontend/images/gallery/03.jpg') }}"><i
                                                class="fas fa-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item End -->

                        <!-- item START -->
                        <div class="grid-item" data-groups='["photography"]'>
                            <div class="portfolio-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('assets/frontend/images/gallery/04.jpg') }}"
                                        alt="">
                                    <div class="portfolio-overlay">
                                        <a class="portfolio-img"
                                            href="{{ asset('assets/frontend/images/gallery/04.jpg') }}"><i
                                                class="fas fa-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item End -->

                        <!-- item START -->
                        <div class="grid-item" data-groups='["advertising"]'>
                            <div class="portfolio-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('assets/frontend/images/gallery/05.jpg') }}"
                                        alt="">
                                    <div class="portfolio-overlay">
                                        <a class="portfolio-img"
                                            href="{{ asset('assets/frontend/images/gallery/05.jpg') }}"><i
                                                class="fas fa-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item End -->

                        <!-- item START -->
                        <div class="grid-item" data-groups='["design", "advertising"]'>
                            <div class="portfolio-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('assets/frontend/images/gallery/06.jpg') }}"
                                        alt="">
                                    <div class="portfolio-overlay">
                                        <a class="portfolio-img"
                                            href="{{ asset('assets/frontend/images/gallery/06.jpg') }}"><i
                                                class="fas fa-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item End -->

                        <!-- item START -->
                        <div class="grid-item" data-groups='["branding", "web"]'>
                            <div class="portfolio-item">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('assets/frontend/images/gallery/01.jpg') }}"
                                        alt="">
                                    <div class="portfolio-overlay">
                                        <a class="portfolio-img"
                                            href="{{ asset('assets/frontend/images/gallery/01.jpg') }}"><i
                                                class="fas fa-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item End -->
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-12 text-center">
                    <a class="btn btn-primary btn-round mt-4 mt-md-5 px-5" href="#">View All</a>
                </div>
            </div>
        </div>
    </section>
    {{-- gallary Images:end --}}


    {{-- event:begin --}}
    <section class="space-ptb">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                    <div class="section-title text-center">
                        <h2 class="title">Latest Events</h2>
                        <p class="mb-0">Success isn’t really that difficult. There is a significant portion of the
                            population</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="events shadow h-100">
                        <div class="events-img">
                            <img class="img-fluid border-0"
                                src="{{ asset('assets/frontend/images/courses/01.jpg') }}" alt="">
                        </div>
                        <div class="events-content p-4">
                            <div class="events-tag">
                                <a href="#" class="badge-danger mb-2">Art Competition</a>
                            </div>
                            <a href="event-detail.html" class="text-dark h5">Classics & Ancient History</a>
                            <div class="events-meta my-2">
                                <ul class="list-unstyled mb-0 d-flex">
                                    <li class="mr-3"><a href="#"><i class="fas fa-calendar-alt pr-1"></i> 15
                                            Oct, 2020</a></li>
                                    <li><a href="#"><i class="fas fa-clock pr-1"></i> 8:00 AM - 5:00 PM</a></li>
                                </ul>
                            </div>
                            <p class="text-dark mb-0">Franklin’s extraordinary success in life and politics can be
                                attributed to his perseverance to overcome.</p>
                            <a class="btn btn-dark btn-round mt-3" href="#">Join Event</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="events shadow h-100">
                        <div class="events-img">
                            <img class="img-fluid border-0"
                                src="{{ asset('assets/frontend/images/courses/02.jpg') }}" alt="">
                        </div>
                        <div class="events-content p-4">
                            <div class="events-tag">
                                <a href="#" class="badge-success mb-2">Art Competition</a>
                            </div>
                            <a href="event-detail.html" class="text-dark h5">Communication & Media Studies</a>
                            <div class="events-meta my-2">
                                <ul class="list-unstyled mb-0 d-flex">
                                    <li class="mr-3"><a href="#"><i class="fas fa-calendar-alt pr-1"></i> 20
                                            Sept, 2020</a></li>
                                    <li><a href="#"><i class="fas fa-clock pr-1"></i> 12:00 PM - 3:00 PM</a>
                                    </li>
                                </ul>
                            </div>
                            <p class="text-dark mb-0">There is a significant portion of the population here in North
                                America, that actually want and need success</p>
                            <a class="btn btn-dark btn-round mt-3" href="#">Join Event</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="events shadow h-100">
                        <div class="events-img">
                            <img class="img-fluid border-0"
                                src="{{ asset('assets/frontend/images/courses/03.jpg') }}" alt="">
                        </div>
                        <div class="events-content p-4">
                            <div class="events-tag">
                                <a href="#" class="badge-warning mb-2">Art Competition</a>
                            </div>
                            <a href="event-detail.html" class="text-dark h5">Drama, Dance & Cinematics</a>
                            <div class="events-meta my-2">
                                <ul class="list-unstyled mb-0 d-flex">
                                    <li class="mr-3"><a href="#"><i class="fas fa-calendar-alt pr-1"></i> 05
                                            Nov, 2020</a></li>
                                    <li><a href="#"><i class="fas fa-clock pr-1"></i> 2:00 PM - 4:00 PM</a></li>
                                </ul>
                            </div>
                            <p class="text-dark mb-0">Having clarity of purpose and a clear picture of what you desire,
                                is probably the single most important</p>
                            <a class="btn btn-dark btn-round mt-3" href="#">Join Event</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-12 text-center">
                    <a class="btn btn-primary btn-round mt-4 mt-md-5 px-5" href="#">View All</a>
                </div>
            </div>
        </div>
    </section>
    {{-- event:end --}}


    {{-- testimonial --}}
    <section class="space-ptb bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel testimonial-center" data-nav-arrow="false" data-nav-dots="true"
                        data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1"
                        data-space="0" data-autoheight="true">
                        <!-- item-01 START -->
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="testimonial-quote text-center mb-4">
                                    <i class="fas fa-quote-left fa-2x text-white"></i>
                                </div>
                                <div class="text-center">
                                    <h3 class="mb-4">You won't regret it. I can't say enough about web service.
                                        It's
                                        the <span class="text-primary">perfect solution for our business.</span>
                                    </h3>
                                </div>
                                <div class="testimonial-content">
                                    <p>This is where you create powerful, progressive change. Notice the sense of
                                        freedom in your thoughts, the sense of accomplishment and Walkout 10 years
                                        into
                                        your future.</p>
                                </div>
                                <div class="testimonial-author">
                                    <div class="testimonial-avatar avatar avatar-md mr-0">
                                        <img class="img-fluid "
                                            src="{{ asset('assets/frontend/images/avatar/02.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-name">
                                        <h5 class="name">Scarlett D.</h5>
                                        <span>- Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item-01 END -->

                        <!-- item-02 START -->
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="testimonial-quote text-center mb-4">
                                    <i class="fas fa-quote-left fa-2x text-white"></i>
                                </div>
                                <div class="text-center">
                                    <h3 class="mb-4">University impressed me on multiple levels. I wish I would
                                        have
                                        <span class="text-primary">thought of it first.</span>
                                    </h3>
                                </div>
                                <div class="testimonial-content">
                                    <p>They are intentional because these changes are changes that you are choosing
                                        and
                                        they are the changes that will cause you to live the life you want to live
                                        and
                                        dream.</p>
                                </div>
                                <div class="testimonial-author">
                                    <div class="testimonial-avatar avatar avatar-md mr-0">
                                        <img class="img-fluid "
                                            src="{{ asset('assets/frontend/images/avatar/05.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-name">
                                        <h5 class="name">Hali D.</h5>
                                        <span>- Marketing Expert</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item-02 END -->

                        <!-- item-03 START -->
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="testimonial-quote text-center mb-4">
                                    <i class="fas fa-quote-left fa-2x text-white"></i>
                                </div>
                                <div class="text-center">
                                    <h3 class="mb-4">Thanks guys, keep up the good work! I didn't <span
                                            class="text-primary">even need training.</span></h3>
                                </div>
                                <div class="testimonial-content">
                                    <p>They often mean leaving the perception of security in order to discover your
                                        personal freedom. These are the changes that will bring happiness and
                                        satisfaction into your life. Just go there now.</p>
                                </div>
                                <div class="testimonial-author">
                                    <div class="testimonial-avatar avatar avatar-md mr-0">
                                        <img class="img-fluid "
                                            src="{{ asset('assets/frontend/images/avatar/03.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-name">
                                        <h5 class="name">Sumner N.</h5>
                                        <span>- Team Leader</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item-03 END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- testimonial --}}

    {{-- cta::begin --}}
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="bg-primary text-center rounded py-5 px-3">
                        <h2 class="text-white mb-3">Tell us about your idea, and we’ll make it happen.</h2>
                        <h6 class="text-white mb-4">Have a brand problem that needs to be solved? We’d love to hear
                            about it!</h6>
                        <a href="#" class="btn btn-dark btn-round mx-0 mx-md-3">Let’s Get Started<i
                                class="fas fa-arrow-right pl-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- cta::end --}}


</x-web-layout>
