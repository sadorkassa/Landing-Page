<?php
include('connect.php');
?>
<?php

	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}
	
$find = mysql_query("select * from users");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Grade Information System</title>
	<link rel="stylesheet" media="screen" href="stylesS.css" >
	<script>
		function confirmDelete(delUrl) {
  			if (confirm("Are you sure you want to delete")) {
   				 document.location = delUrl;
 			 }
		}
	</script>
</head>
<body>
<table align="center">
		<tr>
			<td><button class="submit" type="submit"><a href="home.php">Home</a></button></td>
			<td><button class="submit" type="submit"><a href="find.php">Search</a></button></td>
			<td><button class="submit" type="submit"><a href="view.php">View Data</a></button></td>
			<?php
				if($_SESSION['valid']=='admin'){
			
				echo "<td><button class='submit' type='submit'><a href='add.php'>Add User</a></button></td>";
				echo "<td><button class='submit' type='submit'><a href='users.php'>View User</a></button></td>";
				}
				else{
					if(!defined('MyConst')){header('Location:home.php');}
				}
			?>
			<td><button class="submit" type="submit"><a href="logout.php">Logout</a></button></td>
	
		</tr>
</table>
<form class="contact_form" action="search.php" method="post" name="contact_form">
    <ul>
        <li>
             <h2>Search Results</h2>
             <span class="required_notification" color='black'>Following search matches our database</span>
        </li>	
	</li>
		<?php
			echo "<table border='1' width='100%'>";
			echo "<tr class='head'>";
				  echo "<th>User Name</th>";
				  echo "<th>Password</th>";
				  echo "<th>Action</th>";
				  echo "</tr>";
			while($row = mysql_fetch_array($find)){
				  echo "<tr class='t1'>";
				  echo "<td>".$row['username']."</td>";
				  echo "<td>".$row['password']."</td>";
			?>
				  <td>
					<a href="deleteuser.php?id=<?php echo $row['id'];?>" class='action' onclick="return confirm('Are you sure you want to delete?')">Delete</a>
				  </td>
			<?php
				  echo "</tr>";
 				
  			}
			echo "</table>";
		?>
	</li>
    </ul>

</form>
</body>
</html>
