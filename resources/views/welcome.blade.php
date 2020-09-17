@extends('layout.app')
    
@section('header')
        <h1 class="d-none">Sino Ventures Group</h1>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WCMB5L6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <!--::menu part start::-->
        <header class="main_menu home_menu opacity">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-dark" style="z-index: 999!important">
                      <a class="navbar-brand" href="index.html"></a>
                        <button id="navTog" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="mdi mdi-format-list-bulleted"></i>
                        </button>
                        <div class="collapse navbar-collapse main-menu-item" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="https://sinovgpl.com">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://sinovgpl.com/#portfolio">portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://sinovgpl.com/#bizcolab">Business Collaboration</a>
                                </li>
                                <!-- <li class="nav-item dropdown">
                               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  blog
                               </a>
                               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="blog.html">blog</a>
                                  <a class="dropdown-item" href="single-blog.html">Single blog</a>
                               </div>
                            </li> --> 
                                <li class="nav-item">
                                    <a class="nav-link" href="https://sinovgpl.com/#contact">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <section class="banner_part">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="banner_text d-block d-sm-flex justify-content-center">
                        <div class="banner_text_iner align-items-center">
                            <img height="140" src="https://sinovgpl.com/assets/images/SVGPL_logo_Alt.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="banner_text d-flex">
                        <div class="banner_text_iner align-items-center pl-1 pl-sm-0 pt-0 pt-sm-1">
                            <h3>Your</h3>
                            <h2 id="element"></h2>

                        </div>
                    </div>
                </div>
                <div class="col-12 arrowContainer">
                    <div class="row justify-content-center">
                        <div class="arrow">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div style="margin-top:100px" class="row justify-content-center">
                        <span class="scroll-for-more">
                            Scroll Down For More
                        </span>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--::banner part end::-->

    <!--::team part end::-->

    <section class="about_part section-padding" id="portfolio">
        <div class="container">
            <div class="row d-block mb-5 px-5">
                <img class="d-block mx-auto" src="https://sinovgpl.com/assets/images/portfolio.png" alt="">
            </div>
            <div class="">
                <div class="slick-portfolio m-0 row">
                                    <div class="slick-slide-portfolio swiper-slide py-2 px-3">
                        <div class="portfolio-border">
                            <a href="http://davismw.com">
                                <img src="https://sinovgpl.com/storage/portfolio/POR5e6602faa2a6a.png" style="width:100%" alt="Davis Materialworks">
                            </a>
                        </div>
                    </div>
                                    <div class="slick-slide-portfolio swiper-slide py-2 px-3">
                        <div class="portfolio-border">
                            <a href="http://www.cityhive.sg">
                                <img src="https://sinovgpl.com/storage/portfolio/POR5e7c59918b717.png" style="width:100%" alt="Cityhive">
                            </a>
                        </div>
                    </div>
                                    <div class="slick-slide-portfolio swiper-slide py-2 px-3">
                        <div class="portfolio-border">
                            <a href="https://www.supercharge.business">
                                <img src="https://sinovgpl.com/storage/portfolio/POR5e65fc640ea29.png" style="width:100%" alt="Supercharge">
                            </a>
                        </div>
                    </div>
                                    <div class="slick-slide-portfolio swiper-slide py-2 px-3">
                        <div class="portfolio-border">
                            <a href="https://sinovgpl.com/bizcollab/svg-working-space-for-rent/ART5e7c5e00419f9/en">
                                <img src="https://sinovgpl.com/storage/portfolio/POR5e7c59edcd677.png" style="width:100%" alt="Ten Six Singapore">
                            </a>
                        </div>
                    </div>
                                    <div class="slick-slide-portfolio swiper-slide py-2 px-3">
                        <div class="portfolio-border">
                            <a href="#">
                                <img src="https://sinovgpl.com/storage/portfolio/POR5e7c5a4d475be.png" style="width:100%" alt="Coming Soon">
                            </a>
                        </div>
                    </div>
                                    <div class="slick-slide-portfolio swiper-slide py-2 px-3">
                        <div class="portfolio-border">
                            <a href="#">
                                <img src="https://sinovgpl.com/storage/portfolio/POR5e7c5a6220ae5.png" style="width:100%" alt="Coming Soon">
                            </a>
                        </div>
                    </div>
                                    <!-- Add Pagination -->
                </div>
            </div>
            <div class="d-flex d-md-none mt-5 row justify-content-center">
                <img class="swipeleft" src="https://sinovgpl.com/assets/images/swipeleft_white.png" alt="">
                <img class="swiperight" src="https://sinovgpl.com/assets/images/swiperight_white.png" alt="">
            </div>
            <!-- Slider main container -->
        </div>
    </section>
    <section class="portfolio_area pt-5 padding_bottom" id="bizcolab">
        <div class="container pt-5">
            <div class="row d-block mb-4 mt-5 px-5">
                <img class="d-block mx-auto" src="https://sinovgpl.com/assets/images/businesscollaborate.png" alt="">
            </div>
            <div class="row d-flex justify-content-center mb-5 px-5 text-center">
                <h4>These are the opportunity areas, we preferred to enhance our portfolio.</h4>
            </div>
            <div class="row slick-articles m-0 left-align-slick">
                            <div class="slick-slide-articles py-2 px-3">
                    <div class="articles-card">
                        <a href="https://sinovgpl.com/b/local-representative-distributor/3/en">
                            <div class="articles-container">
                                <img src="https://sinovgpl.com/storage/articles/ART5e6caed9dd392.png" style="width:100%" alt="Local Representative &amp; Distributor">
                            </div>
                            <div class="card-text text-center">
                                <h5 class="mt-1"><b>Local Representative &amp; Distributor</b></h5>
                                <p class="biz-colab-subtitle pb-3">If you are looking for a Singapore Representative &amp; Distributor.</p>
                            </div>
                        </a>
                    </div>
                </div>
                            <div class="slick-slide-articles py-2 px-3">
                    <div class="articles-card">
                        <a href="https://sinovgpl.com/b/svg-e-commerce-business-partnership/2/en">
                            <div class="articles-container">
                                <img src="https://sinovgpl.com/storage/articles/ART5e6af5205168e.png" style="width:100%" alt="SVG E-commerce Business Partnership">
                            </div>
                            <div class="card-text text-center">
                                <h5 class="mt-1"><b>SVG E-commerce Business Partnership</b></h5>
                                <p class="biz-colab-subtitle pb-3">We can be your reliable partner for E-Commerce Business</p>
                            </div>
                        </a>
                    </div>
                </div>
                            <div class="slick-slide-articles py-2 px-3">
                    <div class="articles-card">
                        <a href="https://sinovgpl.com/b/svg-working-space-for-rent/4/en">
                            <div class="articles-container">
                                <img src="https://sinovgpl.com/storage/articles/ART5e7c5e00419f9.png" style="width:100%" alt="SVG Working Space For Rent">
                            </div>
                            <div class="card-text text-center">
                                <h5 class="mt-1"><b>SVG Working Space For Rent</b></h5>
                                <p class="biz-colab-subtitle pb-3">Space for Collaboration and Rental</p>
                            </div>
                        </a>
                    </div>
                </div>
                            <div class="slick-slide-articles py-2 px-3">
                    <div class="articles-card">
                        <a href="https://sinovgpl.com/b/professional-graphic-designer/1/en">
                            <div class="articles-container">
                                <img src="https://sinovgpl.com/storage/articles/ART5e6aef3385622.png" style="width:100%" alt="Professional Graphic Designer">
                            </div>
                            <div class="card-text text-center">
                                <h5 class="mt-1"><b>Professional Graphic Designer</b></h5>
                                <p class="biz-colab-subtitle pb-3">We are looking for Professional Graphic Designer for Collaboration.</p>
                            </div>
                        </a>
                    </div>
                </div>
                            <div class="slick-slide-articles py-2 px-3">
                    <div class="articles-card">
                        <a href="https://sinovgpl.com/b/professional-full-stack-developer/5/en">
                            <div class="articles-container">
                                <img src="https://sinovgpl.com/storage/articles/ART5e7caafd75641.png" style="width:100%" alt="Professional Full-Stack Developer">
                            </div>
                            <div class="card-text text-center">
                                <h5 class="mt-1"><b>Professional Full-Stack Developer</b></h5>
                                <p class="biz-colab-subtitle pb-3">We are looking for Professional Web Programmer, Full-Stack Developer for Collaboration</p>
                            </div>
                        </a>
                    </div>
                </div>
                            <div class="slick-slide-articles py-2 px-3">
                    <div class="articles-card">
                        <a href="https://sinovgpl.com/b/professional-photographer/6/en">
                            <div class="articles-container">
                                <img src="https://sinovgpl.com/storage/articles/ART5e7cac13e53db.png" style="width:100%" alt="Professional Photographer">
                            </div>
                            <div class="card-text text-center">
                                <h5 class="mt-1"><b>Professional Photographer</b></h5>
                                <p class="biz-colab-subtitle pb-3">We are looking for Professional Photographer for Collaboration</p>
                            </div>
                        </a>
                    </div>
                </div>
                        </div>
            <div class="d-flex d-md-none mt-5 row justify-content-center">
                <img class="swipeleft" src="https://sinovgpl.com/assets/images/swipeleft_black.png" alt="">
                <img class="swiperight" src="https://sinovgpl.com/assets/images/swiperight_black.png" alt="">
            </div>
        </div>
    </section>



    <section class="form padding_med" id="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 d-none d-sm-block coverForm">
                </div>
                <div class="col-sm-12 col-lg-6 col-12">
                    <div class="row justify-content-center">
                        <h2>Let's Connect</h2>
                    </div>
                    <div class="row justify-content-center" id="formLoading">
                        <div class="col-12 col-sm-10">
                            <form action="https://sinovgpl.com/form/submit" method="post" id="main-form" class="comment-form">
                                <input type="hidden" name="_token" value="fLd0bgJBseSlqAc9Vuz0mfE9aG3lhhSlZS5KOqTN">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input required type="text" name="name" placeholder="Name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col">
                                        <input required type="text" placeholder="Phone" name="phone" class="form-control">
                                    </div>
                                    <div class="col">
                                        <input required type="email" placeholder="Email" name="email" class="form-control">
                                    </div>
                                </div>
                                <input required type="text" placeholder="Email" name="page" value="landing" class="d-none form-control">
                                <div id="hcaptcha" data-sitekey="657e5f0b-51c2-4b2b-a16c-137c880b5e55" data-callback="onSubmit" data-size="invisible" class="h-captcha form-group row mb-1">
                                    <div class="col-sm-12">
                                        <select class="form-control nice-select wide" name="formType" id="formType">
                                            <option value="0" data-display="Select Form">Select Below</option>
                                                                                    <option id="selectThis" value="FOR5e676a2321b18">General Enquiry</option>
                                                                                </select>
                                    </div>
                                </div>
                                <div id="formContainer">

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-sm-block coverForm">
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    <footer class="footer_part bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h4>Office</h4>
                    <br>
                    62 Ubi Road 1, #10-06 Oxley Bizhub 2
                    <br>
                    Singapore 408734
                    <div class="mt-3 mb-3">
                        <small>© 2015 - 2020 Sino Ventures Group. All Rights Reserved.
                            <br>
                            <a href="https://sinovgpl.com/terms-privacy">Privacy Policy</a> 
                        </small>
                    </div> 
                </div>
            </div>
        </div>
    </footer>
@endsection