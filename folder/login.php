<?php
$connect = mysqli_connect('localhost','root','','abhavya');
if (isset($_POST['submit'])){
  $name=$_POST['name'];
     $email=$_POST['email'];
     $contact=$_POST['contact'];
  
    
 
$query = "INSERT INTO  abh( `name`,`email`, `contact`) VALUES ( '$name','$email', '$contact');";
   
    $result = mysqli_query($connect,$query);
    if ($connect->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "connected successfully";
    }
    header("Location:http://localhost/folder/ED1.html");
    exit();
  
  
    

    ?>