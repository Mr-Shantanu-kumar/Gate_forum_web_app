 <?php

session_start();
if (!isset($_SESSION['username'])) {

    header('location:index.html');
}
?>

 <?php
include 'database.php';
        $name = $_SESSION['username'];
        $newcontact = $_POST['cont'];

        $sql=mysqli_query($conn,"UPDATE signin SET mobile = '$newcontact' WHERE username='$name'");
        if($sql)
        {$message = "Your contact number has been changed successfully.";
echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>location.href='profile.php'</script>";
       }
       
?>
