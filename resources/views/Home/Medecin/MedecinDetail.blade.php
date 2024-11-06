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
    <link rel="stylesheet" href="{{ asset('Homeassets/css/MedecinDetail.css') }}" />

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
                        <h1 class="page-title">{{ $medecin->username }}</h1>
                        <ul class="breadcrumb-nav">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Details Medecin</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <style>
        /* Custom CSS for form elements */
        .form-group label {
            color: #0e54b7;
            /* Set label color to blue */
        }

        .form-control {
            border-color: #0e54b7;
            /* Set border color of form controls to blue */
            border-radius: 20px;
            /* Set border radius for rounded corners */
        }

        .btn-primary {
            background-color: #0e54b7;
            /* Set button background color to blue */
            border-color: #0e54b7;
            /* Set button border color to blue */
            border-radius: 20px;
            /* Set border radius for rounded corners */
            color: white;
            /* Set text color to white */
            text-decoration: none;
            /* Remove underline from the link */
            display: inline-block;
            /* Ensure button displays inline */
            padding: 0.375rem 0.75rem;
            /* Apply padding to the button */
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
            /* Add transition effect */
        }

        .btn-primary:hover {
            background-color: #073e89;
            /* Darker shade of blue for button hover */
            border-color: #073e89;
            /* Darker shade of blue for button border on hover */
        }
    </style>

    <!-- Shop Detail Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner border">
                        <div class="carousel-item active">
                            <img class="w-40" src="{{ asset($medecin->image) }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 pb-5">
                <h3 class="font-weight-semi-bold">{{ $medecin->full_name }} &nbsp;||&nbsp; {{ $medecin->speciality }}
                </h3>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAADS0lEQVR4nO2ZS0hUURjHf6ZZGJWUVqYWGbQSMlpkRYtE2oRBRAVFmGIYZLWM1tKqwih6CLWpXUXagx4LSVr0EiwhIm3Rg4qg1J5oz4lD/wuHYebOXBnvnIH5wd3M/c7c79x7vv/5vu9AlixpZR3QA4wCfcByMox84DgQibqGgVIyhOlAlxwfAVqAIuCyfrtOBjAHeCyH3wJLo+591L1GHGYa0CtHnwLzY9hs1f1PwDwcZBJwR04+AWb62Ha4vMQOyLlXQFkCW7PEBmVfj2MMybHVSdpvk70ZV4JDjMqxwgBjrmmMWWrO8FxOVQYYU6agN+M24wgdcsioUhB2aFw/jtAih84GHFekcb+BHBxgIfAX+AJMDTBuuyZi8jFn6JJTO5O0nwy8dFGGN1nrPS8J+/2yfwRMwCFylZoY55oT2M4CPsu2FgfZIOfeAQU+du2yMxmxk+QAD+TkQZ/Y+CqbJhxmCfAT+AOsimOzxyq0FuAwrVbgF8T5cldl8zDBMkx7qdsnR03JG4tCSxw6JRZOUqVS1zja4LORfpBNuyu7eywarNp9WUyL/50VL/jbcJijliTH66DUWF/vMI4yEbgtJ+/6BHad1C6iitNJioEXcvKGxCAWG63JtLkaM4uA93LyvI9K1VnL7JSrarZYm6Bx8rTPG6+xBKAzznLMlZiYpNNsvgNKXENjBfAticCutqS5J6pPVmvtU9HXRWA2IbEG+GFNJt6XqbA2zSGVxl5GEFHcmVqmSPe8jNp0NLeENZn11mTO+MSCyQCuRL114/A+JaA25RITz65DfbRQvoy3zC74qJn5YrsVNydVz/jRaMXioPpo485K66E3EySQpjWbLKVW7yyiJTmXEPIyT5rvpbj7WG91Qod9UqWU7jNeM+JNih9YYomEketQMoBuPXDUJ2seCzP0v98JMTc7Zq3tEykqvPZa+V6oNFjN8QGJwliptqR+LWmgytrBTRpyCJgS8D8qLCE5QhrJVw/gl1XXNCfZBCwGnmncLS3btGMOVu9bsdOv9my8XnO5ld70BuxJjzs5agJ6bzmixvk5HWlU6njcZM+vLbkNLYkMSp4Oh7p0ChCJc3VrYhmBCeZdwCWp24iy39aAKU2WLKSQf3jSBy3qRwNwAAAAAElFTkSuQmCC"
                    width="20" height="20"> {{ $medecin->numero_telephone }}</h6>
                <br>
                <h6 class="font-weight-semi-bold">disponibilité : {{ $medecin->temps }}</h6>

                <div class="d-flex mb-3">
                    <div class="text-primary mr-2">
                        <small class="fas fa-star"></small>
                        &nbsp;
                        <small class="pt-1">{{ $medecin->adresse }}</small>
                    </div>
                    || &nbsp;&nbsp;
                    <small class="pt-1">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEcklEQVR4nO2WfWwTZRzHL5rwF3/6H/zhWxSXOJPtbtO53sEYiQhRJq6LgRENQzAqM+qSRWEal8BAEWOIbCZg5t7MENkgmca2GwRI17dtDe1dhTmYW1e2wbpmmy9byc88j7b06L09115dYn/JN22uT9LP5/nd756jqGz9j8uXk7PCb6IrBJZu51kmILDMPMo/3+n2AMuY0RpqOZawlt7Kc8yvAseAUniWGeZZ+iVquRSUl9/Pc/RnauBCssinQFH3/df8lB54IR76kOY/yuksX7GqseLQqibzxOqmCkhHXtm3WSc4E4+fK9iiSWB1k7khXeAoD35lBtumopQFeI4e0TTYUjtf1PE2tAlWmJi/DUt3ovizhbfA0+1vqQps+2CTIpizOB+6mFwcZ3Ge4toAV1CuoQNigMqegzC/+AdI1djcNDx6olJR4PiOdbJAZ5lcqH38Eah57GEc9B1dU+hCK5HAsx174/A3IjfhvfONsKVrP/4cmhqGjadrVTtg3Vwku/O1CfCJEnKdQOcEkUC7YIvDrzn5qq4ZGFhfKAlzhslNgo+li3lSugssM0ckcHNhBgugHY9dK+v+CA442kTZbflcVsBbUiAJ06Ug0C0nwDELRAJoYFGh2yZ27ajn+6RZcISE5XkLheZvY8D3L9ztwGs/HYZW3opzdWYM/24Z9cgKHNlZQjTE5wqUhphp1DUDo5FJWPONeAaeat4Fkwth/HuDo0NWgGsoU3mM5uF7HsWl8hjlTfl5RALo+R97CiGJmgtNUNZdB++ePw4jsyF8Hf2e37JHcZC/M5tSPsgElraqwt8rgLK95wDMLf4ueQ4s3lmCPZajivAPfW2Gvu4SCJSmcAqzzJ+/sIVP6BJAQScuOnmDc7fgr+giPsB+uHZR9RxA8JbLGwAEE9z64pkUOkDXaIKXE9CTRHgcvwl+e6OQfPc5pofoddoQ+H8TdRbD1Re1v9j5XyiFAJf/gGb4dAjIwaNEfFUw2NkM/Frpw02UdYUw0NECRPCpCqjBezyXweV2gLd+n6qAt34/XpsxAa3wOP2XwP+y/Gs2v/V5vCZjAkrwSyPVMBG8Dm6P866A2wEDbc2yAoOtJ+PrDBdQgw/PTEI4HIZgcDxJwrerMgne9/oO0RpDBbTCxxKcCIokBr49obj7hgoowbt6q8HqmRLBxyUSO+HqF80CvvedduMFlOAdtmoorZuG9XUR+Nk9qyrhbfgkLjB0uF4Eb4iAFnj2wwiOFgnP2dNxAc+5M8YKkMBrlnA7QHiOA2Eji28pwwT0wGuV8FVtA1/V9iT4tAmkAq9FYuTLI+A9+LExAumAJ5kJVzoF0gmvV4LSK2AEvBaJ8XskdAkYCU8qQZFWJuBZDRJj42NYgligTxb+nbTCs3GJWegdlJa4Pj5KLjDl5aJG7zwr2YlkgWuhG1FigR8vbbAnwvfb9hoKzyZ0wjYoFjh1pddOLHCsj1uJJFAn7L1vZgSeTZCwDk3DcGg0euqKzX7M17mSWCBb2cpWtqhM1N/zqhV03khKRQAAAABJRU5ErkJggg=="
                            width="20" height="20"> <a target="_blank"
                            href="{{ $medecin->location_link }}">localisation</a>
                    </small>
                </div>
                <h3 class="font-weight-semi-bold mb-4">{{ $medecin->tarifs }} TND</h3>
                <p class="mb-4">{{ $medecin->description }}</p>
                <div class="d-flex mb-3">
                    <div class="d-flex align-items-center mb-4">
                        <div class="input-group quantity mr-3" style="width: 130px;">
                            @if (Auth::check())
                            @else
                                <button type="submit" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">Rendezvous</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @if (Auth::check())

                <div class="container">
                    <div class="row px-xl-5">
                        <div class="col">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-pane-1">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <h4 class="mb-3" style="color: #0e54b7;">Prend RendezVous</h4>

                                    <form action="{{ route('rendezvous.store') }}" method="POST">
                                        @csrf
                                        {{-- <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> --}}
                                        <input type="hidden" name="medecin_id" value="{{ $medecin->id }}">
                                        <input type="hidden" name="status" value="pending">
                                        <!-- Champ caché avec valeur par défaut "pending" -->
                                        <input type="hidden" name="payment_status" value="unpaid">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="user_name">Name</label>
                                                    <input type="text" class="form-control" id="user_name"
                                                        name="user_name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="user_email">Email</label>
                                                    <input type="email" class="form-control" id="user_email"
                                                        name="user_email" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="user_phone">Phone Number</label>
                                                    <input type="tel" class="form-control" id="user_phone"
                                                        name="user_phone" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="location">Ville</label>
                                                    <input type="text" class="form-control" id="location"
                                                        name="location" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="date">Date</label>
                                                    <input type="date" class="form-control" id="date"
                                                        name="date" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="time">Time</label>
                                                    <input type="time" class="form-control" id="time"
                                                        name="time" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="note">Situation (Optional)</label>
                                                    <textarea class="form-control" id="note" name="note" rows="4"></textarea>
                                                    <small class="form-text text-muted">Explain your situation here
                                                        (optional)</small>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Rendezvous</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endauth


            @if (Auth::check())
            @else
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Rendezvous</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Please log in to make a rendezvous.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary"
                                    data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif


    </div>
</div>



<br><br>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>

</html>
