<?php
session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL*/
$db = mysqli_connect("localhost", "s31htajf42lh", "Pott3rmor-", "code_sys");
 
// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
    
    if (isset($_POST['register'])) {
          // receive all input values from the form
          $username = mysqli_real_escape_string($db, $_POST['user_uname']);
          $schoolname = mysqli_real_escape_string($db, $_POST['school_name']);
          $name = mysqli_real_escape_string($db, $_POST['user_name']);
          $email = mysqli_real_escape_string($db, $_POST['user_email']);
          $pwd = mysqli_real_escape_string($db, $_POST['user_pwd']);
        
          // first check the database to make sure
          // a user does not already exist with the same username and/or email
          $user_check_query = "SELECT * FROM encredx WHERE user_name='$username' OR user_email='$email' LIMIT 1";
          $result = mysqli_query($db, $user_check_query);
          $user = mysqli_fetch_assoc($result);
        
          if ($user) { // if user exists
            if ($user['user_uname'] == $username) {
                $message = "Username Already Exists";
                echo "<script type='text/javascript'>alert('$message');</script>";
            //   	header('location: register.php');
            }
        
            if ($user['user_email'] == $email) {
              $message = "Email Already Exists";
                echo "<script type='text/javascript'>alert('$message');</script>";
            //   header('location: register.php');
            }
          }
        
          // Finally, register user if there are no errors in the form
          else{
        
          	$query = "INSERT INTO encredx (user_uname, user_email,user_school ,user_pwd, user_name,user_level)
          			  VALUES('$username', '$email', '$schoolname' ,'$pwd', '$name', 0)";
          	mysqli_query($db, $query);
          	$_SESSION['username'] = $username;
          	$_SESSION['success'] = "You are now logged in";
          	header('location: index.php');
          }
          
                
    }   
}
