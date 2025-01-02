<?php 
    if (isset($_POST['submit'])) {
        $to = "lenordl@msn.com";
        $firstName = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $message = $_POST['message'] ?? '';
        $subject = "Site web École des aviateurs - demande de contact";
        $messageFull = $firstName . "\n\n" . $email . "\n\n" .$phone . "\n\n" . $message;
        $headers = "From:" . $email;
        mail($to, $subject, $messageFull, $headers);
        echo "Demande envoyée. Merci " . $firstName . ", nous vous répondrons rapidement.";
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>École des aviateurs de Rouen</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">École des aviateurs</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#toutes-nos-formules">Toutes nos formules</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Photos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#brevet-pilote">Brevets de pilote</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Bienvenue à l'école des aviateurs</div>
                <div class="masthead-heading text-uppercase">Cours et baptêmes de pilotage à Rouen</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#toutes-nos-formules">Voir plus</a>
            </div>
        </header>
        <!-- Toutes nos formules-->
        <section class="page-section pt-4" id="toutes-nos-formules">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Toutes nos formules</h2>
                </div>
                <div class="row text-center">
                    <div class="col-md-4 mx-auto mb-5">
                        <video class="w-100 img-thumbnail" autoplay loop muted>
                            <source src="assets/videos/bapteme.mp4" type="video/mp4" />
                        </video>
                        <h4 class="my-3">Baptême de pilotage</h4>
                        <p class="text-muted">Vol de 35 minutes en place commandant de bord (à gauche) avec un instructeur expérimenté. 
                            Vidéo offerte. 
                            Vous recevrez un bon cadeau utilisable par toute personne en sa possession. 
                            Il s'agit d'un stage de pilotage avion ou l'instructeur professionnel vous laissera les commandes du début à la fin. 
                            Vous ferez la mise en route du moteur, le roulage, le décollage, le vol autour de Rouen et même l'atterrissage ! 
                            Exactement comme si vous prépariez un permis avion en aéro-club. Ce baptème de pilotage avion comptera dans vos heures de vol au cas ou vous souhaiteriez un jour passer un brevet de pilote.
                            Cette initiation au pilotage vous permettra également de visiter la région de Rouen comme vous ne l'avez jamais vue.
                        </p>
                        <?php include('paypal90.php'); ?>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-4 mb-5">
                        <video class="w-100 img-thumbnail" autoplay loop muted>
                            <source src="assets/videos/vol-de-nuit.mp4" type="video/mp4" />
                        </video>
                        <h4 class="my-3">Vol de nuit</h4>
                        <p class="text-muted">
                            Faites votre cours de pilotage en vol de nuit autour de rouen pour 129 Euros.
                        </p>
                        <?php include('paypal120.php'); ?>
                    </div>
                    <div class="col-md-4">
                        <video class="w-100 img-thumbnail" autoplay loop muted>
                            <source src="assets/videos/deux-lecons.mp4" type="video/mp4" />
                        </video>
                        <h4 class="my-3">Deux leçons de pilotage avion</h4>
                        <p class="text-muted">
                            Avec deux lecons, vous aurez un bien meilleur apercu du pilotage.
                            La premiere fois, on decouvre, la deuxieme, on réalise!
                            199 euros
                        </p>
                        <?php include('paypal179.php'); ?>
                    </div>
                    <div class="col-md-4 mb-5">
                        <video class="w-100 img-thumbnail" autoplay loop muted>
                            <source src="assets/videos/quatre-lecons.mp4" type="video/mp4" />
                        </video>
                        <h4 class="my-3">Quatre leçons de pilotage en avion</h4>
                        <p class="text-muted">
                            Avec quatre lecons, vous serez très à l'aise en vol.
                            C'est un bon tremplin vers un brevet.
                            399 Euros
                        </p>
                        <?php include('paypal350.php'); ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Photos Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Photos</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/photo-1-preview.jpg" alt="École des aviateurs photo 1" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/photo-2-preview.jpg" alt="École des aviateurs photo 2" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/photo-3-preview.jpg" alt="École des aviateurs photo 3" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/photo-4-preview.jpg" alt="École des aviateurs photo 4" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/photo-5-preview.jpg" alt="École des aviateurs photo 5" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/photo-6-preview.jpg" alt="École des aviateurs photo 6" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Brevet de pilote -->
        <section class="page-section" id="brevet-pilote">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Brevet de pilote</h2>
                    <h3 class="section-subheading text-muted">
                        Comment passer un brevet de pilote d'avion ? Et d'abord, à quoi cela sert t'il?
                        Tout d'abord, presque tous les enfants ont rêvé de piloter un avion...
                        Ou une fusée..
                        Ou une voiture de course.
                        De tous ces rêves, celui de pilote d'avion est (de loin!) le plus facile à réaliser.
                        D'autant qu'il ne s'agit ici que de piloter un gentil avion de tourisme, amusant et sympathique, dans un univers totalement déconnecté du monde si difficile que nous   subissons.
                        Comme les motards, les pilotes d'avion n'ont ni dieu ni maitre.
                        Ils partent ou ils veulent quand ils le veulent, rejoindre un monde, commandes à la main, ou rien ne peut les atteindre, "a deux pas du soleil".
                        Un simple vol d'une demie heure permet "de se vider la tête "et revenir au sol convaincu que le monde n'est pas si grand, et les problèmes terrestres bien relatifs.
                        Je crois bien qu'il y a deux sortes de gens, ceux qui volent, et ceux qui ne volent pas.
                        Ceux qui peuvent partager un privilège extraordinaire, et ceux qui s'en passent.
                        Il est facile, et même encouragé de louer un avion n'importe où en France et dans le monde.
                        Il est donc inutile de songer à en acheter un, sauf si un jour, vous tombez amoureux d'un bel avion flanqué d'un panneau "à vendre".
                        Mais conseil, d'expert, commencez par le début...
                        Passez un brevet, il y en a plusieurs...
                    </h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/commencer-a-piloter2.jpg" alt="commencer-a-piloter" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Commencer à piloter</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">
                                    Vous pouvez commencer a piloter avec un instructeur immédiatement.
                                    Pour commencer à voler seul, il vous faudra une visite médicale aéronautique.
                                    Mais pas de panique, vous pouvez porter des lunettes, etre (un peu) daltonien, toute pathologie ne risquant pas de vous faire perdre conscience n'est pas un obstacle.
                                    Muni de votre visite médicale, vous pourrez, au bout d'une dizaine d'heures, obtenir de votre instructeur, l'autorisation de voler seul(e) pour la première fois.
                                    C'est toujours un de ces moments ou l'on se dit qu'il y a eu un avant et un après.
                                    Ensuite, trois possibilités s'offrent à vous.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/lapl-restreint.jpg" alt="Le LAPL restreint" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Le LAPL restreint</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">
                                    Il s'obtient en une quinzaine d'heures, dont quatre seule(e) a bord.
                                    Au vu de votre faible expérience, vous ne pourrez au départ que voler seul(e) et dans un rayon de 30 kilomètres de votre aéroport de départ.
                                    Normal, vous n'avez pas encore appris à naviguer!
                                    mais, après avoir passé le théorique du pilote d'avion, vous aurez bien une licence en poche!
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/autorisation-transport-de-passagers.jpg" alt="Autorisation de transport de passagers" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Autorisation de transport de passagers</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">
                                Vous pourrez ensuite lever vos restrictions. avec 20 heures de solo, l'instructeur pourra vous délivrer une autorisation de transport de passagers.
                                Si vous effectuez au surplus trois navigation vers des aéroports comme Beauvais, Dieppe, le havre, Deauville, etc;
                                Il vous faudra un total de quarante heures de vol.
                                Vous ferez disparaitre la dernière restriction, vous pourrez voyager avec vos amis.
                                Félicitation, vous avez un LAPL plein et entier!
                                Cette licence vous permet de voler dans le monde entier, sur un avion de moins de 2,7 tonnes, en pratique, de moins de dix places, pourvu que ce soit un monomoteur a pistons.
                                Pour les autres avions, plus complexes, comme tous les pilotes, y compris professionnels, vous devrez passer une qualification sur le type même de l'avion que vous envisagez.
                                Comme John Travolta, qui s'est offert...rien moins qu'un Boeing 707!
                                La LAPL étant une licence purement Francaise, vous ne pourrez piloter que des avions immatriculés en france.
                                Pour piloter tout avion immatriculé en Europe, ou envisager une carriere de pilote professionnel, il vous faudra un PPL.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/ppla.jpg" alt="Le PPLA" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Le PPLA</h4>
                                <h4 class="subheading">(Private Pilot Licence for Airplane)</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">
                                    C'est pour ainsi dire la meme chose que pour le LAPL, il vous faudra cinq heurs de vol de plus, soit 35 heures en double commande, 10 heures en solo, et un test avec un testeur délégué par l'état.
                                    Généralement, c'est un instructeur extérieur à l'école des aviateurs, pour des raisons de neutralité.
                                    Les gens obtiennent toujours leur brevet, meme si dans de rares cas (contrairement au permis de conduire), il leur faut repasser une partie des épreuves.
                                    Mais à l'école des aviateurs, nous avons une SOLIDE expérience du sujet !
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Le ciel
                                <br />
                                est
                                <br />
                                à vous :)
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact</h2>
                    <div class="row mt-5 mb-4">
                        <div class="col-md-4">
                            <h3>Adresse</h3>
                            Aéroport  de Rouen boos<br />
                            76520 Boos
                        </div>
                        <div class="col-md-4">
                            <h3>E-mail</h3>
                            lenordl@msn.com
                        </div>
                        <div class="col-md-4">
                            <h3>Tél</h3>
                            <a href="tel:0650229782">
                                <button type="button" class="btn btn-primary btn-sm">06 50 22 97 82 <i class="ms-2 fas fa-phone" aria-hidden="true"></i></button>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4 justify-content-center">
                        <!--The div element for the Google map -->
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=ecoles%20des%20aviateur%20rouen&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                <a href="https://123movies-to.org"></a><br>
                                <style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style>
                                <a href="https://www.embedgooglemap.net">google maps iframe code</a>
                                <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
                            </div>
                        </div>
                    </div>
                    <h3 class="section-subheading text-muted">Vous pouvez aussi nous contacter en utilisant ce formulaire :</h3>
                </div>
                <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="" method="post">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" name="name" type="text" placeholder="Prénom nom *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">Veuillez indiquer votre prénom et nom</div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" name="email" type="email" placeholder="Votre e-mail *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">Veuillez indiquer votre e-mail.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email non valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" name="phone" type="tel" placeholder="Votre téléphone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Veuillez indiquer votre téléphone.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" name="message" placeholder="Votre message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Veuillez indiquer votre message.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit Button-->
                    <div class="text-center">
                        <input class="btn btn-primary btn-xl text-uppercase" type="submit" name="submit" value="Envoyer">
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-lg-start">Copyright &copy; École des aviateurs</div>
                    <div class="col-lg-6 text-lg-end">
                        Réalisé avec <img src="https://img.icons8.com/material/20/ec5f67/hearts.png"> par <a href="https://vincentgo.fr" title="Aller vers vincentgo.fr" target="_blank">Vincent Godé</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <img class="w-100 img-fluid d-block mx-auto" src="assets/img/photo-1.jpg" alt="École des aviateurs photo 1" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <img class="w-100 img-fluid d-block mx-auto" src="assets/img/photo-2.jpg" alt="École des aviateurs photo 2" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <img class="w-100 img-fluid d-block mx-auto" src="assets/img/photo-3.jpg" alt="École des aviateurs photo 3" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <img class="w-100 img-fluid d-block mx-auto" src="assets/img/photo-4.jpg" alt="École des aviateurs photo 4" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <img class="w-100 img-fluid d-block mx-auto" src="assets/img/photo-5.webp" alt="École des aviateurs photo 5" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <img class="w-100 img-fluid d-block mx-auto" src="assets/img/photo-6.jpg" alt="École des aviateurs photo 6" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
