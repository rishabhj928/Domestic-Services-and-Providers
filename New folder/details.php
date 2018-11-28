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
	<title>Fill Details</title>
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
</style>

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
		
			<div class="col-half col-half-2" ng-app="myApp" style="background-image: url(images/kachamacha.jpg);width:100%;color: black;">
				<div style="align-content: center; margin-top: -30px;">
					<center>
						<h2><u>PLEASE ENTER YOUR DETAILS</u></h2> 
						<form id="formTest" method="post" action="details.php">
						    <table>
							    <tr>
								    <td><label for="txtName">Name<span class="required">*</span></label></td>
								    <td><input type="text" style="width:300px;" placeholder="Enter Your Name" id="txtName" name="details_name" required pattern="^[a-zA-Z ]+$"></td>
							    </tr>   
							    <tr>
								    <td><label for="txtPhone">Phone<span class="required">*</span></label></td>
								    <td><input type="tel" id="txtPhone" style="width:300px;" placeholder="XXXXX XXXXX" name="details_phonee" required pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$"></td>
							    </tr>
							    <tr>
								    <td><label for="txtAddress">Address<span class="required">*</span></label></td>
								    <td>
			                            <textarea class="field-long field-textarea" name="details_address" rows="3" placeholder="Enter Your Complete Address With Pincode . . . " id="txtAddress" style="width:300px;" required pattern="^[a-zA-Z0-9 ,-]+$" ></textarea>
								    </td>
								</tr>
								<tr>
								    <td><button type="submit" class="button" name="details_submit"><span>Submit</span></button></td>
							        <td><input class="button" type="reset" value="Clear" id="btnReset"></td>     
								</tr>
							</table>
						</form>
					</center>
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
