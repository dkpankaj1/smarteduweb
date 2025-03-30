<x-web-layout>
    <x-breadcrumb title="Notice Board" bgurl="{{ asset('assets/frontend/images/bg/09.jpg') }}">
        <li class="breadcrumb-item active">Notice Board</li>
    </x-breadcrumb>

    <section class="space-ptb">
        <div class="container">
            <div class="card shadow-sm rounded-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Latest Notices</h4>
                </div>
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <h5 class="mb-1"><a href="#" class="text-dark">Meeting Tomorrow</a></h5>
                        <small class="text-muted">March 29, 2025 - 10:00 AM</small>
                        <p class="mt-2 text-secondary">A general meeting will be held in the main conference room to discuss project updates and future planning. Attendance is mandatory.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Show Details</a>
                    </div>
                    <div class="list-group-item">
                        <h5 class="mb-1"><a href="#" class="text-dark">Holiday Notice</a></h5>
                        <small class="text-muted">April 1, 2025</small>
                        <p class="mt-2 text-secondary">The office will remain closed for the annual spring festival. Normal operations will resume on April 2, 2025.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Show Details</a>
                    </div>
                    <div class="list-group-item">
                        <h5 class="mb-1"><a href="#" class="text-dark">System Maintenance</a></h5>
                        <small class="text-muted">March 30, 2025 - 2:00 AM</small>
                        <p class="mt-2 text-secondary">Scheduled maintenance for server upgrades and security enhancements. Some services may be temporarily unavailable.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Show Details</a>
                    </div>
                    <div class="list-group-item">
                        <h5 class="mb-1"><a href="#" class="text-dark">Policy Update</a></h5>
                        <small class="text-muted">March 31, 2025</small>
                        <p class="mt-2 text-secondary">New company policies regarding remote work and leave application have been updated. Please review them in the HR portal.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Show Details</a>
                    </div>
                    <div class="list-group-item">
                        <h5 class="mb-1"><a href="#" class="text-dark">Office Renovation</a></h5>
                        <small class="text-muted">April 5 - April 10, 2025</small>
                        <p class="mt-2 text-secondary">The office will undergo renovation, and some areas may be inaccessible. Please follow the designated work arrangements during this period.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Show Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-web-layout>
