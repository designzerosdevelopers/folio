 
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <style>
             
    body{
        background-color: #D5D5D5;
        font-family: system-ui;
    }
    .container{
        background-color: #E9E7EA;
        width:1000px;
        max-width: 100%;
        margin:auto;
        padding:50px;
        box-shadow: 0 10px 50px #858585;
        display: grid;
       grid-template-columns: 35% 60%;
       column-gap: 5%; 
       row-gap: 30px;
    }
    
    .avatar img{
        width:200px;
        height:200px;
        object-fit: cover;
        border-radius: 50%;
    }
    .avatar{
        display: flex;
        justify-content: end;
        align-items: center;
    }
    .name{
        padding-left: 30px;
        border-left:1px solid #000;
    }
    .name h1{
        font-weight: 300;
        font-size: xxx-large;
        margin:0px 0 5px ;
    }
    .name .specialize{
        margin:0;
        font-weight: bold;
        letter-spacing: 3px;
    }
    .name .contact{
        padding:0;
        list-style: none;
    }
    .name .contact span{
        display: inline-block;
        background-color: #000;
        width:20px;
        height:20px;
        color:#fff;
        text-align: center;
        border-radius: 50%;
        font-size: small;
        margin-right: 20px;
    }
    .name .contact li{
        padding:5px 0;
        transform: translate(-40px);
        background-color: #E9E7EA;
    }
    .info ul{
        padding: 0;
        margin: 0;
        list-style: none;
        text-align: right;
        line-height: 30px;
    } 
    
    h2{
        padding:0;
        margin: 0 0 20px 0;
    }
    .intro{
        padding-left: 30px;
        border-left: 1px solid #000;
        text-align: justify;
    }
    .experience{
        text-align: right;
    }
    .experience h4{
        margin:20px 0 10px;
    }
    .skills{
        margin-top:  50px;
    }
    .experience ul{
        padding:0;
        margin: 0;
    list-style: none;
    }
    .experience li{
        padding:10px 0;
    }
    .project{
        padding-left: 30px;
        text-align: justify;
        border-left: 1px solid #000;
    }
    .project h4{
        margin:20px 0 10px;
    }
    .project .web{
        color: #0c7373;
        padding:10px 0;
    }
    .project .location{
        font-weight: 500;
        padding-bottom:10px;
    }
    .project .item{
        position: relative;
    }
    .project .item::before{
        position: absolute;
        width:13px;
        height: 13px;
        background-color: #000;
        content: '';
        border-radius: 50%;
        left: -37px;
    }

        </style>
    </head>
    <body>
        <div class="container">
           <div class="avatar">
            <img src="https://i.pinimg.com/564x/eb/57/6f/eb576ff023487bcb1fa3ad61ee7b23ee.jpg" alt="">
           </div>
           <div class="name">
                <h1>HO HOANG</h1>
                <div class="specialize">Frond-End Developer</div>
                <ul class="contact">
                    <li>
                        <span>P</span> +84123456789
                    </li>
                    <li>
                        <span>E</span> hohoang.dev@gmail.com
                    </li>
                    <li>
                        <span>W</span> lundevweb.com
                    </li>
                </ul>
           </div>
           <div class="info">
                <ul>
                    <li>From <b>HCMC</b> - VietNam</li>
                    <li>01/01/0101</li>
                    <li>AAAA University</li>
                </ul>
           </div>
           <div class="intro">
            <h2>INTRODUCE MYSELT</h2>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit eligendi omnis quasi dolores modi eius aliquam ipsum soluta, dolore tenetur excepturi praesentium porro alias itaque enim labore qui necessitatibus molestias hic cum deserunt ab! Illum sed eveniet distinctio, alias sunt repudiandae labore a dolorum tenetur? Harum deleniti mollitia odio neque.
           </div>
           <div class="experience">
            <h2>EXPERIENCE</h2>
    
            <div class="item">
                <h4>Frond-end Developer</h4>
                <div class="time">
                   <span>2020 - 2022</span>
                   <span>ABC D company</span>
                </div>
                <div class="des">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium officia nobis quas excepturi consectetur quidem quia est neque doloremque.
                </div>
            </div>
    
                <div class="item">
                    <h4>Student</h4>
                    <div class="time">
                       <span>2015 - 2019</span>
                       <span>ACDC University</span>
                    </div>
                    <div class="des">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium officia nobis quas excepturi consectetur quidem quia est neque doloremque.
                    </div>
                </div>
                <h2 class="skills">
                    SKILLS
                </h2>
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>Bootstrap</li>
                    <li>Javascript</li>
                    <li>PHP</li>
                    <li>MySql</li>
                    <li>Git</li>
                    <li>Laravel</li>
                </ul>
    
           </div>
           <div class="project">
            <h2>PROJECTS</h2>
            <div class="item">
                <h4>Website shopping</h4>
                <div class="time">
                    2020
                </div>
                <div class="web">
                    www.lundevweb.com
                </div>
                <div class="location">
                    Frond-end Developer
                </div>
                <div class="des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto consequatur amet sed, est eum facilis repellendus 
                    atque perspiciatis iste porro nobis autem explicabo expedita fugiat nostrum. Eveniet eum autem culpa!
                    <ul>
                        <li>Lorem ipsum dolordolores.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, dolores.</li>
                        <li>Lorem ipsum dolor sit amet consectetur dolores.</li>
                    </ul>
                </div>
            </div>
    
            <div class="item">
                <h4>Website shopping</h4>
                <div class="time">
                    2020
                </div>
                <div class="web">
                    www.lundevweb.com
                </div>
                <div class="location">
                    Frond-end Developer
                </div>
                <div class="des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto consequatur amet sed, est eum facilis repellendus 
                    atque perspiciatis iste porro nobis autem explicabo expedita fugiat nostrum. Eveniet eum autem culpa!
                    <ul>
                        <li>Lorem ipsum dolordolores.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, dolores.</li>
                        <li>Lorem ipsum dolor sit amet consectetur dolores.</li>
                    </ul>
                </div>
            </div>
    
            <div class="item">
                <h4>Website shopping</h4>
                <div class="time">
                    2020
                </div>
                <div class="web">
                    www.lundevweb.com
                </div>
                <div class="location">
                    Frond-end Developer
                </div>
                <div class="des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto consequatur amet sed, est eum facilis repellendus 
                    atque perspiciatis iste porro nobis autem explicabo expedita fugiat nostrum. Eveniet eum autem culpa!
                    <ul>
                        <li>Lorem ipsum dolordolores.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, dolores.</li>
                        <li>Lorem ipsum dolor sit amet consectetur dolores.</li>
                    </ul>
                </div>
            </div>
           </div>
        </div>
    </body>
    </html>

