
<!DOCTYPE html>
<html>
	<head>  
           <title>Webstech Tutorial | Success</title>  
		   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
     </head>  
<body>
	
	<center>
		<h3 style="text-align:center"><b>All Users</h3><br>
		<h5 style="text-align:center"><b>Cong! Signup Successfully</h5><br>
		<form method="post">
		</form>	
		<table class="table table-striped">
			<tr>
				<th>First Name</th>
				<th>Second Name</th>
				<th>Gender</th>
				<th>Email Address</th>
			</tr>
			<?php
				$connection = mysql_connect("localhost","root","");
				mysql_select_db("testing",$connection);
				$query = mysql_query("SELECT * FROM users");
				while($row = mysql_fetch_array($query)){
					
				
			?>
			<tr>
				<td><?php echo $row['fName']; ?></td>
				<td><?php echo $row['sName']; ?></td>
				<td><?php echo $row['gender']; ?></td>
				<td><?php echo $row['email']; ?></td>
			</tr>
				<?php }?>
		</table>
	</center>	
</body>
</html>
