<?php
//Databse Connection file
include('dbconnect.php');

if (isset($_POST['submit'])) {
  //getting the post values
  $user = $_POST['user'];
  $email = $_POST['email'];
  $num = $_POST['number'];
  $age = $_POST['age'];


  // Query for data insertion
 $sql = "INSERT INTO tb_students(Username,email,num,age)values('$user','$email','$num','$age')";
 $result = mysqli_query($conn,$sql);

  if ($result) {
   header('Location:login.php');
  } else {
    echo "<script>alert('Something Went Wrong. Please try again');</script>";
  }
}
?>