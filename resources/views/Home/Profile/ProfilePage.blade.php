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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Start Navbar -->
    @include('Inc.Home.nav')
    <!--/ End Navbar -->
    <!-- Start Breadcrumbs -->
    @include('Home.Profile.ProfileBreadcrumbs')
    <!-- End Breadcrumbs -->

    <style>
        /* Modifier la couleur du bouton primaire */
        .btn-primary {
            background-color: #0e54b7;
            border-color: #0e54b7;
        }

        /* Modifier la couleur du texte du bouton primaire */
        .btn-primary:hover {
            background-color: #073e87;
            border-color: #073e87;
        }

        /* Modifier la couleur de fond de la carte */
        .card {
            background-color: white;
        }

        /* Modifier la couleur du texte du titre de la carte */
        .card-header h4 {
            color: #0e54b7;
        }

        /* Modifier la couleur du texte du pied de page de la carte */
        .card-footer {
            background-color: white;
        }

        /* Modifier la couleur du texte des éléments de la carte */
        .card-body h5,
        .card-body p {
            color: #0e54b7;
        }

        /* Modifier la couleur du bouton de fermeture du modal */
        .modal-header button.close {
            color: #0e54b7;
        }

        .bg-custom {
            background-color: #0e54b7 !important;
            /* Le !important permet d'assurer que cette couleur est prioritaire sur d'autres classes */
        }

        .table tbody tr:hover {
            background-color: #f5f5f5;
            cursor: pointer;
        }
    </style>

    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <!-- Button trigger modal -->
                <div class="col-lg-14">
                    <div class="card border-secondary mb-5">
                        <div class="card-header bg-custom border-0">
                            <h4 class="font-weight-semi-bold m-0 text-white">Profil de l'utilisateur
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset($user->image) }}" alt="Photo de profil" class="rounded-circle mr-3"
                                    style="width: 120px; height: 120px;">
                                <div>
                                    <h5 class="font-weight-medium mb-0">Nom complet : {{ $user->full_name }}</h5>
                                    <p class="font-weight-light text-muted mb-0">Nom d'utilisateur :
                                        {{ $user->username }}</p>
                                    <p class="font-weight-light text-muted mb-0">Email: {{ $user->email }}</p>
                                    <p class="font-weight-light text-muted mb-0">Ville: {{ $user->adresse }}</p>
                                    <p class="font-weight-light text-muted mb-0">Numéro de téléphone :
                                        {{ $user->numero_telephone }}</p>

                                    <p class="font-weight-light text-muted mb-0">Date de création du compte:
                                        {{ $user->created_at }}</p>
                                    <p class="font-weight-light text-muted mb-0">Dernière mise à jour:
                                        {{ $user->updated_at }}</p>
                                    <!-- Ajoutez d'autres champs d'information de l'utilisateur ici si nécessaire -->
                                </div>
                            </div>
                        </div>
                        <div class="card-footer border-secondary bg-transparent">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#updateModal">Modifier</button>
                        </div>
                        <style>
                            .custom-btn-primary {
                                background-color: #0e54b7;
                                color: white;
                            }
                        </style>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="updateModal" tabindex="-1" role="dialog"
                    aria-labelledby="updateModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="updateModalLabel">Update User Profile</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Form for updating user profile -->
                                <form action="{{ route('update.profile') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="inputImage">Profile Picture</label>
                                        <input type="file" class="form-control" id="inputImage" name="photo">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName">Full Name</label>
                                        <input type="text" class="form-control" id="inputName" name="full_name"
                                            value="{{ $user->full_name }}" placeholder="Enter your full name">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUsername">Username</label>
                                        <input type="text" class="form-control" id="inputUsername"
                                            name="username" value="{{ $user->username }}"
                                            placeholder="Enter your username">
                                    </div>
                                    <div class="form-group">
                                        <label for="numero_telephone">numero telephone</label>
                                        <input type="text" class="form-control" id="numero_telephone"
                                            name="numero_telephone" value="{{ $user->numero_telephone }}"
                                            placeholder="Enter your numero_telephone">
                                    </div>
                                    <div class="form-group">
                                        <label for="adresse">Ville</label>
                                        <input type="text" class="form-control" id="adresse" name="adresse"
                                            value="{{ $user->adresse }}" placeholder="Enter your Ville">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">Email address</label>
                                        <input type="email" class="form-control" id="inputEmail" name="email"
                                            value="{{ $user->email }}" placeholder="Enter your email">
                                    </div>
                                    <!-- Add more fields for updating user profile as needed -->
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="icon-tab-0" data-bs-toggle="tab" href="#icon-tabpanel-0"
                        role="tab" aria-controls="icon-tabpanel-0" aria-selected="true"><i
                            class="fa-solid fa-plane-up"></i> Vous Rendez-Vous</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="icon-tab-1" data-bs-toggle="tab" href="#icon-tabpanel-1" role="tab"
                        aria-controls="icon-tabpanel-1" aria-selected="false"><i class="fa-solid fa-suitcase"></i>
                        Vous Operations</a>
                </li>

            </ul>
            <div class="tab-content pt-5" id="tab-content">
                <div class="tab-pane active" id="icon-tabpanel-0" role="tabpanel" aria-labelledby="icon-tab-0">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Fullname Medecin</th>
                                <th scope="col">Specialité Medecin</th>
                                <th scope="col">Date rendezvous</th>
                                <th scope="col">Heure rendezvous</th>
                                <th scope="col">Remarque</th>
                                <th scope="col">Status</th>
                                @foreach ($rendezvous as $rdv)
                                    @if ($rdv->status == 'accepted')
                                        <th scope="col">Actions</th>
                                    @break
                                @endif
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rendezvous as $rdv)
                            <tr id="rdv_{{ $rdv->id }}">
                                <!-- Ajout d'un ID unique pour chaque rendez-vous -->
                                <td>{{ $rdv->medecin->full_name }}</td>
                                <td>{{ $rdv->medecin->speciality }}</td>
                                <td>{{ $rdv->date }}</td>
                                <td>{{ $rdv->time }}</td>
                                <td>{{ $rdv->note }}</td>
                                <td>{{ $rdv->status }}</td>
                                @if ($rdv->status == 'accepted')
                                    <td>
                                        <a href="{{ route('profile.print', $rdv->id) }}">
                                            <button class="btn btn-primary">Voir Détails</button>
                                        </a>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="icon-tabpanel-1" role="tabpanel" aria-labelledby="icon-tab-1">

                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Nom de l'opération</th>
                            <th scope="col">Nom du patient</th>
                            <th scope="col">Nom du Clinique</th>
                            <th scope="col">Remarque</th>
                            <th scope="col">Date</th>
                            <th scope="col">État</th>
                            @if ($rendezvousOperations->contains('status', 'accepted'))
                                <th scope="col">Actions</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rendezvousOperations as $rdvOperations)
                            <tr>
                                <th scope="row">{{ $rdvOperations->operation->nom }}</th>
                                <td>{{ $rdvOperations->user_name }}</td>
                                <td>{{ $rdvOperations->operation->etablissement_medical }}</td>
                                <td>{{ $rdvOperations->note }}</td>
                                <td>{{ date('d/m/Y', strtotime($rdvOperations->date)) }}</td>

                                <td>{{ $rdvOperations->etat }}</td>
                                @if ($rdvOperations->status == 'accepted')
                                    <td>
                                        <a href="{{ route('profileOperation.print', $rdvOperations->id) }}">
                                            <button class="btn btn-primary">Voir Détails</button>
                                        </a>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>


                </table>
            </div>
            <div class="tab-pane" id="icon-tabpanel-2" role="tabpanel" aria-labelledby="icon-tab-2">Content of
                Tab 3</div>
        </div>










    </div>
</div>

<br><br><br><br>
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
