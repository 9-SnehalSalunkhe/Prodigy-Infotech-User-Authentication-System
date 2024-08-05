<?php
session_start();
include("connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>



    <link rel="stylesheet" href="Homepage.css">

    </head>

<body>

<div class="page-div">
<nav class="navbar">
<div class="navbar-right">
             <button class="btn" type="submit"><a href="logout.php">Logout</a></button>
</div>

</nav>

    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       Hello  <?php
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName']."<br>";
            echo"Welcome back !";
        }
       }
       ?>


</div>
</body>
</html>