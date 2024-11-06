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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('Homeassets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/main.css') }}" />

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
                        <h1 class="page-title">OperationMedicale</h1>
                        <ul class="breadcrumb-nav">
                            <li><a href="index-2.html">Home</a></li>
                            <li>OperationMedicale</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12">
                <!-- Price Start -->
                <div class="input-group mb-3">
                    <form action="{{ route('operations.search') }}" method="POST" class="w-100">
                        @csrf
                        <input type="text" class="form-control" name="query" placeholder="Rechercher ...">
                        <div class="input-group-append py-2">
                            <button class="btn btn-primary" type="submit"
                                style="background-color: #133273FF;">Rechercher
                                <i class="lni lni-search-alt"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">
                    <div class="col-lg-12">
                        <div class="row">
                            @if (isset($listeOperations) || isset($operations))
                                @foreach (isset($listeOperations) ? $listeOperations : $operations as $operation)
                                    <div class="col-sm-12 mb-2">
                                        <div class="mx-auto" style="max-width: 90%;">
                                            <div class="card d-flex flex-row">
                                                <img class="py-2 px-2" style="max-width: 20%; "
                                                    src="{{ $operation->image }}" />
                                                <div class="card-body">
                                                    <h5
                                                        class="card-title d-flex justify-content-between align-items-center">
                                                        <h2 class="item-title">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                                height="30" fill="currentColor" class="bi bi-tag"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z" />
                                                                <path
                                                                    d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z" />
                                                            </svg>
                                                            {{ $operation->nom }}
                                                        </h2>
                                                    </h5>
                                                    <h4 class="item-title">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                            height="30" fill="currentColor" class="bi bi-award-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z" />
                                                            <path
                                                                d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                                                        </svg>
                                                        {{ $operation->description }}
                                                    </h4>
                                                    <div class="item-price">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-geo-alt"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                                            <path
                                                                d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                        </svg>
                                                        {{ $operation->ville }}
                                                    </div>
                                                    <div class="card-text py-2">
                                                        <div class="item-description"></div>
                                                    </div>
                                                    <button class="btn btn-outline-primary" data-toggle="modal"
                                                        data-target="#appointmentModal_{{ $operation->id }}">
                                                        Rendez Vous
                                                    </button>

                                                    <button class="btn btn-primary voir-details"
                                                        style="background-color: #133273FF;"
                                                        data-operation-id="{{ $operation->id }}" data-toggle="modal"
                                                        data-target="#detailsModal_{{ $operation->id }}">Voir les
                                                        détails</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="detailsModal_{{ $operation->id }}" tabindex="-1"
                                        aria-labelledby="detailsModalLabel_{{ $operation->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header  text-white"
                                                    style="background-color: #133273FF;">
                                                    <h5 class="modal-title text-white" id="detailsModalLabel">
                                                        {{ $operation->nom }}</h5>
                                                    <button type="button" class="close text-white"
                                                        data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <div class="main-body">
                                                            <div class="row gutters-sm">
                                                                <div class="col-md-4 mb-3">
                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <div
                                                                                class="d-flex flex-column align-items-center text-center">
                                                                                <img src="https://res.cloudinary.com/dkrfmqbj1/image/upload/v1710827869/PFE/Vue/Operation%20medicale/about-3_c9hr3x.jpg"
                                                                                    alt="Admin" width="150" />
                                                                                <div class="mt-3">
                                                                                    <h4>{{ $operation->nom }}</h4>

                                                                                    <p class="text-muted font-size-sm">
                                                                                        {{ $operation->ville }}</p>
                                                                                    <button
                                                                                        class="btn btn-primary col-sm-12"
                                                                                        style="background-color: #133273FF;">Contacter</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card mt-3">
                                                                        <ul class="list-group list-group-flush">
                                                                            <li
                                                                                class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                                                <h6 class="mb-0">Nom Clinic</h6>
                                                                                <span
                                                                                    class="text-secondary">{{ $operation->etablissement_medical }}</span>
                                                                            </li>
                                                                            <li
                                                                                class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                                                <h6 class="mb-0">Nom medecin</h6>
                                                                                <span
                                                                                    class="text-secondary">{{ $operation->medecin }}</span>
                                                                            </li>
                                                                            <li
                                                                                class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                                                <h6 class="mb-0">Tarifs</h6>
                                                                                <span
                                                                                    class="text-secondary">{{ $operation->tarifs }}</span>
                                                                            </li>

                                                                            <li
                                                                                class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                                                <h6 class="mb-0">Durée</h6>
                                                                                <span
                                                                                    class="text-secondary">{{ $operation->duree }}</span>
                                                                            </li>
                                                                            <li
                                                                                class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                                                <h6 class="mb-0">Numero Telephone
                                                                                </h6>
                                                                                <span class="text-secondary">+216
                                                                                    22014789</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="card mb-3">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-sm-9">
                                                                                    <h6 class="mb-0">Description</h6>
                                                                                </div>
                                                                                <div class="col-sm-9 text-secondary">
                                                                                    {{ $operation->description }}
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-sm-9">
                                                                                    <h6 class="mb-0">Numéro Chambre
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="col-sm-9 text-secondary">
                                                                                    {{ $operation->numero_chambre }}
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">

                                                                                <div class="col-sm-9">
                                                                                    <h6 class="mb-0">Complications
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="col-sm-9 text-secondary">
                                                                                    {{ $operation->complications }}
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-sm-9">
                                                                                    <h6 class="mb-0">Préparatifs
                                                                                        Pré-Opératoires</h6>
                                                                                </div>
                                                                                <div class="col-sm-9 text-secondary">
                                                                                    {{ $operation->preparatifs_pre_operatoires }}
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-sm-9">
                                                                                    <h6 class="mb-0">Suivi
                                                                                        Post-Opératoire</h6>
                                                                                </div>
                                                                                <div class="col-sm-9 text-secondary">
                                                                                    {{ $operation->suivi_post_operatoire }}
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-sm-9">
                                                                                    <h6 class="mb-0">Documents
                                                                                        Associés</h6>
                                                                                </div>
                                                                                <div class="col-sm-9 text-secondary">
                                                                                    {{ $operation->documents_associes }}
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-sm-9">
                                                                                    <h6 class="mb-0">Notes</h6>
                                                                                </div>
                                                                                <div class="col-sm-9 text-secondary">
                                                                                    {{ $operation->notes }}
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="appointmentModal_{{ $operation->id }}"
                                        tabindex="-1" role="dialog"
                                        aria-labelledby="appointmentModalLabel_{{ $operation->id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"
                                                        id="appointmentModalLabel_{{ $operation->id }}">Prendre un
                                                        Rendez-vous</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    @auth
                                                        <form action="{{ route('rendezvousOperations.store') }}"
                                                            method="POST">
                                                            @csrf
                                                            <!-- Hidden inputs for user and operation identifiers -->
                                                            <input type="hidden" name="user_id"
                                                                value="{{ Auth::user()->id }}">
                                                            <input type="hidden" name="operation_id"
                                                                value="{{ $operation->id }}">
                                                            <input type="hidden" name="medecin_id"
                                                                value="{{ $operation->user_id }}">
                                                            <!-- Ensure $operation_id is passed to the view -->

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <!-- User name, possibly pre-filled from the authenticated user profile -->
                                                                    <div class="form-group">
                                                                        <label for="user_name">Nom</label>
                                                                        <input type="text" class="form-control"
                                                                            id="user_name" name="user_name"
                                                                            value="{{ Auth::user()->name }}" required>
                                                                    </div>

                                                                    <!-- User email, possibly pre-filled from the authenticated user profile -->
                                                                    <div class="form-group">
                                                                        <label for="user_email">Email</label>
                                                                        <input type="email" class="form-control"
                                                                            id="user_email" name="user_email"
                                                                            value="{{ Auth::user()->email }}" required>
                                                                    </div>

                                                                    <!-- User phone number, editable or pre-filled if available -->
                                                                    <div class="form-group">
                                                                        <label for="user_phone">Numéro de téléphone
                                                                        </label>
                                                                        <input type="tel" class="form-control"
                                                                            id="user_phone" name="user_phone"
                                                                            value="{{ Auth::user()->phone }}" required>
                                                                    </div>

                                                                    <!-- Location input -->
                                                                    <div class="form-group">
                                                                        <label for="location">Ville</label>
                                                                        <input type="text" class="form-control"
                                                                            id="location" name="location" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <!-- Appointment date -->
                                                                    <div class="form-group">
                                                                        <label for="date">Date</label>
                                                                        <input type="date" class="form-control"
                                                                            id="date" name="date" required>
                                                                    </div>

                                                                    <!-- Optional note for further details about the situation -->
                                                                    <div class="form-group">
                                                                        <label for="note">Situation (Optional)</label>
                                                                        <textarea class="form-control" id="note" name="note" rows="4"></textarea>
                                                                        <small class="form-text text-muted">Expliquez votre
                                                                            situation ici (facultatif)






                                                                        </small>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Submit button -->
                                                            <button type="submit" class="btn btn-primary"
                                                                style="background-color: #073e89;">Confirmer
                                                                Rendezvous</button>
                                                        </form>
                                                    @else
                                                        <p>Please log in to a rendezvous.</p>
                                                    @endauth

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination left">
                <ul class="pagination-list">
                    <li><a href="{{ $operations->previousPageUrl() }}">Prev</a></li>
                    @for ($i = 1; $i <= $operations->lastPage(); $i++)
                        <li class="{{ $i == $operations->currentPage() ? 'active' : '' }}">
                            <a href="{{ $operations->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor
                    <li><a href="{{ $operations->nextPageUrl() }}">Next</a></li>
                </ul>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

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
