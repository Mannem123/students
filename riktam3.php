<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Students</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
    </head>
    <body>
       
<div class="container">
            <div class="jumbotron text-center">
                <h1>Students Data</h1>
            </div>
           
         <?php
             if(isset($_GET['update'])){
                include 'condition.php';
            }
            include 'dbconnect.php';
            echo '<div class="table-responsive">';
                echo"<table class='table table-hover'>";
                echo "<thead>
                        <tr> <th>Rollno</th> <th>Name</th>  <th>Mobile</th> <th>Email</th> <th>Cgpa</th><th> </th><th> </th></tr>
                    </thead>";
                    $sql= "SELECT rollno,name,mobile,email,cgpa FROM students_mallikarjuna";
                    $result=$conn->query($sql);
                if($result->num_rows>0){
                    while($row = $result->fetch_array()) {
                        $rollno=$row["0"];
                        $name=$row["1"];
                        $mobile=$row["2"];
                        $email=$row["3"];
                        $cgpa=$row["4"];
                        echo"<tbody>";
                        echo "<tr>";
                            echo "<td>".$rollno."</td>";
                            echo "<td>".$name."</td>";
                            echo "<td>".$mobile."</td>";
                            echo "<td>".$email."</td>";
                            echo "<td>".$cgpa."</td>";
                          echo"<td><a href='bsdelete.php?rollno=$rollno'><input type='button' class='btn' value='Delete'></input></a></td>"; 
                        //<!-- Trigger the modal with a button -->
                            echo "<td><a data-toggle='modal' href='riktam3.php?update=yes&rollno=$rollno&name=$name&mobile=$mobile&email=$email&cgpa=$cgpa'>
                                      <input type='button' class='btn' value='Update'></input></a></td>";
                        echo "</tr>";
                        echo "</tbody>";
                    }
                }
                else echo "0 results";
                echo"</table>";
            echo"</div>";
            $conn->close(); 
        ?>
    <br>
    <!-- Trigger the modal with a button -->
<center><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addModal">Add Student</button></center>

<!-- Modal -->
<div id="addModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Add Student Details</h3>
              </div>
      <div class="modal-body">
       
     <?php
          echo" <form class='form-horizontal' action='bsinsert.php' method='post'>
          
  <div class='form-group'>
    <label class='control-label col-sm-2' for='rollno'>Rollno:</label>
    <div class='col-sm-10'>
      <input type='number' class='form-control' id='rollno' name='rollno' placeholder='Enter rollno' autofocus required>
    </div>
  </div>
  <div class='form-group'>
    <label class='control-label col-sm-2' for='name'>Name:</label>
    <div class='col-sm-10'> 
      <input type='text' class='form-control' id='name' name='name' pattern='[A-Za-z ]{0,20}' placeholder='Enter Name' required/>
    </div>
  </div>
  <div class='form-group'>
    <label class='control-label col-sm-2' for='mobile'>Mobile:</label>
    <div class='col-sm-10'> 
      <input type='number' class='form-control' id='mobile' name='mobile' pattern='[7-9]{1}[0-9]{9}' placeholder='Enter mobile number' required/>
    </div>
  </div>
  <div class='form-group'>
    <label class='control-label col-sm-2' for='email'>Email:</label>
    <div class='col-sm-10'> 
      <input type='email' class='form-control' id='email' name='email' placeholder='Enter Email' required/>
    </div>
  </div>
  <div class='form-group'>
    <label class='control-label col-sm-2' for='cgpa'>Cgpa:</label>
    <div class='col-sm-10'> 
      <input type='number' class='form-control' id='cgpa' name='cgpa' placeholder='Enter Cgpa' min='0' max='10' step='0.01' required/>
    </div>
  </div>
  
  <div class='form-group'> 
    <div class='col-sm-offset-2 col-sm-10'>
      <input type='submit' class='btn btn-primary btn-lg' value='Add Student'/>
    </div>
  </div>
</form>";
          ?>
    </div>
              
            </div>

          </div>
        </div>
    
    <!-- Modal -->
<div id="updModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Update Student Details</h3>
              </div>
      <div class="modal-body">       
        <?php
            $rollno=$_GET['rollno'];
            $name=$_GET['name'];
            $mobile=$_GET['mobile'];
            $email=$_GET['email'];
            $cgpa=$_GET['cgpa'];
           
            echo"<form action='bsupdate.php' class='form-horizontal' method='post'>
             
  <div class='form-group'>
    <label class='control-label col-sm-2' for='rollno'>Rollno:</label>
    <div class='col-sm-10'>
      <input type='number' class='form-control' id='rollno' name='rollno' value='$rollno' readonly>
    </div>
  </div>
  <div class='form-group'>
    <label class='control-label col-sm-2' for='name'>Name:</label>
    <div class='col-sm-10'> 
      <input type='text' class='form-control' id='name' name='name' pattern='[A-Za-z ]{0,20}' value='$name' autofocus required/>
    </div>
  </div>
  <div class='form-group'>
    <label class='control-label col-sm-2' for='mobile'>Mobile:</label>
    <div class='col-sm-10'> 
      <input type='number' class='form-control' id='mobile' name='mobile' pattern='[7-9]{1}[0-9]{9}' value='$mobile' required/>
    </div>
  </div>
  <div class='form-group'>
    <label class='control-label col-sm-2' for='email'>Email:</label>
    <div class='col-sm-10'> 
      <input type='email' class='form-control' id='email' name='email' value='$email' required/>
    </div>
  </div>
  <div class='form-group'>
    <label class='control-label col-sm-2' for='cgpa'>Cgpa:</label>
    <div class='col-sm-10'> 
      <input type='number' class='form-control' id='cgpa' name='cgpa' value='$cgpa' min='0' max='10' step='0.01' required/>
    </div>
  </div>
  <div class='form-group'> 
    <div class='col-sm-offset-2 col-sm-10'>
      <input type='submit' class='btn btn-primary btn-lg' value='Update Student'/>
    </div>
  </div>
            </form>";
        ?>
    </div>
              
            </div>

          </div>
        </div>
    
        </div>
    </body>
</html>
