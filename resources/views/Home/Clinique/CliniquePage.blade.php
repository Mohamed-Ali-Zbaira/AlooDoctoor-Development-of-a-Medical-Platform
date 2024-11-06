<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>


    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('Homeassets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/Medecin.css') }}" />

</head>

<body>

    <!-- Start Navbar -->
    @include('Inc.Home.nav')
    <!--/ End Navbar -->
    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Clinique</h1>
                        <ul class="breadcrumb-nav">
                            <li><a href="index-2.html">Home</a></li>
                            <li> Clinique</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Breadcrumbs -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12">
                <!-- Price Start -->
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Rechercher</h5>
                    <form method="POST" action="{{ route('search') }}">
                        @csrf
                        <div class="form-group">
                            <label for="search-input" class="font-weight-normal">Rechercher:</label>
                            <input type="text" class="form-control" id="search-input" name="search_by"
                                placeholder="Rechercher">
                        </div>
                        <button type="submit" class="btn btn-primary" style="background-color: #133273FF;">Apply
                            Rechercher</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 py-2">
                <div class="row pb-3">
                    <!-- Displaying medecins -->
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach ($clinics as $clinic)
                            <div class="col">
                                <div class="card h-100 rounded w-100">
                                    <a href="{{ route('clinics.show', $clinic->id) }}">
                                        <img src="{{ $clinic->image }}" class="card-img-top" style="max-height: 200px;"
                                            alt="card example" />
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $clinic->nom }}</h5>
                                        <div class="d-flex align-items-center">
                                            <h5 class="card-title ml-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                                    <path
                                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                                    <path
                                                        d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                </svg> {{ $clinic->ville }}
                                            </h5>
                                        </div>
                                        <h5 class="card-text"></h5>
                                        <a href="{{ route('clinics.show', $clinic->id) }}"
                                            class="btn btn-primary btn-block"
                                            style="background-color: #073e89; border-color: #073e89; color: white; border-radius: 10px; display: block;">Plus
                                            de details</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Start Footer  -->
    @include('Inc.Home.Footer')
    <!--/ End Footer  -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-arrow-up-circle"></i>
    </a>

    <!-- ========================= JS here ========================= -->

    <script src="{{ asset('Homeassets/js/main.js') }}"></script>
    <script src="{{ asset('Homeassets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Homeassets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('Homeassets/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('Homeassets/js/count-up.min.js') }}"></script>

    <script>
        //========= testimonial
        tns({
            container: '.testimonial-slider',
            items: 3,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: true,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 2,
                },
                1170: {
                    items: 3,
                }
            }
        });

        //========= glightbox
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });
    </script>
</body>

</html>
