 <?php  
      //export.php  
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("localhost", "s31htajf42lh", "Pott3rmor-", "code_sys");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Sno' ,
                            'School Name ',
                            'School Address ',
                            'School Telephone ',
                            'School Email ',
                            'School Teacher Day 1 ',
                            'School Teacher Day 2 ',
                            'Movie making P1 ',
                            'Movie making P2 ',
                            'Photography P1 ',
                            'Photography P2 ',
                            'DI P1 ',
                            'DI P2 ',
                            'Programming P1 ',
                            'Programming P2 ',
                            'Logo P1 ',
                            'Logo P2 ',
                            'Gaming P ',
                            'EncredX P ',
                            'GD P1 ',
                            'Race P1', 
                            'Race P2 ',
                            'Quiz P1 ',
                            'Quiz P2 ',
                            'DJ P1 ',
                            'WebD P1', 
                            'WebD P2 ',));  
      $query = "SELECT * from registrations";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?> 