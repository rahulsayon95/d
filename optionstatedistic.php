<?php



   include('connect.php');
   
   $res = mysqli_query($con,"select  state from states");
    
          $row = mysqli_fetch_assoc($res); 
		  
        

    

?>
 <html>
  
    <head>
         <title>Home</title>
		  
		 
		 
	</head>
	<body>
	
	
	
	
	<h1>  Select State </h1>
	    <form>
	
	       
	  <select id="state" onchange="getDistic(this.value)">
   
      <option value="">  ----select---- </option>   
	  
	  <?php
	   
        while($row = mysqli_fetch_assoc($res))  
		
		{

		?>	   
	   
               
	   <option value="<?php echo   $row['state'];  ?>"> <?php  echo  $row['state'];   ?> </option>    
	   
	   

          
		<?php 

       }


       ?>	   
	   
    
	</select>
	<br>
   
    select Distric  

     <select id="dist">
	 
	 <option value="">  ----Distric----  </option> 
	 	 
	 </select>
	 
   
        </form>
		
		
		
		
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

			  
			   if(obj.readyState == 4 && obj.status == 200)
               {			   
			  
			      document.getElementById('dist').innerHTML=obj.responseText;
         				  
                        
   
                }
				
    
            }
			obj.open("GET","http://localhost:8080/ajax/dist.php?state="+x , true);
             obj.send();
   
		   
		   
		   
        }

	   
	   
	   
		 
		 
	         </script>	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
    </body>
 </html>