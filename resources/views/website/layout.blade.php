<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BOSCHMA - You're welcome !</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="BOSCHMA, Borno state, Borno, Maiduguri, Health Care, NHIS-Maiduguri" name="keywords">
    <meta
        content="
            Borno state Contributory Healthcare Management Agency (BOSCHMA) was established by his Excellency Prof. Babagana Umara Zulum, FNSE, mni Executive Governor of Borno State Law on 15th of August 2019 to implement the Borno State Contributory Healthcare Scheme.
        "
        name="description">
    @include('website.partials._styles')
</head>

<body>
    <div class="container-xxl bg-white p-0">

        @include('website.partials._top-nav')

        <div>
            @yield('page-content')
        </div>
        @include('website.partials._footer')

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    @include('website.partials._script')
</body>

</html>
