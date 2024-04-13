<!DOCTYPE html>
<!-- upto 2 directory depth-->
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Super Folio</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" media="print"
        onload="this.media='all'" />
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" />
    </noscript>
    <link href="{{ asset('portfolio_assets/super/css/font-awesome/css/all.min.css?ver=1.2.0') }}" rel="stylesheet">
    <link href="{{ asset('portfolio_assets/super/css/bootstrap-icons/bootstrap-icons.css?ver=1.2.0') }}"
        rel="stylesheet">
    <link href="{{ asset('portfolio_assets/super/css/bootstrap.min.css?ver=1.2.0') }}" rel="stylesheet">
    <link href="{{ asset('portfolio_assets/super/css/aos.css?ver=1.2.0') }}" rel="stylesheet">
    <link href="{{ asset('portfolio_assets/super/css/main.css?ver=1.2.0') }}" rel="stylesheet">
    <noscript>
        <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }
        </style>

    </noscript>
</head>

<body id="top">


    <header class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="header-nav" role="navigation">
            <div class="container"><a class="link-dark navbar-brand site-title mb-0" href="#">Super Folio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-2">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="page-content">
        <div id="content">
            <header>
                <div class="cover bg-light">
                    <div class="container px-3">
                        <div class="row">
                            <div class="col-lg-6 p-2"><img class="img-fluid"
                                    src="{{ asset('portfolio_assets/super/images/illustrations/hello3.svg') }}"
                                    alt="hello" /></div>
                            <div class="col-lg-6">
                                <div class="mt-5">
                                    <p class="lead text-uppercase mb-1">Hello!</p>
                                    <h1 class="intro-title marker">I’m</h1>
                                    <h1 class="intro-title marker" data-aos="fade-left" id="user-name"
                                        data-aos-delay="50">{{ !empty($user->name) ? $user->name : 'Walter Patterson' }}
                                    </h1>
                                    <p class="lead fw-normal mt-3" data-aos="fade-up" id="user-profession"
                                        data-aos-delay="100">
                                        {{ !empty($user->profession) ? $user->profession : 'Web Developer & Mobile Application Developer' }}
                                    </p>
                                    <div class="social-nav" data-aos="fade-up" data-aos-delay="200">
                                        <nav role="navigation">
                                            <ul class="nav justify-content-left">
                                                @if (!empty($user->twitter))
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="https://{{ $user->twitter }}" title="Twitter"><i
                                                                class="fab fa-twitter"></i><span
                                                                class="menu-title sr-only">Twitter</span></a></li>
                                                @endif
                                                @if (!empty($user->facebook))
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="https://{{ $user->facebook }}" title="Facebook"><i
                                                                class="fab fa-facebook"></i><span
                                                                class="menu-title sr-only">Facebook</span></a></li>
                                                @endif
                                                @if (!empty($user->instagram))
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="https://{{ $user->instagram }}"
                                                            title="Instagram"><i class="fab fa-instagram"></i><span
                                                                class="menu-title sr-only">Instagram</span></a></li>
                                                @endif
                                                @if (!empty($user->linked_in))
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="https://{{ $user->linked_in }}" title="LinkedIn"><i
                                                                class="fab fa-linkedin"></i><span
                                                                class="menu-title sr-only">LinkedIn</span></a></li>
                                                @endif
                                                @if (!empty($user->github))
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="https://{{ $user->github }}" title="GitHub"><i
                                                                class="fab fa-github"></i><span
                                                                class="menu-title sr-only">GitHub</span></a></li>
                                                @endif
                                                @if (!empty($user->upwork))
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="https://{{ $user->upwork }}" title="Upwork"><i
                                                                class="fa-brands fa-upwork"></i><span
                                                                class="menu-title sr-only">Upwork</span></a></li>
                                                @endif
                                                @if (!empty($user->freelancer))
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="https://{{ $user->freelancer }}"
                                                            title="Freelancer"><i class="fab fa-freelancer"></i><span
                                                                class="menu-title sr-only">Freelancer</span></a></li>
                                                @endif
                                                @if (!empty($user->youtube))
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="https://{{ $user->youtube }}" title="Youtube"><i
                                                                class="fab fa-youtube"></i><span
                                                                class="menu-title sr-only">Youtube</span></a></li>
                                                @endif
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="mt-3" data-aos="fade-up" data-aos-delay="200"><a
                                            class="btn btn-primary shadow-sm mt-1 hover-effect"
                                            href="#contact">Download CV <i class="fas fa-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wave-bg"></div>
            </header>
            <div class="section pt-4 px-3 px-lg-4" id="about">
                <div class="container-narrow">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="h4 my-2">About me</h2>
                            <p id="user-description">
                                @if (!empty($user->profile_description))
                                    {{ $user->profile_description }}
                                @else
                                    I am passionate about UI/UX design and Web Design. I am a skilled front-end
                                    developer and master of graphic design tools such as Photoshop and Sketch. I am a
                                    quick learner and a team worker that gets the job done. I can easily capitalize on
                                    low hanging fruits and quickly maximize timely deliverables for real-time schemas.
                                @endif
                            </p>
                            <div class="row mt-3">
                                @if (!empty($user->email) && !empty($user->age))
                                    <div class="col-sm-2">
                                        <div class="pb-1">Age:</div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="pb-1 fw-bolder" id="user-age">{{ $user->age }}</div>
                                    </div>
                                @elseif(empty($user->email))
                                    <div class="col-sm-2">
                                        <div class="pb-1">Age:</div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="pb-1 fw-bolder" id="user-age">28</div>
                                    </div>
                                @endif
                                @if (!empty($user->email))
                                    <div class="col-sm-2">
                                        <div class="pb-1">Email:</div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="pb-1 fw-bolder" id="user-email">{{ $user->email }}</div>
                                    </div>
                                @else
                                    <div class="col-sm-2">
                                        <div class="pb-1">Email:</div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="pb-1 fw-bolder" id="user-email">company@company.com</div>
                                    </div>
                                @endif
                                @if (!empty($user->email) && !empty($user->contact_number))
                                    <div class="col-sm-2">
                                        <div class="pb-1">Phone:</div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="pb-1 fw-bolder" id="contact-number">
                                            {{ $user->contact_number }}
                                        </div>
                                    </div>
                                @elseif(empty($user->email))
                                    <div class="col-sm-2">
                                        <div class="pb-1">Phone:</div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="pb-1 fw-bolder" id="contact-number">
                                            +1-123-1231-123
                                        </div>
                                    </div>
                                @endif
                                @if (!empty($user->email) && !empty($user->address))
                                    <div class="col-sm-2">
                                        <div class="pb-1">Address:</div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="pb-1 fw-bolder" id="user-address">
                                            {{ $user->address }}</div>
                                    </div>
                                @elseif(empty($user->email))
                                    <div class="col-sm-2">
                                        <div class="pb-1">Address:</div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="pb-1 fw-bolder" id="user-address">
                                            New York, USA
                                        </div>
                                @endif
                                @if (!empty($user->email) && !empty($user->gender))
                                    <div class="col-sm-2">
                                        <div class="pb-1">Gender</div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="pb-1 fw-bolder" id="user-gender">
                                            {{ $user->gender }}</div>
                                    </div>
                                @elseif(empty($user->email))
                                    <div class="col-sm-2">
                                        <div class="pb-1">Gender</div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="pb-1 fw-bolder" id="user-gender">
                                            Male
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-5 offset-md-1" data-aos="fade-left" data-aos-delay="100"><img
                                class="avatar img-fluid mt-2"
                                src="{{ asset('profile_pic/' . (!empty($user->image) ? $user->image : 'noimage.jpg')) }}"
                                width="400" height="400" alt="Profile photo" /></div>
                    </div>
                </div>
            </div>
            <div class="section px-3 px-lg-4 pt-5" id="services">
                <div class="container-narrow">
                    <div class="text-center mb-5">
                        <h2 class="marker marker-center">My Services</h2>
                    </div>
                    {{-- <div class="text-center">
      <p class="mx-auto mb-3" style="max-width:600px"> I offer services fit for any website or app. I can quickly maximize timely deliverables for real-time schemas.</p>
    </div> --}}

                    <div class="row py-3 justify-content-center">
                        @if (!empty($services))
                            @foreach ($services as $service)
                                <div class="col-md-3 col-7  text-center" data-aos="fade-up" data-aos-delay="100">
                                    {!! $service->svg_icon_code !!}
                                    <div class="h5">{{ $service->service_title }}</div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="100"><img
                                    class="mb-2"
                                    src="{{ asset('portfolio_assets/super/images/services/web-design.svg') }}"
                                    width="96" height="96" alt="web design" />
                                <div class="h5">Web Design</div>
                            </div>
                            <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="200"><img
                                    class="mb-2"
                                    src="{{ asset('portfolio_assets/super/images/services/graphic-design.svg') }}"
                                    width="96" height="96" alt="graphic design" />
                                <div class="h5">Graphic Design</div>
                            </div>
                            <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="300"><img
                                    class="mb-2"
                                    src="{{ asset('portfolio_assets/super/images/services/ui-ux.svg') }}"
                                    width="96" height="96" alt="ui-ux" />
                                <div class="h5">UI/UX</div>
                            </div>
                            <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="400"><img
                                    class="mb-2"
                                    src="{{ asset('portfolio_assets/super/images/services/app-development.svg') }}"
                                    width="96" height="96" alt="app development" />
                                <div class="h5">App Development</div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="section px-3 px-lg-4 pt-5" id="skills">
                <div class="container-narrow">
                    <div class="text-center mb-5">
                        <h2 class="marker marker-center">My Skills</h2>
                    </div>
                    {{-- <div class="text-center">
      <p class="mx-auto mb-3" style="max-width:600px">I am a quick learner and specialize in multitude of skills required for Web Application Development and Product Design</p>
    </div> --}}
                    <div class="bg-light p-3">
                        <div class="row justify-content-center">
                            @if (!empty($skills))
                                <div class="col-md-10">
                                    @foreach ($skills as $skill)
                                        <div class="py-1">
                                            <div class="d-flex text-small fw-bolder"><span
                                                    class="me-auto">{{ $skill->skill_name }}</span><span>{{ $skill->skill_percentage }}%</span>
                                            </div>
                                            <div class="progress my-1">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    data-aos="zoom-in-right" data-aos-delay="100"
                                                    data-aos-anchor=".skills-section"
                                                    style="width: {{ $skill->skill_percentage }}%"
                                                    aria-valuenow="{{ $skill->skill_percentage }}" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="col-md-5">
                                    <div class="py-1">
                                        <div class="d-flex text-small fw-bolder"><span
                                                class="me-auto">HTML5</span><span>90%</span></div>
                                        <div class="progress my-1">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                data-aos="zoom-in-right" data-aos-delay="100"
                                                data-aos-anchor=".skills-section" style="width: 90%"
                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="py-1">
                                        <div class="d-flex text-small fw-bolder"><span
                                                class="me-auto">CSS3</span><span>90%</span></div>
                                        <div class="progress my-1">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                data-aos="zoom-in-right" data-aos-delay="200"
                                                data-aos-anchor=".skills-section" style="width: 90%"
                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="py-1">
                                        <div class="d-flex text-small fw-bolder"><span
                                                class="me-auto">JavaScript</span><span>80%</span></div>
                                        <div class="progress my-1">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                data-aos="zoom-in-right" data-aos-delay="300"
                                                data-aos-anchor=".skills-section" style="width: 80%"
                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="py-1">
                                        <div class="d-flex text-small fw-bolder"><span
                                                class="me-auto">React</span><span>75%</span></div>
                                        <div class="progress my-1">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                data-aos="zoom-in-right" data-aos-delay="300"
                                                data-aos-anchor=".skills-section" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-2">
                                    <div class="py-1">
                                        <div class="d-flex text-small fw-bolder"><span
                                                class="me-auto">PHP</span><span>70%</span></div>
                                        <div class="progress my-1">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                data-aos="zoom-in-right" data-aos-delay="400"
                                                data-aos-anchor=".skills-section" style="width: 70%"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="py-1">
                                        <div class="d-flex text-small fw-bolder"><span
                                                class="me-auto">WordPress</span><span>70%</span></div>
                                        <div class="progress my-1">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                data-aos="zoom-in-right" data-aos-delay="500"
                                                data-aos-anchor=".skills-section" style="width: 70%"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="py-1">
                                        <div class="d-flex text-small fw-bolder"><span
                                                class="me-auto">MySQL</span><span>60%</span></div>
                                        <div class="progress my-1">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                data-aos="zoom-in-right" data-aos-delay="600"
                                                data-aos-anchor=".skills-section" style="width: 60%"
                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="py-1">
                                        <div class="d-flex text-small fw-bolder"><span
                                                class="me-auto">Photoshop</span><span>60%</span></div>
                                        <div class="progress my-1">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                data-aos="zoom-in-right" data-aos-delay="600"
                                                data-aos-anchor=".skills-section" style="width: 60%"
                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="section px-2 px-lg-4 pt-5" id="portfolio">
                <div class="container">
                    <div class="text-center mb-5">
                        <h2 class="marker marker-center">Portfolio</h2>
                    </div>
                    <div class="grid bp-gallery pb-3" data-aos="zoom-in-up" data-aos-delay="100">
                        <div class="grid-sizer"></div>
                        @foreach ($works as $work)
                            <div class="grid-item">
                                <a href="#" class="open-modal" data-id="{{ $work->id }}">
                                    <figure class="portfolio-item">
                                        <img src="{{ asset('project_photos/' . $work->thumbnail) }}"
                                            onclick="openModal();currentSlide(1)" class="hover-shadow cursor" />
                                        <figcaption>
                                            <h4 class="h5 mb-0">{{ $work->work_title }}</h4>
                                            <div>{{ $work->work_url }}</div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        @endforeach
                        @include('includes.client-side.workImages')
                        {{-- <div class="grid-item"><a href="https://github.com">
          <figure class="portfolio-item"><img src="{{asset('portfolio_assets/super/images/portfolio/2-small.png')}}" data-bp="{{asset('portfolio_assets/super/images/portfolio/2-small.png')}}" data-caption="Example of an optional caption."/>
            <figcaption> 
              <h4 class="h5 mb-0">Web Development</h4>
              <div>GitHub.com</div>
            </figcaption>
          </figure></a></div>
      <div class="grid-item"><a href="https://soundcloud.com/">
          <figure class="portfolio-item"><img src="{{asset('portfolio_assets/super/images/portfolio/3-small.png')}}" data-bp="{{asset('portfolio_assets/super/images/portfolio/3-small.png')}}" data-caption="Example of an optional caption."/>
            <figcaption> 
              <h4 class="h5 mb-0">Audio Mixing</h4>
              <div>Soundcloud.com</div>
            </figcaption>
          </figure></a></div>
      <div class="grid-item"><a href="https://www.adobe.com/">
          <figure class="portfolio-item"><img src="{{asset('portfolio_assets/super/images/portfolio/4-small.png')}}" data-bp="{{asset('portfolio_assets/super/images/portfolio/4-small.png')}}"/>
            <figcaption>
              <h4 class="h5 mb-0">Video Editing</h4>
              <div>Adobe After Effects</div>
            </figcaption>
          </figure></a></div>
      <div class="grid-item"><a href="https://www.adobe.com/">
          <figure class="portfolio-item"><img src="{{asset('portfolio_assets/super/images/portfolio/5-small.png')}}" data-bp="{{asset('portfolio_assets/super/images/portfolio/5-small.png')}}"/>
            <figcaption>
              <h4 class="h5 mb-0">Photography</h4>
              <div>Adobe Photoshop</div>
            </figcaption>
          </figure></a></div>
      <div class="grid-item"><a href="https://www.android.com/">
          <figure class="portfolio-item"><img src="{{asset('portfolio_assets/super/images/portfolio/6-small.png')}}" data-bp="{{asset('portfolio_assets/super/images/portfolio/6-small.png')}}"/>
            <figcaption>
              <h4 class="h5 mb-0">App Development</h4>
              <div>Android</div>
            </figcaption>
          </figure></a></div>
      <div class="grid-item"><a href="https://flutter.dev/">
          <figure class="portfolio-item"><img src="{{asset('portfolio_assets/super/images/portfolio/7-small.png')}}" data-bp="{{asset('portfolio_assets/super/images/portfolio/7-small.png')}}"/>
            <figcaption>
              <h4 class="h5 mb-0">App Design</h4>
              <div>Flutter</div>
            </figcaption>
          </figure></a></div>
      <div class="grid-item"><a href="https://flutter.dev/">
          <figure class="portfolio-item"><img src="{{asset('portfolio_assets/super/images/portfolio/8-small.png')}}" data-bp="{{asset('portfolio_assets/super/images/portfolio/2-small.png')}}"/>
            <figcaption>
              <h4 class="h5 mb-0">App Development</h4>
              <div>Flutter</div>
            </figcaption>
          </figure></a></div>
    </div> --}}
                    </div>
                </div>


                <div class="section px-3 px-lg-4 pt-5" id="experience">
                    <div class="container-narrow">
                        <div class="text-center mb-5">
                            <h2 class="marker marker-center">Experience</h2>
                        </div>
                        @if ($experiences->isNotEmpty())
                            <div class="row">
                                @foreach ($experiences as $experience)
                                    <div class="col-md-6">
                                        <div class="card mb-3" data-aos="fade-right" data-aos-delay="100">
                                            <div class="card-header px-3 py-2">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <h3 class="h5 mb-1">{{ $experience->position }}</h3>
                                                        <div class="text-muted text-small">
                                                            {{ $experience->company_name }} <small>(
                                                                {!! $experience->exp_start . ' <b> To </b>' . $experience->exp_end !!} )</small></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body px-3 py-2">
                                                <p>{{ $experience->exp_description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3" data-aos="fade-right" data-aos-delay="100">
                                        <div class="card-header px-3 py-2">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h3 class="h5 mb-1">UI/UX Design</h3>
                                                    <div class="text-muted text-small">Designerr Inc.
                                                        <small>(2012-2014)</small>
                                                    </div>
                                                </div><img src="images/services/ui-ux.svg" width="48"
                                                    height="48" alt="ui-ux" />
                                            </div>
                                        </div>
                                        <div class="card-body px-3 py-2">
                                            <p>Leverage agile frameworks to provide a robust synopsis for high level
                                                overviews. Iterative approaches to corporate strategy foster
                                                collaborative thinking to further the overall value proposition.</p>
                                            <p>Organically grow the holistic world view of disruptive innovation via
                                                workplace diversity and empowerment.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3" data-aos="fade-left" data-aos-delay="300">
                                        <div class="card-header px-3 py-2">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h3 class="h5 mb-1">App Development</h3>
                                                    <div class="text-muted text-small">MakeMyApp LLC.
                                                        <small>(2015-2018)</small>
                                                    </div>
                                                </div><img src="images/services/app-development.svg" width="48"
                                                    height="48" alt="app development" />
                                            </div>
                                        </div>
                                        <div class="card-body px-3 py-2">
                                            <p>Leverage agile frameworks to provide a robust synopsis for high level
                                                overviews. Iterative approaches to corporate strategy foster
                                                collaborative thinking to further the overall value proposition.</p>
                                            <p>Organically grow the holistic world view of disruptive innovation via
                                                workplace diversity and empowerment.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3" data-aos="fade-right" data-aos-delay="200">
                                        <div class="card-header px-3 py-2">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h3 class="h5 mb-1">Web Design</h3>
                                                    <div class="text-muted text-small">Webbie LLC.
                                                        <small>(2018-2020)</small>
                                                    </div>
                                                </div><img src="images/services/web-design.svg" width="48"
                                                    height="48" alt="web design" />
                                            </div>
                                        </div>
                                        <div class="card-body px-3 py-2">
                                            <p>Leverage agile frameworks to provide a robust synopsis for high level
                                                overviews. Iterative approaches to corporate strategy foster
                                                collaborative thinking to further the overall value proposition.</p>
                                            <p>Organically grow the holistic world view of disruptive innovation via
                                                workplace diversity and empowerment.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3" data-aos="fade-left" data-aos-delay="400">
                                        <div class="card-header px-3 py-2">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h3 class="h5 mb-1">Full Stack Development</h3>
                                                    <div class="text-muted text-small">Coder Inc.
                                                        <small>(2020-2021)</small>
                                                    </div>
                                                </div><img src="images/services/full-stack.svg" width="48"
                                                    height="48" alt="full stack" />
                                            </div>
                                        </div>
                                        <div class="card-body px-3 py-2">
                                            <p>Leverage agile frameworks to provide a robust synopsis for high level
                                                overviews. Iterative approaches to corporate strategy foster
                                                collaborative thinking to further the overall value proposition.</p>
                                            <p>Organically grow the holistic world view of disruptive innovation via
                                                workplace diversity and empowerment.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                {{-- <div class="section px-3 px-lg-4 pt-5" id="testimonials">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Client Testimonials</h2>
    </div>
    <div class="row"> 
      <div class="col-md-6 mb-5" data-aos="fade-right" data-aos-delay="100">
        <div class="d-flex ms-md-3"><span><i class="fas fa-2x fa-quote-left"></i></span><span class="m-2">Walter displays exemplary professionalism and is able to take on challenges. He learns quickly and is an asset to any team.</span></div>
        <div class="d-flex justify-content-end align-items-end">
          <div class="text-end me-2">
            <div class="fw-bolder">Aiyana</div>
            <div class="text-small">CEO / Web Design Company</div>
          </div><img class="me-md-3 rounded" src="images/testimonials/client1.jpg" width="96" height="96" alt="client 1"/>
        </div>
      </div>
      <div class="col-md-6 mb-5" data-aos="fade-left" data-aos-delay="300">
        <div class="d-flex ms-md-3"><span><i class="fas fa-2x fa-quote-left"></i></span><span class="m-2">Walter displays exemplary professionalism and is able to take on challenges. He learns quickly and is an asset to any team.</span></div>
        <div class="d-flex justify-content-end align-items-end">
          <div class="text-end me-2">
            <div class="fw-bolder">Alexander</div>
            <div class="text-small">CEO / Web Design Company</div>
          </div><img class="me-md-3 rounded" src="images/testimonials/client2.jpg" width="96" height="96" alt="client 1"/>
        </div>
      </div>
      <div class="col-md-6 mb-5" data-aos="fade-right" data-aos-delay="200">
        <div class="d-flex ms-md-3"><span><i class="fas fa-2x fa-quote-left"></i></span><span class="m-2">Walter is a great co-worker and problem solver. He is quick to extend his helping hand and makes a good team player.</span></div>
        <div class="d-flex justify-content-end align-items-end">
          <div class="text-end me-2">
            <div class="fw-bolder">Ariya</div>
            <div class="text-small">Web Developer</div>
          </div><img class="me-md-3 rounded" src="images/testimonials/client3.jpg" width="96" height="96" alt="client 1"/>
        </div>
      </div>
      <div class="col-md-6 mb-5" data-aos="fade-left" data-aos-delay="400">
        <div class="d-flex ms-md-3"><span><i class="fas fa-2x fa-quote-left"></i></span><span class="m-2">Walter is a great co-worker and problem solver. He is quick to extend his helping hand and makes a good team player.</span></div>
        <div class="d-flex justify-content-end align-items-end">
          <div class="text-end me-2">
            <div class="fw-bolder">Braiden</div>
            <div class="text-small">Web Designer</div>
          </div><img class="me-md-3 rounded" src="images/testimonials/client4.jpg" width="96" height="96" alt="client 1"/>
        </div>
      </div>
    </div>
  </div>
</div> --}}
                <div class="section px-2 px-lg-4 pb-4 pt-5 mb-5" id="contact">
                    <div class="container-narrow">
                        <div class="text-center mb-5">
                            <h2 class="marker marker-center">Contact Me</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                <div class="bg-light my-2 p-3 pt-2">
                                    <form action="https://formspree.io/your@email.com" method="POST">
                                        <div class="form-group my-2">
                                            <label for="name" class="form-label fw-bolder">Name</label>
                                            <input class="form-control" type="text" id="displayData"
                                                name="name" required>
                                        </div>
                                        <div class="form-group my-2">
                                            <label for="email" class="form-label fw-bolder">Email</label>
                                            <input class="form-control" type="email" id="fc-nameDisplay"
                                                name="_replyto" required>
                                        </div>
                                        <div class="form-group my-2">
                                            <label for="message" class="form-label fw-bolder">Message</label>
                                            <textarea class="form-control" style="resize: none;" id="message" name="message" rows="4" required></textarea>
                                        </div>
                                        <button class="btn btn-primary mt-2" type="submit">Send</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
                                <div class="mt-3 px-1">
                                    <div class="h5">Let’s talk how I can help you!</div>
                                    <p>If you like my work and want to avail my services then drop me a message using
                                        the contact form. </p>
                                    <p>Or get in touch using my email, skype or my contact number.</p>
                                    <p>See you!</p>
                                </div>
                                <div class="mt-53 px-1">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="pb-1">Email:</div>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="pb-1 fw-bolder">{{ $user->email }}</div>
                                        </div>


                                        @if (!$user->email)
                                            <div class="col-sm-2">
                                                <div class="pb-1">Skype:</div>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="pb-1 fw-bolder">{{ $user->email }}</div>
                                            </div>
                                        @endif


        @if ($user->contact_number)
            <div class="col-sm-2">
              <div class="pb-1">Phone:</div>
            </div>
            <div class="col-sm-10">
              <div class="pb-1 fw-bolder">{{ $user->contact_number }}</div>
            </div>
          @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="pt-4 pb-4 text-center bg-light">
  <div class="container">
    <div class="my-3">
   
      <div class="h4">{{ !empty($user->name) ? $user->name : 'Walter Patterson' }}</div>
      <p>Web Developer & Mobile Application Developer</p>
      <div class="social-nav">
        <nav role="navigation">
          <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link" href="https://twitter.com/templateflip" title="Twitter"><i class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/templateflip" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/templateflip" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/" title="LinkedIn"><i class="fab fa-linkedin"></i><span class="menu-title sr-only">LinkedIn</span></a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.behance.net/templateflip" title="Behance"><i class="fab fa-behance"></i><span class="menu-title sr-only">Behance</span></a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="text-small text-secondary">
      <div class="mb-1">&copy; Super Folio. All rights reserved.</div>
      <div>
        <!-- Make sure to buy a license for the template before removing the line below. Buy license on https://templateflip.com/ -->Design - <a href="https://templateflip.com/" target="_blank">TemplateFlip</a></div>
    </div>
  </div>
</footer></div>
    </div>
    <div id="scrolltop"><a class="btn btn-secondary" href="#top"><span class="icon"><i class="fas fa-angle-up fa-x"></i></span></a></div>

        <script src="{{ asset('portfolio_assets/super/scripts/imagesloaded.pkgd.min.js?ver=1.2.0') }}"></script>
        <script src="{{ asset('portfolio_assets/super/scripts/masonry.pkgd.min.js?ver=1.2.0') }}"></script>
        <script src="{{ asset('portfolio_assets/super/scripts/BigPicture.min.js?ver=1.2.0') }}"></script>
        <script src="{{ asset('portfolio_assets/super/scripts/purecounter.min.js?ver=1.2.0') }}"></script>
        <script src="{{ asset('portfolio_assets/super/scripts/bootstrap.bundle.min.js?ver=1.2.0') }}"></script>
        <script src="{{ asset('portfolio_assets/super/scripts/aos.min.js?ver=1.2.0') }}"></script>
        <script src="{{ asset('portfolio_assets/super/scripts/main.js?ver=1.2.0') }}"></script>
        <script>
            // Listen for messages sent from any source (no origin check)
            window.addEventListener('message', function(event) {
                // Check if the received data is an object
                function updateAndScroll(element, dataKey, dataValue) {
                    if (dataValue) {
                        element.textContent = dataValue;
                        const centerPosition = element.offsetTop - (window.innerHeight / 2) + (element.clientHeight /
                            2);
                        window.scrollTo({
                            top: centerPosition,
                            behavior: 'smooth'
                        });
                    }
                }

                window.addEventListener('message', function(event) {
                    if (typeof event.data === 'object') {
                        const receivedData = event.data;

                        updateAndScroll(document.getElementById('user-name'), 'name', receivedData.name);
                        updateAndScroll(document.getElementById('user-profession'), 'profession', receivedData
                            .profession);
                        updateAndScroll(document.getElementById('user-description'), 'description', receivedData
                            .description);
                        updateAndScroll(document.getElementById('user-email'), 'email', receivedData.email);
                        updateAndScroll(document.getElementById('contact-number'), 'contact', receivedData
                            .contact);
                        updateAndScroll(document.getElementById('user-age'), 'age', receivedData.age);
                        updateAndScroll(document.getElementById('user-address'), 'address', receivedData
                            .address);
                        updateAndScroll(document.getElementById('user-gender'), 'gender', receivedData.gender);
                    }
                });

            });

            const lightbox = document.getElementById('lightbox');
            const lightboxImage = document.getElementById('lightbox-image');
            const closeBtn = document.getElementById('close');
            const triggerElements = document.querySelectorAll('.lightbox-trigger');

            triggerElements.forEach(element => {
                element.addEventListener('click', () => {
                    lightbox.style.display = 'block';
                    lightboxImage.src = element.src;
                });
            });

            closeBtn.addEventListener('click', () => {
                lightbox.style.display = 'none';
            });
        </script>

</body>

</html>
