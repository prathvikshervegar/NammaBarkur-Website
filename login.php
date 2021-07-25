<?php

session_start();
if(isset($_SESSION['username'])){
   header('location:services.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
      
.alert{
  background: #a3ff9b;
  font-family: 'Poppins', sans-serif;
  padding: 10px 40px;
  min-width: 420px;
  position: absolute;
  right: 10px;
  border-radius: 4px;
  border-left: 8px solid #14ac00;
  overflow: hidden;
  -webkit-animation-duration: 12s; animation-duration: 12s;
  -webkit-animation-fill-mode: both; animation-fill-mode: both;
}
@-webkit-keyframes fadeOut{
  60% {opacity: 1;}
  100% {opacity: 0;}
}
@keyframes fadeOut{
  60% {opacity: 1;}
  100% {opacity: 0;}
}
.fadeOut{
  -webkit-animation-name: fadeOut;
  animation-name: fadeOut;
}

.alert .fa-exclamation-circle{
  position: absolute;
  left: 20px;
  top: 50%;
  transform: translateY(-50%);
  color:#14ac00;
  font-size: 30px;
}
.alert .msg{
  padding: 0 20px;
  font-size: 18px;
  color: #14ac00;
}
.alert .close-btn{
  position: absolute;
  right: 0px;
  top: 50%;
  transform: translateY(-50%);
  background:  #a3ff9b;
  padding: 20px 18px;
  cursor: pointer;
}
.alert .close-btn:hover{
  background: #5af75a;
}
.alert .close-btn .fas{
  color: #14ac00;
  font-size: 22px;
  line-height: 40px;
}
@media (max-width: 820px){
  .alert{
    min-width: 300px;
    padding: 5px 20px;
  }
  .alert .msg{
    padding: 0 10px;
    font-size: 12px;
  }
  .alert .fa-exclamation-circle{
    font-size: 18px;
    left: 10px;
  }
  .alert .close-btn{
    padding: 10px 9px;
  }
  .alert .close-btn .fas{
    font-size: 14px;
  }
}
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <p id="topright"></p>
    <script>
        var d=new Date();
        document.getElementById("topright").innerHTML=d;
    </script>
    <nav>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="navbtn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>
        <img src="ZDT.png" alt="Namma Barkur">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="tourist.html">Tourist places</a></li> 
            <li><a class="active" href="#services">Services</a></li>
            <li><a href="index.html#about">About Us</a></li>
        </ul>
    </nav>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="up-chevron.png" width="54px" height="54px"></button>
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");
        
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }
        
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
    </script>
     
     <?php

     include 'config.php';

     if(isset($_POST['submit'])){
       $email=$_POST['email'];
       $psw=$_POST['psw'];

       $emailsearch="select * from register where email='$email'";
       $query=mysqli_query($con,$emailsearch);
       $email_count=mysqli_num_rows($query);

       if($email_count){
         $email_pass=mysqli_fetch_assoc($query);

         $_SESSION['username']=$email_pass['username'];

         $dbpass=$email_pass['psw'];
         $pass_decode=password_verify($psw, $dbpass);

         if($pass_decode){
          ?>
          <script>
               alert("Login successful");
               location.replace("services.php");
          </script>
          <?php
         }
         else{
          ?>
          <script>
               alert("Incorrect Password");
          </script>
          <?php
          session_destroy();
         }
       }
       else{
        ?>
        <script>
             alert("Invalid Email");
        </script>
        <?php
        session_destroy();
       }
     }

    ?>
    <div class="alert fadeOut" id="hide">
          <span class="fas fa-exclamation-circle"></span>
          <span class="msg">This is only for people residing in & around Barkur.</span>
          <div class="close-btn">
            <a onclick="myFunction()"><span class="fas fa-times"></span></a>
          </div>
    </div>
    <script>
          function myFunction(){
            var x=document.getElementById("hide");
            if(x.style.display !=="none"){
                x.style.display="none";
            }
          }
    </script>
    <br>
    <div class="container2">   
        <h1>Login</h1>
        <p>Please login to avail services</p><br>
    </div> 

      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"> 
          <label for="email"><b>Email</b></label><br>
          <input type="email" placeholder="Enter Email" name="email" required><br>
      
          <label for="psw"><b>Password</b></label><br>
          <input type="password" placeholder="Enter Password" name="psw" required><br>
      
          <button type="submit" name="submit" class="registerbtn">Login</button>
      </form>
    <div class="signin">
          <p>Don't have an account? <a href="register.php">Sign up</a>.</p>
    </div>
    <hr>

    <footer>
    <br>
    <h1 align="center"><u>Contact Us</u></h1>
    <div id="contactus" class="main-content">
        <div class="left box">
            <div class="phone">
                <span class="fas fa-phone-alt">  Phone</span>
            </div>    
          <div class="content">
            <p>+91-910-814-0026</p>
            <p>+91-959-101-3999</p>
          </div>
        </div>
        <div class="center box">
            <div class="email">
                <span class="fas fa-envelope">  Email</span>
            </div>    
          <div class="content">
            <p>support@nammabarkur.in</p>
            <p>24x7 online support</p>
          </div>
        </div>
        <div class="right box">
            <h2>Social Media</h2>
            <div class="content">
                <div class="social">
                    <a href="#contactus" class="fb"><span class="fab fa-facebook-f">  </span></a>
                    <a href="#contactus" class="tw"><span class="fab fa-twitter">  </span></a>
                    <a href="#contactus" class="ig"><span class="fab fa-instagram">  </span></a>
                    <a href="#contactus" class="yt"><span class="fab fa-youtube">  </span></a>
                </div>
            </div>
        </div>
    </div>
    <div align="center">
        <span class="fa fa-copyright"> 2020-21 Namma Barkur</span>
        <p>All rights reserved</p>
    </div>
    </footer>
</body>
</html>