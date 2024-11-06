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
                        <h1 class="page-title">Sign Up</h1>
                        <ul class="breadcrumb-nav">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Sign Up</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Account Signup Area -->
    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <!-- Display validation errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="card login-form inner-content" method="post" action="{{ route('register') }}">
                        @csrf
                        <div class="card-body">
                            <div class="title">
                                <h3>Let's join us</h3>
                                <p>Use the form below to create your account.</p>
                            </div>
                            <div class="alt-option">
                                <a href="javascript:void(0)" class="option-button google"><i class="lni lni-google"></i>
                                    Google Sign in</a>
                                <a href="javascript:void(0)" class="option-button facebook"><i
                                        class="lni lni-facebook-filled"></i> Facebook Sign in</a>
                            </div>
                            <div class="or"><span>or sign up with your email</span></div>
                            <div class="input-head">
                                <div class="form-group input-group">
                                    <label><i class="lni lni-user"></i></label>
                                    <input class="form-control" type="text" name="full_name"
                                        placeholder="Enter your name" required>
                                </div>
                                <div class="form-group input-group">
                                    <label><i class="lni lni-user"></i></label>
                                    <input class="form-control" type="text" name="username"
                                        placeholder="Enter your username" required>
                                </div>
                                <div class="form-group input-group">
                                    <label><i class="lni lni-envelope"></i></label>
                                    <input class="form-control" type="email" name="email"
                                        placeholder="Enter your email" required>
                                </div>
                                <div class="form-group input-group">
                                    <label><i class="lni lni-lock-alt"></i></label>
                                    <input class="form-control" type="password" name="password"
                                        placeholder="Enter your password" required>
                                </div>
                                <div class="form-group input-group">
                                    <select class="form-control" name="role" required>
                                        <option value="" disabled selected>Select your role</option>
                                        <option value="user">user</option>
                                        <option value="medecin">medecin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between bottom-content">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input width-auto" id="exampleCheck1">
                                    <label class="form-check-label">Agree to <a href="javascript:void(0)">privacy &
                                            conditions</a></label>
                                </div>
                            </div>
                            <div class="button">
                                <button class="btn" type="submit">Sign Up</button>
                            </div>
                            <h4 class="create-account">Already have an account? <a href="{{ route('login') }}">Sign In
                                    Now</a>
                            </h4>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Account Signup Area -->

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
    <!--<script src="{{ asset('Homeassets/js/tiny-slider.js') }}"></script>-->
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
