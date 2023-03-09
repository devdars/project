<html> 

	<head>
		
		<title>MyBook Admin | Log in</title>
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
			
				<a href="../login.php">
				<div id="signup_button">User</div>
			</a>
		</div>

		<div id="bar2">
<?php require('../config/autoload.php'); ?>
<?php
$dao=new DataAccess();
		$elements=array("username"=>"","password"=>"");
$form=new FormAssist($elements,$_POST);
$rules=array(
    'username'=>array('required'=>true),
    'password'=>array('required'=>true),
);
$validator=new FormValidator($rules);

if(isset($_POST["loginnow"]))
{
    if($validator->validate($_POST))
    {
        $data=array('username'=>$_POST['username'],'password'=>$_POST['password']);

        if($info=$dao->login($data,'admins'))
        {
           // $_SESSION['userid']=$info['user_id'];
           // $_SESSION['name']=$info['user_name'];
            $_SESSION['username']=$info['username'];
			
			$_SESSION['cid']=$info['admin_id'];
		$a=$_SESSION['username'];

		/*$current=$_SESSION["url"];
	echo"<script> location.replace($current); </script>";*/
		
   echo"<script> location.replace('viewusers.php'); </script>";
			
           // header('location:student/index.html');
       


 }
        else
		{
            $msg="invalid username or password";
            echo "<script> alert('Invalid username or password');</script> ";
        }
    }

    
}


?>

	<section class="ftco-section">
		<div  class="container">
			<div class="row justify-content-center">
				<div  class="col-md-6 text-center mb-5">
				
				</div>
			</div>
			<div  class="row justify-content-center">
				<div  class="col-md-12 col-lg-10">
					<div  class="wrap d-md-flex">
						
							
			      </div>
						
			      	<div  class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">MyBook Admin Login</h3>
			      		</div>
			
			      	</div>
							<form method="POST" class="signin-form">
			      		<div class="form-group mb-3">
			      			
			      			<input type="text" id="text" name="username" class="form-control" placeholder="Username" required>
			      		</div><br>
		            <div class="form-group mb-3">
		            	
		              <input type="password" id="text" name="password" class="form-control"  onmousedown="this.type='text'"
       onmouseup="this.type='password'"
       onmousemove="this.type='password'" placeholder="Password" required><br><br>
		            </div>
		            <div class="form-group">
		            	<button type="submit" name ="loginnow" id="button" class="form-control btn btn-primary submit px-2">Log In</button>
		            </div>
		       
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

