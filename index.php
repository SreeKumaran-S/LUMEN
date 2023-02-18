<?php  
           $name=$_POST['name';]
           $servername = "localhost";  
           $username = "root";  
           $password = "";  
           $dbname=""
           $conn = new mysqli($servername , $username , $password,$dbname);  
           if($conn->connect_error)
           {
            die("Connection failed: " . $connn->connect_error);
           }
           echo "Connected successfully";
           $sql="INSERT INTO Table1() VALUES ()";
           if ($conn->query($sql)===TRUE)
           {
            echo "NEW RECORD CREATED SUCCESSFULLY";
           }
           else{
            echo "Error: " .$sql . "<br>" . $conn->error;
           }
           $conn->close();
?>   
