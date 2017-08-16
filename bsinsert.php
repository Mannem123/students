<!DOCTYPE html>
<html>
   <body>
      <?php
         include 'dbconnect.php';
         $rollno=$_POST['rollno'];
         $name=$_POST['name'];
         $mobile=$_POST['mobile'];
         $email=$_POST['email'];
         $cgpa=$_POST['cgpa'];
         $sql="INSERT INTO students_mallikarjuna VALUES('$rollno','$name','$mobile','$email','$cgpa')";
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