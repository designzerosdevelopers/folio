<!DOCTYPE html>
<html>

<head>
    <title>Resume Design</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <style>
        html{
            margin: 0px;
            padding: 0px;
        }
        body {
            font-family: system-ui;
            margin: 0px;
            padding: 0px;
        }

        main {
            width: 100%;
            height: 100%;
            margin: 0 auto;
            background: #fff;
            padding: 0;
            overflow: hidden;
        }


        .clearfix::after {
            content: "";
            display: table;
            clear: both;
        }

        .content {
            padding: 20px;
        }

        h3 {
            margin: 0;
            color: #db5326;
            font-weight: 500;
        }

        p {
            margin: 5px 0;
            font-size: 14px;
        }

        .left-side,
        .right-side {
            float: left;
            height: 100%;

        }

        .left-side {
            background: #ebebeb;
            width: 37%;
            margin-left: 40px;
            height: 1402px;

        }

        .right-side {
            width: 58%;
        }

        .profile-img {
            border-top: 15px solid #db5326;
            border-bottom: 15px solid #db5326;
        }

        h2 {
            font-family: 'Oswald', sans-serif;
            margin-top: 10px;
            font-weight: 200;
            color: #db5326;
            font-size: 30px;
        }

        h4 {
            margin: 0;
            color: #4e4e4e;
            margin-top: 10px;
        }

        ul {
            margin: 0 0 40px -40px;
            padding: 0;
            list-style: none;
        }

        ul li {
            float: left;
            position: relative;
        }

        ul li img {
            width: 40px;
            padding-right: 15px;
        }

        ul li span {
            position: absolute;
            bottom: -12px;
            left: 5px;
            font-size: 11px;
        }

        .rightside-content {
            padding: 50px;
        }

        h1 {
            font-size: 50px;
            font-family: system-ui;
            font-weight: normal;
            letter-spacing: 1px;
            margin-top: 10px;
            position: relative;
            color: #db5326;
        }

        h1::after {
            content: "";
            height: 2px;
            width: 100px;
            position: absolute;
            background: #db5326;
            bottom: -10px;
            left: 0;
        }

        .para {
            letter-spacing: 0.01em;
            font-weight: 600;
            font-size: 17px;
            margin-top: -10px;
        }

        .para1 {
            font-size: 18px;
        }

        .sub-heading {
            font-weight: 600;
            font-size: 22px;
        }

        .para2 {
            font-size: 16px;
            font-weight: 500;
        }

        .para2 span {
            background: #db5326;
            padding: 3px 10px;
            border-radius: 6px;
            color: white;
            margin-right: 5px;
            font-size: 12px;
        }

        .ex {
            margin: 0 0 40px -40px;
            padding: 0;
            list-style: none;
        }

        .ex li {
            float: left;
            position: relative;
        }

        .ex li img {
            width: 75px;
            padding-right: 20px;
        }

        .languages {
            display: flex;
        }

        .languages b {
            margin-right: 10px;
            color: #4e4e4e;
        }
        
    </style>
</head>

<body>

    <main>
        <div class="left-side">
            <br />
            <div class="content">
                <h3>Address</h3>
                <p>2132 London, United Kingdom</p>
            </div>
            <br />
            <img src="D:\laravel-code\portfolio\public\profile_pic\noImage.jpg" width="100%" class="profile-img" />
            <div class="content">
                <h2>CONTACT</h2>
                <h4>Phone</h4>
                <p>+232-3434-2334</p>
                <h4>Email</h4>
                <p>demo@123gmail.com</p>
                <h4>Website</h4>
                <p>www.m-softtech.in</p>
            </div>

            <div class="content">
                <h2>REFERENCE</h2>
                <h4>Abhinav Sukla</h4>
                <p>Director | M-SoftTech<br />
                    T: +3334-3484-3223</p>
            </div>

            <div class="content">
                <h2>Skills</h2>
                <h4>Php</h4>
                <h4>Laravel</h4>
                <h4>HTML</h4>
                <h4>CSS</h4>
                <h4>Javascript</h4>
                <h4>VUE</h4>

            </div>

            <div class="content">


            </div>

            <br /><br />
        </div>
        <div class="right-side">
            <div class="rightside-content">
                <h1>MANOJ <br /><strong>ADHIKARI</strong></h1>
                <p class="para">FRONTEND DEVELOPER</p>
                <br /><br />
                <h2>ABOUT ME</h2>
                <p class="para1">Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum
                    Has Been The Industry's Standard Dummy Lorem Ipsum Is Simply Dummy Text Of The Printing And
                    Typesetting Industry. Lorem Ipsum
                    Has Been The Industry's Standard Dummy Lorem Ipsum Is Simply Dummy Text Of The Printing And
                    Typesetting Industry. Lorem Ipsum
                    Has Been The Industry's Standard Dummy</p>
                <br />
                <h2>EDUCATION</h2>
                <h4 class="sub-heading">Intermediate</h4>
                <p class="para2"><span>2018-2022</span> School / University</p>
                <p class="para1">Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry</p>

                <h4 class="sub-heading">Bachelors in Computer Scince</h4>
                <p class="para2"><span>2018-present</span> School / University</p>
                <p class="para1">Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry</p>
                <br />

                <h2>EXPERIENCE</h2>
                <h4 class="sub-heading">SENIOUR FRONTEND DEVELOPER</h4>
                <p class="para2"><span>Present</span> Frontend Developer / Noida</p>
                <p class="para1">Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting</p>

                <h4 class="sub-heading"> FRONTEND DEVELOPER</h4>
                <p class="para2"><span>2018-2022</span> Frontend Developer / New Delhi</p>
                <p class="para1">Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting</p>

                <br />

                <h2>Languages</h2>
                <div class="languages">
                    <b>English<b>
                    <b>Sindhi<b>
                    <b>Urdu<b>
                </div>
            </div>
        </div>

    </main>

</body>

</html>