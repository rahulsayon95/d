<html>
      <head>
             <title> Home </title>
	  </head>
	         <body>
			  
			  Enter Email<br>
			  <input type="text"    onblur="checkerror(this.value)"   name="email"  id="email"  >  <span id="error"> </span> <br>      
			  Password <br>
			  <input type ="text" id="pwd" name="pwd" ><br>
			  <br>

			     
			 
			
			 
			 <script>
			  
			     function checkerror(x)
				 {
			            var obj;
			        if(window.XMLHttpRequest)
					{
			            obj = new XMLHttpRequest();
						
					}
					else
					{
							
						obj = ActiveXObject('Microsoft.XMLHTTP');
						
					}
						  
					obj.onreadystatechange = function ()
					{
					   
					     if(obj.readyState == 4 &&  obj.status == 200 )
						 {
							 
							 if(obj.responseText == 1)
							 {
								 
								 document.getElementById('error').innerHTML =" Email id alrady exits ";
								 
							 }
							 else
							 {
								 
								 document.getElementById("error").innerHTML = "";
								 
							 }
							 
							 
						 }
					     
					
					}
						 
						 
						obj.open("GET","http://localhost:8080/ajax/checkkemail.php?email=" +x, true );
						obj.send();
						 
						 
						 
				 }			 
			 </script>
			 
			  </body>
			 

</html>