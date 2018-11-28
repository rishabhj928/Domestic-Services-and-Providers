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
<?php
	$price = array(
		"AutoMechanic" => "50",
		"Carpenter" => "40",
		"ChildCare" => "60",
		"Driver" => "50",
		"Electrician" => "40",
		"Gardener" => "35",
		"House" => "40",
		"MakeupArtist" => "35",
		"Non-VegCook" => "60",
		"OldAgeCare" => "50",
		"Painter" => "50",
		"PatientCare" => "55",
		"Plumber" => "50",
		"Tailor" => "30",
		"Tutor" => "60",
		"VegCook" => "60",
		"Vehicle" => "35",
	);
	if(isset($_GET["servicename"])){
		$xyz = $_GET["servicename"];
		$xyz = str_replace(' ', '', $xyz);
	}
?>
<!DOCTYPE html>
<html class="no-js">
<script src="angular.min.js"></script>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Domestic Services and Providers</title>
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

			.buttonb {
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
			.buttonb span {
				cursor: pointer;
				display: inline-block;
				position: relative;
				transition: 0.3s;
			}
			.buttonb span:after {
				content: '\00ab';
				position: absolute;
				opacity: 0;
				top: 0;
				left: -20px;
				transition: 0.3s;
			}
			.buttonb:hover span {
				padding-left: 25px;
			}
			.buttonb:hover span:after {
				opacity: 1;
				left: 0;
			}
			#firsta{
				display: none;
			}
			#firstb{
				display: none;
			}
			#last{
				display: none;
			}
			#confirm{
				display: none;
			}
			/*#ptmnxt{
				display: none;
			}
			#dstpnxt{
				display: none;
			}*/
			#newfinaldiv{
				display: none;
			}
			.tooltipp {
			    position: relative;
			    display: inline-block;
			}
			.tooltipp .tooltiptextt {
				margin-left: 10px;
			    visibility: hidden;
			    background-color: #0099dd;
			    /*background-color: #334466;*/
			    text-align: center;
			    border-radius: 6px;
			    padding: 10px 15px;
			    width: 200px;
			    position: absolute;
			    z-index: 1;
			    top: -5px;
			    left: 105%;
			    color: white;
			}
			.tooltipp:hover .tooltiptextt {
			    visibility: visible;
			}
			.containerr {
				margin-left: 35px;
			    display: block;
			    position: relative;
			    padding-left: 35px;
			    margin-bottom: 12px;
			    cursor: pointer;
			    font-size: 22px;
			    -webkit-user-select: none;
			    -moz-user-select: none;
			    -ms-user-select: none;
			    user-select: none;
			}
			.containerr input {
			    position: absolute;
			    opacity: 0;
			    cursor: pointer;
			    height: 0;
			    width: 0;
			}
			.checkmarkk {
			    position: absolute;
			    top: 0;
			    left: 0;
			    margin-top: 2px;
			    margin-left: 1px;
			    height: 22px;
			    width: 22px;
			    background-color: #eee;
			}
			.containerr:hover input ~ .checkmarkk {
			    background-color: #ccc;
			}
			.containerr input:checked ~ .checkmarkk {
			    background-color: #2196F3;
			}
			.checkmarkk:after {
			    content: "";
			    position: absolute;
			    display: none;
			}
			.containerr input:checked ~ .checkmarkk:after {
			    display: block;
			}
			.containerr .checkmarkk:after {
			    left: 9px;
			    top: 5px;
			    width: 5px;
			    height: 10px;
			    border: solid white;
			    border-width: 0 3px 3px 0;
			    -webkit-transform: rotate(45deg);
			    -ms-transform: rotate(45deg);
			    transform: rotate(45deg);
			}
			.containerrr {
			    display: block;
			    position: relative;
			    padding-left: 35px;
			    margin-bottom: 12px;
			    cursor: pointer;
			    font-size: 22px;
			    -webkit-user-select: none;
			    -moz-user-select: none;
			    -ms-user-select: none;
			    user-select: none;
			}
			.containerrr input {
			    position: absolute;
			    opacity: 0;
			    cursor: pointer;
			}
			.radiomarkk {
			    position: absolute;
			    top: 0;
			    left: 0;
			    height: 25px;
			    width: 25px;
			    background-color: #eee;
			    border-radius: 50%;
			}
			.containerrr:hover input ~ .radiomarkk {
			    background-color: #ccc;
			}
			.containerrr input:checked ~ .radiomarkk {
			    background-color: #2196F3;
			}
			.radiomarkk:after {
			    content: "";
			    position: absolute;
			    display: none;
			}
			.containerrr input:checked ~ .radiomarkk:after {
			    display: block;
			}
			.containerrr .radiomarkk:after {
			 	top: 9px;
				left: 9px;
				width: 8px;
				height: 8px;
				border-radius: 50%;
				background: white;
			}
		</style>
		<script type="text/javascript">
			var servType, dat, noofPers, time;
			// var pricebypt, pricebyft;
			var f2 = '<?php echo $price[$xyz]; ?>';

			function nexta() {
				var x = document.getElementById("first");
				var y = document.getElementById("firsta");
				var z = document.getElementById("firstb");
				x.style.display = "none";
			 	if(document.getElementById("pt").checked)
			 		y.style.display = "block";
			 	if(document.getElementById("ft").checked)
			 		z.style.display = "block";
			}
			function backbypt() {
				document.getElementById("ptd").value="";
				document.getElementById("ptnop").value="";
				document.getElementById("check1").checked=true;
				document.getElementById("check2").checked=false;
				document.getElementById("check3").checked=false;
				document.getElementById("check4").checked=false;
				document.getElementById("firsta").style.display="none";
				document.getElementById("first").style.display="block";
			}
			function backbyft() {
				document.getElementById("ftd").value="";
				document.getElementById("ftnop").value="";
				document.getElementById("eighttosix").checked=true;
				document.getElementById("ninetoseven").checked=false;
				document.getElementById("firstb").style.display="none";
				document.getElementById("first").style.display="block";	
			}
			function nexttocbypt() {
				var aa = document.getElementById("ptd").value;
				var bb = document.getElementById("ptnop").value;
				if(!bb || !aa){
					alert("Please fill out all fields");
				}
				else{
					servType = "Part Time";
					dat = aa;
					noofPers = bb;
					var one=0,two=0,three=0,four=0;
					if(document.getElementById("check1").checked)
						one=1;
					if(document.getElementById("check2").checked)
						two=2;
					if(document.getElementById("check3").checked)
						three=4;
					if(document.getElementById("check4").checked)
						four=8;
					sum=one+two+three+four;
					if(sum==1)
						time = "09:00 AM to 12:00 PM";
					else if(sum==2)
						time = "12:00 PM to 03:00 PM";
					else if(sum==4)
						time = "03:00 PM to 06:00 PM";
					else if(sum==8)
						time = "06:00 PM to 09:00 PM";
					else if(sum==3)
						time = "09:00 AM to 03:00 PM";
					else if(sum==6)
						time = "12:00 PM to 06:00 PM";
					else if(sum==12)
						time = "03:00 PM to 09:00 PM";

					// var f1;
					// if(sum==3 || sum==6 || sum==12)
					// 	f1=6;
					// else
					// 	f1=3;
					
					// pricebypt = f1*noofPers*f2;

					document.getElementById("firsta").style.display="none";
					document.getElementById("firstb").style.display="none";
					document.getElementById("confirm").style.display="block";

					document.getElementById("td1").innerHTML = servType;
					document.getElementById("td2").innerHTML = noofPers;
					document.getElementById("td3").innerHTML = dat;
					document.getElementById("td4").innerHTML = time;
					var ghjk = Math.floor(Math.random() * 1000000);
					document.getElementById("td5").innerHTML = ghjk;
					// document.getElementById("td5").innerHTML = pricebypt;
					// document.getElementById("finaltd1").innerHTML = pricebypt;
					// document.getElementById("amt").innerHTML = pricebypt;
					// document.getElementById("aamt").innerHTML = pricebypt;
				}
			}
			function nexttocbyft() {
				var cc = document.getElementById("ftd").value;
				var dd = document.getElementById("ftnop").value;
				if(!cc || !dd){
					alert("Please fill out all fields");
				}
				else{
					servType = "Full Time";
					dat = cc;
					noofPers = dd;
					if(document.getElementById("eighttosix").checked)
				 		time = "08:00 AM to 06:00 PM"
				 	if(document.getElementById("ninetoseven").checked)
				 		time = "09:00 AM to 07:00 PM"
					document.getElementById("firsta").style.display="none";
					document.getElementById("firstb").style.display="none";
					document.getElementById("confirm").style.display="block";
					
					// pricebyft = noofPers*10*f2;

					document.getElementById("td1").innerHTML = servType;
					document.getElementById("td2").innerHTML = noofPers;
					document.getElementById("td3").innerHTML = dat;
					document.getElementById("td4").innerHTML = time;
					var ghjk = Math.floor(Math.random() * 1000000);
					document.getElementById("td5").innerHTML = ghjk;
					// document.getElementById("td5").innerHTML = pricebyft;
					// document.getElementById("finaltd1").innerHTML = pricebyft;
					// document.getElementById("amt").innerHTML = pricebyft;
					// document.getElementById("aamt").innerHTML = pricebyft;
				}
			}
			function backbyc() {
				if(document.getElementById("pt").checked)
			 		document.getElementById("firsta").style.display = "block";
			 	if(document.getElementById("ft").checked)
			 		document.getElementById("firstb").style.display = "block";
				document.getElementById("confirm").style.display="none";
			}

			function nextbyc() {
				// var asdf = document.getElementById("td5").value;
				document.getElementById("confirm").style.display="none";
				// document.getElementById("last").style.display="block"; // - price
				document.getElementById("newfinaldiv").style.display="block";
				
				var x=0;var temp1=15;
			    var intervalId = setInterval(function(){
			        document.getElementById("span1").innerHTML=temp1;
			        temp1--;
			        if(++x==15)
			            clearInterval(intervalId)
			    },1000);

				window.setTimeout(function(){
			        window.location.href = "index.php";
			    }, 16000);
				
				// document.getElementById("finaltd1").innerHTML = asdf;
			}

			// function paytm() {
			// 	document.getElementById('last').style.display = 'none';
			// 	document.getElementById('ptmnxt').style.display = 'block';
				// window.setTimeout(function(){
			 //        window.location.href = "index.php";
			 //    }, 20000);	
			// }
			// function doorstep(){
			// 	document.getElementById('last').style.display = 'none';
			// 	document.getElementById('dstpnxt').style.display = 'block';
			// 	window.setTimeout(function(){
			//         window.location.href = "index.php";
			//     }, 10000);
			// }

			function Scrolldown() {
			     window.scroll(0,300); 
			}
			window.onload = Scrolldown;

			window.onload = ()=>{
			  let checks = document.querySelectorAll('input[type=checkbox]');
			  checks[0].addEventListener('change', function(){
			    if(this.checked){
			      checks[2].checked = false;
			      checks[3].checked = false;
			    }
			  });
			  checks[1].addEventListener('change', function(){
			    if(this.checked){
			      checks[3].checked = false;
			    }
			  });
			  checks[2].addEventListener('change', function(){
			    if(this.checked){
			      checks[0].checked = false;
			    }
			  });
			  checks[3].addEventListener('change', function(){
			    if(this.checked){
			      checks[0].checked = false;
			      checks[1].checked = false;      
			    }
			  });    
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
								<h1 id="fh5co-logo"><a href="index.php">Domestic Services and Providers</a></h1>
								<nav id="fh5co-menu-wrap" role="navigation">
									<ul class="sf-menu" id="fh5co-primary-menu">
										<li>
											<!-- logged in user information -->
		    								<?php  if (isset($_SESSION['username'])) : ?>
		    									<a href="logout.php" style="color: red;"><?php echo $_SESSION['username']; ?> logout</a>
		    								<?php else : ?>
		    									<a href="login_signup.php">Login/Signup</a>
		    								<?php endif ?>
										</li>
										<li>
									<a href="#" class="fh5co-sub-ddown">Services</a>
									 <ul class="fh5co-sub-menu">
									 	<li>
											<a href="" class="fh5co-sub-ddown">Cooking</a>
											<ul class="fh5co-sub-menu">
												<li><a href="service.php?servicename=Veg%20Cook">Veg Cook</a></li>
												<li><a href="service.php?servicename=Non-Veg%20Cook">Non-Veg Cook</a></li>
											</ul>
										</li>
									 	<li>
											<a href="" class="fh5co-sub-ddown">Cleaning</a>
											<ul class="fh5co-sub-menu">
												<li><a href="service.php?servicename=Vehicle">Vehicle</a></li>
												<li><a href="service.php?servicename=House">House</a></li>
											</ul>
										</li>
										<li>
											<a href="" class="fh5co-sub-ddown">Maintenance</a>
											<ul class="fh5co-sub-menu">
												<li><a href="service.php?servicename=Plumber">Plumber</a></li>
												<li><a href="service.php?servicename=Electrician">Electrician</a></li>
												<li><a href="service.php?servicename=Auto%20Mechanic">Auto Mechanic</a></li>
												<li><a href="service.php?servicename=Carpenter">Carpenter</a></li>
											</ul>
										</li>
										<li>
											<a href="" class="fh5co-sub-ddown">We Care</a>
											<ul class="fh5co-sub-menu">
												<li><a href="service.php?servicename=Child%20Care">Child Care</a></li>
												<li><a href="service.php?servicename=Patient%20Care">Patient Care</a></li>
												<li><a href="service.php?servicename=Old%20Age%20Care">Old Age Care</a></li>
											</ul>
										</li>
										<li>
											<a href="" class="fh5co-sub-ddown">Others</a>
											<ul class="fh5co-sub-menu">
												<li><a href="service.php?servicename=Tailor">Tailor</a></li>
												<li><a href="service.php?servicename=Tutor">Tutor</a></li>
												<li><a href="service.php?servicename=Makeup%20Artist">Makeup Artist</a></li>
												<li><a href="service.php?servicename=Gardener">Gardener</a></li>
												<li><a href="service.php?servicename=Driver">Driver</a></li>
												<li><a href="service.php?servicename=Painter">Painter</a></li>
											</ul>
										</li>
									</ul>
								</li>
										<li><a href="about.php">About</a></li>
										<li><a href="contact.php">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</header>		
				</div>

				<aside id="fh5co-hero" class="js-fullheight">
				<?php
					if(isset($_GET["servicename"])){
						$abc = $_GET["servicename"];
						$abc = str_replace(' ', '', $abc);
					}
					$heading1 = array(
						"AutoMechanic" => "Providing Most of the Auto Mechanic Services at Doorstep",
						"Carpenter" => "Providing all types of Carpenter Services",
						"ChildCare" => "Best Child Care Services",
						"Driver" => "Skilled Drivers",
						"Electrician" => "Well Experienced Electricians",
						"Gardener" => "Trained and Skilled Gardeners",
						"House" => "Best House Cleaning Services",
						"MakeupArtist" => "Skilled Makeup Artist",
						"Non-VegCook" => "Skilled Chefs Cooking Non-Veg Food",
						"OldAgeCare" => "Nannies Handling Old Age Care People",
						"Painter" => "Good Designers and Painters",
						"PatientCare" => "Well Experienced Patient Care Persons",
						"Plumber" => "Experienced Plumbers",
						"Tailor" => "Skilled Tailors",
						"Tutor" => "Well Experienced Tutors",
						"VegCook" => "Skilled Chefs Cooking Veg Food",
						"Vehicle" => "Best Vehicle Cleaning Services",
					);
					$heading2 = array(
						"AutoMechanic" => "Best Skilled Auto Mechanic Workers",
						"Carpenter" => "Best Carpenter Professionals",
						"ChildCare" => "Providing Skilled Maids for Child Care",
						"Driver" => "Good Skills in Driving",
						"Electrician" => "Good Electricians",
						"Gardener" => "Experienced Gardening Skills",
						"House" => "Satisfaction Gauranteed for Cleaning",
						"MakeupArtist" => "Professional Makeup Artist",
						"Non-VegCook" => "Well Experienced Cooks",
						"OldAgeCare" => "Well Communicative Nannies",
						"Painter" => "Satisfaction Gauranteed for Paintings ",
						"PatientCare" => "Best Patient Care Services",
						"Plumber" => "Best Plumber Services",
						"Tailor" => "Satisfaction Gauranteed",
						"Tutor" => "Satisfaction Gauranteed",
						"VegCook" => "Well Experienced Cooks",
						"Vehicle" => "Satisfaction Gauranteed",
					);
				?>
				<div class="flexslider js-fullheight">
					<ul class="slides">
						<li style="background-image: url(images/services/<?php echo $abc."1.jpg"?>)">
					   		<div class="overlay-gradient"></div>
					   		<div class="container">
					   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<h2><?php echo $heading1[$abc]; ?></h2>
					   				</div>
					   			</div>
					   		</div>
					   	</li>

					   	<li style="background-image: url(images/services/<?php echo $abc."2.jpg"?>)">
					   		<div class="overlay-gradient"></div>
					   		<div class="container">
					   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<h2><?php echo $heading2[$abc]; ?></h2>
					   				</div>
					   			</div>
					   		</div>
					   	</li>
				  	</ul>
			  	</div>
			  	
				<div class="col-half col-half-2" ng-app="myApp"style="background-image:url(images/kachamacha.jpg);width:100%;color:black;">
					<div style="align-content: center;" id="first">
						<h2>
							Selected Service: 
							<?php
						    if(isset($_GET["servicename"]))
						        echo $_GET["servicename"];
							?>
						</h2>
						<div class="container" style="width: 350px; float: left; cursor: default;">
							<h2 style="margin-bottom: 30px;margin-top: -30px;">Select Service Type</h2>
						</div>
						<br>
						<div class="container" style="width: 200px; float: left; cursor: default; margin-left: -340px;">
							<label class="container" style="width: 170px; float: left;">Part Time
								<input type="radio" id="pt" checked="checked" name="radio">
			 					<span class="checkmark"></span>
							</label>
							
							<label class="container" style="width: 170px; float: left; ">Full Time
								<input type="radio" id="ft" name="radio">
								<span class="checkmark"></span>
							</label>
						</div>
						<div class="container" style="float: left; cursor: default;margin-top: -10px;">
							<button class="button" onclick="nexta()"><span>Next</span></button>
						</div>
					</div>
					<!-- ngv -->
					<div style="align-content: center;" id="firsta">
						<h2 style="margin-bottom: 30px;">
							Part Time 
							<?php
						    if(isset($_GET["servicename"]))
						        echo $_GET["servicename"]." ";
							?>
							Service
						</h2>
						<label class="container" style="width: 200px; float: left;font-weight: normal;cursor: default;">Date</label>
						<input type="date" id="ptd" name="date" style="margin-top: 30px;" autofocus="autofocus">
						<br>
						<label class="container" style="width: 200px; float: left; margin-left: -200px;font-weight: normal;cursor: default;">No of Persons</label>
						<input type="number" id="ptnop" name="noofp" style="margin-top: 30px;width: 170px;">
						<div class="tooltipp">
							<img src="images/ques.png" style="width: 30px;height: 30px;cursor: pointer;">
							<span class="tooltiptextt">
								No of persons you want to call for service.
							</span>
						</div>
						<br><br>
						<div style="font-size: 20px;color: black; cursor: default;margin-left: 35px;">
							Select Time Slot
							<div class="tooltipp" style="margin-left: 10px; margin-top: -100px;cursor: default;">
								<img src="images/ques.png" style="width: 30px;height: 30px;cursor: pointer;">
								<span class="tooltiptextt" style="font-size: 16px; width: 250px;">
									You can select maximum two consecutive slots only as it is part time service.
								</span>
							</div>
						</div>
						<br>
						<label class="containerr" style="width: 250px; font-size: 18px;font-weight: normal;">
				  			<p style="margin-left: 0px;color: black;">09:00 AM to 12:00 PM</p>
				  			<input type="checkbox" class="checks" id="check1" checked="checked">
				  			<span class="checkmarkk"></span>
				  		</label>
						<label class="containerr" style="width: 250px; font-size: 18px;font-weight: normal;margin-top: -10px;">
				  			<p style="margin-left: 0px;color: black;">12:00 PM to 03:00 PM</p>
				  			<input type="checkbox" class="checks" id="check2">
				  			<span class="checkmarkk"></span>
				  		</label>
				  		<label class="containerr" style="width: 250px; font-size: 18px;font-weight: normal;margin-top: -10px;">
				  			<p style="margin-left: 0px;color: black;">03:00 PM to 06:00 PM</p>
				  			<input type="checkbox" class="checks" id="check3">
				  			<span class="checkmarkk"></span>
				  		</label>
				  		<label class="containerr" style="width: 250px; font-size: 18px;font-weight: normal;margin-top: -10px;">
				  			<p style="margin-left: 0px;color: black;">06:00 PM to 09:00 PM</p>
				  			<input type="checkbox" class="checks" id="check4">
				  			<span class="checkmarkk"></span>
				  		</label>

						<button class="buttonb" onclick="backbypt()" style="margin-left: 30px;"><span>Back</span></button>
						<button class="button" style="margin-left: 60px;" onclick="nexttocbypt()"><span>Next</span></button>
					</div>
					<!-- gfcgh -->
					<div style="align-content: center;" id="firstb">
						<h2 style="margin-bottom: 30px;">
							Full Time 
							<?php
						    if(isset($_GET["servicename"]))
						        echo $_GET["servicename"]." ";
							?>
							Service
						</h2>
						<label class="container" style="width: 200px; float: left;font-weight: normal;cursor: default;">Date</label>
						<input type="date" id="ftd" name="date" style="margin-top: 30px;" autofocus="autofocus">
						<br>
						<label class="container" style="width: 200px; float: left; margin-left: -200px;font-weight: normal;cursor: default;">No of Persons</label>
						<input type="number" id="ftnop" name="noofp" style="margin-top: 30px;width: 170px;">
						<div class="tooltipp">
							<img src="images/ques.png" style="width: 30px;height: 30px;">
							<span class="tooltiptextt">
								No of persons you want to call for service.
							</span>
						</div>
						<br><br><br>
						<label class="containerrr" style="width: 300px; float: left; margin-left: 35px;font-weight: normal;font-size: 18px;">08:00 AM to 06:00 PM
							<input type="radio" id="eighttosix" checked="checked" name="pttime">
		 					<span class="radiomarkk"></span>
						</label>
						<br><br>
						<label class="containerrr" style="width: 300px; float: left;margin-left: 35px; font-weight: normal;font-size: 18px;">09:00 AM to 07:00 PM
							<input type="radio" id="ninetoseven" name="pttime">
							<span class="radiomarkk"></span>
						</label>
						<br><br>
						<button class="buttonb" onclick="backbyft()"><span>Back</span></button>
						<button class="button" style="margin-left: 60px;" onclick="nexttocbyft()"><span>Next</span></button>
					</div>
					<!-- bfc -->
					<div style="align-content: center;" id="confirm">
						<h2 style="margin-bottom: 30px;cursor: default;">Your <?php
						    if(isset($_GET["servicename"]))
						        echo $_GET["servicename"]." ";
							?> Service Booking Details</h2>
						<div class="container" style="cursor: default;">
							<table>
								<tr>
									<th>Service Type</th>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td id="td1"></td>
								</tr>
								<tr>
									<th>No of Persons</th>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td id="td2"></td>
								</tr>
								<tr>
									<th>Date</th>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td id="td3"></td>
								</tr>
								<tr>
									<th>Time</th>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td id="td4"></td>
								</tr>
								<tr>
									<th>
										Secret Code
										<div class="tooltipp">
											<img src="images/ques.png" style="width: 30px;height: 30px;">
											<span class="tooltiptextt" style="font-size: 15px;">
												This Secret code to be kept by you to confirm the person who would give service to you.
											</span>
										</div>
									</th>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td id="td5"></td>
								</tr>
							</table>
						</div>
						<button class="buttonb" onclick="backbyc()"><span>Back</span></button>
						<button class="button" style="margin-left: 60px;" onclick="nextbyc()"><span>Confirm</span></button>
					</div>
					<!-- <div style="align-content: center;" id="last">
						<h2 style="margin-bottom: 30px;cursor: default;">Your Details are booked</h2>
						<br>
						<table style="border-collapse: collapse;">
							<tr style="padding-top: .20em;padding-bottom: .20em;">
								<th style="padding-top: .5em;padding-bottom: .5em;">Final Amount</th>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td id="finaltd1"></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>
									<div class="tooltipp">
										<img src="images/ques.png" style="width: 30px;height: 30px;">
										<span class="tooltiptextt">
											Total Amount to be paid either by Paytm or at doorstep after service.
										</span>
									</div>
								</td>
							</tr>
							<br>
							<tr style="padding-top: .20em;padding-bottom: .20em;">
								<th>Secret Code</th>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td id="finaltd2"></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>
									<div class="tooltipp">
										<img src="images/ques.png" style="width: 30px;height: 30px;">
										<span class="tooltiptextt">
											This Secret code to be kept by you to confirm the person who would give service to you.
										</span>
									</div>
								</td>
							</tr>
						</table>
						<br><br>
						<button class="button" id="ptmbtn" style="margin-left: 60px;height: 80px;" onclick="paytm()"><span>Pay via Patym</span></button>
						<button class="button" id="dstpbtn" style="margin-left: 60px;height: 80px;" onclick="doorstep()"><span>Pay at Doorstep</span></button>
					</div> -->
					<!-- <div style="align-content: center;" id="ptmnxt">
						<h2 style="margin-bottom: 30px;cursor: default;">Amount <span id="amt"></span> Due.</h2>
						<br><br>
						<img src="images/qr.png" style="width: 200px;height: 200px;"><br><br>
						<h2 style="margin-bottom: 30px;cursor: default;">Thank You For booking service from Domestic Services and Providers. We will contact you soon regarding the service.</h2>
					</div>
					<div style="align-content: center;" id="dstpnxt">
						<h2 style="margin-bottom: 30px;cursor: default;">Amount <span id="aamt"></span> Due to be paid at doorstep.</h2>
						<br><br>
						<h2 style="margin-bottom: 30px;cursor: default;">Thank You For booking service from Domestic Services and Providers. We will contact you soon regarding the service.</h2>
					</div> -->
					<div id="newfinaldiv">
						<div class="container">
							<h3>Thank you for Booking Service</h3>
							<br>
							<p>We will contact you soon regarding the service</p>
							<br><br>
							<p style="font-size: 14px;">This page will redirect to home page in <span id="span1">15</span> seconds</p>
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
											<li><a href="service.html">Domestic Services and Providers</a></li>
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
