<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li>
            <li><a href="login.php">Log In</a></li>
            <li><a href="signup.php">Sign Up</a></li>
        </div>
    </nav>
    <div class="form">

        <h3>Sign In Free NOW!</h3>

        <form action="signupcon.php" method="post">

            <label for="">First Name</label>
            <input type="text" placeholder="First Name" name="FirstName" id="FirstName">
            <label for="">Last Name</label>
            <input type="text" placeholder="Last Name" name="LastName" id="LastName">
            <label for="">Gender</label>
            <select id="gender" name="gender">

                <option value="">--Select--</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
        
            </select>
            <label for="">Phone Number</label>
            <input type="text" placeholder="Phone Number" name="Phone" id="Phone">
            <label for="">Email Address</label>
            <input type="text" placeholder="Email Address" name="Email" id="Email">
            <label for="">NID Number</label>
            <input type="text" placeholder="NID Number" name="NID" id="NID">
            <label for="">Password</label>
            <input type="password" placeholder="Password" name="Pass" id="Pass">

            <button type="submit" name="submit">Submit</button>

         </form>

</body>
</html>