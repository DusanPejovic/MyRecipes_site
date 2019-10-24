<?php
session_start();


$username = "";
$email    = "";
$errors = array();


$db = mysqli_connect('localhost', 'root', '', 'registration');


if (isset($_POST['reg_user'])) {

  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (empty($password_1)) {
    array_push($errors, "Password is required");
  }
  if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
  }


  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }


  if (count($errors) == 0) {
    $password = md5($password_1);

    $query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
  }
}

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
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    } else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}
// CHANGE PASSWORD

if (isset($_POST['change_pass'])) {
  $newpassword_1 = $_POST['newpassword_1'];
  $newpassword_2 = $_POST['newpassword_2'];


  if (empty($newpassword_1) || empty($newpassword_2)) {
    array_push($errors, "Please fill all fields");
  }
  if ($newpassword_1 != $newpassword_2) {
    array_push($errors, "Two passwords do not match!");
  } else {
    $newpassword = md5($newpassword_1);
    $change_p_query = mysqli_query($db, "UPDATE users SET password = '$newpassword' WHERE username = '" . $_SESSION['username'] . "'");
    if ($change_p_query) {
      echo '<script language="javascript">';
      echo 'alert("Finished!")';
      echo '</script>';
    }
  }
}

// CHANGE EMAIL
if (isset($_POST['change_mail'])) {
  $newemail = $_POST['newemail'];

  if(empty($newemail)) {
    array_push($errors, "Please fill all fields");
  } else {
    $change_e_query = mysqli_query($db, "UPDATE users SET email = '$newemail' WHERE username = '".$_SESSION['username']."'");
    if($change_e_query) {
      echo '<script language="javascript">';
      echo 'alert("Finished!")';
      echo '</script>';
    }
  }
}

// CHANGE USERNAME
if (isset($_POST['change_name'])) {
  $newusername = $_POST['newusername'];

  if(empty($newusername)) {
    array_push($errors, "Please fill all fields");
  } else {
    $change_u_query = mysqli_query($db, "UPDATE users SET username = '$newusername' WHERE username = '".$_SESSION['username']."'");
  }
  if($change_u_query) {
    echo '<script language="javascript">';
    echo 'alert("Finished!")';
    echo '</script>';
  }
}

///
