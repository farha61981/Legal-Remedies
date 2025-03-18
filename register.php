<?php
include("loginconnection.php");

if(isset($_POST['submit'])){
    $name=$_POST['name']; 
    $experience=$_POST['experience'];
    $Expertise=$_POST['Expertise'];
    $cases=$_POST['cases'];
    $enrolled=$_POST['enrolled'];
    $user=$_POST['user'];
    $password=$_POST['pass'];
    $cpassword=$_POST['cpass'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    // $image=$_FILES['image']['name'];
    //to check email and user exists in db
     $sql= "select * from registration where user ='$username'";
    $result=mysqli_query($conn,$sql);
    $count_user=mysqli_num_rows($result);

    $sql= "select * from registration where email ='$email'";
    $result=mysqli_query($conn,$sql);
    $count_email=mysqli_num_rows($result);
// to insert into login table 
//   $sql1="INSERT INTO 'login' ('username','password') VALUES ('$user','$password')";
//  $result1= mysqli_query($conn,$sql1);
//  if($result1){
//      echo"successfull";
//  }

    if($count_user==0 & $count_email==0){
        if($password==$cpassword){
            // $hash=password_hash($password,PASSWORD_DEFAULT);
            $sql="INSERT INTO registration(name,experience,Expertise,cases,enrolled,user,pass,cpass,phone,email) VALUES ('$name','$experience',' $Expertise','$cases','$enrolled','$user',' $password',' $cpassword','$phone','$email')";
            $result=mysqli_query($conn,$sql);
            if($result){
                header("Location: index.php");
                
            }
        }
        else{
            echo '<script>
            alert("passwords do not match");
            window.location.href="registration.php";
            </script>';
        }
    }
    else{
        if($count_user>0){
            echo '<script>
            window.location.href="registration.php";
            alert("username already exists!!");
            </script>';
        }
        else if($count_email>0){
            echo '<script>
            window.location.href="registration.php";
            alert("email already exists!!");
            </script>';
        }
    }

    

}
?>

