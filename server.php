<?php
session_start();
// initializing variables
$username                     = "";
$email                        = "";
$date_of_birth                = "";
$gender                       = "";
$blood_group                  = "";
$mobile_no                    = "";
$address                      = "";
$date_of_joining              = "";
$hobbies                      = "";
$interested_in                = "";
$passion                      = "";
$games_interested_in          = "";
$running_any_NGO              = "";
$youtube_channel              = "";
$profession                   = "";
$institute_name               = "";
$department                   = "";
$scienceand_technology        = "";
$start_ups                    = "";
$musical_instrument           = "";
$address_proof                = "";
$id_proof                     = "";
$personal_photo               = "";
$errors                       = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'rotract_club');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username                = mysqli_real_escape_string($db, $_POST['username']);
  $email                   = mysqli_real_escape_string($db, $_POST['email']);
  $password_1              = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2              = mysqli_real_escape_string($db, $_POST['password_2']);
  $date_of_birth           = mysqli_real_escape_string($db, $_POST['date_of_birth']);    
  $gender                  = mysqli_real_escape_string($db, $_POST['gender']);    
  $blood_group             = mysqli_real_escape_string($db, $_POST['blood_group']);    
  $mobile_no               = mysqli_real_escape_string($db, $_POST['mobile_no']);    
  $address                 = mysqli_real_escape_string($db, $_POST['address']);    
  $date_of_joining         = mysqli_real_escape_string($db, $_POST['date_of_joining']);    
  $hobbies                 = mysqli_real_escape_string($db, $_POST['hobbies']);    
  $interested_in           = mysqli_real_escape_string($db, $_POST['interested_in']);    
  $passion                 = mysqli_real_escape_string($db, $_POST['passion']);    
  $games_interested_in     = mysqli_real_escape_string($db, $_POST['games_interested_in']);    
  $running_any_NGO         = mysqli_real_escape_string($db, $_POST['running_any_NGO']);    
  $youtube_channel         = mysqli_real_escape_string($db, $_POST['youtube_channel']);    
  $profession              = mysqli_real_escape_string($db, $_POST['profession']);    
  $institute_name          = mysqli_real_escape_string($db, $_POST['institute_name']);    
  $department              = mysqli_real_escape_string($db, $_POST['department']);    
  $scienceand_technology   = mysqli_real_escape_string($db, $_POST['scienceand_technology']);    
  $start_ups               = mysqli_real_escape_string($db, $_POST['start_ups']);    
  $musical_instrument      = mysqli_real_escape_string($db, $_POST['musical_instrument']);    
  $address_proof           = mysqli_real_escape_string($db, $_POST['address_proof']);    
  $id_proof                = mysqli_real_escape_string($db, $_POST['id_proof']);    
  $personal_photo          = mysqli_real_escape_string($db, $_POST['personal_photo']);
//  
//  	

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {	array_push($errors, "The two passwords do not match");}
  if (empty($date_of_birth)) { array_push($errors, "Date_of_birth is required"); }
  if (empty($gender )) { array_push($errors, "Gender is required"); }
  if (empty($blood_group)) { array_push($errors, "Blood group number is required"); }
  if (empty($mobile_no)) { array_push($errors, "Mobile number is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($date_of_joining)) { array_push($errors, " Date of joiningis required"); }
  if (empty($hobbies)) { array_push($errors, "Hobbies is required"); }
  if (empty($interested_in)) { array_push($errors, "Interested  is required"); }
  if (empty($passion)) { array_push($errors, "Passion is required"); }
  if (empty($games_interested_in)) { array_push($errors, "Games interested is required"); }
  if (empty($running_any_NGO)) { array_push($errors, "Running any NGO"); }
  if (empty($youtube_channel)) { array_push($errors, "Youtube channel is required"); }
  if (empty($profession)) { array_push($errors, "Profession is required"); }
  if (empty($institute_name)) { array_push($errors, "Institue name is required"); }
  if (empty($department)) { array_push($errors, "Department is required"); }
  if (empty($scienceand_technology)) { array_push($errors, "technology intersted is required"); }
  if (empty($start_ups)) { array_push($errors, "start up is required"); }
  if (empty($musical_instrument)) { array_push($errors, "musical instrument is required"); }
  if (empty($address_proof)) { array_push($errors, "address proof is required"); }
  if (empty($id_proof)) { array_push($errors, "id proof is required"); }
  if (empty($personal_photo)) { array_push($errors, "personal photo is required"); }
//  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }
	
  if (count($errors) == 0) {
  	$password = md5($password_1);
    $key_hint = ($password_1);
  	$query = "INSERT INTO users (username, email, password, date_of_birth, gender, blood_group, mobile_no, address, date_of_joining, hobbies, interested_in, passion, games_interested_in, running_any_NGO, youtube_channel, profession, department, start_ups, musical_instrument, address_proof, id_proof, personal_photo, institute_name, scienceand_technology, key_hint) 
  			  VALUES('$username', '$email', '$password', '$date_of_birth', '$gender', '$blood_group', '$mobile_no', '$address', '$date_of_joining', '$hobbies', '$interested_in', '$passion', '$games_interested_in', '$running_any_NGO', '$youtube_channel', '$profession', '$department', '$start_ups', '$musical_instrument', '$address_proof', '$id_proof', '$personal_photo', '$institute_name', '$scienceand_technology', '$key_hint')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// ... 
// LOGIN USER
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
	  $_SESSION['email'] = $password;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>