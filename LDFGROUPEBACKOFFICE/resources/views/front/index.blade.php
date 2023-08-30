<?php

use App\Helpers\Menu;

$slides = Menu::get_slide();
$about = Menu::get_about();
$actualite_limite = Menu::get_actualite_limite();
$servicesfs = Menu::get_service();
$stats = Menu::get_stat();
$partenaires = Menu::get_partenaire();
$temoignanges = Menu::get_temoignange();

?>
@extends('layouts.frontLayout.designadmin')

@section('content')


        <!--====== Start Banner Section ======-->
        <section class="banner-section">
            <!--====== Hero Wrapper One ======-->
            <div class="hero-wrapper-two">
                <!--====== Hero Slider ======-->
                <div class="hero-slider-one">
                    <!--====== Single Slider ======-->
                    @foreach($slides as $slide)
                    <div class="single-slider">
                        <div class="image-layer bg_cover" style="background-image: url({{ asset('/frontend/slide/'. $slide->image_slide)}});"></div>
                        <div class="bgc-circle" data-animation="fadeInLeft"></div>
                        <div class="container">
                            <div class="row align-items-lg-center">
                                <div class="col-xl-6 col-lg-12">
                                    <!--====== Hero Content ======-->
                                    <div class="hero-content">
                                        <span class="sub-title" data-animation="fadeInUp" data-delay=".34">{{$slide->titre_slide}}</span>
                                        <h1 data-animation="fadeInDown" data-delay=".5s">{{$slide->description_slide}}</h1>
                                        <!--<h1 data-animation="fadeInDown" data-delay=".5s">Depuis 1938, nous vous servons les instruments du savoir.</h1>-->
                                        <div class="hero-button mb-30" data-animation="fadeInDown" data-delay=".6s">
                                            <a href="{{$slide->lien_bouton_slide}}" class="main-btn golden-btn mb-10" target="_blank">{{$slide->libelle_bouton_slide}}</a>
                                            <a href="index.html" class="main-btn filled-btn filled-white mb-10">How It Work</a>
                                        </div>
                                        <!--<div class="client-avatar-box" data-animation="fadeInUp" data-delay=".7s">
                                            <div class="avatar-thumbs">
                                                <ul>
                                                    <li>
                                                        <img src="assets/images/gallery/avatar-1.jpg" alt="Avatar">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/gallery/avatar-2.jpg" alt="Avatar">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/gallery/avatar-3.jpg" alt="Avatar">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/gallery/avatar-4.jpg" alt="Avatar">
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="rating-box">
                                                <h2 class="number"><span class="count">2563</span>+</h2>
                                                <ul class="ratings">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="text">
                                                <span>Clients
                                                    Reviews</span>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12">
                                    <!--====== Hero Play ======-->
                                    <div class="hero-play float-lg-right">
                                        <a href="https://www.youtube.com/watch?v=1OgdblydUq0" class="video-popup" target="_blank"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--====== Single Slider ======-->
                    <!--====== Single Slider ======-->

                    <!--<div class="single-slider">
                        <div class="image-layer bg_cover" style="background-image: url(assets/images/hero/hero_one-slider-2.jpg);"></div>
                        <div class="bgc-circle" data-animation="fadeInLeft"></div>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-8">
                                    &lt;!&ndash;====== Hero Content ======&ndash;&gt;
                                    <div class="hero-content">
                                        <span class="sub-title" data-animation="fadeInUp" data-delay=".4s">LIBRAIRIE DE FRANCE GROUPE</span>
                                        <h1 data-animation="fadeInDown" data-delay=".5s">Gardening
                                            & Landscape</h1>
                                        <div class="hero-button mb-30" data-animation="fadeInDown" data-delay=".6s">
                                            <a href="about.html" class="main-btn golden-btn mb-10">Explore More</a>
                                            <a href="index.html" class="main-btn filled-btn filled-white mb-10">How It Work</a>
                                        </div>
                                        <div class="client-avatar-box" data-animation="fadeInUp" data-delay=".7s">
                                            <div class="avatar-thumbs">
                                                <ul>
                                                    <li>
                                                        <img src="assets/images/gallery/avatar-1.jpg" alt="Avatar">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/gallery/avatar-2.jpg" alt="Avatar">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/gallery/avatar-3.jpg" alt="Avatar">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/gallery/avatar-4.jpg" alt="Avatar">
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="rating-box">
                                                <h2 class="number"><span class="count">2563</span>+</h2>
                                                <ul class="ratings">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="text">
                                                <span>Clients
                                                    Reviews</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4">
                                    &lt;!&ndash;====== Hero Play ======&ndash;&gt;
                                    <div class="hero-play float-lg-right">
                                        <a href="https://www.youtube.com/watch?v=1OgdblydUq0" class="video-popup"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!--====== Single Slider ======-->
                   <!-- <div class="single-slider">
                        <div class="image-layer bg_cover" style="background-image: url(assets/images/hero/hero_one-slider-3.jpg);"></div>
                        <div class="bgc-circle" data-animation="fadeInLeft"></div>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-8">
                                    &lt;!&ndash;====== Hero Content ======&ndash;&gt;
                                    <div class="hero-content">
                                        <span class="sub-title" data-animation="fadeInUp" data-delay=".4s">Beautiful Gardening</span>
                                        <h1 data-animation="fadeInDown" data-delay=".5s">Gardening
                                            & Landscape</h1>
                                        <div class="hero-button mb-30" data-animation="fadeInDown" data-delay=".6s">
                                            <a href="about.html" class="main-btn golden-btn mb-10">Explore More</a>
                                            <a href="index.html" class="main-btn filled-btn filled-white mb-10">How It Work</a>
                                        </div>
                                        <div class="client-avatar-box" data-animation="fadeInUp" data-delay=".7s">
                                            <div class="avatar-thumbs">
                                                <ul>
                                                    <li>
                                                        <img src="assets/images/gallery/avatar-1.jpg" alt="Avatar">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/gallery/avatar-2.jpg" alt="Avatar">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/gallery/avatar-3.jpg" alt="Avatar">
                                                    </li>
                                                    <li>
                                                        <img src="assets/images/gallery/avatar-4.jpg" alt="Avatar">
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="rating-box">
                                                <h2 class="number"><span class="count">2563</span>+</h2>
                                                <ul class="ratings">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="text">
                                                <span>Clients
                                                    Reviews</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4">
                                    &lt;!&ndash;====== Hero Play ======&ndash;&gt;
                                    <div class="hero-play float-lg-right">
                                        <a href="https://www.youtube.com/watch?v=1OgdblydUq0" class="video-popup"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </section><!--====== End Banner Section ======-->
        <!--====== Start Features Section  ======-->
        <section class="features-section gray-bg pt-60 pb-20">
            <div class="container">
                <div class="row justify-content-center">
                   @foreach($servicesfs as $servicesf)
                    <div class="col-xl-4 col-md-6">
                        <!--====== Features Thumb Item  ======-->
                        <div class="features-thumb-item mb-40 wow fadeInDown" data-wow-delay=".2s">
                            <div class="features-inner-item">
                                <div class="thumb">
                                    <img src="{{ asset('/frontend/produitphare/'. $servicesf->image_prod_ph)}}" alt="Features image">
                                </div>
                                <div class="content">
                                    <div class="icon">
                                        <i class="flaticon-watering-plants"></i>
                                    </div>
                                    <h5 class="title">{{$servicesf->titre_prod_ph}}</h5>
                                    <a href="{{$servicesf->lien_produit_phare}}" class="icon-btn" target="_blank"><i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--======<div class="col-xl-4 col-md-6">
                         Features Thumb Item
                        <div class="features-thumb-item mb-40 wow fadeInUp" data-wow-delay=".3s">
                            <div class="features-inner-item">
                                <div class="thumb">
                                    <img src="{{ asset('vue/assets/images/features/features-2.jpg')}}" alt="Features image">
                                </div>
                                <div class="content">
                                    <div class="icon">
                                        <i class="flaticon-shovels"></i>
                                    </div>
                                    <h5 class="title">Garden Overhauls</h5>
                                    <a href="#" class="icon-btn"><i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>======-->
                    <!--======<div class="col-xl-4 col-md-6">
                         Features Thumb Item
                        <div class="features-thumb-item mb-40 wow fadeInDown" data-wow-delay=".4s">
                            <div class="features-inner-item">
                                <div class="thumb">
                                    <img src="{{ asset('vue/assets/images/features/features-3.jpg')}}" alt="Features image">
                                </div>
                                <div class="content">
                                    <div class="icon">
                                        <i class="flaticon-gardening"></i>
                                    </div>
                                    <h5 class="title">Landscape
                                        Design</h5>
                                    <a href="#" class="icon-btn"><i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>======-->

                    </div>
                </div>
            </div>
        </section><!--====== End Features Section  ======-->
        <!--====== Start About Section  ======-->
        <section class="about-section pt-100 pb-50">
            <div class="container">
                <div class="row align-items-xl-center">
                    <div class="col-xl-6">
                        <!--====== About Image Box  ======-->
                        <div class="about-one_image-box mb-50 p-r z-1 wow fadeInLeft">
                            <div class="shape shape-one"><span></span></div>
                            <img src="{{ asset('/frontend/imagearticle/'. $about->image_article)}}" class="about-img-one" alt="About Image">
                            <!--<img src="assets/images/about/about-2.jpg" class="about-img-two" alt="About Image">
                            <img src="assets/images/about/tree.png" class="about-img-three" alt="About Image">-->
                            <div class="experience-item">
                                <h2 class="number"><span class="count">{{$about->titre_article}}</span>+</h2>
                                <h4>ans</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <!--====== About Content Box  ======-->
                        <div class="about-content-box pl-lg-60 mb-50 wow fadeInRight">
                            <div class="section-title mb-30">
                                <span class="sub-title"><i class="flaticon-plant"></i>{{$about->sous_titre}}</span>
                                <h2>We Care Your Garden
                                    & Landscaping</h2>
                            </div>
                            <p class="mb-30"><?php echo $about->description_article; ?></p>
                            <ul class="check-style-one mb-35">
                                <li><i class="far fa-check"></i>We’re Experience Gardening</li>
                                <li><i class="far fa-check"></i>Awards Winning & Professional Team Member</li>
                            </ul>
                            <a href="about.html" class="main-btn primary-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End About Section  ======-->
        <!--====== Start Choose Section
        <section class="choose-bg-section bg_cover p-r z-1 pt-100 pb-100" style="background-image: url(assets/images/bg/choose-bg-1.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-12"> ======-->
                        <!--====== Section Title
                        <div class="section-title text-white text-center mb-50 wow fadeInDown">
                            <span class="sub-title"><i class="flaticon-plant"></i>Why Choose Us</span>
                            <h2>We’re Awards Winning Gardening</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12"> ======-->
                        <!--====== Choose Wrapper
                        <div class="choose-wrapper wow fadeInUp">
                            <div class="row">
                                <div class="col-lg-7">======-->
                                     <!--====== Choose Tab Pane
                                    <div class="choose-tab-pane"> ======-->
                                         <!--====== Choose Tab
                                        <div class="choose-nav-tab">
                                            <ul class="nav">
                                                <li class="nav-item">
                                                    <button class="nav-link active" data-toggle="tab" data-target="#tab1">We’re Since 1987!</button>
                                                </li>
                                                <li class="nav-item">
                                                    <button class="nav-link" data-toggle="tab" data-target="#tab2">Philosophy</button>
                                                </li>
                                            </ul>
                                        </div>======-->
                                         <!--====== Tab Content
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="tab1">
                                                <div class="choose-content-box">
                                                    <p>Sed ut perspiciatis unde omnis natus error voluptatem accusantium doloremque laudantium, totam rem aperia eaque quae abillo inventore
                                                        veritatis  architecto beatae vitae dicta sunt explicabo.</p>
                                                    <div class="thumb-content">
                                                        <img src="assets/images/gallery/choose-2.jpg" alt="Image">
                                                        <ul class="check-style-one">
                                                            <li><i class="far fa-check"></i>Trusted Gardening Partners</li>
                                                            <li><i class="far fa-check"></i>Shipping Cost Low</li>
                                                            <li><i class="far fa-check"></i>Professional Team Member</li>
                                                            <li><i class="far fa-check"></i>Awards Winning Company</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <div class="choose-content-box">
                                                    <p>Sed ut perspiciatis unde omnis natus error voluptatem accusantium doloremque laudantium, totam rem aperia eaque quae abillo inventore
                                                        veritatis  architecto beatae vitae dicta sunt explicabo.</p>
                                                    <div class="thumb-content">
                                                        <img src="assets/images/gallery/choose-3.jpg" alt="Image">
                                                        <ul class="check-style-one">
                                                            <li><i class="far fa-check"></i>Trusted Gardening Partners</li>
                                                            <li><i class="far fa-check"></i>Shipping Cost Low</li>
                                                            <li><i class="far fa-check"></i>Professional Team Member</li>
                                                            <li><i class="far fa-check"></i>Awards Winning Company</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">======-->
                                     <!--====== Choose Image Box
                                    <div class="choose-image-box">
                                        <img src="assets/images/gallery/choose-1.jpg" alt="Choose Image">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>======--><!--====== End Choose Section  ======-->
        <!--====== Start Working Process Section
        <section class="working-process-section pt-100 pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-12">
                        <div class="section-title text-center mb-60 wow fadeInDown">
                            <span class="sub-title"><i class="flaticon-plant"></i>Working Process</span>
                            <h2>How Does We Work In Gardening</h2>
                        </div>
                    </div>
                </div>
                <div class="working-process-wrapper wow fadeInUp">
                    <div class="row no-lg-gutters">======-->
                        <!--====== Working Process Wrapper
                        <div class="col-lg-3 col-md-6"> ======-->
                            <!--====== Single Process Item
                            <div class="single-process-item">
                                <div class="inner-process-item">
                                    <div class="step">Step 01</div>
                                    <div class="icon">
                                        <i class="flaticon-landscape"></i>
                                    </div>
                                    <div class="text">
                                        <h4 class="title">Choose Landscape</h4>
                                        <p>Sed ut perspiciatis omnis
                                            volunteer accusa</p>
                                        <img src="assets/images/line.png" alt="Line">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">======-->
                            <!--====== Single Process Item
                            <div class="single-process-item">
                                <div class="inner-process-item">
                                    <div class="step">Step 02</div>
                                    <div class="icon">
                                        <i class="flaticon-industry"></i>
                                    </div>
                                    <div class="text">
                                        <h4 class="title">Design and
                                            Planting</h4>
                                        <p>Sed ut perspiciatis omnis
                                            volunteer accusa</p>
                                        <img src="assets/images/line.png" alt="Line">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">======-->
                            <!--====== Single Process Item
                            <div class="single-process-item">
                                <div class="inner-process-item">
                                    <div class="step">Step 03</div>
                                    <div class="icon">
                                        <i class="flaticon-microscope"></i>
                                    </div>
                                    <div class="text">
                                        <h4 class="title">Completion
                                            & Testing</h4>
                                        <p>Sed ut perspiciatis omnis
                                            volunteer accusa</p>
                                        <img src="assets/images/line.png" alt="Line">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6"> ======-->
                            <!--====== Single Process Item
                            <div class="single-process-item">
                                <div class="inner-process-item">
                                    <div class="step">Step 04</div>
                                    <div class="icon">
                                        <i class="flaticon-bus-stop"></i>
                                    </div>
                                    <div class="text">
                                        <h4 class="title">Transportation &
                                            Maintenance</h4>
                                        <p>Sed ut perspiciatis omnis
                                            volunteer accusa</p>
                                        <img src="assets/images/line.png" alt="Line">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>======--><!--====== End Working Process Section ======-->
        <!--====== Start Gallery Section ======-->
        <section class="gallery-section-minus p-r z-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!--====== Section Title ======-->
                        <div class="section-title mb-50 pr-lg-70 wow fadeInLeft">
                            <span class="sub-title"><i class="flaticon-plant"></i>Nos partenaire</span>
                            <!--<h2>Look Our Garden
                                Insides</h2>-->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!--====== Project Content Box ======-->
                        <!--<div class="project-content-box mb-50 pl-lg-100 wow fadeInRight">
                            <p class="mb-35">Sed perspiciatis unde omnis isnatu volunteer accusantium doloremque laudantium totam rem apeira eaque ipsa quae ab
                                eillo inventore veritatis et quasi architecto beatae vitae</p>
                            <a href="project-grid.html" class="main-btn golden-btn">View More Projects</a>
                        </div>-->
                    </div>
                </div>
            </div>
            <div class="projects-slider-one wow fadeInDown">
                <!--====== Single Gallery Item ======-->

                @foreach($partenaires as $partenaire)
                <div class="single-project-item">
                    <div class="project-img">
                        <img src="{{ asset('/frontend/logopart/'. $partenaire->logo_part)}}" heigth="120" alt="Gallery Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="project-details.html">{{$partenaire->titre_part}}</a></h3>
                                <a href="#">{{$partenaire->titre_part}}</a>
                            </div>
                            <a href="#" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </section><!--====== End Gallery Section ======-->
        <!--====== Start Counter Section  ======-->
        <section class="fact-bg-section p-r z-1 main-bg pb-160">
            <div class="circle-wrapper">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="container">
                <div class="row">
                    @foreach($stats as $stat)
                    <div class="col-lg-3 col-md-6 col-sm-6 single-counter-column">
                        <!--====== Counter Item  ======-->
                        <div class="single-counter-item mb-30 wow fadeInDown" data-wow-delay=".2s">
                            <div class="icon">
                                <i class="fal fa-long-arrow-right"></i>
                            </div>
                            <h2 class="number"><span class="count">{{$stat->stat_stat}}</span>+</h2>
                            <p>{{$stat->libelle_stat}}</p>
                        </div>
                    </div>
                    @endforeach
                    <!--======<div class="col-lg-3 col-md-6 col-sm-6 single-counter-column">
                         Counter Item
                        <div class="single-counter-item mb-30 wow fadeInUp" data-wow-delay=".25s">
                            <div class="icon">
                                <i class="fal fa-long-arrow-right"></i>
                            </div>
                            <h2 class="number"><span class="count">99</span>%</h2>
                            <p>Satisfactions Rate</p>
                        </div>
                    </div>======-->
                     <!--======<div class="col-lg-3 col-md-6 col-sm-6 single-counter-column">
                        Counter Item
                        <div class="single-counter-item mb-30 wow fadeInDown" data-wow-delay=".3s">
                            <div class="icon">
                                <i class="fal fa-long-arrow-right"></i>
                            </div>
                            <h2 class="number"><span class="count">683</span>+</h2>
                            <p>Expert Team Member</p>
                        </div>
                    </div>======-->
                    <!--======<div class="col-lg-3 col-md-6 col-sm-6 single-counter-column">
                         Counter Item
                        <div class="single-counter-item mb-30 wow fadeInUp" data-wow-delay=".35s">
                            <div class="icon">
                                <i class="fal fa-long-arrow-right"></i>
                            </div>
                            <h2 class="number"><span class="count">860</span>+</h2>
                            <p>Awards Winning</p>
                        </div>
                    </div>======-->
                </div>
            </div>
        </section><!--====== End Counter Section  ======-->
        <!--====== Start Features Section
        <section class="features-section pt-70 p-r z-2">
            <div class="container">
                <div class="row align-items-lg-center">
                    <div class="col-xl-6"> ======-->
                        <!--====== Features Image Box
                        <div class="features-one_image-box mb-50 wow fadeInLeft">
                            <img src="assets/images/features/features-4.jpg" alt="Features Image">
                        </div>
                    </div>
                    <div class="col-xl-6">======-->
                        <!--====== Features Content Box
                        <div class="features-content-box pl-lg-40 mb-50 wow fadeInRight">
                            <div class="section-title mb-20">
                                <span class="sub-title"><i class="flaticon-plant"></i>Modern Gardening</span>
                                <h2>We Offers Landscape
                                    & Tree Plantations</h2>
                            </div>
                            <p class="mb-30">Quis autem vel eum iure reprehenderit qui in voluptate velit esse quam
                                nihil molestiae consequatur vel illum qui dolorem</p>
                            <div class="row no-gutters">
                                <div class="col-lg-6">======-->
                                    <!--====== Fancy Icon Box
                                    <div class="fancy-icon-box">
                                        <div class="icon">
                                            <i class="flaticon-pruning-shears"></i>
                                        </div>
                                        <div class="text">
                                            <h5 class="title">Modern Gardening
                                                & Expert Team</h5>
                                            <p>Sed ut perspiciatis omnis
                                                volunteer accusan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">======-->
                                    <!--====== Fancy Icon Box
                                    <div class="fancy-icon-box">
                                        <div class="icon">
                                            <i class="flaticon-gardening-1"></i>
                                        </div>
                                        <div class="text">
                                            <h5 class="title">Tree Plantations &
                                                Landscape</h5>
                                            <p>Sed ut perspiciatis omnis
                                                volunteer accusan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>======--><!--====== End Features Section  ======-->
        <!--====== Start Testimonial Section  ======-->
        <section class="testimonial-section pt-100 pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-12">
                        <div class="section-title text-center mb-50 wow fadeInDown">
                            <span class="sub-title"><i class="flaticon-plant"></i>Temoignagnes</span>
                            <h2>Le retour de nos clients</h2>
                        </div>
                    </div>
                </div>
                <!--====== Testimonial Slider  ======-->
                <div class="testimonial-slider-one wow fadeInUp">
                    <!--====== Testimonial Item  ======-->
                    @foreach($temoignanges as $temoignange)
                    <div class="single-testimonial-item">
                        <div class="testimonial-inner-content">
                            <div class="quote-rating-box">
                                <div class="icon">

                                    <img src="{{ asset('vue/assets/images/testimonial/quote.png')}}" alt="quote icon">

                                </div>
                                <div class="ratings-box">
                                    <h6>Qualitée du service</h6>
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <p><?php echo $temoignange->message_temoin ?></p>
                            <div class="author-thumb-title">
                                <div class="author-thumb">
                                @if(!empty($temoignange->image_temoi))
                                    <img src="{{ asset('/frontend/temoignange/'. $temoignange->image_temoi)}}" alt="Author Image">
                                    @endif
                                </div>
                                <div class="author-title">
                                    <h6 class="title">{{$temoignange->nom_prenom}}</h6>
                                    <!--<p class="position">CEO & Founder</p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--====== Testimonial Item
                    <div class="single-testimonial-item">
                        <div class="testimonial-inner-content">
                            <div class="quote-rating-box">
                                <div class="icon">
                                    <img src="assets/images/testimonial/quote.png" alt="quote icon">
                                </div>
                                <div class="ratings-box">
                                    <h6>Quality Services</h6>
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium
                                doloremque laudantium, totam rem aperiam eaque quae abillo inventore veritatis et quasi architecto</p>
                            <div class="author-thumb-title">
                                <div class="author-thumb">
                                    <img src="assets/images/testimonial/thumb-2.jpg" alt="Author Image">
                                </div>
                                <div class="author-title">
                                    <h6 class="title">Douglas D. Hall</h6>
                                    <p class="position">CEO & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>======-->
                    <!--====== Testimonial Item
                    <div class="single-testimonial-item">
                        <div class="testimonial-inner-content">
                            <div class="quote-rating-box">
                                <div class="icon">
                                    <img src="assets/images/testimonial/quote.png" alt="quote icon">
                                </div>
                                <div class="ratings-box">
                                    <h6>Quality Services</h6>
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium
                                doloremque laudantium, totam rem aperiam eaque quae abillo inventore veritatis et quasi architecto</p>
                            <div class="author-thumb-title">
                                <div class="author-thumb">
                                    <img src="assets/images/testimonial/thumb-3.jpg" alt="Author Image">
                                </div>
                                <div class="author-title">
                                    <h6 class="title">Brian L. Swinton</h6>
                                    <p class="position">Web Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>======-->
                    <!--====== Testimonial Item
                    <div class="single-testimonial-item">
                        <div class="testimonial-inner-content">
                            <div class="quote-rating-box">
                                <div class="icon">
                                    <img src="assets/images/testimonial/quote.png" alt="quote icon">
                                </div>
                                <div class="ratings-box">
                                    <h6>Quality Services</h6>
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium
                                doloremque laudantium, totam rem aperiam eaque quae abillo inventore veritatis et quasi architecto</p>
                            <div class="author-thumb-title">
                                <div class="author-thumb">
                                    <img src="assets/images/testimonial/thumb-1.jpg" alt="Author Image">
                                </div>
                                <div class="author-title">
                                    <h6 class="title">Timothy V. Kim</h6>
                                    <p class="position">SR Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>======-->
                </div>
            </div>
        </section><!--====== End Testimonial Section  ======-->
        <!--====== Start CTA Section
        <section class="cta-bg-section bg_cover pt-100 pb-50 p-r z-1" style="background-image: url(assets/images/bg/cta-bg-1.jpg);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5"> ======-->
                        <!--======  CTA Content Box
                        <div class="cta-content-box text-white mb-50 wow fadeInLeft">
                            <div class="section-title mb-20">
                                <span class="sub-title"><i class="flaticon-plant"></i>Need a Expert</span>
                                <h2>Looking For a Garden Specialist</h2>
                            </div>
                            <p class="mb-35">Sed ut perspiciatis unde omnis isnatu volunteer
                                accusantium doloremque laudantium</p>
                            <a href="team.html" class="main-btn golden-btn">Find Specialist</a>
                        </div>
                    </div>
                    <div class="col-lg-7">======-->
                        <!--======  CTA Image Box
                        <div class="cta-image-box mb-50 wow fadeInRight">
                            <img src="assets/images/gallery/cta-1.jpg" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </section> ======--><!--====== End CTA Section  ======-->
        <!--====== Start Blog Section  ======-->
        <section class="blog-section pt-100 pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-12">
                        <div class="section-title text-center mb-50 wow fadeInDown">
                            <span class="sub-title"><i class="flaticon-plant"></i>News & Blog</span>
                            <h2>Nos derniers News & Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach($actualite_limite as $actualite_limit)
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <!--====== Single Blog Post  ======-->
                        <div class="single-blog-post mb-40 wow fadeInUp" data-wow-delay=".2s">
                            <div class="post-thumbnail">
                                <img src="{{ asset('/frontend/actualite/'. $actualite_limit->image_actualite)}}" alt="Post Thumbnail">
                            </div>
                            <div class="entry-content">
                                <div class="author-meta">
                                    <div class="author">
                                        <img src="{{ asset('/frontend/actualite/'. $actualite_limit->image_actualite)}}" alt="Author Image">
                                        <h6><span>Par LDFG</span><a href="blog-details.html"></a></h6>
                                    </div>
                                    <a href="blog-details.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                                </div>
                                <a href="blog-details.html" class="cat-link"></a>
                                <h4 class="entry-title"><a href="blog-details.html">Voir plus</a></h4>
                                <p><?php echo $actualite_limit->description_actualite; ?></p>
                                <div class="post-meta">
                                    <span class="date"><a href="blog-details.html">{{$actualite_limit->created_at}}</a></span>
                                    <span class="comment"><a href="blog-details.html">5 Comments</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--<div class="col-xl-4 col-md-6 col-sm-12">-->
                        <!--====== Single Blog Post  ======-->
                        <!--<div class="single-blog-post mb-40 wow fadeInDown" data-wow-delay=".25s">
                            <div class="post-thumbnail">
                                <img src="{{ asset('vue/assets/images/blog/blog-2.jpg')}}" alt="Post Thumbnail">
                            </div>
                            <div class="entry-content">
                                <div class="author-meta">
                                    <div class="author">
                                        <img src="{{ asset('vue/assets/images/blog/author-thumb-2.jpg')}}" alt="Author Image">
                                        <h6><span>Post By</span><a href="blog-details.html">Michael K. Garcia</a></h6>
                                    </div>
                                    <a href="blog-details.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                                </div>
                                <a href="blog-details.html" class="cat-link">Landscape</a>
                                <h4 class="entry-title"><a href="blog-details.html">High Contrast Mod Forced Colors Mode Custom</a></h4>
                                <p>Sed ut perspiciatis unde omnis isnate
                                    volunteer accusantium dolore</p>
                                <div class="post-meta">
                                    <span class="date"><a href="blog-details.html">25 December 2022</a></span>
                                    <span class="comment"><a href="blog-details.html">5 Comments</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">-->
                        <!--====== Single Blog Post  ======-->
                        <!--<div class="single-blog-post mb-40 wow fadeInUp" data-wow-delay=".3s">
                            <div class="post-thumbnail">
                                <img src="{{ asset('vue/assets/images/blog/blog-3.jpg')}}" alt="Post Thumbnail">
                            </div>
                            <div class="entry-content">
                                <div class="author-meta">
                                    <div class="author">
                                        <img src="{{ asset('vue/assets/images/blog/author-thumb-3.jpg')}}" alt="Author Image">
                                        <h6><span>Post By</span><a href="blog-details.html">Michael K. Garcia</a></h6>
                                    </div>
                                    <a href="blog-details.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                                </div>
                                <a href="blog-details.html" class="cat-link">Gardening</a>
                                <h4 class="entry-title"><a href="blog-details.html">Enough Requirements For Accessible Components</a></h4>
                                <p>Sed ut perspiciatis unde omnis isnate
                                    volunteer accusantium dolore</p>
                                <div class="post-meta">
                                    <span class="date"><a href="blog-details.html">25 December 2022</a></span>
                                    <span class="comment"><a href="blog-details.html">5 Comments</a></span>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </section><!--====== End Blog Section  ======-->
        <!--====== Start Footer ======-->

@endsection
