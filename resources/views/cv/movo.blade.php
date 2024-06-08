<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Resume CV Design</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            list-style: none;
            box-sizing: border-box;
            font-family: 'Ubuntu', sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .resume {
            width: 100%;
            height: 100%;
            background: #fff;
            margin: 25px auto;
            display: flex;
        }

        .left {
            background: #292b2f;
            width: 40%;
            height: 1402px;
            float: left;
            padding: 0 20px;
        }

        .right {
            width: 60%;
            float: left;
        }

        .left .img_holder {
            text-align: center;
            padding: 20px 0;
        }

        .left .img_holder img {
            width: 200px;
            border-radius: 30px;
        }

        .pb {
            padding-bottom: 20px;
        }

        .title {
            font-size: 27px;
            font-weight: 700;
            text-transform: uppercase;
            padding-bottom: 10px;
            color: #3525af;
            position: relative;
            text-align: right;
            margin-bottom: 15px;
        }

        .title:before {
            content: "";
            position: absolute;
            top: 35px;
            right: 0;
            width: 50px;
            height: 3px;
            background: #3525af;
        }

        .left .icon {
            font-size: 20px;
            color: #9153c9;
        }

        .left .text {
            color: #9153c9;
            text-transform: uppercase;
            font-size: 13px;
        }

        .contact .li_wrap {
            display: flex;
            align-items: center;
            width: 100%;
            margin-bottom: 15px;
        }

        .contact .li_wrap .icon {
            width: 50px;
            height: 50px;
            background: #fff;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }

        .contact .li_wrap .text {
            width: calc(100% - 50px);
            word-break: break-word;
            color: #fff;
        }

        .skills ul,
        .hobbies ul {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .skills .li_wrap,
        .hobbies .li_wrap {
            width: 100px;
            height: 100px;
            margin-bottom: 15px;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .skills .li_wrap {
            background: #fff;
        }

        .skills .li_wrap .text,
        .hobbies .li_wrap .text {
            margin-top: 5px;
        }

        .hobbies .li_wrap {
            border: 2px solid #fff;
        }

        .hobbies .li_wrap .icon,
        .hobbies .li_wrap .text {
            color: #fff;
        }

        .hobbies .li_wrap:hover {
            background: #fff;
        }

        .hobbies .li_wrap:hover .icon,
        .hobbies .li_wrap:hover .text {
            color: #9153c9;
        }

        .header {
            background: #292b2f;
            padding: 15px 30px;
            color: #fff;
            height: 240px;
        }

        .header .name {
            font-size: 52px;
            text-transform: uppercase;
            font-weight: 700;
            color: #3525af;
        }

        .header .role {
            font-weight: 300;
            font-size: 20px;
        }

        .header .about {
            margin-top: 20px;
            line-height: 26px;
        }

        .right_inner {
            padding: 30px;
            color: #292b2f;
        }

        .right_inner .education {
            margin-top: 30px;
        }

        .right_inner .li_wrap {
            display: flex;
            margin-bottom: 15px;
        }

        .right_inner .li_wrap .date {
            width: 125px;
            color: #9153c9;
        }

        .right_inner .li_wrap .info {
            width: calc(100% - 125px);
            padding-left: 25px;
            position: relative;
        }

        .right_inner .li_wrap .info_title {
            text-transform: uppercase;
            font-weight: 700;
            color: #9153c9;
        }

        .right_inner .li_wrap .info_com {
            font-weight: 300;
            font-size: 20px;
            margin-top: 3px;
        }

        .right_inner .li_wrap .info_cont {
            margin-top: 15px;
            font-size: 18`px;
        }

        .right_inner .li_wrap .info:before {
            content: "";
            position: absolute;
            top: 3px;
            left: 0;
            width: 10px;
            height: 10px;
            background: #9153c9;
            border-radius: 50%;
        }

        .right_inner .li_wrap .info:after {
            content: "";
            position: absolute;
            top: 10px;
            left: 4px;
            width: 2px;
            height: 90%;
            background: #9153c9;
        }
    </style>
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="resume">
            <div class="left">
                <div class="img_holder">
                    <img src="D:\laravel-code\portfolio\public\profile_pic\noImage.jpg" alt="picture">
                </div>
                <div class="contact_wrap pb">
                    <div class="title">
                        Contact
                    </div>
                    <div class="contact">
                        <ul>
                            <li>
                                <div class="li_wrap">
                                    <div class="icon"><i class="fas fa-mobile-alt" aria-hidden="true"></i></div>
                                    <div class="text">972 9838485</div>
                                </div>
                            </li>
                            <li>
                                <div class="li_wrap">
                                    <div class="icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
                                    <div class="text">aniabukstein@gmail.com</div>
                                </div>
                            </li>
                            <li>
                                <div class="li_wrap">
                                    <div class="icon"><i class="fab fa-weebly" aria-hidden="true"></i></div>
                                    <div class="text">www.aniabukstein.com</div>
                                </div>
                            </li>
                            <li>
                                <div class="li_wrap">
                                    <div class="icon"><i class="fas fa-map-signs" aria-hidden="true"></i></div>
                                    <div class="text">17 street, jerusalem, phalisten</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="skills_wrap pb">
                    <div class="title">
                        Skills
                    </div>
                    <div class="skills">
                        <ul>
                            <li>
                                <div class="text">HTML</div>

                            </li>
                            <li>
                                <div class="text">CSS</div>

                            </li>
                            <li>
                                <div class="text">Javascript</div>

                            </li>
                            <li>
                                <div class="text">React.JS</div>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="hobbies_wrap pb">
                    <div class="title">
                        Language
                    </div>
                    <div class="hobbies">

                        <div class="text">Reading</div>

                        <div class="text">Music</div>


                        <div class="text">Gaming</div>


                        <div class="text">Gardening</div>


                    </div>
                </div>
            </div>
            <div class="right">
                <div class="header">
                    <div class="name_role">
                        <div class="name">
                            Ania Bukstein
                        </div>
                        <div class="role">
                            UI UX Developer
                        </div>
                    </div>
                    <div class="about">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta beatae optio, corporis
                        fugit accusantium debitis laborum tenetur, quisquam distinctio nihil quam eum. Laudantium saepe,
                        sunt, esse laboriosam dolores distinctio?
                    </div>
                </div>
                <div class="right_inner">
                    <div class="exp">
                        <div class="title">
                            experience
                        </div>
                        <div class="exp_wrap">
                            <ul>
                                <li>
                                    <div class="li_wrap">
                                        <div class="date">
                                            2018 - Present
                                        </div>
                                        <div class="info">
                                            <p class="info_title">
                                                UI Team Lead
                                            </p>
                                            <p class="info_com">
                                                Facebook
                                            </p>
                                            <p class="info_cont">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga
                                                voluptatibus consequatur rem nostrum omnis! Architecto.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="li_wrap">
                                        <div class="date">
                                            2015 - 2018
                                        </div>
                                        <div class="info">
                                            <p class="info_title">
                                                UI Developer
                                            </p>
                                            <p class="info_com">
                                                Amazon
                                            </p>
                                            <p class="info_cont">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga
                                                voluptatibus consequatur rem nostrum omnis! Architecto.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="li_wrap">
                                        <div class="date">
                                            2014 - 2015
                                        </div>
                                        <div class="info">
                                            <p class="info_title">
                                                Junior UI Developer
                                            </p>
                                            <p class="info_com">
                                                Coding Power
                                            </p>
                                            <p class="info_cont">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga
                                                voluptatibus consequatur rem nostrum omnis! Architecto.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="education">
                        <div class="title">
                            Education
                        </div>
                        <div class="education_wrap">
                            <ul>
                                <li>
                                    <div class="li_wrap">
                                        <div class="date">
                                            2010 - 2014
                                        </div>
                                        <div class="info">
                                            <p class="info_title">
                                                Computer Science
                                            </p>
                                            <p class="info_com">
                                                Palistine University
                                            </p>
                                            <p class="info_cont">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga
                                                voluptatibus consequatur rem nostrum omnis! Architecto.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="li_wrap">
                                        <div class="date">
                                            2008 - 2010
                                        </div>
                                        <div class="info">
                                            <p class="info_title">
                                                Computer Science
                                            </p>
                                            <p class="info_com">
                                                Palistine Junior College
                                            </p>
                                            <p class="info_cont">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga
                                                voluptatibus consequatur rem nostrum omnis! Architecto.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
