<?php

session_start();

if (!isset($_SESSION['username'])) {
  echo "You are logged out.";
  header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* The Modal (background) */

    .modal {
      display: none;
      /* Hidden by default */
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
    }

    .modal,
    .modal-content {
      position: absolute;
      top: 75%;
      left: 50%;
      transform: translate(-50%, -75%);
    }

    .modal-content {
      width: 700px;
      height: 415px;
      background: white;
      border-radius: 3px;
      transition: .3s ease-in;
      box-shadow: 0 2px 12px 0 rgba(0, 0, 0, 0.4);
    }

    .modal-header {
      height: 68px;
      background: #27ae60;
      overflow: hidden;
      border-radius: 3px 3px 0 0;
      box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.2);
    }

    .modal-header h2 {
      color: white;
      padding-left: 32px;
      font-weight: normal;
    }

    .fa-times {
      position: absolute;
      right: 20px;
      top: 20px;
      color: #e8f7fc;
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
    }

    .modal-body {
      width: 150%;
      margin-left: -100px;
      font-size: 19px;
      color: #1a1a1a;
    }

    .line {
      bottom: 60px;
      margin-left: 0px;
      width: 100%;
      height: 1px;
      background: silver;
    }

    .confirm {
      position: absolute;
      bottom: 12px;
      right: 25px;
      border: 1px solid #27ae60;
      border-radius: 3px;
      background: white;
      color: #27ae60;
      padding: 8px 10px;
      font-size: 18px;
      cursor: pointer;
    }

    .confirm:hover {
      background: #27ae60;
      color: white;
      transition: .5s;
    }

    @media (max-width:820px) {
      .modal-content {
        width: 370px;
        height: 380px;
      }

      .modal,
      .modal-content {
        position: fixed;
      }

      .modal-body {
        width: 120%;
        font-size: 16px;
        margin-left: -20px;
      }

      .line {
        width: 95%;
      }
    }

    .services {
      width: 100%;
      height: 100%;
      background-image: url(https://ak.picdn.net/shutterstock/videos/4170415/thumb/1.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center bottom;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    .s-heading {
      text-align: center;
    }

    .s-heading h1 {
      font-size: 42px;
      font-weight: 400;
      margin: 0px;
    }

    .s-box-container {
      width: 100%;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
    }

    .s-box {
      display: flex;
      flex-wrap: wrap;
      background: rgba(0, 0, 0, 0.5);
      color: white;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      border-radius: 10px;
      min-width: 400px;
      height: max-content;
      padding: 20px 25px;
      margin: 30px;
      margin-left: 100px;
      margin-right: 100px;
      position: relative;
    }

    @media (max-width: 820px) {
      .s-box {
        min-width: 280px;
      }

      .s-heading h1 {
        font-size: 36px;
      }

      p {
        font-size: 14px;
      }
    }

    .s-box img {
      filter: invert(100%);
    }

    .s-box h2 {
      margin-bottom: 8px;
    }

    .s-box p {
      text-align: center;
    }

    .s-btn {
      width: 140px;
      height: 40px;
      background: #F5F5F5;
      outline: none;
      border-radius: 20px;
      border: 1px solid black;
      display: flex;
      cursor: pointer;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
    }

    .s-box:hover {
      background-color: white;
      color: black;
      box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.8);
      transition: all ease 0.3s;
    }

    .s-box:hover img {
      filter: none;
    }

    .s-btn:hover {
      background-color: #4CAF50;
      border: 1px solid #4CAF50;
      color: #FFFFFF;
      transition: all ease 0.3s;
    }

    .s-btn:hover a {
      color: #FFFFFF;
    }

    .s-bar {
      width: 200px;
      height: 10px;
      position: absolute;
      left: 50%;
      top: 0px;
      transform: translateX(-50%);
      background-color: #4CAF50;
      border-radius: 0px 0px 10px 10px;
      display: none;
      animation: s-bar 0.5s;
    }

    .s-box:hover .s-bar {
      display: block;
    }

    @keyframes s-bar {
      0% {
        width: 0px;
      }

      100% {
        width: 200px;
      }
    }

    .contact_btn {
      width: max-content;
      margin: auto;
      padding: 0 22px;
      cursor: pointer;
      background-color: #4CAF50;
      border: none;
    }

    .contact_btn a {
      text-decoration: none;
      color: #111;
    }

    .contact_btn a:hover {
      color: white;
      text-decoration: none;
    }
  </style>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
  <p id="topright"></p>
  <script>
    var d = new Date();
    document.getElementById("topright").innerHTML = d;
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
      <li>
        <div class="contact_btn">
          <a href="logout.php">Logout</a>
        </div>
      </li>
    </ul>
  </nav>
  <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="up-chevron.png" width="54px" height="54px"></button>
  <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
      scrollFunction()
    };

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

  if (isset($_POST['submit1'])) {
    $username = $_SESSION['username'];
    $deliverydate = $_POST['deliverydate'];
    $paymethod = $_POST['paymethod'];
    $count=1;
    $item = 'Coconut Plucking service';
    $price = 400;
    $insertitem = "INSERT into itemcart(itemno,itemname,price) values('$count','$item','$price')";
    $itemquery = mysqli_query($con, $insertitem);
    $insertquery = "INSERT into orderdetails(username,deliverydate,paymethod) values('$username','$deliverydate','$paymethod')";
    $iquery = mysqli_query($con, $insertquery);
    $updateoid = "UPDATE itemcart SET orderid=(SELECT orderid FROM orderdetails ORDER BY orderid DESC LIMIT 1) WHERE orderid=-1";
    $oidquery = mysqli_query($con, $updateoid);

    if ($paymethod == 'cash') {
  ?>
      <script>
        alert("Booking placed successfully for <?php echo date("d-m-Y", strtotime($deliverydate)); ?>");
        window.open("receipt.php", "_blank");
      </script>
    <?php
    } else {
    ?>
      <script>
        alert("Card service not ready");
      </script>
  <?php
    }
  }
  ?>


  <div class="services">
    <br><br>
    <div class="s-heading">
      <h1 style="text-transform: capitalize;">Hello, <?php echo $_SESSION['username']; ?></h1>
      <h3>Welcome to our services</h3>
    </div>
    <div class="s-box-container">
      <div class="s-box">
        <div class="s-bar">
        </div>
        <br>
        <img src="https://image.flaticon.com/icons/png/512/28/28679.png" width="70px" height="70px">
        <h2>Coconut Pluckers</h2>
        <br>
        <p style="line-height: 200%">Available timing:<br>Monday-Friday | 9:00am-4:00pm<br>Saturday | 9:00am-12:00pm<br>Sunday Holiday</p>
        <button id="myBtn1" class="s-btn">Book appointment</button>
      </div>
      <div class="s-box">
        <div class="s-bar">
        </div>
        <br>
        <img src="https://static.thenounproject.com/png/79159-200.png" width="70px" height="70px">
        <h2>Grocery Store</h2>
        <br>
        <p style="line-height: 0">Delivery availablity:11:00am-9:00pm</p>
        <ol>
          <li>Organic vegetables & fruits</li><br>
          <li>Meat & seafood</li>
        </ol>
        <p style="line-height: 0">Doorstep delivery within 8hours</p><br>
        <button class="s-btn" id="myBtn2" onclick="location.href='grocery.php';">Browse store</button>
      </div>
    </div>
  </div>


  <div class="modal" id="myModal">
    <div class="modal-content">
      <div class="modal-header">
        <h2>Booking details:</h2>
        <span class="close1"><span class="fas fa-times"></span></span>
      </div>
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="modal-body">
          <p>Minimum charge: ₹400(Exclusive of GST & additional costs*)</p>
          <label for="deliverydate">Select particular date:</label>
          <input type="date" name="deliverydate" min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d', strtotime(' + 1month')); ?>" required><br>
          <p>*Additional costs might include extra work done which can be paid later at doorstep.</p>
          <h3>Select Payment Method</h3>
          <input type="radio" name="paymethod" value="cash" checked>
          <label for="cash">Cash</label><br>
          <input type="radio" name="paymethod" value="card">
          <label for="card">Card </label><br><br>
          <div class="line"></div>
          <input type="submit" class="confirm" name="submit1" value="Confirm order">
        </div>
      </form>
    </div>
  </div>

  <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn1");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close1")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

  <footer>
    <br>
    <h1 align="center"><u>Contact Us</u></h1>
    <div id="contactus" class="main-content">
      <div class="left box">
        <div class="phone">
          <span class="fas fa-phone-alt"> Phone</span>
        </div>
        <div class="content">
          <p>+91-910-814-0026</p>
          <p>+91-959-101-3999</p>
        </div>
      </div>
      <div class="center box">
        <div class="email">
          <span class="fas fa-envelope"> Email</span>
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
            <a href="#contactus" class="fb"><span class="fab fa-facebook-f"> </span></a>
            <a href="#contactus" class="tw"><span class="fab fa-twitter"> </span></a>
            <a href="#contactus" class="ig"><span class="fab fa-instagram"> </span></a>
            <a href="#contactus" class="yt"><span class="fab fa-youtube"> </span></a>
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