<?php
	session_start();
	if(!$_SESSION['user']){
		header('location:login.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>  
           <title>Webstech Tutorial | welcome</title>  
		   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
     </head>  
<body>
	
	<center>
		<h3 style="text-align:center"><b>WELCOME</h3><br>
		<h5 style="text-align:center"><b>Cong! Login Successfully</h5><br>
		<form method="post">
			<input type="submit" name="logout" value="LOGOUT" class="btn btn-danger">
		</form>	
	</center>	
</body>
</html>
<?php
	if(isset($_POST['logout'])){
		unset($_SESSION['user']);
		header('location:login.php');
	}
?>
