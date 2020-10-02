<!DOCTYPE html>
<html>
<head>
<title>CODE 2019 | Prelims | Apeejay School NOIDA</title>
<meta name="description" content="Code is an annual IT symposium hosted by Apeejay School, Noida. Ever since our founding in 1999 we have retained the position of Delhi-NCR's most awaited IT symposium. With over 50 schools from across Delhi-NCR, we make it bigger and better each year. ">
<meta name="viewport" content="width=device-width, initial-scale=1.0,viewport-fit=cover">
<meta charset="utf-8">
<meta name="theme-color" content="#040a14">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script><link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel= "stylesheet" href="style-prelims.css"/>
<script src="scripts/script.js"></script>
<style>
html,body{
    background-color: black;
}
header{
    position: sticky;
    top:0;
}
h2{
  color:#eee;
  margin:50px 0 50px 0;
}
</style>
</head>
<body>
     <header >
    <div class="container" id="navbar">
      <div class="header-top">
        <div class="header-flex"> 
          <a href="http://codeapj.club/"><img src="translogo1.png" alt="height:100px; width:100px;"></a>
        <a href="#header">  <h1 class="showCode">CODE</h1></a>
          <button class="drop-btn" onclick="$('.header-right').toggle(); $('.showCode').toggle(); ">&#9776;</button>
        </div>
        <div class="header-right">
            <ul class="ul">
              <li class="li"><a href="index.php#intro">About</a></li>
              <li class="li"><a href="index.php#Events">Events</a></li>  
              <li class="li"><a href="index.php#schedule">Schedule</a></li>
              <li class="li"><a href="registration.php">Register</a></li>
              <li class="li"><a href="index.php#footer">Contact</a></li>

            </ul>
        </div>
    </div>
  </header>
    <div id="banner-p">
        <div><h1>PRELIMS ENTRY</h1></div>
        <h3> For DIGITAL IMAGING ENTRIES  <a href="https://forms.gle/9yXEZHUqodzDgf977"><u>Click here</u></a></h3>
    </div>
 <div id="forms">
    <form method = "POST" action="index.php">
    
      <h2>Movie Making</h2>
      
      <div class="row">
          <div style="margin: 0 auto;">
            <label for="schoolName">School Name:</label><br>
            <input type="text" name="school_mname" id="schoolmName"/></div>
        </div>
        <div class="row">
        </div>
        <h2>Participant Details:</h2>
        <div class="row">
            <div>
              <label for="participant1_name">Participant 1 Name:</label><br>
              <input type="text" id="participant1_name" name="p1_mname" required/></div>
            <div>
              <label for="participant2_name">Participant 2 Name:</label><br>
              <input type="textarea" id="participant2_name" name="p2_mname" required/>
            </div>
        </div>
        
        <div class="row">
            <div>
              <label for="participantclass">Participant 1 Class & Section:</label><br>
              <input type="text" id="participant1_class" name="p1_mclass" required/></div>
            <div>
              <label for="participantclass">Participant 2 Class & Section:</label><br>
              <input type="textarea" id="participant2_class" name="p2_mclass" required/>
            </div>
        </div>
        
        <h2>Enter movie YouTube link</h2>
        <center>
        <div class="row">
            <div style="color: white; width: 100%;text-align:center; display: block;">
                <input type="text" id="prelims_link" name="movie_link" required />
            </div>
        </div>
        </center>
        
        </div>
      </div>
    <center><div><button name="submitm" type="submit" class="button-hov" ><strong>Submit</strong></button></div></center>
</div>
</form>
<?php 
/* Attempt MySQL server connection. Assuming you are running MySQL*/
$link = mysqli_connect("localhost", "s31htajf42lh", "Pott3rmor-", "code_sys");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{

if(isset($_POST["submitm"])){
    //MOVIE
    $schoolmname =  $_POST['school_mname'];
    $p1_m = $_POST['p1_mname'];
    $p2_m = $_POST['p2_mname'];
    $p1_mclass = $_POST['p1_mclass'];
    $p2_mclass = $_POST['p2_mclass'];
    $movie_link = $_POST['movie_link'];
    $sql = "INSERT INTO prelims (school_mname,p1_mname,p2_mname,p1_mclass,p2_mclass,movie_link)
     VALUES ('$schoolmname','$p1_m','$p2_m','$p1_mclass','$p2_mclass','$movie_link')";
    if(mysqli_query($link, $sql)){
     $message = "Submitted Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
    
    }

}
 // Close connection
mysqli_close($link);

?>

</body>

</html>
