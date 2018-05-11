<?php

   include('connect.php');
    if(isset($_REQUEST['state']))   
	{
		$x = $_REQUEST['state'];

       $res = mysqli_query($con," select district from states  where state = '$x' ");
        	   
	    if(mysqli_num_rows($res) > 0 )
		{
			
            echo  '<option value="" > ----select---- </option>';
              
              while( $row = mysqli_fetch_assoc($res) )
			  {
				  
			  echo '<option value=" ' .  $row['district']. ' " >' . $row['district'] . '</option>'; 	  
				  
			  }
			
			
        }
 	 
	}

?>