<!DOCTYPE html>

<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Kross</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Creative Portfolio Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Kross Template v1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('portfolio_assets/kross/images/favicon.png')}}" />
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('portfolio_assets/kross/plugins/bootstrap/bootstrap.min.css')}}">
  <!-- slick slider -->
  <link rel="stylesheet" href="{{ asset('portfolio_assets/kross/plugins/slick/slick.css')}}">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="{{ asset('portfolio_assets/kross/plugins/themify-icons/themify-icons.css')}}">

  <!-- Main Stylesheet -->
  <link href="{{ asset('portfolio_assets/kross/css/style.css')}}" rel="stylesheet">

</head>
<body>
  

<header class="navigation fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand font-tertiary h3" href="index.html"><img src="images/logo.png" alt="Myself"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
      aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navigation">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog.html">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="portfolio.html">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<!-- hero area -->
<section class="hero-area bg-primary" id="parallax">
  <div class="container">
    <div class="row">
      <div class="col-lg-11 mx-auto">
        <h1 class="text-white font-tertiary">Hi! I’m <br> Christoher <br> UX designer</h1>
      </div>
    </div>
  </div>
  <div class="layer-bg w-100">
    <img class="img-fluid w-100" src="{{ asset('portfolio_assets/images/illustrations/leaf-bg.png')}}" alt="bg-shape">
  </div>
  <div class="layer" id="l2">
    <img src="{{ asset('portfolio_assets/kross/images/illustrations/dots-cyan.png')}}" alt="bg-shape">
  </div>
  <div class="layer" id="l3">
    <img src="{{ asset('portfolio_assets/kross/images/illustrations/leaf-orange.png')}}" alt="bg-shape">
  </div>
  <div class="layer" id="l4">
    <img src="{{ asset('portfolio_assets/kross/images/illustrations/dots-orange.png')}}" alt="bg-shape">
  </div>
  <div class="layer" id="l5">
    <img src="{{ asset('portfolio_assets/kross/images/illustrations/leaf-yellow.png')}}" alt="bg-shape">
  </div>
  <div class="layer" id="l6">
    <img src="{{ asset('portfolio_assets/kross/images/illustrations/leaf-cyan.png')}}" alt="bg-shape">
  </div>
  <div class="layer" id="l7">
    <img src="{{ asset('portfolio_assets/kross/images/illustrations/dots-group-orange.png')}}" alt="bg-shape">
  </div>
  <div class="layer" id="l8">
    <img src="{{ asset('portfolio_assets/kross/images/illustrations/leaf-pink-round.png')}}" alt="bg-shape">
  </div>
  <div class="layer" id="l9">
    <img src="{{ asset('portfolio_assets/kross/images/illustrations/leaf-cyan-2.png')}}" alt="bg-shape">
  </div>
  <!-- social icon -->
  <ul class="list-unstyled ml-5 mt-3 position-relative zindex-1">
    <li class="mb-3"><a class="text-white" href=""><i class="ti-facebook"></i></a></li>
    <li class="mb-3"><a class="text-white" href=""><i class="ti-instagram"></i></a></li>
    <li class="mb-3"><a class="text-white" href=""><i class="ti-dribbble"></i></a></li>
    <li class="mb-3"><a class="text-white" href=""><i class="ti-twitter"></i></a></li>
  </ul>
  <!-- /social icon -->
</section>
<!-- /hero area -->

<!-- about -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <p class="font-secondary paragraph-lg text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
          do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
          in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <a href="about.html" class="btn btn-transparent">know more</a>
      </div>
    </div>
  </div>
</section>
<!-- /about -->

<!-- skills -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">Skills</h2>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="card shadow text-center">
          <div class="position-relative rounded-top progress-wrapper" data-color="#fdb157">
            <div class="wave" data-progress="90%"></div>
          </div>
          <div class="card-footer bg-white">
            <h4 class="card-title">Web Design (90%)</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="card shadow text-center">
          <div class="position-relative rounded-top progress-wrapper" data-color="#9473e6">
            <div class="wave" data-progress="60%"></div>
          </div>
          <div class="card-footer bg-white">
            <h4 class="card-title">Logo Design (60%)</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="card shadow text-center">
          <div class="position-relative rounded-top progress-wrapper" data-color="#bdecf6">
            <div class="wave" data-progress="80%"></div>
          </div>
          <div class="card-footer bg-white">
            <h4 class="card-title">After Effects (80%)</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="card shadow text-center">
          <div class="position-relative rounded-top progress-wrapper" data-color="#ffbcaa">
            <div class="wave" data-progress="70%"></div>
          </div>
          <div class="card-footer bg-white">
            <h4 class="card-title">Web App (70%)</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /skills -->

