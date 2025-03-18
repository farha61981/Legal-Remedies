 <?php
include("contactus.php");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Services</title>
    <script>
        function login(){
            window.open("login-index.php");
        }
        function register(){
            window.open("registration.php");
        }
        function Home(){
            window.open("index.php");

        }
        function contactus(){
            alert("Submitted successfully!")
            window.open("services.php");

        }
    </script>
    
</head>
    <body>
         
        <nav class="navbar background  h-nav-resp" >
            <ul class="nav-list v-class-resp">
                <div class="logo"><img src="img/logo.jpeg" alt="logo"></div>
                <li> <a href="#" onclick="Home()"> Home</a></li>
                <li> <a href="#about us"> about us</a></li>
               
                <li> <a href="#contact us">contact us</a></li>
        
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <div class="rightNav v-class-resp" >
                
                <button class="btn btn-sm" onclick="Home()">Back</button>
            
            </div>
            <div class="burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </nav>
        <section class="background firstsection" id="about us">
            <div class="box-main">
                <div class="firsthalf">
             <bold><p class="text-big">The legal Remedies</p></bold><br>
                <p class="textsmall">Welcome to Legal Remedies, your trusted source for connecting with top legal professionals. Our platform is dedicated to
                providing you with comprehensive contact and professional details of experienced lawyers across various fields of law.
                Whether you need assistance with corporate law, family disputes, criminal defense, or any other legal matter, Legal
                Remedies ensures you have access to the best legal minds in the industry. Our user-friendly interface allows you to
                search for lawyers based on their expertise, location, and client reviews, making it easier than ever to find the right
                legal support tailored to your specific needs. Let Legal Remedies be your guide to finding reliable legal representation
                with confidence and ease. </p>
                <div class="buttons">
                    <button class="btn" onclick="login()">Login as Advocate</button>

                    <button class="btn" onclick="register()">Register as Advocate</button>
                </div>
                </div>
                <div class="secondhalf">
                    <img src="img/servise1.jpg" alt="law image" >
                </div>
            </div>
        </section>
<h2 class="ADVO">Advocate Details<h2>
   
<!-- <section class="section " > -->
<div class="services">
<?php

include("loginconnection.php");

$sql="SELECT * FROM `registration`";
$result=mysqli_query($conn,$sql);

//to print number of rows
$num = mysqli_num_rows($result);


// echo $num;

//to display rows

if($num>0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    //fetch using while loop
  
    while($row = mysqli_fetch_assoc($result)){
        //echo var_dump($row);

 
        echo "<br>";
        echo "<section class='section'>";
        echo "Name: ".$row['name']."<br>"."Experience: ".$row['experience']."<br>"."Expertise: ".$row['Expertise']."<br>"."Number of Cases Handled/Handling: ".$row['cases']."</br>"."Enrolled in Bar Counsel: ".$row['enrolled']."<br>"."Phone Number: ".$row['phone']."<br>"."Email: ".$row['email'];  // to add a image ."<img src='img/intellectualproperty.jpg' alt='intellectualpropertyimage'class='imgfluid left'>";
        echo "</section>";
        
   
 
 
    }
}

?>
<br>
</div>
<!-- </section> -->



<!-- <section class="section" >
<div class="paras">
    <p class="sectionTag text-big">Criminal lawyers</p>
    <p class="sectionSubTag text-small">A criminal lawyer prosecutes or defends individuals who are accused of committing crimes. The responsibilities of a criminal lawyer include research and case analysis to identify a likely result and create a winning courtroom defence plan for clients, assisting clients to grasp the meaning of the law and their legal alternatives, and pursuing a swift and favourable resolution of matters.</p>
</div>

</section>


<section class="section ">
<div class="paras">

    <p class="sectionTag text-big">Civil lawyer</p>
    <p class="sectionSubTag text-small">A civil lawyers generally deals with legal disputes concerning personal injury, family relationships, employment and real estate. They also work with government entities and business institutions. Individuals, interpersonal ties, and property conflicts are frequently the centre of civil disputes. A civil lawyer attempts to settle problems and disagreements amongst the parties involved.
    </p>
</div>

</section> -->

<section class="contact" id="contact us">
    <h2 class="text-center">Contact Us</h2>
    <div class="form">
        <input class="form-input" type="text" name="name" id="name" placeholder="Enter your Name">
        <input class="form-input" type="phone" name="phone" id="name" placeholder="Enter your Phone">
        <input class="form-input" type="Email" name="email" id="name" placeholder="Enter yourEmail">
       <textarea class="form-input" name="text" id="text" cols="30" rows="10" placeholder="Elaborate your concern"></textarea>
        <button  class="btn btn-sm btn-dark" name="btn-send" onclick="contactus()" >Submit</button>
    </div>

   
<footer class="background">
    <p class="text-footer"><small>
         Made by Farha Kousar and Divya Shree R
    </small></p>
</footer>

<script src="js/resp.js"> </script>
</section>
    </body>
</html>