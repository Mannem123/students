<html>
    <body>
        <?php
        $servername="localhost";
        $username="id2573880_malli";
        $password="malli";
        $dbname="id2573880_student";

        $conn=new mysqli($servername,$username,$password,$dbname);

        if($conn->connect_error){
            die("connection failed.".$conn->connect_error);
            $conn->close();
        }
        ?>
    </body>
</html>