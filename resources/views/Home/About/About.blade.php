<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>AlooDoctoor</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="apple-touch-icon" sizes="180x180" href="https://res.cloudinary.com/dkrfmqbj1/image/upload/v1711831294/PFE/Aloodoctoor/AlooDoctoor_ozc70p.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://res.cloudinary.com/dkrfmqbj1/image/upload/v1711831294/PFE/Aloodoctoor/AlooDoctoor_ozc70p.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://res.cloudinary.com/dkrfmqbj1/image/upload/v1711831294/PFE/Aloodoctoor/AlooDoctoor_ozc70p.png">
    <link rel="icon" type="image/png" href="https://res.cloudinary.com/dkrfmqbj1/image/upload/v1711831294/PFE/Aloodoctoor/AlooDoctoor_ozc70p.png">
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
@include('Home.About.AboutBreadcrumbs')
<!-- End Breadcrumbs -->
<section class="about section about-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="content">
                    <h2>
                            <span>ABOUT US
                            </span>
                        Bring Care to Your
                        Home With One Click
                    </h2>
                    <p>Dictum non consectetur a erat nam at lectus urna. Hac habitasse platea dictumst quisque
                        sagittis. Augue lacus viverra vitae congue eu consequat acLorem ipsum dolor amet consectetur adipisicing elitiuim sete eiusmod tempor incididunt ut labore etnalom dolore magn aiqua udiminimate veniam quis norud exercitation ullamco laboris nisi aliquip commodo consequat duis aute irure dolor in reprehenderit.Lorem ipsum dolor amet consectetur adipisicing elitiuim sete eiusmod tempor incididunt ut labore etnalom dolore magn aiqua udiminimate veniam quis norud exercitation ullamco laboris nisi aliquip commodo consequat duis aute irure dolor in reprehenderit.Lorem ipsum dolor amet consectetur adipisicing elitiuim sete eiusmod tempor incididunt ut labore etnalom dolore magn aiqua udiminimate veniam quis norud exercitation ullamco laboris nisi aliquip commodo consequat duis aute irure dolor in reprehenderit.</p>
                    <div class="button">
                        <a href="{{ route('contact.form') }}"  class="btn">Contact Us </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="image">
                    <img src="https://res.cloudinary.com/dkrfmqbj1/image/upload/v1710453721/PFE/Vue/About/img-01-2_jai5yf.png" alt="#">
                    <img class="shape" src="https://res.cloudinary.com/dkrfmqbj1/image/upload/v1708980452/PFE/assets/images/shapes/shape_uad7cf.png" alt="#">
                    <div class="">
                        <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&amp;fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM"
                           class="glightbox video"><i class=""></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- Start Footer  -->
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

