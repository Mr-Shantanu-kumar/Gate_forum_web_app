<?php

session_start();
if (!isset($_SESSION['username'])) {

    header('location:index.html');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>GATE FORUM</title>
        <link rel="stylesheet" type="text/css" href="profstyle.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body style="background-image: url(image/30-300619_kimi-no-nawa-wallpaper-iphone-source-your-name.png); background-repeat: no-repeat;background-size:cover;">
        <?php include 'nav.php'; ?>
    <div class="main">
        <div class="loginbox" style="background-image: url(image/HD-2560x1600-Wallpapers-Backgrounds-Download.jpg); opacity: 0.9; background-repeat: no-repeat;background-size:cover;">
            <br>
            <img src="image/dribbble.jpg" style="width: 150px; height: 150px; border-radius: 50%; position: absolute; left: 35%;"><br><br><br><br><br><br><br><br>
            <div style="padding-left: 50px; color: black;">
            <h3><span style="color: #c70000;">Username: </span><?php echo $_SESSION['username'] ?></h3>
             <?php
include 'database.php';
$u = $_SESSION['username'];
$sql = "SELECT * FROM signin WHERE username = '$u'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
        while($row = $result->fetch_assoc()) :?>
               <h3><span style="color: #c70000;">NAME: </span><?php echo $row["name"]; ?></h3>
               <h3><span style="color: #c70000;">EMAIL: </span><?php echo $row["email"]; ?></h3>
               <h3><span style="color: #c70000;">CONTACT NO: </span><?php echo $row["mobile"];?></h3>
           </div>
            <?php endwhile; ?>
            <div class="che" style="padding: 15px;">
                <button class="btn btn-Large btn-primary btn-block" style="color: black;position:absolute; bottom: 55px; width: 420px;" onclick="setting()">SETTINGS</button>
                <button class="btn btn-Large btn-primary btn-block" style="color: black;position:absolute; bottom: 10px; width: 420px" onclick="logout()">LOGOUT</button>
            </div>
        </div>
    </div>
    </body>
    <script>
        function setting()
    {
        window.location = "setting.php";
    }
    function logout()
    {
        window.location = "logout.php";
    }
</script>
</html>
