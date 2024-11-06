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
                        <h1 class="page-title">Contact</h1>
                        <ul class="breadcrumb-nav">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <div class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Formulaire de contact</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Comment pouvons-nous vous aider ?</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12">
                    <div class="contact-form">
                        <form class="form" method="POST" action="{{ route('contact.submit') }}">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" id="name" name="name" placeholder="Your Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email">Votre adresse e-mail</label>
                                        <input type="email" id="email" name="email"
                                            placeholder="Votre adresse e-mail" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="subject">Votre sujet</label>
                                        <input type="text" id="subject" name="subject" placeholder="Votre sujet"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="message">Comment pouvons-nous vous aider ?</label>
                                        <textarea id="message" name="message" placeholder="Parlez-moi davantage de votre projet" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="button">
                                        <button type="submit" class="btn">Envoyer le message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
