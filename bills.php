<?php
session_start();
//to hide warning of undefined index or checkboxes
error_reporting(E_ERROR | E_WARNING | E_PARSE);





$name= $_SESSION['user'];

$particulars= "".$_POST['diary']." ".$_POST['tie']." ".$_POST['belt']." ".$_POST['adform']." ".$_POST['icard']." ".$_POST['yearly']." ".$_POST['admission'];


$depositer= $_POST['depositer'];

$date=$_POST['date'];



?>
<div align="center"><!DOCTYPE html>
<html>
<head>

	<title></title>
		

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<style type="text/css">
	
	table{
		margin-left: 600px;
	}
	button{
		margin-left: 700px;
		
	}
	input{
		background-color: #008CBA;
		font-size: 25px;
		
	}
</style>
</head>


	<body style="height: 147mm; width: 102mm; margin-top: 10px; margin-left: 8px;">
<table border="">
	<tr> <td  style= "text-align:center; border-width: 0px;" colspan="4" ><b style="font-size: 20px;">BILLING Status</b></td></tr>
	<tr>
		<td colspan="2" style="border-width: px;" rowspan="2"> Name: <b style="text-transform: uppercase; text-align: right;"><?php echo "".$_SESSION['user']." / ".$_POST['reg_num'];?></b><br>
		Paid by: <?php echo $_SESSION['pay'];?><br>
		ID NO:<b><?php echo(rand(10000,90000)) ?></b>

		</td>
		<td align="right" colspan="2">Date: <?php echo date("Y/m/d")?></td>
	</tr>
	<tr>
		<td colspan="3" align="right">Time: <b><?php echo date("h:i:sa"); ?></b></td>
	</tr>
	<tr>
		<td style="padding-left: 0px;"><b>Number Of Items</b></td>
		<td><b>Delivery Charges </b></td>
		<td><b>Total</b></td>
		<td><b>Lucky Discount</b></td>
	</tr>
	<tr >
		<td style="padding-bottom: 150px; max-width: 25ch">
			
			<?php echo $_SESSION['num']; ?>


		</td>
		<td style="padding-bottom: 150px; max-width: 15ch">
			<?php
			echo "+Rs50";
			?>
		</td>
		<td style="padding-bottom: 150px;"> <?php  $final = $_SESSION['total']+50; echo $final;  ?> </td>
		<td style="padding-bottom: 150px;" align="right"><?php

		$discount = rand(1,10);
		echo $discount."%";?></td>
		</tr>
	
	<tr><td colspan="2">Total :</td><td><?php $fin = $final*($discount/100);  echo ($final-$fin);?> /-</td><td align="right"></td></tr>
	<?php
	
	?>
</table>
<input type="button" onclick="window.print()" value="Print now"  style="margin-top: 15px; margin-left: 600px;">
<br><br>
<a href="cart.php" style="margin-left: 600px;"><strong>BACK</strong></a>

</div>

<br>
<br>
<h1 style="text-align:center">Thanks for choosing us!</h1>



	<h2 style="margin-left:20px"><strong> PAY WITH:</strong></h2>

          <ul class="social">
            <li><a href="https://www.paypal.com/in/webapps/mpp/paypal-checkout" class="icons-sm fb-ic"><i class="fab fa-cc-paypal fa-4x"></i></a></li><br>
            <li><a href="https://www.amazon.in/gp/sva/dashboard?ref_=nav_cs_apay" class="icons-sm pin-ic"><i class="fab fa-amazon-pay fa-4x"></i></a></li><br>
            <li><a href="https://www.apple.com/apple-pay/" class="icons-sm gplus-ic"><i class="fab fa-cc-apple-pay fa-4x"></i></a></li>
            
          </ul>
        </li>

		

</body>
</html>