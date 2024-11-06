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
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Blog Single Sidebar</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Blog Single Sidebar</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<section class="section blog-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12">
                <div class="single-inner">
                    <div class="post-details">
                        <div class="main-content-head">


                            <div class="post-thumbnils">
                                <img src="{{ asset($article->image) }}" alt="#">
                                <div class="meta-information">
                                    <ul class="meta-info">
                                        <li>
                                            <a href="javascript:void(0)">{{ $article->user->full_name }}</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">{{ $article->created_at->format('d M Y') }}</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">{{ $article->category }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="detail-inner">
                                <h2 class="post-title">{{ $article->title }}</h2>
                                <p>{{ $article->body }}</p>
                            </div>

                        </div>
                    </div>
                </div>
                @include('Home.Posts.comment-form')
            </div>


            <aside class="col-lg-4 col-md-12 col-12">
                <div class="sidebar">
                    <!-- Start Single Widget -->
                    <div class="widget search-widget">
                        <form action="#">
                            <input type="text" placeholder="Search ...">
                            <button type="submit"><i class="lni lni-search-alt"></i></button>
                        </form>
                    </div>
                    <!-- End Single Widget -->
                    <!-- Start Single Widget -->
                    @include('Home.Posts.Recent-Posts')

                    <!-- End Single Widget -->
                    <!-- Start Single Widget -->
                    @include('Home.Posts.categories-widget')

                    <!-- End Single Widget -->

                </div>
            </aside>

        </div>
    </div>
</section>

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
