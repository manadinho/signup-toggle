<!DOCTYPE html>
<html>
	<head>  
           <title>Webstech Tutorial | Simple Login System</title>  
		   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
     </head>  
<body>
	
	<center>
			<div class="col-md-4"></div>
			<div class="col-md-4 jumbotron" style="margin-top:50px;">
				<h3 style="text-align:center"><b>Login System</h3><br>
				<form method="post">
					<input type="text" name="user" autofocus class="form-control" placeholder="User Name"><br>
					<input type="text" name="pass" class="form-control" placeholder="Password"><br>
					<input type="submit" class="btn btn-info" name="submit" value="Login">
				</form>	
			</div>
			<div class="col-md-4"></div>
	</center>	
</body>
</html>
<?php 
	$connection = mysql_connect("localhost","root","admin");
	mysql_select_db("testing",$connection);
	if(isset($_POST['submit'])){
		$name = $_POST['user'];
		$pass = $_POST['pass'];
		$query = mysql_query("select * from login where name='$name' and password='$pass'");
		if(mysql_num_rows($query)>0){
			session_start();
			$_SESSION["user"] = $name;
			header('location:welcome.php');
		}
		else{
			echo "<script>alert('User Name or Password is In correct')</script>";
		}
	}
?>
