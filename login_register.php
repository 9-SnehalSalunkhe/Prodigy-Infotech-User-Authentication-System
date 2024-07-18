<?php 

include 'connection.php';

if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

     $checkEmail="SELECT * From users where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0)
     {
        // Error for already used email
        echo "<script>
        alert('{$result['email']} - Email ID already registered');
        window.location.href='index.php';
        </script>";
    }

     else{
        $insertQuery="INSERT INTO users(firstName,lastName,email,password)
                       VALUES ('$firstName','$lastName','$email','$password')";

            if($conn->query($insertQuery)==TRUE)
            {
                // If data inserted successfully
                echo "<script>
                alert('Registered Successfully!');
                window.location.href='index.php';
                </script>";
            }
    
            else 
             { // If data not inserted successfully
                echo "<script>
                alert('Query cannot run');
                window.location.href='index.php';
                </script>";
            }
    
     }
   

}

if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
   
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: homepage.php");
    exit();
   }
   else{
    echo "<script> alert('Not Found, Incorrect Email or Password');
     window.location.href='index.php';
    </script>";
   }

}
?>