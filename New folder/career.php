<?php include('server.php') ?>
<?php
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: error1.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: error1.php");
  }
?>

<!DOCTYPE html>
<html class="no-js">
<script src="angular.min.js"></script>
	<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Career at Domestic Services and Providers</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="100% Trusted Domestic Services" />
	<meta name="keywords" content="Domestic Services" />
	<meta name="author" content="KC252" />
	<link rel="shortcut icon" href="images/title_icon.png"/>

	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/superfish.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/modernizr-2.6.2.min.js"></script>
	<style>
	.button {
	  border-radius: 4.5px;
	  background-color: #f4511e;
	  border: none;
	  color: #FFFFFF;
	  text-align: center;
	  font-size: 20px;
	  width: 125px;
	  transition: all 0.3s;
	  cursor: pointer;
	  margin: 5px;
	  height: 55px;
	  margin-top: 30px;
	}

	.button span {
	  cursor: pointer;
	  display: inline-block;
	  position: relative;
	  transition: 0.3s;
	}

	.button span:after {
	  content: '\00bb';
	  position: absolute;
	  opacity: 0;
	  top: 0;
	  right: -20px;
	  transition: 0.3s;
	}

	.button:hover span {
	  padding-right: 25px;
	}

	.button:hover span:after {
	  opacity: 1;
	  right: 0;
	}
	table {
	    border-collapse: collapse;
	}

	td {
	    padding-top: .5em;
	    padding-bottom: .5em;
	}
	#nextdiv{
		display: none;
	}
</style>
<script type="text/javascript">
	function submitdet() {
		var a,b,c,d,e,f;
		a=document.getElementById('ctxtName').value;
		b=document.getElementById('ctxtPhone').value;
		c=document.getElementById('ctxtLocation').value;
		d=document.getElementById('ctxtAadhaar').value;
		e=document.getElementById('ctxtPan').value;
		f=document.getElementById('ctxtStype').value;
		if(!a || !b || !c || !d || !e || !f){
			alert("Please Fill all details");
		}
		else{
			document.getElementById('nextdiv').style.display = 'block';
			document.getElementById('thisdiv').style.display = 'none';
		}
		
	}
</script>

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.php">Domestic Services and Providers</a></h1>
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li>
									<!-- logged in user information -->
									<!-- if user is logged in, do this -->
    								<?php  if (isset($_SESSION['username'])) : ?>
    									<a href="logout.php" style="color: red;"><?php echo $_SESSION['username']; ?> logout</a>
    								<!-- if user is not logged in, do this -->
    								<?php else : ?>
    									<a href="login_signup.php">Login/Signup</a>
    								<?php endif ?>
								</li>
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>		
		</div>
		<!-- end:fh5co-header -->
		
			<div class="col-half col-half-2" ng-app="myApp" style="background-image: url(images/kachamacha.jpg);margin-top: -30px;width:100%;color: black;">
					<div id="thisdiv">
						<h2><u>PLEASE ENTER YOUR DETAILS</u></h2> 
						<form id="careerFormTest" method="post" action="career.php" onsubmit="submitdet(); return false;">
						    <table>
							    <tr>
								    <td><label for="ctxtName">Name<span class="required">*</span></label></td>
								    <td><input type="text" style="width:200px;" placeholder="Enter Your Name" id="ctxtName" name="cdetails_name" required pattern="^[a-zA-Z ]+$"></td>
							    </tr>   
							    <tr>
								    <td><label for="ctxtPhone">Phone<span class="required">*</span></label></td>
								    <td><input type="tel" id="ctxtPhone" style="width:200px;" placeholder="XXXXX XXXXX" name="cdetails_phonee" required pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$"></td>
							    </tr>
							    <tr>
								    <td><label for="ctxtLocation">Working Location<span class="required">*</span></label></td>
								    <td>
			                         	<input type="text" id="ctxtLocation" style="width:200px;" placeholder="Location to work" name="cdetails_locaction" required pattern="^[a-zA-Z ]+$">   
								    </td>
								</tr>
								<tr>
								    <td><button type="submit" class="button" name="cdetails_submit"><span>Submit</span></button></td>
								</tr>
							</table>
							<div style="margin-left: 450px;margin-top: -255px;">
								<table>
								    <tr>
									    <td><label for="ctxtAadhaar">Aadhaar Number<span class="required">*</span></label></td>
									    <td><input type="tel" style="width:200px;" placeholder="XXXX XXXX XXXX" id="ctxtAadhaar" name="cdetails_aadhaar" required pattern="^[0-9]{12}$"></td>
								    </tr>   
								    <tr>
									    <td><label for="ctxtPan">PAN Number<span class="required">*</span></label></td>
									    <td><input type="tel" id="ctxtPan" style="width:200px;" placeholder="XXXXXXXXXX" name="cdetails_phonee" required pattern="^[A-Z]{5}[0-9]{4}[A-Z]{1}$"></td>
								    </tr>
								    <tr>
									    <td><label for="ctxtStype">Service Type<span class="required">*</span></label></td>
									    <td><input type="tel" id="ctxtStype" style="width:200px;" placeholder="Service to Work for" name="cdetails_service" required pattern="^[a-zA-Z ]+$"></td>
								    </tr>
								</table>
								<input class="button" type="reset" value="Clear" id="cbtnReset">
							</div>
							
						</form>
						<div style="margin-left: 900px;margin-top: -240px;margin-bottom: 20px; border: 1px solid blue; padding: 30px 30px;">
							<form action="career.php" method="post" enctype="multipart/form-data">
								<p>Upload CV/Resume here (Optional)</p>
								<input type="file"  name="file" size="50">
								<input type="submit" class="button" style="font-size: 17px; height: 45px;width: 100px;" value="Upload">
								<p style="margin-left: 120px;margin-top: -43px;">(Optional)</p>
							</form>
						</div>
					</div>
					<div id="nextdiv">
						<div class="container">
							<h3>Your Details are submitted successfully</h3>
							<br><br>
							<p>Thank you for taking interest in our Job Services<br>We would contact you soon.</p>
							<br><br>
							<p>This page will automatic redirect to home page.</p>
						</div>
					</div>
			</div>


		<footer id="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-5">
								<div class="copyright">
									<p><small>&copy; 2018 <a href="index.php">Domestic Services and Providers</a>. All Rights Reserved. <br> Made with <i class="icon-heart3"></i> by KC252</a></small></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-6">
										<h3>Company</h3>
										<ul class="link">
											<li><a href="about.php">About Us</a></li>
											<li><a href="index.php">Domestic Services and Providers</a></li>
											<li><a href="contact.php">Contact Us</a></li>
										</ul>
									</div>
									<div class="col-md-6">
										<h3>Any Queries</h3>
										<p>Feel Free to write us, <br>in <a href="contact.php">Contact Us</a> Section</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</footer>

		</div>
		<!-- END fh5co-page -->
		</div>

		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.flexslider-min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/jquery.countTo.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