<!-- experience -->
<section class="section">
  <div class="container">
    <div class="row justify-content-around">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">Experience</h2>
      </div>
      <div class="col-lg-3 col-md-4 text-center">
        <img src="images/experience/icon-1.png" alt="icon">
        <p class="mb-0">Jan 2007 - Feb 2009</p>
        <h4>Junior UX Designer</h4>
        <h6 class="text-light">WEBEX</h6>
      </div>
      <div class="col-lg-3 col-md-4 text-center">
        <img src="images/experience/icon-2.png" alt="icon">
        <p class="mb-0">Mar 2009 - Aug 2014</p>
        <h4>UX & UI Designer</h4>
        <h6 class="text-light">AUGMEDIX</h6>
      </div>
      <div class="col-lg-3 col-md-4 text-center">
        <img src="images/experience/icon-3.png" alt="icon">
        <p class="mb-0">Sep 2014 - Present</p>
        <h4>Senior UI Designer</h4>
        <h6 class="text-light">THEMEFISHER</h6>
      </div>
    </div>
  </div>
</section>
<!-- ./experience -->

<!-- education -->
<section class="section position-relative">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">Education</h2>
      </div>
      <div class="col-lg-6 col-md-6 mb-80">
        <div class="d-flex">
          <div class="mr-lg-5 mr-3">
            <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
          </div>
          <div>
            <p class="text-dark mb-1">2006</p>
            <h4>Marters in UX Design</h4>
            <p class="mb-0 text-light">Masassusets Institute of Technology</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-80">
        <div class="d-flex">
          <div class="mr-lg-5 mr-3">
            <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
          </div>
          <div>
            <p class="text-dark mb-1">2004</p>
            <h4>Honours in Fine Arts</h4>
            <p class="mb-0 text-light">Harvard University</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-80">
        <div class="d-flex">
          <div class="mr-lg-5 mr-3">
            <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
          </div>
          <div>
            <p class="text-dark mb-1">2000</p>
            <h4>Higher Secondary Certificat</h4>
            <p class="mb-0 text-light">Cardiff School</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-80">
        <div class="d-flex">
          <div class="mr-lg-5 mr-3">
            <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
          </div>
          <div>
            <p class="text-dark mb-1">1998</p>
            <h4>Secondary School Certificate</h4>
            <p class="mb-0 text-light">Cardiff School</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- bg image -->
  <img class="img-fluid edu-bg-image w-100" src="images/backgrounds/education-bg.png" alt="bg-image">
</section>
<!-- /education -->

<!-- services -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">Services</h2>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card hover-shadow shadow">
          <div class="card-body text-center px-4 py-5">
            <i class="ti-palette icon mb-5 d-inline-block"></i>
            <h4 class="mb-4">UI Design</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card active-bg-primary hover-shadow shadow">
          <div class="card-body text-center px-4 py-5">
            <i class="ti-vector icon mb-5 d-inline-block"></i>
            <h4 class="mb-4">UX Design</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card hover-shadow shadow">
          <div class="card-body text-center px-4 py-5">
            <i class="ti-panel icon mb-5 d-inline-block"></i>
            <h4 class="mb-4">Interaction Design</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /services -->

<!-- portfolio -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">Portfolio</h2>
      </div>
    </div>
    <div class="row shuffle-wrapper">
      <div class="col-lg-4 col-6 mb-4 shuffle-item">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/portfolio/item-1.png" alt="portfolio-image" class="img-fluid rounded w-100">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6 mb-4 shuffle-item">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/portfolio/item-2.png" alt="portfolio-image" class="img-fluid rounded w-100">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6 mb-4 shuffle-item">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/portfolio/item-3.png" alt="portfolio-image" class="img-fluid rounded w-100">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6 mb-4 shuffle-item">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/portfolio/item-4.png" alt="portfolio-image" class="img-fluid rounded w-100">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6 mb-4 shuffle-item">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/portfolio/item-5.png" alt="portfolio-image" class="img-fluid rounded w-100">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /portfolio -->

