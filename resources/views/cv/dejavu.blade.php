<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Deja Vu</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />


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
            padding: 8.15em;
            font-size: 50.5%;
        }

        .container-fluid {}

        ul {
            list-style: circle;
        }

        li::marker {
            color: black;
        }

        p {
            font-size: 2.48262rem;
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
            padding-bottom: 4rem;
            direction: ltr;
            margin-bottom: 3rem;
        }

        .firstName {
            font-weight: lighter;
            text-transform: uppercase;
            word-break: break-all;
            color: rgb(62, 62, 62);
            font-size: 4.65793rem;
            line-height: 1.68;
            margin-bottom: 1.12846rem;
            direction: ltr;
            letter-spacing: 2px;
        }

        .lastName {
            font-weight: bold;
            font-size: 6.02771rem;
            text-transform: uppercase;
            word-break: break-all;
            padding-right: 5.64232rem;
            color: rgb(62, 62, 62);
            line-height: 1.09;
            direction: ltr;
            letter-spacing: 2px;
        }

        .jobTitle {
            padding-right: 0px;
            letter-spacing: 1px;
            margin-top: 4.51385rem;
            color: rgb(41, 41, 41);
        }

        .jobTitle span {
            padding-left: 1rem;
            text-transform: uppercase;
            word-break: break-all;
            direction: ltr;
            color: rgb(76, 74, 74);
            font-size: 3.04685rem;
        }

        .photo {
            margin-right: 8.15em;
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
            width: 510px;
            white-space: nowrap;
            color: rgb(102, 103, 102);
        }

        .list-item {
            padding-top: 2.03123rem;
            padding-bottom: 2.03123rem;
            margin-right: 1rem;
        }

        .list-item:not(:last-child) {
            border-bottom: 2px solid rgb(35, 31, 32);
        }

        .title {
            font-weight: bold;
            font-size: 2.5rem;
            text-transform: uppercase;
            line-height: 4.5rem;
            border-bottom: 1px solid rgb(35, 31, 32);
            padding-top: 0rem;
            padding-bottom: 3.8rem;
            color: rgb(34, 33, 33);
            margin-bottom: 1.8rem;
        }

        .personal-details {
            .title {
                padding-top: 4rem;
            }
        }

        .bullet {
            position: relative;
        }

        .bullet i {
            font-size: 2.6rem;
        }

        .bullet:before {
            content: "";
            position: absolute;
            left: 1.9rem;
            width: 0.3rem;
            height: 70%;
            background-color: #292929;
            top: 50%;
            transform: translateY(-50%);
        }

        .record {
            padding-top: 2rem;
        }

        p {
            font-size: 2rem;
            line-height: 1.33;
            color: rgb(102, 103, 102);
            display: block;
            width: 510px;
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

        .column-1 {
            width: 40%;
            float: left;
        }

        .column-2 {
            width: 50%;
            float: left;
        }
    </style>
</head>

<body>
    <section class="container-fluid">
        <header class="header position-relative">
            <div class="">
                <div class="">
                    <h1 class="firstName text-nowrap">John</h1>
                    <h2 class="lastName text-nowrap">Doe</h2>
                    <p class="jobTitle">
                        <i class="bi bi-circle-fill"></i>
                        <span class="text-break">SOFTWARE ENGINEER</span>
                    </p>
                </div>
                <div class="-auto d-none d-lg-block d-print-block">
                    <img src="https://via.placeholder.com/150"
                        class="photo border border-2 border-dark rounded-circle img-fluid float-end img-thumbnail">
                </div>
            </div>
        </header>
        <section class="content">
            <div class="column-1">
                <div class="personal-details">
                    <div class="list-item me-5">
                        <div class="icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <p style="width:300px !important;">123 Main St, City, Country</p>
                    </div>
                    <div class="list-item me-5">
                        <div class="align-self-center">
                            <div class="icon d-flex justify-content-center">
                                <i class="bi bi-telephone-fill" role="img" aria-label="Telephone"></i>
                            </div>
                        </div>
                        <div class="">
                            <a href="tel:+1234567890" class="text-decoration-none">
                                <p style="width:300px !important;">+1234567890</p>
                            </a>
                        </div>
                    </div>
                    <div class="list-item me-5">
                        <div class="align-self-center">
                            <div class="icon d-flex justify-content-center">
                                <i class="bi bi-envelope-fill" role="img" aria-label="Email"></i>
                            </div>
                        </div>
                        <div class="">
                            <a href="mailto:john@example.com" class="text-decoration-none">
                                <p style="width:300px !important;">john@example.com</p>
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
                            <p style="width:300px !important;" class="fw-bold">Bachelor's in Computer Science</p>
                            </p>
                            <p class="fw-bold text-uppercase">
                            <p style="width:300px !important;" class="fw-bold">University of XYZ, 2020</p>
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 me-5">
                        <div class="">
                            <p class="title">Skills</p>
                        </div>
                    </div>
                    <div class="">
                        <ul class="ms-2">
                            <li class="pb-2">JavaScript</li>
                            <li class="pb-2">HTML</li>
                            <li class="pb-2">CSS</li>
                            <li class="pb-2">Bootstrap</li>
                            <li class="pb-2">Vue.js</li>
                        </ul>
                    </div>
                    <div class="mt-5 me-5">
                        <div class="">
                            <p class="title">Languages</p>
                        </div>
                    </div>
                    <div class="">
                        <ul class="ms-2">
                            <li class="pb-2">English (Fluent)</li>
                            <li class="pb-2">Spanish (Intermediate)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="column-2">

                <div>
                    <i class="fas fa-circle" style="display: inline-block; vertical-align: middle; margin-right: 5px;">
                    </i>
                    <p class="title" style="display: inline-block; vertical-align: middle; margin: 0;">About Me
                    </p>
                </div>
                
                <div class="bullet" style="display: flex; align-items: flex-start;">
                    <div class="icon-container">
                        <i class="bi bi-record-circle" style="font-size: 2.6rem; margin-right: 8px;"></i>
                    </div>
                    <div class="text-container" style="flex: 1;">
                        <p style="margin: 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed condimentum
                            leo vitae turpis consequat, eu posuere libero ultricies.</p>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-auto bullet pt-2">
                        <i class="bi bi-circle-fill"></i>
                    </div>
                    <div class="col">
                        <p class="title">Work Experience</p>
                    </div>
                </div>
                <div class="row record mb-4 bullet">
                    <div class="col-auto">
                        <i class="bi bi-record-circle"></i>
                    </div>
                    <div class="col">
                        <p class="text-uppercase fw-bold position-relative">
                            Software Engineer
                            <span>&nbsp;|&nbsp;2018 - Present</span>
                        </p>
                        <p class="text-lowercase fst-italic fw-bold">
                            XYZ Company, City
                        </p>
                        <p class="mb-0">• Developed web applications using Vue.js, HTML, CSS, and JavaScript
                        </p>
                        <p class="mb-0">• Collaborated with cross-functional teams to deliver projects on
                            time
                        </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-auto bullet pt-2">
                        <i class="bi bi-circle-fill"></i>
                    </div>
                    <div class="col">
                        <p class="title">Certificates</p>
                    </div>
                </div>
                <div class="row record mb-4 bullet">
                    <div class="col-auto">
                        <i class="bi bi-record-circle"></i>
                    </div>
                    <div class="col">
                        <p class="text-uppercase fw-bold position-relative">
                            Web Development Certificate
                            <span>&nbsp;|&nbsp;2017 - 2018</span>
                        </p>
                        <p class="text-lowercase fst-italic fw-bold">
                            Online Course Platform
                        </p>
                        <p class="mb-0">
                            • Completed courses on HTML, CSS, JavaScript, and Bootstrap
                        </p>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </section>
</body>

</html>
