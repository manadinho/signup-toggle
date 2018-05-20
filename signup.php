<!DOCTYPE html>
<html>
	<head>  
           <title>Webstech Tutorial | Toggle Sign Up </title>  
		   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
		   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
     </head>  
<body>
	
	<center>
			<div class="col-md-4"></div>
			
			<div class="col-md-4" style="margin-top:50px">
			<h2>Sign-Up Page </h2>
			<button class="btn btn-success" id="btn_show">Show</button>
				<div class="col-md-12 jumbotron" id="hidden_area" style="margin-top:50px;display:none">
					<h3 style="text-align:center"><b>SignUp</h3><br>
					<form method="post">
						<input type="text" required name="fName" autofocus class="form-control" placeholder="First Name"><br>
						<input type="text" required name="sName" class="form-control" placeholder="Second Name"><br>
						<select name="gender" required class="form-control">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select><br>
						<input type="email" required name="email" class="form-control" placeholder="Your Email"><br>
						<input type="text" required name="pass" class="form-control" placeholder="Password"><br>
						<input type="submit" class="btn btn-info" name="submit" value="SignUp">
					</form>	
				</div>	
			</div>
			
			<div class="col-md-4"></div>
	</center>	
</body>
</html>
<script>
	$(document).ready(function(){
		var check = 0;
		$(document).on('click','#btn_show', function(){
			if(check==0){
				$('#hidden_area').slideDown();
				check = 1;
				$(this).text("Hide");
			}
			else{
				$('#hidden_area').slideUp();
				check = 0;
				$(this).text("show");
			}
		});
	});
</script>
<?php 
	$connection = mysql_connect("localhost","root","");
	mysql_select_db("testing",$connection);
	if(isset($_POST['submit'])){
		$fName = $_POST['fName'];
		$sName = $_POST['sName'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$query = mysql_query("insert into users(fName,sName,gender,email,password)
		values('$fName','$sName','$gender','$email','$pass')");
		if($query==true){
			header('location:success.php');
		}
		else{
			echo "<script>alert('User Name or Password is In correct')</script>";
		}
	}
?>
