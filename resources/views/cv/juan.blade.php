<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hoja de Vida </title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.14/vue.min.js"></script>
    <!-- Add Web Animations Polyfill :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.3.2/web-animations.min.js"></script>
    <script type="module"
        src="https://cdn.jsdelivr.net/npm/@proyecto26/animatable-component@1.1.10/dist/animatable-component/animatable-component.esm.js">
    </script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&display=swap");

        * {
            font-family: Raleway;
            box-sizing: border-box;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizelegibility;
            text-size-adjust: 100%;
            outline: none !important;
        }

        html {
            font-size: 62.5%;
        }

        .container-fluid {
            padding: 0 10% !important;
        }

        ul {
            list-style: circle;
        }

        li::marker {
            color: black;
        }

        p {
            font-size: 2.48262rem;
            letter-spacing: 0.115103rem;
            color: rgb(102, 103, 102);
            word-break: break-all;
            -webkit-box-pack: center;
            justify-content: center;
        }

        .headLine {
            width: 0.225693rem;
            top: 0px;
            left: 1rem;
            height: 11.9617rem;
            background-color: rgb(41, 41, 41);
        }

        .header {
            padding-top: 17.8297rem;
            padding-bottom: 10rem;
            direction: ltr;
            margin-bottom: 3rem;
        }

        .firstName {
            font-weight: lighter;
            text-transform: uppercase;
            word-break: break-all;
            color: rgb(62, 62, 62);
            font-size: 6.65793rem;
            line-height: 1.68;
            letter-spacing: 2.89546rem;
            margin-bottom: 1.12846rem;
            direction: ltr;
        }

        .lastName {
            font-weight: bold;
            font-size: 9.02771rem;
            text-transform: uppercase;
            word-break: break-all;
            padding-right: 5.64232rem;
            color: rgb(62, 62, 62);
            line-height: 1.09;
            letter-spacing: 2.15952rem;
            direction: ltr;
        }

        .jobTitle {
            padding-right: 0px;
            margin-top: 4.51385rem;
            color: rgb(41, 41, 41);

            span {
                padding-left: 1rem;
                letter-spacing: 0.710932rem;
                text-transform: uppercase;
                word-break: break-all;
                direction: ltr;
                color: rgb(76, 74, 74);
                font-size: 3.04685rem;
            }
        }

        .photo {
            width: 27.2rem;
            height: 27.2rem;
            max-height: 270px;
            object-fit: contain;
        }

        .middleLine {
            width: 0.225693rem;
            bottom: 3.1597rem;
            left: 1rem;
            height: 5.64232rem;
            background-color: rgb(41, 41, 41);
        }

        .icon {
            width: 5rem;
            height: 5rem;
            font-size: 2.5rem;
            color: white;
            background-color: rgb(62, 62, 62);
            border-radius: 50%;
            padding: 0.7rem;
        }

        a p {
            word-break: break-all;
            color: rgb(102, 103, 102);
        }

        .list-item {
            padding-top: 2.03123rem;
            padding-bottom: 2.03123rem;
            margin-right: 1rem;

            &:not(:last-child) {
                border-bottom: 0.225693rem solid rgb(35, 31, 32);
            }
        }

        .title {
            width: 100%;
            font-weight: bold;
            font-size: 4rem;
            text-transform: uppercase;
            line-height: 4.5rem;
            border-bottom: 1px solid rgb(35, 31, 32);
            padding-top: 0rem;
            padding-bottom: 3.8rem;
            color: rgb(34, 33, 33);
            letter-spacing: 1.01562rem;
            margin-bottom: 1.8rem;
        }

        .personal-details {
            .title {
                padding-top: 4rem;
            }
        }

        .bullet {
            position: relative;

            i {
                font-size: 2.6rem;
            }

            &:before {
                content: "";
                position: absolute;
                left: 1.9rem;
                width: 0.3rem;
                height: 70%;
                background-color: #292929;
                margin-top: 4.2rem;
            }
        }

        .record {
            padding-top: 2rem;

            p {
                width: 100%;
                font-size: 2.7rem;
                line-height: 1.33;
                color: rgb(102, 103, 102);
                word-break: break-word;
                display: block;
            }
        }

        li {
            font-family: Raleway;
            line-height: 1.33;
            font-size: 2.8806rem;
            color: rgb(123, 123, 123);
        }

        span {
            color: rgb(102, 103, 102);
            font-size: 2.28048rem;
            line-height: 1.2;
            letter-spacing: 0.5rem;
        }

        .btn-group-fab {
            position: fixed;
            width: 50px;
            height: auto;
            right: 20px;
            bottom: 20px;
        }

        .btn-group-fab div {
            position: relative;
            width: 100%;
            height: auto;
        }

        .btn-group-fab .btn {
            position: absolute;
            bottom: 0;
            border-radius: 50%;
            display: block;
            margin-bottom: 4px;
            width: 40px;
            height: 40px;
            margin: 4px auto;
        }

        @media print {
            @page {
                size: A4;
                margin: 8.15mm 0mm;
            }

            html {
                font-size: 23%;
            }

            .header {
                padding-top: 12rem;
                padding-bottom: 9rem;
            }

            ul li {
                margin-left: 1rem;
            }
        }
    </style>
