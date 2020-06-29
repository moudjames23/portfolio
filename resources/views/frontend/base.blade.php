<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content="Moud"/>

    <!-- Title  -->
    <title>Moud</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset("frontend/img/favicon.ico") }}"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100i,300,400,600,700" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset("frontend/css/plugins.css") }}"/>

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset("frontend/css/style.css") }}"/>

</head>

<body class="dark-theme">

<!-- =====================================
==== Start Loading -->
<div class="loading">
    <div class="text-center middle">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!-- End Loading ====
======================================= -->


<!-- =====================================
==== Start Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">

        <!-- Logo -->
        <a class="logo" href="#">Moud</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-scroll-nav="0">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="1">A propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="2">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="3">Réalisations</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="5">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="6">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar ====
======================================= -->


<!-- =====================================
==== Start Header -->
<header class="header valign bg-img" data-scroll-index="0" data-overlay-dark="5"
        data-background="{{ asset('frontend/img/background.jpg') }}"
        data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="vertical-center full-width text-center caption">
                <h2></h2>

                <h1 class="cd-headline clip">
                    <span class="blc">Je suis </span>
				            <span class="cd-words-wrapper">
				              <b class="is-visible">Diallo Mamoudou.</b>
				              <b> ingénieur développeur.</b>
				              <b> formateur.</b>
				            </span>
                </h1>
            </div>
        </div>
    </div>

    <div class="arrow">
        <a href="#" data-scroll-nav="1">
            <i class="fas fa-chevron-down"></i>
        </a>
    </div>
</header>
<!-- End Header ====
======================================= -->


<!-- =====================================
==== Start Hero -->
<section class="hero section-padding" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="hero-img mb-md50">
                    <img src="{{ asset('frontend/img/bg1.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="content">
                    <h4 class="title title-left">Qui suis-je ?</h4>

                    <p>Ingénieur en Génie logiciel, Mamoudou Diallo a fondé OCTA en 2018.
                        Il est passionné par la technologie et est très actif dans le secteur.
                        Deux fois lauréats de la semaine nationale du numérique, il est l’homme caché derrière la
                        création de “Quiz224” une application éducative et ludique qui compte plus de 10.000
                        utilisateurs sur playstore et a développé avec son équipe plusieurs solutions digitales
                        pour les entreprises de la place afin de faciliter leur fonctionnement.

                    </p>

                    <p>
                        Il est aussi cofondateur de “Devscom”, une communauté de développeurs très active dans le
                        partage de savoir dont il est le principal formateur depuis plus d’un an et qui avec les jeunes
                        bénéficiaires a développé il y’a quelque mois “Wooly”, une application de don de sang pour la
                        communauté guinéenne.
                    </p>


                    <div class="social-icon">

                        <a href="#0">
                            <span class="icon"><i class="fab fa-twitter"></i></span>
                        </a>
                        <a href="#0">
                            <span class="icon"><i class="fab fa-github"></i></span>
                        </a>
                        <a href="#0">
                            <span class="icon"><i class="fab fa-linkedin"></i></span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero ====
======================================= -->


<!-- =====================================
==== Start Resume -->
<section class="resume bg-img" data-overlay-dark="8" data-background="{{ asset('frontend/img/background2.jpg') }}"
         data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="item mb-md50">
                    <span class="icon icon-pencil"></span><br>
                    <h5 class="title title-left">Education</h5>
                    <ul>
                        <li>
                            <h6>Université Nongo Conakry</h6>

                            <p>2012 - 2016, Bac +4 Génie logiciel</p>
                        </li>
                        <li>
                            <h6>Groupe Scolaire Yattaya</h6>

                            <p>2004 - 2012, BAC</p>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="item mb-md50">
                    <span class="icon icon-briefcase"></span><br>
                    <h5 class="title title-left">Expériences</h5>
                    <ul>
                        <li>
                            <h6>BnDsystems</h6>

                            <p>Octobre 2017 - Avril 2018, Consultant IT</p>
                        </li>
                        <li>
                            <h6>Inekto Group</h6>

                            <p>Juillet 2016 - Janvier 2017, Développeur android</p>
                        </li>
                        <li>
                            <h6>Banki Technologie</h6>

                            <p>Janvier 2016 - Mai 2016, Développeur android</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="item skills">
                    <span class="icon icon-layers"></span><br>
                    <h5 class="title title-left">Mes compétences</h5>

                    <div class="skill">
                        <h6>Android <span>90%</span></h6>

                        <div class="skills-progress"><span data-value='90%'></span></div>
                    </div>
                    <div class="skill">
                        <h6>Laravel <span>80%</span></h6>

                        <div class="skills-progress"><span data-value='80%'></span></div>
                    </div>
                    <div class="skill">
                        <h6>Morpho SDK <span>85%</span></h6>

                        <div class="skills-progress"><span data-value='85%'></span></div>
                    </div>
                    <div class="skill">
                        <h6>Telpo SDK <span>75%</span></h6>

                        <div class="skills-progress"><span data-value='75%'></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Resume ====
