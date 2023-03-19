<?php
include("database_con.php");

$result = mysqli_query($conn,"SELECT * FROM employee where status = 'active'");

$employee_num=0;
while($row = mysqli_fetch_array($result)) {
			$employee_num++;
		}

$result1 = mysqli_query($conn,"SELECT * FROM store where status = 'active'");

$stores_num=0;
while($row = mysqli_fetch_array($result1)) {
			$stores_num++;
		}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style.css">
	<title> Home </title>
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

<section>
	<h1 style="color: #566D7E; font-size: 30px;margin: 35PX;">Welcome to Dashboard</h1>
	
	<!--  <span class="Employees"></span>
      <span class="Stores"></span> -->


      <div class="c1">
		<div class="icons"> 

<i class="fab fa-codepen"></i>
		 </div>
	<div class="info">

		<h3><?php echo $employee_num."  EMPLOYEE"; ?></h3>
	</div>
</div>

<div class="c1">
		<div class="icons"> 

<i class="fab fa-codepen"></i>
		 </div>
	<div class="info">
		<h3><?php echo $stores_num." STORE" ;?></h3>
	</div>
</div>
<br/>
<br/>
<br/>
<br/>

<h3 style="color: #566D7E; font-size: 30px;margin: 35PX;">Search for any store to view details</h3>

<form  method="post" action="Home.php">
	<input id="Search" type="text" name="id" placeholder="Search by ID">
	    <input id ="submit_info" type="submit"  name="search" value="Search">  </input><br>


<!--starts from here -->

                 <div class="Searched_bar" style="text-align; align-content:center;">

<?php
include_once 'database_con.php';

if(isset($_POST['search'])) {
 
 $ID = $_POST['id']; 
 

$result = mysqli_query($conn,"SELECT * FROM store  WHERE ID='$ID' ");


}
?>


<?php
if (mysqli_num_rows($result) > 0) {
?>

<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
			<br>
			<div style="">
			<table style="text-align: center; align-content:center; border-color:;" border="2" >
				<tr>
	    <td>ID</td>
		<td>Name</td>
		<td>Address</td>
		<td>Type</td>
		<td>Status</td>
		<td>created date</td>
	  </tr>
	  <tr>
	     <td><?php echo $row["ID"]; ?></td>
		<td><?php echo $row["Name"]; ?></td>
		<td><?php echo $row["address"]; ?></td>
		<td><?php echo $row["store_type"]; ?></td>
		<td><?php echo $row["status"]; ?></td>
		<td><?php echo $row["created_date"]; ?></td>
      </tr>
      </table>
      </div>
      
			<?php
			$i++;
			}
if(isset($_POST['search'])) {
 
 $ID = $_POST['id']; 
 

			$result3 = mysqli_query($conn,"SELECT *
FROM store
INNER JOIN employee ON employee.Store_id = store.ID  where store.ID ='$ID'; ");
		
				$employees=0;
			while($row = mysqli_fetch_array($result3)) {
		
			$employees++;
			
		
}
			?>
				 <p style="color:#566D7E;"><?php echo 'Number of employees : '.$employees; ?></p>


 <?php
}
}



  else
 {
    echo "No result founded";
 }
?>

   </div>              

</form>

</section>

</body>
</html>