<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Changement climatique</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo css_url("lib/animate/animate.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo css_url("lib/owlcarousel/assets/owl.carousel.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo css_url("lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"); ?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo css_url("bootstrap.min.css"); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo css_url("style.css"); ?>" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-globe me-3"></i>Changement climatique</h1>   
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="<?php echo site_url('AccueilFront'); ?>" class="nav-item nav-link active">Accueil</a>
                        <a href="<?php echo site_url('Articles'); ?>" class="nav-item nav-link">Articles</a>
                        <a href="#" class="nav-item nav-link">Commentaire</a>
                        <a href="#" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="<?php echo site_url('Login') ?>" class="btn btn-primary py-2 px-4">Administrateur</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Stop<br> au changement climatique</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">Le principal facteur du r??chauffement est les ??missions de gaz ?? effet de serre dues aux activit??s humaines</p>
                            <!-- <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a> -->
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="<?php echo img_url("globe-1348777__340.png") ?>" heigth='400' width='400'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Les categories -->
        
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                <?php for($i = 0; $i < count($listeCategorie) ; $i++ ) { ?>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                                    <h5><?php echo $listeCategorie[$i]['nom']; ?></h5>
                                    <p><?php echo $listeCategorie[$i]['apropos']; ?></p>
                                </div>
                            </div>
                        </div>
                <?php } ?>        
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="<?php echo img_url("images.jpg");?>" >
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="<?php echo img_url("shutterstock_640413589-800x450.jpg");?>" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="<?php echo img_url("838_photo2.jpg");?>">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="<?php echo img_url("images (1).jpg");?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">a propos</h5>
                        <h1 class="mb-4">Sauvons notre planete</h1>
                        <p class="mb-4">La sensibilisation des enfants ?? l???environnement va les impr??gner et aura un r??el impact dans le futur. Les enfants sont les meilleurs porteurs de toutes les mobilisations l???exemple de Greta Thunberg en dit beaucoup. </p>
                        <p class="mb-4">Tout le monde doivent participe pour le bien etre de notre plantete. </p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="text-uppercase mb-0">Peuple</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">causes-effets-action humanitaire</h5>
                    <h1 class="mb-5">Principaux cause</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <?php for($i = 0 ; $i < count($listeContenue) ; $i++) { ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo img_url($listeContenue[$i]['photo']);?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $listeContenue[$i]['titre']; ?></span>
                                                <!-- <span class="text-primary">$115</span> -->
                                            </h5>
                                            <small class="fst-italic"><?php echo $listeContenue[$i]['description']; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                   
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->


 

        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">commentaires</h5>
                    <h1 class="mb-5">les gens disent que:</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <?php for($i = 0 ; $i < count($listeCommentaire) ; $i++) { ?>  
                        <div class="testimonial-item bg-transparent border rounded p-4">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p> <?php echo $listeCommentaire[$i]['commentaire']; ?> </p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="<?php echo img_url($listeCommentaire[$i]['photo']);?>" style="width: 50px; height: 50px;">
                                <div class="ps-3">
                                    <h5 class="mb-1"><?php echo $listeCommentaire[$i]['personne']; ?></h5>
                                    <small>commentaire</small>
                                </div>
                            </div>
                        </div>
                    <?php } ?>    
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Reservation</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">notre site est toujour ouvert</h5>
                        <p>24/24</p>
                        <h5 class="text-light fw-normal">notre site est toujour ouvert</h5>
                        <p>7/7</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author???s credit link/attribution link/backlink. If you'd like to use the template without the footer author???s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br>
                            Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo js_url("lib/wow/wow.min.js");?>"></script>
    <script src="<?php echo js_url("lib/easing/easing.min.js");?>"></script>
    <script src="<?php echo js_url("lib/waypoints/waypoints.min.js");?>"></script>
    <script src="<?php echo js_url("lib/counterup/counterup.min.js");?>"></script>
    <script src="<?php echo js_url("lib/owlcarousel/owl.carousel.min.js");?>"></script>
    <script src="<?php echo js_url("lib/tempusdominus/js/moment.min.js");?>"></script>
    <script src="<?php echo js_url("lib/tempusdominus/js/moment-timezone.min.js");?>"></script>
    <script src="<?php echo js_url("lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js");?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo js_url("main.js");?>"></script>
</body>

</html>