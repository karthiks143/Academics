<?php
$servername = "localhost";
$username = "root";
$password = "arun";
$db = "medical";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
?>
<html>
<body>
	<center><h1><b>Your Bill</b></h1></center>
	<br /><br />
	<center>
		<table border="1">
			<?php
				//echo "hi";
				echo "<tr>
							<td><b>ID</b></td>
							<td><b>Medicine Name</b></td>
							<td><b>Quantity</b></td>
							<td><b>Rate</b></td>
							<td><b>Amount</b></td>
						</tr>";
				echo "<tr>";
				if($_POST)
				{
					$n=$_POST['med_name'];
					$q=$_POST['quan'];	
				}
				echo "<td>"."1001"."</td>";
				echo "<td>"."$n"."</td><td>"."$q</td>";
				$sql="SELECT * FROM medicine WHERE med_name='$n'";
				$result = $conn->query($sql);
				if($result->num_rows>0)
				{
					while($row = $result->fetch_assoc())
					{
						
						$rate=$row['price'];
						$avail=$row['availability'];
						echo "<td>".$rate."</td>";
						$amnt=$rate*$q;
						echo "<td>".$amnt."</td>";
						break;
					}
				} 
				echo "</tr>"
				
				
				/*
				$sql1="UPDATE medicine SET availability=$updated where med_name='$n'";
				$stmt=$conn->prepare($sql1);
				$stmt->execute();
				*/
			?>
		</table>
		<br /><br />
		
		<center><h1><b>Thank You ..! Visit Again</b></h1></center>
	</center>
	<?php
	$updated=$avail-$q;
	//echo "$updated";
	$sql1="UPDATE medicine SET availability=$updated where med_name='$n'";
	$stmt=$conn->prepare($sql1);
	$stmt->execute();
	//$abc="stock kaali";
	if($updated<=5)
	{
		echo '<script type="text/javascript">';
		echo 'alert("U had less amount of stock")';
		echo '</script>';		
	}
	?>	
	<center>Records updated successfully ...</center>
</body>
</html>
