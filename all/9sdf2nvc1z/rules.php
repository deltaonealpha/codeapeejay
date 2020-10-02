<!DOCTYPE HTML>
<html>
    <head>
           <title>RULES | Encredx</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css"/>
        <link rel="stylesheet" href="enc-style.css"/>
       
       <style>
          
        </style>
        <script>
        function toggleBurger() {
            var burger = document.getElementsByClassName("burger")[0];
            var menu = document.getElementsByClassName('navbar-menu')[0];
            burger.classList.toggle('is-active');
            menu.classList.toggle('is-active');
        }
    </script>
    
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
          <div class="parent">
              <h1 style="color:#eee;font-size:5em"><u>RULES</u></h1>
              <ol class="rules">
                <li>All answers contain absolutely no whitespace or special characters.</li>
                <li>Any type of collaboration b/w participants will lead to disqualification.</li>
                <li>Incase of tie time would be considered</li>
                <li>Google Is Your Friend.</li>
                <li>Cheating through unfair means will lead to disqualification</li>
                <li>Search where you can for hints.</li>
                
            </ol>
          </div>
    </body>
</html>