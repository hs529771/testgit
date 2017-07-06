<html>
<head>
<title>fetch Data</title>
<body>
<h1>Login form </h1>
<?php
$fname=$_POST['f_name'];
$conn=mysqli_connect('localhost','root','','mydb') or die("connection failed: " .mysqli_connect_error());
$sql="SELECT * FROM login WHERE fname='$fname'";

$result = mysqli_query($conn,$sql)or die ("Error querying the db");
$row = mysqli_fetch_array($result);
if(isset($row)) {
	echo"valid user!!";
?>
<form action="open.php" method="post">
    <h3>Sign Up Form:</h3>
    <input class="input" type="text" name="firstname" value="<?php echo $row['fname'];?>">
    <input class="input" type="text" name="lastname" value="<?php echo $row['lname'];?>">
    <br><br>
    <input class="input2" type="text" name="Email" value="<?php echo $row['email'];?>"><br><br>
    <input class="input2" type="password" name="password" value="<?php echo $row['password'];?>"><br><br>
    <?php 
} 
else {
	echo"invalid";
}
$sql = "UPDATE login SET lname='Doe' WHERE fname= Harjeet";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
?>
</form>
</body>
</head>
</html>



</body>