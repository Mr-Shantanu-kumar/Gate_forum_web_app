<?php

session_start();
if (!isset($_SESSION['username'])) {

    header('location:index.html');
}
?>

<?php
include 'database.php';
$name = $_SESSION['username'];
$pass = $_POST['pass'];

$sql = "INSERT INTO signin (username,password)
VALUES ('$name', '$pass')";

$sql = "SELECT * FROM signin WHERE username = '$name' && password = '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
        while($row = $result->fetch_assoc()) {

	$message = $row["security"];
echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>location.href='setting.php'</script>";} 
else {
	$message = "Your PASSWORD is wrong";
echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>location.href='setting.php'</script>";
	//echo "incorrect information";
}

?>
