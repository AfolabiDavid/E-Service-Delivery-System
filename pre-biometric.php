<!DOCTYPE html>
<html lang="en-us">
<head>
<title>Federal Republic of Nigeria</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" href="recaptcha/css/securimage.css" media="screen">
<?php require('recaptcha/recaptcha_pre-biometric.php'); ?>
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

	<section class="container-fluid headerbg2">
			<div class="container">
				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 header-left">
					<h1>Home Voting</h1>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 header-right">
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
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pre">Pre-registration and Biometric Capture Request Form</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 note">
				NOTE: This form is to be used, if you do not have any biometric record captured before<br> e.g Drivers License, Internation Passport, Voters Card, and BVN
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 space">
				<?php
				//recaptcha_notice_error
					require('recaptcha/recaptcha_notice_error.php');
				?>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING']) ?>" id="contact_form"> <input type="hidden" name="do" value="contact">
			
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopadding">
					<div class="col-xs-12 col-sm-6 surname">Surname*</div>
					<div class="col-xs-12 col-sm-6">
					<input type="text" class="form-control txt" id="user_name" name="user_name">
					</div>

					<div class="col-xs-12 col-sm-6 surname">First Name</div>
					<div class="col-xs-12 col-sm-6">
					<input type="text" class="form-control txt" id="first_name" name="first_name">
					</div>

					<div class="col-xs-12 col-sm-6 surname">Middle name</div>
					<div class="col-xs-12 col-sm-6">
					<input type="text" class="form-control txt" id="middle_name" name="middle_name">
					</div>

					<div class="col-xs-12 col-sm-6 surname">Gender</div>
					<div class="col-xs-12 col-sm-6 gederpage">
						<label class="form_label ">Male <input type="radio" name="a"> &nbsp;&nbsp;Female <input type="radio" name="a"></label>
					</div>

				
					
					<div class="col-xs-12 col-sm-6 surname">Date of Birth</div>
					<div class="col-xs-12 col-sm-6"><input type="date" class="form-control txt"></div>



					<div class="col-xs-12 col-sm-6 surname">Home Address</div>
					<div class="col-xs-12 col-sm-6">
					<input type="text" class="form-control txt" id="homeaddress_name" name="homeaddress_name">
					</div>

					<div class="col-xs-12 col-sm-6 surname">State</div>
					<div class="col-xs-12 col-sm-6">
					<select class="form-control txt">
								<option selected="selected">Select State</option>
								<option>Abia<option>
								<option>Adamawa<option>
								<option>Akwa Ibom<option> 
								<option>Anambra<option> 
								<option>Bauchi<option> 
								<option>Bayelsa <option>
								<option>Benue<option> 
								<option>Borno<option> 
								<option>Cross river<option> 
								<option>Delta <option>
								<option>Ebonyi<option> 
								<option>Edo<option> 
								<option>Ekiti<option> 
								<option>Enugu <option>
								<option>Gombe<option> 
								<option>Imo<option> 
								<option>Jigawa <option>
								<option>Kaduna<option> 
								<option>Kano<option> 
								<option>Katsina<option> 
								<option>Kebbi<option> 
								<option>Kogi<option> 
								<option>Kwara<option>
								<option>Lagos<option> 
								<option>Nassarawa<option> 
								<option>Niger<option> 
								<option>Ogun<option> 
								<option>Ondo<option> 
								<option>Osun<option> 
								<option>Oyo<option>
								<option>Plateau<option> 
								<option>Rivers<option> 
								<option>Sokoto<option> 
								<option>Taraba <option>
								<option>Yobe<option>
								<option>Zamfara<option>								
							</select>
					</div>
					
					</div>

				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopadding">
						<div class="col-xs-12 col-sm-6 surname">LGA</div>
						<div class="col-xs-12 col-sm-6">
						<select class="form-control txt">
									<option selected="selected">Select LGA</option>
									<option>option 1</option>
									<option>option 2</option>
									<option>option 3</option>
									<option>option 4</option>
									<option>option 6</option>
								</select>
						</div>
				
					<div class="col-xs-12 col-sm-6 surname">Place of Birth</div>
					<div class="col-xs-12 col-sm-6">
					<select class="form-control txt">
								<option selected="selected">Select Place of Birth</option>
								<option>Abia<option>
								<option>Adamawa<option>
								<option>Akwa Ibom<option> 
								<option>Anambra<option> 
								<option>Bauchi<option> 
								<option>Bayelsa <option>
								<option>Benue<option> 
								<option>Borno<option> 
								<option>Cross river<option> 
								<option>Delta <option>
								<option>Ebonyi<option> 
								<option>Edo<option> 
								<option>Ekiti<option> 
								<option>Enugu <option>
								<option>Gombe<option> 
								<option>Imo<option> 
								<option>Jigawa <option>
								<option>Kaduna<option> 
								<option>Kano<option> 
								<option>Katsina<option> 
								<option>Kebbi<option> 
								<option>Kogi<option> 
								<option>Kwara<option>
								<option>Lagos<option> 
								<option>Nassarawa<option> 
								<option>Niger<option> 
								<option>Ogun<option> 
								<option>Ondo<option> 
								<option>Osun<option> 
								<option>Oyo<option>
								<option>Plateau<option> 
								<option>Rivers<option> 
								<option>Sokoto<option> 
								<option>Taraba <option>
								<option>Yobe<option>
								<option>Zamfara<option>								
							</select>
					</div>

					<div class="col-xs-12 col-sm-6 surname">State of Origin</div>
					<div class="col-xs-12 col-sm-6">
					<select class="form-control txt">
								<option selected="selected">Select State</option>
								<option>Abia<option>
								<option>Adamawa<option>
								<option>Akwa Ibom<option> 
								<option>Anambra<option> 
								<option>Bauchi<option> 
								<option>Bayelsa <option>
								<option>Benue<option> 
								<option>Borno<option> 
								<option>Cross river<option> 
								<option>Delta <option>
								<option>Ebonyi<option> 
								<option>Edo<option> 
								<option>Ekiti<option> 
								<option>Enugu <option>
								<option>Gombe<option> 
								<option>Imo<option> 
								<option>Jigawa <option>
								<option>Kaduna<option> 
								<option>Kano<option> 
								<option>Katsina<option> 
								<option>Kebbi<option> 
								<option>Kogi<option> 
								<option>Kwara<option>
								<option>Lagos<option> 
								<option>Nassarawa<option> 
								<option>Niger<option> 
								<option>Ogun<option> 
								<option>Ondo<option> 
								<option>Osun<option> 
								<option>Oyo<option>
								<option>Plateau<option> 
								<option>Rivers<option> 
								<option>Sokoto<option> 
								<option>Taraba <option>
								<option>Yobe<option>
								<option>Zamfara<option>								
							</select>
					</div>

					<div class="col-xs-12 col-sm-6 surname">Marital Status</div>
					<div class="col-xs-12 col-sm-6">
					<select class="form-control txt">
								<option selected="selected">Select Status</option>
								<option>Single</option>
								<option>Married</option>
								<option>Widow</option>
								<option>Divorced</option>
								<option>Separated</option>
							</select>
					</div>

					<div class="col-xs-12 col-sm-6 surname">Father's Name</div>
					<div class="col-xs-12 col-sm-6">
					<input type="text" class="form-control txt" id="father_name" name="father_name">
					</div>

					<div class="col-xs-12 col-sm-6 surname">Mother's Name</div>
					<div class="col-xs-12 col-sm-6">
					<input type="text" class="form-control txt" id="mother_name" name="mother_name">
					</div>
					<div class="col-xs-12 col-sm-6 surname2">
						Schedule Biometric Capture
					</div>
					<div class="col-xs-12 col-sm-6">
					<?php
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
				
				</form>
			</div>
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