<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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
         $username=$_POST['username'];
         $email=$_POST['email'];
         $mobile=$_POST['mobile'];
         $addr=$_POST['addr'];
         $psw=$_POST['psw'];
         $pswrepeat=$_POST['pswrepeat'];

         $pass=password_hash($psw, PASSWORD_BCRYPT);
         $repass=password_hash($pswrepeat, PASSWORD_BCRYPT);

         $emailquery="select * from register where email='$email'";
         $query=mysqli_query($con,$emailquery);
         $emailcount=mysqli_num_rows($query);
         
         if($emailcount>0){
             ?>
                 <script>
                      alert("Email already exists!");
                 </script>
             <?php
         }
         else{
             if($psw===$pswrepeat){
                 $insertquery="INSERT into register(username,email,mobile,addr,psw,pswrepeat) values('$username','$email','$mobile','$addr','$pass','$repass')";
                 $iquery=mysqli_query($con,$insertquery);
                 ?>
                 <script>
                      alert("Account created successfully, please login to continue...");
                      location.replace("login.php");
                 </script>
                 <?php

             }
             else{
                 ?>
                 <script>
                      alert("Password doesnot match!");
                 </script>
             <?php   
             }
     }
    }

    ?>
     <div class="container2">
         <h1>Register</h1>
        <div class="signin">
          <p>Already have an account? <a href="login.php">Sign in</a>.</p>
        </div>
        <hr>
        <br>
        <p>Fill in this form to create an account.</p>
      </div>
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
          <label for="username"><b>Full Name</b></label><br>
          <input type="text" placeholder="Enter full name" name="username" required><br>
      
          <label for="email"><b>Email</b></label><br>
          <input type="email" placeholder="Enter Email" name="email"  required><br>

          <label for="mobile"><b>Mobile No.</b></label><br>
          <input type="text" placeholder="Enter Mobile No." name="mobile" min="10" max="10" ><br>

          <label for="addr"><b>Address</b></label><br>
          <textarea class="adr" name="addr" placeholder="Enter Address..." rows="5" column="60" ></textarea><br>
      
          <label for="psw"><b>Password</b></label><br>
          <input type="password" placeholder="Enter Password" name="psw" required><br>
      
          <label for="pswrepeat"><b>Repeat Password</b></label><br>
          <input type="password" placeholder="Repeat Password" name="pswrepeat" required><br>
          <p><input type="checkbox" name="terms" required>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
      
          <button type="submit" name="submit" class="registerbtn">Create Account</button>
      </form>
      <hr>
      <br>
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