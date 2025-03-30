<footer class="space-pt bg-overlay-black-90 bg-holder footer mt-n5"
    style="background-image: url({{ asset('assets/frontend/images/bg/03.jpg') }});">
    <div class="container pt-5">
        <div class="row pb-5 pb-lg-6 mb-lg-3">
            <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0 pr-lg-5">
                <a href="{{ route('home') }}"><img class="img-fluid mb-3 footer-logo"
                        src="{{ asset($setting->logo_light) }}" alt=""></a>
                <p class="text-white">The best way is to develop and follow a plan. Start with your goals in mind
                    and then work backward to develop the plan.</p>
                <h5 class="text-white mb-2 mb-sm-4">Follow Us</h5>
                <div class="social-icon social-icon-style-02">
                    <ul>
                        <li><a href="{{ $setting->facebook_link }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{ $setting->twitter_link }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{ $setting->linkedin_link }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="{{ $setting->instagram_link }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2 mb-4 mb-lg-0">
                <h5 class="text-white mb-2 mb-sm-4">Academic Areas</h5>
                <div class="footer-link">
                    <ul class="list-unstyled mb-0">
                        <li><a class="text-white" href="{{ route('academia.programs-offered') }}">Programs Offered</a>
                        </li>
                        <li><a class="text-white" href="{{ route('academia.curriculum') }}">Curriculum</a></li>
                        <li><a class="text-white" href="{{ route('academia.academic-calendar') }}">Academic Calendar</a>
                        </li>
                        <li><a class="text-white" href="{{ route('academia.facilities') }}">Facilities</a></li>
                        <li><a class="text-white" href="{{ route('academia.admission-process') }}">Admission Process</a>
                        </li>
                        <li><a class="text-white" href="{{ route('academia.scholarships') }}">Scholarships</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2 mb-4 mb-sm-0">
                <h5 class="text-white mb-2 mb-sm-4">Useful Links</h5>
                <div class="footer-link">
                    <ul class="list-unstyled mb-0">
                        <li><a class="text-white" href="{{ route('home') }}">Home</a></li>
                        <li><a class="text-white" href="{{ route('about.our-history') }}">Our History</a></li>
                        <li><a class="text-white" href="{{ route('academia.programs-offered') }}">Programs Offered</a>
                        </li>
                        <li><a class="text-white" href="{{ route('notifications.notice-board') }}">Notice Board</a>
                        </li>
                        <li><a class="text-white" href="{{ route('student.campus-activities') }}">Campus Activities</a>
                        </li>
                        <li><a class="text-white" href="{{ route('gallery.index') }}">Gallery</a></li>
                        <li><a class="text-white" href="{{ route('contact.create') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <h5 class="text-white mb-2 mb-sm-4">Contact Us</h5>
                <p class="text-white">Helped thousands of clients to find the right property for their needs.</p>
                <div class="footer-contact-info">
                    <div class="contact-address mt-4">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <p class="ml-3 mb-0 text-white">{{ $setting->contact_address }}</p>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-microphone-alt"></i>
                            <p class="mb-0 font-weight-bold ml-3">
                                <a class="text-white" tel="{{ $setting->contact_phone }}">
                                    {{ $setting->contact_phone }}
                                </a>
                            </p>
                        </div>
                        <div class="contact-item mb-0">
                            <i class="fas fa-headset"></i>
                            <a class="text-white ml-3 text-white" href="#">{{ $setting->contact_email }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-dark py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <p class="mb-0 text-white">© Copyright {{ now()->format('Y') }} <a href="{{ route('home') }}">
                            academic </a> All Rights
                        Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
