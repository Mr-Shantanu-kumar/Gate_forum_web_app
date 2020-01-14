 <?php

session_start();
if (!isset($_SESSION['username'])) {

    header('location:index.html');
}
?>

 <?php
include 'database.php';
        $name = $_SESSION['username'];
        $newmail = $_POST['mail'];

        $sql=mysqli_query($conn,"UPDATE signin SET email = '$newmail' WHERE username='$name'");
        if($sql)
        {$message = "Your email has been changed successfully.";
echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>location.href='profile.php'</script>";
       }
       
?>
