<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <link rel="stylesheet" href="style-signup.css">
    <meta charset="utf-8">
    <title>EncredX | Signup</title>
  </head>

  <body>
<form method="post" id="signup-form" action="signup-conn.php">
<div class="signup-page">
<div class="field">
  <h1 style="font-size:2.2em"> Register </h1><br>
<h2>Name</h2>
  <div class="control">
    <input class="input" name="p_name" type="text" placeholder="Name">
  </div>
</div>
<h2>School Name</h2>
<div class="control">
  <input class="input" type="text" name="p_sname" placeholder="Name">
</div>
</div>

<div class="field">
  <h3>Email</h3>
  <div class="control">
    <input class="input" type="email" name="p_email" placeholder="E-mail">
  </div>
</div>
<div class="field">
  <h3>Username</h3>
  <div class="control">
    <input class="input" type="text" name="p_uname" placeholder="Username">
  </div>
</div>
<div class="field">
  <h3>Password</h3>
  <div class="control">
    <input class="input" type="password" name="p_pwd" placeholder="Password">
  </div>
</div>


<div class="field is-grouped">
  <div class="control">
    <button class="button is-link">Submit</button>
  </div>
  <div class="control">
    <button class="button is-text is-white">Cancel</button>
  </div>
</div>
</form>
  <!-- <form method="post"  id="signup-form"  action="signup-conn.php">
    <h1>Register Here</h1>
    <input class="text" type="text" name="user_name" placeholder="Name"><br>
    <input class="text" type="text" name="user_uname" placeholder="Username"><br>
    <input class="text" type="password" name="user_pwd" placeholder="Password"><br>
    <input class="text" type="email" name="user_email" placeholder="E-mail"><br>
    <input class="text" type="text" name="user_school" placeholder="School"><br>


    <input type="submit" name="submit" value="Sign In"><br><br>
<p>Already have an account?  <a href="index.php">Login</a></p>
  </form>
          <br><br>
 -->

</div>


  </body>
</html>
