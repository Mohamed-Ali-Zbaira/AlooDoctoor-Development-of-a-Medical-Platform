<header class="header navbar-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="nav-inner">
                    <!-- Start Navbar -->
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="/">
                            <img src="https://res.cloudinary.com/dkrfmqbj1/image/upload/v1711831974/PFE/Aloodoctoor/removal.ai__f0724998-e195-4ae8-85ed-cd1f31290bdb-capture-decran-2024-03-30-214640_dltdm5_bnrvrv.png"
                                alt="Logo" width="20" height="50">
                        </a>

                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="/" class="active" aria-label="Toggle navigation">Accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/About" aria-label="Toggle navigation">À propos
                                    </a>
                                </li>



                                <!--
                                <li class="nav-item">
                                    <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                       data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent"
                                       aria-expanded="false" aria-label="Toggle navigation">Blog</a>

                                    <ul class="sub-menu collapse" id="submenu-1-3">
                                        <li class="nav-item"><a href="blog-grid.html">Blog Grid</a>
                                        </li>
                                        <li class="nav-item"><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> -->
                                <li class="nav-item">
                                    <a href="/blog" aria-label="Toggle navigation">Articles</a>
                                </li>

                                <li class="nav-item">
                                    <a href="/contact" aria-label="Toggle navigation">Contact</a>
                                </li>
                                <li class="nav-item">
                                    @auth
                                        @if (auth()->user()->role === 'medecin')
                                            <a href="/Dashboard" aria-label="Toggle navigation">Dashboard</a>
                                        @endif
                                    @endauth
                                </li>
                                <li class="nav-item">
                                    @auth
                                        @if (auth()->user()->role === 'superadmin')
                                            <a href="/dashboardSuperAdmin" aria-label="Toggle navigation">Dashboard</a>
                                        @endif
                                    @endauth
                                </li>
                            </ul>
                        </div> <!-- navbar collapse -->
                        &nbsp;&nbsp;&nbsp;
                        @if (Auth::check())
                            <div class="button" style="display: inline-flex;">
                                <form action="{{ route('logout') }}" method="POST" style="margin-right: 10px;">
                                    @csrf
                                    <button type="submit" class="btn" style="color: red;">Déconnexion</button>
                                </form>

                                <button type="button" id="profileButton" class="btn">
                                    Profile {{ Auth::user()->full_name }}
                                    {{-- {{ Auth::guard('medecin')->user()->full_name }} --}}

                                </button>
                                <script>
                                    // Sélection du bouton
                                    const profileButton = document.getElementById('profileButton');

                                    // Ajout d'un écouteur d'événement pour le clic sur le bouton
                                    profileButton.addEventListener('click', function() {
                                        // Récupération de l'ID de l'utilisateur authentifié
                                        const userId = {{ Auth::id() }};

                                        // Redirection vers la page de profil avec l'ID de l'utilisateur
                                        window.location.href = '/profile/' + userId;
                                    });
                                </script>

                            </div>
                        @else
                            <div class="button">
                                <a href="{{ route('login') }}" class="btn">Connexion</a>
                            </div>
                        @endif
                    </nav>
                    <!-- End Navbar -->
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</header>
