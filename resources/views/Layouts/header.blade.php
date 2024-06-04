<!--header top-->
<div class="header-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="top-left text-center text-md-left">
                    <h6>Horaires d'ouverture : du lundi au vendredi - 9h à 18h</h6>
                </div>
            </div>
            <div class="col-md-6">
                <div class="top-right text-center text-md-right">
                    <ul class="social-links">
                        <li>
                            <a href="" aria-label="facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" aria-label="instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" aria-label="tiktok">
                                <i class="fab fa-tiktok"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" aria-label="linkedin">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!--header top-->

<!--Main Header-->
<nav class="navbar navbar-expand-lg navbar-dark justify-content-between">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="logo">
            <a href="{{("/")}}">
                <img loading="lazy" class="img-fluid" src="Frontend/images/reine1.jpeg" alt="logo" style="width: 100px; height: auto; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);">
            </a>
        </div>
        
        <div class="collapse navbar-collapse justify-content-end" id="navbarLinks">
            <ul class="navbar-nav">
                <li class="nav-item @@about">
                    <a class="nav-link" href="{{route('index')}}">Accueil</a>
                </li>
                <li class="nav-item @@about">
                    <a class="nav-link" href="/about">A propos</a>
                </li>
                <li class="nav-item @@service">
                    <a class="nav-link" href="/services">Service</a>
                </li>
                <li class="nav-item @@gallery">
                    <a class="nav-link" href="/paiement">Paiement</a>
                </li>
            </ul>
            @auth
                <div class="dropdown">
                    <button class="btn-style-one dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->nom }}
                    </button>
                    <ul class="dropdown-menu">
                        @if(Auth::check())
                        @if(Auth::user()->role == 'patient')
                    <li> <a class="dropdown-item" href="{{ route('profile') }}">Profil</a></li>
                    @elseif(Auth::user()->role == 'professionnel')
                    <li><a class="dropdown-item" href="{{ route('doctors.index') }}">Tableau de bord</a></li>
                    @endif
                    @endif
                    </ul>
                </div>
            @else
                <div class="link-btn text-center text-lg-right">
                    <a href="{{route('Register')}}" class="btn-style-one custom-margin" style="color: black; background: #ffffff;">Créer un compte</a>
                </div>
                
                <div class="link-btn text-center text-lg-right" style="margin-left: 10px;">
                    <a href="{{route('choix')}}" class="btn-style-one" style="background: #132646;">Se connecter</a>
                </div>
            @endauth
        </div>
    </div>
</nav>
