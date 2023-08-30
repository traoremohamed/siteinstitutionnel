<?php
$monUrl = substr($_SERVER['REQUEST_URI'], 1);
$monUrlTerminer = strstr($monUrl, '/', true);
if ($monUrlTerminer == true) {
    $monUrlTerminer = strstr($monUrl, '/', true);
} else {
    $monUrlTerminer = $monUrl;
}
//$dataDossierfichierClient = [];

use App\Helpers\Notification;
use App\Helpers\Menu;
use App\Helpers\Crypt;



$logo = Menu::get_logo();
$couleur = Menu::get_info_couleur();
?>

<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="Landscaping, Gardening, Florists, Groundskeeping">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>Libraire de france groupe</title>
        <!--====== Favicon Icon ======-->
            <?php if(isset($logo->logo_logo)){?>
                <link rel="shortcut icon" href="{{ asset('/frontend/logo/'. $logo->logo_logo)}}" type="image/png"/>
            <?php } ?>
        <!--<link rel="shortcut icon" href="{{ asset('vue/assets/images/favicon.ico')}}" type="image/png">-->
        <!--====== Google Fonts ======-->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <!--====== Flaticon css ======-->
        <link rel="stylesheet" href="{{ asset('vue/assets/fonts/flaticon/flaticon_gadden.css')}}">
        <!--====== FontAwesome css ======-->
        <link rel="stylesheet" href="{{ asset('vue/assets/fonts/fontawesome/css/all.min.css')}}">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{ asset('vue/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
        <!--====== magnific-popup css ======-->
        <link rel="stylesheet" href="{{ asset('vue/assets/vendor/magnific-popup/dist/magnific-popup.css')}}">
        <!--====== Slick-popup css ======-->
        <link rel="stylesheet" href="{{ asset('vue/assets/vendor/slick/slick.css')}}">
        <!--====== Jquery UI css ======-->
        <link rel="stylesheet" href="{{ asset('vue/assets/vendor/jquery-ui/jquery-ui.min.css')}}">
        <!--====== Nice Select css ======-->
        <link rel="stylesheet" href="{{ asset('vue/assets/vendor/nice-select/css/nice-select.css')}}">
        <!--====== Animate css ======-->
        <link rel="stylesheet" href="{{ asset('vue/assets/vendor/animate.css')}}">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="{{ asset('vue/assets/css/default.css')}}">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="{{ asset('vue/assets/css/style.css')}}">
    </head>
    <body>
        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loader">
                <div class="pre-shadow"></div>
                <div class="pre-box"></div>
            </div>
        </div><!--====== End Preloader ======-->
        <!--====== Search From ======-->
		<div class="modal fade search-modal" id="search-modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form>
                        <div class="form_group">
                        	<input type="text" class="form_control" placeholder="Search here" name="search">
                        	<label><i class="fa fa-search"></i></label>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--====== Search From ======-->
        <!--====== Sidebar Wrapper ======-->
        <div class="modal fade sidebar-panel-wrapper" id="sidebar-modal">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <button class="close" data-dismiss="modal"><i class="far fa-times"></i></button>
                    <div class="sidebar-wrapper">
                        <div class="sidebar-information-area">
                            <div class="row no-gutters">
                                <div class="col-lg-4 sidebar-widget">
                                    <div class="sidebar-info-widget">
                                        <a href="index.html" class="footer-logo"><img src="{{ asset('vue/assets/images/logo/logo-white.png')}}" alt="Brand Logo"></a>
                                        <p>Sed ut perspiciatis unde omni natus voluptatem accusantium doloremque laudantium aperia maquep quae abillo
                                            inventore veritatis architecto</p>
                                        <div class="social-item">
                                            <h6>Follow Us</h6>
                                            <ul class="social-link">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 sidebar-widget">
                                    <div class="sidebar-info-widget">
                                        <h4 class="title">Get In Touch</h4>
                                        <div class="contact-info-item-two">
                                            <h6 class="title"><i class="far fa-map-marker-alt"></i>Location</h6>
                                            <p>558 Main Street, 2nd Block
                                                Melbourne, Australia</p>
                                        </div>
                                        <div class="contact-info-item-two">
                                            <h6 class="title"><i class="far fa-envelope-open"></i>Email Us</h6>
                                            <p><a href="mailto:support@gmail.com">support@gmail.com</a></p>
                                        </div>
                                        <div class="contact-info-item-two">
                                            <h6 class="title"><i class="far fa-phone-plus"></i>Hotline</h6>
                                            <p><a href="tel:+000(123)45688">+000 (123) 456 88</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 sidebar-widget">
                                    <div class="sidebar-info-widget">
                                        <h4 class="title">Newsletter</h4>
                                        <form>
                                            <div class="form_group">
                                                <input type="email" class="form_control" placeholder="Email Address" required>
                                                <button class="main-btn secondary-btn">Subscribe Now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-gallery pt-80">
                            <div class="row">
                                <div class="col-lg-2 col-md-4 col-4">
                                    <div class="single-gallery-item">
                                        <div class="gallery-img">
                                            <img src="{{ asset('vue/assets/images/gallery/sgl-1.jpg')}}" alt="Gallery Image">
                                            <div class="hover-overlay">
                                                <a href="{{ asset('vue/assets/images/gallery/sgl-1.jpg')}}" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-4">
                                    <div class="single-gallery-item">
                                        <div class="gallery-img">
                                            <img src="{{ asset('vue/assets/images/gallery/sgl-2.jpg')}}" alt="Gallery Image">
                                            <div class="hover-overlay">
                                                <a href="{{ asset('vue/assets/images/gallery/sgl-2.jpg')}}" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-4">
                                    <div class="single-gallery-item">
                                        <div class="gallery-img">
                                            <img src="{{ asset('vue/assets/images/gallery/sgl-3.jpg')}}" alt="Gallery Image">
                                            <div class="hover-overlay">
                                                <a href="{{ asset('vue/assets/images/gallery/sgl-3.jpg')}}" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-4">
                                    <div class="single-gallery-item">
                                        <div class="gallery-img">
                                            <img src="{{ asset('vue/assets/images/gallery/sgl-4.jpg')}}" alt="Gallery Image">
                                            <div class="hover-overlay">
                                                <a href="{{ asset('vue/assets/images/gallery/sgl-4.jpg')}}" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-4">
                                    <div class="single-gallery-item">
                                        <div class="gallery-img">
                                            <img src="{{ asset('vue/assets/images/gallery/sgl-5.jpg')}}" alt="Gallery Image">
                                            <div class="hover-overlay">
                                                <a href="{{ asset('vue/assets/images/gallery/sgl-6.jpg')}}" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-4">
                                    <div class="single-gallery-item">
                                        <div class="gallery-img">
                                            <img src="{{ asset('vue/assets/images/gallery/sgl-6.jpg')}}" alt="Gallery Image">
                                            <div class="hover-overlay">
                                                <a href="{{ asset('vue/assets/images/gallery/sgl-6.jpg')}}" class="img-popup icon-btn"><i class="far fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--====== Sidebar Wrapper ======-->
        <!--====== Start Header ======-->
        <header class="header-area header-two">
            <div class="container-fluid">
                <!--====== Header Top Bar ======-->
                <div class="header-top-bar text-white main-bg d-none d-xl-block">
                    <div class="row">
                        <div class="col-lg-6">
                            <!--====== Top Left ======-->
                            <div class="top-left">
                                <span>Bienvenue chez LDF Groupe</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!--====== Top Right ======-->
                            <div class="top-right float-lg-right">
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== Header Middle ======-->
                <div class="header-middle d-none d-xl-block">
                    <div class="row align-items-center">
                        <div class="col-lg-9">
                            <!--====== Information Wrapper ======-->
                            <div class="information-wrapper">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <!--====== Single Information Item ======-->
                                        <div class="single-information-item">
                                            <div class="icon">
                                                <i class="far fa-map-marker-alt"></i>
                                            </div>
                                            <div class="info">
                                                <span>Localisation</span>
                                                <h5>Plateau, Avenue Chardy</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <!--====== Single Information Item ======-->
                                        <div class="single-information-item">
                                            <div class="icon">
                                                <i class="far fa-envelope"></i>
                                            </div>
                                            <div class="info">
                                                <span>Email</span>
                                                <h5><a href="mailto:societe@ldfgroupe.com">societe@ldfgroupe.com</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <!--====== Single Information Item ======-->
                                        <div class="single-information-item">
                                            <div class="icon">
                                                <i class="far fa-phone-plus"></i>
                                            </div>
                                            <div class="info">
                                                <span>Tél</span>
                                                <h5><a href="tel:+2252720306363">(+225) 27 20 30 63 63</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <!--====== menu Right Item ======-->
                            <div class="menu-right-item">
                                <span class="search-btn" data-toggle="modal" data-target="#search-modal"><i class="far fa-search"></i></span>
                                <span class="bar-btn" data-toggle="modal" data-target="#sidebar-modal"><img src="{{ asset('vue/assets/images/bar.png')}}" alt="Image"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== Header Navigation ======-->
                <div class="header-navigation">
                    <div class="nav-overlay"></div>
                    <div class="primary-menu">
                        <!--====== Site Branding ======-->
                        <div class="site-branding">
                          <?php if(isset($logo->logo_logo)){?>
                            <a href="{{route('index')}}" class="brand-logo"><img src="{{ asset('/frontend/logo/'. $logo->logo_logo)}}" alt="Site Logo"></a>
                            <!--<a href="{{route('index')}}" class="sticky-logo"><img src="{{ asset('vue/assets/images/logo/logo-white-two.png')}}" alt="Site Logo"></a>-->
                            <a href="{{route('index')}}" class="sticky-logo"><img src="{{ asset('/frontend/logo/'. $logo->logo_logo)}}" alt="Site Logo" height="55" width="55"></a>
                        <?php } ?>
                        </div>
                        <!--====== Nav Menu ======-->
                        <div class="nav-menu">
                            <!--====== Site Branding ======-->
                            <div class="mobile-logo mb-30 d-block d-xl-none">
                                <a href="{{route('index')}}" class="brand-logo"><img src="{{ asset('/frontend/logo/'. $logo->logo_logo)}}" alt="Site Logo"></a>
                            </div>
                            <!--=== Nav Search ===-->
                            <div class="nav-search mb-30 d-block d-xl-none ">
                                <form>
                                    <div class="form_group">
                                        <input type="email" class="form_control" placeholder="Search Here" name="email" required>
                                        <button class="search-btn"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!--====== main Menu ======-->
                            <nav class="main-menu">
                                <ul>
                                    <li class="menu-item has-children"><a href="#">Acceuil</a>
                                        <!--<ul class="sub-menu">
                                            <li><a href="index.html">Home 01</a></li>
                                            <li><a href="index-2.html">Home 02</a></li>
                                            <li><a href="index-3.html">Home 03</a></li>
                                        </ul>-->
                                    </li>
                                    <li class="menu-item"><a href="about.html">Nos Activités</a></li>
                                    <li class="menu-item has-children"><a href="#">Service</a>
                                        <ul class="sub-menu">
                                            <li><a href="service.html">Our Service</a></li>
                                            <li><a href="service-details.html">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children"><a href="#">Ressources</a>
                                        <ul class="sub-menu">
                                            <li><a href="project-grid.html">Project Grid</a></li>
                                            <li><a href="project-grid-2-column.html">Project Grid Two</a></li>
                                            <li><a href="project-masonry.html">Project Masonry</a></li>
                                            <li><a href="project-details.html">Project Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children"><a href="#">Carrières</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-standard.html">Blog Standard</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children"><a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="team.html">Our Team</a></li>
                                            <li><a href="shop.html">Our Shop</a></li>
                                            <li><a href="product-details.html">Product Details</a></li>
                                            <li><a href="testimonials.html">Testimonial</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                            <li><a href="faqs.html">Faq</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <!--====== Menu Button ======-->
                            <div class="menu-button mt-40 d-xl-none">
                                <a href="contact.html" class="main-btn secondary-btn">Libellé</a>
                            </div>
                        </div>
                        <!--====== Nav Right Item ======-->
                        <div class="nav-right-item">
                            <div class="lang-dropdown">
                                <select class="wide">
                                </select>
                            </div>
                            <div class="menu-button d-xl-block d-none">
                                <a href="contact.html" class="main-btn primary-btn">Libellé</a>
                            </div>
                            <div class="navbar-toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!--====== End Header ======-->


        @yield('content')

<footer class="footer-area text-white main-bg">
            <div class="container">
                <!--====== Footer Widget ======-->
                <div class="footer-widget-area pt-80 pb-40">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <!--====== Footer Widget ======-->
                            <div class="footer-widget footer-about-widget mb-40 pr-lg-70 wow fadeInUp">
                                <div class="widget-content">
                                    <div class="footer-logo mb-25">
                                        <a href="{{route('index')}}"><img src="{{ asset('vue/assets/images/logo/logo-white.png')}}" alt="Logo"></a>
                                    </div>
                                    <p>Quis autem eum reprehenderit volutate
                                        velit quam molestiae conseuatur </p>
                                    <a href="contact.html" class="main-btn filled-btn filled-white">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!--====== Footer Widget ======-->
                            <div class="footer-widget contact-info-widget mb-40 wow fadeInDown">
                                <h4 class="widget-title">Groupe</h4>
                                <div class="widget-content">
                                    <ul class="info-list">
                                        <li>Notre stratégie</li>
                                        <li><a href="mailto:support@gmail.com">Notre culture d'entreprise</a></li>
                                        <li><a href="">Notre organisation</a></li>
                                        <li>Nos chiffres clés</li>
                                        <li>Un groupe responsable</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <!--====== Footer Widget ======-->
                            <div class="footer-widget footer-nav-widget mb-40 wow fadeInUp">
                                <h4 class="widget-title">Quick Link</h4>
                                <div class="widget-content">
                                    <ul class="footer-nav">
                                        <li><a href="#">About Company</a></li>
                                        <li><a href="#">Popular Services</a></li>
                                        <li><a href="#">Need a Career ?</a></li>
                                        <li><a href="#">Meet Our Team</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!--====== Footer Widget ======-->
                            <div class="footer-widget footer-experience-widget float-lg-right mb-40 wow fadeInDown">
                                <div class="widget-content">
                                    <div class="experience-box-two">
                                        <h2 class="number"><span class="count">85</span>+</h2>
                                        <h6>de Passion</h6>
                                        <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=== Copyright Area ===-->
                <div class="copyright-area">
                    <div class="row">
                        <div class="col-lg-6">
                            <!--====== Copyright Text ======-->
                            <div class="copyright-text">
                                <P>Copy&copy; 2023 Gadden. All Rights Reserved.</P>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!--====== Copyright Nav ======-->
                            <div class="copyright-nav float-lg-right">
                                <ul>
                                    <li><a href="#">Setting & Privacy</a></li>
                                    <li><a href="#">Faqs</a></li>
                                    <li><a href="#">Food Menu</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--====== End Footer ======-->
        <!--====== Back To Top  ======-->
        <a href="#" class="back-to-top" ><i class="far fa-angle-up"></i></a>
        <!--====== Jquery js ======-->
        <script src="{{ asset('vue/assets/vendor/jquery-3.6.0.min.js')}}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{ asset('vue/assets/vendor/popper/popper.min.js')}}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{ asset('vue/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <!--====== Slick js ======-->
        <script src="{{ asset('vue/assets/vendor/slick/slick.min.js')}}"></script>
        <!--====== Magnific js ======-->
        <script src="{{ asset('vue/assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
        <!--====== Isotope js ======-->
        <script src="{{ asset('vue/assets/vendor/isotope.min.js')}}"></script>
        <!--====== Imagesloaded js ======-->
        <script src="{{ asset('vue/assets/vendor/imagesloaded.min.js')}}"></script>
        <!--====== Counterup js ======-->
        <script src="{{ asset('vue/assets/vendor/jquery.counterup.min.js')}}"></script>
        <!--====== Waypoints js ======-->
        <script src="{{ asset('vue/assets/vendor/jquery.waypoints.js')}}"></script>
        <!--====== Nice-select js ======-->
        <script src="{{ asset('vue/assets/vendor/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <!--====== jquery UI js ======-->
        <script src="{{ asset('vue/assets/vendor/jquery-ui/jquery-ui.min.js')}}"></script>
        <!--====== WOW js ======-->
        <script src="{{ asset('vue/assets/vendor/wow.min.js')}}"></script>
        <!--====== Main js ======-->
        <script src="{{ asset('vue/assets/js/theme.js')}}"></script>
    </body>
</html>
