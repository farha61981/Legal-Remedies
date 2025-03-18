
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script>
        function logout(){
            window.open("index.php");
        }
    </script>
    <title>Advocate</title>
    
</head>
<body>
        
        <nav class="navbar background  h-nav-resp"  >
            <ul class="nav-list v-class-resp">
                <div class="logo"><img src="img/logo.jpeg" alt="logo"></div>
                <li> <a href="#"> Home</a></li>
                <li> <a href="#about us"> about us</a></li>
                <li> <a href="#Edit">Edit details</a></li>
                <li> <a href="#contact us">contact us</a></li>
        
                <li></li>
                <li></li>
                <li></li>
            </ul>
             <div class="rightNav v-class-resp" >
              
                <button class="btn btn-sm" onclick="logout()">Logout</button>
            
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
                
                </div>
                <div class="secondhalf">
                    <img src="img/law.jpeg" alt="law image">
                </div>
            </div>
        </section>

<section class="contact" id="contact us">
    <h2 class="text-center">Contact Us</h2>
    <div class="form">
        <input class="form-input" type="text" name="name" id="name" placeholder="Enter your Name">
        <input class="form-input" type="phone" name="phone" id="name" placeholder="Enter your Phone">
        <input class="form-input" type="Email" name="email" id="name" placeholder="Enter yourEmail">
       <textarea class="form-input" name="text" id="text" cols="30" rows="10" placeholder="Elaborate your concern"></textarea>
        <button  class="btn btn-sm btn-dark" >Submit</button>
    </div>
<footer class="background">
    <p class="text-footer">
         Made by Farha Kousar and Divya Shree R
    </p>
</footer>
<script src="js/resp.js"> </script>
</section>
</body>
</html> 