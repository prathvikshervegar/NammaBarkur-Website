<?php
session_start();

if(!isset($_SESSION['counter'])){
    $_SESSION['counter']=0;
}
if(!isset($oid)){
    $oid=$_SESSION['username'];
}
if(!isset($z)){
    $z=0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namma Barkur Grocery store</title>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" href="gg.css">
    <style>

    </style>
    <script>
        function openSlideMenu() {
            document.getElementById('menu').style.width = '200px';
            document.getElementById('content').style.marginLeft = '200px';
        }

        function closeSlideMenu() {
            document.getElementById('menu').style.width = '0px';
            document.getElementById('content').style.marginLeft = '0px';
        }
    </script>
</head>

<body>
    <div class="parallax">
        <div id="content">
            <span class="slide">
                <label onclick="openSlideMenu()">
                    <i class="fas fa-bars"></i>
                </label>
            </span>
            <div id="menu" class="nav">
                <label class="close" onclick="closeSlideMenu()">
                    <i class="fas fa-times"></i>
                </label>
                <a href="#" onclick="closeSlideMenu()">Home</a>
                <a href="#vegetables" onclick="closeSlideMenu()">Vegetables</a>
                <a href="#fruits" onclick="closeSlideMenu()">Fruits</a>
                <a href="#meat" onclick="closeSlideMenu()">Meat & Seafood</a>
                <button class="cart" id="myBtn1">
                    <p style="cursor:pointer">Cart <i class="fas fa-shopping-cart"></i></p>
                </button>
            </div>
        </div>
        <div class="page-title">Namma Barkur Grocery</div>
    </div>
    <div class="gap">
        <marquee direction="left">Same day delivery possible, if ordered before 06:30pm</marquee>
    </div>

    <?php

    include 'config.php';

    if (isset($_POST['buy1'])) {
        $count=++$_SESSION['counter'];
        $item = 'Organic Okra';
        $qty = $_POST['qty1'];
        $price = $qty * 30 / 250;
        $insertitem = "INSERT into itemcart(itemno,itemname,qty,price,orderid) values('$count','$item','$qty','$price','$oid')";
        $itemquery = mysqli_query($con, $insertitem);
    ?>
        <script>
            alert("<?php echo $qty . " grams of " . $item . " has been added to cart"; ?>");
        </script>
    <?php
    } elseif (isset($_POST['buy2'])) {
        $count=++$_SESSION['counter'];
        $item = 'Organic Green peas';
        $qty = $_POST['qty2'];
        $price = $qty * 20 / 250;
        $insertitem = "INSERT into itemcart(itemno,itemname,qty,price,orderid) values('$count','$item','$qty','$price','$oid')";
        $itemquery = mysqli_query($con, $insertitem);
    ?>
        <script>
            alert("<?php echo $qty . " grams of " . $item . " has been added to cart"; ?>");
        </script>
    <?php
    } elseif (isset($_POST['buy3'])) {
        $count=++$_SESSION['counter'];
        $item = 'Organic Tomatoes';
        $qty = $_POST['qty3'];
        $price = $qty * 15 / 250;
        $insertitem = "INSERT into itemcart(itemno,itemname,qty,price,orderid) values('$count','$item','$qty','$price','$oid')";
        $itemquery = mysqli_query($con, $insertitem);
    ?>
        <script>
            alert("<?php echo $qty . " grams of " . $item . " has been added to cart"; ?>");
        </script>
    <?php
    } elseif (isset($_POST['buy4'])) {
        $count=++$_SESSION['counter'];
        $item = 'Organic Spinach';
        $qty = $_POST['qty4'];
        $price = $qty * 30 / 250;
        $insertitem = "INSERT into itemcart(itemno,itemname,qty,price,orderid) values('$count','$item','$qty','$price','$oid')";
        $itemquery = mysqli_query($con, $insertitem);
    ?>
        <script>
            alert("<?php echo $qty . " grams of " . $item . " has been added to cart"; ?>");
        </script>
    <?php
    } elseif (isset($_POST['buy5'])) {
        $count=++$_SESSION['counter'];
        $item = 'Organic Onion';
        $qty = $_POST['qty5'];
        $price = $qty * 17.50 / 250;
        $insertitem = "INSERT into itemcart(itemno,itemname,qty,price,orderid) values('$count','$item','$qty','$price','$oid')";
        $itemquery = mysqli_query($con, $insertitem);
    ?>
        <script>
            alert("<?php echo $qty . " grams of " . $item . " has been added to cart"; ?>");
        </script>
    <?php
    } elseif (isset($_POST['buy6'])) {
        $count=++$_SESSION['counter'];
        $item = 'Banana';
        $qty = $_POST['qty6'];
        $price = $qty * 18 / 250;
        $insertitem = "INSERT into itemcart(itemno,itemname,qty,price,orderid) values('$count','$item','$qty','$price','$oid')";
        $itemquery = mysqli_query($con, $insertitem);
    ?>
        <script>
            alert("<?php echo $qty . " grams of " . $item . " has been added to cart"; ?>");
        </script>
    <?php
    } elseif (isset($_POST['buy7'])) {
        $count=++$_SESSION['counter'];
        $item = 'Strawberry';
        $qty = $_POST['qty7'];
        $price = $qty * 25 / 250;
        $insertitem = "INSERT into itemcart(itemno,itemname,qty,price,orderid) values('$count','$item','$qty','$price','$oid')";
        $itemquery = mysqli_query($con, $insertitem);
    ?>
        <script>
            alert("<?php echo $qty . " grams of " . $item . " has been added to cart"; ?>");
        </script>
    <?php
    } elseif (isset($_POST['buy8'])) {
        $count=++$_SESSION['counter'];
        $item = 'Pineapple';
        $qty = $_POST['qty8'];
        $price = $qty * 20 / 250;
        $insertitem = "INSERT into itemcart(itemno,itemname,qty,price,orderid) values('$count','$item','$qty','$price','$oid')";
        $itemquery = mysqli_query($con, $insertitem);
    ?>
        <script>
            alert("<?php echo $qty . " grams of " . $item . " has been added to cart"; ?>");
        </script>
    <?php
    } elseif (isset($_POST['buy9'])) {
        $count=++$_SESSION['counter'];
        $item = 'Watermelon';
        $qty = $_POST['qty9'];
        $price = $qty * 10 / 250;
        $insertitem = "INSERT into itemcart(itemno,itemname,qty,price,orderid) values('$count','$item','$qty','$price','$oid')";
        $itemquery = mysqli_query($con, $insertitem);
    ?>
        <script>
            alert("<?php echo $qty . " grams of " . $item . " has been added to cart"; ?>");
        </script>
    <?php
    } elseif (isset($_POST['buy10'])) {
        $count=++$_SESSION['counter'];
        $item = 'Musambi';
        $qty = $_POST['qty10'];
        $price = $qty * 12.50 / 250;
        $insertitem = "INSERT into itemcart(itemno,itemname,qty,price,orderid) values('$count','$item','$qty','$price','$oid')";
        $itemquery = mysqli_query($con, $insertitem);
    ?>
        <script>
            alert("<?php echo $qty . " grams of " . $item . " has been added to cart"; ?>");
        </script>
    <?php
    } elseif (isset($_POST['buy11'])) {
        $count=++$_SESSION['counter'];
        $item = 'Chicken';
        $qty = $_POST['qty11'];
        $price = $qty * 60 / 500;
        $insertitem = "INSERT into itemcart(itemno,itemname,qty,price,orderid) values('$count','$item','$qty','$price','$oid')";
        $itemquery = mysqli_query($con, $insertitem);
    ?>
        <script>
            alert("<?php echo $qty . " grams of " . $item . " has been added to cart"; ?>");
        </script>
    <?php
    } elseif (isset($_POST['buy12'])) {
        $count=++$_SESSION['counter'];
        $item = 'Mutton';
        $qty = $_POST['qty12'];
        $price = $qty * 300 / 500;
        $insertitem = "INSERT into itemcart(itemno,itemname,qty,price,orderid) values('$count','$item','$qty','$price','$oid')";
        $itemquery = mysqli_query($con, $insertitem);
    ?>
        <script>
            alert("<?php echo $qty . " grams of " . $item . " has been added to cart"; ?>");
        </script>
    <?php
    } elseif (isset($_POST['buy13'])) {
        $count=++$_SESSION['counter'];
        $item = 'Prawns';
        $qty = $_POST['qty13'];
        $price = $qty * 100 / 500;
        $insertitem = "INSERT into itemcart(itemno,itemname,qty,price,orderid) values('$count','$item','$qty','$price','$oid')";
        $itemquery = mysqli_query($con, $insertitem);
    ?>
        <script>
            alert("<?php echo $qty . " grams of " . $item . " has been added to cart"; ?>");
        </script>
    <?php
    } elseif (isset($_POST['buy14'])) {
        $count=++$_SESSION['counter'];
        $item = 'Freshwater fish';
        $qty = $_POST['qty14'];
        $price = $qty * 50 / 500;
        $insertitem = "INSERT into itemcart(itemno,itemname,qty,price,orderid) values('$count','$item','$qty','$price','$oid')";
        $itemquery = mysqli_query($con, $insertitem);
    ?>
        <script>
            alert("<?php echo $qty . " grams of " . $item . " has been added to cart"; ?>");
        </script>
    <?php
    } else {
        echo "|";
    }

    if (isset($_POST['reset'])){
        ?>
                <script>
                    alert("Cart cleared!");
                </script>
        <?php
        $_SESSION['counter']=0;
        $emptycart = "DELETE from itemcart WHERE orderid='$oid'";
        $emptyquery = mysqli_query($con, $emptycart);
    }

    if (isset($_POST['submit2'])) {
        $username = $_SESSION['username'];
        $deliverydate = $_POST['deliverydate'];
        $paymethod = $_POST['paymethod'];

        $insertquery = "INSERT into orderdetails(username,deliverydate,paymethod) values('$username','$deliverydate','$paymethod')";
        $iquery = mysqli_query($con, $insertquery);
        $updateoid = "UPDATE itemcart SET orderid=(SELECT orderid FROM orderdetails ORDER BY orderid DESC LIMIT 1) WHERE orderid='$oid'";
        $oidquery = mysqli_query($con, $updateoid);
        $_SESSION['counter']=0;

        if ($paymethod == 'cash') {
        ?>
            <script>
                alert("Order successfully placed");
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

    <div class="container">
        <a href="#vegetables">
            <div class="categories">
                <img src="https://nhncwtttsf-flywheel.netdna-ssl.com/6/wp-content/uploads/sites/29/2019/01/Eat-Vegetables.jpg" class="item-image">
                <div class="image-title">Vegetables</div>
            </div>
        </a>
        <a href="#fruits">
            <div class="categories">
                <img src="https://www.diagnosisdiet.com/assets/images/c/fruit-og-d176ef00.jpg" class="item-image">
                <div class="image-title">Fruits</div>
            </div>
        </a>
        <a href="#meat">
            <div class="categories">
                <img src="https://www.foodsafetynews.com/files/2016/05/fishchickendairy_406x250-1.jpg" class="item-image">
                <div class="image-title">Meat & Seafood</div>
            </div>
        </a>
    </div>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="item-container" id="vegetables">
            <div class="parallax">
                <div class="title">VEGETABLES</div>
            </div>
            <div class="items">
                <div class="images">
                    <img src="https://media.npr.org/assets/img/2012/07/30/okra-cedf06a6a383adb0af179cabd2cee13df5fa76f7-s1600-c85.jpg" class="item-image-size">
                </div>
                <div class="description">
                    <b>Organic Okra</b><br>
                    <div class="item-select">
                        Price: ₹30/250grams
                    </div>
                    <label>Qty:</label>
                    <select name="qty1" id="qty" class="item-select">
                        <option value="250" selected>250 grams</option>
                        <option value="500">500 grams</option>
                        <option value="750">750 grams</option>
                        <option value="1000">1000 grams</option>
                    </select><br>
                    <button class="buynow-btn" type="submit" name="buy1">Buy Now</button>
                </div>
            </div>
            <div class="items">
                <div class="images">
                    <img src="https://tiimg.tistatic.com/fp/1/004/718/green-peas-962.jpg" class="item-image-size">
                </div>
                <div class="description">
                    <b>Organic Green peas</b><br>
                    <div class="item-select">
                        Price: ₹20/250grams
                    </div>
                    <label>Qty:</label>
                    <select name="qty2" id="qty" class="item-select">
                        <option value="250" selected>250 grams</option>
                        <option value="500">500 grams</option>
                        <option value="750">750 grams</option>
                        <option value="1000">1000 grams</option>
                    </select><br>
                    <button class="buynow-btn" type="submit" name="buy2">Buy Now</button>
                </div>
            </div>
            <div class="items">
                <div class="images">
                    <img src="https://media.npr.org/assets/img/2013/02/20/organictomatoess-439e401527a68193bc97ebea1f2c683db2b31233-s1600-c85.jpg" class="item-image-size">
                </div>
                <div class="description">
                    <b>Organic Tomato</b><br>
                    <div class="item-select">
                        Price: ₹15/250grams
                    </div>
                    <label>Qty:</label>
                    <select name="qty3" id="qty" class="item-select">
                        <option value="250" selected>250 grams</option>
                        <option value="500">500 grams</option>
                        <option value="750">750 grams</option>
                        <option value="1000">1000 grams</option>
                    </select><br>
                    <button class="buynow-btn" type="submit" name="buy3">Buy Now</button>
                </div>
            </div>
            <div class="items">
                <div class="images">
                    <img src="https://sites.udel.edu/chs-udfoodlab/files/2018/01/spinach-leaves-12ma9t1.jpg" class="item-image-size">
                </div>
                <div class="description">
                    <b>Organic Spinach</b><br>
                    <div class="item-select">
                        Price: ₹30/250grams
                    </div>
                    <label>Qty:</label>
                    <select name="qty4" id="qty" class="item-select">
                        <option value="250" selected>250 grams</option>
                        <option value="500">500 grams</option>
                        <option value="750">750 grams</option>
                        <option value="1000">1000 grams</option>
                    </select><br>
                    <button class="buynow-btn" type="submit" name="buy4">Buy Now</button>
                </div>
            </div>
            <div class="items">
                <div class="images">
                    <img src="https://www.adaptiveseeds.com/wp-content/uploads/2014/12/p-6988-onion_turdared1.jpg" class="item-image-size">
                </div>
                <div class="description">
                    <b>Organic Onion</b><br>
                    <div class="item-select">
                        Price: ₹17.50/250grams
                    </div>
                    <label>Qty:</label>
                    <select name="qty5" id="qty" class="item-select">
                        <option value="250" selected>250 grams</option>
                        <option value="500">500 grams</option>
                        <option value="750">750 grams</option>
                        <option value="1000">1000 grams</option>
                    </select><br>
                    <button class="buynow-btn" type="submit" name="buy5">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="item-container" id="fruits">
            <div class="parallax">
                <div class="title">FRUITS</div>
            </div>
            <div class="items">
                <div class="images">
                    <img src="https://cosmosmagazine.com/wp-content/uploads/2020/02/100118_Debunked_01.jpg" class="item-image-size">
                </div>
                <div class="description">
                    <b>Banana</b><br>
                    <div class="item-select">
                        Price: ₹18/250grams
                    </div>
                    <label>Qty:</label>
                    <select name="qty6" id="qty" class="item-select">
                        <option value="250" selected>250 grams</option>
                        <option value="500">500 grams</option>
                        <option value="750">750 grams</option>
                        <option value="1000">1000 grams</option>
                    </select><br>
                    <button class="buynow-btn" type="submit" name="buy6">Buy Now</button>
                </div>
            </div>
            <div class="items">
                <div class="images">
                    <img src="https://hips.hearstapps.com/clv.h-cdn.co/assets/15/22/2560x1728/gallery-1432664914-strawberry-facts1.jpg?resize=768:*" class="item-image-size">
                </div>
                <div class="description">
                    <b>Strawberry</b><br>
                    <div class="item-select">
                        Price: ₹25/250grams
                    </div>
                    <label>Qty:</label>
                    <select name="qty7" id="qty" class="item-select">
                        <option value="250" selected>250 grams</option>
                        <option value="500">500 grams</option>
                        <option value="750">750 grams</option>
                        <option value="1000">1000 grams</option>
                    </select><br>
                    <button class="buynow-btn" type="submit" name="buy7">Buy Now</button>
                </div>
            </div>
            <div class="items">
                <div class="images">
                    <img src="https://media.self.com/photos/5b4371cc4d0c3c282a8878d3/4:3/w_2560%2Cc_limit/pineapple.jpg" class="item-image-size">
                </div>
                <div class="description">
                    <b>Pineapple</b><br>
                    <div class="item-select">
                        Price: ₹20/250grams
                    </div>
                    <label>Qty:</label>
                    <select name="qty8" id="qty" class="item-select">
                        <option value="250" selected>250 grams</option>
                        <option value="500">500 grams</option>
                        <option value="750">750 grams</option>
                        <option value="1000">1000 grams</option>
                    </select><br>
                    <button class="buynow-btn" type="submit" name="buy8">Buy Now</button>
                </div>
            </div>
            <div class="items">
                <div class="images">
                    <img src="https://i0.wp.com/www.gardeningchannel.com/wp-content/uploads/2013/01/red-1696337_640.jpg?w=640&ssl=1" class="item-image-size">
                </div>
                <div class="description">
                    <b>Watermelon</b><br>
                    <div class="item-select">
                        Price: ₹10/250grams
                    </div>
                    <label>Qty:</label>
                    <select name="qty9" id="qty" class="item-select">
                        <option value="250" selected>250 grams</option>
                        <option value="500">500 grams</option>
                        <option value="750">750 grams</option>
                        <option value="1000">1000 grams</option>
                    </select><br>
                    <button class="buynow-btn" type="submit" name="buy9">Buy Now</button>
                </div>
            </div>
            <div class="items">
                <div class="images">
                    <img src="https://www.boldsky.com/img/2018/08/xcover-1535717522.jpg.pagespeed.ic.RmSdinJs6Z.jpg" class="item-image-size">
                </div>
                <div class="description">
                    <b>Musambi</b><br>
                    <div class="item-select">
                        Price: ₹12.50/250grams
                    </div>
                    <label>Qty:</label>
                    <select name="qty10" id="qty" class="item-select">
                        <option value="250" selected>250 grams</option>
                        <option value="500">500 grams</option>
                        <option value="750">750 grams</option>
                        <option value="1000">1000 grams</option>
                    </select><br>
                    <button class="buynow-btn" type="submit" name="buy10">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="item-container" id="meat">
            <div class="parallax">
                <div class="title">MEAT & SEAFOOD</div>
            </div>
            <div class="items">
                <div class="images">
                    <img src="https://img3.exportersindia.com/product_images/bc-full/dir_81/2406819/raw-chicken-1309774.jpg" class="item-image-size">
                </div>
                <div class="description">
                    <b>Chicken</b><br>
                    <div class="item-select">
                        Price: ₹60/500grams
                    </div>
                    <label>Qty:</label>
                    <select name="qty11" id="qty" class="item-select">
                        <option value="500" selected>500 grams</option>
                        <option value="1000">1000 grams</option>
                        <option value="1500">1500 grams</option>
                        <option value="2000">2000 grams</option>
                    </select><br>
                    <button class="buynow-btn" type="submit" name="buy11">Buy Now</button>
                </div>
            </div>
            <div class="items">
                <div class="images">
                    <img src="https://i0.wp.com/blogrator.com/wp-content/uploads/2020/07/Fresh-Meat-MUTTON.jpg?w=390" class="item-image-size">
                </div>
                <div class="description">
                    <b>Mutton(Lamb)</b><br>
                    <div class="item-select">
                        Price: ₹300/500grams
                    </div>
                    <label>Qty:</label>
                    <select name="qty12" id="qty" class="item-select">
                        <option value="500" selected>500 grams</option>
                        <option value="1000">1000 grams</option>
                        <option value="1500">1500 grams</option>
                        <option value="2000">2000 grams</option>
                    </select><br>
                    <button class="buynow-btn" type="submit" name="buy12">Buy Now</button>
                </div>
            </div>
            <div class="items">
                <div class="images">
                    <img src="https://i.pinimg.com/564x/d4/4f/3f/d44f3f9af46625fcb921e6c56cb3dd33.jpg" class="item-image-size">
                </div>
                <div class="description">
                    <b>Peeled Prawns</b><br>
                    <div class="item-select">
                        Price: ₹100/500grams
                    </div>
                    <label>Qty:</label>
                    <select name="qty13" id="qty" class="item-select">
                        <option value="500" selected>500 grams</option>
                        <option value="1000">1000 grams</option>
                        <option value="1500">1500 grams</option>
                        <option value="2000">2000 grams</option>
                    </select><br>
                    <button class="buynow-btn" type="submit" name="buy13">Buy Now</button>
                </div>
            </div>
            <div class="items">
                <div class="images">
                    <img src="https://i.pinimg.com/236x/1d/fe/a9/1dfea98d843ef586f375a2b9620b7819.jpg" class="item-image-size">
                </div>
                <div class="description">
                    <b>Freshwater Fish</b><br>
                    <div class="item-select">
                        Price: ₹50/500grams
                    </div>
                    <label>Qty:</label>
                    <select name="qty14" id="qty" class="item-select">
                        <option value="500" selected>500 grams</option>
                        <option value="1000">1000 grams</option>
                        <option value="1500">1500 grams</option>
                        <option value="2000">2000 grams</option>
                    </select><br>
                    <button class="buynow-btn" type="submit" name="buy14">Buy Now</button>
                </div>
            </div>
        </div>
    </form>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Checkout cart:</h2>
                <span class="close1"><span class="fas fa-times"></span></span>
            </div>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="modal-body">
                    <table style="width: 100%">
                        <tr>
                            <th colspan=10>Item</th>
                            <th>Quantity</th>
                            <th>Net amount</th>
                        </tr>
                        <?php
                        $bbb = "SELECT * FROM itemcart WHERE orderid='$oid' ORDER BY itemno";
                        $query1 = mysqli_query($con, $bbb);
                        while ($row = mysqli_fetch_array($query1)) {
                            $a1 = $row[1];
                            $b1 = $row[2];
                            $c1 = $row[3];
                            $z = $z + $c1;
                        ?>
                            <tr>
                                <td colspan=10><?php echo $a1; ?></td>
                                <td><?php echo $b1 . "grams"; ?></td>
                                <td><?php echo $c1; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                        <tr>
                            <td colspan=10></td>
                            <th>TOTAL AMOUNT*:</th>
                            <td><?php echo $z . ".00"; ?></td>
                        </tr>
                    </table>
                    <?php
                    if ($z != 0) {
                    ?>
                        <?php
                        date_default_timezone_set("Asia/Kolkata");
                        $t1 = date("H:i:s");
                        $t2 = "18:30:00";
                        if ($t1 <= $t2) {
                        ?><label for="deliverydate">Select delivery date:</label>
                            <input type="date" name="deliverydate" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d', strtotime(' + 5 days')); ?>" required><br>
                        <?php
                        } else {
                        ?><br><label for="deliverydate">Select delivery date:</label>
                            <input type="date" name="deliverydate" value="<?php echo date('Y-m-d', strtotime('tomorrow')); ?>" min="<?php echo date('Y-m-d', strtotime('tomorrow')); ?>" max="<?php echo date('Y-m-d', strtotime(' + 6 days')); ?>" required><br>
                    <?php
                        }
                    }
                    ?></p>
                    <p>*Exclusive of GST.
                    <?php
                    if ($z != 0) {
                    ?>
                        <button style="float: right; margin-right: 30px" type="submit" name="reset">Empty Cart</button></p>
                        <h3>Select Payment Method</h3>
                        <input type="radio" name="paymethod" value="cash" checked>
                        <label for="cash">Cash</label><br>
                        <input type="radio" name="paymethod" value="card">
                        <label for="card">Card </label><br><br>
                        <input type="submit" class="confirm" name="submit2" value="Confirm order">
                    <?php
                    }
                    ?>
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
    <footer id="sticky">
        <a href="services.php"><span class="back"><i class="fas fa-arrow-left"></i>Back to Services</span></a>
        <span class="copyright"><i class="fas fa-copyright"></i>2020-21 Namma Barkur</span>
    </footer>
</body>

</html>