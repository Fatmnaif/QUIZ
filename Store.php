
<?php 
include_once 'database_con.php'; 
if(isset($_POST['save'])) {
 $Name = $_POST['Name']; 
 $ID = rand(10,1000000000);
 $Address = $_POST['Address']; 
 $store_type = $_POST['store_type']; 
 $status = "Active"; 
 $Date = date("Y/m/d"); 


$sql = "INSERT INTO store (ID,Name,address,store_type,status,created_date) VALUES ('$ID','$Name','$Address','$store_type','$status','$Date')"; 

if (mysqli_query($conn, $sql)) { 
// echo "New record created successfully !";
// header('Location: Inserted.php');

 }

else { echo "Error: " . $sql . "" . mysqli_error($conn); } 

mysqli_close($conn); 

}

 ?> 

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style.css">
	<title> Store </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<header> 
	<img id="img" src="store_icon.png"/>
<ul id="Unordered">
<li > 
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

<div id="INFO" method="post" action="Employee.php">
	<table border="2">
	<th colspan ="2"> Store information </th>
	<tr> <td>Store ID </td> <td> <?php echo $ID; ?></td></tr>
	<tr> <td>Store Name </td> <td> <?php echo $Name; ?></td></tr>
	<tr> <td>Store Type </td> <td><?php echo $store_type; ?></td></tr>
	</table>
  <br/>
 	<br/>



 </div>
 <br>
 <br>

</body>
</html>





