
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style.css">
	<title> Employees </title>
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

<br/>
<br/>


<a id="add_employee" href="Employee.html"> Add Employee  </a>
<a id="a_employee" href="Employee_list.php"> Update Employee  </a>
<a id="a_employee" href="Delete-employee.php"> Delete Employee  </a>


<form id="fields" method="post" action="" style=" text-align: center;">
 	<h1 style=""> Delete an Employee </h1>
 	<label style="font-size: 20px; ">ID of The Employee</label><br>
 	<input type="text" name="id" placeholder="Enter the ID"><br/>
 	
  <br/>
 	<br/>


 
    <input id ="submit_info" type="submit"  name="Delete" value="Delete">  </input>


<?php 
include_once 'database_con.php'; 
if(isset($_POST['Delete'])) {
 
 $ID = $_POST['id']; 
 


$sql = "DELETE FROM Employee WHERE ID='$ID' ";

if (mysqli_query($conn, $sql)) { 

 }

else { echo "Error: " . $sql . "" . mysqli_error($conn); } 

mysqli_close($conn); 

}

 ?> 

 </form>
 <br>
 <br>

</body>
</html>
<?php
// include_once 'database_con.php';
// $db = mysqli_select_db($conn,'employee');
// if(isset($_POST['Delete'])) {
// $id = $_POST['id'];

// $query =" delete from 'employee' where ID='$id'";
// $query_run = mysqli_query($conn,$query);
// }
?>

