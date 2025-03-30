@props(['title', 'bgurl' => asset('assets/frontend/images/bg/01.jpg')])
<section class="inner-banner bg-overlay-black-70 py-5" style="background-image: url('{{ $bgurl }}');">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="text-center">
                    <h3 class="text-white">{{ $title }}</h3>
                </div>
                <div class="d-flex justify-content-center ">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        {{ $slot }}
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
