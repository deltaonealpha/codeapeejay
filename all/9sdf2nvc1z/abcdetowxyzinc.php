<?php
session_start();

if($_SESSION['level'] != '8' ){
    $username= $_SESSION["username"];
    $db = mysqli_connect("localhost", "s31htajf42lh", "Pott3rmor-", "code_sys");

    // Check connection
        if($db == false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                else{
                            $lvlsql = "SELECT * FROM encredx WHERE user_uname='$username'";
                            if($resultlvl = mysqli_query($db, $lvlsql)){
                            if(mysqli_num_rows($resultlvl) > 0){
                            
                            $levelno = 0;
                            while($rowlvl = mysqli_fetch_array($resultlvl)){
                                $levelno = $rowlvl['user_level'];
                                    }
                                }
                            }
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
    }
    header("Location: ../$url");
}
else{
    $db = mysqli_connect("localhost", "s31htajf42lh", "Pott3rmor-", "code_sys");
 
        // Check connection
        if($db == false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head><title>colossal cave adventure </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css"/>
        <link rel="stylesheet" href="enc-style.css"/>
       <script>
        function toggleBurger() {
            var burger = document.getElementsByClassName("burger")[0];
            var menu = document.getElementsByClassName('navbar-menu')[0];
            burger.classList.toggle('is-active');
            menu.classList.toggle('is-active');
        }
    </script>
<style>
       span{
        color :white;
        font-size: 2em;
    }
</style>
    <meta charset="utf-8">
    
  </head><body>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
              <a class="navbar-item" href="#">
                <h4><b>EncredX</b></h4>
              </a>
          
              <a role="button" class="navbar-burger burger" onclick="toggleBurger()" aria-label="menu" aria-expanded="false" data-target="hhcnavbar">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
              </a>
            </div>
          
            <div id="hhcnavbar" class="navbar-menu">
              <div class="navbar-start">
                          <?php  
                          $username= $_SESSION["username"];
                            $db = mysqli_connect("localhost", "s31htajf42lh", "Pott3rmor-", "code_sys");
     
    // Check connection
        if($db == false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                else{
                            $lvlsql = "SELECT * FROM encredx WHERE user_uname='$username'";
                            if($resultlvl = mysqli_query($db, $lvlsql)){
                            if(mysqli_num_rows($resultlvl) > 0){
                            
                            $levelno = 0;
                            while($rowlvl = mysqli_fetch_array($resultlvl)){
                                $levelno = $rowlvl['user_level'];
                                    }
                                }
                            }
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
    }
    
                          ?>
                        <a class="navbar-item" href="http://encredx.codeapj.club/<?php echo $url;?>">
                            Level
                        </a>
          
                <a class="navbar-item" href="leaderboard.php">
                  Leaderboard
                </a>
    
                <a class="navbar-item" href="rules.php">
                    Rules
                  </a>
                
                <a class="navbar-item" href="logout.php">
                        Logout
                </a>
    
            </div>
            </div>
          </nav>
        <div class="parent">
            
            <span><h1>Level 8</h1></span><br>
            
          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            
            <div class="Question">
                <h1>iujr womczcrw</h1>
            </div><br>
            
             <!--y = 5x+2-->
             <!--(0,0)-->
            <div><input name="Answer" type="text"></div><br>
            <div><input type="submit" name="submit" value = "SUBMIT"></div>
        </form>
        </div>
        <?php
        
        
        if(isset($_POST['submit'])){
        $ans = $_POST['Answer'];
        $answer = '';
        $answerq = "SELECT * FROM encredx_data WHERE level_no='8'";
        if($resultans = mysqli_query($db, $answerq)){
            if(mysqli_num_rows($resultans) > 0){
                
                while($rowans = mysqli_fetch_array($resultans)){
                    $answer = $rowans['level_ans'];
            }
        }
        }

        
        $user = $_SESSION['username']; 
        if($ans == $answer){
          	$lupquery = "UPDATE encredx SET user_level = 9 WHERE user_uname = '$user' ";
          	mysqli_query($db, $lupquery);
          	$_SESSION['level'] = 9;
        header("Location: tseries.php");
            
        }
        else{
                
                echo "<center><span>Wrong Answer</span></center>";
        }
        }
}                
        ?>
        
    </body>
</html>
