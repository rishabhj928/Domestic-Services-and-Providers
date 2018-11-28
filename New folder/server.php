<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database

$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	 array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
      $message1 = "Username already exists";
      echo "<script type='text/javascript'>alert('$message1');</script>";
    }

    if ($user['email'] === $email) {
      $message2 = "Email already exists";
      echo "<script type='text/javascript'>alert('$message2');</script>";
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	// $_SESSION['username'] = $username;
  	// $_SESSION['success'] = "You are now logged in";
  	header('location: login_signup.php');
  }
}
// end of registration

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      
      $query0 = "SELECT * FROM details WHERE username='$username'";
      $results0 = mysqli_query($db, $query0);
      
      //if the user already filled details
      if (mysqli_num_rows($results0) > 0) {
        header('location: index.php');
      } else {
        header('location: details.php');
      }
    }else {
      echo '<script>alert("Wrong username / password combination");</script>';
      array_push($errors, "Wrong username/password combination");
    }
  }
}
// end of login

if (isset($_POST['details_submit'])) {
  if (isset($_SESSION['username'])) {
    $user_name = $_SESSION['username'];
    $det_name = mysqli_real_escape_string($db, $_POST['details_name']);
    $det_phone = mysqli_real_escape_string($db, $_POST['details_phonee']);
    $det_address = mysqli_real_escape_string($db, $_POST['details_address']);
    //complete code to insert record in new table, also create a new table in mysql
    if (empty($user_name)) { array_push($errors, "Username is required"); }
    if (empty($det_name)) { array_push($errors, "Name is required"); }
    if (empty($det_phone)) { array_push($errors, "Phone is required"); }
    if (empty($details_address)) { array_push($errors, "Address is required"); }

    $query1= "INSERT INTO details(username, name, phone, address) VALUES('$user_name', '$det_name', '$det_phone', '$det_address')";
    
    if(mysqli_query($db, $query1)){
      header('location: index.php');
    }
    else{
      echo "<script type='text/javascript'>alert('Error, Please Try Again');</script>";
    }
  }
  else{
    header('location: login_signup.php');
  }
  

}

?>