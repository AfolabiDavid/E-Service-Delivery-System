<html lang="en-us"><head>
<title>Left Sidebar</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script>
$(document).ready(function(){

	
	$("#agriculture").click(function(){
		$("#content").load("inc/agriculture.php");
	
	});
	
	$("#births").click(function(){
		$("#content").load("inc/births.php");
		
	});
	$("#citizenship").click(function(){
		$("#content").load("inc/citizenship.php");
	});
	$("#driving").click(function(){
		$("#content").load("inc/driving.php");
	});
	$("#education").click(function(){
		$("#content").load("inc/education.php");
	});
	$("#housing").click(function(){
		$("#content").load("inc/housing.php");
	});
	$("#headth").click(function(){
		$("#content").load("inc/headth.php");
	});
	$("#investment").click(function(){
		$("#content").load("inc/investment.php");
	});
	$("#jobs").click(function(){
		$("#content").load("inc/jobs.php");
	});
	$("#money").click(function(){
		$("#content").load("inc/money.php");
	});$("#passport").click(function(){
		$("#content").load("inc/passport.php");
	});$("#special").click(function(){
		$("#content").load("inc/special.php");
	});
	
});
	
</script>
</head>
<body>
<header class="container-fluid headbg">
	<div class="container">
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 head-logo">
			<img src="assets/img/frederal-republice.png" alt="frederal-republice">
		</div>
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 head-navication">
			<nav class="navbar navbar-default">
			        <div class="navbar-header">
			            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			                <span class="sr-only">Toggle navigation</span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			            </button>
			        </div>
			           <div id="navbar" class="navbar-collapse collapse">
			                <ul class="nav navbar-nav navbar-right">
			                  <li class="active"><a href="#">Home</a></li>
			                  <li><a href="#">About Nigeria</a> </li>
			                  <li><a href="#">Ministries</a></li>
			                  <li><a href="#">Arms Of Gov</a></li>
			                  <li><a href="#">Contact Gov</a></li>
			                </ul>
			           </div>
			    </nav>
		</div>
	</div>
</header>
   <section class="container-fluid headerbg">
			<div class="container">
				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 header-left">
					<h1><a href="index.html">Home</a></h1>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 header-right">
					<form method="post">
						<div class="inputbg">
						<input class="textcontent" placeholder="search GOV.NG" type="text">
						</div>
						<div class="searchbg"><input value="Search" class="seachsubmit" type="submit"></div>
					</form>
				</div>
			</div>
	</section>
	
<section class="container-fluid space">
	<div class="container">
	<aside class="col-xs-12 col-sm-3 col-md-3 col-lg-3 sidebar-page">
		<ul id="sss" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sidebartitle">
			<li>
			<a id="agriculture" href="#">Agriculture &amp; Food Banks</a>
			</li>
			<li>
			<a id="births" href="#" >Births, Marriages, &amp; Deaths</a>
			</li>
			<li class="active"><a id="citizenship" href="#">Citizenship, National Identity, &amp; Voting</a></li>
			<li><a id="driving" href="#">Driving, Transportation &amp; Licenses</a></li>
			<li><a id="education" href="#">Education &amp; Learning</a></li>
			<li><a id="housing" href="#">Housing and Lands Services</a></li>
			<li><a id="headth" href="#">Health Insurance &amp; Health Services</a></li>
			<li><a id="investment" href="#">Investments &amp; Investors</a></li>
			<li><a id="jobs" href="#">Jobs, Employment, &amp; Pensions</a></li>
			<li><a id="money" href="#">Money &amp; Taxes</a></li>
			<li><a id="passport" href="#">Passport, Visas, &amp; Immigration</a></li>
			<li><a id="special" href="#">Special Care for Disabled</a></li>
		</ul>
	</aside>
		<section class="col-xs-12 col-sm-9 col-md-9 col-lg-9 rightcontent">
			<div id="content" class="content">
				<?php include('inc/citizenship.php');?>
			</div>
			
		</section>
</div>
</section>


<footer class="container-fluid footerbg">
	<div class="container">
		<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 footercontent">
				<ul class="footer-nav">
					<li><a href="#">Polices</a></li>
					<li><a href="#">Terms &amp; Conditions</a></li>
					<li><a href="#">Cookies</a></li>
					<li><a href="#">Help</a></li>
					<li><a href="#">Contact GOV</a></li>
				</ul>
			</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 footercontent">
					<p>Gov System Team</p>
					<p>NITDA</p>
					<p>Ministry Of Communications</p>
					<div class="copyrie">
						<p>&copy; Afolabi D.A</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 footersocialcontent">
					<p>Ministry of Information</p>
					<p>NITDA</p>
					<p>Ministry Of Communications</p>
					<ul class="footer-social-icon">
						<li><a href="https://www.facebook.com/"><img src="assets/img/facebook.png"></a></li>
						<li><a href="https://www.twitter.com/"><img src="assets/img/tiwitter.png"></a></li>
						<li><a href="https://www.plus.google.com/"><img src="assets/img/google+.png"></a></li>
						<li><a href="https://www.linkedin.com/"><img src="assets/img/in.png"></a></li>
						<li><a href="https://www.youtube.com/"><img src="assets/img/youtube.png"></a></li>
						<li><a href="https://www.instagram.com/"><img src="assets/img/instagram.png"></a></li>
					</ul>
			</div>
		</div>
</footer>


</body>
</html>