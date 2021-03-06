<!DOCTYPE html>
<html lang="en-us">
<head>
<title>fedral republice of nigeria</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta charset="utf-6"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" href="recaptcha/css/securimage.css" media="screen">
<?php require('recaptcha/recaptcha_verification.php'); ?>
</head>
<body>
<header class="container-fluid headbg">
	<div class="container">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 head-logo">
			<img src="assets/img/frederal-republice.png" alt="frederal-republice">
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 head-navication">
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



	<section class="container-fluid headerbg2">
			<div class="container">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 header-left">
					<h1>Home Voting</h1>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 header-right">
					<form method="post">
						<div class="inputbg">
						<input type="text" class="textcontent" placeholder="search GOV.NG">
						</div>
						<div class="searchbg"><input type="submit" value="Search" class="seachsubmit"></div>
					</form>
				</div>
			</div>
	</section>




	<section class="container-fluid space">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pre">New Registration</div>
		
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 space">
				<?php
				//recaptcha_notice_error
					require('recaptcha/recaptcha_notice_error.php');
				?>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING']) ?>" id="contact_form"> <input type="hidden" name="do" value="contact">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="vote" style="margin-bottom: 50px; text-decoration: underline;">ID Biometric Verification</div>
					
						<div class="col-xs-12 col-sm-6 surname">Select ID Type</div>
						<div class="col-xs-12 col-sm-6"><input type="text" class="form-control txt" placeholder="Select ID Type"></div>

						<div class="col-xs-12 col-sm-6 surname">ID Number</div>
						<div class="col-xs-12 col-sm-6"><input type="text" class="form-control txt"></div>

						<div class="col-xs-12 col-sm-6 surname">Surname</div>
						<div class="col-xs-12 col-sm-6"><input type="text" class="form-control txt"></div>

						<div class="col-xs-12 col-sm-6 surname">Date of Birth</div>
						<div class="col-xs-12 col-sm-6"><input type="date" class="form-control txt"></div>
						

					<div class="col-xs-12 col-sm-6 surname2">Recaptcha Add</div>
					<div class="col-xs-12 col-sm-6"><?php
						  // show captcha HTML using Securimage::getCaptchaHtml()
						  require_once 'recaptcha/securimage.php';
						  $options = array();
						  $options['input_name']             = 'ct_captcha'; // change name of input element for form post
						  $options['disable_flash_fallback'] = false; // allow flash fallback

						  if (!empty($_SESSION['ctform']['captcha_error'])) {
							// error html to show in captcha output
							$options['error_html'] = $_SESSION['ctform']['captcha_error'];
						  }

						  echo "<div id='captcha_container_1'>\n";
						  echo Securimage::getCaptchaHtml($options);
						  echo "\n</div>\n";

						?>
						</div>
					<div class="col-xs-12 col-sm-6">
					</div>
					<div class="col-xs-12 col-sm-6" style="text-align: center;">
					<input type="submit" name="submit" value="Submit" class="button">
					</div>
				</div>


				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 space">
					<div class="para"><p>Use this service - link to initiate registration for your Voter ID card by verifying your existing biometric data, if you have provided or captured biometric data - ID for any of this service (e.g National Identify Number, Driver License International Passportm, Bank Verification Number) before. By Initiating this Verification, Your Biometric data will be connected to this Voter ID Once it Successfully Submitted.</p></div>
				</div>
				</form>
			</div>
		</div>
	</section>





<footer class="container-fluid footerbg">
	<div class="container">
		<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 footercontent">
				<ul class="footer-nav">
					<li><a href="#">Polices</a></li>
					<li><a href="#">Terms & Conditions</a></li>
					<li><a href="#">Cookies</a></li>
					<li><a href="#">Help</a></li>
					<li><a href="#">Contact GOV</a></li>
				</ul>
			</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 footercontent">
					<p>Gov System Team</p>
					<p>INTDA</p>
					<p>Ministry Of Communications</p>
					<div class="copyrie">
						<p>&copy; Afolabi D.A</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 footersocialcontent">
					<p>Ministry of Information</p>
					<p>INTDA</p>
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