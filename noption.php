<?php


   include("connect.php");
   
   $res  =  mysqli_query($con,"select state from states"); 

      echo   mysqli_num_rows($res);  
   


?>

<html>
      <head> 
	       <title>
		         Home
		   </title>
	  </head>
	        <body>
			  
             			  
			  Select State
			  <select id="state"  onchange="getDistic(this.value)">
			  
			  
			   <option>  ----select---- </option>
			   
			    <?php
			   
			      while( $row =  mysqli_fetch_assoc($res))
				  {
			   
			   ?>
			   
			   <option  value="<?php  echo $row['state'];   ?>"> <?php  echo  $row['state'] ; ?></option>
			   
			   <?php
				  }
			   
			   
                ?>			   
			  
			  </select>
			  
			    select distict
				
				<select id="dist">
			  
			       <option>   ----distict----</option>
			  
			  
			  
			      </select>
			    
				 <script>

                      
                   function getDistic(x)
				   {
                         var obj;
				       if(window.XMLHttpRequest)
					   {
						   obj = new XMLHttpRequest();
						   
						   
					   }
					   else
					   {
						  obj = new ActiveXObject('Microsoft.XMLHTTP');
						   
						   
					   }

					   obj.onreadystatechange = function ()
					   {
						   
						   if(obj.readyState == 4 && obj.status == 200 )
						   {
							   
							   document.getElementById('dist').innerHTML = obj.responseText;
							   
						   }
						   
						   
					   }
					   obj.open("GET", "http://localhost:8080/ajax/distt.php?state=" +x , true );
					   obj.send();
					   
					   
					   
					   

				   }

             </script>
			
			</body>
</html>