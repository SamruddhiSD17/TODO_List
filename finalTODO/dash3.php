<!doctype html>
<?php
	include "connection.php";
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Dashboard</title>
	 
	
  </head>
  <body>
    
	<nav class="navbar" style=background-color:#33BBC5 >
    <a class="navbar-brand font-weight-bold" style="color: #FFFFFF;">To Do</a>
    <form class="form-inline">
    <button class="btn btn-outline-success my-2 my-sm-0 mr-3" type="submit" style="color: #FFFFFF; background-color: #176B87;">Log out</button>
	

    </form>
    </nav>
	<div class=container-fluid>
		<div class=row>
			<div class=col-6>
			
	<form action=dash3.php method=post >
	<div class="form-group px-5" align=center style=padding-top:15px>
	<label class=font-weight-bold style="font-size:35px; font-family:Lora; color:#33BBC5">Create Task</label>
    </div> 
	
	<div class="form-group">
    <label style=font-size:17px>task </label>
    <input type="text" class="form-control" name=txttask id=task>
  </div>
	
  <div class="form-group">
    <label style=font-size:17px>type</label>
    <input type="text" class="form-control" name=txttype>
  </div>
 
  <div class="form-group">
    <label style=font-size:17px>detail</label>
    <textarea class="form-control" name=txtdetail ></textarea>
  </div>
 
  <div class="form-group">
    <label style=font-size:17px>status</label>
    <input type="text" class="form-control" name=txtstatus >
  </div>

  <div class="form-group">
    <label style=font-size:17px>complition date</label>
    <input type="date" class="form-control" name=txtcdate  min="2022-01-01" max="2025-12-31" >
  </div>
 
  <div align=center class="form-group">
  <div class=row>
	<div class=col-6>
  <button class="btn btn-primary btn-block">submit</button></div>
    <div class=col-6>
  <button class="btn btn-danger btn-block">Cancel</button></div>
  </div>

</div>
</form>

			</div>
			<div class="col-6 my-4">
			<?php 
			$result=mysqli_query($con,"select * from task");
							echo"<table border=1 class=table>
							<tr><th>Task</th><th>Type</th><th>Detail</th><th>Status</th><th>Date of Completion</th><tr>";
						 
							while($row=mysqli_fetch_array($result))
							{
								echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td><a href=deleteRec.php?rl=$row[0]>DELETE
									 <a href=updateRec.php?rl=$row[0]>Update</a></td></tr>";
							
							}
							
							if($_SERVER['REQUEST_METHOD']=='POST')
				{
					$_task=$_POST['txttask'];
					$_type=$_POST['txttype'];
					$_detail=$_POST['txtdetail'];
					$_status=$_POST['txtstatus'];
					$_comple=$_POST['txtcdate'];
					
					
					$x=mysqli_query($con,"insert into task (task,type,detail,status,cdate) values ('$_task','$_type','$_detail','$_status','$_comple')");
					if($x>0)
					{	
						echo "<script> alert('Task Noted') ;
								</script>";
								
								
					}
				}
			?>
			</div>
  </body>
</html>