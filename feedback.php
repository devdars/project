
<?php
include("classes/autoload.php");
$login = new Login();
	$user_data = $login->check_login($_SESSION['mybook_userid']);

$db = mysqli_connect("localhost","root","","mybook_db");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

	
if(isset($_POST['submit']))
{

		$feedback = $_POST['feedback'];

		 $insert = mysqli_query($db,"INSERT INTO feedbacks (content, userid) VALUES ('$feedback', '{$_SESSION['mybook_userid']}')");
		
if(!$insert)
    {
        echo '<script>alert("Type your feedback")</script>';
    }
    else
    {
        echo '<script>alert("Feedback submitted successfully")</script>';
    }


mysqli_close($db);
	}
	

?>
<!doctype html>
<html>


<title>Feedback | MyBook</title>
	
	
	<style>
		
		#bar{
			height:100px;
			background-color: rgb(59,89,152);
			color: #d9dfeb;
			padding: 4px;
		}

		#signup_button{

			background-color: #42b72a;
			width: 90px;
			text-align: center;
			padding:4px;
			border-radius: 4px;
			float:right;
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

		#button{

			width: 300px;
			height: 40px;
			border-radius: 4px;
			font-weight: bold;
			border:none;
			background-color: rgb(59,89,152);
			color: white;
		}
		#signup
		{
			background-color: #42b72a;
			width: 70px;
			text-align: center;
			padding:4px;
			border-radius: 4px;
		}

	</style>

	<body style="font-family: tahoma;background-color: #e9ebee;">
		
		<div id="bar">
<a href="<?=ROOT?>home" style="color: white; font-size: 40px">MyBook</a> 
		<form>
			<a href="<?=ROOT?>profile" style="color: #405d9b;">
			<div id="signup_button">Back to Profile</div>
			
			</a>
			
 <!-- <input type="button" id="signup_button" value="Go back!" onclick="history.back()"> -->
			
</form>
		</div>
	<div id="bar2">
			
			Type in your feeback about MyBook<br><br>
	
	
	
<form method="post" >
    <textarea id="feedback" name="feedback" required="true"></textarea><br>
    <input type="submit" name="submit" value="Submit" id="signup" />
</form>
</html>