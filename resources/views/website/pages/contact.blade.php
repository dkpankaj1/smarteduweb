<x-web-layout>
    <x-breadcrumb title="Contact Us" bgurl="{{ asset('assets/frontend/images/bg/06.jpg') }}">
        <li class="breadcrumb-item active">Contact Us</li>
    </x-breadcrumb>


    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <h4 class="mb-4">Need Assistance? Please Complete The Contact Form</h4>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control bg-white border" id="Website"
                                    placeholder="Website URL">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control bg-white border" id="name"
                                    placeholder="Your Name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control bg-white border" id="inputEmail4"
                                    placeholder="Email Address">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control bg-white border" id="number"
                                    placeholder="Phone Number">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea class="form-control bg-white border" rows="4" placeholder="Message"></textarea>
                            </div>
                            <div class="col-md-12">
                                <a class="btn btn-primary" href="#">Send Message</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex mb-3 bg-primary p-4 border-radius mb-4">
                                <div class="text-primary mr-3">
                                    <i class="fas fa-3x fa-map-signs text-white"></i>
                                </div>
                                <div class="recent-post-info">
                                    <span class="text-white">17504 Carlton Cuevas Rd Gulfport, MS, 39503</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex mb-3 bg-light p-4 border-radius mb-4">
                                <div class="text-primary mr-3">
                                    <i class="far fa-3x fa-envelope"></i>
                                </div>
                                <div class="recent-post-info">
                                    <span>letstalk@academic.com<br> Mon-Fri 8:30am-6:30pm</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex bg-dark p-4 border-radius">
                                <div class="text-white mr-3">
                                    <i class="fas fa-3x fa-headphones-alt"></i>
                                </div>
                                <div class="recent-post-info">
                                    <span class="text-white">+(704) 279-1249<br> 24 X 7 online support</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-sm-12">
                    <div class="map h-500">
                        <!-- iframe START -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d531385.2447064935!2d-74.43603312353214!3d40.77228045370446!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1599035039575!5m2!1sen!2sin"
                            style="width: 100%; height: 100%;"></iframe>
                        <!-- iframe END -->
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-web-layout>
