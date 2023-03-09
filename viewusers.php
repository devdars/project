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

 <h1 style="color:rgb(59,89,152); font-family: tahoma;  text-align: left; "><u>All Users</u></h1>

 <div class="container_gray_bg" id="home_feat_1"  >
    <div class="container" >
    	<div class="row">
            <div class="col-md-9">
                <table  border="2"  class="table" style="margin-top:80px;height: 160px">
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
    <th>Email</th>
    <th>User Id</th>
    <th>Gender</th>
    <th>Join date and time</th>
	  <th>Last Log in</th>
	 
	  
  </tr>
	

<?php


$records = mysqli_query($db,"select first_name, last_name,email, userid,gender, date, from_unixtime(online) as online from users where type='profile'"); 

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
	<td></td>
    <td><?php echo $data['first_name']; ?></td>
    <td><?php echo $data['last_name']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['userid']; ?></td>
    <td><?php echo $data['gender']; ?></td>
   
    <td><?php echo $data['date']; ?></td>
    <td><?php echo $data['online']; ?></td>
    
  
  </tr>	
<?php
}
?>
</table>
	

<?php mysqli_close($db); // Close connection ?>

</body>
</html>