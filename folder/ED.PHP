<?php
$connect = mysqli_connect('localhost','root','','abhavya');
if (isset($_POST['submit'])){
  $name=$_POST['name'];
     $email=$_POST['email'];
     $address=$_POST['address'];
    $contact=$_POST['contact'];
    $reviews=$_POST['reviews'];
    
 
$query = "INSERT INTO ins ( `name`,`email`, `address`, `contact`, `reviews`) VALUES ( '$name','$email', '$address', '$contact', '$reviews');";
   
    $result = mysqli_query($connect,$query);
  
    
  if ($connect->connect_error) {
        die("Connection failed: " . $conn->connect_error);

      }
      echo "connected successfully";
    }
    header("Location:http://localhost/folder/ED1.html");
    exit();
  
    ?>
    
    
