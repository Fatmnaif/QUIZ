<?php
include_once 'database_con.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE store set ID='" . $_POST['ID'] . "', Name='" . $_POST['Name'] . "', address='" . $_POST['address'] . "', store_type='" . $_POST['store_type'] . "' ,status='" . $_POST['status'] . "' WHERE ID='" . $_POST['ID'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM store WHERE ID='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Store Data</title>
   	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<header> 
	<img id="img" src="store_icon.png"/>
<ul id="Unordered">
<li> 
	<a class="link1" href="Home.php" style="color:white;"> HOME </a>
	 </li>
<li> 
	<a id="link2" href="Employee.html" style="color:white;"> EMPLOYEES</a> </li>
	<li> 
	<a id="link2" href="Store.html" style="color:white;"> STORES</a> </li>
</ul>
</header>
<br/>
<br/>
<br/>
<br/>

<a id="add_store" href="Store.html" style="border-top-right-radius: 30px;"> Create Store  </a>
<a id="a_store" href="Store_list.php" style="border-top-right-radius: 38px;"> Update Store  </a>

<form id="fields" name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
</div>
Store ID: <br>
<input type="hidden" name="ID" class="txtField" value="<?php echo $row['ID']; ?>">
<input type="text" name="ID"  value="<?php echo $row['ID']; ?>">
<br>
Name: <br>
<input type="text" name="Name" class="txtField" value="<?php echo $row['Name']; ?>">
<br>
Address :<br>
<input type="text" name="address" class="txtField" value="<?php echo $row['address']; ?>">
<br>
Store type:<br>
<input type="text" name="store_type" class="txtField" value="<?php echo $row['store_type']; ?>">
<br>
Status:<br>
<input type="text" name="status" class="txtField" value="<?php echo $row['status']; ?>">
<br>
<input style="hieght:15px;" type="submit" name="submit" value="Submit" class="buttom">

</form>
<br>
<br>
</body>
</html>