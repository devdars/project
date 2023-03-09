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

<h1 style="color:rgb(59,89,152); font-family: tahoma;  text-align: left; "><u>All Groups</u></h1>

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
    <th>Group Name</th>
    <th>Type</th>
    <th>Date and time of creation</th>
    <th>Owner</th>
	 
	  
  </tr>
	

<?php


$records = mysqli_query($db,"select first_name, group_type, date, owner from users where type='group'"); 

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
	<td></td>
    <td><?php echo $data['first_name']; ?></td>
    <td><?php echo $data['group_type']; ?></td>
    <td><?php echo $data['date']; ?></td>
    <td><?php echo $data['owner']; ?></td>
  
  </tr>	
<?php
}
?>
</table>
	

<?php mysqli_close($db); // Close connection ?>

</body>
</html>