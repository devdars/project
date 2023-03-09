<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();
?>
<?php include('header.php'); ?>

    
    <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-9">
                <table  border="2" class="table" style="margin-top:100px;">
                    <tr>
                        <h1 style="color:rgb(59,89,152); font-family: tahoma;  text-align: left; "><u>Feedbacks</u></h1>
                        <th>SNo.</th>
                        <th>Feedback</th>
							<th>User ID</th>
                       
                    

</tr>
<?php
		$actions=array();			 
    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('fid')
        
        
    );

   
   $join=array(
      
    );  $fields=array('content', 'userid');

    $users=$dao->selectAsTable($fields,'feedbacks as fb',1,$join,$actions,$config);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
            </div>    

            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
