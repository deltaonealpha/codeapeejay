<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LEADERBOARD | Encredx</title>
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
     table{
         padding-top : 4%;
         width:80%;
         height:100%;
         align-self:center;
         overflow:auto;
     }
    .parent{
        width: 67vw;
        /*height:100vh;*/
        margin-top:3%;
        padding-top:20%;
        position: absolute;
        top:20px;
        left:20%;
    }  
    </style>
    </head>
    <body>
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
        <!--<div class="parent" style="flex-direction: column; overflow-y:auto;">-->
        <center>
            <h1 style="color:#eee;font-size:5em;">LEADERBOARD</h1>
            <table>
            <tr>
              <th>Rank</th>
              <th>Username</th>
              <th>School</th>
              <th>Level</th>
            </tr>
            <?php
            $link = mysqli_connect("localhost", "s31htajf42lh", "Pott3rmor-", "code_sys");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
            $sql = "SELECT * FROM `encredx` ORDER BY `encredx`.`user_level` DESC";
            if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
        $i=0;
            while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>". $i ."</td>";
                echo "<td>" . $row['user_uname'] . "</td>";
                echo "<td>" . $row['user_school'] . "</td>";
                echo "<td>" . $row['user_level'] . "</td>";
            echo "</tr>";
            $i++;


            }
            }
            }
            ?>
          
        </table>
</center>
          <!--</div>-->
    </body>
</html>