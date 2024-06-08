<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: sans-serif;
        }
    
        body {
       
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
            /* width: 700px;
            height: 800px; */
            background:  #743578;
            /* margin: 50px auto;
            box-shadow: 5px 5px 5px 5px #54585d33; */
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
            height: 1302px;
            margin: 50px 0px;
            border-radius: 50px 0px 0px 50px;
            padding: 30px 50px;
            box-shadow: -7px 2px 15px 2px #54585d52;
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
            padding: 0px 40px 0px 45px;
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
            background: #fff;
            margin-top: 3px;
        }
    
        .p1 {
            font-size: 20px;
            color: #fff;
            letter-spacing: 1px;
            padding-top: 12px;
        }
    
        #progress {
            background: #a5a5a5;
            border-radius: 13px;
            height: 8px;
            width: 100%;
        }
    
        #progress:after {
            content: "";
            display: block;
            background: #fff;
            width: 50%;
            height: 100%;
            border-radius: 9px;
        }
    
        #progress1 {
            background: #a5a5a5;
            border-radius: 13px;
            height: 8px;
            width: 100%;
        }
    
        #progress1:after {
            content: "";
            display: block;
            background: #fff;
            width: 40%;
            height: 100%;
            border-radius: 9px;
        }
    
        .content-box h3 {
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding-top: 10px;
            color: white;
            font-weight: 500;
        }
    
        .p2 {
            font-size: 23px;
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
            background: #fff;
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
            font-size: 60px;
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
            font-size: 20px;
        }
    
        .heading {
            text-transform: uppercase;
            font-weight: 500;
            color: #c3266f;
            letter-spacing: 1px;
            font-size: 30px;
        }
    
        .hr2 {
            border: none;
            height: 1px;
            background: #54585d;
            margin-top: 3px;
        }
    
        .p5 {
            font-weight: 700;
            color: #54585d;
            font-size: 25px;
        }
    
        .span1 {
            font-size: 12px;
            color: #54585d;
            font-size: 20px;
        }
    </style>
    
</head>

<body>
    <div class="resume-main">
        <div class="left-box">
            <br><br>
            <div class="profile">
                <img src="https://i.ibb.co/gWsLbsh/327275013-2791387454328878-4519849517215324826-n2.jpg">
            </div>
            <div class="content-box">
                <h2 style="font-size:30px">Profile Info</h2>
                <hr class="hr1">
                <p class="p1" >Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                <br>
                <h3 style="font-size:20px; font-weight:500">Language:</h3>
                <p class="p2">English</p>
                <div id="progress"></div>
                <p class="p2">German</p>
                <div id="progress1"></div>
                <br><br>
                <h2 style="font-size:20px; font-weight:500">My Skills</h2>
                <hr class="hr1">
                <br>
                <div class="col-div-6">
                    <p class="p2">HTML</p>
                </div>
                <div class="col-div-6" style="text-align: right;">
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
                <div class="col-div-6" style="text-align: right;">
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
                <div class="col-div-6" style="text-align: right;">
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
                <div class="col-div-6" style="text-align: right;">
                    <i class="fa fa-circle circle"></i>
                    <i class="fa fa-circle circle"></i>
                    <i class="fa fa-circle circle1"></i>
                    <i class="fa fa-circle circle1"></i>
                    <i class="fa fa-circle circle1"></i>
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
