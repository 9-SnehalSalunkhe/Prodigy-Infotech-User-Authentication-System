<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <script src="https://kit.fontawesome.com/cab664c77f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .form-heading {
            font-size: 1.9rem;
            font-weight: bold;
            text-align: center;
            padding: 1.3rem;
            margin-top: 1.3rem;
            margin-bottom: -0.6rem;
            color: white;
        }
        #form-heading {
            margin-top: 113px;
            margin-bottom: 37px;
        }
    </style>
</head>
<body>
    <div class="full-div">
        <div class="container">
            <h1 class="form-heading" id="form-heading">Forgot Password</h1>
            <form method="post" action="reset-password.php">
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="new_password" id="new_password" placeholder="New Password" required>
                    <label for="new_password">New Password</label>
                </div>
                <input type="submit" class="btn" value="Reset Password" name="reset-btn">
            </form>
        </div>
    </div>
</body>
</html>
