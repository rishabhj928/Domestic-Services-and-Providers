<?php include('server.php') ?>
<!DOCTYPE html>
<html class="no-js">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Signup</title>
  <link rel="shortcut icon" href="images/title_icon.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Simple Line Icons -->
  <link rel="stylesheet" href="css/simple-line-icons.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- Superfish -->
  <link rel="stylesheet" href="css/superfish.css">
  <!-- Flexslider  -->
  <link rel="stylesheet" href="css/flexslider.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="style.css">


  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  <style>
    #message {
      display:none;
      background: #f1f1f1;
      color: #000;
      position: relative;
      padding: 20px;
      margin-top: 10px;
      width: 300px;
    }
    #message p {
        padding: 0px 35px;
    }
    .valid {
        color: green;
    }
    .valid:before {
        position: relative;
        left: -35px;
        content: "✔";
    }
    .invalid {
        color: red;
    }
    .invalid:before {
        position: relative;
        left: -35px;
        content: "✖";
    }
    #errorabc{
      display: none;
      background: #f1f1f1;
      color: #000;
      position: relative;
      padding: 20px;
      margin-top: 10px;
      width: 300px;
    }
    #haha{
      opacity: 0.65;
      cursor: not-allowed;
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
            <a href="service.html" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
            <h1 id="fh5co-logo"><a href="index.php">Domestic Services and Providers</a></h1>
            <!-- START #fh5co-menu-wrap -->
            <nav id="fh5co-menu-wrap" role="navigation">
              <ul class="sf-menu" id="fh5co-primary-menu">
                <li><a class="active">Signup</a></li>
                
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </header>   
    </div>
    <!-- end:fh5co-header -->
    
    <div id="fh5co-blog-section" style="background-image: url(images/lsbi.jpg);">
      <div class="header">
        <h2>Register</h2>
      </div>
      <form method="post" action="register.php">
        <div class="input-group">
          <label>Username</label>
          <input type="text"  name="username" placeholder="username" autofocus="autofocus" value="<?php echo $username; ?>" required>
        </div>
        <div class="input-group">
          <label>Email</label>
          <input type="email" placeholder="example@domain.com" name="email" value="<?php echo $email; ?>" required>
        </div>
        <div class="input-group">
          <label>Password</label>
          <input type="password" id="psw" name="password_1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required="">
        </div>
        <div id="message">
          <label>Password must contain the following:</label>
          <label id="letter" class="invalid" style="margin-left: 35px;">A <b>lowercase</b> letter</label><br>
          <label id="capital" class="invalid" style="margin-left: 35px;">A <b>capital (uppercase)</b> letter</label><br>
          <label id="number" class="invalid" style="margin-left: 35px;">A <b>number</b></label><br>
          <label id="length" class="invalid" style="margin-left: 35px;">Minimum <b>8 characters</b></label>
        </div>
        <div class="input-group">
          <label>Confirm password</label>
          <input type="password" id="psw2" name="password_2" onkeyup="confpass()" onchange="confpass()">
        </div>
        <div id="errorabc">
          <label style="color: red;">✖&nbsp;&nbsp;&nbsp;The Two Passwords don't match</label>
        </div>
        <div class="input-group">
          <button type="submit" id="haha" class="btn" name="reg_user">Register</button>
        </div>
        <p>
          Already a member? <a href="login_signup.php">Sign in</a>
        </p>
      </form>
    </div>
    <footer id="footer">
      <div class="copyright text-center">
        <p>
          <small>&copy; 2018 <a href="index.php">Domestic ServicesDomestic Services and Providers</a>. All Rights Reserved. <br> Made with <i class="icon-heart3"></i> by KC252</a></small>
        </p>
      </div>
    </footer>
  

  </div>
  <!-- END fh5co-page -->

  </div>
  <!-- END fh5co-wrapper -->
  <script>
    document.getElementById("haha").setAttribute("disabled","disabled");
    var myInput = document.getElementById("psw");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
    }

    myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
    }

    myInput.onkeyup = function() {
      var lowerCaseLetters = /[a-z]/g;
      if(myInput.value.match(lowerCaseLetters)) {  
        letter.classList.remove("invalid");
        letter.classList.add("valid");
      } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
      }

      var upperCaseLetters = /[A-Z]/g;
      if(myInput.value.match(upperCaseLetters)) {  
        capital.classList.remove("invalid");
        capital.classList.add("valid");
      } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
      }

      var numbers = /[0-9]/g;
      if(myInput.value.match(numbers)) {  
        number.classList.remove("invalid");
        number.classList.add("valid");
      } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
      }

      if(myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
      } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
      }
    }

    function confpass() {
      var pass1 = document.getElementById("psw").value;
      var pass2 = document.getElementById("psw2").value;
      if(pass1!=pass2){
        document.getElementById("errorabc").style.display="block";
        document.getElementById("haha").setAttribute("disabled","disabled");
      }
      else{
        document.getElementById("errorabc").style.display="none";
        var kala = document.getElementById("haha");
        kala.removeAttribute("disabled");
        kala.style.opacity="1";
        kala.style.cursor="pointer";
      }
    }
  </script>

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

