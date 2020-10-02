<html>
    <body>
        <form action="level.php" method = "post">
        <input type="text" class="form-control" placeholder="Username" name = "user_uname">
        <input type="submit" class="form-control" placeholder="Username" name = "login">
        
        </form>
    </body>
</html>

<?php
session_start();
$db = mysqli_connect("localhost", "s31htajf42lh", "Pott3rmor-", "code_sys");
$levelno = stripslashes($_REQUEST['user_uname']); 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
     if(isset($_POST['login'])){
// Attempt select query execution
$url = '';
$urlsql = "UPDATE INTO encredx (user_level) VALUES(1) WHERE user_uname
=='$levelno' ";
mysqli_query($db, $urlsql);
}



?>