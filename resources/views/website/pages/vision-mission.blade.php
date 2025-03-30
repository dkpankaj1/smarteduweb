<x-web-layout>


    <x-breadcrumb title="Our Vision & Mission">
        <li class="breadcrumb-item active">Vision & Mission</li>
    </x-breadcrumb>

    <section class="space-ptb bg-light">
        <div class="container">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                        aria-controls="nav-home" aria-selected="true">Our Vision</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                        role="tab" aria-controls="nav-profile" aria-selected="false">Our Mission</a>

                </div>
            </nav>
            <div class="tab-content bg-white p-4 p-md-5" id="nav-tabContent">

                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="section-title mb-4">
                        <h3 class="title">Remind yourself of someone you know</h3>
                        <p class="mb-0">From five to seven each morning he spent in bodily personal attention, saying
                            a short prayer, thinking over the day’s business and resolutions.</p>
                    </div>
                    <p class="mb-4 mb-md-4 pb-2">The other virtues practice in succession by Franklin were silence,
                        order, resolution, frugality, industry, sincerity, Justice, moderation, cleanliness,
                        tranquility, chastity and humility. For the summary order he followed a little scheme of
                        employing his time each day.</p>
                    <a href="#" class="btn btn-primary btn-round">Read More</a>
                </div>

                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="section-title mb-4">
                        <h3 class="title">Making the decision</h3>
                        <p class="mb-0">We all know that nothing moves until someone makes a decision. The first
                            action is always in making the decision to proceed. This is a fundamental step, which most
                            people overlook.</p>
                    </div>
                    <p class="mb-4 mb-md-4 pb-2">The sad thing is the majority of people have no clue about what they
                        truly want. They have no clarity. When asked the question, responses will be superficial at
                        best, and at worst, will be what someone else wants for them.</p>
                    <a href="#" class="btn btn-primary btn-round">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="h-700 space-pt"
        style="background-image: url({{ asset('assets/frontend/images/bg/07.jpg') }}); background-size: cover; background-position: center center;">
        <div class="container pb-4">
            <div class="row pb-4 justify-content-center">
                <div class="col-sm-10 mb-4 mb-lg-0 text-center">
                    <h2 class="mb-2 mb-sm-4">The Education You Want. The Attention You Deserve.</h2>
                    <p>We also know those epic stories, those modern-day legends surrounding the early failures of such
                        supremely successful folks as Michael Jordan and Bill Gates.</p>
                </div>
            </div>
        </div>
    </section>

</x-web-layout>
