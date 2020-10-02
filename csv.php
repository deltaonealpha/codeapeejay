 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>CODE | 2019</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:900px;">  
                <h2 align="center">Registration Data</h2>  
                
                <br />  
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="CSV Export All Details" class="btn btn-success" />  
                </form>  
                <br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">Sno</th>  
                               <th width="25%">School Name</th>  
                               <th width="35%">School Address</th>  
                               <th width="10%">School Telephone</th>  
                               <th width="10%">School Email</th>  
                               <th width="10%">School Teacher Day 1</th>  
                               <th width="10%">School Teacher Day 2</th> 
                               <th width="10%">Movie making P1</th>
                               <th width="10%">Movie making P2</th>
                               <th width="10%">Photography P1</th>
                               <th width="10%">Photography P2</th>
                               <th width="10%">DI P1</th>
                               <th width="10%">Programming P1</th>
                               <th width="10%">Programming P2</th>
                               <th width="10%">Logo P1</th>
                               <th width="10%">Logo P2</th>
                               <th width="10%">Gaming P</th>
                               <th width="10%">GD P1</th>
                               <th width="10%">Race P1</th>
                               <th width="10%">Race P2</th>
                               <th width="10%">Quiz P1</th>
                               <th width="10%">Quiz P2</th>
                               <th width="10%">DJ P1</th>
                               <th width="10%">WebD P1</th>
                               <th width="10%">WebD P2</th>
                          </tr>  
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "s31htajf42lh", "Pott3rmor-", "code_sys");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM registrations";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                
                echo "<td>" . $row['Sno'] . "</td>";
                echo "<td>" . $row['school_name'] . "</td>";
                echo "<td>" . $row['school_address'] . "</td>";
                echo "<td>" . $row['school_no'] . "</td>";
                echo "<td>" . $row['school_email'] . "</td>";
                echo "<td>" . $row['school_teacher_1'] . "</td>";
                echo "<td>" . $row['school_teacher_2'] . "</td>";
                echo "<td>" . $row['movie_p1'] . "</td>";
                echo "<td>" . $row['movie_p2'] . "</td>";
                echo "<td>" . $row['photo_p1'] . "</td>";
                echo "<td>" . $row['photo_p2'] . "</td>";
                echo "<td>" . $row['di_p1'] . "</td>";
                echo "<td>" . $row['prog_p1'] . "</td>";
                echo "<td>" . $row['prog_p2'] . "</td>";
                echo "<td>" . $row['logo_p1'] . "</td>";
                echo "<td>" . $row['logo_p2'] . "</td>";
                echo "<td>" . $row['game_p1'] . "</td>";
                echo "<td>" . $row['gd_p1'] . "</td>";
                echo "<td>" . $row['race_p1'] . "</td>";
                echo "<td>" . $row['race_p2'] . "</td>";
                echo "<td>" . $row['quiz_p1'] . "</td>";
                echo "<td>" . $row['quiz_p2'] . "</td>";
                echo "<td>" . $row['dj_p1'] . "</td>";
                echo "<td>" . $row['webd_p1'] . "</td>";
                echo "<td>" . $row['webd_p2'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?> 
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  