<!Doctype HTML>
<html>
<head>
	<title>resume</title>
	<style>
		body{
	margin:0px;
	padding:0px;
	background-color:#0B7DEE;
	height: 150vh;
	
}
.clearfix{
	clear: both;
}
.resume-box{
	width: 800px;
	height: 1000px;
	margin: 0 auto;
	background-color: white;
}
.box-outer{
	padding:30px;
}
.box-1{
	background-color: #26252d;
	width: 35%;
	float: left;
	height: 1000px;
}

.box-2{
	width: 60%;
	float: left;
	padding: 20px;
}
.profile{
	width: 100%;
}
.content{
	padding: 20px;
}
h1{
	color: #ceced1;
    font-family: system-ui;
    font-weight: 300;
    text-transform: uppercase;

}
p{
	color: #ceced1;
    font-family: system-ui;
    font-weight: 300;
    font-size: 14px;
   
}

#progress {
    background: #333;
    border-radius: 13px;
    height: 8px;
    width: 100%;
    padding: 3px;
}

#progress:after {
    content: '';
    display: block;
    background: orange;
    width: 50%;
    height: 100%;
    border-radius: 9px;
}
#progress1 {
    background: #333;
    border-radius: 13px;
    height: 8px;
    width: 100%;
    padding: 3px;
}

#progress1:after {
    content: '';
    display: block;
    background: orange;
    width: 40%;
    height: 100%;
    border-radius: 9px;
}
#progress2 {
    background: #333;
    border-radius: 13px;
    height: 8px;
    width: 100%;
    padding: 3px;
}

#progress2:after {
    content: '';
    display: block;
    background: orange;
    width: 80%;
    height: 100%;
    border-radius: 9px;
}

#progress3 {
    background: #333;
    border-radius: 13px;
    height: 8px;
    width: 100%;
    padding: 3px;
}

#progress3:after {
    content: '';
    display: block;
    background: orange;
    width: 90%;
    height: 100%;
    border-radius: 9px;
}
.intro{text-align: center;}
.intro h1{
	font-size: 40px;
	font-weight: bold;
	color: #26252d;

}
.hr{
	height: 15px;
    border: none;
    background-color: yellow;
    margin: -45px 20px;
}
.intro-p{
	color: #7d7d7d;
    font-family: system-ui;
    font-weight: 300;
    font-size: 15px;
    margin-top: 13%!important;
    font-weight: 400;
}
.intro p{
	color: #7d7d7d;
    font-family: system-ui;
    font-weight: 300;
    font-size: 15px;
    margin-top: -5px;
    font-weight: 400;
}
.content-2{
	padding-top: 40px;
}
.head{
	color: #26252d;
    font-family: system-ui;
    font-weight: 400;
    text-transform: uppercase;
    margin:0px;
}
.para-1{
	font-size: 16px;
    text-transform: uppercase;
    color: #26252d;
    font-weight: 400;
    margin: 5px 0px;
    margin-top: 10px;
}
.para-2{
	font-size: 14px;
	text-transform: capitalize;
    color: #7d7d7d;
    font-weight: 400;
    margin-bottom: 20px;
    margin-top: 0px;
}
	</style>
</head>

<body>
	<div class="box-outer">
	<div class="resume-box">
		<div class="box-1">
			<img src="images/profile.png" class="profile" />
			<div class="content">
			<h1>About me</h1>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				<br/><br/>
				Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
			</p>

			<h1>Skills</h1>
			<p>Grapic Design</p>
			<div id="progress"></div>
			<p>Web Design</p>
			<div id="progress1"></div>
			<p>HTML</p>
			<div id="progress2"></div>
			<p>CSS</p>
			<div id="progress3"></div>
			
			</div>

		</div>

		<div class="box-2">
			
			<div class="intro">
				<h1>Manoj Adhikari</h1>
				<hr class="hr" />
				<div class="clearfix"></div>
				<p class="intro-p">2132 London (All Airports)-LON,United Kingdom </p>
				<p>phone +(91)1 234 3455</p>
				<p>email : demo@gmail.com</p>
			</div>

			<div class="content-2">
				<h1 class="head">Experience</h1>
				<p class="para-1">UI Designer In Lorem Ipsum (2018 - Now)</p>
				<p class="para-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

				<p class="para-1">UI Designer (2013 - 2015)</p>
				<p class="para-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>

				<p class="para-1">Grapic Designer(2010)</p>
				<p class="para-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			</div>


			<div class="content-2">
				<h1 class="head">Education</h1>
				<p class="para-1">High school of cbse (2009 - 2010)</p>
				<p class="para-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

				<p class="para-1">Bachelor of Computer Application (2013 - 2015)</p>
				<p class="para-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>

				
			</div>


		</div>

	</div>
	<div class="clearfix"></div>
</div>
</body>

</html>