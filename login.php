<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Snippet: Login Form</title>
  
  
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
   
    <div class="wrapper">
    
    <form class="form-signin" method="post" action="login.php">
            
      <h2 class="form-signin-heading">Login</h2>
      <input type="text" class="form-control" name="r_lname" placeholder="Email Address" required="" autofocus />
      <input type="password" class="form-control" name="r_pass" placeholder="Password" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>   
      
    </form>
    
  </div>
  
<h2 style="color: #FFF; text-align: center"><?php echo @$_GET['not_authorize']; ?></h2>
  
</body>
</html>

<?php
include("db_con.php");

if(isset($_POST['login'])){
	
	$r_lname = mysqli_real_escape_string($con, $_POST['r_lname']);
	$r_pass = mysqli_real_escape_string($con, $_POST['r_pass']);

	$select_user = "select * from receptionist where r_lname='$r_lname' AND r_pass='$r_pass'";
	
	$run_user = mysqli_query($con, $select_user);
	
	//">0" means one person is authorized to login
	if(mysqli_num_rows($run_user)>0){
		
	$_SESSION['r_lname']=$r_lname; 
		
	echo "<script>window.open('index.php?logged=You have Successfully Logged In!','_self')</script>";
			
	}
	else{
		
	echo "<script>alert('Unser Name or Password is Incorrect!')</script>";
		
	}
		
}


?>

