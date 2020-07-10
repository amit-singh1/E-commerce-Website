<?php 
include("connection.php");


print_r($_POST);

?>

<html>
<head>
<title>
</title>
</head>
<body>

<!--<input type="checkbox" value="<? $productname ?>">-->

<form method = "post"> <!--action="<?php //echo $_SERVER['PHP_SELF']; ?>"-->



	
	<?php
$query ="SELECT * FROM shop";
$data = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($data))
{
$productname =  $row['productname'];$productprice = $row['productprice'];$description = $row['description'];$image = $row['image'];
?>
<?php
echo "<br>";
echo '
<tr>
	<td>
		<input name="detail[]" type="checkbox" value="'.$productname.'" />'.$productname.'
	</td>
</tr>
';
//echo $productname;
echo"$productprice";
echo '  
<tr>  
     <td>  
          <img src="data:image/png;base64,'.base64_encode($row['image'] ).'" height="200" width="200" class="img-thumnail" />  
     </td>  
</tr>  
';  
echo "$description";
echo "<br>";

}


?>
	
	
<button type="submit" name="btn">Submit</button>





</form>

<?php


if(isset($_POST['btn'])){
	
	if(isset($_POST['detail'])){
//$names = $_POST['detail'];	
	
//$queryyy = "INSERT INTO cart(name) VALUES($names)";

            $t1=implode(',', $_POST['detail']);

if(mysqli_query($conn, "INSERT INTO cart(name) VALUES('$t1')")){
	
header("location: congrats.php");
	
	
}
else {  

echo "Try again";     

}
	}
}
?>

<br><br> <a href="cart.php">View Cart</a>



</body>
</html>






