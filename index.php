
<?php
require('connection.php');
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <script src="https://kit.fontawesome.com/cab664c77f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body >
  <div class="full-div">
    <!----------------------------------------- Register box div ----------------------------------------------->
    <div class="container" id="signup" style="display:none;">

      <h1 class="form-title">Create Account</h1>
      <!------------------------------------------Registration form started---------------------------------------->
      <form method="post" action="login_register.php">

        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           <label for="fname">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <i class="fas fa-eye" id="togglePassword"></i>
            <label for="password">Password</label>
        </div>
       <input type="submit" class="btn" value="Register" name="signUp">
      </form>
      <!-----------------------------------------------------------------------Registration form completed-------------------------------->
      <p class="or">
        OR
      </p>
        <!-----------------------------------------------------div for google and fb icons------------------------------------------------>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>

      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Login</button>
      </div>
    </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------->
    <div class="container" id="signIn">

        <h1 class="form-title" id="form-title">Login</h1>
       <!-------------------------------log in form started--------------------------------------------------------------->

        <form method="post" action="login_register.php">

          <div class="input-group">

            <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>


          <div class="input-group">
            <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>

          <p class="recover">
            <a href="forgot-password.php">Forgot Password ?</a>
          </p>
         <input type="submit" class="btn" value="Login" name="signIn">
        </form>
        <!--------------------------------------------------------------------------login form copleted-------------------------------->
        <p class="or">
         OR
        </p>

        <div class="icons">
          <i class="fab fa-google"></i>
          <i class="fab fa-facebook"></i>
        </div>

        <div class="links">
          <p>Don't have account yet?</p>
          <button id="signUpButton">Register</button>
        </div>

      </div>
  </div>

      <script src="script.js"></script>
</body>
</html>