<!-- testimonial -->
<section class="section bg-primary position-relative testimonial-bg-shapes">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title text-white mb-5">Testimonials</h2>
      </div>
      <div class="col-lg-10 mx-auto testimonial-slider">
        <!-- slider-item -->
        <div class="text-center testimonial-content">
          <i class="ti-quote-right text-white icon mb-4 d-inline-block"></i>
          <p class="text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <strong>quis nostrud exercitation
              ullamco laboris nisi ut aliquip ex ea commodo consequat.</strong> Duis aute irure dolor in reprehenderit
            in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <img class="img-fluid rounded-circle mb-4 d-inline-block" src="images/testimonial/client-1.png"
            alt="client-image">
          <h4 class="text-white">Jesica Gomez</h4>
          <h6 class="text-light mb-4">CEO, Funder</h6>
        </div>
        <!-- slider-item -->
        <div class="text-center testimonial-content">
          <i class="ti-quote-right text-white icon mb-4 d-inline-block"></i>
          <p class="text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <strong>quis nostrud exercitation
              ullamco
              laboris nisi ut aliquip ex ea commodo consequat.</strong> Duis aute irure dolor in reprehenderit in
            voluptate velit
            esse cillum dolore eu fugiat nulla pariatur.</p>
          <img class="img-fluid rounded-circle mb-4 d-inline-block" src="images/testimonial/client-1.png"
            alt="client-image">
          <h4 class="text-white">Jesica Gomez</h4>
          <h6 class="text-light mb-4">CEO, Funder</h6>
        </div>
        <!-- slider-item -->
        <div class="text-center testimonial-content">
          <i class="ti-quote-right text-white icon mb-4 d-inline-block"></i>
          <p class="text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <strong>quis nostrud exercitation
              ullamco
              laboris nisi ut aliquip ex ea commodo consequat.</strong> Duis aute irure dolor in reprehenderit in
            voluptate velit
            esse cillum dolore eu fugiat nulla pariatur.</p>
          <img class="img-fluid rounded-circle mb-4 d-inline-block" src="images/testimonial/client-1.png"
            alt="client-image">
          <h4 class="text-white">Jesica Gomez</h4>
          <h6 class="text-light mb-4">CEO, Funder</h6>
        </div>
      </div>
    </div>
  </div>
  <!-- bg shapes -->
  <img src="images/backgrounds/map.png" alt="map" class="img-fluid bg-map">
  <img src="images/illustrations/dots-group-v.png" alt="bg-shape" class="img-fluid bg-shape-1">
  <img src="images/illustrations/leaf-orange.png" alt="bg-shape" class="img-fluid bg-shape-2">
  <img src="images/illustrations/dots-group-sm.png" alt="bg-shape" class="img-fluid bg-shape-3">
  <img src="images/illustrations/leaf-pink-round.png" alt="bg-shape" class="img-fluid bg-shape-4">
  <img src="images/illustrations/leaf-cyan.png" alt="bg-shape" class="img-fluid bg-shape-5">
</section>
<!-- /testimonial -->

<!-- client logo slider -->
<section class="section pb-0">
  <div class="container">
    <div class="client-logo-slider d-flex align-items-center">
      <a href="contact.html" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
          src="images/clients-logo/client-logo-1.png" alt="client-logo"></a>
      <a href="contact.html" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
          src="images/clients-logo/client-logo-2.png" alt="client-logo"></a>
      <a href="contact.html" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
          src="images/clients-logo/client-logo-3.png" alt="client-logo"></a>
      <a href="contact.html" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
          src="images/clients-logo/client-logo-4.png" alt="client-logo"></a>
      <a href="contact.html" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
          src="images/clients-logo/client-logo-5.png" alt="client-logo"></a>
      <a href="contact.html" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
          src="images/clients-logo/client-logo-1.png" alt="client-logo"></a>
      <a href="contact.html" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
          src="images/clients-logo/client-logo-2.png" alt="client-logo"></a>
      <a href="contact.html" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
          src="images/clients-logo/client-logo-3.png" alt="client-logo"></a>
      <a href="contact.html" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
          src="images/clients-logo/client-logo-4.png" alt="client-logo"></a>
      <a href="contact.html" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
          src="images/clients-logo/client-logo-5.png" alt="client-logo"></a>
    </div>
  </div>
