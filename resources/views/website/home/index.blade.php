@extends('website.layout')

@section('page-content')

<div class="container-fluid p-0">
    <div class="owl-carousel header-carousel position-relative">

        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="/website/img/carousel-1.png" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">

            </div>
        </div>

        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="/website/img/carousel-2.jpeg" alt="slide-img">
        </div>

        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="/website/img/carousel-3.jpg" alt="slide-img">
        </div>

        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="/website/img/carousel-4.jpeg" alt="slide-img">
        </div>

        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="/website/img/carousel-5.jpeg" alt="slide-img">
        </div>

        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="/website/img/pip1.jpg" alt="slide-img">
        </div>

        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="/website/img/pip2.jpg" alt="slide-img">
        </div>

        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="/website/img/carousel-8.jpg" alt="slide-img">
        </div>

    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">

        <h6 class="text-center wow fadeInUp" data-wow-delay="0.1s">BORNO STATE CONTRIBUTORY HEALTH CARE
            MANAGEMENT AGENCY</h6>
        <p class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Established by the Government of Borno
            State to ensure effective and efficient Health Care that is accessible, affordable and equitable for
            all in Borno.</p>
        <div class="row g-4">
            <h4 class="side-border wow fadeInUp" data-wow-delay="0.1s">Programmes</h4>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item rounded p-4" href="/website/formal">
                    <i class="fa fa-3x fa-chart-line text-primary mb-4"></i>
                    <h6 class="mb-3">Formal Sector</h6>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="cat-item rounded p-4" href="/website/informal">
                    <i class="fa fa-3x fa-network-wired text-primary mb-4"></i>
                    <h6 class="mb-3">Informal Sector</h6>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="cat-item rounded p-4" href="/website/informal">
                    <i class="fa fa-3x fa-users text-primary mb-4"></i>
                    <h6 class="mb-3">Individuals/Family</h6>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <a class="cat-item rounded p-4" href="/website/basic">
                    <i class="fa fa-3x fa-tasks text-primary mb-4"></i>
                    <h6 class="mb-3">Vulnerable (BHCPF)</h6>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0 about-bg rounded overflow-hidden">
                    <div class="col-6 text-start">
                        <img class="img-fluid" src="/website/img/side002.png">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid" src="/website/img/side003.png" style="padding: 1%;">
                    </div>

                    <div class="col-6 text-end">
                        <img class="img-fluid w-100 img-box" id="box-img" src="/website/img/side004.png">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h4 class="mb-4">Borno State Contributory Healthcare Management Agency (BOSCHMA)</h4>
                <p class="mb-4">Borno State Contributory Healthcare Management Agency (BOSCHMA) law was assented
                    to by the State Governor Prof. Babagana Umara Zulum Mni, FNSE, on the 15th August, 2019 to
                    implement the Borno State Contributory Health Care Scheme. The Scheme is an institutional
                    framework for improving advance healthcare financing through contributions or
                    taxes paid into a common pool to make healthcare services accessible and affordable to all
                    residents of the State. </p>
                <div class="cu-list">
                    <ul>
                        <li>To improve the health of the people in Borno state.</li>
                        <li>Non-profit contributory healthcare scheme for individuals and families</li>
                        <li>Promotive and curative components of health care delivery</li>
                    </ul>
                </div>
                <a class="btn btn-primary rounded-pill py-2 px-5 mt-3" href="/website/ourteam">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Mission and Vission start -->
<div class="container-xxl py-5">
    <div class="container">
        <h3 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Health Care Providers</h3>
        <div class="row g-4 text-center">
            <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item2 rounded p-4" href="">

                    <i class="fa fa-2x fa-check-circle text-primary mb-2"></i>
                    <h4 class="mb-3">Mission</h4>
                    <p class="mb-0 text-dark">To fast-track the achievement of
                        Universal Health Coverage through Effective pooling of
                        resources and strategic purchasing of qualitative, affordable
                        and accessible healthcare services to reduce out of pocket
                        expenditure, increase efficiency , equity and effectiveness in
                        health care delivery..</p>
                </a>
            </div>
            <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="cat-item2 rounded p-4" href="">
                    <i class="fa fa-2x fa-eye mb-2"></i>
                    <h4 class="mb-3">Vission</h4>
                    <p class="mb-0  text-dark">Effective and efficient Healthcare Services towards achieving
                        Universal Health Coverage for all residents of Borno and to ensure effective and
                        efficient
                        Health Care that is accessible, affordable and equitable for all in Borno State.</p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Mission and Vission end -->