</head>

<body class="">
    <section id="app" class="container-fluid">
        <header class="header position-relative">
            <animatable-component autoplay animation="fadeInDownBig" easing="ease-in-out" duration="1200">
                <div class="headLine position-absolute"></div>
            </animatable-component>
            <div class="row">
                <div class="col">
                    <animatable-component autoplay animation="fadeInLeft" easing="ease-in-out" duration="1200">
                        <h1 class="firstName text-nowrap">
                            firstName 
                        </h1>
                    </animatable-component>
                    <animatable-component autoplay animation="fadeInDown" easing="ease-in-out" duration="1200">
                        <h2 class="lastName text-nowrap">
                            lastName 
                        </h2>
                    </animatable-component>
                    <animatable-component autoplay animation="fade-in-left" easing="ease-in-out" duration="1200">
                        <p class="jobTitle">
                            <i class="bi bi-circle-fill"></i>
                            <span class="text-break">
                                jobTitle 
                            </span>
                        </p>
                    </animatable-component>
                </div>
                <div v-if="!!photo" class="col-auto d-none d-lg-block d-print-block">
                    <animatable-component autoplay animation="rotateIn" easing="ease-in" duration="1200">
                        <img v-bind:src.prop="photo"
                            class="photo border border-2 border-dark rounded-circle img-fluid float-end img-thumbnail">
                    </animatable-component>
                </div>
            </div>
            <animatable-component autoplay animation="fadeInUpBig" easing="ease-in-out" duration="1200">
                <div class="middleLine position-absolute"></div>
            </animatable-component>
        </header>
        <section class="content">
            <div class="row">
                <div class="col personal-details me-4">
                    <div class="row list-item me-5">
                        <div class="col-auto">
                            <animatable-component autoplay animation="heartBeat" easing="ease-in" duration="1200">
                                <div class="icon d-flex justify-content-center">
                                    <i class="bi bi-geo-alt-fill" role="img" aria-label="Location"></i>
                                </div>
                            </animatable-component>
                        </div>
                        <div class="col" style="white-space: pre-line;">
                            <p> address </p>
                        </div>
                    </div>
                    <div v-if="!!phone" class="row list-item me-5">
                        <div class="col-auto align-self-center">
                            <animatable-component autoplay animation="swing" easing="ease-in" duration="1200">
                                <div class="icon d-flex justify-content-center">
                                    <i class="bi bi-telephone-fill" role="img" aria-label="Telephone"></i>
                                </div>
                            </animatable-component>
                        </div>
                        <div class="col">
                            <a v-bind:href="'tel:'+ phone" class="text-decoration-none">
                                <p> phone </p>
                            </a>
                        </div>
                    </div>
                    <div class="row list-item me-5">
                        <div class="col-auto align-self-center">
                            <animatable-component autoplay animation="flip" easing="ease-in" duration="1200">
                                <div class="icon d-flex justify-content-center">
                                    <i class="bi bi-envelope-fill" role="img" aria-label="Email"></i>
                                </div>
                            </animatable-component>
                        </div>
                        <div class="col">
                            <a v-bind:href="'mailto:'+ email" class="text-decoration-none">
                                <p> email </p>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-5 me-5">
                        <div class="col">
                            <p class="title">Education</p>
                        </div>
                    </div>
                    <div class="row record" v-for="e in education">
                        <div class="col-auto bullet">
                            <i class="bi bi-record-circle"></i>
                        </div>
                        <div class="col">
                            <p class="fw-bold text-uppercase">
                                 e . degree 
                            </p>
                            <p class="fw-bold text-uppercase">
                                 e . school ,  e . graduationDate 
                            </p>
                            <p> e . description </p>
                        </div>
                    </div>
                    <div class="row mt-5 me-5">
                        <div class="col p-0">
                            <p class="title">Skills</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <ul class="ms-2">
                                <li class="pb-2" v-for="skill in skills">
                                     skill 
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-5 me-5">
                        <div class="col p-0">
                            <p class="title">Achievements</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <ul class="ms-2">
                                <li class="pb-2" v-for="premie in premios">
                                     premie 
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-5 me-5">
                        <div class="col p-0">
                            <p class="title">Languages</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <ul class="ms-2">
                                <li class="pb-2" v-for="language in languages">
                                     language 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-8">
                    <animatable-component autoplay animation="fade-in-right" easing="ease-in-out" duration="1200">
                        <div class="row bullet">
                            <div class="col-auto pt-2">
                                <i class="bi bi-circle-fill"></i>
                            </div>
                            <div class="col">
                                <p class="title">About Me</p>
                            </div>
                        </div>
                    </animatable-component>
                    <!--              ---->
                    <animatable-component autoplay animation="fade-in-right" easing="ease-in-out" duration="1200">
                        <div class="row record bullet">
                            <div class="col-auto">
                                <i class="bi bi-record-circle"></i>
                            </div>
                            <div class="col">
                                <p style="white-space: pre-line;"> professionalSummary </p>
                            </div>
                        </div>
                    </animatable-component>

                    <div class="row mt-5">
                        <div class="col-auto bullet pt-2">
                            <i class="bi bi-circle-fill"></i>
                        </div>
                        <div class="col">
                            <p class="title">Work Experience</p>
                        </div>
                    </div>
                    <div class="row record mb-4 bullet" v-for="employment in employmentHistory">
                        <div class="col-auto">
                            <i class="bi bi-record-circle"></i>
                        </div>
                        <div class="col">
                            <p class="text-uppercase fw-bold position-relative">
                                 employment . jobTitle 
                                <span>&nbsp;|&nbsp; employment . startDate  -  employment . endDate </span>
                            </p>
                            <p class="text-lowercase fst-italic fw-bold">
                                 employment . employer ,  employment . city 
                            </p>
                            <p class="mb-0" v-for="achievement in employment.achievements">
                                •  achievement 
                            </p>
                        </div>
                    </div>
                    <!--              ---->
                    <animatable-component autoplay animation="fade-in-right" easing="ease-in-out" duration="1200">
                    </animatable-component>

                    <div class="row mt-5">
                        <div class="col-auto bullet pt-2">
                            <i class="bi bi-circle-fill"></i>
                        </div>
                        <div class="col">
                            <p class="title">Certificates</p>
                        </div>
                    </div>
                    <div class="row record mb-4 bullet" v-for="certificate in certificatesHistory">
                        <div class="col-auto">
                            <i class="bi bi-record-circle"></i>
                        </div>
                        <div class="col">
                            <p class="text-uppercase fw-bold position-relative">
                                 certificate . jobTitle 
                                <span>&nbsp;|&nbsp; certificate . startDate   certificate . endDate </span>
                            </p>
                            <p class="text-lowercase fst-italic fw-bold">
                                 certificate . employer 
                            </p>
                            <p class="mb-0" v-for="achievement in certificate.achievements">
                                •  achievement 
                            </p>
                        </div>
                    </div>

                    <!--              -->
                </div>
            </div>
        </section>
    </section>
    <div class="btn-group-fab d-print-none">
        <div>
            <button onclick="javascript:window.print()" type="button" class="btn btn-main btn-primary"
                title="Print">
                <i class="bi bi-printer fs-3"></i>
            </button>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>