</section>
<!-- /client logo slider -->

<!-- blog -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">Blogs</h2>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
        <article class="card shadow">
          <img class="rounded card-img-top" src="images/blog/post-3.jpg" alt="post-thumb">
          <div class="card-body">
            <h4 class="card-title"><a class="text-dark" href="blog-single.html">Amazon increase income 1.5 Million</a>
            </h4>
            <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et
              dolore magna aliqua.</p>
            <a href="blog-single.html" class="btn btn-xs btn-primary">Read More</a>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
        <article class="card shadow">
          <img class="rounded card-img-top" src="images/blog/post-4.jpg" alt="post-thumb">
          <div class="card-body">
            <h4 class="card-title"><a class="text-dark" href="blog-single.html">Amazon increase income 1.5 Million</a>
            </h4>
            <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et
              dolore magna aliqua.</p>
            <a href="blog-single.html" class="btn btn-xs btn-primary">Read More</a>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
        <article class="card shadow">
          <img class="rounded card-img-top" src="images/blog/post-2.jpg" alt="post-thumb">
          <div class="card-body">
            <h4 class="card-title"><a class="text-dark" href="blog-single.html">Amazon increase income 1.5 Million</a>
            </h4>
            <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et
              dolore magna aliqua.</p>
            <a href="blog-single.html" class="btn btn-xs btn-primary">Read More</a>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
<!-- /blog -->

<!-- contact -->
<section class="section section-on-footer" data-background="images/backgrounds/bg-dots.png">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">Contact Info</h2>
      </div>
      <div class="col-lg-8 mx-auto">
        <div class="bg-white rounded text-center p-5 shadow-down">
          <h4 class="mb-80">Contact Form</h4>
          <form action="#" class="row">
            <div class="col-md-6">
              <input type="text" id="name" name="name" placeholder="Full Name" class="form-control px-0 mb-4" required>
            </div>
            <div class="col-md-6">
              <input type="email" id="email" name="email" placeholder="Email Address" class="form-control px-0 mb-4" required>
            </div>
            <div class="col-12">
              <textarea name="message" id="message" class="form-control px-0 mb-4"
                placeholder="Type Message Here" required></textarea>
            </div>
            <div class="col-lg-6 col-10 mx-auto">
              <button class="btn btn-primary w-100">send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /contact -->

<!-- footer -->
<footer class="bg-dark footer-section">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5 class="text-light">Email</h5>
          <p class="text-white paragraph-lg font-secondary">steve.fruits@email.com</p>
        </div>
        <div class="col-md-4">
          <h5 class="text-light">Phone</h5>
          <p class="text-white paragraph-lg font-secondary">+880 2544 658 256</p>
        </div>
        <div class="col-md-4">
          <h5 class="text-light">Address</h5>
          <p class="text-white paragraph-lg font-secondary">125/A, CA Commercial Area, California, USA</p>
        </div>
      </div>
    </div>
  </div>
  <div class="border-top text-center border-dark py-5">
    <p class="mb-0 text-light">Copyright &copy;<script>
        var CurrentYear = new Date().getFullYear()
        document.write(CurrentYear)
      </script> Designed &amp; Developed by <a class="text-white-50" href="">Themefisher</a></p>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="{{ asset('portfolio_assets/kross/plugins/jQuery/jquery.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('portfolio_assets/kross/plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- slick slider -->
<script src="{{ asset('portfolio_assets/kross/plugins/slick/slick.min.js')}}"></script>
<!-- filter -->
<script src="{{ asset('portfolio_assets/kross/plugins/shuffle/shuffle.min.js')}}"></script>

<!-- Main Script -->
<script src="{{ asset('portfolio_assets/kross/js/script.js')}}"></script>

</body>
</html>
