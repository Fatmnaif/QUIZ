<?php
include("database_con.php");
include("Employee.php");
 
 $db= $conn;
$tableName="employee";
$columns= ['ID','Name','Age','Store_id','skill','created_date','status'];
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{
$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM employee WHERE ID ='" . $ID . "'" ;
$result = $db->query($query);
if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
?>

<!DOCTYPE html>
<html>
<head>
 
    <link rel="stylesheet" type="text/css" href="Style.css">
  <title> Inserted Employee </title>
</head>
<body>

<header> 
  <img id="img" src="store_icon.png"/>
<ul id="Unordered">
<li > 
  <a class="link1" href="Home.html" style="color:white;"> HOME </a>
   </li>
<li> 
  <a id="link2" href="Employee.html" style="color:white;"> EMPLOYEES</a> </li>
  <li> 
  <a id="link2" href="Employees.html" style="color:white;"> STORES</a> </li>
</ul>
</header>
<br/>
<br/>

<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table border="3">
       <thead><tr><th>S.N</th>
         <th>Full Name</th>
         <th>Gender</th>
         <th>Email</th>
         <th>Mobile Number</th>
         <th>Status</th>
         <th>City</th>
         <th>State</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=0;
      foreach($fetchData as $data){
          $sn++;
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['ID']??''; ?></td>
      <td><?php echo $data['Name']??''; ?></td>
      <td><?php echo $data['Age']??''; ?></td>
      <td><?php echo $data['Store_id']??''; ?></td>
      <td><?php echo $data['skill']??''; ?></td>
      <td><?php echo $data['created_date']??''; ?></td>
      <td><?php echo $data['status']??''; ?></td>  
     </tr>


     <?php
    


    }}


    else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>