======================================= -->


<!-- =====================================
==== Start Services -->
<section class="services section-padding" data-scroll-index="2">
    <div class="container">
        <div class="row">

            <div class="section-head full-width">
                <h4 class="title">Mes services</h4>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="item mb-md50">
                    <span class="icon icon-mobile"></span>
                    <h6>Application android</h6>

                    <p>fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa,
                        ut tincidunt eros est nec diam</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 active bolt">
                <div class="item mb-md50">
                    <span class="icon icon-browser"></span>
                    <h6>Application web</h6>

                    <p>fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa,
                        ut tincidunt eros est nec diam</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="item mb-md50">
                    <span class="icon icon-global"></span>
                    <h6>Biométrie</h6>

                    <p>fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa,
                        ut tincidunt eros est nec diam</p>
                </div>
            </div>
            <div class="bord full-width"></div>
            <div class="col-lg-4 col-md-6">
                <div class="item mb-md50">
                    <span class="icon icon-shield"></span>
                    <h6>ERP</h6>

                    <p>fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa,
                        ut tincidunt eros est nec diam</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 active">
                <div class="item mb-sm50">
                    <span class="icon icon-newspaper"></span>
                    <h6>Formations</h6>

                    <p>fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa,
                        ut tincidunt eros est nec diam</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="item">
                    <span class="icon icon-laptop"></span>
                    <h6>Desktop</h6>

                    <p>fusce quis volutpat porta, ut tincidunt eros est nec diam erat quis volutpat porta, neque massa,
                        ut tincidunt eros est nec diam</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Services ====
======================================= -->


<!-- =====================================
==== Start Numbers -->
<div class="numbers bg-img" data-stellar-background-ratio="0.5" data-overlay-dark="8"
     data-background="{{ asset('frontend/img/background3.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="item mb-md50">
                    <span class="icon icon-happy"></span>

                    <h2 class="count">340</h2>

                    <p>Clients satisfaits</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item mb-md50">
                    <span class="icon icon-layers"></span>

                    <h2 class="count">950</h2>

                    <p>Projets réalisés</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item mb-sm50">
                    <span class="icon icon-profile-male"></span>

                    <h2 class="count">520</h2>

                    <p>Personnes formées</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <span class="icon icon-newspaper"></span>

                    <h2 class="count">6350</h2>

                    <p>Nombre de formations</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Numbers ====
======================================= -->

<!-- =====================================
    	==== Start Portfolio -->
<section class="portfolio section-padding" data-scroll-index="3">
    <div class="container">
        <div class="row">

            <!-- Section-Head -->
            <div class="section-head full-width">
                <h4 class="title">Mes réalisations</h4>
            </div>

        </div>

        <div class="row justify-content-center">

            <!-- filter links -->
            <div class="filtering text-center mb-50">
                <span data-filter='*' class="active">Tout</span>
                <span data-filter='.brand'>Web</span>
                <span data-filter='.web'>Android</span>
                <span data-filter='.graphic'>Biométrie</span>
            </div>

            <!-- gallery -->
            <div class="gallery full-width">

                <!-- gallery item -->
                <div class="col-md-6 col-lg-4 items graphic">
                    <div class="item-img">
                        <img src="{{ asset('frontend/img/portfolio/1.jpg') }}" alt="image">

                        <div class="item-img-overlay text-center valign">
                            <div class="overlay-info vertical-center full-width">
                                <h6>Design . Motion</h6>
                                <h5>Crearive Design</h5>
                            </div>
                            <a href="{{ asset('frontend/img/portfolio/1.jpg') }}" class="link">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="col-md-6 col-lg-4 items web">
                    <div class="item-img">
                        <img src="{{ asset('frontend/img/portfolio/2.jpg') }}" alt="image">

                        <div class="item-img-overlay text-center valign">
                            <div class="overlay-info vertical-center full-width">
                                <h6>Design . Motion</h6>
                                <h5>Crearive Design</h5>
                            </div>
                            <a href="{{ asset('frontend/img/portfolio/2.jpg') }}" class="link">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="col-md-6 col-lg-4 items graphic">
                    <div class="item-img">
                        <img src="{{ asset('frontend/img/portfolio/3.jpg') }}" alt="image">

                        <div class="item-img-overlay text-center valign">
                            <div class="overlay-info vertical-center full-width">
                                <h6>Design . Motion</h6>
                                <h5>Crearive Design</h5>
                            </div>
                            <a href="{{ asset('frontend/img/portfolio/4.jpg') }}" class="link">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="col-md-6 col-lg-4 items web">
                    <div class="item-img">
                        <img src="{{ asset('frontend/img/portfolio/4.jpg') }}" alt="image">

                        <div class="item-img-overlay text-center valign">
                            <div class="overlay-info vertical-center full-width">
                                <h6>Design . Motion</h6>
                                <h5>Crearive Design</h5>
                            </div>
                            <a href="{{ asset('frontend/img/portfolio/4.jpg') }}" class="link">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="col-md-6 col-lg-4 items brand">
                    <div class="item-img">
                        <img src="{{ asset('frontend/img/portfolio/5.jpg') }}" alt="image">

                        <div class="item-img-overlay text-center valign">
                            <div class="overlay-info vertical-center full-width">
                                <h6>Design . Motion</h6>
                                <h5>Crearive Design</h5>
                            </div>
                            <a href="{{ asset('frontend/img/portfolio/5.jpg') }}" class="link">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="col-md-6 col-lg-4 items brand">
                    <div class="item-img">
                        <img src="{{ asset('frontend/img/portfolio/6.jpg') }}" alt="image">

                        <div class="item-img-overlay text-center valign">
                            <div class="overlay-info vertical-center full-width">
                                <h6>Design . Motion</h6>
                                <h5>Crearive Design</h5>
                            </div>
                            <a href="{{ asset('frontend/img/portfolio/6.jpg') }}" class="link">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>



        </div>
    </div>
