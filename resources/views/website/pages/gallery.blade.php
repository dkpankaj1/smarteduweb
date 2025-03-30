<x-web-layout>


    <x-breadcrumb title="Gallery" bgurl="{{ asset('assets/frontend/images/bg/09.jpg') }}">
        <li class="breadcrumb-item active">Gallery</li>
    </x-breadcrumb>

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
                    <a class="btn btn-primary btn-round mt-4 mt-md-5 px-5" href="#">Load More</a>
                </div>
            </div>
        </div>
    </section>
    {{-- gallary Images:end --}}


</x-web-layout>
