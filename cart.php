

<h1 style="text-align:center">YOUR CART</h1>

<hr>


<table style="margin-left:auto;margin-right:auto">

<tr>

<th>|    Product Name    |</th>
<th>     Product Price    |</th>

</tr>


<?php
session_start();
include_once("connection.php");

/*$resultx = "SELECT * FROM register WHERE username='$_SESSION[user]'";
$resss = mysqli_query($conn,$resultx);
while($row = mysqli_fetch_assoc($resss)){
	
	echo $row['name'];
	echo "<br>";
}*/


/*$r = "SELECT * FROM shop WHERE productname='$_SESSION['p'][0]'";
$re = mysqli_query($conn,$r);
	
	
while($rows = mysqli_fetch_assoc($re)){
	
	echo $rows;
	
	
}*/

$sum = 0;
$j = 0;
$size = sizeof($_SESSION['p']);
$_SESSION['num'] =  sizeof($_SESSION['p']);
while($j<$size){
//print_r($_SESSION['p'][$j]);
$kk = $_SESSION['p'][$j];
//echo $kk;

$resultx = "SELECT * FROM shop WHERE productname='$kk'";
$resss = mysqli_query($conn,$resultx);
echo "<br>";
//echo "Product Name";
while($rows = mysqli_fetch_array($resss)){
	
	
	
	$sum = $sum + $rows['productprice'];
	
/*	echo "<br>";
	echo $rows['productname'];
	echo " Rs.";
	echo $rows['productprice'];
	echo " ";
	echo "<br>";
	*/
	
	echo '
	
	<tr>
	
	<td> '.$rows['productname'].' </td>
	<td> '.$rows['productprice'].'   </td>
	
	
	
	</tr>
	';


}

$j = $j + 1;




}


?>












</table>

<p style="text-align:center">Total :
<?php echo $sum; $_SESSION['total'] = $sum; 
?></p>
<br><br>
<p style="text-align:center"><a href="contact.php">Back</a>



<h1 style="text-align:center">Thanks for choosing us!</h1>



	<h2 style="text-align:center"><strong> PAY WITH:</strong></h2>

         <form method="post" style="text-align:center" action="bills.php">
		 
		 <input type="radio" name="choice" value="Online"> Online
		 <input type="radio" name="choice" value="Offline"> Offline
		 <br>
		 <br>
		 <input type="submit" name="bt" placeholder="Checkout">
		 
		 </form>

<?php if(isset($_POST['bt'])){ $_SESSION['pay'] =  $_POST['choice']; }  ?>

