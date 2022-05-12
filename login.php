<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav>
        <div class="nav">
            <li><a href="Index.php">Home</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li>
            <li><a href="login.php">Log In</a></li>
            <li><a href="Signup.php">Sign Up</a></li>
        </div>
    </nav>

    <div class="formlogin">

    <h3>Log In Here</h3>
        <form action="logincon.php" method="post">

            <label for="">Email</label>
            <input type="text" placeholder="Email Address" name="name" id="name">
            <label for="">Password</label>
            <input type="text" placeholder="Password" name="pass" id="pass">
            <button type="submit" name="submit">Submit</button>
        </form>
        
    </div>

</body>
</html>