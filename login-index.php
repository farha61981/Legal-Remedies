<?php
include("loginconnection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advocate details</title>
    <link rel="stylesheet" type="text/css" href="CSS/login.css">
    
</head>
<body>
    <div id="form">
        <h1>Login</h1>
        <form name="form" action="login.php"onsubmit ="return isvalid()"method="POST">
            <label> Username: </label>
            <input type="text" id="user" name="user">
            <br><br>
            <label> Password: </label>

            <input type="password" id="pass" name="pass">
            <br><br>
            <input type="Submit" id="btn" value="Login" name="submit">
            <a href="index.php" ><u>back</u></a>

            
</form>
</div>
<script>
function isvalid(){
    var user=document.form.user.value;
    var pass=document.form.pass.value;
    if(user.length=="" && pass.length==""){
        alert("username and password field is empty!!!")
    return false
    }
    else{
        if(user.length=="" ){
        alert("usename is empty!!!")
    return false
    }
    if(pass.length=="" ){
        alert("password is empty!!!")
    return false
    }
    }
}
</script>
</body>
</html>