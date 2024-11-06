<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>AlooDoctoor</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="apple-touch-icon" sizes="180x180"
        href="https://res.cloudinary.com/dkrfmqbj1/image/upload/v1711831294/PFE/Aloodoctoor/AlooDoctoor_ozc70p.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="https://res.cloudinary.com/dkrfmqbj1/image/upload/v1711831294/PFE/Aloodoctoor/AlooDoctoor_ozc70p.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="https://res.cloudinary.com/dkrfmqbj1/image/upload/v1711831294/PFE/Aloodoctoor/AlooDoctoor_ozc70p.png">
    <link rel="icon" type="image/png"
        href="https://res.cloudinary.com/dkrfmqbj1/image/upload/v1711831294/PFE/Aloodoctoor/AlooDoctoor_ozc70p.png">
    <link rel="manifest" href="site.webmanifest">
    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('Homeassets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/Medecin.css') }}" />
    @livewireStyles
</head>

<body>

    <!-- Start Navbar -->
    @include('Inc.Home.nav')
    <!--/ End Navbar -->
    <!-- Start Breadcrumbs -->
    @include('Home.Medecin.MedecinBreadcrumbs')
    <!-- End Breadcrumbs -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12">
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Listes medecins</h5>
                    <form method="POST" action="{{ route('search.medecin') }}">
                        @csrf
                        <div class="form-group">
                            <label for="search-input" class="font-weight-normal">Search:</label>
                            <input type="text" class="form-control" id="search-input" name="search_by"
                                placeholder="Search">
                        </div>
                        <div class="form-group">
                            <label for="Specialty-input" class="font-weight-normal">Specialty :</label>
                            <input type="text" class="form-control" id="Specialty-input" name="Specialty"
                                placeholder="Enter Specialty">
                        </div>
                        <div class="form-group">
                            <label for="governorate-input" class="font-weight-normal">Governorate:</label>
                            <select class="form-control" id="governorate-input" name="governorate">
                                <option value="">Sélectionnez le gouvernorat</option>
                                <option value="tunis">Tunis</option>
                                <option value="ariana">Ariana</option>
                                <option value="ben_arous">Ben Arous</option>
                                <option value="manouba">Manouba</option>
                                <option value="nabeul">Nabeul</option>
                                <option value="zaghouan">Zaghouan</option>
                                <option value="bizerte">Bizerte</option>
                                <option value="beja">Béja</option>
                                <option value="jendouba">Jendouba</option>
                                <option value="kasserine">Kasserine</option>
                                <option value="kef">Le Kef</option>
                                <option value="siliana">Siliana</option>
                                <option value="sousse">Sousse</option>
                                <option value="monastir">Monastir</option>
                                <option value="mahdia">Mahdia</option>
                                <option value="sfax">Sfax</option>
                                <option value="gafsa">Gafsa</option>
                                <option value="tozeur">Tozeur</option>
                                <option value="kebili">Kébili</option>
                                <option value="tataouine">Tataouine</option>
                                <option value="medenine">Médenine</option>
                                <option value="gabes">Gabès</option>
                            </select>

                        </div>
                        <button type="submit" class="btn btn-primary"
                            style="background-color: #133273FF; border-radius: 20px;">Apply Filters</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">
                    <!-- Displaying medecins -->
                    @foreach ($medecins->chunk(3) as $chunk)
                        <div class="col-lg-12">
                            <div class="row">
                                @foreach ($chunk as $medecin)
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="card product-item border-0 mb-4">
                                            <div
                                                class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                                <a href="{{ route('medecin.show', $medecin->id) }}">
                                                    <img class="img-fluid w-100" src="{{ asset($medecin->image) }}"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                                <div class="d-flex justify-content-start align-items-center mb-2">
                                                    &emsp;&emsp;&emsp; <img width="30" height="30"
                                                        src="https://img.icons8.com/ios-filled/50/user.png"
                                                        alt="user">
                                                    <h6 class="text-truncate m-0 ml-2">{{ $medecin->full_name }}</h6>
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center mb-2">
                                                    &emsp;&emsp;&emsp;<img width="30" height="30"
                                                        src="https://img.icons8.com/color/48/doctor-male-skin-type-2.png"
                                                        alt="doctor-male-skin-type-2">
                                                    <h6 class="m-0 ml-2">{{ $medecin->speciality }}</h6>
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    &emsp;&emsp;&emsp;<img width="30" height="30"
                                                        src="https://img.icons8.com/ios-filled/50/marker.png"
                                                        alt="marker">
                                                    <h6 class="text-muted m-0 ml-2">{{ $medecin->adresse }}</h6>
                                                </div>
                                            </div>
                                            <div class="card-footer d-flex justify-content-between bg-light border">
                                                <a href="{{ route('medecin.show', $medecin->id) }}"
                                                    class="btn btn-sm text-dark p-0"><i
                                                        class="fas fa-eye text-primary mr-1"></i>View Profile</a>
                                                <a href="" class="btn btn-sm text-dark p-0"><i
                                                        class="fas fa-shopping-cart text-primary mr-1"></i>Rendez-Vous</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pagination left">
                    <ul class="pagination-list">
                        @if ($medecins->previousPageUrl())
                            <li><a href="{{ $medecins->previousPageUrl() }}">Prev</a></li>
                        @endif
                        @for ($i = 1; $i <= $medecins->lastPage(); $i++)
                            <li class="{{ $i == $medecins->currentPage() ? 'active' : '' }}">
                                <a href="{{ $medecins->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                        @if ($medecins->nextPageUrl())
                            <li><a href="{{ $medecins->nextPageUrl() }}">Next</a></li>
                        @endif
                    </ul>
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
    @livewireScripts

</body>

</html>
