<?php
	include "connection.php";
	
					
			$uname=$_POST['txtname'];
			$uemail=$_POST['txtemail'];
			$uphone=$_POST['txtphone'];
			$upass=$_POST['textpass'];
			$uCpass=$_POST['textconpass'];
			
			
			$x=mysqli_query($con,"insert into register(username,email,phone,password) values ('$uname','$uemail','$uphone','$upass')");
			
			if($x>0)
			{
				
			echo"<script> 
				alert('Registration succesful please login'); 
				</script>";
				
			header("Location:login.html");	
			
			}
			else
			{
				echo"<script> 
				alert('OOps...Error in Registration please try later...'); 
				</script>";	
			}
	
		
	
	
?>