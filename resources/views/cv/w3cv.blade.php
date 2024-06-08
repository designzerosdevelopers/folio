<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: system-ui;
        }

        .col-div-3 {
            width: 25%;
            float: left;
        }

        .col-div-7 {
            width: 75%;
            float: left;
        }

        .col-div-4 {
            width: 35%;
            float: left;
        }

        .col-div-8 {
            width: 65%;
            float: left;
        }

        .col-div-6 {
            width: 50%;
            float: left;
            position: relative;
        }

        .clearfix {
            clear: both;
        }

        .resume-main {
            width: 700px;
            height: 800px;
            margin: 50px auto;
            box-shadow: 5px 5px 5px 5px rgba(84, 88, 93, 0.2);
        }

        .left-box {
            width: 35%;
            float: left;
            height: 700px;
        }

        .right-box {
            width: 65%;
            float: left;
            background-color: #fff;
            height: 700px;
            margin: 50px 0;
            border-radius: 50px 0 0 50px;
            padding: 30px 50px;
            box-shadow: -7px 2px 15px 2px rgba(84, 88, 93, 0.32);
        }

        .profile {
            width: 108px;
            height: 99px;
            border: 3px solid #fff;
            padding: 7px;
            border-radius: 50%;
            margin: 20px auto;
        }

        .profile img {
            width: 100%;
            border-radius: 50%;
        }

        .content-box {
            padding: 0 40px 0 45px;
        }

        .content-box h2 {
            text-transform: uppercase;
            font-weight: 500;
            color: #fff;
            letter-spacing: 1px;
            font-size: 20px;
        }

        .hr1 {
            border: none;
            height: 1px;
            background-color: #fff;
            margin-top: 3px;
        }

        .p1 {
            font-size: 11px;
            color: #fff;
            letter-spacing: 1px;
            padding-top: 12px;
        }

        #progress {
            background-color: #a5a5a5;
            border-radius: 13px;
            height: 8px;
            width: 100%;
        }

        #progress:after {
            content: "";
            display: block;
            background-color: #fff;
            width: 50%;
            height: 100%;
            border-radius: 9px;
        }

        #progress1 {
            background-color: #a5a5a5;
            border-radius: 13px;
            height: 8px;
            width: 100%;
        }

        #progress1:after {
            content: "";
            display: block;
            background-color: #fff;
            width: 40%;
            height: 100%;
            border-radius: 9px;
        }

        .content-box h3 {
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding-top: 10px;
            color: #fff;
            font-weight: 500;
        }

        .p2 {
            font-size: 13px;
            margin-bottom: 5px;
            margin-top: 5px;
            color: #fff;
        }

        .circle {
            color: #fff;
            font-size: 14px !important;
            margin-top: 7px;
        }

        .circle1 {
            color: #a5a5a5;
            font-size: 14px !important;
            margin-top: 7px;
        }

        .in {
            background-color: #fff;
            color: #c3266f;
            padding: 8px;
            border-radius: 20px;
            font-size: 14px !important;
        }

        .inp {
            color: #fff;
            font-size: 11px;
        }

        .col3 {
            text-align: center;
        }

        h1 {
            font-size: 50px;
            text-transform: uppercase;
            color: #54585d;
            line-height: 50px;
        }

        h1 span {
            color: #c3266f;
        }

        .p3 {
            letter-spacing: 4px;
            color: #54585d;
            font-weight: 500;
        }

        .heading {
            text-transform: uppercase;
            font-weight: 500;
            color: #c3266f;
            letter-spacing: 1px;
            font-size: 20px;
        }

        .hr2 {
            border: none;
            height: 1px;
            background-color: #54585d;
            margin-top: 3px;
        }

        .p5 {
            font-weight: 700;
            color: #54585d;
        }

        .span1 {
            font-size: 12px;
            color: #54585d;
        }
    </style>
