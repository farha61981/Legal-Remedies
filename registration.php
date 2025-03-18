<?php
include("loginconnection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="css/registration.css">
    
   
</head>
<body>
    <div id="form">
        <h1>Registration</h1>
        <form name="form" action="Register.php" method="POST" enctype="multipart/form-data">
            <label> Name: </label>
            <input type="text" id="name" name="name" placeholder="Full Name" required>
            <br><br>

            <label> Experience: </label>
            <input type="text" id="experience" name="experience" placeholder="Total years of Experience" required>
            <br><br>

            <label> Expertise: </label>
            <input type="text" id="Expertise" name="Expertise" placeholder="separate by comma" required>
            <br><br>

            <label> No of cases handling/handled: </label>
            <input type="text" id="cases" name="cases" placeholder="No of cases" required>
            <br><br>

            <label> Enrolled in Bar Council : </label>
            <input type="radio" id="enrolled" name="enrolled" value="Yes">
            <label for="Yes">Yes</label>
            <input type="radio" id="enrolled" name="enrolled" value="No">
            <label for="No">No</label>
            <br><br>
<!-- required -->
            <label> Username: </label>
            <input type="text" id="user" name="user" placeholder="Username" required>
            <br><br>
            
            <label> Password: </label>
            <input type="password" id="pass" name="pass" placeholder="Password" required>
            <br><br>
            <label> Confirm Password: </label>
            <input type="password" id="cpass" name="cpass" placeholder="Confirm Password" required>
            <br><br>
            <label> Phone number </label>
            <input type="tel" id="phone" name="phone" placeholder="Enter phone number" required>
            <br><br>
            <label> Email </label>
            <input type="email" id="email" name="email" placeholder="Enter your Email" required>
            <br><br>
            <!-- <label> Upload your Image:</label>
            <input type="file" nme="image">
            <br><br> -->
            
            <input type="Submit" id="btn" value="Register" name="submit">
            <a href="index.php" ><u>back</u></a>
            <br><br>
            

            
</form>
</div>
<footer class="background">
    <p class="text-footer"><small>
         Made by Farha Kousar and Divya Shree R
    </small></p>
</footer>
</body>
</html>