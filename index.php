<?php
$insert = false;
if(isset($_POST['name'])){
    //set connection variables



$server = "localhost";
$username = "root";
$password = "";
//create a connection
$con = mysqli_connect($server,$username,$password);
//check for conn sucess
if(!$con)
{
    die("connection to this database failed due to".mysqli_connect_errot());

}
//echo "success connection to db";

//collect post variables
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

$sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
//echo $sql;
//execute a aray
if($con->query($sql) == true)
{
  //  echo "Succcessfully inserted";
  //flag for succ insertion
  $insert == true;

}
else{
    echo "ERROR:$sql <br> $con->error";
    
}
//close the db connection
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="kath" src="kath.jpg" alt ="Mustang">
<div class="container">
        <h1>Welcome to college tour </h1>
   
        <p>Enter your detail and submits this form to confirm your trip participation  </p>
     
        <?php 
     if($insert == true){
      echo "<p class='ab'>Thanks for submitting your form.We are happy to see you</p>";
     }
     ?>
 <form action="index.php" method="post">
    <input type="text" name="name" id="name" placeholder="Enter your name">
    <input type="text" name="age" id="age" placeholder="Enter your age">
    <input type="text" name="gender" id="gender" placeholder="Enter your gender">
    <input type="email" name="email" id="email" placeholder="Enter your email">
    <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
    <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
    <button class="btn">Submit</button>
 </form>
</div>
    <script src="index.js"></script>
</body>
</html>
