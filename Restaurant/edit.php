<?php

	include('conn.php');
	if($_GET['id']){
		$id=$_GET['id'];
	} else {
		die;
	}
	

	if($_POST){
		
		$name=$_POST['name'];
		$price=$_POST['price'];
		$description=$_POST['description'];
		$cus_option=$_POST['cus_option'];
		
		

		$sql = "UPDATE product SET name='$name',price='$price',description='$description',cus_option='$cus_option' WHERE name='$id'";

		if ($conn->query($sql) === TRUE) {
		  echo "Record updated successfully";
		  header("Location:./addproduct.php");
		} else {
		  echo "Error updating record: " . $conn->error;
		}
	}

	$query=mysqli_query($conn,"select * from `product` where name='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="edit.php?id=<?php echo $id; ?>">
		
		<label>name:</label><input type="text" value="<?php echo $row['name']; ?>" name="name"><br><br>
		<label>price:</label><input type="text" value="<?php echo $row['price']; ?>" name="price"><br><br>
		<label>description:</label><input type="text" value="<?php echo $row['description']; ?>" name="description"><br><br>
		<label>cus_option:</label><input type="text" value="<?php echo $row['cus_option']; ?>" name="cus_option"><br><br>
		
		<input type="submit" name="submit"><br><br>
		<a href="addproduct.php.">Back</a>
	</form>
</body>
</html>