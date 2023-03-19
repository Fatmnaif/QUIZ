<?php
include_once 'database_con.php';
$result = mysqli_query($conn,"SELECT * FROM store");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> List of Stores</title>
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


<?php
if (mysqli_num_rows($result) > 0) {
?>


<form id="fields" method="post" action="Store.php" style="text-align: center;align-content: center;">

<table border="1">
	  <tr>
	    <td>ID</td>
		<td>Name</td>
		<td>Address</td>
		<td>Type</td>
		<td>Status</td>
		<td>created date</td>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["ID"]; ?></td>
		<td><?php echo $row["Name"]; ?></td>
		<td><?php echo $row["address"]; ?></td>
		<td><?php echo $row["store_type"]; ?></td>
		<td><?php echo $row["status"]; ?></td>
		<td><?php echo $row["created_date"]; ?></td>

		<td><a style="color:white;" href="update-store.php?id=<?php echo $row["ID"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>

 <?php
}
else
{
    echo "No result found";
}
?>
 </form>
<br>
<br>
 </body>
</html>