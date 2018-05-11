
<?php

  
   if(isset($_REQUEST['email']))
   {
	 //  include("connect.php");
 
     $con = mysqli_connect("localhost","root","","7am");	 
	 
       $x =  $_REQUEST['email'];
       
	    $res =  mysqli_query($con,"select email  from register where email = '$x'");
		  
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