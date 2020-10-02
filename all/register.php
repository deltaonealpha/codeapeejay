<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>EncredX Registration Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">

      <div class="row">
        <div class="col-md-11 offset=md-1">
          <div class="row">
            <div class="col-md-5 login-left">
              <img src="icon.png">
              <h3>Already Registered?</h3>
              <p>Click Below to login</p>
              <a href="login.php"><button type="button" class="btn btn-primary" name="login">Login</button></a>
            </div>
            <div class="col-md-7 register-right">
              <h2>Register Here</h2>
              <div class="register-form">
                  <form action="register.php" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name" name="user_name" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="School Name" name="school_name" required>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="E-Mail" name="user_email" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Username" name="user_uname" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password" name="user_pwd" required>
                </div>
                <input type="submit" class="btn btn-primary" name="register" placeholder="Submit" required>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </body>
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

            }
        
            if ($user['user_email'] == $email) {
              $message = "Email Already Exists";
                echo "<script type='text/javascript'>alert('$message');</script>";
            
            }
          }
        
          // Finally, register user if there are no errors in the form
          else{
        
          	$query = "INSERT INTO encredx (user_uname, user_email,user_school ,user_pwd, user_name,user_level)
          			  VALUES('$username', '$email', '$schoolname' ,'$pwd', '$name', 0)";
          	mysqli_query($db, $query);
          	$_SESSION['username'] = $username;
          	$_SESSION['success'] = "You are now logged in";
          	header('location: login.php');
          }
          
                
    }   
}
?>
</html>
