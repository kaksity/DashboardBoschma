<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-lg-0 p-sm-4">
    <a href="/website/" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
        <img src="/website/img/logo.png" alt="" width="50px" height="50px">
        <h3 class="m-1 text-primary">BOSCHMA</h3>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-3 p-4 p-lg-0">
            <a href="{{ route('website.home') }}" class="nav-item nav-link active">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Programmes</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{ route('website.programmes.formal') }}" class="dropdown-item">Formal sector</a>
                    <a href="{{ route('website.programmes.informal') }}" class="dropdown-item">Informal sector</a>
                    <a href="{{ route('website.programmes.basic') }}" class=" dropdown-item">BHCPF</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Networks</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{ route('website.networks.healthcare-providers') }}" class="dropdown-item">
                        Health Care Providers
                    </a>
                    <a href="{{ route('website.networks.mdas') }}" class="dropdown-item">MDAs</a>
                </div>
            </div>
            <a href="/website/news/" class="nav-item nav-link">News</a>
            <a href="{{ route('website.about-us') }}" class="nav-item nav-link">Our Team</a>
            <a href="{{ route('website.contact-us') }}" class="nav-item nav-link">Contact <i class="fa fa-headset"></i> </a>
        </div>
        <a href="/website/register" class="btn btn-primary rounded-pill py-1 px-lg-4 px-sm-2" id="btn-signup">Sign up<i
                class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
