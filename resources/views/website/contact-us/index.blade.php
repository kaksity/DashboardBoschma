@extends('website.layout')

@section('page-content')
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Contact Us for any Query</h1>
        <div class="row g-4">
            <div class="col-12">
                <div class="row gy-4">
                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex align-items-center bg-light rounded p-4">
                            <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3"
                                style="width: 45px; height: 45px;">
                                <i class="fa fa-map-marker-alt text-primary"></i>
                            </div>
                            <span>No.7 LAGOS STREET, ADJACENT TO LAGOS HOUSE MAIDUGURI, BORNO STATE, NIGERIA</span>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center bg-light rounded p-4">
                            <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3"
                                style="width: 45px; height: 45px;">
                                <i class="fa fa-envelope-open text-primary"></i>
                            </div>
                            <span>info@boschma.bornostate.gov.ng</span>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center bg-light rounded p-4">
                            <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3"
                                style="width: 45px; height: 45px;">
                                <i class="fa fa-phone-alt text-primary"></i>
                            </div>
                            <span>+2348122224040</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <iframe class="position-relative rounded w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2858.7847330546642!2d13.165474450453004!3d11.820255625398032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sng!4v1661799487783!5m2!1sen!2sng"
                    frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4">Contact Borno State Contributory Health Care Management Agency (BOSCHMA) Anytime any
                        where.</a>.</p>
                    @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <form action="{{ route('website.contact-us') }}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="full_name" name="full_name"
                                        value="{{ old('full_name') }}" placeholder="Your Name">
                                    <label for="full_name">Your Name</label>
                                </div>
                                @error('full_name')
                                <div class="p-1 text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email_address" id="email_address"
                                        value="{{ old('email_address') }}" placeholder="Your Email">
                                    <label for="email_address">Your Email</label>
                                </div>
                                @error('email_address')
                                <div class="p-1 text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="subject"
                                        value="{{ old('subject') }}" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                                @error('subject')
                                <div class="p-1 text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="content"
                                        value="{{ old('content') }}" name="content" rows="10"></textarea>
                                    <label for="content">Message</label>
                                </div>
                                @error('content')
                                <div class="p-1 text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
