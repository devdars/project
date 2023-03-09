<?php
include("header.php");
$db = mysqli_connect("localhost","root","","mybook_db");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
<!DOCTYPE html>

<html>
<head>
  
</head>
<body>

<h1 style="color:rgb(59,89,152); font-family: tahoma;  text-align: left; "><u>Male Users</u></h1>

 <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-9">
                <table  border="2" class="table" style="margin-top:100px;">
					<style>
					
					table
{
counter-reset: Serial;
border-collapse: separate;
}

tr td:first-child:before
{
counter-increment: Serial;
content: counter(Serial); 
}
					</style>
  <tr>
    
    <th>SNo</th>
    <th>First Name</th>
    <th>Last Name</th>
	  <th>User Id</th>
	  
  </tr>
	

<?php


$records = mysqli_query($db,"select first_name, last_name, userid from users where gender='Male'"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
	<td></td>
    <td><?php echo $data['first_name']; ?></td>
    <td><?php echo $data['last_name']; ?></td>
    <td><?php echo $data['userid']; ?></td>
  </tr>	
<?php
}
?>
</table>
	

<?php mysqli_close($db); // Close connection ?>

</body>
</html>