<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{ asset('Clinique/lib/owlcarousel/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Clinique/css/style.css') }}" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('Homeassets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/MedecinDetail.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Include Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

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
                            <li>Details Clinique</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->


    <!-- Shop Detail Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner border">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="{{ $clinic->image }}" alt="Image" />
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 pb-5">
                <h3 class="font-weight-semi-bold">{{ $clinic->nom }}</h3>
                <div class="d-flex mb-3">
                    <div class="text-primary mr-2">
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star-half-alt"></small>
                        <small class="far fa-star"></small>
                    </div>
                    <small class="pt-1">Contactez-nous : {{ $clinic->numero_telephone }}</small>
                </div>
                <div class="d-flex mb-3">
                    <div class="text-primary mr-2">
                        <small class="fas fa-star"></small>
                        &nbsp;
                        <small class="pt-1">{{ $clinic->ville }}</small>
                    </div>
                    || &nbsp;&nbsp;
                    <small class="pt-1">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEcklEQVR4nO2WfWwTZRzHL5rwF3/6H/zhWxSXOJPtbtO53sEYiQhRJq6LgRENQzAqM+qSRWEal8BAEWOIbCZg5t7MENkgmca2GwRI17dtDe1dhTmYW1e2wbpmmy9byc88j7b06L09115dYn/JN22uT9LP5/nd756jqGz9j8uXk7PCb6IrBJZu51kmILDMPMo/3+n2AMuY0RpqOZawlt7Kc8yvAseAUniWGeZZ+iVquRSUl9/Pc/RnauBCssinQFH3/df8lB54IR76kOY/yuksX7GqseLQqibzxOqmCkhHXtm3WSc4E4+fK9iiSWB1k7khXeAoD35lBtumopQFeI4e0TTYUjtf1PE2tAlWmJi/DUt3ovizhbfA0+1vqQps+2CTIpizOB+6mFwcZ3Ge4toAV1CuoQNigMqegzC/+AdI1djcNDx6olJR4PiOdbJAZ5lcqH38Eah57GEc9B1dU+hCK5HAsx174/A3IjfhvfONsKVrP/4cmhqGjadrVTtg3Vwku/O1CfCJEnKdQOcEkUC7YIvDrzn5qq4ZGFhfKAlzhslNgo+li3lSugssM0ckcHNhBgugHY9dK+v+CA442kTZbflcVsBbUiAJ06Ug0C0nwDELRAJoYFGh2yZ27ajn+6RZcISE5XkLheZvY8D3L9ztwGs/HYZW3opzdWYM/24Z9cgKHNlZQjTE5wqUhphp1DUDo5FJWPONeAaeat4Fkwth/HuDo0NWgGsoU3mM5uF7HsWl8hjlTfl5RALo+R97CiGJmgtNUNZdB++ePw4jsyF8Hf2e37JHcZC/M5tSPsgElraqwt8rgLK95wDMLf4ueQ4s3lmCPZajivAPfW2Gvu4SCJSmcAqzzJ+/sIVP6BJAQScuOnmDc7fgr+giPsB+uHZR9RxA8JbLGwAEE9z64pkUOkDXaIKXE9CTRHgcvwl+e6OQfPc5pofoddoQ+H8TdRbD1Re1v9j5XyiFAJf/gGb4dAjIwaNEfFUw2NkM/Frpw02UdYUw0NECRPCpCqjBezyXweV2gLd+n6qAt34/XpsxAa3wOP2XwP+y/Gs2v/V5vCZjAkrwSyPVMBG8Dm6P866A2wEDbc2yAoOtJ+PrDBdQgw/PTEI4HIZgcDxJwrerMgne9/oO0RpDBbTCxxKcCIokBr49obj7hgoowbt6q8HqmRLBxyUSO+HqF80CvvedduMFlOAdtmoorZuG9XUR+Nk9qyrhbfgkLjB0uF4Eb4iAFnj2wwiOFgnP2dNxAc+5M8YKkMBrlnA7QHiOA2Eji28pwwT0wGuV8FVtA1/V9iT4tAmkAq9FYuTLI+A9+LExAumAJ5kJVzoF0gmvV4LSK2AEvBaJ8XskdAkYCU8qQZFWJuBZDRJj42NYgligTxb+nbTCs3GJWegdlJa4Pj5KLjDl5aJG7zwr2YlkgWuhG1FigR8vbbAnwvfb9hoKzyZ0wjYoFjh1pddOLHCsj1uJJFAn7L1vZgSeTZCwDk3DcGg0euqKzX7M17mSWCBb2cpWtqhM1N/zqhV03khKRQAAAABJRU5ErkJggg=="
                            width="20" height="20" />
                        <a target="_blank" href="{{ $clinic->localisation_link }}">localisation</a>
                    </small>
                </div>
                <p class="mb-4">
                    {{ $clinic->description }}
                </p>


            </div>
        </div>
    </div>





    <br><br>
    @include('Inc.Home.Footer')
    <!--/ End Footer  -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-arrow-up-circle"></i>
    </a>
    <script>
        $(document).ready(function() {
            $(".related-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
    </script>
    <!-- ========================= JS here ========================= -->
    <script src="{{ asset('Clinique/js/main.js') }}"></script>
    <script src="{{ asset('Clinique/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('Clinique/lib/easing/easing.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>



    <script src="{{ asset('Homeassets/js/main.js') }}"></script>
    <script src="{{ asset('Homeassets/js/bootstrap.min.js') }}">
        < /> <
        script src = "{{ asset('Homeassets/js/tiny-slider.js') }}" >
    </script>
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
