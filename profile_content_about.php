<div style="min-height: 400px;width:100%;background-color: white;text-align: center;">
	<div style="padding: 20px;max-width:350px;display: inline-block;">
		<form method="post" enctype="multipart/form-data">

  						
			<?php
			$login = new Login();
	$_SESSION['mybook_userid'] = isset($_SESSION['mybook_userid']) ? $_SESSION['mybook_userid'] : 0;
	
	$user_data = $login->check_login($_SESSION['mybook_userid'],false);
 
 	$USER = $user_data;
			if(isset($URL[1]) && is_numeric($URL[1]))
			{
				
				
			
		 
				$settings_class = new Settings();

				$settings = $settings_class->get_settings($URL[1]);

				if(is_array($settings)){
 
					echo "<br>Birthday:<div id='textbox' style='border:none;' >".htmlspecialchars($settings['birthday'])."</div>";
					echo "<br>About me:<div id='textbox' style='height:200px;border:none;' >".htmlspecialchars($settings['about'])."</div>";
				}
					 
				}
				
			?>

		</form>
	</div>
</div>