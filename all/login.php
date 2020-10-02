<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>EncredX Login Page</title>
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
              <h3>Not registered yet?</h3>
              <p>Click below to Register</p>
              <a href="register.php"><button type="button" class="btn btn-primary" name="login">Register</button></a>
            </div>
            <div class="col-md-7 register-cent">
            <form action="login.php" method="POST">
              <h2>Login Here</h2>
              <div class="register-form">
                <div class="form-group">
                    
                  <input type="text" class="form-control" placeholder="Username" name = "user_uname">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password" name = "user_pwd">
                </div>
                <input type="submit" class="btn btn-primary" name="login">
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
    session_start();
    /* Attempt MySQL server connection. Assuming you are running MySQL*/
    
    $db = mysqli_connect("localhost", "s31htajf42lh", "Pott3rmor-", "code_sys");
    // Check connection
    if($db == false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }else{
        
    if(isset($_POST['login'])){

        // removes backslashes
         $username = stripslashes($_REQUEST['user_uname']);
        //escapes special characters in a string
         $username = mysqli_real_escape_string($db,$username);
         $password = stripslashes($_REQUEST['user_pwd']);
         $password = mysqli_real_escape_string($db,$password);
         //Checking is user existing in the database or not
        
        $query = "SELECT * FROM `encredx` WHERE user_uname='$username' and user_pwd='".$password."'";
        $result = mysqli_query($db,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if($rows==1){
        $_SESSION['username'] = $username;
        
        $lvlsql = "SELECT * FROM encredx WHERE user_uname='$username'";
        if($resultlvl = mysqli_query($db, $lvlsql)){
        if(mysqli_num_rows($resultlvl) > 0){
        
        $levelno;
        while($rowlvl = mysqli_fetch_array($resultlvl)){
            $levelno = $rowlvl['user_level'];
                }
            }
        }
        $_SESSION['level'] = $levelno;
        //URL
        $url = '';
        $urlsql = "SELECT * FROM encredx_data WHERE level_no='$levelno'";
        if($resulturl = mysqli_query($db, $urlsql)){
            if(mysqli_num_rows($resulturl) > 0){
                
                while($rowurl = mysqli_fetch_array($resulturl)){
                    $url = $rowurl['level_url'];
            }
        }
        }
        
        header("Location: $url ");
        exit();
    }
     else{
         echo "Invalid Login Information";
     }   
        
    
}
    
}
?>    
  </body>
</html>
