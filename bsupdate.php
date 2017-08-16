<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Update Data</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>
   <body>
      <?php
         include 'dbconnect.php';
         $rollno=$_POST['rollno'];
         $name=$_POST['name'];
         $mobile=$_POST['mobile'];
         $email=$_POST['email'];
         $cgpa=$_POST['cgpa'];
         
         
         $sql = "UPDATE students_mallikarjuna SET name='$name',mobile='$mobile',email='$email',cgpa='$cgpa' WHERE rollno='$rollno'";
         
         if ($conn->query($sql) === TRUE) {
            $conn->close();
            include 'riktam3.php';
         } else {
             echo "Error updating record: " . $conn->error;
             $conn->close();
         }
         ?>
   </body>
</html>