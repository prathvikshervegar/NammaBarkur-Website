<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width:device-width, user-scalable=no;">
	
	<title>Service receipt</title>
	
	<link rel='stylesheet' type='text/css' href='rc.css' />

</head>

<body>

	<div id="page-wrap">

		<div id="header">INVOICE</div>
		
		<div id="identity">
		
            <div id="address">
			Namma Barkur Regd.<br>
			#203/7 Pranam Complex,<br>
			Car-Street, Barkurpete <br>
			Phone: (555) 555-5555<br><br>
			<p><b>PAN No:</b> AFAPB5847D</p>
			<p><b>GSTIN:</b> 27AFAPB5847D1ZT</p></div>

            <div id="logo">
              <img id="image" src="ZDT.png" alt="logo" style="width:300px" />
            </div>
		</div>
		<hr>
		<div style="clear:both"></div>
		
		<div id="customer">

		<div id="address">
			<b>Billing Address:</b><br>
			<?php

    		include 'config.php';

    		$name=$_SESSION['username'];
     		$aaa="SELECT * FROM register WHERE username='$name';";
     		$query=mysqli_query($con,$aaa);
     		$result1=mysqli_fetch_assoc($query);
     		echo "<p><span>".$name."</span><br>".$result1['addr']."</p><br>";
   			?>
		</div>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice No</td>
                    <td><div>
							<?php
  							$bbb="SELECT * FROM orderdetails ORDER BY orderid DESC LIMIT 1";
  							$query1=mysqli_query($con,$bbb);
  							$result2=mysqli_fetch_assoc($query1);
  							echo $result2['orderid'];
  							?></p>
						</div>
					</td>
                </tr>

                <tr>
                    <td class="meta-head">Date</td>
                    <td><div id="date"> <?php echo date('d-m-Y'); ?></p></div></td>
				</tr>

                <tr>
                    <td class="meta-head">Service delivery date</td>
                    <td><div id="date">
							<?php
  							$original_date=$result2['deliverydate'];
  							$timestamp=strtotime($original_date);
  							$new_date=date("d-m-Y",$timestamp);
  							echo $new_date;
  							?>
						</div>
					</td>
                </tr>

				<tr>
					<td class="meta-head">Payment method</td>
					<td><div class="due"> <?php echo $result2['paymethod']; ?></div></td>
				</tr>

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
			<th>Sl. No</th>
      		<th>Description</th>
      		<th>Quantity</th>
      		<th>Net amount</th>
		  </tr>
		  
		  <?php
    		$x=0;
    		$y=0;
    		$ccc="SELECT * FROM itemcart WHERE orderid=(SELECT orderid FROM orderdetails ORDER BY orderid DESC LIMIT 1)";
    		$query2=mysqli_query($con,$ccc);
    		while($row=mysqli_fetch_array($query2)){
      		$a1=$row[1];
      		$b1=$row[2];
      		$c1=$row[3];
      		if($a1!=null){
        		$x=$x+1;
		  ?>

		  <tr class="item-row">
		  	<td><?php echo $x; ?></td>
		    <td><?php echo $a1; ?></td>
			<td><?php echo $b1; if($b1!='-'){ echo 'grams'; } ?></td>
			<td><?php echo "₹".$c1; ?></td>
		  </tr>
		  
		  <?php
    		$y=$y+$c1;
    		}
		  }
    	  ?>

		  <tr>
			<td colspan="4" class="blank"> </td>
		  </tr>


		  <tr>
		      <td colspan="3" class="total-line blank"><b>Tax rate:</b></td>
		      <td class="blank">18%</td>
		  </tr>	
		  
		  <tr>
		      <td colspan="3" class="total-line blank"><b>Tax type:</b></td>
		      <td class="blank">GST</td>
		  </tr>	
		  
		  <tr>
		      <td  colspan="3" class="total-line blank"><b>Tax amount:</b></td>
		      <td class="blank"><?php $t=$y*0.18; echo "₹".number_format($t,2,'.',''); ?></td>
		  </tr>	

		  <tr>
		      <td colspan="3" class="total-end1 blank"><b>Total:</b></td>
			  <td class="total-end2 blank">
			  <?php $z=round($y+$t); echo "₹".$z.".00"; 
			  	$updateamt = "UPDATE orderdetails SET amt='$z'ORDER BY orderid DESC LIMIT 1";
				$amtquery = mysqli_query($con, $updateamt);
			  ?></td>
		  </tr>	

		</table>
		
		<div id="terms">
		  <button onclick="window.print()">Print receipt</label></button>
		  <div>Thank You for using NAMMA BARKUR services</div>
		</div>
	
	</div>
	
</body>

</html>