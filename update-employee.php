<?php
include_once 'database_con.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE employee set ID='" . $_POST['ID'] . "', Name='" . $_POST['Name'] . "', Age='" . $_POST['Age'] . "', Store_id='" . $_POST['Store_id'] . "' ,skill='" . $_POST['skill'] . "' , status='" . $_POST['status'] ."' WHERE ID='" . $_POST['ID'] . "'");
$message = "Record Modified";
}
$result = mysqli_query($conn,"SELECT * FROM employee WHERE ID='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
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

<a id="add_employee" href="Employee.html"> Add Employee  </a>
<a id="a_employee" href="Employee_list.php" style="border-top-right-radius: 30px;"> Update Employee  </a>
<a id="a_employee" href="Delete-employee.php" style="border-top-right-radius: 30px;"> Delete Employee  </a>


<form id="fields" name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
</div>
Employee ID: <br>
<input type="hidden" name="ID" class="txtField" value="<?php echo $row['ID']; ?>">
<input type="text" name="ID"  value="<?php echo $row['ID']; ?>">
<br>
Name: <br>
<input type="text" name="Name" class="txtField" value="<?php echo $row['Name']; ?>">
<br>
Age :<br>
<input type="text" name="Age" class="txtField" value="<?php echo $row['Age']; ?>">
<br>
Store ID:<br>
<input type="text" name="Store_id" class="txtField" value="<?php echo $row['Store_id']; ?>">
<br>
skill:<br>
 <select style="height: 25px;" name="skill">
 	 	<option name="skill1">inventory specialist</option>
 	 	<option name="skill2">sales agent</option>
 	 </select>

<br>
status:<br>
<input type="text" name="status" class="txtField" value="<?php echo $row['status']; ?>">
<br>
<input style="hieght:15px;" type="submit" name="submit" value="Submit" class="buttom">

</form>
<br>
<br>
</body>
</html>