<div class="container">
    <h4 class="side-border mb-5 wow fadeInUp" data-wow-delay="0.1s">IMPACT</h4>
    <div class="row mb-5">
        <div class="four col-md-3 p-3">
            <div class="counter-box colored wow fadeInUp" data-wow-delay="0.3s">
                <i class="fas fa-users"></i>
                <span class="counter timer count-title count-number" data-to="{{$numberOfImpacts?->formal_sector_beneficiaries}}" data-speed="2000">
                    {{$numberOfImpacts?->formal_sector_beneficiaries}}
                </span>
                <p>Formal Sector Beneficiaries</p>
            </div>
        </div>
        <div class="four col-md-3 p-3">
            <div class="counter-box wow fadeInUp" data-wow-delay="0.3s">
                <i class="fas fa-child"></i>
                <span class="counter timer count-title count-number" data-to="{{$numberOfImpacts?->bhcpf_Beneficiaries}}" data-speed="2000">
                    {{$numberOfImpacts?->bhcpf_Beneficiaries}}
                </span>
                <p>BHCPF Beneficiaries</p>
            </div>
        </div>
        <div class="four col-md-3 p-3">
            <div class="counter-box wow fadeInUp" data-wow-delay="0.3s">
                <i class="fas fa-hospital-alt"></i>
                <span class="counter timer count-title count-number" data-to="{{$numberOfImpacts?->health_care_providers}}" data-speed="2000">
                    {{$numberOfImpacts?->health_care_providers}}
                </span>
                <p>Healthcare Providers</p>
            </div>
        </div>
        <div class="four col-md-3 p-3">
            <div class="counter-box wow fadeInUp" data-wow-delay="0.3s">
                <i class="fas fa-user-nurse"></i>
                <span class="counter timer count-title count-number" data-to="{{$numberOfImpacts?->impacted_lives}}" data-speed="2000">
                    {{$numberOfImpacts?->impacted_lives}}
                </span>
                <p>Lives Impacted</p>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/2-omN0Bl1qM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>

            <div class="col-md-6 col-sm-12">
                <h4 class="speech-head text-center mb-4">The Executive Governor of Borno state. <br>His
                    Excellency, Prof. Babagana Umara Zulum Mni, FNSE</h4>
                <p class="speech-text side-border">
                    His Excellency, Prof. Babagana Umara Zulum Mni, FNSE
                    “This Administration recognises the importance of health in the development of our society
                    and is according topmost priority to it as encapsulated in the 10-Pact Agenda. This is more
                    so as a result of the 12 years of insurgency which exacerbated the already worsening
                    situation through the destruction of critical health infrastructures across the State”.
                </p>
            </div>

        </div>
    </div>
</div>
<!-- Jobs End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <h5 class="side-border mb-5">Partners</h5>
        <div class="owl-carousel testimonial-carousel">

            <div class="testimonial-item rounded">
                <div class="d-flex justify-content-center">
                    <img class="img-fluid rounded-circle" src="/website/img/partner1.png"
                        style="width: 150px; height: 150px;">
                </div>
            </div>

            <div class="testimonial-item rounded">
                <div class="d-flex justify-content-center">
                    <img class="img-fluid rounded-circle" src="/website/img/partner2.png"
                        style="width: 150px; height: 150px;">
                </div>
            </div>

            <div class="testimonial-item rounded">
                <div class="d-flex justify-content-center">
                    <img class="img-fluid rounded-circle" src="/website/img/partner3.png"
                        style="width: 150px; height: 150px;">
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
