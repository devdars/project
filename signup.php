<?php 

	include("classes/connect.php");
	include("classes/signup.php");

	$first_name = "";
	$last_name = "";
	$gender = "";
	$email = "";
	$birthday="";

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{


		$signup = new Signup();
		$result = $signup->evaluate($_POST);
		
		if($result != "")
		{

			echo "<div style='text-align:center;font-size:18px;color:white;background-color:grey;'>";
			echo "<br>The following errors occured:<br><br>";
			echo $result;
			echo "</div>";
		}else
		{

			header("Location: login.php");
			die;
		}
 

		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$birthday = $_POST['birthday'];

	}


	

?>

<html> 

	<head>
		
		<title>MyBook | Signup</title>
	</head>

	<style>
		
		#bar{
			height:100px;
			background-color: rgb(59,89,152);
			color: #d9dfeb;
			padding: 4px;
		}

		#signup_button{

			background-color: #42b72a;
			width: 70px;
			text-align: center;
			padding:4px;
			border-radius: 4px;
			float:right;
			color: black;
		}

		#bar2{

			background-color: white;
			width:800px;
			margin:auto;
			margin-top: 50px;
			padding:10px;
			padding-top: 50px;
			text-align: center;
			font-weight: bold;
			

		}

		#text{

			height: 40px;
			width: 300px;
			border-radius: 4px;
			border:solid 1px #ccc;
			padding: 4px;
			font-size: 14px;
		}
		#birthday
		{
			
			height: 40px;
			width: 300px;
			border-radius: 4px;
			border:solid 1px #ccc;
			padding: 4px;
			font-size: 14px;
			
		}

		#button{

			width: 300px;
			height: 40px;
			border-radius: 4px;
			font-weight: bold;
			border:none;
			background-color: rgb(59,89,152);
			color: white;
		}
		
		

	</style>
	


	<body style="font-family: tahoma;background-color: #e9ebee;">
		
		<div id="bar">

			<div style="font-size: 40px;">MyBook</div>
			<a href="login.php">
			<div id="signup_button">Log in</div>
			</a>
		</div>

		<div id="bar2">
			
			Sign up to MyBook and stay connected!<br><br>

			<form method="post" action="">

				<input  value="<?php echo $first_name ?>"  name="first_name" type="text" id="text"  style="text-transform: capitalize;" placeholder="First name" required="true" title="No white spaces and numbers allowed"<br><br>
				<br>
				<input value="<?php echo $last_name ?>" name="last_name" type="text" id="text"  style="text-transform: capitalize;" placeholder="Last name" required="true" title="No white spaces and numbers allowed"><br><br>

				
				<select id="text" name="gender" required="true">
					<option value="<?php echo $gender ?>" selected>Select your gender</option>
					
					<option>Male</option>
					<option>Female</option>
					<option>Others</option>

				</select>
				<br><br>
				<input value="<?php echo $birthday ?>" type="text"   placeholder="Select your birthday" onfocus="(this.type='date')" onblur="(this.type='text')"  data-date-format='yyyy-mm-dd' id="birthday" name="birthday" required="true"><br><br>
				<input value="<?php echo $email ?>"  name="email" type="text" id="text" placeholder="Email" required="true" title="No white spaces allowed"><br><br>
				
				<input name="password" type="password" id="text"  onmousedown="this.type='text'"
       onmouseup="this.type='password'"
       onmousemove="this.type='password'" placeholder="Password" required="true" title="Password should be atleast 8 characters and must contain at least a number, an upper case letter, a lower case letter and a special character">
				
				<br><br>
				<input name="password2" type="password" id="text"  onmousedown="this.type='text'"
       onmouseup="this.type='password'"
       onmousemove="this.type='password'" placeholder="Retype Password" required="true"><br><br>

				<input type="submit" id="button" value="Sign up">
				<br><br><br>

			</form>
			<script>
			var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();

if (dd < 10) {
   dd = '0' + dd;
}

if (mm < 10) {
   mm = '0' + mm;
} 
    
today = yyyy + '-' + mm + '-' + dd;
document.getElementById("birthday").setAttribute("max", today);
				</script>

		</div>

	</body>


</html>