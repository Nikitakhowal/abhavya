<?php
$connect = mysqli_connect('localhost','root','','abhavya');
if (isset($_POST['submit'])){
  $name=$_POST['name'];
     $number=$_POST['number'];
     $email=$_POST['email'];
    $date=$_POST['date'];
  
    
 
$query = "INSERT INTO ed ( `name`,`number`, `email`, `date`) VALUES ( '$name','$number', '$email', '$date');";
   
    $result = mysqli_query($connect,$query);
  
    
  if ($connect->connect_error) {
        die("Connection failed: " . $conn->connect_error);

      }
      echo "connected successfully";
    }
    header("Location:http://localhost:8080/folder/ED1.html");
    exit();
  
    ?>