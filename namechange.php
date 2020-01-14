 <?php

session_start();
if (!isset($_SESSION['username'])) {

    header('location:index.html');
}
?>

 <?php
include 'database.php';
        $name = $_SESSION['username'];
        $newname = $_POST['nm'];

        $sql=mysqli_query($conn,"UPDATE signin SET name = '$newname' WHERE username='$name'");
        if($sql)
        {$message = "Your name has been changed successfully";
echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>location.href='profile.php'</script>";
       }
       
?>
