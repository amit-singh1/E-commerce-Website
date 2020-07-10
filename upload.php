<?php
include("connection.php");

?>
<!DOCTYPE html>
<html>
<head>
  <script src="sign.js"></script>
  <link rel="stylesheet" type="text/css" href="hello.css">
  
  <title>PRODUCT DETAILS</title>
</head>
<body>
  <div class="h10">
    <a href="upload.html">
       
      <img src="3.png" alt=" ">
          </a>
  </div>
  <div class="h1">
    <h1>
      <a href="upload.html">
       
  <img src="2.png" alt=" ">
      </a>
    </h1>
  </div>
  
<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">PRODUCT DETAILS</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
        <div class="login-form">
            <div class="sign-in-htm">
                <div class="group">
                <form method="POST" enctype="multipart/form-data">
                    <label for="user" class="label">PRODUCT NAME</label>
                    <input id="user" type="text" name ="productname" class="input">
                    
                </div>
                <div class="group">
                    <label for="pass" class="label">PRODUCT PRICE</label>
                    <input id="pass" type="text" class="input" name ="productprice" >
                </div>
                <div class="group">
                    <label for="img">SELECT IMAGE:</label><br>
                    <hr>

                    <input type="file" id="img" name="image" accept="image">
                    <hr>

                </div>
                <div class="group">
                    <label for="pass" class="label">PRODUCT DESCRIPTION </label>
                    <textarea id="pass" type="text" class="input" name ="description" rows="4" cols="50">
                    </textarea>

                </div>
                
                <div class="group">
                    <input type="submit" class="button" name ="submit1" value="SUBMIT">
                    </form>
                </div>
                <div class="hr"></div>
                
            </div>
            
        </div>
    </div>
</div> 



<?php
if(isset($_POST['submit1'])){

$productname = $_POST['productname'];
$productprice = $_POST['productprice'];
$image = $_POST['image'];
$description = $_POST['description'];


$query = "INSERT INTO shop(productname,productprice,image,description) VALUES ('$productname','$productprice','$image','$description')";

if(mysqli_query($conn, $query))
{
	echo "successfull";
	
}

else{
	
	echo "try again";
	
}

}
?>









</body>
</html>