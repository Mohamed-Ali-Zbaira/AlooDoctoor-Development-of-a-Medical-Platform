<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>HostGrids - Hosting & Domain Services HTML Template.</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('Homeassets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('Homeassets/css/animate.css') }}" />
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
                    <h1 class="page-title">Reset Password</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Reset Password</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Breadcrumbs -->
<div class="account-login section reset-pass">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                <form method="post" class="card login-form inner-content" action="{{ route('updateResetPassword') }}">
                    @csrf
                    <div class="card-body">
                        <div class="title">
                            <h3>Reset Password</h3>
                            <p>Need to reset your password? No problem! Just enter your email & click the button
                                below.</p>
                        </div>
                        <div class="form-group input-group">
                            <input type="hidden" name="token" value="{{ $token }}">

                            <label><i class="lni lni-lock-alt"></i></label>
                            <input class="form-control" type="password" id="password" name="password"
                                   placeholder="Enter your new password" required>
                        </div>
                        <div class="form-group input-group">
                            <label><i class="lni lni-lock-alt"></i></label>
                            <input class="form-control"  id="password-confirm" type="password" name="password_confirmation" required
                                   placeholder="Confirmer password" >
                        </div>

                        <div class="button">
                            <button class="btn" type="submit"> Reset Password</button>
                        </div>
                        <h4 class="create-account">Login to your account <a href="signin.html">Click here</a>
                        </h4>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>@include('Inc.Home.Footer')
<!--/ End Footer  -->

<!-- JS -->
<script src="{{ asset('Homeassets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('Homeassets/js/main.js') }}"></script>
</body>

</html>
