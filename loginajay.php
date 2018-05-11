<html>
     <head>
          <title> Home </title>	 
	 </head>
	       <body>
		     
			   <form>
			     
				  Enter Email<br>
				  <input onblur="checkEmail(this.value)"  type="text" name=" email"   id="email" ><br>
				  <span id="error">   </span>
				  Password<br>
				  <input type="password" name="pass" id = "pwd"><br>
			   
			 
		        </form>      
		        
				
				
				
			
				
				
				<script>
				
				    function checkEmail(x)
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
						
						
						obj.onreadystatechange = function()
						{
							
						    if(obj.readyState == 4 && obj.status == 200)
							{
                         		 if(obj.responseText == 1)
								 {
									 
									 document.getElementById('error').innerHTML ="This email already exit";
									 
								 }
								 else
								 {
									 
									 document.getElementById('error').innerHTML = "";

									 
								 }
								 				
						
							}
						
						}
						
						  obj.open("GET","email.php?email=" +x , true);
						  obj.send();
						
						
					}
					
					
					
				
				
				</script>
				
		   </body>
</html>