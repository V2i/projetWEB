<!DOCTYPE html>
<!--
⠟⠛⣉⣡⣴⣶⣶⣶⣶⣶⣶⣤⣉⡛⢿⣿⣿⠿⠟⠛⣋⣉⣩⣭⣭⣭⣉⣙⠛⠈
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣦⠡⣴⣶⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⠁⠆⠄⠈⢻⣿⣿⣿⠄⣿⣿⣿⣿⣿⣿⣿⣿⣿⠋⠰⠄⠙⣿
⣿⣿⣿⣿⣿⣿⣿⣔⡗⠠⢀⣼⣿⣿⣿⢀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣀⠘⠠⢀⣼
⡉⠛⠿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠟⣋⣡⡈⠛⠛⠛⠿⠿⠿⠿⠿⠿⠿⠿⠿⠿⠿
⠿⠷⠶⣦⣭⣉⣉⣉⣉⣭⡥⣴⡿⠿⢟⣠⣿⣿⣿⣷⣶⣶⣶⣶⣶⣶⣶⣶⣶⣶
⣿⣷⣶⣶⣤⣬⣭⣽⣿⣿⠖⣠⣶⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠛⠁
⣿⣿⣿⣿⡿⠿⠛⣫⣥⣴⣾⣿⣿⣿⣿⣿⣷⣤⣝⠛⢛⣫⣭⣭⣭⣭⣅⠄⠄⠄
⣿⣿⣿⣿⣶⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⣼⣿⣿⣿⣿⣿⣿⣷⡀⠄
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡄
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣶⣶⣶⣮⣭⣉⣙⡛⠿⠿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠿⠟⢛⣉⣭
⣛⣛⣛⡛⠻⠿⢿⣿⣿⣶⣶⣶⣶⣦⣤⣬⣭⣭⣭⣭⣭⣭⣭⣭⣴⣾⣿⣿⣿⡿
⢿⣿⣿⣿⣿⣷⣶⣦⣭⣭⣭⣭⣍⣉⣉⣉⣛⣛⠛⠛⠛⠛⠛⠛⠛⢛⣋⣭⣄⠄
⣶⣦⣬⣍⣙⣛⠛⠛⠛⠿⠿⠿⠿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠋⠄

        D O N T  T O U C H  I T
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <title>House4you</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href="{{secure_asset('lib/bootstrap/css/bootstrap.min.css')}}"> <!--heroku-->
  <link rel="stylesheet" href="{{URL::asset('lib/bootstrap/css/bootstrap.min.css')}}"> <!--local-->

  <!-- Libraries CSS Files -->
  <link rel="stylesheet" href="{{secure_asset('lib/font-awesome/css/font-awesome.min.css')}}"> <!--heroku-->
  <link rel="stylesheet" href="{{URL::asset('lib/font-awesome/css/font-awesome.min.css')}}"> <!--local-->
  <link rel="stylesheet" href="{{secure_asset('lib/animate/animate.min.css')}}"> <!--heroku-->
  <link rel="stylesheet" href="{{URL::asset('lib/animate/animate.min.css')}}"> <!--local-->

  <!-- Main Stylesheet File -->
  <link rel="stylesheet" href="{{secure_asset('css/style.css')}}"> <!--heroku-->
  <link rel="stylesheet" href="{{URL::asset('css/style.css')}}"> <!--local-->

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#hero">House4you</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
            @guest
                <li class="menu-active"><a href="{{ route('register') }}">Inscription</a></li>
                <li><a href="{{ route('login') }}">Connexion</a></li>
            @else
                @if(Auth::user()->admin === 1)
                <li><a class="nav-link" href="{{ route('admin') }}">Admin</a></li>
                @endif
            @endguest
          <li><a href="#about">A propos</a></li>
          <li><a href="#contact">Nous contacter</a></li>
          @auth
            <li>
                <a  class="nav-link" href="{{route('home')}}">
                    {{ Auth::user()->prenom }} <span class="caret"></span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    Déconnexion
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
          @endauth
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Bienvenue</h1>
      <h2>Your vacation, Just have it when you need it</h2>
      <a href="{{ route('houses') }}" class="btn-get-started">Explorer</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Quelques mots à propos de nous</h2>
            <p>
                    Je m'appelle Valentin Guyon, je suis élève ingénieur en informatique et gestion à Polytech Montpellier. J'ai developpé cette application dans le cadre d'un projet scolaire et personnel. Grâce à House4you vous trouverez la maison de vos rêves pour des vacances parfaites.
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fas fa-book-open"></i></div>
              <h4 class="title"><a href="">Consulter</a></h4>
              <p class="description">Vous pouvez consulter toutes les maisons et appartement sur le site.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fas fa-calendar-check"></i></div>
              <h4 class="title"><a href="">Reserver</a></h4>
              <p class="description">Réservez votre coup de coeur.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fas fa-comments"></i></div>
              <h4 class="title"><a href="">Commenter</a></h4>
              <p class="description">Vous voulez laisser un message à votre hôte? pas de Problème!</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight img-fluid"></div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Nous contacter</h3>
          <p class="section-description">N'hesitez pas à nous conctater directement pour nous faire part de vos expériences!</p>
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps 
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
        -->
      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="social-links">
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/homee4you/?hl=fr" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Votre message a été envoyé. Merci!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre Mél." data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="S’il vous plaît écrivez quelque chose pour nous" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Envoyer</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Regna</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{URL::asset('/js/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{URL::asset('/js/main.js')}}" type="text/javascript"></script>

</body>
</html>
