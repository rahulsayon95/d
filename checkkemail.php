<?php

  
   if(isset($_REQUEST['email']))
   {
	   
	 $x = $_REQUEST['email'];
	   
     $con = mysqli_connect("localhost","root","","7am") or die("unable to  create video ");	   
	   
	   $res = mysqli_query($con,"select email from register where email ='$x' ");       
		   
	       if(mysqli_num_rows($res))
		   {
	      
              echo 1;


		   }
		   else
		   {
			   
			   echo 0;
			   

		   }

 

   }

?>