<!DOCTYPE html>
<html>
   <body>
      <?php
         include 'dbconnect.php';
         $rollno=$_GET['rollno'];
         $sql="DELETE FROM students_mallikarjuna WHERE rollno='$rollno'";
         if($conn->query($sql) === TRUE)
         {
             $conn->close();
             include 'riktam3.php';
         }
         else 
         {
             echo "Error: " . $sql . "<br>" . $conn->error;
             $conn->close();
         }
         ?>  
   </body>
</html>