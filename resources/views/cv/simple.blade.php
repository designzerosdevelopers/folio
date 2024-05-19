<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
body{
	background: #fafafa;
	height: 122vh;
	font-weight: bold;
	letter-spacing: 2px;
}
*{margin: 0px; padding: 0px; font-family: 'Montserrat', sans-serif;}
.main{
	background-color: white;
	height: auto;
	width: 650px;
	position: absolute;
	transform: translate(-50%, -50%);
	left: 50%;
	top: 60%;
	box-shadow: 5px 2px 14px 10px #eeeaea;
}
.left{
	padding: 0px 0px 0px 20px;
	width: 200px;
	height: 100%;
	float: left;
}
.right{width: 430px; float: left;}
.box-1{position: relative;}
.p1{padding: 10px 0px; font-size: 11px;}
.icons1{
	font-size: 16px!important;
	padding-right: 10px!important;
	vertical-align: sub;
}
.skill{
	margin-left: 20px;
	font-size: 12px;
	font-weight: normal;
}
.skill li{
	padding: 13px 0px;
}
.name-div{
	padding: 86px 0px 60px 55px;
	text-align: center;
	letter-spacing: 3px;
}
.name-div h1{margin-bottom: 10px;}
.box-2{padding: 0px 50px; margin-top:30px;}
.p2{
	font-size: 10px;
	font-weight: 300;
	letter-spacing: 1px;
	word-spacing: 2px;
	line-height: 18px;
	margin-top: 5px;
}
h2{font-size: 16px; margin-bottom: 15px;}
    </style>

</head>
<body>

	<div class="main">

		<div class="left">
			<div class="box-1">
				<p class="heading">Contact</p>
				<br/>
				<p class="p1"><i class="material-icons icons1">call</i>+12454335</p>
				<p class="p1"><i class="material-icons icons1">email</i>info@yourweb.com</p>
				<p class="p1"><i class="material-icons icons1">map</i>MV Phase-III</p>
				<p class="p1"><i class="material-icons icons1">fax</i>Lorem Dummy</p>
			</div>

			<div class="box-1">
				<br/>
				<p class="heading">EDUCATION</p>
				<br/>
				<p class="p2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>

				<p class="p2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>
			</div>
			<br/>
		

		</div>
	</div>

  <!-- Button for downloading PDF -->
  <a href="{{ route('download.pdf') }}" class="btn btn-secondary">Download PDF</a>


</body>
</html>