</head>
<body>
    <div class="resume-main" style="background-color: #c3266f;">
        <div class="left-box" style="background-color: #743578;">
            <br><br>
            <div class="profile">
                <img src="https://i.ibb.co/gWsLbsh/327275013-2791387454328878-4519849517215324826-n2.jpg">
            </div>
            <div class="content-box">
                <h2>Profile Info</h2>
                <hr class="hr1">
                <p class="p1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                <h3>Language:</h3>
                <p class="p2">English</p>
                <div id="progress"></div>
                <p class="p2">German</p>
                <div id="progress1"></div>
                <br><br>
                <h2>My Skills</h2>
                <hr class="hr1">
                <br>
                <div class="col-div-6">
                    <p class="p2">HTML</p>
                </div>
                <div class="col-div-6">
                    <i class="fa fa-circle circle"></i>
                    <i class="fa fa-circle circle"></i>
                    <i class="fa fa-circle circle"></i>
                    <i class="fa fa-circle circle1"></i>
                    <i class="fa fa-circle circle1"></i>
                </div>
                <div class="clearfix"></div>
                <div class="col-div-6">
                    <p class="p2">CSS</p>
                </div>
                <div class="col-div-6">
                    <i class="fa fa-circle circle"></i>
                    <i class="fa fa-circle circle"></i>
                    <i class="fa fa-circle circle"></i>
                    <i class="fa fa-circle circle"></i>
                    <i class="fa fa-circle circle1"></i>
                </div>
                <div class="clearfix"></div>
                <div class="col-div-6">
                    <p class="p2">JQUERY</p>
                </div>
                <div class="col-div-6">
                    <i class="fa fa-circle circle"></i>
                    <i class="fa fa-circle circle"></i>
                    <i class="fa fa-circle circle"></i>
                    <i class="fa fa-circle circle1"></i>
                    <i class="fa fa-circle circle1"></i>
                </div>
                <div class="clearfix"></div>
                <div class="col-div-6">
                    <p class="p2">JAVASCRIPT</p>
                </div>
                <div class="col-div-6">
                    <i class="fa fa-circle circle"></i>
                    <i class="fa fa-circle circle"></i>
                    <i class="fa fa-circle circle1"></i>
                    <i class="fa fa-circle circle1"></i>
                    <i class="fa fa-circle circle1"></i>
                </div>

                <div class="clearfix"></div>
                <br>
                <h2>Interests</h2>
                <hr class="hr1">
                <br>
                <div class="col-div-3 col3">
                    <i class="fa fa-futbol-o in"></i>
                    <span class="inp">Sports</span>
                </div>
                <div class="col-div-3 col3">
                    <i class="fa fa-futbol-o in"></i>
                    <span class="inp">Drive</span>
                </div>
                <div class="col-div-3 col3">
                    <i class="fa fa-futbol-o in"></i>
                    <span class="inp">Sports</span>
                </div>
                <div class="col-div-3 col3">
                    <i class="fa fa-futbol-o in"></i>
                    <span class="inp">Sports</span>
                </div>
            </div>
        </div>

        <div class="right-box">
            <h1>
                Jane<br>
                <span>Doe</span>
            </h1>
            <p class="p3">UI & UX DESIGNER</p>

            <br>
            <h2 class="heading">Work Experience</h2>
            <hr class="hr2">
            <br>
            <div class="col-div-4">
                <p class="p5">2015-2016</p>
                <span class="span1">Company Name</span>
            </div>
            <div class="col-div-8">
                <p class="p5">Web Designer</p>
                <span class="span1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
            </div>
            <div class="clearfix"></div>
            <br>
            <div class="col-div-4">
                <p class="p5">2015-2016</p>
                <span class="span1">Company Name</span>
            </div>
            <div class="col-div-8">
                <p class="p5">Web Designer</p>
                <span class="span1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
            </div>
            <div class="clearfix"></div>
            <br>
            <div class="col-div-4">
                <p class="p5">2015-2016</p>
                <span class="span1">Company Name</span>
            </div>
            <div class="col-div-8">
                <p class="p5">Web Designer</p>
                <span class="span1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
            </div>
            <div class="clearfix"></div>

            <br>
            <h2 class="heading">My Education</h2>
            <hr class="hr2">
            <br>
            <div class="col-div-4">
                <p class="p5">2015-2016</p>
                <span class="span1">Company Name</span>
            </div>
            <div class="col-div-8">
                <p class="p5">Web Designer</p>
                <span class="span1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
            </div>
            <div class="clearfix"></div>
            <br>
            <div class="col-div-4">
                <p class="p5">2015-2016</p>
                <span class="span1">Company Name</span>
            </div>
            <div class="col-div-8">
                <p class="p5">Web Designer</p>
                <span class="span1">Lorem Ipsum is simply dummy text of the .</span>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</body>
</html>
