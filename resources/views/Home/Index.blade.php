<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.graygrids.com/themes/hostgrids/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Feb 2024 11:31:24 GMT -->

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
    <!--[if lte IE 9]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please
    <a href="https://browsehappy.com/">upgrade your browser</a> to improve
    your experience and security.
</p>
<![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    @include('Inc.Home.nav')
    <!-- End Header Area -->

    <!-- Start Hero Area -->
    <style>
        .hero-area {
            background: url('https://res.cloudinary.com/dkrfmqbj1/image/upload/v1716580867/latest%20PFE/0_syrs8p.png') center center/cover no-repeat;
            /* Adjust the background properties as needed */
        }
    </style>
    <section class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="hero-content">
                        <h4 class="wow fadeInUp" data-wow-delay=".2s">Trouvez votre médecin chez AlooDoctoor
                        </h4>
                        <h1 class="wow fadeInUp" data-wow-delay=".4s">
                            Des experts en santé dédiés à votre bien-être
                        </h1>

                        <h5 class="wow fadeInUp" data-wow-delay=".8s">Rechercher maintenant</h5>
                        <div class="button wow zoomIn" data-wow-delay="1s">
                            <a href="#pricing"><i class="lni lni-arrow-down-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Blog Section Area -->
    <div class="services section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Médecins généralistes, spécialistes et thérapeutes
                        </h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <div class="f-icon">
                            <img
                                src="https://res.cloudinary.com/dkrfmqbj1/image/upload/v1713098697/PFE/Aloodoctoor/homme_x9bs4c.png">
                        </div>
                        <h4 class="text-title">Médecin</h4>
                        <p>Some quick example text to build card title and make up the bulk tempus nuntism
                            platform plikers.</p>
                        <a href="/medecins" class="btn btn-primary">Trouvez un médecin </a>

                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <div class="f-icon">
                            <img
                                src="https://res.cloudinary.com/dkrfmqbj1/image/upload/v1713098625/PFE/Aloodoctoor/hopital_sedfqy.png">
                        </div>
                        <h4 class="text-title">Clinique</h4>
                        <p>Some quick example text to build card title and make up the bulk tempus nuntism
                            platform plikers.</p>
                        <a href="/clinic" class="btn btn-primary">Trouvez un Clinique</a>

                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <div class="f-icon">
                            <img
                                src="https://res.cloudinary.com/dkrfmqbj1/image/upload/v1713098575/PFE/Aloodoctoor/lit-dhopital_rgjpyj.png">
                        </div>
                        <h4 class="text-title">Operation Medicale</h4>
                        <p>Some quick example text to build card title and make up the bulk tempus nuntism
                            platform plikers.</p>
                        <a href="/operations" class="btn btn-primary">Trouvez un Operation Medicale</a>

                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Section Area -->

    <!-- Start About Area -->
    <section class="about section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="content">
                        <h2>
                            <span>ABOUT US
                            </span>
                            Solutions Numériques pour Patients et Professionnels de Santé
                        </h2>
                        <p>AlooDoctoor offre un espace numérique de santé complet et adapté à la fois aux patients et
                            aux professionnels de santé. Pour les patients, AlooDoctoor centralise la gestion des
                            rendez-vous, la communication avec l'équipe soignante et la conservation des documents
                            médicaux en un seul et même lieu. Les professionnels de santé bénéficient quant à eux d'un
                            logiciel médical en ligne, sans nécessité d'installation , ce qui leur permet de gérer
                            efficacement les rendez-vous et les agendas, ainsi que de partager des documents de manière
                            sécurisée. AlooDoctoor simplifie l'accès aux soins et optimise la gestion des pratiques
                            médicales grâce à des outils numériques intégrés et sécurisés.</p>
                        <div class="button">
                            <a href="javascript:void(0)" class="btn">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="image">
                        <img src="https://res.cloudinary.com/dkrfmqbj1/image/upload/v1713096666/PFE/Aloodoctoor/InShot_20240414_130922526_ivwfqm.webp"
                            alt="#">
                        <img class="shape" src="assets/images/shapes/shape.png" alt="#">
                        <div class="play-thumb">
                            <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&amp;fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM"
                                class="glightbox video"><i class="lni lni-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

    <!-- Start 𝕤𝕡𝕖́𝕔𝕚𝕒𝕝𝕚𝕤𝕥𝕖𝕤 Area -->
    <div class="services section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow zoomIn" data-wow-delay=".2s">𝕤𝕡𝕖́𝕔𝕚𝕒𝕝𝕚𝕤𝕥𝕖𝕤</h2>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Médecins généralistes, spécialistes et
                            thérapeutes</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Sur AlooDoctoor vous pouvez consulter des
                            médecins généralistes, des spécialistes ou des thérapeutes disponibles pour tous, et
                            rapidement !</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <div class="f-icon">
                            <img src="https://hellocare.com/img/hc-logos/picto_generaliste.png">
                        </div>
                        <h4 class="text-title">Médecin généraliste</h4>
                        <p>Some quick example text to build card title and make up the bulk tempus nuntism
                            platform plikers.</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <div class="f-icon">
                            <img src="https://hellocare.com/img/hc-logos/picto_psychologue.png">
                        </div>
                        <h4 class="text-title">Psychologue</h4>
                        <p>Some quick example text to build card title and make up the bulk tempus nuntism
                            platform plikers.</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <div class="f-icon">
                            <img src="https://hellocare.com/img/hc-logos/picto_psychiatre.png">
                        </div>
                        <h4 class="text-title">Psychiatre</h4>
                        <p>Some quick example text to build card title and make up the bulk tempus nuntism
                            platform plikers.</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <div class="f-icon">
                            <img src="https://hellocare.com/img/hc-logos/picto_sexotherapeute.png">
                        </div>
                        <h4 class="text-title">Sexotherapeute</h4>
                        <p>Some quick example text to build card title and make up the bulk tempus nuntism
                            platform plikers.</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <div class="f-icon">
                            <img src="https://hellocare.com/img/hc-logos/picto_naturopathe.png">
                        </div>
                        <h4 class="text-title">Naturopathe</h4>
                        <p>Some quick example text to build card title and make up the bulk tempus nuntism
                            platform plikers.</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <div class="f-icon">
                            <img src="https://hellocare.com/img/hc-logos/picto_sophrologue.png">
                        </div>
                        <h4 class="text-title">Sophrologue</h4>
                        <p>Some quick example text to build card title and make up the bulk tempus nuntism
                            platform plikers.</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <div class="f-icon">
                            <img src="https://hellocare.com/img/hc-logos/picto_dieteticien.png">
                        </div>
                        <h4 class="text-title">Dieteticien</h4>
                        <p>Some quick example text to build card title and make up the bulk tempus nuntism
                            platform plikers.</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <div class="f-icon">
                            <img src="https://hellocare.com/img/hc-logos/picto_gyneco.png">
                        </div>
                        <h4 class="text-title">Gynécologue</h4>
                        <p>Some quick example text to build card title and make up the bulk tempus nuntism
                            platform plikers.</p>
                    </div>
                    <!-- End Single Service -->
                </div>

            </div>
        </div>
    </div>
    <!-- End Services Area -->






    <!-- Start Testimonials Area -->
    <section class="testimonials section">
        <img class="shape" src="assets/images/shapes/shape.png" alt="#">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title align-center gray-bg">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Nos témoignages</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Ce qu'ils disent de nous
                            <br>Avis sincères
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Explorez et apprenez-en davantage sur tout, de
                            l'apprentissage automatique et des paiements mondiaux à la mise à l'échelle de votre
                            équipe..</p>
                    </div>
                </div>
            </div>
            <div class="row testimonial-slider">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <div class="quote-icon">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <div class="author">
                            <img src="https://img.freepik.com/free-vector/isolated-young-handsome-man-different-poses-white-background-illustration_632498-859.jpg"
                                alt="#">
                            <h4 class="name">
                                Tawfik
                                <span class="deg">Patient</span>
                            </h4>
                        </div>
                        <div class="text">
                            <p>"It’s amazing how much easier it has been to meet new people and create instant
                                connections. I have the exact same personality."</p>
                        </div>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <div class="quote-icon">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <div class="author">
                            <img src="https://img.freepik.com/free-vector/isolated-young-handsome-man-different-poses-white-background-illustration_632498-859.jpg"
                                alt="#">
                            <h4 class="name">
                                Mohamed Ali
                                <span class="deg">Patient</span>
                            </h4>
                        </div>
                        <div class="text">
                            <p>"It’s amazing how much easier it has been to meet new people and create instant
                                connections. I have the exact same personality."</p>
                        </div>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <div class="quote-icon">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <div class="author">
                            <img src="https://img.freepik.com/free-vector/isolated-young-handsome-man-different-poses-white-background-illustration_632498-859.jpg"
                                alt="#">
                            <h4 class="name">
                                radia <span class="deg">Patient</span>
                            </h4>
                        </div>
                        <div class="text">
                            <p>"It’s amazing how much easier it has been to meet new people and create instant
                                connections. I have the exact same personality."</p>
                        </div>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <div class="quote-icon">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <div class="author">
                            <img src="https://img.freepik.com/free-vector/isolated-young-handsome-man-different-poses-white-background-illustration_632498-859.jpg"
                                alt="#">
                            <h4 class="name">
                                Mohamed Ali
                                <span class="deg">Patient</span>
                            </h4>
                        </div>
                        <div class="text">
                            <p>"It’s amazing how much easier it has been to meet new people and create instant
                                connections. I have the exact same personality."</p>
                        </div>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <div class="quote-icon">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <div class="author">
                            <img src="https://img.freepik.com/free-vector/isolated-young-handsome-man-different-poses-white-background-illustration_632498-859.jpg"
                                alt="#">
                            <h4 class="name">
                                radia <span class="deg">Patient</span>
                            </h4>
                        </div>
                        <div class="text">
                            <p>"It’s amazing how much easier it has been to meet new people and create instant
                                connections. I have the exact same personality."</p>
                        </div>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Area -->

    <!-- Start Blog Section Area -->
    <section class="blog-section section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Derniers articles
                        </h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Nos dernières actualités
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s">Explorez et apprenez-en davantage sur tout, de
                            l'apprentissage automatique et des paiements mondiaux à la mise à l'échelle de votre équipe.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($latestPosts as $post)
                    <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                        <!-- Start Single Blog Grid -->
                        <div class="single-blog-grid">
                            <div class="blog-img">
                                <a href="{{ route('blog.show', $post->id) }}">
                                    <img src="{{ $post->image }}" alt="{{ $post->title }}">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="meta-info">
                                    <a href="{{ route('blog.show', $post->id) }}" class="date"
                                        href="javascript:void(0)">{{ $post->category }}</a>
                                </div>
                                <h4>
                                    <a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a>
                                </h4>
                                <p>{{ $post->excerpt }}</p>
                            </div>
                        </div>
                        <!-- End Single Blog Grid -->
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- End Blog Section Area -->

    <!-- Start Footer Area -->
    @include('Inc.Home.Footer')

    <!--/ End Footer Area -->

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


<!-- Mirrored from demo.graygrids.com/themes/hostgrids/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Feb 2024 11:31:39 GMT -->

</html>
