<?php


   if(isset($_REQUEST['state']))
   {
	   include("connect.php");
	   
	   $x = $_REQUEST['state'];
	   
	   $res = mysqli_query($con,"select district from states where state = '$x' ");
	   
	   if(mysqli_num_rows($res) > 0 )

	   {

            echo '<option value=""> ---select Dstict---</option>';
			

			while($row = mysqli_fetch_assoc($res))
			{
				
				echo   '<option value" ' .$row['distric'].  '  "> ' .$row['district'] . '</option>';      
				
				
				
			}
			
			
			

	   } 	   
	   
	   
	   
   }







?>