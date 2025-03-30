<header class="header header-style-02 header-sticky mb-0">
    <div class="header-main py-lg-4 bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="d-lg-flex align-items-center">
                        <!-- Logo -->
                        <a class="navbar-brand logo text-lg-center" href="{{ route('home') }}">
                            <img src="{{ asset($setting->logo_light) }}" alt="Logo">
                        </a>
                        <!-- Contact Info -->
                        <div class="header-contact-info ml-auto d-none d-lg-flex justify-content-center">
                            <div class="d-flex mr-3">
                                <i class="fa fa-phone fa-flip-horizontal fa-fw align-self-center text-light"></i>
                                <div class="align-self-center">
                                    <span class="d-block font-weight-bold mb-1 text-light">Call Now</span>
                                    <span>{{ $setting->contact_phone }}</span>
                                </div>
                            </div>
                            <div class="d-flex mr-3 mb-1 mb-lg-0">
                                <i class="far fa-envelope fa-fw align-self-center text-light"></i>
                                <div class="align-self-center">
                                    <span class="d-block font-weight-bold mb-1 text-light">Send Message</span>
                                    <span>{{$setting->contact_email}}</span>
                                </div>
                            </div>
                            <div class="d-flex mb-1 mb-lg-0">
                                <i class="fas fa-map-marker-alt fa-fw align-self-center text-light"></i>
                                <div class="align-self-center">
                                    <span class="d-block font-weight-bold mb-1 text-light">Our Location</span>
                                    <span>{{$setting->contact_address}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Sticky Logo -->
                        <a class="navbar-brand logo-sticky mr-1" href="{{ route('home') }}">
                            <img src="{{ asset($setting->logo) }}" alt="Logo">
                        </a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- Navigation Menu -->
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item dropdown {{ request()->routeIs('about.*') ? 'active' : '' }}">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        About Us
                                        <i class="fas fa-chevron-down fa-xs"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="{{ request()->routeIs('about.our-history') ? 'active' : '' }}">
                                            <a class="dropdown-item" href="{{ route('about.our-history') }}">Our
                                                History</a>
                                        </li>
                                        <li class="{{ request()->routeIs('about.school') ? 'active' : '' }}">
                                            <a class="dropdown-item" href="{{ route('about.school') }}">About
                                                School</a>
                                        </li>
                                        <li class="{{ request()->routeIs('about.vision-mission') ? 'active' : '' }}">
                                            <a class="dropdown-item" href="{{ route('about.vision-mission') }}">Vision
                                                & Mission</a>
                                        </li>
                                        <li class="{{ request()->routeIs('about.leadership-team') ? 'active' : '' }}">
                                            <a class="dropdown-item"
                                                href="{{ route('about.leadership-team') }}">Leadership Team</a>
                                        </li>
                                        <li class="{{ request()->routeIs('about.director-desk') ? 'active' : '' }}">
                                            <a class="dropdown-item" href="{{ route('about.director-desk') }}">Director
                                                Desk</a>
                                        </li>
                                        <li class="{{ request()->routeIs('about.principal-desk') ? 'active' : '' }}">
                                            <a class="dropdown-item"
                                                href="{{ route('about.principal-desk') }}">Principal Desk</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('about.co-principal-desk') ? 'active' : '' }}">
                                            <a class="dropdown-item"
                                                href="{{ route('about.co-principal-desk') }}">Co-Principal Desk</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('about.faculty-directory') ? 'active' : '' }}">
                                            <a class="dropdown-item"
                                                href="{{ route('about.faculty-directory') }}">Faculty Directory</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown {{ request()->routeIs('academia.*') ? 'active' : '' }}">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Academia
                                        <i class="fas fa-chevron-down fa-xs"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li
                                            class="{{ request()->routeIs('academia.programs-offered') ? 'active' : '' }}">
                                            <a class="dropdown-item"
                                                href="{{ route('academia.programs-offered') }}">Programs Offered</a>
                                        </li>
                                        <li class="{{ request()->routeIs('academia.curriculum') ? 'active' : '' }}">
                                            <a class="dropdown-item"
                                                href="{{ route('academia.curriculum') }}">Curriculum</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('academia.academic-calendar') ? 'active' : '' }}">
                                            <a class="dropdown-item"
                                                href="{{ route('academia.academic-calendar') }}">Academic Calendar</a>
                                        </li>
                                        <li class="{{ request()->routeIs('academia.facilities') ? 'active' : '' }}">
                                            <a class="dropdown-item"
                                                href="{{ route('academia.facilities') }}">Facilities</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('academia.admission-process') ? 'active' : '' }}">
                                            <a class="dropdown-item"
                                                href="{{ route('academia.admission-process') }}">Admission Process</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('academia.fee-structure') ? 'active' : '' }}">
                                            <a class="dropdown-item" href="{{ route('academia.fee-structure') }}">Fee
                                                Structure</a>
                                        </li>
                                        <li class="{{ request()->routeIs('academia.scholarships') ? 'active' : '' }}">
                                            <a class="dropdown-item"
                                                href="{{ route('academia.scholarships') }}">Scholarships</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('academia.application-form') ? 'active' : '' }}">
                                            <a class="dropdown-item"
                                                href="{{ route('academia.application-form') }}">Application Form</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item {{ request()->routeIs('gallery.index') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('gallery.index') }}">Gallery</a>
                                </li>
                                <li
                                    class="nav-item dropdown {{ request()->routeIs('notifications.*') ? 'active' : '' }}">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Notice & Event
                                        <i class="fas fa-chevron-down fa-xs"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li
                                            class="{{ request()->routeIs('notifications.notice-board') ? 'active' : '' }}">
                                            <a class="dropdown-item"
                                                href="{{ route('notifications.notice-board') }}">Notice Board</a>
                                        </li>
                                        <li class="{{ request()->routeIs('notifications.events') ? 'active' : '' }}">
                                            <a class="dropdown-item"
                                                href="{{ route('notifications.events') }}">Events</a>
                                        </li>
                                    </ul>
                                </li>

                                <li
                                    class="nav-item dropdown {{ request()->routeIs(['student.*']) ? 'active' : '' }}">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        More
                                        <i class="fas fa-chevron-down fa-xs"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="{{ request()->routeIs('student.guidelines') ? 'active' : '' }}">
                                            <a class="dropdown-item" href="{{ route('student.guidelines') }}">Student
                                                Guidelines</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('student.campus-activities') ? 'active' : '' }}">
                                            <a class="dropdown-item"
                                                href="{{ route('student.campus-activities') }}">Campus Activities</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('student.student-council') ? 'active' : '' }}">
                                            <a class="dropdown-item"
                                                href="{{ route('student.student-council') }}">Student Council</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('student.clubs-organizations') ? 'active' : '' }}">
                                            <a class="dropdown-item"
                                                href="{{ route('student.clubs-organizations') }}">Clubs &
                                                Organizations</a>
                                        </li>
                                        <li class="{{ request()->routeIs('student.housing') ? 'active' : '' }}">
                                            <a class="dropdown-item"
                                                href="{{ route('student.housing') }}">Housing</a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs('student.career-services') ? 'active' : '' }}">
                                            <a class="dropdown-item"
                                                href="{{ route('student.career-services') }}">Career Services</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item {{ request()->routeIs('contact.create') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('contact.create') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
