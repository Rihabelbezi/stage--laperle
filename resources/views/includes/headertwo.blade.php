<div class="top-bar">

    <p class="text">
        <a><i class="fa fa-map-marker"></i> Avenue des etats unis, 8050 Hammamet Tunisie</a>
        <a href="tel:+61383766284"><i class="fa fa-phone"></i> (+216) 72 282 120</a>
    </p>

    <p class="social">
        <a href="https://twitter.com/laperle"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-vimeo"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-skype"></i></a>
    </p>

</div>
<!-- TOP -->

<!-- HEADER -->
<header class="clearfix">

    <div class="logo">
        <a ><img src="{{ asset('assets/images/logo.png') }}" alt="La Perle immobilière">La Perle immobilière</a>
    </div>

    <nav class="navbar collapse" id="mobile-menu">
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{ route('home') }}">Accueil</a></li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown">Villas</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('villas.vente') }}">Vente</a></li>
                    <li><a href="{{ route('villas.LA') }}">Location Annuelles</a></li>
                    <li><a href="{{ route('villas.LS') }}">Location Saisonnières</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown">Appartements</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('appartement.vente') }}">Vente</a></li>
                    <li><a href="{{ route('appartement.LA') }}">Location Annuelles</a></li>
                    <li><a href="{{ route('appartement.LS') }}">Location Saisonnières</a></li>
                </ul>
            </li>
            <li><a href="{{ route('terrains') }}">Terrains</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown">Demeures de charmes</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('demeure.vente') }}">Vente</a></li>
                    <li><a href="{{ route('demeure.LA') }}">Location Annuelles</a></li>
                    <li><a href="{{ route('demeure.LS') }}">Location Saisonnières</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown">locale commercial</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('comerc.vente') }}">Vente</a></li>
                    <li><a href="{{ route('comerc.LA') }}">Location Annuelles</a></li>
                    <li><a href="{{ route('comerc.LS') }}">Location Saisonnières</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown">Residence</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('residence.vente') }}">Vente</a></li>
                    <li><a href="{{ route('residence.LA') }}">Location Annuelles</a></li>
                    <li><a href="{{ route('residence.LS') }}">Location Saisonnières</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown">Duplex</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('duplex.vente') }}">Vente</a></li>
                    <li><a href="{{ route('duplex.LA') }}">Location Annuelles</a></li>
                    <li><a href="{{ route('duplex.LS') }}">Location Saisonnières</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown">Maisonette</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('Maisonette.vente') }}">Vente</a></li>
                    <li><a href="{{ route('Maisonette.LA') }}">Location Annuelles</a></li>
                    <li><a href="{{ route('Maisonette.LS') }}">Location Saisonnières</a></li>
                </ul>
            </li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
     </nav>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobile-menu" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

</header>