</section>
<!-- End Portfolio ====
======================================= -->


<!-- =====================================
==== Start Contact -->
<section class="contact section-padding bg-img" data-overlay-dark="8" data-background="img/b5.jpg"
         data-scroll-index="6">
    <div class="container">
        <div class="row">

            <!-- Section-Head -->
            <div class="section-head full-width mb-50">
                <h4 class="title">Contactez-moi</h4>
            </div>

            <form class="form full-width" id="contact-form" method="post" action="contact.php.html">
                <div class="messages"></div>

                <div class="controls">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input id="form_name" type="text" name="name" placeholder="Nom *" required="required">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input id="form_email" type="email" name="email" placeholder="Adresse e-mail *"
                                       required="required">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input id="form_subject" type="text" name="objet" placeholder="Objet *">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea id="form_message" name="message" placeholder="Votre message *" rows="4"
                                          required="required"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                        <span class="buton buton-lg">
	                                    	<button type="submit" front="Envoyer" back="&#xf35d;"></button>
										</span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="info full-width">
                <div class="row">
                    <div class="col-md-4">
                        <div class="item mb-sm50">
                            <span class="icon icon-mobile"></span>

                            <div class="cont">
                                <h6>Téléphone</h6>

                                <p>+224 620 02 94 89</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item mb-sm50">
                            <span class="icon icon-envelope"></span>

                            <div class="cont">
                                <h6>Email</h6>

                                <p>moud23diallo@outlook.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                            <span class="icon icon-map-pin"></span>

                            <div class="cont">
                                <h6>Adresse</h6>

                                <p>Conakry, République de Guinée</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Contact ====
======================================= -->


<!-- =====================================
==== Start Footer -->
<footer class="footer">
    <p>Copyright &copy; And Made With Love All Rights Reserved.</p>
</footer>
<!-- End Footer ====
======================================= -->


<!-- jQuery -->
<script src="{{ asset("frontend/js/jquery-3.0.0.min.js") }}"></script>
<script src="{{ asset("frontend/js/jquery-migrate-3.0.0.min.js") }}"></script>

<!-- popper.min -->
<script src="{{ asset("frontend/js/popper.min.js") }}"></script>

<!-- bootstrap -->
<script src="{{ asset("frontend/js/bootstrap.min.js") }}"></script>

<!-- scrollIt -->
<script src="{{ asset("frontend/js/scrollIt.min.js") }}"></script>

<!-- animated.headline -->
<script src="{{ asset("frontend/js/animated.headline.js") }}"></script>

<!-- jquery.waypoints.min -->
<script src="{{ asset("frontend/js/jquery.waypoints.min.js") }}"></script>

<!-- jquery.counterup.min -->
<script src="{{ asset("frontend/js/jquery.counterup.min.js") }}"></script>

<!-- owl carousel -->
<script src="{{ asset("frontend/js/owl.carousel.min.js") }}"></script>

<!-- jquery.magnific-popup js -->
<script src="{{ asset("frontend/js/jquery.magnific-popup.min.js") }}"></script>

<!-- stellar js -->
<script src="{{ asset("frontend/js/jquery.stellar.min.js") }}"></script>

<!-- isotope.pkgd.min js -->
<script src="{{ asset("frontend/js/isotope.pkgd.min.js") }}"></script>

<!-- validator js -->
<script src="{{ asset("frontend/js/validator.js") }}"></script>

<!-- custom scripts -->
<script src="{{ asset("frontend/js/scripts.js") }}"></script>

</body>
</html>
